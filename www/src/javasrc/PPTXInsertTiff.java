package javasrc;
import java.util.List;
import java.util.Random;
import javax.imageio.ImageIO;
import java.awt.AlphaComposite;
import java.awt.Color;
import java.awt.Graphics2D;
import java.awt.RenderingHints;
import java.awt.geom.Rectangle2D;
import java.awt.image.BufferedImage;
import java.io.File;
import java.io.FileInputStream;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.PrintWriter;
import java.nio.file.FileVisitResult;
import java.nio.file.Files;
import java.nio.file.Path;
import java.nio.file.Paths;
import java.nio.file.SimpleFileVisitor;
import java.nio.file.StandardCopyOption;
import java.nio.file.attribute.BasicFileAttributes;
import org.apache.poi.openxml4j.exceptions.OpenXML4JException;
import org.apache.poi.openxml4j.opc.PackagePart;
import org.apache.poi.openxml4j.opc.PackagePartName;
import org.apache.poi.util.IOUtils;
import org.apache.poi.xslf.usermodel.SlideLayout;
import org.apache.poi.xslf.usermodel.XMLSlideShow;
import org.apache.poi.xslf.usermodel.XSLFPictureData;
import org.apache.poi.xslf.usermodel.XSLFPictureShape;
import org.apache.poi.xslf.usermodel.XSLFShape;
import org.apache.poi.xslf.usermodel.XSLFSlide;
import org.apache.poi.xslf.usermodel.XSLFSlideLayout;
import org.apache.poi.xslf.usermodel.XSLFTextParagraph;
import org.apache.poi.xslf.usermodel.XSLFTextRun;
import org.apache.poi.xslf.usermodel.XSLFTextShape;
import net.lingala.zip4j.core.ZipFile;
import net.lingala.zip4j.exception.ZipException;




public class PPTXInsertTiff {

	
	public static void main(String[] args) throws OpenXML4JException, IOException {
		// TODO Auto-generated method stub

		    String image_url="";
			//= "C:\\Users\\mns27\\workspace\\ImageDoc\\data\\000240.jpg";
			
			String pptx="";
			String tmpfldr="..\\temp\\pptx\\";
			
			////////////////////////////////Insert every Image in every document in the folder randomly//////////////////////////////////////////////
			  
			//String Source_folder="C:\\Users\\mns27\\workspace\\PPTTestSet\\Data\\PPTX\\";
			String Source_folder="..\\DataUserGenerated\\EmbeddedObjects\\PPTX\\Pptx_temp\\";
			//String result_EmbeddedFiles_Folder="C:\\Users\\mns27\\workspace\\PPTTestSet\\Data\\Results\\Results_TIFF\\Embedded Files\\";
			String result_EmbeddedFiles_Folder="..\\DataUserGenerated\\EmbeddedObjects\\PPTX\\TIFF\\Embedded_Files\\";
			//String result_OriginalFiles_Folder="C:\\Users\\mns27\\workspace\\PPTTestSet\\Data\\Results\\Results_TIFF\\Original Files\\";
			String result_OriginalFiles_Folder="..\\DataUserGenerated\\EmbeddedObjects\\PPTX\\TIFF\\Original_Files\\";
			//String image_folder="C:\\Users\\mns27\\workspace\\PPTTestSet\\Data\\TIFF\\";
			String image_folder="..\\DataUserGenerated\\EmbeddedObjects\\PPTX\\TIFF\\Embedded_Objects\\";
			 File folder = new File(Source_folder);
			 File[] listOfFiles = folder.listFiles();
			 //PrintWriter writer = new PrintWriter(result_EmbeddedFiles_Folder+"Information_file", "UTF-8");
			 //writer.println("  Resultant File \t\t   Embedded Object (Size in Bytes) \t\t\t     Reference File (Size in Bytes) ");
			 int NumOfFiles=0;
			 int numOfImages;
			 
			 for (File file : listOfFiles) {
				 
			  if (file.isFile()) {
			    
				  numOfImages=0;
				  pptx= Source_folder+file.getName();
				  
				  File img_folder = new File(image_folder);
				  File[] img_listOfFiles = img_folder.listFiles();
				  
				  
			    	//////////////////////////Creating a copy///////////////////////////////////////////////	
			    		    	
			    	String source = copy_rename(pptx);
			    	
					///////////////////////////Unzip//////////////////////////////////////  	
						    	
					String destination = source.split("\\.")[0];
					unzip(source, "..\\temp\\pptx\\"+destination);
					deleteDirectory(source);
					
				  

					//calculate number of images in the slide for that we have to zip unzip here
			
					 
				  File f = new File(destination+"\\ppt\\media\\");
				  //System.out.println(f.exists());
				  String[] imgname;
				  String imgtype;
				  
				  if(f.exists()==true){
					  for (File imgfile : f.listFiles()) {
		                    if (imgfile.isFile()) {
		                    	imgname=imgfile.getName().split("\\.");
		                    	
		                    	imgtype=imgname[imgname.length-1];
		                    	
		                    	if((imgtype.equals("tiff")) || (imgtype.equals("TIFF"))){
		                    		
		                    		numOfImages++;
		                    	}
		                    	
		                    }
		            }
				
				  }else{
					  numOfImages=0;
				  }
				  
				  
				  String[] tiffarr=new String[numOfImages];
				  
				  int numtiff=0;
				  if(f.exists()==true){
					  for (File imgfile : f.listFiles()) {
		                    if (imgfile.isFile()) {
		                    	imgname=imgfile.getName().split("\\.");
		                    	
		                    	imgtype=imgname[imgname.length-1];
		                    	
		                    	if((imgtype.equals("tiff")) || (imgtype.equals("TIFF"))){
		                    		
		                    		tiffarr[numtiff]=imgfile.getName();
		                    		numtiff++;
		                    		
		                    	}
		                    	
		                    	
		                    }
		            }
				
					  
				  }
				  
				  
				      copy_original_file_with_images(pptx,result_OriginalFiles_Folder,source,destination);
					  
				  for (File img_file : img_listOfFiles) {
					 if (img_file.isFile()) {
					
						 image_url= image_folder+img_file.getName();
					     insert_image(pptx,image_url,result_OriginalFiles_Folder,result_EmbeddedFiles_Folder,source,destination);
					     NumOfFiles++;
					        
			    	    }
			    	}
				  
				  
			    } //if(file)
			  
			}//for loop for all file
			 
			 //System.out.println("Total Number of Resultant Files:"+NumOfFiles);
			 
		}
	
	
	

		private static void copy_original_file_with_images(String pptx, String result_OriginalFiles_Folder, String source,
			String destination) throws IOException {

			String presentation=pptx;
	    	String[] tmp_rslt= presentation.split("\\\\");
	        String ttmpp= tmp_rslt[tmp_rslt.length-1];
	        String[] ttmmpp= ttmpp.split("\\.");
            String[] imgname2;
            String imgtype2;
            
            int rnd_imgNum=-1;
	    	FileInputStream fileInputStream = new FileInputStream(presentation);
	    	XMLSlideShow slideShow = new XMLSlideShow(fileInputStream);
	    	fileInputStream.close();
	    		
	    	XMLSlideShow ppt = new XMLSlideShow();
	        
	    	ppt.setPageSize(slideShow.getPageSize());
	    
	        XSLFSlide[] src_slide=slideShow.getSlides();
	        
	        String tmp,tmp1, img_location="";
	        String[] tmp2=null;
	        int number_of_slides=src_slide.length;
	        
	        Random rnd = new Random(number_of_slides);
	        
	        int pp;
	        Boolean flag=false;
	    	//String image_it_is;
	        int rltnshp_size;
	        PackagePart tmpp1;
			String tmpp2;
			String[] tmpp3;
			PackagePartName pckgnm;
			
			int imgIndex=0;
			
	    	
	        for(int ii=0;ii<number_of_slides;ii++){
	        	
	        	pp=0;
	    		
	        	flag=false;
	        	
	        	rltnshp_size=src_slide[ii].getRelations().size();
	        	
	        	tmp=src_slide[ii].getRelations().get(src_slide[ii].getRelations().size()-1).toString();
				
				tmp1=tmp.trim();
				tmp2=tmp1.split(":");
				
				img_location= ((tmp2[1].split("-"))[0]).replaceAll("/", "\\\\");
				String img_typee=tmp2[2].toString().trim();
								
				XSLFShape[] shapes = src_slide[ii].getShapes();
				int numOfImgPerSlide=0;
				
				for (XSLFShape shape: shapes) {
				
				if (shape instanceof XSLFPictureShape){
					numOfImgPerSlide++;
				}
				
				}
				
				java.awt.geom.Rectangle2D[] img_anchor=new java.awt.geom.Rectangle2D[numOfImgPerSlide];
				
				int imgcnt=0;
				
				for (XSLFShape shape: shapes) {
				
				if (shape instanceof XSLFTextShape) {
				
					
				}else{
				
				if (shape instanceof XSLFPictureShape){
					
					img_anchor[imgcnt]=shape.getAnchor();
					imgcnt++;
					
					}
				}
				
				
				}
				
				
				
				if(rltnshp_size>1){
					
					XSLFSlide newSlide = ppt.createSlide();
					
					int img_num=0;
					
					for(int im=0;im<rltnshp_size;im++){
						
						tmpp1= src_slide[ii].getRelations().get(im).getPackagePart();
						tmpp2=tmpp1.getContentType();
						tmpp3=tmpp2.split("/");
						pckgnm=tmpp1.getPartName();
						img_location= ((pckgnm.toString()).replaceAll("/", "\\\\"));
						
						if(tmpp3[0].equals("image")){
							
							
			            	String img_url="..\\temp\\pptx\\"+destination.trim().substring(0, destination.length())+img_location.trim();	
			            	
			            	File src_fl= new File(img_url);
			            	
			            	imgname2=src_fl.getName().split("\\.");
	                    	
	                    	imgtype2=imgname2[imgname2.length-1];
	                    	
	                    	if((imgtype2.equals("tiff")) || (imgtype2.equals("TIFF"))){
	                    		imgIndex++;
	                    	}
			            	
			            	
	                    	
			            		
			            	File image=new File(img_url);
			            	byte[] picture = IOUtils.toByteArray(new FileInputStream(image));
			    			//adding the image to the presentation
			            	int idx=0;
			            		idx = ppt.addPicture(picture, XSLFPictureData.PICTURE_TYPE_TIFF);
			    			
			    			if(im<=(img_anchor.length)){
				    			
				    			if(img_anchor[img_num].isEmpty()==false){
				    			
				    			XSLFShape pic =  newSlide.createAutoShape();
				    			newSlide.removeShape(pic);
				    	        XSLFPictureShape picturee = newSlide.createPicture(idx);
				    	        picturee.setAnchor(img_anchor[img_num]);
								
				    			}
				    	        
				    			}
				    			
				    			img_num++;
			    			
						}
						
					} 
					
					
					for (XSLFTextShape ph : src_slide[ii].getPlaceholders()) {
	    				
	        			
						java.awt.geom.Rectangle2D anchor;
						XSLFTextShape tb= newSlide.createTextBox();
						tb.clearText();
						
						
						
						if(ph!=null) {
							anchor = ph.getAnchor();
							tb.setFillColor(ph.getFillColor());
							tb.setVerticalAlignment(ph.getVerticalAlignment());
							tb.setBottomInset(ph.getBottomInset());
							tb.setLeftInset(ph.getLeftInset());
							tb.setTextAutofit(ph.getTextAutofit());
							tb.setTextDirection(ph.getTextDirection());
							tb.setLineColor(ph.getLineColor());
							tb.setLineCap(ph.getLineCap());
							tb.setAnchor(anchor);
							
							Boolean clrr=false;
						
							List<XSLFTextParagraph> textpara=ph.getTextParagraphs();
						  
							int paralen=textpara.size();
						  
						  for(int iii=0;iii<paralen;iii++){
								  XSLFTextParagraph tbpara=tb.addNewTextParagraph();
								  tbpara.setTextAlign(textpara.get(iii).getTextAlign());
								  tbpara.setIndent(textpara.get(iii).getIndent());
								  tbpara.setLeftMargin(textpara.get(iii).getLeftMargin());
								  tbpara.setLineSpacing(textpara.get(iii).getLineSpacing());
								  tbpara.setLevel(textpara.get(iii).getLevel());
								  tbpara.setSpaceBefore(textpara.get(iii).getSpaceBefore());
								  
								 
								 List<XSLFTextRun> txtrn= textpara.get(iii).getTextRuns();
								 
								 int runlen=txtrn.size();
								 
								 for(int jjj=0;jjj<runlen;jjj++){
									 
									 XSLFTextRun tbrun=tbpara.addNewTextRun();
									 
									 if(pp==0) {
										 tbrun.setBold(true);
										 tbrun.setFontSize(20.0);
									 }else {
									 tbrun.setBold(txtrn.get(jjj).isBold());
									 }
									 
									 if(txtrn.get(jjj).getFontColor().equals(Color.WHITE)) {
										 tbrun.setFontColor(Color.black); 
									 }else {
									 tbrun.setFontColor(txtrn.get(jjj).getFontColor());
									 }
									 
									 tbrun.setFontFamily(txtrn.get(jjj).getFontFamily());
									 tbrun.setCharacterSpacing(txtrn.get(jjj).getCharacterSpacing());
									 tbrun.setFontSize(txtrn.get(jjj).getFontSize());
									 
									 tbrun.setText(" ");
									 tbrun.setText(txtrn.get(jjj).getText());
									 
									 tbrun.setCharacterSpacing(txtrn.get(jjj).getCharacterSpacing());
									 tbrun.setItalic(txtrn.get(jjj).isItalic());
									  
								 }
								 
							  }
							  
							  
							  tb.setAnchor(anchor);
							  
						}
						
						pp++;
						
	      			}
					
			
	        }
				else{
				
	        	
	    			XSLFSlide newSlide = ppt.createSlide();
	    			for (XSLFTextShape nwsldph : newSlide.getPlaceholders()) {
	    				nwsldph.clearText();
	    				nwsldph.setText(" ");
	        			}
	    			
	    			
	    			String shpnm;
	    			
	    			for(XSLFShape shp : src_slide[ii].getShapes()){
	    				 shpnm=(shp.getShapeName().split(" "))[0];
	    				
	    				if(!(shpnm.equals("Rectangle")) && !(shpnm.equals("Title")) && !(shpnm.equals("Content")) ){
	    					
	    					flag=true;
	    					
	    				}	
	    				
	    			}
	    			
	    			
	    			
	    			if(flag==true){
	    				
	    				newSlide.importContent(src_slide[ii]);
	    				
	    			}else{
	        		
	        		for (XSLFTextShape ph : src_slide[ii].getPlaceholders()) {
	    				
	        			
						java.awt.geom.Rectangle2D anchor;
						XSLFTextShape tb= newSlide.createTextBox();
						tb.clearText();
						
						
						
						if(ph!=null) {

							anchor = ph.getAnchor();
							tb.setFillColor(ph.getFillColor());
							tb.setVerticalAlignment(ph.getVerticalAlignment());
							tb.setBottomInset(ph.getBottomInset());
							tb.setLeftInset(ph.getLeftInset());
							tb.setTextAutofit(ph.getTextAutofit());
							tb.setTextDirection(ph.getTextDirection());
							tb.setLineColor(ph.getLineColor());
							tb.setLineCap(ph.getLineCap());
							tb.setAnchor(anchor);
							
						Boolean clrr=false;
						
						  
						  List<XSLFTextParagraph> textpara=ph.getTextParagraphs();
						  
						  int paralen=textpara.size();
						  
						  for(int iii=0;iii<paralen;iii++){
								  XSLFTextParagraph tbpara=tb.addNewTextParagraph();
								 
								  tbpara.setBullet(textpara.get(iii).isBullet());
								  tbpara.setTextAlign(textpara.get(iii).getTextAlign());
								  tbpara.setIndent(textpara.get(iii).getIndent());
								  tbpara.setLeftMargin(textpara.get(iii).getLeftMargin());
								  tbpara.setLineSpacing(textpara.get(iii).getLineSpacing());
								  tbpara.setLevel(textpara.get(iii).getLevel());
								  tbpara.setSpaceBefore(textpara.get(iii).getSpaceBefore());
								  
								 
								 List<XSLFTextRun> txtrn= textpara.get(iii).getTextRuns();
								 
								 int runlen=txtrn.size();
								 
								 for(int jjj=0;jjj<runlen;jjj++){
									 //tb.addNewTextParagraph().addNewTextRun();
									 
									 XSLFTextRun tbrun=tbpara.addNewTextRun();
									 
									 if(pp==0) {
										 tbrun.setBold(true);
										 tbrun.setFontSize(20.0);
									 }else {
									 tbrun.setBold(txtrn.get(jjj).isBold());
									 }
									 
									 if(txtrn.get(jjj).getFontColor().equals(Color.WHITE)) {
										 tbrun.setFontColor(Color.black); 
									 }else {
									 tbrun.setFontColor(txtrn.get(jjj).getFontColor());
									 }
									 
									 tbrun.setFontFamily(txtrn.get(jjj).getFontFamily());
									 tbrun.setCharacterSpacing(txtrn.get(jjj).getCharacterSpacing());
									 tbrun.setFontSize(txtrn.get(jjj).getFontSize());
									 
									 tbrun.setText(" ");
									 tbrun.setText(txtrn.get(jjj).getText());
									 
									 tbrun.setCharacterSpacing(txtrn.get(jjj).getCharacterSpacing());
									 tbrun.setItalic(txtrn.get(jjj).isItalic());
									  
								 }
								 
							  }
							  
							  
							  tb.setAnchor(anchor);
							  
							  
						}
						
						pp++;
						
	      			}
	        		
	    			}
	    			
	        }
		
	    	}	

	    	
	    	FileOutputStream fileOutputStream = new FileOutputStream("..\\DataUserGenerated\\EmbeddedObjects\\PPTX\\TIFF\\Original_Files\\"+tmp_rslt[tmp_rslt.length-1]);
	    	ppt.write(fileOutputStream);
	    	fileOutputStream.close();
			
	}




		private static void store_image(String pptx, String image_url, String result_OriginalFiles_Folder, String result_EmbeddedFiles_Folder, String source, String destination, int ss) throws IOException {
			
	    	String presentation=pptx;
	    	String[] tmp_image_name=image_url.split("\\\\");
	    	String image_name=tmp_image_name[tmp_image_name.length-1];
	    	String image_name2=tmp_image_name[tmp_image_name.length-1];
	    	String[] tmp_rslt= presentation.split("\\\\");
	        String ttmpp= tmp_rslt[tmp_rslt.length-1];
	        String[] ttmmpp= ttmpp.split("\\.");
            String[] imgname2;
            String imgtype2;
			
			File f = new File(destination+"\\ppt\\media\\");
            int numbOfImgPPTX = 0;
            for (File imgfile : f.listFiles()) {
                    if (imgfile.isFile()) {
                    	numbOfImgPPTX++;
                    }
            }
            
            
	    	FileInputStream fileInputStream = new FileInputStream(presentation);
	    	XMLSlideShow slideShow = new XMLSlideShow(fileInputStream);
	    	fileInputStream.close();
	    		
	    	XMLSlideShow ppt = new XMLSlideShow();
	        
	    	ppt.setPageSize(slideShow.getPageSize());
	    
	        XSLFSlide[] src_slide=slideShow.getSlides();
	        
	        String tmp,tmp1, img_location="";
	        String[] tmp2=null;
	        int number_of_slides=src_slide.length;
	        
	        Random rnd = new Random(number_of_slides);
	        
	        int rnd_img_position=rnd.nextInt(number_of_slides); 
	        
	        XSLFSlideLayout defaultLayout = slideShow.getSlideMasters()[0].getLayout(SlideLayout.TITLE_AND_CONTENT);
	        
	        XSLFSlideLayout imageLayout = slideShow.getSlideMasters()[0].getLayout(SlideLayout.BLANK);
	        
	        
	        int pp;
	        Boolean flag=false;
	    	String image_it_is;
	        int rltnshp_size;
	        PackagePart tmpp1;
			String tmpp2;
			String[] tmpp3;
			PackagePartName pckgnm;
			
			int imgIndex=0;
			

			String tmp_imgname = "";
	    	
	        for(int ii=0;ii<number_of_slides;ii++){
	        	
	        	pp=0;
	    		
	        	flag=false;
	        	
	        	rltnshp_size=src_slide[ii].getRelations().size();
	        	
	        	tmp=src_slide[ii].getRelations().get(src_slide[ii].getRelations().size()-1).toString();
				
				tmp1=tmp.trim();
				tmp2=tmp1.split(":");
				
				img_location= ((tmp2[1].split("-"))[0]).replaceAll("/", "\\\\");
				String img_typee=tmp2[2].toString().trim();
				
				////////////////////////////////////////////Shape/////////////////////////////////////////////////////////////
								
				XSLFShape[] shapes = src_slide[ii].getShapes();
				int numOfImgPerSlide=0;
				
				for (XSLFShape shape: shapes) {
				
				if (shape instanceof XSLFPictureShape){
					numOfImgPerSlide++;
				}
				
				}
				
				java.awt.geom.Rectangle2D[] img_anchor=new java.awt.geom.Rectangle2D[numOfImgPerSlide];
				
				int imgcnt=0;
				
				for (XSLFShape shape: shapes) {
				
				if (shape instanceof XSLFTextShape) {
				
					
				}else{
				
				if (shape instanceof XSLFPictureShape){
					
					img_anchor[imgcnt]=shape.getAnchor();
					imgcnt++;
					
					}
				}
				
				
				}
				
				
				if(rltnshp_size>1){
					
					XSLFSlide newSlide = ppt.createSlide();
					
					int img_num=0;
					
					for(int im=0;im<rltnshp_size;im++){
						
						tmpp1= src_slide[ii].getRelations().get(im).getPackagePart();
						tmpp2=tmpp1.getContentType();
						tmpp3=tmpp2.split("/");
						pckgnm=tmpp1.getPartName();
						img_location= ((pckgnm.toString()).replaceAll("/", "\\\\"));
						
						if(tmpp3[0].equals("image")){
						
				        ///////////////////////////////////////////////Shape//////////////////////////////////////////////////////////////////
						
			            	String img_url=""+destination.trim().substring(0, destination.length())+img_location.trim();	
			            	File src_fl= new File(img_url);
			            	imgname2=src_fl.getName().split("\\.");
	                    	
	                    	imgtype2=imgname2[imgname2.length-1];
	                    	
	                    	if((imgtype2.equals("tiff")) || (imgtype2.equals("TIFF"))){
	                    		imgIndex++;
	                    	}
			            	
			            	
			            	if((imgIndex==ss) && ((imgtype2.equals("tiff")) || (imgtype2.equals("TIFF")))){
			            		File dstfldr= new File("..\\DataUserGenerated\\EmbeddedObjects\\PPTX\\TIFF\\ImagesFromPPTX\\");
			            		tmp_imgname=(tmp_rslt[tmp_rslt.length-1].split("\\."))[0]+"_"+src_fl.getName();
				            	File dst_fl= new File("..\\DataUserGenerated\\EmbeddedObjects\\PPTX\\TIFF\\ImagesFromPPTX\\"+tmp_imgname);
				            	
				            	if (!dstfldr.exists())
				            	    {
				            		 dstfldr.mkdirs();
				            	    }
				            	Files.copy(src_fl.toPath() , dst_fl.toPath(), StandardCopyOption.REPLACE_EXISTING);
				            	image_name=src_fl.getName();
				            	image_name2=src_fl.getName();
				            	
			            	}else{
			            	
			            	String[] immmmmg=image_name2.split("\\.");	
			            	String image_type = immmmmg[immmmmg.length-1];
			            		
			            	image_name=image_name.split("\\.")[0];
			            	File image=new File(img_url);
			            	byte[] picture = IOUtils.toByteArray(new FileInputStream(image));
			            	int idx=0;
			            	
			            	if(image_type.toUpperCase().equals("BMP")){
			            		idx = ppt.addPicture(picture, XSLFPictureData.PICTURE_TYPE_BMP);
			            	}else if(image_type.toUpperCase().equals("PNG")){
			            		idx = ppt.addPicture(picture, XSLFPictureData.PICTURE_TYPE_PNG);
			            	}else if(image_type.toUpperCase().equals("DIB")){
			            		idx = ppt.addPicture(picture, XSLFPictureData.PICTURE_TYPE_DIB);
			            	}else if(image_type.toUpperCase().equals("EMF")){
			            		idx = ppt.addPicture(picture, XSLFPictureData.PICTURE_TYPE_EMF);
			            	}else if(image_type.toUpperCase().equals("EPS")){
			            		idx = ppt.addPicture(picture, XSLFPictureData.PICTURE_TYPE_EPS);
			            	}else if(image_type.toUpperCase().equals("GIF")){
			            		idx = ppt.addPicture(picture, XSLFPictureData.PICTURE_TYPE_GIF);
			            	}else if(image_type.toUpperCase().equals("PICT")){
			            		idx = ppt.addPicture(picture, XSLFPictureData.PICTURE_TYPE_PICT);
			            	}else if(image_type.toUpperCase().equals("TIFF")){
			            		idx = ppt.addPicture(picture, XSLFPictureData.PICTURE_TYPE_TIFF);
			            	}else if(image_type.toUpperCase().equals("WMF")){
			            		idx = ppt.addPicture(picture, XSLFPictureData.PICTURE_TYPE_WMF);
			            	}else if(image_type.toUpperCase().equals("WPG")){
			            		idx = ppt.addPicture(picture, XSLFPictureData.PICTURE_TYPE_WPG);
			            	}else {
			            		idx = ppt.addPicture(picture, XSLFPictureData.PICTURE_TYPE_JPEG);
			            	}
			            	
			    			
			    			if(im<=(img_anchor.length)){
				    			
				    			if(img_anchor[img_num].isEmpty()==false){
				    			
				    			XSLFShape pic =  newSlide.createAutoShape();
				    			
				    			newSlide.removeShape(pic);
				    	        XSLFPictureShape picturee = newSlide.createPicture(idx);
				    	        picturee.setAnchor(img_anchor[img_num]);
								
				    			}
				    	        
				    			}
				    			
				    			img_num++;
				    			
						}
			    			
						}
						
						
						
					} 
					
					for (XSLFTextShape ph : src_slide[ii].getPlaceholders()) {
	    				
	        			
						java.awt.geom.Rectangle2D anchor;
						XSLFTextShape tb= newSlide.createTextBox();
						tb.clearText();
						
						if(ph!=null) {
							anchor = ph.getAnchor();
							tb.setFillColor(ph.getFillColor());
							tb.setVerticalAlignment(ph.getVerticalAlignment());
							tb.setBottomInset(ph.getBottomInset());
							tb.setLeftInset(ph.getLeftInset());
							tb.setTextAutofit(ph.getTextAutofit());
							tb.setTextDirection(ph.getTextDirection());
							tb.setLineColor(ph.getLineColor());
							tb.setLineCap(ph.getLineCap());
							tb.setAnchor(anchor);
							
							Boolean clrr=false;
							List<XSLFTextParagraph> textpara=ph.getTextParagraphs();
						  
							int paralen=textpara.size();
						  
						  for(int iii=0;iii<paralen;iii++){
								  XSLFTextParagraph tbpara=tb.addNewTextParagraph();
								  tbpara.setTextAlign(textpara.get(iii).getTextAlign());
								  tbpara.setIndent(textpara.get(iii).getIndent());
								  tbpara.setLeftMargin(textpara.get(iii).getLeftMargin());
								  tbpara.setLineSpacing(textpara.get(iii).getLineSpacing());
								  tbpara.setLevel(textpara.get(iii).getLevel());
								  tbpara.setSpaceBefore(textpara.get(iii).getSpaceBefore());
								  
								 
								 List<XSLFTextRun> txtrn= textpara.get(iii).getTextRuns();
								 
								 int runlen=txtrn.size();
								 
								 for(int jjj=0;jjj<runlen;jjj++){
									 //tb.addNewTextParagraph().addNewTextRun();
									 
									 XSLFTextRun tbrun=tbpara.addNewTextRun();
									 
									 if(pp==0) {
										 tbrun.setBold(true);
										 tbrun.setFontSize(20.0);
									 }else {
									 tbrun.setBold(txtrn.get(jjj).isBold());
									 }
									 
									 if(txtrn.get(jjj).getFontColor().equals(Color.WHITE)) {
										 tbrun.setFontColor(Color.black); 
									 }else {
									 tbrun.setFontColor(txtrn.get(jjj).getFontColor());
									 }
									 
									 tbrun.setFontFamily(txtrn.get(jjj).getFontFamily());
									 tbrun.setCharacterSpacing(txtrn.get(jjj).getCharacterSpacing());
									 tbrun.setFontSize(txtrn.get(jjj).getFontSize());
									 
									 tbrun.setText(" ");
									 tbrun.setText(txtrn.get(jjj).getText());
									 
									 tbrun.setCharacterSpacing(txtrn.get(jjj).getCharacterSpacing());
									 tbrun.setItalic(txtrn.get(jjj).isItalic());
									  
								 }
								 
							  }
							  
							  
							  tb.setAnchor(anchor);
							  
						}
						
						pp++;
						
	      			}
					
			
	        }
				else{
				
	        	
	    			XSLFSlide newSlide = ppt.createSlide();
	    			for (XSLFTextShape nwsldph : newSlide.getPlaceholders()) {
	    				nwsldph.clearText();
	    				nwsldph.setText(" ");
	        			}
	    			
	    			
	    			String shpnm;
	    			
	    			for(XSLFShape shp : src_slide[ii].getShapes()){
	    				 shpnm=(shp.getShapeName().split(" "))[0];
	    				
	    				if(!(shpnm.equals("Rectangle")) && !(shpnm.equals("Title")) && !(shpnm.equals("Content")) ){
	    					
	    					flag=true;
	    					
	    				}	
	    				
	    			}
	    			
	    			
	    			
	    			if(flag==true){
	    				
	    				newSlide.importContent(src_slide[ii]);
	    				
	    			}else{
	        		
	        		for (XSLFTextShape ph : src_slide[ii].getPlaceholders()) {
	    				
	        			
						java.awt.geom.Rectangle2D anchor;
						XSLFTextShape tb= newSlide.createTextBox();
						tb.clearText();
						
						
						
						if(ph!=null) {

							anchor = ph.getAnchor();
							tb.setFillColor(ph.getFillColor());
							tb.setVerticalAlignment(ph.getVerticalAlignment());
							tb.setBottomInset(ph.getBottomInset());
							tb.setLeftInset(ph.getLeftInset());
							tb.setTextAutofit(ph.getTextAutofit());
							tb.setTextDirection(ph.getTextDirection());
							tb.setLineColor(ph.getLineColor());
							tb.setLineCap(ph.getLineCap());
							tb.setAnchor(anchor);
							
						Boolean clrr=false;
						
						  
						  List<XSLFTextParagraph> textpara=ph.getTextParagraphs();
						  
						  int paralen=textpara.size();
						  
						  for(int iii=0;iii<paralen;iii++){
								  XSLFTextParagraph tbpara=tb.addNewTextParagraph();
								 
								  tbpara.setBullet(textpara.get(iii).isBullet());
								  tbpara.setTextAlign(textpara.get(iii).getTextAlign());
								  tbpara.setIndent(textpara.get(iii).getIndent());
								  tbpara.setLeftMargin(textpara.get(iii).getLeftMargin());
								  tbpara.setLineSpacing(textpara.get(iii).getLineSpacing());
								  tbpara.setLevel(textpara.get(iii).getLevel());
								  tbpara.setSpaceBefore(textpara.get(iii).getSpaceBefore());
								  
								 
								 List<XSLFTextRun> txtrn= textpara.get(iii).getTextRuns();
								 
								 int runlen=txtrn.size();
								 
								 for(int jjj=0;jjj<runlen;jjj++){
									 //tb.addNewTextParagraph().addNewTextRun();
									 
									 XSLFTextRun tbrun=tbpara.addNewTextRun();
									 
									 if(pp==0) {
										 tbrun.setBold(true);
										 tbrun.setFontSize(20.0);
									 }else {
									 tbrun.setBold(txtrn.get(jjj).isBold());
									 }
									 
									 if(txtrn.get(jjj).getFontColor().equals(Color.WHITE)) {
										 tbrun.setFontColor(Color.black); 
									 }else {
									 tbrun.setFontColor(txtrn.get(jjj).getFontColor());
									 }
									 
									 tbrun.setFontFamily(txtrn.get(jjj).getFontFamily());
									 tbrun.setCharacterSpacing(txtrn.get(jjj).getCharacterSpacing());
									 tbrun.setFontSize(txtrn.get(jjj).getFontSize());
									 
									 tbrun.setText(" ");
									 tbrun.setText(txtrn.get(jjj).getText());
									 
									 tbrun.setCharacterSpacing(txtrn.get(jjj).getCharacterSpacing());
									 tbrun.setItalic(txtrn.get(jjj).isItalic());
									  
								 }
								 
							  }
							  
							  
							  tb.setAnchor(anchor);
							  
							  
						}
						
						pp++;
						
	      			}
	        		
	    			}
	    			
	    			
	    			
	        }
		
	    	}
	    	
	    	FileOutputStream fileOutputStream = new FileOutputStream("..\\DataUserGenerated\\EmbeddedObjects\\PPTX\\TIFF\\Embedded_Files\\"+(image_name.split("\\."))[0]+"_"+tmp_rslt[tmp_rslt.length-1]);
	    	ppt.write(fileOutputStream);
	    	
	    	fileOutputStream.close();
		
	}

		private static void unzip(String source, String destination) {
			// TODO Auto-generated method stub
			
			try {
				  ZipFile zipFile = new ZipFile(source);
				  zipFile.extractAll(destination);
				} catch (ZipException e) {
				  e.printStackTrace();
				}
				
			
			
			
		}

		private static String copy_rename(String presentation) throws IOException {
			// TODO Auto-generated method stub
			
			
			String[] tmp_rslt= presentation.split("\\\\");
	        String ttmpp= tmp_rslt[tmp_rslt.length-1];
	        String[] ttmmpp= ttmpp.split("\\.");
	        
	    	FileInputStream fis = new FileInputStream(presentation);
	    	XMLSlideShow document = new XMLSlideShow(fis); 
			String tmp_file="..\\temp\\pptx\\temp";
			String tmp_extnsn=".pptx";
			String tmp_name = tmp_file+"_"+ttmmpp[0]+tmp_extnsn;
				 
			document.write(new FileOutputStream(new File(tmp_name))); 
			File file = new File("..\\temp\\pptx\\temp_"+ttmmpp[0]+".pptx");
			File file2 = new File("..\\temp\\pptx\\temp_"+ttmmpp[0]+".zip");
			if (file2.exists())
			throw new java.io.IOException("file exists");
			boolean success = file.renameTo(file2);
			if (!success) {
			// File was not successfully renamed
			}
			
			return "..\\temp\\pptx\\temp_"+ttmmpp[0]+".zip";
			
		}

		private static void MoveFiles(String src, String dst) {
			File destinationFolder = new File(dst);
		    File sourceFolder = new File(src);
		    if (!destinationFolder.exists())
		    {
		        destinationFolder.mkdirs();
		    }
		    if (sourceFolder.exists() && sourceFolder.isDirectory())
		    {
		        File[] listOfFiles = sourceFolder.listFiles();

		        if (listOfFiles != null)
		        {
		            for (File child : listOfFiles )
		            {
		                child.renameTo(new File(destinationFolder + "\\" + child.getName()));
		            }

		            sourceFolder.delete();
		        }
		    }
		    else
		    {
		    }
			
		
	}

		private static void copy_original_file(String documnt, String result_OriginalFiles_Folder, String source, String destination) throws IOException {
	    	
			String presentation=documnt;
	    	String[] tmp_rslt= presentation.split("\\\\");
	        String ttmpp= tmp_rslt[tmp_rslt.length-1];
	        String[] ttmmpp= ttmpp.split("\\.");
	    	
            String[] imgname2;
            String imgtype2;
            int rnd_imgNum=-1;
	    	FileInputStream fileInputStream = new FileInputStream(presentation);
	    	XMLSlideShow slideShow = new XMLSlideShow(fileInputStream);
	    	fileInputStream.close();
	    	XMLSlideShow ppt = new XMLSlideShow();
	    	ppt.setPageSize(slideShow.getPageSize());
	        XSLFSlide[] src_slide=slideShow.getSlides();
	        String tmp,tmp1, img_location="";
	        String[] tmp2=null;
	        int number_of_slides=src_slide.length;
	        Random rnd = new Random(number_of_slides);

			int pp;
	        Boolean flag=false;
	    	int rltnshp_size;
	        PackagePart tmpp1;
			String tmpp2;
			String[] tmpp3;
			PackagePartName pckgnm;
			int imgIndex=0;
			
	        for(int ii=0;ii<number_of_slides;ii++){
	        	pp=0;
	    		flag=false;
	        	rltnshp_size=src_slide[ii].getRelations().size();
	        	tmp=src_slide[ii].getRelations().get(src_slide[ii].getRelations().size()-1).toString();
				tmp1=tmp.trim();
				tmp2=tmp1.split(":");
				img_location= ((tmp2[1].split("-"))[0]).replaceAll("/", "\\\\");
				String img_typee=tmp2[2].toString().trim();
			
				////////////////////////////////////////////Shape/////////////////////////////////////////////////////////////
								
				XSLFShape[] shapes = src_slide[ii].getShapes();
				int numOfImgPerSlide=0;
				
				for (XSLFShape shape: shapes) {
				
				if (shape instanceof XSLFPictureShape){
					numOfImgPerSlide++;
				}
				
				}
				
				java.awt.geom.Rectangle2D[] img_anchor=new java.awt.geom.Rectangle2D[numOfImgPerSlide];
				
				int imgcnt=0;
				
				for (XSLFShape shape: shapes) {
					
				if (shape instanceof XSLFTextShape) {
				
					
				}else{
				
				if (shape instanceof XSLFPictureShape){
					img_anchor[imgcnt]=shape.getAnchor();
					imgcnt++;
					
					}
				}
				
				
				}
				
				
				
				if(rltnshp_size>1){
					
					XSLFSlide newSlide = ppt.createSlide();
					
					int img_num=0;
					
					for(int im=0;im<rltnshp_size;im++){
						
						tmpp1= src_slide[ii].getRelations().get(im).getPackagePart();
						tmpp2=tmpp1.getContentType();
						tmpp3=tmpp2.split("/");
						pckgnm=tmpp1.getPartName();
						img_location= ((pckgnm.toString()).replaceAll("/", "\\\\"));
						
						if(tmpp3[0].equals("image")){
							
						///////////////////////////////////////////////Shape//////////////////////////////////////////////////////////////////
						
							String img_url=""+destination.trim().substring(0, destination.length()-1)+img_location.trim();	
			            	File src_fl= new File(img_url);
			            	imgname2=src_fl.getName().split("\\.");
	                    	imgtype2=imgname2[imgname2.length-1];
	                    	
	                    	if((imgtype2.equals("tiff")) || (imgtype2.equals("TIFF"))){
	                    		imgIndex++;
	                    	}
			            	
			            	
	                    		
			            	File image=new File(img_url);
			            	byte[] picture = IOUtils.toByteArray(new FileInputStream(image));
			            	int idx=0;
			            		idx = ppt.addPicture(picture, XSLFPictureData.PICTURE_TYPE_TIFF);
			    			
			    			if(im<=(img_anchor.length)){
				    			if(img_anchor[img_num].isEmpty()==false){
				    			XSLFShape pic =  newSlide.createAutoShape();
				    			newSlide.removeShape(pic);
				    	        XSLFPictureShape picturee = newSlide.createPicture(idx);
				    	        picturee.setAnchor(img_anchor[img_num]);
								
				    			}
				    	        
				    			}
				    			
				    			img_num++;
			    			
						}
						
					} 
					
					
					for (XSLFTextShape ph : src_slide[ii].getPlaceholders()) {
	        			
						java.awt.geom.Rectangle2D anchor;
						XSLFTextShape tb= newSlide.createTextBox();
						tb.clearText();
						
						if(ph!=null) {
							
							anchor = ph.getAnchor();
							tb.setFillColor(ph.getFillColor());
							tb.setVerticalAlignment(ph.getVerticalAlignment());
							tb.setBottomInset(ph.getBottomInset());
							tb.setLeftInset(ph.getLeftInset());
							tb.setTextAutofit(ph.getTextAutofit());
							tb.setTextDirection(ph.getTextDirection());
							tb.setLineColor(ph.getLineColor());
							tb.setLineCap(ph.getLineCap());
							tb.setAnchor(anchor);
							
							Boolean clrr=false;
							List<XSLFTextParagraph> textpara=ph.getTextParagraphs();
						  
						  int paralen=textpara.size();
						  
						  for(int iii=0;iii<paralen;iii++){
								  XSLFTextParagraph tbpara=tb.addNewTextParagraph();
								  tbpara.setTextAlign(textpara.get(iii).getTextAlign());
								  tbpara.setIndent(textpara.get(iii).getIndent());
								  tbpara.setLeftMargin(textpara.get(iii).getLeftMargin());
								  tbpara.setLineSpacing(textpara.get(iii).getLineSpacing());
								  tbpara.setLevel(textpara.get(iii).getLevel());
								  tbpara.setSpaceBefore(textpara.get(iii).getSpaceBefore());
								  
								 
								 List<XSLFTextRun> txtrn= textpara.get(iii).getTextRuns();
								 
								 int runlen=txtrn.size();
								 
								 for(int jjj=0;jjj<runlen;jjj++){
									 XSLFTextRun tbrun=tbpara.addNewTextRun();
									 if(pp==0) {
										 tbrun.setBold(true);
										 tbrun.setFontSize(20.0);
									 }else {
									 tbrun.setBold(txtrn.get(jjj).isBold());
									 }
									 
									 if(txtrn.get(jjj).getFontColor().equals(Color.WHITE)) {
										 tbrun.setFontColor(Color.black); 
									 }else {
									 tbrun.setFontColor(txtrn.get(jjj).getFontColor());
									 }
									 
									 tbrun.setFontFamily(txtrn.get(jjj).getFontFamily());
									 tbrun.setCharacterSpacing(txtrn.get(jjj).getCharacterSpacing());
									 tbrun.setFontSize(txtrn.get(jjj).getFontSize());
									 
									 tbrun.setText(" ");
									 tbrun.setText(txtrn.get(jjj).getText());
									 
									 tbrun.setCharacterSpacing(txtrn.get(jjj).getCharacterSpacing());
									 tbrun.setItalic(txtrn.get(jjj).isItalic());
									  
								 }
								 
							  }
							  
							  
							  tb.setAnchor(anchor);
							  
						}
						
						pp++;
						
	      			}
					
			
	        }
				else{
				
	        	
	    		//////////////////////////////////////////Random Image Insertion/////////////////////////////////////////////////////////////////////
	    		
	    			XSLFSlide newSlide = ppt.createSlide();
	    			for (XSLFTextShape nwsldph : newSlide.getPlaceholders()) {
	    				nwsldph.clearText();
	    				nwsldph.setText(" ");
	        			}
	    			
	    			
	    			String shpnm;
	    			
	    			for(XSLFShape shp : src_slide[ii].getShapes()){
	    				 shpnm=(shp.getShapeName().split(" "))[0];
	    				
	    				if(!(shpnm.equals("Rectangle")) && !(shpnm.equals("Title")) && !(shpnm.equals("Content")) ){
	    					
	    					flag=true;
	    					
	    				}	
	    				
	    			}
	    			
	    			
	    			
	    			if(flag==true){
	    				
	    				newSlide.importContent(src_slide[ii]);
	    				
	    			}else{
	        		
	        		for (XSLFTextShape ph : src_slide[ii].getPlaceholders()) {
	    				
	        			
						java.awt.geom.Rectangle2D anchor;
						XSLFTextShape tb= newSlide.createTextBox();
						tb.clearText();
						
						
						
						if(ph!=null) {

							anchor = ph.getAnchor();
							tb.setFillColor(ph.getFillColor());
							tb.setVerticalAlignment(ph.getVerticalAlignment());
							tb.setBottomInset(ph.getBottomInset());
							tb.setLeftInset(ph.getLeftInset());
							tb.setTextAutofit(ph.getTextAutofit());
							tb.setTextDirection(ph.getTextDirection());
							tb.setLineColor(ph.getLineColor());
							tb.setLineCap(ph.getLineCap());
							tb.setAnchor(anchor);
							
						Boolean clrr=false;
						
						  
						  List<XSLFTextParagraph> textpara=ph.getTextParagraphs();
						  
						  int paralen=textpara.size();
						  
						  for(int iii=0;iii<paralen;iii++){
								  XSLFTextParagraph tbpara=tb.addNewTextParagraph();
								 
								  tbpara.setBullet(textpara.get(iii).isBullet());
								  tbpara.setTextAlign(textpara.get(iii).getTextAlign());
								  tbpara.setIndent(textpara.get(iii).getIndent());
								  tbpara.setLeftMargin(textpara.get(iii).getLeftMargin());
								  tbpara.setLineSpacing(textpara.get(iii).getLineSpacing());
								  tbpara.setLevel(textpara.get(iii).getLevel());
								  tbpara.setSpaceBefore(textpara.get(iii).getSpaceBefore());
								  
								 
								 List<XSLFTextRun> txtrn= textpara.get(iii).getTextRuns();
								 
								 int runlen=txtrn.size();
								 
								 for(int jjj=0;jjj<runlen;jjj++){
									 //tb.addNewTextParagraph().addNewTextRun();
									 
									 XSLFTextRun tbrun=tbpara.addNewTextRun();
									 
									 if(pp==0) {
										 tbrun.setBold(true);
										 tbrun.setFontSize(20.0);
									 }else {
									 tbrun.setBold(txtrn.get(jjj).isBold());
									 }
									 
									 if(txtrn.get(jjj).getFontColor().equals(Color.WHITE)) {
										 tbrun.setFontColor(Color.black); 
									 }else {
									 tbrun.setFontColor(txtrn.get(jjj).getFontColor());
									 }
									 
									 tbrun.setFontFamily(txtrn.get(jjj).getFontFamily());
									 tbrun.setCharacterSpacing(txtrn.get(jjj).getCharacterSpacing());
									 tbrun.setFontSize(txtrn.get(jjj).getFontSize());
									 
									 tbrun.setText(" ");
									 tbrun.setText(txtrn.get(jjj).getText());
									 
									 tbrun.setCharacterSpacing(txtrn.get(jjj).getCharacterSpacing());
									 tbrun.setItalic(txtrn.get(jjj).isItalic());
									  
								 }
								 
							  }
							  
							  
							  tb.setAnchor(anchor);
							  
							  
						}
						
						pp++;
						
	      			}
	        		
	    			}
	    			
	        }
		
	    	}	

	    	FileOutputStream fileOutputStream = new FileOutputStream("..\\DataUserGenerated\\EmbeddedObjects\\PPTX\\TIFF\\Original_Files\\"+tmp_rslt[tmp_rslt.length-1]);
	    	ppt.write(fileOutputStream);
	    	fileOutputStream.close();
	    	
	    }
			
	

		public static Boolean resizeImage(String sourceImg, String destImg, Integer Width, Integer Height, Integer width_whiteSpaceAmount, Integer height_whiteSpaceAmount) 
    {
        BufferedImage origImage;
        try 
        {
            String[] yy=sourceImg.split("\\.");
            String input = sourceImg;
            String output = yy[yy.length-2]+".tiff";
            sourceImg=output;
            
            origImage = ImageIO.read(new File(sourceImg));
            int type = origImage.getType() == 0? BufferedImage.TYPE_INT_ARGB : origImage.getType();
            int fHeight = Height;
            int fWidth = Width;
            int whiteSpace_Width = Width + width_whiteSpaceAmount; //Formatting all to squares so don't need two whiteSpace calcs..
            int whiteSpace = Height + height_whiteSpaceAmount; //Formatting all to squares so don't need two whiteSpace calcs..
            double aspectRatio;

            if (origImage.getHeight() > origImage.getWidth()) //If the pictures height is greater than the width then scale appropriately.
            {
                fHeight = Height; //Set the height to 60 as it is the biggest side.
                aspectRatio = (double)origImage.getWidth() / (double)origImage.getHeight(); //Get the aspect ratio of the picture.
                fWidth = (int)Math.round(Width * aspectRatio); //Sets the width as created via the aspect ratio.
            }
            else if (origImage.getHeight() < origImage.getWidth()) //If the pictures width is greater than the height scale appropriately.
            {
                fWidth = Width; //Set the height to 60 as it is the biggest side.

                aspectRatio = (double)origImage.getHeight() / (double)origImage.getWidth(); //Get the aspect ratio of the picture.
                fHeight = (int)Math.round(Height * aspectRatio); //Sets the height as created via the aspect ratio.
            }

            int extraHeight = whiteSpace - fHeight;
            int extraWidth = whiteSpace_Width - fWidth;

            BufferedImage resizedImage = new BufferedImage(whiteSpace_Width, whiteSpace, type);
            Graphics2D g = resizedImage.createGraphics();
            g.setColor(Color.white);
            g.fillRect(0, 0, whiteSpace_Width, whiteSpace);

            g.setComposite(AlphaComposite.Src);
            g.setRenderingHint(RenderingHints.KEY_INTERPOLATION, RenderingHints.VALUE_INTERPOLATION_BILINEAR);
            g.setRenderingHint(RenderingHints.KEY_RENDERING, RenderingHints.VALUE_RENDER_QUALITY);
            g.setRenderingHint(RenderingHints.KEY_ANTIALIASING, RenderingHints.VALUE_ANTIALIAS_ON);

            g.drawImage(origImage, extraWidth/2, extraHeight/2, fWidth, fHeight, null);
            g.dispose();

            ImageIO.write(resizedImage, "tiff", new File(destImg));
        } 
        catch (IOException ex) 
        {
            return false;
        }

        return true;
    }

		
		
		private static void insert_image(String documnt, String image_url, String result_OriginalFiles_Folder, String result_EmbeddedFiles_Folder, String source, String destination) throws IOException {
	    	String presentation=documnt;
	    	String[] tmp_image_name=image_url.split("\\\\");
	    	String image_name=tmp_image_name[tmp_image_name.length-1];
	    	String image_name2=tmp_image_name[tmp_image_name.length-1];
	    	String[] tmp_rslt= presentation.split("\\\\");
	    	
			FileInputStream fileInputStream = new FileInputStream(presentation);
	    	XMLSlideShow slideShow = new XMLSlideShow(fileInputStream);
	    	fileInputStream.close();
	    		
	    	XMLSlideShow ppt = new XMLSlideShow();
	        
	    	ppt.setPageSize(slideShow.getPageSize());
	    
	        XSLFSlide[] src_slide=slideShow.getSlides();
	        
	        String tmp,tmp1, img_location="";
	        String[] tmp2=null;
	        int number_of_slides=src_slide.length;
	        
	        Random rnd = new Random(number_of_slides);
	        
	        int rnd_position=rnd.nextInt(number_of_slides); 
	        
	        int rltnshp_size;
	        
	        XSLFSlideLayout defaultLayout = slideShow.getSlideMasters()[0].getLayout(SlideLayout.TITLE_AND_CONTENT);
	        XSLFSlideLayout imageLayout = slideShow.getSlideMasters()[0].getLayout(SlideLayout.BLANK);
	    	int pp;
	        Boolean flag=false;
	    	String image_it_is;
	    	
	        for(int ii=0;ii<number_of_slides;ii++){
	        	pp=0;
	    		
	        	flag=false;
	        	
	        	rltnshp_size=src_slide[ii].getRelations().size();
	        	tmp=src_slide[ii].getRelations().get(src_slide[ii].getRelations().size()-1).toString();
				tmp1=tmp.trim();
				tmp2=tmp1.split(":");
				img_location= ((tmp2[1].split("-"))[0]).replaceAll("/", "\\\\");
				String img_typee=tmp2[2].toString().trim();
				
					if(ii==rnd_position){
	    			
	    			XSLFSlide newSlide = ppt.createSlide();
	    			
	    			String img_url=image_url;
	            	File image=new File(img_url);
	    			BufferedImage bimg = ImageIO.read(image);
	    			int width          = bimg.getWidth();
	    			int height         = bimg.getHeight();
	    			
	    			byte[] picture = IOUtils.toByteArray(new FileInputStream(image));
	    			int idx = ppt.addPicture(picture, XSLFPictureData.PICTURE_TYPE_TIFF);
	    				XSLFPictureShape pic = newSlide.createPicture(idx);
	    				pic.setAnchor(new Rectangle2D.Double(50, 50, width, height));
	    			
	    			
	    		}
				
								
			XSLFShape[] shapes = src_slide[ii].getShapes();
			int numOfImgPerSlide=0;
			
			for (XSLFShape shape: shapes) {
			
			if (shape instanceof XSLFPictureShape){
			numOfImgPerSlide++;
			}
			
			}
			
			java.awt.geom.Rectangle2D[] img_anchor=new java.awt.geom.Rectangle2D[numOfImgPerSlide];
			
			int imgcnt=0;
			
			for (XSLFShape shape: shapes) {
			
			if (shape instanceof XSLFTextShape) {
			
			
			}else{
			
			if (shape instanceof XSLFPictureShape){
			
			img_anchor[imgcnt]=shape.getAnchor();
			imgcnt++;
			
			}
			}
			
			
			}
			
			
			if(rltnshp_size>1){
			
			XSLFSlide newSlide = ppt.createSlide();
			
			int img_num=0;
			
			for(int im=0;im<rltnshp_size;im++){
			
			PackagePart tmpp1 = src_slide[ii].getRelations().get(im).getPackagePart();
			String tmpp2 = tmpp1.getContentType();
			String[] tmpp3 = tmpp2.split("/");
			PackagePartName pckgnm = tmpp1.getPartName();
			img_location= ((pckgnm.toString()).replaceAll("/", "\\\\"));
			
			if(tmpp3[0].equals("image")){

			///////////////////////////////////////////////Shape//////////////////////////////////////////////////////////////////
				String img_url="..\\temp\\pptx\\"+destination.trim().substring(0, destination.length())+img_location.trim();	
				File src_fl= new File(img_url);
				String[] imgname2 = src_fl.getName().split("\\.");
				String imgtype2 = imgname2[imgname2.length-1];
				int imgIndex = 0;
				if((imgtype2.equals("tiff")) || (imgtype2.equals("TIFF"))){
					imgIndex++;
				}
				
				String[] immmmmg=image_name2.split("\\.");	
				String image_type = immmmmg[immmmmg.length-1];
				image_name=image_name.split("\\.")[0];
				File image=new File(img_url);
				byte[] picture = IOUtils.toByteArray(new FileInputStream(image));
				int idx=0;
				
				if(image_type.toUpperCase().equals("BMP")){
					idx = ppt.addPicture(picture, XSLFPictureData.PICTURE_TYPE_BMP);
				}else if(image_type.toUpperCase().equals("PNG")){
					idx = ppt.addPicture(picture, XSLFPictureData.PICTURE_TYPE_PNG);
				}else if(image_type.toUpperCase().equals("DIB")){
					idx = ppt.addPicture(picture, XSLFPictureData.PICTURE_TYPE_DIB);
				}else if(image_type.toUpperCase().equals("EMF")){
					idx = ppt.addPicture(picture, XSLFPictureData.PICTURE_TYPE_EMF);
				}else if(image_type.toUpperCase().equals("EPS")){
					idx = ppt.addPicture(picture, XSLFPictureData.PICTURE_TYPE_EPS);
				}else if(image_type.toUpperCase().equals("GIF")){
					idx = ppt.addPicture(picture, XSLFPictureData.PICTURE_TYPE_GIF);
				}else if(image_type.toUpperCase().equals("PICT")){
					idx = ppt.addPicture(picture, XSLFPictureData.PICTURE_TYPE_PICT);
				}else if(image_type.toUpperCase().equals("TIFF")){
					idx = ppt.addPicture(picture, XSLFPictureData.PICTURE_TYPE_TIFF);
				}else if(image_type.toUpperCase().equals("WMF")){
					idx = ppt.addPicture(picture, XSLFPictureData.PICTURE_TYPE_WMF);
				}else if(image_type.toUpperCase().equals("WPG")){
					idx = ppt.addPicture(picture, XSLFPictureData.PICTURE_TYPE_WPG);
				}else {
					idx = ppt.addPicture(picture, XSLFPictureData.PICTURE_TYPE_JPEG);
					
				}
				
				
				if(im<=(img_anchor.length)){
					
					if(img_anchor[img_num].isEmpty()==false){
					
					XSLFShape pic =  newSlide.createAutoShape();
					
					newSlide.removeShape(pic);
			        XSLFPictureShape picturee = newSlide.createPicture(idx);
			        picturee.setAnchor(img_anchor[img_num]);
					
					}
			        
					}
					
					img_num++;
				
			}
			
			} 
			
			
			for (XSLFTextShape ph : src_slide[ii].getPlaceholders()) {
			
			
			java.awt.geom.Rectangle2D anchor;
			XSLFTextShape tb= newSlide.createTextBox();
			tb.clearText();
			
			if(ph!=null) {
				
				anchor = ph.getAnchor();
				tb.setFillColor(ph.getFillColor());
				tb.setVerticalAlignment(ph.getVerticalAlignment());
				tb.setBottomInset(ph.getBottomInset());
				tb.setLeftInset(ph.getLeftInset());
				tb.setTextAutofit(ph.getTextAutofit());
				tb.setTextDirection(ph.getTextDirection());
				tb.setLineColor(ph.getLineColor());
				tb.setLineCap(ph.getLineCap());
				tb.setAnchor(anchor);
				
				Boolean clrr=false;
				List<XSLFTextParagraph> textpara=ph.getTextParagraphs();
				  
				int paralen=textpara.size();
			  
			  for(int iii=0;iii<paralen;iii++){
					  XSLFTextParagraph tbpara=tb.addNewTextParagraph();
					  tbpara.setTextAlign(textpara.get(iii).getTextAlign());
					  tbpara.setIndent(textpara.get(iii).getIndent());
					  tbpara.setLeftMargin(textpara.get(iii).getLeftMargin());
					  tbpara.setLineSpacing(textpara.get(iii).getLineSpacing());
					  tbpara.setLevel(textpara.get(iii).getLevel());
					  tbpara.setSpaceBefore(textpara.get(iii).getSpaceBefore());
					  
					 
					 List<XSLFTextRun> txtrn= textpara.get(iii).getTextRuns();
					 
					 int runlen=txtrn.size();
					 
					 for(int jjj=0;jjj<runlen;jjj++){
						 XSLFTextRun tbrun=tbpara.addNewTextRun();
						 if(pp==0) {
							 tbrun.setBold(true);
							 tbrun.setFontSize(20.0);
						 }else {
						 tbrun.setBold(txtrn.get(jjj).isBold());
						 }
						 
						 if(txtrn.get(jjj).getFontColor().equals(Color.WHITE)) {
							 tbrun.setFontColor(Color.black); 
						 }else {
						 tbrun.setFontColor(txtrn.get(jjj).getFontColor());
						 }
						 
						 tbrun.setFontFamily(txtrn.get(jjj).getFontFamily());
						 tbrun.setCharacterSpacing(txtrn.get(jjj).getCharacterSpacing());
						 tbrun.setFontSize(txtrn.get(jjj).getFontSize());
						 
						 tbrun.setText(" ");
						 tbrun.setText(txtrn.get(jjj).getText());
						 
						 tbrun.setCharacterSpacing(txtrn.get(jjj).getCharacterSpacing());
						 tbrun.setItalic(txtrn.get(jjj).isItalic());
						  
					 }
					 
				  }
				  
				  
				  tb.setAnchor(anchor);
				  
			}
			
			pp++;
			
			}
			
			
			}
				
				
					
					else{
				
	    			XSLFSlide newSlide = ppt.createSlide();
	    			for (XSLFTextShape nwsldph : newSlide.getPlaceholders()) {
	    				nwsldph.clearText();
	    				nwsldph.setText(" ");
	        			}
	    			
	    			
	    			Boolean hyperlink=false;
	    			String shpnm;
	    			
	    			for(XSLFShape shp : src_slide[ii].getShapes()){
	    				shpnm=(shp.getShapeName().split(" "))[0];
	    				if(!(shpnm.equals("Rectangle")) && !(shpnm.equals("Title")) && !(shpnm.equals("Content")) ){
	    					
	    					flag=true;
	    				
	    				}	
	    			}
	    			
	    			if(flag==true){
	    				newSlide.importContent(src_slide[ii]);
	    			}else{
	        		
	        		for (XSLFTextShape ph : src_slide[ii].getPlaceholders()) {
	    				java.awt.geom.Rectangle2D anchor;
						XSLFTextShape tb= newSlide.createTextBox();
						tb.clearText();
						
						if(ph!=null) {
							
							anchor = ph.getAnchor();
							tb.setFillColor(ph.getFillColor());
							tb.setVerticalAlignment(ph.getVerticalAlignment());
							tb.setBottomInset(ph.getBottomInset());
							tb.setLeftInset(ph.getLeftInset());
							tb.setTextAutofit(ph.getTextAutofit());
							tb.setTextDirection(ph.getTextDirection());
							tb.setLineColor(ph.getLineColor());
							tb.setLineCap(ph.getLineCap());
							tb.setLeftInset(ph.getLeftInset());
							tb.setRightInset(ph.getRightInset());
							tb.setTextAutofit(ph.getTextAutofit());
							tb.setTopInset(ph.getTopInset());
							tb.setVerticalAlignment(ph.getVerticalAlignment());
							tb.setWordWrap(ph.getWordWrap());
							tb.setAnchor(anchor);
						Boolean clrr=false;
						  List<XSLFTextParagraph> textpara=ph.getTextParagraphs();
						  
						  int paralen=textpara.size();
						  
						  for(int iii=0;iii<paralen;iii++){
								  
							  	  XSLFTextParagraph tbpara=tb.addNewTextParagraph();
								  tbpara.setBullet(textpara.get(iii).isBullet());
								  tbpara.setTextAlign(textpara.get(iii).getTextAlign());
								  tbpara.setIndent(textpara.get(iii).getIndent());
								  tbpara.setLeftMargin(textpara.get(iii).getLeftMargin());
								  tbpara.setLineSpacing(textpara.get(iii).getLineSpacing());
								  tbpara.setLevel(textpara.get(iii).getLevel());
								  tbpara.setSpaceBefore(textpara.get(iii).getSpaceBefore());
								  tbpara.setLineSpacing(textpara.get(iii).getLineSpacing());
								  tbpara.setSpaceAfter(textpara.get(iii).getSpaceAfter());
								  tbpara.setSpaceBefore(textpara.get(iii).getSpaceBefore());
								  tbpara.setLevel(textpara.get(iii).getLevel());
								  
								  
								  
								  
								 List<XSLFTextRun> txtrn= textpara.get(iii).getTextRuns();
								 
								 int runlen=txtrn.size();
								 
								 for(int jjj=0;jjj<runlen;jjj++){
									 
									 XSLFTextRun tbrun=tbpara.addNewTextRun();
									 if(pp==0) {
										 tbrun.setBold(true);
										 tbrun.setFontSize(20.0);
									 }else {
									 tbrun.setBold(txtrn.get(jjj).isBold());
									 }
									 
									 if(txtrn.get(jjj).getFontColor().equals(Color.WHITE)) {
										 tbrun.setFontColor(Color.black); 
									 }else {
									 tbrun.setFontColor(txtrn.get(jjj).getFontColor());
									 }
									 
									 tbrun.setFontFamily(txtrn.get(jjj).getFontFamily());
									 tbrun.setCharacterSpacing(txtrn.get(jjj).getCharacterSpacing());
									 tbrun.setFontSize(txtrn.get(jjj).getFontSize());
									 
									 tbrun.setText(" ");
									 tbrun.setText(txtrn.get(jjj).getText());
									 
									 tbrun.setCharacterSpacing(txtrn.get(jjj).getCharacterSpacing());
									 tbrun.setItalic(txtrn.get(jjj).isItalic());
									 
									 tbrun.setUnderline(txtrn.get(jjj).isUnderline());
									 
								 }
								 
							  }
							  
							  
							  tb.setAnchor(anchor);
							  
							
						}
						
						
						pp++;
						
	      			}
	        		
	    			}
	    			
	    			
	    			
	        }
	        			
		
	    	}
	    	
	    	FileOutputStream fileOutputStream = new FileOutputStream("..\\DataUserGenerated\\EmbeddedObjects\\PPTX\\TIFF\\Embedded_Files\\"+(image_name.split("\\."))[0]+"_"+tmp_rslt[tmp_rslt.length-1]);
	    	ppt.write(fileOutputStream);
	    	fileOutputStream.close();
			
	}

		

				
		
		public static void deleteDirectory(String directoryFilePath) throws IOException
		{
		    Path directory = Paths.get(directoryFilePath);

		    if (Files.exists(directory))
		    {
		        Files.walkFileTree(directory, new SimpleFileVisitor<Path>()
		        {
		            @Override
		            public FileVisitResult visitFile(Path path, BasicFileAttributes basicFileAttributes) throws IOException
		            {
		                Files.delete(path);
		                return FileVisitResult.CONTINUE;
		            }

		            @Override
		            public FileVisitResult postVisitDirectory(Path directory, IOException ioException) throws IOException
		            {
		                Files.delete(directory);
		                return FileVisitResult.CONTINUE;
		            }
		        });
		    }
		}
		
		
		
}
