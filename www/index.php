<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CFTT Federated Testing CD - Home Page</title>
<link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/main_style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/layout.css" media="screen" />


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




</head>
<body id="menu1"> 
	<div id="mainWrapper">
		<div id="topBannerContainer">
			<div id="logoContainer">
		<!--	<a class="logo" title="National Institute of Standards and Technology" href="http://www.nist.gov/index.html">National Institute of Standards and Technology</a>
			<a class="sub-logo" title="Health Information Technology" href="http://www.nist.gov/healthcare/">Health Information Technology</a>-->
				<img src="images/banner.png" alt="CFTT Federated Testing - NIST">            
			</div>
            <!-- Menu Starts-->
			<div id="menuContainer">
				
			  <ul id="menu">
              <li><a id="menu1nav" href="src/Home.php">Home</a></li>
			  <li><a id="menu3nav" href="src/about.php">About</a></li>
              <li><a id="menu4nav" href="src/contacts.php">Contacts</a></li>
			</ul>
			  
			</div>
            <!-- Menu Ends-->
		</div>
		<!-- TopBanner Ends-->
		<!-- Main Content Starts-->	
		<div id="subContentContainer">
		  <div id="leftContent">
		    <div id="leftLinks">
			  <div>
				<ul id="">
	 <h1>Select the test case</h1>
	<li class="dropdown">
	 
            <a style="font-size:1.15em;" href="#">Embedded Object Identification&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <ul class="dropdown-menu" style="display:none;background-color:#9D98A9">
                <li><a href="src/GenerateEmbeddedObject.php">Generate the Data Set</a></li>
                <li><a href="src/evaluateEmbeddedObject.php">Perform Test</a></li>
            </ul>
        </li>
	
	<li class="dropdown">
	 
            <a style="font-size:1.15em;" href="#">Fragment Identification&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;</a>
            <ul class="dropdown-menu" style="display:none;background-color:#9D98A9">
                <li><a href="src/GenerateFragment.php">Generate the Data Set</a></li>
                <li><a href="src/evaluateFragment.php">Perform Test</a></li>
            </ul>
        </li>
	
	 <li class="dropdown">
	 
            <a style="font-size:1.15em;" href="#">Related Document Detection&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <ul class="dropdown-menu" style="display:none;background-color:#9D98A9">
                <li><a href="src/GenerateRelatedDocument.php">Generate the Data Set</a></li>
                <li><a href="src/evaluateRelatedDocument.php">Perform Test</a></li>
            </ul>
        </li>
	
	 <li class="dropdown">
	 
            <a style="font-size:1.15em;" href="#">Identification of code version&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <ul class="dropdown-menu" style="display:none;background-color:#9D98A9">
                <li><a href="src/GenerateCodeVersionDataSet.php">Generate the Data Set</a></li>
                <li><a href="src/evaluateSoftwareVersionDetection.php">Perform Test</a></li>
            </ul>
        </li>
	</ul>
	
	<ul>
	 <a style="font-size:1.15em;" href="src/inputEXEC.php" class="xhtml"><li id="function3nav">Add new tool</li></a> 
	</ul>
    	    </div>
		    </div>
		  </div>  
          	
    	  <div id="rightContent" style="text-align:justify;">
    	    <!--<div id="breadcrumb">Home</div>  -->
<!--		      <h1>Welcome to the CFTT Federated Testing CD</h1>-->
			  <h1>Welcome to the Approximate Matching Tool Testing Framework</h1>
				
			<p>Welcome to the Approximate Matching Tool Testing Framework produced by (TBD/ NSRL) project at the National Institute of Standards and Technology. Approximate matching algorithms are used to assist the digital investigation process by filtering out the relevant data from the total encountered data. Approximate matching is a relatively new area. In the past several algorithms have been proposed to perform the filtering.<br /> <!--In order to identify the capabilities of proposed algorithms, it is important to have a systematic method to evaluate the abilities of existing and future algorithms.-->
             The purpose of this framework is to identify the capabilities of existing and future algorithms. The framework performs the evaluation on four test-cases using following metrics: false-positive rate, false-negative rate, precision, recall, F-score, and Matthews Correlation Coefficient (MCC). This framework provides a real-world dataset for each test case. It also provides an automated way to generate a real world dataset, which can be used for further research in this area.
            
            <!--The purpose of this environment is to allow forensic labs to test their forensic tools with the same rigor as CFTT (see <a href="http://www.cftt.nist.gov">www.cftt.nist.gov</a>) and to generate sharable test reports with the test results. -->
            </p>
			  
	        <p><img src="images/info_black-128x128.png" alt="" height="24" width="24" style="margin:0px 0;">&nbsp;To get started, select the test-case from the menu on the left.</p>
             <p><img src="images/info_black-128x128.png" alt="" height="24" width="24" style="margin:0px 0;">&nbsp;Either perform the test on the existing dataset or first generate the dataset and  then perform the test.</p>
	
    		 <p><img src="images/info_black-128x128.png" alt="" height="24" width="24" style="margin:0px 0;">&nbsp;If you need help or have questions email 
             <a href="mailto:CFTT@NIST.GOV">monika.singh@nist.gov (TBD...)</a>.<br></p>
                  
		  </div>
		<!-- Main Content Ends-->
		</div>
		<div class="push"></div>
	</div>
	
	
	<div style="color: brown;">
		 
	</div>
    <!-- Footer Starts-->
	<?php
     //$fn = $_SERVER["SCRIPT_FILENAME"];
	  //print_footer_contents($fn);
	?>
    <!-- Footer Ends-->
</body>
</html>
