<?php
if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest')
{
	exit;
}
  $return = $_POST;

$nameerror = $addresserror = 0;
if(count($return) > 0) {
	$name = $return['name'];
	$address = $return['address'];
	$country = $return['country'];
	if ($name != htmlspecialchars($name))
	{
		$nameerror = 1;
		$name = htmlspecialchars($name);
	}
	if ($address != htmlspecialchars($address))
	{
		$addresserror = 1;
		$address = htmlspecialchars($address);
	}
	if($nameerror == 0 & $addresserror == 0)
	{
		$return["status"] = "Success";
	}else{
		$return["status"] = "Failure!";
	}
}
  
  echo json_encode($return);
?>

