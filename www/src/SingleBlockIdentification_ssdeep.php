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
    	   	  
             

			  <form id="frm" method="get" action="javascript:redirect();">
		
				  <?php 
				  
				
				  function folderSize ($dir)
					{
						$size = 0;
						foreach (glob(rtrim($dir, '/').'/*', GLOB_NOSORT) as $each) {
							$size += is_file($each) ? filesize($each) : folderSize($each);
					}
						return $size;
				  }
				  
				  $tblid=1; 
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
				  
                 
                  
				  
				  
				  				  
				  
				  
				
					  
						 
             

<!--<div id="breadcrumb">Related Document Identification (ssdeep, TEXT, Single common)</div> -->
			  <!--<div id="breadcrumb" style="text-align: left;height: 2px;" class=""><a href="evaluate_smallest_fragment_correlation.php" style="text-decoration:none;color: black;">Smallest Fragment Correlation (ssdeep)</a></div> -->
             
			  <form id="frm" method="get" action="javascript:redirect();">
				 <?php $tblid=1; ?>
				  
				   				  
				  <?php
				  //file to store results to generate pdf
				  
				  	$tmp_Pdf_file = '../temp/Tmp_Results_Pdf1.txt';
					$tmp_handle = fopen($tmp_Pdf_file, 'wb') or die('Cannot open file:  '.$tmp_Pdf_file);
					
				  
				  ?>
				  
                  <?php 
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
				  
				  
				  
				  
				  $scb_score50=0;
				  $scb_score40=0;
				  $scb_score30=0;
				  $scb_score20=0;
				  $scb_score10=0;
				  $scb_score5=0;
				  $scb_score4=0;
				  $scb_score3=0;
				  $scb_score2=0;
				  $scb_score1=0;
						  
				  $Final_scb_score50=0;
				  $Final_scb_score40=0;
				  $Final_scb_score30=0;
				  $Final_scb_score20=0;
				  $Final_scb_score10=0;
				  $Final_scb_score5=0;
				  $Final_scb_score4=0;
				  $Final_scb_score3=0;
				  $Final_scb_score2=0;
				  $Final_scb_score1=0;
						  
						  
						  
				  $scb_match50=0;
				  $scb_match40=0;
				  $scb_match30=0;
				  $scb_match20=0;
				  $scb_match10=0;
				  $scb_match5=0;
				  $scb_match4=0;
				  $scb_match3=0;
				  $scb_match2=0;
				  $scb_match1=0;
						  
						  
						  
				  $Final_scb_match50=0;
				  $Final_scb_match40=0;
				  $Final_scb_match30=0;
				  $Final_scb_match20=0;
				  $Final_scb_match10=0;
				  $Final_scb_match5=0;
				  $Final_scb_match4=0;
				  $Final_scb_match3=0;
				  $Final_scb_match2=0;
				  $Final_scb_match1=0;
				  
				  $exectnTime_start=0;
				  $exectnTime_end=0;
				  $exectnTime=0;
				  $digestGenerationTime_start=0;
				  $digestGenerationTime_end=0;
				  $digestGenerationTime=0;
				  
				  $dataSize=0;
				  
				  ?>
                  
				  
				  <?php
						 
					  
					  	$caseValue=(int)$_GET['case'];
					    $FlIndx1=18;
						$FlIndx2=9;
					  	$expldSign="__";
				  		$fldr1='';	
						$fldr2='';
						$out1='..\temp\ssdeepSingleBlock1.text';
						$out2='..\temp\ssdeepSingleBlock2.text';
					  	
				  
				  if($_GET['type']=="Multi"){
					  $testType="Multiple";
					  $relatedflnum=50;
					  switch ($caseValue) {
						
						///*
						
						case 1:
							$exectnTime_start=time();
							echo exec('..\ExistingTools\\ssdeep -r ..\Data\RelatedDocumetSimilarity\MultipleCommonBlock\Docx\Source1 > '.$out1);
							echo exec('..\ExistingTools\\ssdeep -r ..\Data\RelatedDocumetSimilarity\MultipleCommonBlock\Docx\Source2 > '.$out2);
							$exectnTime_end=time();
							//echo($exectnTime_end); 
							$exectnTime=$exectnTime_end-$exectnTime_start;
							$fldr1='..\Data\RelatedDocumetSimilarity\MultipleCommonBlock\Docx\Source1';	
							$fldr2='..\Data\RelatedDocumetSimilarity\MultipleCommonBlock\Docx\Source2';
							$fldritr = new FilesystemIterator($fldr1, FilesystemIterator::SKIP_DOTS);
							$totalFile_tmp=iterator_count($fldritr)/$relatedflnum;
							$dataSize=folderSize($fldr1)+folderSize($fldr1);
							$totalFile=$totalFile_tmp*25;
							$expldSign="_";
							$docType="Docx";
							break;
								
						case 2:
							$exectnTime_start=time();
							//echo($exectnTime_start);	
							
							echo exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\RelatedDocument\MultipleCommonBlock\Results\Docx\Source1 > '.$out1);
							echo exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\RelatedDocument\MultipleCommonBlock\Results\Docx\Source2 > '.$out2);
							$exectnTime_end=time();
							//echo($exectnTime_end);
							$exectnTime=$exectnTime_end-$exectnTime_start;
							$fldr1='..\DataUserGenerated\RelatedDocument\MultipleCommonBlock\Results\Docx\Source1';	
							$fldr2='..\DataUserGenerated\RelatedDocument\MultipleCommonBlock\Results\Docx\Source2';
							$fldritr = new FilesystemIterator($fldr1, FilesystemIterator::SKIP_DOTS);
							$totalFile_tmp=iterator_count($fldritr)/$relatedflnum;
							$dataSize=folderSize($fldr1)+folderSize($fldr1);
							$totalFile=$totalFile_tmp*25;
							$expldSign="_";
							$docType="Docx";
							break;
						
						case 3:
							$exectnTime_start=time();
							echo exec('..\ExistingTools\\ssdeep -r ..\Data\RelatedDocumetSimilarity\MultipleCommonBlock\Text\Source1 > '.$out1);
							echo exec('..\ExistingTools\\ssdeep -r ..\Data\RelatedDocumetSimilarity\MultipleCommonBlock\Text\Source2 > '.$out2);
						  	$exectnTime_end=time();
							//echo($exectnTime_end); 
							$exectnTime=$exectnTime_end-$exectnTime_start;
							$fldr1='..\Data\RelatedDocumetSimilarity\MultipleCommonBlock\Text\Source1';	
							$fldr2='..\Data\RelatedDocumetSimilarity\MultipleCommonBlock\Text\Source2';
							$fldritr = new FilesystemIterator($fldr1, FilesystemIterator::SKIP_DOTS);
							$totalFile_tmp=iterator_count($fldritr)/$relatedflnum;
							$dataSize=folderSize($fldr1)+folderSize($fldr1);
							$totalFile=$totalFile_tmp*25;
							$expldSign="_";
							$docType="Text";
							break;
								
						case 4:
							$exectnTime_start=time();
							//echo($exectnTime_start);
							echo exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\RelatedDocument\MultipleCommonBlock\Results\Text\Source1 > '.$out1);
							echo exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\RelatedDocument\MultipleCommonBlock\Results\Text\Source2 > '.$out2);
							$exectnTime_end=time();
							//echo($exectnTime_end); 
							$exectnTime=$exectnTime_end-$exectnTime_start;
							$fldr1='..\DataUserGenerated\RelatedDocument\MultipleCommonBlock\Results\Text\Source1';	
							$fldr2='..\DataUserGenerated\RelatedDocument\MultipleCommonBlock\Results\Text\Source2';
							$fldritr = new FilesystemIterator($fldr1, FilesystemIterator::SKIP_DOTS);
							$totalFile_tmp=iterator_count($fldritr)/$relatedflnum;
							$dataSize=folderSize($fldr1)+folderSize($fldr1);
							$totalFile=$totalFile_tmp*25;
							$expldSign="_";
							$docType="Text";
							break;	
							
						
								
						default :
							$exectnTime_start=time();
							//echo($exectnTime_start);
							echo exec('..\ExistingTools\\ssdeep -r ..\Data\RelatedDocumetSimilarity\Multi_Document1 >..\temp\ssdeepSingleBlock1.text');
							echo exec('..\ExistingTools\\ssdeep -r ..\Data\RelatedDocumetSimilarity\Multi_Document2 > '.$out2);
						  	$exectnTime_end=time();
							//echo($exectnTime_end); 
							$exectnTime=$exectnTime_end-$exectnTime_start;
							$fldr1='..\Data\RelatedDocumetSimilarity\Multi_Document1';	
							$fldr2='..\Data\RelatedDocumetSimilarity\Multi_Document2';
							$fldritr = new FilesystemIterator($fldr1, FilesystemIterator::SKIP_DOTS);
							$dataSize=folderSize($fldr1)+folderSize($fldr1);
							$totalFile_tmp=iterator_count($fldritr)/$relatedflnum;
							$totalFile=$totalFile_tmp*25;
							$expldSign="_";		
							
						}
					  
					  
				  }else{
					  
					  $testType="Single";
					  $relatedflnum=10;
					  
					  switch ($caseValue) {
						
						case 1:
							$exectnTime_start=time();		
							//echo($exectnTime_start);
							echo exec('..\ExistingTools\\ssdeep -r ..\Data\RelatedDocumetSimilarity\SingleCommonBlock\Docx\Source1 > '.$out1);
							echo exec('..\ExistingTools\\ssdeep -r ..\Data\RelatedDocumetSimilarity\SingleCommonBlock\Docx\Source2 > '.$out2);
							$exectnTime_end=time();
							//echo($exectnTime_end); 
							$exectnTime=$exectnTime_end-$exectnTime_start;
							$fldr1='..\Data\RelatedDocumetSimilarity\SingleCommonBlock\Docx\Source1';	
							$fldr2='..\Data\RelatedDocumetSimilarity\SingleCommonBlock\Docx\Source2';
							$fldritr = new FilesystemIterator($fldr1, FilesystemIterator::SKIP_DOTS);
							$dataSize=folderSize($fldr1)+folderSize($fldr1);
							$totalFile=iterator_count($fldritr)/$relatedflnum;
							$expldSign="_";
							$docType="Docx";
							break;
								
						case 2:
							$exectnTime_start=time();		
							//echo($exectnTime_start);	
							echo exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\RelatedDocument\SingleCommonBlock\Results\Docx\Source1 > '.$out1);
							echo exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\RelatedDocument\SingleCommonBlock\Results\Docx\Source2 > '.$out2);
							$exectnTime_end=time();
							//echo($exectnTime_end); 
							$exectnTime=$exectnTime_end-$exectnTime_start;
							$fldr1='..\DataUserGenerated\RelatedDocument\SingleCommonBlock\Results\Docx\Source1';	
							$fldr2='..\DataUserGenerated\RelatedDocument\SingleCommonBlock\Results\Docx\Source2';
							$fldritr = new FilesystemIterator($fldr1, FilesystemIterator::SKIP_DOTS);
							$dataSize=folderSize($fldr1)+folderSize($fldr1);
							$totalFile=iterator_count($fldritr)/$relatedflnum;
							$expldSign="_";
							$docType="Docx";
							break;
						
						case 3:
							$exectnTime_start=time();		
							echo exec('..\ExistingTools\\ssdeep -r ..\Data\RelatedDocumetSimilarity\SingleCommonBlock\Text\Source1 > '.$out1);
							echo exec('..\ExistingTools\\ssdeep -r ..\Data\RelatedDocumetSimilarity\SingleCommonBlock\Text\Source2 > '.$out2);
							$exectnTime_end=time();
							//echo($exectnTime_end); 
							$exectnTime=$exectnTime_end-$exectnTime_start;
						  	$fldr1='..\Data\RelatedDocumetSimilarity\SingleCommonBlock\Text\Source1';	
							$fldr2='..\Data\RelatedDocumetSimilarity\SingleCommonBlock\Text\Source2';
							$fldritr = new FilesystemIterator($fldr1, FilesystemIterator::SKIP_DOTS);
							$dataSize=folderSize($fldr1)+folderSize($fldr1);
							$totalFile=iterator_count($fldritr)/$relatedflnum;
							$expldSign="_";
							$docType="Text";
							break;
								
						case 4:
							$exectnTime_start=time();		
							//echo($exectnTime_start);
							echo exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\RelatedDocument\SingleCommonBlock\Results\Text\Source1 > '.$out1);
							echo exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\RelatedDocument\SingleCommonBlock\Results\Text\Source2 > '.$out2);
							$exectnTime_end=time();
							//echo($exectnTime_end); 
							$exectnTime=$exectnTime_end-$exectnTime_start;
							$fldr1='..\DataUserGenerated\RelatedDocument\SingleCommonBlock\Results\Text\Source1';	
							$fldr2='..\DataUserGenerated\RelatedDocument\SingleCommonBlock\Results\Text\Source2';
							$fldritr = new FilesystemIterator($fldr1, FilesystemIterator::SKIP_DOTS);
							$totalFile=iterator_count($fldritr)/$relatedflnum;
							$dataSize=folderSize($fldr1)+folderSize($fldr1);
							$expldSign="_";
							$docType="Text";
							break;	
							
						
								
						default :
							$exectnTime_start=time();		
							//echo($exectnTime_start);  
							echo exec('..\ExistingTools\\ssdeep -r ..\Data\RelatedDocumetSimilarity\Document1 > '.$out1);
							echo exec('..\ExistingTools\\ssdeep -r ..\Data\RelatedDocumetSimilarity\Document2 > '.$out2);
							$exectnTime_end=time();
							//echo($exectnTime_end); 
							$exectnTime=$exectnTime_end-$exectnTime_start;  
						  	$fldr1='..\Data\RelatedDocumetSimilarity\Document1';	
							$fldr2='..\Data\RelatedDocumetSimilarity\Document2';
							$dataSize=folderSize($fldr1)+folderSize($fldr1);
							$totalFile=16;
							$expldSign="_";		
								
								
								
						}
					  
				  }
				  
				  		
				  
				  
				?>
					  
						  <?php
						  //echo exec('ssdeep -r Data\Docx');
						  
						  //echo exec('ssdeep -r Data\RelatedDocumetSimilarity\Document1 >ssdeepSingleBlock1.text');
						  
						  //echo exec('ssdeep -r Data\RelatedDocumetSimilarity\Document2 >ssdeepSingleBlock2.text');
						  
				  		  
				  	      //echo("dataSize:".round(($dataSize/(1024*1024)),2)."******");
				  		
				  		  //echo("Digest generation time!".$exectnTime);
				  		  $digestGenerationTime_start=time();
				  		  //echo "digestGenerationTimeStart".$digestGenerationTime_start;
						  $rslt= exec('..\ExistingTools\\ssdeep -k '.$out1.' '.$out2.' >..\temp\ssdeepSingleBlock.text');
				  		  $digestGenerationTime_end=time();
				          //echo "digestGenerationTimeEnd".$digestGenerationTime_end."\n";
				          $digestGenerationTime=$digestGenerationTime_end-$digestGenerationTime_start;
				          //echo "Digest Comparision time:".$digestGenerationTime;
						  $rslt = file_get_contents('..\temp\ssdeepSingleBlock.text', true);
				  			$sn=0;
						
							$tp=0;
							$tn=0;
							$fp=0;
							$fn=0;
							$sn=0;
							
							//$t=(int)$_GET['threshold'];
							$t=(int)$_GET['threshold'];
					  		$rw="";
							
							
								$dir1   = $fldr1;
								$files1 = scandir($dir1);

								$dir2   = $fldr2;
								$files2 = scandir($dir2);
								
								$numOfFrgmntFl=count($files1)-2;
									
								$numOfTxtFl=count($files2)-2;
					  	
								$numOfComprsn=$numOfFrgmntFl*$numOfTxtFl;
					  	
							
					  		if($rslt==""){
								
								//echo "No files to match!!!!";
								
							}else{
					  
						  $arr = explode(")", $rslt);
						  
								$sn=0;
								
								//$tblid=0;
						  
						  foreach ($arr as &$value) {
							
							  if($value!=""){
							  $rw="";
							  $sn++;
						  
						  $arr1 = explode(" matches ", $value);
						  //echo "value: ".$value.'\n';
						  $arr1_size= count($arr1);
						  if($arr1_size>1){
						  $arr2=explode("\\",$arr1[0]);
						  $arr3=explode("\\",$arr1[1]);
						  
						  $tmp_target=$arr2[count($arr2)-1];
						  $tmp_file_img=$arr3[count($arr3)-1];
						  	 
						  $target=explode(".",$tmp_target);
						  $file_img=explode(".",$tmp_file_img);
						  $tmp_similarity=explode("(",$file_img[1]);
						  
						  $similarity=$tmp_similarity[1];  
						  
						  
						  $embdFl_arr = explode("_", $target[0]);
						  $imgFl_arr = explode("_", $file_img[0]);
						  
								$embddFl=$embdFl_arr[0];
								$imgFl=$imgFl_arr[0];	
								$document1=$embdFl_arr[1];
								$document2=$imgFl_arr[1];
								$per1=explode(".",$embdFl_arr[2]);
								$per2=explode(".",$imgFl_arr[2]);
								$percent_document1= $per1[0];
								$percent_document2=$per2[0];
								
							//echo $percent_document1."--dfjwhdfk--".$percent_document2."==== \n".PHP_EOL."";
								
								
								
								if(strcmp($embddFl,$imgFl)==0){
									if(strcmp($percent_document1,$percent_document2)==0){
										//echo $embddFl."-------".$imgFl."-------".$percent_document1.":".$percent_document2."---------".$similarity;
										$prcnt=$percent_document1;
										
										
										switch ($prcnt) {
										case "50":
											$scb_score50=$scb_score50+(int)$similarity;
											if((int)$similarity>=$t){
											$scb_match50++;
											}
																						
											break;
										case "40":
											$scb_score40=$scb_score40+(int)$similarity;
											if((int)$similarity>=$t){
											$scb_match40++;
											}
											break;
										case "30":
											$scb_score30=$scb_score30+(int)$similarity;
											if((int)$similarity>=$t){
											$scb_match30++;
											}
											break;
										case "20":
											$scb_score20=$scb_score20+(int)$similarity;
											if((int)$similarity>=$t){
											$scb_match20++;
											}
											break;
										case "10":
											$scb_score10=$scb_score10+(int)$similarity;
											if((int)$similarity>=$t){
											$scb_match10++;
											}
											break;
										case "5":
											$scb_score5=$scb_score5+(int)$similarity;
											if((int)$similarity>=$t){
											$scb_match5++;
											}
											break;
										case "4":
											$scb_score4=$scb_score4+(int)$similarity;
											if((int)$similarity>=$t){
											$scb_match4++;
											}
											break;
										case "3":
											$scb_score3=$scb_score3+(int)$similarity;
											if((int)$similarity>=$t){
											$scb_match3++;
											}
											break;
										case "2":
											$scb_score2=$scb_score2+(int)$similarity;
											if((int)$similarity>=$t){
											$scb_match2++;
											}
											break;
										case "1":
											$scb_score1=$scb_score1+(int)$similarity;
											if((int)$similarity>=$t){
											$scb_match1++;
											}
											break;
										
										
									}

										
										
										
										
									}
								}
							
							 }
								 
						  }
						  }
							  
					  }
						  
			  ?>
						  
						
					  
				  
			  </form>
			  
			  
    <?php 
   // $dir = opendir('uploads/'); # This is the directory it will count from
   /*
   $numOfFrgmntFl=0;
   $numOfTxtFl=0;
   $fi1 = new FilesystemIterator($fldr1, FilesystemIterator::SKIP_DOTS);
	$numOfFrgmntFl=iterator_count($fi1);
	$fi2 = new FilesystemIterator($fldr2, FilesystemIterator::SKIP_DOTS);
	$numOfTxtFl=iterator_count($fi2);
	$numOfComprsn=$numOfFrgmntFl*$numOfTxtFl;
	$numOfRanTextFile=$numOfTxtFl;
	$numOfRanTextFrag=$numOfFrgmntFl;
	*/
?><a href="evaluate_related_document_identification.php"> </a>
			  
           <div id="breadcrumb">Related Document Detection ➤ <a href="evaluateRelatedDocument.php">Test Cases</a> ➤ <?php if($testType=="Single"){ ?> <a href="evaluate_related_document_identification.php"> <?php echo $testType; ?> Common Block Identification</a><?php }else{ ?><a href="evaluate_related_document_identification_multiBlock.php"> <?php echo $testType; ?> Common Block Identification</a> <?php } ?> ➤ </div><div id="breadcrumb">Tool : ssdeep &nbsp;&nbsp; File type : <?php echo $docType; ?></div>   
               
           <table id="table<?php echo $tblid; ?>" style="width: 100%; height: 100%;">
					  
					  <tr  style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center; width: ;"><td style="text-align: center; width: ;">Block Size</td><td style="text-align: center;width: ">50%</td><td style="text-align: center;width: ">40%</td><td style="text-align: center;width: ">30%</td><td style="text-align: center;width: ">20%</td><td style="text-align: center;width: ">10%</td><td style="text-align: center;width: ">5%</td><td style="text-align: center;width: ">4%</td><td style="text-align: center;width: ">3%</td><td style="text-align: center;width: ">2%</td><td style="text-align: center;width: ">1%</td></tr>
                      
                      <?php
				  
				  //echo "numOfTxtFl: ".$numOfTxtFl."--------";
				  //$numOfTxtFl=16;
			   	  $numOfTxtFl=$totalFile;
			      
				  $Final_scb_score50=round($scb_score50/$numOfTxtFl,2);
				  $Final_scb_score40=round($scb_score40/$numOfTxtFl,2);
				  $Final_scb_score30=round($scb_score30/$numOfTxtFl,2);
				  $Final_scb_score20=round($scb_score20/$numOfTxtFl,2);
				  $Final_scb_score10=round($scb_score10/$numOfTxtFl,2);
				  $Final_scb_score5=round($scb_score5/$numOfTxtFl,2);
				  $Final_scb_score4=round($scb_score4/$numOfTxtFl,2);
				  $Final_scb_score3=round($scb_score3/$numOfTxtFl,2);
				  $Final_scb_score2=round($scb_score2/$numOfTxtFl,2);
				  $Final_scb_score1=round($scb_score1/$numOfTxtFl,2);
				 
				  
				  ?>
				  
                      <tr  style=" width: 1000px;"><td  style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center; width: ;">Average  Score</td><td style="text-align: center; width: "><?php echo $Final_scb_score50; ?></td><td style="text-align: center; width: "><?php echo $Final_scb_score40; ?></td><td style="text-align: center; width: "><?php echo $Final_scb_score30; ?></td><td style="text-align: center; width: "><?php echo $Final_scb_score20; ?></td><td style="text-align: center; width: "><?php echo $Final_scb_score10; ?></td><td style="text-align: center; width: "><?php echo $Final_scb_score5; ?></td><td style="text-align: center; width: "><?php echo $Final_scb_score4; ?></td><td style="text-align: center; width: "><?php echo $Final_scb_score3; ?></td><td style="text-align: center; width: "><?php echo $Final_scb_score2; ?></td><td style="text-align: center; width: "><?php echo $Final_scb_score1; ?></td></tr>
                      
                      <?php $scoreSsdeepText_SingleCommon=$Final_scb_score50."-".$Final_scb_score40."-".$Final_scb_score30."-".$Final_scb_score20."-".$Final_scb_score10."-".$Final_scb_score5."-".$Final_scb_score4."-".$Final_scb_score3."-".$Final_scb_score2."-".$Final_scb_score1; ?>
                      
                      
                      
				 <?php
				  //$numOfTxtFl=16;
			   	  $numOfTxtFl=$totalFile;
				  //echo $numOfTxtFl;
				  //echo $scb_match20;
				  $Final_scb_match50=round((($scb_match50*100)/$numOfTxtFl),2);
				  $Final_scb_match40=round((($scb_match40*100)/$numOfTxtFl),2);
				  $Final_scb_match30=round((($scb_match30*100)/$numOfTxtFl),2);
				  $Final_scb_match20=round((($scb_match20*100)/$numOfTxtFl),2);
				  $Final_scb_match10=round((($scb_match10*100)/$numOfTxtFl),2);
				  $Final_scb_match5=round((($scb_match5*100)/$numOfTxtFl),2);
				  $Final_scb_match4=round((($scb_match4*100)/$numOfTxtFl),2);
				  $Final_scb_match3=round((($scb_match3*100)/$numOfTxtFl),2);
				  $Final_scb_match2=round((($scb_match2*100)/$numOfTxtFl),2);
				  $Final_scb_match1=round((($scb_match1*100)/$numOfTxtFl),2);
				  
				  ?>
                    
                    
<?php 
					  $matchSsdeepText_SingleCommon=$Final_scb_match50."-".$Final_scb_match40."-".$Final_scb_match30."-".$Final_scb_match20."-".$Final_scb_match10."-".$Final_scb_match5."-".$Final_scb_match4."-".$Final_scb_match3."-".$Final_scb_match2."-".$Final_scb_match1; 
					  ?>                    
                    
                      
<tr  style=" width: 1000px;">
  <td  style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center; width: ;">Match(%)</td>
  <td style="text-align: center; width: "><?php echo $Final_scb_match50; ?></td><td style="text-align: center; width: "><?php echo $Final_scb_match40; ?></td><td style="text-align: center;width: "><?php echo $Final_scb_match30; ?></td><td style="text-align: center;width: "><?php echo $Final_scb_match20; ?></td><td style="text-align: center;width: "><?php echo $Final_scb_match10; ?></td><td style="text-align: center;width: "><?php echo $Final_scb_match5; ?></td><td style="text-align: center;width: "><?php echo $Final_scb_match4; ?></td><td style="text-align: center;width: "><?php echo $Final_scb_match3; ?></td><td style="text-align: center;width: "><?php echo $Final_scb_match2; ?></td><td style="text-align: center;width: "><?php echo $Final_scb_match1; ?></td></tr>                      


  
                         
              </table>
				  
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
					  

		<tr align="right"><td  align="center"></td><td align="right" style="text-align: right;"><input type="submit" align="middle" value="Back"  onClick="location.href = 'evaluate_related_document_identification.php';"></td></tr>
  
                         
              </table>
						
				  
				  
				  
				  
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
