

<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    var_dump($_POST);
    die();
    $tag = create($_POST, $db);
    if($tag === 'success') {
        //redirect da qui
    }
}
$title = $pageData['title'];
$formData = $pageData['formData'];
$submit = 'create';


require 'views/components/form.php'; 