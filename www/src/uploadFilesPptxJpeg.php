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
	
	
	<script src="http://code.jquery.com/jquery-latest.js"></script>
        <script type="text/javascript">
           function editXMLPptx()
			{
			jQuery(document).ready(function($){
				var form = $('#frm')[0];
				var data = new FormData(form);
				var resp = $("#response");
                $.ajax({
                    type: "POST", // Method type GET/POST    
					enctype: 'multipart/form-data',
					url: "GenerateDataSetPptxJpegWithImages.php", //Ajax Action url
                    data: data,
					processData: false,
					contentType: false,
					cache: false,
					timeout: 600000,

                    beforeSend: function(xhr){
						
                        resp.html(" <img src=\"../images/loading.gif\" /><br> <b>Depending on the size and number of uploaded files, this process will take time. Please wait !!!!</b> ");
						
                    },

                    error: function(qXHR, textStatus, errorThrow){
                        resp.html("There are an error");
                    },

                    success: function(data, textStatus, jqXHR){
                        resp.html(data);
                    }
                });
            });
			}
			
			
			
			
			
			
	function editXMLPptxBmp()
				{
				jQuery(document).ready(function($){
					var form = $('#frm')[0];
					var data = new FormData(form);
					var resp = $("#response");
					$.ajax({
						type: "POST", // Method type GET/POST    
						enctype: 'multipart/form-data',
						url: "GenerateDataSetPptxBmpWithImages.php", //Ajax Action url
						data: data,
						processData: false,
						contentType: false,
						cache: false,
						timeout: 600000,
	
						beforeSend: function(xhr){
							
							resp.html(" <img src=\"../images/loading.gif\" /><br> <b>Depending on the size and number of uploaded files, this process will take time. Please wait !!!!</b> ");
							
						},
	
						error: function(qXHR, textStatus, errorThrow){
							resp.html("There are an error");
						},
	
						success: function(data, textStatus, jqXHR){
							resp.html(data);
						}
					});
				});
				}			
				
				
				
	function editXMLPptxTiff()
				{
				jQuery(document).ready(function($){
					var form = $('#frm')[0];
					var data = new FormData(form);
					var resp = $("#response");
					$.ajax({
						type: "POST", // Method type GET/POST    
						enctype: 'multipart/form-data',
						url: "GenerateDataSetPptxTiffWithImages.php", //Ajax Action url
						data: data,
						processData: false,
						contentType: false,
						cache: false,
						timeout: 600000,
	
						beforeSend: function(xhr){
							
							resp.html(" <img src=\"../images/loading.gif\" /><br> <b>Depending on the size and number of uploaded files, this process will take time. Please wait !!!!</b> ");
							
						},
	
						error: function(qXHR, textStatus, errorThrow){
							resp.html("There are an error");
						},
	
						success: function(data, textStatus, jqXHR){
							resp.html(data);
						}
					});
				});
				}			
				
				
	function editXMLPptxGif()
				{
				jQuery(document).ready(function($){
					var form = $('#frm')[0];
					var data = new FormData(form);
					var resp = $("#response");
					$.ajax({
						type: "POST", // Method type GET/POST    
						enctype: 'multipart/form-data',
						url: "GenerateDataSetPptxGifWithImages.php", //Ajax Action url
						data: data,
						processData: false,
						contentType: false,
						cache: false,
						timeout: 600000,
	
						beforeSend: function(xhr){
							
							resp.html(" <img src=\"../images/loading.gif\" /><br> <b>Depending on the size and number of uploaded files, this process will take time. Please wait !!!!</b> ");
							
						},
	
						error: function(qXHR, textStatus, errorThrow){
							resp.html("There are an error");
						},
	
						success: function(data, textStatus, jqXHR){
							resp.html(data);
						}
					});
				});
				}
			
			
        </script>
	
	

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

<script type="text/javascript" src="../includes/loadingScript.js"></script>
	
	
</head>


<body id="menu1"> 
<div id="loading">
 <div class="se-pre-con"></div>
</div>
	<div id="mainWrapper">
		<div id="topBannerContainer">
			<div id="logoContainer">
		<!--	<a class="logo" title="National Institute of Standards and Technology" href="http://www.nist.gov/index.html">National Institute of Standards and Technology</a>
			<a class="sub-logo" title="Health Information Technology" href="http://www.nist.gov/healthcare/">Health Information Technology</a>-->
				<img src="../images/banner.png" alt="CFTT Federated Testing - NIST">            
			</div>
			
			
			<div id="spinner">  </div>
			
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
          
           <?php 
				$objct=$_GET['object'];
			
			?>
          	
    	  <div id="rightContent">
    	    <div id="breadcrumb">Embedded Object Identification ➤ <a href="GenerateEmbeddedObject.php">Generate the Dataset</a> ➤ File type : PPTX ➤ Embedded object type : <?php echo $objct; ?></div> 
			  <form id="frm" method="post" action="<?php if($objct=="JPEG"){ ?>javascript:editXMLPptx();<?php }else if($objct=="BMP"){ ?>javascript:editXMLPptxBmp();<?php }else if($objct=="TIFF"){ ?>javascript:editXMLPptxTiff();<?php }else if($objct=="GIF"){ ?>javascript:editXMLPptxGif();<?php } ?>" enctype="multipart/form-data">
				  <table>
					 
                          
					  <tr><td width="50%">Enter the folder containing PPTX files</td><td align="right" style="text-align: right"> <div align="right"><input accept=".pptx" type="file" required="" name="pptxFiles[]" id="pptxFiles" multiple="" ></div></td></tr> 
                        
                      <tr><td width="50%">Enter the folder containing <?php if($objct=="JPEG"){ ?> JPEG <?php }else if($objct=="BMP"){ ?>BMP <?php }else if($objct=="TIFF"){ ?>TIFF <?php }else if($objct=="GIF"){ ?>GIF <?php } ?> images</td><td align="right" style="text-align: right"><div align="right">
                       <?php if($objct=="JPEG"){ ?>
                      <input accept="image/jpeg" required="" type="file" name="jpeg[]" id="jpeg" multiple="">
                      <?php }else if($objct=="BMP"){ ?>
                      <input accept="image/bmp" required="" type="file" name="bmp[]" id="bmp" multiple="">
                      <?php }else if($objct=="TIFF"){ ?>
                      <input accept="image/tiff" required="" type="file" name="tiff[]" id="tiff" multiple="">
                      <?php }else if($objct=="GIF"){ ?>
                      <input accept="image/gif" required="" type="file" name="gif[]" id="gif" multiple="">
                      <?php } ?></div></td></tr> 
                        
                       
					  <tr align="" style="align-content: center;align-items: center;" ><td colspan="2" align="center" style="align-content: center;align-items: center;align-self: center;"><div align="center"><input type="submit" name="submit" value="submit"><div></td></tr>
					  
				  </table>
				  
			  </form>
			  
			   <div id="response" align="center" style="color: red;"></div>
			  
                  
		  </div>
		<!-- Main Content Ends-->
		</div>
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
