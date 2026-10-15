<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tag = edit($_POST, $db);
    if($tag === 'success') {
        
    }
}
$title = $pageData['title'];
$formData = $pageData['formData'];
$elementData = $pageData['elementData'];
$submit = 'edit';

require 'views/components/form.php'; 