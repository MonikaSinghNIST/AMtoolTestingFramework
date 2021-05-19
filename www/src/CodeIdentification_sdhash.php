<!doctype html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CFTT Federated Testing CD - Home Page</title>
<link rel="stylesheet" type="text/css" href="../css/reset.css" media="screen" />
<link rel="stylesheet" type="text/css" href="../css/main_style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="../css/layout.css" media="screen" />
	
<script>
function redirect(){
	
	var setType = document.getElementById("setType").value;
	var objct = document.getElementById("tool").value;
	
  if((setType == "PPTX") && (tool== "JPEG")) {
   document.getElementById('frm').action = 'PPTXjpeg.php';
  }else{
	  document.getElementById('frm').action = 'run.php';
  }
}
</script>
	

<script>
		function showPre(nr) {
		
		tblNum--;
		if(tblNum<0){
		   
		   }else{
		for(var i=1;i<=nr;i++){
			
			//alert(tblNum);
			if(i==(tblNum+1)){
			
				document.getElementById("table"+i).style.display="block";
				document.getElementById("table"+i).style.width="100%"  
				
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
          	
    	  <div id="rightContent">
    	    <div id="breadcrumb">Identification of code version  ➤ <a href="evaluate_code_search.php"> Perform specific tests</a> ➤ Tool : sdhash ➤ File type : <?php if((int)$_GET['case']==1){ ?>EXE <?php }else{ ?>DLL<?php } ?></div> 
            <!--<div id="breadcrumb" style="text-align: right;height: 2px;"><a href="CodeIdentificationResultPdf.php?scheme=sdhash" target="_blank" style="text-decoration:none;color: black;">Download PDF</a></div> --> 
			  <form id="frm" method="get" action="javascript:redirect();">
				  <?php $tblid=1; ?>
                				  
				  <?php
				  //file to store results to generate pdf
				  
				  	$tmp_Pdf_file = 'Tmp_Results_Pdf1.txt';
					$tmp_handle = fopen($tmp_Pdf_file, 'wb') or die('Cannot open file:  '.$tmp_Pdf_file);
					
				  
				  ?>
              
				  <table id="table<?php echo $tblid; ?>" >
					  
					  <tr  style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center; width: 1000px;"><td style="text-align: center; width: 5%;">S.No.</td><td style="text-align: center; width: 35%">Document1</td><td style="text-align: center; width: 35%">Document2</td><td style="text-align: center;width: 25%">Similarity<br/> (Calculated by the scheme)</td></tr>
					  
						  <?php
						  
					  	$caseValue=(int)$_GET['case'];
					    $FlIndx1=18;
						$FlIndx2=9;
					  	$expldSign="__";
						$outputfl='..\temp\sdhashCodeIdentification';
						$resultFile='..\temp\sdhashCodeIdentificationResult.text';
						
					  	switch ($caseValue) {
						
						///*
						
						case 1:
							
							echo exec('..\ExistingTools\sdhash ..\Data\ProgramFiles\Exe\*.exe -o '.$outputfl);
							$fldr1='..\Data\ProgramFiles\Exe';	
							$fldr2='..\Data\ProgramFiles\Exe';
							$expldSign="_";
							break;
								
						case 2:
							echo exec('..\ExistingTools\sdhash ..\Data\ProgramFiles\Dll\*.dll -o '.$outputfl);
							$fldr1='..\Data\ProgramFiles\Dll';	
							$fldr2='..\Data\ProgramFiles\Dll';
							$expldSign="_";
							break;
								
								
						}
					  
					  
						  $starttime2 = time(true);
						  $rslt= exec('..\ExistingTools\sdhash -c '.$outputfl.'.sdbf '.$outputfl.'.sdbf | sort > '.$resultFile);
						  $endtime2 = time(true);
     					  $timediff2 = $endtime2 - $starttime2;
						  $rslt = file_get_contents($resultFile, true);
						  $sn=0;
						  $tp=0;
						  $tn=0;
						  $fp=0;
						  $fn=0;
						  $sn=0;
						  $rw="";
							$t=(int)$_GET['threshold'];
					  		if($rslt==""){
							
							?>
					  
					 
                      <tr><td colspan="4" style="text-align:center;">No match found!!</td></tr>
						
						  
						  <?php 
								
							}else{
					  
						  $arr = explode("\n", $rslt);
						  
						  foreach ($arr as &$value) {
						  ?>
                          <?php
                              if(($sn!=0) && (($sn)%10==0)){
									$tblid++;		
							  
							  ?>
				  </table>
				  <table id="table<?php echo $tblid; ?>" style="display: none;width: 1000px;">
                  <tr  style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center; width: 1000px;"><td style="text-align: center; width: 5%;">S.No.</td><td style="text-align: center; width: 35%">Document1</td><td style="text-align: center; width: 35%">Document2</td><td style="text-align: center;width: 25%">Similarity<br/> (Calculated by the scheme)</td></tr>
					  
					  <?php 
						}
					   $sn++; 
					   if($value!=null){  ?>
                            <tr>
                            
                            <td style="text-align:center;"><?php echo $sn; $rw=$rw.$sn.";"; ?></td>
                              
                          <?php
						  
						  $arr1 = explode("|", $value);
						  $cntr=0;
						  foreach ($arr1 as &$value1){
						  $arr2 = explode("\\", $value1);
						  $arr1_size=count($arr2);
						  ?>
                              <td style="text-align:center;"><?php echo $arr2[$arr1_size-1]; ?></td>
                              <?php if($cntr==0){
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
						  
						  ?>
                          
                          </tr>
					  <?php 
					  }
					   	  
					  }
						 fwrite($tmp_handle, $rw); 
					  ?>
					  
				  </table>
				  
			   
			  
			  </form>
			  
			  <div style="width: 50%; height: 50%; background-color: ; float:left;"><a href="#" onclick='showPre(<?php echo $tblid; ?>);' style="text-decoration: none;color: black;"><img src="../images/Icons/Previous1.jpg">Previous</a></div>
    <div style="width: 50%; height: 50%; background-color: ; float:right; text-align: right; "><a href="#" onclick='showNext(<?php echo $tblid; ?>);' style="text-decoration:none;color: black;">Next<img src="../images/Icons/Next1.jpg"></a></div>
              
			  <!--<div id="boxContainer" style="font-size: 2em"><a href="">DOCX</a></div>
			  
			  <div id="boxContainer" style="font-size: 2em"><a href="run.php">PPTX</a></div>
			  
			  <div id="boxContainer" style="font-size: 2em"><a href="">PPT</a></div>-->
			  
			 
<!--		      <h1>Welcome to the CFTT Federated Testing CD</h1>-->
			  

              
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
				$frstfl="";
				for ($i = 1; $i < count($embdFl_arr); $i++){
					$frstfl=$frstfl."_".$embdFl_arr[$i];
				}
				$frstfl=substr($frstfl,1,strlen($frstfl)-1);
				$imgFl_arr = explode("_", $imgFll);
				$scndfl="";
				for ($j = 1; $j < count($imgFl_arr); $j++){
					$scndfl=$scndfl."_".$imgFl_arr[$j];
				
				}
				
				$scndfl=substr($scndfl,1,strlen($scndfl)-1);
				
				if(strcmp($frstfl,$scndfl)==0	){
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
              <tr style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center;"><td colspan="2">Results:</td></tr>
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
              
              </table>
             
			  
                  
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
