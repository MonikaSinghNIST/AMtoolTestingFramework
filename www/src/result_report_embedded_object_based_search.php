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
    	    <div id="breadcrumb"><div id="breadcrumb">Embedded Object Identification ➤ <a href="evaluateEmbeddedObject.php">Test Cases</a> ➤ Embedded Object Detection  ➤ <a href="result_report_embedded_object_based_search.php?threshold=22">Comparative Assessment</a></div> </div> 
			 <div id="" style="font-family: Arial, 'Century Gothic'; background-color: #0e375d;color:white; text-align: center;align-content: center;align-items: center;font-size: 18px; height: 30px;text-align:left; vertical-align: middle;padding-top: 10px;padding-left: 10px;"> Embedded Object Detection Test </div> 
 <?php /////////////////////////////////////////////////////////////////////////////////////////////////// ?>
              
              
              <?php
              $fldr1='..\Data\EmbeddedObjects\Docx\JPEG\Embedded_Files';	
  			  $fldr2='..\Data\EmbeddedObjects\Docx\JPEG\Embedded_Objects';
			  $docxFlIndx=22;
			  $imgIndx=11;
			  $rslt = file_get_contents('..\Final_Report_Fragment\ssdeepEmbeddedObjectDOCXjpeg.text', true);
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
							$sn=0;
							
						  foreach ($arr as &$value) {
							  $rw="";
							  $sn++;
						  
						  if(strlen($value)==0){
						  	continue;
						  }
						  $arr1 = explode(" matches ", $value);
						  $arr1_size= count($arr1);
						  
						   $dcmnt1 = explode("\\", $arr1[0]);
						   $file_img= $dcmnt1[count($dcmnt1)-1];
						   
						   $dcmnt2 = explode("\\", $arr1[1]);
						   $dcmnt2_tmp = explode(" ",$dcmnt2[count($dcmnt2)-1]);
						   $target=$dcmnt2_tmp[0];
						   $similarity=substr($dcmnt2_tmp[1],1,-3);
							  
							
					  $rw=$rw.$sn.";".$target.";".$file_img.";".round($similarity,2).PHP_EOL;
						$embddFll=$target;
						$imgFll=$file_img;
						$embdFl_arr = explode("_", $embddFll);
					  	$imgFl_arr = explode(".", $imgFll);
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
									}else{
										$tn++;
									}
									
								}
						
						
						//fwrite($tmp_handle, $rw);
						
							  
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
				$imgFl_arr = explode(".", $imgFll);
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
              <?php if($numOfComprsn>0){ $fpr=$fp/$numOfComprsn; }else{ $fpr="0";}?>
              <tr><td>False positive rate (FPR)</td><td><?php echo $fpr; ?></td></tr>
              <?php if($numOfComprsn>0){ $fnr=$fn/$numOfComprsn; }else{ $fnr="0";} ?>
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
				 // $ssdeepJpegACC=($ssdeepJpegACC_0+$ssdeepJpegACC_1)/2;
				  $ssdeepJpegFSCORE=$f;
				  $ssdeepJpegMCC=$MCC;			  
			  
			  
			  
			  ?>
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
             
              
              
                      
                      
       
					 
					 <?php /////////////////////////////////////////////////////////////////////////////////////////////////// ?>
              
              
              <?php
              $fldr1='..\Data\EmbeddedObjects\Docx\BMP\Embedded_Files';	
  			  $fldr2='..\Data\EmbeddedObjects\Docx\BMP\Embedded_Objects';
			  $docxFlIndx=22;
			  $imgIndx=11;
			  $rslt = file_get_contents('..\Final_Report_Fragment\ssdeepEmbeddedObjectDOCXbmp.text', true);
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
							$sn=0;
							
						  foreach ($arr as &$value) {
							  $rw="";
							  $sn++;
						  
						  if(strlen($value)==0){
						  	continue;
						  }
						  $arr1 = explode(" matches ", $value);
						  $arr1_size= count($arr1);
						  
						   $dcmnt1 = explode("\\", $arr1[0]);
						   $file_img= $dcmnt1[count($dcmnt1)-1];
						   
						   $dcmnt2 = explode("\\", $arr1[1]);
						   $dcmnt2_tmp = explode(" ",$dcmnt2[count($dcmnt2)-1]);
						   $target=$dcmnt2_tmp[0];
						   $similarity=substr($dcmnt2_tmp[1],1,-3);
							  
							
					  $rw=$rw.$sn.";".$target.";".$file_img.";".round($similarity,2).PHP_EOL;
						$embddFll=$target;
						$imgFll=$file_img;
						$embdFl_arr = explode("_", $embddFll);
					  	$imgFl_arr = explode(".", $imgFll);
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
									}else{
										$tn++;
									}
									
								}
						
						
						//fwrite($tmp_handle, $rw);
						
							  
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
				$imgFl_arr = explode(".", $imgFll);
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
              <?php if($numOfComprsn>0){ $fpr=$fp/$numOfComprsn; }else{ $fpr="0";}?>
              <tr><td>False positive rate (FPR)</td><td><?php echo $fpr; ?></td></tr>
              <?php if($numOfComprsn>0){ $fnr=$fn/$numOfComprsn; }else{ $fnr="0";} ?>
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
				 // $ssdeepBmpACC=($ssdeepBmpACC_0+$ssdeepBmpACC_1)/2;
				  $ssdeepBmpFSCORE=$f;
				  $ssdeepBmpMCC=$MCC;			  
			  
			  
			  
			  ?>

					 
					 
              
              
              
              
              <?php /////////////////////////////////////////////////////////////////////////////////////?>

					 
					 <?php /////////////////////////////////////////////////////////////////////////////////////////////////// ?>
              
              
              <?php
              $fldr1='..\Data\EmbeddedObjects\Docx\TIFF\Embedded_Files';	
  			  $fldr2='..\Data\EmbeddedObjects\Docx\TIFF\Embedded_Objects';
			  $docxFlIndx=22;
			  $imgIndx=11;
			  $rslt = file_get_contents('..\Final_Report_Fragment\ssdeepEmbeddedObjectDOCXtiff.text', true);
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
							$sn=0;
							
						  foreach ($arr as &$value) {
							  $rw="";
							  $sn++;
						  
						  if(strlen($value)==0){
						  	continue;
						  }
						  $arr1 = explode(" matches ", $value);
						  $arr1_size= count($arr1);
						  
						   $dcmnt1 = explode("\\", $arr1[0]);
						   $file_img= $dcmnt1[count($dcmnt1)-1];
						   
						   $dcmnt2 = explode("\\", $arr1[1]);
						   $dcmnt2_tmp = explode(" ",$dcmnt2[count($dcmnt2)-1]);
						   $target=$dcmnt2_tmp[0];
						   $similarity=substr($dcmnt2_tmp[1],1,-3);
							  
							
					  $rw=$rw.$sn.";".$target.";".$file_img.";".round($similarity,2).PHP_EOL;
						$embddFll=$target;
						$imgFll=$file_img;
						$embdFl_arr = explode("_", $embddFll);
					  	$imgFl_arr = explode(".", $imgFll);
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
									}else{
										$tn++;
									}
									
								}
						
						
						//fwrite($tmp_handle, $rw);
						
							  
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
				$imgFl_arr = explode(".", $imgFll);
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
              <?php if($numOfComprsn>0){ $fpr=$fp/$numOfComprsn; }else{ $fpr="0";}?>
              <tr><td>False positive rate (FPR)</td><td><?php echo $fpr; ?></td></tr>
              <?php if($numOfComprsn>0){ $fnr=$fn/$numOfComprsn; }else{ $fnr="0";} ?>
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
				 // $ssdeepTiffACC=($ssdeepTiffACC_0+$ssdeepTiffACC_1)/2;
				  $ssdeepTiffFSCORE=$f;
				  $ssdeepTiffMCC=$MCC;			  
			  
			  
			  
			  ?>
                  
				  
<?php ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////?>

					 
					 <?php /////////////////////////////////////////////////////////////////////////////////////////////////// ?>
              
              
              <?php
              $fldr1='..\Data\EmbeddedObjects\Docx\GIF\Embedded_Files';	
  			  $fldr2='..\Data\EmbeddedObjects\Docx\GIF\Embedded_Objects';
			  $docxFlIndx=22;
			  $imgIndx=11;
			  $rslt = file_get_contents('..\Final_Report_Fragment\ssdeepEmbeddedObjectDOCXgif.text', true);
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
							$sn=0;
							
						  foreach ($arr as &$value) {
							  $rw="";
							  $sn++;
						  
						  if(strlen($value)==0){
						  	continue;
						  }
						  $arr1 = explode(" matches ", $value);
						  $arr1_size= count($arr1);
						  
						   $dcmnt1 = explode("\\", $arr1[0]);
						   $file_img= $dcmnt1[count($dcmnt1)-1];
						   
						   $dcmnt2 = explode("\\", $arr1[1]);
						   $dcmnt2_tmp = explode(" ",$dcmnt2[count($dcmnt2)-1]);
						   $target=$dcmnt2_tmp[0];
						   $similarity=substr($dcmnt2_tmp[1],1,-3);
							  
							
					  $rw=$rw.$sn.";".$target.";".$file_img.";".round($similarity,2).PHP_EOL;
						$embddFll=$target;
						$imgFll=$file_img;
						$embdFl_arr = explode("_", $embddFll);
					  	$imgFl_arr = explode(".", $imgFll);
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
									}else{
										$tn++;
									}
									
								}
						
						
						//fwrite($tmp_handle, $rw);
						
							  
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
				$imgFl_arr = explode(".", $imgFll);
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
              <?php if($numOfComprsn>0){ $fpr=$fp/$numOfComprsn; }else{ $fpr="0";}?>
              <tr><td>False positive rate (FPR)</td><td><?php echo $fpr; ?></td></tr>
              <?php if($numOfComprsn>0){ $fnr=$fn/$numOfComprsn; }else{ $fnr="0";} ?>
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
				 // $ssdeepGifACC=($ssdeepGifACC_0+$ssdeepGifACC_1)/2;
				  $ssdeepGifFSCORE=$f;
				  $ssdeepGifMCC=$MCC;			  
			  
			  
			  
			  ?>
                  
				  
				  
				  
<?php /////////////////////////////////////////////////////////////////////////////////////////////////////////// ?>
				  
				  
<?php ////////////////////////////////////////////////sdhash//////////////////////////////////////////////////////////////////// ?>

				  <?php
						  
						  $rslt=0;
						 //echo exec('sdhash ..\Data\EmbeddedObjects\Docx\JPEG\Embedded_Files\*.docx -o result_embedded_jpeg_docx1');
						 //echo exec('sdhash ..\Data\EmbeddedObjects\Docx\JPEG\Embedded_Objects\*.jpg -o img_result_embedded_jpeg_docx2');
						  //$rslt= exec('sdhash -c result_embedded_jpeg_docx1.sdbf img_result_embedded_jpeg_docx2.sdbf | sort >final_sdhash_img1.text');
						  
						  $rslt = file_get_contents('..\Final_Report_Fragment\sdhashEmbeddedObjectDOCXjpeg.text', true);
						  $sn=0;
						  $tp=0;
						  $tn=0;
						  $fp=0;
						  $fn=0;
						  $sn=0;
				  		  $rw="";
							
							$t=(int)$_GET['threshold'];
					  		if($rslt==""){	
							}else{
					  
						  $arr = explode("\n", $rslt);
						  
						  //echo count($arr);
						  
						  foreach ($arr as &$value) {
							  
							  ?>
                               <?php $sn++; ?>
                            <?php if($value!=null){  ?>
                            <!--<tr>-->
                            
                            <!--<td><?php //echo $sn; ?></td>-->
                              
                          <?php
						  
						  $arr1 = explode("|", $value);
						  $cntr=0;
						  foreach ($arr1 as &$value1){
							  //echo $value1."----------";
							  
							  
							   $arr2 = explode("\\", $value1);
							  $arr1_size=count($arr2);
							  
							  ?>
                              <!--<td><?php //echo $arr2[$arr1_size-1]; ?></td>-->
                              <?php if($cntr==0){
								  $embddFll=$arr2[$arr1_size-1];
							  }else if($cntr==1){
								  $imgFll=$arr2[$arr1_size-1];
							  }else if($cntr==2){
							  	  $similarity=$arr2[$arr1_size-1];
							  }
							  
							  $cntr++;
							  ?>
                              
                              
                              <?php
							  
							  
							  
						  }
						  $embdFl_arr = explode("_", $embddFll);
						  $imgFl_arr = explode(".", $imgFll);
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
						  
						  }
						  
						  
						  ?>
                          <!--</tr>-->
				  
				  <?php 
					  	$rw=$rw.$sn.";".$embddFll.";".$imgFll.";".$similarity.PHP_EOL;
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
$fi2 = new FilesystemIterator("..\Data\EmbeddedObjects\Docx\JPEG\Embedded_Objects", FilesystemIterator::SKIP_DOTS);
$numOfFlWthImg=iterator_count($fi2);
$numOfComprsn=$numOfTarget*$numOfFlWthImg;

//echo $numOfComprsn;
///*
$dir="..\Data\EmbeddedObjects\Docx\JPEG\Embedded_Files";			  
$cdir = scandir($dir); 

$dir2="..\Data\EmbeddedObjects\Docx\JPEG\Embedded_Objects";			  
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
				$imgFl_arr = explode(".", $imgFll);
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
			  

			  
			  $sdhashJpegTP_0=$tp;
			 
			  if($tn<$dsimlarfl){
					   $tn=$dsimlarfl;
				   }
			  $sdhashJpegTN_0=$tn;
			  
			  $sdhashJpegFP_0=$fp;
			   if($tp<$simlarfl){
					   $fn=$simlarfl-$tp;
				   }
			  $sdhashJpegFN_0=$fn;
			  $sdhashJpegFPR_0=$fp/$numOfComprsn;
			  $sdhashJpegFNR_0=$fn/$numOfComprsn;
			   
			  if(($tp+$fp)!=0)	{
				$pre=$tp/($tp+$fp);
				}else{
					$pre=0;
				} 
			  $sdhashJpegPRE_0=$pre;
			  
			   
			  if(($tp+$fn)!=0)	{
				$recall=$tp/($tp+$fn);	
				}else{
					$recall=0;
				} 
			  $sdhashJpegRECALL_0=$recall;
			  if(($pre+$recall)!=0){
					$f= 2*($pre*$recall)/($pre+$recall);
				 }else{
					 $f=0;
				 }
			  
			  $sdhashJpegFSCORE_0=$f;
			  $sqrt1=sqrt(($sdhashJpegTP_0+$sdhashJpegFP_0)*($sdhashJpegTP_0+$sdhashJpegFN_0)*($sdhashJpegTN_0+$sdhashJpegFP_0)*($sdhashJpegTN_0+$sdhashJpegFN_0));
			  
			  $sdhashJpegACC_0=($sdhashJpegTP_0+$sdhashJpegTN_0)/($sdhashJpegTP_0+$sdhashJpegTN_0+$sdhashJpegFP_0+$sdhashJpegFN_0);  
				  
			if($sqrt1==0){
				$sdhashJpegMCC_0=0;
				}else{ 	  
				  
			  $sdhashJpegMCC_0=(($sdhashJpegTP_0*$sdhashJpegTN_0)-($sdhashJpegFP_0*$sdhashJpegFN_0))/$sqrt1;
			  
				}
			  
			  
				  $sdhashJpegTP=($sdhashJpegTP_0);
				  $sdhashJpegTN=($sdhashJpegTN_0);
				  $sdhashJpegFP=($sdhashJpegFP_0);
				  $sdhashJpegFN=($sdhashJpegFN_0);
				  $sdhashJpegFPR=($sdhashJpegFPR_0);
				  $sdhashJpegFNR=($sdhashJpegFNR_0);
				  $sdhashJpegPRE=($sdhashJpegPRE_0);
				  $sdhashJpegRECALL=($sdhashJpegRECALL_0);
				  $sdhashJpegACC=($sdhashJpegACC_0);
				  $sdhashJpegFSCORE=($sdhashJpegFSCORE_0);
				  $sdhashJpegMCC=($sdhashJpegMCC_0);			  
			  
			  
			  
			  ?>

              
              
              
			  
			 <table>
              <tr style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center;"><td colspan="2">Scheme : sdhash &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Embedded object: Jpeg &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Data Set: DOCX &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
              <tr><td>True Positive</td><td><?php echo $sdhashJpegTP; ?></td></tr>
			  <tr><td>True Negative</td><td><?php echo $sdhashJpegTN; ?></td></tr>
			  <tr><td>False Positive</td><td><?php echo $sdhashJpegFP; ?></td></tr>
              <tr><td>False Negative</td><td><?php echo $sdhashJpegFN; ?></td></tr>
              <tr><td width="77%;">False positive rate (FPR)</td><td><?php  echo $sdhashJpegFPR; ?></td></tr>
              <tr><td width="77%;">False negative rate (FNR)</td><td><?php echo $sdhashJpegFNR; ?></td></tr>
              <tr><td width="77%;">Precision <div style="font-size:9px; color:#F00;">A perfect precision score of 1.0 means that every result retrieved by a search was relevant.</div></td><td><?php echo $sdhashJpegPRE; ?></td></tr>
              <tr><td width="77%;">Recall<div style="font-size:9px; color:#F00;">A perfect recall score of 1.0 means that all relevant documents were retrieved by the search.</div></td><td><?php echo $sdhashJpegRECALL; ?></td></tr>
              <tr><td width="77%;">Accuracy<div style="font-size:9px; color:#F00;"> A measure of a test's accuracy (best value at 1 and worst at 0)</div></td><td><?php echo $sdhashJpegACC; ?></td></tr>
				   
			<tr><td width="77%;">F-score<div style="font-size:9px; color:#F00;"> The weighted average of Precision and Recall (best value at 1 and worst at 0)</div></td><td><?php echo $sdhashJpegFSCORE; ?></td></tr>
				   
				<tr><td width="77%;">MCC<div style="font-size:9px; color:#F00;"> A measure of the quality of (best value at 1 and worst at -1)</div></td><td><?php echo $sdhashJpegMCC; ?></td></tr>
              
              </table>
				  
				

<?php ////////////////////////////////////////////////sdhash Bmp/////////////////////////////////////////////////////////////// ?>				  
				  
				  
				  <?php
						  //echo exec('ssdeep -r ..\Data\Docx');
						  $rslt=0;
						 // echo exec('sdhash ..\Data\EmbeddedObjects\Docx\BMP\Embedded_Files\*.docx -o result_embedded_BMP_docx1');
						 //echo exec('sdhash ..\Data\EmbeddedObjects\Docx\BMP\Embedded_Objects\*.bmp -o img_result_embedded_BMP_docx2');
						  
						  //$rslt= exec('sdhash -c result_embedded_BMP_docx1.sdbf img_result_embedded_BMP_docx2.sdbf | sort >final_sdhash_img2.text');
						  
						  $rslt = file_get_contents('..\Final_Report_Fragment\sdhashEmbeddedObjectDOCXbmp.text', true);
						  $sn=0;
						  $tp=0;
						  $tn=0;
						  $fp=0;
						  $fn=0;
						  $sn=0;
				  		  $rw="";
							
							$t=(int)$_GET['threshold'];
					  		if($rslt==""){
								
							}else{
					  
						  $arr = explode("\n", $rslt);
						  
						  //echo count($arr);
						  
						  foreach ($arr as &$value) {
							  
							  ?>
                               <?php $sn++; ?>
                            <?php if($value!=null){  ?>
                            <!--<tr>-->
                            
                            <!--<td><?php //echo $sn; ?></td>-->
                              
                          <?php
						  
						  $arr1 = explode("|", $value);
						  $cntr=0;
						  foreach ($arr1 as &$value1){
							  //echo $value1."----------";
							  
							  
							   $arr2 = explode("\\", $value1);
							  $arr1_size=count($arr2);
							  
							  ?>
                              <!--<td><?php //echo $arr2[$arr1_size-1]; ?></td>-->
                              <?php if($cntr==0){
								  $embddFll=$arr2[$arr1_size-1];
							  }else if($cntr==1){
								  $imgFll=$arr2[$arr1_size-1];
							  }else if($cntr==2){
							  	  $similarity=$arr2[$arr1_size-1];
							  }
							  
							  $cntr++;
							  ?>
                              
                              
                              <?php
							  
							  
							  
						  }
						  $embdFl_arr = explode("_", $embddFll);
						  $imgFl_arr = explode(".", $imgFll);
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
						  
						  }
						  
						  
						  ?>
                          <!--</tr>-->
				  
				  <?php 
					  	$rw=$rw.$sn.";".$embddFll.";".$imgFll.";".$similarity.PHP_EOL;
					  ?>
				  
					  <?php } ?>
					  <?php
							  
					  }
						  
						  ?>
				  
				  
				  <?php 
   // $dir = opendir('uploads/'); # This is the directory it will count from
   $numOfTarget=0;
   $numOfFlWthImg=0;
   $fi1 = new FilesystemIterator("..\Data\EmbeddedObjects\Docx\BMP\Embedded_Files", FilesystemIterator::SKIP_DOTS);
$numOfTarget=iterator_count($fi1);
$fi2 = new FilesystemIterator("..\Data\EmbeddedObjects\Docx\BMP\Embedded_Objects", FilesystemIterator::SKIP_DOTS);
$numOfFlWthImg=iterator_count($fi2);
$numOfComprsn=$numOfTarget*$numOfFlWthImg;

//echo $numOfComprsn;
///*
$dir="..\Data\EmbeddedObjects\Docx\BMP\Embedded_Files";			  
$cdir = scandir($dir); 

$dir2="..\Data\EmbeddedObjects\Docx\BMP\Embedded_Objects";			  
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
				$imgFl_arr = explode(".", $imgFll);
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
			  

			  
			  $sdhashBmpTP_0=$tp;
			 
			  if($tn<$dsimlarfl){
					   $tn=$dsimlarfl;
				   }
			  $sdhashBmpTN_0=$tn;
			  
			  $sdhashBmpFP_0=$fp;
			   if($tp<$simlarfl){
					   $fn=$simlarfl-$tp;
				   }
			  $sdhashBmpFN_0=$fn;
			  $sdhashBmpFPR_0=$fp/$numOfComprsn;
			  $sdhashBmpFNR_0=$fn/$numOfComprsn;
			   
			  if(($tp+$fp)!=0)	{
				$pre=$tp/($tp+$fp);
				}else{
					$pre=0;
				} 
			  $sdhashBmpPRE_0=$pre;
			  
			   
			  if(($tp+$fn)!=0)	{
				$recall=$tp/($tp+$fn);	
				}else{
					$recall=0;
				} 
			  $sdhashBmpRECALL_0=$recall;
			  if(($pre+$recall)!=0){
					$f= 2*($pre*$recall)/($pre+$recall);
				 }else{
					 $f=0;
				 }
			  
			  $sdhashBmpFSCORE_0=$f;
			  $sqrt1=sqrt(($sdhashBmpTP_0+$sdhashBmpFP_0)*($sdhashBmpTP_0+$sdhashBmpFN_0)*($sdhashBmpTN_0+$sdhashBmpFP_0)*($sdhashBmpTN_0+$sdhashBmpFN_0));
			  
			   $sdhashBmpACC_0=($sdhashBmpTP_0+$sdhashBmpTN_0)/($sdhashBmpTP_0+$sdhashBmpTN_0+$sdhashBmpFP_0+$sdhashBmpFN_0);  
				  
			if($sqrt1==0){
				$sdhashBmpMCC_0=0;
				}else{ 	  
				  
			  $sdhashBmpMCC_0=(($sdhashBmpTP_0*$sdhashBmpTN_0)-($sdhashBmpFP_0*$sdhashBmpFN_0))/$sqrt1;
			  
				}
			  ?>
              
              

              
               <?php 
			  
				  $sdhashBmpTP=($sdhashBmpTP_0);
				  $sdhashBmpTN=($sdhashBmpTN_0);
				  $sdhashBmpFP=($sdhashBmpFP_0);
				  $sdhashBmpFN=($sdhashBmpFN_0);
				  $sdhashBmpFPR=($sdhashBmpFPR_0);
				  $sdhashBmpFNR=($sdhashBmpFNR_0);
				  $sdhashBmpPRE=($sdhashBmpPRE_0);
				  $sdhashBmpRECALL=($sdhashBmpRECALL_0);
				  $sdhashBmpACC=($sdhashBmpACC_0);
				  $sdhashBmpFSCORE=($sdhashBmpFSCORE_0);
				  $sdhashBmpMCC=($sdhashBmpMCC_0);			  
			  
			  
			  
			  ?>
              
              
              
              
              
              
              
              
			  
			 <table>
              <tr style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center;">
                <td colspan="2">Scheme : sdhash &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Embedded object: Bmp &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Data Set: DOCX &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
             <tr><td>True Positive</td><td><?php echo $sdhashBmpTP; ?></td></tr>
			 <tr><td>True Negative</td><td><?php echo $sdhashBmpTN; ?></td></tr>
			 <tr><td>False Positive</td><td><?php echo $sdhashBmpFP; ?></td></tr>
             <tr><td width="77%;">False Negative</td><td><?php echo $sdhashBmpFN; ?></td></tr>
              <tr><td width="77%;">False positive rate (FPR)</td><td><?php  echo $sdhashBmpFPR; ?></td></tr>
              <tr><td width="77%;">False negative rate (FNR)</td><td><?php echo $sdhashBmpFNR; ?></td></tr>
              <tr><td width="77%;">Precision <div style="font-size:9px; color:#F00;">A perfect precision score of 1.0 means that every result retrieved by a search was relevant.</div></td><td><?php echo $sdhashBmpPRE; ?></td></tr>
              <tr><td width="77%;">Recall<div style="font-size:9px; color:#F00;">A perfect recall score of 1.0 means that all relevant documents were retrieved by the search.</div></td><td><?php echo $sdhashBmpRECALL; ?></td></tr>
              <tr><td width="77%;">Accuracy<div style="font-size:9px; color:#F00;"> A measure of a test's accuracy (best value at 1 and worst at 0)</div></td><td><?php echo $sdhashBmpACC; ?></td></tr>
				   
			<tr><td width="77%;">F-score<div style="font-size:9px; color:#F00;"> The weighted average of Precision and Recall (best value at 1 and worst at 0)</div></td><td><?php echo $sdhashBmpFSCORE; ?></td></tr>
				   
				<tr><td width="77%;">MCC<div style="font-size:9px; color:#F00;"> A measure of the quality of (best value at 1 and worst at -1)</div></td><td><?php echo $sdhashBmpMCC; ?></td></tr>
              
              </table>
				  
                  
                  
                  
<?php ////////////////////////////////////////////////sdhash Tiff/////////////////////////////////////////////////////////////// ?>				  
				  
				  
				  <?php
						  //echo exec('ssdeep -r ..\Data\Docx');
						  $rslt=0;
						 // echo exec('sdhash ..\Data\EmbeddedObjects\Docx\TIFF\Embedded_Files\*.docx -o result_embedded_TIFF_docx1');
						 //echo exec('sdhash ..\Data\EmbeddedObjects\Docx\TIFF\Embedded_Objects\*.tif -o img_result_embedded_TIFF_docx2');
						 //$rslt= exec('sdhash -c result_embedded_TIFF_docx1.sdbf img_result_embedded_TIFF_docx2.sdbf | sort >final_sdhash_img4.text');
						  
						  $rslt = file_get_contents('..\Final_Report_Fragment\sdhashEmbeddedObjectDOCXtiff.text', true);
						  $sn=0;
						  $tp=0;
						  $tn=0;
						  $fp=0;
						  $fn=0;
						  $sn=0;
				  		  $rw="";
							
							$t=(int)$_GET['threshold'];
					  		if($rslt==""){
								
							}else{
					  
						  $arr = explode("\n", $rslt);
						  
						  //echo count($arr);
						  
						  foreach ($arr as &$value) {
							  
							  ?>
                               <?php $sn++; ?>
                            <?php if($value!=null){  ?>
                            <!--<tr>-->
                            
                            <!--<td><?php //echo $sn; ?></td>-->
                              
                          <?php
						  
						  $arr1 = explode("|", $value);
						  $cntr=0;
						  foreach ($arr1 as &$value1){
							  //echo $value1."----------";
							  
							  
							   $arr2 = explode("\\", $value1);
							  $arr1_size=count($arr2);
							  
							  ?>
                              <!--<td><?php //echo $arr2[$arr1_size-1]; ?></td>-->
                              <?php if($cntr==0){
								  $embddFll=$arr2[$arr1_size-1];
							  }else if($cntr==1){
								  $imgFll=$arr2[$arr1_size-1];
							  }else if($cntr==2){
							  	  $similarity=$arr2[$arr1_size-1];
							  }
							  
							  $cntr++;
							  ?>
                              
                              
                              <?php
							  
							  
							  
						  }
						  $embdFl_arr = explode("_", $embddFll);
						  $imgFl_arr = explode(".", $imgFll);
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
						  
						  }
						  
						  
						  ?>
                          <!--</tr>-->
				  
				  <?php 
					  	$rw=$rw.$sn.";".$embddFll.";".$imgFll.";".$similarity.PHP_EOL;
					  ?>
				  
					  <?php } ?>
					  <?php
							  
					  }
						  
						  ?>
				  
				  
				  <?php 
   // $dir = opendir('uploads/'); # This is the directory it will count from
   $numOfTarget=0;
   $numOfFlWthImg=0;
   $fi1 = new FilesystemIterator("..\Data\EmbeddedObjects\Docx\TIFF\Embedded_Files", FilesystemIterator::SKIP_DOTS);
$numOfTarget=iterator_count($fi1);
$fi2 = new FilesystemIterator("..\Data\EmbeddedObjects\Docx\TIFF\Embedded_Objects", FilesystemIterator::SKIP_DOTS);
$numOfFlWthImg=iterator_count($fi2);
$numOfComprsn=$numOfTarget*$numOfFlWthImg;

//echo $numOfComprsn;
///*
$dir="..\Data\EmbeddedObjects\Docx\TIFF\Embedded_Files";			  
$cdir = scandir($dir); 

$dir2="..\Data\EmbeddedObjects\Docx\TIFF\Embedded_Objects";			  
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
				$imgFl_arr = explode(".", $imgFll);
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
			  
			

?>
              
				  
				  <?php
			  
			  $sdhashTiffTP_0=$tp;
			 
			  if($tn<$dsimlarfl){
					   $tn=$dsimlarfl;
				   }
			  $sdhashTiffTN_0=$tn;
			  
			  $sdhashTiffFP_0=$fp;
			   if($tp<$simlarfl){
					   $fn=$simlarfl-$tp;
				   }
			  $sdhashTiffFN_0=$fn;
			  $sdhashTiffFPR_0=$fp/$numOfComprsn;
			  $sdhashTiffFNR_0=$fn/$numOfComprsn;
			   
			  if(($tp+$fp)!=0)	{
				$pre=$tp/($tp+$fp);
				}else{
					$pre=0;
				} 
			  $sdhashTiffPRE_0=$pre;
			  
			   
			  if(($tp+$fn)!=0)	{
				$recall=$tp/($tp+$fn);	
				}else{
					$recall=0;
				} 
			  $sdhashTiffRECALL_0=$recall;
			  if(($pre+$recall)!=0){
					$f= 2*($pre*$recall)/($pre+$recall);
				 }else{
					 $f=0;
				 }
			  
			  $sdhashTiffFSCORE_0=$f;
			  $sqrt1=sqrt(($sdhashTiffTP_0+$sdhashTiffFP_0)*($sdhashTiffTP_0+$sdhashTiffFN_0)*($sdhashTiffTN_0+$sdhashTiffFP_0)*($sdhashTiffTN_0+$sdhashTiffFN_0));
			  
			   $sdhashTiffACC_0=($sdhashTiffTP_0+$sdhashTiffTN_0)/($sdhashTiffTP_0+$sdhashTiffTN_0+$sdhashTiffFP_0+$sdhashTiffFN_0);  
				  
			  if($sqrt1==0){
				$sdhashTiffMCC_0=0;
				}else{ 
			  
			  $sdhashTiffMCC_0=(($sdhashTiffTP_0*$sdhashTiffTN_0)-($sdhashTiffFP_0*$sdhashTiffFN_0))/$sqrt1;
			  
				}
			  
			  ?>
              
              
 
              
              
               <?php 
			  
				  $sdhashTiffTP=($sdhashTiffTP_0);
				  $sdhashTiffTN=($sdhashTiffTN_0);
				  $sdhashTiffFP=($sdhashTiffFP_0);
				  $sdhashTiffFN=($sdhashTiffFN_0);
				  $sdhashTiffFPR=($sdhashTiffFPR_0);
				  $sdhashTiffFNR=($sdhashTiffFNR_0);
				  $sdhashTiffPRE=($sdhashTiffPRE_0);
				  $sdhashTiffRECALL=($sdhashTiffRECALL_0);
				  $sdhashTiffACC=($sdhashTiffACC_0);
				  $sdhashTiffFSCORE=($sdhashTiffFSCORE_0);
				  $sdhashTiffMCC=($sdhashTiffMCC_0);			  
			  
			  
			  
			  ?>              
              
              
              
              
              
              
              
              
              
              
              
			  
			 <table>
              <tr style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center;">
                <td colspan="2">Scheme : sdhash &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Embedded object: Tiff &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Data Set: DOCX &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
              <tr><td>True Positive</td><td><?php echo $sdhashTiffTP; ?></td></tr>
			  <tr><td>True Negative</td><td><?php echo $sdhashTiffTN; ?></td></tr>
			  <tr><td>False Positive</td><td><?php echo $sdhashTiffFP; ?></td></tr>
              <tr><td width="77%;">False Negative</td><td><?php echo $sdhashTiffFN; ?></td></tr>
              <tr><td width="77%;">False positive rate (FPR)</td><td><?php  echo $sdhashTiffFPR; ?></td></tr>
              <tr><td width="77%;">False negative rate (FNR)</td><td><?php echo $sdhashTiffFNR; ?></td></tr>
              <tr><td width="77%;">Precision <div style="font-size:9px; color:#F00;">A perfect precision score of 1.0 means that every result retrieved by a search was relevant.</div></td><td><?php echo $sdhashTiffPRE; ?></td></tr>
              <tr><td width="77%;">Recall<div style="font-size:9px; color:#F00;">A perfect recall score of 1.0 means that all relevant documents were retrieved by the search.</div></td><td><?php echo $sdhashTiffRECALL; ?></td></tr>
              <tr><td width="77%;">Accuracy<div style="font-size:9px; color:#F00;"> A measure of a test's accuracy (best value at 1 and worst at 0)</div></td><td><?php echo $sdhashTiffACC; ?></td></tr>
				   
			<tr><td width="77%;">F-score<div style="font-size:9px; color:#F00;"> The weighted average of Precision and Recall (best value at 1 and worst at 0)</div></td><td><?php echo $sdhashTiffFSCORE; ?></td></tr>
				   
				<tr><td width="77%;">MCC<div style="font-size:9px; color:#F00;"> A measure of the quality of (best value at 1 and worst at -1)</div></td><td><?php echo $sdhashTiffMCC; ?></td></tr>
              
              </table>						  

				                    
                  
                  
                  
                  
								  
	
<?php ////////////////////////////////////////////////sdhash Gif/////////////////////////////////////////////////////////////// ?>				  
				  
				  
				  <?php
						  //echo exec('ssdeep -r ..\Data\Docx');
						  $rslt=0;
						 // echo exec('sdhash ..\Data\EmbeddedObjects\Docx\GIF\Embedded_Files\*.docx -o result_embedded_GIF_docx1');
						 //echo exec('sdhash ..\Data\EmbeddedObjects\Docx\GIF\Embedded_Objects\*.GIF -o img_result_embedded_GIF_docx2');
						 //$rslt= exec('sdhash -c result_embedded_GIF_docx1.sdbf img_result_embedded_GIF_docx2.sdbf | sort >final_sdhash_img3.text');
						  
						  $rslt = file_get_contents('..\Final_Report_Fragment\sdhashEmbeddedObjectDOCXgif.text', true);
						  $sn=0;
						  $tp=0;
						  $tn=0;
						  $fp=0;
						  $fn=0;
						  $sn=0;
				  		  $rw="";
							
							$t=(int)$_GET['threshold'];
					  		if($rslt==""){
								
							}else{
					  
						  $arr = explode("\n", $rslt);
						  
						  //echo count($arr);
						  
						  foreach ($arr as &$value) {
							  
							  ?>
                               <?php $sn++; ?>
                            <?php if($value!=null){  ?>
                            <!--<tr>-->
                            
                            <!--<td><?php //echo $sn; ?></td>-->
                              
                          <?php
						  
						  $arr1 = explode("|", $value);
						  $cntr=0;
						  foreach ($arr1 as &$value1){
							  //echo $value1."----------";
							  
							  
							   $arr2 = explode("\\", $value1);
							  $arr1_size=count($arr2);
							  
							  ?>
                              <!--<td><?php //echo $arr2[$arr1_size-1]; ?></td>-->
                              <?php if($cntr==0){
								  $embddFll=$arr2[$arr1_size-1];
							  }else if($cntr==1){
								  $imgFll=$arr2[$arr1_size-1];
							  }else if($cntr==2){
							  	  $similarity=$arr2[$arr1_size-1];
							  }
							  
							  $cntr++;
							  ?>
                              
                              
                              <?php
							  
							  
							  
						  }
						  $embdFl_arr = explode("_", $embddFll);
						  $imgFl_arr = explode(".", $imgFll);
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
						  
						  }
						  
						  
						  ?>
                          <!--</tr>-->
				  
				  <?php 
					  	$rw=$rw.$sn.";".$embddFll.";".$imgFll.";".$similarity.PHP_EOL;
					  ?>
				  
					  <?php } ?>
					  <?php
							  
					  }
						  
						  ?>
				  
				  
				  <?php 
   // $dir = opendir('uploads/'); # This is the directory it will count from
   $numOfTarget=0;
   $numOfFlWthImg=0;
   $fi1 = new FilesystemIterator("..\Data\EmbeddedObjects\Docx\GIF\Embedded_Files", FilesystemIterator::SKIP_DOTS);
$numOfTarget=iterator_count($fi1);
$fi2 = new FilesystemIterator("..\Data\EmbeddedObjects\Docx\GIF\Embedded_Objects", FilesystemIterator::SKIP_DOTS);
$numOfFlWthImg=iterator_count($fi2);
$numOfComprsn=$numOfTarget*$numOfFlWthImg;

//echo $numOfComprsn;
///*
$dir="..\Data\EmbeddedObjects\Docx\GIF\Embedded_Files";			  
$cdir = scandir($dir); 

$dir2="..\Data\EmbeddedObjects\Docx\GIF\Embedded_Objects";			  
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
				$imgFl_arr = explode(".", $imgFll);
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
			  

			  
			  $sdhashGifTP_0=$tp;
			 
			  if($tn<$dsimlarfl){
					   $tn=$dsimlarfl;
				   }
			  $sdhashGifTN_0=$tn;
			  
			  $sdhashGifFP_0=$fp;
			   if($tp<$simlarfl){
					   $fn=$simlarfl-$tp;
				   }
			  $sdhashGifFN_0=$fn;
			  $sdhashGifFPR_0=$fp/$numOfComprsn;
			  $sdhashGifFNR_0=$fn/$numOfComprsn;
			   
			  if(($tp+$fp)!=0)	{
				$pre=$tp/($tp+$fp);
				}else{
					$pre=0;
				} 
			  $sdhashGifPRE_0=$pre;
			  
			   
			  if(($tp+$fn)!=0)	{
				$recall=$tp/($tp+$fn);	
				}else{
					$recall=0;
				} 
			  $sdhashGifRECALL_0=$recall;
			  if(($pre+$recall)!=0){
					$f= 2*($pre*$recall)/($pre+$recall);
				 }else{
					 $f=0;
				 }
			  
			  $sdhashGifFSCORE_0=$f;
			  $sqrt1=sqrt(($sdhashGifTP_0+$sdhashGifFP_0)*($sdhashGifTP_0+$sdhashGifFN_0)*($sdhashGifTN_0+$sdhashGifFP_0)*($sdhashGifTN_0+$sdhashGifFN_0));
			  
			   $sdhashGifACC_0=($sdhashGifTP_0+$sdhashGifTN_0)/($sdhashGifTP_0+$sdhashGifTN_0+$sdhashGifFP_0+$sdhashGifFN_0);  
			   
			   
			   /*
				 $sqrt2_1=sqrt(($tp+$fp)*($tp+$fn)*($tn+$fp)*($tn+$fn));
				 
				 if($sqrt2_1==0){
					$MCC=0;
				  }else{	  
				  $MCC=(($tp*$tn)-($fp*$fn))/$sqrt2_1;
				}*/
				 
			  if($sqrt1==0){
				$sdhashGifMCC_0=0;
				}else{  
				  
			  $sdhashGifMCC_0=(($sdhashGifTP_0*$sdhashGifTN_0)-($sdhashGifFP_0*$sdhashGifFN_0))/$sqrt1;
			  
				}
			  ?>
              
              
 
              
              
               <?php 
			  
				  $sdhashGifTP=($sdhashGifTP_0);
				  $sdhashGifTN=($sdhashGifTN_0);
				  $sdhashGifFP=($sdhashGifFP_0);
				  $sdhashGifFN=($sdhashGifFN_0);
				  $sdhashGifFPR=($sdhashGifFPR_0);
				  $sdhashGifFNR=($sdhashGifFNR_0);
				  $sdhashGifPRE=($sdhashGifPRE_0);
				  $sdhashGifRECALL=($sdhashGifRECALL_0);
				  $sdhashGifACC=($sdhashGifACC_0);
				  $sdhashGifFSCORE=($sdhashGifFSCORE_0);
				  $sdhashGifMCC=($sdhashGifMCC_0);			  
			  
			  
			  
			  ?>
                            
              
              
			  
			 <table>
              <tr style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center;">
                <td colspan="2">Scheme : sdhash &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Embedded object: Gif &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Data Set: DOCX &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
              <tr><td>True Positive</td><td><?php echo $sdhashGifTP; ?></td></tr>
			  <tr><td>True Negative</td><td><?php echo $sdhashGifTN; ?></td></tr>
			  <tr><td>False Positive</td><td><?php echo $sdhashGifFP; ?></td></tr>
              <tr><td width="77%;">False Negative</td><td><?php echo $sdhashGifFN; ?></td></tr>
              <tr><td width="77%;">False positive rate (FPR)</td><td><?php  echo $sdhashGifFPR; ?></td></tr>
              <tr><td width="77%;">False negative rate (FNR)</td><td><?php echo $sdhashGifFNR; ?></td></tr>
              <tr><td width="77%;">Precision <div style="font-size:9px; color:#F00;">A perfect precision score of 1.0 means that every result retrieved by a search was relevant.</div></td><td><?php echo $sdhashGifPRE; ?></td></tr>
              <tr><td width="77%;">Recall<div style="font-size:9px; color:#F00;">A perfect recall score of 1.0 means that all relevant documents were retrieved by the search.</div></td><td><?php echo $sdhashGifRECALL; ?></td></tr>
              <tr><td width="77%;">Accuracy<div style="font-size:9px; color:#F00;"> A measure of a test's accuracy (best value at 1 and worst at 0)</div></td><td><?php echo $sdhashGifACC; ?></td></tr>
				   
			<tr><td width="77%;">F-score<div style="font-size:9px; color:#F00;"> The weighted average of Precision and Recall (best value at 1 and worst at 0)</div></td><td><?php echo $sdhashGifFSCORE; ?></td></tr>
				   
				<tr><td width="77%;">MCC<div style="font-size:9px; color:#F00;"> A measure of the quality of (best value at 1 and worst at -1)</div></td><td><?php echo $sdhashGifMCC; ?></td></tr>
              
              </table>			  
				  
				  

				  
				  
				  
				  

<?php ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// ?>				  
				  
				  
				  
				  
				  
				  
				  
                  
                  
                  
                  
                  
                <table>  
                	  
                     <?php 
					 $ssdeepAvgPre=($ssdeepJpegPRE+$ssdeepBmpPRE+$ssdeepGifPRE+$ssdeepTiffPRE+$ssdeepJpegPRE) /4;
					 $sdhashAvgPre=($sdhashJpegPRE+$sdhashBmpPRE+$sdhashGifPRE+$sdhashTiffPRE+$sdhashJpegPRE) /4;
					 
					 
					 ?> 
                      
                      
					 <!-- /*<tr align="righ" ><td colspan="2" align="right"><input type="submit" align="middle" value="submit"  onClick="location.href = 'result_report_embedded_object_based_search_graph.php?ssdeepJpegFSCORE=<?php echo $ssdeepJpegFSCORE ?>&ssdeepBmpFSCORE=<?php echo $ssdeepBmpFSCORE ?>&ssdeepGifFSCORE=<?php echo $ssdeepGifFSCORE ?>&ssdeepTiffFSCORE=<?php echo $ssdeepTiffFSCORE ?>&sdhashJpegFSCORE=<?php echo $sdhashJpegFSCORE ?>&sdhashBmpFSCORE=<?php echo $sdhashBmpFSCORE ?>&sdhashGifFSCORE=<?php echo $sdhashGifFSCORE ?>&sdhashTiffFSCORE=<?php echo $sdhashTiffFSCORE ?>&ssdeepJpegMCC=<?php echo $ssdeepJpegMCC ?>&ssdeepBmpMCC=<?php echo $ssdeepBmpMCC ?>&ssdeepGifMCC=<?php echo $ssdeepGifMCC ?>&ssdeepTiffMCC=<?php echo $ssdeepTiffMCC ?>&sdhashJpegMCC=<?php echo $sdhashJpegMCC ?>&sdhashBmpMCC=<?php echo $sdhashBmpMCC ?>&sdhashGifMCC=<?php echo $sdhashGifMCC ?>&sdhashTiffMCC=<?php echo $sdhashTiffMCC ?>--&ssdeepJpegACC=<?php echo $ssdeepJpegACC ?>&ssdeepBmpACC=<?php echo $ssdeepBmpACC ?>&ssdeepGifACC=<?php echo $ssdeepGifACC ?>&ssdeepTiffACC=<?php echo $ssdeepTiffACC ?>&sdhashJpegACC=<?php echo $sdhashJpegACC ?>&sdhashBmpACC=<?php echo $sdhashBmpACC ?>&sdhashGifACC=<?php echo $sdhashGifACC ?>&sdhashTiffACC=<?php echo $sdhashTiffACC ?>&numOfJpegDocx=<?php echo $numOfJpegDocx ?>&numOfBmpDocx=<?php echo $numOfBmpDocx ?>&numOfGifDocx=<?php echo $numOfGifDocx ?>&numOfTiffDocx=<?php echo $numOfTiffDocx ?>&numOfJpegDocxWithOutImg=<?php echo $numOfJpegDocxWithOutImg ?>&numOfBmpDocxWithOutImg=<?php echo $numOfBmpDocxWithOutImg ?>&numOfGifDocxWithOutImg=<?php echo $numOfGifDocxWithOutImg ?>&numOfTiffDocxWithOutImg=<?php echo $numOfTiffDocxWithOutImg ?>&numOfJpeg=<?php echo $numOfJpeg ?>&numOfBmp=<?php echo $numOfBmp ?>&numOfGif=<?php echo $numOfGif ?>&numOfTiff=<?php echo $numOfTiff ?>&ssdeepAvgPre=<?php echo $ssdeepAvgPre ?>&sdhashAvgPre=<?php echo $sdhashAvgPre ?>';"  ></td></tr>*/-->
					  
                      
					  
				  </table>
				  
                  
                  
                  
<?php ////////////////////////////**************PPTX***************//////////////////////////////////////?>
                  
                  
  <?php
              $fldr1='..\Data\EmbeddedObjects\PPTX\JPEG\Embedded_Files';	
  			  $fldr2='..\Data\EmbeddedObjects\PPTX\JPEG\Embedded_Objects';
			  $PPTXFlIndx=22;
			  $imgIndx=11;
			  $rslt = file_get_contents('..\Final_Report_Fragment\ssdeepEmbeddedObjectPPTXjpeg.text', true);
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
							$sn=0;
							
						  foreach ($arr as &$value) {
							  $rw="";
							  $sn++;
						  
						  if(strlen($value)==0){
						  	continue;
						  }
						  $arr1 = explode(" matches ", $value);
						  $arr1_size= count($arr1);
						  
						   $dcmnt1 = explode("\\", $arr1[0]);
						   $file_img= $dcmnt1[count($dcmnt1)-1];
						   
						   $dcmnt2 = explode("\\", $arr1[1]);
						   $dcmnt2_tmp = explode(" ",$dcmnt2[count($dcmnt2)-1]);
						   $target=$dcmnt2_tmp[0];
						   $similarity=substr($dcmnt2_tmp[1],1,-3);
							  
							
					  $rw=$rw.$sn.";".$target.";".$file_img.";".round($similarity,2).PHP_EOL;
						$embddFll=$target;
						$imgFll=$file_img;
						$embdFl_arr = explode("_", $embddFll);
					  	$imgFl_arr = explode(".", $imgFll);
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
									}else{
										$tn++;
									}
									
								}
						
						
						//fwrite($tmp_handle, $rw);
						
							  
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
				$imgFl_arr = explode(".", $imgFll);
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
              <?php if($numOfComprsn>0){ $fpr=$fp/$numOfComprsn; }else{ $fpr="0";}?>
              <tr><td>False positive rate (FPR)</td><td><?php echo $fpr; ?></td></tr>
              <?php if($numOfComprsn>0){ $fnr=$fn/$numOfComprsn; }else{ $fnr="0";} ?>
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
				 // $ssdeepPPTXJpegACC=($ssdeepJpegACC_0+$ssdeepJpegACC_1)/2;
				  $ssdeepPPTXJpegFSCORE=$f;
				  $ssdeepPPTXJpegMCC=$MCC;			  
			  
			  
			  
			  ?>
				  
				  
				  
				  
				  
				  
				  
				  
           
                      
                     
              
             <?php
              $fldr1='..\Data\EmbeddedObjects\PPTX\BMP\Embedded_Files';	
  			  $fldr2='..\Data\EmbeddedObjects\PPTX\BMP\Embedded_Objects';
			  $PPTXFlIndx=22;
			  $imgIndx=11;
			  $rslt = file_get_contents('..\Final_Report_Fragment\ssdeepEmbeddedObjectPPTXbmp.text', true);
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
							$sn=0;
							
						  foreach ($arr as &$value) {
							  $rw="";
							  $sn++;
						  
						 if(strlen($value)==0){
						  	continue;
						  }
						  $arr1 = explode(" matches ", $value);
						  $arr1_size= count($arr1);
						  
						   $dcmnt1 = explode("\\", $arr1[0]);
						   $file_img= $dcmnt1[count($dcmnt1)-1];
						   
						   $dcmnt2 = explode("\\", $arr1[1]);
						   $dcmnt2_tmp = explode(" ",$dcmnt2[count($dcmnt2)-1]);
						   $target=$dcmnt2_tmp[0];
						   $similarity=substr($dcmnt2_tmp[1],1,-3);
							  
							
					  $rw=$rw.$sn.";".$target.";".$file_img.";".round($similarity,2).PHP_EOL;
						$embddFll=$target;
						$imgFll=$file_img;
						$embdFl_arr = explode("_", $embddFll);
					  	$imgFl_arr = explode(".", $imgFll);
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
									}else{
										$tn++;
									}
									
								}
						
						
						//fwrite($tmp_handle, $rw);
						
							  
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
				$imgFl_arr = explode(".", $imgFll);
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
              <?php if($numOfComprsn>0){ $fpr=$fp/$numOfComprsn; }else{ $fpr="0";}?>
              <tr><td>False positive rate (FPR)</td><td><?php echo $fpr; ?></td></tr>
              <?php if($numOfComprsn>0){ $fnr=$fn/$numOfComprsn; }else{ $fnr="0";} ?>
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
				 // $ssdeepPPTXBmpACC=($ssdeepBmpACC_0+$ssdeepBmpACC_1)/2;
				  $ssdeepPPTXBmpFSCORE=$f;
				  $ssdeepPPTXBmpMCC=$MCC;			  
			  
			  
			  
			  ?> 
				  
<?php ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////?>




                  
<?php ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// ?>	
				  
				  
				 <?php
              $fldr1='..\Data\EmbeddedObjects\PPTX\TIFF\Embedded_Files';	
  			  $fldr2='..\Data\EmbeddedObjects\PPTX\TIFF\Embedded_Objects';
			  $PPTXFlIndx=22;
			  $imgIndx=11;
			  $rslt = file_get_contents('..\Final_Report_Fragment\ssdeepEmbeddedObjectPPTXtiff.text', true);
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
							$sn=0;
							
						  foreach ($arr as &$value) {
							  $rw="";
							  $sn++;
						  
						  if(strlen($value)==0){
						  	continue;
						  }
						  $arr1 = explode(" matches ", $value);
						  $arr1_size= count($arr1);
						  
						   $dcmnt1 = explode("\\", $arr1[0]);
						   $file_img= $dcmnt1[count($dcmnt1)-1];
						   
						   $dcmnt2 = explode("\\", $arr1[1]);
						   $dcmnt2_tmp = explode(" ",$dcmnt2[count($dcmnt2)-1]);
						   $target=$dcmnt2_tmp[0];
						   $similarity=substr($dcmnt2_tmp[1],1,-3);
							  
							
					  $rw=$rw.$sn.";".$target.";".$file_img.";".round($similarity,2).PHP_EOL;
						$embddFll=$target;
						$imgFll=$file_img;
						$embdFl_arr = explode("_", $embddFll);
					  	$imgFl_arr = explode(".", $imgFll);
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
									}else{
										$tn++;
									}
									
								}
						
						
						//fwrite($tmp_handle, $rw);
						
							  
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
				$imgFl_arr = explode(".", $imgFll);
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
              <?php if($numOfComprsn>0){ $fpr=$fp/$numOfComprsn; }else{ $fpr="0";}?>
              <tr><td>False positive rate (FPR)</td><td><?php echo $fpr; ?></td></tr>
              <?php if($numOfComprsn>0){ $fnr=$fn/$numOfComprsn; }else{ $fnr="0";} ?>
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
				 // $ssdeepPPTXTiffACC=($ssdeepTiffACC_0+$ssdeepTiffACC_1)/2;
				  $ssdeepPPTXTiffFSCORE=$f;
				  $ssdeepPPTXTiffMCC=$MCC;			  
			  
			  
			  
			  ?>
				  
				  
				  
				  
<?php ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// ?>				  
				  
				  
<?php
              $fldr1='..\Data\EmbeddedObjects\PPTX\GIF\Embedded_Files';	
  			  $fldr2='..\Data\EmbeddedObjects\PPTX\GIF\Embedded_Objects';
			  $PPTXFlIndx=22;
			  $imgIndx=11;
			  $rslt = file_get_contents('..\Final_Report_Fragment\ssdeepEmbeddedObjectPPTXgif.text', true);
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
							$sn=0;
							
						  foreach ($arr as &$value) {
							  $rw="";
							  $sn++;
						  
						  if(strlen($value)==0){
						  	continue;
						  }
						  $arr1 = explode(" matches ", $value);
						  $arr1_size= count($arr1);
						  
						   $dcmnt1 = explode("\\", $arr1[0]);
						   $file_img= $dcmnt1[count($dcmnt1)-1];
						   
						   $dcmnt2 = explode("\\", $arr1[1]);
						   $dcmnt2_tmp = explode(" ",$dcmnt2[count($dcmnt2)-1]);
						   $target=$dcmnt2_tmp[0];
						   $similarity=substr($dcmnt2_tmp[1],1,-3);
							  
							
					  $rw=$rw.$sn.";".$target.";".$file_img.";".round($similarity,2).PHP_EOL;
						$embddFll=$target;
						$imgFll=$file_img;
						$embdFl_arr = explode("_", $embddFll);
					  	$imgFl_arr = explode(".", $imgFll);
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
									}else{
										$tn++;
									}
									
								}
						
						
						//fwrite($tmp_handle, $rw);
						
							  
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
				$imgFl_arr = explode(".", $imgFll);
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
              <?php if($numOfComprsn>0){ $fpr=$fp/$numOfComprsn; }else{ $fpr="0";}?>
              <tr><td>False positive rate (FPR)</td><td><?php echo $fpr; ?></td></tr>
              <?php if($numOfComprsn>0){ $fnr=$fn/$numOfComprsn; }else{ $fnr="0";} ?>
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
				 // $ssdeepPPTXGifACC=($ssdeepGifACC_0+$ssdeepGifACC_1)/2;
				  $ssdeepPPTXGifFSCORE=$f;
				  $ssdeepPPTXGifMCC=$MCC;			  
			  
			  
			  
			  ?>
 
 
 
              
              
				  
<?php ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// ?>
				  
				  

              
              

 
<?php ////////////////////////////////////////////////sdhash//////////////////////////////////////////////////////////////////// ?>

				  <?php
						  
						  $rslt=0;
						 //echo exec('sdhash ..\Data\EmbeddedObjects\PPTX\JPEG\Embedded_Files\*.pptx -o result_embedded_jpeg_pptx1');
						 //echo exec('sdhash ..\Data\EmbeddedObjects\PPTX\JPEG\Embedded_Objects\*.jpg -o img_result_embedded_jpeg_pptx2');
						  //$rslt= exec('sdhash -c result_embedded_jpeg_pptx1.sdbf img_result_embedded_jpeg_pptx2.sdbf | sort >final_sdhash_img1.text');
						  
						  $rslt = file_get_contents('..\Final_Report_Fragment\sdhashEmbeddedObjectPPTXjpeg.text', true);
						  $sn=0;
						  $tp=0;
						  $tn=0;
						  $fp=0;
						  $fn=0;
						  $sn=0;
				  		  $rw="";
							
							$t=(int)$_GET['threshold'];
					  		if($rslt==""){	
							}else{
					  
						  $arr = explode("\n", $rslt);
						  
						  //echo count($arr);
						  
						  foreach ($arr as &$value) {
							  
							  ?>
                               <?php $sn++; ?>
                            <?php if($value!=null){  ?>
                            <!--<tr>-->
                            
                            <!--<td><?php //echo $sn; ?></td>-->
                              
                          <?php
						  
						  $arr1 = explode("|", $value);
						  $cntr=0;
						  foreach ($arr1 as &$value1){
							  //echo $value1."----------";
							  
							  
							   $arr2 = explode("\\", $value1);
							  $arr1_size=count($arr2);
							  
							  ?>
                              <!--<td><?php //echo $arr2[$arr1_size-1]; ?></td>-->
                              <?php if($cntr==0){
								  $embddFll=$arr2[$arr1_size-1];
							  }else if($cntr==1){
								  $imgFll=$arr2[$arr1_size-1];
							  }else if($cntr==2){
							  	  $similarity=$arr2[$arr1_size-1];
							  }
							  
							  $cntr++;
							  ?>
                              
                              
                              <?php
							  
							  
							  
						  }
						  $embdFl_arr = explode("_", $embddFll);
						  $imgFl_arr = explode(".", $imgFll);
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
						  
						  }
						  
						  
						  ?>
                          <!--</tr>-->
				  
				  <?php 
					  	$rw=$rw.$sn.";".$embddFll.";".$imgFll.";".$similarity.PHP_EOL;
					  ?>
				  
					  <?php } ?>
					  <?php
							  
					  }
						  
						  ?>
				  
				  
				  <?php 
   // $dir = opendir('uploads/'); # This is the directory it will count from
   $numOfTarget=0;
   $numOfFlWthImg=0;
   $fi1 = new FilesystemIterator("..\Data\EmbeddedObjects\PPTX\JPEG\Embedded_Files", FilesystemIterator::SKIP_DOTS);
$numOfTarget=iterator_count($fi1);
$fi2 = new FilesystemIterator("..\Data\EmbeddedObjects\PPTX\JPEG\Embedded_Objects", FilesystemIterator::SKIP_DOTS);
$numOfFlWthImg=iterator_count($fi2);
$numOfComprsn=$numOfTarget*$numOfFlWthImg;

//echo $numOfComprsn;
///*
$dir="..\Data\EmbeddedObjects\PPTX\JPEG\Embedded_Files";			  
$cdir = scandir($dir); 

$dir2="..\Data\EmbeddedObjects\PPTX\JPEG\Embedded_Objects";			  
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
				$imgFl_arr = explode(".", $imgFll);
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
			  

			  
			  $sdhashPPTXJpegTP_0=$tp;
			 
			  if($tn<$dsimlarfl){
					   $tn=$dsimlarfl;
				   }
			  $sdhashPPTXJpegTN_0=$tn;
			  
			  $sdhashPPTXJpegFP_0=$fp;
			   if($tp<$simlarfl){
					   $fn=$simlarfl-$tp;
				   }
			  $sdhashPPTXJpegFN_0=$fn;
			  $sdhashPPTXJpegFPR_0=$fp/$numOfComprsn;
			  $sdhashPPTXJpegFNR_0=$fn/$numOfComprsn;
			   
			  if(($tp+$fp)!=0)	{
				$pre=$tp/($tp+$fp);
				}else{
					$pre=0;
				} 
			  $sdhashPPTXJpegPRE_0=$pre;
			  
			   
			  if(($tp+$fn)!=0)	{
				$recall=$tp/($tp+$fn);	
				}else{
					$recall=0;
				} 
			  $sdhashPPTXJpegRECALL_0=$recall;
			  if(($pre+$recall)!=0){
					$f= 2*($pre*$recall)/($pre+$recall);
				 }else{
					 $f=0;
				 }
			  
			  $sdhashPPTXJpegFSCORE_0=$f;
			  $sqrt1=sqrt(($sdhashPPTXJpegTP_0+$sdhashPPTXJpegFP_0)*($sdhashPPTXJpegTP_0+$sdhashPPTXJpegFN_0)*($sdhashPPTXJpegTN_0+$sdhashPPTXJpegFP_0)*($sdhashPPTXJpegTN_0+$sdhashPPTXJpegFN_0));
			  
			  $sdhashPPTXJpegACC_0=($sdhashPPTXJpegTP_0+$sdhashPPTXJpegTN_0)/($sdhashPPTXJpegTP_0+$sdhashPPTXJpegTN_0+$sdhashPPTXJpegFP_0+$sdhashPPTXJpegFN_0);  
				  
			if($sqrt1==0){
				$sdhashPPTXJpegMCC_0=0;
				}else{ 	  
				  
			  $sdhashPPTXJpegMCC_0=(($sdhashPPTXJpegTP_0*$sdhashPPTXJpegTN_0)-($sdhashPPTXJpegFP_0*$sdhashPPTXJpegFN_0))/$sqrt1;
			  
				}
			  
			  
				  $sdhashPPTXJpegTP=($sdhashPPTXJpegTP_0);
				  $sdhashPPTXJpegTN=($sdhashPPTXJpegTN_0);
				  $sdhashPPTXJpegFP=($sdhashPPTXJpegFP_0);
				  $sdhashPPTXJpegFN=($sdhashPPTXJpegFN_0);
				  $sdhashPPTXJpegFPR=($sdhashPPTXJpegFPR_0);
				  $sdhashPPTXJpegFNR=($sdhashPPTXJpegFNR_0);
				  $sdhashPPTXJpegPRE=($sdhashPPTXJpegPRE_0);
				  $sdhashPPTXJpegRECALL=($sdhashPPTXJpegRECALL_0);
				  $sdhashPPTXJpegACC=($sdhashPPTXJpegACC_0);
				  $sdhashPPTXJpegFSCORE=($sdhashPPTXJpegFSCORE_0);
				  $sdhashPPTXJpegMCC=($sdhashPPTXJpegMCC_0);			  
			  
			  
			  
			  ?>

              
              
              
			  
			 <table>
              <tr style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center;"><td colspan="2">Scheme : sdhash &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Embedded object: Jpeg &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Data Set: PPTX &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
              <tr><td>True Positive</td><td><?php echo $sdhashPPTXJpegTP; ?></td></tr>
			  <tr><td>True Negative</td><td><?php echo $sdhashPPTXJpegTN; ?></td></tr>
			  <tr><td>False Positive</td><td><?php echo $sdhashPPTXJpegFP; ?></td></tr>
              <tr><td>False Negative</td><td><?php echo $sdhashPPTXJpegFN; ?></td></tr>
              <tr><td width="77%;">False positive rate (FPR)</td><td><?php  echo $sdhashPPTXJpegFPR; ?></td></tr>
              <tr><td width="77%;">False negative rate (FNR)</td><td><?php echo $sdhashPPTXJpegFNR; ?></td></tr>
              <tr><td width="77%;">Precision <div style="font-size:9px; color:#F00;">A perfect precision score of 1.0 means that every result retrieved by a search was relevant.</div></td><td><?php echo $sdhashPPTXJpegPRE; ?></td></tr>
              <tr><td width="77%;">Recall<div style="font-size:9px; color:#F00;">A perfect recall score of 1.0 means that all relevant documents were retrieved by the search.</div></td><td><?php echo $sdhashPPTXJpegRECALL; ?></td></tr>
              <tr><td width="77%;">Accuracy<div style="font-size:9px; color:#F00;"> A measure of a test's accuracy (best value at 1 and worst at 0)</div></td><td><?php echo $sdhashPPTXJpegACC; ?></td></tr>
				   
			<tr><td width="77%;">F-score<div style="font-size:9px; color:#F00;"> The weighted average of Precision and Recall (best value at 1 and worst at 0)</div></td><td><?php echo $sdhashPPTXJpegFSCORE; ?></td></tr>
				   
				<tr><td width="77%;">MCC<div style="font-size:9px; color:#F00;"> A measure of the quality of (best value at 1 and worst at -1)</div></td><td><?php echo $sdhashPPTXJpegMCC; ?></td></tr>
              
              </table>
				  
				

<?php ////////////////////////////////////////////////sdhash Bmp/////////////////////////////////////////////////////////////// ?>				  
				  
				  
				  <?php
						  //echo exec('ssdeep -r ..\Data\PPTX');
						  $rslt=0;
						 // echo exec('sdhash ..\Data\EmbeddedObjects\PPTX\BMP\Embedded_Files\*.pptx -o result_embedded_BMP_pptx1');
						 //echo exec('sdhash ..\Data\EmbeddedObjects\PPTX\BMP\Embedded_Objects\*.bmp -o img_result_embedded_BMP_pptx2');
						  
						  //$rslt= exec('sdhash -c result_embedded_BMP_pptx1.sdbf img_result_embedded_BMP_pptx2.sdbf | sort >final_sdhash_img2.text');
						  
						  $rslt = file_get_contents('..\Final_Report_Fragment\sdhashEmbeddedObjectPPTXbmp.text', true);
						  $sn=0;
						  $tp=0;
						  $tn=0;
						  $fp=0;
						  $fn=0;
						  $sn=0;
				  		  $rw="";
							
							$t=(int)$_GET['threshold'];
					  		if($rslt==""){
								
							}else{
					  
						  $arr = explode("\n", $rslt);
						  
						  //echo count($arr);
						  
						  foreach ($arr as &$value) {
							  
							  ?>
                               <?php $sn++; ?>
                            <?php if($value!=null){  ?>
                            <!--<tr>-->
                            
                            <!--<td><?php //echo $sn; ?></td>-->
                              
                          <?php
						  
						  $arr1 = explode("|", $value);
						  $cntr=0;
						  foreach ($arr1 as &$value1){
							  //echo $value1."----------";
							  
							  
							   $arr2 = explode("\\", $value1);
							  $arr1_size=count($arr2);
							  
							  ?>
                              <!--<td><?php //echo $arr2[$arr1_size-1]; ?></td>-->
                              <?php if($cntr==0){
								  $embddFll=$arr2[$arr1_size-1];
							  }else if($cntr==1){
								  $imgFll=$arr2[$arr1_size-1];
							  }else if($cntr==2){
							  	  $similarity=$arr2[$arr1_size-1];
							  }
							  
							  $cntr++;
							  ?>
                              
                              
                              <?php
							  
							  
							  
						  }
						  $embdFl_arr = explode("_", $embddFll);
						  $imgFl_arr = explode(".", $imgFll);
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
						  
						  }
						  
						  
						  ?>
                          <!--</tr>-->
				  
				  <?php 
					  	$rw=$rw.$sn.";".$embddFll.";".$imgFll.";".$similarity.PHP_EOL;
					  ?>
				  
					  <?php } ?>
					  <?php
							  
					  }
						  
						  ?>
				  
				  
				  <?php 
   // $dir = opendir('uploads/'); # This is the directory it will count from
   $numOfTarget=0;
   $numOfFlWthImg=0;
   $fi1 = new FilesystemIterator("..\Data\EmbeddedObjects\PPTX\BMP\Embedded_Files", FilesystemIterator::SKIP_DOTS);
$numOfTarget=iterator_count($fi1);
$fi2 = new FilesystemIterator("..\Data\EmbeddedObjects\PPTX\BMP\Embedded_Objects", FilesystemIterator::SKIP_DOTS);
$numOfFlWthImg=iterator_count($fi2);
$numOfComprsn=$numOfTarget*$numOfFlWthImg;

//echo $numOfComprsn;
///*
$dir="..\Data\EmbeddedObjects\PPTX\BMP\Embedded_Files";			  
$cdir = scandir($dir); 

$dir2="..\Data\EmbeddedObjects\PPTX\BMP\Embedded_Objects";			  
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
				$imgFl_arr = explode(".", $imgFll);
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
			  

			  
			  $sdhashPPTXBmpTP_0=$tp;
			 
			  if($tn<$dsimlarfl){
					   $tn=$dsimlarfl;
				   }
			  $sdhashPPTXBmpTN_0=$tn;
			  
			  $sdhashPPTXBmpFP_0=$fp;
			   if($tp<$simlarfl){
					   $fn=$simlarfl-$tp;
				   }
			  $sdhashPPTXBmpFN_0=$fn;
			  $sdhashPPTXBmpFPR_0=$fp/$numOfComprsn;
			  $sdhashPPTXBmpFNR_0=$fn/$numOfComprsn;
			   
			  if(($tp+$fp)!=0)	{
				$pre=$tp/($tp+$fp);
				}else{
					$pre=0;
				} 
			  $sdhashPPTXBmpPRE_0=$pre;
			  
			   
			  if(($tp+$fn)!=0)	{
				$recall=$tp/($tp+$fn);	
				}else{
					$recall=0;
				} 
			  $sdhashPPTXBmpRECALL_0=$recall;
			  if(($pre+$recall)!=0){
					$f= 2*($pre*$recall)/($pre+$recall);
				 }else{
					 $f=0;
				 }
			  
			  $sdhashPPTXBmpFSCORE_0=$f;
			  $sqrt1=sqrt(($sdhashPPTXBmpTP_0+$sdhashPPTXBmpFP_0)*($sdhashPPTXBmpTP_0+$sdhashPPTXBmpFN_0)*($sdhashPPTXBmpTN_0+$sdhashPPTXBmpFP_0)*($sdhashPPTXBmpTN_0+$sdhashPPTXBmpFN_0));
			  
			   $sdhashPPTXBmpACC_0=($sdhashPPTXBmpTP_0+$sdhashPPTXBmpTN_0)/($sdhashPPTXBmpTP_0+$sdhashPPTXBmpTN_0+$sdhashPPTXBmpFP_0+$sdhashPPTXBmpFN_0);  
				  
			if($sqrt1==0){
				$sdhashPPTXBmpMCC_0=0;
				}else{ 	  
				  
			  $sdhashPPTXBmpMCC_0=(($sdhashPPTXBmpTP_0*$sdhashPPTXBmpTN_0)-($sdhashPPTXBmpFP_0*$sdhashPPTXBmpFN_0))/$sqrt1;
			  
				}
			  ?>
              
              

              
               <?php 
			  
				  $sdhashPPTXBmpTP=($sdhashPPTXBmpTP_0);
				  $sdhashPPTXBmpTN=($sdhashPPTXBmpTN_0);
				  $sdhashPPTXBmpFP=($sdhashPPTXBmpFP_0);
				  $sdhashPPTXBmpFN=($sdhashPPTXBmpFN_0);
				  $sdhashPPTXBmpFPR=($sdhashPPTXBmpFPR_0);
				  $sdhashPPTXBmpFNR=($sdhashPPTXBmpFNR_0);
				  $sdhashPPTXBmpPRE=($sdhashPPTXBmpPRE_0);
				  $sdhashPPTXBmpRECALL=($sdhashPPTXBmpRECALL_0);
				  $sdhashPPTXBmpACC=($sdhashPPTXBmpACC_0);
				  $sdhashPPTXBmpFSCORE=($sdhashPPTXBmpFSCORE_0);
				  $sdhashPPTXBmpMCC=($sdhashPPTXBmpMCC_0);			  
			  
			  
			  
			  ?>
              
              
              
              
              
              
              
              
			  
			 <table>
              <tr style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center;">
                <td colspan="2">Scheme : sdhash &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Embedded object: Bmp &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Data Set: PPTX &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
             <tr><td>True Positive</td><td><?php echo $sdhashPPTXBmpTP; ?></td></tr>
			 <tr><td>True Negative</td><td><?php echo $sdhashPPTXBmpTN; ?></td></tr>
			 <tr><td>False Positive</td><td><?php echo $sdhashPPTXBmpFP; ?></td></tr>
             <tr><td width="77%;">False Negative</td><td><?php echo $sdhashPPTXBmpFN; ?></td></tr>
              <tr><td width="77%;">False positive rate (FPR)</td><td><?php  echo $sdhashPPTXBmpFPR; ?></td></tr>
              <tr><td width="77%;">False negative rate (FNR)</td><td><?php echo $sdhashPPTXBmpFNR; ?></td></tr>
              <tr><td width="77%;">Precision <div style="font-size:9px; color:#F00;">A perfect precision score of 1.0 means that every result retrieved by a search was relevant.</div></td><td><?php echo $sdhashPPTXBmpPRE; ?></td></tr>
              <tr><td width="77%;">Recall<div style="font-size:9px; color:#F00;">A perfect recall score of 1.0 means that all relevant documents were retrieved by the search.</div></td><td><?php echo $sdhashPPTXBmpRECALL; ?></td></tr>
              <tr><td width="77%;">Accuracy<div style="font-size:9px; color:#F00;"> A measure of a test's accuracy (best value at 1 and worst at 0)</div></td><td><?php echo $sdhashPPTXBmpACC; ?></td></tr>
				   
			<tr><td width="77%;">F-score<div style="font-size:9px; color:#F00;"> The weighted average of Precision and Recall (best value at 1 and worst at 0)</div></td><td><?php echo $sdhashPPTXBmpFSCORE; ?></td></tr>
				   
				<tr><td width="77%;">MCC<div style="font-size:9px; color:#F00;"> A measure of the quality of (best value at 1 and worst at -1)</div></td><td><?php echo $sdhashPPTXBmpMCC; ?></td></tr>
              
              </table>
				  
                  
                  
                  
<?php ////////////////////////////////////////////////sdhash Tiff/////////////////////////////////////////////////////////////// ?>				  
				  
				  
				  <?php
						  //echo exec('ssdeep -r ..\Data\PPTX');
						  $rslt=0;
						 // echo exec('sdhash ..\Data\EmbeddedObjects\PPTX\TIFF\Embedded_Files\*.pptx -o result_embedded_TIFF_pptx1');
						 //echo exec('sdhash ..\Data\EmbeddedObjects\PPTX\TIFF\Embedded_Objects\*.tif -o img_result_embedded_TIFF_pptx2');
						 //$rslt= exec('sdhash -c result_embedded_TIFF_pptx1.sdbf img_result_embedded_TIFF_pptx2.sdbf | sort >final_sdhash_img4.text');
						  
						  $rslt = file_get_contents('..\Final_Report_Fragment\sdhashEmbeddedObjectPPTXtiff.text', true);
						  $sn=0;
						  $tp=0;
						  $tn=0;
						  $fp=0;
						  $fn=0;
						  $sn=0;
				  		  $rw="";
							
							$t=(int)$_GET['threshold'];
					  		if($rslt==""){
								
							}else{
					  
						  $arr = explode("\n", $rslt);
						  
						  //echo count($arr);
						  
						  foreach ($arr as &$value) {
							  
							  ?>
                               <?php $sn++; ?>
                            <?php if($value!=null){  ?>
                            <!--<tr>-->
                            
                            <!--<td><?php //echo $sn; ?></td>-->
                              
                          <?php
						  
						  $arr1 = explode("|", $value);
						  $cntr=0;
						  foreach ($arr1 as &$value1){
							  //echo $value1."----------";
							  
							  
							   $arr2 = explode("\\", $value1);
							  $arr1_size=count($arr2);
							  
							  ?>
                              <!--<td><?php //echo $arr2[$arr1_size-1]; ?></td>-->
                              <?php if($cntr==0){
								  $embddFll=$arr2[$arr1_size-1];
							  }else if($cntr==1){
								  $imgFll=$arr2[$arr1_size-1];
							  }else if($cntr==2){
							  	  $similarity=$arr2[$arr1_size-1];
							  }
							  
							  $cntr++;
							  ?>
                              
                              
                              <?php
							  
							  
							  
						  }
						  $embdFl_arr = explode("_", $embddFll);
						  $imgFl_arr = explode(".", $imgFll);
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
						  
						  }
						  
						  
						  ?>
                          <!--</tr>-->
				  
				  <?php 
					  	$rw=$rw.$sn.";".$embddFll.";".$imgFll.";".$similarity.PHP_EOL;
					  ?>
				  
					  <?php } ?>
					  <?php
							  
					  }
						  
						  ?>
				  
				  
				  <?php 
   // $dir = opendir('uploads/'); # This is the directory it will count from
   $numOfTarget=0;
   $numOfFlWthImg=0;
   $fi1 = new FilesystemIterator("..\Data\EmbeddedObjects\PPTX\TIFF\Embedded_Files", FilesystemIterator::SKIP_DOTS);
$numOfTarget=iterator_count($fi1);
$fi2 = new FilesystemIterator("..\Data\EmbeddedObjects\PPTX\TIFF\Embedded_Objects", FilesystemIterator::SKIP_DOTS);
$numOfFlWthImg=iterator_count($fi2);
$numOfComprsn=$numOfTarget*$numOfFlWthImg;

//echo $numOfComprsn;
///*
$dir="..\Data\EmbeddedObjects\PPTX\TIFF\Embedded_Files";			  
$cdir = scandir($dir); 

$dir2="..\Data\EmbeddedObjects\PPTX\TIFF\Embedded_Objects";			  
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
				$imgFl_arr = explode(".", $imgFll);
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
			  
			

?>
              
				  
				  <?php
			  
			  $sdhashPPTXTiffTP_0=$tp;
			 
			  if($tn<$dsimlarfl){
					   $tn=$dsimlarfl;
				   }
			  $sdhashPPTXTiffTN_0=$tn;
			  
			  $sdhashPPTXTiffFP_0=$fp;
			   if($tp<$simlarfl){
					   $fn=$simlarfl-$tp;
				   }
			  $sdhashPPTXTiffFN_0=$fn;
			  $sdhashPPTXTiffFPR_0=$fp/$numOfComprsn;
			  $sdhashPPTXTiffFNR_0=$fn/$numOfComprsn;
			   
			  if(($tp+$fp)!=0)	{
				$pre=$tp/($tp+$fp);
				}else{
					$pre=0;
				} 
			  $sdhashPPTXTiffPRE_0=$pre;
			  
			   
			  if(($tp+$fn)!=0)	{
				$recall=$tp/($tp+$fn);	
				}else{
					$recall=0;
				} 
			  $sdhashPPTXTiffRECALL_0=$recall;
			  if(($pre+$recall)!=0){
					$f= 2*($pre*$recall)/($pre+$recall);
				 }else{
					 $f=0;
				 }
			  
			  $sdhashPPTXTiffFSCORE_0=$f;
			  $sqrt1=sqrt(($sdhashPPTXTiffTP_0+$sdhashPPTXTiffFP_0)*($sdhashPPTXTiffTP_0+$sdhashPPTXTiffFN_0)*($sdhashPPTXTiffTN_0+$sdhashPPTXTiffFP_0)*($sdhashPPTXTiffTN_0+$sdhashPPTXTiffFN_0));
			  
			   $sdhashPPTXTiffACC_0=($sdhashPPTXTiffTP_0+$sdhashPPTXTiffTN_0)/($sdhashPPTXTiffTP_0+$sdhashPPTXTiffTN_0+$sdhashPPTXTiffFP_0+$sdhashPPTXTiffFN_0);  
				  
			  if($sqrt1==0){
				$sdhashPPTXTiffMCC_0=0;
				}else{ 
			  
			  $sdhashPPTXTiffMCC_0=(($sdhashPPTXTiffTP_0*$sdhashPPTXTiffTN_0)-($sdhashPPTXTiffFP_0*$sdhashPPTXTiffFN_0))/$sqrt1;
			  
				}
			  
			  ?>
              
              
 
              
              
               <?php 
			  
				  $sdhashPPTXTiffTP=($sdhashPPTXTiffTP_0);
				  $sdhashPPTXTiffTN=($sdhashPPTXTiffTN_0);
				  $sdhashPPTXTiffFP=($sdhashPPTXTiffFP_0);
				  $sdhashPPTXTiffFN=($sdhashPPTXTiffFN_0);
				  $sdhashPPTXTiffFPR=($sdhashPPTXTiffFPR_0);
				  $sdhashPPTXTiffFNR=($sdhashPPTXTiffFNR_0);
				  $sdhashPPTXTiffPRE=($sdhashPPTXTiffPRE_0);
				  $sdhashPPTXTiffRECALL=($sdhashPPTXTiffRECALL_0);
				  $sdhashPPTXTiffACC=($sdhashPPTXTiffACC_0);
				  $sdhashPPTXTiffFSCORE=($sdhashPPTXTiffFSCORE_0);
				  $sdhashPPTXTiffMCC=($sdhashPPTXTiffMCC_0);			  
			  
			  
			  
			  ?>              
              
              
              
              
              
              
              
              
              
              
              
			  
			 <table>
              <tr style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center;">
                <td colspan="2">Scheme : sdhash &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Embedded object: Tiff &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Data Set: PPTX &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
              <tr><td>True Positive</td><td><?php echo $sdhashPPTXTiffTP; ?></td></tr>
			  <tr><td>True Negative</td><td><?php echo $sdhashPPTXTiffTN; ?></td></tr>
			  <tr><td>False Positive</td><td><?php echo $sdhashPPTXTiffFP; ?></td></tr>
              <tr><td width="77%;">False Negative</td><td><?php echo $sdhashPPTXTiffFN; ?></td></tr>
              <tr><td width="77%;">False positive rate (FPR)</td><td><?php  echo $sdhashPPTXTiffFPR; ?></td></tr>
              <tr><td width="77%;">False negative rate (FNR)</td><td><?php echo $sdhashPPTXTiffFNR; ?></td></tr>
              <tr><td width="77%;">Precision <div style="font-size:9px; color:#F00;">A perfect precision score of 1.0 means that every result retrieved by a search was relevant.</div></td><td><?php echo $sdhashPPTXTiffPRE; ?></td></tr>
              <tr><td width="77%;">Recall<div style="font-size:9px; color:#F00;">A perfect recall score of 1.0 means that all relevant documents were retrieved by the search.</div></td><td><?php echo $sdhashPPTXTiffRECALL; ?></td></tr>
              <tr><td width="77%;">Accuracy<div style="font-size:9px; color:#F00;"> A measure of a test's accuracy (best value at 1 and worst at 0)</div></td><td><?php echo $sdhashPPTXTiffACC; ?></td></tr>
				   
			<tr><td width="77%;">F-score<div style="font-size:9px; color:#F00;"> The weighted average of Precision and Recall (best value at 1 and worst at 0)</div></td><td><?php echo $sdhashPPTXTiffFSCORE; ?></td></tr>
				   
				<tr><td width="77%;">MCC<div style="font-size:9px; color:#F00;"> A measure of the quality of (best value at 1 and worst at -1)</div></td><td><?php echo $sdhashPPTXTiffMCC; ?></td></tr>
              
              </table>						  
		  

				  
				  
                  
                  
<?php /////////////////////////////////////////////////////////?>



 <?php
						  
						  $rslt=0;
						 //echo exec('sdhash ..\Data\EmbeddedObjects\PPTX\GIF\Embedded_Files\*.pptx -o result_embedded_GIF_pptx1');
						 //echo exec('sdhash ..\Data\EmbeddedObjects\PPTX\GIF\Embedded_Objects\*.jpg -o img_result_embedded_GIF_pptx2');
						  //$rslt= exec('sdhash -c result_embedded_GIF_pptx1.sdbf img_result_embedded_GIF_pptx2.sdbf | sort >final_sdhash_img1.text');
						  
						  $rslt = file_get_contents('..\Final_Report_Fragment\sdhashEmbeddedObjectPPTXgif.text', true);
						  $sn=0;
						  $tp=0;
						  $tn=0;
						  $fp=0;
						  $fn=0;
						  $sn=0;
				  		  $rw="";
							
							$t=(int)$_GET['threshold'];
					  		if($rslt==""){	
							}else{
					  
						  $arr = explode("\n", $rslt);
						  
						  //echo count($arr);
						  
						  foreach ($arr as &$value) {
							  
							  ?>
                               <?php $sn++; ?>
                            <?php if($value!=null){  ?>
                            <!--<tr>-->
                            
                            <!--<td><?php //echo $sn; ?></td>-->
                              
                          <?php
						  
						  $arr1 = explode("|", $value);
						  $cntr=0;
						  foreach ($arr1 as &$value1){
							  //echo $value1."----------";
							  
							  
							   $arr2 = explode("\\", $value1);
							  $arr1_size=count($arr2);
							  
							  ?>
                              <!--<td><?php //echo $arr2[$arr1_size-1]; ?></td>-->
                              <?php if($cntr==0){
								  $embddFll=$arr2[$arr1_size-1];
							  }else if($cntr==1){
								  $imgFll=$arr2[$arr1_size-1];
							  }else if($cntr==2){
							  	  $similarity=$arr2[$arr1_size-1];
							  }
							  
							  $cntr++;
							  ?>
                              
                              
                              <?php
							  
							  
							  
						  }
						  $embdFl_arr = explode("_", $embddFll);
						  $imgFl_arr = explode(".", $imgFll);
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
						  
						  }
						  
						  
						  ?>
                          <!--</tr>-->
				  
				  <?php 
					  	$rw=$rw.$sn.";".$embddFll.";".$imgFll.";".$similarity.PHP_EOL;
					  ?>
				  
					  <?php } ?>
					  <?php
							  
					  }
						  
						  ?>
				  
				  
				  <?php 
   // $dir = opendir('uploads/'); # This is the directory it will count from
   $numOfTarget=0;
   $numOfFlWthImg=0;
   $fi1 = new FilesystemIterator("..\Data\EmbeddedObjects\PPTX\GIF\Embedded_Files", FilesystemIterator::SKIP_DOTS);
$numOfTarget=iterator_count($fi1);
$fi2 = new FilesystemIterator("..\Data\EmbeddedObjects\PPTX\GIF\Embedded_Objects", FilesystemIterator::SKIP_DOTS);
$numOfFlWthImg=iterator_count($fi2);
$numOfComprsn=$numOfTarget*$numOfFlWthImg;

//echo $numOfComprsn;
///*
$dir="..\Data\EmbeddedObjects\PPTX\GIF\Embedded_Files";			  
$cdir = scandir($dir); 

$dir2="..\Data\EmbeddedObjects\PPTX\GIF\Embedded_Objects";			  
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
				$imgFl_arr = explode(".", $imgFll);
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
			  

			  
			  $sdhashPPTXGifTP_0=$tp;
			 
			  if($tn<$dsimlarfl){
					   $tn=$dsimlarfl;
				   }
			  $sdhashPPTXGifTN_0=$tn;
			  
			  $sdhashPPTXGifFP_0=$fp;
			   if($tp<$simlarfl){
					   $fn=$simlarfl-$tp;
				   }
			  $sdhashPPTXGifFN_0=$fn;
			  $sdhashPPTXGifFPR_0=$fp/$numOfComprsn;
			  $sdhashPPTXGifFNR_0=$fn/$numOfComprsn;
			   
			  if(($tp+$fp)!=0)	{
				$pre=$tp/($tp+$fp);
				}else{
					$pre=0;
				} 
			  $sdhashPPTXGifPRE_0=$pre;
			  
			   
			  if(($tp+$fn)!=0)	{
				$recall=$tp/($tp+$fn);	
				}else{
					$recall=0;
				} 
			  $sdhashPPTXGifRECALL_0=$recall;
			  if(($pre+$recall)!=0){
					$f= 2*($pre*$recall)/($pre+$recall);
				 }else{
					 $f=0;
				 }
			  
			  $sdhashPPTXGifFSCORE_0=$f;
			  $sqrt1=sqrt(($sdhashPPTXGifTP_0+$sdhashPPTXGifFP_0)*($sdhashPPTXGifTP_0+$sdhashPPTXGifFN_0)*($sdhashPPTXGifTN_0+$sdhashPPTXGifFP_0)*($sdhashPPTXGifTN_0+$sdhashPPTXGifFN_0));
			  
			  $sdhashPPTXGifACC_0=($sdhashPPTXGifTP_0+$sdhashPPTXGifTN_0)/($sdhashPPTXGifTP_0+$sdhashPPTXGifTN_0+$sdhashPPTXGifFP_0+$sdhashPPTXGifFN_0);  
				  
			if($sqrt1==0){
				$sdhashPPTXGifMCC_0=0;
				}else{ 	  
				  
			  $sdhashPPTXGifMCC_0=(($sdhashPPTXGifTP_0*$sdhashPPTXGifTN_0)-($sdhashPPTXGifFP_0*$sdhashPPTXGifFN_0))/$sqrt1;
			  
				}
			  
			  
				  $sdhashPPTXGifTP=($sdhashPPTXGifTP_0);
				  $sdhashPPTXGifTN=($sdhashPPTXGifTN_0);
				  $sdhashPPTXGifFP=($sdhashPPTXGifFP_0);
				  $sdhashPPTXGifFN=($sdhashPPTXGifFN_0);
				  $sdhashPPTXGifFPR=($sdhashPPTXGifFPR_0);
				  $sdhashPPTXGifFNR=($sdhashPPTXGifFNR_0);
				  $sdhashPPTXGifPRE=($sdhashPPTXGifPRE_0);
				  $sdhashPPTXGifRECALL=($sdhashPPTXGifRECALL_0);
				  $sdhashPPTXGifACC=($sdhashPPTXGifACC_0);
				  $sdhashPPTXGifFSCORE=($sdhashPPTXGifFSCORE_0);
				  $sdhashPPTXGifMCC=($sdhashPPTXGifMCC_0);			  
			  
			  
			  
			  ?>

              
              
              
			  
			 <table>
              <tr style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center;"><td colspan="2">Scheme : sdhash &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Embedded object: Gif &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Data Set: PPTX &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
              <tr><td>True Positive</td><td><?php echo $sdhashPPTXGifTP; ?></td></tr>
			  <tr><td>True Negative</td><td><?php echo $sdhashPPTXGifTN; ?></td></tr>
			  <tr><td>False Positive</td><td><?php echo $sdhashPPTXGifFP; ?></td></tr>
              <tr><td>False Negative</td><td><?php echo $sdhashPPTXGifFN; ?></td></tr>
              <tr><td width="77%;">False positive rate (FPR)</td><td><?php  echo $sdhashPPTXGifFPR; ?></td></tr>
              <tr><td width="77%;">False negative rate (FNR)</td><td><?php echo $sdhashPPTXGifFNR; ?></td></tr>
              <tr><td width="77%;">Precision <div style="font-size:9px; color:#F00;">A perfect precision score of 1.0 means that every result retrieved by a search was relevant.</div></td><td><?php echo $sdhashPPTXGifPRE; ?></td></tr>
              <tr><td width="77%;">Recall<div style="font-size:9px; color:#F00;">A perfect recall score of 1.0 means that all relevant documents were retrieved by the search.</div></td><td><?php echo $sdhashPPTXGifRECALL; ?></td></tr>
              <tr><td width="77%;">Accuracy<div style="font-size:9px; color:#F00;"> A measure of a test's accuracy (best value at 1 and worst at 0)</div></td><td><?php echo $sdhashPPTXGifACC; ?></td></tr>
				   
			<tr><td width="77%;">F-score<div style="font-size:9px; color:#F00;"> The weighted average of Precision and Recall (best value at 1 and worst at 0)</div></td><td><?php echo $sdhashPPTXGifFSCORE; ?></td></tr>
				   
				<tr><td width="77%;">MCC<div style="font-size:9px; color:#F00;"> A measure of the quality of (best value at 1 and worst at -1)</div></td><td><?php echo $sdhashPPTXGifMCC; ?></td></tr>
              
              </table>                  
                  
                  
                  
                  
				  
				  
				  

<?php ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// ?>				  

                  
                  
                <table>  
                	  
                     <?php 
					 $ssdeepPPTXAvgPre=($ssdeepPPTXJpegPRE+$ssdeepPPTXBmpPRE+$ssdeepPPTXGifPRE+$ssdeepPPTXTiffPRE+$ssdeepPPTXJpegPRE) /4;
					 $sdhashPPTXAvgPre=($sdhashPPTXJpegPRE+$sdhashPPTXBmpPRE+$sdhashPPTXGifPRE+$sdhashPPTXTiffPRE+$sdhashPPTXJpegPRE) /4;
					 
					 
					 ?> 
                      
                      
					  <tr align="righ" ><td colspan="2" align="right"><input type="submit" align="middle" value=" Next " style="margin-left:50%"  onClick="location.href = 'result_report_embedded_object_based_search_graph.php?ssdeepJpegFSCORE=<?php echo $ssdeepJpegFSCORE ?>&ssdeepBmpFSCORE=<?php echo $ssdeepBmpFSCORE ?>&ssdeepGifFSCORE=<?php echo $ssdeepGifFSCORE ?>&ssdeepTiffFSCORE=<?php echo $ssdeepTiffFSCORE ?>&sdhashJpegFSCORE=<?php echo $sdhashJpegFSCORE ?>&sdhashBmpFSCORE=<?php echo $sdhashBmpFSCORE ?>&sdhashGifFSCORE=<?php echo $sdhashGifFSCORE ?>&sdhashTiffFSCORE=<?php echo $sdhashTiffFSCORE ?>&ssdeepJpegMCC=<?php echo $ssdeepJpegMCC ?>&ssdeepBmpMCC=<?php echo $ssdeepBmpMCC ?>&ssdeepGifMCC=<?php echo $ssdeepGifMCC ?>&ssdeepTiffMCC=<?php echo $ssdeepTiffMCC ?>&sdhashJpegMCC=<?php echo $sdhashJpegMCC ?>&sdhashBmpMCC=<?php echo $sdhashBmpMCC ?>&sdhashGifMCC=<?php echo $sdhashGifMCC ?>&sdhashTiffMCC=<?php echo $sdhashTiffMCC ?>&ssdeepJpegACC=<?php echo $ssdeepJpegACC ?>&ssdeepBmpACC=<?php echo $ssdeepBmpACC ?>&ssdeepGifACC=<?php echo $ssdeepGifACC ?>&ssdeepTiffACC=<?php echo $ssdeepTiffACC ?>&sdhashJpegACC=<?php echo $sdhashJpegACC ?>&sdhashBmpACC=<?php echo $sdhashBmpACC ?>&sdhashGifACC=<?php echo $sdhashGifACC ?>&sdhashTiffACC=<?php echo $sdhashTiffACC ?>&ssdeepPPTXJpegFSCORE=<?php echo $ssdeepPPTXJpegFSCORE ?>&ssdeepPPTXBmpFSCORE=<?php echo $ssdeepPPTXBmpFSCORE ?>&ssdeepPPTXGifFSCORE=<?php echo $ssdeepPPTXGifFSCORE ?>&ssdeepPPTXTiffFSCORE=<?php echo $ssdeepPPTXTiffFSCORE ?>&sdhashPPTXJpegFSCORE=<?php echo $sdhashPPTXJpegFSCORE ?>&sdhashPPTXBmpFSCORE=<?php echo $sdhashPPTXBmpFSCORE ?>&sdhashPPTXGifFSCORE=<?php echo $sdhashPPTXGifFSCORE ?>&sdhashPPTXTiffFSCORE=<?php echo $sdhashPPTXTiffFSCORE ?>&ssdeepPPTXJpegMCC=<?php echo $ssdeepPPTXJpegMCC ?>&ssdeepPPTXBmpMCC=<?php echo $ssdeepPPTXBmpMCC ?>&ssdeepPPTXGifMCC=<?php echo $ssdeepPPTXGifMCC ?>&ssdeepPPTXTiffMCC=<?php echo $ssdeepPPTXTiffMCC ?>&sdhashPPTXJpegMCC=<?php echo $sdhashPPTXJpegMCC ?>&sdhashPPTXBmpMCC=<?php echo $sdhashPPTXBmpMCC ?>&sdhashPPTXGifMCC=<?php echo $sdhashPPTXGifMCC ?>&sdhashPPTXTiffMCC=<?php echo $sdhashPPTXTiffMCC ?>&ssdeepPPTXJpegACC=<?php echo $ssdeepPPTXJpegACC ?>&ssdeepPPTXBmpACC=<?php echo $ssdeepPPTXBmpACC ?>&ssdeepPPTXGifACC=<?php echo $ssdeepPPTXGifACC ?>&ssdeepPPTXTiffACC=<?php echo $ssdeepPPTXTiffACC ?>&sdhashPPTXJpegACC=<?php echo $sdhashPPTXJpegACC ?>&sdhashPPTXBmpACC=<?php echo $sdhashPPTXBmpACC ?>&sdhashPPTXGifACC=<?php echo $sdhashPPTXGifACC ?>&sdhashPPTXTiffACC=<?php echo $sdhashPPTXTiffACC ?>&numOfJpegDocx=<?php echo $numOfJpegDocx ?>&numOfBmpDocx=<?php echo $numOfBmpDocx ?>&numOfGifDocx=<?php echo $numOfGifDocx ?>&numOfTiffDocx=<?php echo $numOfTiffDocx ?>&numOfJpegDocxWithOutImg=<?php echo $numOfJpegDocxWithOutImg ?>&numOfBmpDocxWithOutImg=<?php echo $numOfBmpDocxWithOutImg ?>&numOfGifDocxWithOutImg=<?php echo $numOfGifDocxWithOutImg ?>&numOfTiffDocxWithOutImg=<?php echo $numOfTiffDocxWithOutImg ?>&numOfJpeg=<?php echo $numOfJpeg ?>&numOfBmp=<?php echo $numOfBmp ?>&numOfGif=<?php echo $numOfGif ?>&numOfTiff=<?php echo $numOfTiff ?>&ssdeepAvgPre=<?php echo $ssdeepAvgPre ?>&sdhashAvgPre=<?php echo $sdhashAvgPre ?>&ssdeepJpegPRE=<?php echo $ssdeepJpegPRE ?>&ssdeepBmpPRE=<?php echo $ssdeepBmpPRE ?>&ssdeepGifPRE=<?php echo $ssdeepGifPRE ?>&ssdeepTiffPRE=<?php echo $ssdeepTiffPRE ?>&sdhashJpegPRE=<?php echo $sdhashJpegPRE ?>&sdhashBmpPRE=<?php echo $sdhashBmpPRE ?>&sdhashGifPRE=<?php echo $sdhashGifPRE ?>&sdhashTiffPRE=<?php echo $sdhashTiffPRE ?>&ssdeepJpegRECALL=<?php echo $ssdeepJpegRECALL ?>&ssdeepBmpRECALL=<?php echo $ssdeepBmpRECALL ?>&ssdeepGifRECALL=<?php echo $ssdeepGifRECALL ?>&ssdeepTiffRECALL=<?php echo $ssdeepTiffRECALL ?>&sdhashJpegRECALL=<?php echo $sdhashJpegRECALL ?>&sdhashBmpRECALL=<?php echo $sdhashBmpRECALL ?>&sdhashGifRECALL=<?php echo $sdhashGifRECALL ?>&sdhashTiffRECALL=<?php echo $sdhashTiffRECALL ?>&ssdeepPPTXJpegPRE=<?php echo $ssdeepPPTXJpegPRE ?>&ssdeepPPTXBmpPRE=<?php echo $ssdeepPPTXBmpPRE ?>&ssdeepPPTXGifPRE=<?php echo $ssdeepPPTXGifPRE ?>&ssdeepPPTXTiffPRE=<?php echo $ssdeepPPTXTiffPRE ?>&sdhashPPTXJpegPRE=<?php echo $sdhashPPTXJpegPRE ?>&sdhashPPTXBmpPRE=<?php echo $sdhashPPTXBmpPRE ?>&sdhashPPTXGifPRE=<?php echo $sdhashPPTXGifPRE ?>&sdhashPPTXTiffPRE=<?php echo $sdhashPPTXTiffPRE ?>&ssdeepPPTXJpegRECALL=<?php echo $ssdeepPPTXJpegRECALL ?>&ssdeepPPTXBmpRECALL=<?php echo $ssdeepPPTXBmpRECALL ?>&ssdeepPPTXGifRECALL=<?php echo $ssdeepPPTXGifRECALL ?>&ssdeepPPTXTiffRECALL=<?php echo $ssdeepPPTXTiffRECALL ?>&sdhashPPTXJpegRECALL=<?php echo $sdhashPPTXJpegRECALL ?>&sdhashPPTXBmpRECALL=<?php echo $sdhashPPTXBmpRECALL ?>&sdhashPPTXGifRECALL=<?php echo $sdhashPPTXGifRECALL ?>&sdhashPPTXTiffRECALL=<?php echo $sdhashPPTXTiffRECALL ?>';"  ></td></tr>
					  
                      
					  
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
