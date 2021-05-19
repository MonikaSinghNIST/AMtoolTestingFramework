<!doctype html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CFTT Federated Testing CD - Home Page</title>
<link rel="stylesheet" type="text/css" href="../css/reset.css" media="screen" />
<link rel="stylesheet" type="text/css" href="../css/main_style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="../css/layout.css" media="screen" />
	
<script>
function redirect(){
	var dataSet = document.getElementById("dataSet").value;
	var setType = document.getElementById("setType").value;
	var tool = document.getElementById("tool").value;
	var contains = document.getElementById("containsImages").value;
	var threshold = document.getElementById("threshold").value;
	/*
	
	if((dataSet=="Existing") && (setType == "DOCX") && (contains=="sequencial") && (tool== "ssdeep")){
   document.getElementById('frm').action = 'FragmentIdentification_ssdeep.php?case=1&threshold='+threshold;
  }else if((dataSet=="Existing") && (setType == "DOCX") && (contains=="random") && (tool== "ssdeep")) {
   document.getElementById('frm').action = 'FragmentIdentification_ssdeep.php?case=2&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "DOCX") && (contains=="sequencial") && (tool== "ssdeep") ) {
   document.getElementById('frm').action = 'FragmentIdentification_ssdeep.php?case=3&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "DOCX") && (contains=="random") && (tool== "ssdeep")) {
   document.getElementById('frm').action = 'FragmentIdentification_ssdeep.php?case=4&threshold='+threshold;
  }
	else if((dataSet=="Existing") && (setType == "TEXT") && (contains=="sequencial") && (tool== "ssdeep") ) {
  
		document.getElementById('frm').action = 'FragmentIdentification_ssdeep.php?case=5&threshold='+threshold;
  }else if((dataSet=="Existing") && (setType == "TEXT") && (contains=="random") && (tool== "ssdeep")) {
   document.getElementById('frm').action = 'FragmentIdentification_ssdeep.php?case=6&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "TEXT") && (contains=="sequencial") && (tool== "ssdeep") ) {
   document.getElementById('frm').action = 'FragmentIdentification_ssdeep.php?case=7&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "TEXT") && (contains=="random") && (tool== "ssdeep")) {
   document.getElementById('frm').action = 'FragmentIdentification_ssdeep.php?case=8&threshold='+threshold;
  }
	
	else if((dataSet=="Existing") && (setType == "DOCX") && (contains=="sequencial") && (tool== "sdhash") ) {
   document.getElementById('frm').action = 'FragmentIdentification_sdhash.php?case=1&threshold='+threshold;
  }else if((dataSet=="Existing") && (setType == "DOCX") && (contains=="random") && (tool== "sdhash")) {
   document.getElementById('frm').action = 'FragmentIdentification_sdhash.php?case=2&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "DOCX") && (contains=="sequencial") && (tool== "sdhash") ) {
   document.getElementById('frm').action = 'FragmentIdentification_sdhash.php?case=3&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "DOCX") && (contains=="random") && (tool== "sdhash")) {
   document.getElementById('frm').action = 'FragmentIdentification_sdhash.php?case=4&threshold='+threshold;
  }else if((dataSet=="Existing") && (setType == "TEXT") && (contains=="sequencial") && (tool== "sdhash") ) {
   document.getElementById('frm').action = 'FragmentIdentification_sdhash.php?case=5&threshold='+threshold;
  }else if((dataSet=="Existing") && (setType == "TEXT") && (contains=="random") && (tool== "sdhash")) {
   document.getElementById('frm').action = 'FragmentIdentification_sdhash.php?case=6&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "TEXT") && (contains=="sequencial") && (tool== "sdhash") ) {
   document.getElementById('frm').action = 'FragmentIdentification_sdhash.php?case=7&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "TEXT") && (contains=="random") && (tool== "sdhash")) {
   document.getElementById('frm').action = 'FragmentIdentification_sdhash.php?case=8&threshold='+threshold;
  }
	*/
	
	
	
	if(tool== "ssdeep"){
	if((dataSet=="Existing") && (setType == "DOCX") && (contains=="sequencial")){
   document.getElementById('frm').action = 'FragmentIdentification_ssdeep.php?case=1&threshold='+threshold;
  }else if((dataSet=="Existing") && (setType == "DOCX") && (contains=="random") ) {
   document.getElementById('frm').action = 'FragmentIdentification_ssdeep.php?case=2&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "DOCX") && (contains=="sequencial") ) {
   document.getElementById('frm').action = 'FragmentIdentification_ssdeep.php?case=3&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "DOCX") && (contains=="random") ) {
   document.getElementById('frm').action = 'FragmentIdentification_ssdeep.php?case=4&threshold='+threshold;
  }else if((dataSet=="Existing") && (setType == "TEXT") && (contains=="sequencial")  ) {
  	document.getElementById('frm').action = 'FragmentIdentification_ssdeep.php?case=5&threshold='+threshold;
  }else if((dataSet=="Existing") && (setType == "TEXT") && (contains=="random")) {
   document.getElementById('frm').action = 'FragmentIdentification_ssdeep.php?case=6&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "TEXT") && (contains=="sequencial") ) {
   document.getElementById('frm').action = 'FragmentIdentification_ssdeep.php?case=7&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "TEXT") && (contains=="random") ) {
   document.getElementById('frm').action = 'FragmentIdentification_ssdeep.php?case=8&threshold='+threshold;
  }
	}else if(tool== "sdhash"){
	 if((dataSet=="Existing") && (setType == "DOCX") && (contains=="sequencial") ) {
   document.getElementById('frm').action = 'FragmentIdentification_sdhash.php?case=1&threshold='+threshold;
  }else if((dataSet=="Existing") && (setType == "DOCX") && (contains=="random") ) {
   document.getElementById('frm').action = 'FragmentIdentification_sdhash.php?case=2&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "DOCX") && (contains=="sequencial")  ) {
   document.getElementById('frm').action = 'FragmentIdentification_sdhash.php?case=3&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "DOCX") && (contains=="random") ) {
   document.getElementById('frm').action = 'FragmentIdentification_sdhash.php?case=4&threshold='+threshold;
  }else if((dataSet=="Existing") && (setType == "TEXT") && (contains=="sequencial")  ) {
   document.getElementById('frm').action = 'FragmentIdentification_sdhash.php?case=5&threshold='+threshold;
  }else if((dataSet=="Existing") && (setType == "TEXT") && (contains=="random") ) {
   document.getElementById('frm').action = 'FragmentIdentification_sdhash.php?case=6&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "TEXT") && (contains=="sequencial") ) {
   document.getElementById('frm').action = 'FragmentIdentification_sdhash.php?case=7&threshold='+threshold;
  }else if((dataSet=="UserGenerated") && (setType == "TEXT") && (contains=="random") ) {
   document.getElementById('frm').action = 'FragmentIdentification_sdhash.php?case=8&threshold='+threshold;
  }
	}else{
	
	if((dataSet=="Existing") && (setType == "DOCX") && (contains=="sequencial") ) {
   document.getElementById('frm').action = 'FragmentIdentification_othertool.php?case=1&threshold='+threshold+'&tool='+tool;
  }else if((dataSet=="Existing") && (setType == "DOCX") && (contains=="random") ) {
   document.getElementById('frm').action = 'FragmentIdentification_othertool.php?case=2&threshold='+threshold+'&tool='+tool;
  }else if((dataSet=="UserGenerated") && (setType == "DOCX") && (contains=="sequencial")  ) {
   document.getElementById('frm').action = 'FragmentIdentification_othertool.php?case=3&threshold='+threshold+'&tool='+tool;
  }else if((dataSet=="UserGenerated") && (setType == "DOCX") && (contains=="random") ) {
   document.getElementById('frm').action = 'FragmentIdentification_othertool.php?case=4&threshold='+threshold+'&tool='+tool;
  }else if((dataSet=="Existing") && (setType == "TEXT") && (contains=="sequencial")  ) {
   document.getElementById('frm').action = 'FragmentIdentification_othertool.php?case=5&threshold='+threshold+'&tool='+tool;
  }else if((dataSet=="Existing") && (setType == "TEXT") && (contains=="random") ) {
   document.getElementById('frm').action = 'FragmentIdentification_othertool.php?case=6&threshold='+threshold+'&tool='+tool;
  }else if((dataSet=="UserGenerated") && (setType == "TEXT") && (contains=="sequencial") ) {
   document.getElementById('frm').action = 'FragmentIdentification_othertool.php?case=7&threshold='+threshold+'&tool='+tool;
  }else if((dataSet=="UserGenerated") && (setType == "TEXT") && (contains=="random") ) {
   document.getElementById('frm').action = 'FragmentIdentification_othertool.php?case=8&threshold='+threshold+'&tool='+tool;
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
    	    <div id="breadcrumb">Fragment Identification ➤ <a href="evaluateFragment.php">Test Cases</a> ➤ <a href="evaluate_fragment_search.php">Fragment Correlation Test</a></div> 
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
						  <option value="TEXT">TEXT</option>
						  <option value="DOCX">DOCX</option>
						 
						  </select></td></tr>
                          
                        <tr><td><div id="breadcrumb">Select type of Fragment </div>
						  </td><td><select name="containsImages" id="containsImages"> 
						  <option value="0">----Select----</option>
						  <option value="sequencial">From the beginning (sequential)</option>
						  <option value="random">Random</option>
                          
						  </select></td></tr>  
                          
                          
					  
					  
					  
						  
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
