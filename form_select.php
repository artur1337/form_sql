<html>
<head>
    <title>Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<a href="index.php"><----- Back to Form</a>
<?php
include 'connect_sql.php';
$results = mysqli_query($conn, "SELECT * FROM users");
foreach ($results as $result) {
    echo "<table>";
    echo "<tr>";
    echo "<td>" . $result['name']."</td><br>";
    echo "<td>" . $result['surname']."</td>";
    echo "<td>" . $result['tel']."</td>";
    echo "<td>" . $result['email']."</td>";
    echo "<td>" . $result['address']."</td>";
    echo "</tr>";
    echo "</table>";
}
