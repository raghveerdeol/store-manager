<?php
    $elements = $pageData['data'];
    $actions = $pageData['actions'];
    $columns = getTableColumns($elements[0]);
?>

<div>
    <?php require './views/components/table.php' ?>
</div>