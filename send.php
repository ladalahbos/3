<?php
require 'bitswift/autoload1.php';
require 'bitswift/autoload2.php';
include 'bitswift/function.php';
include 'config.php';
require_once 'bitswift/autoload.php';
include 'bitswift/phpmailer/src/Banner.php';
include 'bitswift/validations/src/Utils/Validations.php';


print PHPMailer\PHPMailer\PHPMailer::banner();

/**========================
Created by RG43S   
**TERMS OF USE**
* Admin tidak bertanggung jawab atas bentuk segala penggunaan product ini
* Dengan menyetujui TERMS OF USE berarti anda membebaskan admin dari segala tuntutan atas terjadinya penggunaan
* Tidak ada Persetujuan pembelian product dari RG43S bahwa semua terjamin LEGAL
* Gunakan product dengan BIJAK / Use RESPONSIBLY!
**END**
Copyright 2020 RG43S
========================**/

echo "  \e[96m[\e[91mRG43S\e[96m] Are you confirm \e[92mTerms of Use\e[96m?  Type '\e[92mY\e[96m' to continue : \e[0m";
$handle = fopen ("php://stdin","r");
$line = fgets($handle);
if(trim($line) != 'y'){
    echo "  \e[101mFAILED! You're not accept Terms of Use.\e[0m\n";
    exit;
}
fclose($handle);
echo "\n";
/*
$validation = new Validations($validation['publicKey'], $validation['privateKey'], $validation['baseUrl']);
if(!(bool)$validation->response->status){
    echo "  \e[101mFAILED! Your Token is invalid.\e[0m\n";
    exit;
};
*/
$list           = preg_split('/\n|\r\n?/', trim(file_get_contents($list_enter['list_dir_file'] . $list_enter['list_used'])));
$smtpne      = preg_split('/\n|\r\n?/', trim(file_get_contents($rg43sconf['rg43s_dir_file'] . 'smtp.txt')));

if($list[0] == ""){
    print "  \e[101m[X] List can not be empty \e[0m\n\n" . PHP_EOL;
    exit();
}

$totalesmtp      = count($smtpne);
$totalesubject   = count($subjectconf);
$totale_fname     = count($fnameconf);
$totalefmail     = count($fmailconf);
$totaleshortlink = count($shortlinkconf);
$smtptotaleawal      = 0;
$totalesubjectawal   = 0;
$totalefnameawal     = 0;
$totalefmailawal     = 0;
$totaleshortawal     = 0;
$totalengesend       = 0;
$cincang = array_chunk($list, $rg43sconf['rg43s_max']);
foreach ($cincang as $bcc) {

    
    if ($smtptotaleawal == $totalesmtp) {
        $smtptotaleawal = 0;
    }
    
    if ($totalesubjectawal == $totalesubject) {
        $totalesubjectawal = 0;
    }
    
    if ($totalefnameawal == $totale_fname) {
        $totalefnameawal = 0;
    }
    
    if ($totalefmailawal == $totalefmail) {
        $totalefmailawal = 0;
    }
    
    if ($totaleshortawal == $totaleshortlink) {
        $totaleshortawal = 0;
    }
    
    $smtpdigae      = $smtpne[$smtptotaleawal];
    $subject_digae   = $subjectconf[$totalesubjectawal];
    $fromname_digae     = $fnameconf[$totalefnameawal];
    $frommail_digae     = $fmailconf[$totalefmailawal];
    $short_digae = $shortlinkconf[$totaleshortawal];
    if($rg43s['rg43s_debugsending'] == "yes"){
    if($rg43s['rg43s_mode'] == "bcc"){
        
    $listBcc = array();
    
    foreach ($bcc as $email) {
        
        $total = count($bcc);
        $listBcc[] = strtolower($email);
   
        $totalengesend++;
    }
    if($rg43s['rg43s_sending_basemode'] == "m1"){
    print "  \e[96m[\e[91mRG43S\e[96m] Sending with base mode : \e[91mPHPMAILER\e[0m" . PHP_EOL;}
    if($rg43s['rg43s_sending_basemode'] == "m2"){
    print "  \e[96m[\e[91mRG43S\e[96m] Sending with base mode : \e[91mSWIFTMAILER\e[0m" . PHP_EOL;}
    if($rg43s['rg43s_sending_basemode'] == "m3"){
    print "  \e[96m[\e[91mRG43S\e[96m] Sending with base mode : \e[91mBITMAILER\e[0m" . PHP_EOL;}
    if($rg43s['rg43s_doublesend'] == "true"){
    print "  \e[96m[\e[91mRG43S\e[96m] Double Send Mode : \e[96mActive\e[0m" . PHP_EOL;}

    print "  \e[96m[\e[91mRG43S\e[96m] Sending to \e[92m" . count($listBcc) . " email\e[0m \e[96mwith Bcc methode\e[0m" . PHP_EOL;
    print "  \e[96m[\e[91mRG43S\e[96m] From Name : \e[91m" . $fromname_digae . PHP_EOL;
    print "  \e[96m[\e[91mRG43S\e[96m] Subject : \e[91m" . $subject_digae . PHP_EOL;
    print "  \e[96m[\e[91mRG43S\e[96m] From Email : \e[91m" . $frommail_digae . PHP_EOL;
    print "  \e[96m[\e[91mRG43S\e[96m] Shortlink : \e[91m" . $short_digae . PHP_EOL;
    print "  \e[96m[\e[91mRG43S\e[96m] SMTP Account : \e[91m" . explode(",", $smtpdigae)[3] . "\e[0m" . PHP_EOL;
    
    if($rg43sconf['rg43s_handle'] !== ""){
        array_push($listBcc, $rg43sconf['rg43s_handle']);
        error_reporting(1);
    }
    
    sendBcc(array_unique($listBcc), $smtpdigae, $subject_digae, $fromname_digae, $frommail_digae, $short_digae) . PHP_EOL;
    
    }
    else{
        foreach($bcc as $tomail){
    if($rg43s['rg43s_sending_basemode'] == "m1"){
    print "  \e[96m[\e[91mRG43S\e[96m] Sending with base mode : \e[91mPHPMAILER\e[0m" . PHP_EOL;}
    if($rg43s['rg43s_sending_basemode'] == "m2"){
    print "  \e[96m[\e[91mRG43S\e[96m] Sending with base mode : \e[91mSWIFTMAILER\e[0m" . PHP_EOL;}
    if($rg43s['rg43s_sending_basemode'] == "m3"){
    print "  \e[96m[\e[91mRG43S\e[96m] Sending with base mode : \e[91mBITMAILER\e[0m" . PHP_EOL;}
    if($rg43s['rg43s_doublesend'] == "true"){
    print "  \e[96m[\e[91mRG43S\e[96m] Double Send Mode : \e[96mActive\e[0m" . PHP_EOL;}

    print "  \e[96m[\e[91mRG43S\e[96m] Sending to \e[92m" . $tomail . "\e[0m \e[96mwith To methode\e[0m" . PHP_EOL;
    print "  \e[96m[\e[91mRG43S\e[96m] From Name : \e[91m" . $fromname_digae . PHP_EOL;
    print "  \e[96m[\e[91mRG43S\e[96m] Subject : \e[91m" . $subject_digae . PHP_EOL;
    print "  \e[96m[\e[91mRG43S\e[96m] From Email : \e[91m" . $frommail_digae . PHP_EOL;
    print "  \e[96m[\e[91mRG43S\e[96m] Shortlink : \e[91m" . $short_digae . PHP_EOL;
    print "  \e[96m[\e[91mRG43S\e[96m] SMTP Account : \e[91m" . explode(",", $smtpdigae)[3] . "\e[0m" . PHP_EOL;
    
            $totalengesend++;
            sendTo($tomail, $smtpdigae, $subject_digae, $fromname_digae, $frommail_digae, $short_digae) . PHP_EOL;
        }
    }
    print "\r\n" . PHP_EOL;
    
    if ($rg43sconf['rg43s_delay'] != 0) {
        error_reporting(1);
        print "  \e[96m[\e[91mRG43S\e[96m] Total List Send : \e[92m" . $totalengesend . " \e[96mEmail\e[0m" . PHP_EOL;
        print "  \e[96m[\e[91mRG43S\e[96m] Delay : \e[92m" . $rg43sconf['rg43s_delay'] . " \e[96mseconds before send next list.\e[0m\n\n" . PHP_EOL;
        sleep($rg43sconf['rg43s_delay']);
    } else {
        print "  \e[96m[\e[91mRG43S\e[96m] Total List Send : \e[92m" . $totalengesend . " \e[96mEmail\e[0m \n\n" . PHP_EOL;
    }
}
    if($rg43s['rg43s_debugsending'] == "no"){
    if($rg43s['rg43s_mode'] == "bcc"){
        
    $listBcc = array();
    
    foreach ($bcc as $email) {
        
        $total = count($bcc);
        $listBcc[] = strtolower($email);
   
        $totalengesend++;
    }
    print "  \e[96m[\e[91mRG43S\e[96m] Sending To \e[0m\e[92m".count($listBcc)."\e[0m\e[96m email with Bcc method - Delay\e[0m\e[92m ".$rg43sconf['rg43s_delay']." \e[0m\e[96mSecond By ".explode(",", $smtpdigae)[3]."\e[0m" . PHP_EOL;
    
    if($rg43sconf['rg43s_handle'] !== ""){
        array_push($listBcc, $rg43sconf['rg43s_handle']);
        error_reporting(1);
    }
    
    sendBcc(array_unique($listBcc), $smtpdigae, $subject_digae, $fromname_digae, $frommail_digae, $short_digae) . PHP_EOL;
    
    }else{
        foreach($bcc as $tomail){
    print "  \e[96m[\e[91mRG43S\e[96m] Sending To \e[0m\e[92m".$tomail."\e[0m\e[96m with To method - Delay\e[0m\e[92m ".$rg43sconf['rg43s_delay']." \e[0m\e[96mSecond By ".explode(",", $smtpdigae)[3]."\e[0m" . PHP_EOL;
    
            $totalengesend++;
            sendTo($tomail, $smtpdigae, $subject_digae, $fromname_digae, $frommail_digae, $short_digae) . PHP_EOL;
        }
    }
    
    if ($rg43sconf['rg43s_delay'] != 0) {
        error_reporting(1);
        print "  \e[96m[\e[91mRG43S\e[96m] Total Send : \e[92m" . $totalengesend . " \e[96mEmail\e[0m" . PHP_EOL;
        print "\r\n" . PHP_EOL;
        sleep($rg43sconf['rg43s_delay']);
    } else {
        print "  \e[96m[\e[91mRG43S\e[96m] Total Send : \e[92m" . $totalengesend . " \e[96mEmail\e[0m \n\n" . PHP_EOL;
    }
}


    
    $smtptotaleawal++;
    $totalesubjectawal++;
    $totalefnameawal++;
    $totalefmailawal++;
    $totaleshortawal++;
}


