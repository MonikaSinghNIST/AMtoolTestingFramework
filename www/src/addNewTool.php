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
<link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/main_style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/layout.css" media="screen" />
	
	
	
	<script>
function redirect(){
	
	var setType = document.getElementById("setType").value;
	var objct = document.getElementById("object").value;
	var embed = document.getElementById("embed").value;
	
  if((setType == "PPTX") && (objct== "JPEG") && (embed== "On a new slide")){
   document.getElementById('frm').action = 'PPTXjpeg.php';
  }else if((setType == "DOCX") && (objct== "JPEG")){
   document.getElementById('frm').action = 'DOCXjpeg.php';
  }else{
	  document.getElementById('frm').action = 'run.php';
  }
}
</script>
	
	
	
</head>


<body id="menu1"> 


	<div id="mainWrapper">
		
		<!-- TopBanner Ends-->
		<!-- Main Content Starts-->	
		<div id="subContentContainer">
		 
          	
    	  <div id="rightContent">
    	    <div id="breadcrumb"></div> 
			  <form id="frm" method="post" action="javascript:redirect();" enctype="multipart/form-data">
				  <table>
					  
<?php
ini_set('max_execution_time', 360000);

			
		
	
					
	$newExecPath = "../Tools/" . $_FILES['exec']['name'];
	$tmpExecPath = $_FILES['exec']['tmp_name'];
	if(move_uploaded_file($tmpExecPath, $newExecPath)) {
				echo "Added!!";
		}
					  
					  
					  


?>

 <?php  //echo exec('javac TextFragmentPHP.java'); 
		//echo exec('java TextFragmentPHP');
			  
			  ?>

                          

					   
					 
				  </table>
				  
			  </form>
			  
			  
			  <!--<div id="boxContainer" style="font-size: 2em"><a href="">DOCX</a></div>
			  
			  <div id="boxContainer" style="font-size: 2em"><a href="run.php">PPTX</a></div>
			  
			  <div id="boxContainer" style="font-size: 2em"><a href="">PPT</a></div>-->
			  
			 
<!--		      <h1>Welcome to the CFTT Federated Testing CD</h1>-->
			  
			  
			 
			  
                  
		  </div>
		<!-- Main Content Ends-->
		</div>
		
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
