<!doctype html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CFTT Federated Testing CD - Home Page</title>
<link rel="stylesheet" type="text/css" href="../css/reset.css" media="screen" />
<link rel="stylesheet" type="text/css" href="../css/main_style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="../css/layout.css" media="screen" />
	
<script>
function fragment_identification(){
	
	var threshold = document.getElementById("custom_threshold_FI").value;
	document.location.href = 'result_report_codeIdentification.php?threshold='+ threshold;
  
}
	

	
</script>	
	
	
	
</head>


<body id="menu1"> 
	<div id="mainWrapper">
		<div id="topBannerContainer">
			<div id="logoContainer">
		<!--	<a class="logo" title="National Institute of Standards and Technology" href="http://www.nist.gov/index.html">National Institute of Standards and Technology</a>
			<a class="sub-logo" title="Health Information Technology" href="http://www.nist.gov/healthcare/">Health Information Technology</a>-->
				<img src="../images/banner.png" alt="CFTT Federated Testing - NIST">            
			</div>
            <!-- Menu Starts-->
			<div id="menuContainer">
				
			  <?php
				include("../include/global.php");
				print_main_horizontal_menu_contents();
			  ?>
			</div>
            <!-- Menu Ends-->
		</div>
		<!-- TopBanner Ends-->
		<!-- Main Content Starts-->	
		<div id="subContentContainer">
		  <div id="leftContent">
		    <div id="leftLinks">
			  <div>
				  
			    <?php
                
				  print_main_sidebar_menu_contents();
               ?>
    	    </div>
		    </div>
		  </div>  
          	
    	  <div id="rightContent">
    	    <div id="breadcrumb">Identification of code version ➤ <a href="evaluateSoftwareVersionDetection.php">Test Cases</a></div> 
			  <form id="frm" method="get" action="javascript:redirect();">
				  <table class="" style="border: thick;">
					  <tr style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center;width: 1000px;"><td colspan="2">Test Cases</td></tr>
					  <tr><td style="border-left: medium;border-left-color: black;"><div id="breadcrumb"><a href="evaluate_code_search.php">Perform specific tests</a></div><div style="font-size:9px; color:#F00;">*Perform customized test</div></td><td style="text-align: right;">
						
						  
					<table style="border: none;"><tr align="right"><td width="80%" align="right" style="align-items: flex-end;text-align: right; border-right: none;border-bottom: none;"><input type="text" id="custom_threshold_FI" name="custom_threshold_FI" value="22" size="4px" style="align-content: flex-end;text-align: right;"></td>
					<td style="border-left: none; border-bottom: none;"><input type="button" align="right" id="button_embedded" name="button_embedded" value="Perform all test and generate results" onClick="fragment_identification();" ></td></tr>
					<tr><td style="align-items: flex-end;text-align: right; border-right: none;border-bottom: none;"><div style="font-size: 10px;color: red;"  >Enter Threshold  </div><div style="font-size: 8px;color: red;"  >(score value, used to 	separate matches from non-matches.)</div></td><td style="align-items: flex-end;text-align: right; border-right: none;border-bottom: none;border-left: none;"></td></tr>
					</table>
						  
					  </td></tr>
					  
			    </table>
				  
			  </form>
			  
                  
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
