# roles/database/files/db.php
<?php

$connection = new PDO('mysql:host=localhost;dbname=siva', 'siva', 'siva');
$statement  = $connection->query('SELECT message FROM demo');

echo $statement->fetchColumn();

