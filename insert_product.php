<?php

$connection=new mysqli("localhost:3307","root","","product");

$sqlCommand=$connection->prepare("insert into product_table values(?,?,?)");
$sqlCommand->bind_param("isi", $_GET["id"],$_GET["name"],$_GET["price"]);
$sqlCommand->execute();
