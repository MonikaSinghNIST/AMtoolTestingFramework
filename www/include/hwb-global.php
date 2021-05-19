<?php

// use this php function to print the sidebar items for the common sidebar menu for the hardware write block pages
function print_hwb_sidebar_menu_contents() {
	// use this variable to print the indentation for submenu items
	$indent1 = "&nbsp;&nbsp;&nbsp;&nbsp;-> ";
	// use this variable to indent the second line of a menu item should the menu item wraps
	$indent2 = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	$indent3 = "&nbsp;>&nbsp;";
	
	echo "<ul>";
	echo "<h1>Hardware write block selections</h1>";
	//echo $_SERVER['SCRIPT_NAME']."<br>";
	//echo $_SERVER['REQUEST_URI'];	
	$curr_page = $_SERVER['SCRIPT_NAME'];
	$curr_page2 = $_SERVER['REQUEST_URI'];	

	// some menu selections serve to expand and collapse submenus. want to stay on the 
	// same page/display the same content whilst navigating the sidebar menu. To that end,
	// need to preserve the values for the display and testcase parameters and tag them onto
	// the urls for these navigational selections.
	$testcase = $_GET["testcase"]; // was a testcase parameter passed on the url?
	$display = $_GET["display"]; // was a display parameter passed on the url?	

	// build string for the test case url parameter
	if (strpos($testcase, "FT-DI") !== false){ // covers: 1) no testcase param on the url, 2) testcase
		// set to "", and 3) testcase has content, but not in a valid form (i.e., FT-DI-__)
		$testcase_str = "testcase=".$testcase;
	} else {
		$testcase_str = "testcase=";		
	}
	
	// build string for the display url parameter
	if ($display != ""){ 
		$display_str = "display=".$display;
	} else {
		$display_str = "display=";		
	}	

	echo "<a href=\"/hardwarewriteblock/index.php\" class=\"html\"><li id=\"function1nav\">Hardware Write Block&nbsp;&nbsp;&nbsp;<img src=\"/images/home-16x16.png\" alt=\"Home\" width=\"16\" height=\"16\"></li></a>";
	echo "<a href=\"/formatyourthumb.php?ref=hwb\" class=\"html\"><li id=\"function1nav\">Format Your Log Drive<br>'FT-LOGS'</li></a>";
	echo "<a href=\"/hardwarewriteblock/writeblocktype.php\" class=\"html\"><li id=\"function3nav\">Generate Test Cases &amp;<br> Start Testing</li></a>";
    echo "<a href=\"/hardwarewriteblock/runtestcase.php\" class=\"html\"><li id=\"function4nav\">Continue Testing</li></a>";
	
	// if doing dev work on mac, want to pass /tmp as path to log drive; if on Linux,
	// pass /media/FT-LOGS 
	$mac = '/Applications/MAMP';
	$linux = '/usr/lib/cgi-bin';
	if (file_exists($mac)){
	  // if on mac, 
	  echo "<a href=\"/generatefinalreport.php?ref=hwb&path=/tmp\" class=\"html\"><li id=\"function5nav\">Generate Test Report</li></a>";
	} else {
	  // else, on linux,
	  echo "<a href=\"/generatefinalreport.php?ref=hwb&path=/media/FT-LOGS\" class=\"html\"><li id=\"function5nav\">Generate Test Report</li></a>";
	}

    echo "<a href=\"/shareyourresults.php?ref=hwb\" class=\"html\"><li id=\"function6nav\">Share Your Results</li></a>";
	
    echo "<a href=\"/formatyourthumb.php?ref=hwb&test_again=y\" class=\"html\"><li id=\"function6nav\">Test Another Write Blocker</li></a>";
    echo "<a href=\"/formatyourthumb.php?ref=hwb&start_over=y\" class=\"html\"><li id=\"function6nav\">Clear Log Drive / Start Over</li></a>";
	echo "<a href=\"/hardwarewriteblock/readmehelp.php\" class=\"html\"><li id=\"function86nav\">Readme / Help</li></a>";
//    echo "<a href=\"\" class=\"html\"><li id=\"function6nav\">Test Another Write Blocker</li></a>";
//    echo "<a href=\"\" class=\"html\"><li id=\"function6nav\">Clear Log Drive / Start Over</li></a>";
//	echo "<a href=\"\" class=\"html\"><li id=\"function86nav\">Readme / Help</li></a>";

	echo "</ul>";	
}

$d_dict = array("pcie" => "PCIe",
	"sata" => "SATA",
	"ata" => "ATA/IDE",
	"usb" => "USB",
	"esata" => "eSATA",
	"firewire" => "FireWire",
	"sas" => "SAS",
	"scsi" => "SCSI",);

$m_dict = array("sd" => "SD",
	"microsd" => "MicroSD",
	"compactflash" => "Compact Flash",
	"mmc" => "MMC",
	"memorystick" => "Memory Stick (e.g., PRO, Duo, Micro)",
	"xd" => "xD",
	"smartmedia" => "Smart Media",
	"usb" => "USB",);

$d_connections_dict = array("usb3" => "USB 3",
	"usb2" => "USB 2",
	"firewire800" => "FireWire 800",
	"firewire400" => "FireWire 400",
	"esata" => "eSATA",);

$m_connections_dict = array("usb3" => "USB 3",
	"usb2" => "USB 2",);
		 

/* Return the printable drive/media type for the given $testcase. Note: the user may have 
   written into the test config file a drive/media type we haven't accounted for in our  
	dictionaries; do make allowance for this... */
function get_drive_type($blockertype, $testcase) {
	
	global $d_dict, $m_dict;
		
	if ($blockertype == "drive"){
		if ($d_dict[$testcase] != ""){ 
			return $d_dict[$testcase];
		} else { // $testcase isn't one of our known drive types, i.e., user wrote a new
					// type into hwb-config.txt
			return $testcase;
		}
	} else {
		if ($m_dict[$testcase] != ""){
			return $m_dict[$testcase];	
		} else {  // $testcase isn't one of our known media types, i.e., user wrote a new
					// type into hwb-config.txt
			return $testcase;
		}
	}
}	 
		
		 
function get_blocker_info() {	
}	
		 
/* This function contains the logic for generating and returning the list of test 
   cases to run based on the user selections from the Customize Your Test page */
function generate_test_case_list($hash_image, $hash_device, $bad_sector, $ops, $ops_rem, $ops_par, $hash, $err, $media, $partition, $interface) {

	global $fs_dict, $i_dict;

	// if present, expand if_sata entry in $interface[] to if_sata28 and if_sata48
	if (in_array("if_sata", $interface)){ 
		unset($interface[array_search("if_sata", $interface)]);
		array_unshift($interface, "if_sata28", "if_sata48");
	}
	// if present, expand if_ata entry in $interface[] to if_ata28 and if_ata48
	if (in_array("if_ata", $interface)){ 
		unset($interface[array_search("if_ata", $interface)]);
		array_unshift($interface, "if_ata28", "if_ata48");
	}

	// test cases for ops and interface - add test cases and test case variations to 
	// $testcaselist based on the operations and interfaces the user selected.
	if ($ops != "" && $interface != ""){
		foreach ($ops as $op){
			if ($op == 	"ops_image"){
				foreach ($interface as $iface){
					$testcaselist[] = "FT-DI-01-".$i_dict[$iface];					
				}
			}
			if ($op == 	"ops_restore"){
				foreach ($interface as $iface){
					$testcaselist[] = "FT-DI-02-".$i_dict[$iface];					
				}
			}
			if ($op == 	"ops_clone"){
				foreach ($interface as $iface){
					$testcaselist[] = "FT-DI-07-".$i_dict[$iface];					
				}
			}			
		}		
	}

	// cases for partition and ops_par - add test cases and test case variations to 
	// $testcaselist based on the partition ops and partition types the user selected
	if ($ops_par != "" && $partition != ""){
		foreach ($ops_par as $op_p){ // iterate over the selected partition operations 
			if ($op_p == "ops_par_image"){
				foreach ($partition as $part){ // iterate over each selected partition type
					$testcaselist[] = "FT-DI-05-".$fs_dict[$part];	
				}
			}
			if ($op_p == "ops_par_restore"){
				foreach ($partition as $part){
					$testcaselist[] = "FT-DI-06-".$fs_dict[$part];					
				}
			}
			if ($op_p == "ops_par_clone"){
				foreach ($partition as $part){
					$testcaselist[] = "FT-DI-09-".$fs_dict[$part];					
				}
			}			
		}		
	}

	//cases for ops_rem and media
	if ($ops_rem != "" && $media != ""){
		foreach ($ops_rem as $op_r){ // iterate over the selected media operations 
			if ($op_r == "ops_rem_image"){
				foreach ($media as $m){ // iterate over each selected media type
					$testcaselist[] = "FT-DI-03-".$fs_dict[$m];	
				}
			}
			if ($op_r == "ops_rem_restore"){
				foreach ($media as $m){
					$testcaselist[] = "FT-DI-04-".$fs_dict[$m];					
				}
			}
			if ($op_r == "ops_rem_clone"){
				foreach ($media as $m){
					$testcaselist[] = "FT-DI-08-".$fs_dict[$m];					
				}
			}			
		}		
	}	
	
	// cases 10 through 12
	if ($err != ""){  // if $err[] is empty, can't process it!
		// iterate through the error options selected by the user
		foreach ($err as $err_selection){
			if ($err_selection == "err_image"){
					$testcaselist[] = "FT-DI-10";	
			}
			if ($err_selection == "err_restore"){
					$testcaselist[] = "FT-DI-11";					
			}
			if ($err_selection == "err_clone"){
					$testcaselist[] = "FT-DI-12";					
			}				
		}
	}

	// cases 13 through 15
	if ($hash_image == "Yes"){
		$testcaselist[] = "FT-DI-13";
	}
	if ($hash_device == "Yes"){
		$testcaselist[] = "FT-DI-14";
	}
	if ($bad_sector == "Yes"){
		$testcaselist[] = "FT-DI-15";
	}		
	//$testcaselist = array("FT-DI-01-ATA28", "FT-DI-15");
	
	return $testcaselist;
}

// trim any trailing spaces or slashes off a user-entered path
function trim_trailing_slash($path) {
/*	$lastslash = strrpos($path, "/");
	$pathlen = strlen($path);
	echo "<br>lastslash: ".$lastslash."<br>pathlen: ".($pathlen-1)."<br>";
	echo "<br>".$path;*/
	$path = rtrim($path, " /");
	// echo "<br>".$path."<br>";
	return $path;
}

?>