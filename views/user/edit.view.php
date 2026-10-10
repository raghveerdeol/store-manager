<?php
    $user = $pageData['user'];
    $actions = $pageData['actions'];
    $columns = getTableColumns($user);
?>

<div>
    <div class="flex justify-end w-100">
        <?php foreach ($actions as $key => $action) { ?>
            <?php if($action === 'edit') { ?>
                <a href="users/edit?id=<?= $user['id'] ?>">edit</a>
            <?php } ?>
        <?php } ?>
    </div>

    <div class="flex justify-start w-100">
        <?php foreach ($columns as $key => $column) { ?>
            <div class="col-6">
                <div class="col-12">
                    <?= $column ?>
                </div>
                <div>
                    <?= $user[$column] ?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>