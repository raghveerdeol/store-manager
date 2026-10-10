<?php
    $users = $pageData['users'];
    $actions = $pageData['actions'];
    $columns = getTableColumns($users[0]);
?>

<div>
    <h1 class="flex justify-center">
        Users
    </h1>
    <table class="w-100 tabel-primary">
        <tr>
            <?php foreach($columns as $column) { ?>
                <th class="p-4 text-start border"><?= $column ?></th>
            <?php } ?>
            <th class="p-4 text-start border">Actions</th>
        </tr>
        <?php foreach($users as $index => $user) { ?>
            <tr class="text-start <?= isEven($index) ? 'bg-gray-ligth' : 'bg-white' ?>">
                <?php foreach($columns as $column) { ?>
                    <td class="p-4 border"><?= $user[$column]?></td>
                <?php } ?>
                <td class="p-4 border">
                    <?php foreach ($actions as $key => $action) { ?>
                        <?php if($action === 'view') { ?>
                            <a href="users/view?id=<?= $user['id'] ?>">view</a>
                        <?php } ?>
                        <?php if($action === 'create') { ?>
                            <a href="users/create">create</a>
                        <?php } ?>
                    <?php } ?>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>