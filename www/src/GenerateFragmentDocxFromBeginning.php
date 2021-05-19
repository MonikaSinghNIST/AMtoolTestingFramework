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

			
/////////////////////////////////////////////////////////////////	
	$deltxtfiles = glob('../DataUserGenerated\FragmentIdentification\DocxData\SourceDocx\*'); // get all file names
foreach($deltxtfiles as $deltxtfile){ // iterate files
 	if(is_file($deltxtfile))
    unlink($deltxtfile); // delete file
}

	$deltxtfiles = glob('../DataUserGenerated\FragmentIdentification\DocxData\FromBegnning\Docx\*'); // get all file names
foreach($deltxtfiles as $deltxtfile){ // iterate files
 	if(is_file($deltxtfile))
    unlink($deltxtfile); // delete file
}
	

	$delRsltfiles = glob('../DataUserGenerated\FragmentIdentification\DocxData\FromBegnning\Results\*'); // get all file names
foreach($delRsltfiles as $delRsltfiles){ // iterate files
  if(is_file($delRsltfiles))
    unlink($delRsltfiles); // delete file
}
	
	
	

//////////////////////////////////Move Docx to userDOcxFolder/////////////////////////////////////////////////	
		
	$total = count($_FILES['docxFiles']['name']);
		//echo "Total: ".$total;
		// Loop through each file
		for($i=0; $i<$total; $i++) {
		  //Get the temp file path
		  $tmpFilePath = $_FILES['docxFiles']['tmp_name'][$i];
		 //echo "Path: ".$tmpFilePath;
		 
		  //Make sure we have a filepath
		  if ($tmpFilePath != ""){
			//Setup our new file path
			$newFilePath = "../DataUserGenerated/FragmentIdentification/DocxData/SourceDocx/" . $_FILES['docxFiles']['name'][$i];
		//echo "In if!!";
			//Upload the file into the temp dir
			if(move_uploaded_file($tmpFilePath, $newFilePath)) {
				
			//	echo "Moved!!";
		
			  //Handle other code here
		
			}
		  }
		}
	


?>

 <?php  
 		//echo exec('javac -cp "javasrc/jar/poi-3.16.jar;javasrc/jar/poi-ooxml-3.16.jar;javasrc/jar/poi-ooxml-3.16.jar;javasrc/jar/poi-ooxml-schemas-3.16.jar;javasrc/jar/xmlbeans-2.6.0.jar;javasrc/jar/zip4j_1.3.2.jar" javasrc/DocxFragment.java');
		
		echo exec('java -cp "javasrc/jar/poi-3.16.jar;javasrc/jar/poi-ooxml-3.16.jar;javasrc/jar/poi-ooxml-3.16.jar;javasrc/jar/poi-ooxml-schemas-3.16.jar;javasrc/jar/xmlbeans-2.6.0.jar;javasrc/jar/zip4j_1.3.2.jar;." javasrc.DocxFragment');
		
 		
			  ?>

                          
    <?php 
	
	//$path = 'D:\\Pictures\\'; 
//exec("explorer '" . $path . "'");
	$fi1_1 = new FilesystemIterator("../DataUserGenerated\FragmentIdentification\DocxData\FromBegnning\Results", FilesystemIterator::SKIP_DOTS);
$numOfFile=iterator_count($fi1_1);
	
	
	
	?>
					  
					  <tr><td colspan="2">&nbsp;&nbsp;&nbsp;</td></tr>
					  
					  <tr><td colspan="2"><div id="breadcrumb" align="center"><?php echo $numOfFile; ?> File fragments has been generated.&nbsp;&nbsp;</div></td></tr>
                      
                      <tr><td><div id="breadcrumb" align="center"><a href="../DataUserGenerated//FragmentIdentification//DocxData//FromBegnning//Results//" target="_blank" >Find the fragment files here</a></div></td></tr>
                      <tr><td><div id="breadcrumb" align="center"><a href="../DataUserGenerated//FragmentIdentification//DocxData//FromBegnning//Docx//" target="_blank" >Find the source files here</a></div></td></tr>
					  
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
