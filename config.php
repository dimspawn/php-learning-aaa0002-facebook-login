<?php	
	require_once 'Facebook/autoload.php';
	if(!session_id()){
		session_start();
	}

	$FB = new \Facebook\Facebook([
		'app_id' => '399629070489611',
		'app_secret' => '95d113e7af8f88d0cfb2f6077338cfb3',
		'default_graph_version' => 'v2.10'
	]);

	$helper = $FB->getRedirectLoginHelper();
?>