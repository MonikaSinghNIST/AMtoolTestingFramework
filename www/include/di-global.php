<?php

// want to print the same horizontal menu for each page in diskimaging directory
function print_di_horizontal_menu_contents() {
	echo '<ul id="menu">';
	echo '  <li><a id="menu1nav" href="../Federated_Testing_Home_Page.php">Home</a></li>';
	echo '  <li><a id="menu3nav" href="../about.php">About</a></li>';
/*	echo '  <li><a id="menu3nav" href="../Federated_Testing_Definitions-v2.php">Glossary of Terms</a></li>';*/
/*	echo '  <li><a id="menu2nav" href="../FAQ.php">FAQs</a></li>';*/
	echo '  <li><a id="menu3nav" href="../contacts.php">Contacts</a></li>';
    echo '</ul>';
}

// the common sidebar menu for the disk imaging pages is quite long. use this php function to print the sidebar items
function print_di_sidebar_menu_contents() {

	// use this variable to print the indentation for submenu items
	$indent1 = "&nbsp;&nbsp;&nbsp;&nbsp;-> ";
	// use this variable to indent the second line of a menu item should the menu item wraps
	$indent2 = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	$indent3 = "&nbsp;>&nbsp;";
	
	echo "<ul>";
	echo "<h1>Disk imaging selections</h1>";
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

/*	echo "<li id=\"function1nav\"><a href=\"./index.php\" class=\"html\">Disk Imaging&nbsp;-&nbsp;&nbsp;<img src=\"/images/home-16x16.png\" alt=\"Home\" width=\"16\" height=\"16\"> &nbsp;-</a></li>";	*/
/*	echo "<li id=\"function1nav\"><a href=\"./index.php\" class=\"html\">Disk Imaging&nbsp;&nbsp;&nbsp;<img src=\"/images/home-16x16.png\" alt=\"Home\" width=\"16\" height=\"16\"></a></li>";*/	
	echo "<a href=\"/diskimaging/index.php\" class=\"html\"><li id=\"function1nav\">Disk Imaging&nbsp;&nbsp;&nbsp;<img src=\"/images/home-16x16.png\" alt=\"Home\" width=\"16\" height=\"16\"></li></a>";
	
/*	echo "<li id=\"function1nav\"><a href=\"./videotutorials.php\" class=\"html\">How to use the federated testing materials to test your disk imaging tool - video tutorials</a></li>";*/	
/*	echo "<li id=\"function1nav\"><a href=\"../Federated Testing Definitions-v2.php\" target=\"_blank\" class=\"html\">Glossary of Terms</a></li>";*/
/* 	echo "<a href=\"./videotutorials.php\" class=\"html\"><li id=\"function1nav\">Video Tutorials</li></a>"; */

	echo "<a href=\"/formatyourthumb.php?ref=di\" class=\"html\"><li id=\"function1nav\">Format Your Log Drive<br>'FT-LOGS'</li></a>";
/*	echo "<li id=\"function3nav\"><a href=\"customizetest.php\" class=\"html\">Select Your Tests &amp; Start Testing</a></li>";*/
	echo "<a href=\"/diskimaging/customizetest.php\" class=\"html\"><li id=\"function3nav\">Generate Test Cases &amp;<br> Start Testing</li></a>";
/*	echo "<li id=\"function3nav\"><a href=\"customizetest.php\" class=\"html\">Select Your Tests</a></li>";*/
/*	echo "<li id=\"function4nav\"><a href=\"./returntotesting.php\" class=\"html\">Go to Test Dashboard</a></li>";*/

	// if doing dev work on mac, want to pass /tmp as path to log drive; if on Linux,
	// pass /media/FT-LOGS 
	$mac = '/Applications/MAMP';
	$linux = '/usr/lib/cgi-bin';
	if (file_exists($mac)){
	  // if on mac, 
	  echo "<a href=\"/diskimaging/runtests.php?path=/tmp\" class=\"html\"><li id=\"function4nav\">Go to Test Dashboard</li></a>";
	  echo "<a href=\"/diskimaging/viewtestcaseresults.php?path=/tmp\" class=\"html\"><li id=\"function5nav\">View Test Case Results</li></a>";
	  echo "<a href=\"/generatefinalreport.php?ref=di&path=/tmp\" class=\"html\"><li id=\"function5nav\">Generate Test Report</li></a>";
	} else {
	  // else, on linux,
	  echo "<a href=\"/diskimaging/runtests.php?path=/media/FT-LOGS\" class=\"html\"><li id=\"function4nav\">Go to Test Dashboard</li></a>";
	  echo "<a href=\"/diskimaging/viewtestcaseresults.php?path=/media/FT-LOGS\" class=\"html\"><li id=\"function5nav\">View Test Case Results</li></a>";
	  echo "<a href=\"/generatefinalreport.php?ref=di&path=/media/FT-LOGS\" class=\"html\"><li id=\"function5nav\">Generate Test Report</li></a>";
	}

    echo "<a href=\"/shareyourresults.php?ref=di\" class=\"html\"><li id=\"function6nav\">Share Your Results</li></a>";
	echo "<a href=\"/diskimaging/Disk_Imaging_Definitions.php\" class=\"html\"><li id=\"function86nav\">Glossary of Terms</li></a>";

	// if $curr_page2 contains the param/value "menuexpand=viewtestinstructions", strip it out so we can choose to add/not add it
	$curr_page2 = str_replace("&menuexpand=viewtestinstructions", "", $curr_page2);
	$curr_page2 = str_replace("menuexpand=viewtestinstructions", "", $curr_page2);
	
	if ($_GET["menuexpand"] == "viewtestinstructions"){
		echo "<a href=\"$curr_page?$testcase_str&$display_str\" class=\"html\"><li id=\"function85nav\">View Test Case Instructions</li></a>";

		$menuexpand = "menuexpand=viewtestinstructions";

		if ($_GET["menuexpand2"] == "imageacquire"){
		  echo "<a href=\"$curr_page?$testcase_str&$display_str&$menuexpand\" class=\"html\"><li id=\"function6nav\">".$indent3."Image Physical Device 01</li></a>";

		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-01-ATA28&$menuexpand&menuexpand2=imageacquire\" class=\"html\"><li id=\"function36nav\">".$indent1."ATA28</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-01-ATA48&$menuexpand&menuexpand2=imageacquire\" class=\"html\"><li id=\"function37nav\">".$indent1."ATA48</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-01-SATA28&$menuexpand&menuexpand2=imageacquire\" class=\"html\"><li id=\"function39nav\">".$indent1."SATA28</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-01-SATA48&$menuexpand&menuexpand2=imageacquire\" class=\"html\"><li id=\"function40nav\">".$indent1."SATA48</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-01-USB&$menuexpand&menuexpand2=imageacquire\" class=\"html\"><li id=\"function42nav\">".$indent1."USB</li></a>";		  
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-01-FW&$menuexpand&menuexpand2=imageacquire\" class=\"html\"><li id=\"function38nav\">".$indent1."FW</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-01-SAS&$menuexpand&menuexpand2=imageacquire\" class=\"html\"><li id=\"function38nav\">".$indent1."SAS</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-01-SCSI&$menuexpand&menuexpand2=imageacquire\" class=\"html\"><li id=\"function41nav\">".$indent1."SCSI</li></a>";

		} else {
			echo "<a href=\"$curr_page?$testcase_str&$display_str&$menuexpand&menuexpand2=imageacquire\" class=\"html\"><li id=\"function6nav\">".$indent3."Image Physical Device 01</li></a>";			
		}
	
		if ($_GET["menuexpand2"] == "imagerestore"){
		  echo "<a href=\"$curr_page?$testcase_str&$display_str&$menuexpand\" class=\"html\"><li id=\"function7nav\">".$indent3."Restore Physical Device 02</li></a>";

		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-02-ATA28&$menuexpand&menuexpand2=imagerestore\" class=\"html\"><li id=\"function43nav\">".$indent1."ATA28</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-02-ATA48&$menuexpand&menuexpand2=imagerestore\" class=\"html\"><li id=\"function44nav\">".$indent1."ATA48</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-02-SATA28&$menuexpand&menuexpand2=imagerestore\" class=\"html\"><li id=\"function46nav\">".$indent1."SATA28</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-02-SATA48&$menuexpand&menuexpand2=imagerestore\" class=\"html\"><li id=\"function47nav\">".$indent1."SATA48</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-02-USB&$menuexpand&menuexpand2=imagerestore\" class=\"html\"><li id=\"function49nav\">".$indent1."USB</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-02-FW&$menuexpand&menuexpand2=imagerestore\" class=\"html\"><li id=\"function45nav\">".$indent1."FW</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-02-SAS&$menuexpand&menuexpand2=imagerestore\" class=\"html\"><li id=\"function45nav\">".$indent1."SAS</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-02-SCSI&$menuexpand&menuexpand2=imagerestore\" class=\"html\"><li id=\"function48nav\">".$indent1."SCSI</li></a>";

		} else {
			echo "<a href=\"$curr_page?$testcase_str&$display_str&$menuexpand&menuexpand2=imagerestore\" class=\"html\"><li id=\"function7nav\">".$indent3."Restore Physical Device 02</li></a>";			
		}
	
		if ($_GET["menuexpand2"] == "imageremovablemedia"){
		  echo "<a href=\"$curr_page?$testcase_str&$display_str&$menuexpand\" class=\"html\"><li id=\"function8nav\">".$indent3."Image Removable Media 03</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-03-CF&$menuexpand&menuexpand2=imageremovablemedia\" class=\"html\"><li id=\"function50nav\">".$indent1."Compact Flash</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-03-SD&$menuexpand&menuexpand2=imageremovablemedia\" class=\"html\"><li id=\"function51nav\">".$indent1."SD Card</li></a>";
		} else {
		  echo "<a href=\"$curr_page?$testcase_str&$display_str&$menuexpand&menuexpand2=imageremovablemedia\" class=\"html\"><li id=\"function8nav\">".$indent3."Image Removable Media 03</li></a>";
		}
		  
		if ($_GET["menuexpand2"] == "restoreremovablemedia"){
	  	  echo "<a href=\"$curr_page?$testcase_str&$display_str&$menuexpand\" class=\"html\"><li id=\"function9nav\">".$indent3."Restore Removable Media 04</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-04-CF&$menuexpand&menuexpand2=restoreremovablemedia\" class=\"html\"><li id=\"function52nav\">".$indent1."Compact Flash</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-04-SD&$menuexpand&menuexpand2=restoreremovablemedia\" class=\"html\"><li id=\"function53nav\">".$indent1."SD Card</li></a>";
		} else {
		  echo "<a href=\"$curr_page?$testcase_str&$display_str&$menuexpand&menuexpand2=restoreremovablemedia\" class=\"html\"><li id=\"function9nav\">".$indent3."Restore Removable Media 04</li></a>";
		}

		if ($_GET["menuexpand2"] == "partitionacquire"){
		  echo "<a href=\"$curr_page?$testcase_str&$display_str&$menuexpand\" class=\"html\"><li id=\"function10nav\">".$indent3."Image Partition 05</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-05-ExFAT&$menuexpand&menuexpand2=partitionacquire\" class=\"html\"><li id=\"function64nav\">".$indent1."ExFAT</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-05-Ext2&$menuexpand&menuexpand2=partitionacquire\" class=\"html\"><li id=\"function54nav\">".$indent1."Ext2</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-05-Ext3&$menuexpand&menuexpand2=partitionacquire\" class=\"html\"><li id=\"function55nav\">".$indent1."Ext3</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-05-Ext4&$menuexpand&menuexpand2=partitionacquire\" class=\"html\"><li id=\"function56nav\">".$indent1."Ext4</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-05-FAT16&$menuexpand&menuexpand2=partitionacquire\" class=\"html\"><li id=\"function57nav\">".$indent1."FAT16</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-05-FAT32&$menuexpand&menuexpand2=partitionacquire\" class=\"html\"><li id=\"function58nav\">".$indent1."FAT32</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-05-NTFS&$menuexpand&menuexpand2=partitionacquire\" class=\"html\"><li id=\"function59nav\">".$indent1."NTFS</li></a>";	
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-05-OSX&$menuexpand&menuexpand2=partitionacquire\" class=\"html\"><li id=\"function60nav\">".$indent1."OSX</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-05-OSXC&$menuexpand&menuexpand2=partitionacquire\" class=\"html\"><li id=\"function61nav\">".$indent1."OSXC</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-05-OSXJ&$menuexpand&menuexpand2=partitionacquire\" class=\"html\"><li id=\"function62nav\">".$indent1."OSXJ</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-05-OSXCJ&$menuexpand&menuexpand2=partitionacquire\" class=\"html\"><li id=\"function63nav\">".$indent1."OSXCJ</li></a>";
		} else {
		  echo "<a href=\"$curr_page?$testcase_str&$display_str&$menuexpand&menuexpand2=partitionacquire\" class=\"html\"><li id=\"function10nav\">".$indent3."Image Partition 05</li></a>";
		}
	
		if ($_GET["menuexpand2"] == "partitionrestore"){
		  echo "<a href=\"$curr_page?$testcase_str&$display_str&$menuexpand\" class=\"html\"><li id=\"function11nav\">".$indent3."Restore Partition 06</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-06-ExFAT&$menuexpand&menuexpand2=partitionrestore\" class=\"html\"><li id=\"function65nav\">".$indent1."ExFAT</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-06-Ext2&$menuexpand&menuexpand2=partitionrestore\" class=\"html\"><li id=\"function66nav\">".$indent1."Ext2</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-06-Ext3&$menuexpand&menuexpand2=partitionrestore\" class=\"html\"><li id=\"function67nav\">".$indent1."Ext3</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-06-Ext4&$menuexpand&menuexpand2=partitionrestore\" class=\"html\"><li id=\"function68nav\">".$indent1."Ext4</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-06-FAT16&$menuexpand&menuexpand2=partitionrestore\" class=\"html\"><li id=\"function69nav\">".$indent1."FAT16</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-06-FAT32&$menuexpand&menuexpand2=partitionrestore\" class=\"html\"><li id=\"function70nav\">".$indent1."FAT32</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-06-NTFS&$menuexpand&menuexpand2=partitionrestore\" class=\"html\"><li id=\"function71nav\">".$indent1."NTFS</li></a>";	
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-06-OSX&$menuexpand&menuexpand2=partitionrestore\" class=\"html\"><li id=\"function72nav\">".$indent1."OSX</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-06-OSXC&$menuexpand&menuexpand2=partitionrestore\" class=\"html\"><li id=\"function73nav\">".$indent1."OSXC</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-06-OSXJ&$menuexpand&menuexpand2=partitionrestore\" class=\"html\"><li id=\"function74nav\">".$indent1."OSXJ</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-06-OSXCJ&$menuexpand&menuexpand2=partitionrestore\" class=\"html\"><li id=\"function75nav\">".$indent1."OSXCJ</li></a>";
		} else {
	 	  echo "<a href=\"$curr_page?$testcase_str&$display_str&$menuexpand&menuexpand2=partitionrestore\" class=\"html\"><li id=\"function11nav\">".$indent3."Restore Partition 06</li></a>";			
		}
	
		if ($_GET["menuexpand2"] == "clonedrive"){
		  echo "<a href=\"$curr_page?$testcase_str&$display_str&$menuexpand\" class=\"html\"><li id=\"function12nav\">".$indent3."Clone Physical Device 07</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-07-ATA28&$menuexpand&menuexpand2=clonedrive\" class=\"html\"><li id=\"function76nav\">".$indent1."ATA28</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-07-ATA48&$menuexpand&menuexpand2=clonedrive\" class=\"html\"><li id=\"function77nav\">".$indent1."ATA48</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-07-SATA28&$menuexpand&menuexpand2=clonedrive\" class=\"html\"><li id=\"function79nav\">".$indent1."SATA28</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-07-SATA48&$menuexpand&menuexpand2=clonedrive\" class=\"html\"><li id=\"function80nav\">".$indent1."SATA48</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-07-USB&$menuexpand&menuexpand2=clonedrive\" class=\"html\"><li id=\"function82nav\">".$indent1."USB</li></a>";		  
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-07-FW&$menuexpand&menuexpand2=clonedrive\" class=\"html\"><li id=\"function78nav\">".$indent1."FW</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-07-SAS&$menuexpand&menuexpand2=clonedrive\" class=\"html\"><li id=\"function82nav\">".$indent1."SAS</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-07-SCSI&$menuexpand&menuexpand2=clonedrive\" class=\"html\"><li id=\"function81nav\">".$indent1."SCSI</li></a>";
		} else {
		  echo "<a href=\"$curr_page?$testcase_str&$display_str&$menuexpand&menuexpand2=clonedrive\" class=\"html\"><li id=\"function12nav\">".$indent3."Clone Physical Device 07</li></a>";
		}
	
		if ($_GET["menuexpand2"] == "cloneremovablemedia"){
		  echo "<a href=\"$curr_page?$testcase_str&$display_str&$menuexpand\" class=\"html\"><li id=\"function13nav\">".$indent3."Clone Removable Media 08</li></a>"; 
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-08-CF&$menuexpand&menuexpand2=cloneremovablemedia\" class=\"html\"><li id=\"function83nav\">".$indent1."Compact Flash</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-08-SD&$menuexpand&menuexpand2=cloneremovablemedia\" class=\"html\"><li id=\"function84nav\">".$indent1."SD Card</li></a>";
		} else {
		  echo "<a href=\"$curr_page?$testcase_str&$display_str&$menuexpand&menuexpand2=cloneremovablemedia\" class=\"html\"><li id=\"function13nav\">".$indent3."Clone Removable Media 08</li></a>"; 
		}
	
		if ($_GET["menuexpand2"] == "clonepartition"){
		  echo "<a href=\"$curr_page?$testcase_str&$display_str&$menuexpand\" class=\"html\"><li id=\"function14nav\">".$indent3."Clone Partition 09</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-09-ExFAT&$menuexpand&menuexpand2=clonepartition\" class=\"html\"><li id=\"function65nav\">".$indent1."ExFAT</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-09-Ext2&$menuexpand&menuexpand2=clonepartition\" class=\"html\"><li id=\"function66nav\">".$indent1."Ext2</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-09-Ext3&$menuexpand&menuexpand2=clonepartition\" class=\"html\"><li id=\"function67nav\">".$indent1."Ext3</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-09-Ext4&$menuexpand&menuexpand2=clonepartition\" class=\"html\"><li id=\"function68nav\">".$indent1."Ext4</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-09-FAT16&$menuexpand&menuexpand2=clonepartition\" class=\"html\"><li id=\"function69nav\">".$indent1."FAT16</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-09-FAT32&$menuexpand&menuexpand2=clonepartition\" class=\"html\"><li id=\"function70nav\">".$indent1."FAT32</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-09-NTFS&$menuexpand&menuexpand2=clonepartition\" class=\"html\"><li id=\"function71nav\">".$indent1."NTFS</li></a>";	
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-09-OSX&$menuexpand&menuexpand2=clonepartition\" class=\"html\"><li id=\"function72nav\">".$indent1."OSX</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-09-OSXC&$menuexpand&menuexpand2=clonepartition\" class=\"html\"><li id=\"function73nav\">".$indent1."OSXC</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-09-OSXJ&$menuexpand&menuexpand2=clonepartition\" class=\"html\"><li id=\"function74nav\">".$indent1."OSXJ</li></a>";
		  echo "<a href=\"./testinstructions.php?testcase=FT-DI-09-OSXCJ&$menuexpand&menuexpand2=clonepartition\" class=\"html\"><li id=\"function75nav\">".$indent1."OSXCJ</li></a>";
		} else {
		  echo "<a href=\"$curr_page?$testcase_str&$display_str&$menuexpand&menuexpand2=clonepartition\" class=\"html\"><li id=\"function14nav\">".$indent3."Clone Partition 09</li></a>";
		}
	
		echo "<a href=\"./testinstructions.php?testcase=FT-DI-10&$menuexpand\" class=\"html\"><li id=\"function15nav\">".$indent3."Truncated Image Acquire 10</li></a>";
		echo "<a href=\"./testinstructions.php?testcase=FT-DI-11&$menuexpand\" class=\"html\"><li id=\"function16nav\">".$indent3."Truncated Image Restore 11</li></a>";
		echo "<a href=\"./testinstructions.php?testcase=FT-DI-12&$menuexpand\" class=\"html\"><li id=\"function17nav\">".$indent3."Truncated Clone 12</li></a>";
		echo "<a href=\"./testinstructions.php?testcase=FT-DI-13&$menuexpand\" class=\"html\"><li id=\"function18nav\">".$indent3."Compute Image Hash 13</li></a>";					
		echo "<a href=\"./testinstructions.php?testcase=FT-DI-14&$menuexpand\" class=\"html\"><li id=\"function19nav\">".$indent3."Compute Drive Hash 14</li></a>";
		echo "<a href=\"./testinstructions.php?testcase=FT-DI-15&$menuexpand\" class=\"html\"><li id=\"function20nav\" class=\"leftNavBottom\">".$indent3."Image Faulty Sectors 15</li></a>";	
	} else {
		echo "<a href=\"$curr_page?$testcase_str&$display_str&menuexpand=viewtestinstructions\" class=\"html\"><li id=\"function85nav\">View Test Case Instructions</li></a>";		
	}

	echo "<a href=\"/diskimaging/visualguides.php\" class=\"html\"><li id=\"function1nav\">View Visual Guides</li></a>";

	if ($_GET["menuexpand"] == "commonprocedures"){
	  // use $curr_page in the url so that user navigates back to this same page when user clicks on the link
	  //echo "<li id=\"function2nav\"><a href=\"$curr_page\" class=\"html\">View Common Procedures</a></li>"; 
	  echo "<a href=\"$curr_page?$testcase_str&$display_str\" class=\"html\"><li id=\"function2nav\">View Common Procedures</li></a>";
	  // alt. text: "Jump to test case instructions"
	  echo "<a href=\"./commonprocedures.php?menuexpand=commonprocedures&display=clock\" class=\"html\"><li id=\"function24nav\">".$indent1."Calibrate System Clock</li></a>";
	  echo "<a href=\"./commonprocedures.php?menuexpand=commonprocedures&display=mount\" class=\"html\"><li id=\"function25nav\">".$indent1."Mounting a Partition</li></a>";
/*	  echo "<li id=\"function26nav\"><a href=\"./commonprocedures.php?menuexpand=commonprocedures&display=diskwipe\" class=\"html\">".$indent1."Diskwipe media</a></li>";
	  echo "<li id=\"function27nav\"><a href=\"./commonprocedures.php?menuexpand=commonprocedures&display=fdisk\" class=\"html\">".$indent1."Using <b>fdisk</b></a></li>";
	  echo "<li id=\"function28nav\"><a href=\"./commonprocedures.php?menuexpand=commonprocedures&display=df\" class=\"html\">".$indent1."Using <b>df</b></a></li>";*/
  	  echo "<a href=\"./commonprocedures.php?menuexpand=commonprocedures&display=view\" class=\"html\"><li id=\"function87nav\">".$indent1."List Attached Devices</li></a>";
	  echo "<a href=\"./commonprocedures.php?menuexpand=commonprocedures&display=cfttdi\" class=\"html\"><li id=\"function29nav\">".$indent1."Sample <b>cftt-di</b> Session</li></a>";
/*  	  echo "<a href=\"./commonprocedures.php?menuexpand=commonprocedures&display=samplesession\" class=\"html\"><li id=\"function30nav\">".$indent1."Sample Tool Session</li></a>";*/
	} else {
		// use $curr_page in the url so that user navigates back to this same page when user clicks on the link
		//echo "<li id=\"function2nav\"><a href=\"$curr_page?menuexpand=commonprocedures\" class=\"html\">View Common Procedures</a></li>"; 
		echo "<a href=\"$curr_page?$testcase_str&$display_str&menuexpand=commonprocedures\" class=\"html\"><li id=\"function2nav\">View Common Procedures</li></a>";		
		// alt. text: "Jump to test case instructions"		
	}

	if ($_GET["menuexpand"] == "mediasetup"){
	  // use $curr_page in the url so that user navigates back to this same page when user clicks on the link
	  //echo "<li id=\"function86nav\"><a href=\"$curr_page\" class=\"html\">View Media Setup</a></li>"; 
	  echo "<a href=\"$curr_page?$testcase_str&$display_str\" class=\"html\"><li id=\"function86nav\">View Media Setup</li></a>";	  
	  // alt. text: "Jump to test case instructions"
	  echo "<a href=\"./mediasetup.php?menuexpand=mediasetup&display=setup-src\" class=\"html\"><li id=\"function24nav\">".$indent1."Source Drive Setup</li></a>";
	  echo "<a href=\"./mediasetup.php?menuexpand=mediasetup&display=rmsetup\" class=\"html\"><li id=\"function25nav\">".$indent1."Removable Media Setup</li></a>";
/*	  echo "<li id=\"function26nav\"><a href=\"./mediasetup.php?menuexpand=mediasetup&display=log\" class=\"html\">".$indent1."Logfile Media (USB) ".$indent2."Setup</a></li>";*/
	  echo "<a href=\"./mediasetup.php?menuexpand=mediasetup&display=log\" class=\"html\"><li id=\"function26nav\">".$indent1."Format Your Log ".$indent2."Drive 'FT-LOGS' ".$indent2."(manually)</li></a>";
	  echo "<a href=\"./mediasetup.php?menuexpand=mediasetup&display=partition\" class=\"html\"><li id=\"function27nav\">".$indent1."Create Partition</li></a>";
	/*  echo "<li id=\"function28nav\"><a href=\"./mediasetup.php?menuexpand=mediasetup&display=dco\" class=\"html\">".$indent1."Modify Sector DCO</a></li>";
	  echo "<li id=\"function29nav\"><a href=\"./mediasetup.php?menuexpand=mediasetup&display=hpa\" class=\"html\">".$indent1."Modify Sector HPA</a></li>";
	  echo "<li id=\"function30nav\"><a href=\"./mediasetup.php?menuexpand=mediasetup&display=hdat2\" class=\"html\">".$indent1."Using <b>hdat2</b></a></li>";*/
	  echo "<a href=\"./mediasetup.php?menuexpand=mediasetup&display=faultysectors\" class=\"html\"><li id=\"function31nav\">".$indent1."Create Faulty Sectors ".$indent2." Using <b>hdparm</b></li></a>";
	} else {
		// use $curr_page in the url so that user navigates back to this same page when user clicks on the link
		//echo "<li id=\"function86nav\"><a href=\"$curr_page?menuexpand=mediasetup\" class=\"html\">View Media Setup</a></li>"; 
		echo "<a href=\"$curr_page?$testcase_str&$display_str&menuexpand=mediasetup\" class=\"html\"><li id=\"function86nav\">View Media Setup</li></a>"; 
		// alt. text: "Jump to test case instructions"		
	}	
//	echo "<a href=\"./Disk_Imaging_Definitions.php\" class=\"html\"><li id=\"function86nav\">Glossary of Terms</li></a>";
	echo "</ul>";	
}

	$fs_dict = array("media_sd" => "SD",
		"media_cf" => "CF",
		"p_fat16" => "FAT16",
		"p_fat32" => "FAT32",
		"p_exfat" => "ExFAT",
		"p_ext2" => "Ext2",
		"p_ext3" => "Ext3",
		"p_ext4" => "Ext4",
		"p_ntfs" => "NTFS",
		"p_osx" => "OSX",
		"p_osxj" => "OSXJ",
		"p_osxc" => "OSXC",
		"p_osxjc" => "OSXJC",);

	$i_dict = array("if_ata" => "ATA",
		"if_ata28" => "ATA28",
		"if_ata48" => "ATA48",
		"if_sata" => "SATA",
		"if_sata28" => "SATA28",
		"if_sata48" => "SATA48",
		"if_scsi" => "SCSI",
		"if_usb" => "USB",
		"if_fw" => "FW",
		"if_sas" => "SAS",);

	$h_dict = array("h_md5" => "MD5",
		"h_sha1" => "SHA1",
		"h_sha256" => "SHA256",
		"h_sha512" => "SHA512",);	
		
	$tc_desc_dict	= array (
		"01" => "Acquire a drive to an image file.",
		"02" => "Restore an image file of a drive to a destination clone.",
		"03" => "Acquire a removable media device to an image file.",
		"04" => "Restore an image file of removable media to a destination clone.",
		"05" => "Acquire a partition to an image file.",
		"06" => "Restore an image file of a partition to a destination clone.",
		"07" => "Acquire a drive to a destination clone.",
		"08" => "Acquire a removable media device to a destination clone.",
		"09" => "Acquire a partition to a destination clone.",
		"10" => "Acquire a drive to an image file without enough space for the image file.",
		"11" => "Restore an image file to a destination clone without enough space.",
		"12" => "Acquire a drive to a destination clone without enough space.",
		"13" => "Compute the hash value of the acquired data within an image file.",
		"14" => "Compute the hash value of a drive.",
		"15" => "Acquire a drive with faulty sectors to a destination clone.",);

 
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