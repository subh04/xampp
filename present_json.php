<?php

$connection=new mysqli("localhost:3307","root","","product");
$sqlCommand=$connection->prepare("select*from product_table where id=?");
$sqlCommand->bind_param("i", $_GET["id"]);
$sqlCommand->execute();
//reading the data done
//now getting the data as json object
$result=$sqlCommand->get_result();
//getting the row of data
$rowOfData=$result->fetch_assoc();

//printing the data to the web browser

echo $rowOfData["id"];
echo $rowOfData["name"];
echo $rowOfData["price"];