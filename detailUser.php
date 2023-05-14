<center>
<?php
include 'connectdb.php';
$id = $_GET["id"];
$sql_detail = "SELECT * FROM user WHERE id='$id'";
echo "Detail User : <br>";
$result = $conn->query($sql_detail);
    $row = mysqli_fetch_array($result);
    echo "Id = " . $row['id'] . "<br>
    Email = " . $row['email'] . "<br>
    Name = " . $row['name'] . "<br>
    Role = " . $row['role'] . "<br>";
    if($row['avatar'] == null){
        echo "<img src='image/ui-profile-icon-vector.jpg' alt='' width='100px'> <br>";
    } else {
        echo "<img src='image/".$row['avatar'] . "' width='100px'> <br>";
    }
    echo "Phone = " . $row['phone'] . "<br>
    Address = " . $row['address'] . "<br>
    Password = " . $row['password'] . "<br>
    Ureated_at = " . $row['created_at'] . "<br>
    updated_at = " . $row['updated_at'];
?>
</center>