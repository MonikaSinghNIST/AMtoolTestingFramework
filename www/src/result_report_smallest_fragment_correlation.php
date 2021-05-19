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
                
				  //print_main_sidebar_menu_contents();
               ?>
    	    </div>
		    </div>
		  </div>  
          	
    	  <div id="rightContent">
    	   	   <div id="breadcrumb">Smallest  Fragment  Identification ➤ <a href="evaluateFragment.php">Test Cases</a> ➤ <a href="result_report_smallest_fragment_correlation.php?threshold=22">Comparative Assessment</a></div>
    	    <div id="" style="font-family: Arial, 'Century Gothic'; background-color: #0e375d;color:white; text-align: center;align-content: center;align-items: center;font-size: 18px; height: 30px;text-align:left; vertical-align: middle;padding-top: 10px;padding-left: 10px;width:941px"> Smallest  Fragment  Identification Test </div> 
              
              <div id="breadcrumb">Tool : ssdeep &nbsp;&nbsp; File type : Text &nbsp;&nbsp; Dataset type : Sequential</div> 
			  <!--<div id="breadcrumb" style="text-align: left;height: 2px;" class=""><a href="evaluate_smallest_fragment_correlation.php" style="text-decoration:none;color: black;">Smallest Fragment Correlation (ssdeep)</a></div> -->
             
			  <form id="frm" method="get" action="javascript:redirect();">
				 <?php $tblid=1; ?>
				  
				   				  
				  <?php
				  //file to store results to generate pdf
				  
				  	$tmp_Pdf_file = 'Tmp_Results_Pdf1.txt';
					$tmp_handle = fopen($tmp_Pdf_file, 'wb') or die('Cannot open file:  '.$tmp_Pdf_file);
					
				  
				  ?>
				  
                  <?php 
				  
				  $scoreSsdeepTextSeq="";
				  $scoreSdhashTextSeq="";
				  $scoreSsdeepTextRan="";
				  $scoreSdhashTextRan="";
				  
				  $scoreSsdeepDocxSeq="";
				  $scoreSdhashDocxSeq="";
				  $scoreSsdeepDocxRan="";
				  $scoreSdhashDocxRan="";
				  
				  $matchSsdeepTextSeq="";
				  $matchSdhashTextSeq="";
				  $matchSsdeepTextRan="";
				  $matchSdhashTextRan="";
				  
				  $matchSsdeepDocxSeq="";
				  $matchSdhashDocxSeq="";
				  $matchSsdeepDocxRan="";
				  $matchSdhashDocxRan="";
				  
				  
				  $numOfSeqTextFile=0;
				  $numOfSeqTextFrag=0;
				  $numOfRanTextFile=0;
				  $numOfRanTextFrag=0;
				  				  
				  $numOfSeqDocxFile=0;
				  $numOfSeqDocxFrag=0;
				  $numOfRanDocxFile=0;
				  $numOfRanDocxFrag=0;
				  
				  
				  
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
						  //echo exec('ssdeep -r ..\Data\Docx');
						  
						 //echo exec('ssdeep -r ..\Data\FragmentIdentification\Text\Sequentialfragment\Result >ssdeepFreg1.text');
						  
						 //echo exec('ssdeep -r ..\Data\FragmentIdentification\Text\Sequentialfragment\Text >ssdeepFreg2.text');
						  
						  //$rslt= exec('ssdeep -k ssdeepFreg1.text ssdeepFreg2.text >ssdeepFregSeq.text');
						  
						  $rslt = file_get_contents('..\Final_Report_Fragment\ssdeepFregSeq.text', true);
					  $sn=0;
						
							$tp=0;
							$tn=0;
							$fp=0;
							$fn=0;
							$sn=0;
							
							//$t=(int)$_GET['threshold'];
							$t=(int)$_GET['threshold'];

					  		$rw="";
							
							
								$dir1    = '..\Data\FragmentIdentification\Text\Sequentialfragment\Result';
								$files1 = scandir($dir1);

								$dir2    = '..\Data\FragmentIdentification\Text\Sequentialfragment\Text';
								$files2 = scandir($dir2);
								
								$numOfFrgmntFl=count($files1)-2;
									
								$numOfTxtFl=count($files2)-2;
					  	
								$numOfComprsn=$numOfFrgmntFl*$numOfTxtFl;
					  	
							
					  		if($rslt==""){
								
								
							}else{
					  
						  $arr = explode("\n", $rslt);
						  
								$sn=0;
								
								//$tblid=0;
						  
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
							  
							  
								 }
					  
					  $rw=$rw.$sn.";".$target.";".$file_img.";".round($similarity,2).";";
					  $embddFll=$target;
					  $imgFll=$file_img;
						
						$embdFl_arr = explode("__", $embddFll);
						$imgFl_arr = explode(".", $imgFll);
						$embddFl=$embdFl_arr[0];
						$imgFl=$imgFl_arr[0];	  
						
						$prcnt_tmp=explode(".",$embdFl_arr[1]);
					    $prcnt=$prcnt_tmp[0];		
						
						if(strcmp($embddFl,$imgFl)==0){
									//if($similarity>=$t){
										
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
										
										
										
									
						}else{
									
									
						}
					  
					
					  
			  ?>
					  
					
						<?php
					 	
						
							  
						  }
							  
					  }
						  
			  ?>
						  
						
					  
				  
			  </form>
			  
			  
    <?php 
   // $dir = opendir('uploads/'); # This is the directory it will count from
   $numOfFrgmntFl=0;
   $numOfTxtFl=0;
   $fi1 = new FilesystemIterator("..\Data\FragmentIdentification\Text\Sequentialfragment\Result", FilesystemIterator::SKIP_DOTS);
$numOfFrgmntFl=iterator_count($fi1);
$fi2 = new FilesystemIterator("..\Data\FragmentIdentification\Text\Sequentialfragment\Text", FilesystemIterator::SKIP_DOTS);
$numOfTxtFl=iterator_count($fi2);
$numOfComprsn=$numOfFrgmntFl*$numOfTxtFl;
		  
$numOfSeqTextFile=$numOfTxtFl;
$numOfSeqTextFrag=$numOfFrgmntFl;

?>
			  
              <table id="table<?php echo $tblid; ?>" style="width: 941px; height: 100%;">
					  
					  <tr  style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center; width:100% ;font-size:10.94px;">
					    <td style="text-align: center; width: ;">Fragment Size</td><td style="text-align: center; width: ">95%</td><td style="text-align: center; width: ">90%</td><td style="text-align: center;width: ">85%</td><td style="text-align: center;width: ">80%</td><td style="text-align: center;width: ">75%</td><td style="text-align: center;width: ">70%</td><td style="text-align: center;width: ">65%</td><td style="text-align: center;width: ">60%</td><td style="text-align: center;width: ">55%</td><td style="text-align: center;width: ">50%</td><td style="text-align: center;width: ">45%</td><td style="text-align: center;width: ">40%</td><td style="text-align: center;width: ">35%</td><td style="text-align: center;width: ">30%</td><td style="text-align: center;width: ">25%</td><td style="text-align: center;width: ">20%</td><td style="text-align: center;width: ">15%</td><td style="text-align: center;width: ">10%</td><td style="text-align: center;width: ">5%</td><td style="text-align: center;width: ">4%</td><td style="text-align: center;width: ">3%</td><td style="text-align: center;width: ">2%</td><td style="text-align: center;width: ">1%</td></tr>
                      
				  <?php
				  
				  $Final_score95=round($score95/$numOfTxtFl,1);
				  $Final_score90=round($score90/$numOfTxtFl,1);
				  $Final_score85=round($score85/$numOfTxtFl,1);
				  $Final_score80=round($score80/$numOfTxtFl,1);
				  $Final_score75=round($score75/$numOfTxtFl,1);
				  $Final_score70=round($score70/$numOfTxtFl,1);
				  $Final_score65=round($score65/$numOfTxtFl,1);
				  $Final_score60=round($score60/$numOfTxtFl,1);
				  $Final_score55=round($score55/$numOfTxtFl,1);
				  $Final_score50=round($score50/$numOfTxtFl,1);
				  $Final_score45=round($score45/$numOfTxtFl,1);
				  $Final_score40=round($score40/$numOfTxtFl,1);
				  $Final_score35=round($score35/$numOfTxtFl,1);
				  $Final_score30=round($score30/$numOfTxtFl,1);
				  $Final_score25=round($score25/$numOfTxtFl,1);
				  $Final_score20=round($score20/$numOfTxtFl,1);
				  $Final_score15=round($score15/$numOfTxtFl,1);
				  $Final_score10=round($score10/$numOfTxtFl,1);
				  $Final_score5=round($score5/$numOfTxtFl,1);
				  $Final_score4=round($score4/$numOfTxtFl,1);
				  $Final_score3=round($score3/$numOfTxtFl,1);
				  $Final_score2=round($score2/$numOfTxtFl,1);
				  $Final_score1=round($score1/$numOfTxtFl,1);
				  
				  
				  
				  ?>
				  
                      <tr  style=" width:100% ;font-size:10.94px;"><td  style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center; width: ;">Average  Score</td><td style="text-align: center; width: "><?php echo $Final_score95; ?></td><td style="text-align: center; width: "><?php echo $Final_score90; ?></td><td style="text-align: center;width: "><?php echo $Final_score85; ?></td><td style="text-align: center;width: "><?php echo $Final_score80; ?></td><td style="text-align: center;width: "><?php echo $Final_score75; ?></td><td style="text-align: center;width: "><?php echo $Final_score70; ?></td><td style="text-align: center;width: "><?php echo $Final_score65; ?></td><td style="text-align: center;width: "><?php echo $Final_score60; ?></td><td style="text-align: center;width: "><?php echo $Final_score55; ?></td><td style="text-align: center;width: "><?php echo $Final_score50; ?></td><td style="text-align: center;width: "><?php echo $Final_score45; ?></td><td style="text-align: center;width: "><?php echo $Final_score40; ?></td><td style="text-align: center;width: "><?php echo $Final_score35; ?></td><td style="text-align: center;width: "><?php echo $Final_score30; ?></td><td style="text-align: center;width: "><?php echo $Final_score25; ?></td><td style="text-align: center;width: "><?php echo $Final_score20; ?></td><td style="text-align: center;width: "><?php echo $Final_score15; ?></td><td style="text-align: center;width: "><?php echo $Final_score10; ?></td><td style="text-align: center;width: "><?php echo $Final_score5; ?></td><td style="text-align: center;width: "><?php echo $Final_score4; ?></td><td style="text-align: center;width: "><?php echo $Final_score3; ?></td><td style="text-align: center;width: "><?php echo $Final_score2; ?></td><td style="text-align: center;width: "><?php echo $Final_score1; ?></td></tr>
                      
                      <?php 
					  $scoreSsdeepTextSeq=$Final_score95."-".$Final_score90."-".$Final_score85."-".$Final_score80."-".$Final_score75."-".$Final_score70."-".$Final_score65."-".$Final_score60."-".$Final_score55."-".$Final_score50."-".$Final_score45."-".$Final_score40."-".$Final_score35."-".$Final_score30."-".$Final_score25."-".$Final_score20."-".$Final_score15."-".$Final_score10."-".$Final_score5."-".$Final_score4."-".$Final_score3."-".$Final_score2."-".$Final_score1; 
					  ?>
                    
 <?php
				  
				  $Final_match95=round((($match95*100)/$numOfTxtFl),2);
				  $Final_match90=round((($match90*100)/$numOfTxtFl),2);
				  $Final_match85=round((($match85*100)/$numOfTxtFl),2);
				  $Final_match80=round((($match80*100)/$numOfTxtFl),2);
				  $Final_match75=round((($match75*100)/$numOfTxtFl),2);
				  $Final_match70=round((($match70*100)/$numOfTxtFl),2);
				  $Final_match65=round((($match65*100)/$numOfTxtFl),2);
				  $Final_match60=round((($match60*100)/$numOfTxtFl),2);
				  $Final_match55=round((($match55*100)/$numOfTxtFl),2);
				  $Final_match50=round((($match50*100)/$numOfTxtFl),2);
				  $Final_match45=round((($match45*100)/$numOfTxtFl),2);
				  $Final_match40=round((($match40*100)/$numOfTxtFl),2);
				  $Final_match35=round((($match35*100)/$numOfTxtFl),2);
				  $Final_match30=round((($match30*100)/$numOfTxtFl),2);
				  $Final_match25=round((($match25*100)/$numOfTxtFl),2);
				  $Final_match20=round((($match20*100)/$numOfTxtFl),2);
				  $Final_match15=round((($match15*100)/$numOfTxtFl),2);
				  $Final_match10=round((($match10*100)/$numOfTxtFl),2);
				  $Final_match5=round((($match5*100)/$numOfTxtFl),2);
				  $Final_match4=round((($match4*100)/$numOfTxtFl),2);
				  $Final_match3=round((($match3*100)/$numOfTxtFl),2);
				  $Final_match2=round((($match2*100)/$numOfTxtFl),2);
				  $Final_match1=round((($match1*100)/$numOfTxtFl),2);
				  
				  
				  
				  ?>
                    
                    
<?php 
					  $matchSsdeepTextSeq=$Final_match95."-".$Final_match90."-".$Final_match85."-".$Final_match80."-".$Final_match75."-".$Final_match70."-".$Final_match65."-".$Final_match60."-".$Final_match55."-".$Final_match50."-".$Final_match45."-".$Final_match40."-".$Final_match35."-".$Final_match30."-".$Final_match25."-".$Final_match20."-".$Final_match15."-".$Final_match10."-".$Final_match5."-".$Final_match4."-".$Final_match3."-".$Final_match2."-".$Final_match1; 
					  ?>                    
                    
                      
<tr  style=" width:100px ;font-size:10.94px;">
  <td  style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center; width: ;">Match(%)</td>
  <td style="text-align: center; width: "><?php echo $Final_match95; ?></td><td style="text-align: center; width: "><?php echo $Final_match90; ?></td><td style="text-align: center;width: "><?php echo $Final_match85; ?></td><td style="text-align: center;width: "><?php echo $Final_match80; ?></td><td style="text-align: center;width: "><?php echo $Final_match75; ?></td><td style="text-align: center;width: "><?php echo $Final_match70; ?></td><td style="text-align: center;width: "><?php echo $Final_match65; ?></td><td style="text-align: center;width: "><?php echo $Final_match60; ?></td><td style="text-align: center;width: "><?php echo $Final_match55; ?></td><td style="text-align: center;width: "><?php echo $Final_match50; ?></td><td style="text-align: center;width: "><?php echo $Final_match45; ?></td><td style="text-align: center;width: "><?php echo $Final_match40; ?></td><td style="text-align: center;width: "><?php echo $Final_match35; ?></td><td style="text-align: center;width: "><?php echo $Final_match30; ?></td><td style="text-align: center;width: "><?php echo $Final_match25; ?></td><td style="text-align: center;width: "><?php echo $Final_match20; ?></td><td style="text-align: center;width: "><?php echo $Final_match15; ?></td><td style="text-align: center;width: "><?php echo $Final_match10; ?></td><td style="text-align: center;width: "><?php echo $Final_match5; ?></td><td style="text-align: center;width: "><?php echo $Final_match4; ?></td><td style="text-align: center;width: "><?php echo $Final_match3; ?></td><td style="text-align: center;width: "><?php echo $Final_match2; ?></td><td style="text-align: center;width: "><?php echo $Final_match1; ?></td></tr>                      



</table>
		
        

<div id="rightContent">
    	    <div id="breadcrumb">Tool : sdhash &nbsp;&nbsp; File type : Text &nbsp;&nbsp; Dataset type : Sequential </div> 
            <!--<div id="breadcrumb" style="text-align: right;height: 2px;"><a href="FragmentTextResultsPdf.php?scheme=sdhash" target="_blank" style="text-decoration:none;color: black;">Download PDF</a></div> -->
			  <form id="frm" method="get" action="javascript:redirect();">
				  
                  
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
				  
				  
				  
				  
				  ?>
                  
              
				 
					  
						  <?php
						  //echo exec('ssdeep -r ..\Data\Docx');
						  
						 //echo exec('sdhash ..\Data\FragmentIdentification\Text\Sequentialfragment\Result\*.text -o sdhashTextSeqFrag1');
						  
						  
						 //echo exec('sdhash ..\Data\FragmentIdentification\Text\Sequentialfragment\Text\*.text -o sdhashTextSeqFrag2');
						  
						  //$rslt= exec('sdhash -c sdhashTextSeqFrag1.sdbf sdhashTextSeqFrag2.sdbf | sort >sdhashTextSeqFrag.text');
						  
						  $rslt = file_get_contents('..\Final_Report_Fragment\sdhashTextSeqFrag.text', true);
						  $sn=0;
						  $tp=0;
						  $tn=0;
						  $fp=0;
						  $fn=0;
						  $sn=0;
						  $rw="";
							//$t=(int)$_GET['threshold'];
							$t=(int)$_GET['threshold'];
							
								
					  		if($rslt==""){
								
							}else{
					  
						  $arr = explode("\n", $rslt);
						  
						  //echo count($arr);
						  
						  foreach ($arr as &$value) {
						  ?>
                          <?php
                             
					  ?>
                          
                          
                               <?php $sn++; ?>
                            <?php if($value!=null){  ?>
                            
                              
                          <?php
						  
						  $arr1 = explode("|", $value);
						  $cntr=0;
						  foreach ($arr1 as &$value1){
							  //echo $value1."----------";
							  
							  
							   $arr2 = explode("\\", $value1);
							  $arr1_size=count($arr2);
							  
							  
							  ?>
                              
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
						  
						  
						  
						  $rw=$rw.$embddFll.";".$imgFll.";".round($similarity,2).";";
						  $embdFl_arr = explode("__", $embddFll);
						  $imgFl_arr = explode(".", $imgFll);
								//$ln=count($embdFl_arr);
								//$lnn=count($imgFl_arr);
								$embddFl=$embdFl_arr[0];
								$imgFl=$imgFl_arr[0];	  
								//echo $embddFl."---".$imgFl;
								
						 $prcnt_tmp=explode(".",$embdFl_arr[1]);
					     $prcnt=$prcnt_tmp[0];	
						  
						  if(strcmp($embddFl,$imgFl)==0){
									//echo $embdFl."****".$orgnlFl."-----\n"; 
									switch ($prcnt) {
										case "0":
											$score95=$score95+(int)$similarity;
											if((int)$similarity>=$t){
											$match95++;
											}

											break;
										case "1":
											$score90=$score90+(int)$similarity;
											if((int)$similarity>=$t){
											$match90++;
											}
											break;
										case "2":
											$score85=$score85+(int)$similarity;
											if((int)$similarity>=$t){
											$match85++;
											}
											break;
										case "3":
											$score80=$score80+(int)$similarity;
											if((int)$similarity>=$t){
											$match80++;
											}
											break;
										case "4":
											$score75=$score75+(int)$similarity;
											if((int)$similarity>=$t){
											$match75++;
											}
											break;
										case "5":
											$score70=$score70+(int)$similarity;
											if((int)$similarity>=$t){
											$match70++;
											}
											break;
										case "6":
											$score65=$score65+(int)$similarity;
											if((int)$similarity>=$t){
											$match65++;
											}
											break;
										case "7":
											$score60=$score60+(int)$similarity;
											if((int)$similarity>=$t){
											$match60++;
											}
											break;
										case "8":
											$score55=$score55+(int)$similarity;
											if((int)$similarity>=$t){
											$match55++;
											}
											break;
										case "9":
											$score50=$score50+(int)$similarity;
											if((int)$similarity>=$t){
											$match50++;
											}
											break;
										case "10":
											$score45=$score45+(int)$similarity;
											if((int)$similarity>=$t){
											$match45++;
											}
											break;
										case "11":
											$score40=$score40+(int)$similarity;
											if((int)$similarity>=$t){
											$match40++;
											}
											break;
										case "12":
											$score35=$score35+(int)$similarity;
											if((int)$similarity>=$t){
											$match35++;
											}
											break;
										case "13":
											$score30=$score30+(int)$similarity;
											if((int)$similarity>=$t){
											$match30++;
											}
											break;
										case "14":
											$score25=$score25+(int)$similarity;
											if((int)$similarity>=$t){
											$match25++;
											}
											break;
										case "15":
											$score20=$score20+(int)$similarity;
											if((int)$similarity>=$t){
											$match20++;
											}
											break;
										case "16":
											$score15=$score15+(int)$similarity;
											if((int)$similarity>=$t){
											$match15++;
											}
											break;
										case "17":
											$score10=$score10+(int)$similarity;
											if((int)$similarity>=$t){
											$match10++;
											}
											break;
										case "18":
											$score5=$score5+(int)$similarity;
											if((int)$similarity>=$t){
											$match5++;
											}
											break;
										case "19":
											$score4=$score4+(int)$similarity;
											if((int)$similarity>=$t){
											$match4++;
											}
											break;
										case "20":
											$score3=$score3+(int)$similarity;
											if((int)$similarity>=$t){
											$match3++;
											}
											break;
										case "21":
											$score2=$score2+(int)$similarity;
											if((int)$similarity>=$t){
											$match2++;
											}
											break;
										case "22":
											$score1=$score1+(int)$similarity;
											if((int)$similarity>=$t){
											$match1++;
											}
											break;
										case "23":
											//$real_similarity=">1";
											break;
										
									}
									
								}else{
									
									
								}
						  
							  
							 // echo "***************".$arr2[$arr1_size-1]."**************";
							  
						  }
						 // echo "\n";
						  	
						  
						  ///////////////////////////////////////////////////////////////////////
						  
						  
						   
					  
					  }
					   
							  
					  }
						 
				 ?>
						  
				
			   
			  
			  </form>
			  
			  
              
              <?php 
   // $dir = opendir('uploads/'); # This is the directory it will count from
   $numOfFrgmntFl=0;
   $numOfTxtFl=0;
   $fi1 = new FilesystemIterator("..\Data\FragmentIdentification\Text\Sequentialfragment\Result", FilesystemIterator::SKIP_DOTS);
$numOfFrgmntFl=iterator_count($fi1);
$fi2 = new FilesystemIterator("..\Data\FragmentIdentification\Text\Sequentialfragment\Text", FilesystemIterator::SKIP_DOTS);
$numOfTxtFl=iterator_count($fi2);
$numOfComprsn=$numOfFrgmntFl*$numOfTxtFl;
		  


?>
              
              
              
           <table id="table<?php echo $tblid; ?>" style="width: 941px; height: 100%;">
					  
					  <tr  style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center; width: ;font-size:10.94px;">
					    <td style="text-align: center; width: ;">Fragment Size</td><td style="text-align: center; width: ">95%</td><td style="text-align: center; width: ">90%</td><td style="text-align: center;width: ">85%</td><td style="text-align: center;width: ">80%</td><td style="text-align: center;width: ">75%</td><td style="text-align: center;width: ">70%</td><td style="text-align: center;width: ">65%</td><td style="text-align: center;width: ">60%</td><td style="text-align: center;width: ">55%</td><td style="text-align: center;width: ">50%</td><td style="text-align: center;width: ">45%</td><td style="text-align: center;width: ">40%</td><td style="text-align: center;width: ">35%</td><td style="text-align: center;width: ">30%</td><td style="text-align: center;width: ">25%</td><td style="text-align: center;width: ">20%</td><td style="text-align: center;width: ">15%</td><td style="text-align: center;width: ">10%</td><td style="text-align: center;width: ">5%</td><td style="text-align: center;width: ">4%</td><td style="text-align: center;width: ">3%</td><td style="text-align: center;width: ">2%</td><td style="text-align: center;width: ">1%</td></tr>
                      
                      <?php
				  
				  $Final_score95=round($score95/$numOfTxtFl,1);
				  $Final_score90=round($score90/$numOfTxtFl,1);
				  $Final_score85=round($score85/$numOfTxtFl,1);
				  $Final_score80=round($score80/$numOfTxtFl,1);
				  $Final_score75=round($score75/$numOfTxtFl,1);
				  $Final_score70=round($score70/$numOfTxtFl,1);
				  $Final_score65=round($score65/$numOfTxtFl,1);
				  $Final_score60=round($score60/$numOfTxtFl,1);
				  $Final_score55=round($score55/$numOfTxtFl,1);
				  $Final_score50=round($score50/$numOfTxtFl,1);
				  $Final_score45=round($score45/$numOfTxtFl,1);
				  $Final_score40=round($score40/$numOfTxtFl,1);
				  $Final_score35=round($score35/$numOfTxtFl,1);
				  $Final_score30=round($score30/$numOfTxtFl,1);
				  $Final_score25=round($score25/$numOfTxtFl,1);
				  $Final_score20=round($score20/$numOfTxtFl,1);
				  $Final_score15=round($score15/$numOfTxtFl,1);
				  $Final_score10=round($score10/$numOfTxtFl,1);
				  $Final_score5=round($score5/$numOfTxtFl,1);
				  $Final_score4=round($score4/$numOfTxtFl,1);
				  $Final_score3=round($score3/$numOfTxtFl,1);
				  $Final_score2=round($score2/$numOfTxtFl,1);
				  $Final_score1=round($score1/$numOfTxtFl,1);
				  
				  
				  
				  ?>
				  
                      <tr  style=" width: ;font-size:10.94px;"><td  style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center; width: ;">Average  Score</td><td style="text-align: center; width: "><?php echo $Final_score95; ?></td><td style="text-align: center; width: "><?php echo $Final_score90; ?></td><td style="text-align: center;width: "><?php echo $Final_score85; ?></td><td style="text-align: center;width: "><?php echo $Final_score80; ?></td><td style="text-align: center;width: "><?php echo $Final_score75; ?></td><td style="text-align: center;width: "><?php echo $Final_score70; ?></td><td style="text-align: center;width: "><?php echo $Final_score65; ?></td><td style="text-align: center;width: "><?php echo $Final_score60; ?></td><td style="text-align: center;width: "><?php echo $Final_score55; ?></td><td style="text-align: center;width: "><?php echo $Final_score50; ?></td><td style="text-align: center;width: "><?php echo $Final_score45; ?></td><td style="text-align: center;width: "><?php echo $Final_score40; ?></td><td style="text-align: center;width: "><?php echo $Final_score35; ?></td><td style="text-align: center;width: "><?php echo $Final_score30; ?></td><td style="text-align: center;width: "><?php echo $Final_score25; ?></td><td style="text-align: center;width: "><?php echo $Final_score20; ?></td><td style="text-align: center;width: "><?php echo $Final_score15; ?></td><td style="text-align: center;width: "><?php echo $Final_score10; ?></td><td style="text-align: center;width: "><?php echo $Final_score5; ?></td><td style="text-align: center;width: "><?php echo $Final_score4; ?></td><td style="text-align: center;width: "><?php echo $Final_score3; ?></td><td style="text-align: center;width: "><?php echo $Final_score2; ?></td><td style="text-align: center;width: "><?php echo $Final_score1; ?></td></tr>
                      
                      <?php $scoreSdhashTextSeq=$Final_score95."-".$Final_score90."-".$Final_score85."-".$Final_score80."-".$Final_score75."-".$Final_score70."-".$Final_score65."-".$Final_score60."-".$Final_score55."-".$Final_score50."-".$Final_score45."-".$Final_score40."-".$Final_score35."-".$Final_score30."-".$Final_score25."-".$Final_score20."-".$Final_score15."-".$Final_score10."-".$Final_score5."-".$Final_score4."-".$Final_score3."-".$Final_score2."-".$Final_score1; ?>
                      
                      
                      
 <?php
				  
				  $Final_match95=round((($match95*100)/$numOfTxtFl),2);
				  $Final_match90=round((($match90*100)/$numOfTxtFl),2);
				  $Final_match85=round((($match85*100)/$numOfTxtFl),2);
				  $Final_match80=round((($match80*100)/$numOfTxtFl),2);
				  $Final_match75=round((($match75*100)/$numOfTxtFl),2);
				  $Final_match70=round((($match70*100)/$numOfTxtFl),2);
				  $Final_match65=round((($match65*100)/$numOfTxtFl),2);
				  $Final_match60=round((($match60*100)/$numOfTxtFl),2);
				  $Final_match55=round((($match55*100)/$numOfTxtFl),2);
				  $Final_match50=round((($match50*100)/$numOfTxtFl),2);
				  $Final_match45=round((($match45*100)/$numOfTxtFl),2);
				  $Final_match40=round((($match40*100)/$numOfTxtFl),2);
				  $Final_match35=round((($match35*100)/$numOfTxtFl),2);
				  $Final_match30=round((($match30*100)/$numOfTxtFl),2);
				  $Final_match25=round((($match25*100)/$numOfTxtFl),2);
				  $Final_match20=round((($match20*100)/$numOfTxtFl),2);
				  $Final_match15=round((($match15*100)/$numOfTxtFl),2);
				  $Final_match10=round((($match10*100)/$numOfTxtFl),2);
				  $Final_match5=round((($match5*100)/$numOfTxtFl),2);
				  $Final_match4=round((($match4*100)/$numOfTxtFl),2);
				  $Final_match3=round((($match3*100)/$numOfTxtFl),2);
				  $Final_match2=round((($match2*100)/$numOfTxtFl),2);
				  $Final_match1=round((($match1*100)/$numOfTxtFl),2);
				  
				  
				  
				  ?>
                    
                    
<?php 
					  $matchSdhashTextSeq=$Final_match95."-".$Final_match90."-".$Final_match85."-".$Final_match80."-".$Final_match75."-".$Final_match70."-".$Final_match65."-".$Final_match60."-".$Final_match55."-".$Final_match50."-".$Final_match45."-".$Final_match40."-".$Final_match35."-".$Final_match30."-".$Final_match25."-".$Final_match20."-".$Final_match15."-".$Final_match10."-".$Final_match5."-".$Final_match4."-".$Final_match3."-".$Final_match2."-".$Final_match1; 
					  ?>                    
                    
                      
<tr  style=" width: ;font-size:10.94px;">
  <td  style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center; width: ;">Match(%)</td>
  <td style="text-align: center; width: "><?php echo $Final_match95; ?></td><td style="text-align: center; width: "><?php echo $Final_match90; ?></td><td style="text-align: center;width: "><?php echo $Final_match85; ?></td><td style="text-align: center;width: "><?php echo $Final_match80; ?></td><td style="text-align: center;width: "><?php echo $Final_match75; ?></td><td style="text-align: center;width: "><?php echo $Final_match70; ?></td><td style="text-align: center;width: "><?php echo $Final_match65; ?></td><td style="text-align: center;width: "><?php echo $Final_match60; ?></td><td style="text-align: center;width: "><?php echo $Final_match55; ?></td><td style="text-align: center;width: "><?php echo $Final_match50; ?></td><td style="text-align: center;width: "><?php echo $Final_match45; ?></td><td style="text-align: center;width: "><?php echo $Final_match40; ?></td><td style="text-align: center;width: "><?php echo $Final_match35; ?></td><td style="text-align: center;width: "><?php echo $Final_match30; ?></td><td style="text-align: center;width: "><?php echo $Final_match25; ?></td><td style="text-align: center;width: "><?php echo $Final_match20; ?></td><td style="text-align: center;width: "><?php echo $Final_match15; ?></td><td style="text-align: center;width: "><?php echo $Final_match10; ?></td><td style="text-align: center;width: "><?php echo $Final_match5; ?></td><td style="text-align: center;width: "><?php echo $Final_match4; ?></td><td style="text-align: center;width: "><?php echo $Final_match3; ?></td><td style="text-align: center;width: "><?php echo $Final_match2; ?></td><td style="text-align: center;width: "><?php echo $Final_match1; ?></td></tr>                      
                      
                         
              </table>
             

<div id="breadcrumb">Tool : ssdeep &nbsp;&nbsp; File type : Text &nbsp;&nbsp; Dataset type : Random </div> 
			  <!--<div id="breadcrumb" style="text-align: left;height: 2px;" class=""><a href="evaluate_smallest_fragment_correlation.php" style="text-decoration:none;color: black;">Smallest Fragment Correlation (ssdeep)</a></div> -->
             
			  <form id="frm" method="get" action="javascript:redirect();">
				 <?php $tblid=1; ?>
				  
				   				  
				  <?php
				  //file to store results to generate pdf
				  
				  	$tmp_Pdf_file = 'Tmp_Results_Pdf1.txt';
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
				  
				  
				  
				  
				  ?>
                  
				
					  
						  <?php
						  //echo exec('ssdeep -r ..\Data\Docx');
						  
						 //echo exec('ssdeep -r ..\Data\FragmentIdentification\Text\RandomFragment\Result >ssdeepFregRan1.text');
						  
						 //echo exec('ssdeep -r ..\Data\FragmentIdentification\Text\RandomFragment\Text >ssdeepFregRan2.text');
						  
						  //$rslt= exec('ssdeep -k ssdeepFregRan1.text ssdeepFregRan2.text >ssdeepFregRan.text');
						  
						  $rslt = file_get_contents('..\Final_Report_Fragment\ssdeepFregRan.text', true);
					  $sn=0;
						
							$tp=0;
							$tn=0;
							$fp=0;
							$fn=0;
							$sn=0;
							
							//$t=(int)$_GET['threshold'];
							$t=(int)$_GET['threshold'];
					  		$rw="";
							
							
								$dir1    = '..\Data\FragmentIdentification\Text\RandomFragment\Result';
								$files1 = scandir($dir1);

								$dir2    = '..\Data\FragmentIdentification\Text\RandomFragment\Text';
								$files2 = scandir($dir2);
								
								$numOfFrgmntFl=count($files1)-2;
									
								$numOfTxtFl=count($files2)-2;
					  	
								$numOfComprsn=$numOfFrgmntFl*$numOfTxtFl;
					  	
							
					  		if($rslt==""){
								
								
							}else{
					  
						  $arr = explode("\n", $rslt);
						  
								$sn=0;
								
								//$tblid=0;
						  
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
							  
							  
								 }
					  
					  $rw=$rw.$sn.";".$target.";".$file_img.";".round($similarity,2).";";
					  $embddFll=$target;
					  $imgFll=$file_img;
						
						$embdFl_arr = explode("__", $embddFll);
						$imgFl_arr = explode(".", $imgFll);
						$embddFl=$embdFl_arr[0];
						$imgFl=$imgFl_arr[0];	  
						
						$prcnt_tmp=explode(".",$embdFl_arr[1]);
					    $prcnt=$prcnt_tmp[0];		
						
						if(strcmp($embddFl,$imgFl)==0){
									//if($similarity>=$t){
										
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
											//echo "file name: ".$embddFll."---".$imgFl."******";
											//echo "score: ".$similarity."---".$match50;
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
										
										
										
									
						}else{
									
									
						}
					  
					
					  
			  ?>
					  
					
						<?php
					 	
						
							  
						  }
							  
					  }
						  
			  ?>
						  
						
					  
				  
			  </form>
			  
			  
    <?php 
   // $dir = opendir('uploads/'); # This is the directory it will count from
   $numOfFrgmntFl=0;
   $numOfTxtFl=0;
   $fi1 = new FilesystemIterator("..\Data\FragmentIdentification\Text\RandomFragment\Result", FilesystemIterator::SKIP_DOTS);
$numOfFrgmntFl=iterator_count($fi1);
$fi2 = new FilesystemIterator("..\Data\FragmentIdentification\Text\RandomFragment\Text", FilesystemIterator::SKIP_DOTS);
$numOfTxtFl=iterator_count($fi2);
$numOfComprsn=$numOfFrgmntFl*$numOfTxtFl;
$numOfRanTextFile=$numOfTxtFl;
$numOfRanTextFrag=$numOfFrgmntFl;

?>
			  
              <table id="table<?php echo $tblid; ?>" style="width: 941px; height: 100%;">
					  
					  <tr  style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center; width: ;font-size:10.94px;">
					    <td style="text-align: center; width: ;">Fragment Size</td><td style="text-align: center; width: ">95%</td><td style="text-align: center; width: ">90%</td><td style="text-align: center;width: ">85%</td><td style="text-align: center;width: ">80%</td><td style="text-align: center;width: ">75%</td><td style="text-align: center;width: ">70%</td><td style="text-align: center;width: ">65%</td><td style="text-align: center;width: ">60%</td><td style="text-align: center;width: ">55%</td><td style="text-align: center;width: ">50%</td><td style="text-align: center;width: ">45%</td><td style="text-align: center;width: ">40%</td><td style="text-align: center;width: ">35%</td><td style="text-align: center;width: ">30%</td><td style="text-align: center;width: ">25%</td><td style="text-align: center;width: ">20%</td><td style="text-align: center;width: ">15%</td><td style="text-align: center;width: ">10%</td><td style="text-align: center;width: ">5%</td><td style="text-align: center;width: ">4%</td><td style="text-align: center;width: ">3%</td><td style="text-align: center;width: ">2%</td><td style="text-align: center;width: ">1%</td></tr>
                      
                      <?php
				  
				  $Final_score95=round($score95/$numOfTxtFl,1);
				  $Final_score90=round($score90/$numOfTxtFl,1);
				  $Final_score85=round($score85/$numOfTxtFl,1);
				  $Final_score80=round($score80/$numOfTxtFl,1);
				  $Final_score75=round($score75/$numOfTxtFl,1);
				  $Final_score70=round($score70/$numOfTxtFl,1);
				  $Final_score65=round($score65/$numOfTxtFl,1);
				  $Final_score60=round($score60/$numOfTxtFl,1);
				  $Final_score55=round($score55/$numOfTxtFl,1);
				  $Final_score50=round($score50/$numOfTxtFl,1);
				  $Final_score45=round($score45/$numOfTxtFl,1);
				  $Final_score40=round($score40/$numOfTxtFl,1);
				  $Final_score35=round($score35/$numOfTxtFl,1);
				  $Final_score30=round($score30/$numOfTxtFl,1);
				  $Final_score25=round($score25/$numOfTxtFl,1);
				  $Final_score20=round($score20/$numOfTxtFl,1);
				  $Final_score15=round($score15/$numOfTxtFl,1);
				  $Final_score10=round($score10/$numOfTxtFl,1);
				  $Final_score5=round($score5/$numOfTxtFl,1);
				  $Final_score4=round($score4/$numOfTxtFl,1);
				  $Final_score3=round($score3/$numOfTxtFl,1);
				  $Final_score2=round($score2/$numOfTxtFl,1);
				  $Final_score1=round($score1/$numOfTxtFl,1);
				  
				  
				  
				  ?>
				  
                      <tr  style=" width: ;font-size:10.94px;"><td  style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center; width: ;">Average  Score</td><td style="text-align: center; width: "><?php echo $Final_score95; ?></td><td style="text-align: center; width: "><?php echo $Final_score90; ?></td><td style="text-align: center;width: "><?php echo $Final_score85; ?></td><td style="text-align: center;width: "><?php echo $Final_score80; ?></td><td style="text-align: center;width: "><?php echo $Final_score75; ?></td><td style="text-align: center;width: "><?php echo $Final_score70; ?></td><td style="text-align: center;width: "><?php echo $Final_score65; ?></td><td style="text-align: center;width: "><?php echo $Final_score60; ?></td><td style="text-align: center;width: "><?php echo $Final_score55; ?></td><td style="text-align: center;width: "><?php echo $Final_score50; ?></td><td style="text-align: center;width: "><?php echo $Final_score45; ?></td><td style="text-align: center;width: "><?php echo $Final_score40; ?></td><td style="text-align: center;width: "><?php echo $Final_score35; ?></td><td style="text-align: center;width: "><?php echo $Final_score30; ?></td><td style="text-align: center;width: "><?php echo $Final_score25; ?></td><td style="text-align: center;width: "><?php echo $Final_score20; ?></td><td style="text-align: center;width: "><?php echo $Final_score15; ?></td><td style="text-align: center;width: "><?php echo $Final_score10; ?></td><td style="text-align: center;width: "><?php echo $Final_score5; ?></td><td style="text-align: center;width: "><?php echo $Final_score4; ?></td><td style="text-align: center;width: "><?php echo $Final_score3; ?></td><td style="text-align: center;width: "><?php echo $Final_score2; ?></td><td style="text-align: center;width: "><?php echo $Final_score1; ?></td></tr>
                      
                      <?php $scoreSsdeepTextRan=$Final_score95."-".$Final_score90."-".$Final_score85."-".$Final_score80."-".$Final_score75."-".$Final_score70."-".$Final_score65."-".$Final_score60."-".$Final_score55."-".$Final_score50."-".$Final_score45."-".$Final_score40."-".$Final_score35."-".$Final_score30."-".$Final_score25."-".$Final_score20."-".$Final_score15."-".$Final_score10."-".$Final_score5."-".$Final_score4."-".$Final_score3."-".$Final_score2."-".$Final_score1; ?>
                      
                      
                      
 <?php
				  
				  $Final_match95=round((($match95*100)/$numOfTxtFl),2);
				  $Final_match90=round((($match90*100)/$numOfTxtFl),2);
				  $Final_match85=round((($match85*100)/$numOfTxtFl),2);
				  $Final_match80=round((($match80*100)/$numOfTxtFl),2);
				  $Final_match75=round((($match75*100)/$numOfTxtFl),2);
				  $Final_match70=round((($match70*100)/$numOfTxtFl),2);
				  $Final_match65=round((($match65*100)/$numOfTxtFl),2);
				  $Final_match60=round((($match60*100)/$numOfTxtFl),2);
				  $Final_match55=round((($match55*100)/$numOfTxtFl),2);
				  $Final_match50=round((($match50*100)/$numOfTxtFl),2);
				  $Final_match45=round((($match45*100)/$numOfTxtFl),2);
				  $Final_match40=round((($match40*100)/$numOfTxtFl),2);
				  $Final_match35=round((($match35*100)/$numOfTxtFl),2);
				  $Final_match30=round((($match30*100)/$numOfTxtFl),2);
				  $Final_match25=round((($match25*100)/$numOfTxtFl),2);
				  $Final_match20=round((($match20*100)/$numOfTxtFl),2);
				  $Final_match15=round((($match15*100)/$numOfTxtFl),2);
				  $Final_match10=round((($match10*100)/$numOfTxtFl),2);
				  $Final_match5=round((($match5*100)/$numOfTxtFl),2);
				  $Final_match4=round((($match4*100)/$numOfTxtFl),2);
				  $Final_match3=round((($match3*100)/$numOfTxtFl),2);
				  $Final_match2=round((($match2*100)/$numOfTxtFl),2);
				  $Final_match1=round((($match1*100)/$numOfTxtFl),2);
				  
				  
				  
				  ?>
                    
                    
<?php 
					  $matchSsdeepTextRan=$Final_match95."-".$Final_match90."-".$Final_match85."-".$Final_match80."-".$Final_match75."-".$Final_match70."-".$Final_match65."-".$Final_match60."-".$Final_match55."-".$Final_match50."-".$Final_match45."-".$Final_match40."-".$Final_match35."-".$Final_match30."-".$Final_match25."-".$Final_match20."-".$Final_match15."-".$Final_match10."-".$Final_match5."-".$Final_match4."-".$Final_match3."-".$Final_match2."-".$Final_match1; 
					  ?>                    
                    
                      
<tr  style=" width: ;font-size:10.94px;">
  <td  style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center; width: ;">Match(%)</td>
  <td style="text-align: center; width: "><?php echo $Final_match95; ?></td><td style="text-align: center; width: "><?php echo $Final_match90; ?></td><td style="text-align: center;width: "><?php echo $Final_match85; ?></td><td style="text-align: center;width: "><?php echo $Final_match80; ?></td><td style="text-align: center;width: "><?php echo $Final_match75; ?></td><td style="text-align: center;width: "><?php echo $Final_match70; ?></td><td style="text-align: center;width: "><?php echo $Final_match65; ?></td><td style="text-align: center;width: "><?php echo $Final_match60; ?></td><td style="text-align: center;width: "><?php echo $Final_match55; ?></td><td style="text-align: center;width: "><?php echo $Final_match50; ?></td><td style="text-align: center;width: "><?php echo $Final_match45; ?></td><td style="text-align: center;width: "><?php echo $Final_match40; ?></td><td style="text-align: center;width: "><?php echo $Final_match35; ?></td><td style="text-align: center;width: "><?php echo $Final_match30; ?></td><td style="text-align: center;width: "><?php echo $Final_match25; ?></td><td style="text-align: center;width: "><?php echo $Final_match20; ?></td><td style="text-align: center;width: "><?php echo $Final_match15; ?></td><td style="text-align: center;width: "><?php echo $Final_match10; ?></td><td style="text-align: center;width: "><?php echo $Final_match5; ?></td><td style="text-align: center;width: "><?php echo $Final_match4; ?></td><td style="text-align: center;width: "><?php echo $Final_match3; ?></td><td style="text-align: center;width: "><?php echo $Final_match2; ?></td><td style="text-align: center;width: "><?php echo $Final_match1; ?></td></tr>                      
                      
                      
                         
              </table>


			  <div id="breadcrumb">Tool : sdhash &nbsp;&nbsp; File type : Text &nbsp;&nbsp; Dataset type : Random </div> 
            <!--<div id="breadcrumb" style="text-align: right;height: 2px;"><a href="FragmentTextResultsPdf.php?scheme=sdhash" target="_blank" style="text-decoration:none;color: black;">Download PDF</a></div> -->
			  <form id="frm" method="get" action="javascript:redirect();">
				  
                  
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
				  
				  
				  
				  
				  ?>
                  
              
				 
					  
						  <?php
						  //echo exec('ssdeep -r ..\Data\Docx');
						  
						 //echo exec('sdhash ..\Data\FragmentIdentification\Text\RandomFragment\Result\*.text -o sdhashTextRanFrag1');
						  
						  
						 //echo exec('sdhash ..\Data\FragmentIdentification\Text\RandomFragment\Text\*.text -o sdhashTextRanFrag2');
						  
						  //$rslt= exec('sdhash -c sdhashTextRanFrag1.sdbf sdhashTextRanFrag2.sdbf | sort >sdhashTextRanFrag.text');
						  
						  $rslt = file_get_contents('..\Final_Report_Fragment\sdhashTextRanFrag.text', true);
						  $sn=0;
						  $tp=0;
						  $tn=0;
						  $fp=0;
						  $fn=0;
						  $sn=0;
						  $rw="";
							//$t=(int)$_GET['threshold'];
							$t=(int)$_GET['threshold'];
							
								
					  		if($rslt==""){
								
							}else{
					  
						  $arr = explode("\n", $rslt);
						  
						  //echo count($arr);
						  
						  foreach ($arr as &$value) {
						  ?>
                          <?php
                             
					  ?>
                          
                          
                               <?php $sn++; ?>
                            <?php if($value!=null){  ?>
                            
                              
                          <?php
						  
						  $arr1 = explode("|", $value);
						  $cntr=0;
						  foreach ($arr1 as &$value1){
							  //echo $value1."----------";
							  
							  
							   $arr2 = explode("\\", $value1);
							  $arr1_size=count($arr2);
							  
							  
							  ?>
                              
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
						  
						  
						  
						  $rw=$rw.$embddFll.";".$imgFll.";".round($similarity,2).";";
						  $embdFl_arr = explode("__", $embddFll);
						  $imgFl_arr = explode(".", $imgFll);
								//$ln=count($embdFl_arr);
								//$lnn=count($imgFl_arr);
								$embddFl=$embdFl_arr[0];
								$imgFl=$imgFl_arr[0];	  
								//echo $embddFl."---".$imgFl;
								
						 $prcnt_tmp=explode(".",$embdFl_arr[1]);
					     $prcnt=$prcnt_tmp[0];	
						  
						  if(strcmp($embddFl,$imgFl)==0){
									//echo $embdFl."****".$orgnlFl."-----\n"; 
									switch ($prcnt) {
										case "0":
											$score95=$score95+(int)$similarity;
											if((int)$similarity>=$t){
											$match95++;
											}
											break;
										case "1":
											$score90=$score90+(int)$similarity;
											if((int)$similarity>=$t){
											$match90++;
											}
											break;
										case "2":
											$score85=$score85+(int)$similarity;
											if((int)$similarity>=$t){
											$match85++;
											}
											break;
										case "3":
											$score80=$score80+(int)$similarity;
											if((int)$similarity>=$t){
											$match80++;
											}
											break;
										case "4":
											$score75=$score75+(int)$similarity;
											if((int)$similarity>=$t){
											$match75++;
											}
											break;
										case "5":
											$score70=$score70+(int)$similarity;
											if((int)$similarity>=$t){
											$match70++;
											}
											break;
										case "6":
											$score65=$score65+(int)$similarity;
											if((int)$similarity>=$t){
											$match65++;
											}
											break;
										case "7":
											$score60=$score60+(int)$similarity;
											if((int)$similarity>=$t){
											$match60++;
											}
											break;
										case "8":
											$score55=$score55+(int)$similarity;
											if((int)$similarity>=$t){
											$match55++;
											}
											break;
										case "9":
											$score50=$score50+(int)$similarity;
											if((int)$similarity>=$t){
											$match50++;
											}
											break;
										case "10":
											$score45=$score45+(int)$similarity;
											if((int)$similarity>=$t){
											$match45++;
											}
											break;
										case "11":
											$score40=$score40+(int)$similarity;
											if((int)$similarity>=$t){
											$match40++;
											}
											break;
										case "12":
											$score35=$score35+(int)$similarity;
											if((int)$similarity>=$t){
											$match35++;
											}
											break;
										case "13":
											$score30=$score30+(int)$similarity;
											if((int)$similarity>=$t){
											$match30++;
											}
											break;
										case "14":
											$score25=$score25+(int)$similarity;
											if((int)$similarity>=$t){
											$match25++;
											}
											break;
										case "15":
											$score20=$score20+(int)$similarity;
											if((int)$similarity>=$t){
											$match20++;
											}
											break;
										case "16":
											$score15=$score15+(int)$similarity;
											if((int)$similarity>=$t){
											$match15++;
											}
											break;
										case "17":
											$score10=$score10+(int)$similarity;
											if((int)$similarity>=$t){
											$match10++;
											}
											break;
										case "18":
											$score5=$score5+(int)$similarity;
											if((int)$similarity>=$t){
											$match5++;
											}
											break;
										case "19":
											$score4=$score4+(int)$similarity;
											if((int)$similarity>=$t){
											$match4++;
											}
											break;
										case "20":
											$score3=$score3+(int)$similarity;
											if((int)$similarity>=$t){
											$match3++;
											}
											break;
										case "21":
											$score2=$score2+(int)$similarity;
											if((int)$similarity>=$t){
											$match2++;
											}
											break;
										case "22":
											$score1=$score1+(int)$similarity;
											if((int)$similarity>=$t){
											$match1++;
											}
											break;
										case "23":
											//$real_similarity=">1";
											break;
										
									}
									
								}else{
									
									
								}
						  
							  
							 // echo "***************".$arr2[$arr1_size-1]."**************";
							  
						  }
						 // echo "\n";
						  	
						  
						  ///////////////////////////////////////////////////////////////////////
						  
						  
						   
					  
					  }
					   
							  
					  }
						 
				 ?>
						  
				
			   
			  
			  </form>
			  
			  
              
              <?php 
   // $dir = opendir('uploads/'); # This is the directory it will count from
   $numOfFrgmntFl=0;
   $numOfTxtFl=0;
   $fi1 = new FilesystemIterator("..\Data\FragmentIdentification\Text\RandomFragment\Result", FilesystemIterator::SKIP_DOTS);
$numOfFrgmntFl=iterator_count($fi1);
$fi2 = new FilesystemIterator("..\Data\FragmentIdentification\Text\RandomFragment\Text", FilesystemIterator::SKIP_DOTS);
$numOfTxtFl=iterator_count($fi2);
$numOfComprsn=$numOfFrgmntFl*$numOfTxtFl;
		  


?>
              
              
              
           <table id="table<?php echo $tblid; ?>" style="width: 941px; height: 100%;">
					  
					  <tr  style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center; width: ;font-size:10.94px;">
					    <td style="text-align: center; width: ;">Fragment Size</td>
					    <td style="text-align: center; width: ">95%</td><td style="text-align: center; width: ">90%</td><td style="text-align: center;width: ">85%</td><td style="text-align: center;width: ">80%</td><td style="text-align: center;width: ">75%</td><td style="text-align: center;width: ">70%</td><td style="text-align: center;width: ">65%</td><td style="text-align: center;width: ">60%</td><td style="text-align: center;width: ">55%</td><td style="text-align: center;width: ">50%</td><td style="text-align: center;width: ">45%</td><td style="text-align: center;width: ">40%</td><td style="text-align: center;width: ">35%</td><td style="text-align: center;width: ">30%</td><td style="text-align: center;width: ">25%</td><td style="text-align: center;width: ">20%</td><td style="text-align: center;width: ">15%</td><td style="text-align: center;width: ">10%</td><td style="text-align: center;width: ">5%</td><td style="text-align: center;width: ">4%</td><td style="text-align: center;width: ">3%</td><td style="text-align: center;width: ">2%</td><td style="text-align: center;width: ">1%</td></tr>
                      
                      <?php
				  
				  $Final_score95=round($score95/$numOfTxtFl,1);
				  $Final_score90=round($score90/$numOfTxtFl,1);
				  $Final_score85=round($score85/$numOfTxtFl,1);
				  $Final_score80=round($score80/$numOfTxtFl,1);
				  $Final_score75=round($score75/$numOfTxtFl,1);
				  $Final_score70=round($score70/$numOfTxtFl,1);
				  $Final_score65=round($score65/$numOfTxtFl,1);
				  $Final_score60=round($score60/$numOfTxtFl,1);
				  $Final_score55=round($score55/$numOfTxtFl,1);
				  $Final_score50=round($score50/$numOfTxtFl,1);
				  $Final_score45=round($score45/$numOfTxtFl,1);
				  $Final_score40=round($score40/$numOfTxtFl,1);
				  $Final_score35=round($score35/$numOfTxtFl,1);
				  $Final_score30=round($score30/$numOfTxtFl,1);
				  $Final_score25=round($score25/$numOfTxtFl,1);
				  $Final_score20=round($score20/$numOfTxtFl,1);
				  $Final_score15=round($score15/$numOfTxtFl,1);
				  $Final_score10=round($score10/$numOfTxtFl,1);
				  $Final_score5=round($score5/$numOfTxtFl,1);
				  $Final_score4=round($score4/$numOfTxtFl,1);
				  $Final_score3=round($score3/$numOfTxtFl,1);
				  $Final_score2=round($score2/$numOfTxtFl,1);
				  $Final_score1=round($score1/$numOfTxtFl,1);
				  
				  
				  
				  ?>
				  
                      <tr  style=" width: ;font-size:10.94px;"><td  style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center; width: ;">Average  Score</td><td style="text-align: center; width: "><?php echo $Final_score95; ?></td><td style="text-align: center; width: "><?php echo $Final_score90; ?></td><td style="text-align: center;width: "><?php echo $Final_score85; ?></td><td style="text-align: center;width: "><?php echo $Final_score80; ?></td><td style="text-align: center;width: "><?php echo $Final_score75; ?></td><td style="text-align: center;width: "><?php echo $Final_score70; ?></td><td style="text-align: center;width: "><?php echo $Final_score65; ?></td><td style="text-align: center;width: "><?php echo $Final_score60; ?></td><td style="text-align: center;width: "><?php echo $Final_score55; ?></td><td style="text-align: center;width: "><?php echo $Final_score50; ?></td><td style="text-align: center;width: "><?php echo $Final_score45; ?></td><td style="text-align: center;width: "><?php echo $Final_score40; ?></td><td style="text-align: center;width: "><?php echo $Final_score35; ?></td><td style="text-align: center;width: "><?php echo $Final_score30; ?></td><td style="text-align: center;width: "><?php echo $Final_score25; ?></td><td style="text-align: center;width: "><?php echo $Final_score20; ?></td><td style="text-align: center;width: "><?php echo $Final_score15; ?></td><td style="text-align: center;width: "><?php echo $Final_score10; ?></td><td style="text-align: center;width: "><?php echo $Final_score5; ?></td><td style="text-align: center;width: "><?php echo $Final_score4; ?></td><td style="text-align: center;width: "><?php echo $Final_score3; ?></td><td style="text-align: center;width: "><?php echo $Final_score2; ?></td><td style="text-align: center;width: "><?php echo $Final_score1; ?></td></tr>
                      
                      <?php $scoreSdhashTextRan=$Final_score95."-".$Final_score90."-".$Final_score85."-".$Final_score80."-".$Final_score75."-".$Final_score70."-".$Final_score65."-".$Final_score60."-".$Final_score55."-".$Final_score50."-".$Final_score45."-".$Final_score40."-".$Final_score35."-".$Final_score30."-".$Final_score25."-".$Final_score20."-".$Final_score15."-".$Final_score10."-".$Final_score5."-".$Final_score4."-".$Final_score3."-".$Final_score2."-".$Final_score1; ?>
                      
                      
                      
 <?php
				  
				  $Final_match95=round((($match95*100)/$numOfTxtFl),2);
				  $Final_match90=round((($match90*100)/$numOfTxtFl),2);
				  $Final_match85=round((($match85*100)/$numOfTxtFl),2);
				  $Final_match80=round((($match80*100)/$numOfTxtFl),2);
				  $Final_match75=round((($match75*100)/$numOfTxtFl),2);
				  $Final_match70=round((($match70*100)/$numOfTxtFl),2);
				  $Final_match65=round((($match65*100)/$numOfTxtFl),2);
				  $Final_match60=round((($match60*100)/$numOfTxtFl),2);
				  $Final_match55=round((($match55*100)/$numOfTxtFl),2);
				  $Final_match50=round((($match50*100)/$numOfTxtFl),2);
				  $Final_match45=round((($match45*100)/$numOfTxtFl),2);
				  $Final_match40=round((($match40*100)/$numOfTxtFl),2);
				  $Final_match35=round((($match35*100)/$numOfTxtFl),2);
				  $Final_match30=round((($match30*100)/$numOfTxtFl),2);
				  $Final_match25=round((($match25*100)/$numOfTxtFl),2);
				  $Final_match20=round((($match20*100)/$numOfTxtFl),2);
				  $Final_match15=round((($match15*100)/$numOfTxtFl),2);
				  $Final_match10=round((($match10*100)/$numOfTxtFl),2);
				  $Final_match5=round((($match5*100)/$numOfTxtFl),2);
				  $Final_match4=round((($match4*100)/$numOfTxtFl),2);
				  $Final_match3=round((($match3*100)/$numOfTxtFl),2);
				  $Final_match2=round((($match2*100)/$numOfTxtFl),2);
				  $Final_match1=round((($match1*100)/$numOfTxtFl),2);
				  
				  
				  
				  ?>
                    
                    
<?php 
					  $matchSdhashTextRan=$Final_match95."-".$Final_match90."-".$Final_match85."-".$Final_match80."-".$Final_match75."-".$Final_match70."-".$Final_match65."-".$Final_match60."-".$Final_match55."-".$Final_match50."-".$Final_match45."-".$Final_match40."-".$Final_match35."-".$Final_match30."-".$Final_match25."-".$Final_match20."-".$Final_match15."-".$Final_match10."-".$Final_match5."-".$Final_match4."-".$Final_match3."-".$Final_match2."-".$Final_match1; 
					  ?>                    
                    
                      
<tr  style=" width: ;font-size:10.94px;">
  <td  style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center; width: ;">Match(%)</td>
  <td style="text-align: center; width: "><?php echo $Final_match95; ?></td><td style="text-align: center; width: "><?php echo $Final_match90; ?></td><td style="text-align: center;width: "><?php echo $Final_match85; ?></td><td style="text-align: center;width: "><?php echo $Final_match80; ?></td><td style="text-align: center;width: "><?php echo $Final_match75; ?></td><td style="text-align: center;width: "><?php echo $Final_match70; ?></td><td style="text-align: center;width: "><?php echo $Final_match65; ?></td><td style="text-align: center;width: "><?php echo $Final_match60; ?></td><td style="text-align: center;width: "><?php echo $Final_match55; ?></td><td style="text-align: center;width: "><?php echo $Final_match50; ?></td><td style="text-align: center;width: "><?php echo $Final_match45; ?></td><td style="text-align: center;width: "><?php echo $Final_match40; ?></td><td style="text-align: center;width: "><?php echo $Final_match35; ?></td><td style="text-align: center;width: "><?php echo $Final_match30; ?></td><td style="text-align: center;width: "><?php echo $Final_match25; ?></td><td style="text-align: center;width: "><?php echo $Final_match20; ?></td><td style="text-align: center;width: "><?php echo $Final_match15; ?></td><td style="text-align: center;width: "><?php echo $Final_match10; ?></td><td style="text-align: center;width: "><?php echo $Final_match5; ?></td><td style="text-align: center;width: "><?php echo $Final_match4; ?></td><td style="text-align: center;width: "><?php echo $Final_match3; ?></td><td style="text-align: center;width: "><?php echo $Final_match2; ?></td><td style="text-align: center;width: "><?php echo $Final_match1; ?></td></tr>                      
                      
                         
              </table>
             



<div id="breadcrumb">Tool : ssdeep &nbsp;&nbsp; File type : Docx &nbsp;&nbsp; Dataset type : Sequential </div> 
			  <!--<div id="breadcrumb" style="text-align: right;height: 2px;"><a href="FragmentDocxResultsPdf.php?scheme=ssdeep" target="_blank" style="text-decoration:none;color: black;">Download PDF</a></div> -->
			  <form id="frm" method="get" action="javascript:redirect();">
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
				  
				  
				  
				  
				  ?>
                  
					  
						  <?php
						  //echo exec('ssdeep -r ..\Data\Docx');
						  
						 //echo exec('ssdeep -r ..\Data\FragmentIdentification\Docx\Sequentialfragment\Result >ssdeepFregDocx1.text');
						  
						 //echo exec('ssdeep -r ..\Data\FragmentIdentification\Docx\Sequentialfragment\Docx >ssdeepFregDocx2.text');
						  
						  //$rslt= exec('ssdeep -k ssdeepFregDocx1.text ssdeepFregDocx2.text >ssdeepFregSeqDocx.text');
						  
						  $rslt = file_get_contents('..\Final_Report_Fragment\ssdeepFregSeqDocx.text', true);
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
								
								//$tblid=0;
						  
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
							  
							  		
						
					  $embddFll=$target;
						$imgFll=$file_img;
						
						 $embdFl_arr = explode("_", $embddFll);
						  $imgFl_arr = explode(".", $imgFll);
								
								$embddFl=$embdFl_arr[0];
								$imgFl=$imgFl_arr[0];	  
								
						
							  
						///////////////////////////////////////////////////////////////////////////
							  
							  
							  $prcnt_tmp=explode(".",$embdFl_arr[1]);
							  $prcnt=$prcnt_tmp[0];

							  //echo $prcnt;

								
						  
						  if(strcmp($embddFl,$imgFl)==0){
									//echo $embdFl."****".$orgnlFl."-----\n"; 
							  ///////////////////////////////////////////////////////
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
									
								}else{
									
									
								}
					  ?>
					  
					 <?php 
					  
					  
					
					  	  
					  
					  
					  ?>
					  
					  
					  
					  
					  
							  
					  
						<?php	  
						
						
						
						
						
							  
						  }
							  
					  }
						  
						  ?>
						  
						
					  
					 
					  
					  
					  
					 
				  
			  
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
   $fi1 = new FilesystemIterator("..\Data\FragmentIdentification\Docx\Sequentialfragment\Result", FilesystemIterator::SKIP_DOTS);
$numOfFrgmntFl=iterator_count($fi1);
$fi2 = new FilesystemIterator("..\Data\FragmentIdentification\Docx\Sequentialfragment\Docx", FilesystemIterator::SKIP_DOTS);
$numOfTxtFl=iterator_count($fi2);
$numOfComprsn=$numOfFrgmntFl*$numOfTxtFl;

$numOfSeqDocxFile=$numOfTxtFl;
$numOfSeqDocxFrag=$numOfFrgmntFl;

?>
              
              
              
 <table id="table<?php echo $tblid; ?>" style="width: 941px; height: 100%;">
					  
					  <tr  style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center; width: ;font-size:10.94px;"><td style="text-align: center; width: ;">Fragment Size</td><td style="text-align: center; width: ">95%</td><td style="text-align: center; width: ">90%</td><td style="text-align: center;width: ">85%</td><td style="text-align: center;width: ">80%</td><td style="text-align: center;width: ">75%</td><td style="text-align: center;width: ">70%</td><td style="text-align: center;width: ">65%</td><td style="text-align: center;width: ">60%</td><td style="text-align: center;width: ">55%</td><td style="text-align: center;width: ">50%</td><td style="text-align: center;width: ">45%</td><td style="text-align: center;width: ">40%</td><td style="text-align: center;width: ">35%</td><td style="text-align: center;width: ">30%</td><td style="text-align: center;width: ">25%</td><td style="text-align: center;width: ">20%</td><td style="text-align: center;width: ">15%</td><td style="text-align: center;width: ">10%</td><td style="text-align: center;width: ">5%</td><td style="text-align: center;width: ">4%</td><td style="text-align: center;width: ">3%</td><td style="text-align: center;width: ">2%</td><td style="text-align: center;width: ">1%</td></tr>
                      
                      <?php
				  
				  $Final_score95=round($score95/$numOfTxtFl,1);
				  $Final_score90=round($score90/$numOfTxtFl,1);
				  $Final_score85=round($score85/$numOfTxtFl,1);
				  $Final_score80=round($score80/$numOfTxtFl,1);
				  $Final_score75=round($score75/$numOfTxtFl,1);
				  $Final_score70=round($score70/$numOfTxtFl,1);
				  $Final_score65=round($score65/$numOfTxtFl,1);
				  $Final_score60=round($score60/$numOfTxtFl,1);
				  $Final_score55=round($score55/$numOfTxtFl,1);
				  $Final_score50=round($score50/$numOfTxtFl,1);
				  $Final_score45=round($score45/$numOfTxtFl,1);
				  $Final_score40=round($score40/$numOfTxtFl,1);
				  $Final_score35=round($score35/$numOfTxtFl,1);
				  $Final_score30=round($score30/$numOfTxtFl,1);
				  $Final_score25=round($score25/$numOfTxtFl,1);
				  $Final_score20=round($score20/$numOfTxtFl,1);
				  $Final_score15=round($score15/$numOfTxtFl,1);
				  $Final_score10=round($score10/$numOfTxtFl,1);
				  $Final_score5=round($score5/$numOfTxtFl,1);
				  $Final_score4=round($score4/$numOfTxtFl,1);
				  $Final_score3=round($score3/$numOfTxtFl,1);
				  $Final_score2=round($score2/$numOfTxtFl,1);
				  $Final_score1=round($score1/$numOfTxtFl,1);
				  
				  
				  
				  ?>
				  
                      <tr  style=" width: ;font-size:10.94px;"><td  style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center; width: ;">Average  Score</td><td style="text-align: center; width: "><?php echo $Final_score95; ?></td><td style="text-align: center; width: "><?php echo $Final_score90; ?></td><td style="text-align: center;width: "><?php echo $Final_score85; ?></td><td style="text-align: center;width: "><?php echo $Final_score80; ?></td><td style="text-align: center;width: "><?php echo $Final_score75; ?></td><td style="text-align: center;width: "><?php echo $Final_score70; ?></td><td style="text-align: center;width: "><?php echo $Final_score65; ?></td><td style="text-align: center;width: "><?php echo $Final_score60; ?></td><td style="text-align: center;width: "><?php echo $Final_score55; ?></td><td style="text-align: center;width: "><?php echo $Final_score50; ?></td><td style="text-align: center;width: "><?php echo $Final_score45; ?></td><td style="text-align: center;width: "><?php echo $Final_score40; ?></td><td style="text-align: center;width: "><?php echo $Final_score35; ?></td><td style="text-align: center;width: "><?php echo $Final_score30; ?></td><td style="text-align: center;width: "><?php echo $Final_score25; ?></td><td style="text-align: center;width: "><?php echo $Final_score20; ?></td><td style="text-align: center;width: "><?php echo $Final_score15; ?></td><td style="text-align: center;width: "><?php echo $Final_score10; ?></td><td style="text-align: center;width: "><?php echo $Final_score5; ?></td><td style="text-align: center;width: "><?php echo $Final_score4; ?></td><td style="text-align: center;width: "><?php echo $Final_score3; ?></td><td style="text-align: center;width: "><?php echo $Final_score2; ?></td><td style="text-align: center;width: "><?php echo $Final_score1; ?></td></tr>
                      
                      <?php $scoreSsdeepDocxSeq=$Final_score95."-".$Final_score90."-".$Final_score85."-".$Final_score80."-".$Final_score75."-".$Final_score70."-".$Final_score65."-".$Final_score60."-".$Final_score55."-".$Final_score50."-".$Final_score45."-".$Final_score40."-".$Final_score35."-".$Final_score30."-".$Final_score25."-".$Final_score20."-".$Final_score15."-".$Final_score10."-".$Final_score5."-".$Final_score4."-".$Final_score3."-".$Final_score2."-".$Final_score1; ?>
                      
                      
                      
 <?php
				  
				  $Final_match95=round((($match95*100)/$numOfTxtFl),2);
				  $Final_match90=round((($match90*100)/$numOfTxtFl),2);
				  $Final_match85=round((($match85*100)/$numOfTxtFl),2);
				  $Final_match80=round((($match80*100)/$numOfTxtFl),2);
				  $Final_match75=round((($match75*100)/$numOfTxtFl),2);
				  $Final_match70=round((($match70*100)/$numOfTxtFl),2);
				  $Final_match65=round((($match65*100)/$numOfTxtFl),2);
				  $Final_match60=round((($match60*100)/$numOfTxtFl),2);
				  $Final_match55=round((($match55*100)/$numOfTxtFl),2);
				  $Final_match50=round((($match50*100)/$numOfTxtFl),2);
				  $Final_match45=round((($match45*100)/$numOfTxtFl),2);
				  $Final_match40=round((($match40*100)/$numOfTxtFl),2);
				  $Final_match35=round((($match35*100)/$numOfTxtFl),2);
				  $Final_match30=round((($match30*100)/$numOfTxtFl),2);
				  $Final_match25=round((($match25*100)/$numOfTxtFl),2);
				  $Final_match20=round((($match20*100)/$numOfTxtFl),2);
				  $Final_match15=round((($match15*100)/$numOfTxtFl),2);
				  $Final_match10=round((($match10*100)/$numOfTxtFl),2);
				  $Final_match5=round((($match5*100)/$numOfTxtFl),2);
				  $Final_match4=round((($match4*100)/$numOfTxtFl),2);
				  $Final_match3=round((($match3*100)/$numOfTxtFl),2);
				  $Final_match2=round((($match2*100)/$numOfTxtFl),2);
				  $Final_match1=round((($match1*100)/$numOfTxtFl),2);
				  
				  
				  
				  ?>
                    
                    
<?php 
					  $matchSsdeepDocxSeq=$Final_match95."-".$Final_match90."-".$Final_match85."-".$Final_match80."-".$Final_match75."-".$Final_match70."-".$Final_match65."-".$Final_match60."-".$Final_match55."-".$Final_match50."-".$Final_match45."-".$Final_match40."-".$Final_match35."-".$Final_match30."-".$Final_match25."-".$Final_match20."-".$Final_match15."-".$Final_match10."-".$Final_match5."-".$Final_match4."-".$Final_match3."-".$Final_match2."-".$Final_match1; 
					  ?>                    
                    
                      
<tr  style=" width: ;font-size:10.94px;">
  <td  style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center; width: ;">Match(%)</td>
  <td style="text-align: center; width: "><?php echo $Final_match95; ?></td><td style="text-align: center; width: "><?php echo $Final_match90; ?></td><td style="text-align: center;width: "><?php echo $Final_match85; ?></td><td style="text-align: center;width: "><?php echo $Final_match80; ?></td><td style="text-align: center;width: "><?php echo $Final_match75; ?></td><td style="text-align: center;width: "><?php echo $Final_match70; ?></td><td style="text-align: center;width: "><?php echo $Final_match65; ?></td><td style="text-align: center;width: "><?php echo $Final_match60; ?></td><td style="text-align: center;width: "><?php echo $Final_match55; ?></td><td style="text-align: center;width: "><?php echo $Final_match50; ?></td><td style="text-align: center;width: "><?php echo $Final_match45; ?></td><td style="text-align: center;width: "><?php echo $Final_match40; ?></td><td style="text-align: center;width: "><?php echo $Final_match35; ?></td><td style="text-align: center;width: "><?php echo $Final_match30; ?></td><td style="text-align: center;width: "><?php echo $Final_match25; ?></td><td style="text-align: center;width: "><?php echo $Final_match20; ?></td><td style="text-align: center;width: "><?php echo $Final_match15; ?></td><td style="text-align: center;width: "><?php echo $Final_match10; ?></td><td style="text-align: center;width: "><?php echo $Final_match5; ?></td><td style="text-align: center;width: "><?php echo $Final_match4; ?></td><td style="text-align: center;width: "><?php echo $Final_match3; ?></td><td style="text-align: center;width: "><?php echo $Final_match2; ?></td><td style="text-align: center;width: "><?php echo $Final_match1; ?></td></tr>                      
                      
                         
              </table>		
			  


<div id="breadcrumb">Tool : sdhash &nbsp;&nbsp; File type : Docx &nbsp;&nbsp; Dataset type : Sequential </div> 
            <!--<div id="breadcrumb" style="text-align: right;height: 2px;"><a href="FragmentTextResultsPdf.php?scheme=sdhash" target="_blank" style="text-decoration:none;color: black;">Download PDF</a></div> -->
			  <form id="frm" method="get" action="javascript:redirect();">
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
				  
				  
						  //echo exec('ssdeep -r ..\Data\Docx');
						  
						 //echo exec('sdhash ..\Data\FragmentIdentification\Docx\Sequentialfragment\Result\*.docx -o sdhashDocxSeqFrag1');
						  
						  
						 //echo exec('sdhash ..\Data\FragmentIdentification\Docx\Sequentialfragment\Docx\*.docx -o sdhashDocxSeqFrag2');
						  
						  //$rslt= exec('sdhash -c sdhashDocxSeqFrag1.sdbf sdhashDocxSeqFrag2.sdbf | sort >sdhashDocxSeqFrag.text');
						  
						  $rslt = file_get_contents('..\Final_Report_Fragment\sdhashDocxSeqFrag.text', true);
						  $sn=0;
						  $tp=0;
						  $tn=0;
						  $fp=0;
						  $fn=0;
						  $sn=0;
						  $rw="";
							//$t=(int)$_GET['threshold'];
							$t=(int)$_GET['threshold'];
					  		if($rslt==""){
								
								
								
							}else{
					  
						  $arr = explode("\n", $rslt);
						  
						  //echo count($arr);
								$cc=0;
						  
						  foreach ($arr as &$value) {
						  
						   if($value!=null){  
						  
						  $arr1 = explode("|", $value);
						  $cntr=0;
						  foreach ($arr1 as &$value1){
							  //echo $value1."----------";
							  
							  
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
						  $embdFl_arr = explode("_", $embddFll);
						  $imgFl_arr = explode(".", $imgFll);
								$embddFl=$embdFl_arr[0];
								$imgFl=$imgFl_arr[0];	  
												   
								
						  $prcnt_tmp=explode(".",$embdFl_arr[1]);
						  $prcnt=$prcnt_tmp[0];
						  if(strcmp($embddFl,$imgFl)==0){
							
								 switch ($prcnt) {
										case "0":
											$score95=$score95+(int)($similarity);
											if((int)($similarity)>=$t){
											$match95++;
											}
											break;
										case "1":
											$score90=$score90+(int)($similarity);
											if((int)($similarity)>=$t){
											$match90++;
											}
											break;
										case "2":
											$score85=$score85+(int)($similarity);
											if((int)($similarity)>=$t){
											$match85++;
											}
											break;
										case "3":
											$score80=$score80+(int)($similarity);
											if((int)($similarity)>=$t){
											$match80++;
											}
											break;
										case "4":
											$score75=$score75+(int)($similarity);
											if((int)($similarity)>=$t){
											$match75++;
											}
											break;
										case "5":
											$score70=$score70+(int)($similarity);
											if((int)($similarity)>=$t){
											$match70++;
											}
											break;
										case "6":
											$score65=$score65+(int)($similarity);
											if((int)($similarity)>=$t){
											$match65++;
											}
											break;
										case "7":
											$score60=$score60+(int)($similarity);
											if((int)($similarity)>=$t){
											$match60++;
											}
											break;
										case "8":
											$score55=$score55+(int)($similarity);
											if((int)($similarity)>=$t){
											$match55++;
											}
											break;
										case "9":
											$score50=$score50+(int)($similarity);
											if((int)($similarity)>=$t){
											$match50++;
											}
											break;
										case "10":
											$score45=$score45+(int)($similarity);
											if((int)($similarity)>=$t){
											$match45++;
											}
											break;
										case "11":
											$score40=$score40+(int)($similarity);
											if((int)($similarity)>=$t){
											$match40++;
											}
											break;
										case "12":
											$score35=$score35+(int)($similarity);
											if((int)($similarity)>=$t){
											$match35++;
											}
											break;
										case "13":
											$score30=$score30+(int)($similarity);
											if((int)($similarity)>=$t){
											$match30++;
											}
											break;
										case "14":
											$score25=$score25+(int)($similarity);
											if((int)($similarity)>=$t){
											$match25++;
											}
											break;
										case "15":
											$score20=$score20+(int)($similarity);
											if((int)($similarity)>=$t){
											$match20++;
											}
											break;
										case "16":
											$score15=$score15+(int)($similarity);
											if((int)($similarity)>=$t){
											$match15++;
											}
											break;
										case "17":
											$score10=$score10+(int)($similarity);
											if((int)($similarity)>=$t){
											$match10++;
											}
											break;
										case "18":
											$score5=$score5+(int)($similarity);
											if((int)($similarity)>=$t){
											$match5++;
											}
											break;
										case "19":
											$score4=$score4+(int)($similarity);
											if((int)($similarity)>=$t){
											$match4++;
											}
											break;
										case "20":
											$score3=$score3+(int)($similarity);
											if((int)($similarity)>=$t){
											$match3++;
											}
											break;
										case "21":
											$score2=$score2+(int)($similarity);
											if((int)($similarity)>=$t){
											$match2++;
											}
											break;
										case "22":
											$score1=$score1+(int)($similarity);
											if((int)($similarity)>=$t){
											$match1++;
											}
											break;
										case "23":
											//$real_similarity=">1";
											break;
										
									}

						  
						  }else{
						  
						 
						  }
						  				   
												   
							  
						  }
						 
						  
						  
						 
					  }
					   ?>
					  <?php
							  
					  }
						 
						  ?>
						  
						
					  
					 
					  
					  
					  
					 <!-- <tr align="righ" ><td colspan="2" align="right"><input type="submit" align="middle" value="submit" ></td></tr>
					  -->
					  
				  </table>
				  
				 
			   
			  
			  </form>
			  
			 
              
              <?php 
   // $dir = opendir('uploads/'); # This is the directory it will count from
   $numOfFrgmntFl=0;
   $numOfTxtFl=0;
   $fi1 = new FilesystemIterator("..\Data\FragmentIdentification\Docx\Sequentialfragment\Result", FilesystemIterator::SKIP_DOTS);
$numOfFrgmntFl=iterator_count($fi1);
$fi2 = new FilesystemIterator("..\Data\FragmentIdentification\Docx\Sequentialfragment\Docx", FilesystemIterator::SKIP_DOTS);
$numOfTxtFl=iterator_count($fi2);
$numOfComprsn=$numOfFrgmntFl*$numOfTxtFl;



?>
              
              
              
			  
			<table id="table<?php echo $tblid; ?>" style="width: 941px; height: 100%;">
					  
					  <tr  style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center; width: ;font-size:10.94px;"><td style="text-align: center; width: ;">Fragment Size</td><td style="text-align: center; width: ">95%</td><td style="text-align: center; width: ">90%</td><td style="text-align: center;width: ">85%</td><td style="text-align: center;width: ">80%</td><td style="text-align: center;width: ">75%</td><td style="text-align: center;width: ">70%</td><td style="text-align: center;width: ">65%</td><td style="text-align: center;width: ">60%</td><td style="text-align: center;width: ">55%</td><td style="text-align: center;width: ">50%</td><td style="text-align: center;width: ">45%</td><td style="text-align: center;width: ">40%</td><td style="text-align: center;width: ">35%</td><td style="text-align: center;width: ">30%</td><td style="text-align: center;width: ">25%</td><td style="text-align: center;width: ">20%</td><td style="text-align: center;width: ">15%</td><td style="text-align: center;width: ">10%</td><td style="text-align: center;width: ">5%</td><td style="text-align: center;width: ">4%</td><td style="text-align: center;width: ">3%</td><td style="text-align: center;width: ">2%</td><td style="text-align: center;width: ">1%</td></tr>
                      
                      <?php
				  
				  $Final_score95=round($score95/$numOfTxtFl,1);
				  $Final_score90=round($score90/$numOfTxtFl,1);
				  $Final_score85=round($score85/$numOfTxtFl,1);
				  $Final_score80=round($score80/$numOfTxtFl,1);
				  $Final_score75=round($score75/$numOfTxtFl,1);
				  $Final_score70=round($score70/$numOfTxtFl,1);
				  $Final_score65=round($score65/$numOfTxtFl,1);
				  $Final_score60=round($score60/$numOfTxtFl,1);
				  $Final_score55=round($score55/$numOfTxtFl,1);
				  $Final_score50=round($score50/$numOfTxtFl,1);
				  $Final_score45=round($score45/$numOfTxtFl,1);
				  $Final_score40=round($score40/$numOfTxtFl,1);
				  $Final_score35=round($score35/$numOfTxtFl,1);
				  $Final_score30=round($score30/$numOfTxtFl,1);
				  $Final_score25=round($score25/$numOfTxtFl,1);
				  $Final_score20=round($score20/$numOfTxtFl,1);
				  $Final_score15=round($score15/$numOfTxtFl,1);
				  $Final_score10=round($score10/$numOfTxtFl,1);
				  $Final_score5=round($score5/$numOfTxtFl,1);
				  $Final_score4=round($score4/$numOfTxtFl,1);
				  $Final_score3=round($score3/$numOfTxtFl,1);
				  $Final_score2=round($score2/$numOfTxtFl,1);
				  $Final_score1=round($score1/$numOfTxtFl,1);
				  
				  
				  
				  ?>
				  
                      <tr  style=" width: ;font-size:10.94px;"><td  style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center; width: ;">Average  Score</td><td style="text-align: center; width: "><?php echo $Final_score95; ?></td><td style="text-align: center; width: "><?php echo $Final_score90; ?></td><td style="text-align: center;width: "><?php echo $Final_score85; ?></td><td style="text-align: center;width: "><?php echo $Final_score80; ?></td><td style="text-align: center;width: "><?php echo $Final_score75; ?></td><td style="text-align: center;width: "><?php echo $Final_score70; ?></td><td style="text-align: center;width: "><?php echo $Final_score65; ?></td><td style="text-align: center;width: "><?php echo $Final_score60; ?></td><td style="text-align: center;width: "><?php echo $Final_score55; ?></td><td style="text-align: center;width: "><?php echo $Final_score50; ?></td><td style="text-align: center;width: "><?php echo $Final_score45; ?></td><td style="text-align: center;width: "><?php echo $Final_score40; ?></td><td style="text-align: center;width: "><?php echo $Final_score35; ?></td><td style="text-align: center;width: "><?php echo $Final_score30; ?></td><td style="text-align: center;width: "><?php echo $Final_score25; ?></td><td style="text-align: center;width: "><?php echo $Final_score20; ?></td><td style="text-align: center;width: "><?php echo $Final_score15; ?></td><td style="text-align: center;width: "><?php echo $Final_score10; ?></td><td style="text-align: center;width: "><?php echo $Final_score5; ?></td><td style="text-align: center;width: "><?php echo $Final_score4; ?></td><td style="text-align: center;width: "><?php echo $Final_score3; ?></td><td style="text-align: center;width: "><?php echo $Final_score2; ?></td><td style="text-align: center;width: "><?php echo $Final_score1; ?></td></tr>
                      
                      <?php $scoreSdhashDocxSeq=$Final_score95."-".$Final_score90."-".$Final_score85."-".$Final_score80."-".$Final_score75."-".$Final_score70."-".$Final_score65."-".$Final_score60."-".$Final_score55."-".$Final_score50."-".$Final_score45."-".$Final_score40."-".$Final_score35."-".$Final_score30."-".$Final_score25."-".$Final_score20."-".$Final_score15."-".$Final_score10."-".$Final_score5."-".$Final_score4."-".$Final_score3."-".$Final_score2."-".$Final_score1; ?>
                      
                      
                      
 <?php
				  
				  $Final_match95=round((($match95*100)/$numOfTxtFl),2);
				  $Final_match90=round((($match90*100)/$numOfTxtFl),2);
				  $Final_match85=round((($match85*100)/$numOfTxtFl),2);
				  $Final_match80=round((($match80*100)/$numOfTxtFl),2);
				  $Final_match75=round((($match75*100)/$numOfTxtFl),2);
				  $Final_match70=round((($match70*100)/$numOfTxtFl),2);
				  $Final_match65=round((($match65*100)/$numOfTxtFl),2);
				  $Final_match60=round((($match60*100)/$numOfTxtFl),2);
				  $Final_match55=round((($match55*100)/$numOfTxtFl),2);
				  $Final_match50=round((($match50*100)/$numOfTxtFl),2);
				  $Final_match45=round((($match45*100)/$numOfTxtFl),2);
				  $Final_match40=round((($match40*100)/$numOfTxtFl),2);
				  $Final_match35=round((($match35*100)/$numOfTxtFl),2);
				  $Final_match30=round((($match30*100)/$numOfTxtFl),2);
				  $Final_match25=round((($match25*100)/$numOfTxtFl),2);
				  $Final_match20=round((($match20*100)/$numOfTxtFl),2);
				  $Final_match15=round((($match15*100)/$numOfTxtFl),2);
				  $Final_match10=round((($match10*100)/$numOfTxtFl),2);
				  $Final_match5=round((($match5*100)/$numOfTxtFl),2);
				  $Final_match4=round((($match4*100)/$numOfTxtFl),2);
				  $Final_match3=round((($match3*100)/$numOfTxtFl),2);
				  $Final_match2=round((($match2*100)/$numOfTxtFl),2);
				  $Final_match1=round((($match1*100)/$numOfTxtFl),2);
				  
				  
				  
				  ?>
                    
                    
<?php 
					  $matchSdhashDocxSeq=$Final_match95."-".$Final_match90."-".$Final_match85."-".$Final_match80."-".$Final_match75."-".$Final_match70."-".$Final_match65."-".$Final_match60."-".$Final_match55."-".$Final_match50."-".$Final_match45."-".$Final_match40."-".$Final_match35."-".$Final_match30."-".$Final_match25."-".$Final_match20."-".$Final_match15."-".$Final_match10."-".$Final_match5."-".$Final_match4."-".$Final_match3."-".$Final_match2."-".$Final_match1; 
					  ?>                    
                    
                      
<tr  style=" width: ;font-size:10.94px;">
  <td  style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center; width: ;">Match(%)</td>
  <td style="text-align: center; width: "><?php echo $Final_match95; ?></td><td style="text-align: center; width: "><?php echo $Final_match90; ?></td><td style="text-align: center;width: "><?php echo $Final_match85; ?></td><td style="text-align: center;width: "><?php echo $Final_match80; ?></td><td style="text-align: center;width: "><?php echo $Final_match75; ?></td><td style="text-align: center;width: "><?php echo $Final_match70; ?></td><td style="text-align: center;width: "><?php echo $Final_match65; ?></td><td style="text-align: center;width: "><?php echo $Final_match60; ?></td><td style="text-align: center;width: "><?php echo $Final_match55; ?></td><td style="text-align: center;width: "><?php echo $Final_match50; ?></td><td style="text-align: center;width: "><?php echo $Final_match45; ?></td><td style="text-align: center;width: "><?php echo $Final_match40; ?></td><td style="text-align: center;width: "><?php echo $Final_match35; ?></td><td style="text-align: center;width: "><?php echo $Final_match30; ?></td><td style="text-align: center;width: "><?php echo $Final_match25; ?></td><td style="text-align: center;width: "><?php echo $Final_match20; ?></td><td style="text-align: center;width: "><?php echo $Final_match15; ?></td><td style="text-align: center;width: "><?php echo $Final_match10; ?></td><td style="text-align: center;width: "><?php echo $Final_match5; ?></td><td style="text-align: center;width: "><?php echo $Final_match4; ?></td><td style="text-align: center;width: "><?php echo $Final_match3; ?></td><td style="text-align: center;width: "><?php echo $Final_match2; ?></td><td style="text-align: center;width: "><?php echo $Final_match1; ?></td></tr>                      
                      
                      
                         
              </table>		



<div id="breadcrumb">Tool : ssdeep &nbsp;&nbsp; File type : Docx &nbsp;&nbsp; Dataset type : Random </div> 
			  <!--<div id="breadcrumb" style="text-align: right;height: 2px;"><a href="FragmentDocxResultsPdf.php?scheme=ssdeep" target="_blank" style="text-decoration:none;color: black;">Download PDF</a></div> -->
			  <form id="frm" method="get" action="javascript:redirect();">
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
				  
				  
				  
				  
				  ?>
                  
					  
						  <?php
						  //echo exec('ssdeep -r ..\Data\Docx');
						  
						 //echo exec('ssdeep -r ..\Data\FragmentIdentification\Docx\RandomFragment\Result >ssdeepFregDocxRan1.text');
						  
						 //echo exec('ssdeep -r ..\Data\FragmentIdentification\Docx\RandomFragment\Docx >ssdeepFregDocxRan2.text');
						  
						  //$rslt= exec('ssdeep -k ssdeepFregDocxRan1.text ssdeepFregDocxRan2.text >ssdeepFregRanDocx.text');
						  
						  $rslt = file_get_contents('..\Final_Report_Fragment\ssdeepFregRanDocx.text', true);
					  $sn=0;
						
							$tp=0;
							$tn=0;
							$fp=0;
							$fn=0;
							$sn=0;
							
							//$t=(int)$_GET['threshold'];
					  		$t=(int)$_GET['threshold'];
							$rw="";
							
					  		if($rslt==""){
								
								
							}else{
					  
						  $arr = explode("\n", $rslt);
						  
								$sn=0;
								
								//$tblid=0;
						  
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
							  		
						
					  $embddFll=$target;
						$imgFll=$file_img;
						
						 $embdFl_arr = explode("_", $embddFll);
						  $imgFl_arr = explode(".", $imgFll);
								
								$embddFl=$embdFl_arr[0];
								$imgFl=$imgFl_arr[0];	  
								
						
							  
						///////////////////////////////////////////////////////////////////////////
							  
							  
							  $prcnt_tmp=explode(".",$embdFl_arr[1]);
							  $prcnt=$prcnt_tmp[0];

							  //echo $prcnt;

								
						  
						  if(strcmp($embddFl,$imgFl)==0){
									//echo $embdFl."****".$orgnlFl."-----\n"; 
							  ///////////////////////////////////////////////////////
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
									
								}else{
									
									
								}
					  ?>
					  
					 <?php 
					  
					  
					
					  	  
					  
					  
					  ?>
					  
					  
					  
					  
					  
							  
					  
						<?php	  
						
						
						
						
						
							  
						  }
							  
					  }
						  
						  ?>
						  
						
					  
					 
					  
					  
					  
					 
				  
			  
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
   $fi1 = new FilesystemIterator("..\Data\FragmentIdentification\Docx\RandomFragment\Result", FilesystemIterator::SKIP_DOTS);
$numOfFrgmntFl=iterator_count($fi1);
$fi2 = new FilesystemIterator("..\Data\FragmentIdentification\Docx\RandomFragment\Docx", FilesystemIterator::SKIP_DOTS);
$numOfTxtFl=iterator_count($fi2);
$numOfComprsn=$numOfFrgmntFl*$numOfTxtFl;

$numOfRanDocxFile=$numOfTxtFl;
$numOfRanDocxFrag=$numOfFrgmntFl;
			  
?>
              
              
              
 <table id="table<?php echo $tblid; ?>" style="width: 941px; height: 100%;">
					  
					  <tr  style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center; width: ;font-size:10.94px;">
					    <td style="text-align: center; width: ;">Fragment Size</td><td style="text-align: center; width: ">95%</td><td style="text-align: center; width: ">90%</td><td style="text-align: center;width: ">85%</td><td style="text-align: center;width: ">80%</td><td style="text-align: center;width: ">75%</td><td style="text-align: center;width: ">70%</td><td style="text-align: center;width: ">65%</td><td style="text-align: center;width: ">60%</td><td style="text-align: center;width: ">55%</td><td style="text-align: center;width: ">50%</td><td style="text-align: center;width: ">45%</td><td style="text-align: center;width: ">40%</td><td style="text-align: center;width: ">35%</td><td style="text-align: center;width: ">30%</td><td style="text-align: center;width: ">25%</td><td style="text-align: center;width: ">20%</td><td style="text-align: center;width: ">15%</td><td style="text-align: center;width: ">10%</td><td style="text-align: center;width: ">5%</td><td style="text-align: center;width: ">4%</td><td style="text-align: center;width: ">3%</td><td style="text-align: center;width: ">2%</td><td style="text-align: center;width: ">1%</td></tr>
                      
                      <?php
				  
				  $Final_score95=round($score95/$numOfTxtFl,1);
				  $Final_score90=round($score90/$numOfTxtFl,1);
				  $Final_score85=round($score85/$numOfTxtFl,1);
				  $Final_score80=round($score80/$numOfTxtFl,1);
				  $Final_score75=round($score75/$numOfTxtFl,1);
				  $Final_score70=round($score70/$numOfTxtFl,1);
				  $Final_score65=round($score65/$numOfTxtFl,1);
				  $Final_score60=round($score60/$numOfTxtFl,1);
				  $Final_score55=round($score55/$numOfTxtFl,1);
				  $Final_score50=round($score50/$numOfTxtFl,1);
				  $Final_score45=round($score45/$numOfTxtFl,1);
				  $Final_score40=round($score40/$numOfTxtFl,1);
				  $Final_score35=round($score35/$numOfTxtFl,1);
				  $Final_score30=round($score30/$numOfTxtFl,1);
				  $Final_score25=round($score25/$numOfTxtFl,1);
				  $Final_score20=round($score20/$numOfTxtFl,1);
				  $Final_score15=round($score15/$numOfTxtFl,1);
				  $Final_score10=round($score10/$numOfTxtFl,1);
				  $Final_score5=round($score5/$numOfTxtFl,1);
				  $Final_score4=round($score4/$numOfTxtFl,1);
				  $Final_score3=round($score3/$numOfTxtFl,1);
				  $Final_score2=round($score2/$numOfTxtFl,1);
				  $Final_score1=round($score1/$numOfTxtFl,1);
				  
				  
				  
				  ?>
				  
                      <tr  style=" width: ;font-size:10.94px;"><td  style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center; width: ;">Average  Score</td><td style="text-align: center; width: "><?php echo $Final_score95; ?></td><td style="text-align: center; width: "><?php echo $Final_score90; ?></td><td style="text-align: center;width: "><?php echo $Final_score85; ?></td><td style="text-align: center;width: "><?php echo $Final_score80; ?></td><td style="text-align: center;width: "><?php echo $Final_score75; ?></td><td style="text-align: center;width: "><?php echo $Final_score70; ?></td><td style="text-align: center;width: "><?php echo $Final_score65; ?></td><td style="text-align: center;width: "><?php echo $Final_score60; ?></td><td style="text-align: center;width: "><?php echo $Final_score55; ?></td><td style="text-align: center;width: "><?php echo $Final_score50; ?></td><td style="text-align: center;width: "><?php echo $Final_score45; ?></td><td style="text-align: center;width: "><?php echo $Final_score40; ?></td><td style="text-align: center;width: "><?php echo $Final_score35; ?></td><td style="text-align: center;width: "><?php echo $Final_score30; ?></td><td style="text-align: center;width: "><?php echo $Final_score25; ?></td><td style="text-align: center;width: "><?php echo $Final_score20; ?></td><td style="text-align: center;width: "><?php echo $Final_score15; ?></td><td style="text-align: center;width: "><?php echo $Final_score10; ?></td><td style="text-align: center;width: "><?php echo $Final_score5; ?></td><td style="text-align: center;width: "><?php echo $Final_score4; ?></td><td style="text-align: center;width: "><?php echo $Final_score3; ?></td><td style="text-align: center;width: "><?php echo $Final_score2; ?></td><td style="text-align: center;width: "><?php echo $Final_score1; ?></td></tr>
                      
                      <?php $scoreSsdeepDocxRan=$Final_score95."-".$Final_score90."-".$Final_score85."-".$Final_score80."-".$Final_score75."-".$Final_score70."-".$Final_score65."-".$Final_score60."-".$Final_score55."-".$Final_score50."-".$Final_score45."-".$Final_score40."-".$Final_score35."-".$Final_score30."-".$Final_score25."-".$Final_score20."-".$Final_score15."-".$Final_score10."-".$Final_score5."-".$Final_score4."-".$Final_score3."-".$Final_score2."-".$Final_score1; ?>
                      
                      
                      
 <?php
				  
				  $Final_match95=round((($match95*100)/$numOfTxtFl),2);
				  $Final_match90=round((($match90*100)/$numOfTxtFl),2);
				  $Final_match85=round((($match85*100)/$numOfTxtFl),2);
				  $Final_match80=round((($match80*100)/$numOfTxtFl),2);
				  $Final_match75=round((($match75*100)/$numOfTxtFl),2);
				  $Final_match70=round((($match70*100)/$numOfTxtFl),2);
				  $Final_match65=round((($match65*100)/$numOfTxtFl),2);
				  $Final_match60=round((($match60*100)/$numOfTxtFl),2);
				  $Final_match55=round((($match55*100)/$numOfTxtFl),2);
				  $Final_match50=round((($match50*100)/$numOfTxtFl),2);
				  $Final_match45=round((($match45*100)/$numOfTxtFl),2);
				  $Final_match40=round((($match40*100)/$numOfTxtFl),2);
				  $Final_match35=round((($match35*100)/$numOfTxtFl),2);
				  $Final_match30=round((($match30*100)/$numOfTxtFl),2);
				  $Final_match25=round((($match25*100)/$numOfTxtFl),2);
				  $Final_match20=round((($match20*100)/$numOfTxtFl),2);
				  $Final_match15=round((($match15*100)/$numOfTxtFl),2);
				  $Final_match10=round((($match10*100)/$numOfTxtFl),2);
				  $Final_match5=round((($match5*100)/$numOfTxtFl),2);
				  $Final_match4=round((($match4*100)/$numOfTxtFl),2);
				  $Final_match3=round((($match3*100)/$numOfTxtFl),2);
				  $Final_match2=round((($match2*100)/$numOfTxtFl),2);
				  $Final_match1=round((($match1*100)/$numOfTxtFl),2);
				  
				  
				  
				  ?>
                    
                    
<?php 
					  $matchSsdeepDocxRan=$Final_match95."-".$Final_match90."-".$Final_match85."-".$Final_match80."-".$Final_match75."-".$Final_match70."-".$Final_match65."-".$Final_match60."-".$Final_match55."-".$Final_match50."-".$Final_match45."-".$Final_match40."-".$Final_match35."-".$Final_match30."-".$Final_match25."-".$Final_match20."-".$Final_match15."-".$Final_match10."-".$Final_match5."-".$Final_match4."-".$Final_match3."-".$Final_match2."-".$Final_match1; 
					  ?>                    
                    
                      
<tr  style=" width: ;font-size:10.94px;">
  <td  style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center; width: ;">Match(%)</td>
  <td style="text-align: center; width: "><?php echo $Final_match95; ?></td><td style="text-align: center; width: "><?php echo $Final_match90; ?></td><td style="text-align: center;width: "><?php echo $Final_match85; ?></td><td style="text-align: center;width: "><?php echo $Final_match80; ?></td><td style="text-align: center;width: "><?php echo $Final_match75; ?></td><td style="text-align: center;width: "><?php echo $Final_match70; ?></td><td style="text-align: center;width: "><?php echo $Final_match65; ?></td><td style="text-align: center;width: "><?php echo $Final_match60; ?></td><td style="text-align: center;width: "><?php echo $Final_match55; ?></td><td style="text-align: center;width: "><?php echo $Final_match50; ?></td><td style="text-align: center;width: "><?php echo $Final_match45; ?></td><td style="text-align: center;width: "><?php echo $Final_match40; ?></td><td style="text-align: center;width: "><?php echo $Final_match35; ?></td><td style="text-align: center;width: "><?php echo $Final_match30; ?></td><td style="text-align: center;width: "><?php echo $Final_match25; ?></td><td style="text-align: center;width: "><?php echo $Final_match20; ?></td><td style="text-align: center;width: "><?php echo $Final_match15; ?></td><td style="text-align: center;width: "><?php echo $Final_match10; ?></td><td style="text-align: center;width: "><?php echo $Final_match5; ?></td><td style="text-align: center;width: "><?php echo $Final_match4; ?></td><td style="text-align: center;width: "><?php echo $Final_match3; ?></td><td style="text-align: center;width: "><?php echo $Final_match2; ?></td><td style="text-align: center;width: "><?php echo $Final_match1; ?></td></tr>                      
                      
                         
              </table>





<div id="breadcrumb">Tool : sdhash &nbsp;&nbsp; File type : Docx &nbsp;&nbsp; Dataset type : Random </div> 
            <!--<div id="breadcrumb" style="text-align: right;height: 2px;"><a href="FragmentTextResultsPdf.php?scheme=sdhash" target="_blank" style="text-decoration:none;color: black;">Download PDF</a></div> -->
			  <form id="frm" method="get" action="javascript:redirect();">
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
				  
				  
						  //echo exec('ssdeep -r ..\Data\Docx');
						  
						// echo exec('sdhash ..\Data\FragmentIdentification\Docx\RandomFragment\Result\*.docx -o sdhashDocxRanFrag1');
						  
						  
						 //echo exec('sdhash ..\Data\FragmentIdentification\Docx\RandomFragment\Docx\*.docx -o sdhashDocxRanFrag2');
						  
						  //$rslt= exec('sdhash -c sdhashDocxRanFrag1.sdbf sdhashDocxRanFrag2.sdbf | sort >sdhashDocxRanFrag.text');
						  
						  $rslt = file_get_contents('..\Final_Report_Fragment\sdhashDocxRanFrag.text', true);
						  $sn=0;
						  $tp=0;
						  $tn=0;
						  $fp=0;
						  $fn=0;
						  $sn=0;
						  $rw="";
							//$t=(int)$_GET['threshold'];
					  		$t=(int)$_GET['threshold'];
							if($rslt==""){
								
								
								
							}else{
					  
						  $arr = explode("\n", $rslt);
						  
						  //echo count($arr);
								$cc=0;
						  
						  foreach ($arr as &$value) {
						  
						   if($value!=null){  
						  
						  $arr1 = explode("|", $value);
						  $cntr=0;
						  foreach ($arr1 as &$value1){
							  //echo $value1."----------";
							  
							  
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
						  $embdFl_arr = explode("_", $embddFll);
						  $imgFl_arr = explode(".", $imgFll);
								$embddFl=$embdFl_arr[0];
								$imgFl=$imgFl_arr[0];	  
												   
								
						  $prcnt_tmp=explode(".",$embdFl_arr[1]);
						  $prcnt=$prcnt_tmp[0];
						  if(strcmp($embddFl,$imgFl)==0){
							
								 switch ($prcnt) {
										case "0":
											$score95=$score95+(int)($similarity);
											if((int)($similarity)>=$t){
											$match95++;
											}
											break;
										case "1":
											$score90=$score90+(int)($similarity);
											if((int)($similarity)>=$t){
											$match90++;
											}
											break;
										case "2":
											$score85=$score85+(int)($similarity);
											if((int)($similarity)>=$t){
											$match85++;
											}
											break;
										case "3":
											$score80=$score80+(int)($similarity);
											if((int)($similarity)>=$t){
											$match80++;
											}
											break;
										case "4":
											$score75=$score75+(int)($similarity);
											if((int)($similarity)>=$t){
											$match75++;
											}
											break;
										case "5":
											$score70=$score70+(int)($similarity);
											if((int)($similarity)>=$t){
											$match70++;
											}
											break;
										case "6":
											$score65=$score65+(int)($similarity);
											if((int)($similarity)>=$t){
											$match65++;
											}
											break;
										case "7":
											$score60=$score60+(int)($similarity);
											if((int)($similarity)>=$t){
											$match60++;
											}
											break;
										case "8":
											$score55=$score55+(int)($similarity);
											if((int)($similarity)>=$t){
											$match55++;
											}
											break;
										case "9":
											$score50=$score50+(int)($similarity);
											if((int)($similarity)>=$t){
											$match50++;
											}
											break;
										case "10":
											$score45=$score45+(int)($similarity);
											if((int)($similarity)>=$t){
											$match45++;
											}
											break;
										case "11":
											$score40=$score40+(int)($similarity);
											if((int)($similarity)>=$t){
											$match40++;
											}
											break;
										case "12":
											$score35=$score35+(int)($similarity);
											if((int)($similarity)>=$t){
											$match35++;
											}
											break;
										case "13":
											$score30=$score30+(int)($similarity);
											if((int)($similarity)>=$t){
											$match30++;
											}
											break;
										case "14":
											$score25=$score25+(int)($similarity);
											if((int)($similarity)>=$t){
											$match25++;
											}
											break;
										case "15":
											$score20=$score20+(int)($similarity);
											if((int)($similarity)>=$t){
											$match20++;
											}
											break;
										case "16":
											$score15=$score15+(int)($similarity);
											if((int)($similarity)>=$t){
											$match15++;
											}
											break;
										case "17":
											$score10=$score10+(int)($similarity);
											if((int)($similarity)>=$t){
											$match10++;
											}
											break;
										case "18":
											$score5=$score5+(int)($similarity);
											if((int)($similarity)>=$t){
											$match5++;
											}
											break;
										case "19":
											$score4=$score4+(int)($similarity);
											if((int)($similarity)>=$t){
											$match4++;
											}
											break;
										case "20":
											$score3=$score3+(int)($similarity);
											if((int)($similarity)>=$t){
											$match3++;
											}
											break;
										case "21":
											$score2=$score2+(int)($similarity);
											if((int)($similarity)>=$t){
											$match2++;
											}
											break;
										case "22":
											$score1=$score1+(int)($similarity);
											if((int)($similarity)>=$t){
											$match1++;
											}
											break;
										case "23":
											//$real_similarity=">1";
											break;
										
									}

						  
						  }else{
						  
						 
						  }
						  				   
												   
							  
						  }
						 
						  
						  
						 
					  }
					   ?>
					  <?php
							  
					  }
						 
						  ?>
						  
						
					  
					 
					  
					  
					  
					 <!-- <tr align="righ" ><td colspan="2" align="right"><input type="submit" align="middle" value="submit" ></td></tr>
					  -->
					  
				  </table>
				  
				 
			   
			  
			  </form>
			  
			 
              
              <?php 
   // $dir = opendir('uploads/'); # This is the directory it will count from
   $numOfFrgmntFl=0;
   $numOfTxtFl=0;
   $fi1 = new FilesystemIterator("..\Data\FragmentIdentification\Docx\RandomFragment\Result", FilesystemIterator::SKIP_DOTS);
$numOfFrgmntFl=iterator_count($fi1);
$fi2 = new FilesystemIterator("..\Data\FragmentIdentification\Docx\RandomFragment\Docx", FilesystemIterator::SKIP_DOTS);
$numOfTxtFl=iterator_count($fi2);
$numOfComprsn=$numOfFrgmntFl*$numOfTxtFl;



?>
              
              
              
			  
			<table id="table<?php echo $tblid; ?>" style="width: 941px; height: 100%;">
					  
					  <tr  style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center; width: ;font-size:10.94px;">
					    <td style="text-align: center; width: ;">Fragment Size</td><td style="text-align: center; width: ">95%</td><td style="text-align: center; width: ">90%</td><td style="text-align: center;width: ">85%</td><td style="text-align: center;width: ">80%</td><td style="text-align: center;width: ">75%</td><td style="text-align: center;width: ">70%</td><td style="text-align: center;width: ">65%</td><td style="text-align: center;width: ">60%</td><td style="text-align: center;width: ">55%</td><td style="text-align: center;width: ">50%</td><td style="text-align: center;width: ">45%</td><td style="text-align: center;width: ">40%</td><td style="text-align: center;width: ">35%</td><td style="text-align: center;width: ">30%</td><td style="text-align: center;width: ">25%</td><td style="text-align: center;width: ">20%</td><td style="text-align: center;width: ">15%</td><td style="text-align: center;width: ">10%</td><td style="text-align: center;width: ">5%</td><td style="text-align: center;width: ">4%</td><td style="text-align: center;width: ">3%</td><td style="text-align: center;width: ">2%</td><td style="text-align: center;width: ">1%</td></tr>
                      
                      <?php
				  
				  $Final_score95=round($score95/$numOfTxtFl,1);
				  $Final_score90=round($score90/$numOfTxtFl,1);
				  $Final_score85=round($score85/$numOfTxtFl,1);
				  $Final_score80=round($score80/$numOfTxtFl,1);
				  $Final_score75=round($score75/$numOfTxtFl,1);
				  $Final_score70=round($score70/$numOfTxtFl,1);
				  $Final_score65=round($score65/$numOfTxtFl,1);
				  $Final_score60=round($score60/$numOfTxtFl,1);
				  $Final_score55=round($score55/$numOfTxtFl,1);
				  $Final_score50=round($score50/$numOfTxtFl,1);
				  $Final_score45=round($score45/$numOfTxtFl,1);
				  $Final_score40=round($score40/$numOfTxtFl,1);
				  $Final_score35=round($score35/$numOfTxtFl,1);
				  $Final_score30=round($score30/$numOfTxtFl,1);
				  $Final_score25=round($score25/$numOfTxtFl,1);
				  $Final_score20=round($score20/$numOfTxtFl,1);
				  $Final_score15=round($score15/$numOfTxtFl,1);
				  $Final_score10=round($score10/$numOfTxtFl,1);
				  $Final_score5=round($score5/$numOfTxtFl,1);
				  $Final_score4=round($score4/$numOfTxtFl,1);
				  $Final_score3=round($score3/$numOfTxtFl,1);
				  $Final_score2=round($score2/$numOfTxtFl,1);
				  $Final_score1=round($score1/$numOfTxtFl,1);
				  
				  
				  
				  ?>
				  
                      <tr  style=" width: ;font-size:10.94px;"><td  style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center; width: ;">Average  Score</td><td style="text-align: center; width: "><?php echo $Final_score95; ?></td><td style="text-align: center; width: "><?php echo $Final_score90; ?></td><td style="text-align: center;width: "><?php echo $Final_score85; ?></td><td style="text-align: center;width: "><?php echo $Final_score80; ?></td><td style="text-align: center;width: "><?php echo $Final_score75; ?></td><td style="text-align: center;width: "><?php echo $Final_score70; ?></td><td style="text-align: center;width: "><?php echo $Final_score65; ?></td><td style="text-align: center;width: "><?php echo $Final_score60; ?></td><td style="text-align: center;width: "><?php echo $Final_score55; ?></td><td style="text-align: center;width: "><?php echo $Final_score50; ?></td><td style="text-align: center;width: "><?php echo $Final_score45; ?></td><td style="text-align: center;width: "><?php echo $Final_score40; ?></td><td style="text-align: center;width: "><?php echo $Final_score35; ?></td><td style="text-align: center;width: "><?php echo $Final_score30; ?></td><td style="text-align: center;width: "><?php echo $Final_score25; ?></td><td style="text-align: center;width: "><?php echo $Final_score20; ?></td><td style="text-align: center;width: "><?php echo $Final_score15; ?></td><td style="text-align: center;width: "><?php echo $Final_score10; ?></td><td style="text-align: center;width: "><?php echo $Final_score5; ?></td><td style="text-align: center;width: "><?php echo $Final_score4; ?></td><td style="text-align: center;width: "><?php echo $Final_score3; ?></td><td style="text-align: center;width: "><?php echo $Final_score2; ?></td><td style="text-align: center;width: "><?php echo $Final_score1; ?></td></tr>
                      
                      <?php $scoreSdhashDocxRan=$Final_score95."-".$Final_score90."-".$Final_score85."-".$Final_score80."-".$Final_score75."-".$Final_score70."-".$Final_score65."-".$Final_score60."-".$Final_score55."-".$Final_score50."-".$Final_score45."-".$Final_score40."-".$Final_score35."-".$Final_score30."-".$Final_score25."-".$Final_score20."-".$Final_score15."-".$Final_score10."-".$Final_score5."-".$Final_score4."-".$Final_score3."-".$Final_score2."-".$Final_score1; ?>
                      
                      
                      
 <?php
				  
				  $Final_match95=round((($match95*100)/$numOfTxtFl),2);
				  $Final_match90=round((($match90*100)/$numOfTxtFl),2);
				  $Final_match85=round((($match85*100)/$numOfTxtFl),2);
				  $Final_match80=round((($match80*100)/$numOfTxtFl),2);
				  $Final_match75=round((($match75*100)/$numOfTxtFl),2);
				  $Final_match70=round((($match70*100)/$numOfTxtFl),2);
				  $Final_match65=round((($match65*100)/$numOfTxtFl),2);
				  $Final_match60=round((($match60*100)/$numOfTxtFl),2);
				  $Final_match55=round((($match55*100)/$numOfTxtFl),2);
				  $Final_match50=round((($match50*100)/$numOfTxtFl),2);
				  $Final_match45=round((($match45*100)/$numOfTxtFl),2);
				  $Final_match40=round((($match40*100)/$numOfTxtFl),2);
				  $Final_match35=round((($match35*100)/$numOfTxtFl),2);
				  $Final_match30=round((($match30*100)/$numOfTxtFl),2);
				  $Final_match25=round((($match25*100)/$numOfTxtFl),2);
				  $Final_match20=round((($match20*100)/$numOfTxtFl),2);
				  $Final_match15=round((($match15*100)/$numOfTxtFl),2);
				  $Final_match10=round((($match10*100)/$numOfTxtFl),2);
				  $Final_match5=round((($match5*100)/$numOfTxtFl),2);
				  $Final_match4=round((($match4*100)/$numOfTxtFl),2);
				  $Final_match3=round((($match3*100)/$numOfTxtFl),2);
				  $Final_match2=round((($match2*100)/$numOfTxtFl),2);
				  $Final_match1=round((($match1*100)/$numOfTxtFl),2);
				  
				  
				  
				  ?>
                    
                    
<?php 
					  $matchSdhashDocxRan=$Final_match95."-".$Final_match90."-".$Final_match85."-".$Final_match80."-".$Final_match75."-".$Final_match70."-".$Final_match65."-".$Final_match60."-".$Final_match55."-".$Final_match50."-".$Final_match45."-".$Final_match40."-".$Final_match35."-".$Final_match30."-".$Final_match25."-".$Final_match20."-".$Final_match15."-".$Final_match10."-".$Final_match5."-".$Final_match4."-".$Final_match3."-".$Final_match2."-".$Final_match1; 
					  ?>                    
                    
                      
<tr  style=" width: ;font-size:10.94px;">
  <td  style="font-family: Arial, 'Century Gothic'; background-color: #0e375d; color:white; text-align: center;align-content: center;align-items: center; width: ;">Match(%)</td>
  <td style="text-align: center; width: "><?php echo $Final_match95; ?></td><td style="text-align: center; width: "><?php echo $Final_match90; ?></td><td style="text-align: center;width: "><?php echo $Final_match85; ?></td><td style="text-align: center;width: "><?php echo $Final_match80; ?></td><td style="text-align: center;width: "><?php echo $Final_match75; ?></td><td style="text-align: center;width: "><?php echo $Final_match70; ?></td><td style="text-align: center;width: "><?php echo $Final_match65; ?></td><td style="text-align: center;width: "><?php echo $Final_match60; ?></td><td style="text-align: center;width: "><?php echo $Final_match55; ?></td><td style="text-align: center;width: "><?php echo $Final_match50; ?></td><td style="text-align: center;width: "><?php echo $Final_match45; ?></td><td style="text-align: center;width: "><?php echo $Final_match40; ?></td><td style="text-align: center;width: "><?php echo $Final_match35; ?></td><td style="text-align: center;width: "><?php echo $Final_match30; ?></td><td style="text-align: center;width: "><?php echo $Final_match25; ?></td><td style="text-align: center;width: "><?php echo $Final_match20; ?></td><td style="text-align: center;width: "><?php echo $Final_match15; ?></td><td style="text-align: center;width: "><?php echo $Final_match10; ?></td><td style="text-align: center;width: "><?php echo $Final_match5; ?></td><td style="text-align: center;width: "><?php echo $Final_match4; ?></td><td style="text-align: center;width: "><?php echo $Final_match3; ?></td><td style="text-align: center;width: "><?php echo $Final_match2; ?></td><td style="text-align: center;width: "><?php echo $Final_match1; ?></td></tr>                      
                      
                         
              </table>




                  
		  </div>
		<!-- Main Content Ends-->
        
        <table style="width:941px;;text-align:right">  
                	  
                     
<tr align="right"  style="width:941px;text-align:center;"><td align="right"><input type="submit" align="middle" style="margin-left:450px;" value="Next"  onClick="location.href = 'result_report_smallest_fragment_correlation_graph.php?scoreSsdeepTextSeq=<?php echo $scoreSsdeepTextSeq ?>&scoreSdhashTextSeq=<?php echo $scoreSdhashTextSeq ?>&scoreSsdeepTextRan=<?php echo $scoreSsdeepTextRan ?>&scoreSdhashTextRan=<?php echo $scoreSdhashTextRan ?>&scoreSsdeepDocxSeq=<?php echo $scoreSsdeepDocxSeq ?>&scoreSdhashDocxSeq=<?php echo $scoreSdhashDocxSeq ?>&scoreSsdeepDocxRan=<?php echo $scoreSsdeepDocxRan ?>&scoreSdhashDocxRan=<?php echo $scoreSdhashDocxRan ?>&matchSsdeepTextSeq=<?php echo $matchSsdeepTextSeq ?>&matchSdhashTextSeq=<?php echo $matchSdhashTextSeq ?>&matchSsdeepTextRan=<?php echo $matchSsdeepTextRan ?>&matchSdhashTextRan=<?php echo $matchSdhashTextRan ?>&matchSsdeepDocxSeq=<?php echo $matchSsdeepDocxSeq ?>&matchSdhashDocxSeq=<?php echo $matchSdhashDocxSeq ?>&matchSsdeepDocxRan=<?php echo $matchSsdeepDocxRan ?>&matchSdhashDocxRan=<?php echo $matchSdhashDocxRan ?>&numOfSeqTextFile=<?php echo $numOfSeqTextFile; ?>&numOfRanTextFile=<?php echo $numOfRanTextFile ?>&numOfSeqTextFrag=<?php echo $numOfSeqTextFrag ?>&numOfRanTextFrag=<?php echo $numOfRanTextFrag ?>&numOfSeqDocxFile=<?php echo $numOfSeqDocxFile; ?>&numOfRanDocxFile=<?php echo $numOfRanDocxFile ?>&numOfSeqDocxFrag=<?php echo $numOfSeqDocxFrag ?>&numOfRanDocxFrag=<?php echo $numOfRanDocxFrag ?>';"  ></td></tr>                      
					  
                      
					  
				  </table>
        
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
