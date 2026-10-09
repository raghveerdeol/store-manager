<?php 
    $navItems = [
        'Dashboard',
        'users'
    ]
?>
<div class="flex">
    <?php foreach ($navItems as $item) { ?>
        <div>
            <h6>
                <?= $item ?>
            </h6>
        </div>
    <?php } ?>
</div>