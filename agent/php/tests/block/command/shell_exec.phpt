--TEST--
Check for command hook
--SKIPIF--
<?php 
if (!extension_loaded("openrasp")) print "skip";
?>
--FILE--
<?php
shell_exec('cd');
echo 'shell_exec OK';
?>
--EXPECTREGEX--
<\/script><script>location.href="http[s]?:\/\/.*?request_id=[0-9a-f]{32}"<\/script>