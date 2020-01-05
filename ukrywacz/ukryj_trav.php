<?php

$pref = $_GET['pref'];
$rnd = (int)$_GET['rnd'];
$stol = (int)$_GET['stol'];
$segm = (int)$_GET['segm'];
$file = $_SERVER['REQUEST_URI'];

require_once('config.php');
require_once('co_pokazywac.php');
require_once('simple_html_dom.php');

$min = $segm_rzd[$segm]['min'];
$max = $segm_rzd[$segm]['max'];

$html = file_get_html(dirname(__FILE__).PATH.$file);
$trs = $html->find('//table//tr');

// ile wierszy pominac
// static logoh
// TODO not needed anymore?
if(strpos($_SERVER['REQUEST_URI'],'/se/')) {
	define('OFFSET',13);
} else {
	define('OFFSET',12);
}

$ukrCols = array(0,1,2,3,4,6,7,8,9,10); //ukrywane kolumny

for($i=OFFSET;$i<=$max-$min+OFFSET;$i++) {
	if(!is_object($trs[$i])) continue;
	$rzd_str = $trs[$i]->find('td',5)->plaintext;
	preg_match('/\d+/',$rzd_str,$m);
	$rzd = (int)$m[0];
	$rzd_base = $segm % 2 == 1 ? ($segm-1)*12 : ($segm-2)*12;
	
	if(!pokazac($pref,$rnd,$rzd+$rzd_base)) {
		$tds = $trs[$i]->find('td');
		$col = -1;
		foreach($tds as $td) {
			$col++;
			if(in_array($col,$ukrCols)) {
				$td->innertext = '&nbsp;';
			}
		}
	}
}

echo $html;

