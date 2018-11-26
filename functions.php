<?php


function vol_m3($length, $deep, $width){

		return $width * $deep * $length;
}

function get_trucks($volume, $truck_volume) {

	return ceil($volume / $truck_volume);
}


function get_price($truck, $truck_volume, $price = 0.75, $admin_fee = 50 ) {

	return ceil($truck * $truck_volume * $price + $admin_fee);
}

?>