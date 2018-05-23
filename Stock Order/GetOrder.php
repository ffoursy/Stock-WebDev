<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = mysqli_connect("localhost:8080", "root", "", "stock_trading");

$result = $conn->query("SELECT order_number/*,symbol,order_time,order_type,order_volume,order_price,total_matched,total_cancelled*/ FROM stock_order;");
$outp = "[";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "[") {$outp .= ",";}
    $outp .= '{"orderNumber":"'  . $rs["order_number"] . '",';
    $outp .= '"symbol":"'   . $rs["symbol"]        . '",';
    $outp .= '"orderTime":"'   . $rs["order_time"]        . '",';
    $outp .= '"orderType":"'. $rs["order_type"]     . '"}'; 
    $outp .= '"orderVolume":"'. $rs["order_volume"]     . '"},';
    $outp .= '"orderPrice":"'. $rs["order_price"]     . '"},';
    $outp .= '"totalMatched":"'. $rs["total_matched"]     . '"},';   
    $outp .= '"totalCancelled":"'. $rs["total_cancelled"]     . '"}';
}
$outp .="]";

$conn->close();

echo($outp);
?>