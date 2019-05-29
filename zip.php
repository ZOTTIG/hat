<?php

$zipname=time().".zip";
$zip = new ZipArchive;
$zip->open($zipname, ZipArchive::CREATE);

$zip->addFile($fileName, '123.docx');

$zip->close();


header('Content-Type: application/zip');
header('Content-disposition: attachment; filename='.$zipname);
header('Content-Length: ' . filesize($zipname));
readfile($zipname);
unlink($zipname);
?>
