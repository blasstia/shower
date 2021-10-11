<?php
$cart = array(
    "orderID" => 12345,
    "shopperName" => "John Smith",
    "shopperEmail" => "johnsmith@example.com",
    "contents" => array(
    array(
        "productID" => 34,
        "productName" => "SuperWidget",
        "quantity" => 1
    ), array(
    "productID" => 56,
    "productName" => "WonderWidget",
    "quantity" => 3
    )
),
    "orderCompleted" => true
);
$result = json_encode($cart);
$obj = json_decode($result);
print "<hr>";
print_r($obj);
print "<hr>";
print $obj->orderID . "<br>";
print $obj->shopperName . "<br>";
print $obj->shopperEmail . "<br>";
print $obj->contents[0]->productID . "<br>";
print $obj->contents[1]->productID . "<br>";
//echo json_encode( $cart );
$arr = json_decode($result,true);
print "<hr>";
print_r($arr);
print "<hr>";
print $arr["orderID"] . "<br>";
print $arr["shopperName"] . "<br>";
print $arr["shopperEmail"] . "<br>";
print $arr["contents"][0]["productID"] . "<br>";
print $arr["contents"][1]["productID"] . "<br>";
?>