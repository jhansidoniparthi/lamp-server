
<?php

$connection = new PDO('mysql:host=localhost;dbname=siva', 'siva', 'siva');
$statement  = $connection->query('SELECT message FROM siva');

echo $statement->fetchColumn();

