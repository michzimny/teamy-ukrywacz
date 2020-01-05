<?php

require_once('config.php');
require_once('co_pokazywac.php');

?>

<table style="float:left;margin-right:50px;">
<tr><th>pref</th><th>rnd</th><th>rzd</th><th>czas</th></tr>
<?
	$pref = 'sp';
	foreach($czasy[$pref] as $rnd=>$data) {
		foreach($data as $rzd=>$czas) {
			if(($rzd==1) || ($rzd==13)) echo "<tr style='background:yellow'>";
			else echo "<tr>";
			echo "<td>$pref</td><td>$rnd</td><td>$rzd</td><td>".date('d.m.Y H:i',$czas)."</td></tr>";
		}
	}

?>
</table>

<table style="">
<tr><th>pref</th><th>rnd</th><th>rzd</th><th>czas</th></tr>
<?
	$pref = 'gr';
	foreach($czasy[$pref] as $rnd=>$data) {
		foreach($data as $rzd=>$czas) {
			if(($rzd==1) || ($rzd==13)) echo "<tr style='background:yellow'>";
			else echo "<tr>";
			echo "<td>$pref</td><td>$rnd</td><td>$rzd</td><td>".date('d.m.Y H:i',$czas)."</td></tr>";
		}
	}

?>
</table>
