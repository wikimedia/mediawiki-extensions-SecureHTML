<?php
/** \file
* \brief Contains setup code for the Secure HTML Extension.
*/

/**
 * Secure HTML Extension for MediaWiki
 *
 * Copyright (C) Ryan Finnie
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 */

# Not a valid entry point, skip unless MEDIAWIKI is defined
if ( !defined( 'MEDIAWIKI' ) ) {
	echo <<<EOT
To install my extension, put the following line in LocalSettings.php:
require_once( "$IP/extensions/SecureHTML/SecureHTML.php" );
EOT;
	exit( 1 );
}

$wgExtensionCredits['parserhook'][] = $wgExtensionCredits['specialpage'][] = array(
	'path' => __FILE__,
	'name' => 'Secure HTML',
	'author' => 'Ryan Finnie',
	'url' => 'https://www.mediawiki.org/wiki/Extension:Secure_HTML',
	'descriptionmsg' => 'securehtml-desc',
	'version' => '2.4.1',
);

# Default configuration globals
if ( !isset( $wgSecureHTMLSecrets ) ) {
	$wgSecureHTMLSecrets = array();
}
if ( !isset( $wgSecureHTMLSpecialRight ) ) {
	$wgSecureHTMLSpecialRight = 'edit';
}
if ( !isset( $wgSecureHTMLSpecialDropdown ) ) {
	$wgSecureHTMLSpecialDropdown = True;
}
if ( !isset( $wgSecureHTMLTag ) ) {
	$wgSecureHTMLTag = 'shtml';
}

$dir = dirname( __FILE__ ) . '/';

# Define Special page
$wgAutoloadClasses['SpecialSecureHTML'] = $dir . 'SpecialSecureHTML.php';
$wgSpecialPages['SecureHTML'] = 'SpecialSecureHTML';

# Define internationalizations
$wgMessagesDirs['SecureHTML'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['SecureHTML'] = $dir . 'SecureHTML.i18n.php';
$wgExtensionMessagesFiles['SecureHTMLAlias'] = $dir . 'SecureHTML.alias.php';

# Define extension hooks
$wgExtensionFunctions[] = "secureHTMLSetup";

function secureHTMLSetup() {
	global $wgParser;
	global $wgSecureHTMLTag;
	$wgParser->setHook( $wgSecureHTMLTag, "secureHTMLRender" );
}

function secureHTMLRender( $input, $argv ) {
	global $wgSecureHTMLSecrets;

	# The hash attribute is required.
	if ( !isset( $argv['hash'] ) ) {
		return( Html::rawElement( 'div', array( 'class' => 'error' ), wfMessage( 'securehtml-hashrequired' ) ) );
	}

	# If the array is empty, there is no possible way this will work.
	if ( count( $wgSecureHTMLSecrets ) == 0 ) {
		return( Html::rawElement( 'div', array( 'class' => 'error' ), wfMessage( 'securehtml-nokeys' ) ) );
	}

	# Get a list of key names.
	$keynames = array_keys( $wgSecureHTMLSecrets );

	# If the desired key name is not available, assume the first one.
	$keyname = ( isset( $argv['keyname'] ) ? $argv['keyname'] : $keynames[0] );

	# Key secret configuration.
	$keyalgorithm = 'sha256';
	if ( !array_key_exists( $keyname, $wgSecureHTMLSecrets ) ) {
		# To avoid leaking the existence of a key name by unauthorized users,
		# perform a dummy HMAC SHA256 (mitigate timing attacks), then
		# respond with "invalid hash", instead of something like "invalid key
		# name".
		$testhash = hash_hmac( 'sha256', $input, '' );
		return( Html::rawElement( 'div', array( 'class' => 'error' ), wfMessage( 'securehtml-invalidhash' ) ) );
	}
	if ( is_array( $wgSecureHTMLSecrets[$keyname] ) ) {
		if ( array_key_exists( 'secret', $wgSecureHTMLSecrets[$keyname] ) ) {
			$keysecret = $wgSecureHTMLSecrets[$keyname]['secret'];
		} else {
			return( Html::rawElement( 'div', array( 'class' => 'error' ), wfMessage( 'securehtml-invalidhash' ) ) );
		}
		if ( array_key_exists( 'algorithm', $wgSecureHTMLSecrets[$keyname] ) ) {
			$keyalgorithm = $wgSecureHTMLSecrets[$keyname]['algorithm'];
		}
	} else {
		$keysecret = $wgSecureHTMLSecrets[$keyname];
	}

	# Compute a test hash.
	$testhash = hash_hmac( $keyalgorithm, $input, $keysecret );

	# If the test hash matches the supplied hash, return the raw HTML.  Otherwise, error.
	if ( $testhash == $argv['hash'] ) {
		return( array( $input, 'markerType' => 'nowiki' ) );
	} else {
		return( Html::rawElement( 'div', array( 'class' => 'error' ), wfMessage( 'securehtml-invalidhash' ) ) );
	}

}
