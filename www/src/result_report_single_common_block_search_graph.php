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
	
	
	 
	
	 <script type="text/javascript">
		
		 var ssdeepJpegFSCORE="<?php echo round($_GET['ssdeepJpegFSCORE'],2); ?>";
		 var ssdeepBmpFSCORE="<?php echo round($_GET['ssdeepBmpFSCORE'],2); ?>";
		 var ssdeepGifFSCORE="<?php echo round($_GET['ssdeepGifFSCORE'],2); ?>";
		 var ssdeepTiffFSCORE="<?php echo round($_GET['ssdeepTiffFSCORE'],2); ?>";
		 var sdhashJpegFSCORE="<?php echo round($_GET['sdhashJpegFSCORE'],2); ?>";
		 var sdhashBmpFSCORE="<?php echo round($_GET['sdhashBmpFSCORE'],2); ?>";
		 var sdhashGifFSCORE="<?php echo round($_GET['sdhashGifFSCORE'],2); ?>";
		 var sdhashTiffFSCORE="<?php echo round($_GET['sdhashTiffFSCORE'],2); ?>";
		
		 
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
          ['F-score (DOCX)', 'ssdeep', 'sdhash', 'mrsh'],
          ['JPEG', Number(ssdeepJpegFSCORE), Number(sdhashJpegFSCORE), 0],
          ['BMP', Number(ssdeepBmpFSCORE), Number(sdhashBmpFSCORE), 0],
          ['GIF', Number(ssdeepGifFSCORE), Number(sdhashGifFSCORE), 0],
          ['TIFF', Number(ssdeepTiffFSCORE), Number(sdhashTiffFSCORE), 0]
        ]);
		  

        var options = {
          chart: {
            title: ' ',
            subtitle: ' ',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    
    
    
    <script type="text/javascript">
		
		 var ssdeepJpegMCC="<?php echo round($_GET['ssdeepJpegMCC'],2); ?>";
		 var ssdeepBmpMCC="<?php echo round($_GET['ssdeepBmpMCC'],2); ?>";
		 var ssdeepGifMCC="<?php echo round($_GET['ssdeepGifMCC'],2); ?>";
		 var ssdeepTiffMCC="<?php echo round($_GET['ssdeepTiffMCC'],2); ?>";
		 var sdhashJpegMCC="<?php echo round($_GET['sdhashJpegMCC'],2); ?>";
		 var sdhashBmpMCC="<?php echo round($_GET['sdhashBmpMCC'],2); ?>";
		 var sdhashGifMCC="<?php echo round($_GET['sdhashGifMCC'],2); ?>";
		 var sdhashTiffMCC="<?php echo round($_GET['sdhashTiffMCC'],2); ?>";
		
		 
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        
		  
		  var data = google.visualization.arrayToDataTable([
          ['MCC (DOCX)', 'ssdeep', 'sdhash', 'mrsh'],
          ['JPEG', Number(ssdeepJpegMCC), Number(sdhashJpegMCC), 0],
          ['BMP', Number(ssdeepBmpMCC), Number(sdhashBmpMCC), 0],
          ['GIF', Number(ssdeepGifMCC), Number(sdhashGifMCC), 0],
          ['TIFF', Number(ssdeepTiffMCC), Number(sdhashTiffMCC), 0]
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
		
		 var ssdeepJpegPRE="<?php echo round($_GET['ssdeepJpegPRE'],2); ?>";
		 var ssdeepBmpPRE="<?php echo round($_GET['ssdeepBmpPRE'],2); ?>";
		 var ssdeepGifPRE="<?php echo round($_GET['ssdeepGifPRE'],2); ?>";
		 var ssdeepTiffPRE="<?php echo round($_GET['ssdeepTiffPRE'],2); ?>";
		 var sdhashJpegPRE="<?php echo round($_GET['sdhashJpegPRE'],2); ?>";
		 var sdhashBmpPRE="<?php echo round($_GET['sdhashBmpPRE'],2); ?>";
		 var sdhashGifPRE="<?php echo round($_GET['sdhashGifPRE'],2); ?>";
		 var sdhashTiffPRE="<?php echo round($_GET['sdhashTiffPRE'],2); ?>";
		
		 
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
          ['PRECISION (DOCX)', 'ssdeep', 'sdhash', 'mrsh'],
          ['JPEG', Number(ssdeepJpegPRE), Number(sdhashJpegPRE), 0],
          ['BMP', Number(ssdeepBmpPRE), Number(sdhashBmpPRE), 0],
          ['GIF', Number(ssdeepGifPRE), Number(sdhashGifPRE), 0],
          ['TIFF', Number(ssdeepTiffPRE), Number(sdhashTiffPRE), 0]
        ]);
		  

        var options = {
          chart: {
            title: ' ',
            subtitle: ' ',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('PRE_chart'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    

    
	
	
	
	
	<script type="text/javascript">
		
		 var ssdeepPPTXJpegFSCORE="<?php echo round($_GET['ssdeepPPTXJpegFSCORE'],2); ?>";
		 var ssdeepPPTXBmpFSCORE="<?php echo round($_GET['ssdeepPPTXBmpFSCORE'],2); ?>";
		 var ssdeepPPTXGifFSCORE="<?php echo round($_GET['ssdeepPPTXGifFSCORE'],2); ?>";
		 var ssdeepPPTXTiffFSCORE="<?php echo round($_GET['ssdeepPPTXTiffFSCORE'],2); ?>";
		 var sdhashPPTXJpegFSCORE="<?php echo round($_GET['sdhashPPTXJpegFSCORE'],2); ?>";
		 var sdhashPPTXBmpFSCORE="<?php echo round($_GET['sdhashPPTXBmpFSCORE'],2); ?>";
		 var sdhashPPTXGifFSCORE="<?php echo round($_GET['sdhashPPTXGifFSCORE'],2); ?>";
		 var sdhashPPTXTiffFSCORE="<?php echo round($_GET['sdhashPPTXTiffFSCORE'],2); ?>";
		
		 
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        /*var data = google.visualization.arrayToDataTable([
          ['F-score', 'ssdeepPPTX', 'sdhash', 'mrsh'],
          ['JPEG', 0.48, 0.40, 0],
          ['GIF', 0.47, 0.43, 0],
          ['BMP', 0, 0, 0],
          ['TIFF', 0.41, 0.70, 0]
        ]);*/
		  
		  var data = google.visualization.arrayToDataTable([
          ['F-score (PPTX)', 'ssdeep', 'sdhash', 'mrsh'],
          ['JPEG', Number(ssdeepPPTXJpegFSCORE), Number(sdhashPPTXJpegFSCORE), 0],
          ['BMP', Number(ssdeepPPTXBmpFSCORE), Number(sdhashPPTXBmpFSCORE), 0],
          ['GIF', Number(ssdeepPPTXGifFSCORE), Number(sdhashPPTXGifFSCORE), 0],
          ['TIFF', Number(ssdeepPPTXTiffFSCORE), Number(sdhashPPTXTiffFSCORE), 0]
        ]);
		  

        var options = {
          chart: {
            title: ' ',
            subtitle: ' ',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material_pptx'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    
    
    
    <script type="text/javascript">
		
		 var ssdeepPPTXJpegMCC="<?php echo round($_GET['ssdeepPPTXJpegMCC'],2); ?>";
		 var ssdeepPPTXBmpMCC="<?php echo round($_GET['ssdeepPPTXBmpMCC'],2); ?>";
		 var ssdeepPPTXGifMCC="<?php echo round($_GET['ssdeepPPTXGifMCC'],2); ?>";
		 var ssdeepPPTXTiffMCC="<?php echo round($_GET['ssdeepPPTXTiffMCC'],2); ?>";
		 var sdhashPPTXJpegMCC="<?php echo round($_GET['sdhashPPTXJpegMCC'],2); ?>";
		 var sdhashPPTXBmpMCC="<?php echo round($_GET['sdhashPPTXBmpMCC'],2); ?>";
		 var sdhashPPTXGifMCC="<?php echo round($_GET['sdhashPPTXGifMCC'],2); ?>";
		 var sdhashPPTXTiffMCC="<?php echo round($_GET['sdhashPPTXTiffMCC'],2); ?>";
		
		 
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        
		  
		  var data = google.visualization.arrayToDataTable([
          ['MCC (PPTX)', 'ssdeep', 'sdhash', 'mrsh'],
          ['JPEG', Number(ssdeepPPTXJpegMCC), Number(sdhashPPTXJpegMCC), 0],
          ['BMP', Number(ssdeepPPTXBmpMCC), Number(sdhashPPTXBmpMCC), 0],
          ['GIF', Number(ssdeepPPTXGifMCC), Number(sdhashPPTXGifMCC), 0],
          ['TIFF', Number(ssdeepPPTXTiffMCC), Number(sdhashPPTXTiffMCC), 0]
        ]);
		  

        var options = {
          chart: {
            title: ' ',
            subtitle: ' ',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('MCC_chart_pptx'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    



<script type="text/javascript">
		
		 var ssdeepPPTXJpegPRE="<?php echo round($_GET['ssdeepPPTXJpegPRE'],2); ?>";
		 var ssdeepPPTXBmpPRE="<?php echo round($_GET['ssdeepPPTXBmpPRE'],2); ?>";
		 var ssdeepPPTXGifPRE="<?php echo round($_GET['ssdeepPPTXGifPRE'],2); ?>";
		 var ssdeepPPTXTiffPRE="<?php echo round($_GET['ssdeepPPTXTiffPRE'],2); ?>";
		 var sdhashPPTXJpegPRE="<?php echo round($_GET['sdhashPPTXJpegPRE'],2); ?>";
		 var sdhashPPTXBmpPRE="<?php echo round($_GET['sdhashPPTXBmpPRE'],2); ?>";
		 var sdhashPPTXGifPRE="<?php echo round($_GET['sdhashPPTXGifPRE'],2); ?>";
		 var sdhashPPTXTiffPRE="<?php echo round($_GET['sdhashPPTXTiffPRE'],2); ?>";
		
		 
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
          ['PRECISION (PPTX)', 'ssdeep', 'sdhash', 'mrsh'],
          ['JPEG', Number(ssdeepPPTXJpegPRE), Number(sdhashPPTXJpegPRE), 0],
          ['BMP', Number(ssdeepPPTXBmpPRE), Number(sdhashPPTXBmpPRE), 0],
          ['GIF', Number(ssdeepPPTXGifPRE), Number(sdhashPPTXGifPRE), 0],
          ['TIFF', Number(ssdeepPPTXTiffPRE), Number(sdhashPPTXTiffPRE), 0]
			]);


			var options = {
			  chart: {
				title: ' ',
				subtitle: ' ',
			  }
			};

			var chart = new google.charts.Bar(document.getElementById('PRE_chart_pptx'));

			chart.draw(data, google.charts.Bar.convertOptions(options));
		  }
		</script>

	
	
	
	<script type="text/javascript">
		
		 var ssdeepJpegRECALL="<?php echo round($_GET['ssdeepJpegRECALL'],2); ?>";
		 var ssdeepBmpRECALL="<?php echo round($_GET['ssdeepBmpRECALL'],2); ?>";
		 var ssdeepGifRECALL="<?php echo round($_GET['ssdeepGifRECALL'],2); ?>";
		 var ssdeepTiffRECALL="<?php echo round($_GET['ssdeepTiffRECALL'],2); ?>";
		 var sdhashJpegRECALL="<?php echo round($_GET['sdhashJpegRECALL'],2); ?>";
		 var sdhashBmpRECALL="<?php echo round($_GET['sdhashBmpRECALL'],2); ?>";
		 var sdhashGifRECALL="<?php echo round($_GET['sdhashGifRECALL'],2); ?>";
		 var sdhashTiffRECALL="<?php echo round($_GET['sdhashTiffRECALL'],2); ?>";
		
		 
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
          ['RECALL (DOCX)', 'ssdeep', 'sdhash', 'mrsh'],
          ['JPEG', Number(ssdeepJpegRECALL), Number(sdhashJpegRECALL), 0],
          ['BMP', Number(ssdeepBmpRECALL), Number(sdhashBmpRECALL), 0],
          ['GIF', Number(ssdeepGifRECALL), Number(sdhashGifRECALL), 0],
          ['TIFF', Number(ssdeepTiffRECALL), Number(sdhashTiffRECALL), 0]
        ]);
		  

        var options = {
          chart: {
            title: ' ',
            subtitle: ' ',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('RECALL_chart'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    
    
<script type="text/javascript">
		
		 var ssdeepPPTXJpegRECALL="<?php echo round($_GET['ssdeepPPTXJpegRECALL'],2); ?>";
		 var ssdeepPPTXBmpRECALL="<?php echo round($_GET['ssdeepPPTXBmpRECALL'],2); ?>";
		 var ssdeepPPTXGifRECALL="<?php echo round($_GET['ssdeepPPTXGifRECALL'],2); ?>";
		 var ssdeepPPTXTiffRECALL="<?php echo round($_GET['ssdeepPPTXTiffRECALL'],2); ?>";
		 var sdhashPPTXJpegRECALL="<?php echo round($_GET['sdhashPPTXJpegRECALL'],2); ?>";
		 var sdhashPPTXBmpRECALL="<?php echo round($_GET['sdhashPPTXBmpRECALL'],2); ?>";
		 var sdhashPPTXGifRECALL="<?php echo round($_GET['sdhashPPTXGifRECALL'],2); ?>";
		 var sdhashPPTXTiffRECALL="<?php echo round($_GET['sdhashPPTXTiffRECALL'],2); ?>";
		
		 
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
          ['RECALL (PPTX)', 'ssdeep', 'sdhash', 'mrsh'],
          ['JPEG', Number(ssdeepPPTXJpegRECALL), Number(sdhashPPTXJpegRECALL), 0],
          ['BMP', Number(ssdeepPPTXBmpRECALL), Number(sdhashPPTXBmpRECALL), 0],
          ['GIF', Number(ssdeepPPTXGifRECALL), Number(sdhashPPTXGifRECALL), 0],
          ['TIFF', Number(ssdeepPPTXTiffRECALL), Number(sdhashPPTXTiffRECALL), 0]
			]);


			var options = {
			  chart: {
				title: ' ',
				subtitle: ' ',
			  }
			};

			var chart = new google.charts.Bar(document.getElementById('RECALL_chart_pptx'));

			chart.draw(data, google.charts.Bar.convertOptions(options));
		  }
		</script>

    
    
	
	<script>
function redirect(){
	
	var setType = document.getElementById("setType").value;
	var tool = document.getElementById("tool").value;
	var object = document.getElementById("objectType").value;
	
  if((setType == "PPTX") && (tool== "ssdeep") && (object=="JPEG")) {
   document.getElementById('frm').action = 'ssdeepPPTXJpeg.php';
  }else if((setType == "DOCX") && (tool== "ssdeep") && (object=="JPEG")) {
   document.getElementById('frm').action = 'ssdeepDOCXJpeg.php';
  }else if((setType == "PPTX") && (tool== "sdhash") && (object=="JPEG")) {
   document.getElementById('frm').action = 'sdhashPPTXJpeg.php';
  }else if((setType == "DOCX") && (tool== "sdhash") && (object=="JPEG")) {
   document.getElementById('frm').action = 'sdhashDOCXJpeg.php';
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
                
				  //print_main_sidebar_menu_contents();
               ?>
    	    </div>
		    </div>
		  </div>  
          	
    	  <div id="">
    	    <div id="breadcrumb">Embedded Object Identification ➤ <a href="evaluateEmbeddedObject.php">Test Cases</a> ➤ Single Common Object Identification ➤ <a href="result_report_single_common_object_based_search.php?threshold=22">Comparative Assessment</a></div>
			  <form id="frm" method="get" action="javascript:redirect();">
				 
                 <table  style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'">
					 <?php $sn=0; ?>
					 
					 
                 <tr style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center;width: 1000px;"><td colspan="2" style="background-color: #0e375d;color:white; font-size: 18px; height: 30px;text-align:left; vertical-align: middle;padding-top: 10px;padding-left: 10px;">Single Common Object Identification Test</td></tr>
				
					 <tr class=""><td style="width: 9%; text-align: justify;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ++$sn."." ?></td>
                 <td style="align-content: space-around;text-align: justify; vertical-align: text-top;vertical-align: top;padding: 10px 10px 10px 10px;">This report presents the results of the "Single Common Object Identification Test". This test aims to identify the ability of existing schemes to correlate the files containing a common object.</td></tr>	 
					 
					 
                 <tr class="push"><td style="width: 9%; text-align: justify;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ++$sn."." ?></td>
                 <td style="align-content: space-around;text-align: justify; vertical-align: text-top;vertical-align: top;padding: 10px 10px 10px 10px;">Test is performed on the data-set of:<br><br>
                   <strong>i.</strong> <!--<?php echo $_GET['numOfJpegDocx']+$_GET['numOfJpegDocxWithOutImg']; ?> Docx file(<?php echo $_GET['numOfJpegDocx']; ?> docx files with existing images and <?php echo $_GET['numOfJpegDocxWithOutImg']; ?> without any other image except the embedded image) embedded with <?php echo $_GET['numOfJpeg']; ?> Jpeg, <?php echo $_GET['numOfBmpDocx']+$_GET['numOfBmpDocxWithOutImg']; ?> docx files embedded with  <?php echo $_GET['numOfBmp']; ?> Bmp, <?php echo $_GET['numOfTiffDocx']+$_GET['numOfTiffDocxWithOutImg']; ?> docx files embedded with  <?php echo $_GET['numOfTiff']; ?> Tiff and <?php echo $_GET['numOfGifDocx']+$_GET['numOfGifDocxWithOutImg']; ?> docx files embedded with  <?php echo $_GET['numOfGif']; ?> Gif images.-->
					 
					 100 Docx file embedded with 10 Jpeg, 100 docx files embedded with 10 Bmp, 100 docx files embedded with 10 Tiff and 100 docx files embedded with 10 Gif images. 
                 <br>
                 
                 <strong>ii.</strong>. 100 pptx files embedded with 10 Jpeg, 100 pptx files embedded with 10 Bmp, 100 pptx files embedded with 10 Tiff and 100 pptx files embedded with 10 Gif images.
                 
                 </td></tr>
                 
                 <?php 
				 $totalComparision=($_GET['numOfJpegDocx']*$_GET['numOfJpeg'])+($_GET['numOfJpegDocxWithOutImg']*$_GET['numOfJpeg'])+($_GET['numOfBmpDocx']*$_GET['numOfBmp'])+($_GET['numOfBmpDocxWithOutImg']*$_GET['numOfBmp'])+($_GET['numOfTiffDocx']*$_GET['numOfTiff'])+($_GET['numOfTiffDocxWithOutImg']*$_GET['numOfTiff'])+($_GET['numOfGifDocx']*$_GET['numOfGif'])+($_GET['numOfGifDocxWithOutImg']*$_GET['numOfGif']);
				 
				 ?>
                 <tr><td style="width: 9%; text-align: justify;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo ++$sn."."; ?>&nbsp;</td><td style="align-content: space-around;text-align: justify; vertical-align: text-top;vertical-align: top;padding: 10px 10px 10px 10px;">Total number of comparision performed by each scheme <br> <strong>i.</strong> for docx files: 40,000<?php //echo $totalComparision; ?><br> 
                   <strong>ii.</strong> for pptx: 40,000 </td></tr>
                 
                 
                 
                 
                 <?php 
				 $avgPRE="Results obtained by ";
				 if($_GET['ssdeepAvgPre']>$_GET['sdhashAvgPre']){
					 $avgPRE=$avgPRE."ssdeep are more precise than sdhash on an avg.";
				 }else{
				 	$avgPRE=$avgPRE."sdhash are more precise than ssdeep on an avg.";
				 
				 }
				 
				 ?>
                  
                
                 
                 
                 <?php 
				  $ssdeepPRE=$_GET['ssdeepJpegPRE']+$_GET['ssdeepBmpPRE']+$_GET['ssdeepGifPRE']+$_GET['ssdeepTiffPRE']/4;
				  $sdhashPRE=$_GET['sdhashJpegPRE']+$_GET['sdhashBmpPRE']+$_GET['sdhashGifPRE']+$_GET['sdhashTiffPRE']/4;
				  $avgPRE="Results produced by ";
				
				 
				 if($ssdeepPRE>$sdhashPRE){
					 $avgPRE=$avgPRE."ssdeep are more precise than sdhash on an avg. for DOCX.";
				 }else{
				 	$avgPRE=$avgPRE."sdhash are more precise than ssdeep on an avg. for DOCX";
				 
				 }
				 
				  ?>
                  <tr style="text-align:justify;"><td style="width: 9%; text-align: justify;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ++$sn."."; ?>&nbsp;</td>
                  <td style="align-content: space-around;text-align: justify; vertical-align: text-top;vertical-align: top;padding: 10px 10px 10px 10px;"><?php echo $avgPRE; ?> Shown below in fig below.</td></tr>
                 <tr align="center" style="text-align:center;"><td colspan="2" align="center" style="text-align:center"><div id="PRE_chart" style="width: 600px; height: 300px;text-align:center;margin-left:86px;" align="center" ></div></td></tr>
					 
				<tr><td colspan="2"><div id="PRE_chart_pptx" style="width: 600px; height: 300px;margin-left:86px;"></div></td></tr> 
                 
                 <tr style="text-align:justify;"><td style="width: 9%; text-align: justify;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ++$sn."."; ?>&nbsp;</td><td style="align-content: space-around;text-align: justify;"><?php echo $avgPRE; ?></td></tr>
					 
					 
					 
				
                  
                
                 
                 
                 <?php 
				  $ssdeepRECALL=$_GET['ssdeepJpegRECALL']+$_GET['ssdeepBmpRECALL']+$_GET['ssdeepGifRECALL']+$_GET['ssdeepTiffRECALL']/4;
				  $sdhashRECALL=$_GET['sdhashJpegRECALL']+$_GET['sdhashBmpRECALL']+$_GET['sdhashGifRECALL']+$_GET['sdhashTiffRECALL']/4;
				  $avgRECALL="Results produced by ";
				
				 
				 if($ssdeepRECALL>$sdhashRECALL){
					 $avgRECALL=$avgRECALL."ssdeep has better recall than sdhash on an avg. for DOCX";
				 }else{
				 	$avgRECALL=$avgRECALL."sdhash has better recall rates than ssdeep on an avg. DOCX";
				 
				 }
				 
				  ?>
                  <tr style="text-align:justify;"><td style="width: 9%; text-align: justify;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ++$sn."."; ?>&nbsp;</td>
                  <td style="align-content: space-around;text-align: justify; vertical-align: text-top;vertical-align: top;padding: 10px 10px 10px 10px;"><?php echo $avgRECALL; ?> Shown below in fig below.</td></tr>
                 <tr align="center" style="text-align:center;"><td colspan="2" align="center" style="text-align:center"><div id="RECALL_chart" style="width: 600px; height: 300px;text-align:center;margin-left:86px;" align="center" ></div></td></tr>
					 
				<tr><td colspan="2"><div id="RECALL_chart_pptx" style="width: 600px; height: 300px;margin-left:86px;"></div></td></tr> 
                 
                 <tr style="text-align:justify;"><td style="width: 9%; text-align: justify;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ++$sn."."; ?>&nbsp;</td><td style="align-content: space-around;text-align: justify; vertical-align: text-top;vertical-align: top;padding: 10px 10px 10px 10px;"><?php echo $avgRECALL; ?></td></tr>
                 
					 
					 
                 
                 <?php 
				  $ssdeepFSCORE=$_GET['ssdeepJpegFSCORE']+$_GET['ssdeepBmpFSCORE']+$_GET['ssdeepGifFSCORE']+$_GET['ssdeepTiffFSCORE']/4;
				  $sdhashFSCORE=$_GET['sdhashJpegFSCORE']+$_GET['sdhashBmpFSCORE']+$_GET['sdhashGifFSCORE']+$_GET['sdhashTiffFSCORE']/4;
				  $avgFSCORE="In terms of both Precision and recall ";
				
				 
				 if($ssdeepFSCORE>$sdhashFSCORE){
					 $avgFSCORE=$avgFSCORE."ssdeep is better than sdhash.";
				 }else{
				 	$avgFSCORE=$avgFSCORE."sdhash is better than ssdeep.";
				 
				 }
				 
				  ?>

                 
                  <tr style="text-align:justify;"><td style="width: 9%; text-align: justify;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ++$sn."."; ?>&nbsp;</td><td style="align-content: space-around;text-align: justify; vertical-align: text-top;vertical-align: top;padding: 10px 10px 10px 10px;"><?php echo $avgFSCORE; ?> Shown in figure below.</td></tr>
                 <tr><td colspan="2"><div id="columnchart_material" style="width: 600px; height: 300px;margin-left:86px;"></div></td></tr>
				 <tr><td colspan="2"><div id="columnchart_material_pptx" style="width: 600px; height: 300px;margin-left:86px;"></div></td></tr>
                 
                 
                 <tr style="text-align:justify;"><td><?php echo ++$sn."."; ?>&nbsp;</td><td style="align-content: space-around;text-align: justify; vertical-align: text-top;vertical-align: top;padding: 10px 10px 10px 10px;">Figure below shows the Matthews correlation coefficient (MCC) comparision of both ssdeep and sdhash.</td></tr>
                 <tr><td colspan="2"><div id="MCC_chart" style="width: 600px; height: 300px;margin-left:86px;"></div></div></td></tr>
			     <tr><td colspan="2"><div id="MCC_chart_pptx" style="width: 600px; height: 300px;margin-left:86px;"></div></div></td></tr>
                 
      
      <tr align="right"><td  colspan="2" align="right" ><input type="submit" style="margin-left:50%" value="Back"  onClick="location.href = 'result_report_single_common_object_based_search.php?threshold=22';"></td></tr>           
                 
                 
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
