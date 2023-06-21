<?php 

foreach (glob("bitswift/bitmailer/*.php") as $filename)
{
    include $filename;
}
