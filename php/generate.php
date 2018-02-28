<?php
header('Content-type:image/png');
require_once "qrcode/vendor/autoload.php";
	$size=200;
	$padding=10;
	$qr = new Endroid\QrCode\QrCode();
	$qr->setText($_GET['qrtext']);
	$qr->setSize($size);
	$qr->setPadding($padding);
	$qr->render();

?>