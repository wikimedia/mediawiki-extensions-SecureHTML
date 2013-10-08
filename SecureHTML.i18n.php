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
	'securehtml' => '{{doc-special|SecureHTML}}',
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

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'securehtml' => 'HTML seguru',
	'securehtml-desc' => "Permite incluir HTML arbitrariu d'una manera autorizada y segura",
	'securehtml-nokeys' => 'Error: <code>$wgSecureHTMLSecrets</code> nun ta configurada.',
	'securehtml-legacykeys' => 'Avisu: <code> $wgSecureHTMLSecrets </code> (versión 2) nun ta configuráu, pero <code>$shtml_keys</code> (versión 1) si.
Por favor, convertir los hashes a la versión 2 lo antes posible, porque la versión 1 ta anticuada.',
	'securehtml-invalidhash' => 'Error: hash inválidu.',
	'securehtml-invalidversion' => 'Error: Versión inválida.',
	'securehtml-input-title' => 'Entrada HTML',
	'securehtml-generatedoutput-title' => 'Salida xenerada',
	'securehtml-renderedhhtml-title' => 'HTML presentáu',
	'securehtml-form-version' => 'Versión del hash',
	'securehtml-form-deprecated' => 'En desusu',
	'securehtml-form-keyname' => 'Nome de la clave (opcional)',
	'securehtml-form-keysecret' => 'Secretu de clave',
	'securehtml-form-html' => 'HTML en bruto',
	'securehtml-form-submit' => 'Unviar',
	'securehtml-inputinstructions' => 'Escriba un nome de clave (opcional), un secretu de clave, ya\'l HTML en bruto deseáu.
Si nun se da un nome de clave, asumirá la primera de <code>$wgSecureHTMLSecrets</code>.',
	'securehtml-outputinstructions' => "Copie'l códigu d'arriba EXACTAMENTE y apéguelu nel editor wiki.
Si¡l códigu xeneráu nun funciona, intente quitar tolos saltos de llinia de la entrada HTML y rexenérelu.",
);

/** Breton (brezhoneg)
 * @author Y-M D
 */
$messages['br'] = array(
	'securehtml' => 'HTML suraet',
	'securehtml-form-deprecated' => 'dispredet',
	'securehtml-form-keyname' => "Anv an alc'hwez (diret)",
	'securehtml-form-keysecret' => "Alc'hwez sekred",
	'securehtml-form-submit' => 'Kas',
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

/** British English (British English)
 * @author Shirayuki
 */
$messages['en-gb'] = array(
	'securehtml-desc' => 'Lets you include arbitrary HTML in an authorised and secure way',
);

/** Spanish (español)
 * @author Miguel2706
 */
$messages['es'] = array(
	'securehtml' => 'HTML seguro',
	'securehtml-desc' => 'Permite incluir código HTML de forma autorizada y segura',
	'securehtml-nokeys' => 'Error: <code>$wgSecureHTMLSecrets</code> no se rellena.',
	'securehtml-legacykeys' => 'Advertencia: <code> $wgSecureHTMLSecrets </code> (versión 2) no está rellenado, pero es <code>$shtml_keys</code> (versión 1).
Por favor, convertir los hashes a la versión 2 lo antes posible, ya que la versión 1 está en desuso.',
	'securehtml-invalidhash' => 'Error: Etiqueta no válida.',
	'securehtml-invalidversion' => 'Error: Versión no válida.',
	'securehtml-input-title' => 'Entrada HTML',
	'securehtml-generatedoutput-title' => 'Salida generada',
	'securehtml-renderedhhtml-title' => 'HTML Renderizado',
	'securehtml-form-version' => 'Versión de hash',
	'securehtml-form-deprecated' => 'En desuso',
	'securehtml-form-keyname' => 'Nombre de la clave (opcional)',
	'securehtml-form-keysecret' => 'Clave secreta',
	'securehtml-form-html' => 'HTML sin editar',
	'securehtml-form-submit' => 'Enviar',
	'securehtml-inputinstructions' => 'Introduzca un nombre clave (opcional), clave secreta y el HTML deseado.
Si no se especifica ningún nombre clave, la primera clave en <code>$wgSecureHTMLSecrets</code> será asumida.',
	'securehtml-outputinstructions' => 'Copiar el código anterior exactamente y pegarlo en el editor de wiki.
Si el código generado no funciona, intente quitar los saltos de línea de la entrada HTML y vuelva a generar.',
);

/** Finnish (suomi)
 * @author Silvonen
 */
$messages['fi'] = array(
	'securehtml-input-title' => 'HTML-syöte',
);

/** French (français)
 * @author Boniface
 * @author Gomoko
 */
$messages['fr'] = array(
	'securehtml' => 'HTML sécurisé',
	'securehtml-desc' => 'Vous permet d’inclure du code HTML arbitraire dans un cadre autorisé et sécurisé',
	'securehtml-nokeys' => 'Erreur: <code>$wgSecureHTMLSecrets</code> n’est pas renseigné.',
	'securehtml-legacykeys' => 'Avertissement: <code>$wgSecureHTMLSecrets</code> (version 2) n’est pas renseigné, mais <code>$shtml_keys</code> (version 1) l’est.
Veuillez faire la conversion vers les hachages de la version 2 dès que possible, car la version 1 est obsolète.',
	'securehtml-invalidhash' => 'Erreur: Hachage non valide.',
	'securehtml-invalidversion' => 'Erreur : Version non valide.',
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

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'securehtml' => 'HTML seguro',
	'securehtml-desc' => 'Permite incluír HTML arbitrario dun modo autorizado e seguro',
	'securehtml-nokeys' => 'Erro: <code>$wgSecureHTMLSecrets</code> non está cheo.',
	'securehtml-legacykeys' => 'Atención: <code>$wgSecureHTMLSecrets</code> (versión 2) non está cheo, pero <code>$shtml_keys</code> (versión 1) si que o está.
Por favor, pase á versión 2 os hashes en canto sexa posible, xa que a versión 1 está obsoleta.',
	'securehtml-invalidhash' => 'Erro: Hash non válido.',
	'securehtml-invalidversion' => 'Erro: Versión non válida.',
	'securehtml-input-title' => 'Entrada HTML',
	'securehtml-generatedoutput-title' => 'Saída xerada',
	'securehtml-renderedhhtml-title' => 'HTML renderizado',
	'securehtml-form-version' => 'Versión do hash',
	'securehtml-form-deprecated' => 'obsoleto',
	'securehtml-form-keyname' => 'Nome da clave (opcional)',
	'securehtml-form-keysecret' => 'Clave secreta',
	'securehtml-form-html' => 'HTML en bruto',
	'securehtml-form-submit' => 'Enviar',
	'securehtml-inputinstructions' => 'Insira un nome de clave (opcional), unha clave secreta e o HTML en bruto desexado.
Se non se especifica un nome, asúmese a primeira clave en <code>$wgSecureHTMLSecrets</code>.',
	'securehtml-outputinstructions' => 'Copie EXACTAMENTE o código superior e pégueo no editor wiki.
Se o código xerado non funciona, intente eliminar todos os saltos de liña da entrada HTML e volva xerar o código.',
);

/** Italian (italiano)
 * @author Gianfranco
 */
$messages['it'] = array(
	'securehtml' => 'HTML sicuro',
	'securehtml-desc' => 'Consente di includere HTML arbitrario in modo sicuro e autorizzato',
	'securehtml-nokeys' => 'Errore: <code>$wgSecureHTMLSecrets</code> non è definito.',
	'securehtml-invalidhash' => 'Errore: Hash non valido.',
	'securehtml-invalidversion' => 'Errore: Versione non valida.',
	'securehtml-input-title' => 'Input HTML',
	'securehtml-generatedoutput-title' => 'Output generato',
	'securehtml-renderedhhtml-title' => 'HTML Renderizzato',
	'securehtml-form-version' => 'Versione hash',
	'securehtml-form-deprecated' => 'deprecato',
	'securehtml-form-keyname' => 'Nome della chiave (facoltativo)',
	'securehtml-form-html' => 'HTML grezzo',
	'securehtml-form-submit' => 'Invia',
	'securehtml-outputinstructions' => "Copia il codice sopra riportato ESATTAMENTE COME LO VEDI e incollalo nell'editor wiki.
Se il codice generato non funziona, prova a rimuovere tutte le andate a capo dall'input HTML e ri-generalo.",
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

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'securehtml' => 'Sécheren HTML',
	'securehtml-desc' => 'Léisst Iech arbiträren HTML op eng autoriséiert a sécher Manéier abauen',
	'securehtml-nokeys' => 'Feeler: <code>$wgSecureHTMLSecrets</code> ass net ausgefëllt.',
	'securehtml-invalidversion' => 'Feeler: Net valabel Versioun',
	'securehtml-form-deprecated' => 'vereelst',
	'securehtml-form-keyname' => 'Numm vum Schlëssel (fakultativ)',
	'securehtml-form-keysecret' => 'Geheime Schlëssel',
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

/** Dutch (Nederlands)
 * @author Siebrand
 */
$messages['nl'] = array(
	'securehtml' => 'Veilige HTML',
	'securehtml-desc' => 'Maakt het mogelijk om willekeurige HTML toe te voegen op een goedgekeurde en veilige manier',
	'securehtml-nokeys' => 'Error: <code>$wgSecureHTMLSecrets</code> heeft geen waarde.',
	'securehtml-legacykeys' => 'Waarschuwing: <code>$wgSecureHTMLSecrets</code> (versie 2) is heeft geen waarde, maar <code>$shtml_keys</code> (versie 1) heeft wel een waarde.
Schakel zo snel mogelijk over naar hashes van versie 2, versie 1 verouderd is.',
	'securehtml-invalidhash' => 'Fout: ongeldige hash.',
	'securehtml-invalidversion' => 'Fout: ongeldige versie.',
	'securehtml-input-title' => 'HTML-invoer',
	'securehtml-generatedoutput-title' => 'Gegenereerde uitvoer',
	'securehtml-renderedhhtml-title' => 'Gerenderde HTML',
	'securehtml-form-version' => 'Hashversie',
	'securehtml-form-deprecated' => 'verouderd',
	'securehtml-form-keyname' => 'Sleutelnaam (optioneel)',
	'securehtml-form-keysecret' => 'Sleutelgeheim',
	'securehtml-form-html' => 'Ruwe HTML',
	'securehtml-form-submit' => 'Opslaan',
	'securehtml-inputinstructions' => 'Voer een sleutelnaam (optioneel), sleutelgeheim en de gewenste ruwe HTML in.
Als er geen sleutelnaam wordt opgegeven, wordt aangenomen dat de eerste sleutel uit <code>$wgSecureHTMLSecrets</code> moet worden gebruikt.',
	'securehtml-outputinstructions' => 'Kopieer de bovenstaande code exact en plak deze in de tekstverwerker van de wiki.
Als de bovenstaande code niet werkt, verwijder dan alle regeleinden van de invoer-HTML en probeer het opnieuw.',
);

/** Occitan (occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'securehtml' => 'HTML securizat',
	'securehtml-desc' => 'Vos permet d’inclure de còde HTML arbitrari dins un quadre autorizat e securizat',
	'securehtml-nokeys' => 'Error : <code>$wgSecureHTMLSecrets</code> es pas completat.',
	'securehtml-legacykeys' => 'Avertiment : <code>$wgSecureHTMLSecrets</code> (version 2) es pas completat, mas <code>$shtml_keys</code> (version 1) l’es.
Fasètz la conversion cap als hachages de la version 2 tre que possible, perque la version 1 es obsoleta.',
	'securehtml-invalidhash' => 'Error : Hachage invalid.',
	'securehtml-invalidversion' => 'Error : Version invalida.',
	'securehtml-input-title' => 'Entrada HTML',
	'securehtml-generatedoutput-title' => 'Sortida generada',
	'securehtml-renderedhhtml-title' => 'HTML restituit',
	'securehtml-form-version' => 'Version de hachage',
	'securehtml-form-deprecated' => 'Obsolet',
	'securehtml-form-keyname' => 'Nom de la clau (facultatiu)',
	'securehtml-form-keysecret' => 'Clau secreta',
	'securehtml-form-html' => 'HTML brut',
	'securehtml-form-submit' => 'Mandar',
	'securehtml-inputinstructions' => 'Entratz un nom de clau (facultatiu), una clau secreta, e lo HTML brut desirat.
Se cap de nom de clau es pas especificat, la primièra clau dins <code>$wgSecureHTMLSecrets</code> serà presa per defaut.',
);

/** Polish (polski)
 * @author Chrumps
 */
$messages['pl'] = array(
	'securehtml-invalidversion' => 'Błąd: Nieprawidłowa wersja.',
	'securehtml-renderedhhtml-title' => 'Wyrenderowany HTML',
	'securehtml-form-deprecated' => 'przestarzałe',
	'securehtml-form-keyname' => 'Nazwa klucza (opcjonalnie)',
	'securehtml-form-keysecret' => 'Tajny klucz',
	'securehtml-form-html' => 'Surowy HTML',
	'securehtml-form-submit' => 'Wyślij',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Fúlvio
 */
$messages['pt-br'] = array(
	'securehtml' => 'HTML seguro',
	'securehtml-desc' => 'Permite incluir código HTML de maneira autorizada e segura',
	'securehtml-nokeys' => 'Erro: <code>$wgSecureHTMLSecrets</code> não está preenchido.',
	'securehtml-legacykeys' => 'Aviso: <code>$wgSecureHTMLSecrets</code> (versão 2) não está preenchido, mas <code>$shtml_keys</code> (versão 1) é.
Por favor, preencha os hashes para a versão 2 o mais rapidamente possível, pois a versão 1 está obsoleta.',
	'securehtml-invalidhash' => 'Erro: Hash inválido.',
	'securehtml-invalidversion' => 'Erro: Versão inválida.',
	'securehtml-input-title' => 'Entrada HTML',
	'securehtml-generatedoutput-title' => 'Saída gerada',
	'securehtml-renderedhhtml-title' => 'HTML processado',
	'securehtml-form-version' => 'Versão do hash',
	'securehtml-form-deprecated' => 'obsoleto',
	'securehtml-form-keyname' => 'Nome da chave (opcional)',
	'securehtml-form-keysecret' => 'Chave secreta',
	'securehtml-form-html' => 'HTML sem editar',
	'securehtml-form-submit' => 'Enviar',
	'securehtml-inputinstructions' => 'Digite um nome de chave (opcional), chave secreta e o HTML desejado.
Se nenhum nome de chave for especificado, a primeira chave em <code>$wgSecureHTMLSecrets</code> será assumida.',
	'securehtml-outputinstructions' => 'Copie o código acima EXATAMENTE e cole-o no editor wiki.
Se o código gerado não funcionar, tente remover todos os alimentadores de linha da entrada HTML e gere o código novamente.',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'securehtml' => 'HTML secure',
	'securehtml-desc' => "Te lasse 'ngludere HTML aribtrarie jndr'à 'nu mode secure e autorizzate",
	'securehtml-nokeys' => 'Errore: <code>$wgSecureHTMLSecrets</code> non g\'ha state anghiute.',
	'securehtml-legacykeys' => "Attenziò: <code>\$wgSecureHTMLSecrets</code> (versione 2) non g'è popolate, ma <code>\$shtml_keys</code> (versione 1) sìne.
Pe piacere converte jndr'à versione 2 le hash subbete subbete, purcé 'a versione 1 jè sconsigliate.",
	'securehtml-invalidhash' => 'Errore: Hash invalide.',
	'securehtml-invalidversion' => 'Errore: Versione invalide.',
	'securehtml-input-title' => 'HTML de ingresse',
	'securehtml-generatedoutput-title' => 'Resultate generate',
	'securehtml-renderedhhtml-title' => 'HTML renderizzate',
	'securehtml-form-version' => "Versione de l'hash",
	'securehtml-form-deprecated' => 'sconzigliate',
	'securehtml-form-keyname' => "Nome d'a chiave (opzionale)",
	'securehtml-form-keysecret' => 'Chiave segrete',
	'securehtml-form-html' => 'HTML grezze',
	'securehtml-form-submit' => 'Conferme',
	'securehtml-inputinstructions' => "Mitte 'nu nome d'a chiave (facoltative), segrete d'a chiave, e l'HTML grezze desiderate.
Ce non ge stè 'u nome d'a chiave specificate, 'a prima chiave jndr'à <code>\$wgSecureHTMLSecrets</code> avène pigghiate.",
	'securehtml-outputinstructions' => "Copie 'u codice de sus SATTE SATTE e 'ngollale jndr'à 'u cangiatore de uicchi.
Ce 'u codece generate non ge funzione, pruève a luà tutte le linèe da l'HTML de ingresse e riggenere.",
);

/** Russian (русский)
 * @author Okras
 */
$messages['ru'] = array(
	'securehtml' => 'Безопасный HTML',
	'securehtml-desc' => 'Позволяет включать произвольный HTML разрешённым и безопасным способом',
	'securehtml-form-submit' => 'Отправить',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Милан Јелисавчић
 */
$messages['sr-ec'] = array(
	'securehtml-form-deprecated' => 'застарело',
	'securehtml-form-submit' => 'Пошаљи',
);

/** Swedish (svenska)
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'securehtml' => 'Säker HTML',
	'securehtml-renderedhhtml-title' => 'Renderad HTML',
	'securehtml-form-version' => 'Hash-version',
	'securehtml-form-keyname' => 'Nyckelnamn (valfritt)',
	'securehtml-form-keysecret' => 'Nyckelhemlighet',
	'securehtml-form-html' => 'Rå HTML',
	'securehtml-form-submit' => 'Skicka',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'securehtml' => 'Ligtas na HTML',
	'securehtml-desc' => 'Nagpapahintulot sa iyo na magsama ng nagkataong HTML sa isang paraang pinayagan at ligtas',
	'securehtml-nokeys' => 'Kamalian: hindi naparami ang <code>$wgSecureHTMLSecrets</code>.',
	'securehtml-legacykeys' => 'Babala: hindi naparami ang <code>$wgSecureHTMLSecrets</code> (ika-2 bersiyon), subalit naparami ang <code>$shtml_keys</code> (unang bersiyon).
Paki palitan ng ika-2 bersiyon sa lalong madaling panahon, dahil ang unang bersiyon ay itinakwil na.',
	'securehtml-invalidhash' => "Kamalian: Hindi katanggap-tanggap na kahaluan o ''hash''.",
	'securehtml-invalidversion' => 'Kamalian: Hindi katanggap-tanggap na bersiyon.',
	'securehtml-input-title' => 'Paloob na lahok ng HTML',
	'securehtml-generatedoutput-title' => 'Nagawang kinalabasan',
	'securehtml-renderedhhtml-title' => 'Naiharap na HTML',
	'securehtml-form-version' => 'Bersiyon ng kahaluan',
	'securehtml-form-deprecated' => 'itinakwil',
	'securehtml-form-keyname' => 'Pangalan ng susi (maaaring wala)',
	'securehtml-form-keysecret' => 'Susing lihim',
	'securehtml-form-html' => 'Hilaw ng HTML',
	'securehtml-form-submit' => 'Ipasa',
	'securehtml-inputinstructions' => 'Magpasok ng isang pangalan ng susi (maaaring hindi), lihim na susi, at ninanais na hilaw na HTML. Kapag walang tinukoy na pangalan ng susi, ang unang susi na nasa loob ng <code>$wgSecureHTMLSecrets</code> ang ipapalagay.',
	'securehtml-outputinstructions' => 'Kopyahin nang TUMPAK ang kodigong nasa itaas at idikit iyon sa loob ng patnugot ng wiki.
Kapag hindi gumana ang nalikhang kodigo, subukang tanggalin ang lahat ng mga pinakain na guhit magmula sa panglahok na HTML at muling likhain.',
);

/** Ukrainian (українська)
 * @author Andriykopanytsia
 */
$messages['uk'] = array(
	'securehtml' => 'Безпечний HTML',
	'securehtml-desc' => 'Дає змогу включати довільний HTML в уповноважений і безпечний спосіб',
	'securehtml-nokeys' => 'Помилка: <code>$wgSecureHTMLSecrets</code> не заповнюється.',
	'securehtml-legacykeys' => 'Попередження: <code>$wgSecureHTMLSecrets</code> (версія 2) не заповнений, але <code>$shtml_keys</code> (версія 1) наявний.
Будь ласка, конвертуйте у геші версії 2 якомога швидше, бо версія 1 - застаріла.',
	'securehtml-invalidhash' => 'Помилка: Неправильний геш.',
	'securehtml-invalidversion' => 'Помилка: неприпустима версія.',
	'securehtml-input-title' => 'Дані HTML',
	'securehtml-generatedoutput-title' => 'Згенерований вивід',
	'securehtml-renderedhhtml-title' => 'Опрацьована HTML',
	'securehtml-form-version' => 'Геш-версія',
	'securehtml-form-deprecated' => 'застарілий',
	'securehtml-form-keyname' => "Ім'я ключа (необов'язково)",
	'securehtml-form-keysecret' => 'Секретний ключ',
	'securehtml-form-html' => 'Чисте HTML',
	'securehtml-form-submit' => 'Відправити',
	'securehtml-inputinstructions' => "Введіть ім'я (необов'язково), секретний ключ, необхідний вихідний HTML-код.
Якщо ім'я ключа не вказано, перший ключ у <code>\$wgSecureHTMLSecrets</code> буде прийнятий.",
	'securehtml-outputinstructions' => 'Скопіюйте код, наведений вище, ТОЧНО і вставте його в вікі-редактор.
Якщо згенерований код не працює, то спробуйте видалити всі символи переносу рядків з вхідного HTML і повторно згенерувати.',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Li3939108
 */
$messages['zh-hans'] = array(
	'securehtml-form-html' => '原始HTML',
	'securehtml-form-submit' => '提交',
);
