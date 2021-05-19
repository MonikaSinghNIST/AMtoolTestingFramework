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
	document.getElementById('frm').action = 'uploadFiles.php';
	
	var setType = document.getElementById("setType").value;
	var objct = document.getElementById("object").value;
	//var containsImages = document.getElementById("containsImages").value;
	
	if((setType == "DOCX") ){
   document.getElementById('frm').action = 'uploadFilesDocxJpeg.php';
  }else if((setType == "PPTX") && (objct== "JPEG") ){
   document.getElementById('frm').action = 'uploadFilesPptxJpeg.php';
  }else if((setType == "PPTX") && (objct== "BMP")){
   document.getElementById('frm').action = 'uploadFilesPptxJpeg.php';
  }else if((setType == "PPTX") && (objct== "GIF")){
   document.getElementById('frm').action = 'uploadFilesPptxJpeg.php';
  }else if((setType == "PPTX") && (objct== "TIFF")){
   document.getElementById('frm').action = 'uploadFilesPptxJpeg.php';
  }else{
	  //document.getElementById('frm').action = 'run.php';
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
    	    <div id="breadcrumb">Embedded Object Identification ➤ <a href="GenerateEmbeddedObject.php">Generate the Dataset</a></div> 
			  <form id="frm" method="get" action="javascript:redirect();">
				  <table>
					  <tr><td><div id="breadcrumb">Select the File Type  </div>
						  </td><td><select name="setType" id="setType"> 
						  <option value="0">----Select----</option>
						  <option value="DOCX">DOCX</option>
						  <option value="PPTX">PPTX</option>
						  
						  </select></td></tr>
                          
                       <!--<tr><td><div id="breadcrumb">Select type of Data set </div>
						  </td><td><select name="containsImages" id="containsImages"> 
						  <option value="0">----Select----</option>
						  <option value="with_images">with images</option>
						  <option value="without_images">with out images</option>
						  
						  </select></td></tr>       -->
                          
				  	  <tr><td><div id="breadcrumb">Select the embedded object type</div>
						  </td><td><select name="object" id="object"> 
						  <option value="0">----Select----</option>
						  <option value="JPEG">JPEG</option>
						  <option value="TIFF">TIFF</option>
						  <option value="BMP">BMP</option>
						  <option value="GIF">GIF</option>
						  
						  
						  </select></td></tr>
					  
					  
					  
					  <!--<tr><td><div id="breadcrumb">Embed the object</div>
						  </td><td><select name="embed" id="embed"> 
						  <option value="0">----Select----</option>
						  <option value="On a new slide">On a new slide</option>
						  <option value="2">In the background</option>
						  <option value="3">Obscured</option>
						  </select>
                       </td></tr>-->
					  
					  
					  
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
