<?php

$link = new mysqli("172.19.0.2","root","uas","Trucorp");
if (!$link){
echo "Tidak bisa connect ke MySQL" . PHP_EOL;
exit;
}
$sql = "SELECT * FROM users";
$result = $link->query($sql);

if($result){
$count = 0;
while($row = $result->fetch_assoc()){
$count = $count + 1;
}
}

echo "Total User: ". $count;
$link->close();

?>


