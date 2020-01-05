<?php
date_default_timezone_set('Europe/Warsaw');

//zakresy rozdan per segment
$segm_rzd = array(
	1 => array(
		'min' => 1,
		'max' => 12,
	),
	2 => array(
		'min' => 13,
		'max' => 24,
	),
	3 => array(
		'min' => 1,
		'max' => 12,
	),
	4 => array(
		'min' => 13,
		'max' => 24,
	),
	5 => array(
		'min' => 49,
		'max' => 60,
	),
	6 => array(
		'min' => 61,
		'max' => 72,
	),
);

// sciezka wzgledna z ukrywacza do katalogu glownego domeny
define('PATH','/../../../../..'); // with first slash, but NO trailing slash
