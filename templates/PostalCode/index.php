<div>
<table>
    <tr>
    <th>Postal Code</th>
    <th colspan="2">住所</th>
    </tr>
    <?php foreach ($postalCodes as $postalCode): ?>
    <tr>
        <td><?= h($postalCode->Postal_Code) ?></td>
        <td><?= h($postalCode->State_Province) ?></td>
        <td><?= h($postalCode->City_Town_Village) ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</div>
