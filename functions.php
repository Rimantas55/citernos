<?php


function vol_m3($length, $deep, $width){

		return $width * $deep * $length;
}

function get_trucks($volume, $truck_volume) {

	return ceil($volume / $truck_volume);
}


function get_price($truck, $price = 0.75, $truck_volume, $admin_fee = 50 ) {

	return ceil($truck * $price * $truck_volume + $admin_fee);
}

?>