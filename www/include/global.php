<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function(){
        // Show hide popover
        $(".dropdown").click(function(){
            $(this).find(".dropdown-menu").slideToggle("fast");
        });
    });
    $(document).on("click", function(event){
        var $trigger = $(".dropdown");
        if($trigger !== event.target && !$trigger.has(event.target).length){
            $(".dropdown-menu").slideUp("fast");
        }            
    });
</script>
<?php

//$release_date = "--/--/201-";
$release_date = "9/29/2017";
//$version = "beta version v15-11-24-prerelease";
//$version = "1.1-10 (pre-release/non-public version)";
$version = "3.0";



// all of the top-level pages should share a common horizontal menu

function test(){
	echo "Randy's favorite flavor of ice cream is ____.";
}



function print_main_horizontal_menu_contents() {
	echo '<ul id="menu">';
	echo ' <li><a id="menu1nav" href="Home.php">Home</a></li>';
	echo ' <li><a id="menu3nav" href="about.php">About</a></li>';
/*	echo ' <li><a id="menu3nav" href="Federated_Testing_Definitions-v2.php">Glossary of Terms</a></li>';*/
/*	echo ' <li><a id="menu3nav" href="Federated_Testing_Definitions-v2.php" target="_blank">Glossary of Terms</a></li>';*/
/*	echo ' <li><a id="menu2nav" href="FAQ.php">FAQs</a></li>';*/
	echo ' <li><a id="menu4nav" href="contacts.php">Contacts</a></li>';
	echo '</ul>';
}

// the sidebar menu for the top level pages gets printed more than once, let's put it in a function
function print_main_sidebar_menu_contents() {

	echo"<ul id=\"\">\n";
	echo " <h1>Select the test case</h1>\n";
	echo "<li class=\"dropdown\">
	 
            <a style=\"font-size:1.15em;\" href=\"#\">Embedded Object Identification&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <ul class=\"dropdown-menu\" style=\"display:none;background-color:#9D98A9\">
                <li><a href=\"GenerateEmbeddedObject.php\">Generate the Data Set</a></li>
                <li><a href=\"evaluateEmbeddedObject.php\">Perform Test</a></li>
            </ul>
        </li>";
	
	echo "<li class=\"dropdown\">
	 
            <a style=\"font-size:1.15em;\" href=\"#\">Fragment Identification&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;</a>
            <ul class=\"dropdown-menu\" style=\"display:none;background-color:#9D98A9\">
                <li><a href=\"GenerateFragment.php\">Generate the Data Set</a></li>
                <li><a href=\"evaluateFragment.php\">Perform Test</a></li>
            </ul>
        </li>";
	
	 echo "<li class=\"dropdown\">
	 
            <a style=\"font-size:1.15em;\" href=\"#\">Related Document Detection&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <ul class=\"dropdown-menu\" style=\"display:none;background-color:#9D98A9\">
                <li><a href=\"GenerateRelatedDocument.php\">Generate the Data Set</a></li>
                <li><a href=\"evaluateRelatedDocument.php\">Perform Test</a></li>
            </ul>
        </li>";
	
	 echo "<li class=\"dropdown\">
	 
            <a style=\"font-size:1.15em;\" href=\"#\">Identification of code version&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <ul class=\"dropdown-menu\" style=\"display:none;background-color:#9D98A9\">
                <li><a href=\"GenerateCodeVersionDataSet.php\">Generate the Data Set</a></li>
                <li><a href=\"evaluateSoftwareVersionDetection.php\">Perform Test</a></li>
            </ul>
        </li>";
	echo "</ul>";
	
	echo"<ul>";
	echo " <a style=\"font-size:1.15em;\" href=\"inputEXEC.php\" class=\"xhtml\"><li id=\"function3nav\">Add new tool</li></a>\n"; 
	echo "</ul>\n";
	
	
}

// print page footers 
function print_footer_contents($fn) {

	global $version, $release_date;

	// Only print "was last modified on..." line in footer if on mac. check if mac vs linux box.
	$mac = '/Applications/MAMP';
	$linux = '/usr/lib/cgi-bin';
	$is_mac = 0;

	if (file_exists($linux)){	
	} else if (file_exists($mac)){
		$is_mac = 1;
	} else {
		echo "<p><b>Error:</b> printing footer... problem cgi-bin directory</p>\n";
		exit();	
	}

	echo '<div class="footer">';
    echo '<div class="footerContentsWrapper">';
	echo '<p>The National Institute of Standards and Technology (NIST) is an agency of the U.S. Commerce Department.</p><br><br>';	
    echo '<p class="links">';
    echo '<a href="/Federated_Testing_Home_Page.php">Home</a> &nbsp;/&nbsp; ';
    echo '<a href="/about.php">About</a> &nbsp;/&nbsp; ';
/*    echo '<a href="/Federated_Testing_Definitions-v2.php">Glossary of Terms</a> &nbsp;/&nbsp; ';
    echo '<a href="/FAQ.php">FAQs</a> &nbsp;/&nbsp; ';*/
    echo '<a href="/contacts.php">Contacts</a>';
    echo '<br/><br/>';
	
/*	if ($is_mac){ // if on mac, print last modified date/time
		//$mod = stat($_SERVER["SCRIPT_FILENAME"]);
		$mod = stat($fn);
		$t   = strftime("%B %e, %Y at %R",$mod[9]);
    	echo "This page was last modified on $t.<br>";  
	}*/
	echo "Federated Testing Version: ".$version."<br>Release Date: ".$release_date;
    echo '</p>';
   	echo '</div>';
    echo '</div>';
}

// Each Federated Testing module (e.g., di, hwb, md, etc.) produces log files that 
// document the testing performed. These logs need to be stored somewhere. We direct
// users to create an FT-LOGS flash drive to store these on. It's also helpful (for 
// development) to be to get these logs written to /tmp. If we're in our development
// environment (MAMP and Mac), we'll want to write the logs to /tmp. If we're in our
// production environment (Linux ISO), we'll want to write the logs to the flash drive, 
// i.e., /media/FT-LOGS. The purpose of this function is to: 1) figure out if we're in 
// our development environemnt vs production; 2) if we're in the development environment
// return our development logs path (i.e., /tmp); 3) if we're in the production 
// environment, check to see if our development logs path (i.e., /media/FT-LOGS) exists, 
// i.e., the log drive is mounted. If the drive is mounted return the path to it. If it's
// not mounted, print an error message (it needs to be mounted so we can write logs to 
// it) and return 0/false/not mounted.
function is_ftlogs_mounted(){
	// Figure out what environment we're running in. If on mac (dev work), should be able 
	// to find the /Applications/MAMP/ directory. Else, on linux (boot CD/DVD) 	
	$mac = '/Applications/MAMP';
	$linux = '/usr/lib/cgi-bin';

	// set path
	if (file_exists($mac)){
		// mac
		$path = "/tmp";
	} else {
		// linux
		$path = "/media/FT-LOGS";
	}

	//$path = "bloop";
	
	// check: log drive is mounted?
	// if on Linux, we know user's log drive is mounted if /media/FT-LOGS exists
	// (if on Mac, /tmp should always exist.)
	if (!file_exists($path)){
//		echo "<p style=\"font-size:1em;\"><b>Error:</b> <b><i>it seems that your log drive is ";
		echo "<p><b>Error:</b> <b><i>it seems that your log drive is ";
		echo "not mounted. Please mount it and press 'F5' to refresh this page. To mount your ";
		//echo 'log drive, click on its icon, e.g., <img src="/images/FT-LOGS.png" alt="Home" width="15%" height="15%" style="margin:-3px 0 0 0;"> in the launch bar (you can close or minimize the \'Home ';
		echo 'log drive, click on its icon in the launch bar (you can close or minimize the \'Home ';
		echo 'Folder\' application window that opens)</i></b></p>';	

		// log drive is not mounted so set $path to 0/false/not mounted.
		$path = 0; 
	}
	return $path;
}

?>

