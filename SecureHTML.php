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
	'url' => 'http://www.mediawiki.org/wiki/Extension:Secure_HTML',
	'descriptionmsg' => 'securehtml-desc',
	'version' => '2.1',
);

# Default configuration globals
if ( !isset( $wgSecureHTMLSecrets ) ) {
	$wgSecureHTMLSecrets = array();
}
if ( !isset( $wgSecureHTMLSpecialRight ) ) {
	$wgSecureHTMLSpecialRight = 'edit';
}

$dir = dirname( __FILE__ ) . '/';

# Define Special page
$wgAutoloadClasses['SpecialSecureHTML'] = $dir . 'SpecialSecureHTML.php';
$wgSpecialPages['SecureHTML'] = 'SpecialSecureHTML';
$wgSpecialPageGroups['SecureHTML'] = 'wiki';

# Define internationalizations
$wgExtensionMessagesFiles['SecureHTML'] = $dir . 'SecureHTML.i18n.php';
$wgExtensionMessagesFiles['SecureHTMLAlias'] = $dir . 'SecureHTML.alias.php';

# Define extension hooks
$wgExtensionFunctions[] = "secureHTMLSetup";

function secureHTMLSetup() {
	global $wgParser;
	$wgParser->setHook( "shtml", "secureHTMLRender" );
}

function secureHTMLRender( $input, $argv ) {
	global $wgSecureHTMLSecrets;
	global $shtml_keys;

	if ( $argv['version'] == '2' ) {
		# If the array is empty, there is no possible way this will work.
		if ( count( $wgSecureHTMLSecrets ) == 0 ) {
			return( '<strong><em>' . wfMessage( 'securehtml-nokeys' ) . '</em></strong>' . "\n" );
		}

		# Get a list of key names.
		$keynames = array_keys( $wgSecureHTMLSecrets );

		# If the desired key name is not available, assume the first one.
		$keyname = ( $argv['keyname'] ? $argv['keyname'] : $keynames[0] );

		# The key secret.
		$keysecret = $wgSecureHTMLSecrets[$keyname];

		# Compute a test hash.
		$testhash = hash_hmac( 'sha256', $input, $keysecret );
	} elseif ( !$argv['version'] || ( $argv['version'] == '1' ) ) {
		# Version 1 is deprecated and will be removed at a future date.
		# Please be sure to migrate Version 1 snippets to Version 2.

		# If the array is empty, there is no possible way this will work.
		if ( count( $shtml_keys ) == 0 ) {
			return( '<strong><em>' . wfMessage( 'securehtml-nokeys' ) . '</em></strong>' . "\n" );
		}

		# Get a list of key names.
		$keynames = array_keys( $shtml_keys );

		# If the desired key name is not available, assume the first one.
		$keyname = ( $argv['keyname'] ? $argv['keyname'] : $keynames[0] );

		# The key secret.
		$keysecret = $shtml_keys[$keyname];

		# Compute a test hash.
		$testhash = md5( $keysecret . $input );
	} else {
		return( '<strong><em>' . wfMessage( 'securehtml-invalidversion' ) . '</em></strong>' . "\n" );
	}

	# If the test hash matches the supplied hash, return the raw HTML.  Otherwise, error.
	if ( $testhash == $argv['hash'] ) {
		return( $input );
	} else {
		return( '<strong><em>' . wfMessage( 'securehtml-invalidhash' ) . '</em></strong>' . "\n" );
	}

}
