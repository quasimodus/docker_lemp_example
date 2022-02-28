<?php
#INSERT
$link = new mysqli('db','root','2021','testdb');

$sql = 'INSERT INTO pc_hard SET CPU = "Intel"';
$result = mysqli_query($link, $sql);

if ($result == false)
{
    print("Errorrrrrr");
}
#$conn->close();

header('Location:http://192.168.0.61');
?>
