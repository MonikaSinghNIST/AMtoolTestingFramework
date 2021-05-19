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
				  
				  $tmp_Pdf_file = 'Tmp_Results_Pdf_text.txt';
				  $tmp_handle = fopen($tmp_Pdf_file, 'wb') or die('Cannot open file:  '.$tmp_Pdf_file);
				  $rw="";		
				  $ssdeepExeTP=0;
				  $ssdeepExeTN=0;
				  $ssdeepExeFP=0;
				  $ssdeepExeFN=0;
				  $ssdeepExeFPR=0;
				  $ssdeepExeFNR=0;
				  $ssdeepExePRE=0;
				  $ssdeepExeRECALL=0;
				  $ssdeepExeACC=0;
				  $ssdeepExeFSCORE=0;
				  $ssdeepExeMCC=0;
			
				  $ssdeepDllTP=0;
				  $ssdeepDllTN=0;
				  $ssdeepDllFP=0;
				  $ssdeepDllFN=0;
				  $ssdeepDllFPR=0;
				  $ssdeepDllFNR=0;
				  $ssdeepDllPRE=0;
				  $ssdeepDllRECALL=0;
				  $ssdeepDllACC=0;
				  $ssdeepDllFSCORE=0;
				  $ssdeepDllMCC=0;
				
				  $sdhashExeTP=0;
				  $sdhashExeTN=0;
				  $sdhashExeFP=0;
				  $sdhashExeFN=0;
				  $sdhashExeFPR=0;
				  $sdhashExeFNR=0;
				  $sdhashExePRE=0;
				  $sdhashExeRECALL=0;
				  $sdhashExeACC=0;
				  $sdhashExeFSCORE=0;
				  $sdhashExeMCC=0;			
			
				  $sdhashDllTP=0;
				  $sdhashDllTN=0;
				  $sdhashDllFP=0;
				  $sdhashDllFN=0;
				  $sdhashDllFPR=0;
				  $sdhashDllFNR=0;
				  $sdhashDllPRE=0;
				  $sdhashDllRECALL=0;
				  $sdhashDllACC=0;
				  $sdhashDllFSCORE=0;
				  $sdhashDllMCC=0;			
				
				 

				  $numOfExe=0;
				  $numOfDll=0;
				  //$numOfText1=0;
				  //$numOfText2=0;	  


//////////////////////////////////////////////////////////

  

				  ?>
            
            
          			
    	  <div id="rightContent">
          <div id="breadcrumb">Identification of code version ➤ <a href="evaluateSoftwareVersionDetection.php">Test Cases</a> ➤ <a href="result_report_codeIdentification.php?threshold=22"> Comparative Assessment </a></div>
    	    <div id="" style="font-family: Arial, 'Century Gothic'; background-color: #0e375d;color:white; text-align: center;align-content: center;align-items: center;font-size: 18px; height: 30px;text-align:left; vertical-align: middle;padding-top: 10px;padding-left: 10px;">Identification of code version</div> 
			  <form id="frm" method="get" action="javascript:redirect();">
				 <?php $tblid=1; ?>
				  <!--<table id="table<?php// echo $tblid; ?>" style="width: 100%; height: 100%;">-->
				  <!--<div>&nbsp;</div>
             
              <div id="" style="font-family: Arial, 'Century Gothic'; background-color: #;Color:0e375d; text-align: center;align-content: center;align-items: center;font-size: 14px; height: 20px;text-align:left; vertical-align: middle;padding-top: 10px;padding-left: 10px;"> Scheme: ssdeep &nbsp;&nbsp; DataSet: Text</div> -->
              
              <?php 
			  
				/*  $ssdeepJpegTP=($ssdeepJpegTP_0+$ssdeepJpegTP_1)/2;
				  $ssdeepJpegTN=($ssdeepJpegTN_0+$ssdeepJpegTN_1)/2;;
				  $ssdeepJpegFP=($ssdeepJpegFP_0+$ssdeepJpegFP_1)/2;
				  $ssdeepJpegFN=($ssdeepJpegFN_0+$ssdeepJpegFN_1)/2;
				  $ssdeepJpegFPR=($ssdeepJpegFPR_0+$ssdeepJpegFPR_1)/2;
				  $ssdeepJpegFNR=($ssdeepJpegFNR_0+$ssdeepJpegFNR_1)/2;
				  $ssdeepJpegPRE=($ssdeepJpegPRE_0+$ssdeepJpegPRE_1)/2;
				  $ssdeepJpegRECALL=($ssdeepJpegRECALL_0+$ssdeepJpegRECALL_1)/2;
				  $ssdeepJpegACC=($ssdeepJpegACC_0+$ssdeepJpegACC_1)/2;
				  $ssdeepJpegFSCORE=($ssdeepJpegFSCORE_0+$ssdeepJpegFSCORE_1)/2;
				  $ssdeepJpegMCC=($ssdeepJpegMCC_0+$ssdeepJpegMCC_1)/2;			  
			  
			  */
			  
			  ?>
              
              
              
              
               <?php
				  //file to store results to generate pdf
				  
				  	$tmp_Pdf_file = 'Tmp_Results_Pdf1.txt';
					$tmp_handle = fopen($tmp_Pdf_file, 'wb') or die('Cannot open file:  '.$tmp_Pdf_file);
					
				  
				  ?>
				  
				  
				   <?php
						 
					  
					  	//$caseValue=(int)$_GET['case'];
					    $FlIndx1=18;
						$FlIndx2=9;
					  	$expldSign="_";
					  	
					  	$fldr1='..\Data\ProgramFiles\Exe';	
							$fldr2='..\Data\ProgramFiles\Exe';
					  
					  
						  
						 //echo exec('ssdeep -r Data\Results\TEXT\Sequentialfragment\Result >ssdeepFreg1.text');
						  
						 //echo exec('ssdeep -r Data\Results\TEXT\Sequentialfragment\Text >ssdeepFreg2.text');
						  $starttime1 = time(true);
						  //$rslt= exec('ssdeep -k ssdeepCodeIdentification.text ssdeepCodeIdentification.text >ssdeepCodeIdentificationResult.text');
						  $endtime1 = time(true);
							$timediff1 = $endtime1 - $starttime1;
							//echo "Time2***********".$timediff1;
						  $rslt = file_get_contents('..\Final_Report_Fragment\ssdeepCodeIdentificationResultExe.text', true);
					  $sn=0;
						
							$tp=0;
							$tn=0;
							$fp=0;
							$fn=0;
							$sn=0;
							
							$t=(int)$_GET['threshold'];
					  		$rw="";
							
					  		if($rslt==""){
								
								$dir1    = $fldr1;
								$files1 = scandir($dir1);

								$dir2    = $fldr2;
								$files2 = scandir($dir2);
								
								$numOfTarget=count($files1);
									
								$numOfFlWthImg=count($files2);
					  	
								$numOfComprsn=$numOfTarget*$numOfFlWthImg;
					  	
							?>
					  
					  
						  <!--<tr><td><table>-->
						  <?php 
								
								
						  foreach($files1 as &$value1){
							  $rw="";
						  
							  if (!in_array($value1,array(".",".."))){							  
							  
							  foreach($files2 as &$value2){
								  
								  if (!in_array($value2,array(".",".."))){
							  		
									  $sn++;
									  
									  if((($sn-1)!=0) && (($sn-1)%10==0)){
									$tblid++;		
									  
						  ?>
				  
					  <?php } ?>
                      
                      <?php
					  //$rw=$rw.$sn.";".$value1.";".$value2.";"."0;";
					  $similarity=0;
								$embdFl_arr = explode("_", $value1);
								$ln=count($embdFl_arr);
								$embddFl=$embdFl_arr[0];
								$imgFl=$value2;	  
								//echo $embddFl."************************".$imgFl;
				
								
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
							  }
							  
							  }
						   		
							  
						  
						  } 	
								
								
							}else{
					  
						  $arr = explode("\n", $rslt);
						  
								$sn=0;
								
								//$tblid=0;
						  
						  foreach ($arr as &$value) {
							  $rw="";
							  $sn++;
						  if(strlen($value)==0){
						  continue;
						  }
						  $arr_match = explode(" matches ", $value);
						  $arr1=explode("\\",$arr_match[0]);
						  $arr2=explode("\\",$arr_match[1]);
						  $arr1_size= count($arr1);
						  $arr2_size= count($arr2);
						  $arr3=explode("(",$arr2[$arr2_size-1]);
						  $target=$arr1[$arr1_size-1];
						  $file_img=$arr3[0];
						  $similarity=substr($arr3[1],0,-3);
						  if(($sn-1!=0) && (($sn-1)%10==0)){
						   $tblid++;		
							  
							  
								 }
					  ?>
					  
					  
					<?php
					  //$rw=$rw.$sn.";".$target.";".$file_img.";".round($similarity,2).PHP_EOL;
					  $embddFll=$target;
						$imgFll=$file_img;
						
						 $embdFl_arr = explode($expldSign, $embddFll);
						  $imgFl_arr = explode($expldSign, $imgFll);
								$embddFl=$embdFl_arr[1];
								$imgFl=trim($imgFl_arr[1]);	  
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
				if(strcmp($embdFl_arr[1],$imgFl_arr[1])==0	){
					$simlarfl++;
				}else{
					$dsimlarfl++;
				}
				
			  }
			  
			  
		  }
		  
      } 
	   
	   
   } 
			  $numOfExe= $numOfTarget;
			  
			  //echo "Total number of similar files".$simlarfl;
			  //echo "Total number of disimilar files".$dsimlarfl;
			  //echo "Total number of resultant files".$ttlRsltntFl;
			  

?>
              
			  
			 <table>
              <tr style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center;"><td colspan="2">Scheme : ssdeep &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data Set : Exe &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td></tr>
              <tr><td width="89%">True Positive</td><td width="11%"><?php echo $tp; ?></td></tr>
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
              <tr><td>False positive rate (FPR)</td><td><?php $fpr=$fp/$numOfComprsn;  echo round($fpr,6); ?></td></tr>
              <tr><td>False negative rate (FNR)</td><td><?php $fnr=$fn/$numOfComprsn; echo round($fnr,6); ?></td></tr>
              
               <?php 
			  if(($tp+$fn)!=0)	{
				$pre=$tp/($tp+$fp);
				}else{
					$pre=0;
				} 
			  
			  ?>
               <tr><td>Precision <div style="font-size:9px; color:#F00;">A perfect precision score of 1.0 means that every result retrieved by a search was relevant.</div></td><td><?php echo round($pre,6); ?></td></tr>
               <?php
			  if(($tp+$fn)!=0)	{
				$recall=$tp/($tp+$fn);	
				}else{
					$recall=0;
				} 
			   ?>
                <tr><td>Recall<div style="font-size:9px; color:#F00;">A perfect recall score of 1.0 means that all relevant documents were retrieved by the search.</div></td><td><?php echo round($recall,6); ?></td></tr>
                <?php 
				 if(($pre+$recall)!=0){
					$f= 2*($pre*$recall)/($pre+$recall);
				 }else{
					 $f=0;
				 }
				
				
				?>
                <tr><td>F-score<div style="font-size:9px; color:#F00;"> A measure of a test's accuracy (best value at 1 and worst at 0)</div></td><td><?php echo round($f,4); ?></td></tr>
                
                 <?php
				 $sqrt1_2=sqrt(($tp+$fp)*($tp+$fn)*($tn+$fp)*($tn+$fn));
				 
				 if($sqrt1_2==0){
				$ssdeepExeMCC=0;
				
				}else{	  
				  
			  $ssdeepExeMCC=(($tp*$tn)-($fp*$fn))/$sqrt1_2;
				}
				 
				 
				 ?>
                <tr><td width="77%;">MCC<div style="font-size:9px; color:#F00;"> A measure of the quality of (best value at 1 and worst at -1)</div></td><td><?php echo round($ssdeepExeMCC,6); ?></td></tr> 
                
                <?php
                $ssdeepExeTP=$tp;
				  $ssdeepExeTN=$tn;
				  $ssdeepExeFP=$fp;
				  $ssdeepExeFN=$fn;
				  $ssdeepExeFPR=$fpr;
				  $ssdeepExeFNR=$fnr;
				  $ssdeepExePRE=$pre;
				  $ssdeepExeRECALL=$recall;
				  //$ssdeepExeACC=0;
				  $ssdeepExeFSCORE=$f;
				  //$ssdeepExeMCC=0;
                
                ?>
                
              
              </table>
					  
		
        
  <!-------------------------SSDEEP DLL--------------------------------->
        
        
         <?php
						 
					  
					  	//$caseValue=(int)$_GET['case'];
					    $FlIndx1=18;
						$FlIndx2=9;
					  	$expldSign="_";
					  	
					  	$fldr1='../Data\ProgramFiles\Dll';	
							$fldr2='../Data\ProgramFiles\Dll';
					  
					  
						  
						 //echo exec('ssdeep -r Data\Results\TEXT\Sequentialfragment\Result >ssdeepFreg1.text');
						  
						 //echo exec('ssdeep -r Data\Results\TEXT\Sequentialfragment\Text >ssdeepFreg2.text');
						  $starttime1 = time(true);
						  //$rslt= exec('ssdeep -k ssdeepCodeIdentification.text ssdeepCodeIdentification.text >ssdeepCodeIdentificationResult.text');
						  $endtime1 = time(true);
							$timediff1 = $endtime1 - $starttime1;
							//echo "Time2***********".$timediff1;
						  $rslt = file_get_contents('../Final_Report_Fragment\ssdeepCodeIdentificationResultDll.text', true);
					  $sn=0;
						
							$tp=0;
							$tn=0;
							$fp=0;
							$fn=0;
							$sn=0;
							
							$t=(int)$_GET['threshold'];
					  		$rw="";
							
					  		if($rslt==""){
								
								$dir1    = $fldr1;
								$files1 = scandir($dir1);

								$dir2    = $fldr2;
								$files2 = scandir($dir2);
								
								$numOfTarget=count($files1);
									
								$numOfFlWthImg=count($files2);
					  	
								$numOfComprsn=$numOfTarget*$numOfFlWthImg;
					  	
							?>
					  
					  
						  <!--<tr><td><table>-->
						  <?php 
								
								
						  foreach($files1 as &$value1){
							  $rw="";
						  
							  if (!in_array($value1,array(".",".."))){							  
							  
							  foreach($files2 as &$value2){
								  
								  if (!in_array($value2,array(".",".."))){
							  		
									  $sn++;
									  
									  if((($sn-1)!=0) && (($sn-1)%10==0)){
									$tblid++;		
									  
						  ?>
				  
					  <?php } ?>
                      
                      <?php
					  //$rw=$rw.$sn.";".$value1.";".$value2.";"."0;";
					  $similarity=0;
								$embdFl_arr = explode("_", $value1);
								$ln=count($embdFl_arr);
								$embddFl=$embdFl_arr[0];
								$imgFl=$value2;	  
								//echo $embddFl."************************".$imgFl;
				
								
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
							  }
							  
							  }
						   		
							  
						  
						  } 	
								
								
							}else{
					  
						  $arr = explode("\n", $rslt);
						  
								$sn=0;
								
								//$tblid=0;
						  
						  foreach ($arr as &$value) {
							  $rw="";
							  $sn++;
						  if(strlen($value)==0){
						  continue;
						  }
						  $arr_match = explode(" matches ", $value);
						  $arr1=explode("\\",$arr_match[0]);
						  $arr2=explode("\\",$arr_match[1]);
						  $arr1_size= count($arr1);
						  $arr2_size= count($arr2);
						  $arr3=explode("(",$arr2[$arr2_size-1]);
						  $target=$arr1[$arr1_size-1];
						  $file_img=$arr3[0];
						  $similarity=substr($arr3[1],0,-3);
						  if(($sn-1!=0) && (($sn-1)%10==0)){
						   $tblid++;		
							  
							  
								 }
					  
					  //$rw=$rw.$sn.";".$target.";".$file_img.";".round($similarity,2).PHP_EOL;
					  $embddFll=$target;
						$imgFll=$file_img;
						
						 $embdFl_arr = explode($expldSign, $embddFll);
						  $imgFl_arr = explode($expldSign, $imgFll);
								$embddFl=$embdFl_arr[1];
								$imgFl=trim($imgFl_arr[1]);	  
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
				if(strcmp($embdFl_arr[1],$imgFl_arr[1])==0	){
					$simlarfl++;
				}else{
					$dsimlarfl++;
				}
				
			  }
			  
			  
		  }
		  
      } 
	   
	   
   } 
			  
			  $numOfDll=$numOfTarget;
			  //echo "Total number of similar files".$simlarfl;
			  //echo "Total number of disimilar files".$dsimlarfl;
			  //echo "Total number of resultant files".$ttlRsltntFl;
			  

?>
              
			  
			 <table>
              <tr style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center;"><td colspan="2">Scheme : ssdeep &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data Set : Dll &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td></tr>
              <tr><td width="89%">True Positive</td><td width="11%"><?php echo $tp; ?></td></tr>
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
              <tr><td>False positive rate (FPR)</td><td><?php $fpr=$fp/$numOfComprsn;  echo $fpr; ?></td></tr>
              <tr><td>False negative rate (FNR)</td><td><?php $fnr=$fn/$numOfComprsn; echo $fnr; ?></td></tr>
              
               <?php 
			  if(($tp+$fn)!=0)	{
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
				 $sqrt1_2=sqrt(($tp+$fp)*($tp+$fn)*($tn+$fp)*($tn+$fn));
				 
				 if($sqrt1_2==0){
				$ssdeepDllMCC=0;
				
				}else{	  
				  
			  $ssdeepDllMCC=(($tp*$tn)-($fp*$fn))/$sqrt1_2;
				}
				 
				 
				 ?>
                <tr><td width="77%;">MCC<div style="font-size:9px; color:#F00;"> A measure of the quality of (best value at 1 and worst at -1)</div></td><td><?php echo $ssdeepDllMCC; ?></td></tr> 
                
                <?php
                $ssdeepDllTP=$tp;
				  $ssdeepDllTN=$tn;
				  $ssdeepDllFP=$fp;
				  $ssdeepDllFN=$fn;
				  $ssdeepDllFPR=$fpr;
				  $ssdeepDllFNR=$fnr;
				  $ssdeepDllPRE=$pre;
				  $ssdeepDllRECALL=$recall;
				  //$ssdeepDllACC=0;
				  $ssdeepDllFSCORE=$f;
				  //$ssdeepDllMCC=0;
                
                ?>
                
              
              </table>
        
        				 
              
              
              
              
				<!--///////////////////////////////////////////////////////////////////////////////////////////-->
              
              
              
              
						  <?php
						  
					  	 //$caseValue=(int)$_GET['case'];
					    $FlIndx1=18;
						$FlIndx2=9;
					  	$expldSign="_";
					  	
					  
					  
					    $starttime2 = time(true);
						//$rslt= exec('sdhash -c sdhashCodeIdentification.sdbf sdhashCodeIdentification.sdbf | sort >sdhashCodeIdentificationResult.text');
						  $endtime2 = time(true);
							$timediff2 = $endtime2 - $starttime2;
							//echo "**Time2***********".$timediff2;	  
						  $rslt = file_get_contents('..\Final_Report_Fragment\sdhashCodeIdentificationResultExe.text', true);
						  $sn=0;
						  $tp=0;
						  $tn=0;
						  $fp=0;
						  $fn=0;
						  $sn=0;
						  $rw="";
							$t=(int)$_GET['threshold'];
					  		if($rslt==""){
								
								
						$dir1    = $fldr1;
					  	$files1 = scandir($dir1);
						
						$dir2    = $fldr2;
					  	$files2 = scandir($dir2);
								
							
							
						 
					  
								
							}else{
					  
						  $arr = explode("\n", $rslt);
						  
						  //echo count($arr);
						  
						  foreach ($arr as &$value) {
						  ?>
                          <?php
                              if(($sn!=0) && (($sn)%10==0)){
									$tblid++;		
							  
							  
								 }
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
						  $rw=$rw.$embddFll.";".$imgFll.";".round($similarity,2).PHP_EOL;
						  $embdFl_arr = explode($expldSign, $embddFll);
						  $imgFl_arr = explode($expldSign, $imgFll);
								//$ln=count($embdFl_arr);
								//$lnn=count($imgFl_arr);
								$embddFl=trim($embdFl_arr[1]);
								$imgFl=trim($imgFl_arr[1]);	  
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
						  
						  
					  }
					   ?>
					  <?php
							  
					  }
						
   $numOfTarget=0;
   $numOfFlWthImg=0;
   $fi1 = new FilesystemIterator($fldr1, FilesystemIterator::SKIP_DOTS);
$numOfTarget=iterator_count($fi1);
$fi2 = new FilesystemIterator($fldr2, FilesystemIterator::SKIP_DOTS);
$numOfFlWthImg=iterator_count($fi2);
$numOfComprsn=$numOfTarget*$numOfFlWthImg;

//echo $numOfComprsn;
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
				if(strcmp($embdFl_arr[1],$imgFl_arr[1])==0	){
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
              <tr style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center;"><td colspan="2">Scheme : sdhash &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data Set : Exe &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
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
              <tr><td>False positive rate (FPR)</td><td><?php  echo $fp/$numOfComprsn; ?></td></tr>
              <tr><td>False negative rate (FNR)</td><td><?php echo $fn/$numOfComprsn; ?></td></tr>
              
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
				 $sqrt1_2=sqrt(($tp+$fp)*($tp+$fn)*($tn+$fp)*($tn+$fn));
				 
				 if($sqrt1_2==0){
				$sdhashExeMCC=0;
				
				}else{	  
				  
			  $sdhashExeMCC=(($tp*$tn)-($fp*$fn))/$sqrt1_2;
				}
				 
				 
				 ?>
                <tr><td width="77%;">MCC<div style="font-size:9px; color:#F00;"> A measure of the quality of (best value at 1 and worst at -1)</div></td><td><?php echo $sdhashExeMCC; ?></td></tr> 
			  
			  
			  
              </table>
              
              
              
              <?php 
			  
			  
			$sdhashExeTP=$tp;
			$sdhashExeTN=$tn;
			$sdhashExeFP=$fp;
			$sdhashExeFN=$fn;
			$sdhashExeFPR=$fpr;
			$sdhashExeFNR=$fnr;
			$sdhashExePRE=$pre;
			$sdhashExeRECALL=$recall;
			//$sdhashExeACC=0;
			$sdhashExeFSCORE=$f;
			//$sdhashExeMCC=0;		
			  
			  
			  
			  
			  
			  ?>
               
				  
                      
                      
                      
                      
<!--///////////////////////////////////////////////////////////////////////////////////////////-->
              
              
              
              
						  <?php
						  
					  	 //$caseValue=(int)$_GET['case'];
					    $FlIndx1=18;
						$FlIndx2=9;
					  	$expldSign="_";
					  	
					  
					  
					    $starttime2 = time(true);
						//$rslt= exec('sdhash -c sdhashCodeIdentification.sdbf sdhashCodeIdentification.sdbf | sort >sdhashCodeIdentificationResult.text');
						  $endtime2 = time(true);
							$timediff2 = $endtime2 - $starttime2;
							//echo "**Time2***********".$timediff2;	  
						  $rslt = file_get_contents('..\Final_Report_Fragment\sdhashCodeIdentificationResultDll.text', true);
						  $sn=0;
						  $tp=0;
						  $tn=0;
						  $fp=0;
						  $fn=0;
						  $sn=0;
						  $rw="";
							$t=(int)$_GET['threshold'];
					  		if($rslt==""){
								
								
						$dir1    = $fldr1;
					  	$files1 = scandir($dir1);
						
						$dir2    = $fldr2;
					  	$files2 = scandir($dir2);
								
							
						  }else{
					  
						  $arr = explode("\n", $rslt);
						  
						  //echo count($arr);
						  
						  foreach ($arr as &$value) {
						  ?>
                          <?php
                              if(($sn!=0) && (($sn)%10==0)){
									$tblid++;		
							  
							  ?>
				 
					  
					  
					  <?php 
								 }
					  ?>
                          
                          
                               <?php $sn++; ?>
                            <?php if($value!=null){  
						  
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
						  $rw=$rw.$embddFll.";".$imgFll.";".round($similarity,2).PHP_EOL;
						  $embdFl_arr = explode($expldSign, $embddFll);
						  $imgFl_arr = explode($expldSign, $imgFll);
						  $embddFl=trim($embdFl_arr[1]);
						  $imgFl=trim($imgFl_arr[1]);	  
								
						  
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
						  }
						  
						  
					  }
					   
							  
					  }
						// fwrite($tmp_handle, $rw); 
					
   // $dir = opendir('uploads/'); # This is the directory it will count from
   $numOfTarget=0;
   $numOfFlWthImg=0;
   $fi1 = new FilesystemIterator($fldr1, FilesystemIterator::SKIP_DOTS);
$numOfTarget=iterator_count($fi1);
$fi2 = new FilesystemIterator($fldr2, FilesystemIterator::SKIP_DOTS);
$numOfFlWthImg=iterator_count($fi2);
$numOfComprsn=$numOfTarget*$numOfFlWthImg;

//echo $numOfComprsn;
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
				if(strcmp($embdFl_arr[1],$imgFl_arr[1])==0	){
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
              <tr style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center;"><td colspan="2">Scheme : sdhash &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data Set : Dll &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
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
              <tr><td>False positive rate (FPR)</td><td><?php  echo $fp/$numOfComprsn; ?></td></tr>
              <tr><td>False negative rate (FNR)</td><td><?php echo $fn/$numOfComprsn; ?></td></tr>
              
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
				 $sqrt1_2=sqrt(($tp+$fp)*($tp+$fn)*($tn+$fp)*($tn+$fn));
				 
				 if($sqrt1_2==0){
				$sdhashDllMCC=0;
				
				}else{	  
				  
			  $sdhashDllMCC=(($tp*$tn)-($fp*$fn))/$sqrt1_2;
				}
				 
				 
				 ?>
                <tr><td width="77%;">MCC<div style="font-size:9px; color:#F00;"> A measure of the quality of (best value at 1 and worst at -1)</div></td><td><?php echo $sdhashDllMCC; ?></td></tr> 
			  
			  
			  
              </table>
              
              
              
              <?php 
			  
			  
			$sdhashDllTP=$tp;
			$sdhashDllTN=$tn;
			$sdhashDllFP=$fp;
			$sdhashDllFN=$fn;
			$sdhashDllFPR=$fpr;
			$sdhashDllFNR=$fnr;
			$sdhashDllPRE=$pre;
			$sdhashDllRECALL=$recall;
			//$sdhashDllACC=0;
			$sdhashDllFSCORE=$f;
			//$sdhashDllMCC=0;		
			  
			  
			  
			  
			  
			  ?>                      
                      
                      
                      
                      
                      
                      					  

<!--////////////////////////////////////////////Here////////////////////////////////////////////////////////////////////////////-->				  
                  
                  
                  
                  
                 
				  
				  
				  
<?php ////////////////////////////////////sdhash Docx Random ends///////////////////////////////////////////////////////////// ?>				  
				  
				  
				  
                  
                  
                  
                  
                  
                <table>  
                	  
                     
                      
					  <tr align="righ" ><td colspan="2" align="right"><input type="submit" align="middle" value=" Next " style="margin-left:50%"  onClick="location.href = 'result_report_code_identification_graph.php?ssdeepExeFSCORE=<?php echo $ssdeepExeFSCORE ?>&ssdeepDllFSCORE=<?php echo $ssdeepDllFSCORE ?>&ssdeepExeMCC=<?php echo $ssdeepExeMCC ?>&ssdeepDllMCC=<?php echo $ssdeepDllMCC ?>&sdhashExeFSCORE=<?php echo $sdhashExeFSCORE ?>&sdhashDllFSCORE=<?php echo $sdhashDllFSCORE ?>&sdhashExeMCC=<?php echo $sdhashExeMCC ?>&sdhashDllMCC=<?php echo $sdhashDllMCC ?>&numOfExe=<?php echo $numOfExe ?>&numOfDll=<?php echo $numOfDll ?>&ssdeepExePRE=<?php echo $ssdeepExePRE ?>&ssdeepDllPRE=<?php echo $ssdeepDllPRE ?>&sdhashExePRE=<?php echo $sdhashExePRE ?>&sdhashDllPRE=<?php echo $sdhashDllPRE ?>&ssdeepExeRECALL=<?php echo $ssdeepExeRECALL ?>&ssdeepDllRECALL=<?php echo $ssdeepDllRECALL ?>&sdhashExeRECALL=<?php echo $sdhashExeRECALL ?>&sdhashDllRECALL=<?php echo $sdhashDllRECALL ?>&ssdeepExeFPR=<?php echo $ssdeepExeFPR ?>&ssdeepDllFPR=<?php echo $ssdeepDllFPR ?>&sdhashExeFPR=<?php echo $sdhashExeFPR ?>&sdhashDllFPR=<?php echo $sdhashDllFPR ?>&ssdeepExeFNR=<?php echo $ssdeepExeFNR ?>&ssdeepDllFNR=<?php echo $ssdeepDllFNR ?>&sdhashExeFNR=<?php echo $sdhashExeFNR ?>&sdhashDllFNR=<?php echo $sdhashDllFNR ?>';"  ></td></tr>
					
					
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
