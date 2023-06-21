<?php 

foreach (glob("bitswift/phpmailer/*.php") as $filename)
{
    include $filename;
}
