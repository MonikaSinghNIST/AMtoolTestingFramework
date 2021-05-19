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
	//alert("Here!!!!");
	//document.getElementById('frm').action = 'uploadFragmentFilesText.php';
	
	var setType = document.getElementById("setType").value;
	var FragmentType = document.getElementById("FragmentType").value;
	
  if((setType == "TEXT") && (FragmentType== "FromBeginning")){
   document.getElementById('frm').action = 'uploadFragmentFiles.php';
  }else if((setType == "TEXT") && (FragmentType== "Random")){
   document.getElementById('frm').action = 'uploadFragmentFilesTextRandom.php';
  }else if((setType == "DOCX") && (FragmentType== "FromBeginning")){
   document.getElementById('frm').action = 'uploadFragmentFilesDocx.php';
  }else if((setType == "DOCX") && (FragmentType== "Random")){
   document.getElementById('frm').action = 'uploadFragmentFilesDocx.php';
  }
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
    	    <div id="breadcrumb">Fragment Identification ➤ <a href="GenerateFragment.php">Generate the Dataset</a></div> 
			  <form id="frm" method="get" action="javascript:redirect();">
				  <table>
					  <tr><td><div id="breadcrumb">Select the data set type  </div>
						  </td><td>
                          <select name="setType" id="setType"> 
						  <option value="0">----Select----</option>
						  <option value="TEXT">TEXT</option>
                          <option value="DOCX">DOCX</option>
						  </select></td></tr>
                          
                       <tr><td><div id="breadcrumb">Select type of Fragment set </div>
						  </td><td><select name="FragmentType" id="FragmentType"> 
						  <option value="0">----Select----</option>
						  <option value="FromBeginning">Sequential</option>
						  <option value="Random">Random</option>
						  
						  </select></td></tr>      
                          
				  	 
					  
					  <tr align="righ" ><td colspan="2" align="right"><input type="submit" align="middle" value="submit" style="margin-left:50%" ></td></tr>
					  
					  
				  </table>
				  
			   
			  
			  </form>
			  
			  
			  <!--<div id="boxContainer" style="font-size: 2em"><a href="">DOCX</a></div>
			  
			  <div id="boxContainer" style="font-size: 2em"><a href="run.php">PPTX</a></div>
			  
			  <div id="boxContainer" style="font-size: 2em"><a href="">PPT</a></div>-->
			  
			 
<!--		      <h1>Welcome to the CFTT Federated Testing CD</h1>-->
			  
			  
			 
			  
                  
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

