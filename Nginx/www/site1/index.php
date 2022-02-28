<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='../css/style.css' />
    <title>Document PHP</title>
</head>
<body>

<form action="php/add.php" method="post">
    <input type="submit" class="button" name="button_on" value="Add">
</form>
<form action="php/del.php" method="post">
    <input type="submit" id="button2" name="del_all" value="Del">
</form>

<form action="php/info.php" method="post">
    <input type="submit" id="button3" name="del_all" value="info.php">
</form>

<?php
#SELECT
$conn = new mysqli('db','root','2021','testdb');
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
$sql = "SELECT * FROM pc_hard";
if($result = $conn->query($sql)){
    $rowsCount = $result->num_rows; // количество полученных строк
    echo "<p>Получено объектов: $rowsCount</p>";
    echo "<table><tr><th>ID</th><th>CPU</th></tr>";
    foreach($result as $row){
        echo "<tr>";
            echo "<td>" . $row["ID"] . "</td>";
            echo "<td>" . $row["cpu"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    $result->free();
} else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();

#header('Location: http://192.168.0.61');
?>

</body>
</html>
