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

	
	<script type="text/javascript" src="../includes/loader.js"></script>
	
	
	
	
	
	
	<script>
function redirect(){
	
	var setType = document.getElementById("setType").value;
	var objct = document.getElementById("tool").value;
	//var embed = document.getElementById("embed").value;
	
	
  if((setType == "PPTX") && (tool== "JPEG")) {
   document.getElementById('frm').action = 'PPTXjpeg.php';
  }else{
	  document.getElementById('frm').action = 'run.php';
  }
}

		
		
		function showPre(nr) {
		
		tblNum--;
		if(tblNum<0){
		   
		   }else{
		for(var i=1;i<=nr;i++){
			
			//alert(tblNum);
			if(i==(tblNum+1)){
			
				document.getElementById("table"+i).style.display="block";  
				
			   }else{
				   
				   document.getElementById("table"+i).style.display="none";
				   
			   }
			
			
		}
			
		}
		
}
	var tblNum = 0;	
		
		
	
	function showNext(nr) {
		
		tblNum++;
		//alert(tblNum+"---"+nr);
		
		if(tblNum==nr){
		   alert("No more records!!!!");
			
		   }else{
			   
		   
		for(var i=1;i<=nr;i++){
			
			
			if(i==(tblNum+1)){
			//alert(i);
				document.getElementById("table"+i).style.display="block"; 
				document.getElementById("table"+i).style.width="100%";
				
			   }else{
				   
				   document.getElementById("table"+i).style.display="none";
				   
			   }
			
			
		}
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
          	
			
			<?php
				  //file to store results to generate pdf
				  
				  $tmp_Pdf_file = 'Tmp_Results_Pdf_embedded_object_based_search.txt';
				  $tmp_handle = fopen($tmp_Pdf_file, 'wb') or die('Cannot open file:  '.$tmp_Pdf_file);
				  $rw="";		
				  $ssdeepJpegTP=0;
				  $ssdeepJpegTN=0;
				  $ssdeepJpegFP=0;
				  $ssdeepJpegFN=0;
				  $ssdeepJpegFPR=0;
				  $ssdeepJpegFNR=0;
				  $ssdeepJpegPRE=0;
				  $ssdeepJpegRECALL=0;
				  $ssdeepJpegACC=0;
				  $ssdeepJpegFSCORE=0;
				  $ssdeepJpegMCC=0;
			
				  $ssdeepBmpTP=0;
				  $ssdeepBmpTN=0;
				  $ssdeepBmpFP=0;
				  $ssdeepBmpFN=0;
				  $ssdeepBmpFPR=0;
				  $ssdeepBmpFNR=0;
				  $ssdeepBmpPRE=0;
				  $ssdeepBmpRECALL=0;
				  $ssdeepBmpACC=0;
				  $ssdeepBmpFSCORE=0;
				  $ssdeepBmpMCC=0;
				
				  $ssdeepGifTP=0;
				  $ssdeepGifTN=0;
				  $ssdeepGifFP=0;
				  $ssdeepGifFN=0;
				  $ssdeepGifFPR=0;
				  $ssdeepGifFNR=0;
				  $ssdeepGifPRE=0;
				  $ssdeepGifRECALL=0;
				  $ssdeepGifACC=0;
				  $ssdeepGifFSCORE=0;
				  $ssdeepGifMCC=0;

				  $ssdeepTiffTP=0;
				  $ssdeepTiffTN=0;
				  $ssdeepTiffFP=0;
				  $ssdeepTiffFN=0;
				  $ssdeepTiffFPR=0;
				  $ssdeepTiffFNR=0;
				  $ssdeepTiffPRE=0;
				  $ssdeepTiffRECALL=0;
				  $ssdeepTiffFSCORE=0;
				  $ssdeepTiffACC=0;
				  $ssdeepTiffMCC=0;			

				  $sdhashJpegTP=0;
				  $sdhashJpegTN=0;
				  $sdhashJpegFP=0;
				  $sdhashJpegFN=0;
				  $sdhashJpegFPR=0;
				  $sdhashJpegFNR=0;
				  $sdhashJpegPRE=0;
				  $sdhashJpegRECALL=0;
				  $sdhashJpegACC=0;
				  $sdhashJpegFSCORE=0;
				  $sdhashJpegMCC=0;			
			
				  $sdhashBmpTP=0;
				  $sdhashBmpTN=0;
				  $sdhashBmpFP=0;
				  $sdhashBmpFN=0;
				  $sdhashBmpFPR=0;
				  $sdhashBmpFNR=0;
				  $sdhashBmpPRE=0;
				  $sdhashBmpRECALL=0;
				  $sdhashBmpACC=0;
				  $sdhashBmpFSCORE=0;
				  $sdhashBmpMCC=0;			
				
				  $sdhashGifTP=0;
				  $sdhashGifTN=0;
				  $sdhashGifFP=0;
				  $sdhashGifFN=0;
				  $sdhashGifFPR=0;
				  $sdhashGifFNR=0;
				  $sdhashGifPRE=0;
				  $sdhashGifRECALL=0;
				  $sdhashGifACC=0;
				  $sdhashGifFSCORE=0;
				  $sdhashGifMCC=0;			

				  $sdhashTiffTP=0;
				  $sdhashTiffTN=0;
				  $sdhashTiffFP=0;
				  $sdhashTiffFN=0;
				  $sdhashTiffFPR=0;
				  $sdhashTiffFNR=0;
				  $sdhashTiffPRE=0;
				  $sdhashTiffRECALL=0;
				  $sdhashTiffACC=0;
				  $sdhashTiffFSCORE=0;
				  $sdhashTiffMCC=0;			

			      $mrshJpegTP=0;
				  $mrshJpegTN=0;
				  $mrshJpegFP=0;
				  $mrshJpegFN=0;
				  $mrshJpegFPR=0;
				  $mrshJpegFNR=0;
				  $mrshJpegPRE=0;
				  $mrshJpegRECALL=0;
				  $mrshJpegACC=0;
				  $mrshJpegFSCORE=0;
				  $mrshJpegMCC=0;			
			
				  $mrshBmpTP=0;
				  $mrshBmpTN=0;
				  $mrshBmpFP=0;
				  $mrshBmpFN=0;
				  $mrshBmpFPR=0;
				  $mrshBmpFNR=0;
				  $mrshBmpPRE=0;
				  $mrshBmpRECALL=0;
				  $mrshBmpACC=0;
				  $mrshBmpFSCORE=0;
				  $mrshBmpMCC=0;			
				
				  $mrshGifTP=0;
				  $mrshGifTN=0;
				  $mrshGifFP=0;
				  $mrshGifFN=0;
				  $mrshGifFPR=0;
				  $mrshGifFNR=0;
				  $mrshGifPRE=0;
				  $mrshGifRECALL=0;
				  $mrshGifACC=0;
				  $mrshGifFSCORE=0;
				  $mrshGifMCC=0;			

				  $mrshTiffTP=0;
				  $mrshTiffTN=0;
				  $mrshTiffFP=0;
				  $mrshTiffFN=0;
				  $mrshTiffFPR=0;
				  $mrshTiffFNR=0;
				  $mrshTiffPRE=0;
				  $mrshTiffRECALL=0;
				  $mrshTiffACC=0;
				  $mrshTiffFSCORE=0;
				  $mrshTiffMCC=0;			

				  $numOfJpegDocx=0;
				  $numOfBmpDocx=0;
				  $numOfGifDocx=0;	
				  $numOfTiffDocx=0;
				  $numOfJpegDocxWithOutImg=0;
				  $numOfBmpDocxWithOutImg=0;
				  $numOfGifDocxWithOutImg=0;	
				  $numOfTiffDocxWithOutImg=0;				  
				  $numOfJpeg=0;
				  $numOfBmp=0;
				  $numOfGif=0;
				  $numOfTiff=0;
			  
				  ?>
			
            
            
            
            <?php
				  //file to store results to generate pdf
				  
				  //$tmp_Pdf_file = 'Tmp_Results_Pdf_embedded_object_based_search.txt';
				  //$tmp_handle = fopen($tmp_Pdf_file, 'wb') or die('Cannot open file:  '.$tmp_Pdf_file);
				  //$rw="";		
				  $ssdeepPPTXJpegTP=0;
				  $ssdeepPPTXJpegTN=0;
				  $ssdeepPPTXJpegFP=0;
				  $ssdeepPPTXJpegFN=0;
				  $ssdeepPPTXJpegFPR=0;
				  $ssdeepPPTXJpegFNR=0;
				  $ssdeepPPTXJpegPRE=0;
				  $ssdeepPPTXJpegRECALL=0;
				  $ssdeepPPTXJpegACC=0;
				  $ssdeepPPTXJpegFSCORE=0;
				  $ssdeepPPTXJpegMCC=0;
			
				  $ssdeepPPTXBmpTP=0;
				  $ssdeepPPTXBmpTN=0;
				  $ssdeepPPTXBmpFP=0;
				  $ssdeepPPTXBmpFN=0;
				  $ssdeepPPTXBmpFPR=0;
				  $ssdeepPPTXBmpFNR=0;
				  $ssdeepPPTXBmpPRE=0;
				  $ssdeepPPTXBmpRECALL=0;
				  $ssdeepPPTXBmpACC=0;
				  $ssdeepPPTXBmpFSCORE=0;
				  $ssdeepPPTXBmpMCC=0;
				
				  $ssdeepPPTXGifTP=0;
				  $ssdeepPPTXGifTN=0;
				  $ssdeepPPTXGifFP=0;
				  $ssdeepPPTXGifFN=0;
				  $ssdeepPPTXGifFPR=0;
				  $ssdeepPPTXGifFNR=0;
				  $ssdeepPPTXGifPRE=0;
				  $ssdeepPPTXGifRECALL=0;
				  $ssdeepPPTXGifACC=0;
				  $ssdeepPPTXGifFSCORE=0;
				  $ssdeepPPTXGifMCC=0;

				  $ssdeepPPTXTiffTP=0;
				  $ssdeepPPTXTiffTN=0;
				  $ssdeepPPTXTiffFP=0;
				  $ssdeepPPTXTiffFN=0;
				  $ssdeepPPTXTiffFPR=0;
				  $ssdeepPPTXTiffFNR=0;
				  $ssdeepPPTXTiffPRE=0;
				  $ssdeepPPTXTiffRECALL=0;
				  $ssdeepPPTXTiffFSCORE=0;
				  $ssdeepPPTXTiffACC=0;
				  $ssdeepPPTXTiffMCC=0;			

				  $sdhashPPTXJpegTP=0;
				  $sdhashPPTXJpegTN=0;
				  $sdhashPPTXJpegFP=0;
				  $sdhashPPTXJpegFN=0;
				  $sdhashPPTXJpegFPR=0;
				  $sdhashPPTXJpegFNR=0;
				  $sdhashPPTXJpegPRE=0;
				  $sdhashPPTXJpegRECALL=0;
				  $sdhashPPTXJpegACC=0;
				  $sdhashPPTXJpegFSCORE=0;
				  $sdhashPPTXJpegMCC=0;			
			
				  $sdhashPPTXBmpTP=0;
				  $sdhashPPTXBmpTN=0;
				  $sdhashPPTXBmpFP=0;
				  $sdhashPPTXBmpFN=0;
				  $sdhashPPTXBmpFPR=0;
				  $sdhashPPTXBmpFNR=0;
				  $sdhashPPTXBmpPRE=0;
				  $sdhashPPTXBmpRECALL=0;
				  $sdhashPPTXBmpACC=0;
				  $sdhashPPTXBmpFSCORE=0;
				  $sdhashPPTXBmpMCC=0;			
				
				  $sdhashPPTXGifTP=0;
				  $sdhashPPTXGifTN=0;
				  $sdhashPPTXGifFP=0;
				  $sdhashPPTXGifFN=0;
				  $sdhashPPTXGifFPR=0;
				  $sdhashPPTXGifFNR=0;
				  $sdhashPPTXGifPRE=0;
				  $sdhashPPTXGifRECALL=0;
				  $sdhashPPTXGifACC=0;
				  $sdhashPPTXGifFSCORE=0;
				  $sdhashPPTXGifMCC=0;			

				  $sdhashPPTXTiffTP=0;
				  $sdhashPPTXTiffTN=0;
				  $sdhashPPTXTiffFP=0;
				  $sdhashPPTXTiffFN=0;
				  $sdhashPPTXTiffFPR=0;
				  $sdhashPPTXTiffFNR=0;
				  $sdhashPPTXTiffPRE=0;
				  $sdhashPPTXTiffRECALL=0;
				  $sdhashPPTXTiffACC=0;
				  $sdhashPPTXTiffFSCORE=0;
				  $sdhashPPTXTiffMCC=0;			

			      $mrshPPTXJpegTP=0;
				  $mrshPPTXJpegTN=0;
				  $mrshPPTXJpegFP=0;
				  $mrshPPTXJpegFN=0;
				  $mrshPPTXJpegFPR=0;
				  $mrshPPTXJpegFNR=0;
				  $mrshPPTXJpegPRE=0;
				  $mrshPPTXJpegRECALL=0;
				  $mrshPPTXJpegACC=0;
				  $mrshPPTXJpegFSCORE=0;
				  $mrshPPTXJpegMCC=0;			
			
				  $mrshPPTXBmpTP=0;
				  $mrshPPTXBmpTN=0;
				  $mrshPPTXBmpFP=0;
				  $mrshPPTXBmpFN=0;
				  $mrshPPTXBmpFPR=0;
				  $mrshPPTXBmpFNR=0;
				  $mrshPPTXBmpPRE=0;
				  $mrshPPTXBmpRECALL=0;
				  $mrshPPTXBmpACC=0;
				  $mrshPPTXBmpFSCORE=0;
				  $mrshPPTXBmpMCC=0;			
				
				  $mrshPPTXGifTP=0;
				  $mrshPPTXGifTN=0;
				  $mrshPPTXGifFP=0;
				  $mrshPPTXGifFN=0;
				  $mrshPPTXGifFPR=0;
				  $mrshPPTXGifFNR=0;
				  $mrshPPTXGifPRE=0;
				  $mrshPPTXGifRECALL=0;
				  $mrshPPTXGifACC=0;
				  $mrshPPTXGifFSCORE=0;
				  $mrshPPTXGifMCC=0;			

				  $mrshPPTXTiffTP=0;
				  $mrshPPTXTiffTN=0;
				  $mrshPPTXTiffFP=0;
				  $mrshPPTXTiffFN=0;
				  $mrshPPTXTiffFPR=0;
				  $mrshPPTXTiffFNR=0;
				  $mrshPPTXTiffPRE=0;
				  $mrshPPTXTiffRECALL=0;
				  $mrshPPTXTiffACC=0;
				  $mrshPPTXTiffFSCORE=0;
				  $mrshPPTXTiffMCC=0;			

				  ?>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
			
    	  <div id="rightContent">
    	    <div id="breadcrumb">Embedded Object Identification ➤ <a href="evaluateEmbeddedObject.php">Test Cases</a> ➤ Single Common Object Identification ➤ <a href="result_report_single_common_object_based_search.php?threshold=22">Comparative Assessment</a></div>  
            
            <div id="" style="font-family: Arial, 'Century Gothic'; background-color: #0e375d;color:white; text-align: center;align-content: center;align-items: center;font-size: 18px; height: 30px;text-align:left; vertical-align: middle;padding-top: 10px;padding-left: 10px;"> Single Common Object Identification Test </div> 
            
            
			
				 <?php
						  //echo exec('ssdeep -r ..\Data\Docx');
						  
						 //echo exec('ssdeep -r ..\Data\EmbeddedObjects\Docx\JPEG\Embedded_Files >ssdeep_single_commom_jpeg1.text');
						  
						 //echo exec('ssdeep -r ..\Data\Images\BMP >ssdeepBMP2.text');
						  
						  //$rslt= exec('ssdeep -k ssdeep_single_commom_jpeg1.text ssdeep_single_commom_jpeg1.text >ssdeep_final_single_commom_jpeg1.text');
						  
						  //$rslt= exec('..\ExistingTools\\ssdeep -k '.$out1.' '.$out1.' >ssdeep_embeddedObject_singleCommonObject.text');  
					  	  $fldr1='..\Data\EmbeddedObjects\Docx\JPEG\Embedded_Files';	
						  $fldr2='..\Data\EmbeddedObjects\Docx\JPEG\Embedded_Files';
						  $docxFlIndx=22;
						  $imgIndx=11;
						  $rslt = file_get_contents('..\Final_Report_Fragment\ssdeepEmbeddedSingleCommonObjectDOCXjpeg.text', true);
					  		$sn=0;
							$tp=0;
							$tn=0;
							$fp=0;
							$fn=0;
							$sn=0;
							
							$t=(int)$_GET['threshold'];
					  		
							$rw="";
							 
					  		if($rslt==""){
								
								
								
							}else{
					  
						  $arr = explode("\n", $rslt);
						  
								
						  foreach ($arr as &$value) {
						
						  $arr1 = explode("\\", $value);
						  $arr1_size= count($arr1);
						  if($arr1_size>=$docxFlIndx-1){
						  
						  $arr2=explode(" ",$arr1[$imgIndx]);//here 7
						  $arr2_size=count($arr2);
						  if($arr2_size>=3){
							  $file_img=$arr2[0];
							  
						  }
						  
						  $arr3=explode(" ",$arr1[$docxFlIndx]);//here 16
						  $arr3_size=count($arr3)."******";
						  if($arr3_size>=2){
							  $target=$arr3[0];
							  $similarity=substr($arr3[1],1,-3);
						  } 
						  
						  }
							
						 	  
						$embddFll=$target;
						$imgFll=$file_img;
						
						 $embdFl_arr = explode("_", $embddFll);
						 $imgFl_arr = explode("_", $imgFll);
						 $embddFl=$embdFl_arr[0];
						 $imgFl=$imgFl_arr[0];	  
						 
						  if(strcmp($embddFl,$imgFl)==0){
									if($similarity>=$t){
										$tp++;									
									}else{
										//echo $embddFl."---".$imgFl."---".$similarity;
										$fn++;
									}
									
								}else{
							  		
								
									if($similarity>=$t){
										$fp++;
										
									}else{
										//echo $embddFl."---".$imgFl."---".$similarity;
										$tn++;
									}
									
								}
						
						
						fwrite($tmp_handle, $rw);
							  
						  }
							  
					  }
						  
					?>
				  
				 
			  
			 
    
			  
<?php 
$numOfTarget=0;
$numOfFlWthImg=0;
$fi1 = new FilesystemIterator($fldr1, FilesystemIterator::SKIP_DOTS);
$numOfTarget=iterator_count($fi1);
$fi2 = new FilesystemIterator($fldr2, FilesystemIterator::SKIP_DOTS);
$numOfFlWthImg=iterator_count($fi2);
$numOfComprsn=$numOfTarget*$numOfFlWthImg;

///*
$dir=$fldr1;			  
$cdir = scandir($dir); 

$dir2=$fldr2;
$cdir2 = scandir($dir2); 
			  $simlarfl=0;
			  $dsimlarfl=0;
			  
   foreach ($cdir as $key => $value) 
   { 
	   $embdFl="";
      if (!in_array($value,array(".",".."))) 
      { 
         if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) 
         { 
            $embdFl=dirToArray($dir . DIRECTORY_SEPARATOR . $value); 
         } 
         else 
         { 
            $embdFl=$value; 
         } 
		  
		  
		  foreach($cdir2 as $key2 => $value2){
			  $imgFll="";
			if (!in_array($value2,array(".",".."))) 
      		{ 
				 if (is_dir($dir2 . DIRECTORY_SEPARATOR . $value2)) 
				 { 
					$imgFll=dirToArray($dir2 . DIRECTORY_SEPARATOR . $value2); 
				 } 
				 else 
				 { 
					$imgFll=$value2; 
				 } 
			  
				
				$embdFl_arr = explode("_", $embdFl);
				$ln=count($embdFl_arr);
				$imgFl_arr = explode("_", $imgFll);
				$ln=count($embdFl_arr);
				//echo $embdFl_arr[0]."****".$imgFl_arr[0]."-----\n"; 
				if(strcmp($embdFl_arr[0],$imgFl_arr[0])==0	){
					//echo $embdFl_arr[$ln-1]."****".$imgFl_arr[0]."-----\n"; 
					$simlarfl++;
				}else{
					$dsimlarfl++;
				}
				
			  }
			  
		  }
		  
      } 
	   
   } 
			
			  //echo "Similar: ".$simlarfl." Desimilar: ".$dsimlarfl;

?>
              
			  
		 <table>
              <tr style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center;"><td colspan="2">Scheme : ssdeep &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Embedded object: Jpeg &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Data Set: DOCX &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td></tr>
              <tr><td>True Positive</td><td><?php echo $tp; ?></td></tr>
				   <?php 
				   if($tn<$dsimlarfl){
					   $tn=$dsimlarfl-$fp;
				   }
				   
				   ?>
				   
              <tr><td>True Negative</td><td><?php echo $tn; ?></td></tr>
				   
              <tr><td>False Positive</td><td><?php echo $fp; ?></td></tr>
              <?php
				   if($tp<$simlarfl){
					   $fn=$simlarfl-$tp;
				   }
			   ?>
				   
    		  <tr><td>False Negative</td><td><?php echo $fn; ?></td></tr>
              <?php $fpr=$fp/$numOfComprsn; ?>
              <tr><td>False positive rate (FPR)</td><td><?php echo $fpr; ?></td></tr>
			  <?php $fnr=$fn/$numOfComprsn; ?>
              <tr><td>False negative rate (FNR)</td><td><?php echo $fnr; ?></td></tr>
              
              <?php 
			  if(($tp+$fp)!=0)	{
				$pre=$tp/($tp+$fp);
				}else{
					$pre=0;
				} 
			  ?>
               <tr><td>Precision <div style="font-size:9px; color:#F00;">A perfect precision score of 1.0 means that every result retrieved by a search was relevant.</div></td><td><?php echo $pre; ?></td></tr>
               <?php
			  if(($tp+$fn)!=0)	{
				$recall=$tp/($tp+$fn);	
				}else{
					$recall=0;
				} 
			   ?>
                <tr><td>Recall<div style="font-size:9px; color:#F00;">A perfect recall score of 1.0 means that all relevant documents were retrieved by the search.</div></td><td><?php echo $recall; ?></td></tr>
                <?php 
				 if(($pre+$recall)!=0){
					$f= 2*($pre*$recall)/($pre+$recall);
				 }else{
					 $f=0;
				 }
				?>
                <tr><td>F-score<div style="font-size:9px; color:#F00;"> A measure of a test's accuracy (best value at 1 and worst at 0)</div></td><td><?php echo $f; ?></td></tr>
               <?php
				 $sqrt2_1=sqrt(($tp+$fp)*($tp+$fn)*($tn+$fp)*($tn+$fn));
				 
				 if($sqrt2_1==0){
					$MCC=0;
				  }else{	  
				  $MCC=(($tp*$tn)-($fp*$fn))/$sqrt2_1;
				}
				 ?>
                <tr><td width="77%;">MCC<div style="font-size:9px; color:#F00;"> A measure of the quality of (best value at 1 and worst at -1)</div></td><td><?php echo $MCC; ?></td></tr> 
              </table>

              
              
              <?php 
			  
				  $ssdeepJpegTP=$tp;
				  $ssdeepJpegTN=$tn;
				  $ssdeepJpegFP=$fp;
				  $ssdeepJpegFN=$fn;
				  $ssdeepJpegFPR=$fpr;
				  $ssdeepJpegFNR=$fnr;
				  $ssdeepJpegPRE=$pre;
				  $ssdeepJpegRECALL=$recall;
				  //$ssdeepJpegACC=$ssdeepJpegACC_0;
				  $ssdeepJpegFSCORE=$f;
				  $ssdeepJpegMCC=$MCC;			  
			  
			  
			  
			  ?>
              
              
              
              
              

              
              
   <?php ///////////////////////////////////////////////////////////// ?>
              
                      
                  
	 <?php
						  
						  //$rslt= exec('..\ExistingTools\\ssdeep -k '.$out1.' '.$out1.' >ssdeep_embeddedObject_singleCommonObject.text');  
					  	  $fldr1='..\Data\EmbeddedObjects\Docx\BMP\Embedded_Files';	
						  $fldr2='..\Data\EmbeddedObjects\Docx\BMP\Embedded_Files';
						  $docxFlIndx=22;
						  $imgIndx=11;
						  $rslt = file_get_contents('..\Final_Report_Fragment\ssdeepEmbeddedSingleCommonObjectDOCXbmp.text', true);
					  		$sn=0;
							$tp=0;
							$tn=0;
							$fp=0;
							$fn=0;
							$sn=0;
							
							$t=(int)$_GET['threshold'];
					  		
							$rw="";
							 
					  		if($rslt==""){
								
								
								
							}else{
					  
						  $arr = explode("\n", $rslt);
						  
								
						  foreach ($arr as &$value) {
						
						  $arr1 = explode("\\", $value);
						  $arr1_size= count($arr1);
						  if($arr1_size>=$docxFlIndx-1){
						  
						  $arr2=explode(" ",$arr1[$imgIndx]);//here 7
						  $arr2_size=count($arr2);
						  if($arr2_size>=3){
							  $file_img=$arr2[0];
							  
						  }
						  
						  $arr3=explode(" ",$arr1[$docxFlIndx]);//here 16
						  $arr3_size=count($arr3)."******";
						  if($arr3_size>=2){
							  $target=$arr3[0];
							  $similarity=substr($arr3[1],1,-3);
						  } 
						  
						  }
							
						 	  
						$embddFll=$target;
						$imgFll=$file_img;
						
						 $embdFl_arr = explode("_", $embddFll);
						 $imgFl_arr = explode("_", $imgFll);
						 $embddFl=$embdFl_arr[0];
						 $imgFl=$imgFl_arr[0];	  
						 
						  if(strcmp($embddFl,$imgFl)==0){
									if($similarity>=$t){
										$tp++;									
									}else{
										//echo $embddFl."---".$imgFl."---".$similarity;
										$fn++;
									}
									
								}else{
							  		
								
									if($similarity>=$t){
										$fp++;
										
									}else{
										//echo $embddFl."---".$imgFl."---".$similarity;
										$tn++;
									}
									
								}
						
						
						fwrite($tmp_handle, $rw);
							  
						  }
							  
					  }
						  
					?>
				  
				 
			  
			 
    
			  
<?php 
$numOfTarget=0;
$numOfFlWthImg=0;
$fi1 = new FilesystemIterator($fldr1, FilesystemIterator::SKIP_DOTS);
$numOfTarget=iterator_count($fi1);
$fi2 = new FilesystemIterator($fldr2, FilesystemIterator::SKIP_DOTS);
$numOfFlWthImg=iterator_count($fi2);
$numOfComprsn=$numOfTarget*$numOfFlWthImg;

///*
$dir=$fldr1;			  
$cdir = scandir($dir); 

$dir2=$fldr2;
$cdir2 = scandir($dir2); 
			  $simlarfl=0;
			  $dsimlarfl=0;
			  
   foreach ($cdir as $key => $value) 
   { 
	   $embdFl="";
      if (!in_array($value,array(".",".."))) 
      { 
         if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) 
         { 
            $embdFl=dirToArray($dir . DIRECTORY_SEPARATOR . $value); 
         } 
         else 
         { 
            $embdFl=$value; 
         } 
		  
		  
		  foreach($cdir2 as $key2 => $value2){
			  $imgFll="";
			if (!in_array($value2,array(".",".."))) 
      		{ 
				 if (is_dir($dir2 . DIRECTORY_SEPARATOR . $value2)) 
				 { 
					$imgFll=dirToArray($dir2 . DIRECTORY_SEPARATOR . $value2); 
				 } 
				 else 
				 { 
					$imgFll=$value2; 
				 } 
			  
				
				$embdFl_arr = explode("_", $embdFl);
				$ln=count($embdFl_arr);
				$imgFl_arr = explode("_", $imgFll);
				$ln=count($embdFl_arr);
				//echo $embdFl_arr[0]."****".$imgFl_arr[0]."-----\n"; 
				if(strcmp($embdFl_arr[0],$imgFl_arr[0])==0	){
					//echo $embdFl_arr[$ln-1]."****".$imgFl_arr[0]."-----\n"; 
					$simlarfl++;
				}else{
					$dsimlarfl++;
				}
				
			  }
			  
		  }
		  
      } 
	   
   } 
			
			  //echo "Similar: ".$simlarfl." Desimilar: ".$dsimlarfl;

?>
              
			  
		 <table>
              <tr style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center;"><td colspan="2">Scheme : ssdeep &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Embedded object: Bmp &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Data Set: DOCX &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td></tr>
              <tr><td>True Positive</td><td><?php echo $tp; ?></td></tr>
				   <?php 
				   if($tn<$dsimlarfl){
					   $tn=$dsimlarfl-$fp;
				   }
				   
				   ?>
				   
              <tr><td>True Negative</td><td><?php echo $tn; ?></td></tr>
				   
              <tr><td>False Positive</td><td><?php echo $fp; ?></td></tr>
              <?php
				   if($tp<$simlarfl){
					   $fn=$simlarfl-$tp;
				   }
			   ?>
				   
    		  <tr><td>False Negative</td><td><?php echo $fn; ?></td></tr>
              <?php $fpr=$fp/$numOfComprsn; ?>
              <tr><td>False positive rate (FPR)</td><td><?php echo $fpr; ?></td></tr>
			  <?php $fnr=$fn/$numOfComprsn; ?>
              <tr><td>False negative rate (FNR)</td><td><?php echo $fnr; ?></td></tr>
              
              <?php 
			  if(($tp+$fp)!=0)	{
				$pre=$tp/($tp+$fp);
				}else{
					$pre=0;
				} 
			  ?>
               <tr><td>Precision <div style="font-size:9px; color:#F00;">A perfect precision score of 1.0 means that every result retrieved by a search was relevant.</div></td><td><?php echo $pre; ?></td></tr>
               <?php
			  if(($tp+$fn)!=0)	{
				$recall=$tp/($tp+$fn);	
				}else{
					$recall=0;
				} 
			   ?>
                <tr><td>Recall<div style="font-size:9px; color:#F00;">A perfect recall score of 1.0 means that all relevant documents were retrieved by the search.</div></td><td><?php echo $recall; ?></td></tr>
                <?php 
				 if(($pre+$recall)!=0){
					$f= 2*($pre*$recall)/($pre+$recall);
				 }else{
					 $f=0;
				 }
				?>
                <tr><td>F-score<div style="font-size:9px; color:#F00;"> A measure of a test's accuracy (best value at 1 and worst at 0)</div></td><td><?php echo $f; ?></td></tr>
               <?php
				 $sqrt2_1=sqrt(($tp+$fp)*($tp+$fn)*($tn+$fp)*($tn+$fn));
				 
				 if($sqrt2_1==0){
					$MCC=0;
				  }else{	  
				  $MCC=(($tp*$tn)-($fp*$fn))/$sqrt2_1;
				}
				 ?>
                <tr><td width="77%;">MCC<div style="font-size:9px; color:#F00;"> A measure of the quality of (best value at 1 and worst at -1)</div></td><td><?php echo $MCC; ?></td></tr> 
              </table>

              
              
              <?php 
			  
				  $ssdeepBmpTP=$tp;
				  $ssdeepBmpTN=$tn;
				  $ssdeepBmpFP=$fp;
				  $ssdeepBmpFN=$fn;
				  $ssdeepBmpFPR=$fpr;
				  $ssdeepBmpFNR=$fnr;
				  $ssdeepBmpPRE=$pre;
				  $ssdeepBmpRECALL=$recall;
				  //$ssdeepBmpACC=$ssdeepBmpACC_0;
				  $ssdeepBmpFSCORE=$f;
				  $ssdeepBmpMCC=$MCC;			  
			  
			  
			  
			  ?>
                  
				  
<?php //////////////////////////////////////////////////////////////GIF/////////////////////////////////////////////////////////////?>

		 <?php
						  
						  //$rslt= exec('..\ExistingTools\\ssdeep -k '.$out1.' '.$out1.' >ssdeep_embeddedObject_singleCommonObject.text');  
					  	  $fldr1='..\Data\EmbeddedObjects\Docx\TIFF\Embedded_Files';	
						  $fldr2='..\Data\EmbeddedObjects\Docx\TIFF\Embedded_Files';
						  $docxFlIndx=22;
						  $imgIndx=11;
						  $rslt = file_get_contents('..\Final_Report_Fragment\ssdeepEmbeddedSingleCommonObjectDOCXtiff.text', true);
					  		$sn=0;
							$tp=0;
							$tn=0;
							$fp=0;
							$fn=0;
							$sn=0;
							
							$t=(int)$_GET['threshold'];
					  		
							$rw="";
							 
					  		if($rslt==""){
								
								
								
							}else{
					  
						  $arr = explode("\n", $rslt);
						  
								
						  foreach ($arr as &$value) {
						
						  $arr1 = explode("\\", $value);
						  $arr1_size= count($arr1);
						  if($arr1_size>=$docxFlIndx-1){
						  
						  $arr2=explode(" ",$arr1[$imgIndx]);//here 7
						  $arr2_size=count($arr2);
						  if($arr2_size>=3){
							  $file_img=$arr2[0];
							  
						  }
						  
						  $arr3=explode(" ",$arr1[$docxFlIndx]);//here 16
						  $arr3_size=count($arr3)."******";
						  if($arr3_size>=2){
							  $target=$arr3[0];
							  $similarity=substr($arr3[1],1,-3);
						  } 
						  
						  }
							
						 	  
						$embddFll=$target;
						$imgFll=$file_img;
						
						 $embdFl_arr = explode("_", $embddFll);
						 $imgFl_arr = explode("_", $imgFll);
						 $embddFl=$embdFl_arr[0];
						 $imgFl=$imgFl_arr[0];	  
						 
						  if(strcmp($embddFl,$imgFl)==0){
									if($similarity>=$t){
										$tp++;									
									}else{
										//echo $embddFl."---".$imgFl."---".$similarity;
										$fn++;
									}
									
								}else{
							  		
								
									if($similarity>=$t){
										$fp++;
										
									}else{
										//echo $embddFl."---".$imgFl."---".$similarity;
										$tn++;
									}
									
								}
						
						
						fwrite($tmp_handle, $rw);
							  
						  }
							  
					  }
						  
					?>
				  
				 
			  
			 
    
			  
<?php 
$numOfTarget=0;
$numOfFlWthImg=0;
$fi1 = new FilesystemIterator($fldr1, FilesystemIterator::SKIP_DOTS);
$numOfTarget=iterator_count($fi1);
$fi2 = new FilesystemIterator($fldr2, FilesystemIterator::SKIP_DOTS);
$numOfFlWthImg=iterator_count($fi2);
$numOfComprsn=$numOfTarget*$numOfFlWthImg;

///*
$dir=$fldr1;			  
$cdir = scandir($dir); 

$dir2=$fldr2;
$cdir2 = scandir($dir2); 
			  $simlarfl=0;
			  $dsimlarfl=0;
			  
   foreach ($cdir as $key => $value) 
   { 
	   $embdFl="";
      if (!in_array($value,array(".",".."))) 
      { 
         if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) 
         { 
            $embdFl=dirToArray($dir . DIRECTORY_SEPARATOR . $value); 
         } 
         else 
         { 
            $embdFl=$value; 
         } 
		  
		  
		  foreach($cdir2 as $key2 => $value2){
			  $imgFll="";
			if (!in_array($value2,array(".",".."))) 
      		{ 
				 if (is_dir($dir2 . DIRECTORY_SEPARATOR . $value2)) 
				 { 
					$imgFll=dirToArray($dir2 . DIRECTORY_SEPARATOR . $value2); 
				 } 
				 else 
				 { 
					$imgFll=$value2; 
				 } 
			  
				
				$embdFl_arr = explode("_", $embdFl);
				$ln=count($embdFl_arr);
				$imgFl_arr = explode("_", $imgFll);
				$ln=count($embdFl_arr);
				//echo $embdFl_arr[0]."****".$imgFl_arr[0]."-----\n"; 
				if(strcmp($embdFl_arr[0],$imgFl_arr[0])==0	){
					//echo $embdFl_arr[$ln-1]."****".$imgFl_arr[0]."-----\n"; 
					$simlarfl++;
				}else{
					$dsimlarfl++;
				}
				
			  }
			  
		  }
		  
      } 
	   
   } 
			
			  //echo "Similar: ".$simlarfl." Desimilar: ".$dsimlarfl;

?>
              
			  
		 <table>
              <tr style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center;"><td colspan="2">Scheme : ssdeep &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Embedded object: Tiff &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Data Set: DOCX &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td></tr>
              <tr><td>True Positive</td><td><?php echo $tp; ?></td></tr>
				   <?php 
				   if($tn<$dsimlarfl){
					   $tn=$dsimlarfl-$fp;
				   }
				   
				   ?>
				   
              <tr><td>True Negative</td><td><?php echo $tn; ?></td></tr>
				   
              <tr><td>False Positive</td><td><?php echo $fp; ?></td></tr>
              <?php
				   if($tp<$simlarfl){
					   $fn=$simlarfl-$tp;
				   }
			   ?>
				   
    		  <tr><td>False Negative</td><td><?php echo $fn; ?></td></tr>
              <?php $fpr=$fp/$numOfComprsn; ?>
              <tr><td>False positive rate (FPR)</td><td><?php echo $fpr; ?></td></tr>
			  <?php $fnr=$fn/$numOfComprsn; ?>
              <tr><td>False negative rate (FNR)</td><td><?php echo $fnr; ?></td></tr>
              
              <?php 
			  if(($tp+$fp)!=0)	{
				$pre=$tp/($tp+$fp);
				}else{
					$pre=0;
				} 
			  ?>
               <tr><td>Precision <div style="font-size:9px; color:#F00;">A perfect precision score of 1.0 means that every result retrieved by a search was relevant.</div></td><td><?php echo $pre; ?></td></tr>
               <?php
			  if(($tp+$fn)!=0)	{
				$recall=$tp/($tp+$fn);	
				}else{
					$recall=0;
				} 
			   ?>
                <tr><td>Recall<div style="font-size:9px; color:#F00;">A perfect recall score of 1.0 means that all relevant documents were retrieved by the search.</div></td><td><?php echo $recall; ?></td></tr>
                <?php 
				 if(($pre+$recall)!=0){
					$f= 2*($pre*$recall)/($pre+$recall);
				 }else{
					 $f=0;
				 }
				?>
                <tr><td>F-score<div style="font-size:9px; color:#F00;"> A measure of a test's accuracy (best value at 1 and worst at 0)</div></td><td><?php echo $f; ?></td></tr>
               <?php
				 $sqrt2_1=sqrt(($tp+$fp)*($tp+$fn)*($tn+$fp)*($tn+$fn));
				 
				 if($sqrt2_1==0){
					$MCC=0;
				  }else{	  
				  $MCC=(($tp*$tn)-($fp*$fn))/$sqrt2_1;
				}
				 ?>
                <tr><td width="77%;">MCC<div style="font-size:9px; color:#F00;"> A measure of the quality of (best value at 1 and worst at -1)</div></td><td><?php echo $MCC; ?></td></tr> 
              </table>

              
              
              <?php 
			  
				  $ssdeepTiffTP=$tp;
				  $ssdeepTiffTN=$tn;
				  $ssdeepTiffFP=$fp;
				  $ssdeepTiffFN=$fn;
				  $ssdeepTiffFPR=$fpr;
				  $ssdeepTiffFNR=$fnr;
				  $ssdeepTiffPRE=$pre;
				  $ssdeepTiffRECALL=$recall;
				  //$ssdeepTiffACC=$ssdeepTiffACC_0;
				  $ssdeepTiffFSCORE=$f;
				  $ssdeepTiffMCC=$MCC;			  
			  
			  
			  
			  ?>
				  
				  
				  
<?php /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			
						  
						  //$rslt= exec('..\ExistingTools\\ssdeep -k '.$out1.' '.$out1.' >ssdeep_embeddedObject_singleCommonObject.text');  
					  	  $fldr1='..\Data\EmbeddedObjects\Docx\GIF\Embedded_Files';	
						  $fldr2='..\Data\EmbeddedObjects\Docx\GIF\Embedded_Files';
						  $docxFlIndx=22;
						  $imgIndx=11;
						  $rslt = file_get_contents('..\Final_Report_Fragment\ssdeepEmbeddedSingleCommonObjectDOCXgif.text', true);
					  		$sn=0;
							$tp=0;
							$tn=0;
							$fp=0;
							$fn=0;
							$sn=0;
							
							$t=(int)$_GET['threshold'];
					  		
							$rw="";
							 
					  		if($rslt==""){
								
								
								
							}else{
					  
						  $arr = explode("\n", $rslt);
						  
								
						  foreach ($arr as &$value) {
						
						  $arr1 = explode("\\", $value);
						  $arr1_size= count($arr1);
						  if($arr1_size>=$docxFlIndx-1){
						  
						  $arr2=explode(" ",$arr1[$imgIndx]);//here 7
						  $arr2_size=count($arr2);
						  if($arr2_size>=3){
							  $file_img=$arr2[0];
							  
						  }
						  
						  $arr3=explode(" ",$arr1[$docxFlIndx]);//here 16
						  $arr3_size=count($arr3)."******";
						  if($arr3_size>=2){
							  $target=$arr3[0];
							  $similarity=substr($arr3[1],1,-3);
						  } 
						  
						  }
							
						 	  
						$embddFll=$target;
						$imgFll=$file_img;
						
						 $embdFl_arr = explode("_", $embddFll);
						 $imgFl_arr = explode("_", $imgFll);
						 $embddFl=$embdFl_arr[0];
						 $imgFl=$imgFl_arr[0];	  
						 
						  if(strcmp($embddFl,$imgFl)==0){
									if($similarity>=$t){
										$tp++;									
									}else{
										//echo $embddFl."---".$imgFl."---".$similarity;
										$fn++;
									}
									
								}else{
							  		
								
									if($similarity>=$t){
										$fp++;
										
									}else{
										//echo $embddFl."---".$imgFl."---".$similarity;
										$tn++;
									}
									
								}
						
						
						fwrite($tmp_handle, $rw);
							  
						  }
							  
					  }
						  
					?>
				  
				 
			  
			 
    
			  
<?php 
$numOfTarget=0;
$numOfFlWthImg=0;
$fi1 = new FilesystemIterator($fldr1, FilesystemIterator::SKIP_DOTS);
$numOfTarget=iterator_count($fi1);
$fi2 = new FilesystemIterator($fldr2, FilesystemIterator::SKIP_DOTS);
$numOfFlWthImg=iterator_count($fi2);
$numOfComprsn=$numOfTarget*$numOfFlWthImg;

///*
$dir=$fldr1;			  
$cdir = scandir($dir); 

$dir2=$fldr2;
$cdir2 = scandir($dir2); 
			  $simlarfl=0;
			  $dsimlarfl=0;
			  
   foreach ($cdir as $key => $value) 
   { 
	   $embdFl="";
      if (!in_array($value,array(".",".."))) 
      { 
         if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) 
         { 
            $embdFl=dirToArray($dir . DIRECTORY_SEPARATOR . $value); 
         } 
         else 
         { 
            $embdFl=$value; 
         } 
		  
		  
		  foreach($cdir2 as $key2 => $value2){
			  $imgFll="";
			if (!in_array($value2,array(".",".."))) 
      		{ 
				 if (is_dir($dir2 . DIRECTORY_SEPARATOR . $value2)) 
				 { 
					$imgFll=dirToArray($dir2 . DIRECTORY_SEPARATOR . $value2); 
				 } 
				 else 
				 { 
					$imgFll=$value2; 
				 } 
			  
				
				$embdFl_arr = explode("_", $embdFl);
				$ln=count($embdFl_arr);
				$imgFl_arr = explode("_", $imgFll);
				$ln=count($embdFl_arr);
				//echo $embdFl_arr[0]."****".$imgFl_arr[0]."-----\n"; 
				if(strcmp($embdFl_arr[0],$imgFl_arr[0])==0	){
					//echo $embdFl_arr[$ln-1]."****".$imgFl_arr[0]."-----\n"; 
					$simlarfl++;
				}else{
					$dsimlarfl++;
				}
				
			  }
			  
		  }
		  
      } 
	   
   } 
			
			  //echo "Similar: ".$simlarfl." Desimilar: ".$dsimlarfl;

?>
              
			  
		 <table>
              <tr style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center;"><td colspan="2">Scheme : ssdeep &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Embedded object: Gif &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Data Set: DOCX &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td></tr>
              <tr><td>True Positive</td><td><?php echo $tp; ?></td></tr>
				   <?php 
				   if($tn<$dsimlarfl){
					   $tn=$dsimlarfl-$fp;
				   }
				   
				   ?>
				   
              <tr><td>True Negative</td><td><?php echo $tn; ?></td></tr>
				   
              <tr><td>False Positive</td><td><?php echo $fp; ?></td></tr>
              <?php
				   if($tp<$simlarfl){
					   $fn=$simlarfl-$tp;
				   }
			   ?>
				   
    		  <tr><td>False Negative</td><td><?php echo $fn; ?></td></tr>
              <?php $fpr=$fp/$numOfComprsn; ?>
              <tr><td>False positive rate (FPR)</td><td><?php echo $fpr; ?></td></tr>
			  <?php $fnr=$fn/$numOfComprsn; ?>
              <tr><td>False negative rate (FNR)</td><td><?php echo $fnr; ?></td></tr>
              
              <?php 
			  if(($tp+$fp)!=0)	{
				$pre=$tp/($tp+$fp);
				}else{
					$pre=0;
				} 
			  ?>
               <tr><td>Precision <div style="font-size:9px; color:#F00;">A perfect precision score of 1.0 means that every result retrieved by a search was relevant.</div></td><td><?php echo $pre; ?></td></tr>
               <?php
			  if(($tp+$fn)!=0)	{
				$recall=$tp/($tp+$fn);	
				}else{
					$recall=0;
				} 
			   ?>
                <tr><td>Recall<div style="font-size:9px; color:#F00;">A perfect recall score of 1.0 means that all relevant documents were retrieved by the search.</div></td><td><?php echo $recall; ?></td></tr>
                <?php 
				 if(($pre+$recall)!=0){
					$f= 2*($pre*$recall)/($pre+$recall);
				 }else{
					 $f=0;
				 }
				?>
                <tr><td>F-score<div style="font-size:9px; color:#F00;"> A measure of a test's accuracy (best value at 1 and worst at 0)</div></td><td><?php echo $f; ?></td></tr>
               <?php
				 $sqrt2_1=sqrt(($tp+$fp)*($tp+$fn)*($tn+$fp)*($tn+$fn));
				 
				 if($sqrt2_1==0){
					$MCC=0;
				  }else{	  
				  $MCC=(($tp*$tn)-($fp*$fn))/$sqrt2_1;
				}
				 ?>
                <tr><td width="77%;">MCC<div style="font-size:9px; color:#F00;"> A measure of the quality of (best value at 1 and worst at -1)</div></td><td><?php echo $MCC; ?></td></tr> 
              </table>

              
              
              <?php 
			  
				  $ssdeepGifTP=$tp;
				  $ssdeepGifTN=$tn;
				  $ssdeepGifFP=$fp;
				  $ssdeepGifFN=$fn;
				  $ssdeepGifFPR=$fpr;
				  $ssdeepGifFNR=$fnr;
				  $ssdeepGifPRE=$pre;
				  $ssdeepGifRECALL=$recall;
				  //$ssdeepGifACC=$ssdeepGifACC_0;
				  $ssdeepGifFSCORE=$f;
				  $ssdeepGifMCC=$MCC;			  
			  
			  
			  
			  ?>
                  
            
				  
<?php ////////////////////////////////////////////////sdhash//////////////////////////////////////////////////////////////////// ?>

				  <?php
						  //echo exec('ssdeep -r ..\Data\Docx');
						  
						 //echo exec('sdhash ..\Data\EmbeddedObjects\Docx\JPEG\Embedded_Files\*.docx -o result_single_common_jpeg_docx1');
						  
						  
						 //echo exec('sdhash ..\Data\Images\Jpeg\*.jpg -o img_result_embedded_jpeg_docx2');
						  
						 // $rslt= exec('sdhash -c result_single_common_jpeg_docx1.sdbf result_single_common_jpeg_docx1.sdbf | sort >final_sdhash_single_common_jpeg1.text');
						  
						  $rslt = file_get_contents('..\Final_Report_Fragment\sdhashEmbeddedSingleCommonObjectDOCXjpeg.text', true);
						  $sn=0;
						  $tp=0;
						  $tn=0;
						  $fp=0;
						  $fn=0;
						  $sn=0;
							
							$t=(int)$_GET['threshold'];
					  		if($rslt==""){
								
								
						$dir1    = '..\Data\EmbeddedObjects\Docx\JPEG\Embedded_Files';
					  	$files1 = scandir($dir1);
						
						$dir2    = '..\Data\EmbeddedObjects\Docx\JPEG\Embedded_Files';
					  	$files2 = scandir($dir2);
								
							
						 foreach($files1 as &$value1){
						  
						 $sn++; ?>
						 
						  <?php } ?>
						  <?php 
						  foreach($files2 as &$value2){
						  
						  ?>
                         
						  
						  <?php } ?>
						  
					  
							<?php	
								
								
								
							}else{
					  
						  $arr = explode("\n", $rslt);
						  
						  //echo count($arr);
						  
						  foreach ($arr as &$value) {
							  
							  ?>
                               <?php $sn++; ?>
                            <?php if($value!=null){  ?>
                            
                              
                          <?php
						  
						  $arr1 = explode("|", $value);
						  $cntr=0;
						  foreach ($arr1 as &$value1){
							  //echo $value1."----------";
							  
							  
							   $arr2 = explode("\\", $value1);
							  $arr1_size=count($arr2);
							  
							   if($cntr==0){
								  $embddFll=$arr2[$arr1_size-1];
							  }else if($cntr==1){
								  $imgFll=$arr2[$arr1_size-1];
							  }else if($cntr==2){
							  	  $similarity=$arr2[$arr1_size-1];
							  }
							  
							  $cntr++;
							  
							  
							  
							  
						  }
						  $embdFl_arr = explode("_", $embddFll);
						  $imgFl_arr = explode("_", $imgFll);
								//$ln=count($embdFl_arr);
								//$lnn=count($imgFl_arr);
								$embddFl=$embdFl_arr[0];
								$imgFl=$imgFl_arr[0];	  
								//echo $embddFl."---".$imgFl;
								
						  
						  if(strcmp($embddFl,$imgFl)==0){
									//echo $embdFl."****".$orgnlFl."-----\n"; 
									if($similarity>=$t){
										$tp++;									
									}else{
										$fn++;
									}
									
								}else{
									if($similarity>=$t){
										$fp++;									
									}else{
										$tn++;
									}
									
								}
						  
							  
							 // echo "***************".$arr2[$arr1_size-1]."**************";
							  
						  }
						 // echo "\n";
						  	
						  
						  
						  
						  ?>
                          
					  <?php } ?>
					  <?php
							  
					  }
						  
						  ?>
						  
						
					  
					 
					
              <?php 
   // $dir = opendir('uploads/'); # This is the directory it will count from
   $numOfTarget=0;
   $numOfFlWthImg=0;
   $fi1 = new FilesystemIterator("..\Data\EmbeddedObjects\Docx\JPEG\Embedded_Files", FilesystemIterator::SKIP_DOTS);
$numOfTarget=iterator_count($fi1);
$fi2 = new FilesystemIterator("..\Data\EmbeddedObjects\Docx\JPEG\Embedded_Files", FilesystemIterator::SKIP_DOTS);
$numOfFlWthImg=iterator_count($fi2);
$numOfComprsn=$numOfTarget*$numOfFlWthImg;

//echo $numOfComprsn;
///*
$dir="..\Data\EmbeddedObjects\Docx\JPEG\Embedded_Files";			  
$cdir = scandir($dir); 

$dir2="..\Data\EmbeddedObjects\Docx\JPEG\Embedded_Files";			  
$cdir2 = scandir($dir2); 
			  $simlarfl=0;
			  $dsimlarfl=0;
			  
   foreach ($cdir as $key => $value) 
   { 
	   $embdFl="";
      if (!in_array($value,array(".",".."))) 
      { 
         if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) 
         { 
            $embdFl=dirToArray($dir . DIRECTORY_SEPARATOR . $value); 
         } 
         else 
         { 
            $embdFl=$value; 
         } 
		  
		  
		  foreach($cdir2 as $key2 => $value2){
			  $imgFll="";
			if (!in_array($value2,array(".",".."))) 
      		{ 
				 if (is_dir($dir2 . DIRECTORY_SEPARATOR . $value2)) 
				 { 
					$imgFll=dirToArray($dir2 . DIRECTORY_SEPARATOR . $value2); 
				 } 
				 else 
				 { 
					$imgFll=$value2; 
				 } 
			  
				
				//echo $embdFl."****".$orgnlFl."-----\n"; 
				
				$embdFl_arr = explode("_", $embdFl);
				$ln=count($embdFl_arr);
				$imgFl_arr = explode("_", $imgFll);
				$ln=count($embdFl_arr);
				//echo $embdFl_arr[0]."****".$imgFl_arr[0]."-----\n"; 
				if(strcmp($embdFl_arr[0],$imgFl_arr[0])==0	){
					//echo $embdFl_arr[$ln-1]."****".$imgFl_arr[0]."-----\n"; 
					$simlarfl++;
				}else{
					$dsimlarfl++;
				}
				
				
				
				
			  }
			  
			 // if($embdFl!=""){
			  
	  // }
			  
		  }
		  
      } 
	   
	   
	   
	   
	   
   } 
			  
			  
			  //echo "Total number of similar files".$simlarfl;
			  //echo "Total number of disimilar files".$dsimlarfl;
			  //echo "Total number of resultant files".$ttlRsltntFl;
			  

//*/


?>
 				   <?php 
				   if($tn<$dsimlarfl){
					   $tn=$dsimlarfl-$fp;
				   }
				   
				   ?>
              
              <?php
				   if($tp<$simlarfl){
					   $fn=$simlarfl-$tp;
				   }
				   
				   $fpr=$fp/$numOfComprsn;
				   $fnr=$fn/$numOfComprsn;
				   ?>
				   
				 
               <?php 
			  if(($tp+$fp)!=0)	{
				$pre=$tp/($tp+$fp);
				}else{
					$pre=0;
				} 
			  
			  ?>
               
               <?php
			  if(($tp+$fn)!=0)	{
				$recall=$tp/($tp+$fn);	
				}else{
					$recall=0;
				} 
			   if(($pre+$recall)!=0){
					$f= 2*($pre*$recall)/($pre+$recall);
				 }else{
					 $f=0;
				 }
				
				
				?>
               
              
               <?php 
			  
				  $sdhashJpegTP=$tp;
				  $sdhashJpegTN=$tn;
				  $sdhashJpegFP=$fp;
				  $sdhashJpegFN=$fn;
				  $sdhashJpegFPR=$fpr;
				  $sdhashJpegFNR=$fnr;
				  $sdhashJpegPRE=$pre;
				  $sdhashJpegRECALL=$recall;
				  $sdhashJpegFSCORE=$f;
			  		 $sqrt1=sqrt(($sdhashJpegTP+$sdhashJpegFP)*($sdhashJpegTP+$sdhashJpegFN)*($sdhashJpegTN+$sdhashJpegFP)*($sdhashJpegTN+$sdhashJpegFN));
			   
			  if($sqrt1==0){
				$sdhashJpegMCC=0;
				}else{  
				  
			  $sdhashJpegMCC=(($sdhashJpegTP*$sdhashJpegTN)-($sdhashJpegFP*$sdhashJpegFN))/$sqrt1;
			  
				}
			  
				
			  ?>

              
			 <table>
              <tr style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center;"><td colspan="2">Scheme : sdhash &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Embedded object: Jpeg &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Data Set: DOCX &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td></tr>
              <tr><td>True Positive</td><td><?php echo $sdhashJpegTP; ?></td></tr>
			  <tr><td>True Negative</td><td><?php echo $sdhashJpegTN; ?></td></tr>
			  <tr><td>False Positive</td><td><?php echo $sdhashJpegFP; ?></td></tr>
              <tr><td>False Negative</td><td><?php echo $sdhashJpegFN; ?></td></tr>
              <tr><td width="77%;">False positive rate (FPR)</td><td><?php  echo $sdhashJpegFPR; ?></td></tr>
              <tr><td width="77%;">False negative rate (FNR)</td><td><?php echo $sdhashJpegFNR; ?></td></tr>
              <tr><td width="77%;">Precision <div style="font-size:9px; color:#F00;">A perfect precision score of 1.0 means that every result retrieved by a search was relevant.</div></td><td><?php echo $sdhashJpegPRE; ?></td></tr>
              <tr><td width="77%;">Recall<div style="font-size:9px; color:#F00;">A perfect recall score of 1.0 means that all relevant documents were retrieved by the search.</div></td><td><?php echo $sdhashJpegRECALL; ?></td></tr>
             <!-- <tr><td width="77%;">Accuracy<div style="font-size:9px; color:#F00;"> A measure of a test's accuracy (best value at 1 and worst at 0)</div></td><td><?php echo $sdhashJpegACC; ?></td></tr>-->
				   
			<tr><td width="77%;">F-score<div style="font-size:9px; color:#F00;"> The weighted average of Precision and Recall (best value at 1 and worst at 0)</div></td><td><?php echo $sdhashJpegFSCORE; ?></td></tr>
				   
				<tr><td width="77%;">MCC<div style="font-size:9px; color:#F00;"> A measure of the quality of (best value at 1 and worst at -1)</div></td><td><?php echo $sdhashJpegMCC; ?></td></tr>
              
              </table>
				  
				

<?php ////////////////////////////////////////////////sdhash Bmp/////////////////////////////////////////////////////////////// ?>				  
				  
				  
				 <?php
						  //echo exec('ssdeep -r ..\Data\Docx');
						  
						 //echo exec('sdhash ..\Data\EmbeddedObjects\Docx\BMP\Embedded_Files\*.docx -o result_single_common_jpeg_docx1');
						  
						  
						 //echo exec('sdhash ..\Data\Images\Bmp\*.jpg -o img_result_embedded_jpeg_docx2');
						  
						 // $rslt= exec('sdhash -c result_single_common_bmp_docx1.sdbf result_single_common_jpeg_docx1.sdbf | sort >final_sdhash_single_common_bmp1.text');
						  
						  $rslt = file_get_contents('..\Final_Report_Fragment\sdhashEmbeddedSingleCommonObjectDOCXbmp.text', true);
						  $sn=0;
						  $tp=0;
						  $tn=0;
						  $fp=0;
						  $fn=0;
						  $sn=0;
							
							$t=(int)$_GET['threshold'];
					  		if($rslt==""){
								
								
						$dir1    = '..\Data\EmbeddedObjects\Docx\BMP\Embedded_Files';
					  	$files1 = scandir($dir1);
						
						$dir2    = '..\Data\EmbeddedObjects\Docx\BMP\Embedded_Files';
					  	$files2 = scandir($dir2);
								
							
							
						  foreach($files1 as &$value1){
						  
						  $sn++; } 
						  
						  foreach($files2 as &$value2){
						  
						 
						 
						  
						  } 
								
								
								
							}else{
					  
						  $arr = explode("\n", $rslt);
						  
						  //echo count($arr);
						  
						  foreach ($arr as &$value) {
							  
							  $sn++; 
							   if($value!=null){  
						  
						  $arr1 = explode("|", $value);
						  $cntr=0;
						  foreach ($arr1 as &$value1){
							  //echo $value1."----------";
							  
							  
							   $arr2 = explode("\\", $value1);
							  $arr1_size=count($arr2);
							  
							   if($cntr==0){
								  $embddFll=$arr2[$arr1_size-1];
							  }else if($cntr==1){
								  $imgFll=$arr2[$arr1_size-1];
							  }else if($cntr==2){
							  	  $similarity=$arr2[$arr1_size-1];
							  }
							  
							  $cntr++;
							  
							  
							  
						  }
						  $embdFl_arr = explode("_", $embddFll);
						  $imgFl_arr = explode("_", $imgFll);
								//$ln=count($embdFl_arr);
								//$lnn=count($imgFl_arr);
								$embddFl=$embdFl_arr[0];
								$imgFl=$imgFl_arr[0];	  
								//echo $embddFl."---".$imgFl;
								
						  
						  if(strcmp($embddFl,$imgFl)==0){
									//echo $embdFl."****".$orgnlFl."-----\n"; 
									if($similarity>=$t){
										$tp++;									
									}else{
										$fn++;
									}
									
								}else{
									if($similarity>=$t){
										$fp++;									
									}else{
										$tn++;
									}
									
								}
						  
							  
							 // echo "***************".$arr2[$arr1_size-1]."**************";
							  
						  }
						 // echo "\n";
						  
						  
						  } 
							  
					  }
						  
						  
   // $dir = opendir('uploads/'); # This is the directory it will count from
   $numOfTarget=0;
   $numOfFlWthImg=0;
   $fi1 = new FilesystemIterator("..\Data\EmbeddedObjects\Docx\BMP\Embedded_Files", FilesystemIterator::SKIP_DOTS);
$numOfTarget=iterator_count($fi1);
$fi2 = new FilesystemIterator("..\Data\EmbeddedObjects\Docx\BMP\Embedded_Files", FilesystemIterator::SKIP_DOTS);
$numOfFlWthImg=iterator_count($fi2);
$numOfComprsn=$numOfTarget*$numOfFlWthImg;

//echo $numOfComprsn;
///*
$dir="..\Data\EmbeddedObjects\Docx\BMP\Embedded_Files";			  
$cdir = scandir($dir); 

$dir2="..\Data\EmbeddedObjects\Docx\BMP\Embedded_Files";			  
$cdir2 = scandir($dir2); 
			  $simlarfl=0;
			  $dsimlarfl=0;
			  
   foreach ($cdir as $key => $value) 
   { 
	   $embdFl="";
      if (!in_array($value,array(".",".."))) 
      { 
         if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) 
         { 
            $embdFl=dirToArray($dir . DIRECTORY_SEPARATOR . $value); 
         } 
         else 
         { 
            $embdFl=$value; 
         } 
		  
		  
		  foreach($cdir2 as $key2 => $value2){
			  $imgFll="";
			if (!in_array($value2,array(".",".."))) 
      		{ 
				 if (is_dir($dir2 . DIRECTORY_SEPARATOR . $value2)) 
				 { 
					$imgFll=dirToArray($dir2 . DIRECTORY_SEPARATOR . $value2); 
				 } 
				 else 
				 { 
					$imgFll=$value2; 
				 } 
			  
				
				//echo $embdFl."****".$orgnlFl."-----\n"; 
				
				$embdFl_arr = explode("_", $embdFl);
				$ln=count($embdFl_arr);
				$imgFl_arr = explode("_", $imgFll);
				$ln=count($embdFl_arr);
				//echo $embdFl_arr[0]."****".$imgFl_arr[0]."-----\n"; 
				if(strcmp($embdFl_arr[0],$imgFl_arr[0])==0	){
					//echo $embdFl_arr[$ln-1]."****".$imgFl_arr[0]."-----\n"; 
					$simlarfl++;
				}else{
					$dsimlarfl++;
				}
				
				
			  }
			  
			  
		  }
		  
      } 
	   
	   
   } 
			  
			 

		   if($tn<$dsimlarfl){
					   $tn=$dsimlarfl-$fp;
				   }
				   if($tp<$simlarfl){
					   $fn=$simlarfl-$tp;
				   }
				   
				   $fpr=$fp/$numOfComprsn;
				   $fnr=$fn/$numOfComprsn;

			  if(($tp+$fp)!=0)	{
				$pre=$tp/($tp+$fp);
				}else{
					$pre=0;
				} 
			  
			  if(($tp+$fn)!=0)	{
				$recall=$tp/($tp+$fn);	
				}else{
					$recall=0;
				} 
			   if(($pre+$recall)!=0){
					$f= 2*($pre*$recall)/($pre+$recall);
				 }else{
					 $f=0;
				 }
				
				
				?>
                
                <?php 
			  
				  $sdhashBmpTP=$tp;
				  $sdhashBmpTN=$tn;
				  $sdhashBmpFP=$fp;
				  $sdhashBmpFN=$fn;
				  $sdhashBmpFPR=$fpr;
				  $sdhashBmpFNR=$fnr;
				  $sdhashBmpPRE=$pre;
				  $sdhashBmpRECALL=$recall;
				  $sdhashBmpFSCORE=$f;
				  $sqrt1=sqrt(($sdhashBmpTP+$sdhashBmpFP)*($sdhashBmpTP+$sdhashBmpFN)*($sdhashBmpTN+$sdhashBmpFP)*($sdhashBmpTN+$sdhashBmpFN));
			   
			  if($sqrt1==0){
				$sdhashBmpMCC=0;
				}else{  
				  
			  $sdhashBmpMCC=(($sdhashBmpTP*$sdhashBmpTN)-($sdhashBmpFP*$sdhashBmpFN))/$sqrt1;
			  
				}
				  
				  
				  
			  
			  
			  
			  ?>
                
			  
			 <table>
              <tr style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center;">
                <td colspan="2">Scheme : sdhash &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Embedded object: Bmp &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Data Set: DOCX &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td></tr>
              <tr><td>True Positive</td><td><?php echo $sdhashBmpTP; ?></td></tr>
			  <tr><td>True Negative</td><td><?php echo $sdhashBmpTN; ?></td></tr>
			  <tr><td>False Positive</td><td><?php echo $sdhashBmpFP; ?></td></tr>
              <tr><td width="77%;">False Negative</td><td><?php echo $sdhashBmpFN; ?></td></tr>
              <tr><td width="77%;">False positive rate (FPR)</td><td><?php  echo $sdhashBmpFPR; ?></td></tr>
              <tr><td width="77%;">False negative rate (FNR)</td><td><?php echo $sdhashBmpFNR; ?></td></tr>
              <tr><td width="77%;">Precision <div style="font-size:9px; color:#F00;">A perfect precision score of 1.0 means that every result retrieved by a search was relevant.</div></td><td><?php echo $sdhashBmpPRE; ?></td></tr>
              <tr><td width="77%;">Recall<div style="font-size:9px; color:#F00;">A perfect recall score of 1.0 means that all relevant documents were retrieved by the search.</div></td><td><?php echo $sdhashBmpRECALL; ?></td></tr>
                 
			<tr><td width="77%;">F-score<div style="font-size:9px; color:#F00;"> The weighted average of Precision and Recall (best value at 1 and worst at 0)</div></td><td><?php echo $sdhashBmpFSCORE; ?></td></tr>
				   
				<tr><td width="77%;">MCC<div style="font-size:9px; color:#F00;"> A measure of the quality of (best value at 1 and worst at -1)</div></td><td><?php echo $sdhashBmpMCC; ?></td></tr>
              
              </table>
				 
                 
                 
<?php ////////////////////////////////////////////////sdhash Tiff/////////////////////////////////////////////////////////////// ?>				  
				  
				  
				 				 <?php
						  //echo exec('ssdeep -r ..\Data\Docx');
						  
						 //echo exec('sdhash ..\Data\EmbeddedObjects\Docx\BMP\Embedded_Files\*.docx -o result_single_common_jpeg_docx1');
						  
						  
						 //echo exec('sdhash ..\Data\Images\Bmp\*.jpg -o img_result_embedded_jpeg_docx2');
						  
						 // $rslt= exec('sdhash -c result_single_common_bmp_docx1.sdbf result_single_common_jpeg_docx1.sdbf | sort >final_sdhash_single_common_bmp1.text');
						  
						  $rslt = file_get_contents('..\Final_Report_Fragment\sdhashEmbeddedSingleCommonObjectDOCXtiff.text', true);
						  $sn=0;
						  $tp=0;
						  $tn=0;
						  $fp=0;
						  $fn=0;
						  $sn=0;
							
							$t=(int)$_GET['threshold'];
					  		if($rslt==""){
								
								
						$dir1    = '..\Data\EmbeddedObjects\Docx\TIFF\Embedded_Files';
					  	$files1 = scandir($dir1);
						
						$dir2    = '..\Data\EmbeddedObjects\Docx\TIFF\Embedded_Files';
					  	$files2 = scandir($dir2);
								
							
							
						  foreach($files1 as &$value1){
						  
						  $sn++; } 
						  
						  foreach($files2 as &$value2){
						  
						 
						 
						  
						  } 
								
								
								
							}else{
					  
						  $arr = explode("\n", $rslt);
						  
						  //echo count($arr);
						  
						  foreach ($arr as &$value) {
							  
							  $sn++; 
							   if($value!=null){  
						  
						  $arr1 = explode("|", $value);
						  $cntr=0;
						  foreach ($arr1 as &$value1){
							  //echo $value1."----------";
							  
							  
							   $arr2 = explode("\\", $value1);
							  $arr1_size=count($arr2);
							  
							   if($cntr==0){
								  $embddFll=$arr2[$arr1_size-1];
							  }else if($cntr==1){
								  $imgFll=$arr2[$arr1_size-1];
							  }else if($cntr==2){
							  	  $similarity=$arr2[$arr1_size-1];
							  }
							  
							  $cntr++;
							  
							  
							  
						  }
						  $embdFl_arr = explode("_", $embddFll);
						  $imgFl_arr = explode("_", $imgFll);
								//$ln=count($embdFl_arr);
								//$lnn=count($imgFl_arr);
								$embddFl=$embdFl_arr[0];
								$imgFl=$imgFl_arr[0];	  
								//echo $embddFl."---".$imgFl;
								
						  
						  if(strcmp($embddFl,$imgFl)==0){
									//echo $embdFl."****".$orgnlFl."-----\n"; 
									if($similarity>=$t){
										$tp++;									
									}else{
										$fn++;
									}
									
								}else{
									if($similarity>=$t){
										$fp++;									
									}else{
										$tn++;
									}
									
								}
						  
							  
							 // echo "***************".$arr2[$arr1_size-1]."**************";
							  
						  }
						 // echo "\n";
						  
						  
						  } 
							  
					  }
						  
						  
   // $dir = opendir('uploads/'); # This is the directory it will count from
   $numOfTarget=0;
   $numOfFlWthImg=0;
   $fi1 = new FilesystemIterator("..\Data\EmbeddedObjects\Docx\TIFF\Embedded_Files", FilesystemIterator::SKIP_DOTS);
$numOfTarget=iterator_count($fi1);
$fi2 = new FilesystemIterator("..\Data\EmbeddedObjects\Docx\TIFF\Embedded_Files", FilesystemIterator::SKIP_DOTS);
$numOfFlWthImg=iterator_count($fi2);
$numOfComprsn=$numOfTarget*$numOfFlWthImg;

//echo $numOfComprsn;
///*
$dir="..\Data\EmbeddedObjects\Docx\TIFF\Embedded_Files";			  
$cdir = scandir($dir); 

$dir2="..\Data\EmbeddedObjects\Docx\TIFF\Embedded_Files";			  
$cdir2 = scandir($dir2); 
			  $simlarfl=0;
			  $dsimlarfl=0;
			  
   foreach ($cdir as $key => $value) 
   { 
	   $embdFl="";
      if (!in_array($value,array(".",".."))) 
      { 
         if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) 
         { 
            $embdFl=dirToArray($dir . DIRECTORY_SEPARATOR . $value); 
         } 
         else 
         { 
            $embdFl=$value; 
         } 
		  
		  
		  foreach($cdir2 as $key2 => $value2){
			  $imgFll="";
			if (!in_array($value2,array(".",".."))) 
      		{ 
				 if (is_dir($dir2 . DIRECTORY_SEPARATOR . $value2)) 
				 { 
					$imgFll=dirToArray($dir2 . DIRECTORY_SEPARATOR . $value2); 
				 } 
				 else 
				 { 
					$imgFll=$value2; 

				 } 
			  
				
				//echo $embdFl."****".$orgnlFl."-----\n"; 
				
				$embdFl_arr = explode("_", $embdFl);
				$ln=count($embdFl_arr);
				$imgFl_arr = explode("_", $imgFll);
				$ln=count($embdFl_arr);
				//echo $embdFl_arr[0]."****".$imgFl_arr[0]."-----\n"; 
				if(strcmp($embdFl_arr[0],$imgFl_arr[0])==0	){
					//echo $embdFl_arr[$ln-1]."****".$imgFl_arr[0]."-----\n"; 
					$simlarfl++;
				}else{
					$dsimlarfl++;
				}
				
				
			  }
			  
			  
		  }
		  
      } 
	   
	   
   } 
			  
			 

		   if($tn<$dsimlarfl){
					   $tn=$dsimlarfl-$fp;
				   }
				   if($tp<$simlarfl){
					   $fn=$simlarfl-$tp;
				   }
				   
				   $fpr=$fp/$numOfComprsn;
				   $fnr=$fn/$numOfComprsn;

			  if(($tp+$fp)!=0)	{
				$pre=$tp/($tp+$fp);
				}else{
					$pre=0;
				} 
			  
			  if(($tp+$fn)!=0)	{
				$recall=$tp/($tp+$fn);	
				}else{
					$recall=0;
				} 
			   if(($pre+$recall)!=0){
					$f= 2*($pre*$recall)/($pre+$recall);
				 }else{
					 $f=0;
				 }
				
				
				?>
                
                <?php 
			  
				  $sdhashTiffTP=$tp;
				  $sdhashTiffTN=$tn;
				  $sdhashTiffFP=$fp;
				  $sdhashTiffFN=$fn;
				  $sdhashTiffFPR=$fpr;
				  $sdhashTiffFNR=$fnr;
				  $sdhashTiffPRE=$pre;
				  $sdhashTiffRECALL=$recall;
				  $sdhashTiffFSCORE=$f;
				  $sqrt1=sqrt(($sdhashTiffTP+$sdhashTiffFP)*($sdhashTiffTP+$sdhashTiffFN)*($sdhashTiffTN+$sdhashTiffFP)*($sdhashTiffTN+$sdhashTiffFN));
			   
			  if($sqrt1==0){
				$sdhashTiffMCC=0;
				}else{  
				  
			  $sdhashTiffMCC=(($sdhashTiffTP*$sdhashTiffTN)-($sdhashTiffFP*$sdhashTiffFN))/$sqrt1;
			  
				}
				  
				  
				  
			  
			  
			  
			  ?>
              
              
              
              
              
              
              
              
              
              
              
			  
			 <table>
              <tr style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center;">
                <td colspan="2">Scheme : sdhash &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Embedded object: Tiff &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Data Set: DOCX &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td></tr>
              <tr><td>True Positive</td><td><?php echo $sdhashTiffTP; ?></td></tr>
			  <tr><td>True Negative</td><td><?php echo $sdhashTiffTN; ?></td></tr>
			  <tr><td>False Positive</td><td><?php echo $sdhashTiffFP; ?></td></tr>
              <tr><td width="77%;">False Negative</td><td><?php echo $sdhashTiffFN; ?></td></tr>
              <tr><td width="77%;">False positive rate (FPR)</td><td><?php  echo $sdhashTiffFPR; ?></td></tr>
              <tr><td width="77%;">False negative rate (FNR)</td><td><?php echo $sdhashTiffFNR; ?></td></tr>
              <tr><td width="77%;">Precision <div style="font-size:9px; color:#F00;">A perfect precision score of 1.0 means that every result retrieved by a search was relevant.</div></td><td><?php echo $sdhashTiffPRE; ?></td></tr>
              <tr><td width="77%;">Recall<div style="font-size:9px; color:#F00;">A perfect recall score of 1.0 means that all relevant documents were retrieved by the search.</div></td><td><?php echo $sdhashTiffRECALL; ?></td></tr>
             <!-- <tr><td width="77%;">Accuracy<div style="font-size:9px; color:#F00;"> A measure of a test's accuracy (best value at 1 and worst at 0)</div></td><td><?php echo $sdhashTiffACC; ?></td></tr>-->
				   
			<tr><td width="77%;">F-score<div style="font-size:9px; color:#F00;"> The weighted average of Precision and Recall (best value at 1 and worst at 0)</div></td><td><?php echo $sdhashTiffFSCORE; ?></td></tr>
				   
				<tr><td width="77%;">MCC<div style="font-size:9px; color:#F00;"> A measure of the quality of (best value at 1 and worst at -1)</div></td><td><?php echo $sdhashTiffMCC; ?></td></tr>
              
              </table>		                 
                 
                 
                 
                 
                  
								  
	
<?php ////////////////////////////////////////////////sdhash Gif/////////////////////////////////////////////////////////////// ?>				  
				  
				  
				 <?php
						  //echo exec('ssdeep -r ..\Data\Docx');
						  
						 //echo exec('sdhash ..\Data\EmbeddedObjects\Docx\BMP\Embedded_Files\*.docx -o result_single_common_jpeg_docx1');
						  
						  
						 //echo exec('sdhash ..\Data\Images\Bmp\*.jpg -o img_result_embedded_jpeg_docx2');
						  
						 // $rslt= exec('sdhash -c result_single_common_bmp_docx1.sdbf result_single_common_jpeg_docx1.sdbf | sort >final_sdhash_single_common_bmp1.text');
						  
						  $rslt = file_get_contents('..\Final_Report_Fragment\sdhashEmbeddedSingleCommonObjectDOCXgif.text', true);
						  $sn=0;
						  $tp=0;
						  $tn=0;
						  $fp=0;
						  $fn=0;
						  $sn=0;
							
							$t=(int)$_GET['threshold'];
					  		if($rslt==""){
								
								
						$dir1    = '..\Data\EmbeddedObjects\Docx\GIF\Embedded_Files';
					  	$files1 = scandir($dir1);
						
						$dir2    = '..\Data\EmbeddedObjects\Docx\GIF\Embedded_Files';
					  	$files2 = scandir($dir2);
								
							
							
						  foreach($files1 as &$value1){
						  
						  $sn++; } 
						  
						  foreach($files2 as &$value2){
						  
						 
						 
						  
						  } 
								
								
								
							}else{
					  
						  $arr = explode("\n", $rslt);
						  
						  //echo count($arr);
						  
						  foreach ($arr as &$value) {
							  
							  $sn++; 
							   if($value!=null){  
						  
						  $arr1 = explode("|", $value);
						  $cntr=0;
						  foreach ($arr1 as &$value1){
							  //echo $value1."----------";
							  
							  
							   $arr2 = explode("\\", $value1);
							  $arr1_size=count($arr2);
							  
							   if($cntr==0){
								  $embddFll=$arr2[$arr1_size-1];
							  }else if($cntr==1){
								  $imgFll=$arr2[$arr1_size-1];
							  }else if($cntr==2){
							  	  $similarity=$arr2[$arr1_size-1];
							  }
							  
							  $cntr++;
							  
							  
							  
						  }
						  $embdFl_arr = explode("_", $embddFll);
						  $imgFl_arr = explode("_", $imgFll);
								//$ln=count($embdFl_arr);
								//$lnn=count($imgFl_arr);
								$embddFl=$embdFl_arr[0];
								$imgFl=$imgFl_arr[0];	  
								//echo $embddFl."---".$imgFl;
								
						  
						  if(strcmp($embddFl,$imgFl)==0){
									//echo $embdFl."****".$orgnlFl."-----\n"; 
									if($similarity>=$t){
										$tp++;									
									}else{
										$fn++;
									}
									
								}else{
									if($similarity>=$t){
										$fp++;									
									}else{
										$tn++;
									}
									
								}
						  
							  
							 // echo "***************".$arr2[$arr1_size-1]."**************";
							  
						  }
						 // echo "\n";
						  
						  
						  } 
							  
					  }
						  
						  
   // $dir = opendir('uploads/'); # This is the directory it will count from
   $numOfTarget=0;
   $numOfFlWthImg=0;
   $fi1 = new FilesystemIterator("..\Data\EmbeddedObjects\Docx\GIF\Embedded_Files", FilesystemIterator::SKIP_DOTS);
$numOfTarget=iterator_count($fi1);
$fi2 = new FilesystemIterator("..\Data\EmbeddedObjects\Docx\GIF\Embedded_Files", FilesystemIterator::SKIP_DOTS);
$numOfFlWthImg=iterator_count($fi2);
$numOfComprsn=$numOfTarget*$numOfFlWthImg;

//echo $numOfComprsn;
///*
$dir="..\Data\EmbeddedObjects\Docx\GIF\Embedded_Files";			  
$cdir = scandir($dir); 

$dir2="..\Data\EmbeddedObjects\Docx\GIF\Embedded_Files";			  
$cdir2 = scandir($dir2); 
			  $simlarfl=0;
			  $dsimlarfl=0;
			  
   foreach ($cdir as $key => $value) 
   { 
	   $embdFl="";
      if (!in_array($value,array(".",".."))) 
      { 
         if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) 
         { 
            $embdFl=dirToArray($dir . DIRECTORY_SEPARATOR . $value); 
         } 
         else 
         { 
            $embdFl=$value; 
         } 
		  
		  
		  foreach($cdir2 as $key2 => $value2){
			  $imgFll="";
			if (!in_array($value2,array(".",".."))) 
      		{ 
				 if (is_dir($dir2 . DIRECTORY_SEPARATOR . $value2)) 
				 { 
					$imgFll=dirToArray($dir2 . DIRECTORY_SEPARATOR . $value2); 
				 } 
				 else 
				 { 
					$imgFll=$value2; 
				 } 
			  
				
				//echo $embdFl."****".$orgnlFl."-----\n"; 
				
				$embdFl_arr = explode("_", $embdFl);
				$ln=count($embdFl_arr);
				$imgFl_arr = explode("_", $imgFll);
				$ln=count($embdFl_arr);
				//echo $embdFl_arr[0]."****".$imgFl_arr[0]."-----\n"; 
				if(strcmp($embdFl_arr[0],$imgFl_arr[0])==0	){
					//echo $embdFl_arr[$ln-1]."****".$imgFl_arr[0]."-----\n"; 
					$simlarfl++;
				}else{
					$dsimlarfl++;
				}
				
				
			  }
			  
			  
		  }
		  
      } 
	   
	   
   } 
			  
			 

		   if($tn<$dsimlarfl){
					   $tn=$dsimlarfl-$fp;
				   }
				   if($tp<$simlarfl){
					   $fn=$simlarfl-$tp;
				   }
				   
				   $fpr=$fp/$numOfComprsn;
				   $fnr=$fn/$numOfComprsn;

			  if(($tp+$fp)!=0)	{
				$pre=$tp/($tp+$fp);
				}else{
					$pre=0;
				} 
			  
			  if(($tp+$fn)!=0)	{
				$recall=$tp/($tp+$fn);	
				}else{
					$recall=0;
				} 
			   if(($pre+$recall)!=0){
					$f= 2*($pre*$recall)/($pre+$recall);
				 }else{
					 $f=0;
				 }
				
				
				?>
                
                <?php 
			  
				  $sdhashGifTP=$tp;
				  $sdhashGifTN=$tn;
				  $sdhashGifFP=$fp;
				  $sdhashGifFN=$fn;
				  $sdhashGifFPR=$fpr;
				  $sdhashGifFNR=$fnr;
				  $sdhashGifPRE=$pre;
				  $sdhashGifRECALL=$recall;
				  $sdhashGifFSCORE=$f;
				  $sqrt1=sqrt(($sdhashGifTP+$sdhashGifFP)*($sdhashGifTP+$sdhashGifFN)*($sdhashGifTN+$sdhashGifFP)*($sdhashGifTN+$sdhashGifFN));
			   
			  if($sqrt1==0){
				$sdhashGifMCC=0;
				}else{  
				  
			  $sdhashGifMCC=(($sdhashGifTP*$sdhashGifTN)-($sdhashGifFP*$sdhashGifFN))/$sqrt1;
			  
				}
				  
				  
				  
			  
			  
			  
			  ?>
              
                            
              
              
			  
			 <table>
              <tr style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center;">
                <td colspan="2">Scheme : sdhash &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Embedded object: Gif &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Data Set: DOCX &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td></tr>
              <tr><td>True Positive</td><td><?php echo $sdhashGifTP; ?></td></tr>
			  <tr><td>True Negative</td><td><?php echo $sdhashGifTN; ?></td></tr>
			  <tr><td>False Positive</td><td><?php echo $sdhashGifFP; ?></td></tr>
              <tr><td width="77%;">False Negative</td><td><?php echo $sdhashGifFN; ?></td></tr>
              <tr><td width="77%;">False positive rate (FPR)</td><td><?php  echo $sdhashGifFPR; ?></td></tr>
              <tr><td width="77%;">False negative rate (FNR)</td><td><?php echo $sdhashGifFNR; ?></td></tr>
              <tr><td width="77%;">Precision <div style="font-size:9px; color:#F00;">A perfect precision score of 1.0 means that every result retrieved by a search was relevant.</div></td><td><?php echo $sdhashGifPRE; ?></td></tr>
              <tr><td width="77%;">Recall<div style="font-size:9px; color:#F00;">A perfect recall score of 1.0 means that all relevant documents were retrieved by the search.</div></td><td><?php echo $sdhashGifRECALL; ?></td></tr>
              <!--<tr><td width="77%;">Accuracy<div style="font-size:9px; color:#F00;"> A measure of a test's accuracy (best value at 1 and worst at 0)</div></td><td><?php echo $sdhashGifACC; ?></td></tr>-->
				   
			<tr><td width="77%;">F-score<div style="font-size:9px; color:#F00;"> The weighted average of Precision and Recall (best value at 1 and worst at 0)</div></td><td><?php echo $sdhashGifFSCORE; ?></td></tr>
				   
				<tr><td width="77%;">MCC<div style="font-size:9px; color:#F00;"> A measure of the quality of (best value at 1 and worst at -1)</div></td><td><?php echo $sdhashGifMCC; ?></td></tr>
              
              </table>			  
				  
				  
				  

				  
				  
				  
				  
				  

<?php ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// ?>				  
				  
				  
				  
				  
				  
				  
				  
                  
                  
                  
                  
                  
                
                	  
                     <?php 
					 $ssdeepAvgPre=($ssdeepJpegPRE+$ssdeepBmpPRE+$ssdeepGifPRE+$ssdeepTiffPRE+$ssdeepJpegPRE) /4;
					 $sdhashAvgPre=($sdhashJpegPRE+$sdhashBmpPRE+$sdhashGifPRE+$sdhashTiffPRE+$sdhashJpegPRE) /4;
					 
					 
					 ?> 
                      
                      
					<!--  <tr align="righ" ><td colspan="2" align="right"><input type="submit" align="middle" value="submit"  onClick="location.href = 'result_report_embedded_object_based_search_graph.php?ssdeepJpegFSCORE=<?php echo $ssdeepJpegFSCORE ?>&ssdeepBmpFSCORE=<?php echo $ssdeepBmpFSCORE ?>&ssdeepGifFSCORE=<?php echo $ssdeepGifFSCORE ?>&ssdeepTiffFSCORE=<?php echo $ssdeepTiffFSCORE ?>&sdhashJpegFSCORE=<?php echo $sdhashJpegFSCORE ?>&sdhashBmpFSCORE=<?php echo $sdhashBmpFSCORE ?>&sdhashGifFSCORE=<?php echo $sdhashGifFSCORE ?>&sdhashTiffFSCORE=<?php echo $sdhashTiffFSCORE ?>&ssdeepJpegMCC=<?php echo $ssdeepJpegMCC ?>&ssdeepBmpMCC=<?php echo $ssdeepBmpMCC ?>&ssdeepGifMCC=<?php echo $ssdeepGifMCC ?>&ssdeepTiffMCC=<?php echo $ssdeepTiffMCC ?>&sdhashJpegMCC=<?php echo $sdhashJpegMCC ?>&sdhashBmpMCC=<?php echo $sdhashBmpMCC ?>&sdhashGifMCC=<?php echo $sdhashGifMCC ?>&sdhashTiffMCC=<?php echo $sdhashTiffMCC ?>--&ssdeepJpegACC=<?php echo $ssdeepJpegACC ?>&ssdeepBmpACC=<?php echo $ssdeepBmpACC ?>&ssdeepGifACC=<?php echo $ssdeepGifACC ?>&ssdeepTiffACC=<?php echo $ssdeepTiffACC ?>&sdhashJpegACC=<?php echo $sdhashJpegACC ?>&sdhashBmpACC=<?php echo $sdhashBmpACC ?>&sdhashGifACC=<?php echo $sdhashGifACC ?>&sdhashTiffACC=<?php echo $sdhashTiffACC ?>&numOfJpegDocx=<?php echo $numOfJpegDocx ?>&numOfBmpDocx=<?php echo $numOfBmpDocx ?>&numOfGifDocx=<?php echo $numOfGifDocx ?>&numOfTiffDocx=<?php echo $numOfTiffDocx ?>&numOfJpegDocxWithOutImg=<?php echo $numOfJpegDocxWithOutImg ?>&numOfBmpDocxWithOutImg=<?php echo $numOfBmpDocxWithOutImg ?>&numOfGifDocxWithOutImg=<?php echo $numOfGifDocxWithOutImg ?>&numOfTiffDocxWithOutImg=<?php echo $numOfTiffDocxWithOutImg ?>&numOfJpeg=<?php echo $numOfJpeg ?>&numOfBmp=<?php echo $numOfBmp ?>&numOfGif=<?php echo $numOfGif ?>&numOfTiff=<?php echo $numOfTiff ?>&ssdeepAvgPre=<?php echo $ssdeepAvgPre ?>&sdhashAvgPre=<?php echo $sdhashAvgPre ?>';"  ></td></tr>
					  -->
                      
					  
				 
				  
                  
                  
                  
<?php ////////////////////////////**************PPTX***************//////////////////////////////////////?>
                  
                  
                  
                  
                  
	 <?php
							  
							  //$rslt= exec('..\ExistingTools\\ssdeep -k '.$out1.' '.$out1.' >ssdeep_embeddedObject_singleCommonObject.text');  
							  $fldr1='..\Data\EmbeddedObjects\PPTX\JPEG\Embedded_Files';	
							  $fldr2='..\Data\EmbeddedObjects\PPTX\JPEG\Embedded_Files';
							  $PPTXFlIndx=22;
							  $imgIndx=11;
							  $rslt = file_get_contents('..\Final_Report_Fragment\ssdeepEmbeddedSingleCommonObjectPPTXjpeg.text', true);
								$sn=0;
								$tp=0;
								$tn=0;
								$fp=0;
								$fn=0;
								$sn=0;
								
								$t=(int)$_GET['threshold'];
								
								$rw="";
								 
								if($rslt==""){
									
									
									
								}else{
						  
							  $arr = explode("\n", $rslt);
							  
									
							  foreach ($arr as &$value) {
							
							  $arr1 = explode("\\", $value);
							  $arr1_size= count($arr1);
							  if($arr1_size>=$PPTXFlIndx-1){
							  
							  $arr2=explode(" ",$arr1[$imgIndx]);//here 7
							  $arr2_size=count($arr2);
							  if($arr2_size>=3){
								  $file_img=$arr2[0];
								  
							  }
							  
							  $arr3=explode(" ",$arr1[$PPTXFlIndx]);//here 16
							  $arr3_size=count($arr3)."******";
							  if($arr3_size>=2){
								  $target=$arr3[0];
								  $similarity=substr($arr3[1],1,-3);
							  } 
							  
							  }
								
								  
							$embddFll=$target;
							$imgFll=$file_img;
							
							 $embdFl_arr = explode("_", $embddFll);
							 $imgFl_arr = explode("_", $imgFll);
							 $embddFl=$embdFl_arr[0];
							 $imgFl=$imgFl_arr[0];	  
							 
							  if(strcmp($embddFl,$imgFl)==0){
										if($similarity>=$t){
											$tp++;									
										}else{
											//echo $embddFl."---".$imgFl."---".$similarity;
											$fn++;
										}
										
									}else{
										
									
										if($similarity>=$t){
											$fp++;
											
										}else{
											//echo $embddFl."---".$imgFl."---".$similarity;
											$tn++;
										}
										
									}
							
							
							fwrite($tmp_handle, $rw);
								  
							  }
								  
						  }
							  
						?>
					  
					 
				  
				 
		
				  
	<?php 
	$numOfTarget=0;
	$numOfFlWthImg=0;
	$fi1 = new FilesystemIterator($fldr1, FilesystemIterator::SKIP_DOTS);
	$numOfTarget=iterator_count($fi1);
	$fi2 = new FilesystemIterator($fldr2, FilesystemIterator::SKIP_DOTS);
	$numOfFlWthImg=iterator_count($fi2);
	$numOfComprsn=$numOfTarget*$numOfFlWthImg;

	///*
	$dir=$fldr1;			  
	$cdir = scandir($dir); 

	$dir2=$fldr2;
	$cdir2 = scandir($dir2); 
				  $simlarfl=0;
				  $dsimlarfl=0;
				  
	   foreach ($cdir as $key => $value) 
	   { 
		   $embdFl="";
		  if (!in_array($value,array(".",".."))) 
		  { 
			 if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) 
			 { 
				$embdFl=dirToArray($dir . DIRECTORY_SEPARATOR . $value); 
			 } 
			 else 
			 { 
				$embdFl=$value; 
			 } 
			  
			  
			  foreach($cdir2 as $key2 => $value2){
				  $imgFll="";
				if (!in_array($value2,array(".",".."))) 
				{ 
					 if (is_dir($dir2 . DIRECTORY_SEPARATOR . $value2)) 
					 { 
						$imgFll=dirToArray($dir2 . DIRECTORY_SEPARATOR . $value2); 
					 } 
					 else 
					 { 
						$imgFll=$value2; 
					 } 
				  
					
					$embdFl_arr = explode("_", $embdFl);
					$ln=count($embdFl_arr);
					$imgFl_arr = explode("_", $imgFll);
					$ln=count($embdFl_arr);
					//echo $embdFl_arr[0]."****".$imgFl_arr[0]."-----\n"; 
					if(strcmp($embdFl_arr[0],$imgFl_arr[0])==0	){
						//echo $embdFl_arr[$ln-1]."****".$imgFl_arr[0]."-----\n"; 
						$simlarfl++;
					}else{
						$dsimlarfl++;
					}
					
				  }
				  
			  }
			  
		  } 
		   
	   } 
				
				  //echo "Similar: ".$simlarfl." Desimilar: ".$dsimlarfl;

	?>
				  
				  
			 <table>
				  <tr style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center;"><td colspan="2">Scheme : ssdeep &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Embedded object: Jpeg &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Data Set: PPTX &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td></tr>
				  <tr><td>True Positive</td><td><?php echo $tp; ?></td></tr>
					   <?php 
					   if($tn<$dsimlarfl){
						   $tn=$dsimlarfl-$fp;
					   }
					   
					   ?>
					   
				  <tr><td>True Negative</td><td><?php echo $tn; ?></td></tr>
					   
				  <tr><td>False Positive</td><td><?php echo $fp; ?></td></tr>
				  <?php
					   if($tp<$simlarfl){
						   $fn=$simlarfl-$tp;
					   }
				   ?>
					   
				  <tr><td>False Negative</td><td><?php echo $fn; ?></td></tr>
				  <?php $fpr=$fp/$numOfComprsn; ?>
				  <tr><td>False positive rate (FPR)</td><td><?php echo $fpr; ?></td></tr>
				  <?php $fnr=$fn/$numOfComprsn; ?>
				  <tr><td>False negative rate (FNR)</td><td><?php echo $fnr; ?></td></tr>
				  
				  <?php 
				  if(($tp+$fp)!=0)	{
					$pre=$tp/($tp+$fp);
					}else{
						$pre=0;
					} 
				  ?>
				   <tr><td>Precision <div style="font-size:9px; color:#F00;">A perfect precision score of 1.0 means that every result retrieved by a search was relevant.</div></td><td><?php echo $pre; ?></td></tr>
				   <?php
				  if(($tp+$fn)!=0)	{
					$recall=$tp/($tp+$fn);	
					}else{
						$recall=0;
					} 
				   ?>
					<tr><td>Recall<div style="font-size:9px; color:#F00;">A perfect recall score of 1.0 means that all relevant documents were retrieved by the search.</div></td><td><?php echo $recall; ?></td></tr>
					<?php 
					 if(($pre+$recall)!=0){
						$f= 2*($pre*$recall)/($pre+$recall);
					 }else{
						 $f=0;
					 }
					?>
					<tr><td>F-score<div style="font-size:9px; color:#F00;"> A measure of a test's accuracy (best value at 1 and worst at 0)</div></td><td><?php echo $f; ?></td></tr>
				   <?php
					 $sqrt2_1=sqrt(($tp+$fp)*($tp+$fn)*($tn+$fp)*($tn+$fn));
					 
					 if($sqrt2_1==0){
						$MCC=0;
					  }else{	  
					  $MCC=(($tp*$tn)-($fp*$fn))/$sqrt2_1;
					}
					 ?>
					<tr><td width="77%;">MCC<div style="font-size:9px; color:#F00;"> A measure of the quality of (best value at 1 and worst at -1)</div></td><td><?php echo $MCC; ?></td></tr> 
				  </table>

				  
				  
				  <?php 
				  
					  $ssdeepPPTXJpegTP=$tp;
					  $ssdeepPPTXJpegTN=$tn;
					  $ssdeepPPTXJpegFP=$fp;
					  $ssdeepPPTXJpegFN=$fn;
					  $ssdeepPPTXJpegFPR=$fpr;
					  $ssdeepPPTXJpegFNR=$fnr;
					  $ssdeepPPTXJpegPRE=$pre;
					  $ssdeepPPTXJpegRECALL=$recall;
					  //$ssdeepPPTXJpegACC=$ssdeepJpegACC_0;
					  $ssdeepPPTXJpegFSCORE=$f;
					  $ssdeepPPTXJpegMCC=$MCC;			
					  
					  
					  
				  
				  
				  ?>
				  
				  
				  
				  
				  
				  
				  
				  
              
              <?php /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////?>
				  
				  
				 <?php
								  
								  //$rslt= exec('..\ExistingTools\\ssdeep -k '.$out1.' '.$out1.' >ssdeep_embeddedObject_singleCommonObject.text');  
								  $fldr1='..\Data\EmbeddedObjects\PPTX\BMP\Embedded_Files';	
								  $fldr2='..\Data\EmbeddedObjects\PPTX\BMP\Embedded_Files';
								  $PPTXFlIndx=22;
								  $imgIndx=11;
								  $rslt = file_get_contents('..\Final_Report_Fragment\ssdeepEmbeddedSingleCommonObjectPPTXbmp.text', true);
									$sn=0;
									$tp=0;
									$tn=0;
									$fp=0;
									$fn=0;
									$sn=0;
									
									$t=(int)$_GET['threshold'];
									
									$rw="";
									 
									if($rslt==""){
										
										
										
									}else{
							  
								  $arr = explode("\n", $rslt);
								  
										
								  foreach ($arr as &$value) {
								
								  $arr1 = explode("\\", $value);
								  $arr1_size= count($arr1);
								  if($arr1_size>=$PPTXFlIndx-1){
								  
								  $arr2=explode(" ",$arr1[$imgIndx]);//here 7
								  $arr2_size=count($arr2);
								  if($arr2_size>=3){
									  $file_img=$arr2[0];
									  
								  }
								  
								  $arr3=explode(" ",$arr1[$PPTXFlIndx]);//here 16
								  $arr3_size=count($arr3)."******";
								  if($arr3_size>=2){
									  $target=$arr3[0];
									  $similarity=substr($arr3[1],1,-3);
								  } 
								  
								  }
									
									  
								$embddFll=$target;
								$imgFll=$file_img;
								
								 $embdFl_arr = explode("_", $embddFll);
								 $imgFl_arr = explode("_", $imgFll);
								 $embddFl=$embdFl_arr[0];
								 $imgFl=$imgFl_arr[0];	  
								 
								  if(strcmp($embddFl,$imgFl)==0){
											if($similarity>=$t){
												$tp++;									
											}else{
												//echo $embddFl."---".$imgFl."---".$similarity;
												$fn++;
											}
											
										}else{
											
										
											if($similarity>=$t){
												$fp++;
												
											}else{
												//echo $embddFl."---".$imgFl."---".$similarity;
												$tn++;
											}
											
										}
								
								
								fwrite($tmp_handle, $rw);
									  
								  }
									  
							  }
								  
							?>
						  
						 
					  
					 
			
					  
		<?php 
		$numOfTarget=0;
		$numOfFlWthImg=0;
		$fi1 = new FilesystemIterator($fldr1, FilesystemIterator::SKIP_DOTS);
		$numOfTarget=iterator_count($fi1);
		$fi2 = new FilesystemIterator($fldr2, FilesystemIterator::SKIP_DOTS);
		$numOfFlWthImg=iterator_count($fi2);
		$numOfComprsn=$numOfTarget*$numOfFlWthImg;

		///*
		$dir=$fldr1;			  
		$cdir = scandir($dir); 

		$dir2=$fldr2;
		$cdir2 = scandir($dir2); 
					  $simlarfl=0;
					  $dsimlarfl=0;
					  
		   foreach ($cdir as $key => $value) 
		   { 
			   $embdFl="";
			  if (!in_array($value,array(".",".."))) 
			  { 
				 if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) 
				 { 
					$embdFl=dirToArray($dir . DIRECTORY_SEPARATOR . $value); 
				 } 
				 else 
				 { 
					$embdFl=$value; 
				 } 
				  
				  
				  foreach($cdir2 as $key2 => $value2){
					  $imgFll="";
					if (!in_array($value2,array(".",".."))) 
					{ 
						 if (is_dir($dir2 . DIRECTORY_SEPARATOR . $value2)) 
						 { 
							$imgFll=dirToArray($dir2 . DIRECTORY_SEPARATOR . $value2); 
						 } 
						 else 
						 { 
							$imgFll=$value2; 
						 } 
					  
						
						$embdFl_arr = explode("_", $embdFl);
						$ln=count($embdFl_arr);
						$imgFl_arr = explode("_", $imgFll);
						$ln=count($embdFl_arr);
						//echo $embdFl_arr[0]."****".$imgFl_arr[0]."-----\n"; 
						if(strcmp($embdFl_arr[0],$imgFl_arr[0])==0	){
							//echo $embdFl_arr[$ln-1]."****".$imgFl_arr[0]."-----\n"; 
							$simlarfl++;
						}else{
							$dsimlarfl++;
						}
						
					  }
					  
				  }
				  
			  } 
			   
		   } 
					
					  //echo "Similar: ".$simlarfl." Desimilar: ".$dsimlarfl;

		?>
					  
					  
				 <table>
					  <tr style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center;"><td colspan="2">Scheme : ssdeep &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Embedded object: Bmp &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Data Set: PPTX &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td></tr>
					  <tr><td>True Positive</td><td><?php echo $tp; ?></td></tr>
						   <?php 
						   if($tn<$dsimlarfl){
							   $tn=$dsimlarfl-$fp;
						   }
						   
						   ?>
						   
					  <tr><td>True Negative</td><td><?php echo $tn; ?></td></tr>
						   
					  <tr><td>False Positive</td><td><?php echo $fp; ?></td></tr>
					  <?php
						   if($tp<$simlarfl){
							   $fn=$simlarfl-$tp;
						   }
					   ?>
						   
					  <tr><td>False Negative</td><td><?php echo $fn; ?></td></tr>
					  <?php $fpr=$fp/$numOfComprsn; ?>
					  <tr><td>False positive rate (FPR)</td><td><?php echo $fpr; ?></td></tr>
					  <?php $fnr=$fn/$numOfComprsn; ?>
					  <tr><td>False negative rate (FNR)</td><td><?php echo $fnr; ?></td></tr>
					  
					  <?php 
					  if(($tp+$fp)!=0)	{
						$pre=$tp/($tp+$fp);
						}else{
							$pre=0;
						} 
					  ?>
					   <tr><td>Precision <div style="font-size:9px; color:#F00;">A perfect precision score of 1.0 means that every result retrieved by a search was relevant.</div></td><td><?php echo $pre; ?></td></tr>
					   <?php
					  if(($tp+$fn)!=0)	{
						$recall=$tp/($tp+$fn);	
						}else{
							$recall=0;
						} 
					   ?>
						<tr><td>Recall<div style="font-size:9px; color:#F00;">A perfect recall score of 1.0 means that all relevant documents were retrieved by the search.</div></td><td><?php echo $recall; ?></td></tr>
						<?php 
						 if(($pre+$recall)!=0){
							$f= 2*($pre*$recall)/($pre+$recall);
						 }else{
							 $f=0;
						 }
						?>
						<tr><td>F-score<div style="font-size:9px; color:#F00;"> A measure of a test's accuracy (best value at 1 and worst at 0)</div></td><td><?php echo $f; ?></td></tr>
					   <?php
						 $sqrt2_1=sqrt(($tp+$fp)*($tp+$fn)*($tn+$fp)*($tn+$fn));
						 
						 if($sqrt2_1==0){
							$MCC=0;
						  }else{	  
						  $MCC=(($tp*$tn)-($fp*$fn))/$sqrt2_1;
						}
						 ?>
						<tr><td width="77%;">MCC<div style="font-size:9px; color:#F00;"> A measure of the quality of (best value at 1 and worst at -1)</div></td><td><?php echo $MCC; ?></td></tr> 
					  </table>

					  
					  
					  <?php 
					  
						  $ssdeepPPTXBmpTP=$tp;
						  $ssdeepPPTXBmpTN=$tn;
						  $ssdeepPPTXBmpFP=$fp;
						  $ssdeepPPTXBmpFN=$fn;
						  $ssdeepPPTXBmpFPR=$fpr;
						  $ssdeepPPTXBmpFNR=$fnr;
						  $ssdeepPPTXBmpPRE=$pre;
						  $ssdeepPPTXBmpRECALL=$recall;
						  //$ssdeepPPTXBmpACC=$ssdeepPPTXBmpACC_0;
						  $ssdeepPPTXBmpFSCORE=$f;
						  $ssdeepPPTXBmpMCC=$MCC;			  
					  
					  
					  
					  ?>
              
                  
				  
<?php ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////?>

		 <?php
								  
								  //$rslt= exec('..\ExistingTools\\ssdeep -k '.$out1.' '.$out1.' >ssdeep_embeddedObject_singleCommonObject.text');  
								  $fldr1='..\Data\EmbeddedObjects\PPTX\TIFF\Embedded_Files';	
								  $fldr2='..\Data\EmbeddedObjects\PPTX\TIFF\Embedded_Files';
								  $PPTXFlIndx=22;
								  $imgIndx=11;
								  $rslt = file_get_contents('..\Final_Report_Fragment\ssdeepEmbeddedSingleCommonObjectPPTXtiff.text', true);
									$sn=0;
									$tp=0;
									$tn=0;
									$fp=0;
									$fn=0;
									$sn=0;
									
									$t=(int)$_GET['threshold'];
									
									$rw="";
									 
									if($rslt==""){
										
										
										
									}else{
							  
								  $arr = explode("\n", $rslt);
								  
										
								  foreach ($arr as &$value) {
								
								  $arr1 = explode("\\", $value);
								  $arr1_size= count($arr1);
								  if($arr1_size>=$PPTXFlIndx-1){
								  
								  $arr2=explode(" ",$arr1[$imgIndx]);//here 7
								  $arr2_size=count($arr2);
								  if($arr2_size>=3){
									  $file_img=$arr2[0];
									  
								  }
								  
								  $arr3=explode(" ",$arr1[$PPTXFlIndx]);//here 16
								  $arr3_size=count($arr3)."******";
								  if($arr3_size>=2){
									  $target=$arr3[0];
									  $similarity=substr($arr3[1],1,-3);
								  } 
								  
								  }
									
									  
								$embddFll=$target;
								$imgFll=$file_img;
								
								 $embdFl_arr = explode("_", $embddFll);
								 $imgFl_arr = explode("_", $imgFll);
								 $embddFl=$embdFl_arr[0];
								 $imgFl=$imgFl_arr[0];	  
								 
								  if(strcmp($embddFl,$imgFl)==0){
											if($similarity>=$t){
												$tp++;									
											}else{
												//echo $embddFl."---".$imgFl."---".$similarity;
												$fn++;
											}
											
										}else{
											
										
											if($similarity>=$t){
												$fp++;
												
											}else{
												//echo $embddFl."---".$imgFl."---".$similarity;
												$tn++;
											}
											
										}
								
								
								fwrite($tmp_handle, $rw);
									  
								  }
									  
							  }
								  
							?>
						  
						 
					  
					 
			
					  
		<?php 
		$numOfTarget=0;
		$numOfFlWthImg=0;
		$fi1 = new FilesystemIterator($fldr1, FilesystemIterator::SKIP_DOTS);
		$numOfTarget=iterator_count($fi1);
		$fi2 = new FilesystemIterator($fldr2, FilesystemIterator::SKIP_DOTS);
		$numOfFlWthImg=iterator_count($fi2);
		$numOfComprsn=$numOfTarget*$numOfFlWthImg;

		///*
		$dir=$fldr1;			  
		$cdir = scandir($dir); 

		$dir2=$fldr2;
		$cdir2 = scandir($dir2); 
					  $simlarfl=0;
					  $dsimlarfl=0;
					  
		   foreach ($cdir as $key => $value) 
		   { 
			   $embdFl="";
			  if (!in_array($value,array(".",".."))) 
			  { 
				 if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) 
				 { 
					$embdFl=dirToArray($dir . DIRECTORY_SEPARATOR . $value); 
				 } 
				 else 
				 { 
					$embdFl=$value; 
				 } 
				  
				  
				  foreach($cdir2 as $key2 => $value2){
					  $imgFll="";
					if (!in_array($value2,array(".",".."))) 
					{ 
						 if (is_dir($dir2 . DIRECTORY_SEPARATOR . $value2)) 
						 { 
							$imgFll=dirToArray($dir2 . DIRECTORY_SEPARATOR . $value2); 
						 } 
						 else 
						 { 
							$imgFll=$value2; 
						 } 
					  
						
						$embdFl_arr = explode("_", $embdFl);
						$ln=count($embdFl_arr);
						$imgFl_arr = explode("_", $imgFll);
						$ln=count($embdFl_arr);
						//echo $embdFl_arr[0]."****".$imgFl_arr[0]."-----\n"; 
						if(strcmp($embdFl_arr[0],$imgFl_arr[0])==0	){
							//echo $embdFl_arr[$ln-1]."****".$imgFl_arr[0]."-----\n"; 
							$simlarfl++;
						}else{
							$dsimlarfl++;
						}
						
					  }
					  
				  }
				  
			  } 
			   
		   } 
					
					  //echo "Similar: ".$simlarfl." Desimilar: ".$dsimlarfl;

		?>
					  
					  
				 <table>
					  <tr style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center;"><td colspan="2">Scheme : ssdeep &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Embedded object: Tiff &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Data Set: PPTX &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td></tr>
					  <tr><td>True Positive</td><td><?php echo $tp; ?></td></tr>
						   <?php 
						   if($tn<$dsimlarfl){
							   $tn=$dsimlarfl-$fp;
						   }
						   
						   ?>
						   
					  <tr><td>True Negative</td><td><?php echo $tn; ?></td></tr>
						   
					  <tr><td>False Positive</td><td><?php echo $fp; ?></td></tr>
					  <?php
						   if($tp<$simlarfl){
							   $fn=$simlarfl-$tp;
						   }
					   ?>
						   
					  <tr><td>False Negative</td><td><?php echo $fn; ?></td></tr>
					  <?php $fpr=$fp/$numOfComprsn; ?>
					  <tr><td>False positive rate (FPR)</td><td><?php echo $fpr; ?></td></tr>
					  <?php $fnr=$fn/$numOfComprsn; ?>
					  <tr><td>False negative rate (FNR)</td><td><?php echo $fnr; ?></td></tr>
					  
					  <?php 
					  if(($tp+$fp)!=0)	{
						$pre=$tp/($tp+$fp);
						}else{
							$pre=0;
						} 
					  ?>
					   <tr><td>Precision <div style="font-size:9px; color:#F00;">A perfect precision score of 1.0 means that every result retrieved by a search was relevant.</div></td><td><?php echo $pre; ?></td></tr>
					   <?php
					  if(($tp+$fn)!=0)	{
						$recall=$tp/($tp+$fn);	
						}else{
							$recall=0;
						} 
					   ?>
						<tr><td>Recall<div style="font-size:9px; color:#F00;">A perfect recall score of 1.0 means that all relevant documents were retrieved by the search.</div></td><td><?php echo $recall; ?></td></tr>
						<?php 
						 if(($pre+$recall)!=0){
							$f= 2*($pre*$recall)/($pre+$recall);
						 }else{
							 $f=0;
						 }
						?>
						<tr><td>F-score<div style="font-size:9px; color:#F00;"> A measure of a test's accuracy (best value at 1 and worst at 0)</div></td><td><?php echo $f; ?></td></tr>
					   <?php
						 $sqrt2_1=sqrt(($tp+$fp)*($tp+$fn)*($tn+$fp)*($tn+$fn));
						 
						 if($sqrt2_1==0){
							$MCC=0;
						  }else{	  
						  $MCC=(($tp*$tn)-($fp*$fn))/$sqrt2_1;
						}
						 ?>
						<tr><td width="77%;">MCC<div style="font-size:9px; color:#F00;"> A measure of the quality of (best value at 1 and worst at -1)</div></td><td><?php echo $MCC; ?></td></tr> 
					  </table>

					  
					  
					  <?php 
					  
						  $ssdeepPPTXTiffTP=$tp;
						  $ssdeepPPTXTiffTN=$tn;
						  $ssdeepPPTXTiffFP=$fp;
						  $ssdeepPPTXTiffFN=$fn;
						  $ssdeepPPTXTiffFPR=$fpr;
						  $ssdeepPPTXTiffFNR=$fnr;
						  $ssdeepPPTXTiffPRE=$pre;
						  $ssdeepPPTXTiffRECALL=$recall;
						  //$ssdeepPPTXTiffACC=$ssdeepPPTXTiffACC_0;
						  $ssdeepPPTXTiffFSCORE=$f;
						  $ssdeepPPTXTiffMCC=$MCC;			  
					  
					  
					  
					  ?>
				  
				  
				  
<?php ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// ?>				  
				  
				  
		 <?php
								  
								  //$rslt= exec('..\ExistingTools\\ssdeep -k '.$out1.' '.$out1.' >ssdeep_embeddedObject_singleCommonObject.text');  
								  $fldr1='..\Data\EmbeddedObjects\PPTX\GIF\Embedded_Files';	
								  $fldr2='..\Data\EmbeddedObjects\PPTX\GIF\Embedded_Files';
								  $PPTXFlIndx=22;
								  $imgIndx=11;
								  $rslt = file_get_contents('..\Final_Report_Fragment\ssdeepEmbeddedSingleCommonObjectPPTXgif.text', true);
									$sn=0;
									$tp=0;
									$tn=0;
									$fp=0;
									$fn=0;
									$sn=0;
									
									$t=(int)$_GET['threshold'];
									
									$rw="";
									 
									if($rslt==""){
										
										
										
									}else{
							  
								  $arr = explode("\n", $rslt);
								  
										
								  foreach ($arr as &$value) {
								
								  $arr1 = explode("\\", $value);
								  $arr1_size= count($arr1);
								  if($arr1_size>=$PPTXFlIndx-1){
								  
								  $arr2=explode(" ",$arr1[$imgIndx]);//here 7
								  $arr2_size=count($arr2);
								  if($arr2_size>=3){
									  $file_img=$arr2[0];
									  
								  }
								  
								  $arr3=explode(" ",$arr1[$PPTXFlIndx]);//here 16
								  $arr3_size=count($arr3)."******";
								  if($arr3_size>=2){
									  $target=$arr3[0];
									  $similarity=substr($arr3[1],1,-3);
								  } 
								  
								  }
									
									  
								$embddFll=$target;
								$imgFll=$file_img;
								
								 $embdFl_arr = explode("_", $embddFll);
								 $imgFl_arr = explode("_", $imgFll);
								 $embddFl=$embdFl_arr[0];
								 $imgFl=$imgFl_arr[0];	  
								 
								  if(strcmp($embddFl,$imgFl)==0){
											if($similarity>=$t){
												$tp++;									
											}else{
												//echo $embddFl."---".$imgFl."---".$similarity;
												$fn++;
											}
											
										}else{
											
										
											if($similarity>=$t){
												$fp++;
												
											}else{
												//echo $embddFl."---".$imgFl."---".$similarity;
												$tn++;
											}
											
										}
								
								
								fwrite($tmp_handle, $rw);
									  
								  }
									  
							  }
								  
							?>
						  
						 
					  
					 
			
					  
		<?php 
		$numOfTarget=0;
		$numOfFlWthImg=0;
		$fi1 = new FilesystemIterator($fldr1, FilesystemIterator::SKIP_DOTS);
		$numOfTarget=iterator_count($fi1);
		$fi2 = new FilesystemIterator($fldr2, FilesystemIterator::SKIP_DOTS);
		$numOfFlWthImg=iterator_count($fi2);
		$numOfComprsn=$numOfTarget*$numOfFlWthImg;

		///*
		$dir=$fldr1;			  
		$cdir = scandir($dir); 

		$dir2=$fldr2;
		$cdir2 = scandir($dir2); 
					  $simlarfl=0;
					  $dsimlarfl=0;
					  
		   foreach ($cdir as $key => $value) 
		   { 
			   $embdFl="";
			  if (!in_array($value,array(".",".."))) 
			  { 
				 if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) 
				 { 
					$embdFl=dirToArray($dir . DIRECTORY_SEPARATOR . $value); 
				 } 
				 else 
				 { 
					$embdFl=$value; 
				 } 
				  
				  
				  foreach($cdir2 as $key2 => $value2){
					  $imgFll="";
					if (!in_array($value2,array(".",".."))) 
					{ 
						 if (is_dir($dir2 . DIRECTORY_SEPARATOR . $value2)) 
						 { 
							$imgFll=dirToArray($dir2 . DIRECTORY_SEPARATOR . $value2); 
						 } 
						 else 
						 { 
							$imgFll=$value2; 
						 } 
					  
						
						$embdFl_arr = explode("_", $embdFl);
						$ln=count($embdFl_arr);
						$imgFl_arr = explode("_", $imgFll);
						$ln=count($embdFl_arr);
						//echo $embdFl_arr[0]."****".$imgFl_arr[0]."-----\n"; 
						if(strcmp($embdFl_arr[0],$imgFl_arr[0])==0	){
							//echo $embdFl_arr[$ln-1]."****".$imgFl_arr[0]."-----\n"; 
							$simlarfl++;
						}else{
							$dsimlarfl++;
						}
						
					  }
					  
				  }
				  
			  } 
			   
		   } 
					
					  //echo "Similar: ".$simlarfl." Desimilar: ".$dsimlarfl;

		?>
					  
					  
				 <table>
					  <tr style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center;"><td colspan="2">Scheme : ssdeep &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Embedded object: Gif &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Data Set: PPTX &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td></tr>
					  <tr><td>True Positive</td><td><?php echo $tp; ?></td></tr>
						   <?php 
						   if($tn<$dsimlarfl){
							   $tn=$dsimlarfl-$fp;
						   }
						   
						   ?>
						   
					  <tr><td>True Negative</td><td><?php echo $tn; ?></td></tr>
						   
					  <tr><td>False Positive</td><td><?php echo $fp; ?></td></tr>
					  <?php
						   if($tp<$simlarfl){
							   $fn=$simlarfl-$tp;
						   }
					   ?>
						   
					  <tr><td>False Negative</td><td><?php echo $fn; ?></td></tr>
					  <?php $fpr=$fp/$numOfComprsn; ?>
					  <tr><td>False positive rate (FPR)</td><td><?php echo $fpr; ?></td></tr>
					  <?php $fnr=$fn/$numOfComprsn; ?>
					  <tr><td>False negative rate (FNR)</td><td><?php echo $fnr; ?></td></tr>
					  
					  <?php 
					  if(($tp+$fp)!=0)	{
						$pre=$tp/($tp+$fp);
						}else{
							$pre=0;
						} 
					  ?>
					   <tr><td>Precision <div style="font-size:9px; color:#F00;">A perfect precision score of 1.0 means that every result retrieved by a search was relevant.</div></td><td><?php echo $pre; ?></td></tr>
					   <?php
					  if(($tp+$fn)!=0)	{
						$recall=$tp/($tp+$fn);	
						}else{
							$recall=0;
						} 
					   ?>
						<tr><td>Recall<div style="font-size:9px; color:#F00;">A perfect recall score of 1.0 means that all relevant documents were retrieved by the search.</div></td><td><?php echo $recall; ?></td></tr>
						<?php 
						 if(($pre+$recall)!=0){
							$f= 2*($pre*$recall)/($pre+$recall);
						 }else{
							 $f=0;
						 }
						?>
						<tr><td>F-score<div style="font-size:9px; color:#F00;"> A measure of a test's accuracy (best value at 1 and worst at 0)</div></td><td><?php echo $f; ?></td></tr>
					   <?php
						 $sqrt2_1=sqrt(($tp+$fp)*($tp+$fn)*($tn+$fp)*($tn+$fn));
						 
						 if($sqrt2_1==0){
							$MCC=0;
						  }else{	  
						  $MCC=(($tp*$tn)-($fp*$fn))/$sqrt2_1;
						}
						 ?>
						<tr><td width="77%;">MCC<div style="font-size:9px; color:#F00;"> A measure of the quality of (best value at 1 and worst at -1)</div></td><td><?php echo $MCC; ?></td></tr> 
					  </table>

					  
					  
					  <?php 
					  
						  $ssdeepPPTXGifTP=$tp;
						  $ssdeepPPTXGifTN=$tn;
						  $ssdeepPPTXGifFP=$fp;
						  $ssdeepPPTXGifFN=$fn;
						  $ssdeepPPTXGifFPR=$fpr;
						  $ssdeepPPTXGifFNR=$fnr;
						  $ssdeepPPTXGifPRE=$pre;
						  $ssdeepPPTXGifRECALL=$recall;
						  //$ssdeepPPTXGifACC=$ssdeepPPTXGifACC_0;
						  $ssdeepPPTXGifFSCORE=$f;
						  $ssdeepPPTXGifMCC=$MCC;			  
					  
					  
					  
					  ?>
              
              
              
              
				  

<?php ////////////////////////////////////////////////sdhash Jpeg//.//////////////////////////////////////////////////////////// ?>				  
				  

 
 <?php ////////////////////////////////////////////////sdhashPPTX Jpeg without images///////////////////////////////////////////////////////// ?>				  
				  
				  
				   <?php
						 $fldr1='..\Data\EmbeddedObjects\PPTX\JPEG\Embedded_Files';	
						 $fldr2=$fldr1;
						 // $rslt= exec('..\ExistingTools\\sdhash -c '.$out1.'.sdbf '.$out1.'.sdbf | sort >..\temp\sdhash_embeddedObjectSingleObject.text');
						  
						  $rslt = file_get_contents('..\Final_Report_Fragment\sdhashEmbeddedSingleCommonObjectPPTXjpeg.text', true);
						  $sn=0;
						  $tp=0;
						  $tn=0;
						  $fp=0;
						  $fn=0;
						  $sn=0;
							
							$t=(int)$_GET['threshold'];
					  		if($rslt==""){
								}else{
					  
						  $arr = explode("\n", $rslt);
						 
						  $cnt=0;
						 
						  
						  foreach ($arr as &$value) {
							  
							   if($value!=null){  ?>
                              
                          <?php
						  
						  $arr1 = explode("|", $value);
						  $cntr=0;
						  foreach ($arr1 as &$value1){
							   $arr2 = explode("\\", $value1);
							  $arr1_size=count($arr2);
							   if($cntr==0){
								  $embddFll=$arr2[$arr1_size-1];
							  }else if($cntr==1){
								  $imgFll=$arr2[$arr1_size-1];
							  }else if($cntr==2){
							  	  $similarity=$arr2[$arr1_size-1];
							  }
							  
							  $cntr++;
							  
						  }
						  $embdFl_arr = explode("_", $embddFll);
						  $imgFl_arr = explode("_", $imgFll);
								$embddFl=$embdFl_arr[0];
								$imgFl=$imgFl_arr[0];	  
								
						  
						  if(strcmp($embddFl,$imgFl)==0){
									if($similarity>=$t){
										$tp++;									
									}else{
										$fn++;
									}
									
								}else{
									if($similarity>=$t){
										$fp++;
										$clr=1;
									}else{
										$tn++;
									}
									
								}
						    
						  }
						 
					 } 
					  }
						  
		
   $numOfTarget=0;
   $numOfFlWthImg=0;
   $fi1 = new FilesystemIterator($fldr1, FilesystemIterator::SKIP_DOTS);
$numOfTarget=iterator_count($fi1);
$fi2 = new FilesystemIterator($fldr2, FilesystemIterator::SKIP_DOTS);
$numOfFlWthImg=iterator_count($fi2);
$numOfComprsn=$numOfTarget*$numOfFlWthImg;

$dir=$fldr1;			  
$cdir = scandir($dir); 

$dir2=$fldr2;			  
$cdir2 = scandir($dir2); 
			  $simlarfl=0;
			  $dsimlarfl=0;
			  
   foreach ($cdir as $key => $value) 
   { 
	   $embdFl="";
      if (!in_array($value,array(".",".."))) 
      { 
         if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) 
         { 
            $embdFl=dirToArray($dir . DIRECTORY_SEPARATOR . $value); 
         } 
         else 
         { 
            $embdFl=$value; 
         } 
		  
		  
		  foreach($cdir2 as $key2 => $value2){
			  $imgFll="";
			if (!in_array($value2,array(".",".."))) 
      		{ 
				 if (is_dir($dir2 . DIRECTORY_SEPARATOR . $value2)) 
				 { 
					$imgFll=dirToArray($dir2 . DIRECTORY_SEPARATOR . $value2); 
				 } 
				 else 
				 { 
					$imgFll=$value2; 
				 } 
				
				$embdFl_arr = explode("_", $embdFl);
				$ln=count($embdFl_arr);
				$imgFl_arr = explode("_", $imgFll);
				$ln=count($embdFl_arr);
				if(strcmp($embdFl_arr[0],$imgFl_arr[0])==0	){
					$simlarfl++;
				}else{
					$dsimlarfl++;
				}
				
			  }
			  
		  }
		  
      } 
	   
   } 
			  
?>
			  
			 <table>
              <tr style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center;"><td colspan="2">Scheme : sdhash &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Embedded object: Jpeg &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Data Set: PPTX &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td></tr>
              <tr><td>True Positive</td><td><?php echo $tp; ?></td></tr>
				   <?php 
				   if($tn<$dsimlarfl){
					   $tn=$dsimlarfl-$fp;
				   }
				   
				   ?>
				   
              <tr><td>True Negative</td><td><?php echo $tn; ?></td></tr>
				   <?php
				   
				   
				   ?>
				   
              <tr><td>False Positive</td><td><?php echo $fp; ?></td></tr>
              <?php
				   if($tp<$simlarfl){
					   $fn=$simlarfl-$tp;
				   }
				   
				   ?>
				   
				   <tr><td>False Negative</td><td><?php echo $fn; ?></td></tr>
				 <?php 
				 if($numOfComprsn!=0){
					 $fpr=$fp/$numOfComprsn;
					 $fnr=$fn/$numOfComprsn;
				 }else{
					 $fpr=0;
					 $fnr=0;
				 }
				 
				 ?>
				 
              <tr><td>False positive rate (FPR)</td><td><?php  echo $fpr; ?></td></tr>
              <tr><td>False negative rate (FNR)</td><td><?php echo $fnr; ?></td></tr>
              
               <?php 
			  if(($tp+$fp)!=0)	{
				$pre=$tp/($tp+$fp);
				}else{
					$pre=0;
				} 
			  
			  ?>
               <tr><td>Precision <div style="font-size:9px; color:#F00;">A perfect precision score of 1.0 means that every result retrieved by a search was relevant.</div></td><td><?php echo $pre; ?></td></tr>
               <?php
			  if(($tp+$fn)!=0)	{
				$recall=$tp/($tp+$fn);	
				}else{
					$recall=0;
				} 
			   ?>
                <tr><td>Recall<div style="font-size:9px; color:#F00;">A perfect recall score of 1.0 means that all relevant documents were retrieved by the search.</div></td><td><?php echo $recall; ?></td></tr>
                <?php 
				 if(($pre+$recall)!=0){
					$f= 2*($pre*$recall)/($pre+$recall);
				 }else{
					 $f=0;
				 }
				
				
				?>
                <tr><td>F-score<div style="font-size:9px; color:#F00;"> A measure of a test's accuracy (best value at 1 and worst at 0)</div></td><td><?php echo $f; ?></td></tr>
                 <?php
				 $sqrt2_1=sqrt(($tp+$fp)*($tp+$fn)*($tn+$fp)*($tn+$fn));
				 
				 if($sqrt2_1==0){
					$MCC=0;
				  }else{	  
				  $MCC=(($tp*$tn)-($fp*$fn))/$sqrt2_1;
				}
				 ?>
                <tr><td width="77%;">MCC<div style="font-size:9px; color:#F00;"> A measure of the quality of (best value at 1 and worst at -1)</div></td><td><?php echo $MCC; ?></td></tr> 
              
              </table>
              
              
              <?php 
			  	  $sdhashPPTXJpegTP=$tp;
				  $sdhashPPTXJpegTN=$tn;
				  $sdhashPPTXJpegFP=$fp;
				  $sdhashPPTXJpegFN=$fn;
				  $sdhashPPTXJpegFPR=$fpr;
				  $sdhashPPTXJpegFNR=$fnr;
				  $sdhashPPTXJpegPRE=$pre;
				  $sdhashPPTXJpegRECALL=$recall;
				  $sdhashPPTXJpegFSCORE=$f;
				  $sdhashPPTXJpegMCC=$MCC;
			  
				
			  
			  
			  ?>
              
              
              
			  
			
				

<?php ////////////////////////////////////////////////sdhash Bmp/////////////////////////////////////////////////////////////// ?>				  
				  

<?php
						 $fldr1='..\Data\EmbeddedObjects\PPTX\BMP\Embedded_Files';	
						 $fldr2=$fldr1;
						 // $rslt= exec('..\ExistingTools\\sdhash -c '.$out1.'.sdbf '.$out1.'.sdbf | sort >..\temp\sdhash_embeddedObjectSingleObject.text');
						  
						  $rslt = file_get_contents('..\Final_Report_Fragment\sdhashEmbeddedSingleCommonObjectPPTXbmp.text', true);
						  $sn=0;
						  $tp=0;
						  $tn=0;
						  $fp=0;
						  $fn=0;
						  $sn=0;
							
							$t=(int)$_GET['threshold'];
					  		if($rslt==""){
								}else{
					  
						  $arr = explode("\n", $rslt);
						 
						  $cnt=0;
						 
						  
						  foreach ($arr as &$value) {
							  
							   if($value!=null){  ?>
                              
                          <?php
						  
						  $arr1 = explode("|", $value);
						  $cntr=0;
						  foreach ($arr1 as &$value1){
							   $arr2 = explode("\\", $value1);
							  $arr1_size=count($arr2);
							   if($cntr==0){
								  $embddFll=$arr2[$arr1_size-1];
							  }else if($cntr==1){
								  $imgFll=$arr2[$arr1_size-1];
							  }else if($cntr==2){
							  	  $similarity=$arr2[$arr1_size-1];
							  }
							  
							  $cntr++;
							  
						  }
						  $embdFl_arr = explode("_", $embddFll);
						  $imgFl_arr = explode("_", $imgFll);
								$embddFl=$embdFl_arr[0];
								$imgFl=$imgFl_arr[0];	  
								
						  
						  if(strcmp($embddFl,$imgFl)==0){
									if($similarity>=$t){
										$tp++;									
									}else{
										$fn++;
									}
									
								}else{
									if($similarity>=$t){
										$fp++;
										$clr=1;
									}else{
										$tn++;
									}
									
								}
						    
						  }
						 
					 } 
					  }
						  
		
   $numOfTarget=0;
   $numOfFlWthImg=0;
   $fi1 = new FilesystemIterator($fldr1, FilesystemIterator::SKIP_DOTS);
$numOfTarget=iterator_count($fi1);
$fi2 = new FilesystemIterator($fldr2, FilesystemIterator::SKIP_DOTS);
$numOfFlWthImg=iterator_count($fi2);
$numOfComprsn=$numOfTarget*$numOfFlWthImg;

$dir=$fldr1;			  
$cdir = scandir($dir); 

$dir2=$fldr2;			  
$cdir2 = scandir($dir2); 
			  $simlarfl=0;
			  $dsimlarfl=0;
			  
   foreach ($cdir as $key => $value) 
   { 
	   $embdFl="";
      if (!in_array($value,array(".",".."))) 
      { 
         if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) 
         { 
            $embdFl=dirToArray($dir . DIRECTORY_SEPARATOR . $value); 
         } 
         else 
         { 
            $embdFl=$value; 
         } 
		  
		  
		  foreach($cdir2 as $key2 => $value2){
			  $imgFll="";
			if (!in_array($value2,array(".",".."))) 
      		{ 
				 if (is_dir($dir2 . DIRECTORY_SEPARATOR . $value2)) 
				 { 
					$imgFll=dirToArray($dir2 . DIRECTORY_SEPARATOR . $value2); 
				 } 
				 else 
				 { 
					$imgFll=$value2; 
				 } 
				
				$embdFl_arr = explode("_", $embdFl);
				$ln=count($embdFl_arr);
				$imgFl_arr = explode("_", $imgFll);
				$ln=count($embdFl_arr);
				if(strcmp($embdFl_arr[0],$imgFl_arr[0])==0	){
					$simlarfl++;
				}else{
					$dsimlarfl++;
				}
				
			  }
			  
		  }
		  
      } 
	   
   } 
			  
?>
			  
			 <table>
              <tr style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center;"><td colspan="2">Scheme : sdhash &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Embedded object: Bmp &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Data Set: PPTX &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td></tr>
              <tr><td>True Positive</td><td><?php echo $tp; ?></td></tr>
				   <?php 
				   if($tn<$dsimlarfl){
					   $tn=$dsimlarfl-$fp;
				   }
				   
				   ?>
				   
              <tr><td>True Negative</td><td><?php echo $tn; ?></td></tr>
				   <?php
				   
				   
				   ?>
				   
              <tr><td>False Positive</td><td><?php echo $fp; ?></td></tr>
              <?php
				   if($tp<$simlarfl){
					   $fn=$simlarfl-$tp;
				   }
				   
				   ?>
				   
				   <tr><td>False Negative</td><td><?php echo $fn; ?></td></tr>
				 <?php 
				 if($numOfComprsn!=0){
					 $fpr=$fp/$numOfComprsn;
					 $fnr=$fn/$numOfComprsn;
				 }else{
					 $fpr=0;
					 $fnr=0;
				 }
				 
				 ?>
				 
              <tr><td>False positive rate (FPR)</td><td><?php  echo $fpr; ?></td></tr>
              <tr><td>False negative rate (FNR)</td><td><?php echo $fnr; ?></td></tr>
              
               <?php 
			  if(($tp+$fp)!=0)	{
				$pre=$tp/($tp+$fp);
				}else{
					$pre=0;
				} 
			  
			  ?>
               <tr><td>Precision <div style="font-size:9px; color:#F00;">A perfect precision score of 1.0 means that every result retrieved by a search was relevant.</div></td><td><?php echo $pre; ?></td></tr>
               <?php
			  if(($tp+$fn)!=0)	{
				$recall=$tp/($tp+$fn);	
				}else{
					$recall=0;
				} 
			   ?>
                <tr><td>Recall<div style="font-size:9px; color:#F00;">A perfect recall score of 1.0 means that all relevant documents were retrieved by the search.</div></td><td><?php echo $recall; ?></td></tr>
                <?php 
				 if(($pre+$recall)!=0){
					$f= 2*($pre*$recall)/($pre+$recall);
				 }else{
					 $f=0;
				 }
				
				
				?>
                <tr><td>F-score<div style="font-size:9px; color:#F00;"> A measure of a test's accuracy (best value at 1 and worst at 0)</div></td><td><?php echo $f; ?></td></tr>
                 <?php
				 $sqrt2_1=sqrt(($tp+$fp)*($tp+$fn)*($tn+$fp)*($tn+$fn));
				 
				 if($sqrt2_1==0){
					$MCC=0;
				  }else{	  
				  $MCC=(($tp*$tn)-($fp*$fn))/$sqrt2_1;
				}
				 ?>
                <tr><td width="77%;">MCC<div style="font-size:9px; color:#F00;"> A measure of the quality of (best value at 1 and worst at -1)</div></td><td><?php echo $MCC; ?></td></tr> 
              
              </table>
              
              
              <?php 
			  	  $sdhashPPTXBmpTP=$tp;
				  $sdhashPPTXBmpTN=$tn;
				  $sdhashPPTXBmpFP=$fp;
				  $sdhashPPTXBmpFN=$fn;
				  $sdhashPPTXBmpFPR=$fpr;
				  $sdhashPPTXBmpFNR=$fnr;
				  $sdhashPPTXBmpPRE=$pre;
				  $sdhashPPTXBmpRECALL=$recall;
				  $sdhashPPTXBmpFSCORE=$f;
				  $sdhashPPTXBmpMCC=$MCC;
			  
				
			  
			  
			  ?>
              




             
								  
	
<?php ////////////////////////////////////////////////sdhashPPTX Gif/////////////////////////////////////////////////////////////// ?>				  
				  
				  
				<?php
							 $fldr1='..\Data\EmbeddedObjects\PPTX\TIFF\Embedded_Files';	
							 $fldr2=$fldr1;
							 // $rslt= exec('..\ExistingTools\\sdhash -c '.$out1.'.sdbf '.$out1.'.sdbf | sort >..\temp\sdhash_embeddedObjectSingleObject.text');
							  
							  $rslt = file_get_contents('..\Final_Report_Fragment\sdhashEmbeddedSingleCommonObjectPPTXtiff.text', true);
							  $sn=0;
							  $tp=0;
							  $tn=0;
							  $fp=0;
							  $fn=0;
							  $sn=0;
								
								$t=(int)$_GET['threshold'];
								if($rslt==""){
									}else{
						  
							  $arr = explode("\n", $rslt);
							 
							  $cnt=0;
							 
							  
							  foreach ($arr as &$value) {
								  
								   if($value!=null){  ?>
								  
							  <?php
							  
							  $arr1 = explode("|", $value);
							  $cntr=0;
							  foreach ($arr1 as &$value1){
								   $arr2 = explode("\\", $value1);
								  $arr1_size=count($arr2);
								   if($cntr==0){
									  $embddFll=$arr2[$arr1_size-1];
								  }else if($cntr==1){
									  $imgFll=$arr2[$arr1_size-1];
								  }else if($cntr==2){
									  $similarity=$arr2[$arr1_size-1];
								  }
								  
								  $cntr++;
								  
							  }
							  $embdFl_arr = explode("_", $embddFll);
							  $imgFl_arr = explode("_", $imgFll);
									$embddFl=$embdFl_arr[0];
									$imgFl=$imgFl_arr[0];	  
									
							  
							  if(strcmp($embddFl,$imgFl)==0){
										if($similarity>=$t){
											$tp++;									
										}else{
											$fn++;
										}
										
									}else{
										if($similarity>=$t){
											$fp++;
											$clr=1;
										}else{
											$tn++;
										}
										
									}
								
							  }
							 
						 } 
						  }
							  
			
	   $numOfTarget=0;
	   $numOfFlWthImg=0;
	   $fi1 = new FilesystemIterator($fldr1, FilesystemIterator::SKIP_DOTS);
	$numOfTarget=iterator_count($fi1);
	$fi2 = new FilesystemIterator($fldr2, FilesystemIterator::SKIP_DOTS);
	$numOfFlWthImg=iterator_count($fi2);
	$numOfComprsn=$numOfTarget*$numOfFlWthImg;

	$dir=$fldr1;			  
	$cdir = scandir($dir); 

	$dir2=$fldr2;			  
	$cdir2 = scandir($dir2); 
				  $simlarfl=0;
				  $dsimlarfl=0;
				  
	   foreach ($cdir as $key => $value) 
	   { 
		   $embdFl="";
		  if (!in_array($value,array(".",".."))) 
		  { 
			 if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) 
			 { 
				$embdFl=dirToArray($dir . DIRECTORY_SEPARATOR . $value); 
			 } 
			 else 
			 { 
				$embdFl=$value; 
			 } 
			  
			  
			  foreach($cdir2 as $key2 => $value2){
				  $imgFll="";
				if (!in_array($value2,array(".",".."))) 
				{ 
					 if (is_dir($dir2 . DIRECTORY_SEPARATOR . $value2)) 
					 { 
						$imgFll=dirToArray($dir2 . DIRECTORY_SEPARATOR . $value2); 
					 } 
					 else 
					 { 
						$imgFll=$value2; 
					 } 
					
					$embdFl_arr = explode("_", $embdFl);
					$ln=count($embdFl_arr);
					$imgFl_arr = explode("_", $imgFll);
					$ln=count($embdFl_arr);
					if(strcmp($embdFl_arr[0],$imgFl_arr[0])==0	){
						$simlarfl++;
					}else{
						$dsimlarfl++;
					}
					
				  }
				  
			  }
			  
		  } 
		   
	   } 
				  
	?>
				  
				 <table>
				  <tr style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center;"><td colspan="2">Scheme : sdhash &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Embedded object: Tiff &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Data Set: PPTX &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td></tr>
				  <tr><td>True Positive</td><td><?php echo $tp; ?></td></tr>
					   <?php 
					   if($tn<$dsimlarfl){
						   $tn=$dsimlarfl-$fp;
					   }
					   
					   ?>
					   
				  <tr><td>True Negative</td><td><?php echo $tn; ?></td></tr>
					   <?php
					   
					   
					   ?>
					   
				  <tr><td>False Positive</td><td><?php echo $fp; ?></td></tr>
				  <?php
					   if($tp<$simlarfl){
						   $fn=$simlarfl-$tp;
					   }
					   
					   ?>
					   
					   <tr><td>False Negative</td><td><?php echo $fn; ?></td></tr>
					 <?php 
					 if($numOfComprsn!=0){
						 $fpr=$fp/$numOfComprsn;
						 $fnr=$fn/$numOfComprsn;
					 }else{
						 $fpr=0;
						 $fnr=0;
					 }
					 
					 ?>
					 
				  <tr><td>False positive rate (FPR)</td><td><?php  echo $fpr; ?></td></tr>
				  <tr><td>False negative rate (FNR)</td><td><?php echo $fnr; ?></td></tr>
				  
				   <?php 
				  if(($tp+$fp)!=0)	{
					$pre=$tp/($tp+$fp);
					}else{
						$pre=0;
					} 
				  
				  ?>
				   <tr><td>Precision <div style="font-size:9px; color:#F00;">A perfect precision score of 1.0 means that every result retrieved by a search was relevant.</div></td><td><?php echo $pre; ?></td></tr>
				   <?php
				  if(($tp+$fn)!=0)	{
					$recall=$tp/($tp+$fn);	
					}else{
						$recall=0;
					} 
				   ?>
					<tr><td>Recall<div style="font-size:9px; color:#F00;">A perfect recall score of 1.0 means that all relevant documents were retrieved by the search.</div></td><td><?php echo $recall; ?></td></tr>
					<?php 
					 if(($pre+$recall)!=0){
						$f= 2*($pre*$recall)/($pre+$recall);
					 }else{
						 $f=0;
					 }
					
					
					?>
					<tr><td>F-score<div style="font-size:9px; color:#F00;"> A measure of a test's accuracy (best value at 1 and worst at 0)</div></td><td><?php echo $f; ?></td></tr>
					 <?php
					 $sqrt2_1=sqrt(($tp+$fp)*($tp+$fn)*($tn+$fp)*($tn+$fn));
					 
					 if($sqrt2_1==0){
						$MCC=0;
					  }else{	  
					  $MCC=(($tp*$tn)-($fp*$fn))/$sqrt2_1;
					}
					 ?>
					<tr><td width="77%;">MCC<div style="font-size:9px; color:#F00;"> A measure of the quality of (best value at 1 and worst at -1)</div></td><td><?php echo $MCC; ?></td></tr> 
				  
				  </table>
				  
				  
				  <?php 
					  $sdhashPPTXTiffTP=$tp;
					  $sdhashPPTXTiffTN=$tn;
					  $sdhashPPTXTiffFP=$fp;
					  $sdhashPPTXTiffFN=$fn;
					  $sdhashPPTXTiffFPR=$fpr;
					  $sdhashPPTXTiffFNR=$fnr;
					  $sdhashPPTXTiffPRE=$pre;
					  $sdhashPPTXTiffRECALL=$recall;
					  $sdhashPPTXTiffFSCORE=$f;
					  $sdhashPPTXTiffMCC=$MCC;
				  
					
				  
				  
				  ?>
				  
				  
				  
<?php ////////////////////////////////////////////////sdhash Tiff/////////////////////////////////////////////////////////////// ?>				  
				  
					<?php
							 $fldr1='..\Data\EmbeddedObjects\PPTX\GIF\Embedded_Files';	
							 $fldr2=$fldr1;
							 // $rslt= exec('..\ExistingTools\\sdhash -c '.$out1.'.sdbf '.$out1.'.sdbf | sort >..\temp\sdhash_embeddedObjectSingleObject.text');
							  
							  $rslt = file_get_contents('..\Final_Report_Fragment\sdhashEmbeddedSingleCommonObjectPPTXgif.text', true);
							  $sn=0;
							  $tp=0;
							  $tn=0;
							  $fp=0;
							  $fn=0;
							  $sn=0;
								
								$t=(int)$_GET['threshold'];
								if($rslt==""){
									}else{
						  
							  $arr = explode("\n", $rslt);
							 
							  $cnt=0;
							 
							  
							  foreach ($arr as &$value) {
								  
								   if($value!=null){  ?>
								  
							  <?php
							  
							  $arr1 = explode("|", $value);
							  $cntr=0;
							  foreach ($arr1 as &$value1){
								   $arr2 = explode("\\", $value1);
								  $arr1_size=count($arr2);
								   if($cntr==0){
									  $embddFll=$arr2[$arr1_size-1];
								  }else if($cntr==1){
									  $imgFll=$arr2[$arr1_size-1];
								  }else if($cntr==2){
									  $similarity=$arr2[$arr1_size-1];
								  }
								  
								  $cntr++;
								  
							  }
							  $embdFl_arr = explode("_", $embddFll);
							  $imgFl_arr = explode("_", $imgFll);
									$embddFl=$embdFl_arr[0];
									$imgFl=$imgFl_arr[0];	  
									
							  
							  if(strcmp($embddFl,$imgFl)==0){
										if($similarity>=$t){
											$tp++;									
										}else{
											$fn++;
										}
										
									}else{
										if($similarity>=$t){
											$fp++;
											$clr=1;
										}else{
											$tn++;
										}
										
									}
								
							  }
							 
						 } 
						  }
							  
			
	   $numOfTarget=0;
	   $numOfFlWthImg=0;
	   $fi1 = new FilesystemIterator($fldr1, FilesystemIterator::SKIP_DOTS);
	$numOfTarget=iterator_count($fi1);
	$fi2 = new FilesystemIterator($fldr2, FilesystemIterator::SKIP_DOTS);
	$numOfFlWthImg=iterator_count($fi2);
	$numOfComprsn=$numOfTarget*$numOfFlWthImg;

	$dir=$fldr1;			  
	$cdir = scandir($dir); 

	$dir2=$fldr2;			  
	$cdir2 = scandir($dir2); 
				  $simlarfl=0;
				  $dsimlarfl=0;
				  
	   foreach ($cdir as $key => $value) 
	   { 
		   $embdFl="";
		  if (!in_array($value,array(".",".."))) 
		  { 
			 if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) 
			 { 
				$embdFl=dirToArray($dir . DIRECTORY_SEPARATOR . $value); 
			 } 
			 else 
			 { 
				$embdFl=$value; 
			 } 
			  
			  
			  foreach($cdir2 as $key2 => $value2){
				  $imgFll="";
				if (!in_array($value2,array(".",".."))) 
				{ 
					 if (is_dir($dir2 . DIRECTORY_SEPARATOR . $value2)) 
					 { 
						$imgFll=dirToArray($dir2 . DIRECTORY_SEPARATOR . $value2); 
					 } 
					 else 
					 { 
						$imgFll=$value2; 
					 } 
					
					$embdFl_arr = explode("_", $embdFl);
					$ln=count($embdFl_arr);
					$imgFl_arr = explode("_", $imgFll);
					$ln=count($embdFl_arr);
					if(strcmp($embdFl_arr[0],$imgFl_arr[0])==0	){
						$simlarfl++;
					}else{
						$dsimlarfl++;
					}
					
				  }
				  
			  }
			  
		  } 
		   
	   } 
				  
	?>
				  
				 <table>
				  <tr style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center;"><td colspan="2">Scheme : sdhash &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Embedded object: Gif &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Data Set: PPTX &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td></tr>
				  <tr><td>True Positive</td><td><?php echo $tp; ?></td></tr>
					   <?php 
					   if($tn<$dsimlarfl){
						   $tn=$dsimlarfl-$fp;
					   }
					   
					   ?>
					   
				  <tr><td>True Negative</td><td><?php echo $tn; ?></td></tr>
					   <?php
					   
					   
					   ?>
					   
				  <tr><td>False Positive</td><td><?php echo $fp; ?></td></tr>
				  <?php
					   if($tp<$simlarfl){
						   $fn=$simlarfl-$tp;
					   }
					   
					   ?>
					   
					   <tr><td>False Negative</td><td><?php echo $fn; ?></td></tr>
					 <?php 
					 if($numOfComprsn!=0){
						 $fpr=$fp/$numOfComprsn;
						 $fnr=$fn/$numOfComprsn;
					 }else{
						 $fpr=0;
						 $fnr=0;
					 }
					 
					 ?>
					 
				  <tr><td>False positive rate (FPR)</td><td><?php  echo $fpr; ?></td></tr>
				  <tr><td>False negative rate (FNR)</td><td><?php echo $fnr; ?></td></tr>
				  
				   <?php 
				  if(($tp+$fp)!=0)	{
					$pre=$tp/($tp+$fp);
					}else{
						$pre=0;
					} 
				  
				  ?>
				   <tr><td>Precision <div style="font-size:9px; color:#F00;">A perfect precision score of 1.0 means that every result retrieved by a search was relevant.</div></td><td><?php echo $pre; ?></td></tr>
				   <?php
				  if(($tp+$fn)!=0)	{
					$recall=$tp/($tp+$fn);	
					}else{
						$recall=0;
					} 
				   ?>
					<tr><td>Recall<div style="font-size:9px; color:#F00;">A perfect recall score of 1.0 means that all relevant documents were retrieved by the search.</div></td><td><?php echo $recall; ?></td></tr>
					<?php 
					 if(($pre+$recall)!=0){
						$f= 2*($pre*$recall)/($pre+$recall);
					 }else{
						 $f=0;
					 }
					
					
					?>
					<tr><td>F-score<div style="font-size:9px; color:#F00;"> A measure of a test's accuracy (best value at 1 and worst at 0)</div></td><td><?php echo $f; ?></td></tr>
					 <?php
					 $sqrt2_1=sqrt(($tp+$fp)*($tp+$fn)*($tn+$fp)*($tn+$fn));
					 
					 if($sqrt2_1==0){
						$MCC=0;
					  }else{	  
					  $MCC=(($tp*$tn)-($fp*$fn))/$sqrt2_1;
					}
					 ?>
					<tr><td width="77%;">MCC<div style="font-size:9px; color:#F00;"> A measure of the quality of (best value at 1 and worst at -1)</div></td><td><?php echo $MCC; ?></td></tr> 
				  
				  </table>
				  
				  
				  <?php 
					  $sdhashPPTXGifTP=$tp;
					  $sdhashPPTXGifTN=$tn;
					  $sdhashPPTXGifFP=$fp;
					  $sdhashPPTXGifFN=$fn;
					  $sdhashPPTXGifFPR=$fpr;
					  $sdhashPPTXGifFNR=$fnr;
					  $sdhashPPTXGifPRE=$pre;
					  $sdhashPPTXGifRECALL=$recall;
					  $sdhashPPTXGifFSCORE=$f;
					  $sdhashPPTXGifMCC=$MCC;
				  
					
				  
				  
				  ?>
				  
                
				  
				  
				  
				  

<?php ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// ?>				  
				
                  
                  
                <table>  
                	  
                     <?php 
					 $ssdeepAvgPre=($ssdeepJpegPRE+$ssdeepBmpPRE+$ssdeepGifPRE+$ssdeepTiffPRE+$ssdeepJpegPRE) /4;
					 $sdhashAvgPre=($sdhashJpegPRE+$sdhashBmpPRE+$sdhashGifPRE+$sdhashTiffPRE+$sdhashJpegPRE) /4;
					 
					 
					 ?> 
                      
                      
					  <tr align="righ" ><td colspan="2" align="right"><input type="submit" align="middle" value=" Next " style="margin-left:50%" onClick="location.href = 'result_report_single_common_block_search_graph.php?ssdeepJpegFSCORE=<?php echo $ssdeepJpegFSCORE ?>&ssdeepBmpFSCORE=<?php echo $ssdeepBmpFSCORE ?>&ssdeepGifFSCORE=<?php echo $ssdeepGifFSCORE ?>&ssdeepTiffFSCORE=<?php echo $ssdeepTiffFSCORE ?>&sdhashJpegFSCORE=<?php echo $sdhashJpegFSCORE ?>&sdhashBmpFSCORE=<?php echo $sdhashBmpFSCORE ?>&sdhashGifFSCORE=<?php echo $sdhashGifFSCORE ?>&sdhashTiffFSCORE=<?php echo $sdhashTiffFSCORE ?>&ssdeepJpegMCC=<?php echo $ssdeepJpegMCC ?>&ssdeepBmpMCC=<?php echo $ssdeepBmpMCC ?>&ssdeepGifMCC=<?php echo $ssdeepGifMCC ?>&ssdeepTiffMCC=<?php echo $ssdeepTiffMCC ?>&sdhashJpegMCC=<?php echo $sdhashJpegMCC ?>&sdhashBmpMCC=<?php echo $sdhashBmpMCC ?>&sdhashGifMCC=<?php echo $sdhashGifMCC ?>&sdhashTiffMCC=<?php echo $sdhashTiffMCC ?>&ssdeepJpegACC=<?php echo $ssdeepJpegACC ?>&ssdeepBmpACC=<?php echo $ssdeepBmpACC ?>&ssdeepGifACC=<?php echo $ssdeepGifACC ?>&ssdeepTiffACC=<?php echo $ssdeepTiffACC ?>&sdhashJpegACC=<?php echo $sdhashJpegACC ?>&sdhashBmpACC=<?php echo $sdhashBmpACC ?>&sdhashGifACC=<?php echo $sdhashGifACC ?>&sdhashTiffACC=<?php echo $sdhashTiffACC ?>&ssdeepPPTXJpegFSCORE=<?php echo $ssdeepPPTXJpegFSCORE ?>&ssdeepPPTXBmpFSCORE=<?php echo $ssdeepPPTXBmpFSCORE ?>&ssdeepPPTXGifFSCORE=<?php echo $ssdeepPPTXGifFSCORE ?>&ssdeepPPTXTiffFSCORE=<?php echo $ssdeepPPTXTiffFSCORE ?>&sdhashPPTXJpegFSCORE=<?php echo $sdhashPPTXJpegFSCORE ?>&sdhashPPTXBmpFSCORE=<?php echo $sdhashPPTXBmpFSCORE ?>&sdhashPPTXGifFSCORE=<?php echo $sdhashPPTXGifFSCORE ?>&sdhashPPTXTiffFSCORE=<?php echo $sdhashPPTXTiffFSCORE ?>&ssdeepPPTXJpegMCC=<?php echo $ssdeepPPTXJpegMCC ?>&ssdeepPPTXBmpMCC=<?php echo $ssdeepPPTXBmpMCC ?>&ssdeepPPTXGifMCC=<?php echo $ssdeepPPTXGifMCC ?>&ssdeepPPTXTiffMCC=<?php echo $ssdeepPPTXTiffMCC ?>&sdhashPPTXJpegMCC=<?php echo $sdhashPPTXJpegMCC ?>&sdhashPPTXBmpMCC=<?php echo $sdhashPPTXBmpMCC ?>&sdhashPPTXGifMCC=<?php echo $sdhashPPTXGifMCC ?>&sdhashPPTXTiffMCC=<?php echo $sdhashPPTXTiffMCC ?>&ssdeepPPTXJpegACC=<?php echo $ssdeepPPTXJpegACC ?>&ssdeepPPTXBmpACC=<?php echo $ssdeepPPTXBmpACC ?>&ssdeepPPTXGifACC=<?php echo $ssdeepPPTXGifACC ?>&ssdeepPPTXTiffACC=<?php echo $ssdeepPPTXTiffACC ?>&sdhashPPTXJpegACC=<?php echo $sdhashPPTXJpegACC ?>&sdhashPPTXBmpACC=<?php echo $sdhashPPTXBmpACC ?>&sdhashPPTXGifACC=<?php echo $sdhashPPTXGifACC ?>&sdhashPPTXTiffACC=<?php echo $sdhashPPTXTiffACC ?>&numOfJpegDocx=<?php echo $numOfJpegDocx ?>&numOfBmpDocx=<?php echo $numOfBmpDocx ?>&numOfGifDocx=<?php echo $numOfGifDocx ?>&numOfTiffDocx=<?php echo $numOfTiffDocx ?>&numOfJpegDocxWithOutImg=<?php echo $numOfJpegDocxWithOutImg ?>&numOfBmpDocxWithOutImg=<?php echo $numOfBmpDocxWithOutImg ?>&numOfGifDocxWithOutImg=<?php echo $numOfGifDocxWithOutImg ?>&numOfTiffDocxWithOutImg=<?php echo $numOfTiffDocxWithOutImg ?>&numOfJpeg=<?php echo $numOfJpeg ?>&numOfBmp=<?php echo $numOfBmp ?>&numOfGif=<?php echo $numOfGif ?>&numOfTiff=<?php echo $numOfTiff ?>&ssdeepAvgPre=<?php echo $ssdeepAvgPre ?>&sdhashAvgPre=<?php echo $sdhashAvgPre ?>&ssdeepJpegPRE=<?php echo $ssdeepJpegPRE ?>&ssdeepBmpPRE=<?php echo $ssdeepBmpPRE ?>&ssdeepGifPRE=<?php echo $ssdeepGifPRE ?>&ssdeepTiffPRE=<?php echo $ssdeepTiffPRE ?>&sdhashJpegPRE=<?php echo $sdhashJpegPRE ?>&sdhashBmpPRE=<?php echo $sdhashBmpPRE ?>&sdhashGifPRE=<?php echo $sdhashGifPRE ?>&sdhashTiffPRE=<?php echo $sdhashTiffPRE ?>&ssdeepJpegRECALL=<?php echo $ssdeepJpegRECALL ?>&ssdeepBmpRECALL=<?php echo $ssdeepBmpRECALL ?>&ssdeepGifRECALL=<?php echo $ssdeepGifRECALL ?>&ssdeepTiffRECALL=<?php echo $ssdeepTiffRECALL ?>&sdhashJpegRECALL=<?php echo $sdhashJpegRECALL ?>&sdhashBmpRECALL=<?php echo $sdhashBmpRECALL ?>&sdhashGifRECALL=<?php echo $sdhashGifRECALL ?>&sdhashTiffRECALL=<?php echo $sdhashTiffRECALL ?>&ssdeepPPTXJpegPRE=<?php echo $ssdeepPPTXJpegPRE ?>&ssdeepPPTXBmpPRE=<?php echo $ssdeepPPTXBmpPRE ?>&ssdeepPPTXGifPRE=<?php echo $ssdeepPPTXGifPRE ?>&ssdeepPPTXTiffPRE=<?php echo $ssdeepPPTXTiffPRE ?>&sdhashPPTXJpegPRE=<?php echo $sdhashPPTXJpegPRE ?>&sdhashPPTXBmpPRE=<?php echo $sdhashPPTXBmpPRE ?>&sdhashPPTXGifPRE=<?php echo $sdhashPPTXGifPRE ?>&sdhashPPTXTiffPRE=<?php echo $sdhashPPTXTiffPRE ?>&ssdeepPPTXJpegRECALL=<?php echo $ssdeepPPTXJpegRECALL ?>&ssdeepPPTXBmpRECALL=<?php echo $ssdeepPPTXBmpRECALL ?>&ssdeepPPTXGifRECALL=<?php echo $ssdeepPPTXGifRECALL ?>&ssdeepPPTXTiffRECALL=<?php echo $ssdeepPPTXTiffRECALL ?>&sdhashPPTXJpegRECALL=<?php echo $sdhashPPTXJpegRECALL ?>&sdhashPPTXBmpRECALL=<?php echo $sdhashPPTXBmpRECALL ?>&sdhashPPTXGifRECALL=<?php echo $sdhashPPTXGifRECALL ?>&sdhashPPTXTiffRECALL=<?php echo $sdhashPPTXTiffRECALL ?>';"  ></td></tr>
					  
                      
					  
				  </table>                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
			  
			  </form>
			  
			  
			  
        	  
			  <div id="columnchart_material" style="width: 600px; height: 300px;"></div>
			  
			  
			  
			  
                  
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
