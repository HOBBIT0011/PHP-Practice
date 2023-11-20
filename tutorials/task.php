<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>




<?php
$info[] = ['Name' => 'Ibrahim', 'Age' => '21', 'Dev' => 'PHP', 'Class' => 'Junior'];
$info[] = ['Name' => 'Muzammil', 'Age' => '25', 'Dev' => 'Laravel', 'Class' => 'Senior'];
$info[] = ['Name' => 'Moooezz', 'Age' => '30', 'Dev' => 'Python', 'Class' => 'Senior'];
$info[] = ['Name' => 'Affan Bhai', 'Age' => '32', 'Dev' => 'SQL', 'Class' => 'Senior'];
?>

<table>
    <tr>
        <td>Name</td>
        <td>Age</td>
        <td>Programming</td>
        <td>Designation</td>
    </tr>

    <?php
    foreach ($info as $value) {
        echo '<tr>';
        echo '<td>' . $value['Name'] . '</td>';
        echo '<td>' . $value['Age'] . '</td>';
        echo '<td>' . $value['Dev'] . '</td>';
        echo '<td>' . $value['Class'] . '</td>';
        echo '</tr>';
    }
    ?>
</table>
    
</body>
</html>