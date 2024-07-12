<?php
function print_d($data){
echo "<pre>";
print_r($data);
echo "</pre>";
}


if (!function_exists('viewPath')) {

	function viewPath($path)
	{
		return VIEWPATH . '/' . $path . '.php';
	}
}