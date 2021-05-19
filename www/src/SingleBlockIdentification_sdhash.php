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
						$folderPath = $dir;
						$file = glob($folderPath . '*');
						$countFile = 0;
						if ($file != false)
						{
							$countFile = count($file);
						}
						print_r($countFile."-------------");
				return $countFile;
						
						
						/*
						$size = 0;
						foreach (glob(rtrim($dir, '/').'/*', GLOB_NOSORT) as $each) {
							$size += is_file($each) ? filesize($each) : folderSize($each);
					}
						return $size;
						*/
				  }
				  
				  
				  
				 /* 
				  $directory = getcwd()."/"; 
  
				// Initialize filecount variavle 
				$filecount = 0; 
				  
				$files2 = glob( $directory ."*" ); 
				  
				if( $files2 ) { 
					$filecount = count($files2); 
				} 
				  
				echo $filecount . "files "; 
				  
				*/
				  
				  
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
				  
                 
                  
				  
				  
				  				  
				  
				  
<div id="rightContent">
    	    	  
                  
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
				  $docType="";
				  $testType="";
	
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
					  	$out1='..\temp\sdhashSingleBlock1';
						$out2='..\temp\sdhashSingleBlock2';
						
						
				  if($_GET['type']=="Multi"){
					  $testType="Multiple";
					  $relatedflnum=50;
					  
					  switch ($caseValue) {
						
						  case 1:
							$exectnTime_start=time();
							echo exec('..\ExistingTools\\sdhash ..\Data\RelatedDocumetSimilarity\MultipleCommonBlock\Docx\Source1\*.docx -o '.$out1);
						    echo exec('..\ExistingTools\\sdhash ..\Data\RelatedDocumetSimilarity\MultipleCommonBlock\Docx\Source2\*.docx -o '.$out2);
							$exectnTime_end=time();
							$exectnTime=$exectnTime_end-$exectnTime_start;
							$fldr1='..\Data\RelatedDocumetSimilarity\MultipleCommonBlock\Docx\Source1';	
							$fldr2='..\Data\RelatedDocumetSimilarity\MultipleCommonBlock\Docx\Source2';
							$fldritr = new FilesystemIterator($fldr1, FilesystemIterator::SKIP_DOTS);
							$totalFile_tmp=iterator_count($fldritr)/$relatedflnum;
							$totalFile=$totalFile_tmp*25;
							$expldSign="_";
							$docType="Docx";
							break;
								
						case 2:
							$exectnTime_start=time();
							echo exec('..\ExistingTools\\sdhash ..\DataUserGenerated\RelatedDocument\MultipleCommonBlock\Results\Docx\Source1\*.docx -o '.$out1);
						    echo exec('..\ExistingTools\\sdhash ..\DataUserGenerated\RelatedDocument\MultipleCommonBlock\Results\Docx\Source2\*.docx -o '.$out2);
							$exectnTime_end=time();
							$exectnTime=$exectnTime_end-$exectnTime_start;
							$fldr1='..\DataUserGenerated\RelatedDocument\MultipleCommonBlock\Results\Docx\Source1';	
							$fldr2='..\DataUserGenerated\RelatedDocument\MultipleCommonBlock\Results\Docx\Source2';
							$fldritr = new FilesystemIterator($fldr1, FilesystemIterator::SKIP_DOTS);
							$totalFile_tmp=iterator_count($fldritr)/$relatedflnum;
							$totalFile=$totalFile_tmp*25;
							$expldSign="_";
							$docType="Docx";
							break;
						
						case 3:
							$exectnTime_start=time();
							echo exec('..\ExistingTools\\sdhash ..\Data\RelatedDocumetSimilarity\MultipleCommonBlock\Text\Source1\*.text -o '.$out1);
						    echo exec('..\ExistingTools\\sdhash ..\Data\RelatedDocumetSimilarity\MultipleCommonBlock\Text\Source2\*.text -o '.$out2);
							$exectnTime_end=time();
							$exectnTime=$exectnTime_end-$exectnTime_start;
						  	$fldr1='..\Data\RelatedDocumetSimilarity\MultipleCommonBlock\Text\Source1';	
							$fldr2='..\Data\RelatedDocumetSimilarity\MultipleCommonBlock\Text\Source2';
							$fldritr = new FilesystemIterator($fldr1, FilesystemIterator::SKIP_DOTS);
							$totalFile_tmp=iterator_count($fldritr)/$relatedflnum;
							$totalFile=$totalFile_tmp*25;  
							$expldSign="_";
							$docType="Text";
							break;
								
						case 4:
							$exectnTime_start=time();
							echo exec('..\ExistingTools\\sdhash ..\DataUserGenerated\RelatedDocument\MultipleCommonBlock\Results\Text\Source1\*.text -o '.$out1);
						    echo exec('..\ExistingTools\\sdhash ..\DataUserGenerated\RelatedDocument\MultipleCommonBlock\Results\Text\Source2\*.text -o '.$out2);
							$exectnTime_end=time();
							$exectnTime=$exectnTime_end-$exectnTime_start;  
						  	$fldr1='..\DataUserGenerated\RelatedDocument\MultipleCommonBlock\Results\Text\Source1';	
							$fldr2='..\DataUserGenerated\RelatedDocument\MultipleCommonBlock\Results\Text\Source2';
							$fldritr = new FilesystemIterator($fldr1, FilesystemIterator::SKIP_DOTS);
							$totalFile_tmp=iterator_count($fldritr)/$relatedflnum;
							$totalFile=$totalFile_tmp*25;
							$expldSign="_";
							$docType="Text";
							break;	
							////////////////////////////////////////
							
							
							
						
								
						default :
							$exectnTime_start=time();  
							echo exec('ssdeep -r ..\Data\RelatedDocumetSimilarity\Multi_Document1 >ssdeepSingleBlock1.text');
							echo exec('ssdeep -r ..\Data\RelatedDocumetSimilarity\Multi_Document2 >ssdeepSingleBlock2.text');
							$exectnTime_end=time();
							$exectnTime=$exectnTime_end-$exectnTime_start;  
						  	$fldr1='..\Data\RelatedDocumetSimilarity\Multi_Document1';	
							$fldr2='..\Data\RelatedDocumetSimilarity\Multi_Document2';
							$fldritr = new FilesystemIterator($fldr1, FilesystemIterator::SKIP_DOTS);
							$totalFile=iterator_count($fldritr)/$relatedflnum;
							$expldSign="_";
							$docType="Text";
								
						}
					  
					  
				  }else{
					  
					$testType="Single";
					$relatedflnum=10;
					
					switch ($caseValue) {
						
						case 1:
							
							$exectnTime_start=time();
							echo exec('..\ExistingTools\\sdhash ..\Data\RelatedDocumetSimilarity\SingleCommonBlock\Docx\Source1\*.docx -o '.$out1);
						    echo exec('..\ExistingTools\\sdhash ..\Data\RelatedDocumetSimilarity\SingleCommonBlock\Docx\Source2\*.docx -o '.$out2);	
							$exectnTime_end=time();
							$exectnTime=$exectnTime_end-$exectnTime_start;
							$fldr1='..\Data\RelatedDocumetSimilarity\SingleCommonBlock\Docx\Source1';	
							$fldr2='..\Data\RelatedDocumetSimilarity\SingleCommonBlock\Docx\Source2';
							$fldritr = new FilesystemIterator($fldr1, FilesystemIterator::SKIP_DOTS);
							$totalFile=iterator_count($fldritr)/$relatedflnum;
							$expldSign="_";
							$docType="Docx";
							break;
								
						case 2:
								
							$exectnTime_start=time();
							echo exec('..\ExistingTools\\sdhash ..\DataUserGenerated\RelatedDocument\SingleCommonBlock\Results\Docx\Source1\*.docx -o '.$out1);
						    echo exec('..\ExistingTools\\sdhash ..\DataUserGenerated\RelatedDocument\SingleCommonBlock\Results\Docx\Source2\*.docx -o '.$out2);	
							$exectnTime_end=time();
							$exectnTime=$exectnTime_end-$exectnTime_start;
							$fldr1='..\DataUserGenerated\RelatedDocument\SingleCommonBlock\Results\Docx\Source1';	
							$fldr2='..\DataUserGenerated\RelatedDocument\SingleCommonBlock\Results\Docx\Source2';
							$fldritr = new FilesystemIterator($fldr1, FilesystemIterator::SKIP_DOTS);
							$totalFile=iterator_count($fldritr)/$relatedflnum;
							$expldSign="_";
							$docType="Docx";
							break;
						
						case 3:
							
							$exectnTime_start=time();
							echo exec('..\ExistingTools\\sdhash ..\Data\RelatedDocumetSimilarity\SingleCommonBlock\Text\Source1\*.text -o '.$out1);
							echo exec('..\ExistingTools\\sdhash ..\Data\RelatedDocumetSimilarity\SingleCommonBlock\Text\Source2\*.text -o '.$out2);
							$exectnTime_end=time();
							$exectnTime=$exectnTime_end-$exectnTime_start;
						  	$fldr1='..\Data\RelatedDocumetSimilarity\SingleCommonBlock\Text\Source1';	
							$fldr2='..\Data\RelatedDocumetSimilarity\SingleCommonBlock\Text\Source2';
							$fldritr = new FilesystemIterator($fldr1, FilesystemIterator::SKIP_DOTS);
							$totalFile=iterator_count($fldritr)/$relatedflnum;
							$expldSign="_";
							$docType="Text";
							break;
								
						case 4:
							
							$exectnTime_start=time();
							echo exec('..\ExistingTools\\sdhash ..\DataUserGenerated\RelatedDocument\SingleCommonBlock\Results\Text\Source1\*.text -o '.$out1);
						    echo exec('..\ExistingTools\\sdhash ..\DataUserGenerated\RelatedDocument\SingleCommonBlock\Results\Text\Source2\*.text -o '.$out2);
							$exectnTime_end=time();
							$exectnTime=$exectnTime_end-$exectnTime_start;
						  	$fldr1='..\DataUserGenerated\RelatedDocument\SingleCommonBlock\Results\Text\Source1';	
							$fldr2='..\DataUserGenerated\RelatedDocument\SingleCommonBlock\Results\Text\Source2';
							//$dataSize=folderSize($fldr1)+folderSize($fldr1);
							$expldSign="_";
							//echo folderSize($fldr1)."**************************";
							$fldritr = new FilesystemIterator($fldr1, FilesystemIterator::SKIP_DOTS);
							//$numOfFrgmntFl=iterator_count($fldritr);
							//echo $numOfFrgmntFl."$$$$$$$$$$$$";
							$totalFile=iterator_count($fldritr)/$relatedflnum;
							$docType="Text";
							break;	
							
						
								
						default :
							$exectnTime_start=time();
							echo exec('ssdeep -r ..\Data\RelatedDocumetSimilarity\Document1 >ssdeepSingleBlock1.text');
							echo exec('ssdeep -r ..\Data\RelatedDocumetSimilarity\Document2 >ssdeepSingleBlock2.text');
							$exectnTime_end=time();
							$exectnTime=$exectnTime_end-$exectnTime_start;
						  	$fldr1='..\Data\RelatedDocumetSimilarity\Document1';	
							$fldr2='..\Data\RelatedDocumetSimilarity\Document2';
							$dataSize=folderSize($fldr1)+folderSize($fldr1);
							$totalFile=16;
							$docType="Text";
							$expldSign="_";		
						}  
				  }
				  
						  //echo exec('ssdeep -r Data\Docx');
						  //echo exec('sdhash Data\RelatedDocumetSimilarity\Document1\*.text -o '.$out1);
						  //echo exec('sdhash Data\RelatedDocumetSimilarity\Document2\*.text -o '.$out2);
						  $digestGenerationTime_start=time();
						  $rslt= exec('..\ExistingTools\\sdhash -c '.$out1.'.sdbf '.$out2.'.sdbf | sort > ..\temp\sdhashSingleBlock.text');
						  $digestGenerationTime_end=time();
				          $digestGenerationTime=$digestGenerationTime_end-$digestGenerationTime_start;
	
						  $rslt = file_get_contents('..\temp\sdhashSingleBlock.text', true);
						  $sn=0;
						  $tp=0;
						  $tn=0;
						  $fp=0;
						  $fn=0;
						  $sn=0;
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
						  
						  
						  $rw="";
							//$t=(int)$_GET['threshold'];
							$t=(int)$_GET['threshold'];
							
								
					  		if($rslt==""){
								
							}else{
					  
						  $arr = explode("\n", $rslt);
						  
						  //echo count($arr);
						  
						  foreach ($arr as &$value) {
						   $sn++; 
						  if($value!=null){  
						  
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
						  
						  
						  
						  $rw=$rw.$embddFll.";".$imgFll.";".round($similarity,2).";";
						  $embdFl_arr = explode("_", $embddFll);
						  $imgFl_arr = explode("_", $imgFll);
								//echo "____________________________________________".$rw;
								//$ln=count($embdFl_arr);
								//$lnn=count($imgFl_arr);
								$embddFl=$embdFl_arr[0];
								$imgFl=$imgFl_arr[0];	
								$document1=$embdFl_arr[1];
								$document2=$imgFl_arr[1];
								$per1=explode(".",$embdFl_arr[2]);
								$per2=explode(".",$imgFl_arr[2]);
								$percent_document1= $per1[0];
								$percent_document2=$per2[0];
								
								
							//echo $embddFl."---".$imgFl."----".$document1."---".$document2."----".$percent_document1."---".$percent_document2."----".round($similarity,2)."-------".$percent_document1."---------------------";
								
								if(strcmp($embddFl,$imgFl)==0){
									if(strcmp($percent_document1,$percent_document2)==0){
										
										$prcnt=$percent_document1;
										
										
										switch ($prcnt) {
										case "50":
											$scb_score50=(int)$scb_score50+(int)$similarity;
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
						 
			
   // $dir = opendir('uploads/'); # This is the directory it will count from
   /*
   $numOfFrgmntFl=0;
   $numOfTxtFl=0;
   $fi1 = new FilesystemIterator($fldr1, FilesystemIterator::SKIP_DOTS);
   $numOfFrgmntFl=iterator_count($fi1);
   $fi2 = new FilesystemIterator($fldr2, FilesystemIterator::SKIP_DOTS);
   $numOfTxtFl=iterator_count($fi2);
   $numOfComprsn=$numOfFrgmntFl*$numOfTxtFl;
		  */


?>
              
           <div id="breadcrumb">Related Document Detection ➤ <a href="evaluateRelatedDocument.php">Test Cases</a> ➤ <?php if($testType=="Single"){ ?> <a href="evaluate_related_document_identification.php"> <?php echo $testType; ?> Common Block Identification</a><?php }else{ ?><a href="evaluate_related_document_identification_multiBlock.php"> <?php echo $testType; ?> Common Block Identification</a> <?php } ?> ➤</div><div id="breadcrumb"> Tool : sdhash &nbsp;&nbsp; File type : <?php echo $docType; ?></div> 
            <!--<div id="breadcrumb" style="text-align: right;height: 2px;"><a href="FragmentTextResultsPdf.php?scheme=sdhash" target="_blank" style="text-decoration:none;color: black;">Download PDF</a></div> -->   
              
           <table id="table<?php echo $tblid; ?>" style="width: 100%; height: 100%;">
					  
					  <tr  style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center; width: ;">
					    <td style="text-align: center; width: ;">Block Size</td><td style="text-align: center;width: ">50%</td><td style="text-align: center;width: ">40%</td><td style="text-align: center;width: ">30%</td><td style="text-align: center;width: ">20%</td><td style="text-align: center;width: ">10%</td><td style="text-align: center;width: ">5%</td><td style="text-align: center;width: ">4%</td><td style="text-align: center;width: ">3%</td><td style="text-align: center;width: ">2%</td><td style="text-align: center;width: ">1%</td></tr>
                      
                      <?php
				  
				  //echo "numOfTxtFl: ".$numOfTxtFl."--------";
				  //$numOfTxtFl=16;
			   	  //$numOfTxtFl=16;
			   	  $numOfTxtFl=$totalFile;
				  //echo $totalFile."------";
			   
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
                      
                      <?php $scoreSdhashText_SingleCommon=$Final_scb_score50."-".$Final_scb_score40."-".$Final_scb_score30."-".$Final_scb_score20."-".$Final_scb_score10."-".$Final_scb_score5."-".$Final_scb_score4."-".$Final_scb_score3."-".$Final_scb_score2."-".$Final_scb_score1; ?>
                                            
 <?php
				  //$numOfTxtFl=16;
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
					  $matchSdhashText_SingleCommon=$Final_scb_match50."-".$Final_scb_match40."-".$Final_scb_match30."-".$Final_scb_match20."-".$Final_scb_match10."-".$Final_scb_match5."-".$Final_scb_match4."-".$Final_scb_match3."-".$Final_scb_match2."-".$Final_scb_match1; 
					  ?>                    
                    
                      
<tr  style=" width: 1000px;">
  <td  style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center; width: ;">Match(%)</td>
  <td style="text-align: center; width: "><?php echo $Final_scb_match50; ?></td><td style="text-align: center; width: "><?php echo $Final_scb_match40; ?></td><td style="text-align: center;width: "><?php echo $Final_scb_match30; ?></td><td style="text-align: center;width: "><?php echo $Final_scb_match20; ?></td><td style="text-align: center;width: "><?php echo $Final_scb_match10; ?></td><td style="text-align: center;width: "><?php echo $Final_scb_match5; ?></td><td style="text-align: center;width: "><?php echo $Final_scb_match4; ?></td><td style="text-align: center;width: "><?php echo $Final_scb_match3; ?></td><td style="text-align: center;width: "><?php echo $Final_scb_match2; ?></td><td style="text-align: center;width: "><?php echo $Final_scb_match1; ?></td></tr>                      
</table>

	
<div id="breadcrumb">Performance Analysis (sdhash, <?php echo $docType; ?>, <?php echo $testType; ?> common)</div> 		  
			
				  
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
