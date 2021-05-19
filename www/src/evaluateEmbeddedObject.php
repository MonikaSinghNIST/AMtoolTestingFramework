<!doctype html>
<head>

 <?php 
 //$JAVA_HOME = "\jre1.8.0_131";
 //$PATH = "$JAVA_HOME/bin:".getenv('PATH');
 //putenv("JAVA_HOME=$JAVA_HOME");
 //putenv("PATH=$PATH");
//enter rest of the code here
?>
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CFTT Federated Testing CD - Home Page</title>
<link rel="stylesheet" type="text/css" href="../css/reset.css" media="screen" />
<link rel="stylesheet" type="text/css" href="../css/main_style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="../css/layout.css" media="screen" />
	
<script>
function redirect(){
	
	var setType = document.getElementById("setType").value;
	var tool = document.getElementById("tool").value;
	var object = document.getElementById("objectType").value;
	var bttn = document.getElementById("button_embedded").value;
	
	
  if((bttn == "PPTX") && (tool== "ssdeep") && (object=="JPEG")) {
   document.getElementById('frm').action = 'ssdeepPPTXJpeg.php';
  }else if((setType == "DOCX") && (tool== "ssdeep") && (object=="JPEG")) {
   document.getElementById('frm').action = 'ssdeepDOCXJpeg.php';
  }else if((setType == "PPTX") && (tool== "sdhash") && (object=="JPEG")) {
   document.getElementById('frm').action = 'sdhashPPTXJpeg.php';
  }else if((setType == "DOCX") && (tool== "sdhash") && (object=="JPEG")) {
   document.getElementById('frm').action = 'sdhashDOCXJpeg.php';
  }
}
</script>
	
	
	
<script>
function object_based_search(){
	
	var threshold = document.getElementById("custom_threshold_EOD").value;
	document.location.href = 'result_report_embedded_object_based_search.php?threshold='+ threshold;
  
}
	
	
function single_common_object_based_search(){
	
	var threshold = document.getElementById("custom_threshold_SCOI").value;
	document.location.href = 'result_report_single_common_object_based_search.php?threshold='+ threshold;
  
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
    	    <div id="breadcrumb">Embedded Object Identification ➤ <a href="evaluateEmbeddedObject.php">Test Cases</a></div> 
			  <form id="frm" method="get" action="javascript:redirect();">
				  <table class="" style="border: thick;">
					  <tr style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center;width: 1000px;"><td colspan="2">Test Cases</td></tr>
					  <tr><td style="border-left: medium;border-left-color: black;"><div id="breadcrumb"><a href="evaluate_object_based_search_AllInOne.php">Embedded Object Detection</a></div><div style="font-size:9px; color:#F00;">*Perform customized test</div></td><td style="text-align: right;">
						  <table style="border: none;"><tr align="right"><td width="80%" align="right" style="align-items: flex-end;text-align: right; border-right: none;border-bottom: none;"><input type="text" id="custom_threshold_EOD" name="custom_threshold_EOD" value="22" size="4px" style="align-content: flex-end;text-align: right;"></td>
							  <td style="border-left: none; border-bottom: none;"><input type="button" align="right" id="button_embedded" name="button_embedded" value="Comparative Assessment" onClick="object_based_search();" ></td></tr><tr><td style="align-items: flex-end;text-align: right; border-right: none;border-bottom: none;"><div style="font-size: 10px;color: red;"  >Enter Threshold  </div><div style="font-size: 8px;color: red;"  >(score value, used to 	separate matches from non-matches.)</div></td><td style="align-items: flex-end;text-align: right; border-right: none;border-bottom: none;border-left: none;"></td></tr></table>
							  </td></tr>
					  
					  <tr><td></td><td></td></tr>
					  
					  <tr><td><div id="breadcrumb"><a href="evaluate_single_common_object_identification_AllInOne.php">Single Common Object Identification</a></div><div style="font-size:9px; color:#F00;">*Perform customized test</div>
						  </td><td style="text-align: right;">
						  
						  
						  <table style="border: none;"><tr align="right"><td width="80%" align="right" style="align-items: flex-end;text-align: right; border-right: none;border-bottom: none;"><input type="text" id="custom_threshold_SCOI" name="custom_threshold_SCOI" size="4px;" value="22" style="text-align:right;"></td>
							  <td style="border-left: none; border-bottom: none;"><input type="button" align="right" value="Comparative Assessment" onClick="single_common_object_based_search();" ></td></tr><tr><td style="align-items: flex-end;text-align: right; border-right: none;border-bottom: none;"><div style="font-size: 10px;color: red;"  >Threshold: score value, used to 	separate matches from non-matches.</div></td><td style="align-items: flex-end;text-align: right; border-right: none;border-bottom: none;border-left: none;"></td></tr></table>
						  
						  
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
