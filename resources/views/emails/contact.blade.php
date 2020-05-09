<?php //echo '<pre>'; print_r($data1['interestedWaterToys']); exit;?>
@foreach($data1 as $k => $v)
<?php

if(is_array($data1[$k])){
	$test = implode(',',$data1[$k]); ?>
	<p><?php echo ucwords($k) ." : ". $test ?></p>
<?php }else{ ?>
	<p><?php 
	$v = str_replace("T00:00:00", "", $v);
	echo ucwords($k) ." : ". $v ?></p>
<?php 
}

?>
@endforeach
