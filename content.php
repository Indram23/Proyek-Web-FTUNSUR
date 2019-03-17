<?php

	$content = 'beranda';

	if(isset($_GET['page']))
	{
		$content = $_GET['page'];
	}

	include 'page/'.$content.'.php';

?>