<?php

function createDoc($id){
require_once 'phpWord/bootstrap.php';
$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('1.docx');

$patient = $results->fetch_assoc();


$templateProcessor->setValue('name', $name);

$templateProcessor->saveAs('results/123.docx');
}
?>
