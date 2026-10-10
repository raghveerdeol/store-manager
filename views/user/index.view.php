<?php
    $users = $pageData['users'];
    $columns = getTableColumns($users);
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
        </tr>
        <?php foreach($users as $index => $user) { ?>
            <tr class="text-start <?= isEven($index) ? 'bg-gray-ligth' : 'bg-white' ?>">
                <?php foreach($columns as $column) { ?>
                    <td class="p-4 border"><?= $user[$column]?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</div>