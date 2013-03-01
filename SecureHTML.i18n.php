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
	'securehtml-nokeys' => 'Error: <code>$wgSecureHTMLSecrets</code> is not populated.',
	'securehtml-legacykeys' => 'Warning: <code>$wgSecureHTMLSecrets</code> (version 2) is not populated, but <code>$shtml_keys</code> (version 1) is.
Please convert to version 2 hashes as soon as possible, as version 1 is deprecated.',
	'securehtml-invalidhash' => 'Error: Invalid hash.',
	'securehtml-invalidversion' => 'Error: Invalid version.',
	'securehtml-input-title' => 'HTML input',
	'securehtml-generatedoutput-title' => 'Generated output',
	'securehtml-renderedhhtml-title' => 'Rendered HTML',
	'securehtml-form-version' => 'Hash version',
	'securehtml-form-deprecated' => 'deprecated',
	'securehtml-form-keyname' => 'Key name (optional)',
	'securehtml-form-keysecret' => 'Key secret',
	'securehtml-form-html' => 'Raw HTML',
	'securehtml-form-submit' => 'Submit',
	'securehtml-inputinstructions' => 'Enter a key name (optional), key secret, and desired raw HTML.
If no key name is specified, the first key in <code>$wgSecureHTMLSecrets</code> will be assumed.',
	'securehtml-outputinstructions' => 'Copy the code above EXACTLY and paste it into the wiki editor.
If the generated code does not work, try removing all linefeeds from the input HTML and re-generate.',
);

/** Message documentation (Message documentation)
 * @author Shirayuki
 */
$messages['qqq'] = array(
	'securehtml' => 'The title of Special:SecureHTML; also seen in [[Special:SpecialPages]]',
	'securehtml-desc' => '{{desc|name=Secure HTML|url=http://www.mediawiki.org/wiki/Extension:SecureHTML}}',
	'securehtml-nokeys' => '{{doc-important|Do not translate "<code>$wgSecureHTMLSecrets</code>"; is a global variable.}}
Rendered by the shtml tag when the extension is not configured.',
	'securehtml-legacykeys' => '{{doc-important|Do not translate "<code>$wgSecureHTMLSecrets</code>"; is a global variable.}}
Special:SecureHTML: Warning message, displayed when the user is using a legacy configuration.

See also:
* {{msg-mw|Securehtml-form-deprecated}}',
	'securehtml-invalidhash' => 'Rendered by the shtml tag when an invalid hash is calculated.',
	'securehtml-invalidversion' => 'Rendered by the shtml tag when an invalid version is given.',
	'securehtml-input-title' => 'Special:SecureHTML: The title sub-header for the HTML input form section.',
	'securehtml-generatedoutput-title' => 'Special:SecureHTML: The title sub-header for the calculated code output of the user input.',
	'securehtml-renderedhhtml-title' => 'Special:SecureHTML: The title sub-header for the rendered output of the user input.',
	'securehtml-form-version' => 'Special:SecureHTML: Input form item title for the hash key version.',
	'securehtml-form-deprecated' => 'Special:SecureHTML: Applied as a short descriptive warning after elements in the input form which are deprecated.  For example, "1 (deprecated)" in the version dropdown menu, or "oldkeyname (deprecated)" in the key name dropdown menu.
{{Identical|Deprecated}}',
	'securehtml-form-keyname' => 'Special:SecureHTML: Input form item title for the hash key name.',
	'securehtml-form-keysecret' => 'Special:SecureHTML: Input form item title for the hash key secret.',
	'securehtml-form-html' => 'Special:SecureHTML: Input form item title for the HTML input box.',
	'securehtml-form-submit' => 'Special:SecureHTML: Input form submit button text.
{{Identical|Submit}}',
	'securehtml-inputinstructions' => 'Special:SecureHTML: Instructions for filling in the input form.  "wgSecureHTMLSecrets" is a global variable and should not be translated.',
	'securehtml-outputinstructions' => 'Special:SecureHTML: Instructions using the output returned by filling in the input form.',
);

/** German (Deutsch)
 * @author Metalhead64
 */
$messages['de'] = array(
	'securehtml' => 'Sicheres HTML',
	'securehtml-desc' => 'Ermöglicht den Einschluss von beliebigem HTML auf sichere Weise',
	'securehtml-nokeys' => 'Fehler: <code>$wgSecureHTMLSecrets</code> ist nicht eingetragen.',
	'securehtml-legacykeys' => 'Warnung: <code>$wgSecureHTMLSecrets</code> (Version 2) ist nicht eingetragen, aber <code>$shtml_keys</code> (Version 1) ist eingetragen.
Bitte so bald wie möglich zu Version-2-Hashes konvertieren, da Version 1 veraltet ist.',
	'securehtml-invalidhash' => 'Fehler: Ungültiger Hash.',
	'securehtml-invalidversion' => 'Fehler: Ungültige Version.',
	'securehtml-input-title' => 'HTML-Eingabe',
	'securehtml-generatedoutput-title' => 'Erzeugte Ausgabe',
	'securehtml-renderedhhtml-title' => 'Gerendertes HTML',
	'securehtml-form-version' => 'Hashversion',
	'securehtml-form-deprecated' => 'veraltet',
	'securehtml-form-keyname' => 'Schlüsselname (optional)',
	'securehtml-form-keysecret' => 'Schlüsselgeheimnis',
	'securehtml-form-html' => 'Rohes HTML',
	'securehtml-form-submit' => 'Übertragen',
	'securehtml-inputinstructions' => 'Gib einen Schlüsselnamen (optional), ein Schlüsselgeheimnis und das gewünschte Roh-HTML ein.
Falls kein Schlüsselname angegeben ist, wird der erste Schlüssel in <code>$wgSecureHTMLSecrets</code> angenommen.',
	'securehtml-outputinstructions' => 'Kopiere den oben stehenden Code GENAU und füge ihn in den Wiki-Editor ein.
Falls der erzeugte Code nicht funktioniert, versuche das Entfernen aller Zeilenvorschübe des Eingabe-HTML und versuche es erneut.',
);

/** French (français)
 * @author Gomoko
 */
$messages['fr'] = array(
	'securehtml' => 'HTML sécurisé',
	'securehtml-desc' => 'Vous permet d’inclure du code HTML arbitraire dans un cadre autorisé et sécurisé',
	'securehtml-nokeys' => 'Erreur: <code>$wgSecureHTMLSecrets</code> n’est pas renseigné.',
	'securehtml-legacykeys' => 'Avertissement: <code>$wgSecureHTMLSecrets</code> (version 2) n’est pas renseigné, mais <code>$shtml_keys</code> (version 1) l’est.
Veuillez faire la conversion vers les hachages de la version 2 dès que possible, car la version 1 est obsolète.',
	'securehtml-invalidhash' => 'Erreur: Hachage non valide.',
	'securehtml-invalidversion' => 'Erreur: Version non valide.',
	'securehtml-input-title' => 'Entrée HTML',
	'securehtml-generatedoutput-title' => 'Sortie générée',
	'securehtml-renderedhhtml-title' => 'HTML restitué',
	'securehtml-form-version' => 'Version de hachage',
	'securehtml-form-deprecated' => 'obsolète',
	'securehtml-form-keyname' => 'Nom de la clé (facultatif)',
	'securehtml-form-keysecret' => 'Clé secrète',
	'securehtml-form-html' => 'HTML brut',
	'securehtml-form-submit' => 'Envoyer',
	'securehtml-inputinstructions' => 'Entrez un nom de clé (facultatif), une clé secrète, et le HTML brut souhaité.
Si aucun nom de clé n’est spécifié, la première clé dans <code>$wgSecureHTMLSecrets</code> sera prise par défaut.',
	'securehtml-outputinstructions' => 'Copiez le code ci-dessous EXACTEMENT et collez-le dans l’éditeur wiki.
Si le code généré ne fonctionne pas, essayez de supprimer tous les retours à la ligne du HTML d’entrée et générez de nouveau.',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'securehtml' => 'セキュア HTML',
	'securehtml-desc' => '承認済みのセキュアな方法で任意の HTML を使用できるようにする',
	'securehtml-nokeys' => 'エラー: <code>$wgSecureHTMLSecrets</code> が設定されていません。',
	'securehtml-legacykeys' => '警告: <code>$wgSecureHTMLSecrets</code> (バージョン 2) が設定されていませんが、<code>$shtml_keys</code> (バージョン 1) が設定されています。
バージョン 1 は非推奨であるため、できるだけ早くバージョン 2 に変換してください。',
	'securehtml-invalidhash' => 'エラー: ハッシュが無効です。',
	'securehtml-invalidversion' => 'エラー: バージョンが無効です。',
	'securehtml-input-title' => 'HTML の入力',
	'securehtml-generatedoutput-title' => '生成された出力',
	'securehtml-renderedhhtml-title' => '表示される HTML',
	'securehtml-form-version' => 'ハッシュのバージョン',
	'securehtml-form-deprecated' => '非推奨',
	'securehtml-form-keyname' => 'キー名 (省略可能)',
	'securehtml-form-html' => 'HTML コード',
	'securehtml-form-submit' => '送信',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'securehtml' => 'Безбеден HTML',
	'securehtml-desc' => 'Овозможува вклучување на произволен HTML на повластен и безбеден начин',
	'securehtml-nokeys' => 'Грешка: <code>$wgSecureHTMLSecrets</code> е празен.',
	'securehtml-legacykeys' => 'Предупредување: <code>$wgSecureHTMLSecrets</code> (вер. 2) е празен, но <code>$shtml_keys</code> (вер. 1) не е.
Претворете ги во тараби од верзија 2 што е можно побргу, бидејќи верзијата 1 е застарена.',
	'securehtml-invalidhash' => 'Грешка: Неважечка тараба.',
	'securehtml-invalidversion' => 'Грешка: Неважечка верзија.',
	'securehtml-input-title' => 'HTML-внос',
	'securehtml-generatedoutput-title' => 'Создаден извод',
	'securehtml-renderedhhtml-title' => 'Испишан HTML',
	'securehtml-form-version' => 'Тарабна верзија',
	'securehtml-form-deprecated' => 'застарено',
	'securehtml-form-keyname' => 'Име на клучот (незадолжително)',
	'securehtml-form-keysecret' => 'Клучна тајна',
	'securehtml-form-html' => 'Сиров HTML',
	'securehtml-form-submit' => 'Поднеси',
	'securehtml-inputinstructions' => 'Внесете клучно име (незадолжително), клучна тајна и саканиот сиров HTML.
Ако не се назначи клучно име, ќе се користи првиот клуч во <code>$wgSecureHTMLSecrets</code>.',
	'securehtml-outputinstructions' => 'Прекопирајте го гореприкажаниот код ТОЧНО и ставете го во уредникот.
Ако создадениот код не работи, отстранете ги сите каналски редови од вносниот HTML и пресоздајте го.',
);
