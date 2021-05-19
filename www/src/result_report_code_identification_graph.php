<!doctype html>
<head>
	

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CFTT Federated Testing CD - Home Page</title>
<link rel="stylesheet" type="text/css" href="../css/reset.css" media="screen" />
<link rel="stylesheet" type="text/css" href="../css/main_style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="../css/layout.css" media="screen" />
	
	<script type="text/javascript" src="../includes/loader.js"></script>
	
	<script>
	google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawTrendlines);

function drawTrendlines() {
      var data = new google.visualization.DataTable();
      data.addColumn('timeofday', 'Time of Day');
      data.addColumn('number', 'ssdeep');
      data.addColumn('number', 'sdhash');

      data.addRows([
        [{v: [8, 0, 0], f: '8 am'}, 1, .25],
        [{v: [9, 0, 0], f: '9 am'}, 2, .5],
        [{v: [10, 0, 0], f:'10 am'}, 3, 1],
        [{v: [11, 0, 0], f: '11 am'}, 4, 2.25],
        [{v: [12, 0, 0], f: '12 pm'}, 5, 2.25],
        [{v: [13, 0, 0], f: '1 pm'}, 6, 3],
        [{v: [14, 0, 0], f: '2 pm'}, 7, 4],
        [{v: [15, 0, 0], f: '3 pm'}, 8, 5.25],
        [{v: [16, 0, 0], f: '4 pm'}, 9, 7.5],
        [{v: [17, 0, 0], f: '5 pm'}, 10, 10],
      ]);

      var options = {
        title: 'Motivation and Energy Level Throughout the Day',
        trendlines: {
          0: {type: 'linear', lineWidth: 5, opacity: .3},
          1: {type: 'exponential', lineWidth: 10, opacity: .3}
        },
        hAxis: {
          title: 'Time of Day',
          format: 'h:mm a',
          viewWindow: {
            min: [7, 30, 0],
            max: [17, 30, 0]
          }
        },
        vAxis: {
          title: 'Rating (scale of 1-10)'
        }
      };

      var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
		
	</script>
	
<?php /////////////////////////////////////////False Positive Rate script starts///////////////////////////////////////////// ?>
	
		 <script type="text/javascript">
		
		 var ssdeepExeFPR="<?php echo round($_GET['ssdeepExeFPR'],2); ?>";
		 var ssdeepDllFPR="<?php echo round($_GET['ssdeepDllFPR'],2); ?>";
		 var sdhashExeFPR="<?php echo round($_GET['sdhashExeFPR'],2); ?>";
		 var sdhashDllFPR="<?php echo round($_GET['sdhashDllFPR'],2); ?>";
		 
		// alert(sdhashDllFPR);
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
         
		  var data = google.visualization.arrayToDataTable([
          ['False Positive Rate (Text)', 'ssdeep', 'sdhash', 'mrsh'],
          ['Exeuential', Number(ssdeepExeFPR), Number(sdhashExeFPR), 0],
          ['Dlldom', Number(ssdeepDllFPR), Number(sdhashDllFPR), 0]
        ]);
		  

        var options = {
          chart: {
            title: ' ',
            subtitle: ' ',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('FPR_chart'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>


	<?php ///////////////////////////////////////Docx-Text Together starts/////////////////////////////////////////////////// ?>
	
	
	<script type="text/javascript">

		 var ssdeepExeFNR="<?php echo round($_GET['ssdeepExeFNR'],2); ?>";
		 var ssdeepDllFNR="<?php echo round($_GET['ssdeepDllFNR'],2); ?>";
		 var sdhashExeFNR="<?php echo round($_GET['sdhashExeFNR'],2); ?>";
		 var sdhashDllFNR="<?php echo round($_GET['sdhashDllFNR'],2); ?>";

		
		
		
	 
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
         
		  var data = google.visualization.arrayToDataTable([
          ['False Negative Rate ', 'ssdeep', 'sdhash', 'mrsh'],
          ['Exe', Number(ssdeepExeFNR), Number(sdhashExeFNR), 0],
		  ['  ', 0, 0, 0],
          ['Dll', Number(ssdeepDllFNR), Number(sdhashDllFNR), 0]
        ]);
		

        var options = {
          chart: {
            title: ' ',
            subtitle: ' ',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('FNR_chart'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
		
    </script>

	<?php /////////////False Positive///////////////// ?>
	
	<script type="text/javascript">

		 var ssdeepExeFPR="<?php echo round($_GET['ssdeepExeFPR'],2); ?>";
		 var ssdeepDllFPR="<?php echo round($_GET['ssdeepDllFPR'],2); ?>";
		 var sdhashExeFPR="<?php echo round($_GET['sdhashExeFPR'],2); ?>";
		 var sdhashDllFPR="<?php echo round($_GET['sdhashDllFPR'],2); ?>";

		
		 
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
         
		  var data = google.visualization.arrayToDataTable([
          ['False Positive Rate', 'ssdeep', 'sdhash', 'mrsh'],
          ['Exeuential', Number(ssdeepExeFPR), Number(sdhashExeFPR), 0],
		  ['  ', 0, 0, 0],
          ['Dll', Number(ssdeepDllFPR), Number(sdhashDllFPR), 0]
		  ]);
		

        var options = {
          chart: {
            title: ' ',
            subtitle: ' ',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('FPR_chart'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
		
    </script>
	
	
	
	
	
	
	<?php ///////////////////////////////////////Docx-Text Together ends///////////////////////////////////////////////////// ?>
	
	
	
 	
	
	
	
	
	
<?php ///////////////////////////////////////////False Postive Rate script ends//////////////////////////////////////////// ?>	
	
	 
	
	 <script type="text/javascript">
		
		 var ssdeepExeFSCORE="<?php echo round($_GET['ssdeepExeFSCORE'],2); ?>";
		 var ssdeepDllFSCORE="<?php echo round($_GET['ssdeepDllFSCORE'],2); ?>";
		 var sdhashExeFSCORE="<?php echo round($_GET['sdhashExeFSCORE'],2); ?>";
		 var sdhashDllFSCORE="<?php echo round($_GET['sdhashDllFSCORE'],2); ?>";
		 
		 
		 
		 
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        /*var data = google.visualization.arrayToDataTable([
          ['F-score', 'ssdeep', 'sdhash', 'mrsh'],
          ['JPEG', 0.48, 0.40, 0],
          ['GIF', 0.47, 0.43, 0],
          ['BMP', 0, 0, 0],
          ['TIFF', 0.41, 0.70, 0]
        ]);*/
		  
		  var data = google.visualization.arrayToDataTable([
          ['F-score ', 'ssdeep', 'sdhash', 'mrsh'],
          ['Exe', Number(ssdeepExeFSCORE), Number(sdhashExeFSCORE), 0],
          ['  ', 0, 0, 0],
          ['DLL', Number(ssdeepDllFSCORE), Number(sdhashDllFSCORE), 0]
		  
        ]);
		  

        var options = {
          chart: {
            title: ' ',
            subtitle: ' ',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('Fscore'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    
    
    
    <script type="text/javascript">
		
		 var ssdeepExeMCC="<?php echo round($_GET['ssdeepExeMCC'],2); ?>";
		 var ssdeepDllMCC="<?php echo round($_GET['ssdeepDllMCC'],2); ?>";
		 var sdhashExeMCC="<?php echo round($_GET['sdhashExeMCC'],2); ?>";
		 var sdhashDllMCC="<?php echo round($_GET['sdhashDllMCC'],2); ?>";
				
		
		 

		 
		 
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        
		  
		  var data = google.visualization.arrayToDataTable([
          ['MCC (Text) \xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0 MCC (DOCX)', 'ssdeep', 'sdhash', 'mrsh'],
          ['EXE', Number(ssdeepExeMCC), Number(sdhashExeMCC), 0],
		  ['  ', 0, 0, 0],
          ['DLL', Number(ssdeepDllMCC), Number(sdhashDllMCC), 0]
          ]);
		  

        var options = {
          chart: {
            title: ' ',
            subtitle: ' ',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('MCC_chart'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    
    
    
    



<script type="text/javascript">
		
		 var ssdeepExePRE="<?php echo round($_GET['ssdeepExePRE'],2); ?>";
		 var ssdeepDllPRE="<?php echo round($_GET['ssdeepDllPRE'],2); ?>";
		 var sdhashExePRE="<?php echo round($_GET['sdhashExePRE'],2); ?>";
		 var sdhashDllPRE="<?php echo round($_GET['sdhashDllPRE'],2); ?>";
	
		 
		 
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        
		  
		  var data = google.visualization.arrayToDataTable([
          ['Precision', 'ssdeep', 'sdhash', 'mrsh'],
          ['Exeuential', Number(ssdeepExePRE), Number(sdhashExePRE), 0],
          ['  ', 0, 0, 0],
		  ['Dlldom', Number(ssdeepDllPRE), Number(sdhashDllPRE), 0]
		  ]);
		  

        var options = {
          chart: {
            title: ' ',
            subtitle: ' ',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('precision'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
	
	
<script type="text/javascript">
		
		 
		 var ssdeepExeRECALL="<?php echo round($_GET['ssdeepExeRECALL'],2); ?>";
		 var ssdeepDllRECALL="<?php echo round($_GET['ssdeepDllRECALL'],2); ?>";
		 var sdhashExeRECALL="<?php echo round($_GET['sdhashExeRECALL'],2); ?>";
		 var sdhashDllRECALL="<?php echo round($_GET['sdhashDllRECALL'],2); ?>";
		
		
		 
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        
		  
		  var data = google.visualization.arrayToDataTable([
          ['Recall', 'ssdeep', 'sdhash', 'mrsh'],
          ['Exeuential', Number(ssdeepExeRECALL), Number(sdhashExeRECALL), 0],
          ['  ', 0, 0, 0],
		  ['Dlldom', Number(ssdeepDllRECALL), Number(sdhashDllRECALL), 0]
           ]);
		  

        var options = {
          chart: {
            title: ' ',
            subtitle: ' ',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('recall'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
	
	
    
    
    
    
    
    <!--//////////////////////////////////////////////////////////////-->
	
    
	
	
	
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
    	    <div id="breadcrumb">Identification of code version ➤ <a href="evaluateSoftwareVersionDetection.php">Test Cases</a> ➤ <a href="result_report_codeIdentification.php?threshold=22"> Comparative Assessment </a></div>
			  <form id="frm" method="get" action="javascript:redirect();">
				 
                 <table  style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'">
                 
                 <?php $index=1; ?>
                 
					 <tr><td colspan="3" style="background-color: #0e375d;color:white; font-size: 18px; height: 30px;text-align:left; vertical-align: middle;padding-top: 10px;padding-left: 10px;"> Identification of code version Test </td></tr>
					 <tr class="" ><td style="width: 9%; text-align: justify;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $index++."." ?></td>
                 <td style="align-content: space-around;text-align: justify; vertical-align: text-top;vertical-align: top;padding: 10px 10px 10px 10px;" colspan="2">This report presents the results of the "Fragment Detection Test". This test identifies the ability of existing schemes to identify the fragment of a file.
                 </td></tr>
				
				 <tr class="push"><td style="width: 9%; text-align: justify;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $index++."." ?></td>
                 <td style="align-content: space-around;text-align: justify;vertical-align: text-top;vertical-align: top;padding: 10px 10px 10px 10px; colspan="2">
                 The Test is performed on the data-set of <?php echo $_GET['numOfExe']; ?> executable files and <?php echo $_GET['numOfDll']; ?> DLL files.
                 	
                 </td></tr>	 
					 <?php 
				 $totalComparision=($_GET['numOfExe'])*($_GET['numOfExe']);
				 $totalComparisionDll=($_GET['numOfDll'])*($_GET['numOfDll']); 
				
				 ?>
                 <tr><td style="width: 9%; text-align: justify;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $index++."." ?>&nbsp;</td><td style="align-content: space-around;text-align: justify;vertical-align: text-top;vertical-align: top;padding: 10px 10px 10px 10px;" colspan="2">(i)&nbsp;&nbsp;Total number of comparision performed by each scheme for exe files: <?php echo $totalComparision; ?> and for DLLs : <?php echo $totalComparisionDll; ?>.<br></td></tr> 
					 
                <!--<tr style="text-align:justify;"><td style="width: 9%; text-align: justify;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php //echo $index++."." ?>&nbsp;</td><td style="align-content: space-around;text-align: justify;" colspan="2"><?php //echo $avgFSCORE; ?> Shown in figure below.</td></tr>
                 <tr><td colspan="3"><div id="FNR_chart_TextDocx" style="width: 700px; height: 400px;margin-left:86px;margin-right: -50px;"></div></td></tr>-->
				 
					 
				<!--<tr style="text-align:justify;"><td style="width: 9%; text-align: justify;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php //echo $index++."." ?>&nbsp;</td><td style="align-content: space-around;text-align: justify;" colspan="2"><?php //echo $avgFSCORE; ?> Shown in figure below.</td></tr>
                 <tr><td colspan="2"><div id="FNR_chart" style="width: 400px; height: 400px;margin-left:86px;margin-right: -50px;"></div></td><td style="border-left: none;"><div id="FNR_chart_Docx" style="width: 400px; height: 400px;margin-left:-50px;"></div></td></tr>	--> 
				
					 
				 <tr style="text-align:justify;"><td style="width: 9%; text-align: justify;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $index++."." ?>&nbsp;</td><td style="align-content: space-around;text-align: justify;"><?php //echo $avgFSCORE; ?> Bar chart shown belows represents the <strong>False Negative Rate</strong> of ssdeep and sdsash for text and docx files resepectively. The results obtained from ssdeep has more False Netaive than sdhash in case of both textand docx files.	</td></tr>
                 <tr><td colspan="2"><div id="FNR_chart" style="width: 700px; height: 400px;margin-left:86px;"></div></td></tr>	 
					 
					 
				<tr style="text-align:justify;"><td style="width: 9%; text-align: justify;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $index++."." ?>&nbsp;</td><td style="align-content: space-around;text-align: justify;"><?php //echo $avgFSCORE; ?> Bar graph shown belows represents the <strong>False Positive Rate</strong> of ssdeep and sdsash for text and docx files resepectively. Both ssdeep and sdhash no False Positive for text data-set however in case of docx files sdhash has more False Negative than ssdeep.</td></tr>
                 <tr><td colspan="2"><div id="FPR_chart" style="width: 700px; height: 400px;margin-left:86px;"></div></td></tr>	 
					 
					 
                 
                 <?php 
					 $ssdeepAvgPree=($_GET['ssdeepExePRE']);
					 $sdhashAvgPree=($_GET['sdhashExePRE']);
					 
				 $avgPRE="Results obtained by ";
				 if($ssdeepAvgPree>$sdhashAvgPree){
					 $avgPRE=$avgPRE."ssdeep are more precise than sdhash on an avg.";
				 }else if($ssdeepAvgPree<$sdhashAvgPree){
				 	$avgPRE=$avgPRE."sdhash are more precise than ssdeep on an avg.";
				 
				 }else{
					 $avgPRE=$avgPRE."ssdeep and sdhash both have same prcision in case of text data-set.";
				 }
				 
				 ?>
                
				<tr style="text-align:justify;"><td style="width: 9%; text-align: justify;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $index++."." ?>&nbsp;</td><td style="align-content: space-around;text-align: justify;"><?php echo $avgPRE; ?></td></tr> 
				<tr align="center" style="text-align:center;"><td colspan="2" align="center" style="text-align:center"><div id="precision" style="width: 700px; height: 400px;text-align:center;margin-left:86px;" align="center" ></div></td></tr>	 
                
                
                
               <!-- <tr align="center" style="text-align:center;"><td colspan="2" align="center" style="text-align:center"><div id="precision_Docx" style="width: 500px; height: 400px;text-align:center;margin-left:86px;" align="center" ></div></td></tr>	 -->
                 
                 
                 
                 
				<?php 
					 $ssdeepAvgRecall=$_GET['ssdeepExeRECALL'];
					 $sdhashAvgRecall=$_GET['sdhashExeRECALL'];
					 
				 $avgRecall="Obtained results show that ";
				 if($ssdeepAvgRecall>$sdhashAvgRecall){
					 $avgRecall=$avgRecall."ssdeep has better recall rates than sdhash on an avg.";
				 }else if($ssdeepAvgRecall<$sdhashAvgRecall){
				 	$avgRecall=$avgRecall."sdhash has better recall rates than ssdeep on an avg.";
				 
				 }else{
					 $avgRecall=$avgRecall."ssdeep and sdhash both have same recall.";
				 }
				 
				 ?>
                      <tr style="text-align:justify;"><td style="width: 9%; text-align: justify;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $index++."." ?>&nbsp;</td><td style="align-content: space-around;text-align: justify;"><?php echo $avgRecall; ?></td></tr>
				<tr align="center" style="text-align:center;"><td colspan="2" align="center" style="text-align:center"><div id="recall" style="width: 700px; height: 400px;text-align:center;margin-left:86px;" align="center" ></div></td></tr>
                
                
                <!--<tr align="center" style="text-align:center;"><td colspan="2" align="center" style="text-align:center"><div id="recall_Docx" style="width: 500px; height: 400px;text-align:center;margin-left:86px;" align="center" ></div></td></tr>-->	 	 
					 
					 
                 
                 <?php 
				  /*$ssdeepACC=$_GET['ssdeepJpegACC']+$_GET['ssdeepBmpACC']+$_GET['ssdeepGifACC']+$_GET['ssdeepTiffACC']/4;
				  $sdhashACC=$_GET['sdhashJpegACC']+$_GET['sdhashBmpACC']+$_GET['sdhashGifACC']+$_GET['sdhashTiffACC']/4;
				  $avgACC="Results produced by ";
				
				 
				 if($ssdeepACC>$sdhashACC){
					 $avgACC=$avgACC."ssdeep are more accurate than sdhash on an avg.";
				 }else{
				 	$avgACC=$avgACC."sdhash are more accurate than ssdeep on an avg.";
				 
				 }*/
				 
				  ?>
                  <!--<tr style="text-align:justify;"><td style="width: 9%; text-align: justify;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "3."; ?>&nbsp;</td>
                  <td style="align-content: space-around;text-align: justify;"><?php echo $avgACC; ?> Shown below in fig below.</td></tr>
                 <tr align="center" style="text-align:center;"><td colspan="2" align="center" style="text-align:center"><div id="ACC_chart" style="width: 600px; height: 300px;text-align:center;margin-left:86px;" align="center" ></div></td></tr>-->
					 
				<!--<tr><td colspan="2"><div id="ACC_chart_pptx" style="width: 600px; height: 300px;margin-left:86px;"></div></td></tr>-->	 
                 
				<!--<tr style="text-align:justify;"><td style="width: 9%; text-align: justify;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php //echo $index++."." ?>&nbsp;</td><td style="align-content: space-around;text-align: justify;"><?php //echo $avgFSCORE; ?> Shown in figure below--------------------------------------------------.</td></tr>
                 <tr><td colspan="2"><div id="FPR_chart" style="width: 500px; height: 400px;margin-left:86px;"></div></td></tr>
					 
				<tr style="text-align:justify;"><td style="width: 9%; text-align: justify;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php //echo $index++."." ?>&nbsp;</td><td style="align-content: space-around;text-align: justify;"><?php //echo $avgFSCORE; ?> Shown in figure below.</td></tr>
                 <tr><td colspan="2"><div id="FPR_chart_Docx" style="width: 500px; height: 400px;margin-left:86px;"></div></td></tr>
					--> 
					 
				
				
             
                 
                 <?php 
				  $ssdeepFSCORE=$_GET['ssdeepExeFSCORE'];
				  $sdhashFSCORE=$_GET['sdhashExeFSCORE'];
				  $avgFSCORE="<strong>F-score</strong> represents test's accuracy, from the results we can conclude that  ";
				
				 
				 if($ssdeepFSCORE>$sdhashFSCORE){
					 $avgFSCORE=$avgFSCORE."ssdeep provides more accurate results than sdhash.";
				 }else{
				 	$avgFSCORE=$avgFSCORE."sdhash provides more accurate results than ssdeep.";
				 
				 }
				 
				  ?>

                 
                  <tr style="text-align:justify;"><td style="width: 9%; text-align: justify;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $index++."." ?>&nbsp;</td><td style="align-content: space-around;text-align: justify;"><?php echo $avgFSCORE; ?> </td></tr>
                 <tr><td colspan="2"><div id="Fscore" style="width: 700px; height: 400px;margin-left:86px;"></div></td></tr>
                 
                 
                 
				
                 
                 
                 <tr style="text-align:justify;"><td><?php echo $index++."." ?>&nbsp;</td><td>Figure below shows the <strong>Matthews correlation coefficient (MCC)</strong> comparision of both ssdeep and sdhash.</td></tr>
                 <tr><td colspan="2"><div id="MCC_chart" style="width: 700px; height: 400px;margin-left:86px;"></div></div></td></tr>
                 
                 
                 
			     <tr align="right"><td  colspan="2" align="right" ><input type="submit" style="margin-left:50%" value="Back"  onClick="location.href = 'result_report_codeIdentification.php?threshold=22';"></td></tr>
                 
                 
                 
                 
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
