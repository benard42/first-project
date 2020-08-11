



<?php
$code_feed = "PS//0123456789EVE";
$code_length = 10;  // Set this to be your desired code length
$final_code = "";
$feed_length = strlen($code_feed);

for($i = 0; $i < $code_length; $i ++) {
	$feed_selector = rand(0,$feed_length-1);
	$final_code .= substr($code_feed,$feed_selector,1);
}
echo $final_code;
?>