<?php

$dbConfig = [
    'db_name' => 'table_name',
    'host'    => '127.0.0.1',
    'user'    => 'user',
    'pass'    => 'password',
];

$dsn = "mysql:dbname={$dbConfig['db_name']};host={$dbConfig['host']}";

$db = new PDO($dsn, $dbConfig['user'], $dbConfig['pass']);
$tableQuery = 'SELECT `id`, `name`,`url` FROM `products`';

?>

<table>

    <tr>
        <th>id</th>
        <th>name</th>
        <th>url</th>
        <th>category</th>
    </tr>

    <? foreach ($db->query($tableQuery, PDO::FETCH_ASSOC) as $item) { ?>

        <tr>
            <td><?= $item['id'] ?></td>
            <td><?= $item['name'] ?></td>
            <td><?= $item['url'] ?></td>
        </tr>

    <? } ?>

</table>
