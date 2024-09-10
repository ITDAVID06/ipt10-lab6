<?php

require_once 'Random.php';
require_once 'FileUtility.php';

$peopleData = Random::generateRandomData(300);

FileUtility::write('persons.csv', $peopleData);

echo "300 records generated and saved to persons.csv successfully!";
?>
