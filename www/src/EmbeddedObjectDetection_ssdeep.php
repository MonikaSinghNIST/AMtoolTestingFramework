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
    	    <div id="breadcrumb">Embedded Object Identification ➤ <a href="evaluateEmbeddedObject.php">Test Cases</a> ➤ <a href="evaluate_object_based_search_AllInOne.php">Embedded Object Detection</a></div> 
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
					  
					  <tr  style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center; width: 1000px;"><td style="text-align: center; width: 15%;">S.No.</td><td style="text-align: center; width: 35%">Target File</td><td style="text-align: center; width: 30%">Images</td><td style="text-align: center;width: 20%">Similarity<br/> 
					  (Calculated by the tool)</td></tr>
					  
						  <?php
						  //echo exec('ssdeep -r Data\Docx');
					  
					  //echo "#######################".((int)$_GET['case']+1);
					   $caseValue=(int)$_GET['case'];
					   
					   $out1='..\temp\embeddedObject1.text';
					   $out2='..\temp\embeddedObject2.text';
					   
					   if (file_exists($out1)) {
							unlink($out1);
						} 
						if (file_exists($out2)) {
							unlink($out2);
						} 
					   
					  	
					  	switch ($caseValue) {
						
						
						case 1:
															  
							exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\EmbeddedObjects\PPTX\JPEG\Embedded_Files > '.$out1);
						  	exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\EmbeddedObjects\PPTX\JPEG\Embedded_Objects > '.$out2);
							$fldr1='..\DataUserGenerated\EmbeddedObjects\PPTX\JPEG\Embedded_Files';	
							$fldr2='..\DataUserGenerated\EmbeddedObjects\PPTX\JPEG\Embedded_Objects';
							$docxFlIndx=22;
							$imgIndx=11;
							break;
							
							
						case 2:
							exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\EmbeddedObjects\PPTX\BMP\Embedded_Files > '.$out1);
						  	exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\EmbeddedObjects\PPTX\BMP\Embedded_Objects > '.$out2);
							$fldr1='..\DataUserGenerated\EmbeddedObjects\PPTX\BMP\Embedded_Files';	
							$fldr2='..\DataUserGenerated\EmbeddedObjects\PPTX\BMP\Embedded_Objects';
							$docxFlIndx=22;
							$imgIndx=11;
							break;	
						
						case 3:
							exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\EmbeddedObjects\PPTX\TIFF\Embedded_Files > '.$out1);
						  	exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\EmbeddedObjects\PPTX\TIFF\Embedded_Objects > '.$out2);
							$fldr1='..\DataUserGenerated\EmbeddedObjects\PPTX\TIFF\Embedded_Files';	
							$fldr2='..\DataUserGenerated\EmbeddedObjects\PPTX\TIFF\Embedded_Objects';
							$docxFlIndx=22;
							$imgIndx=11;
							break;
							
						case 4:
							exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\EmbeddedObjects\PPTX\GIF\Embedded_Files > '.$out1);
						  	exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\EmbeddedObjects\PPTX\GIF\Embedded_Objects > '.$out2);
							$fldr1='..\DataUserGenerated\EmbeddedObjects\PPTX\GIF\Embedded_Files';	
							$fldr2='..\DataUserGenerated\EmbeddedObjects\PPTX\GIF\Embedded_Objects';
							$docxFlIndx=22;
							$imgIndx=11;
							break;	
						
						
						
						
						case 5:
							exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\EmbeddedObjects\Docx\JPEG\Embedded_Files > '.$out1);
						  	exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\EmbeddedObjects\Docx\JPEG\Embedded_Objects > '.$out2);
							$fldr1='..\DataUserGenerated\EmbeddedObjects\Docx\JPEG\Embedded_Files';	
							$fldr2='..\DataUserGenerated\EmbeddedObjects\Docx\JPEG\Embedded_Objects';
							$docxFlIndx=22;
							$imgIndx=11;
							break;
							
							
						case 6:
							exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\EmbeddedObjects\Docx\BMP\Embedded_Files > '.$out1);
						  	exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\EmbeddedObjects\Docx\BMP\Embedded_Objects > '.$out2);
							$fldr1='..\DataUserGenerated\EmbeddedObjects\Docx\BMP\Embedded_Files';	
							$fldr2='..\DataUserGenerated\EmbeddedObjects\Docx\BMP\Embedded_Objects';
							$docxFlIndx=22;
							$imgIndx=11;
							break;	
						
						case 7:
							exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\EmbeddedObjects\Docx\TIFF\Embedded_Files > '.$out1);
						  	exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\EmbeddedObjects\Docx\TIFF\Embedded_Objects > '.$out2);
							$fldr1='..\DataUserGenerated\EmbeddedObjects\Docx\TIFF\Embedded_Files';	
							$fldr2='..\DataUserGenerated\EmbeddedObjects\Docx\TIFF\Embedded_Objects';
							$docxFlIndx=22;
							$imgIndx=11;
							break;
							
						case 8:
							exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\EmbeddedObjects\Docx\GIF\Embedded_Files > '.$out1);
						  	exec('..\ExistingTools\\ssdeep -r ..\DataUserGenerated\EmbeddedObjects\Docx\GIF\Embedded_Objects > '.$out2);
							$fldr1='..\DataUserGenerated\EmbeddedObjects\Docx\GIF\Embedded_Files';	
							$fldr2='..\DataUserGenerated\EmbeddedObjects\Docx\GIF\Embedded_Objects';
							$docxFlIndx=22;
							$imgIndx=11;
							break;	
							
							
							case 9:
															  
							exec('..\ExistingTools\\ssdeep -r ..\Data\EmbeddedObjects\PPTX\JPEG\Embedded_Files > '.$out1);
						  	exec('..\ExistingTools\\ssdeep -r ..\Data\EmbeddedObjects\PPTX\JPEG\Embedded_Objects > '.$out2);
							$fldr1='..\Data\EmbeddedObjects\PPTX\JPEG\Embedded_Files';	
							$fldr2='..\Data\EmbeddedObjects\PPTX\JPEG\Embedded_Objects';
							$docxFlIndx=22;
							$imgIndx=11;
							break;
							
							
						case 10:
							exec('..\ExistingTools\\ssdeep -r ..\Data\EmbeddedObjects\PPTX\BMP\Embedded_Files > '.$out1);
						  	exec('..\ExistingTools\\ssdeep -r ..\Data\EmbeddedObjects\PPTX\BMP\Embedded_Objects > '.$out2);
							$fldr1='..\Data\EmbeddedObjects\PPTX\BMP\Embedded_Files';	
							$fldr2='..\Data\EmbeddedObjects\PPTX\BMP\Embedded_Objects';
							$docxFlIndx=22;
							$imgIndx=11;
							break;	
						
						case 11:
							exec('..\ExistingTools\\ssdeep -r ..\Data\EmbeddedObjects\PPTX\TIFF\Embedded_Files > '.$out1);
						  	exec('..\ExistingTools\\ssdeep -r ..\Data\EmbeddedObjects\PPTX\TIFF\Embedded_Objects > '.$out2);
							$fldr1='..\Data\EmbeddedObjects\PPTX\TIFF\Embedded_Files';	
						    $fldr2='..\Data\EmbeddedObjects\PPTX\TIFF\Embedded_Objects';
							$docxFlIndx=22;
							$imgIndx=11;
							break;
							
						case 12:
							exec('..\ExistingTools\\ssdeep -r ..\Data\EmbeddedObjects\PPTX\GIF\Embedded_Files > '.$out1);
						  	exec('..\ExistingTools\\ssdeep -r ..\Data\EmbeddedObjects\PPTX\GIF\Embedded_Objects > '.$out2);
							$fldr1='..\Data\EmbeddedObjects\PPTX\GIF\Embedded_Files';	
							$fldr2='..\Data\EmbeddedObjects\PPTX\GIF\Embedded_Objects';
							$docxFlIndx=22;
							$imgIndx=11;
							break;	
							
							
							

			
					    case 13:
							exec('..\ExistingTools\\ssdeep -r ..\Data\EmbeddedObjects\Docx\JPEG\Embedded_Files > '.$out1);
						  	exec('..\ExistingTools\\ssdeep -r ..\Data\EmbeddedObjects\Docx\JPEG\Embedded_Objects > '.$out2);
							$fldr1='..\Data\EmbeddedObjects\Docx\JPEG\Embedded_Files';	
							$fldr2='..\Data\EmbeddedObjects\Docx\JPEG\Embedded_Objects';
							$docxFlIndx=22;
							$imgIndx=11;
							break;
							
							
						case 14:
							exec('..\ExistingTools\\ssdeep -r ..\Data\EmbeddedObjects\Docx\BMP\Embedded_Files > '.$out1);
						  	exec('..\ExistingTools\\ssdeep -r ..\Data\EmbeddedObjects\Docx\BMP\Embedded_Objects > '.$out2);
							$fldr1='..\Data\EmbeddedObjects\Docx\BMP\Embedded_Files';	
							$fldr2='..\Data\EmbeddedObjects\Docx\BMP\Embedded_Objects';
							$docxFlIndx=22;
							$imgIndx=11;
							break;	
						
						case 15:
							exec('..\ExistingTools\\ssdeep -r ..\Data\EmbeddedObjects\Docx\TIFF\Embedded_Files > '.$out1);
						  	exec('..\ExistingTools\\ssdeep -r ..\Data\EmbeddedObjects\Docx\TIFF\Embedded_Objects > '.$out2);
							$fldr1='..\Data\EmbeddedObjects\Docx\TIFF\Embedded_Files';	
							$fldr2='..\Data\EmbeddedObjects\Docx\TIFF\Embedded_Objects';
							$docxFlIndx=22;
							$imgIndx=11;
							break;
							
						case 16:
							exec('..\ExistingTools\\ssdeep -r ..\Data\EmbeddedObjects\Docx\GIF\Embedded_Files > '.$out1);
						  	exec('..\ExistingTools\\ssdeep -r ..\Data\EmbeddedObjects\Docx\GIF\Embedded_Objects > '.$out2);
							$fldr1='..\Data\EmbeddedObjects\Docx\GIF\Embedded_Files';	
							$fldr2='..\Data\EmbeddedObjects\Docx\GIF\Embedded_Objects';
							$docxFlIndx=22;
							$imgIndx=11;
							break;	
						


/*
						case 18:
							exec('ssdeep -r DataUserGenerated\DocxData\Results\JPEG\Embedded_Files_without_Images >ssdeepAllInOne1.text');
						  	exec('ssdeep -r DataUserGenerated\DocxData\Images\JPEG >ssdeepAllInOne2.text');
							$fldr1='DataUserGenerated\DocxData\Results\JPEG\Embedded_Files_without_Images';	
							$fldr2='DataUserGenerated\DocxData\Images\JPEG';
							$docxFlIndx=17;
							$imgIndx=8;
							break;
						case 19:
							exec('ssdeep -r DataUserGenerated\DocxData\Results\BMP\Embedded_Files >ssdeepAllInOne1.text');
						  	exec('ssdeep -r DataUserGenerated\DocxData\Images\BMP >ssdeepAllInOne2.text');
							$fldr1='DataUserGenerated\DocxData\Results\BMP\Embedded_Files';	
							$fldr2='DataUserGenerated\DocxData\Images\BMP';
							$docxFlIndx=17;
							$imgIndx=8;
							break;
						case 20:
							exec('ssdeep -r DataUserGenerated\DocxData\Results\BMP\Embedded_Files_without_Images >ssdeepAllInOne1.text');
						  	exec('ssdeep -r DataUserGenerated\DocxData\Images\BMP >ssdeepAllInOne2.text');
							$fldr1='DataUserGenerated\DocxData\Results\BMP\Embedded_Files_without_Images';	
							$fldr2='DataUserGenerated\DocxData\Images\BMP';
							$docxFlIndx=17;
							$imgIndx=8;
							break;
						case 21:
							exec('ssdeep -r DataUserGenerated\DocxData\Results\TIFF\Embedded_Files >ssdeepAllInOne1.text');
						  	exec('ssdeep -r DataUserGenerated\DocxData\Images\TIFF >ssdeepAllInOne2.text');
							$fldr1='DataUserGenerated\DocxData\Results\TIFF\Embedded_Files';	
							$fldr2='DataUserGenerated\DocxData\Images\TIFF';	
							$docxFlIndx=17;
							$imgIndx=8;
							break;	
						case 22:
							exec('ssdeep -r DataUserGenerated\DocxData\Results\TIFF\Embedded_Files_without_Images >ssdeepAllInOne1.text');
						  	exec('ssdeep -r DataUserGenerated\DocxData\Images\TIFF >ssdeepAllInOne2.text');
							$fldr1='DataUserGenerated\DocxData\Results\TIFF\Embedded_Files_without_Images';	
							$fldr2='DataUserGenerated\DocxData\Images\TIFF';
							$docxFlIndx=17;
							$imgIndx=8;
							break;
						case 23:
							exec('ssdeep -r DataUserGenerated\DocxData\Results\GIF\Embedded_Files >ssdeepAllInOne1.text');
						  	exec('ssdeep -r DataUserGenerated\DocxData\Images\GIF >ssdeepAllInOne2.text');
							$fldr1='DataUserGenerated\DocxData\Results\GIF\Embedded_Files';	
							$fldr2='DataUserGenerated\DocxData\Images\GIF';
							$docxFlIndx=17;
							$imgIndx=8;
							break;
						case 24:
							exec('ssdeep -r DataUserGenerated\DocxData\Results\GIF\Embedded_Files_without_Images >ssdeepAllInOne1.text');
						  	exec('ssdeep -r DataUserGenerated\DocxData\Images\GIF >ssdeepAllInOne2.text');
							$fldr1='DataUserGenerated\DocxData\Results\GIF\Embedded_Files_without_Images';	
							$fldr2='DataUserGenerated\DocxData\Images\GIF';
							$docxFlIndx=17;
							$imgIndx=8;
							break;
					
							//*/
								
								
						/*	
							
						case 49:
							
							exec('ssdeep -r Data\Results\DOCX\JPEG\Embedded_Files >ssdeepAllInOne1.text');
						  	exec('ssdeep -r Data\Images\Jpeg >ssdeepAllInOne2.text');
							$fldr1='Data\Results\DOCX\JPEG\Embedded_Files';	
							$fldr2='Data\Images\Jpeg';	
							$docxFlIndx=16;
							$imgIndx=7;
							break;
						case 50:
							exec('ssdeep -r Data\Results\DOCX\JPEG\Embedded_Files_without_Images >ssdeepAllInOne1.text');
						  	exec('ssdeep -r Data\Images\Jpeg >ssdeepAllInOne2.text');
							$fldr1='Data\Results\DOCX\JPEG\Embedded_Files_without_Images';	
							$fldr2='Data\Images\Jpeg';
							$docxFlIndx=16;
							$imgIndx=7;
							break;
						case 51:
							exec('ssdeep -r Data\Results\DOCX\BMP\Embedded_Files >ssdeepAllInOne1.text');
						  	exec('ssdeep -r Data\Images\Bmp >ssdeepAllInOne2.text');
							$fldr1='Data\Results\DOCX\BMP\Embedded_Files';	
							$fldr2='Data\Images\Bmp';
							$docxFlIndx=16;
							$imgIndx=7;
							break;
						case 52:
							exec('ssdeep -r Data\Results\DOCX\BMP\Embedded_Files_without_Images >ssdeepAllInOne1.text');
						  	exec('ssdeep -r Data\Images\Bmp >ssdeepAllInOne2.text');
							$fldr1='Data\Results\DOCX\BMP\Embedded_Files_without_Images';	
							$fldr2='Data\Images\Bmp';
							$docxFlIndx=16;
							$imgIndx=7;
							break;
						case 53:
							exec('ssdeep -r Data\Results\DOCX\TIFF\Embedded_Files >ssdeepAllInOne1.text');
						  	exec('ssdeep -r Data\Images\Tiff >ssdeepAllInOne2.text');
							$fldr1='Data\Results\DOCX\TIFF\Embedded_Files';	
							$fldr2='Data\Images\Tiff';
							$docxFlIndx=16;
							$imgIndx=7;
							break;	
						case 54:
							exec('ssdeep -r Data\Results\DOCX\TIFF\Embedded_Files_without_Images >ssdeepAllInOne1.text');
						  	exec('ssdeep -r Data\Images\Tiff >ssdeepAllInOne2.text');
							$fldr1='Data\Results\DOCX\TIFF\Embedded_Files_without_Images';	
							$fldr2='Data\Images\Tiff';
							$docxFlIndx=16;
							$imgIndx=7;
							break;
						case 55:
							exec('ssdeep -r Data\Results\DOCX\GIF\Embedded_Files >ssdeepAllInOne1.text');
						  	exec('ssdeep -r Data\Images\Gif >ssdeepAllInOne2.text');
							$fldr1='Data\Results\DOCX\GIF\Embedded_Files';	
							$fldr2='Data\Images\Gif';
							$docxFlIndx=16;
							$imgIndx=7;
							break;
						case 56:
							exec('ssdeep -r Data\Results\DOCX\GIF\Embedded_Files_without_Images >ssdeepAllInOne1.text');
						  	exec('ssdeep -r Data\Images\Gif >ssdeepAllInOne2.text');
							$fldr1='Data\Results\DOCX\GIF\Embedded_Files_without_Images';	
							$fldr2='Data\Images\Gif';
							$docxFlIndx=16;
							$imgIndx=7;
							break;*/
						default :
							exec('ssdeep -r Data\Results\DOCX\JPEG\Embedded_Files >ssdeepAllInOne1.text');
						  	exec('ssdeep -r Data\Images\Jpeg >ssdeepAllInOne2.text');
							$fldr1='Data\Results\DOCX\JPEG\Embedded_Files';	
							$fldr2='Data\Images\Jpeg';
							$docxFlIndx=16;
							$imgIndx=7;
							break;		
								
								
								
						}
					  
						  
						 //echo exec('ssdeep -r Data\Results\DOCX\JPEG\Embedded_Files >ssdeepJpeg1.text');
						  
						 //echo exec('ssdeep -r Data\Images\Jpeg >ssdeepJpeg2.text');
						  
						  $filename="..\temp\embeddedObject.text";
						  if (file_exists($filename)) {
								unlink($filename);
							} 
						  
						  
						  
						  $rslt= exec('..\ExistingTools\\ssdeep -k '.$out1.' '.$out2.' > ..\temp\embeddedObject.text');
						  
						  $rslt = file_get_contents('..\temp\embeddedObject.text', true);
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
                  <tr  style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center; width: 1000px;"><td style="text-align: center; width: 15%;">S.No.</td><td style="text-align: center; width: 35%">Target File</td><td style="text-align: center; width: 30%">Images</td><td style="text-align: center;width: 20%">Similarity<br/> (Calculated by the tool)</td></tr>
                  
                    <?php 
								 }
							  ?>
							  
					  <tr><td style="text-align:center;"><?php echo $sn; ?></td><td style="text-align: center;"><?php echo $target ?></td><td style="text-align: center;"><?php echo $file_img; ?></td><td style="text-align: center;"><?php echo $similarity; ?></td></tr>
						<?php
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
						
						
						fwrite($tmp_handle, $rw);
						
							  
						  }
							  
					  }
						  
						  ?>
						  
					
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
              <tr><td>False positive rate (FPR)</td><td><?php if($numOfComprsn>0){ echo $fp/$numOfComprsn; }else{ echo "0";}?></td></tr>
              <tr><td>False negative rate (FNR)</td><td><?php if($numOfComprsn>0){ echo $fn/$numOfComprsn; }else{ echo "0";} ?></td></tr>
              
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
