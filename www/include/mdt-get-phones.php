$have_phones = FALSE;
$root = "/media/FT-LOGS";
if (!file_exists($root)) $root = "/tmp";
$config_name = sprintf ("%s/mdt-config.txt",$root);
$dev_name = sprintf ("%s/devices.txt",$root);
printf ('<br>FILES: %s %s',$config_name,$dev_name);
if (file_exists($dev_name)){
	$dfile = fopen("/tmp/devices.txt","r");
	echo "<br>open<br>";
	$p_line = fgets($dfile);
	while (!feof($dfile)){
		/*
		printf ("<br>LINE: %s",$p_line);
		*/
		$the_phones [] = $p_line;
		$p_line = fgets($dfile);
		$have_phones = TRUE;
	}
}

