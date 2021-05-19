<!doctype html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CFTT Federated Testing CD - Home Page</title>
<link rel="stylesheet" type="text/css" href="../css/reset.css" media="screen" />
<link rel="stylesheet" type="text/css" href="../css/main_style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="../css/layout.css" media="screen" />
<script src='..\includes\Chart.min.js' ></script>
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
                
				  //print_main_sidebar_menu_contents();
               ?>
    	    </div>
		    </div>
		  </div>  
          	
    	  <div id="">
    	    <div id="breadcrumb">Related Document Detection ➤ <a href="evaluateRelatedDocument.php">Test Cases</a> ➤ <a href="all.php?threshold=22"> Comparative Assessment </a></div> 
			  <form id="frm" method="get" action="javascript:redirect();">
				
                 <table style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'">
                 
                 <?php $index=1; ?>
                 <tr style="background-color: #0e375d; color:white; font-size: 18px; height: 30px;text-align:left; vertical-align: middle;padding-top: 10px;padding-left: 10px;">
                   <td colspan="2">Single Common Block Identification </td></tr>
				
				
					 
					 
                 <tr class="" ><td style="width: 9%; text-align: justify;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $index++."." ?></td>
                 <td style="align-content: space-around;text-align: justify; vertical-align: text-top;vertical-align: top;padding: 10px 10px 10px 10px;">This report presents the results of the &#34;Related Document Detetion&#34;. The purpose of this test is to find out the smallest fragment size that approximate matching algorithms can correlate to its source file.
                 </td></tr>
					 
					 
					 
                 <tr class="push"><td style="width: 9%; text-align: justify;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $index++."." ?></td>
                 <td style="align-content: space-around;text-align: justify;vertical-align: text-top;vertical-align: top;padding: 10px 10px 10px 10px;">
                 Data-set is generated following the steps given below.
 <br>
					 (i)Three files of same size are taken from the T5 corpus.
                 	<br>
                    (ii) Following 10 different sized fragments of the first file is created: 100%, 66.66%, 42.86%, 25%, 11.11%, 5.2%, 4.1%, 3.09%, 2.04%, 1.01%.
                    <br>
 					(iii) Each fragment will be inserted in randomly chosen positions in the second and third file one by one. This will result in creation of 10 pairs of second and third file with shared common block of 50%, 40%, 30%, 20%, 10%, 5%, 4%, 3%, 2%, 1% respectively.
                    <br>
					(iv) Take another triplet of files and Repeat from step 1 to step 3 for various size of files.<br>
					 (v) We have taken 160 such triplet.                 
                 </td></tr>
                 
                 <?php 
				 $totalComparision=0;//($_GET['numOfSeqTextFile']*$_GET['numOfSeqTextFrag'])+($_GET['numOfRanTextFile']*$_GET['numOfRanTextFrag']);
					 
				$totalComparisionDocx=0;//($_GET['numOfSeqDocxFile']*$_GET['numOfSeqDocxFrag'])+($_GET['numOfRanDocxFile']*$_GET['numOfRanDocxFrag']);	 
				 
				 ?>
                 <tr><td style="width: 9%; text-align: justify;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $index++."." ?>&nbsp;</td><td style="align-content: space-around;text-align: justify;vertical-align: text-top;vertical-align: top;padding: 10px 10px 10px 10px;">(i)&nbsp;&nbsp;Total number of comparision performed by each scheme for text files: 25600 <?php echo $totalComparision; ?>.<br>(ii) Total number of comparision performed by each scheme for docx files: 25600<?php echo $totalComparisionDocx; ?>.</td></tr>
                 
                 <?php 
					/* $ssdeepAvgPree=($_GET['ssdeepSeqPRE']+$_GET['ssdeepRanPRE'])/2;
					 $sdhashAvgPree=($_GET['sdhashSeqPRE']+$_GET['sdhashRanPRE'])/2;
					 
				 $avgPRE="Results obtained by ";
				 if($ssdeepAvgPree>$sdhashAvgPree){
					 $avgPRE=$avgPRE."ssdeep are more precise than sdhash on an avg.";
				 }else if($ssdeepAvgPree<$sdhashAvgPree){
				 	$avgPRE=$avgPRE."sdhash are more precise than ssdeep on an avg.";
				 
				 }else{
					 $avgPRE=$avgPRE."ssdeep and sdhash both have same prcision.";
				 }
				 */
				 ?>
					 
					 <tr><td style="width: 9%; text-align: justify;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $index++."." ?>&nbsp;</td><td style="align-content: space-around;text-align: justify;vertical-align: text-top;vertical-align: top;padding: 10px 10px 10px 10px;">
					The graphs, shown below (in this report) represents the results of ssdeep and sdhash on different data-sets. <br>


(i)&nbsp; &nbsp;X-axis represents the different fragment sizes.<br>
(ii) First Y-axis(left) represents Match Percentage (Denotes number of times on scale of 100 a tool is able to correlate a particular fragment to the original file). Illustrated in the form of lines in the graph.<br>
(iii)Second (right) Y-axis represents avg. score calculated by the ssdeep and sdhash for a fragment size. Bars in the graph illustrates the avg. score.

						 </td></tr>
					 
					 
				<tr><td style="width: 9%; text-align: justify;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $index++."." ?>&nbsp;</td><td style="align-content: space-around;text-align: justify;vertical-align: text-top;vertical-align: top;padding: 10px 10px 10px 10px;">
					The graph below shows comparitive analysis of ssdeep and sdhash on Text Data-Set Docx respectively.				</td></tr>
<!------------------------------------------------------------------------------------------------------------------------->
                
              
					 
					 
<tr align="center" style="text-align:center;"><td colspan="2" align="center" style="text-align:center"><div id="" style="width: 860px; height: 450px;text-align:center;margin-left:86px;margin-top: 50px;margin-bottom: 20px;margin-right: 20px;" align="center"><canvas id='text_singleCommmon1'></canvas></div></td></tr>
                
   

<script>


var scoreSsdeepText_SingleCommonTmp="<?php echo $_GET['scoreSsdeepText_SingleCommon']; ?>";
var scoreSdhashText_SingleCommonTmp="<?php echo $_GET['scoreSdhashText_SingleCommon']; ?>";
//var scoreFbHashText_SingleCommonTmp="<?php //echo $_GET['scoreFbHashText_SingleCommon']; ?>";	
var scoreSsdeepText_SingleCommon=scoreSsdeepText_SingleCommonTmp.split("-");
var scoreSdhashText_SingleCommon=scoreSdhashText_SingleCommonTmp.split("-");
//var scoreFbHashText_SingleCommon=scoreFbHashText_SingleCommonTmp.split("-");	
 
var matchSsdeepText_SingleCommonTmp="<?php echo $_GET['matchSsdeepText_SingleCommon']; ?>";
var matchSdhashText_SingleCommonTmp="<?php echo $_GET['matchSdhashText_SingleCommon']; ?>";
//var matchFbHashText_SingleCommonTmp="<?php //echo $_GET['matchFbHashText_SingleCommon']; ?>";
	
var matchSsdeepText_SingleCommon=matchSsdeepText_SingleCommonTmp.split("-");
var matchSdhashText_SingleCommon=matchSdhashText_SingleCommonTmp.split("-");
//var matchFbHashText_SingleCommon=matchFbHashText_SingleCommonTmp.split("-");

var ctx = document.getElementById('text_singleCommmon1');
var myChart = new Chart(ctx, {
type: 'bar',
data: {labels: ['  50%  ', '  40%  ', '30%', '20%', '10%', '5%', '4%', '3%', '2%', '1%',],
datasets: [
{
 type: 'line', fill: true, lineTension: 0,
 label: 'ssdeep Match Probability',
 data: [Number(matchSsdeepText_SingleCommon[0]), Number(matchSsdeepText_SingleCommon[1]), Number(matchSsdeepText_SingleCommon[2]), Number(matchSsdeepText_SingleCommon[3]), Number(matchSsdeepText_SingleCommon[4]), Number(matchSsdeepText_SingleCommon[5]), Number(matchSsdeepText_SingleCommon[6]), Number(matchSsdeepText_SingleCommon[7]), Number(matchSsdeepText_SingleCommon[8]), Number(matchSsdeepText_SingleCommon[9])],
 yAxisId: 'y-axis-1',
 borderColor: 'rgba(64,130,244,0.86)',
 backgroundColor: 'rgba(64,135,243,0.00)',
 borderWidth: 2
},
{
 type: 'line', fill: true, lineTension: 0,
 label: 'sdhash match probability',
 data: [Number(matchSdhashText_SingleCommon[0]), Number(matchSdhashText_SingleCommon[1]), Number(matchSdhashText_SingleCommon[2]), Number(matchSdhashText_SingleCommon[3]), Number(matchSdhashText_SingleCommon[4]), Number(matchSdhashText_SingleCommon[5]), Number(matchSdhashText_SingleCommon[6]), Number(matchSdhashText_SingleCommon[7]), Number(matchSdhashText_SingleCommon[8]), Number(matchSdhashText_SingleCommon[9])],
 yAxisId: 'y-axis-1',
 borderColor: 'rgba(200,40,28,0.77)',
 backgroundColor: 'rgba(220,68,54,0.00)',
 borderWidth: 2
},
	
	
	
	
	
{
 type: 'bar', 
 label: 'ssdeep',
 data: [Number(scoreSsdeepText_SingleCommon[0]), Number(scoreSsdeepText_SingleCommon[1]), Number(scoreSsdeepText_SingleCommon[2]), Number(scoreSsdeepText_SingleCommon[3]), Number(scoreSsdeepText_SingleCommon[4]), Number(scoreSsdeepText_SingleCommon[5]), Number(scoreSsdeepText_SingleCommon[6]), Number(scoreSsdeepText_SingleCommon[7]), Number(scoreSsdeepText_SingleCommon[8]), Number(scoreSsdeepText_SingleCommon[9])],
 yAxisId: 'y-axis-2',
 borderColor: 'rgba(255,255,255,0.0)',
 //borderColor: 'rgba(0,0,255,255)',	
 backgroundColor: 'rgba(64,130,244,1.00)',
 borderWidth: 1
},
{
 typ : 'bar', 
 label: 'sdhash',
 data: [Number(scoreSdhashText_SingleCommon[0]), Number(scoreSdhashText_SingleCommon[1]), Number(scoreSdhashText_SingleCommon[2]), Number(scoreSdhashText_SingleCommon[3]), Number(scoreSdhashText_SingleCommon[4]), Number(scoreSdhashText_SingleCommon[5]), Number(scoreSdhashText_SingleCommon[6]), Number(scoreSdhashText_SingleCommon[7]), Number(scoreSdhashText_SingleCommon[8]), Number(scoreSdhashText_SingleCommon[9])],
 yAxisId: 'y-axis-2',
 borderColor: 'rgba(255,255,255,0.00)',
 backgroundColor: 'rgba(200,40,28,1.00)',
 borderWidth: 1
}
]
},
options: {scales:
{
	xAxes:[{type:"category",id:"x-axis-0",gridLines: { display: false }}],
 yAxes:
 [
  {
   scaleLabel: { display: true, labelString: 'Match % (Probability)' },
   position: 'left', id: 'y-axis-1',type: 'linear',
   ticks: { min: 0, beginAtZero: true, stepSize: 20, max: 100 },
   //gridLines: { display: false }
  },
  {
   scaleLabel: { display: true, labelString: 'Avg. Score' },
   position: 'right', id: 'y-axis-2',type: 'linear',
   ticks: { min: 0, beginAtZero: true, stepSize: 20, max: 100 },
   gridLines: { display: false }
  }
 ]
},
legend: { position: 'bottom' }
}
});
</script>                
                					 
					 
					 
					 
                
                
<tr align="center" style="text-align:center;"><td colspan="2" align="center" style="text-align:center"><div id="" style="width: 860px; height: 450px;text-align:center;margin-left:86px;margin-top: 50px;margin-bottom: 20px;margin-right: 20px;" align="center"><canvas id='text_singleCommmon'></canvas></div></td></tr>
                
   

<script>


var scoreSsdeepText_SingleCommonTmp="<?php echo $_GET['scoreSsdeepDocx_SingleCommon']; ?>";
var scoreSdhashText_SingleCommonTmp="<?php echo $_GET['scoreSdhashDocx_SingleCommon']; ?>";
//var scoreFbHashText_SingleCommonTmp="<?php //echo $_GET['scoreFbHashText_SingleCommon']; ?>";	
var scoreSsdeepText_SingleCommon=scoreSsdeepText_SingleCommonTmp.split("-");
var scoreSdhashText_SingleCommon=scoreSdhashText_SingleCommonTmp.split("-");
//var scoreFbHashText_SingleCommon=scoreFbHashText_SingleCommonTmp.split("-");	
 
var matchSsdeepText_SingleCommonTmp="<?php echo $_GET['matchSsdeepDocx_SingleCommon']; ?>";
var matchSdhashText_SingleCommonTmp="<?php echo $_GET['matchSdhashDocx_SingleCommon']; ?>";
//var matchFbHashText_SingleCommonTmp="<?php //echo $_GET['matchFbHashText_SingleCommon']; ?>";
	
var matchSsdeepText_SingleCommon=matchSsdeepText_SingleCommonTmp.split("-");
var matchSdhashText_SingleCommon=matchSdhashText_SingleCommonTmp.split("-");
//var matchFbHashText_SingleCommon=matchFbHashText_SingleCommonTmp.split("-");

var ctx = document.getElementById('text_singleCommmon');
var myChart = new Chart(ctx, {
type: 'bar',
data: {labels: ['  50%  ', '  40%  ', '30%', '20%', '10%', '5%', '4%', '3%', '2%', '1%',],
datasets: [
{
 type: 'line', fill: true, lineTension: 0,
 label: 'ssdeep Match Probability',
 data: [Number(matchSsdeepText_SingleCommon[0]), Number(matchSsdeepText_SingleCommon[1]), Number(matchSsdeepText_SingleCommon[2]), Number(matchSsdeepText_SingleCommon[3]), Number(matchSsdeepText_SingleCommon[4]), Number(matchSsdeepText_SingleCommon[5]), Number(matchSsdeepText_SingleCommon[6]), Number(matchSsdeepText_SingleCommon[7]), Number(matchSsdeepText_SingleCommon[8]), Number(matchSsdeepText_SingleCommon[9])],
 yAxisId: 'y-axis-1',
 borderColor: 'rgba(64,130,244,0.86)',
 backgroundColor: 'rgba(64,135,243,0.00)',
 borderWidth: 2
},
{
 type: 'line', fill: true, lineTension: 0,
 label: 'sdhash match probability',
 data: [Number(matchSdhashText_SingleCommon[0]), Number(matchSdhashText_SingleCommon[1]), Number(matchSdhashText_SingleCommon[2]), Number(matchSdhashText_SingleCommon[3]), Number(matchSdhashText_SingleCommon[4]), Number(matchSdhashText_SingleCommon[5]), Number(matchSdhashText_SingleCommon[6]), Number(matchSdhashText_SingleCommon[7]), Number(matchSdhashText_SingleCommon[8]), Number(matchSdhashText_SingleCommon[9])],
 yAxisId: 'y-axis-1',
 borderColor: 'rgba(200,40,28,0.77)',
 backgroundColor: 'rgba(220,68,54,0.00)',
 borderWidth: 2
},
	
{
 type: 'bar', 
 label: 'ssdeep',
 data: [Number(scoreSsdeepText_SingleCommon[0]), Number(scoreSsdeepText_SingleCommon[1]), Number(scoreSsdeepText_SingleCommon[2]), Number(scoreSsdeepText_SingleCommon[3]), Number(scoreSsdeepText_SingleCommon[4]), Number(scoreSsdeepText_SingleCommon[5]), Number(scoreSsdeepText_SingleCommon[6]), Number(scoreSsdeepText_SingleCommon[7]), Number(scoreSsdeepText_SingleCommon[8]), Number(scoreSsdeepText_SingleCommon[9])],
 yAxisId: 'y-axis-2',
 borderColor: 'rgba(255,255,255,0.0)',
 //borderColor: 'rgba(0,0,255,255)',	
 backgroundColor: 'rgba(64,130,244,1.00)',
 borderWidth: 1
},
{
 typ : 'bar', 
 label: 'sdhash',
 data: [Number(scoreSdhashText_SingleCommon[0]), Number(scoreSdhashText_SingleCommon[1]), Number(scoreSdhashText_SingleCommon[2]), Number(scoreSdhashText_SingleCommon[3]), Number(scoreSdhashText_SingleCommon[4]), Number(scoreSdhashText_SingleCommon[5]), Number(scoreSdhashText_SingleCommon[6]), Number(scoreSdhashText_SingleCommon[7]), Number(scoreSdhashText_SingleCommon[8]), Number(scoreSdhashText_SingleCommon[9])],
 yAxisId: 'y-axis-2',
 borderColor: 'rgba(255,255,255,0.00)',
 backgroundColor: 'rgba(200,40,28,1.00)',
 borderWidth: 1
}
]
},
options: {scales:
{
	xAxes:[{type:"category",id:"x-axis-0",gridLines: { display: false }}],
 yAxes:
 [
  {
   scaleLabel: { display: true, labelString: 'Match % (Probability)' },
   position: 'left', id: 'y-axis-1',type: 'linear',
   ticks: { min: 0, beginAtZero: true, stepSize: 20, max: 100 },
   //gridLines: { display: false }
  },
  {
   scaleLabel: { display: true, labelString: 'Avg. Score' },
   position: 'right', id: 'y-axis-2',type: 'linear',
   ticks: { min: 0, beginAtZero: true, stepSize: 20, max: 100 },
   gridLines: { display: false }
  }
 ]
},
legend: { position: 'bottom' }
}
});
</script>                
                
                
                
                








<tr align="right"><td  colspan="2" align="right" ><input type="submit" style="margin-left:50%" value="Back"  onClick="location.href = 'all.php?threshold=22';"></td></tr>             
                
            
                

                 
                 
                 
                 
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
