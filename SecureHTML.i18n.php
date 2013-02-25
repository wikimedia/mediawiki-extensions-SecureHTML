<?php
/**
 * Internationalisation for SecureHTML
 *
 * @file
 * @ingroup Extensions
 */
$messages = array();

/** English (English) */
$messages['en'] = array(
	'securehtml' => 'Secure HTML',
	'securehtml-desc' => 'Lets you include arbitrary HTML in an authorized and secure way',
	'securehtml-nokeys' => 'Error: wgSecureHTMLSecrets is not populated',
	'securehtml-legacykeys' => 'Warning: wgSecureHTMLSecrets (Version 2) is not populated, but shtml_keys (Version 1) is.  Please convert to Version 2 hashes as soon as possible, as Version 1 is deprecated.',
	'securehtml-invalidhash' => 'Error: Invalid hash',
	'securehtml-invalidversion' => 'Error: Invalid version',
	'securehtml-input-title' => 'HTML Input',
	'securehtml-generatedoutput-title' => 'Generated Output',
	'securehtml-renderedhhtml-title' => 'Rendered HTML',
	'securehtml-form-version' => 'Hash version',
	'securehtml-form-deprecated' => 'deprecated',
	'securehtml-form-keyname' => 'Key name (optional)',
	'securehtml-form-keysecret' => 'Key secret',
	'securehtml-form-html' => 'Raw HTML',
	'securehtml-form-submit' => 'Submit',
	'securehtml-inputinstructions' => 'Enter a key name (optional), key secret, and desired raw HTML.  If no key name is specified, the first key in wgSecureHTMLSecrets will be assumed.',
	'securehtml-outputinstructions' => 'Copy the code above EXACTLY and paste it into the wiki editor.  If the generated code does not work, try removing all linefeeds from the input HTML and re-generate.',
);

/** Message documentation (Message documentation) */
$messages['qqq'] = array(
	'securehtml' => 'The title of Special:SecureHTML; also seen in Special:SpecialPages.',
	'securehtml-desc' => 'Special:Version description of the extension.',
	'securehtml-nokeys' => 'Rendered by the shtml tag when the extension is not configured.  "wgSecureHTMLSecrets" is a global variable and should not be translated.',
	'securehtml-legacykeys' => 'Special:SecureHTML: Warning message, displayed when the user is using a legacy configuration.  "wgSecureHTMLSecrets" is a global variable and should not be translated.',
	'securehtml-invalidhash' => 'Rendered by the shtml tag when an invalid hash is calculated.',
	'securehtml-invalidversion' => 'Rendered by the shtml tag when an invalid version is given.',
	'securehtml-input-title' => 'Special:SecureHTML: The title sub-header for the HTML input form section.',
	'securehtml-generatedoutput-title' => 'Special:SecureHTML: The title sub-header for the calculated code output of the user input.',
	'securehtml-renderedhhtml-title' => 'Special:SecureHTML: The title sub-header for the rendered output of the user input.',
	'securehtml-form-version' => 'Special:SecureHTML: Input form item title for the hash key version.',
	'securehtml-form-deprecated' => 'Special:SecureHTML: Applied as a short descriptive warning after elements in the input form which are deprecated.  For example, "1 (deprecated)" in the version dropdown menu, or "oldkeyname (deprecated)" in the key name dropdown menu.',
	'securehtml-form-keyname' => 'Special:SecureHTML: Input form item title for the hash key name.',
	'securehtml-form-keysecret' => 'Special:SecureHTML: Input form item title for the hash key secret.',
	'securehtml-form-html' => 'Special:SecureHTML: Input form item title for the HTML input box.',
	'securehtml-form-submit' => 'Special:SecureHTML: Input form submit button text.',
	'securehtml-inputinstructions' => 'Special:SecureHTML: Instructions for filling in the input form.  "wgSecureHTMLSecrets" is a global variable and should not be translated.',
	'securehtml-outputinstructions' => 'Special:SecureHTML: Instructions using the output returned by filling in the input form.',
);
