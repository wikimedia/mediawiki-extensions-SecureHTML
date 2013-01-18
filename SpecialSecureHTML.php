<?php
class SpecialSecureHTML extends SpecialPage {
	function __construct() {
		global $wgSecureHTMLSpecialRight;

		parent::__construct( 'SecureHTML', $wgSecureHTMLSpecialRight );
	}

	function execute( $par ) {
		global $wgSecureHTMLSecrets;
		global $shtml_keys;

		$request = $this->getRequest();
		$output = $this->getOutput();
		$user = $this->getUser();

		if ( !$this->userCanExecute( $user ) ) {
			$this->displayRestrictionError();
			return;
		}

		$this->setHeaders();

		if ( ( count( $wgSecureHTMLSecrets ) == 0 ) && ( count( $shtml_keys ) == 0 ) ) {
			$output->addWikiText( wfMessage( 'securehtml-nokeys' ) );
			return;
		}

		if ( count( $wgSecureHTMLSecrets ) == 0 ) {
			$output->addWikiText( wfMessage( 'securehtml-legacykeys' ) );
		}

		$version = $request->getText( 'version' );
		if ( ! $version ) { $version = '2'; }
		$keyname = $request->getText( 'keyname' );
		$keysecret = $request->getText( 'keysecret' );
		$html = str_replace( "\r\n", "\n", $request->getText( 'html' ) );

		if ( $keysecret && $html ) {
			if ( $version == '2' ) {
				$generated = '<shtml version="2" ' . ( $keyname ? 'keyname="' . htmlspecialchars( $keyname ) . '" ' : '' ) . 'hash="' . hash_hmac( 'sha256', $html, $keysecret ) . '">';
				$generated .= $html;
				$generated .= '</shtml>';
			} else {
				$generated = '<shtml ' . ( $keyname ? 'keyname="' . htmlspecialchars( $keyname ) . '" ' : '' ) . 'hash="' . md5( $keysecret . $html ) . '">';
				$generated .= $html;
				$generated .= '</shtml>';
			}
			$output->addWikiText( '== ' . wfMessage( 'securehtml-generatedoutput-title' ) . ' ==' );
			$output->addHTML( '<form><textarea style="width: 100%;" cols="60" rows="20" readonly>' . htmlspecialchars( $generated ) . '</textarea></form>' . "\n" );
			$output->addWikiText( wfMessage( 'securehtml-outputinstructions' ) );
			$output->addWikiText( '== ' . wfMessage( 'securehtml-renderedhhtml-title' ) . ' ==' );
			$output->addWikiText( $generated );
		}

		$output->addWikiText( '== ' . wfMessage( 'securehtml-input-title' ) . ' ==' );
		$output->addWikiText( wfMessage( 'securehtml-inputinstructions' ) );
		$output->addHTML( '<form method="post">' . "\n" );
		$output->addHTML( '<table>' . "\n" );
		if ( count( $shtml_keys ) > 0 ) {
			$output->addHTML( '<tr><td><strong>' . wfMessage( 'securehtml-form-version' ) . ':</strong></td><td><select name="version">' );
			$sversions = array(
				'1' => '1 (' . wfMessage( 'securehtml-form-deprecated' ) . ')',
				'2' => '2',
			);
			foreach ( $sversions as $sversion => $sversionlabel ) {
				$selected = ( $sversion == $version ? ' selected' : '' );
				$output->addHTML( '><option value="' . $sversion . '"' . $selected . '>' . $sversionlabel . '</option>' );
			}
			$output->addHTML( '</select></td></tr>' . "\n" );
		} else {
			$output->addHTML( '<input type="hidden" name="version" value="2" />' . "\n" );
		}
		$output->addHTML( '<tr><td><strong>' . wfMessage( 'securehtml-form-keyname' ) . ':</strong></td><td><select name="keyname"><option value=""></option>' );
		if ( is_array( $wgSecureHTMLSecrets ) ) {
			foreach ( array_keys( $wgSecureHTMLSecrets ) as $skeyname ) {
				$selected = ( ( ( $version == '2' ) && ( $skeyname == $keyname ) ) ? ' selected' : '' );
				$output->addHTML( '<option value="' . htmlspecialchars( $skeyname ) . '"' . $selected . '>' . htmlspecialchars( $skeyname ) . '</option>' );
			}
		}
		if ( is_array( $shtml_keys ) ) {
			foreach ( array_keys( $shtml_keys ) as $skeyname ) {
				$selected = ( ( ( $version == '1' ) && ( $skeyname == $keyname ) ) ? ' selected' : '' );
				$output->addHTML( '<option value="' . htmlspecialchars( $skeyname ) . '"' . $selected . '>' . htmlspecialchars( $skeyname ) . ' (' . wfMessage( 'securehtml-form-deprecated' ) . ')</option>' );
			}
		}
		$output->addHTML( '</select></td></tr>' . "\n" );
		$output->addHTML( '<tr><td><strong>' . wfMessage( 'securehtml-form-keysecret' ) . ':</strong></td><td><input type="password" name="keysecret" size="20"></td></tr>' . "\n" );
		$output->addHTML( '</table>' . "\n" );
		$output->addHTML( '<strong>' . wfMessage( 'securehtml-form-html' ) . ':</strong><br/><textarea style="width: 100%;" name="html" cols="60" rows="20">' . htmlspecialchars( $html ) . '</textarea><br/>' . "\n" );
		$output->addHTML( '<input type="submit" value="' . wfMessage( 'securehtml-form-submit' ) . '"><br/>' . "\n" );
		$output->addHTML( '</form>' . "\n" );
	}

}
