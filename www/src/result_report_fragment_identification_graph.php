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
		
		 var ssdeepSeqFPR="<?php echo round($_GET['ssdeepSeqFPR'],2); ?>";
		 var ssdeepRanFPR="<?php echo round($_GET['ssdeepRanFPR'],2); ?>";
		 var sdhashSeqFPR="<?php echo round($_GET['sdhashSeqFPR'],2); ?>";
		 var sdhashRanFPR="<?php echo round($_GET['sdhashRanFPR'],2); ?>";
		 
		// alert(sdhashRanFPR);
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
         
		  var data = google.visualization.arrayToDataTable([
          ['False Positive Rate (Text)', 'ssdeep', 'sdhash', 'mrsh'],
          ['Sequential', Number(ssdeepSeqFPR), Number(sdhashSeqFPR), 0],
          ['Random', Number(ssdeepRanFPR), Number(sdhashRanFPR), 0]
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

		 var ssdeepSeqFNR="<?php echo round($_GET['ssdeepSeqFNR'],2); ?>";
		 var ssdeepRanFNR="<?php echo round($_GET['ssdeepRanFNR'],2); ?>";
		 var sdhashSeqFNR="<?php echo round($_GET['sdhashSeqFNR'],2); ?>";
		 var sdhashRanFNR="<?php echo round($_GET['sdhashRanFNR'],2); ?>";

		
		 var ssdeepSeqFNRDocx="<?php echo round($_GET['ssdeepSeqFNRDocx'],5); ?>";
		 var ssdeepRanFNRDocx="<?php echo round($_GET['ssdeepRanFNRDocx'],5); ?>";
		 var sdhashSeqFNRDocx="<?php echo round($_GET['sdhashSeqFNRDocx'],5); ?>";
		 var sdhashRanFNRDocx="<?php echo round($_GET['sdhashRanFNRDocx'],5); ?>";
		
	 
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
         
		  var data = google.visualization.arrayToDataTable([
          ['False Negative Rate (Text) \xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0 False Negative Rate (Docx)', 'ssdeep', 'sdhash', 'mrsh'],
          ['Sequential', Number(ssdeepSeqFNR), Number(sdhashSeqFNR), 0],
          ['Random', Number(ssdeepRanFNR), Number(sdhashRanFNR), 0],
		  ['  ', 0, 0, 0],  
		  ['Sequential', Number(ssdeepSeqFNRDocx), Number(sdhashSeqFNRDocx), 0],
          ['Random', Number(ssdeepRanFNRDocx), Number(sdhashRanFNRDocx), 0]
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

		 var ssdeepSeqFPR="<?php echo round($_GET['ssdeepSeqFPR'],2); ?>";
		 var ssdeepRanFPR="<?php echo round($_GET['ssdeepRanFPR'],2); ?>";
		 var sdhashSeqFPR="<?php echo round($_GET['sdhashSeqFPR'],2); ?>";
		 var sdhashRanFPR="<?php echo round($_GET['sdhashRanFPR'],2); ?>";

		
		 var ssdeepSeqFPRDocx="<?php echo round($_GET['ssdeepSeqFPRDocx'],5); ?>";
		 var ssdeepRanFPRDocx="<?php echo round($_GET['ssdeepRanFPRDocx'],5); ?>";
		 var sdhashSeqFPRDocx="<?php echo round($_GET['sdhashSeqFPRDocx'],5); ?>";
		 var sdhashRanFPRDocx="<?php echo round($_GET['sdhashRanFPRDocx'],5); ?>";
		
	 
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
         
		  var data = google.visualization.arrayToDataTable([
          ['False Positive Rate (Docx) \xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0 False Positive Rate (Docx)', 'ssdeep', 'sdhash', 'mrsh'],
          ['Sequential', Number(ssdeepSeqFPR), Number(sdhashSeqFPR), 0],
          ['Random', Number(ssdeepRanFPR), Number(sdhashRanFPR), 0],
		  ['  ', 0, 0, 0],  
		  ['Sequential', Number(ssdeepSeqFPRDocx), Number(sdhashSeqFPRDocx), 0],
          ['Random', Number(ssdeepRanFPRDocx), Number(sdhashRanFPRDocx), 0]
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
	
	
	
	
	
	

	 
	
	 <script type="text/javascript">
		
		 var ssdeepSeqFSCORE="<?php echo round($_GET['ssdeepSeqFSCORE'],2); ?>";
		 var ssdeepRanFSCORE="<?php echo round($_GET['ssdeepRanFSCORE'],2); ?>";
		 var sdhashSeqFSCORE="<?php echo round($_GET['sdhashSeqFSCORE'],2); ?>";
		 var sdhashRanFSCORE="<?php echo round($_GET['sdhashRanFSCORE'],2); ?>";
		 
		 var ssdeepSeqFSCOREDocx="<?php echo round($_GET['ssdeepSeqFSCOREDocx'],2); ?>";
		 var ssdeepRanFSCOREDocx="<?php echo round($_GET['ssdeepRanFSCOREDocx'],2); ?>";
		 var sdhashSeqFSCOREDocx="<?php echo round($_GET['sdhashSeqFSCOREDocx'],2); ?>";
		 var sdhashRanFSCOREDocx="<?php echo round($_GET['sdhashRanFSCOREDocx'],2); ?>";

		 
		 
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
          ['F-score (Text)  \xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0 F-score (Docx)', 'ssdeep', 'sdhash', 'mrsh'],
          ['Sequential', Number(ssdeepSeqFSCORE), Number(sdhashSeqFSCORE), 0],
          ['Random', Number(ssdeepRanFSCORE), Number(sdhashRanFSCORE), 0],
		  ['  ', 0, 0, 0],
          ['Sequential', Number(ssdeepSeqFSCOREDocx), Number(sdhashSeqFSCOREDocx), 0],
          ['Random', Number(ssdeepRanFSCOREDocx), Number(sdhashRanFSCOREDocx), 0]
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
		
		 var ssdeepSeqMCC="<?php echo round($_GET['ssdeepSeqMCC'],2); ?>";
		 var ssdeepRanMCC="<?php echo round($_GET['ssdeepRanMCC'],2); ?>";
		 var sdhashSeqMCC="<?php echo round($_GET['sdhashSeqMCC'],2); ?>";
		 var sdhashRanMCC="<?php echo round($_GET['sdhashRanMCC'],2); ?>";
				
		 var ssdeepSeqMCCDocx="<?php echo round($_GET['ssdeepSeqMCCDocx'],2); ?>";
		 var ssdeepRanMCCDocx="<?php echo round($_GET['ssdeepRanMCCDocx'],2); ?>";
		 var sdhashSeqMCCDocx="<?php echo round($_GET['sdhashSeqMCCDocx'],2); ?>";
		 var sdhashRanMCCDocx="<?php echo round($_GET['sdhashRanMCCDocx'],2); ?>";
		 

		 
		 
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        
		  
		  var data = google.visualization.arrayToDataTable([
          ['MCC (Text) \xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0 MCC (DOCX)', 'ssdeep', 'sdhash', 'mrsh'],
          ['Sequential', Number(ssdeepSeqMCC), Number(sdhashSeqMCC), 0],
          ['Random', Number(ssdeepRanMCC), Number(sdhashRanMCC), 0],
		  ['  ', 0, 0, 0],
          ['Sequential', Number(ssdeepSeqMCCDocx), Number(sdhashSeqMCCDocx), 0],
          ['Random', Number(ssdeepRanMCCDocx), Number(sdhashRanMCCDocx), 0]
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
		
		 var ssdeepSeqPRE="<?php echo round($_GET['ssdeepSeqPRE'],2); ?>";
		 var ssdeepRanPRE="<?php echo round($_GET['ssdeepRanPRE'],2); ?>";
		 var sdhashSeqPRE="<?php echo round($_GET['sdhashSeqPRE'],2); ?>";
		 var sdhashRanPRE="<?php echo round($_GET['sdhashRanPRE'],2); ?>";
	
		 var ssdeepSeqPREDocx="<?php echo round($_GET['ssdeepSeqPREDocx'],2); ?>";
		 var ssdeepRanPREDocx="<?php echo round($_GET['ssdeepRanPREDocx'],2); ?>";
		 var sdhashSeqPREDocx="<?php echo round($_GET['sdhashSeqPREDocx'],2); ?>";
		 var sdhashRanPREDocx="<?php echo round($_GET['sdhashRanPREDocx'],2); ?>";
		 
		 
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        
		  
		  var data = google.visualization.arrayToDataTable([
          ['Precision (TEXT) \xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0 Precision (DOCX)', 'ssdeep', 'sdhash', 'mrsh'],
          ['Sequential', Number(ssdeepSeqPRE), Number(sdhashSeqPRE), 0],
          ['Random', Number(ssdeepRanPRE), Number(sdhashRanPRE), 0],
		  ['  ', 0, 0, 0],
		  ['Sequential', Number(ssdeepSeqPREDocx), Number(sdhashSeqPREDocx), 0],
          ['Random', Number(ssdeepRanPREDocx), Number(sdhashRanPREDocx), 0]
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
		
		 
		 var ssdeepSeqRECALL="<?php echo round($_GET['ssdeepSeqRECALL'],2); ?>";
		 var ssdeepRanRECALL="<?php echo round($_GET['ssdeepRanRECALL'],2); ?>";
		 var sdhashSeqRECALL="<?php echo round($_GET['sdhashSeqRECALL'],2); ?>";
		 var sdhashRanRECALL="<?php echo round($_GET['sdhashRanRECALL'],2); ?>";
		
		 var ssdeepSeqRECALLDocx="<?php echo round($_GET['ssdeepSeqRECALLDocx'],2); ?>";
		 var ssdeepRanRECALLDocx="<?php echo round($_GET['ssdeepRanRECALLDocx'],2); ?>";
		 var sdhashSeqRECALLDocx="<?php echo round($_GET['sdhashSeqRECALLDocx'],2); ?>";
		 var sdhashRanRECALLDocx="<?php echo round($_GET['sdhashRanRECALLDocx'],2); ?>";
		 
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        
		  
		  var data = google.visualization.arrayToDataTable([
          ['Recall (TEXT) \xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0 Recall (DOCX)', 'ssdeep', 'sdhash', 'mrsh'],
          ['Sequential', Number(ssdeepSeqRECALL), Number(sdhashSeqRECALL), 0],
          ['Random', Number(ssdeepRanRECALL), Number(sdhashRanRECALL), 0],
		  ['  ', 0, 0, 0],
		  ['Sequential', Number(ssdeepSeqRECALLDocx), Number(sdhashSeqRECALLDocx), 0],
          ['Random', Number(ssdeepRanRECALLDocx), Number(sdhashRanRECALLDocx), 0]
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
    	    <div id="breadcrumb">Fragment Identification ➤ <a href="evaluateFragment.php">Test Cases</a> ➤ <a href="result_report_text.php?threshold=22">Comparative Assessment</a></div> 
			  <form id="frm" method="get" action="javascript:redirect();">
				 
                 <table  style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'">
                 
                 <?php $index=1; ?>
                 
					 <tr><td colspan="3" style="background-color: #0e375d;color:white; font-size: 18px; height: 30px;text-align:left; vertical-align: middle;padding-top: 10px;padding-left: 10px;">Fragment Correlation Test </td></tr>
					 <tr class="" ><td style="width: 9%; text-align: justify;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $index++."." ?></td>
                 <td style="align-content: space-around;text-align: justify; vertical-align: text-top;vertical-align: top;padding: 10px 10px 10px 10px;" colspan="2">This report presents the results of the "Fragment Detection Test". This test identifies the ability of existing schemes to identify the fragment of a file.
                 </td></tr>
				
				 <tr class="push"><td style="width: 9%; text-align: justify;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $index++."." ?></td>
                 <td style="align-content: space-around;text-align: justify;vertical-align: text-top;vertical-align: top;padding: 10px 10px 10px 10px; colspan="2">
                 The Test is performed on the data-set of <br>
					 (i)&nbsp;&nbsp;<?php echo $_GET['numOfSeqText']+$_GET['numOfRanText']; ?> fragment files (<?php echo $_GET['numOfSeqText']; ?> sequential fragment and <?php echo $_GET['numOfRanText']; ?> randomly generated fragment), generated by <?php echo (($_GET['numOfText1']+$_GET['numOfText2'])/2); ?>  Text files. Each text file generates 24 sequencial fragment file and 24 random fragment files of following sizes: 95%, 95%, 85%, 80%, 75%, 70%, 65%, 60%, 55%, 50%, 45%, 40%, 35%, 30%, 25%, 20%, 15%, 10%, 5%, 4%, 3%, 2%, 1%, <?php echo "<"; ?>1%.
                 	<br>
					 (ii) <?php echo $_GET['numOfSeqDocx']+$_GET['numOfRanDocx']; ?> fragment files (<?php echo $_GET['numOfSeqDocx']; ?> sequential fragment and <?php echo $_GET['numOfRanDocx']; ?> randomly generated fragment), generated by <?php echo (($_GET['numOfDocx1']+$_GET['numOfDocx2'])/2); ?> Docx files. Each docx file generates 24 sequencial fragment file and 24 random fragment files of following sizes: 95%, 90%, 85%, 80%, 75%, 70%, 65%, 60%, 55%, 50%, 45%, 40%, 35%, 30%, 25%, 20%, 15%, 10%, 5%, 4%, 3%, 2%, 1%, <?php echo "<"; ?>1%.
                 
                 </td></tr>	 
					 <?php 
				 $totalComparision=($_GET['numOfText1']*$_GET['numOfSeqText'])+($_GET['numOfText2']*$_GET['numOfSeqText']);
					 
				$totalComparisionDocx=($_GET['numOfDocx1']*$_GET['numOfSeqDocx'])+($_GET['numOfDocx2']*$_GET['numOfSeqDocx']);	 
				 
				 ?>
                 <tr><td style="width: 9%; text-align: justify;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $index++."." ?>&nbsp;</td><td style="align-content: space-around;text-align: justify;vertical-align: text-top;vertical-align: top;padding: 10px 10px 10px 10px;" colspan="2">(i)&nbsp;&nbsp;Total number of comparision performed by each scheme for text files: <?php echo $totalComparision; ?>.<br>(ii) Total number of comparision performed by each scheme for docx files: <?php echo $totalComparisionDocx; ?>.</td></tr> 
					 
                <!--<tr style="text-align:justify;"><td style="width: 9%; text-align: justify;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php //echo $index++."." ?>&nbsp;</td><td style="align-content: space-around;text-align: justify;" colspan="2"><?php //echo $avgFSCORE; ?> Shown in figure below.</td></tr>
                 <tr><td colspan="3"><div id="FNR_chart_TextDocx" style="width: 700px; height: 400px;margin-left:86px;margin-right: -50px;"></div></td></tr>-->
				 
					 
				<!--<tr style="text-align:justify;"><td style="width: 9%; text-align: justify;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php //echo $index++."." ?>&nbsp;</td><td style="align-content: space-around;text-align: justify;" colspan="2"><?php //echo $avgFSCORE; ?> Shown in figure below.</td></tr>
                 <tr><td colspan="2"><div id="FNR_chart" style="width: 400px; height: 400px;margin-left:86px;margin-right: -50px;"></div></td><td style="border-left: none;"><div id="FNR_chart_Docx" style="width: 400px; height: 400px;margin-left:-50px;"></div></td></tr>	--> 
				
					 
				 <tr style="text-align:justify;"><td style="width: 9%; text-align: justify;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $index++."." ?>&nbsp;</td><td style="align-content: space-around;text-align: justify;"><?php //echo $avgFSCORE; ?> Bar chart shown belows represents the <strong>False Negative Rate</strong> of ssdeep and sdsash for text and docx files resepectively. The results obtained from ssdeep has more False Netaive than sdhash in case of both textand docx files.	</td></tr>
                 <tr><td colspan="2"><div id="FNR_chart" style="width: 700px; height: 400px;margin-left:86px;"></div></td></tr>	 
					 
					 
				<tr style="text-align:justify;"><td style="width: 9%; text-align: justify;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $index++."." ?>&nbsp;</td><td style="align-content: space-around;text-align: justify;"><?php //echo $avgFSCORE; ?> Bar graph shown belows represents the <strong>False Positive Rate</strong> of ssdeep and sdsash for text and docx files resepectively. Both ssdeep and sdhash no False Positive for text data-set however in case of docx files sdhash has more False Negative than ssdeep.</td></tr>
                 <tr><td colspan="2"><div id="FPR_chart" style="width: 700px; height: 400px;margin-left:86px;"></div></td></tr>	 
					 
					 
                 
                 <?php 
					 $ssdeepAvgPree=($_GET['ssdeepSeqPRE']+$_GET['ssdeepRanPRE'])/2;
					 $sdhashAvgPree=($_GET['sdhashSeqPRE']+$_GET['sdhashRanPRE'])/2;
					 
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
					 $ssdeepAvgRecall=($_GET['ssdeepSeqRECALL']+$_GET['ssdeepRanRECALL'])/2;
					 $sdhashAvgRecall=($_GET['sdhashSeqRECALL']+$_GET['sdhashRanRECALL'])/2;
					 
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
				  $ssdeepFSCORE=$_GET['ssdeepSeqFSCORE']+$_GET['ssdeepRanFSCORE']/2;
				  $sdhashFSCORE=$_GET['sdhashSeqFSCORE']+$_GET['sdhashRanFSCORE']/2;
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
                 <tr><td colspan="2"><div id="MCC_chart" style="width: 700px; height: 400px;margin-left:86px;"></div></div><br></td></tr>
                 
                 <tr align="right"><td  colspan="2" align="right" ><input type="submit" style="margin-left:50%" value="Back"  onClick="location.href = 'result_report_text.php?threshold=22';"></td></tr>
                 
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
