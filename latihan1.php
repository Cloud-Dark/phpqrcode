<?php

	include "phpqrcode/qrlib.php";

	//isi qrcode jika di scan
	$codeContents = 'https://www.instagram.com/portofolio_cloud_dark/'; 

	//output gambar langsung ke browser, sebagai PNG
	QRcode::png($codeContents);


 ?>
