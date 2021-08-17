<?php
//file_get_contents();
//file_put_contents();

//json_decode();
//json_encode();


$arr = ["key"=>"value","name"=>"Petras"];
print_r($arr);
echo "<br>";
echo json_encode($arr);"<br>";
//file_put_contents("./data.txt",json_encode($arr));

echo "<br>";

echo file_get_contents("./data.txt");

echo "<br>";

$data = json_decode( file_get_contents("./data.txt"),1 );
print_r($data);
?>