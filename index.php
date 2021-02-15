
<?php

$link = new mysqli("172.19.0.2","root","uas","Trucorp");
if (!$link){
echo "Tidak bisa connect ke MySQL" . PHP_EOL;
exit;
}
$sql = "SELECT * FROM users";
$result = $link->query($sql);

if($result){
while($row = $result->fetch_assoc()){
echo "ID: ". $row['ID']. "<br>";
echo "Nama: ". $row['Nama']. "<br>"; 
echo "Kantor: ". $row['Kantor']."<br>";
echo "<br>";
echo "<br>";
}
}
$link->close();


?>
