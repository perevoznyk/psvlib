<?
if(!extension_loaded('killer')) {
	dl('killer.dll');
}

//killprocessbypid(100);

$module = 'killer';

if (extension_loaded($module)) {
  $str = "module loaded";
} else {
	$str = "Module $module is not compiled into PHP";
}
echo "$str\n";

$functions = get_extension_funcs($module);
echo "Functions available in the $module extension:<br>\n";
foreach($functions as $func) {
    echo $func."<br>\n";
}

?>
