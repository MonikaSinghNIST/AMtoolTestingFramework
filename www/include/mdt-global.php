
	
	<ul>
	 <h1>Select a Mobile Device Testing Task</h1>
	<a href="/mobiledevice/mdt.php" class="html"><li id="function1nav">Mobile Device &nbsp;<img src="/images/home-16x16.png" alt="Home" width="16" height="16"></li></a>

<!--	<a href="/mobiledevice/formatyourthumb.php"
	 class="html"><li id="function1nav"  >Format FT-LOGS Flash Drive
	</li></a> -->

	<a href="/formatyourthumb.php?ref=md"
	 class="html"><li id="function1nav"  >Format Your Log Drive<br>'FT-LOGS'
	</li></a>

	<a href="/mobiledevice/get-tool-name.php"
	class="html"><li id="function1nav"  >
	Enter Tool Name and Version</li></a>

	<a href="/mobiledevice/ft_mdt_get_device.php"
	 class="html"><li id="function1nav"  >
	 Create/Edit Mobile Device List</li></a>

	 <a href="/mobiledevice/ft_mdt_select_setup.php"
	class="html"><li id="function1nav"  >
	Record Device Setup</li></a>

	 <a href="/mobiledevice/ft_mdt_test_tool.php"
	class="html"><li id="function1nav"  >
	Mobile Tool Testing</li></a>

<!--
	 <a href="/mobiledevice/ft_mdt_test_tool.php"
	class="html"><li id="function1nav"  >
	Test Tool - Mobile Test Runs</li></a>
-->

	 <a href="/mobiledevice/ft_mdt_select_results.php"
	class="html"><li id="function1nav"  >
	Record Device Test Results</li></a>

<!--
	<a href="/cgi-bin/ft_mdt_prt_test_report.py"
	class="html"><li id="function1nav"
	 >Generate a Test Report</li></a>
-->

<?php
	// if doing dev work on mac, want to pass /tmp as path to log drive; if on Linux,
	// pass /media/FT-LOGS 
	$mac = '/Applications/MAMP';
	$linux = '/usr/lib/cgi-bin';
	if (file_exists($mac)){
	  // if on mac, 
	  echo "<a href=\"/generatefinalreport.php?ref=md&path=/tmp\" class=\"html\"><li id=\"function5nav\">Generate a Test Report</li></a>";
	} else {
	  // else, on linux,
	  echo "<a href=\"/generatefinalreport.php?ref=md&path=/media/FT-LOGS\" class=\"html\"><li id=\"function5nav\">Generate a Test Report</li></a>";
	}
?>

	<a href="/shareyourresults.php?ref=md"
	 class="html"><li id="function1nav"  
	 >Share Your Results</li></a>
	
	<a href="/mobiledevice/mobile-definitions.php"
	class="html"><li id="function1nav"
	 >Mobile Definitions</li></a>

<!--
	<a href="/FAQ.php"
	class="html"><li id="function1nav" class="leftNavBottom"
	 >Mobile FAQ</li></a>
-->

	</ul>

