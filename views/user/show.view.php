<?php
    $user = $pageData['data'];
    $actions = $pageData['actions'];
    $columns = getTableColumns($user);
?>

<div class="w-full">

    <div class="flex justify-start flex-wrap p-8 rounded-md bg-blue-100">
        <div class="text-end basis-1/1 pb-4">
            <?php foreach ($actions as $key => $action) { ?>
                <?php if($action === 'edit') { ?>
                    <a 
                        href="users/edit?id=<?= $user['id'] ?>" 
                        class="px-4 py-2 rounded-md bg-blue-400"
                    >
                        edit
                    </a>
                <?php } ?>
            <?php } ?>    
        </div>
        <?php foreach ($columns as $key => $column) { ?>
            <div class="basis-1/2 mb-6">
                <div class="capitalize">
                    <?= str_replace('_', ' ', $column) ?>
                </div>
                <div>
                    <?= $user[$column] ?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>