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
				  $ssdeepSeqTP=0;
				  $ssdeepSeqTN=0;
				  $ssdeepSeqFP=0;
				  $ssdeepSeqFN=0;
				  $ssdeepSeqFPR=0;
				  $ssdeepSeqFNR=0;
				  $ssdeepSeqPRE=0;
				  $ssdeepSeqRECALL=0;
				  $ssdeepSeqACC=0;
				  $ssdeepSeqFSCORE=0;
				  $ssdeepSeqMCC=0;
			
				  $ssdeepRanTP=0;
				  $ssdeepRanTN=0;
				  $ssdeepRanFP=0;
				  $ssdeepRanFN=0;
				  $ssdeepRanFPR=0;
				  $ssdeepRanFNR=0;
				  $ssdeepRanPRE=0;
				  $ssdeepRanRECALL=0;
				  $ssdeepRanACC=0;
				  $ssdeepRanFSCORE=0;
				  $ssdeepRanMCC=0;
				
				  $sdhashSeqTP=0;
				  $sdhashSeqTN=0;
				  $sdhashSeqFP=0;
				  $sdhashSeqFN=0;
				  $sdhashSeqFPR=0;
				  $sdhashSeqFNR=0;
				  $sdhashSeqPRE=0;
				  $sdhashSeqRECALL=0;
				  $sdhashSeqACC=0;
				  $sdhashSeqFSCORE=0;
				  $sdhashSeqMCC=0;			
			
				  $sdhashRanTP=0;
				  $sdhashRanTN=0;
				  $sdhashRanFP=0;
				  $sdhashRanFN=0;
				  $sdhashRanFPR=0;
				  $sdhashRanFNR=0;
				  $sdhashRanPRE=0;
				  $sdhashRanRECALL=0;
				  $sdhashRanACC=0;
				  $sdhashRanFSCORE=0;
				  $sdhashRanMCC=0;			
				
				 

				  $numOfSeqText=0;
				  $numOfRanText=0;
				  $numOfText1=0;
				  $numOfText2=0;	  


				  $ssdeepSeqTPDocx=0;
				  $ssdeepSeqTNDocx=0;
				  $ssdeepSeqFPDocx=0;
				  $ssdeepSeqFNDocx=0;
				  $ssdeepSeqFPRDocx=0;
				  $ssdeepSeqFNRDocx=0;
				  $ssdeepSeqPREDocx=0;
				  $ssdeepSeqRECALLDocx=0;
				  $ssdeepSeqACCDocx=0;
				  $ssdeepSeqFSCOREDocx=0;
				  $ssdeepSeqMCCDocx=0;
			
				  $ssdeepRanTPDocx=0;
				  $ssdeepRanTNDocx=0;
				  $ssdeepRanFPDocx=0;
				  $ssdeepRanFNDocx=0;
				  $ssdeepRanFPRDocx=0;
				  $ssdeepRanFNRDocx=0;
				  $ssdeepRanPREDocx=0;
				  $ssdeepRanRECALLDocx=0;
				  $ssdeepRanACCDocx=0;
				  $ssdeepRanFSCOREDocx=0;
				  $ssdeepRanMCCDocx=0;
				
				  $sdhashSeqTPDocx=0;
				  $sdhashSeqTNDocx=0;
				  $sdhashSeqFPDocx=0;
				  $sdhashSeqFNDocx=0;
				  $sdhashSeqFPRDocx=0;
				  $sdhashSeqFNRDocx=0;
				  $sdhashSeqPREDocx=0;
				  $sdhashSeqRECALLDocx=0;
				  $sdhashSeqACCDocx=0;
				  $sdhashSeqFSCOREDocx=0;
				  $sdhashSeqMCCDocx=0;			
			
				  $sdhashRanTPDocx=0;
				  $sdhashRanTNDocx=0;
				  $sdhashRanFPDocx=0;
				  $sdhashRanFNDocx=0;
				  $sdhashRanFPRDocx=0;
				  $sdhashRanFNRDocx=0;
				  $sdhashRanPREDocx=0;
				  $sdhashRanRECALLDocx=0;
				  $sdhashRanACCDocx=0;
				  $sdhashRanFSCOREDocx=0;
				  $sdhashRanMCCDocx=0;			
				
				 

				  $numOfSeqDocx=0;
				  $numOfRanDocx=0;
				  $numOfDocx1=0;
				  $numOfDocx2=0;	  

				  ?>
            
            
          			
    	  <div id="rightContent">
           <div id="breadcrumb">Fragment Identification ➤ <a href="evaluateFragment.php">Test Cases</a> ➤ <a href="result_report_text.php?threshold=22">Comparative Assessment</a></div>
    	    <div id="" style="font-family: Arial, 'Century Gothic'; background-color: #0e375d;color:white; text-align: center;align-content: center;align-items: center;font-size: 18px; height: 30px;text-align:left; vertical-align: middle;padding-top: 10px;padding-left: 10px;"> Fragment Correlation Test </div> 
			  <form id="frm" method="get" action="javascript:redirect();">
				 <?php $tblid=1; ?>
				  <!--<table id="table<?php// echo $tblid; ?>" style="width: 100%; height: 100%;">-->
				  <!--<div>&nbsp;</div>
             
              <div id="" style="font-family: Arial, 'Century Gothic'; background-color: #;Color:0e375d; text-align: center;align-content: center;align-items: center;font-size: 14px; height: 20px;text-align:left; vertical-align: middle;padding-top: 10px;padding-left: 10px;"> Scheme: ssdeep &nbsp;&nbsp; DataSet: Text</div> -->
              
             
               <?php
				  //file to store results to generate pdf
				  
				  	$tmp_Pdf_file = 'Tmp_Results_Pdf1.txt';
					$tmp_handle = fopen($tmp_Pdf_file, 'wb') or die('Cannot open file:  '.$tmp_Pdf_file);
					
				  
				   //echo exec('ssdeep -r ..\Data\FragmentIdentification\Text\Sequentialfragment\Result >ssdeepFreg1.text');
						  
				   //echo exec('ssdeep -r Data\FragmentIdentification\Text\Sequentialfragment\Text >ssdeepFreg2.text');
						  
				   //$rslt= exec('ssdeep -k ssdeepFreg1.text ssdeepFreg2.text >ssdeepFregSeq.text');
						  
						  $rslt = file_get_contents('..\Final_Report_Fragment\ssdeepFregSeq.text', true);
					  $sn=0;
						
							$tp=0;
							$tn=0;
							$fp=0;
							$fn=0;
							$sn=0;
							
							$t=(int)$_GET['threshold'];
					  		$rw="";
							
					  		if($rslt==""){
								/*
								$dir1    = '..\Data\FragmentIdentification\Text\Sequentialfragment\Result';
								$files1 = scandir($dir1);

								$dir2    = '..\Data\FragmentIdentification\Text\Sequentialfragment\Text';
								$files2 = scandir($dir2);
								
								$numOfTarget=count($files1);
									
								$numOfFlWthImg=count($files2);
					  	
								$numOfComprsn=$numOfTarget*$numOfFlWthImg;
					  	
							
								
						  foreach($files1 as &$value1){
							  $rw="";
						  
							  if (!in_array($value1,array(".",".."))){							  
							  
							  foreach($files2 as &$value2){
								  
								  if (!in_array($value2,array(".",".."))){
							  		
									  $sn++;
									  
									  if((($sn-1)!=0) && (($sn-1)%10==0)){
									$tblid++;		
									  
						 }
					  $rw=$rw.$sn.";".$value1.";".$value2.";"."0".PHP_EOL;
					  $similarity=0;
								$embdFl_arr = explode("_", $value1);
								$ln=count($embdFl_arr);
								$embddFl=$embdFl_arr[0];
								$imgFl=$value2;	  
								
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
								
					  $prcnt_tmp=explode(".",$embdFl_arr[1]);
					  $prcnt=$prcnt_tmp[0];
					  
					$real_similarity=0;
				 	
					switch ($prcnt) {
						case "0":
							$real_similarity=95;
							break;
						case "1":
							$real_similarity=90;
							break;

						case "2":
							$real_similarity=85;
							break;
						case "3":
							$real_similarity=80;
							break;
						case "4":
							$real_similarity=75;
							break;
						case "5":
							$real_similarity=70;
							break;
						case "6":
							$real_similarity=65;
							break;
						case "7":
							$real_similarity=60;
							break;
						case "8":
							$real_similarity=55;
							break;
						case "9":
							$real_similarity=50;
							break;
						case "10":
							$real_similarity=45;
							break;
						case "11":
							$real_similarity=40;
							break;
						case "12":
							$real_similarity=35;
							break;
						case "13":
							$real_similarity=30;
							break;
						case "14":
							$real_similarity=25;
							break;
						case "15":
							$real_similarity=20;
							break;
						case "16":
							$real_similarity=15;
							break;
						case "17":
							$real_similarity=10;
							break;
						case "18":
							$real_similarity=5;
							break;
						case "19":
							$real_similarity=4;
							break;
						case "20":
							$real_similarity=3;	
							break;
						case "21":
							$real_similarity=2;
							break;
						case "22":
							$real_similarity=1;
							break;
						case "23":
							$real_similarity=">1";
							break;
						
						
						
					}
					  }
						  }
							  
							  }
						   
							  fwrite($tmp_handle, $rw);
							  
						  
						  } 
						  */
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
							  if(($sn!=0) && (($sn+1)%10==0)){
								$tblid++;		
								 }
					  
					  $rw=$rw.$sn.";".$target.";".$file_img.";".round($similarity,2).PHP_EOL;
					  $embddFll=$target;
					  $imgFll=$file_img;
						
						 $embdFl_arr = explode("__", $embddFll);
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
					 
					  
					  $prcnt_tmp=explode(".",$embdFl_arr[1]);
					  $prcnt=$prcnt_tmp[0];
					 
					  
					$real_similarity=0;
				 	
					switch ($prcnt) {
						case "0":
							$real_similarity=95;
							break;
						case "1":
							$real_similarity=90;
							break;
						case "2":
							$real_similarity=85;
							break;
						case "3":
							$real_similarity=80;
							break;
						case "4":
							$real_similarity=75;
							break;
						case "5":
							$real_similarity=70;
							break;
						case "6":
							$real_similarity=65;
							break;
						case "7":
							$real_similarity=60;
							break;
						case "8":
							$real_similarity=55;
							break;
						case "9":
							$real_similarity=50;
							break;
						case "10":
							$real_similarity=45;
							break;
						case "11":
							$real_similarity=40;
							break;
						case "12":
							$real_similarity=35;
							break;
						case "13":
							$real_similarity=30;
							break;
						case "14":
							$real_similarity=25;
							break;
						case "15":
							$real_similarity=20;
							break;
						case "16":
							$real_similarity=15;
							break;
						case "17":
							$real_similarity=10;
							break;
						case "18":
							$real_similarity=5;
							break;
						case "19":
							$real_similarity=4;
							break;
						case "20":
							$real_similarity=3;	
							break;
						case "21":
							$real_similarity=2;
							break;
						case "22":
							$real_similarity=1;
							break;
						case "23":
							$real_similarity=">1";
							break;
						
						
						
					}
					
					 fwrite($tmp_handle, $rw);
					  }
							  
					  }
						  
					
   $numOfTarget=0;
   $numOfFlWthImg=0;
   $fi1 = new FilesystemIterator("..\Data\FragmentIdentification\Text\Sequentialfragment\Result", FilesystemIterator::SKIP_DOTS);
$numOfTarget=iterator_count($fi1);
$fi2 = new FilesystemIterator("..\Data\FragmentIdentification\Text\Sequentialfragment\Text", FilesystemIterator::SKIP_DOTS);
$numOfFlWthImg=iterator_count($fi2);
$numOfComprsn=$numOfTarget*$numOfFlWthImg;

$numOfText1=$numOfFlWthImg;
$numOfSeqText=$numOfTarget;
				  
				  
//echo $numOfComprsn;
///*
$dir="..\Data\FragmentIdentification\Text\Sequentialfragment\Result";			  
$cdir = scandir($dir); 

$dir2="..\Data\FragmentIdentification\Text\Sequentialfragment\Text";			  
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
              
              
              
              
			  
			 <table>
              <tr style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center; text-align: justify;padding-left: 10px;"><td colspan="2">Scheme : ssdeep &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data Set : Text &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fragment Type : Sequential </td></tr>
              <tr><td style="width: 77%;">True Positive</td><td><?php echo $tp; $ssdeepSeqTP=$tp;
				  ?></td></tr>
				   <?php 
				 
				 
				 
				   if($tn<$dsimlarfl){
					   $tn=$dsimlarfl;
					   $ssdeepSeqTN=$dsimlarfl;
				   }
				   
				   ?>
				   
              <tr><td style="width: 77%;">True Negative</td><td><?php echo $ssdeepSeqTN; ?></td></tr>
				   <?php
				   $ssdeepSeqFP=$fp;
				   
				   ?>
				   
              <tr><td style="width: 77%;">False Positive</td><td><?php echo $ssdeepSeqFP; ?></td></tr>
              <?php
				   if($tp<$simlarfl){
					   $fn=$simlarfl-$tp;
				   }
				   
				 $ssdeepSeqFN=$fn;
				 
				   ?>
				   
				   <tr><td style="width: 77%;">False Negative</td><td><?php echo $ssdeepSeqFN; ?></td></tr>
				 
				 <?php
				 $ssdeepSeqFPR=$ssdeepSeqFP/$numOfComprsn;
				 $ssdeepSeqFNR=$ssdeepSeqFN/$numOfComprsn;
				 
				 ?>
				 
              <tr><td style="width: 77%;">False positive rate (FPR)</td><td><?php  echo $ssdeepSeqFPR; ?></td></tr>
              <tr><td style="width: 77%;">False negative rate (FNR)</td><td><?php echo $ssdeepSeqFNR; ?></td></tr>
              
               <?php 
			  if(($tp+$fp)!=0)	{
				$pre=$tp/($tp+$fp);
				}else{
					$pre=0;
				} 
			  $ssdeepSeqPRE=$pre;
				 
			  ?>
				 
				 
               <tr><td style="width: 77%;">Precision <div style="font-size:9px; color:#F00;">A perfect precision score of 1.0 means that every result retrieved by a search was relevant.</div></td><td><?php echo $pre; ?></td></tr>
               <?php
			  if(($tp+$fn)!=0)	{
				$recall=$tp/($tp+$fn);	
				}else{
					$recall=0;
				} 
				 
				 $ssdeepSeqRECALL=$recall;
				 
			   ?>
                <tr><td style="width: 77%;">Recall<div style="font-size:9px; color:#F00;">A perfect recall score of 1.0 means that all relevant documents were retrieved by the search.</div></td><td><?php echo $recall; ?></td></tr>
                <?php 
				 if(($pre+$recall)!=0){
					$f= 2*($pre*$recall)/($pre+$recall);
				 }else{
					 $f=0;
				 }
				
				 $ssdeepSeqFSCORE=$f;
				
				?>
                <tr><td style="width: 77%;">F-score<div style="font-size:9px; color:#F00;"> A measure of a test's accuracy (best value at 1 and worst at 0)</div></td><td><?php echo $f; ?></td></tr>
              
				 
				 <?php
				 $sqrt1_1=sqrt(($ssdeepSeqTP+$ssdeepSeqFP)*($ssdeepSeqTP+$ssdeepSeqFN)*($ssdeepSeqTN+$ssdeepSeqFP)*($ssdeepSeqTN+$ssdeepSeqFN));
				 
				 if($sqrt1_1==0){
				$ssdeepSeqMCC=0;
				
				}else{	  
				  
			  $ssdeepSeqMCC=(($ssdeepSeqTP*$ssdeepSeqTN)-($ssdeepSeqFP*$ssdeepSeqFN))/$sqrt1_1;
				}
				 
				 
				 ?>
			<tr><td width="77%;">MCC<div style="font-size:9px; color:#F00;"> A measure of the quality of (best value at 1 and worst at -1)</div></td><td><?php echo $ssdeepSeqMCC; ?></td></tr> 
				 
				 
              </table>
              
              
              
              
				  
				  <?php
						  //echo exec('ssdeep -r Data\Docx');
						  
						 //echo exec('ssdeep -r Data\FragmentIdentification\Text\Sequentialfragment\Result >ssdeepFreg1.text');
						  
						 //echo exec('ssdeep -r Data\FragmentIdentification\Text\Sequentialfragment\Text >ssdeepFreg2.text');
						  
						  //$rslt= exec('ssdeep -k ssdeepFreg1.text ssdeepFreg2.text >ssdeepFregSeq.text');
						  
						  $rslt = file_get_contents('..\Final_Report_Fragment\ssdeepFregRan.text', true);
					  $sn=0;
						
							$tp=0;
							$tn=0;
							$fp=0;
							$fn=0;
							$sn=0;
							
							$t=(int)$_GET['threshold'];
					  		$rw="";
							
					  		if($rslt==""){
								/*
								$dir1    = '..\Data\FragmentIdentification\Text\RandomFragment\Result';
								$files1 = scandir($dir1);

								$dir2    = '..\Data\FragmentIdentification\Text\RandomFragment\Text';
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
					  $rw=$rw.$sn.";".$value1.";".$value2.";"."0".PHP_EOL;
					  $similarity=0;
								$embdFl_arr = explode("_", $value1);
								$ln=count($embdFl_arr);
								$embddFl=$embdFl_arr[0];
								$imgFl=$value2;	  
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
								
					  
					  
					  ?>
                      
                      
                      <?php 
					  
					  
					  
					  $prcnt_tmp=explode(".",$embdFl_arr[1]);
					  $prcnt=$prcnt_tmp[0];
					  
					  //echo $prcnt;
					  
					$real_similarity=0;
				 	
					switch ($prcnt) {
						case "0":
							$real_similarity=95;
							break;
						case "1":
							$real_similarity=90;
							break;

						case "2":
							$real_similarity=85;
							break;
						case "3":
							$real_similarity=80;
							break;
						case "4":
							$real_similarity=75;
							break;
						case "5":
							$real_similarity=70;
							break;
						case "6":
							$real_similarity=65;
							break;
						case "7":
							$real_similarity=60;
							break;
						case "8":
							$real_similarity=55;
							break;
						case "9":
							$real_similarity=50;
							break;
						case "10":
							$real_similarity=45;
							break;
						case "11":
							$real_similarity=40;
							break;
						case "12":
							$real_similarity=35;
							break;
						case "13":
							$real_similarity=30;
							break;
						case "14":
							$real_similarity=25;
							break;
						case "15":
							$real_similarity=20;
							break;
						case "16":
							$real_similarity=15;
							break;
						case "17":
							$real_similarity=10;
							break;
						case "18":
							$real_similarity=5;
							break;
						case "19":
							$real_similarity=4;
							break;
						case "20":
							$real_similarity=3;	
							break;
						case "21":
							$real_similarity=2;
							break;
						case "22":
							$real_similarity=1;
							break;
						case "23":
							$real_similarity=">1";
							break;
						
						
						
					}
					
					  
					  
					  ?>
                      
                      
                      
                      
                      
					 <!-- <tr><td style="text-align: center;"><?php echo $sn; ?></td><td style="text-align: center;"><?php echo $value1; ?></td><td style="text-align: center;"><?php echo $value2; ?></td><td style="text-align: center;"><?php echo 0; ?></td><td  style="text-align:center;"><?php echo $real_similarity; ?></td></tr>-->
					 
					  
					  
							  }
							  }
							  
							  }
						   
							  fwrite($tmp_handle, $rw);
							  
						  
						  } ?>
						  <!--</table>
						  </td><td>
						  <table>-->
						  <?php 
						  //foreach($files2 as &$value2){
						  
						  ?>
						  <!--<tr><td><?php echo $value2; ?></td><td></td></tr>-->
						  
						  <?php //} ?>
						  <!--</table>
						  
						  </td></tr>-->
					  
					  
							<?php	
								
								*/
								
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
						  $arr1 = explode(" matches ", $value);
						  $arr1_size= count($arr1);
						  
						   $dcmnt1 = explode("\\", $arr1[0]);
						   $file_img= $dcmnt1[count($dcmnt1)-1];
						   
						   $dcmnt2 = explode("\\", $arr1[1]);
						   $dcmnt2_tmp = explode(" ",$dcmnt2[count($dcmnt2)-1]);
						   $target=$dcmnt2_tmp[0];
						   $similarity=substr($dcmnt2_tmp[1],1,-3);
							  
							  		
									  
								 if(($sn!=0) && (($sn+1)%10==0)){
									$tblid++;		
								 }
					  
					  $rw=$rw.$sn.";".$target.";".$file_img.";".round($similarity,2).PHP_EOL;
					  $embddFll=$target;
						$imgFll=$file_img;
						
						 $embdFl_arr = explode("__", $embddFll);
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
					  
					  
					  $prcnt_tmp=explode(".",$embdFl_arr[1]);
					  $prcnt=$prcnt_tmp[0];
					  
					 
					$real_similarity=0;
				 	
					switch ($prcnt) {
						case "0":
							$real_similarity=95;
							break;
						case "1":
							$real_similarity=90;
							break;
						case "2":
							$real_similarity=85;
							break;
						case "3":
							$real_similarity=80;
							break;
						case "4":
							$real_similarity=75;
							break;
						case "5":
							$real_similarity=70;
							break;
						case "6":
							$real_similarity=65;
							break;
						case "7":
							$real_similarity=60;
							break;
						case "8":
							$real_similarity=55;
							break;
						case "9":
							$real_similarity=50;
							break;
						case "10":
							$real_similarity=45;
							break;
						case "11":
							$real_similarity=40;
							break;
						case "12":
							$real_similarity=35;
							break;
						case "13":
							$real_similarity=30;
							break;
						case "14":
							$real_similarity=25;
							break;
						case "15":
							$real_similarity=20;
							break;
						case "16":
							$real_similarity=15;
							break;
						case "17":
							$real_similarity=10;
							break;
						case "18":
							$real_similarity=5;
							break;
						case "19":
							$real_similarity=4;
							break;
						case "20":
							$real_similarity=3;	
							break;
						case "21":
							$real_similarity=2;
							break;
						case "22":
							$real_similarity=1;
							break;
						case "23":
							$real_similarity=">1";
							break;
						
						
						
					}
					
					 	
						fwrite($tmp_handle, $rw);
						
							  
						  }
							  
					  }
						  

$numOfTarget=0;
$numOfFlWthImg=0;
$fi1 = new FilesystemIterator("..\Data\FragmentIdentification\Text\RandomFragment\Result", FilesystemIterator::SKIP_DOTS);
$numOfTarget=iterator_count($fi1);
$fi2 = new FilesystemIterator("..\Data\FragmentIdentification\Text\RandomFragment\Text", FilesystemIterator::SKIP_DOTS);
$numOfFlWthImg=iterator_count($fi2);
$numOfComprsn=$numOfTarget*$numOfFlWthImg;
				  
$numOfText2=$numOfFlWthImg;
$numOfRanText=$numOfTarget;				  

$dir="..\Data\FragmentIdentification\Text\RandomFragment\Result";			  
$cdir = scandir($dir); 

$dir2="..\Data\FragmentIdentification\Text\RandomFragment\Text";			  
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
              
              
              
              
			  
			 <table>
              <tr style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center;text-align: justify;padding-left: 10px;"><td colspan="2">Scheme : ssdeep &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data Set : Text &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fragment Type : Random</td></tr>
              <tr><td style="width: 77%;">True Positive</td><td><?php echo $tp; $ssdeepRanTP=$tp; ?></td></tr>
				   <?php 
				   if($tn<$dsimlarfl){
					   $tn=$dsimlarfl;
					   $ssdeepRanTN=$dsimlarfl;
				   }
				   
				   ?>
				   
              <tr><td style="width: 77%;">True Negative</td><td><?php echo $ssdeepRanTN; ?></td></tr>
				   <?php
				   $ssdeepRanFP=$fp;
				   
				   ?>
				   
              <tr><td style="width: 77%;">False Positive</td><td><?php echo $ssdeepRanFP; ?></td></tr>
              <?php
				   if($tp<$simlarfl){
					   $fn=$simlarfl-$tp;
				   }
				   
				 $ssdeepRanFN=$fn;
				 
				   ?>
				   
			  <tr><td style="width: 77%;">False Negative</td><td><?php echo $ssdeepRanFN; ?></td></tr>
				 
				 <?php
				 $ssdeepRanFPR=$ssdeepRanFP/$numOfComprsn;
				 $ssdeepRanFNR=$ssdeepRanFN/$numOfComprsn;
				 
				 ?>
				 
              <tr><td style="width: 77%;">False positive rate (FPR)</td><td><?php  echo $ssdeepRanFPR; ?></td></tr>
              <tr><td style="width: 77%;">False negative rate (FNR)</td><td><?php echo $ssdeepRanFNR; ?></td></tr>
              
               <?php 
			  if(($tp+$fp)!=0)	{
				$pre=$tp/($tp+$fp);
				}else{
					$pre=0;
				} 
			  $ssdeepRanPRE=$pre;
				 
			  ?>
				 
				 
               <tr><td style="width: 77%;">Precision <div style="font-size:9px; color:#F00;">A perfect precision score of 1.0 means that every result retrieved by a search was relevant.</div></td><td><?php echo $pre; ?></td></tr>
               <?php
			  if(($tp+$fn)!=0)	{
				$recall=$tp/($tp+$fn);	
				}else{
					$recall=0;
				} 
				 
				 $ssdeepRanRECALL=$recall;
				 
			   ?>
                <tr><td style="width: 77%;">Recall<div style="font-size:9px; color:#F00;">A perfect recall score of 1.0 means that all relevant documents were retrieved by the search.</div></td><td><?php echo $recall; ?></td></tr>
                <?php 
				 if(($pre+$recall)!=0){
					$f= 2*($pre*$recall)/($pre+$recall);
				 }else{
					 $f=0;
				 }
				
				 $ssdeepRanFSCORE=$f;
				
				?>
                <tr><td style="width: 77%;">F-score<div style="font-size:9px; color:#F00;"> A measure of a test's accuracy (best value at 1 and worst at 0)</div></td><td><?php echo $f; ?></td></tr>
              
				 
				 <?php
				 $sqrt1_2=sqrt(($ssdeepRanTP+$ssdeepRanFP)*($ssdeepRanTP+$ssdeepRanFN)*($ssdeepRanTN+$ssdeepRanFP)*($ssdeepRanTN+$ssdeepRanFN));
				 
				 if($sqrt1_2==0){
				$ssdeepRanMCC=0;
				
				}else{	  
				  
			  $ssdeepRanMCC=(($ssdeepRanTP*$ssdeepRanTN)-($ssdeepRanFP*$ssdeepRanFN))/$sqrt1_2;
				}
				 
				 
				 ?>
			<tr><td width="77%;">MCC<div style="font-size:9px; color:#F00;"> A measure of the quality of (best value at 1 and worst at -1)</div></td><td><?php echo $ssdeepRanMCC; ?></td></tr> 
				 
				 
				 
              </table>
				  
				  
				  
				  
              
              
              <!--///////////////////////////////////////////////////////////////////////////////////////////-->
              
              
              
              
              
               <?php
						  //echo exec('ssdeep -r Data\Docx');
						  
						 //echo exec('sdhash Data\FragmentIdentification\Text\Sequentialfragment\Result\*.text -o sdhashTextSeqFrag1');
						  
						  
						 //echo exec('sdhash Data\FragmentIdentification\Text\Sequentialfragment\Text\*.text -o sdhashTextSeqFrag2');
						  
						  //$rslt= exec('sdhash -c sdhashTextSeqFrag1.sdbf sdhashTextSeqFrag2.sdbf | sort >sdhashTextSeqFrag.text');
						  
						  $rslt = file_get_contents('..\Final_Report_Fragment\sdhashTextSeqFrag.text', true);
						  $sn=0;
						  $tp=0;
						  $tn=0;
						  $fp=0;
						  $fn=0;
						  $sn=0;
							
							$t=(int)$_GET['threshold'];
					  		if($rslt==""){
								
								
						$dir1    = '..\Data\FragmentIdentification\Text\Sequentialfragment\Result';
					  	$files1 = scandir($dir1);
						
						$dir2    = '..\Data\FragmentIdentification\Text\Sequentialfragment\Text';
					  	$files2 = scandir($dir2);
								
							
							?>
					  
					  <!--<tr><td><table>-->
						  <?php 
						  foreach($files1 as &$value1){
						  
						  ?>
                          <?php $sn++; ?>
						  <!--<tr><td><?php echo $sn; ?></td><td><?php echo $value1;?>-->
							  
							  <!--</td><td></td></tr>-->
						  
						  <?php } ?>
						  <!--</table>
						  </td><td>
						  <table>-->
						  <?php 
						  foreach($files2 as &$value2){
						  
						  ?>
                         
						 <!-- <tr><td><?php echo $value2; ?></td><td></td></tr>-->
						  
						  <?php } ?>
						 <!-- </table>
						  
						  </td></tr>-->
					  
					  
							<?php	
								
								
								
							}else{
					  
						  $arr = explode("\n", $rslt);
						  
						  //echo count($arr);
						  
						  foreach ($arr as &$value) {
							  
							  ?>
                               <?php $sn++; ?>
                            <?php if($value!=null){  ?>
                            <!--<tr>
                            
                            <td style="text-align:center;"><?php echo $sn; ?></td>
                              -->
                          <?php
						  
						  $arr1 = explode("|", $value);
						  $cntr=0;
						  foreach ($arr1 as &$value1){
							  //echo $value1."----------";
							  
							  
							   $arr2 = explode("\\", $value1);
							  $arr1_size=count($arr2);
							  
							  
							  ?>
                            <!--  <td style="text-align:center;"><?php echo $arr2[$arr1_size-1]; ?></td>-->
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
						  $embdFl_arr = explode("__", $embddFll);
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
						  
							  
							 // echo "***************".$arr2[$arr1_size-1]."**************";
							  
						  }
						 // echo "\n";
						  	
						  
						  ///////////////////////////////////////////////////////////////////////
						  
						  $real_similarity=0;
						  if(strcmp($embddFl,$imgFl)==0){
							  
							  
							  $prcnt_tmp=explode(".",$embdFl_arr[1]);
					  $prcnt=$prcnt_tmp[0];
					  
					  //echo $prcnt;
					  
					
				 	
					switch ($prcnt) {
						case "0":
							$real_similarity=95;
							break;
						case "1":
							$real_similarity=90;
							break;
						case "2":
							$real_similarity=85;
							break;
						case "3":
							$real_similarity=80;
							break;
						case "4":
							$real_similarity=75;
							break;
						case "5":
							$real_similarity=70;
							break;
						case "6":
							$real_similarity=65;
							break;
						case "7":
							$real_similarity=60;
							break;
						case "8":
							$real_similarity=55;
							break;
						case "9":
							$real_similarity=50;
							break;
						case "10":
							$real_similarity=45;
							break;
						case "11":
							$real_similarity=40;
							break;
						case "12":
							$real_similarity=35;
							break;
						case "13":
							$real_similarity=30;
							break;
						case "14":
							$real_similarity=25;
							break;
						case "15":
							$real_similarity=20;
							break;
						case "16":
							$real_similarity=15;
							break;
						case "17":
							$real_similarity=10;
							break;
						case "18":
							$real_similarity=5;
							break;
						case "19":
							$real_similarity=4;
							break;
						case "20":
							$real_similarity=3;	
							break;
						case "21":
							$real_similarity=2;
							break;
						case "22":
							$real_similarity=1;
							break;
						case "23":
							$real_similarity=">1";
							break;
						
						
						
					}
							  
							  
						  
						  }else{
						  
						  $real_similarity=0;
						  
						  }
						  
						  
						  
						  
						  
						  
						  
						  
						  
						  ////////////////////////////////////////////////////////////////////
						  
						  
						  
						  
						  
						  
						  
						  
						  
						  ?>
                          
                         <!-- <td style="text-align:center"><?php echo $real_similarity; ?></td>
                          
                          
                          </tr>-->
					  <?php } ?>
					  <?php
							  
					  }
						  
						  ?>
						  
						
					  
					 
					  
					  
					  
					 <!-- <tr align="righ" ><td colspan="2" align="right"><input type="submit" align="middle" value="submit" ></td></tr>
					  -->
					  
				
			  
			  <!--<div id="boxContainer" style="font-size: 2em"><a href="">DOCX</a></div>
			  
			  <div id="boxContainer" style="font-size: 2em"><a href="run.php">PPTX</a></div>
			  
			  <div id="boxContainer" style="font-size: 2em"><a href="">PPT</a></div>-->
			  
			 
<!--		      <h1>Welcome to the CFTT Federated Testing CD</h1>-->
			  
              <?php 
   // $dir = opendir('uploads/'); # This is the directory it will count from
   $numOfTarget=0;
   $numOfFlWthImg=0;
   $fi1 = new FilesystemIterator("..\Data\FragmentIdentification\Text\Sequentialfragment\Result", FilesystemIterator::SKIP_DOTS);
$numOfTarget=iterator_count($fi1);
$fi2 = new FilesystemIterator("..\Data\FragmentIdentification\Text\Sequentialfragment\Text", FilesystemIterator::SKIP_DOTS);
$numOfFlWthImg=iterator_count($fi2);
$numOfComprsn=$numOfTarget*$numOfFlWthImg;

//echo $numOfComprsn;
///*
$dir="..\Data\FragmentIdentification\Text\Sequentialfragment\Result";			  
$cdir = scandir($dir); 

$dir2="..\Data\FragmentIdentification\Text\Sequentialfragment\Text";			  
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
              
              
              
              
              
              
			  
			 <table>
              <tr style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center;text-align: justify;padding-left: 10px;"><td colspan="2">Scheme : sdhash &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data Set : Text &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fragment Type :&nbsp;Sequential</td></tr>
              <tr><td style="width: 77%;">True Positive</td><td><?php echo $tp; ?></td></tr>
				   <?php 
				   if($tn<$dsimlarfl){
					   $tn=$dsimlarfl;
				   }
				 $sdhashSeqTP=$tp;
				 $sdhashSeqTN=$tn;
				   
				   ?>
				   
              <tr><td style="width: 77%;">True Negative</td><td><?php echo $tn; ?></td></tr>
				   <?php
				   
				   
				   ?>
				   
              <tr><td style="width: 77%;">False Positive</td><td><?php echo $fp; ?></td></tr>
              <?php
				   if($tp<$simlarfl){
					   $fn=$simlarfl-$tp;
				   }
				   
				 $sdhashSeqFP=$fp;
				 $sdhashSeqFN=$fn;
				 
				   ?>
				   
			  <tr><td style="width: 77%;">False Negative</td><td><?php echo $fn; ?></td></tr>
				 <?php 
				 	$sdhashSeqFPR=$sdhashSeqFP/$numOfComprsn;
				 	$sdhashSeqFNR=$sdhashSeqFN/$numOfComprsn;
				 ?>
				 
              <tr><td style="width: 77%;">False positive rate (FPR)</td><td><?php  echo $sdhashSeqFPR; ?></td></tr>
              <tr><td style="width: 77%;">False negative rate (FNR)</td><td><?php echo $sdhashSeqFNR; ?></td></tr>
              
               <?php 
			  if(($tp+$fp)!=0)	{
				$pre=$tp/($tp+$fp);
				}else{
					$pre=0;
				} 
			  $sdhashSeqPRE=$pre;
			  ?>
               <tr><td style="width: 77%;">Precision <div style="font-size:9px; color:#F00;">A perfect precision score of 1.0 means that every result retrieved by a search was relevant.</div></td><td><?php echo $sdhashSeqPRE; ?></td></tr>
               <?php
			  if(($tp+$fn)!=0)	{
				$recall=$tp/($tp+$fn);	
				}else{
					$recall=0;
				} 
				 
				 $sdhashSeqRECALL=$recall;
				 
			   ?>
                <tr><td style="width: 77%;">Recall<div style="font-size:9px; color:#F00;">A perfect recall score of 1.0 means that all relevant documents were retrieved by the search.</div></td><td><?php echo $sdhashSeqRECALL; ?></td></tr>
                <?php 
				 if(($pre+$recall)!=0){
					$f= 2*($pre*$recall)/($pre+$recall);
				 }else{
					 $f=0;
				 }
				$sdhashSeqFSCORE=$f;
				
				?>
				 
			<tr><td style="width: 77%;">F-score<div style="font-size:9px; color:#F00;"> A measure of a test's accuracy (best value at 1 and worst at 0)</div></td><td><?php echo $f; ?></td></tr>
            <?php
				 $sqrt2_1=sqrt(($sdhashSeqTP+$sdhashSeqFP)*($sdhashSeqTP+$sdhashSeqFN)*($sdhashSeqTN+$sdhashSeqFP)*($sdhashSeqTN+$sdhashSeqFN));
				 
				 if($sqrt2_1==0){
				$sdhashSeqMCC=0;
				
				}else{	  
				  
			  $sdhashSeqMCC=(($sdhashSeqTP*$sdhashSeqTN)-($sdhashSeqFP*$sdhashSeqFN))/$sqrt2_1;
				}
				 
				 
				 ?>
			<tr><td width="77%;">MCC<div style="font-size:9px; color:#F00;"> A measure of the quality of (best value at 1 and worst at -1)</div></td><td><?php echo $sdhashSeqMCC; ?></td></tr> 
				 
				 
              </table>
             
              
              <?php ////////////////////////////////////////////////?>
             
				  
				  <?php
						  //echo exec('ssdeep -r Data\Docx');
						  
						 //echo exec('sdhash Data\FragmentIdentification\Text\Sequentialfragment\Result\*.text -o sdhashTextSeqFrag1');
						  
						  
						 //echo exec('sdhash Data\FragmentIdentification\Text\Sequentialfragment\Text\*.text -o sdhashTextSeqFrag2');
						  
						  //$rslt= exec('sdhash -c sdhashTextSeqFrag1.sdbf sdhashTextSeqFrag2.sdbf | sort >sdhashTextSeqFrag.text');
						  
						  $rslt = file_get_contents('..\Final_Report_Fragment\sdhashTextRanFrag.text', true);
						  $sn=0;
						  $tp=0;
						  $tn=0;
						  $fp=0;
						  $fn=0;
						  $sn=0;
							
							$t=(int)$_GET['threshold'];
					  		if($rslt==""){
								
								
						$dir1    = '..\Data\FragmentIdentification\Text\RandomFragment\Result';
					  	$files1 = scandir($dir1);
						
						$dir2    = '..\Data\FragmentIdentification\Text\RandomFragment\Text';
					  	$files2 = scandir($dir2);
								
							
							?>
					  
					  <!--<tr><td><table>-->
						  <?php 
						  foreach($files1 as &$value1){
						  
						  ?>
                          <?php $sn++; ?>
						  <!--<tr><td><?php echo $sn; ?></td><td><?php echo $value1;?>-->
							  
							  <!--</td><td></td></tr>-->
						  
						  <?php } ?>
						  <!--</table>
						  </td><td>
						  <table>-->
						  <?php 
						  foreach($files2 as &$value2){
						  
						  ?>
                         
						 <!-- <tr><td><?php echo $value2; ?></td><td></td></tr>-->
						  
						  <?php } ?>
						 <!-- </table>
						  
						  </td></tr>-->
					  
					  
							<?php	
								
								
								
							}else{
					  
						  $arr = explode("\n", $rslt);
						  
						  //echo count($arr);
						  
						  foreach ($arr as &$value) {
							  
							  ?>
                               <?php $sn++; ?>
                            <?php if($value!=null){  ?>
                            <!--<tr>
                            
                            <td style="text-align:center;"><?php echo $sn; ?></td>
                              -->
                          <?php
						  
						  $arr1 = explode("|", $value);
						  $cntr=0;
						  foreach ($arr1 as &$value1){
							  //echo $value1."----------";
							  
							  
							   $arr2 = explode("\\", $value1);
							  $arr1_size=count($arr2);
							  
							  
							  ?>
                            <!--  <td style="text-align:center;"><?php echo $arr2[$arr1_size-1]; ?></td>-->
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
						  $embdFl_arr = explode("__", $embddFll);
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
						  
							  
							 // echo "***************".$arr2[$arr1_size-1]."**************";
							  
						  }
						 // echo "\n";
						  	
						  
						  ///////////////////////////////////////////////////////////////////////
						  
						  $real_similarity=0;
						  if(strcmp($embddFl,$imgFl)==0){
							  
							  
							  $prcnt_tmp=explode(".",$embdFl_arr[1]);
					  $prcnt=$prcnt_tmp[0];
					  
					  //echo $prcnt;
					  
					
				 	
					switch ($prcnt) {
						case "0":
							$real_similarity=95;
							break;
						case "1":
							$real_similarity=90;
							break;
						case "2":
							$real_similarity=85;
							break;
						case "3":
							$real_similarity=80;
							break;
						case "4":
							$real_similarity=75;
							break;
						case "5":
							$real_similarity=70;
							break;
						case "6":
							$real_similarity=65;
							break;
						case "7":
							$real_similarity=60;
							break;
						case "8":
							$real_similarity=55;
							break;
						case "9":
							$real_similarity=50;
							break;
						case "10":
							$real_similarity=45;
							break;
						case "11":
							$real_similarity=40;
							break;
						case "12":
							$real_similarity=35;
							break;
						case "13":
							$real_similarity=30;
							break;
						case "14":
							$real_similarity=25;
							break;
						case "15":
							$real_similarity=20;
							break;
						case "16":
							$real_similarity=15;
							break;
						case "17":
							$real_similarity=10;
							break;
						case "18":
							$real_similarity=5;
							break;
						case "19":
							$real_similarity=4;
							break;
						case "20":
							$real_similarity=3;	
							break;
						case "21":
							$real_similarity=2;
							break;
						case "22":
							$real_similarity=1;
							break;
						case "23":
							$real_similarity=">1";
							break;
						
						
						
					}
							  
							  
						  
						  }else{
						  
						  $real_similarity=0;
						  
						  }
						  
						  
						  
						  
						  
						  
						  
						  
						  
						  ////////////////////////////////////////////////////////////////////
						  
						  
						  
						  
						  
						  
						  
						  
						  
						  ?>
                          
                         <!-- <td style="text-align:center"><?php echo $real_similarity; ?></td>
                          
                          
                          </tr>-->
					  <?php } ?>
					  <?php
							  
					  }
						  
						  ?>
						  
						
					  
					 
					  
					  
					  
					 <!-- <tr align="righ" ><td colspan="2" align="right"><input type="submit" align="middle" value="submit" ></td></tr>
					  -->
					  
				
			  
			  <!--<div id="boxContainer" style="font-size: 2em"><a href="">DOCX</a></div>
			  
			  <div id="boxContainer" style="font-size: 2em"><a href="run.php">PPTX</a></div>
			  
			  <div id="boxContainer" style="font-size: 2em"><a href="">PPT</a></div>-->
			  
			 
<!--		      <h1>Welcome to the CFTT Federated Testing CD</h1>-->
			  
              <?php 
   // $dir = opendir('uploads/'); # This is the directory it will count from
   $numOfTarget=0;
   $numOfFlWthImg=0;
   $fi1 = new FilesystemIterator("..\Data\FragmentIdentification\Text\RandomFragment\Result", FilesystemIterator::SKIP_DOTS);
$numOfTarget=iterator_count($fi1);
$fi2 = new FilesystemIterator("..\Data\FragmentIdentification\Text\RandomFragment\Text", FilesystemIterator::SKIP_DOTS);
$numOfFlWthImg=iterator_count($fi2);
$numOfComprsn=$numOfTarget*$numOfFlWthImg;

//echo $numOfComprsn;
///*
$dir="..\Data\FragmentIdentification\Text\RandomFragment\Result";			  
$cdir = scandir($dir); 

$dir2="..\Data\FragmentIdentification\Text\RandomFragment\Text";			  
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
              
              
              
              
              
              
			  
			 <table>
              <tr style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center;text-align: justify;padding-left: 10px;"><td colspan="2">Scheme : sdhash &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data Set : Text &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fragment Type : Random</td></tr>
              <tr><td style="width: 77%;">True Positive</td><td><?php echo $tp; ?></td></tr>
				   <?php 
				   if($tn<$dsimlarfl){
					   $tn=$dsimlarfl;
				   }
				 $sdhashRanTP=$tp;
				 $sdhashRanTN=$tn;
				   
				   ?>
				   
              <tr><td style="width: 77%;">True Negative</td><td><?php echo $tn; ?></td></tr>
				   <?php
				   
				   
				   ?>
				   
              <tr><td style="width: 77%;">False Positive</td><td><?php echo $fp; ?></td></tr>
              <?php
				   if($tp<$simlarfl){
					   $fn=$simlarfl-$tp;
				   }
				   
				 $sdhashRanFP=$fp;
				 $sdhashRanFN=$fn;
				 
				   ?>
				   
			  <tr><td style="width: 77%;">False Negative</td><td><?php echo $fn; ?></td></tr>
				 <?php 
				 	$sdhashRanFPR=$sdhashRanFP/$numOfComprsn;
				 	$sdhashRanFNR=$sdhashRanFN/$numOfComprsn;
				 ?>
              <tr><td style="width: 77%;">False positive rate (FPR)</td><td><?php  echo $sdhashRanFPR; ?></td></tr>
              <tr><td style="width: 77%;">False negative rate (FNR)</td><td><?php echo $sdhashRanFNR; ?></td></tr>
              
               <?php 
			  if(($tp+$fp)!=0)	{
				$pre=$tp/($tp+$fp);
				}else{
					$pre=0;
				} 
			  $sdhashRanPRE=$pre;
			  ?>
               <tr><td style="width: 77%;">Precision <div style="font-size:9px; color:#F00;">A perfect precision score of 1.0 means that every result retrieved by a search was relevant.</div></td><td><?php echo $pre; ?></td></tr>
               <?php
			  if(($tp+$fn)!=0)	{
				$recall=$tp/($tp+$fn);	
				}else{
					$recall=0;
				} 
				 
				 $sdhashRanRECALL=$recall;
				 
			   ?>
                <tr><td style="width: 77%;">Recall<div style="font-size:9px; color:#F00;">A perfect recall score of 1.0 means that all relevant documents were retrieved by the search.</div></td><td><?php echo $recall; ?></td></tr>
                <?php 
				 if(($pre+$recall)!=0){
					$f= 2*($pre*$recall)/($pre+$recall);
				 }else{
					 $f=0;
				 }
				$sdhashRanFSCORE=$f;
				
				?>
                <tr><td style="width: 77%;">F-score<div style="font-size:9px; color:#F00;"> A measure of a test's accuracy (best value at 1 and worst at 0)</div></td><td><?php echo $f; ?></td></tr>
              <?php
				 $sqrt2_2=sqrt(($sdhashRanTP+$sdhashRanFP)*($sdhashRanTP+$sdhashRanFN)*($sdhashRanTN+$sdhashRanFP)*($sdhashRanTN+$sdhashRanFN));
				 
				 if($sqrt2_2==0){
				$sdhashRanMCC=0;
				
				}else{	  
				  
			  $sdhashRanMCC=(($sdhashRanTP*$sdhashRanTN)-($sdhashRanFP*$sdhashRanFN))/$sqrt2_2;
				}
				 
				 
				 ?>
			<tr><td width="77%;">MCC<div style="font-size:9px; color:#F00;"> A measure of the quality of (best value at 1 and worst at -1)</div></td><td><?php echo $sdhashRanMCC; ?></td></tr> 
				 
				 
              </table>
             
              
                      
                      
                      					  

<!--////////////////////////////////////////////Here////////////////////////////////////////////////////////////////////////////-->				  
                  
                  
                  
                  
                   <?php
						  //echo exec('ssdeep -r Data\Docx');
						  
						 //echo exec('ssdeep -r Data\FragmentIdentification\Text\Sequentialfragment\Result >ssdeepFreg1.text');
						  
						 //echo exec('ssdeep -r Data\FragmentIdentification\Text\Sequentialfragment\Text >ssdeepFreg2.text');
						  
						  //$rslt= exec('ssdeep -k ssdeepFreg1.text ssdeepFreg2.text >ssdeepFregSeq.text');
						  
						  $rslt = file_get_contents('..\Final_Report_Fragment\ssdeepFregSeqDocx.text', true);
					  $sn=0;
						
							$tp=0;
							$tn=0;
							$fp=0;
							$fn=0;
							$sn=0;
							
							$t=(int)$_GET['threshold'];
					  		$rw="";
							
					  		if($rslt==""){
								
								$dir1    = '..\Data\FragmentIdentification\Docx\Sequentialfragment\Result';
								$files1 = scandir($dir1);

								$dir2    = '..\Data\FragmentIdentification\Docx\Sequentialfragment\Docx';
								$files2 = scandir($dir2);
								
								$numOfTarget=count($files1);
									
								$numOfFlWthImg=count($files2);
					  	
								$numOfComprsn=$numOfTarget*$numOfFlWthImg;
					  	
								
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
					  $rw=$rw.$sn.";".$value1.";".$value2.";"."0".PHP_EOL;
					  $similarity=0;
								$embdFl_arr = explode("_", $value1);
								$ln=count($embdFl_arr);
								$embddFl=$embdFl_arr[0];
								$imgFl=$value2;	  
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
								
					  
					  
					  ?>
                      
                      
                      <?php 
					  
					  
					  
					  $prcnt_tmp=explode(".",$embdFl_arr[1]);
					  $prcnt=$prcnt_tmp[0];
					  
					  //echo $prcnt;
					  
					$real_similarity=0;
				 	
					switch ($prcnt) {
						case "0":
							$real_similarity=95;
							break;
						case "1":
							$real_similarity=90;
							break;

						case "2":
							$real_similarity=85;
							break;
						case "3":
							$real_similarity=80;
							break;
						case "4":
							$real_similarity=75;
							break;
						case "5":
							$real_similarity=70;
							break;
						case "6":
							$real_similarity=65;
							break;
						case "7":
							$real_similarity=60;
							break;
						case "8":
							$real_similarity=55;
							break;
						case "9":
							$real_similarity=50;
							break;
						case "10":
							$real_similarity=45;
							break;
						case "11":
							$real_similarity=40;
							break;
						case "12":
							$real_similarity=35;
							break;
						case "13":
							$real_similarity=30;
							break;
						case "14":
							$real_similarity=25;
							break;
						case "15":
							$real_similarity=20;
							break;
						case "16":
							$real_similarity=15;
							break;
						case "17":
							$real_similarity=10;
							break;
						case "18":
							$real_similarity=5;
							break;
						case "19":
							$real_similarity=4;
							break;
						case "20":
							$real_similarity=3;	
							break;
						case "21":
							$real_similarity=2;
							break;
						case "22":
							$real_similarity=1;
							break;
						case "23":
							$real_similarity=">1";
							break;
						
						
						
					}
					
					  
					  
					  ?>
                      
                      
                      
                      
                      
					 <!-- <tr><td style="text-align: center;"><?php echo $sn; ?></td><td style="text-align: center;"><?php echo $value1; ?></td><td style="text-align: center;"><?php echo $value2; ?></td><td style="text-align: center;"><?php echo 0; ?></td><td  style="text-align:center;"><?php echo $real_similarity; ?></td></tr>-->
					 
					  
					  <?php 
									  
								  /*	
								if(($real_similarity>=$t) && ($similarity>=$t)){
									$tp++;									
								}else if(($real_similarity<$t) && ($similarity<$t)){
									$tn++;
								}else if(($real_similarity<$t) && ($similarity>=$t)){
									$fp++;
								}else if(($real_similarity>=$t) && ($similarity<$t)){
									$$fn++;
								}*/
								
					   ?>
					  
						  
						  <?php
							  }
							  }
							  
							  }
						   
							  fwrite($tmp_handle, $rw);
							  
						  
						  } ?>
						  <!--</table>
						  </td><td>
						  <table>-->
						  <?php 
						  //foreach($files2 as &$value2){
						  
						  ?>
						  <!--<tr><td><?php echo $value2; ?></td><td></td></tr>-->
						  
						  <?php //} ?>
						  <!--</table>
						  
						  </td></tr>-->
					  
					  
							<?php	
								
								
								
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
						  $arr1 = explode(" matches ", $value);
						  $arr1_size= count($arr1);
						  
						   $dcmnt1 = explode("\\", $arr1[0]);
						   $file_img= $dcmnt1[count($dcmnt1)-1];
						   
						   $dcmnt2 = explode("\\", $arr1[1]);
						   $dcmnt2_tmp = explode(" ",$dcmnt2[count($dcmnt2)-1]);
						   $target=$dcmnt2_tmp[0];
						   $similarity=substr($dcmnt2_tmp[1],1,-3);
							  
							  		
									  
								 if(($sn!=0) && (($sn+1)%10==0)){
									$tblid++;		
							  
							  ?>
				  
					  
					  
					  
					  
					  <?php 
								 }
					  ?>
					  
					 
					  
					  
					<?php
					  $rw=$rw.$sn.";".$target.";".$file_img.";".round($similarity,2).";";
					  $embddFll=$target;
						$imgFll=$file_img;
						
						 $embdFl_arr = explode("_", $embddFll);
						  $imgFl_arr = explode(".", $imgFll);
								//$ln=count($embdFl_arr);
								//$lnn=count($imgFl_arr);
								$embddFl=$embdFl_arr[0];
								$imgFl=$imgFl_arr[0];	  
								//echo $embddFl."---".$imgFl;
						
							  
						///////////////////////////////////////////////////////////////////////////
							  
							  
							  $prcnt_tmp=explode(".",$embdFl_arr[1]);
							  $prcnt=$prcnt_tmp[0];

							  //echo $prcnt;

							$real_similarity=0;

							switch ($prcnt) {
								case "0":
									$real_similarity=95;
									break;
								case "1":
									$real_similarity=90;
									break;
								case "2":
									$real_similarity=85;
									break;
								case "3":
									$real_similarity=80;
									break;
								case "4":
									$real_similarity=75;
									break;
								case "5":
									$real_similarity=70;
									break;
								case "6":
									$real_similarity=65;
									break;
								case "7":
									$real_similarity=60;
									break;
								case "8":
									$real_similarity=55;
									break;
								case "9":
									$real_similarity=50;
									break;
								case "10":
									$real_similarity=45;
									break;
								case "11":
									$real_similarity=40;
									break;
								case "12":
									$real_similarity=35;
									break;
								case "13":
									$real_similarity=30;
									break;
								case "14":
									$real_similarity=25;
									break;
								case "15":
									$real_similarity=20;
									break;
								case "16":
									$real_similarity=15;
									break;
								case "17":
									$real_similarity=10;
									break;
								case "18":
									$real_similarity=5;
									break;
								case "19":
									$real_similarity=4;
									break;
								case "20":
									$real_similarity=3;	
									break;
								case "21":
									$real_similarity=2;
									break;
								case "22":
									$real_similarity=1;
									break;
								case "23":
									$real_similarity=">1";
									break;



							}
							  
							  
						///////////////////////////////////////////////////////////////////////////	  
							  
							  $tmp_thrshld=$t;		
						  
						  if(strcmp($embddFl,$imgFl)==0){
									//echo $embdFl."****".$orgnlFl."-----\n"; 
							  ///////////////////////////////////////////////////////
							  		if($real_similarity<$t){

										$tmp_thrshld=$real_similarity;

									}else{
										$tmp_thrshld=$t;
									}
							  ////////////////////////////////////////////////////////
									if($similarity>=$tmp_thrshld){
										$tp++;									
									}else{
										$fn++;
									}
									
								}else{
									if($similarity>=$tmp_thrshld){
										$fp++;									
									}else{
										$tn++;
									}
									
								}
					  ?>
					  
					 <?php 
					  
					  
					
					  	  
					  
					  
					  ?>
					  
					  
					  
					  
					  
							  
					  <!--<tr><td><?php echo $sn; ?></td><td style="text-align: center;"><?php echo $target ?></td><td style="text-align: center;"><?php echo $file_img; ?></td><td style="text-align: center;"><?php echo $similarity; ?></td><td style="text-align:center;"><?php echo $real_similarity; ?></td></tr>-->
						<?php
					 // $rw=$rw.$sn.";".$target.";".$file_img.";".round($similarity,2).PHP_EOL;
					  
					  ?>	  
					  
						<?php	  
						
						
						
						fwrite($tmp_handle, $rw);
						
							  
						  }
							  
					  }
						  
						  ?>
              
              
               <?php 
   // $dir = opendir('uploads/'); # This is the directory it will count from
   $numOfTarget=0;
   $numOfFlWthImg=0;
   $fi1 = new FilesystemIterator("..\Data\FragmentIdentification\Docx\Sequentialfragment\Result", FilesystemIterator::SKIP_DOTS);
$numOfTarget=iterator_count($fi1);
$fi2 = new FilesystemIterator("..\Data\FragmentIdentification\Docx\Sequentialfragment\Docx", FilesystemIterator::SKIP_DOTS);
$numOfFlWthImg=iterator_count($fi2);
$numOfComprsn=$numOfTarget*$numOfFlWthImg;

$numOfDocx1=$numOfFlWthImg;
$numOfSeqDocx=$numOfTarget;
				  
				  
//echo $numOfComprsn;
///*
$dir="..\Data\FragmentIdentification\Docx\Sequentialfragment\Result";			  
$cdir = scandir($dir); 

$dir2="..\Data\FragmentIdentification\Docx\Sequentialfragment\Docx";			  
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
			  
			 // if($embdFl!=""){
			  
	  // }
			  
		  }
		  
      } 
	   
	   
	   
	   
	   
   } 
			  
			  
			

?>
              
              
              
              
			  
			 <table>
              <tr style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center;text-align: justify;padding-left: 10px;"><td colspan="2">Scheme : ssdeep &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data Set : Docx &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fragment Type :&nbsp;Sequential</td></tr>
              <tr><td style="width: 77%;">True Positive</td><td><?php echo $tp; $ssdeepSeqTPDocx=$tp;
				  ?></td></tr>
				   <?php 
				 
				 
				 
				   if($tn<$dsimlarfl){
					   $tn=$dsimlarfl;
					   $ssdeepSeqTNDocx=$dsimlarfl-$fp;
				   }
				   
				   ?>
				   
              <tr><td style="width: 77%;">True Negative</td><td><?php echo $ssdeepSeqTNDocx; ?></td></tr>
				   <?php
				   $ssdeepSeqFPDocx=$fp;
				   
				   ?>
				   
              <tr><td style="width: 77%;">False Positive</td><td><?php echo $ssdeepSeqFPDocx; ?></td></tr>
              <?php
				   if($tp<$simlarfl){
					   $fn=$simlarfl-$tp;
				   }
				   
				 $ssdeepSeqFNDocx=$fn;
				 
				   ?>
				   
				   <tr><td style="width: 77%;">False Negative</td><td><?php echo $ssdeepSeqFNDocx; ?></td></tr>
				 
				 <?php
				 $ssdeepSeqFPRDocx=$ssdeepSeqFPDocx/$numOfComprsn;
				 $ssdeepSeqFNRDocx=$ssdeepSeqFNDocx/$numOfComprsn;
				 
				 ?>
				 
              <tr><td style="width: 77%;">False positive rate (FPR)</td><td><?php  echo $ssdeepSeqFPRDocx; ?></td></tr>
              <tr><td style="width: 77%;">False negative rate (FNR)</td><td><?php echo $ssdeepSeqFNRDocx; ?></td></tr>
              
               <?php 
			  if(($tp+$fp)!=0)	{
				$pre=$tp/($tp+$fp);
				}else{
					$pre=0;
				} 
			  $ssdeepSeqPREDocx=$pre;
				 
			  ?>
				 
				 
               <tr><td style="width: 77%;">Precision <div style="font-size:9px; color:#F00;">A perfect precision score of 1.0 means that every result retrieved by a search was relevant.</div></td><td><?php echo $pre; ?></td></tr>
               <?php
			  if(($tp+$fn)!=0)	{
				$recall=$tp/($tp+$fn);	
				}else{
					$recall=0;
				} 
				 
				 $ssdeepSeqRECALLDocx=$recall;
				 
			   ?>
                <tr><td style="width: 77%;">Recall<div style="font-size:9px; color:#F00;">A perfect recall score of 1.0 means that all relevant documents were retrieved by the search.</div></td><td><?php echo $recall; ?></td></tr>
                <?php 
				 if(($pre+$recall)!=0){
					$f= 2*($pre*$recall)/($pre+$recall);
				 }else{
					 $f=0;
				 }
				
				 $ssdeepSeqFSCOREDocx=$f;
				
				?>
                <tr><td style="width: 77%;">F-score<div style="font-size:9px; color:#F00;"> A measure of a test's accuracy (best value at 1 and worst at 0)</div></td><td><?php echo $f; ?></td></tr>
              
				 
				 <?php
				 $sqrt1_1=sqrt(($ssdeepSeqTPDocx+$ssdeepSeqFPDocx)*($ssdeepSeqTPDocx+$ssdeepSeqFNDocx)*($ssdeepSeqTNDocx+$ssdeepSeqFPDocx)*($ssdeepSeqTNDocx+$ssdeepSeqFNDocx));
				 
				 if($sqrt1_1==0){
				$ssdeepSeqMCCDocx=0;
				
				}else{	  
				  
			  $ssdeepSeqMCCDocx=(($ssdeepSeqTPDocx*$ssdeepSeqTNDocx)-($ssdeepSeqFPDocx*$ssdeepSeqFNDocx))/$sqrt1_1;
				}
				 
				 
				 ?>
			<tr><td width="77%;">MCC<div style="font-size:9px; color:#F00;"> A measure of the quality of (best value at 1 and worst at -1)</div></td><td><?php echo $ssdeepSeqMCCDocx; ?></td></tr> 
				 
				 
              </table>
				  
				  
<?php //////////////////////////////////////ssdeep Docx Random starts///////////////////////////////////////////////////// ?>

             <?php
						  //echo exec('ssdeep -r Data\Docx');
						  
						 //echo exec('ssdeep -r Data\FragmentIdentification\DocxRandomfragment\Result >ssdeepFreg1.text');
						  
						 //echo exec('ssdeep -r Data\FragmentIdentification\Docx\Randomfragment\Docx >ssdeepFreg2.text');
						  
						  //$rslt= exec('ssdeep -k ssdeepFreg1.text ssdeepFreg2.text >ssdeepFregRan.text');
						  
						  $rslt = file_get_contents('..\Final_Report_Fragment\ssdeepFregRanDocx.text', true);
					  $sn=0;
						
							$tp=0;
							$tn=0;
							$fp=0;
							$fn=0;
							$sn=0;
							
							$t=(int)$_GET['threshold'];
					  		$rw="";
							
					  		if($rslt==""){
								
								$dir1    = '..\Data\FragmentIdentification\Docx\Randomfragment\Result';
								$files1 = scandir($dir1);

								$dir2    = '..\Data\FragmentIdentification\Docx\Randomfragment\Docx';
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
					  $rw=$rw.$sn.";".$value1.";".$value2.";"."0".PHP_EOL;
					  $similarity=0;
								$embdFl_arr = explode("_", $value1);
								$ln=count($embdFl_arr);
								$embddFl=$embdFl_arr[0];
								$imgFl=$value2;	  
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
								
					  
					  
					  ?>
                      
                      
                      <?php 
					  
					  
					  
					  $prcnt_tmp=explode(".",$embdFl_arr[1]);
					  $prcnt=$prcnt_tmp[0];
					  
					  //echo $prcnt;
					  
					$real_similarity=0;
				 	
					switch ($prcnt) {
						case "0":
							$real_similarity=95;
							break;
						case "1":
							$real_similarity=90;
							break;

						case "2":
							$real_similarity=85;
							break;
						case "3":
							$real_similarity=80;
							break;
						case "4":
							$real_similarity=75;
							break;
						case "5":
							$real_similarity=70;
							break;
						case "6":
							$real_similarity=65;
							break;
						case "7":
							$real_similarity=60;
							break;
						case "8":
							$real_similarity=55;
							break;
						case "9":
							$real_similarity=50;
							break;
						case "10":
							$real_similarity=45;
							break;
						case "11":
							$real_similarity=40;
							break;
						case "12":
							$real_similarity=35;
							break;
						case "13":
							$real_similarity=30;
							break;
						case "14":
							$real_similarity=25;
							break;
						case "15":
							$real_similarity=20;
							break;
						case "16":
							$real_similarity=15;
							break;
						case "17":
							$real_similarity=10;
							break;
						case "18":
							$real_similarity=5;
							break;
						case "19":
							$real_similarity=4;
							break;
						case "20":
							$real_similarity=3;	
							break;
						case "21":
							$real_similarity=2;
							break;
						case "22":
							$real_similarity=1;
							break;
						case "23":
							$real_similarity=">1";
							break;
						
						
						
					}
					
					  
					  
					  ?>
                      
                      
                      
                      
                      
					 <!-- <tr><td style="text-align: center;"><?php echo $sn; ?></td><td style="text-align: center;"><?php echo $value1; ?></td><td style="text-align: center;"><?php echo $value2; ?></td><td style="text-align: center;"><?php echo 0; ?></td><td  style="text-align:center;"><?php echo $real_similarity; ?></td></tr>-->
					 
					  
					  <?php 
									  
								  /*	
								if(($real_similarity>=$t) && ($similarity>=$t)){
									$tp++;									
								}else if(($real_similarity<$t) && ($similarity<$t)){
									$tn++;
								}else if(($real_similarity<$t) && ($similarity>=$t)){
									$fp++;
								}else if(($real_similarity>=$t) && ($similarity<$t)){
									$$fn++;
								}*/
								
					   ?>
					  
						  
						  <?php
							  }
							  }
							  
							  }
						   
							  fwrite($tmp_handle, $rw);
							  
						  
						  } ?>
						  <!--</table>
						  </td><td>
						  <table>-->
						  <?php 
						  //foreach($files2 as &$value2){
						  
						  ?>
						  <!--<tr><td><?php echo $value2; ?></td><td></td></tr>-->
						  
						  <?php //} ?>
						  <!--</table>
						  
						  </td></tr>-->
					  
					  
							<?php	
								
								
								
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
						  $arr1 = explode(" matches ", $value);
						  $arr1_size= count($arr1);
						  
						   $dcmnt1 = explode("\\", $arr1[0]);
						   $file_img= $dcmnt1[count($dcmnt1)-1];
						   
						   $dcmnt2 = explode("\\", $arr1[1]);
						   $dcmnt2_tmp = explode(" ",$dcmnt2[count($dcmnt2)-1]);
						   $target=$dcmnt2_tmp[0];
						   $similarity=substr($dcmnt2_tmp[1],1,-3);	
									  
								 if(($sn!=0) && (($sn+1)%10==0)){
									$tblid++;		
							  
							  ?>
				  
					  
					  
					  
					  
					  <?php 
								 }
					  ?>
					  
					 
					  
					  
					<?php
					  $rw=$rw.$sn.";".$target.";".$file_img.";".round($similarity,2).";";
					  $embddFll=$target;
						$imgFll=$file_img;
						
						 $embdFl_arr = explode("_", $embddFll);
						  $imgFl_arr = explode(".", $imgFll);
								//$ln=count($embdFl_arr);
								//$lnn=count($imgFl_arr);
								$embddFl=$embdFl_arr[0];
								$imgFl=$imgFl_arr[0];	  
								//echo $embddFl."---".$imgFl;
						
							  
						///////////////////////////////////////////////////////////////////////////
							  
							  
							  $prcnt_tmp=explode(".",$embdFl_arr[1]);
							  $prcnt=$prcnt_tmp[0];

							  //echo $prcnt;

							$real_similarity=0;

							switch ($prcnt) {
								case "0":
									$real_similarity=95;
									break;
								case "1":
									$real_similarity=90;
									break;
								case "2":
									$real_similarity=85;
									break;
								case "3":
									$real_similarity=80;
									break;
								case "4":
									$real_similarity=75;
									break;
								case "5":
									$real_similarity=70;
									break;
								case "6":
									$real_similarity=65;
									break;
								case "7":
									$real_similarity=60;
									break;
								case "8":
									$real_similarity=55;
									break;
								case "9":
									$real_similarity=50;
									break;
								case "10":
									$real_similarity=45;
									break;
								case "11":
									$real_similarity=40;
									break;
								case "12":
									$real_similarity=35;
									break;
								case "13":
									$real_similarity=30;
									break;
								case "14":
									$real_similarity=25;
									break;
								case "15":
									$real_similarity=20;
									break;
								case "16":
									$real_similarity=15;
									break;
								case "17":
									$real_similarity=10;
									break;
								case "18":
									$real_similarity=5;
									break;
								case "19":
									$real_similarity=4;
									break;
								case "20":
									$real_similarity=3;	
									break;
								case "21":
									$real_similarity=2;
									break;
								case "22":
									$real_similarity=1;
									break;
								case "23":
									$real_similarity=">1";
									break;



							}
							  
							  
						///////////////////////////////////////////////////////////////////////////	  
							  
							  $tmp_thrshld=$t;		
						  
						  if(strcmp($embddFl,$imgFl)==0){
									//echo $embdFl."****".$orgnlFl."-----\n"; 
							  ///////////////////////////////////////////////////////
							  		if($real_similarity<$t){

										$tmp_thrshld=$real_similarity;

									}else{
										$tmp_thrshld=$t;
									}
							  ////////////////////////////////////////////////////////
									if($similarity>=$tmp_thrshld){
										$tp++;									
									}else{
										$fn++;
									}
									
								}else{
									if($similarity>=$tmp_thrshld){
										$fp++;									
									}else{
										$tn++;
									}
									
								}
					  ?>
					  
					 <?php 
					  
					  
					
					  	  
					  
					  
					  ?>
					  
					  
					  
					  
					  
							  
					  <!--<tr><td><?php echo $sn; ?></td><td style="text-align: center;"><?php echo $target ?></td><td style="text-align: center;"><?php echo $file_img; ?></td><td style="text-align: center;"><?php echo $similarity; ?></td><td style="text-align:center;"><?php echo $real_similarity; ?></td></tr>-->
						<?php
					 // $rw=$rw.$sn.";".$target.";".$file_img.";".round($similarity,2).PHP_EOL;
					  
					  ?>	  
					  
						<?php	  
						
						
						
						fwrite($tmp_handle, $rw);
						
							  
						  }
							  
					  }
						  
						  ?>
              
              
               <?php 
   // $dir = opendir('uploads/'); # This is the directory it will count from
   $numOfTarget=0;
   $numOfFlWthImg=0;
   $fi1 = new FilesystemIterator("..\Data\FragmentIdentification\Docx\Randomfragment\Result", FilesystemIterator::SKIP_DOTS);
$numOfTarget=iterator_count($fi1);
$fi2 = new FilesystemIterator("..\Data\FragmentIdentification\Docx\Randomfragment\Docx", FilesystemIterator::SKIP_DOTS);
$numOfFlWthImg=iterator_count($fi2);
$numOfComprsn=$numOfTarget*$numOfFlWthImg;

$numOfDocx2=$numOfFlWthImg;
$numOfRanDocx=$numOfTarget;
				  
				  
//echo $numOfComprsn;
///*
$dir="..\Data\FragmentIdentification\Docx\Randomfragment\Result";			  
$cdir = scandir($dir); 

$dir2="..\Data\FragmentIdentification\Docx\Randomfragment\Docx";			  
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
			  
			 // if($embdFl!=""){
			  
	  // }
			  
		  }
		  
      } 
	   
	   
	   
	   
	   
   } 
			  
			  
			

?>
              
              
              
              
			  
			 <table>
              <tr style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center;text-align: justify;padding-left: 10px;">
                <td colspan="2">Scheme : ssdeep &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data Set : Docx &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fragment Type : Random</td></tr>
              <tr><td style="width: 77%;">True Positive</td><td><?php echo $tp; $ssdeepRanTPDocx=$tp;
				  ?></td></tr>
				   <?php 
				 
				 
				 
				   if($tn<$dsimlarfl){
					   $tn=$dsimlarfl;
					   $ssdeepRanTNDocx=$dsimlarfl-$fp;
				   }
				   
				   ?>
				   
              <tr><td style="width: 77%;">True Negative</td><td><?php echo $ssdeepRanTNDocx; ?></td></tr>
				   <?php
				   $ssdeepRanFPDocx=$fp;
				   
				   ?>
				   
              <tr><td style="width: 77%;">False Positive</td><td><?php echo $ssdeepRanFPDocx; ?></td></tr>
              <?php
				   if($tp<$simlarfl){
					   $fn=$simlarfl-$tp;
				   }
				   
				 $ssdeepRanFNDocx=$fn;
				 
				   ?>
				   
				   <tr><td style="width: 77%;">False Negative</td><td><?php echo $ssdeepRanFNDocx; ?></td></tr>
				 
				 <?php
				 $ssdeepRanFPRDocx=$ssdeepRanFPDocx/$numOfComprsn;
				 $ssdeepRanFNRDocx=$ssdeepRanFNDocx/$numOfComprsn;
				 
				 ?>
				 
              <tr><td style="width: 77%;">False positive rate (FPR)</td><td><?php  echo $ssdeepRanFPRDocx; ?></td></tr>
              <tr><td style="width: 77%;">False negative rate (FNR)</td><td><?php echo $ssdeepRanFNRDocx; ?></td></tr>
              
               <?php 
			  if(($tp+$fp)!=0)	{
				$pre=$tp/($tp+$fp);
				}else{
					$pre=0;
				} 
			  $ssdeepRanPREDocx=$pre;
				 
			  ?>
				 
				 
               <tr><td style="width: 77%;">Precision <div style="font-size:9px; color:#F00;">A perfect precision score of 1.0 means that every result retrieved by a search was relevant.</div></td><td><?php echo $pre; ?></td></tr>
               <?php
			  if(($tp+$fn)!=0)	{
				$recall=$tp/($tp+$fn);	
				}else{
					$recall=0;
				} 
				 
				 $ssdeepRanRECALLDocx=$recall;
				 
			   ?>
                <tr><td style="width: 77%;">Recall<div style="font-size:9px; color:#F00;">A perfect recall score of 1.0 means that all relevant documents were retrieved by the search.</div></td><td><?php echo $recall; ?></td></tr>
                <?php 
				 if(($pre+$recall)!=0){
					$f= 2*($pre*$recall)/($pre+$recall);
				 }else{
					 $f=0;
				 }
				
				 $ssdeepRanFSCOREDocx=$f;
				
				?>
                <tr><td style="width: 77%;">F-score<div style="font-size:9px; color:#F00;"> A measure of a test's accuracy (best value at 1 and worst at 0)</div></td><td><?php echo $f; ?></td></tr>
              
				 
				 <?php
				 $sqrt1_1=sqrt(($ssdeepRanTPDocx+$ssdeepRanFPDocx)*($ssdeepRanTPDocx+$ssdeepRanFNDocx)*($ssdeepRanTNDocx+$ssdeepRanFPDocx)*($ssdeepRanTNDocx+$ssdeepRanFNDocx));
				 
				 if($sqrt1_1==0){
				$ssdeepRanMCCDocx=0;
				
				}else{	  
				  
			  $ssdeepRanMCCDocx=(($ssdeepRanTPDocx*$ssdeepRanTNDocx)-($ssdeepRanFPDocx*$ssdeepRanFNDocx))/$sqrt1_1;
				}
				 
				 
				 ?>
			<tr><td width="77%;">MCC<div style="font-size:9px; color:#F00;"> A measure of the quality of (best value at 1 and worst at -1)</div></td><td><?php echo $ssdeepRanMCCDocx; ?></td></tr> 
				 
				 
              </table>
				  
				  

				  
				  
				  
				  
				  
<?php //////////////////////////////////////ssdeep Docx Random ends /////////////////////////////////////////////////////// ?>				  
				  


<?php //////////////////////////////////////sdhash Docx Sequential starts//////////////////////////////////////////////// ?>				  

<?php
						  //echo exec('ssdeep -r ..\Data\Docx');
						  
						 //echo exec('sdhash ..\Data\FragmentIdentification\Text\Sequentialfragment\Result\*.text -o sdhashTextSeqFrag1');
						  
						  
						 //echo exec('sdhash ..\Data\FragmentIdentification\Text\Sequentialfragment\Text\*.text -o sdhashTextSeqFrag2');
						  
						  //$rslt= exec('sdhash -c sdhashTextSeqFrag1.sdbf sdhashTextSeqFrag2.sdbf | sort >sdhashTextSeqFrag.text');
						  
						  $rslt = file_get_contents('..\Final_Report_Fragment\sdhashDocxSeqFrag.text', true);
						  $sn=0;
						  $tp=0;
						  $tn=0;
						  $fp=0;
						  $fn=0;
						  $sn=0;
							
							$t=(int)$_GET['threshold'];
					  		if($rslt==""){
								
								
						$dir1    = '..\Data\FragmentIdentification\Docx\Sequentialfragment\Result';
					  	$files1 = scandir($dir1);
						
						$dir2    = '..\Data\FragmentIdentification\Docx\Sequentialfragment\Docx';
					  	$files2 = scandir($dir2);
								
							
							?>
					  
					  <!--<tr><td><table>-->
						  <?php 
						  foreach($files1 as &$value1){
						  
						  ?>
                          <?php $sn++; ?>
						  <!--<tr><td><?php echo $sn; ?></td><td><?php echo $value1;?>-->
							  
							  <!--</td><td></td></tr>-->
						  
						  <?php } ?>
						  <!--</table>
						  </td><td>
						  <table>-->
						  <?php 
						  foreach($files2 as &$value2){
						  
						  ?>
                         
						 <!-- <tr><td><?php echo $value2; ?></td><td></td></tr>-->
						  
						  <?php } ?>
						 <!-- </table>
						  
						  </td></tr>-->
					  
					  
							<?php	
								
								
								
							}else{
					  
						  $arr = explode("\n", $rslt);
						  
						  //echo count($arr);
						  
						  foreach ($arr as &$value) {
							  
							  ?>
                               <?php $sn++; ?>
                            <?php if($value!=null){  ?>
                            <!--<tr>
                            
                            <td style="text-align:center;"><?php echo $sn; ?></td>
                              -->
                          <?php
						  
						  $arr1 = explode("|", $value);
						  $cntr=0;
						  foreach ($arr1 as &$value1){
							  //echo $value1."----------";
							  
							  
							   $arr2 = explode("\\", $value1);
							  $arr1_size=count($arr2);
							  
							  
							  ?>
                            <!--  <td style="text-align:center;"><?php echo $arr2[$arr1_size-1]; ?></td>-->
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
						  //$rw=$rw.$embddFll.";".$imgFll.";".round($similarity,2).";";
						  $embdFl_arr = explode("_", $embddFll);
						  $imgFl_arr = explode(".", $imgFll);
								//$ln=count($embdFl_arr);
								//$lnn=count($imgFl_arr);
								$embddFl=$embdFl_arr[0];
								$imgFl=$imgFl_arr[0];	  
								//echo $embddFl."---".$imgFl;
								
												   
												   
						////////////////////////////////////////////////////////////////////////////////////
												   
								
						$real_similarity=0;
						  if(strcmp($embddFl,$imgFl)==0){
							  
							  
								  $prcnt_tmp=explode(".",$embdFl_arr[1]);
								  $prcnt=$prcnt_tmp[0];

								  //echo $prcnt;



								switch ($prcnt) {
									case "0":
										$real_similarity=95;
										break;
									case "1":
										$real_similarity=90;
										break;
									case "2":
										$real_similarity=85;
										break;
									case "3":
										$real_similarity=80;
										break;
									case "4":
										$real_similarity=75;
										break;
									case "5":
										$real_similarity=70;
										break;
									case "6":
										$real_similarity=65;
										break;
									case "7":
										$real_similarity=60;
										break;
									case "8":
										$real_similarity=55;
										break;
									case "9":
										$real_similarity=50;
										break;
									case "10":
										$real_similarity=45;
										break;
									case "11":
										$real_similarity=40;
										break;
									case "12":
										$real_similarity=35;
										break;
									case "13":
										$real_similarity=30;
										break;
									case "14":
										$real_similarity=25;
										break;
									case "15":
										$real_similarity=20;
										break;
									case "16":
										$real_similarity=15;
										break;
									case "17":
										$real_similarity=10;
										break;
									case "18":
										$real_similarity=5;
										break;
									case "19":
										$real_similarity=4;
										break;
									case "20":
										$real_similarity=3;	
										break;
									case "21":
										$real_similarity=2;
										break;
									case "22":
										$real_similarity=1;
										break;
									case "23":
										$real_similarity=">1";
										break;



							}
							  
							  
						  
						  }else{
						  
						  $real_similarity=0;
						  
						  }
						  				   
												   
												   
						/////////////////////////////////////////////////////////////////////////////////////
												   
												   
							$tmp_thrshld=$t;					   
												   
												   
												   
							//if($real_similarity<$t){
							
							//	$tmp_thrshld=$real_similarity;
								
							//}else{
							//	$tmp_thrshld=$t;
							//}	   
												   
												   
												   
						  
						  if(strcmp($embddFl,$imgFl)==0){
									//echo $embdFl."****".$orgnlFl."-----\n"; 
							   if($real_similarity<$t){

										$tmp_thrshld=$real_similarity;

									}else{
										$tmp_thrshld=$t;
									}
									
							  if($similarity>=$tmp_thrshld){
										$tp++;									
									}else{
										$fn++;
									}
									
							  	//$cc++;
							  
								}else{
									if($similarity>=$tmp_thrshld){
										$fp++;	
										//echo "similarity: ".$similarity." Threshold: ".$t." embddFl: ".$embddFl." Imgfl: ".$imgFl ;
										
									}else{
										$tn++;
									}
									
							  	//$cc++;
							  
								}
						  
							  
							 // echo "***************".$arr2[$arr1_size-1]."**************";
							  
						  }
						 // echo "\n";
						  	
						  
						  ///////////////////////////////////////////////////////////////////////
						  
						  
						  
						  
						  
						  
						  
						  
						  
						  
						  ////////////////////////////////////////////////////////////////////
						  
						  
						  
						  
						  
						  
						  
						  
						  
						  ?>
                          
                         <!-- <td style="text-align:center"><?php echo $real_similarity; ?></td>
                          
                          
                          </tr>-->
					  <?php } ?>
					  <?php
							  
					  }
						  
						  ?>
						  
					
			  
              <?php 
   // $dir = opendir('uploads/'); # This is the directory it will count from
   $numOfTarget=0;
   $numOfFlWthImg=0;
   $fi1 = new FilesystemIterator("..\Data\FragmentIdentification\Docx\Sequentialfragment\Result", FilesystemIterator::SKIP_DOTS);
$numOfTarget=iterator_count($fi1);
$fi2 = new FilesystemIterator("..\Data\FragmentIdentification\Docx\Sequentialfragment\Docx", FilesystemIterator::SKIP_DOTS);
$numOfFlWthImg=iterator_count($fi2);
$numOfComprsn=$numOfTarget*$numOfFlWthImg;

//echo $numOfComprsn;
///*
$dir="..\Data\FragmentIdentification\Docx\Sequentialfragment\Result";			  
$cdir = scandir($dir); 

$dir2="..\Data\FragmentIdentification\Docx\Sequentialfragment\Docx";			  
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
              
              
              
              
              
              
			  
			 <table>
              <tr style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center;text-align: justify;padding-left: 10px;"><td colspan="2">Scheme : sdhash &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data Set : Docx &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Fragment Type :&nbsp;Sequential</td></tr>
              <tr><td style="width: 77%;">True Positive</td><td><?php echo $tp; ?></td></tr>
				   <?php 
				   if($tn<$dsimlarfl){
					   $tn=$dsimlarfl-$fp;
				   }
				 $sdhashSeqTPDocx=$tp;
				 $sdhashSeqTNDocx=$tn;
				   
				   ?>
				   
              <tr><td style="width: 77%;">True Negative</td><td><?php echo $tn; ?></td></tr>
				   <?php
				   
				   
				   ?>
				   
              <tr><td style="width: 77%;">False Positive</td><td><?php echo $fp; ?></td></tr>
              <?php
				   if($tp<$simlarfl){
					   $fn=$simlarfl-$tp;
				   }
				   
				 $sdhashSeqFPDocx=$fp;
				 $sdhashSeqFNDocx=$fn;
				 
				   ?>
				   
			  <tr><td style="width: 77%;">False Negative</td><td><?php echo $fn; ?></td></tr>
				 <?php 
				 	$sdhashSeqFPRDocx=$sdhashSeqFPDocx/$numOfComprsn;
				 	$sdhashSeqFNRDocx=$sdhashSeqFNDocx/$numOfComprsn;
				 ?>
				 
              <tr><td style="width: 77%;">False positive rate (FPR)</td><td><?php  echo $sdhashSeqFPRDocx; ?></td></tr>
              <tr><td style="width: 77%;">False negative rate (FNR)</td><td><?php echo $sdhashSeqFNRDocx; ?></td></tr>
              
               <?php 
			  if(($tp+$fp)!=0)	{
				$pre=$tp/($tp+$fp);
				}else{
					$pre=0;
				} 
			  $sdhashSeqPREDocx=$pre;
			  ?>
               <tr><td style="width: 77%;">Precision <div style="font-size:9px; color:#F00;">A perfect precision score of 1.0 means that every result retrieved by a search was relevant.</div></td><td><?php echo $sdhashSeqPREDocx; ?></td></tr>
               <?php
			  if(($tp+$fn)!=0)	{
				$recall=$tp/($tp+$fn);	
				}else{
					$recall=0;
				} 
				 
				 $sdhashSeqRECALLDocx=$recall;
				 
			   ?>
                <tr><td style="width: 77%;">Recall<div style="font-size:9px; color:#F00;">A perfect recall score of 1.0 means that all relevant documents were retrieved by the search.</div></td><td><?php echo $sdhashSeqRECALLDocx; ?></td></tr>
                <?php 
				 if(($pre+$recall)!=0){
					$f= 2*($pre*$recall)/($pre+$recall);
				 }else{
					 $f=0;
				 }
				$sdhashSeqFSCOREDocx=$f;
				
				?>
				 
			<tr><td style="width: 77%;">F-score<div style="font-size:9px; color:#F00;"> A measure of a test's accuracy (best value at 1 and worst at 0)</div></td><td><?php echo $f; ?></td></tr>
            <?php
				 $sqrt2_1=sqrt(($sdhashSeqTPDocx+$sdhashSeqFPDocx)*($sdhashSeqTPDocx+$sdhashSeqFNDocx)*($sdhashSeqTNDocx+$sdhashSeqFPDocx)*($sdhashSeqTNDocx+$sdhashSeqFNDocx));
				 
				 if($sqrt2_1==0){
				$sdhashSeqMCCDocx=0;
				
				}else{	  
				  
			  $sdhashSeqMCCDocx=(($sdhashSeqTPDocx*$sdhashSeqTNDocx)-($sdhashSeqFPDocx*$sdhashSeqFNDocx))/$sqrt2_1;
				}
				 
				 
				 ?>
			<tr><td width="77%;">MCC<div style="font-size:9px; color:#F00;"> A measure of the quality of (best value at 1 and worst at -1)</div></td><td><?php echo $sdhashSeqMCCDocx; ?></td></tr> 
				 
				 
              </table>




				  

<?php ///////////////////////////////////////sdhash Docx Sequential ends////////////////////////////////////////////////////// ?>				  
				  
<?php ///////////////////////////////////////sdhash Docx Random  starts ////////////////////////////////////////////////////// ?>				  
				  
<?php
						  //echo exec('ssdeep -r ..\Data\Docx');
						  
						 //echo exec('sdhash ..\Data\FragmentIdentification\Docx\Randomfragment\Result\*.docx -o sdhashTextRanFrag1');
						  
						  
						 //echo exec('sdhash ..\Data\FragmentIdentification\Docx\Randomfragment\Text\*.docx -o sdhashTextRanFrag2');
						  
						  //$rslt= exec('sdhash -c sdhashTextRanFrag1.sdbf sdhashTextRanFrag2.sdbf | sort >sdhashTextRanFrag.text');
						  
						  $rslt = file_get_contents('..\Final_Report_Fragment\sdhashDocxRanFrag.text', true);
						  $sn=0;
						  $tp=0;
						  $tn=0;
						  $fp=0;
						  $fn=0;
						  $sn=0;
							
							$t=(int)$_GET['threshold'];
					  		if($rslt==""){
								
								
						$dir1    = '..\Data\FragmentIdentification\Docx\Randomfragment\Result';
					  	$files1 = scandir($dir1);
						
						$dir2    = '..\Data\FragmentIdentification\Docx\Randomfragment\Docx';
					  	$files2 = scandir($dir2);
								
							
							?>
					  
					  <!--<tr><td><table>-->
						  <?php 
						  foreach($files1 as &$value1){
						  
						  ?>
                          <?php $sn++; ?>
						  <!--<tr><td><?php echo $sn; ?></td><td><?php echo $value1;?>-->
							  
							  <!--</td><td></td></tr>-->
						  
						  <?php } ?>
						  <!--</table>
						  </td><td>
						  <table>-->
						  <?php 
						  foreach($files2 as &$value2){
						  
						  ?>
                         
						 <!-- <tr><td><?php echo $value2; ?></td><td></td></tr>-->
						  
						  <?php } ?>
						 <!-- </table>
						  
						  </td></tr>-->
					  
					  
							<?php	
								
								
								
							}else{
					  
						  $arr = explode("\n", $rslt);
						  
						  //echo count($arr);
						  
						  foreach ($arr as &$value) {
							  
							  ?>
                               <?php $sn++; ?>
                            <?php if($value!=null){  ?>
                            <!--<tr>
                            
                            <td style="text-align:center;"><?php echo $sn; ?></td>
                              -->
                          <?php
						  
						  $arr1 = explode("|", $value);
						  $cntr=0;
						  foreach ($arr1 as &$value1){
							  //echo $value1."----------";
							  
							  
							   $arr2 = explode("\\", $value1);
							  $arr1_size=count($arr2);
							  
							  
							  ?>
                            <!--  <td style="text-align:center;"><?php echo $arr2[$arr1_size-1]; ?></td>-->
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
						  //$rw=$rw.$embddFll.";".$imgFll.";".round($similarity,2).";";
						  $embdFl_arr = explode("_", $embddFll);
						  $imgFl_arr = explode(".", $imgFll);
								//$ln=count($embdFl_arr);
								//$lnn=count($imgFl_arr);
								$embddFl=$embdFl_arr[0];
								$imgFl=$imgFl_arr[0];	  
								//echo $embddFl."---".$imgFl;
								
												   
												   
						////////////////////////////////////////////////////////////////////////////////////
												   
								
						$real_similarity=0;
						  if(strcmp($embddFl,$imgFl)==0){
							  
							  
								  $prcnt_tmp=explode(".",$embdFl_arr[1]);
								  $prcnt=$prcnt_tmp[0];

								  //echo $prcnt;



								switch ($prcnt) {
									case "0":
										$real_similarity=95;
										break;
									case "1":
										$real_similarity=90;
										break;
									case "2":
										$real_similarity=85;
										break;
									case "3":
										$real_similarity=80;
										break;
									case "4":
										$real_similarity=75;
										break;
									case "5":
										$real_similarity=70;
										break;
									case "6":
										$real_similarity=65;
										break;
									case "7":
										$real_similarity=60;
										break;
									case "8":
										$real_similarity=55;
										break;
									case "9":
										$real_similarity=50;
										break;
									case "10":
										$real_similarity=45;
										break;
									case "11":
										$real_similarity=40;
										break;
									case "12":
										$real_similarity=35;
										break;
									case "13":
										$real_similarity=30;
										break;
									case "14":
										$real_similarity=25;
										break;
									case "15":
										$real_similarity=20;
										break;
									case "16":
										$real_similarity=15;
										break;
									case "17":
										$real_similarity=10;
										break;
									case "18":
										$real_similarity=5;
										break;
									case "19":
										$real_similarity=4;
										break;
									case "20":
										$real_similarity=3;	
										break;
									case "21":
										$real_similarity=2;
										break;
									case "22":
										$real_similarity=1;
										break;
									case "23":
										$real_similarity=">1";
										break;



							}
							  
							  
						  
						  }else{
						  
						  $real_similarity=0;
						  
						  }
						  				   
												   
												   
						/////////////////////////////////////////////////////////////////////////////////////
												   
												   
							$tmp_thrshld=$t;					   
												   
												   
												   
							//if($real_similarity<$t){
							
							//	$tmp_thrshld=$real_similarity;
								
							//}else{
							//	$tmp_thrshld=$t;
							//}	   
												   
												   
												   
						  
						  if(strcmp($embddFl,$imgFl)==0){
									//echo $embdFl."****".$orgnlFl."-----\n"; 
							   if($real_similarity<$t){

										$tmp_thrshld=$real_similarity;

									}else{
										$tmp_thrshld=$t;
									}
									
							  if($similarity>=$tmp_thrshld){
										$tp++;									
									}else{
										$fn++;
									}
									
							  	//$cc++;
							  
								}else{
									if($similarity>=$tmp_thrshld){
										$fp++;	
										//echo "similarity: ".$similarity." Threshold: ".$t." embddFl: ".$embddFl." Imgfl: ".$imgFl ;
										
									}else{
										$tn++;
									}
									
							  	//$cc++;
							  
								}
						  
							  
							 // echo "***************".$arr2[$arr1_size-1]."**************";
							  
						  }
						 // echo "\n";
						  	
						  
						  ///////////////////////////////////////////////////////////////////////
						  
						  
						  
						  
						  
						  
						  
						  
						  
						  
						  ////////////////////////////////////////////////////////////////////
						  
						  
						  
						  
						  
						  
						  
						  
						  
						  ?>
                          
                         <!-- <td style="text-align:center"><?php echo $real_similarity; ?></td>
                          
                          
                          </tr>-->
					  <?php } ?>
					  <?php
							  
					  }
						  
						  ?>
						  
					
			  
              <?php 
   // $dir = opendir('uploads/'); # This is the directory it will count from
   $numOfTarget=0;
   $numOfFlWthImg=0;
   $fi1 = new FilesystemIterator("..\Data\FragmentIdentification\Docx\Randomfragment\Result", FilesystemIterator::SKIP_DOTS);
$numOfTarget=iterator_count($fi1);
$fi2 = new FilesystemIterator("..\Data\FragmentIdentification\Docx\Randomfragment\Docx", FilesystemIterator::SKIP_DOTS);
$numOfFlWthImg=iterator_count($fi2);
$numOfComprsn=$numOfTarget*$numOfFlWthImg;

//echo $numOfComprsn;
///*
$dir="..\Data\FragmentIdentification\Docx\Randomfragment\Result";			  
$cdir = scandir($dir); 

$dir2="..\Data\FragmentIdentification\Docx\Randomfragment\Docx";			  
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
              
              
              
              
              
              
			  
			 <table>
              <tr style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center;text-align: justify;padding-left: 10px;"><td colspan="2">Scheme : sdhash &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data Set : Docx &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Fragment Type :&nbsp;Random</td></tr>
              <tr><td style="width: 77%;">True Positive</td><td><?php echo $tp; ?></td></tr>
				   <?php 
				   if($tn<$dsimlarfl){
					   $tn=$dsimlarfl-$fp;
				   }
				 $sdhashRanTPDocx=$tp;
				 $sdhashRanTNDocx=$tn;
				   
				   ?>
				   
              <tr><td style="width: 77%;">True Negative</td><td><?php echo $tn; ?></td></tr>
				   <?php
				   
				   
				   ?>
				   
              <tr><td style="width: 77%;">False Positive</td><td><?php echo $fp; ?></td></tr>
              <?php
				   if($tp<$simlarfl){
					   $fn=$simlarfl-$tp;
				   }
				   
				 $sdhashRanFPDocx=$fp;
				 $sdhashRanFNDocx=$fn;
				 
				   ?>
				   
			  <tr><td style="width: 77%;">False Negative</td><td><?php echo $fn; ?></td></tr>
				 <?php 
				 	$sdhashRanFPRDocx=$sdhashRanFPDocx/$numOfComprsn;
				 	$sdhashRanFNRDocx=$sdhashRanFNDocx/$numOfComprsn;
				 ?>
				 
              <tr><td style="width: 77%;">False positive rate (FPR)</td><td><?php  echo $sdhashRanFPRDocx; ?></td></tr>
              <tr><td style="width: 77%;">False negative rate (FNR)</td><td><?php echo $sdhashRanFNRDocx; ?></td></tr>
              
               <?php 
			  if(($tp+$fp)!=0)	{
				$pre=$tp/($tp+$fp);
				}else{
					$pre=0;
				} 
			  $sdhashRanPREDocx=$pre;
			  ?>
               <tr><td style="width: 77%;">Precision <div style="font-size:9px; color:#F00;">A perfect precision score of 1.0 means that every result retrieved by a search was relevant.</div></td><td><?php echo $sdhashRanPREDocx; ?></td></tr>
               <?php
			  if(($tp+$fn)!=0)	{
				$recall=$tp/($tp+$fn);	
				}else{
					$recall=0;
				} 
				 
				 $sdhashRanRECALLDocx=$recall;
				 
			   ?>
                <tr><td style="width: 77%;">Recall<div style="font-size:9px; color:#F00;">A perfect recall score of 1.0 means that all relevant documents were retrieved by the search.</div></td><td><?php echo $sdhashRanRECALLDocx; ?></td></tr>
                <?php 
				 if(($pre+$recall)!=0){
					$f= 2*($pre*$recall)/($pre+$recall);
				 }else{
					 $f=0;
				 }
				$sdhashRanFSCOREDocx=$f;
				
				?>
				 
			<tr><td style="width: 77%;">F-score<div style="font-size:9px; color:#F00;"> A measure of a test's accuracy (best value at 1 and worst at 0)</div></td><td><?php echo $f; ?></td></tr>
            <?php
				 $sqrt2_1=sqrt(($sdhashRanTPDocx+$sdhashRanFPDocx)*($sdhashRanTPDocx+$sdhashRanFNDocx)*($sdhashRanTNDocx+$sdhashRanFPDocx)*($sdhashRanTNDocx+$sdhashRanFNDocx));
				 
				 if($sqrt2_1==0){
				$sdhashRanMCCDocx=0;
				
				}else{	  
				  
			  $sdhashRanMCCDocx=(($sdhashRanTPDocx*$sdhashRanTNDocx)-($sdhashRanFPDocx*$sdhashRanFNDocx))/$sqrt2_1;
				}
				 
				 
				 ?>
			<tr><td width="77%;">MCC<div style="font-size:9px; color:#F00;"> A measure of the quality of (best value at 1 and worst at -1)</div></td><td><?php echo $sdhashRanMCCDocx; ?></td></tr> 
				 
				 
              </table>
				  
				  
				  
				  
				  
<?php ////////////////////////////////////sdhash Docx Random ends///////////////////////////////////////////////////////////// ?>				  
				  
				  
				  
                  
                  
                  
                  
                  
                <table>  
                	  
                     
                      
					  <tr align="righ" ><td colspan="2" align="right"><input type="submit" align="middle" value="Next" style="margin-left:50%;"  onClick="location.href = 'result_report_fragment_identification_graph.php?ssdeepSeqFSCORE=<?php echo $ssdeepSeqFSCORE ?>&ssdeepRanFSCORE=<?php echo $ssdeepRanFSCORE ?>&ssdeepSeqMCC=<?php echo $ssdeepSeqMCC ?>&ssdeepRanMCC=<?php echo $ssdeepRanMCC ?>&sdhashSeqFSCORE=<?php echo $sdhashSeqFSCORE ?>&sdhashRanFSCORE=<?php echo $sdhashRanFSCORE ?>&sdhashSeqMCC=<?php echo $sdhashSeqMCC ?>&sdhashRanMCC=<?php echo $sdhashRanMCC ?>&numOfText1=<?php echo $numOfText1 ?>&numOfText2=<?php echo $numOfText2 ?>&numOfSeqText=<?php echo $numOfSeqText ?>&numOfRanText=<?php echo $numOfRanText ?>&ssdeepSeqPRE=<?php echo $ssdeepSeqPRE ?>&ssdeepRanPRE=<?php echo $ssdeepRanPRE ?>&sdhashSeqPRE=<?php echo $sdhashSeqPRE ?>&sdhashRanPRE=<?php echo $sdhashRanPRE ?>&ssdeepSeqRECALL=<?php echo $ssdeepSeqRECALL ?>&ssdeepRanRECALL=<?php echo $ssdeepRanRECALL ?>&sdhashSeqRECALL=<?php echo $sdhashSeqRECALL ?>&sdhashRanRECALL=<?php echo $sdhashRanRECALL ?>&ssdeepSeqFSCOREDocx=<?php echo $ssdeepSeqFSCOREDocx ?>&ssdeepRanFSCOREDocx=<?php echo $ssdeepRanFSCOREDocx ?>&ssdeepSeqMCCDocx=<?php echo $ssdeepSeqMCCDocx ?>&ssdeepRanMCCDocx=<?php echo $ssdeepRanMCCDocx ?>&sdhashSeqFSCOREDocx=<?php echo $sdhashSeqFSCOREDocx ?>&sdhashRanFSCOREDocx=<?php echo $sdhashRanFSCOREDocx ?>&sdhashSeqMCCDocx=<?php echo $sdhashSeqMCCDocx ?>&sdhashRanMCCDocx=<?php echo $sdhashRanMCCDocx ?>&numOfDocx1=<?php echo $numOfDocx1 ?>&numOfDocx2=<?php echo $numOfDocx2 ?>&numOfSeqDocx=<?php echo $numOfSeqDocx ?>&numOfRanDocx=<?php echo $numOfRanDocx ?>&ssdeepSeqPREDocx=<?php echo $ssdeepSeqPREDocx ?>&ssdeepRanPREDocx=<?php echo $ssdeepRanPREDocx ?>&sdhashSeqPREDocx=<?php echo $sdhashSeqPREDocx ?>&sdhashRanPREDocx=<?php echo $sdhashRanPREDocx ?>&ssdeepSeqRECALLDocx=<?php echo $ssdeepSeqRECALLDocx ?>&ssdeepRanRECALLDocx=<?php echo $ssdeepRanRECALLDocx ?>&sdhashSeqRECALLDocx=<?php echo $sdhashSeqRECALLDocx ?>&sdhashRanRECALLDocx=<?php echo $sdhashRanRECALLDocx ?>&ssdeepSeqFPR=<?php echo $ssdeepSeqFPR ?>&ssdeepRanFPR=<?php echo $ssdeepRanFPR ?>&sdhashSeqFPR=<?php echo $sdhashSeqFPR ?>&sdhashRanFPR=<?php echo $sdhashRanFPR ?>&ssdeepSeqFPRDocx=<?php echo $ssdeepSeqFPRDocx ?>&ssdeepRanFPRDocx=<?php echo $ssdeepRanFPRDocx ?>&sdhashSeqFPRDocx=<?php echo $sdhashSeqFPRDocx ?>&sdhashRanFPRDocx=<?php echo $sdhashRanFPRDocx ?>&ssdeepSeqFNR=<?php echo $ssdeepSeqFNR ?>&ssdeepRanFNR=<?php echo $ssdeepRanFNR ?>&sdhashSeqFNR=<?php echo $sdhashSeqFNR ?>&sdhashRanFNR=<?php echo $sdhashRanFNR ?>&ssdeepSeqFNRDocx=<?php echo $ssdeepSeqFNRDocx ?>&ssdeepRanFNRDocx=<?php echo $ssdeepRanFNRDocx ?>&sdhashSeqFNRDocx=<?php echo $sdhashSeqFNRDocx ?>&sdhashRanFNRDocx=<?php echo $sdhashRanFNRDocx ?>';"  ></td></tr>
					
					
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
