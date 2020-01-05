<?php

$pref = $_GET['pref'];
$rnd = (int)$_GET['rnd'];
$rzd = (int)$_GET['rzd'];
$file = $_SERVER['REQUEST_URI'];
//echo "$rnd-$rzd";
require_once('config.php');
require_once('co_pokazywac.php');

$dir = dirname(__FILE__) . PATH . dirname($file) . '/';

if(pokazac($pref,$rnd,$rzd)) {
	$tdd_filename = $dir . 'tdd-protocol.php';
	if(file_exists($tdd_filename)) {
		$prefix = $pref;
		$round = $rnd;
		$board = $rzd;
		chdir($dir);
		include($tdd_filename);
	} else {
		echo file_get_contents(dirname(__FILE__).PATH.$file);
	}
} else {
	include('tpl-rzd.php');
}
