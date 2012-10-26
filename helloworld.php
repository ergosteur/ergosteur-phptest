
<?php
//I18N support
$language = 'en_CA';
putenv("LANG=$language");
setlocale(LC_ALL, $language);
// Set the text domain as 'messages'
$domain = 'messages';
bindtextdomain($domain, "locale"); 
bind_textdomain_codeset($domain, 'UTF-8');
textdomain($domain);

echo gettext("HELLO_WORLD");
?>
