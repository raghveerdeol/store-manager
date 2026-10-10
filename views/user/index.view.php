<?php

    $users = [
        [
            'id' => 1,
            'nome' => 'Mario',
            'cognome' => 'Rossi',
            'email' => 'mario@gmail.com'
        ],
        [
            'id' => 2,
            'nome' => 'Andrea',
            'cognome' => 'Verde',
            'email' => 'verde@gmail.com'
        ],
    ];
?>

<div>
    <h1 class="flex justify-center">
        Users
    </h1>
    <table class="w-100 tabel-primary">
        <tr>
            <th class="p-4 text-start border">Id</th>
            <th class="p-4 text-start border">Nome</th>
            <th class="p-4 text-start border">Cognome</th>
            <th class="p-4 text-start border">Email</th>
        </tr>
        <?php foreach($users as $index => $user) { ?>
            <tr class="text-start <?= isEven($index) ? 'bg-gray-ligth' : 'bg-white' ?>">
                <td class="p-4 border"><?= $user['id']?></td>
                <td class="p-4 border"><?= $user['nome'] ?></td>
                <td class="p-4 border"><?= $user['cognome'] ?></td>
                <td class="p-4 border"><?= $user['email'] ?></td>
            </tr>
        <?php } ?>
    </table>
</div>