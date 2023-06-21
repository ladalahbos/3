<?php


if (strncasecmp(PHP_OS, 'WIN', 3) == 0) {
    echo windows();
} else {
    echo linux();
}



function linux()
{
	$mac = shell_exec("ip link | awk '{print $2}'");
	preg_match_all('/([a-z0-9]+):\s+((?:[0-9a-f]{2}:){5}[0-9a-f]{2})/i', $mac, $matches);
	$output = array_combine($matches[1], $matches[2]);

	$mac = '';

	foreach ($output as $key => $list) {
		$mac = $list;
	}
	$value = "RG43S_".strtoupper(md5($mac));
	file_put_contents("./files/mac.txt", $value);
	return $value;
}


function windows(){
	exec("C:\windows\system32\ipconfig /all", $out, $res);
	foreach (preg_grep('/^\s*Physical Address[^:]*:\s*([0-9a-f-]+)/i', $out) as $line) {
		$mac[] = substr(strrchr($line, ' '), 1);
	}
	$mac = str_replace("-", "", $mac[0]);
	$value = "RG43S_".strtoupper(md5($mac));
	file_put_contents("./files/mac.txt", $value);

	return $value;
}