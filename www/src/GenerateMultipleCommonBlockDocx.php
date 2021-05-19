<!doctype html>
<head>

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
ini_set('max_execution_time', 50000);


			
	$sourceFolder="..\\DataUserGenerated\\RelatedDocument\\MultipleCommonBlock\\Source\\Docx\\";
	$destinationFolder1="..\\DataUserGenerated\\RelatedDocument\\MultipleCommonBlock\\Results\\Docx\\Source1\\";
	$destinationFolder2="..\\DataUserGenerated\\RelatedDocument\\MultipleCommonBlock\\Results\\Docx\\Source2\\";
	
	/////////////////////////////////////////////////Empty the folder docx and jpeg to generate new data-set. /////////////////////////////////////////////////////////////////	
	

$deltxtfiles = glob('..\DataUserGenerated\RelatedDocument\MultipleCommonBlock\Source\Docx\*'); // get all file names
foreach($deltxtfiles as $deltxtfile){ // iterate files
 	if(is_file($deltxtfile))
    unlink($deltxtfile); // delete file
}


	$delRsltfiles = glob('..\DataUserGenerated\RelatedDocument\MultipleCommonBlock\Results\Docx\Source1\*'); // get all file names
foreach($delRsltfiles as $delRsltfiles){ // iterate files
  if(is_file($delRsltfiles))
    unlink($delRsltfiles); // delete file
}


$delRsltfiles = glob('..\DataUserGenerated\RelatedDocument\MultipleCommonBlock\Results\Docx\Source2\*'); // get all file names
foreach($delRsltfiles as $delRsltfiles){ // iterate files
  if(is_file($delRsltfiles))
    unlink($delRsltfiles); // delete file
}	
	
	

//////////////////////////////////Move Text to userDOcxFolder/////////////////////////////////////////////////	
		
	$total = count($_FILES['sourceFiles']['name']);
		//echo "Total: ".$total;
		// Loop through each file
		for($i=0; $i<$total; $i++) {
		  //Get the temp file path
		  $tmpFilePath = $_FILES['sourceFiles']['tmp_name'][$i];
		 //echo "Path: ".$tmpFilePath;
		 
		  //Make sure we have a filepath
		  if ($tmpFilePath != ""){
			//Setup our new file path
			$newFilePath = $sourceFolder . $_FILES['sourceFiles']['name'][$i];
		//echo "In if!!";
			//Upload the file into the temp dir
			if(move_uploaded_file($tmpFilePath, $newFilePath)) {
				
			//	echo "Moved!!";
		
			  //Handle other code here
		
			}
		  }
		}
	
	
	
//////////////////////////////////////////////////////////////////////////////////////////////////////



?>

 <?php  //echo exec('javac -cp "javasrc/jar/poi-3.16.jar;javasrc/jar/poi-ooxml-3.16.jar;javasrc/jar/poi-ooxml-3.16.jar;javasrc/jar/poi-ooxml-schemas-3.16.jar;javasrc/jar/xmlbeans-2.6.0.jar;javasrc/jar/zip4j_1.3.2.jar" javasrc/MultipleBlockSimilarityDocx.java'); 
		echo exec('java -cp "javasrc/jar/poi-3.16.jar;javasrc/jar/poi-ooxml-3.16.jar;javasrc/jar/poi-ooxml-3.16.jar;javasrc/jar/poi-ooxml-schemas-3.16.jar;javasrc/jar/xmlbeans-2.6.0.jar;javasrc/jar/zip4j_1.3.2.jar;." javasrc.MultipleBlockSimilarityDocx');
			  
			  ?>

                          
    <?php 
	
	//$path = 'D:\\Pictures\\'; 
//exec("explorer '" . $path . "'");
	$fi1_1 = new FilesystemIterator($destinationFolder1, FilesystemIterator::SKIP_DOTS);
$numOfFile=iterator_count($fi1_1);
	
	
	
	?>
					  
					  <tr><td colspan="2">&nbsp;&nbsp;&nbsp;</td></tr>
					  
					  <tr><td colspan="2"><div id="breadcrumb" align="center"><?php echo $numOfFile; ?> pairs of related documents has been generated.&nbsp;&nbsp;<a href="..\DataUserGenerated\RelatedDocument\MultipleCommonBlock\Results\Docx" target="_blank" >Find here</a></div></td></tr>
					  
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
