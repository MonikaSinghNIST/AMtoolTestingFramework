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
ini_set('max_execution_time', 600000);

$delPptxfiles = glob('..\DataUserGenerated/EmbeddedObjects/PPTX/Pptx_temp/*'); // get all file names
foreach($delPptxfiles as $delPptxfile){ // iterate files
 	if(is_file($delPptxfile))
    unlink($delPptxfile); // delete file
}

	$delTIFFfiles = glob('..\DataUserGenerated/EmbeddedObjects/PPTX/TIFF/Embedded_Files/*'); // get all file names
foreach($delTIFFfiles as $delTIFFfiles){ // iterate files
  if(is_file($delTIFFfiles))
    unlink($delTIFFfiles); // delete file
}

	$delRsltfiles = glob('..\DataUserGenerated/EmbeddedObjects/PPTX/TIFF/Original_Files/*'); // get all file names
foreach($delRsltfiles as $delRsltfiles){ // iterate files
  if(is_file($delRsltfiles))
    unlink($delRsltfiles); // delete file
}
	
	$delRsltfiles = glob('..\DataUserGenerated/EmbeddedObjects/PPTX/TIFF/Embedded_Objects/*'); // get all file names
foreach($delRsltfiles as $delRsltfiles){ // iterate files
  if(is_file($delRsltfiles))
    unlink($delRsltfiles); // delete file
}	
	
	

//////////////////////////////////Move Pptx to userPptxFolder/////////////////////////////////////////////////	
		
	$total = count($_FILES['pptxFiles']['name']);
		//echo "Total: ".$total;
		// Loop through each file
		for($i=0; $i<$total; $i++) {
		  //Get the temp file path
		  $tmpFilePath = $_FILES['pptxFiles']['tmp_name'][$i];
		 //echo "Path: ".$tmpFilePath;
		 
		  //Make sure we have a filepath
		  if ($tmpFilePath != ""){
			//Setup our new file path
			$newFilePath = "..\DataUserGenerated/EmbeddedObjects/PPTX/Pptx_temp/" . $_FILES['pptxFiles']['name'][$i];
		//echo "In if!!";
			//Upload the file into the temp dir
			if(move_uploaded_file($tmpFilePath, $newFilePath)) {
				
			//	echo "Moved!!";
		
			  //Handle other code here
		
			}
		  }
		}
	
//////////////////////////////////Move TIFF to userTIFFFolder/////////////////////////////////////////////////	
		$total = count($_FILES['tiff']['name']);
		// Loop through each file
		for($i=0; $i<$total; $i++) {
		  //Get the temp file path
		  $tmpFilePath = $_FILES['tiff']['tmp_name'][$i];
		 
		  //Make sure we have a filepath
		  if ($tmpFilePath != ""){
			//Setup our new file path
			$newFilePath = "..\DataUserGenerated/EmbeddedObjects/PPTX/TIFF/Embedded_Objects/" . $_FILES['tiff']['name'][$i];
		
			//Upload the file into the temp dir
			if(move_uploaded_file($tmpFilePath, $newFilePath)) {
				
				
		
			  //Handle other code here
		
			}
		  }
		}
	
	

	
	
//}


?>

 <?php  //echo exec('javac -cp "javasrc/jar/zip4j_1.3.2.jar;javasrc/jar/dom4j-1.6.1.jar;javasrc/jar/poi-3.8-20120326.jar;javasrc/jar/poi-ooxml-3.8-20120326.jar;javasrc/jar/poi-ooxml-schemas-3.8-20120326.jar;javasrc/jar/poi-scratchpad-3.8-20120326.jar;javasrc/jar/xmlbeans-2.3.0.jar" javasrc/PPTXInsertTiff.java'); 
		echo exec('java -cp "javasrc/jar/zip4j_1.3.2.jar;javasrc/jar/dom4j-1.6.1.jar;javasrc/jar/poi-3.8-20120326.jar;javasrc/jar/poi-ooxml-3.8-20120326.jar;javasrc/jar/poi-ooxml-schemas-3.8-20120326.jar;javasrc/jar/poi-scratchpad-3.8-20120326.jar;javasrc/jar/xmlbeans-2.3.0.jar;." javasrc.PPTXInsertTiff');
			  
			  ?>

                          
    <?php 
	
	//$path = 'D:\\Pictures\\'; 
//exec("explorer '" . $path . "'");
	$fi1_1 = new FilesystemIterator("..\DataUserGenerated\EmbeddedObjects\PPTX\TIFF\Embedded_Files", FilesystemIterator::SKIP_DOTS);
$numOfFile=iterator_count($fi1_1);
	
	
	
	?>
					  
					  <tr><td colspan="2">&nbsp;&nbsp;&nbsp;</td></tr>
					  
					  <tr><td colspan="2"><div id="breadcrumb" align="center"><?php echo $numOfFile; ?> embedded fils has been generated.&nbsp;&nbsp;<a href="..\DataUserGenerated//EmbeddedObjects//PPTX//TIFF//Embedded_Files//" target="_blank" >Find here</a></div></td></tr>
					  
				  </table>
				  
			  </form>
			  
			  
			  <!--<div id="boxContainer" style="font-size: 2em"><a href="">Pptx</a></div>
			  
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
