<!DOCTYPE html>
<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


$v1 = $_POST['v1'];
$v2 = $_POST['v2'];
$v3 = $_POST['v3'];
$v4 = $_POST['v4'];
$v5 = $_POST['v5'];
$v6 = $_POST['v6'];


if(isset($_POST['save'])){

    echo "<br>";

    $my_query = "";

    $my_query = "select * from motors WHERE 1 ";
    $result = mysqli_query($conn, $my_query);

    $my_query = "INSERT INTO motors (v1, v2, v3, v4, v5, v6) VALUES ('$v1', '$v2', '$v3', '$v4', '$v5', $v6)";
    $result = mysqli_query($conn, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }

}else if(isset($_POST['on'])) {
    echo "<br>";

    $my_query = "";

    $my_query = "select * from motors WHERE 1 ";
    $result = mysqli_query($conn, $my_query);

    $my_query = "INSERT INTO motors (onbutton) VALUES (1)";
    $result = mysqli_query($conn, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }

}else if(isset($_POST['off'])) {
    echo "<br>";

    $my_query = "";

    $my_query = "select * from motors WHERE 1 ";
    $result = mysqli_query($conn, $my_query);

    $my_query = "INSERT INTO motors (offbottun) VALUES (0)";
    $result = mysqli_query($conn, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }
}

?>

</body>
</html>
