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
	//alert("sdegwiu");
	var dataSet = document.getElementById("dataSet").value;
	
	var setType = document.getElementById("setType").value;
	
	var tool = document.getElementById("tool").value;
	
	var object = document.getElementById("objectType").value;
	
	//var contains = document.getElementById("containsImages").value;
	
	var threshold = document.getElementById("threshold").value;
	
	if(tool== "ssdeep"){
  if((dataSet=="UserGenerated") && (setType == "PPTX") && (object=="JPEG")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_ssdeep.php?case=1&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "PPTX")&& (object=="BMP")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_ssdeep.php?case=2&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "PPTX")&& (object=="TIFF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_ssdeep.php?case=3&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "PPTX")&& (object=="GIF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_ssdeep.php?case=4&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "DOCX")&& (object=="JPEG")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_ssdeep.php?case=5&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "DOCX")&& (object=="BMP")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_ssdeep.php?case=6&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "DOCX")&& (object=="TIFF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_ssdeep.php?case=7&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "DOCX")&& (object=="GIF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_ssdeep.php?case=8&threshold='+threshold;
  }else if((dataSet=="Existing") && (setType == "PPTX") && (object=="JPEG")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_ssdeep.php?case=9&threshold='+threshold;
  }else if((dataSet=="Existing") && (setType == "PPTX")&& (object=="BMP")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_ssdeep.php?case=10&threshold='+threshold;
  }else if((dataSet=="Existing") && (setType == "PPTX")&& (object=="TIFF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_ssdeep.php?case=11&threshold='+threshold;
  }else if((dataSet=="Existing") && (setType == "PPTX")&& (object=="GIF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_ssdeep.php?case=12&threshold='+threshold;
  }else if((dataSet=="Existing") && (setType == "DOCX")&& (object=="JPEG")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_ssdeep.php?case=13&threshold='+threshold;
  }else if((dataSet=="Existing") && (setType == "DOCX")&& (object=="BMP")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_ssdeep.php?case=14&threshold='+threshold;
  }else if((dataSet=="Existing") && (setType == "DOCX")&& (object=="TIFF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_ssdeep.php?case=15&threshold='+threshold;
  }else if((dataSet=="Existing") && (setType == "DOCX")&& (object=="GIF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_ssdeep.php?case=16&threshold='+threshold;
  }

	}else if(tool== "sdhash"){
////////sdhash	
	if((dataSet=="UserGenerated") && (setType == "PPTX") && (object=="JPEG")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_sdhash.php?case=1&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "PPTX") && (object=="BMP")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_sdhash.php?case=2&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "PPTX") && (object=="TIFF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_sdhash.php?case=3&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "PPTX") && (object=="GIF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_sdhash.php?case=4&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "DOCX") && (object=="JPEG")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_sdhash.php?case=5&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "DOCX") && (object=="BMP")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_sdhash.php?case=6&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "DOCX") && (object=="TIFF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_sdhash.php?case=7&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "DOCX") && (object=="GIF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_sdhash.php?case=8&threshold='+threshold;
  }else if((dataSet=="Existing") && (setType == "PPTX") && (object=="JPEG")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_sdhash.php?case=9&threshold='+threshold;
  }else if((dataSet=="Existing") && (setType == "PPTX") && (object=="BMP")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_sdhash.php?case=10&threshold='+threshold;
  }else if((dataSet=="Existing") && (setType == "PPTX") && (object=="TIFF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_sdhash.php?case=11&threshold='+threshold;
  }else if((dataSet=="Existing") && (setType == "PPTX") && (object=="GIF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_sdhash.php?case=12&threshold='+threshold;
  }else if((dataSet=="Existing") && (setType == "DOCX") && (object=="JPEG")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_sdhash.php?case=13&threshold='+threshold;
  }else if((dataSet=="Existing") && (setType == "DOCX") && (object=="BMP")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_sdhash.php?case=14&threshold='+threshold;
  }else if((dataSet=="Existing") && (setType == "DOCX") && (object=="TIFF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_sdhash.php?case=15&threshold='+threshold;
  }else if((dataSet=="Existing") && (setType == "DOCX") && (object=="GIF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_sdhash.php?case=16&threshold='+threshold;
  }
	
	
	}else{
		
	if((dataSet=="UserGenerated") && (setType == "PPTX") && (object=="JPEG")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_othertolls.php?case=1&threshold='+threshold+'&tool='+tool;
  }else if((dataSet=="UserGenerated") && (setType == "PPTX") && (object=="BMP")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_othertolls.php?case=2&threshold='+threshold+'&tool='+tool;
  }else if((dataSet=="UserGenerated") && (setType == "PPTX") && (object=="TIFF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_othertolls.php?case=3&threshold='+threshold+'&tool='+tool;
  }else if((dataSet=="UserGenerated") && (setType == "PPTX") && (object=="GIF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_othertolls.php?case=4&threshold='+threshold+'&tool='+tool;
  }else if((dataSet=="UserGenerated") && (setType == "DOCX") && (object=="JPEG")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_othertolls.php?case=5&threshold='+threshold+'&tool='+tool;
  }else if((dataSet=="UserGenerated") && (setType == "DOCX") && (object=="BMP")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_othertolls.php?case=6&threshold='+threshold+'&tool='+tool;
  }else if((dataSet=="UserGenerated") && (setType == "DOCX") && (object=="TIFF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_othertolls.php?case=7&threshold='+threshold+'&tool='+tool;
  }else if((dataSet=="UserGenerated") && (setType == "DOCX") && (object=="GIF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_othertolls.php?case=8&threshold='+threshold+'&tool='+tool;
  }else if((dataSet=="Existing") && (setType == "PPTX") && (object=="JPEG")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_othertolls.php?case=9&threshold='+threshold+'&tool='+tool;
  }else if((dataSet=="Existing") && (setType == "PPTX") && (object=="BMP")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_othertolls.php?case=10&threshold='+threshold+'&tool='+tool;
  }else if((dataSet=="Existing") && (setType == "PPTX") && (object=="TIFF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_othertolls.php?case=11&threshold='+threshold+'&tool='+tool;
  }else if((dataSet=="Existing") && (setType == "PPTX") && (object=="GIF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_othertolls.php?case=12&threshold='+threshold+'&tool='+tool;
  }else if((dataSet=="Existing") && (setType == "DOCX") && (object=="JPEG")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_othertolls.php?case=13&threshold='+threshold+'&tool='+tool;
  }else if((dataSet=="Existing") && (setType == "DOCX") && (object=="BMP")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_othertolls.php?case=14&threshold='+threshold+'&tool='+tool;
  }else if((dataSet=="Existing") && (setType == "DOCX") && (object=="TIFF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_othertolls.php?case=15&threshold='+threshold+'&tool='+tool;
  }else if((dataSet=="Existing") && (setType == "DOCX") && (object=="GIF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_othertolls.php?case=16&threshold='+threshold+'&tool='+tool;
  }	
		
	}
	
//*/
	
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	
	
	
	
/*	  
  if((dataSet=="UserGenerated") && (setType == "PPTX") && (contains=="with_images") && (tool== "ssdeep") && (object=="JPEG")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=1&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "PPTX") && (contains=="without_images") && (tool== "ssdeep")&& (object=="JPEG")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=2&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "PPTX") && (contains=="with_images") && (tool== "ssdeep")&& (object=="BMP")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=3&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "PPTX") && (contains=="without_images") && (tool== "ssdeep")&& (object=="BMP")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=4&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "PPTX") && (contains=="with_images") && (tool== "ssdeep")&& (object=="TIFF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=5&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "PPTX") && (contains=="without_images") && (tool== "ssdeep")&& (object=="TIFF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=6&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "PPTX") && (contains=="with_images") && (tool== "ssdeep")&& (object=="GIF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=7&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "PPTX") && (contains=="without_images") && (tool== "ssdeep")&& (object=="GIF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=8&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "PPTX") && (contains=="with_images") && (tool== "sdhash")&& (object=="JPEG")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=9&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "PPTX") && (contains=="without_images") && (tool== "sdhash") && (object=="JPEG")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=10&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "PPTX") && (contains=="with_images") && (tool== "sdhash")&& (object=="BMP")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=11&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "PPTX") && (contains=="without_images") && (tool== "sdhash")&& (object=="BMP")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=12&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "PPTX") && (contains=="with_images") && (tool== "sdhash")&& (object=="TIFF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=13&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "PPTX") && (contains=="without_images") && (tool== "sdhash")&& (object=="TIFF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=14&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "PPTX") && (contains=="with_images") && (tool== "sdhash")&& (object=="GIF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=15&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "PPTX") && (contains=="without_images") && (tool== "sdhash")&& (object=="GIF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=16&threshold='+threshold;
  }
	///////////////////////////////////////////////Docx-UserGenerated////////////////////////////////////////////////////////////
   else if((dataSet=="UserGenerated") && (setType == "DOCX") && (contains=="with_images") && (tool== "ssdeep")&& (object=="JPEG")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=17&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "DOCX") && (contains=="without_images") && (tool== "ssdeep")&& (object=="JPEG")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=18&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "DOCX") && (contains=="with_images") && (tool== "ssdeep")&& (object=="BMP")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=19&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "DOCX") && (contains=="without_images") && (tool== "ssdeep")&& (object=="BMP")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=20&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "DOCX") && (contains=="with_images") && (tool== "ssdeep")&& (object=="TIFF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=21&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "DOCX") && (contains=="without_images") && (tool== "ssdeep")&& (object=="TIFF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=22&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "DOCX") && (contains=="with_images") && (tool== "ssdeep")&& (object=="GIF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=23&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "DOCX") && (contains=="without_images") && (tool== "ssdeep")&& (object=="GIF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=24&threshold='+threshold;
  }
  else if((dataSet=="UserGenerated") && (setType == "DOCX") && (contains=="with_images") && (tool== "sdhash")&& (object=="JPEG")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=25&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "DOCX") && (contains=="without_images") && (tool== "sdhash")&& (object=="JPEG")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=26&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "DOCX") && (contains=="with_images") && (tool== "sdhash")&& (object=="BMP")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=27&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "DOCX") && (contains=="without_images") && (tool== "sdhash")&& (object=="BMP")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=28&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "DOCX") && (contains=="with_images") && (tool== "sdhash")&& (object=="TIFF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=29&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "DOCX") && (contains=="without_images") && (tool== "sdhash")&& (object=="TIFF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=30&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "DOCX") && (contains=="with_images") && (tool== "sdhash")&& (object=="GIF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=31&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "DOCX") && (contains=="without_images") && (tool== "sdhash")&& (object=="GIF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=32&threshold='+threshold;
  }
	
	
	
	
	
	////////////////////////////////////////////////Existing Dataset PPTX///////////////////////////////////////////////////////
	///////////ssdeep//////PPTX
	else if((dataSet=="Existing") && (setType == "PPTX") && (contains=="with_images") && (tool== "ssdeep") && (object=="JPEG")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=33';
  }else if((dataSet=="Existing") && (setType == "PPTX") && (contains=="without_images") && (tool== "ssdeep")&& (object=="JPEG")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=34';
  }else if((dataSet=="Existing") && (setType == "PPTX") && (contains=="with_images") && (tool== "ssdeep")&& (object=="BMP")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=35';
  }else if((dataSet=="Existing") && (setType == "PPTX") && (contains=="without_images") && (tool== "ssdeep")&& (object=="BMP")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=36';
  }else if((dataSet=="Existing") && (setType == "PPTX") && (contains=="with_images") && (tool== "ssdeep")&& (object=="TIFF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=37';
  }else if((dataSet=="Existing") && (setType == "PPTX") && (contains=="without_images") && (tool== "ssdeep")&& (object=="TIFF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=38';
  }else if((dataSet=="Existing") && (setType == "PPTX") && (contains=="with_images") && (tool== "ssdeep")&& (object=="GIF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=39';
  }else if((dataSet=="Existing") && (setType == "PPTX") && (contains=="without_images") && (tool== "ssdeep")&& (object=="GIF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=40';
  }
	
  /////////////sdhash/////PPTX
  else if((dataSet=="Existing") && (setType == "PPTX") && (contains=="with_images") && (tool== "sdhash")&& (object=="JPEG")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=41';
  }else if((dataSet=="Existing") && (setType == "PPTX") && (contains=="without_images") && (tool== "sdhash") && (object=="JPEG")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=42';
  }else if((dataSet=="Existing") && (setType == "PPTX") && (contains=="with_images") && (tool== "sdhash")&& (object=="BMP")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=43';
  }else if((dataSet=="Existing") && (setType == "PPTX") && (contains=="without_images") && (tool== "sdhash")&& (object=="BMP")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=44';
  }else if((dataSet=="Existing") && (setType == "PPTX") && (contains=="with_images") && (tool== "sdhash")&& (object=="TIFF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=45';
  }else if((dataSet=="Existing") && (setType == "PPTX") && (contains=="without_images") && (tool== "sdhash")&& (object=="TIFF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=46';
  }else if((dataSet=="Existing") && (setType == "PPTX") && (contains=="with_images") && (tool== "sdhash")&& (object=="GIF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=47';
  }else if((dataSet=="Existing") && (setType == "PPTX") && (contains=="without_images") && (tool== "sdhash")&& (object=="GIF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=48';
  }
	/////////////ssdeep//////DOCX
	else if((dataSet=="Existing") && (setType == "DOCX") && (contains=="with_images") && (tool== "ssdeep")&& (object=="JPEG")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=49';
  }else if((dataSet=="Existing") && (setType == "DOCX") && (contains=="without_images") && (tool== "ssdeep")&& (object=="JPEG")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=50';
  }else if((dataSet=="Existing") && (setType == "DOCX") && (contains=="with_images") && (tool== "ssdeep")&& (object=="BMP")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=51';
  }else if((dataSet=="Existing") && (setType == "DOCX") && (contains=="without_images") && (tool== "ssdeep")&& (object=="BMP")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=52';
  }else if((dataSet=="Existing") && (setType == "DOCX") && (contains=="with_images") && (tool== "ssdeep")&& (object=="TIFF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=53';
  }else if((dataSet=="Existing") && (setType == "DOCX") && (contains=="without_images") && (tool== "ssdeep")&& (object=="TIFF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=54';
  }else if((dataSet=="Existing") && (setType == "DOCX") && (contains=="with_images") && (tool== "ssdeep")&& (object=="GIF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=55';
  }else if((dataSet=="Existing") && (setType == "DOCX") && (contains=="without_images") && (tool== "ssdeep")&& (object=="GIF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=56';
  }
  
	///////////sdhash/////Docx
  else if((dataSet=="Existing") && (setType == "DOCX") && (contains=="with_images") && (tool== "sdhash")&& (object=="JPEG")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=57';
  }else if((dataSet=="Existing") && (setType == "DOCX") && (contains=="without_images") && (tool== "sdhash")&& (object=="JPEG")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=58';
  }else if((dataSet=="Existing") && (setType == "DOCX") && (contains=="with_images") && (tool== "sdhash")&& (object=="BMP")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=59';
  }else if((dataSet=="Existing") && (setType == "DOCX") && (contains=="without_images") && (tool== "sdhash")&& (object=="BMP")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=60';
  }else if((dataSet=="Existing") && (setType == "DOCX") && (contains=="with_images") && (tool== "sdhash")&& (object=="TIFF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=61';
  }else if((dataSet=="Existing") && (setType == "DOCX") && (contains=="without_images") && (tool== "sdhash")&& (object=="TIFF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=62';
  }else if((dataSet=="Existing") && (setType == "DOCX") && (contains=="with_images") && (tool== "sdhash")&& (object=="GIF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=63';
  }else if((dataSet=="Existing") && (setType == "DOCX") && (contains=="without_images") && (tool== "sdhash")&& (object=="GIF")) {
   document.getElementById('frm').action = 'EmbeddedObjectDetection_AllInOne.php?case=64';
  }
  //*/
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
			  <form id="frm" method="post" action="javascript:redirect();">
				  <table>
					  
					  
					   <tr><td><div id="breadcrumb">Select the Data Set</div>
						  </td><td><select name="dataSet" id="dataSet"> 
						  <option value="0">----Select----</option>
						  <option value="UserGenerated">User generated data set</option>
						  <option value="Existing">Existing data set</option>
						  
						  </select></td></tr>
					  
					  <tr><td><div id="breadcrumb">Select the File Type </div>
						  </td><td><select name="setType" id="setType"> 
						  <option value="0">----Select----</option>
						  <option value="DOCX">DOCX</option>
						  <option value="PPTX">PPTX</option>
						  <!--<option value="PPT">PPT</option>
						  <option value="PDF">PDF</option> -->
						  </select></td></tr>
                          
                        <!--<tr><td><div id="breadcrumb">Select type of Data Set </div>
						  </td><td><select name="containsImages" id="containsImages"> 
						  <option value="0">----Select----</option>
						  <option value="with_images">with images</option>
						  <option value="without_images">with out images</option>
						  
						  </select></td></tr>   -->
                          
                          
					  
					  
					  <tr><td><div id="breadcrumb">Select the embedded object </div>
						  </td><td><select name="objectType" id="objectType"> 
						  <option value="0">----Select----</option>
						  <option value="JPEG">jpeg</option>
						  <option value="BMP">bmp</option>
						  <option value="TIFF">tiff</option>
						  <option value="GIF">gif</option>
						  
						  
						  </select></td></tr>
					  
				  	  <tr><td><div id="breadcrumb">Select the tool</div>
						  </td><td><select name="tool" id="tool"> 
						  <option value="0">----Select----</option>
						  <option value="ssdeep">ssdeep</option>
						  <option value="sdhash">sdhash</option>
						   <?php 
						  //$tt="hehehe";
						  if ($handle = opendir('../Tools/')) {
 
							while (false !== ($entry = readdir($handle))) {

								if ($entry != "." && $entry != "..") {
									$nwtl=explode(".", $entry);
									
									?>
								
								  <option value="<?php echo $nwtl[0];?>"><?php echo $nwtl[0];?> </option>
							  <?php 
								}
							}

							closedir($handle);
						}
						  
						  ?>
						  </select></td></tr>
					  
					  <tr><td><div id="breadcrumb">Enter the Threshold</div>
						  <div style="font-size: 10px;color: red;"  >score value, used to
							  separate matches from non-matches.</div>
							  <div style="font-size: 10px;color: red;"  >Score>=Threshold : Match </div>
							  <div style="font-size: 10px;color: red;"  >Otherwise        : Non Match</div></td><td valign="top" style="vertical-align:top;" ><INPUT TYPE = "Text" value="22" name = "threshold" id="threshold"></td>
					  </tr>
					  
					  
					  <tr align="righ" ><td colspan="2" align="right"><input type="submit" align="middle" value="submit" style="margin-left:50%" ></td></tr>
					 
					  
				  </table>
				  
			   
			  
			  </form>
			  
			  
			  <!--<div id="boxContainer" style="font-size: 2em"><a href="">DOCX</a></div>
			  
			  <div id="boxContainer" style="font-size: 2em"><a href="run.php">PPTX</a></div>
			  
			  <div id="boxContainer" style="font-size: 2em"><a href="">PPT</a></div>-->
			  
			 
<!--		      <h1>Welcome to the CFTT Federated Testing CD</h1>-->
			  
			  
			 
			  
                  
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
