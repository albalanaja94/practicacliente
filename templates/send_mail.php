<?php

include('email.php');

$send = new Send();

function isDay($day){

return (date('d') == $day); }

if(isDay(21)){

	$send->sendMail();
}
