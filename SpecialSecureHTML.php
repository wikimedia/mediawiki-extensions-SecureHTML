<?php
class SpecialSecureHTML extends SpecialPage {
	function __construct() {
		global $wgSecureHTMLSpecialRight;

		parent::__construct( 'SecureHTML', $wgSecureHTMLSpecialRight );
	}

	function execute( $par ) {
		global $wgSecureHTMLSecrets;
		global $wgSecureHTMLTag;
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

		$version = $request->getText( 'wpsecurehtmlversion' );
		if ( ! $version ) { $version = '2'; }
		$keyname = $request->getText( 'wpsecurehtmlkeyname' );
		$keysecret = $request->getText( 'wpsecurehtmlkeysecret' );
		$html = $request->getText( 'wpsecurehtmlraw' );
		$html_lf = str_replace( "\r\n", "\n", $html );

		if ( $keysecret && $html ) {
			if ( $version == '2' ) {
				$generated = '<' . $wgSecureHTMLTag . ' version="2" ' . ( $keyname ? 'keyname="' . htmlspecialchars( $keyname ) . '" ' : '' ) . 'hash="' . hash_hmac( 'sha256', $html_lf, $keysecret ) . '">';
				$generated .= $html_lf;
				$generated .= '</' . $wgSecureHTMLTag . '>';
			} else {
				$generated = '<' . $wgSecureHTMLTag . ' ' . ( $keyname ? 'keyname="' . htmlspecialchars( $keyname ) . '" ' : '' ) . 'hash="' . md5( $keysecret . $html_lf ) . '">';
				$generated .= $html_lf;
				$generated .= '</' . $wgSecureHTMLTag . '>';
			}
			$output->addWikiText( '== ' . wfMessage( 'securehtml-generatedoutput-title' ) . ' ==' );
			$params = array(
				'cols' => $user->getOption( 'cols' ),
				'rows' => $user->getOption( 'rows' ),
				'readonly' => 'readonly',
			);
			$output->addHTML( Html::element( 'textarea', $params, $generated ) );
			$output->addWikiText( wfMessage( 'securehtml-outputinstructions' ) );
			$output->addWikiText( '== ' . wfMessage( 'securehtml-renderedhhtml-title' ) . ' ==' );
			$output->addWikiText( $generated );
		}

		$output->addWikiText( '== ' . wfMessage( 'securehtml-input-title' ) . ' ==' );
		$output->addWikiText( wfMessage( 'securehtml-inputinstructions' ) );

		$formDescriptor = array();
		if ( count( $shtml_keys ) > 0 ) {
			$formDescriptor['securehtmlversion'] = array(
				'type' => 'select',
				'label-message' => 'securehtml-form-version',
				'options' => array(
					'2' => '2',
					'1 (' . wfMessage( 'securehtml-form-deprecated' ) . ')' => '1',
				),
				'required' => true,
			);
		} else {
			$formDescriptor['securehtmlversion'] = array(
				'type' => 'hidden',
				'label' => '2',
			);
		}
		$keyname_labels = array(
			'' => '',
		);
		if ( is_array( $wgSecureHTMLSecrets ) ) {
			foreach ( array_keys( $wgSecureHTMLSecrets ) as $skeyname ) {
				$keyname_labels[$skeyname] = $skeyname;
			}
		}
		if ( is_array( $shtml_keys ) ) {
			foreach ( array_keys( $shtml_keys ) as $skeyname ) {
				$keyname_labels[$skeyname . ' (' . wfMessage( 'securehtml-form-deprecated' ) . ')'] = $skeyname;
			}
		}
		$formDescriptor['securehtmlkeyname'] = array(
			'type' => 'select',
			'label-message' => 'securehtml-form-keyname',
			'options' => $keyname_labels,
		);
		$formDescriptor['securehtmlkeysecret'] = array(
			'type' => 'password',
			'label-message' => 'securehtml-form-keysecret',
			'required' => true,
		);
		$formDescriptor['securehtmlraw'] = array(
			'type' => 'textarea',
			'label-message' => 'securehtml-form-html',
			'id' => 'wpSecureHTMLRawHTML',
			'cols' => $user->getIntOption( 'cols' ),
			'rows' => $user->getIntOption( 'rows' ),
			'required' => true,
		);

		$htmlForm = new HTMLForm( $formDescriptor, $this->getContext(), 'securehtml' );
		$htmlForm->setSubmitCallback( array( 'SpecialSecureHTML', 'trySubmit' ) );
		$htmlForm->show();
	}

	function trySubmit( $formData ) {
		# Always display the form.
		return false;
	}

	protected function getGroupName() {
		return 'wiki';
	}
}
