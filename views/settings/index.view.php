<?php
    $elements = $pageData['data'];
    $actions = $pageData['actions'];
    $columns = ['id', 'name', 'description', 'created_at', 'updated_at'];
?>

<div>
    <?php require './views/components/table.php' ?>
</div>