<?php
/**========================
Created by RG43SENDER   
**TERMS OF USE**
* Admin tidak bertanggung jawab atas bentuk segala penggunaan product ini
* Dengan menyetujui TERMS OF USE berarti anda membebaskan admin dari segala tuntutan atas terjadinya penggunaan
* Tidak ada Persetujuan pembelian product dari RG43S bahwa semua terjamin LEGAL
* Gunakan product dengan BIJAK
**END**
Copyright 2020 RG43S
========================**/

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Sender\BIT\Mailer;
use Sender\BIT\Exception1;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
require './config.php';
require 'autoload.php';


function randominaja($data)
{

    $tags = array(
        "##email##",
        "##randomemail##",
        "##randomstring##",
        "##randomstring1##",
        "##randomstring2##",
        "##randomstring3##",
        "##randomstring4##",
        "##randomstringlower##",
        "##randomstringupper##",
        "##randomnumber##",
        "##date##",
        "##date1##",
        "##date2##",
        "##date3##",
        "##date4##",
        "##randomip##",
        "##randomos##",
        "##randomdevice##",
        "##randomcountry##",
        "##md5micro##",
        "##specialnumber##",
        "##md5microupper##",
        "##md5microlower##",
        "##generateid##",
        "##randomdomains##",
        "##randomdomains2##",
        "##randomdomains3##",
        "##randomsha1##",
        "##randombin2hex##"
    );
    
    $rapper  = array(
        email(),
        randomEmail(),
        randomStr(10),
        randomStr1(10),
        randomStr2(10),
        randomStr3(10),
        randomStr4(10),
        strtolower(randomStr(20)),
        strtoupper(randomStr(20)),
        randomNum(10),
        date('Y-m-d H:i:s'),
        date('D, F d, Y  g:i A'),
        date('D, F d, Y'),
        date('F d, Y  g:i A'),
        date('F d, Y'),
        randIP(),
        randomOS(),
        randomDevice(),
        randomCountry(),
        md5micro(),
        randNumber(10),
        md5microupper(),
        md5microlower(),
        generateId(),
        randomdomains(),
        randomdomains2(),
        randomdomains3(),
        randomSha1(),
        randomBin2hex()
    );
    
    return str_replace($tags, $rapper, $data);
}

function email($listBcc = array())
{
    foreach($listBcc as $email){
    $result = strtolower($email, $sendto);
    return strtolower($result);
}
}


function randomBin2hex(){
    $bin2hex = bin2hex(random_bytes(24));

    return $bin2hex;

}

function randomSha1(){
    $sha = sha1(time());

    return $sha;
}

function randomNum($length)
    {
        $result = '1234567890';
        $numberlength = strlen($result);
        $randomnumber = '';
        for ($i = 0; $i < $length; $i++) {
            $randomnumber .= $result[rand(0, $numberlength - 1)];
        }
        return $randomnumber;
    }
    
function randomStr($length = 16)
    {
        $characters       = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString     = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
}

function randomStr1($length = 16)
    {
        $characters       = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString     = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
}

function randomStr2($length = 16)
    {
        $characters       = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString     = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
}

function randomStr3($length = 16)
    {
        $characters       = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString     = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
}

function randomStr4($length = 16)
    {
        $characters       = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString     = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
}

function randomEmail()
    {
        $tld = array("com","biz","net","org","edu","com.au","ca","fr","us","de","id","in","co.jp","io","me","com.ae","co.uk","nl","cn","com.br");
        return strtolower (randomStr($length = 25)) . "@" . strtolower (randomStr($length = 8)) . "." . strtolower (randomStr($length = 15)) . "." . $tld[array_rand($tld)];
}

function randIP()
    {
        $result = mt_rand(0, 255) . '.' .mt_rand(0, 255) . '.' .mt_rand(0, 255) . '.' .mt_rand(0, 255);
        
        for ($i = 0; $i ; $i++) {
            $result .= mt_rand(0, 255);
        }
        
        return $result;
    }
    
function randomOS()
    {
        $oslist = array("Windows 7","Windows Vista","Windows XP","Windows 8","Windows 10","Mac OS X","Apple iOS","Cent OS","Linux","Ubuntu","Android","Windows Phone");
        return $oslist[array_rand($oslist)];
    }

function randomDevice()
    {
        $devicelist = array("iPhone 6","iPhone 6s","iPhone 6s+","iPhone 7","iPhone 7s","iPhone 7s+","iPhone 8","iPhone 8s","iPhone 8s+","iPhone X","iPhone XS","iPhone XS Max","iPhone 11","iPhone 11 Pro","iPhone 11 Pro Max","iPhone XR","iPad","iPad 2","iPad 3","iPad 4","iPad 9.7","iPad 10.2","iPad Air","iPad Air 2","iPad Mini","iPad Mini 3","iPad Mini 4","iPad Pro","Samsung Galaxy Xcover Pro","Samsung Galaxy Note10 Lite","Samsung Galaxy S10 Lite","Samsung Galaxy A01","Samsung Galaxy A71","Samsung Galaxy A51","Samsung Galaxy Xcover Field Pro","Samsung Galaxy A70s","Samsung Galaxy A20s","Samsung Galaxy M30s","Samsung Galaxy M10s","Samsung Galaxy Fold 5G","Samsung Galaxy Fold","Samsung Galaxy Tab Active Pro","Samsung Galaxy A90 5G","Samsung Galaxy A30s","Samsung Galaxy A50s","Samsung Galaxy Note10+ 5G","Samsung Galaxy Note10+","Samsung Galaxy Note10","Samsung Galaxy Tab S6","Samsung Galaxy Note9","Samsung Galaxy S9","Samsung Galaxy S8+","Samsung Galaxy A8","Samsung Galaxy S9+","Motorolla Phone","Xiaomi Phone","Nokia Phone","Acer Phone","Lenovo Phone","Sharp Phone","LG Phone","Sony Phone","Google Phone","Asus Phone","Asus Republic Of Gamers","Huawei Phone","Microsoft Phone","Vivo Phone","Oppo Phone","Meizu Phone","Realme Phone","Vodafone Phone","Blackberry Phone");
        return $devicelist[array_rand($devicelist)];
    }

function mtanumber()
    {
        $result = mt_rand(800, 899);
        
        for ($i = 0; $i ; $i++) {
            $result .= mt_rand(800, 899);
        }
        
        return $result;
    }
    
function hurufacak()
    {
        $huruf = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
        return $huruf[array_rand($huruf)];
    }

function randomCountry()
{
       $list_country = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bonaire", "Bosnia and Herzegovina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Democratic Republic of the Congo", "Cook Islands", "Costa Rica", "Croatia", "Cuba", "CuraÃ§ao", "Cyprus", "Czech Republic", "CÃ´te d'Ivoire", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guernsey", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard Island and Mcdonald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran, Islamic Republic of", "Iraq", "Ireland", "Isle of Man", "Israel", "Italy", "Jamaica", "Japan", "Jersey", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macao", "Macedonia, the Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montenegro", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Palestine, State of", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Romania", "Russian Federation", "Rwanda", "Reunion", "Saint Barthelemy", "Saint Helena", "Saint Kitts and Nevis", "Saint Lucia", "Saint Martin (French part)", "Saint Pierre and Miquelon", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Sint Maarten (Dutch part)", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "South Sudan", "Spain", "Sri Lanka", "Sudan", "Suriname", "Svalbard and Jan Mayen", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "United Republic of Tanzania", "Thailand", "Timor-Leste", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Viet Nam", "British Virgin Islands", "US Virgin Islands", "Wallis and Futuna", "Western Sahara", "Yemen", "Zambia", "Zimbabwe", "Aland Islands");
       return $list_country[array_rand($list_country)];
}
    
function acaksubject($subject)
{
    
    $subject = array($subject);
    shuffle($subject);
}

function randomdomains(){
    $domain = array("com","biz","net","org","edu","com.au","ca","fr","us","de","id","in","co.jp","io","me","com.ae","co.uk","nl","cn","com.br");
    return strtolower(randomStr(10)) . "." . $domain[array_rand($domain)];
}

function randomdomains2(){
    $domain = array("com","biz","net","org","edu","com.au","ca","fr","us","de","id","in","co.jp","io","me","com.ae","co.uk","nl","cn","com.br");
    return strtolower(randomStr(10)) . "." . strtolower(randomStr(10)) . "." . $domain[array_rand($domain)];
}

function randomdomains3(){
    $domain = array("com","biz","net","org","edu","com.au","ca","fr","us","de","id","in","co.jp","io","me","com.ae","co.uk","nl","cn","com.br");
    return strtolower(randomStr(10)) . "." . strtolower(randomStr(10)) . "." . strtolower(randomStr(10)) . "." . $domain[array_rand($domain)];
}

function generaterandom($type, $length, $kind){
    switch ($type) {
        case 'number':
            $res = '01234567890987654321'; break;
        case 'mixed':
            $res = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ0987654321'; break;
        case 'string':
            $res = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; break;
        default:
            $res = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'; break;
    }
    $strlen = strlen($res);
    $str = '';
    for ($i=0; $i < $length; $i++) {
        $str .= $res[rand(0, $strlen - 1)];
    }
    if ($kind == 'upper') {
        return strtoupper($str);
    }else if ($kind == 'lower') {
        return strtolower($str);
    }else if ($type == 'number'){
        return $str;
    }else{
        return $str;
    }
}

function replacementcustom($body, $value){
    foreach ($value as $key => $value) {
    $getisi = explode("|", $value);
    shuffle($getisi);
    $isinya = $getisi[array_rand($getisi)];
    $body = str_ireplace($key, $isinya, $body);
    }
    return $body;
}

function random($body){
    @preg_match_all("/##(.*?)##/", $body, $match);

    foreach($match[1] as $key => $isi) {
        if (preg_match("/(_)/", $isi)) {
            $buff = explode("_", $isi);
            $getrand = generaterandom($buff[0],$buff[2],$buff[1]);
            $wajib = "##".$isi."##";
            $body = str_replace($wajib, $getrand, $body);
        }
    }
    return $body;
}

function md5micro(){ // MD5 VALUED BY ADMIN (Don't change anything!)

    $token = md5(microtime().mt_rand()); // MD5 VALUED (Don't change anything!)
    $token = md5(microtime()); // MD5 VALUED BY ADMIN (Don't change anything!)
    return $token; // MD5 VALUED BY ADMIN (Don't change anything!)
}
function md5microupper(){ // MD5 VALUED BY ADMIN (Don't change anything!)

    $token = strtoupper(md5(microtime().mt_rand())); // MD5 VALUED BY ADMIN (Don't change anything!)
    $token = strtoupper(md5(microtime())); // MD5 VALUED BY ADMIN (Don't change anything!)
    return $token; // MD5 VALUED BY ADMIN (Don't change anything!)
}
function md5microlower(){ // MD5 VALUED BY ADMIN (Don't change anything!)

    $token = strtolower(md5(microtime().mt_rand())); // MD5 VALUED BY ADMIN (Don't change anything!)
    $token = strtolower(md5(microtime())); // MD5 VALUED BY ADMIN (Don't change anything!)
    return $token; // MD5 VALUED BY ADMIN (Don't change anything!)
}

function randNumber($length) {

    $numbernya = mt_rand(1, 999) . mt_rand(1, 999) . mt_rand(1, 999) . mt_rand(1, 999) . mt_rand(1, 999);
    for ($i = 0; $i ; $i++) {
            $numbernya .= mt_rand(1, 999) . mt_rand(1, 999) . mt_rand(1, 999) . mt_rand(1, 999) . mt_rand(1, 999);
        }
    return $numbernya;
}

function generateId()
    {
        $len = 32; //32 bytes = 256 bits
        $bytes = '';
        if (function_exists('random_bytes')) {
            try {
                $bytes = random_bytes($len);
            } catch (\Exception $e) {
                //Do nothing
            }
        } elseif (function_exists('openssl_random_pseudo_bytes')) {
            /** @noinspection CryptographicallySecureRandomnessInspection */
            $bytes = openssl_random_pseudo_bytes($len);
        }
        if ($bytes === '') {
            //We failed to produce a proper random string, so make do.
            //Use a hash to force the length to the same as the other methods
            $bytes = hash('sha256', uniqid((string) mt_rand(), true), true);
        }

        //We don't care about messing up base64 format here, just want a random string
        return str_replace(['=', '+', '/'], '', base64_encode(hash('sha256', $bytes, true)));
    }


    if($rg43s['rg43s_sending_basemode'] == "m1"){
        function sendBcc($listBcc = array(), $smtp_account, $subject, $fname, $fmail, $short)
        {
            
            global $rg43s, $rg43sconf, $bit_attach, $list, $subjectconf, $list_enter, $letter_list, $custom_header, $bit_replace, $takeheader, $header_subject;;
            
            $mail = new PHPMailer(true);
            
            try {
                $smtp = explode("," , $smtp_account);
                $letter = randominaja(str_replace(array('##shortlink##', '##email##'),array($short), file_get_contents($letter_list['letter_dir_file'] . $letter_list['change_letter'])));
                $letter1 = randominaja(str_replace(array('##shortlink##', '##email##'),array($short), file_get_contents($letter_list['letter_dir_file'] . $letter_list['plain_text'])));
                $subject = randominaja($subject);
                $fname = randominaja($fname);
                $fmail = randominaja($fmail);
                $bit_attach = randominaja($bit_attach);
                $domainSMTP = ($smtp[3])[1];                 
                $mail->isSMTP();                                      
                $mail->Host       = $smtp[0];                    
                $mail->SMTPAuth   = true;                                 
                $mail->Username   = $smtp[3];                    
                $mail->Password   = $smtp[4];        
                $mail->SMTPSecure = $smtp[2];     
                $mail->Port       = $smtp[1];
                $mail->CharSet = $rg43sconf['rg43s_charset'];
                $mail->Encoding   = $rg43sconf['rg43s_encoding'];
                $mail->Priority = $rg43sconf['rg43s_priority'];    
                $mail->setFrom($smtp[3], random($fname));
                $mail->SMTPOptions = ['socket' => ['bindto' => randIP(),],];
                
                if($rg43sconf['rg43s_to'] != ""){
                    $mail->addAddress($rg43sconf['rg43s_to']);
                
                }
                if($rg43sconf['rg43s_to1'] != ""){
                    $mail->addAddress($rg43sconf['rg43s_to1']);
                    
                }
                if($rg43sconf['rg43s_to2'] != ""){
                    $mail->addAddress($rg43sconf['rg43s_to2']);
        
                }
                if($rg43sconf['rg43s_cc'] != ""){
                    $mail->addCc($rg43sconf['rg43s_cc']);
                    
                }
                
                
                foreach ($listBcc as $email) {
                    
                    $mail->addBcc($email);
                    
                    if($list_enter['list_remove'] == "true"){
                    $list = array_diff($list, array($email));
                    file_put_contents($list_enter['list_dir_file'] . $list_enter['list_used'],implode("\r\n", $list));
                }
                    
                }
                
                $bounce = explode("@", $listBcc[0]);
                
                if($bit_attach['attachment_1'] != ""){
                $mail->addAttachment($bit_attach['rg43s_dir_file'] . $bit_attach['attachment_1'], randominaja($bit_attach['rename_1']));
                    
                }
                
                if($bit_attach['attachment_2'] != ""){
                $mail->addAttachment($bit_attach['rg43s_dir_file'] . $bit_attach['attachment_2'], random($bit_attach['rename_2']));
                
                }
                
                if($bit_attach['attachment_3'] != ""){
                $mail->addAttachment($bit_attach['rg43s_dir_file'] . $bit_attach['attachment_3'], random($bit_attach['rename_3']));
                
                }
        
                if ($rg43sconf['rg43s_header'] == true){
                foreach($custom_header as $cheader){
                    $chead = explode("|", $cheader);
                    $chead[0] = replacementcustom($chead[0], $bit_replace);
                    $chead[0] = randominaja($chead[0], $bit_replace);
                    $chead[0] = random($chead[0], $bit_replace);
                    $chead[1] = replacementcustom($chead[1], $bit_replace);
                    $chead[1] = randominaja($chead[1], $bit_replace);
                    $chead[1] = random($chead[1], $bit_replace);
                    $mail->addCustomHeader($chead[0], $chead[1]);
                }
                }
                
                $mail->isHTML(true);
                if($header_subject['subject_mode'] == "header"){
                $mail->Subject = $chead[1];}
                if($header_subject['subject_mode'] == "subjectlist"){
                $mail->Subject = random($subject) . acaksubject($subject);}
                $mail->Body    = random($letter);
                if($letter_list['contenttype_mode'] == true){
                $mail->AltBody = random($letter1);}
                $mail->ConfirmReadingTo = random($fmail);
                
                if($rg43s['rg43s_doublesend'] == "true"){
                $result = $mail->send() . $mail->send();
        
                echo "  \e[96m[\e[91mRG43S\e[96m] Send Status :\e[0m \e[92mSuccess\e[0m" . PHP_EOL;
                $mail->ClearAllRecipients();}
        
                if($rg43s['rg43s_doublesend'] == "false"){
                $result = $mail->send();
                
                echo "  \e[96m[\e[91mRG43S\e[96m] Send Status :\e[0m \e[92mSuccess\e[0m" . PHP_EOL;
                $mail->ClearAllRecipients();}
                
            }catch (Exception $e) {
                echo "  \e[96m[！] Send Status :\e[0m \e[101m".$mail->ErrorInfo." \e[0m" . PHP_EOL;
            }
            
        }
        }

if($rg43s['rg43s_sending_basemode'] == "m1"){
function sendTo($sendto, $smtp_account, $subject, $fname, $fmail, $short)
{
    
    global $rg43s, $rg43sconf, $bit_attach, $list, $list_enter, $letter_list, $custom_header, $bit_replace, $subjectconf, $header_subject, $header_up;;
    
    $mail = new PHPMailer(true);
    try {
        $smtp = explode("," , $smtp_account);
        $letter = randominaja(str_replace(array('##shortlink##', '##email##'),array($short, $sendto), file_get_contents($letter_list['letter_dir_file'] . $letter_list['change_letter'])));
        $letter1 = randominaja(str_replace(array('##shortlink##', '##email##'),array($short, $sendto), file_get_contents($letter_list['letter_dir_file'] . $letter_list['plain_text'])));
        $subject = randominaja($subject);
        $fname = randominaja($fname);
        $fmail = randominaja($fmail);
        $short = randominaja($short);
        $bit_attach = randominaja($bit_attach);
        $domainSMTP = ($smtp[3])[1];
        $mail->SMTPDebug = 0;                
        $mail->isSMTP();                               
        $mail->Host       = $smtp[0];            
        $mail->SMTPAuth   = true;                          
        $mail->Username   = $smtp[3];  
        $mail->Password   = $smtp[4];
        $mail->SMTPSecure = $smtp[2]; 
        $mail->Port       = $smtp[1];
        $mail->CharSet = $rg43sconf['rg43s_charset'];
        $mail->Encoding   = $rg43sconf['rg43s_encoding'];
        $mail->Priority = $rg43sconf['rg43s_priority'];
        $mail->setFrom(random(str_replace("##domainsmtp##", $domainSMTP, $fmail)), random($fname));
        $mail->addAddress($sendto);
        
        if($rg43sconf['rg43s_cc'] != ""){
            $mail->addCc(randominaja($rg43sconf['rg43s_cc']));
            
        }
        
        if($list_enter['list_remove'] == "true"){
           $list = array_diff($list, array($sendto));
           file_put_contents($list_enter['list_dir_file'] . $list_enter['list_used'],implode("\r\n", $list));
        }

        
        $bounce = explode("@", $sendto);
        
        if($bit_attach['attachment_1'] != ""){
        $mail->addAttachment($bit_attach['rg43s_dir_file'] . $bit_attach['attachment_1'], randominaja($bit_attach['rename_1']));
            
        }
        
        if($bit_attach['attachment_2'] != ""){
        $mail->addAttachment($bit_attach['rg43s_dir_file'] . $bit_attach['attachment_2'], random($bit_attach['rename_2']));
        
        }
        
        if($bit_attach['attachment_3'] != ""){
        $mail->addAttachment($bit_attach['rg43s_dir_file'] . $bit_attach['attachment_3'], random($bit_attach['rename_3']));
        
        }
        if ($rg43sconf['rg43s_header'] == true){
        foreach($custom_header as $cheader){
            $chead = explode("|", $cheader);
            $chead[0] = replacementcustom($chead[0], $bit_replace);
            $chead[0] = randominaja($chead[0], $bit_replace);
            $chead[0] = random($chead[0], $bit_replace);
            $chead[1] = replacementcustom($chead[1], $bit_replace);
            $chead[1] = randominaja($chead[1], $bit_replace);
            $chead[1] = random($chead[1], $bit_replace);
            $mail->addCustomHeader($chead[0], $chead[1]);
        }
    }

        $mail->AllowEmpty = true;
        $mail->WordWrap = 50;   
        $mail->isHTML(true);
        if($header_subject['subject_mode'] == "header"){
        $mail->Subject = $chead[1];}
        if($header_subject['subject_mode'] == "subjectlist"){
        $mail->Subject = random($subject) . acaksubject($subject);}
        $mail->Body    = random($letter);
        if($letter_list['contenttype_mode'] == true){
        $mail->AltBody = random($letter1);}

        if($rg43s['rg43s_doublesend'] == "true"){
        $result = $mail->send() . $mail->send();

        echo "  \e[96m[\e[91mRG43S\e[96m] Send Status :\e[0m \e[92mSuccess\e[0m" . PHP_EOL;
        $mail->ClearAllRecipients();}

        if($rg43s['rg43s_doublesend'] == "false"){
        $result = $mail->send();
        
        echo "  \e[96m[\e[91mRG43S\e[96m] Send Status :\e[0m \e[92mSuccess\e[0m" . PHP_EOL;
        $mail->ClearAllRecipients();}
        
    }catch (Exception $e) {
        echo "  \e[96m[！] Send Status :\e[0m \e[101m".$mail->ErrorInfo." \e[0m" . PHP_EOL;
    }
    
}
}

if($rg43s['rg43s_sending_basemode'] == "m2"){
function swiftBcc($listBcc = array(), $smtp_account, $subject, $fname, $fmail, $short)
{
    
    global $rg43s, $rg43sconf, $bit_attach, $list, $subjectconf, $list_enter, $letter_list, $custom_header, $bit_replace, $takeheader, $header_subject;;

    try {
        $smtp = explode("," , $smtp_account);
        $letter = randominaja(str_replace(array('##shortlink##'),array($short), file_get_contents($letter_list['letter_dir_file'] . $letter_list['change_letter'])));
        $letter1 = randominaja(str_replace(array('##shortlink##', '##email##'),array($short), file_get_contents($letter_list['letter_dir_file'] . $letter_list['plain_text'])));
        $subject = randominaja($subject);
        $fname = randominaja($fname);
        $fmail = randominaja($fmail);
        $short = randominaja($short);
        $bit_attach = randominaja($bit_attach);
        $domainSMTP = ($smtp[3])[1];
        $transport = (new Swift_SmtpTransport($smtp[0], $smtp[1], $smtp[2]))->setUsername($smtp[3])->setPassword($smtp[4]);
        $mailer = new Swift_Mailer($transport);
        $mailer->SMTPOptions = ['socket' => ['bindto' => randIP(),],];
        $message = (new Swift_Message())->setFrom(random(str_replace("##domainsmtp##", $domainSMTP, $fmail)), random($fname))->setBody(random($letter), 'text/html')->setPriority($rg43sconf['rg43s_priority']);
        $message->getHeaders()->get($subject);
        $message->getHeaders()->get('Content-Type')->setParameter('charset', $rg43sconf['rg43s_charset']);
        $message->getHeaders()->get('Content-Transfer-Encoding')->setValue($rg43sconf['rg43s_encoding']);

        if($rg43sconf['rg43s_to'] !=""){
        $message->setTo($rg43sconf['rg43s_to']);
    }

        if($rg43sconf['rg43s_to1'] !=""){
        $message->setTo($rg43sconf['rg43s_to1']);
    }

        if($rg43sconf['rg43s_to2'] !=""){
        $message->setTo($rg43sconf['rg43s_to2']);
    }

        if($rg43sconf['rg43s_cc'] !=""){
        $message->setCc($rg43sconf['rg43s_cc']);
    }

        foreach ($listBcc as $email) {
           $message->setBcc($email);
           
        if($list_enter['list_remove'] == "true"){
        $list = array_diff($list, array($email));
        file_put_contents($list_enter['list_dir_file'] . $list_enter['list_used'],implode("\r\n", $list));
        }
    }
                      
        $bounce = explode("@", $listBcc[0]);
        
         if ($bit_attach['attachment_1'] != NULL) {
                        $sxz = explode("|", $bit_attach['attachment_1']);
                        $sxzu = explode("|", $bit_attach['rename_1']);
                        for ($i=0; $i < count($sxz); $i++) {
                            $attachment = Swift_Attachment::fromPath($bit_attach['rg43s_dir_file'].$sxz[$i]);
                            $attachment->setFilename(replacementcustom(random($sxzu[$i]),$bit_replace));
                            $message->attach($attachment);
                        }

                    }
        
        if ($bit_attach['attachment_2'] != NULL) {
                        $sxz = explode("|", $bit_attach['attachment_2']);
                        $sxzu = explode("|", $bit_attach['rename_2']);
                        for ($i=0; $i < count($sxz); $i++) {
                            $attachment = Swift_Attachment::fromPath($bit_attach['rg43s_dir_file'].$sxz[$i]);
                            $attachment->setFilename(replacementcustom(random($sxzu[$i]),$bit_replace));
                            $message->attach($attachment);
                        }

                    }
        
        if ($bit_attach['attachment_3'] != NULL) {
                        $sxz = explode("|", $bit_attach['attachment_3']);
                        $sxzu = explode("|", $bit_attach['rename_3']);
                        for ($i=0; $i < count($sxz); $i++) {
                            $attachment = Swift_Attachment::fromPath($bit_attach['rg43s_dir_file'].$sxz[$i]);
                            $attachment->setFilename(replacementcustom(random($sxzu[$i]),$bit_replace));
                            $message->attach($attachment);
                        }

                    }

        if ($rg43sconf['rg43s_header'] == true){
        foreach($custom_header as $cheader){
            $chead = explode("|", $cheader);
            $chead[0] = replacementcustom($chead[0], $bit_replace);
            $chead[0] = randominaja($chead[0], $bit_replace);
            $chead[0] = random($chead[0], $bit_replace);
            $chead[1] = replacementcustom($chead[1], $bit_replace);
            $chead[1] = randominaja($chead[1], $bit_replace);
            $chead[1] = random($chead[1], $bit_replace);
            $message->getHeaders()->addTextHeader($chead[0], $chead[1]);
        }
    }
        if($letter_list['contenttype_mode'] == true){
            $message->addPart(random($letter1));}
        
        if($header_subject['subject_mode'] == "header"){
        $message->setSubject($chead[1]);}
        if($header_subject['subject_mode'] == "subjectlist"){
        $message->setSubject(random($subject) . acaksubject($subject));}

        if($rg43s['rg43s_doublesend'] == "true"){
        $mailer->send($message) . $mailer->send($message);
        echo "  \e[96m[\e[91mRG43S\e[96m] Send Status :\e[0m \e[92mSuccess\e[0m" . PHP_EOL;}

        if($rg43s['rg43s_doublesend'] == "false"){
        $mailer->send($message);
        echo "  \e[96m[\e[91mRG43S\e[96m] Send Status :\e[0m \e[92mSuccess\e[0m" . PHP_EOL;}

            }catch (Exception $e) {
                echo "\e[96m[！] Send Status :\e[0m \e[101m:".$e->getmessage()."\e[0m" . PHP_EOL;
}
    
}
}

if($rg43s['rg43s_sending_basemode'] == "m2"){
function swiftTo($sendto, $smtp_account, $subject, $fname, $fmail, $short)
{
    
    global $rg43s, $rg43sconf, $bit_attach, $list, $subjectconf, $list_enter, $letter_list, $custom_header, $bit_replace, $takeheader, $header_subject;;

    try {
        $smtp = explode("," , $smtp_account);
        $letter = randominaja(str_replace(array('##shortlink##', '##email##'),array($short, $sendto), file_get_contents($letter_list['letter_dir_file'] . $letter_list['change_letter'])));
        $letter1 = randominaja(str_replace(array('##shortlink##', '##email##'),array($short, $sendto), file_get_contents($letter_list['letter_dir_file'] . $letter_list['plain_text'])));
        $subject = randominaja($subject);
        $fname = randominaja($fname);
        $fmail = randominaja($fmail);
        $bit_attach = randominaja($bit_attach);
        $domainSMTP = ($smtp[3])[1];
        $transport = (new Swift_SmtpTransport($smtp[0], $smtp[1], $smtp[2]))->setUsername($smtp[3])->setPassword($smtp[4]);
        $mailer = new Swift_Mailer($transport);
        $mailer->registerPlugin(new Swift_Plugins_ThrottlerPlugin(999, Swift_Plugins_ThrottlerPlugin::MESSAGES_PER_MINUTE));
        $mailer->registerPlugin(new Swift_Plugins_ThrottlerPlugin(1024 * 1024 * 10, Swift_Plugins_ThrottlerPlugin::BYTES_PER_MINUTE));
        $mailer->SMTPOptions = ['socket' => ['bindto' => randIP(),],];
        $message = (new Swift_Message())->setFrom(random(str_replace("##domainsmtp##", $domainSMTP, $fmail)), random($fname))->setTo($sendto)->setBody(random($letter), 'text/html')->setPriority($rg43sconf['rg43s_priority']);
        $message->getHeaders()->get($subject);
        $message->getHeaders()->get('Content-Type')->setParameter('charset', $rg43sconf['rg43s_charset']);
        $message->getHeaders()->get('Content-Transfer-Encoding')->setValue($rg43sconf['rg43s_encoding']);

        if($rg43sconf['rg43s_cc'] !=""){
        $message->setCc($rg43sconf['rg43s_cc']);}
        
        if($list_enter['list_remove'] == "true"){
        $list = array_diff($list, array($sendto));
        file_put_contents($list_enter['list_dir_file'] . $list_enter['list_used'],implode("\r\n", $list));
        }
                      
        $bounce = explode("@", $sendto);

        if ($bit_attach['attachment_1'] != NULL) {
                        $sxz = explode("|", $bit_attach['attachment_1']);
                        $sxzu = explode("|", $bit_attach['rename_1']);
                        for ($i=0; $i < count($sxz); $i++) {
                            $attachment = Swift_Attachment::fromPath($bit_attach['rg43s_dir_file'].$sxz[$i]);
                            $attachment->setFilename(replacementcustom(random($sxzu[$i]),$bit_replace));
                            $message->attach($attachment);
                        }

                    }
        
        if ($bit_attach['attachment_2'] != NULL) {
                        $sxz = explode("|", $bit_attach['attachment_2']);
                        $sxzu = explode("|", $bit_attach['rename_2']);
                        for ($i=0; $i < count($sxz); $i++) {
                            $attachment = Swift_Attachment::fromPath($bit_attach['rg43s_dir_file'].$sxz[$i]);
                            $attachment->setFilename(replacementcustom(random($sxzu[$i]),$bit_replace));
                            $message->attach($attachment);
                        }

                    }
        
        if ($bit_attach['attachment_3'] != NULL) {
                        $sxz = explode("|", $bit_attach['attachment_3']);
                        $sxzu = explode("|", $bit_attach['rename_3']);
                        for ($i=0; $i < count($sxz); $i++) {
                            $attachment = Swift_Attachment::fromPath($bit_attach['rg43s_dir_file'].$sxz[$i]);
                            $attachment->setFilename(replacementcustom(random($sxzu[$i]),$bit_replace));
                            $message->attach($attachment);
                        }

                    }

        if ($rg43sconf['rg43s_header'] == true){
        foreach($custom_header as $cheader){
            $chead = explode("|", $cheader);
            $chead[0] = replacementcustom($chead[0], $bit_replace);
            $chead[0] = randominaja($chead[0], $bit_replace);
            $chead[0] = random($chead[0], $bit_replace);
            $chead[1] = replacementcustom($chead[1], $bit_replace);
            $chead[1] = randominaja($chead[1], $bit_replace);
            $chead[1] = random($chead[1], $bit_replace);
            $message->getHeaders()->addTextHeader($chead[0], $chead[1]);
        }
    }
        if($letter_list['contenttype_mode'] == true){
            $message->addPart(random($letter1));}

        if($header_subject['subject_mode'] == "header"){
        $message->setSubject($chead[1]);}
        if($header_subject['subject_mode'] == "subjectlist"){
        $message->setSubject(random($subject) . acaksubject($subject));}

        if($rg43s['rg43s_doublesend'] == "true"){
        $mailer->send($message) . $mailer->send($message);
        echo "  \e[96m[\e[91mRG43S\e[96m] Send Status :\e[0m \e[92mSuccess\e[0m" . PHP_EOL;}

        if($rg43s['rg43s_doublesend'] == "false"){
        $mailer->send($message);
        echo "  \e[96m[\e[91mRG43S\e[96m] Send Status :\e[0m \e[92mSuccess\e[0m" . PHP_EOL;}

            }catch (Exception $e) {
                if (!$mailer->send($message, $failures))
{
  echo "  \e[96m[！] Send Status :\e[0m \e[101m:";
  print_r($failures);
}
    }
    
}
}

if($rg43s['rg43s_sending_basemode'] == "m3"){
function sendBcc($listBcc = array(), $smtp_account, $subject, $fname, $fmail, $short)
{
    
    global $rg43s, $rg43sconf, $bit_attach, $list, $subjectconf, $list_enter, $letter_list, $custom_header, $bit_replace, $takeheader, $header_subject;;
    
    $mail = new Mailer(true);
    
    try {
        $smtp = explode("," , $smtp_account);
        $letter = randominaja(str_replace(array('##shortlink##', '##email##'),array($short), file_get_contents($letter_list['letter_dir_file'] . $letter_list['change_letter'])));
        $letter1 = randominaja(str_replace(array('##shortlink##', '##email##'),array($short), file_get_contents($letter_list['letter_dir_file'] . $letter_list['plain_text'])));
        $subject = randominaja($subject);
        $fname = randominaja($fname);
        $fmail = randominaja($fmail);
        $bit_attach = randominaja($bit_attach);
        $domainSMTP = ($smtp[3])[1];                 
        $mail->isSMTP();                                      
        $mail->Host       = $smtp[0];                    
        $mail->SMTPAuth   = true;                                 
        $mail->Username   = $smtp[3];                    
        $mail->Password   = $smtp[4];        
        $mail->SMTPSecure = $smtp[2];     
        $mail->Port       = $smtp[1];
        $mail->CharSet = $rg43sconf['rg43s_charset'];
        $mail->Encoding   = $rg43sconf['rg43s_encoding'];
        $mail->Priority = $rg43sconf['rg43s_priority'];    
        $mail->setFrom(random(str_replace("##domainsmtp##", $domainSMTP, $fmail)), random($fname));
        $mail->SMTPOptions = ['socket' => ['bindto' => randIP(),],];
        
        if($rg43sconf['rg43s_to'] != ""){
            $mail->addAddress($rg43sconf['rg43s_to']);
        
        }
        if($rg43sconf['rg43s_to1'] != ""){
            $mail->addAddress($rg43sconf['rg43s_to1']);
            
        }
        if($rg43sconf['rg43s_to2'] != ""){
            $mail->addAddress($rg43sconf['rg43s_to2']);

        }
        if($rg43sconf['rg43s_cc'] != ""){
            $mail->addCc($rg43sconf['rg43s_cc']);
            
        }
        
        
        foreach ($listBcc as $email) {
            
            $mail->addBcc($email);
            
            if($list_enter['list_remove'] == "true"){
            $list = array_diff($list, array($email));
            file_put_contents($list_enter['list_dir_file'] . $list_enter['list_used'],implode("\r\n", $list));
        }
            
        }
        
        $bounce = explode("@", $listBcc[0]);
        
        if($bit_attach['attachment_1'] != ""){
        $mail->addAttachment($bit_attach['rg43s_dir_file'] . $bit_attach['attachment_1'], randominaja($bit_attach['rename_1']));
            
        }
        
        if($bit_attach['attachment_2'] != ""){
        $mail->addAttachment($bit_attach['rg43s_dir_file'] . $bit_attach['attachment_2'], random($bit_attach['rename_2']));
        
        }
        
        if($bit_attach['attachment_3'] != ""){
        $mail->addAttachment($bit_attach['rg43s_dir_file'] . $bit_attach['attachment_3'], random($bit_attach['rename_3']));
        
        }

        if ($rg43sconf['rg43s_header'] == true){
        foreach($custom_header as $cheader){
            $chead = explode("|", $cheader);
            $chead[0] = replacementcustom($chead[0], $bit_replace);
            $chead[0] = randominaja($chead[0], $bit_replace);
            $chead[0] = random($chead[0], $bit_replace);
            $chead[1] = replacementcustom($chead[1], $bit_replace);
            $chead[1] = randominaja($chead[1], $bit_replace);
            $chead[1] = random($chead[1], $bit_replace);
            $mail->addCustomHeader($chead[0], $chead[1]);
        }
        }
        
        $mail->isHTML(true);
        if($header_subject['subject_mode'] == "header"){
        $mail->Subject = $chead[1];}
        if($header_subject['subject_mode'] == "subjectlist"){
        $mail->Subject = random($subject) . acaksubject($subject);}
        $mail->Body    = random($letter);
        if($letter_list['contenttype_mode'] == true){
        $mail->AltBody = random($letter1);}
        $mail->ConfirmReadingTo = random($fmail);
        
        if($rg43s['rg43s_doublesend'] == "true"){
        $result = $mail->send() . $mail->send();

        echo "  \e[96m[\e[91mRG43S\e[96m] Send Status :\e[0m \e[92mSuccess\e[0m" . PHP_EOL;
        $mail->ClearAllRecipients();}

        if($rg43s['rg43s_doublesend'] == "false"){
        $result = $mail->send();
        
        echo "  \e[96m[\e[91mRG43S\e[96m] Send Status :\e[0m \e[92mSuccess\e[0m" . PHP_EOL;
        $mail->ClearAllRecipients();}
        
    }catch (Exception $e) {
        echo "  \e[96m[！] Send Status :\e[0m \e[101m".$mail->ErrorInfo." \e[0m" . PHP_EOL;
    }
    
}
}

if($rg43s['rg43s_sending_basemode'] == "m3"){
function sendTo($sendto, $smtp_account, $subject, $fname, $fmail, $short)
{
    
    global $rg43s, $rg43sconf, $bit_attach, $list, $list_enter, $letter_list, $custom_header, $bit_replace, $subjectconf, $header_subject, $header_up;;
    
    $mail = new Mailer(true);
    
    try {
        $smtp = explode("," , $smtp_account);
        $letter = randominaja(str_replace(array('##shortlink##', '##email##'),array($short, $sendto), file_get_contents($letter_list['letter_dir_file'] . $letter_list['change_letter'])));
        $letter1 = randominaja(str_replace(array('##shortlink##', '##email##'),array($short, $sendto), file_get_contents($letter_list['letter_dir_file'] . $letter_list['plain_text'])));
        $subject = randominaja($subject);
        $fname = randominaja($fname);
        $fmail = randominaja($fmail);
        $short = randominaja($short);
        $bit_attach = randominaja($bit_attach);
        $domainSMTP = ($smtp[3])[1];               
        $mail->isSMTP();                               
        $mail->Host       = $smtp[0];            
        $mail->SMTPAuth   = true;                          
        $mail->Username   = $smtp[3];  
        $mail->Password   = $smtp[4];
        $mail->SMTPSecure = $smtp[2]; 
        $mail->Port       = $smtp[1];
        $mail->CharSet = $rg43sconf['rg43s_charset'];
        $mail->Encoding   = $rg43sconf['rg43s_encoding'];
        $mail->Priority = $rg43sconf['rg43s_priority'];
        $mail->setFrom(random(str_replace("##domainsmtp##", $domainSMTP, $fmail)), random($fname));
        $mail->addAddress($sendto);
        $mail->SMTPOptions = ['socket' => ['bindto' => randIP(),],];
        
        if($rg43sconf['rg43s_cc'] != ""){
            $mail->addCc($rg43sconf['rg43s_cc']);
            
        }
        
        if($list_enter['list_remove'] == "true"){
        $list = array_diff($list, array($sendto));
        file_put_contents($list_enter['list_dir_file'] . $list_enter['list_used'],implode("\r\n", $list));
        }

        
        $bounce = explode("@", $sendto);
        
        if($bit_attach['attachment_1'] != ""){
        $mail->addAttachment($bit_attach['rg43s_dir_file'] . $bit_attach['attachment_1'], randominaja($bit_attach['rename_1']));
            
        }
        
        if($bit_attach['attachment_2'] != ""){
        $mail->addAttachment($bit_attach['rg43s_dir_file'] . $bit_attach['attachment_2'], random($bit_attach['rename_2']));
        
        }
        
        if($bit_attach['attachment_3'] != ""){
        $mail->addAttachment($bit_attach['rg43s_dir_file'] . $bit_attach['attachment_3'], random($bit_attach['rename_3']));
        
        }
        if ($rg43sconf['rg43s_header'] == true){
        foreach($custom_header as $cheader){
            $chead = explode("|", $cheader);
            $chead[0] = replacementcustom($chead[0], $bit_replace);
            $chead[0] = randominaja($chead[0], $bit_replace);
            $chead[0] = random($chead[0], $bit_replace);
            $chead[1] = replacementcustom($chead[1], $bit_replace);
            $chead[1] = randominaja($chead[1], $bit_replace);
            $chead[1] = random($chead[1], $bit_replace);
            $mail->addCustomHeader($chead[0], $chead[1]);
        }
    }
           
        $mail->isHTML(true);
        if($header_subject['subject_mode'] == "header"){
        $mail->Subject = $chead[1];}
        if($header_subject['subject_mode'] == "subjectlist"){
        $mail->Subject = random($subject) . acaksubject($subject);}
        $mail->Body    = random($letter);
        if($letter_list['contenttype_mode'] == true){
        $mail->AltBody = random($letter1);}

        if($rg43s['rg43s_doublesend'] == "true"){
        $result = $mail->send() . $mail->send();

        echo "  \e[96m[\e[91mRG43S\e[96m] Send Status :\e[0m \e[92mSuccess\e[0m" . PHP_EOL;
        $mail->ClearAllRecipients();}

        if($rg43s['rg43s_doublesend'] == "false"){
        $result = $mail->send();
        
        echo "  \e[96m[\e[91mRG43S\e[96m] Send Status :\e[0m \e[92mSuccess\e[0m" . PHP_EOL;
        $mail->ClearAllRecipients();}
        
    }catch (Exception $e) {
        echo "  \e[96m[\e[91mRG43S\e[96m] Send Status :\e[0m \e[101m".$mail->ErrorInfo." \e[0m" . PHP_EOL;
    }
    
}
}

{
}