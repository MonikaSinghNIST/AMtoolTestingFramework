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
		  <!--<div id="leftContent">
		   <div id="leftLinks">
			  <div>
				  
			    <?php
                
				 // print_main_sidebar_menu_contents();
               ?>
    	    </div>
		    </div>
		  </div>  -->
          	
    	  <div id="rightContent" style="width:100%;margin-left:-11.3px;">
    	    <div id="breadcrumb">Fragment Identification ??? <a href="evaluateFragment.php">Test Cases</a> ??? <a href="evaluate_smallest_fragment_correlation.php">Smallest Fragment Identification</a> ??? Tool : <span style="color:#333;">ssdeep</span>  <?php if(($_GET['case']==1)||($_GET['case']==3)){ ?>  &nbsp;File type : <span style="color:#333;">Docx</span> &nbsp;&nbsp;Dataset type : <span style="color:#333;">Sequential </span><?php }else if(($_GET['case']==2)||($_GET['case']==4)){ ?> &nbsp;File type : <span style="color:#333;">Docx</span> &nbsp;&nbsp;Dataset type : <span style="color:#333;">Random</span><?php }else if(($_GET['case']==5)||($_GET['case']==7)){ ?>  &nbsp;File type : <span style="color:#333;">Text</span> &nbsp;&nbsp;Dataset type : <span style="color:#333;">Sequential</span><?php }else if(($_GET['case']==6)||($_GET['case']==8)){ ?> &nbsp;File type : <span style="color:#333;">Text</span> &nbsp;&nbsp;Dataset type : <span style="color:#333;">Random</span><?php } ?></div> 
			  <!--<div id="breadcrumb" style="text-align: right;height: 2px;"><a href="FragmentTextResultsPdf.php?scheme=ssdeep" target="_blank" style="text-decoration:none;color: black;">Download PDF</a></div> --> 
			  <form id="frm" method="get" action="javascript:redirect();">
				 <?php $tblid=1; 
				   function folderSize ($dir)
					{
						$size = 0;
						foreach (glob(rtrim($dir, '/').'/*', GLOB_NOSORT) as $each) {
							$size += is_file($each) ? filesize($each) : folderSize($each);
					}
						return $size;
				  }
				   
				  $score95=0;
				  $score90=0;
				  $score85=0;
				  $score80=0;
				  $score75=0;
				  $score70=0;
				  $score65=0;
				  $score60=0;
				  $score55=0;
				  $score50=0;
				  $score45=0;
				  $score40=0;
				  $score35=0;
				  $score30=0;
				  $score25=0;
				  $score20=0;
				  $score15=0;
				  $score10=0;
				  $score5=0;
				  $score4=0;
				  $score3=0;
				  $score2=0;
				  $score1=0;
				  
				  
				  $match95=0;
				  $match90=0;
				  $match85=0;
				  $match80=0;
				  $match75=0;
				  $match70=0;
				  $match65=0;
				  $match60=0;
				  $match55=0;
				  $match50=0;
				  $match45=0;
				  $match40=0;
				  $match35=0;
				  $match30=0;
				  $match25=0;
				  $match20=0;
				  $match15=0;
				  $match10=0;
				  $match5=0;
				  $match4=0;
				  $match3=0;
				  $match2=0;
				  $match1=0;
				  
				  
				  
				  
				  ?>
                  
				   				  
				  <?php
				  //file to store results to generate pdf
				  
				  	$tmp_Pdf_file = 'Tmp_Results_Pdf1.txt';
					$tmp_handle = fopen($tmp_Pdf_file, 'wb') or die('Cannot open file:  '.$tmp_Pdf_file);
					
				    
					  	$caseValue=(int)$_GET['case'];
					    $FlIndx1=22;
						$FlIndx2=11;
						$out1='..\temp\ssdeepFreg1.text';
						$out2='..\temp\ssdeepFreg2.text';
					  	$expldSign="_";
					  	switch ($caseValue) {
						
						
						
						case 1:
							$exectnTime_start=time();
							echo exec('..\ExistingTools\\ssdeep -r ..\Data\FragmentIdentification\Docx\Sequentialfragment\Result >'.$out1);
							echo exec('..\ExistingTools\\ssdeep -r ..\Data\FragmentIdentification\Docx\Sequentialfragment\Docx >'.$out2);
							$exectnTime_end=time();
							//echo($exectnTime_end); 
							$exectnTime=$exectnTime_end-$exectnTime_start;
							$fldr1='../Data\FragmentIdentification\Docx\Sequentialfragment\Result';	
							$fldr2='../Data\FragmentIdentification\Docx\Sequentialfragment\Docx';
							$dataSize=folderSize($fldr1)+folderSize($fldr1);
							$expldSign="_";
							break;
								
						case 2:
							$exectnTime_start=time();	
							echo exec('..\ExistingTools\\ssdeep -r ..\Data\FragmentIdentification\Docx\RandomFragment\Result >'.$out1);
							echo exec('..\ExistingTools\\ssdeep -r ..\Data\FragmentIdentification\Docx\RandomFragment\Docx >'.$out2);
							$exectnTime_end=time();
							//echo($exectnTime_end); 
							$exectnTime=$exectnTime_end-$exectnTime_start;
							$fldr1='..\Data\FragmentIdentification\Docx\RandomFragment\Result';	
							$fldr2='..\Data\FragmentIdentification\Docx\RandomFragment\Docx';
							$dataSize=folderSize($fldr1)+folderSize($fldr1);
							$expldSign="_";
							break;
						
						case 3:
							$exectnTime_start=time();
							echo exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\FragmentIdentification\DocxData\FromBegnning\Results >'.$out1);
							echo exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\FragmentIdentification\DocxData\FromBegnning\Docx >'.$out2);
							$exectnTime_end=time();
							//echo($exectnTime_end); 
							$exectnTime=$exectnTime_end-$exectnTime_start;
							$fldr1='..\DataUserGenerated\FragmentIdentification\DocxData\FromBegnning\Results';	
							$fldr2='..\DataUserGenerated\FragmentIdentification\DocxData\FromBegnning\Docx';
							$dataSize=folderSize($fldr1)+folderSize($fldr1);
							$expldSign="_";
							break;
								
						case 4:
							$exectnTime_start=time();
							echo exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\FragmentIdentification\DocxData\Random\Results >'.$out1);
							echo exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\FragmentIdentification\DocxData\Random\Docx >'.$out2);
							$exectnTime_end=time();
							//echo($exectnTime_end); 
							$exectnTime=$exectnTime_end-$exectnTime_start;
							$fldr1='..\DataUserGenerated\FragmentIdentification\DocxData\Random\Results';	
							$fldr2='..\DataUserGenerated\FragmentIdentification\DocxData\Random\Docx';
							$dataSize=folderSize($fldr1)+folderSize($fldr1);
							$expldSign="_";
							break;	
							
							
						case 5:
							$exectnTime_start=time();
							echo exec('..\ExistingTools\\ssdeep -r ..\Data\FragmentIdentification\Text\Sequentialfragment\Result >'.$out1);
							echo exec('..\ExistingTools\\ssdeep -r ..\Data\FragmentIdentification\Text\Sequentialfragment\Text >'.$out2);
							$exectnTime_end=time();
							//echo($exectnTime_end); 
							$exectnTime=$exectnTime_end-$exectnTime_start;
							$fldr1='..\Data\FragmentIdentification\Text\Sequentialfragment\Result';	
							$fldr2='..\Data\FragmentIdentification\Text\Sequentialfragment\Text';
							$dataSize=folderSize($fldr1)+folderSize($fldr1);
							$expldSign="_";
							break;
								
						case 6:
							$exectnTime_start=time();	
							echo exec('..\ExistingTools\\ssdeep -r ..\Data\FragmentIdentification\Text\RandomFragment\Result >'.$out1);
							echo exec('..\ExistingTools\\ssdeep -r ..\Data\FragmentIdentification\Text\RandomFragment\Text >'.$out2);
							$exectnTime_end=time();
							//echo($exectnTime_end); 
							$exectnTime=$exectnTime_end-$exectnTime_start;
							$fldr1='..\Data\FragmentIdentification\Text\RandomFragment\Result';	
							$fldr2='..\Data\FragmentIdentification\Text\RandomFragment\Text';
							$dataSize=folderSize($fldr1)+folderSize($fldr1);
							$expldSign="_";
							break;
						
						case 7:
							$exectnTime_start=time();
							echo exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\FragmentIdentification\TextData\FromBegnning\Results >'.$out1);
							echo exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\FragmentIdentification\TextData\FromBegnning\Text >'.$out2);
							$exectnTime_end=time();
							//echo($exectnTime_end); 
							$exectnTime=$exectnTime_end-$exectnTime_start;
							$fldr1='..\DataUserGenerated\FragmentIdentification\TextData\FromBegnning\Results';	
							$fldr2='..\DataUserGenerated\FragmentIdentification\TextData\FromBegnning\Text';
							$dataSize=folderSize($fldr1)+folderSize($fldr1);
							$expldSign="_";
							break;
								
						case 8:
							$exectnTime_start=time();
							echo exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\FragmentIdentification\TextData\Random\Results >'.$out1);
							echo exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\FragmentIdentification\TextData\Random\Text >'.$out2);
							$exectnTime_end=time();
							$exectnTime=$exectnTime_end-$exectnTime_start;
							$fldr1='..\DataUserGenerated\FragmentIdentification\TextData\Random\Results';	
							$fldr2='..\DataUserGenerated\FragmentIdentification\TextData\Random\Text';
							$dataSize=folderSize($fldr1)+folderSize($fldr1);
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
					  
					  
					  

						  $digestGenerationTime_start=time();
						  $rslt= exec('..\ExistingTools\\ssdeep -k '.$out1.' '.$out2.' >..\temp\ssdeepFregSeq.text');
						   $digestGenerationTime_end=time();
				          $digestGenerationTime=$digestGenerationTime_end-$digestGenerationTime_start;
						  
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
							  		
									  
								
					  $rw=$rw.$sn.";".$target.";".$file_img.";".round($similarity,2).";";
					  $embddFll=$target;
					  $imgFll=$file_img;
					  $embdFl_arr = explode($expldSign, $embddFll);
					  $imgFl_arr = explode(".", $imgFll);
					  $embddFl=$embdFl_arr[0];
					  $imgFl=$imgFl_arr[0];	  
					  
					  $prcnt_tmp=explode(".",$embdFl_arr[1]);
     				  $prcnt=$prcnt_tmp[0];		
					
						
					  if(strcmp($embddFl,$imgFl)==0){
						
						$real_similarity=0;
				 	
					  		switch ($prcnt) {
										case "0":
											$score95=$score95+$similarity;
											if($similarity>=$t){
											$match95++;
											}
											break;
										case "1":
											$score90=$score90+$similarity;
											if($similarity>=$t){
											$match90++;
											}
											break;
										case "2":
											$score85=$score85+$similarity;
											if($similarity>=$t){
											$match85++;
											}
											break;
										case "3":
											$score80=$score80+$similarity;
											if($similarity>=$t){
											$match80++;
											}
											break;
										case "4":
											$score75=$score75+$similarity;
											if($similarity>=$t){
											$match75++;
											}
											break;
										case "5":
											$score70=$score70+$similarity;
											if($similarity>=$t){
											$match70++;
											}
											break;
										case "6":
											$score65=$score65+$similarity;
											if($similarity>=$t){
											$match65++;
											}
											break;
										case "7":
											$score60=$score60+$similarity;
											if($similarity>=$t){
											$match60++;
											}
											break;
										case "8":
											$score55=$score55+$similarity;
											if($similarity>=$t){
											$match55++;
											}
											break;
										case "9":
											$score50=$score50+$similarity;
											if($similarity>=$t){
											$match50++;
											}
											break;
										case "10":
											$score45=$score45+$similarity;
											if($similarity>=$t){
											$match45++;
											}
											break;
										case "11":
											$score40=$score40+$similarity;
											if($similarity>=$t){
											$match40++;
											}
											break;
										case "12":
											$score35=$score35+$similarity;
											if($similarity>=$t){
											$match35++;
											}
											break;
										case "13":
											$score30=$score30+$similarity;
											if($similarity>=$t){
											$match30++;
											}
											break;
										case "14":
											$score25=$score25+$similarity;
											if($similarity>=$t){
											$match25++;
											}
											break;
										case "15":
											$score20=$score20+$similarity;
											if($similarity>=$t){
											$match20++;
											}
											break;
										case "16":
											$score15=$score15+$similarity;
											if($similarity>=$t){
											$match15++;
											}
											break;
										case "17":
											$score10=$score10+$similarity;
											if($similarity>=$t){
											$match10++;
											}
											break;
										case "18":
											$score5=$score5+$similarity;
											if($similarity>=$t){
											$match5++;
											}
											break;
										case "19":
											$score4=$score4+$similarity;
											if($similarity>=$t){
											$match4++;
											}
											break;
										case "20":
											$score3=$score3+$similarity;
											if($similarity>=$t){
											$match3++;
											}
											break;
										case "21":
											$score2=$score2+$similarity;
											if($similarity>=$t){
											$match2++;
											}
											break;
										case "22":
											$score1=$score1+$similarity;
											if($similarity>=$t){
											$match1++;
											}
											break;
										case "23":
											//$real_similarity=">1";
											break;
										
									}
	  
					  
					  }
					 
					 	$rw=$rw.round($real_similarity,2).PHP_EOL;
					  
					 
						
						fwrite($tmp_handle, $rw);
						
							  
						  }
							  
					  }
						  
						  ?>
						  
						
					  
					 
					  
					  
					  
					 <!-- <tr align="righ" ><td colspan="2" align="right"><input type="submit" align="middle" value="submit" ></td></tr>
					  -->
			
				  
			  
			  </form>
			  
			  
			  
			  
			
			  <!--<div style="margin-top: -10px;"> <table style="border: none;border-bottom: none;"><tr style="width: 5px;"><td style="border-bottom: none;"><a href="#" onclick='showPre(<?php // echo $tblid; ?>);' style="text-decoration: none;color: black;"><img src="images/Icons/Previous1.jpg">Previous</a></td><td align="right" style="width: 50%; text-align: right; vertical-align: bottom; border-bottom: none; border-left: none;"><a href="#" onclick='showNext(<?php // echo $tblid; ?>);' style="text-decoration:none;color: black;">Next<img src="images/Icons/Next1.jpg"></a></td></tr></table> </div>-->
			  
			  <!--<div id="boxContainer" style="font-size: 2em"><a href="">DOCX</a></div>
			  
			  <div id="boxContainer" style="font-size: 2em"><a href="run.php">PPTX</a></div>
			  
			  <div id="boxContainer" style="font-size: 2em"><a href="">PPT</a></div>-->
			  
			 
<!--		      <h1>Welcome to the CFTT Federated Testing CD</h1>-->
			  
              
              
    <?php 
   // $dir = opendir('uploads/'); # This is the directory it will count from
   $numOfFrgmntFl=0;
   $numOfTxtFl=0;
   $fi1 = new FilesystemIterator($fldr1, FilesystemIterator::SKIP_DOTS);
$numOfFrgmntFl=iterator_count($fi1);
$fi2 = new FilesystemIterator($fldr2, FilesystemIterator::SKIP_DOTS);
$numOfTxtFl=iterator_count($fi2);
$numOfComprsn=$numOfFrgmntFl*$numOfTxtFl;
		  


?>       
              
              
              
			  
			  <table id="table<?php echo $tblid; ?>" style="width: 100%; height: 100%;">
					  
					  <tr  style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center; width: ;font-size:10.94px;"><td style="text-align: center; width: ;">Fragment Sizee</td><td style="text-align: center; width: ">95%</td><td style="text-align: center; width: ">90%</td><td style="text-align: center;width: ">85%</td><td style="text-align: center;width: ">80%</td><td style="text-align: center;width: ">75%</td><td style="text-align: center;width: ">70%</td><td style="text-align: center;width: ">65%</td><td style="text-align: center;width: ">60%</td><td style="text-align: center;width: ">55%</td><td style="text-align: center;width: ">50%</td><td style="text-align: center;width: ">45%</td><td style="text-align: center;width: ">40%</td><td style="text-align: center;width: ">35%</td><td style="text-align: center;width: ">30%</td><td style="text-align: center;width: ">25%</td><td style="text-align: center;width: ">20%</td><td style="text-align: center;width: ">15%</td><td style="text-align: center;width: ">10%</td><td style="text-align: center;width: ">5%</td><td style="text-align: center;width: ">4%</td><td style="text-align: center;width: ">3%</td><td style="text-align: center;width: ">2%</td><td style="text-align: center;width: ">1%</td></tr>
                      
                      <tr  style=" width: ;font-size:10.94px;"><td  style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center; width: ;">Average  Score</td><td style="text-align: center; width: "><?php echo round($score95/$numOfTxtFl,2); ?></td><td style="text-align: center; width: "><?php echo round($score90/$numOfTxtFl,2); ?></td><td style="text-align: center;width: "><?php echo round($score85/$numOfTxtFl,2); ?></td><td style="text-align: center;width: "><?php echo round($score80/$numOfTxtFl,2); ?></td><td style="text-align: center;width: "><?php echo round($score75/$numOfTxtFl,2); ?></td><td style="text-align: center;width: "><?php echo round($score70/$numOfTxtFl,2); ?></td><td style="text-align: center;width: "><?php echo round($score65/$numOfTxtFl,2); ?></td><td style="text-align: center;width: "><?php echo round($score60/$numOfTxtFl,2); ?></td><td style="text-align: center;width: "><?php echo round($score55/$numOfTxtFl,2); ?></td><td style="text-align: center;width: "><?php echo round($score50/$numOfTxtFl,2); ?></td><td style="text-align: center;width: "><?php echo round($score45/$numOfTxtFl,2); ?></td><td style="text-align: center;width: "><?php echo round($score40/$numOfTxtFl,2); ?></td><td style="text-align: center;width: "><?php echo round($score35/$numOfTxtFl,2); ?></td><td style="text-align: center;width: "><?php echo round($score30/$numOfTxtFl,2); ?></td><td style="text-align: center;width: "><?php echo round($score25/$numOfTxtFl,2); ?></td><td style="text-align: center;width: "><?php echo round($score20/$numOfTxtFl,2); ?></td><td style="text-align: center;width: "><?php echo round($score15/$numOfTxtFl,2); ?></td><td style="text-align: center;width: "><?php echo round($score10/$numOfTxtFl,2); ?></td><td style="text-align: center;width: "><?php echo round($score5/$numOfTxtFl,2); ?></td><td style="text-align: center;width: "><?php echo round($score4/$numOfTxtFl,2); ?></td><td style="text-align: center;width: "><?php echo round($score3/$numOfTxtFl,2); ?></td><td style="text-align: center;width: "><?php echo round($score2/$numOfTxtFl,2); ?></td><td style="text-align: center;width: "><?php echo round($score1/$numOfTxtFl,2); ?></td></tr>
                      
                      
                      
<tr  style=" width: ;font-size:10.94px;">
  <td  style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center; width: ;">Match(%)</td>
  <td style="text-align: center; width: ;"><?php echo round((($match95*100)/$numOfTxtFl),2); ?></td><td style="text-align: center; width: "><?php echo round((($match90*100)/$numOfTxtFl),2); ?></td><td style="text-align: center;width: "><?php echo round((($match85*100)/$numOfTxtFl),2); ?></td><td style="text-align: center;width: "><?php echo round((($match80*100)/$numOfTxtFl),2); ?></td><td style="text-align: center;width: "><?php echo round((($match75*100)/$numOfTxtFl),2); ?></td><td style="text-align: center;width: "><?php echo round((($match70*100)/$numOfTxtFl),2); ?></td><td style="text-align: center;width: "><?php echo round((($match65*100)/$numOfTxtFl),2); ?></td><td style="text-align: center;width: "><?php echo round((($match60*100)/$numOfTxtFl),2); ?></td><td style="text-align: center;width: "><?php echo round((($match55*100)/$numOfTxtFl),2); ?></td><td style="text-align: center;width: "><?php echo round((($match50*100)/$numOfTxtFl),2); ?></td><td style="text-align: center;width: "><?php echo round((($match45*100)/$numOfTxtFl),2); ?></td><td style="text-align: center;width: "><?php echo round((($match40*100)/$numOfTxtFl),2); ?></td><td style="text-align: center;width: "><?php echo round((($match35*100)/$numOfTxtFl),2); ?></td><td style="text-align: center;width: "><?php echo round((($match30*100)/$numOfTxtFl),2); ?></td><td style="text-align: center;width: "><?php echo round((($match25*100)/$numOfTxtFl),2); ?></td><td style="text-align: center;width: "><?php echo round((($match20*100)/$numOfTxtFl),2); ?></td><td style="text-align: center;width: "><?php echo round((($match15*100)/$numOfTxtFl),2); ?></td><td style="text-align: center;width: "><?php echo round((($match10*100)/$numOfTxtFl),2); ?></td><td style="text-align: center;width: "><?php echo round((($match5*100)/$numOfTxtFl),2); ?></td><td style="text-align: center;width: "><?php echo round((($match4*100)/$numOfTxtFl),2); ?></td><td style="text-align: center;width: "><?php echo round((($match3*100)/$numOfTxtFl),2); ?></td><td style="text-align: center;width: "><?php echo round((($match2*100)/$numOfTxtFl),2); ?></td><td style="text-align: center;width: "><?php echo round((($match1*100)/$numOfTxtFl),2); ?></td></tr>
                      
                      
                         
              </table>
			  <br>
			  <div id="breadcrumb">Performance Analysis </div> 		  
			
				  
	<table>
	<tr  style=" width: ;">
  <td  style="font-family: Arial, 'Century Gothic'; background-color: #; color:#0e375d; text-align: left;" width="200px">Data Set Size</td>
  <td style="text-align: center; width: " colspan="11"><?php echo round(($dataSize/(1024*1024)),2); ?> MB </td></tr>     
					  
					  <tr  style=" width: ;">
  <td  style="font-family: Arial, 'Century Gothic'; background-color: #; color:#0e375d; text-align: left;" width="200px">Digest generation time</td>
  <td style="text-align: center; width: " colspan="11"><?php echo $exectnTime; ?> sec. </td></tr> 
					  
					  <tr  style=" width: ;">
  <td  style="font-family: Arial, 'Century Gothic'; background-color: #; color:#0e375d; text-align: left;" width="200px">Digest Comparision time</td>
  <td style="text-align: center; width: " colspan="11"><?php echo $digestGenerationTime; ?> sec. </td></tr> 
					  

		<tr align="right"><td  align="center"></td><td align="right" style="text-align: right;"><input type="submit" align="middle" value="Back"  onClick="location.href = 'evaluate_smallest_fragment_correlation.php';"></td></tr>
  
                         
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
