<h1>Navbar</h1>
<?php 

$sql = "SELECT * FROM user";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
    $fullname = $row['fullname'];
    $email = $row['email'];
    $address = $row['address'];

    echo 'here'.$fullname.'<br>';
    
}

?> <br>
<a href="home.php"> HOME </a> &nbsp;&nbsp;
<a href="profile.php">PROFILE </a>