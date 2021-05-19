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
ini_set('max_execution_time', 60000);

			
//echo "______________".$_POST['submit'];
					  
					  
//if(isset($_POST["submit"])){
	//echo "fewfgweig";
	//$file = $_FILES['docxFiles']['name'];
	
	
/////////////////////////////////////////////////Empty the folder docx and jpeg to generate new data-set. /////////////////////////////////////////////////////////////////	
	$deltxtfiles = glob('../DataUserGenerated\FragmentIdentification\TextData\FromBegnning\Text\*'); // get all file names
foreach($deltxtfiles as $deltxtfile){ // iterate files
 	if(is_file($deltxtfile))
    unlink($deltxtfile); // delete file
}
	

	$delRsltfiles = glob('../DataUserGenerated\FragmentIdentification\TextData\FromBegnning\Results\*'); // get all file names
foreach($delRsltfiles as $delRsltfiles){ // iterate files
  if(is_file($delRsltfiles))
    unlink($delRsltfiles); // delete file
}
	
	
	

//////////////////////////////////Move Text to userDOcxFolder/////////////////////////////////////////////////	
		
	$total = count($_FILES['textFiles']['name']);
		//echo "Total: ".$total;
		// Loop through each file
		for($i=0; $i<$total; $i++) {
		  //Get the temp file path
		  $tmpFilePath = $_FILES['textFiles']['tmp_name'][$i];
		 //echo "Path: ".$tmpFilePath;
		 
		  //Make sure we have a filepath
		  if ($tmpFilePath != ""){
			//Setup our new file path
			$newFilePath = "../DataUserGenerated/FragmentIdentification/TextData/FromBegnning/Text/" . $_FILES['textFiles']['name'][$i];
		//echo "In if!!";
			//Upload the file into the temp dir
			if(move_uploaded_file($tmpFilePath, $newFilePath)) {
				
			//	echo "Moved!!";
		
			  //Handle other code here
		
			}
		  }
		}
	


?>

 <?php  //echo exec('javac javasrc/TextFragmentPHP.java'); 
		echo exec('java javasrc.TextFragmentPHP');
			  
			  ?>

                          
    <?php 
	
	//$path = 'D:\\Pictures\\'; 
//exec("explorer '" . $path . "'");
	$fi1_1 = new FilesystemIterator("../DataUserGenerated\FragmentIdentification\TextData\FromBegnning\Results", FilesystemIterator::SKIP_DOTS);
$numOfFile=iterator_count($fi1_1);
	
	
	
	?>
					  
					  <tr><td colspan="2">&nbsp;&nbsp;&nbsp;</td></tr>
					  
					  <tr><td colspan="2"><div id="breadcrumb" align="center"><?php echo $numOfFile; ?> embedded fils has been generated.&nbsp;&nbsp;<a href="../DataUserGenerated//FragmentIdentification//TextData//FromBegnning//Results//" target="_blank" >Find here</a></div></td></tr>
					  
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
