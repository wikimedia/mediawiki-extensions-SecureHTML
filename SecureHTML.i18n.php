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
