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
		
		
function showPre(nr) {
		
		tblNum--;
		if(tblNum<0){
		   }else{
		for(var i=1;i<=nr;i++){
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
		if(tblNum==nr){
		   alert("No more records!!!!");
		   }else{
		
		for(var i=1;i<=nr;i++){
			if(i==(tblNum+1)){
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
    	    <div id="breadcrumb">Embedded Object Identification ➤ <a href="evaluateEmbeddedObject.php">Test Cases</a> ➤ <a href="evaluate_single_common_object_identification_AllInOne.php">Single Common Object Identification</a></div> 
            <div id="breadcrumb">Tool: <span style="color:#333">ssdeep</span>  &nbsp;&nbsp; File type : <?php if(($_GET['case']==5)||($_GET['case']==6)||($_GET['case']==7)||($_GET['case']==8)||($_GET['case']==13)||($_GET['case']==14)||($_GET['case']==15)||($_GET['case']==16)){ ?><span style="color:#333">Docx</span> <?php }else{ ?><span style="color:#333">PPTX</span><?php } ?> &nbsp;&nbsp; Embedded object type :&nbsp;&nbsp; <?php if(($_GET['case']==1)||($_GET['case']==9) || ($_GET['case']==5)||($_GET['case']==13)){ ?><span style="color:#333">JPEG</span><?php }else if(($_GET['case']==2)||($_GET['case']==10)||($_GET['case']==6)||($_GET['case']==14)){ ?><span style="color:#333">BMP</span><?php }else if(($_GET['case']==3)||($_GET['case']==11)||($_GET['case']==7)||($_GET['case']==15)){ ?><span style="color:#333">TIFF</span><?php }else if(($_GET['case']==4)||($_GET['case']==12)||($_GET['case']==8)||($_GET['case']==16)){ ?><span style="color:#333">GIF</span><?php } ?> </div>  
			  <!--<div id="breadcrumb" style="text-align: right;height: 2px;"><a href="EmbeddedObjectDetection_PDF.php?scheme=ssdeep" target="_blank" style="text-decoration:none;color: black;">Download PDF</a></div> --> 
			  <form id="frm" method="get" action="javascript:redirect();">
				 <?php $tblid=1; ?>
				  
				   				  
				  <?php
				  //file to store results to generate pdf
				  
				  	$tmp_Pdf_file = 'Tmp_Results_Pdf1.txt';
					$tmp_handle = fopen($tmp_Pdf_file, 'wb') or die('Cannot open file:  '.$tmp_Pdf_file);
					
				  
				  ?>
				  
				  
				  <table id="table<?php echo $tblid; ?>" style="width: 100%; height: 100%;">
					  
					  <tr  style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center; width: 1000px;"><td style="text-align: center; width: 15%;">S.No.</td><td style="text-align: center; width: 35%">Document1</td><td style="text-align: center; width: 30%">Document2</td><td style="text-align: center;width: 20%">Similarity<br/> (Calculated by the scheme)</td></tr>
					  
					 <?php
						
					  
					  	$caseValue=(int)$_GET['case'];
					  	$out1='..\temp\ssdeep_embeddedObjectSingleObject1.text';
					   $out2='..\temp\ssdeep_embeddedObjectSingleObject2.text';
					  
					  	switch ($caseValue) {
						
						case 1:
							exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\EmbeddedObjects\PPTX\JPEG\Embedded_Files > '.$out1);
						  	exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\EmbeddedObjects\PPTX\JPEG\Embedded_Files > '.$out2);
							$fldr1='..\DataUserGenerated\EmbeddedObjects\PPTX\JPEG\Embedded_Files';	
							$fldr2='..\DataUserGenerated\EmbeddedObjects\PPTX\JPEG\Embedded_Files';
							$docxFlIndx=22;
							$imgIndx=11;
							break;
							
							
						case 2:
							exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\EmbeddedObjects\PPTX\BMP\Embedded_Files > '.$out1);
						  	exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\EmbeddedObjects\PPTX\BMP\Embedded_Files > '.$out2);
							$fldr1='..\DataUserGenerated\EmbeddedObjects\PPTX\BMP\Embedded_Files';	
							$fldr2='..\DataUserGenerated\EmbeddedObjects\PPTX\BMP\Embedded_Files';
							$docxFlIndx=22;
							$imgIndx=11;
							break;	
						
						case 3:
							exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\EmbeddedObjects\PPTX\TIFF\Embedded_Files > '.$out1);
						  	exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\EmbeddedObjects\PPTX\TIFF\Embedded_Files > '.$out2);
							$fldr1='..\DataUserGenerated\EmbeddedObjects\PPTX\TIFF\Embedded_Files';	
							$fldr2='..\DataUserGenerated\EmbeddedObjects\PPTX\TIFF\Embedded_Files';
							$docxFlIndx=22;
							$imgIndx=11;
							break;
							
						case 4:
							exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\EmbeddedObjects\PPTX\GIF\Embedded_Files > '.$out1);
						  	exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\EmbeddedObjects\PPTX\GIF\Embedded_Files > '.$out2);
							$fldr1='..\DataUserGenerated\EmbeddedObjects\PPTX\GIF\Embedded_Files';	
							$fldr2='..\DataUserGenerated\EmbeddedObjects\PPTX\GIF\Embedded_Files';
							$docxFlIndx=22;
							$imgIndx=11;
							break;	
						
						
						
						
						
							
							
						case 5:
							exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\EmbeddedObjects\Docx\JPEG\Embedded_Files > '.$out1);
						  	//exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\EmbeddedObjects\Docx\JPEG\Embedded_Files > '.$out2);
							$fldr1='..\DataUserGenerated\EmbeddedObjects\Docx\JPEG\Embedded_Files';	
							$fldr2='..\DataUserGenerated\EmbeddedObjects\Docx\JPEG\Embedded_Files';
							$docxFlIndx=22;
							$imgIndx=11;
							break;
							
							
						case 6:
							exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\EmbeddedObjects\Docx\BMP\Embedded_Files > '.$out1);
						  	//exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\EmbeddedObjects\Docx\BMP\Embedded_Files > '.$out2);
							$fldr1='..\DataUserGenerated\EmbeddedObjects\Docx\BMP\Embedded_Files';	
							$fldr2='..\DataUserGenerated\EmbeddedObjects\Docx\BMP\Embedded_Files';
							$docxFlIndx=22;
							$imgIndx=11;
							break;	
						
						case 7:
							exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\EmbeddedObjects\Docx\TIFF\Embedded_Files > '.$out1);
						  	//exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\EmbeddedObjects\Docx\TIFF\Embedded_Files > '.$out2);
							$fldr1='..\DataUserGenerated\EmbeddedObjects\Docx\TIFF\Embedded_Files';	
							$fldr2='..\DataUserGenerated\EmbeddedObjects\Docx\TIFF\Embedded_Files';
							$docxFlIndx=22;
							$imgIndx=11;
							break;
							
						case 8:
							exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\EmbeddedObjects\Docx\GIF\Embedded_Files > '.$out1);
						  	//exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\EmbeddedObjects\Docx\GIF\Embedded_Files > '.$out2);
							$fldr1='..\DataUserGenerated\EmbeddedObjects\Docx\GIF\Embedded_Files';	
							$fldr2='..\DataUserGenerated\EmbeddedObjects\Docx\GIF\Embedded_Files';
							$docxFlIndx=22;
							$imgIndx=11;
							break;	
							
							

			
					    	
						
						case 9:
							exec('..\ExistingTools\\ssdeep -r ..\Data\EmbeddedObjects\PPTX\JPEG\Embedded_Files > '.$out1);
						  	//exec('..\ExistingTools\\ssdeep -r ..\Data\EmbeddedObjects\PPTX\JPEG\Embedded_Files > '.$out2);
							$fldr1='..\Data\EmbeddedObjects\PPTX\JPEG\Embedded_Files';	
							$fldr2='..\Data\EmbeddedObjects\PPTX\JPEG\Embedded_Files';
							$docxFlIndx=22;
							$imgIndx=11;
							break;
							
							
						case 10:
							exec('..\ExistingTools\\ssdeep -r ..\Data\EmbeddedObjects\PPTX\BMP\Embedded_Files > '.$out1);
						  	//exec('..\ExistingTools\\ssdeep -r ..\Data\EmbeddedObjects\PPTX\BMP\Embedded_Files > '.$out2);
							$fldr1='..\Data\EmbeddedObjects\PPTX\BMP\Embedded_Files';	
							$fldr2='..\Data\EmbeddedObjects\PPTX\BMP\Embedded_Files';
							$docxFlIndx=22;
							$imgIndx=11;
							break;	
						
						case 11:
							exec('..\ExistingTools\\ssdeep -r ..\Data\EmbeddedObjects\PPTX\TIFF\Embedded_Files > '.$out1);
						  	//exec('..\ExistingTools\\ssdeep -r ..\Data\EmbeddedObjects\PPTX\TIFF\Embedded_Files > '.$out2);
							$fldr1='..\Data\EmbeddedObjects\PPTX\TIFF\Embedded_Files';	
							$fldr2='..\Data\EmbeddedObjects\PPTX\TIFF\Embedded_Files';
							$docxFlIndx=22;
							$imgIndx=11;
							break;
							
						case 12:
							exec('..\ExistingTools\\ssdeep -r ..\Data\EmbeddedObjects\PPTX\GIF\Embedded_Files > '.$out1);
						  	//exec('..\ExistingTools\\ssdeep -r ..\Data\EmbeddedObjects\PPTX\GIF\Embedded_Files > '.$out2);
							$fldr1='..\Data\EmbeddedObjects\PPTX\GIF\Embedded_Files';	
							$fldr2='..\Data\EmbeddedObjects\PPTX\GIF\Embedded_Files';
							$docxFlIndx=22;
							$imgIndx=11;
							break;
							
							
							
						case 13:
							exec('..\ExistingTools\\ssdeep -r ..\Data\EmbeddedObjects\Docx\JPEG\Embedded_Files > '.$out1);
						  	//exec('..\ExistingTools\\ssdeep -r ..\Data\EmbeddedObjects\Docx\JPEG\Embedded_Files > '.$out2);
							$fldr1='..\Data\EmbeddedObjects\Docx\JPEG\Embedded_Files';	
							$fldr2='..\Data\EmbeddedObjects\Docx\JPEG\Embedded_Files';
							$docxFlIndx=22;
							$imgIndx=11;
							break;
							
							
						case 14:
							exec('..\ExistingTools\\ssdeep -r ..\Data\EmbeddedObjects\Docx\BMP\Embedded_Files > '.$out1);
						  	//exec('..\ExistingTools\\ssdeep -r ..\Data\EmbeddedObjects\Docx\BMP\Embedded_Files > '.$out2);
							$fldr1='..\Data\EmbeddedObjects\Docx\BMP\Embedded_Files';	
							$fldr2='..\Data\EmbeddedObjects\Docx\BMP\Embedded_Files';
							$docxFlIndx=22;
							$imgIndx=11;
							break;	
						
						case 15:
							exec('..\ExistingTools\\ssdeep -r ..\Data\EmbeddedObjects\Docx\TIFF\Embedded_Files > '.$out1);
						  	//exec('..\ExistingTools\\ssdeep -r ..\Data\EmbeddedObjects\Docx\TIFF\Embedded_Files > '.$out2);
							$fldr1='..\Data\EmbeddedObjects\Docx\TIFF\Embedded_Files';	
							$fldr2='..\Data\EmbeddedObjects\Docx\TIFF\Embedded_Files';
							$docxFlIndx=22;
							$imgIndx=11;
							break;
							
						case 16:
							exec('..\ExistingTools\\ssdeep -r ..\Data\EmbeddedObjects\Docx\GIF\Embedded_Files > '.$out1);
						  	//exec('..\ExistingTools\\ssdeep -r ..\Data\EmbeddedObjects\Docx\GIF\Embedded_Files > '.$out2);
							$fldr1='..\Data\EmbeddedObjects\Docx\GIF\Embedded_Files';	
							$fldr2='..\Data\EmbeddedObjects\Docx\GIF\Embedded_Files';
							$docxFlIndx=22;
							$imgIndx=11;
							break;
					
						default :
							exec('ssdeep -r Data\Results\DOCX\JPEG\Embedded_Files >ssdeep_single_commom1.text');
						  	exec('ssdeep -r Data\Images\Jpeg >ssdeepAllInOne2.text');
							$fldr1='Data\Results\DOCX\JPEG\Embedded_Files';	
							$fldr2='Data\Images\Jpeg';
							$docxFlIndx=16;
							$imgIndx=7;
							break;		
								
						}
					  
						  $rslt= exec('..\ExistingTools\\ssdeep -k '.$out1.' '.$out1.' >..\temp\ssdeep_embeddedObject_singleCommonObject.text');  
					  
						  $rslt = file_get_contents('..\temp\ssdeep_embeddedObject_singleCommonObject.text', true);
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
                  <tr  style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center; width: 1000px;"><td style="text-align: center; width: 15%;">S.No.</td><td style="text-align: center; width: 35%">Target File</td><td style="text-align: center; width: 30%">Images</td><td style="text-align: center;width: 20%">Similarity<br/> (Calculated by the scheme)</td></tr>
				  <?php  } ?>
							  
					  <tr><td style="text-align: center;"><?php echo $sn; ?></td><td style="text-align: center;"><?php echo $target ?></td><td style="text-align: center;"><?php echo $file_img; ?></td><td style="text-align: center;"><?php echo $similarity; ?></td></tr>
						<?php
					  $rw=$rw.$sn.";".$target.";".$file_img.";".round($similarity,2).PHP_EOL;
					  
					  ?>	  
					  
						<?php	  
						$embddFll=$target;
						$imgFll=$file_img;
						
						 $embdFl_arr = explode("_", $embddFll);
						 $imgFl_arr = explode("_", $imgFll);
							//$ln=count($embdFl_arr);
								//$lnn=count($imgFl_arr);
								$embddFl=$embdFl_arr[0];
								$imgFl=$imgFl_arr[0];	  
								//echo $embddFl."---".$imgFl;
								
						  
						  if(strcmp($embddFl,$imgFl)==0){
									if($similarity>=$t){
										$tp++;									
									}else{
										echo $embddFl."---".$imgFl."---".$similarity;
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
				  
				  </table>
				
			  </form>
			  
			  <div style="width: 50%; height: 50%; background-color: ; float:left;"><a href="#" onclick='showPre(<?php echo $tblid; ?>);' style="text-decoration: none;color: black;"><img src="../images/Icons/Previous1.jpg">Previous</a></div>
    <div style="width: 50%; height: 50%; background-color: ; float:right; text-align: right; "><a href="#" onclick='showNext(<?php echo $tblid; ?>);' style="text-decoration:none;color: black;">Next<img src="../images/Icons/Next1.jpg"></a></div>
    
			  
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
              <tr style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center;"><td colspan="2">Results:</td></tr>
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
