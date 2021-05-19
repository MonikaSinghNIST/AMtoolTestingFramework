<!doctype html>
<head>

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
		
	//document.getElementById("table"+nr).style.display="none";
    //document.getElementById("table1").style.display="none";
    //document.getElementById("table2").style.display="none";
    //document.getElementById("table3").style.display="none";
    //document.getElementById("table4").style.display="none";
    //document.getElementById("table"+nr).style.display="block";
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
            <div id="breadcrumb">Tool: <span style="color:#333"><?php echo $_GET['tool']; ?></span> &nbsp;&nbsp; File type : <?php if(($_GET['case']==5)||($_GET['case']==6)||($_GET['case']==7)||($_GET['case']==8)||($_GET['case']==13)||($_GET['case']==14)||($_GET['case']==15)||($_GET['case']==16)){ ?><span style="color:#333">Docx</span> <?php }else{ ?><span style="color:#333">PPTX</span><?php } ?> &nbsp;&nbsp; Embedded object type :&nbsp;&nbsp; <?php if(($_GET['case']==1)||($_GET['case']==9) || ($_GET['case']==5)||($_GET['case']==13)){ ?><span style="color:#333">JPEG</span><?php }else if(($_GET['case']==2)||($_GET['case']==10)||($_GET['case']==6)||($_GET['case']==14)){ ?><span style="color:#333">BMP</span><?php }else if(($_GET['case']==3)||($_GET['case']==11)||($_GET['case']==7)||($_GET['case']==15)){ ?><span style="color:#333">TIFF</span><?php }else if(($_GET['case']==4)||($_GET['case']==12)||($_GET['case']==8)||($_GET['case']==16)){ ?><span style="color:#333">GIF</span><?php } ?> </div> 
			  <!--<div id="breadcrumb" style="text-align: right;height: 2px;"><a href="EmbeddedObjectDetection_PDF.php?scheme=sdhash" target="_blank" style="text-decoration:none;color: black;">Download PDF</a></div> --> 
			  <form id="frm" method="get" action="javascript:redirect();">
				   <?php $tblid=1; ?>
				  
				   				  
				  <?php
				  //file to store results to generate pdf
				  
				  	$tmp_Pdf_file = 'Tmp_Results_Pdf1.txt';
					$tmp_handle = fopen($tmp_Pdf_file, 'wb') or die('Cannot open file:  '.$tmp_Pdf_file);
					
				  
				  ?>
				  
				  
				  <table id="table<?php echo $tblid; ?>" style="display: ;width: 100%;">
                  <tr  style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center; width: 1000px;"><td style="text-align: center; width: 15%;">S.No.</td><td style="text-align: center; width: 35%">Target File</td><td style="text-align: center; width: 30%">Images</td><td style="text-align: center;width: 20%">Similarity<br/> (Calculated by the scheme)</td></tr>
					  
						  <?php
						  
					  	$caseValue=(int)$_GET['case'];
						
						$tool=$_GET['tool'];
					    $FlIndx1=18;
						$FlIndx2=9;
						$out1='..\temp\\'.$tool.'_embeddedObjectSingleObject1.text';
						$out2='..\temp\\'.$tool.'_embeddedObjectSingleObject2.text';
						$resultFile='..\temp\\'.$tool.'_embeddedObjectSingleObject.text';
					  	
					  	switch ($caseValue) {
						
						case 1:
							echo exec('..\Tools\\' .$tool. ' -d  ..\DataUserGenerated\EmbeddedObjects\PPTX\JPEG\Embedded_Files -o '.$out1);
						    //echo exec('..\Tools\\' .$tool. ' -d  ..\DataUserGenerated\EmbeddedObjects\PPTX\JPEG\Embedded_Objects -o '.$out2);
							$fldr1='..\DataUserGenerated\EmbeddedObjects\PPTX\JPEG\Embedded_Files';	
							$fldr2=$fldr1;
							$msg="No dat-set is generated! Generate the data-set first.";	
							break;
						
						case 2:
							echo exec('..\Tools\\' .$tool. ' -d  ..\DataUserGenerated\EmbeddedObjects\PPTX\BMP\Embedded_Files -o '.$out1);
						    //echo exec('..\Tools\\' .$tool. ' -d  ..\DataUserGenerated\EmbeddedObjects\PPTX\BMP\Embedded_Objects -o '.$out2);
							$fldr1='..\DataUserGenerated\EmbeddedObjects\PPTX\BMP\Embedded_Files';	
							$fldr2=$fldr1;
							$msg="No dat-set is generated! Generate the data-set first.";	
							break;
								
						case 3:
							echo exec('..\Tools\\' .$tool. ' -d  ..\DataUserGenerated\EmbeddedObjects\PPTX\TIFF\Embedded_Files -o '.$out1);
						    //echo exec('..\Tools\\' .$tool. ' -d  ..\DataUserGenerated\EmbeddedObjects\PPTX\TIFF\Embedded_Objects -o '.$out2);
							$fldr1='..\DataUserGenerated\EmbeddedObjects\PPTX\TIFF\Embedded_Files';	
							$fldr2=$fldr1;
							$msg="No dat-set is generated! Generate the data-set first.";	
							break;
						
						case 4:
							echo exec('..\Tools\\' .$tool. ' -d  ..\DataUserGenerated\EmbeddedObjects\PPTX\GIF\Embedded_Files -o '.$out1);
						    //echo exec('..\Tools\\' .$tool. ' -d  ..\DataUserGenerated\EmbeddedObjects\PPTX\GIF\Embedded_Objects -o '.$out2);
							$fldr1='..\DataUserGenerated\EmbeddedObjects\PPTX\GIF\Embedded_Files';	
							$fldr2=$fldr1;
							$msg="No dat-set is generated! Generate the data-set first.";	
							break;		



						case 5:
							echo exec('..\Tools\\' .$tool. ' -d  ..\DataUserGenerated\EmbeddedObjects\Docx\JPEG\Embedded_Files -o '.$out1);
						    //echo exec('..\Tools\\' .$tool. ' -d  ..\DataUserGenerated\EmbeddedObjects\Docx\JPEG\Embedded_Objects -o '.$out2);
							$fldr1='..\DataUserGenerated\EmbeddedObjects\Docx\JPEG\Embedded_Files';	
							$fldr2=$fldr1;
							$msg="No dat-set is generated! Generate the data-set first.";	
							break;
						
						case 6:
							echo exec('..\Tools\\' .$tool. ' -d  ..\DataUserGenerated\EmbeddedObjects\Docx\BMP\Embedded_Files -o '.$out1);
						    //echo exec('..\Tools\\' .$tool. ' -d  ..\DataUserGenerated\EmbeddedObjects\Docx\BMP\Embedded_Objects -o '.$out2);
							$fldr1='..\DataUserGenerated\EmbeddedObjects\Docx\BMP\Embedded_Files';	
							$fldr2=$fldr1;
							$msg="No dat-set is generated! Generate the data-set first.";	
							break;
								
						case 7:
							echo exec('..\Tools\\' .$tool. ' -d  ..\DataUserGenerated\EmbeddedObjects\Docx\TIFF\Embedded_Files -o '.$out1);
						    //echo exec('..\Tools\\' .$tool. ' -d  ..\DataUserGenerated\EmbeddedObjects\Docx\TIFF\Embedded_Objects -o '.$out2);
							$fldr1='..\DataUserGenerated\EmbeddedObjects\Docx\TIFF\Embedded_Files';	
							$fldr2=$fldr1;
							$msg="No dat-set is generated! Generate the data-set first.";	
							break;
						
						case 8:
							echo exec('..\Tools\\' .$tool. ' -d  ..\DataUserGenerated\EmbeddedObjects\Docx\GIF\Embedded_Files -o '.$out1);
						    //echo exec('..\Tools\\' .$tool. ' -d  ..\DataUserGenerated\EmbeddedObjects\Docx\GIF\Embedded_Objects -o '.$out2);
							$fldr1='..\DataUserGenerated\EmbeddedObjects\Docx\GIF\Embedded_Files';	
							$fldr2=$fldr1;
							$msg="No dat-set is generated! Generate the data-set first.";	
							break;	
								
						
								
								
						case 9:
							echo exec('..\Tools\\' .$tool. ' -d  ..\Data\EmbeddedObjects\PPTX\JPEG\Embedded_Files -o '.$out1);
						    //echo exec('..\Tools\\' .$tool. ' -d  ..\Data\EmbeddedObjects\PPTX\JPEG\Embedded_Objects -o '.$out2);
							$fldr1='..\Data\EmbeddedObjects\PPTX\JPEG\Embedded_Files';	
							$fldr2=$fldr1;
							$msg="No dat-set is generated! Generate the data-set first.";	
							break;
						
						case 10:
							echo exec('..\Tools\\' .$tool. ' -d  ..\Data\EmbeddedObjects\PPTX\BMP\Embedded_Files -o '.$out1);
						    //echo exec('..\Tools\\' .$tool. ' -d  ..\Data\EmbeddedObjects\PPTX\BMP\Embedded_Objects -o '.$out2);
							$fldr1='..\Data\EmbeddedObjects\PPTX\BMP\Embedded_Files';	
							$fldr2=$fldr1;
							$msg="No dat-set is generated! Generate the data-set first.";	
							break;
								
						case 11:
							echo exec('..\Tools\\' .$tool. ' -d  ..\Data\EmbeddedObjects\PPTX\TIFF\Embedded_Files -o '.$out1);
						    //echo exec('..\Tools\\' .$tool. ' -d  ..\Data\EmbeddedObjects\PPTX\TIFF\Embedded_Objects -o '.$out2);
							$fldr1='..\Data\EmbeddedObjects\PPTX\TIFF\Embedded_Files';	
							$fldr2=$fldr1;
							$msg="No dat-set is generated! Generate the data-set first.";	
							break;
						
						case 12:
							echo exec('..\Tools\\' .$tool. ' -d  ..\Data\EmbeddedObjects\PPTX\GIF\Embedded_Files -o '.$out1);
						    //echo exec('..\Tools\\' .$tool. ' -d  ..\Data\EmbeddedObjects\PPTX\GIF\Embedded_Objects -o '.$out2);
							$fldr1='..\Data\EmbeddedObjects\PPTX\GIF\Embedded_Files';	
							$fldr2=$fldr1;
							$msg="No dat-set is generated! Generate the data-set first.";	
							break;	
								
								
								
						case 13:
							echo exec('..\Tools\\' .$tool. ' -d  ..\Data\EmbeddedObjects\Docx\JPEG\Embedded_Files -o '.$out1);
						    //echo exec('..\Tools\\' .$tool. ' -d  ..\Data\EmbeddedObjects\Docx\JPEG\Embedded_Objects -o '.$out2);
							$fldr1='..\Data\EmbeddedObjects\Docx\JPEG\Embedded_Files';	
							$fldr2=$fldr1;
							$msg="No dat-set is generated! Generate the data-set first.";	
							break;
						
						case 14:
							echo exec('..\Tools\\' .$tool. ' -d  ..\Data\EmbeddedObjects\Docx\BMP\Embedded_Files -o '.$out1);
						    //echo exec('..\Tools\\' .$tool. ' -d  ..\Data\EmbeddedObjects\Docx\BMP\Embedded_Objects -o '.$out2);
							$fldr1='..\Data\EmbeddedObjects\Docx\BMP\Embedded_Files';	
							$fldr2=$fldr1;
							$msg="No dat-set is generated! Generate the data-set first.";	
							break;
								
						case 15:
							echo exec('..\Tools\\' .$tool. ' -d  ..\Data\EmbeddedObjects\Docx\TIFF\Embedded_Files -o '.$out1);
						    //echo exec('..\Tools\\' .$tool. ' -d  ..\Data\EmbeddedObjects\Docx\TIFF\Embedded_Objects -o '.$out2);
							$fldr1='..\Data\EmbeddedObjects\Docx\TIFF\Embedded_Files';	
							$fldr2=$fldr1;
							$msg="No dat-set is generated! Generate the data-set first.";	
							break;
						
						case 16:
							echo exec('..\Tools\\' .$tool. ' -d  ..\Data\EmbeddedObjects\Docx\GIF\Embedded_Files -o '.$out1);
						    //echo exec('..\Tools\\' .$tool. ' -d  ..\Data\EmbeddedObjects\Docx\GIF\Embedded_Objects -o '.$out2);
							$fldr1='..\Data\EmbeddedObjects\Docx\GIF\Embedded_Files';	
							$fldr2=$fldr1;
							$msg="No dat-set is generated! Generate the data-set first.";	
							break;	
								
							/*	
						case 17:
							echo exec('sdhash Data\Results\PPTX\JPEG\Results\Embedded_Files\*.pptx -o sdhash_embedded_object1');
						    echo exec('sdhash Data\Images\Jpeg -o sdhash_embedded_object2');
							$fldr1='Data\Results\PPTX\JPEG\Results\Embedded_Files';	
							$fldr2='Data\Images\Jpeg';
							$msg="No dat-set is generated! Generate the data-set first.";	
							break;
								
						case 18:
							echo exec('sdhash Data\Results\PPTX\JPEG\Results\Embedded_Files_without_Images\*.pptx -o sdhash_embedded_object1');
							echo exec('sdhash Data\Images\JPEG -o sdhash_embedded_object2');
						    $fldr1='Data\Results\PPTX\JPEG\Results\Embedded_Files_without_Images';	
							$fldr2='Data\Images\JPEG';
							$msg="No dat-set is generated! Generate the data-set first.";
							break;
		
						case 19:
							echo exec('sdhash Data\Results\PPTX\BMP\Results\Embedded_Files\*.pptx -o sdhash_embedded_object1');
						    echo exec('sdhash Data\Images\BMP -o sdhash_embedded_object2');
						    $fldr1='Data\Results\PPTX\BMP\Results\Embedded_Files';	
							$fldr2='Data\Images\BMP';
							$msg="No dat-set is generated! Generate the data-set first.";	
							break;
								
						case 20:
							echo exec('sdhash Data\Results\PPTX\BMP\Results\Embedded_Files_without_Images\*.pptx -o sdhash_embedded_object1');
						    echo exec('sdhash Data\Images\BMP -o sdhash_embedded_object2');
							$fldr1='Data\Results\PPTX\BMP\Results\Embedded_Files_without_Images';	
							$fldr2='Data\Images\BMP';
							$msg="No dat-set is generated! Generate the data-set first.";
							break;

						case 21:
							echo exec('sdhash Data\Results\PPTX\TIFF\Results\Embedded_Files\*.pptx -o sdhash_embedded_object1');
							echo exec('sdhash Data\Images\TIFF\*.tif -o sdhash_embedded_object2');
						    $fldr1='Data\Results\PPTX\TIFF\Results\Embedded_Files';	
							$fldr2='Data\Images\TIFF';
							$msg="No dat-set is generated! Generate the data-set first.";	
							break;
								
						case 22:
							echo exec('sdhash Data\Results\PPTX\TIFF\Results\Embedded_Files_without_Images\*.pptx -o sdhash_embedded_object1');
						    echo exec('sdhash Data\Images\TIFF\*.tif -o sdhash_embedded_object2');
							$fldr1='Data\Results\PPTX\TIFF\Results\Embedded_Files_without_Images';	
							$fldr2='Data\Images\TIFF';
							$msg="No dat-set is generated! Generate the data-set first.";
							break;

						case 23:
							echo exec('sdhash Data\Results\PPTX\GIF\Results\Embedded_Files\*.pptx -o sdhash_embedded_object1');
						    echo exec('sdhash Data\Images\GIF -o sdhash_embedded_object2');
							$fldr1='Data\Results\PPTX\GIF\Results\Embedded_Files';	
							$fldr2='Data\Images\GIF';
							$msg="No dat-set is generated! Generate the data-set first.";	
							break;
								
						case 24:
							echo exec('sdhash Data\Results\PPTX\GIF\Results\Embedded_Files_without_Images\*.pptx -o sdhash_embedded_object1');
						    echo exec('sdhash Data\Images\GIF -o sdhash_embedded_object2');
							$fldr1='Data\Results\PPTX\GIF\Results\Embedded_Files_without_Images';	
							$fldr2='Data\Images\GIF';
							$msg="No dat-set is generated! Generate the data-set first.";
							break;
								
						case 25:
							echo exec('sdhash Data\Results\DOCX\JPEG\Embedded_Files\*.docx -o sdhash_embedded_object1');
						    echo exec('sdhash Data\Images\Jpeg -o sdhash_embedded_object2');
							$fldr1='Data\Results\DOCX\JPEG\Embedded_Files';	
							$fldr2='Data\Images\Jpeg';
							//$docxFlIndx=17;
							//$imgIndx=8;
							break;
								
						case 26:
							echo exec('sdhash Data\Results\DOCX\JPEG\Embedded_Files_without_Images\*.docx -o sdhash_embedded_object1');
						    echo exec('sdhash Data\Images\Jpeg -o sdhash_embedded_object2');
							$fldr1='Data\Results\DOCX\JPEG\Embedded_Files_without_Images';	
							$fldr2='Data\Images\Jpeg';
							//$docxFlIndx=17;
							//$imgIndx=8;
							break;
								
						case 27:
							echo exec('sdhash Data\Results\DOCX\BMP\Embedded_Files\*.docx -o sdhash_embedded_object1');
						    echo exec('sdhash Data\Images\BMP -o sdhash_embedded_object2');
							$fldr1='Data\Results\DOCX\BMP\Embedded_Files';	
							$fldr2='Data\Images\BMP';
							//$docxFlIndx=17;
							//$imgIndx=8;
							break;
								
						case 28:
							echo exec('sdhash Data\Results\DOCX\BMP\Embedded_Files_without_Images\*.docx -o sdhash_embedded_object1');
						    echo exec('sdhash Data\Images\BMP -o sdhash_embedded_object2');
							$fldr1='Data\Results\DOCX\BMP\Embedded_Files_without_Images';	
							$fldr2='Data\Images\BMP';
							//$docxFlIndx=17;
							//$imgIndx=8;
							break;
								
									
						case 29:
							echo exec('sdhash Data\Results\DOCX\TIFF\Embedded_Files\*.docx -o sdhash_embedded_object1');
						    echo exec('sdhash Data\Images\TIFF\*.tif -o sdhash_embedded_object2');
							$fldr1='Data\Results\DOCX\TIFF\Embedded_Files';	
							$fldr2='Data\Images\TIFF';
							//$docxFlIndx=17;
							//$imgIndx=8;
							break;
								
						case 30:
							echo exec('sdhash Data\Results\DOCX\TIFF\Embedded_Files_without_Images\*.docx -o sdhash_embedded_object1');
						    echo exec('sdhash Data\Images\TIFF\*.tif -o sdhash_embedded_object2');
							$fldr1='Data\Results\DOCX\TIFF\Embedded_Files_without_Images';	
							$fldr2='Data\Images\TIFF';
							//$docxFlIndx=17;
							//$imgIndx=8;
							break;
								
									
						case 31:
							echo exec('sdhash Data\Results\DOCX\GIF\Embedded_Files\*.docx -o sdhash_embedded_object1');
						    echo exec('sdhash Data\Images\GIF -o sdhash_embedded_object2');
							$fldr1='Data\Results\DOCX\GIF\Embedded_Files';	
							$fldr2='Data\Images\GIF';
							//$docxFlIndx=17;
							//$imgIndx=8;
							break;
								
						case 32:
							echo exec('sdhash Data\Results\DOCX\GIF\Embedded_Files_without_Images\*.docx -o sdhash_embedded_object1');
						    echo exec('sdhash Data\Images\GIF -o sdhash_embedded_object2');
							$fldr1='Data\Results\DOCX\GIF\Embedded_Files_without_Images';	
							$fldr2='Data\Images\GIF';
							//$docxFlIndx=17;
							//$imgIndx=8;
							break;
							*/
								
						default:
							echo exec('sdhash Data\Results\DOCX\JPEG\Embedded_Files\*.docx -o sdhash_embedded_object1');
						    echo exec('sdhash Data\Images\Jpeg -o sdhash_embedded_object2');
							$fldr1='Data\Results\DOCX\JPEG\Embedded_Files';	
							$fldr2='Data\Images\Jpeg';
							//$docxFlIndx=17;
							//$imgIndx=8;
							break;
								
						}
					  
					  
					  
					  //echo exec('ssdeep -r Data\Docx');
					  
					   
						 //echo exec('sdhash Data\Results\DOCX\JPEG\Embedded_Files\*.docx -o result_embedded_jpeg_docx1');
						  						  
						 //echo exec('sdhash Data\Images\Jpeg\*.jpg -o img_result_embedded_jpeg_docx2');
						  
						  $rslt= exec('..\Tools\\' .$tool. ' -c '.$out1.' '.$out1.'. > '.$resultFile);
						  
						  $rslt = file_get_contents($resultFile, true);
						  $sn=0;
						  $tp=0;
						  $tn=0;
						  $fp=0;
						  $fn=0;
						  $sn=0;
							
						$t=(int)$_GET['threshold'];
					  		if($rslt==""){
							?>
                                
                                <tr><td colspan="5" style="text-align:center;">No match found!!</td></tr>
                            <?php	
								
								
								
							}else{
					  
						  $arr = explode("\n", $rslt);
						  $rw="";
						  $cnt=0;
						  //echo count($arr);
						  
						  foreach ($arr as &$value) {
							  
							  ?>
                               <?php $sn++; 
							         $clr=0;
							         $cnt++;
					  				
					  			?>
                            <?php if($value!=null){  ?>
                              
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
						  //strpos($a, 'are') !== false
						  /*
						  if(strpos($embddFll, '_')!== false){
							  $embdFl_arr = explode("_", $embddFll);
						  $imgFl_arr = explode(".", $imgFll);
							  
						  }else{
						  
						  $embdFl_arr = explode(".", $embddFll);
						  $imgFl_arr = explode("_", $imgFll);
						  }*/
						  
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
										$clr=1;
									}else{
										$tn++;
									}
									
								}
						  
							  
							 // echo "***************".$arr2[$arr1_size-1]."**************";
							  
						  }
						 // echo "\n";
						  	
						  		  
								  if(($sn-1!=0) && (($sn-1)%10==0)){
									$tblid++;	
							  
							  ?>
                              
                              </table>
				  <table id="table<?php echo $tblid; ?>" style="display: none;width: 1000px;">
                  <tr  style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center; width: 1000px;"><td style="text-align: center; width: 15%;">S.No.</td><td style="text-align: center; width: 35%">Target File</td><td style="text-align: center; width: 30%">Images</td><td style="text-align: center;width: 20%">Similarity<br/> (Calculated by the scheme)</td></tr>
                              
                              
				  <!--</table>
				  <table id="table<?php echo $tblid; ?>" style="display: none;width: 100%;height: 100%;">
                  <tr  style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center;"><td style="text-align: center; width: 15%;">S.No.</td><td style="text-align: center; width: 35%;">Target File</td><td style="text-align: center; width: 30%;">Images</td><td style="text-align: center; width: 20%;">Similarity</td></tr> -->
					  
					  
					  
					  
					  <?php 
								 }
							  ?>
						  
						  
						 
					  <tr <?php if($clr==1){ ?> 
                      style="color: ;text-align: center;"
					  <?php } ?>>
                            
                            <td style="color: ;text-align: center;"><?php echo $sn; ?></td>
                            <td style="color: ;text-align: center;"><?php echo $embddFll; ?></td>
						  	<td style="color: ;text-align: center;"><?php echo $imgFll; ?></td>
						  	<td style="color: ;text-align: center;"><?php echo $similarity; ?> <?php //if($clr==1){ echo "##";} ?></td>
                              
					  
                          </tr>
					  <?php 
							  $rw=$cnt.";".$embddFll.";".$imgFll.";".$similarity."\n";
							  fwrite($tmp_handle, $rw);
					  
					  ?>
					  <?php } ?>
					  <?php
							  
					  }
						  
						  ?>
						  
						
					  
					 
					  
					  
					  
					 <!-- <tr align="righ" ><td colspan="2" align="right"><input type="submit" align="middle" value="submit" ></td></tr>
					  -->
					  
				  </table>
				  
			   
			  
			  </form>
			  
			  <div style="width: 50%; height: 50%; background-color: ; float:left;"><a href="#" onclick='showPre(<?php echo $tblid; ?>);' style="text-decoration: none;color: black;"><img src="../images/Icons/Previous1.jpg">Previous</a></div>
    <div style="width: 50%; height: 50%; background-color: ; float:right; text-align: right; "><a href="#" onclick='showNext(<?php echo $tblid; ?>);' style="text-decoration:none;color: black;">Next<img src="../images/Icons/Next1.jpg"></a></div>
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

			  
			  unlink($out1);
			  //unlink($out2);
			  unlink($resultFile);
			  

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
