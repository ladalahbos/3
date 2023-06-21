<?php
/*
Original : PHPMailer
Edited By : BIT-ADMIN
*/
namespace Sender\BIT;

class Exception extends \Exception
{
    public function errorMessage()
    {
        return '<strong>' . htmlspecialchars($this->getMessage()) . "</strong><br />\n";
    }
	
}
