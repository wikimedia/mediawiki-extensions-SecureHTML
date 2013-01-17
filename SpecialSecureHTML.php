<?php
class SpecialSecureHTML extends SpecialPage {
	function __construct() {
		global $wgSecureHTMLSpecialRight;

		parent::__construct( 'SecureHTML', $wgSecureHTMLSpecialRight );
	}

	function execute( $par ) {
		global $wgOut;
		global $wgRequest;
		global $wgUser;
		global $wgSecureHTMLSecrets;
		global $shtml_keys;

		if ( !$this->userCanExecute( $wgUser ) ) {
			$this->displayRestrictionError();
			return;
		}

		$this->setHeaders();

		if ( ( count( $wgSecureHTMLSecrets ) == 0 ) && ( count( $shtml_keys ) == 0 ) ) {
			$wgOut->addWikiText( wfMessage( 'securehtml-nokeys' ) );
			return;
		}

		if ( count( $wgSecureHTMLSecrets ) == 0 ) {
			$wgOut->addWikiText( wfMessage( 'securehtml-legacykeys' ) );
		}

		if ( $wgRequest->getText( 'keysecret' ) && $wgRequest->getText( 'html' ) ) {
			$version = $wgRequest->getText( 'version' );
			$keyname = $wgRequest->getText( 'keyname' );
			$keysecret = $wgRequest->getText( 'keysecret' );
			$html = str_replace( "\r\n", "\n", $wgRequest->getText( 'html' ) );
			if ( $version == '2' ) {
				$output = '<shtml version="2" ' . ( $keyname ? 'keyname="' . htmlspecialchars( $keyname ) . '" ' : '' ) . 'hash="' . hash_hmac( 'sha256', $html, $keysecret ) . '">';
				$output .= $html;
				$output .= '</shtml>';
			} else {
				$output = '<shtml ' . ( $keyname ? 'keyname="' . htmlspecialchars( $keyname ) . '" ' : '' ) . 'hash="' . md5( $keysecret . $html ) . '">';
				$output .= $html;
				$output .= '</shtml>';
			}
			$wgOut->addWikiText( '== ' . wfMessage( 'securehtml-generatedoutput-title' ) . ' ==' );
			$wgOut->addHTML( '<form><textarea style="width: 100%;" cols="60" rows="20" readonly>' . htmlspecialchars( $output ) . '</textarea></form>' . "\n" );
			$wgOut->addWikiText( wfMessage( 'securehtml-outputinstructions' ) );
			$wgOut->addWikiText( '== ' . wfMessage( 'securehtml-renderedhhtml-title' ) . ' ==' );
			$wgOut->addWikiText( $output );
		} else {
			$wgOut->addWikiText( '== ' . wfMessage( 'securehtml-input-title' ) . ' ==' );
			$wgOut->addWikiText( wfMessage( 'securehtml-inputinstructions' ) );
			$wgOut->addHTML( '<form method="post">' . "\n" );
			$wgOut->addHTML( '<table>' . "\n" );
			if ( count( $shtml_keys ) > 0 ) {
				$wgOut->addHTML( '<tr><td><strong>' . wfMessage( 'securehtml-form-version' ) . ':</strong></td><td><select name="version"><option value="1">1 (' . wfMessage( 'securehtml-form-deprecated' ) . ')</option><option value="2" selected="selected">2</option></select></td></tr>' . "\n" );
			} else {
				$wgOut->addHTML( '<input type="hidden" name="version" value="2" />' . "\n" );
			}
			$wgOut->addHTML( '<tr><td><strong>' . wfMessage( 'securehtml-form-keyname' ) . ':</strong></td><td><select name="keyname"><option value=""></option>' );
			if ( is_array( $wgSecureHTMLSecrets ) ) {
				foreach ( array_keys( $wgSecureHTMLSecrets ) as $keyname ) {
					$wgOut->addHTML( '<option value="' . htmlspecialchars( $keyname ) . '">' . htmlspecialchars( $keyname ) . '</option>' );
				}
			}
			if ( is_array( $shtml_keys ) ) {
				foreach ( array_keys( $shtml_keys ) as $keyname ) {
					$wgOut->addHTML( '<option value="' . htmlspecialchars( $keyname ) . '">' . htmlspecialchars( $keyname ) . ' (' . wfMessage( 'securehtml-form-deprecated' ) . ')</option>' );
				}
			}
			$wgOut->addHTML( '</select></td></tr>' . "\n" );
			$wgOut->addHTML( '<tr><td><strong>' . wfMessage( 'securehtml-form-keysecret' ) . ':</strong></td><td><input type="password" name="keysecret" size="20"></td></tr>' . "\n" );
			$wgOut->addHTML( '</table>' . "\n" );
			$wgOut->addHTML( '<strong>' . wfMessage( 'securehtml-form-html' ) . ':</strong><br/><textarea style="width: 100%;" name="html" cols="60" rows="20"></textarea><br/>' . "\n" );
			$wgOut->addHTML( '<input type="submit" value="' . wfMessage( 'securehtml-form-submit' ) . '"><br/>' . "\n" );
			$wgOut->addHTML( '</form>' . "\n" );
		}
	}

}
