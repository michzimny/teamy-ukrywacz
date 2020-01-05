<?php

function policz(&$arr,$od,$do,$start,$krok) {
	for($i=$od;$i<=$do;$i++) {
		$arr[$i] = $start+$krok*($i-$od);
	}
}

// $czasy[PREF][RND][RZD] = czas(DD.MM.RRRR HH:mm);

$czasy = array();
policz($czasy['rr'][1],01,12,czas('05.10.2019 10:20'),8*60);
policz($czasy['rr'][1],13,24,czas('05.10.2019 12:20'),8*60);
policz($czasy['rr'][2],01,12,czas('05.10.2019 15:20'),8*60);
policz($czasy['rr'][2],13,24,czas('05.10.2019 17:20'),8*60);
policz($czasy['rr'][3],01,12,czas('05.10.2019 19:50'),8*60);
policz($czasy['rr'][3],13,24,czas('05.10.2019 21:50'),8*60);
policz($czasy['rr'][4],01,12,czas('06.10.2019 09:20'),8*60);
policz($czasy['rr'][4],13,24,czas('06.10.2019 11:20'),8*60);
policz($czasy['rr'][5],01,12,czas('06.10.2019 13:50'),8*60);
policz($czasy['rr'][5],13,24,czas('06.10.2019 15:50'),8*60);

policz($czasy['rr'][6],01,12,czas('16.11.2019 10:20'),8*60);
policz($czasy['rr'][6],13,24,czas('16.11.2019 12:20'),8*60);
policz($czasy['rr'][7],01,12,czas('16.11.2019 15:20'),8*60);
policz($czasy['rr'][7],13,24,czas('16.11.2019 17:20'),8*60);
policz($czasy['rr'][8],01,12,czas('16.11.2019 19:50'),8*60);
policz($czasy['rr'][8],13,24,czas('16.11.2019 21:50'),8*60);
policz($czasy['rr'][9],01,12,czas('17.11.2019 09:20'),8*60);
policz($czasy['rr'][9],13,24,czas('17.11.2019 11:20'),8*60);
policz($czasy['rr'][10],01,12,czas('17.11.2019 13:50'),8*60);
policz($czasy['rr'][10],13,24,czas('17.11.2019 15:50'),8*60);

policz($czasy['rr'][11],01,12,czas('04.01.2020 10:20'),8*60);
policz($czasy['rr'][11],13,24,czas('04.01.2020 12:20'),8*60);
policz($czasy['rr'][12],01,12,czas('04.01.2020 15:20'),8*60);
policz($czasy['rr'][12],13,24,czas('04.01.2020 17:20'),8*60);
policz($czasy['rr'][13],01,12,czas('04.01.2020 19:50'),8*60);
policz($czasy['rr'][13],13,24,czas('04.01.2020 21:50'),8*60);
policz($czasy['rr'][14],01,12,czas('05.01.2020 09:20'),8*60);
policz($czasy['rr'][14],13,24,czas('05.01.2020 11:20'),8*60);
policz($czasy['rr'][15],01,12,czas('05.01.2020 14:00'),8*60);
policz($czasy['rr'][15],13,24,czas('05.01.2020 15:50'),8*60);





function czas($str) {
	$p = explode(' ',trim($str));
	$data = explode('.',$p[0]);
	$godz = explode(':',$p[1]);
	return mktime($godz[0],$godz[1],0,$data[1],$data[0],$data[2]);
}

function pokazac($pref,$rnd,$rzd) {
	global $czasy;
	if(!$czasy[$pref]) {
		return true;
	}
	if($czasy[$pref][$rnd] && $czasy[$pref][$rnd][$rzd] && (time() >= $czasy[$pref][$rnd][$rzd])) {
		return true;
	}
	else {
		return false;
	}
}
