<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CFTT Federated Testing CD - About</title>
<link rel="stylesheet" type="text/css" href="../css/reset.css" media="screen" />
<link rel="stylesheet" type="text/css" href="../css/main_style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="../css/layout.css" media="screen" />
<body id="menu3">
	<div id="mainWrapper">
		<div id="topBannerContainer">
			<div id="logoContainer">
			<!--    <a class="logo" title="National Institute of Standards and Technology" href="http://www.nist.gov/index.html">National Institute of Standards and Technology</a>
				<a class="sub-logo" title="Health Information Technology" href="http://www.nist.gov/healthcare/">Health Information Technology</a>-->
  				<img src="../images/banner.png" alt="CFTT Federated Testing - NIST">
			</div>
            <!-- Menu Starts-->
			<div id="menuContainer">
			  <?php
				include '../include/global.php';
				print_main_horizontal_menu_contents();
			  ?>
			</div>
            <!-- Menu Ends-->
		</div>
		<!-- TopBanner Ends-->
		<!-- Main Content Starts-->	
		<div id="subContentContainer">

<!--		  <div id="leftContent">
		    <div id="leftLinks">
			  <div>-->
<?php
/*	print_main_sidebar_menu_contents();*/
?>
<!--		    </div>
		    </div>
		  </div>--> 
          		
		  <div id="rightContent">
		    <div id="breadcrumb">Home > About</div>
    	      <h1>About</h1>
			  <h2>Version</h2>
<!--              <p>Version: v15-6-11-prerelease</p>
              <p>Released: 6/11/2015</p> -->
             <?php
			  global $release_date, $version;
			  echo "<p>Approximate Matching Tool Testing Framework: </p>";
			  echo "<p>Release Date: </p>";
			  ?>
                           
             <h2>More information</h2> 
              <p>For more information on Federated Testing see <a href="#">TBD</a>
		    
			<!--	<ul>
					<li><a href="http://ihexds.nist.gov/" target="_blank" class="html">IHE Open Source Project: XDS software</a></li>
					<li><a href="http://www.itl.nist.gov/div897/ctg/messagemaker/" target="_blank" class="html">Message Maker Prototype</a></li>
					<li><a href="http://hcsl.sdct.nist.gov:8080/hcsl/home.html" target="_blank" class="html">Healthcare Standards Landscape</a></li>
				</ul> -->		
             <h2>Software disclaimer</h2>		  
			  <p>NIST-developed software is provided by NIST as a public service. You may use, copy and 
              distribute copies of the software in any medium, provided that you keep intact this entire 
              notice. You may improve, modify and create derivative works of the software or any portion 
              of the software, and you may copy and distribute such modifications or works. Modified 
              works should carry a notice stating that you changed the software and should note the date 
              and nature of any such change. Please explicitly acknowledge the National Institute of 
              Standards and Technology as the source of the software.</p>		  
			  <p>NIST-developed software is expressly provided “AS IS.” NIST MAKES NO WARRANTY OF ANY KIND, 
              EXPRESS, IMPLIED, IN FACT OR ARISING BY OPERATION OF LAW, INCLUDING, WITHOUT LIMITATION, 
              THE IMPLIED WARRANTY OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, NON-INFRINGEMENT 
              AND DATA ACCURACY. NIST NEITHER REPRESENTS NOR WARRANTS THAT THE OPERATION OF THE SOFTWARE 
              WILL BE UNINTERRUPTED OR ERROR-FREE, OR THAT ANY DEFECTS WILL BE CORRECTED. NIST DOES NOT 
              WARRANT OR MAKE ANY REPRESENTATIONS REGARDING THE USE OF THE SOFTWARE OR THE RESULTS 
              THEREOF, INCLUDING BUT NOT LIMITED TO THE CORRECTNESS, ACCURACY, RELIABILITY, OR USEFULNESS 
              OF THE SOFTWARE.</p>
			  <p>You are solely responsible for determining the appropriateness of using and distributing 
              the software and you assume all risks associated with its use, including but not limited to 
              the risks and costs of program errors, compliance with applicable laws, damage to or loss of 
              data, programs or equipment, and the unavailability or interruption of operation. This 
              software is not intended to be used in any situation where a failure could cause risk of 
              injury or damage to property. The software developed by NIST employees is not subject to 
              copyright protection within the United States.</p>
		  </div>
		<!-- Main Content Ends-->
		</div>
		<div class="push"></div>
	</div>
    <!-- Footer Starts-->
	<?php
     //$fn = $_SERVER["SCRIPT_FILENAME"];
	  //print_footer_contents($fn);
	?>
    <!-- Footer Ends-->
</body>
</html>
