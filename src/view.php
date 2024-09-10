<?php

require_once 'FileUtility.php';

// Read data from persons.csv
$peopleData = FileUtility::read('persons.csv');

if (empty($peopleData)) {
    echo "No data available!";
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Person Records</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Person Records</h1>
    <table>
        <thead>
            <tr>
                <?php
                foreach ($peopleData[0] as $header) {
                    echo "<th>{$header}</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 1; $i < count($peopleData); $i++) {
                echo "<tr>";
                foreach ($peopleData[$i] as $value) {
                    echo "<td>{$value}</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
