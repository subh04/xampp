<?php

$connection=new mysqli("localhost:3307","root","","product");
$sqlCommand=$connection->prepare("select * from product_table");
$sqlCommand->execute();

$result=$sqlCommand->get_result();
//in php this is the way to create arry object
$product=  array();
while($rowOfProduct=$result->fetch_assoc()){
    array_push($product, $rowOfProduct); //rowOfProduct data goes to product array one by one
}
echo json_encode($product);

