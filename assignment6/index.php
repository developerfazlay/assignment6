<?php



// Question No - 01
echo "<h3>Question No - 01</h3>";

$purchased_products = array(
    array('name' => 'banana',  'qty' => 10, 'total_price' => 550),
    array('name' => 'apple',   'qty' => 50, 'total_price' => 1500),
    array('name' => 'orange',  'qty' => 7,  'total_price' => 600),
);

$totalQuantity = array_sum(array_column($purchased_products, 'qty'));
$totalPrice    = array_sum(array_column($purchased_products, 'total_price'));

echo "Total Purchased Quantity = ". $totalQuantity." & Total Amount = ". $totalPrice . " Tk";









// Question No - 02
echo "<h3>Question No - 02</h3>";

$first_email_array = ["abc@gmail.com", "xyz@gmail.com", "demo@gmail.com"]; 
$second_email_array = ["efg@gmail.com", "xyz@gmail.com", "dummy@gmail.com"];

$unique_email_list = array_unique(array_merge($first_email_array, $second_email_array));

echo "<pre>";
print_r($unique_email_list);









// Question No - 03
echo "<h3>Question No - 03</h3>";

$citylist = array( "Black Canyon City", "Chandler", "Flagstaff", "Gilbert", "Glendale", "Globe", "Mesa", "Miami", "Phoenix", "Peoria", "Prescott", "Scottsdale", "Sun City", "Surprise", "Tempe", "Tucson", "Wickenburg" );

$chunk_cities_by_4 = array_chunk($citylist, 4);

echo "<pre>";
print_r($chunk_cities_by_4);












?>