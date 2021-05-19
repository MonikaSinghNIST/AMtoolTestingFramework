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
          	
    	  <div id="rightContent">
    	    <div id="breadcrumb">Fragment Identification ➤ <a href="evaluateFragment.php">Test Cases</a> ➤ <a href="evaluate_fragment_search.php">Fragment Correlation Test</a> ➤</div> <div id="breadcrumb"> Tool : <span style="color:#333;">ssdeep</span>  <?php if(($_GET['case']==1)||($_GET['case']==3)){ ?>  &nbsp;File type : <span style="color:#333;">Docx</span> &nbsp;&nbsp;Dataset type : <span style="color:#333;">Sequential </span><?php }else if(($_GET['case']==2)||($_GET['case']==4)){ ?> &nbsp;File type : <span style="color:#333;">Docx</span> &nbsp;&nbsp;Dataset type : <span style="color:#333;">Random</span><?php }else if(($_GET['case']==5)||($_GET['case']==7)){ ?>  &nbsp;File type : <span style="color:#333;">Text</span> &nbsp;&nbsp;Dataset type : <span style="color:#333;">Sequential</span><?php }else if(($_GET['case']==6)||($_GET['case']==8)){ ?> &nbsp;File type : <span style="color:#333;">Text</span> &nbsp;&nbsp;Dataset type : <span style="color:#333;">Random</span><?php } ?></div> 
			  <!--<div id="breadcrumb" style="text-align: right;height: 2px;"><a href="FragmentTextResultsPdf.php?scheme=ssdeep" target="_blank" style="text-decoration:none;color: black;">Download PDF</a></div> --> 
			  <form id="frm" method="get" action="javascript:redirect();">
				 <?php $tblid=1; ?>
				  
				   				  
				  <?php
				  //file to store results to generate pdf
				  
				  	$tmp_Pdf_file = 'Tmp_Results_Pdf1.txt';
					$tmp_handle = fopen($tmp_Pdf_file, 'wb') or die('Cannot open file:  '.$tmp_Pdf_file);
					
				  
				  ?>
				  
				  
				  <table id="table<?php echo $tblid; ?>" style="width: 100%; height: 100%;">
					  
					  <tr  style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center; width: 1000px;"><td style="text-align: center; width: 5%;">S.No.</td>
					  <td style="text-align: center; width: 30%">Fragment</td><td style="text-align: center; width: 30%">Target File</td><td style="text-align: center;width: 25%">Similarity<br/> (Calculated by the scheme)</td><td style="text-align: center;width: 10%">Real Similarity</td></tr>
					  
						  <?php
						 
					  
					  	$caseValue=(int)$_GET['case'];
					    $FlIndx1=22;
						$FlIndx2=11;
						$out1='..\temp\ssdeepFreg1.text';
						$out2='..\temp\ssdeepFreg2.text';
					  	$expldSign="_";
					  	switch ($caseValue) {
						
						///*
						
						case 1:
							
							echo exec('..\ExistingTools\\ssdeep -r ..\Data\FragmentIdentification\Docx\Sequentialfragment\Result >'.$out1);
							echo exec('..\ExistingTools\\ssdeep -r ..\Data\FragmentIdentification\Docx\Sequentialfragment\Docx >'.$out2);
							$fldr1='../Data\FragmentIdentification\Docx\Sequentialfragment\Result';	
							$fldr2='../Data\FragmentIdentification\Docx\Sequentialfragment\Docx';
							$expldSign="_";
							break;
								
						case 2:
								
							echo exec('..\ExistingTools\\ssdeep -r ..\Data\FragmentIdentification\Docx\RandomFragment\Result >'.$out1);
							echo exec('..\ExistingTools\\ssdeep -r ..\Data\FragmentIdentification\Docx\RandomFragment\Docx >'.$out2);
							$fldr1='..\Data\FragmentIdentification\Docx\RandomFragment\Result';	
							$fldr2='..\Data\FragmentIdentification\Docx\RandomFragment\Docx';
							$expldSign="_";
							break;
						
						case 3:
							echo exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\FragmentIdentification\DocxData\FromBegnning\Results >'.$out1);
							echo exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\FragmentIdentification\DocxData\FromBegnning\Docx >'.$out2);
							$fldr1='..\DataUserGenerated\FragmentIdentification\DocxData\FromBegnning\Results';	
							$fldr2='..\DataUserGenerated\FragmentIdentification\DocxData\FromBegnning\Docx';
							$expldSign="_";
							break;
								
						case 4:
							
							echo exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\FragmentIdentification\DocxData\Random\Results >'.$out1);
							echo exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\FragmentIdentification\DocxData\Random\Docx >'.$out2);
							$fldr1='..\DataUserGenerated\FragmentIdentification\DocxData\Random\Results';	
							$fldr2='..\DataUserGenerated\FragmentIdentification\DocxData\Random\Docx';
							$expldSign="_";
							break;	
							
							
						case 5:
							
							echo exec('..\ExistingTools\\ssdeep -r ..\Data\FragmentIdentification\Text\Sequentialfragment\Result >'.$out1);
							echo exec('..\ExistingTools\\ssdeep -r ..\Data\FragmentIdentification\Text\Sequentialfragment\Text >'.$out2);
							$fldr1='..\Data\FragmentIdentification\Text\Sequentialfragment\Result';	
							$fldr2='..\Data\FragmentIdentification\Text\Sequentialfragment\Text';
							$expldSign="_";
							break;
								
						case 6:
								
							echo exec('..\ExistingTools\\ssdeep -r ..\Data\FragmentIdentification\Text\RandomFragment\Result >'.$out1);
							echo exec('..\ExistingTools\\ssdeep -r ..\Data\FragmentIdentification\Text\RandomFragment\Text >'.$out2);
							$fldr1='..\Data\FragmentIdentification\Text\RandomFragment\Result';	
							$fldr2='..\Data\FragmentIdentification\Text\RandomFragment\Text';
							$expldSign="_";
							break;
						
						case 7:
							echo exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\FragmentIdentification\TextData\FromBegnning\Results >'.$out1);
							echo exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\FragmentIdentification\TextData\FromBegnning\Text >'.$out2);
							$fldr1='..\DataUserGenerated\FragmentIdentification\TextData\FromBegnning\Results';	
							$fldr2='..\DataUserGenerated\FragmentIdentification\TextData\FromBegnning\Text';
							$expldSign="_";
							break;
								
						case 8:
							
							echo exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\FragmentIdentification\TextData\Random\Results >'.$out1);
							echo exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\FragmentIdentification\TextData\Random\Text >'.$out2);
							$fldr1='..\DataUserGenerated\FragmentIdentification\TextData\Random\Results';	
							$fldr2='..\DataUserGenerated\FragmentIdentification\TextData\Random\Text';
							$expldSign="_";
							break;
								
						default :
							exec('..\ExistingTools\\ssdeep -r ..\Data\Results\DOCX\JPEG\Embedded_Files >'.$out1);
						  	exec('..\ExistingTools\\ssdeep -r ..\Data\Images\Jpeg >'.$out2);
							$fldr1='Data\Results\DOCX\JPEG\Embedded_Files';	
							$fldr2='Data\Images\Jpeg';
							$expldSign="_";
							break;		
								
								
								
						}
					  
					  
					  

						  
						  $rslt= exec('..\ExistingTools\\ssdeep -k '.$out1.' '.$out2.' >..\temp\ssdeepFregSeq.text');
						  
						  $rslt = file_get_contents('..\temp\ssdeepFregSeq.text', true);
					  $sn=0;
						
							$tp=0;
							$tn=0;
							$fp=0;
							$fn=0;
							$sn=0;
							
							$t=(int)$_GET['threshold'];
					  		$rw="";
							
					  		if($rslt==""){
								?>
                                
                                <tr><td colspan="5" style="text-align:center;">No match found!!</td></tr>
                            <?php	
								
								
								
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
						   
						  	 if(($sn-1!=0) && (($sn-1)%10==0)){
									$tblid++;		
							  
							  ?>
				  </table>
				  <table id="table<?php echo $tblid; ?>" style="display: none;width: 1000px;">
                  <tr  style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center; width: 1000px;"><td style="text-align: center; width: 5%;">S.No.</td><td style="text-align: center; width: 30%">Fragment</td><td style="text-align: center; width: 30%">Target File</td><td style="text-align: center;width: 25%">Similarity<br/> (Calculated by the scheme)</td><td style="text-align: center;width: 10%">Real Similarity</td></tr>
					  
					  
					  
					  
					  <?php 
								 }
					  ?>
					  
					 
					  
					  
					<?php
					  $rw=$rw.$sn.";".$target.";".$file_img.";".round($similarity,2).";";
					  $embddFll=$target;
						$imgFll=$file_img;
						
						 $embdFl_arr = explode($expldSign, $embddFll);
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
					  
					  
					  
					  
					  
							  
					  <tr><td><?php echo $sn; ?></td><td style="text-align: center;"><?php echo $target ?></td><td style="text-align: center;"><?php echo $file_img; ?></td><td style="text-align: center;"><?php echo $similarity; ?></td><td style="text-align:center;"><?php echo $real_similarity; ?></td></tr>
						<?php
					 	$rw=$rw.round($real_similarity,2).PHP_EOL;
					  
					  ?>	  
					  
						<?php	  
						
						
						
						fwrite($tmp_handle, $rw);
						
						  }
							  
					  }
						  
						  ?>
						  
						
					  
					 
					  
					  
					  
					 <!-- <tr align="righ" ><td colspan="2" align="right"><input type="submit" align="middle" value="submit" ></td></tr>
					  -->
					  
				  </table>
				  
			  
			  </form>
			  
			  <div style="width: 50%; height: 50%; background-color: ; float:left;"><a href="#" onclick='showPre(<?php echo $tblid; ?>);' style="text-decoration: none;color: black;"><img src="../images/Icons/Previous1.jpg">Previous</a></div>
    <div style="width: 50%; height: 50%; background-color: ; float:right; text-align: right; "><a href="#" onclick='showNext(<?php echo $tblid; ?>);' style="text-decoration:none;color: black;">Next<img src="../images/Icons/Next1.jpg"></a></div>
    
			  
			  
			
			  <!--<div style="margin-top: -10px;"> <table style="border: none;border-bottom: none;"><tr style="width: 5px;"><td style="border-bottom: none;"><a href="#" onclick='showPre(<?php // echo $tblid; ?>);' style="text-decoration: none;color: black;"><img src="images/Icons/Previous1.jpg">Previous</a></td><td align="right" style="width: 50%; text-align: right; vertical-align: bottom; border-bottom: none; border-left: none;"><a href="#" onclick='showNext(<?php // echo $tblid; ?>);' style="text-decoration:none;color: black;">Next<img src="images/Icons/Next1.jpg"></a></td></tr></table> </div>-->
			  
			  <!--<div id="boxContainer" style="font-size: 2em"><a href="">DOCX</a></div>
			  
			  <div id="boxContainer" style="font-size: 2em"><a href="run.php">PPTX</a></div>
			  
			  <div id="boxContainer" style="font-size: 2em"><a href="">PPT</a></div>-->
			  
			 
<!--		      <h1>Welcome to the CFTT Federated Testing CD</h1>-->
			  
              
              
              <?php 
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
				 $sqrt2_1=sqrt(($tp+$fp)*($tp+$fn)*($tn+$fp)*($tn+$fn));
				 
				 if($sqrt2_1==0){
					$MCC=0;
				  }else{	  
				  $MCC=(($tp*$tn)-($fp*$fn))/$sqrt2_1;
				}
				 ?>
                <tr><td width="77%;">MCC<div style="font-size:9px; color:#F00;"> A measure of the quality of (best value at 1 and worst at -1)</div></td><td><?php echo $MCC; ?></td></tr> 
                
              
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
