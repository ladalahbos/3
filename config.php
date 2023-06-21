<?php
/**========================
Created by RG43SENDER   
**TERMS OF USE**
* Admin tidak bertanggung jawab atas bentuk segala penggunaan product ini
* Dengan menyetujui TERMS OF USE berarti anda membebaskan admin dari segala tuntutan atas terjadinya penggunaan
* Tidak ada Persetujuan pembelian product dari RG43S bahwa semua terjamin LEGAL
* Gunakan product dengan BIJAK / Use RESPONSIBLY!
**END**
Copyright 2020 RG43S    
========================**/

// Isi token mu sesuai di web Management Sender (Pastikan data sesuai)
$validation = [
  'baseUrl' => 'https://rg43s.scukz.com/', // Default do not change! (Jangan diubah!)
  //'publicKey' => 'NxSgGETtxcZps4d5JxyX9MHMS',
  'publicKey'	=> 'xxxx',
  'privateKey' => 'n6j58ba4n9d0zYPeQlO1sBNEO'
];

// First config jika tidak mengerti harap baca di CONFIGFUNCTION.txt

$rg43s = [
    'rg43s_debugsending'        => 'no',        # Debug sending if you want show a full information sending please fill "yes" if no fill "no"
    'rg43s_sending_basemode'    => 'm3',         # Base mode send m1=phpmailer, m2=swiftmailer, m3=bitmailer(READ ON CONFIGFUNCTION.TXT)
    'rg43s_mode' 				=> 'to',							# Mode send Bcc/To
	'rg43s_doublesend'          => 'false',               # Fungsi untuk send 2x ke 1 Email

];

$rg43sconf = [
    'rg43s_timezone' 			=> 'Europe/Belgium',					# Default Timezone
	'rg43s_charset' 			=> 'ASCII', 						# UTF-8 support bahasa ALIEN
	'rg43s_encoding' 			=> 'base64', 				# Transfer Encoding
    'rg43s_max' 				=> 1,  							# Max List / Send : To= Only sent 1, Bcc= Can send up to 499list/send
	'rg43s_priority'            => '1',                      # Check on priority.txt
    'rg43s_remove_duplicate' 	=> false,							# Remove Duplicate
    'rg43s_to' 					=> '', 					# To email nya yang pertama ( Mode Bcc Only )
	'rg43s_to1'                 => '',                # To email nya yang ke 2 ( Mode Bcc Only )
	'rg43s_to2'                 => '',               # To email nya yang ke 3 ( Mode Bcc Only )
	'rg43s_cc'                  => '',           # CC Email Mode To/Bcc ( Semisal iseng mau coba riset )
    'rg43s_handle' 				=> '', 	# Pantau inbox tiap send (BCC only) Kosongin kalo males mantau
    'rg43s_delay' 				=> 4,								# Delay / Send
	'rg43s_header'              => true,                  # Jika ingin gunakan custom header tulis true, jika matikan ketik false
    'rg43s_dir_file' 			=> 'files/',						# Default do not change

];

// **Attachment Config**
$bit_attach = [
	'attachment_1'              => '',      # Enter your first name attachment on folder instead
	'attachment_2'              => '',      # Enter your second name attachment on folder instead
	'attachment_3'              => '',      # Enter your third name attachment on folder instead
	'rename_1'                  => '',      # Rename your attachment_1
	'rename_2'                  => '',      # Rename your attachment_2
	'rename_3'                  => '',      # Rename your attachment_3   
	'rg43s_dir_file' 			=> 'files/',						# Default do not change
	
];

// **List you want to use**
$list_enter = [

    'list_used'                 => 'list.txt',
	'list_remove'               => 'true',                          # Remove Email From List After Send
	'list_dir_file' 			=> 'files/',						# Default do not change

];

// **Change your letter**
$letter_list = [

    'change_letter'              => '',
    'contenttype_mode'           => true,          # Jika ingin menggunakan mode plain text ubah ini menjadi true, matikan = false .
    'plain_text'                 => '',        # Fitur dengan menggunakan 2 Content Type. Plain text + Html
	'letter_dir_file' 		     => 'files/amz.html',						# Default do not change
	
];

// **Mode subject dari header/subject list**
$header_subject = [##randomip##]

     'subject_mode'              =>  'subjectlist',   # Subject mode ingin menggunakan header/subject list ( header/subjectlist )
	 
];

// **Subject List **
$subjectconf = [
	'Re: Update your payment - ##date1##.',
];

// **From Name List (Lumayan ngaruh ke inbox)**
$fnameconf = [
	'no-reply1@teIstra.com',
];

// **From Mail List **
$fmailconf = [
	'welcome@perfectchoicemusic.com',
];

// **Shortlink List **
$shortlinkconf = [

'test',
];

// **Custom Header List **
$custom_header = [
	// Format 'Header|Value',
                'X-EmailType-Id|<Re: [Summary Activity]: There was new sign in activity.>',
                'X-Sent-To|<##email##>',
                'X-Attach-Flag|N',
                'X-Reference|<no-reply@bluecolash.com>',
                'X-TXN_ID|<custome_value>',
                'X-Business-Group|<Cash App>'
];

// **Default do not change**
$bit_replace = [
    'bit_admin'		=> 'bit|admin|mailer',  // Default do not change
];
/*
                'X-EmailType-Id|<Re: [Summary Activity]: There was new sign in activity.>',
                'X-Sent-To|<{email}>',
                'X-Attach-Flag|<N>',
                'X-Reference|<no-reply@bluecolash.com>',
                'X-TXN_ID|<custome_value>',
                'X-Business-Group|<Cash App>'
	'X-Return-Path|<bounce-md_##number_mixed_8##.5e66474b.v1-##md5micro##@bhhshallmark.com>',
	'DKIM-Signature|<v=1; a=rsa-sha256; c=simple/simple; d=sparkpostmail2.com>',
	'X-Originating-Ip|<##randomip##>',