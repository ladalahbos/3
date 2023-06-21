<?php
include 'config.php';

$deviceiki = preg_split('/\n|\r\n?/', trim(file_get_contents($rg43sconf['rg43s_dir_file'] . 'mac.txt')));
$devicekabeh = count($deviceiki);
$deviceopset = 0;
if ($deviceopset == $devicekabeh) {
        $deviceopset = 0;
    }
$devicemu = $deviceiki[$deviceopset];
$reg = 'Asia/Jakarta';
$gas = new DateTime("now", new DateTimeZone($reg));
$waktusaiki = $gas->format('D, F d, Y G:i:s');

print "\r\n" . PHP_EOL;
print "                       \e[96m ♪         ___________    ___________     ♪
                       ♪♪♪        \&&&&&&&&& \ _/&&&&&&&&&& \   ♪♪♪
                        ♪         /&&&    &&& | &&& ____&&&_/    ♪
                       ♪♪♪       /&&&    &&& / &&& /_______     ♪♪♪
                        ♪       /&&&&&&&&& _/ &&& /&&&&&& /      ♪
                       ♪♪♪     /&&&____ &&& /&&& /\__&&& /      ♪♪♪
                        ♪     /&&&/   /&&& /&&& /   &&& /        ♪
                       ♪♪♪   /&&&/   /&&& /&&&&&&&&&&& /        ♪♪♪
                        ♪    \__/    \________________/          ♪ \e[0m
                        " . PHP_EOL;
print "\e[91m  ====================================================================================== \e[0m" . PHP_EOL;
print "  \e[96m♪ Status Membership :\e[91m Lifetime\e[0m" . PHP_EOL;
print "  \e[96m♪ Your Public Key : \e[91m".strtoupper($validation['publicKey']) . "\e[0m" . PHP_EOL;
print "  \e[96m♪ Your Private Key : \e[91m".strtoupper($validation['privateKey'])."\e[0m" . PHP_EOL;
print "  \e[96m♪ Your Device ID : \e[91m".$devicemu."\e[0m" . PHP_EOL;
echo "  \e[96m♪ Time Used : \e[91m".$waktusaiki." WIB\e[0m" . PHP_EOL;
print "  \e[91m====================================================================================== \e[0m" . PHP_EOL;

if($validation['publicKey'] == ""){
	echo "  \e[101mYOUR PUBLIC KEY IS EMPTY!\e[0m" . PHP_EOL;
	exit();
}
if($validation['privateKey'] == ""){
	echo "  \e[101mYOUR PRIVATE KEY IS EMPTY!\e[0m" . PHP_EOL;
	exit();
}
?>