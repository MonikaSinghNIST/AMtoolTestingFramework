package javasrc;
import java.util.List;
import java.util.Random;


import javax.imageio.ImageIO;
import javax.imageio.stream.ImageInputStream;
import javax.imageio.stream.ImageOutputStream;

import java.awt.image.BufferedImage;
import java.io.ByteArrayInputStream;
import java.io.File;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.InputStream;
import java.nio.file.FileVisitResult;
import java.nio.file.Files;
import java.nio.file.Path;
import java.nio.file.Paths;
import java.nio.file.SimpleFileVisitor;
import java.nio.file.attribute.BasicFileAttributes;

import org.apache.poi.openxml4j.exceptions.InvalidFormatException;
import org.apache.poi.openxml4j.exceptions.OpenXML4JException;
import org.apache.poi.xwpf.usermodel.BodyElementType;
import org.apache.poi.xwpf.usermodel.Document;
import org.apache.poi.xwpf.usermodel.IBodyElement;
import org.apache.poi.xwpf.usermodel.ParagraphAlignment;
import org.apache.poi.xwpf.usermodel.XWPFDocument;
import org.apache.poi.xwpf.usermodel.XWPFParagraph;
import org.apache.poi.xwpf.usermodel.XWPFPicture;
import org.apache.poi.xwpf.usermodel.XWPFPictureData;
import org.apache.poi.xwpf.usermodel.XWPFRun;
import org.apache.poi.xwpf.usermodel.XWPFStyle;
import org.apache.poi.xwpf.usermodel.XWPFStyles;
import org.apache.poi.xwpf.usermodel.XWPFTable;
import org.apache.poi.xwpf.usermodel.XWPFTableRow;
import org.apache.xmlbeans.XmlException;
import org.apache.xmlbeans.XmlToken;
import org.openxmlformats.schemas.drawingml.x2006.main.CTNonVisualDrawingProps;
import org.openxmlformats.schemas.drawingml.x2006.main.CTPositiveSize2D;
import org.openxmlformats.schemas.drawingml.x2006.wordprocessingDrawing.CTInline;
import org.openxmlformats.schemas.spreadsheetml.x2006.main.CTRow;
import org.openxmlformats.schemas.wordprocessingml.x2006.main.CTFonts;
import org.openxmlformats.schemas.wordprocessingml.x2006.main.CTStyle;
import org.openxmlformats.schemas.wordprocessingml.x2006.main.CTStyles;
import org.openxmlformats.schemas.wordprocessingml.x2006.main.CTTbl;



import net.lingala.zip4j.core.ZipFile;
import net.lingala.zip4j.exception.ZipException;




public class DocxCopyJpegPHP {

	public static void main(String[] args) throws OpenXML4JException, IOException {
		// TODO Auto-generated method stub

		    try {
		    	
		    	
		    	///////////////////////////////Read all files from a folder/////////////////////////////////////////////
		    	
		    	String image_url="";
		    	
		    	String documnt="";
				
				
		    	        
		    	 File folder = new File("../DataUserGenerated\\EmbeddedObjects\\Docx\\Docx_temp\\");
				 File[] listOfFiles = folder.listFiles();
				 
				 for (File file : listOfFiles) {
				  if (file.isFile()) {
				    	
					  documnt= "../DataUserGenerated\\EmbeddedObjects\\Docx\\Docx_temp\\"+file.getName();
					  copy_original_file(documnt);
					  
					  
					  File img_folder = new File("../DataUserGenerated\\EmbeddedObjects\\Docx\\JPEG\\Embedded_Objects\\");
					  File[] img_listOfFiles = img_folder.listFiles();
					  for (File img_file : img_listOfFiles) {
						 if (img_file.isFile()) {
						
							image_url= "../DataUserGenerated\\EmbeddedObjects\\Docx\\JPEG\\Embedded_Objects\\"+img_file.getName();
						    copy_insert_image(documnt,image_url);
						     
							
				    	        
				    	    }
				    	}
		    	        
		    	       
								
		    	        
////////////////////////////////Insert every Image in every document in the folder randomly//////////////////////////////////////////////
		    	        
		    	      /*  
						String[] tmp_rslt= documnt.split("\\\\");
					  String ttmpp= tmp_rslt[tmp_rslt.length-1];
					  String[] ttmmpp= ttmpp.split("\\.");
					  System.out.println("test_copy"+ttmmpp[0]);
					  deleteDirectory("test_copy"+ttmmpp[0]);
						*/
		    	        
		    	    }
		    	}
		    	
		    	//copy_insert_image(documnt,image_url);
		    	
		        
		    } catch (FileNotFoundException e) {
		        e.printStackTrace();
		    } catch (IOException e) {
		        e.printStackTrace();
		    }
		    
		    
		    
		}

		private static void copy_original_file(String documnt) throws IOException, InvalidFormatException {
		// TODO Auto-generated method stub
		
			
	    	
	    	int number_of_paragraphs, image_position;
	    	
	    	String[] tmp_rslt= documnt.split("\\\\");
	        String ttmpp= tmp_rslt[tmp_rslt.length-1];
	        String[] ttmmpp= ttmpp.split("\\.");
	        
	        
	       
	        
	        
	        
	        
	    	
	    //////////////////////////Creating a copy///////////////////////////////////////////////	

	    	
	    	FileInputStream fis = new FileInputStream(documnt);
	    	XWPFDocument document = new XWPFDocument(fis); 
	    	String tmp_file="test";
	    	String tmp_extnsn=".docx";
	    	String tmp_name = tmp_file+"_copy"+ttmmpp[0]+tmp_extnsn;
	    	    	 
	    	document.write(new FileOutputStream(new File(tmp_name))); 
	    	document.close();
	    	
	    	
	    	
	    	
	    	
	    /////////////////////////Rename//////////////////////////////////////////	
	    	// File (or directory) with old name
	    	File file = new File("test_copy"+ttmmpp[0]+".docx");
	    	// File (or directory) with new name
	    	File file2 = new File("test_copy"+ttmmpp[0]+".zip");

	    	if (file2.exists())
	    	   throw new java.io.IOException("file exists");

	    	// Rename file (or directory)
	    	boolean success = file.renameTo(file2);

	    	if (!success) {
	    	   // File was not successfully renamed
	    	}
	    	
	  ///////////////////////////Unzip//////////////////////////////////////  	
	    	
	    	
	    	
	    	String source = "test_copy"+ttmmpp[0]+".zip";
	    	String destination = "test_copy"+ttmmpp[0]+"\\";
	    	

	    	    try {
	    	        ZipFile zipFile = new ZipFile(source);
	    	        zipFile.extractAll(destination);
	    	    } catch (ZipException e) {
	    	        e.printStackTrace();
	    	    }
	    	
	 ////////////////////////////////////////////////////////////////////////////   	
	    	
	    	InputStream is = new FileInputStream(documnt);
	    	XWPFDocument doc = new XWPFDocument(is);

	        List<XWPFParagraph> paras = doc.getParagraphs();
	        
	        int cnttt=0;
	        
	        number_of_paragraphs=paras.size();
	        Random rn = new Random(number_of_paragraphs);//jhere
	        int value= rn.nextInt(number_of_paragraphs);
	        image_position =  value;
	        
	        
	        
	        
	        ////////////////////////////////////////////////////////////////////////////////////////////////
	        
	        ////////////////////////////////////////////////////////////////////////////////////////////////
	        
	        int count=0;
	        
	        CustomXWPFDocument newdoc = new CustomXWPFDocument();
	        
	        XWPFStyles newstyle= newdoc.createStyles();
	        
	        XWPFStyles oldstyle=doc.getStyles();
	        
	        newstyle=oldstyle;
	        
	        for (IBodyElement bodyElement : doc.getBodyElements()) {

	            BodyElementType elementType = bodyElement.getElementType();

	            if (elementType.name().equals("PARAGRAPH")) {
	            	
	            	 XWPFParagraph para = (XWPFParagraph) bodyElement;
	            	 
	            	 
	            	 if (!para.getParagraphText().isEmpty()) {       
			                XWPFParagraph newpara = newdoc.createParagraph();
			                
			                newpara.setAlignment(para.getAlignment());
			                
			                newpara.setStyle(para.getStyle());
			                
			                copyAllRunsToAnotherParagraph(para, newpara);
			                
			                
							            }
			       
			            
			         ////////////////////////////////////Table///////////////////////////////////////////////   
		        
			            
			        
		            /////////////////////////////Image Copy///////////////////////////////////////////
			            
			            int cnn=0;
			      
			                for (XWPFRun run : para.getRuns()) {
			                	
			                    for (XWPFPicture pic : run.getEmbeddedPictures()) {
			                      cnn++;  
			                    	
			                      
			                      String tt= pic.getPictureData().toString();
			                      // /word/media/image8.jpeg - Content Type: image/jpeg
			                      String[] ttt=tt.split("-");
			                      String[] tttt=ttt[0].split("/");
			                    		
			                      String tmp_picturedata= "test_copy"+ttmmpp[0]+"\\"+tttt[1]+"\\"+tttt[2]+"\\"+tttt[3].trim();
			                      
			                      
	                              XWPFParagraph paragraphX = newdoc.createParagraph();
			                      paragraphX.setAlignment(ParagraphAlignment.CENTER);

			                      String blipId = paragraphX.getDocument().addPictureData(
			                            new FileInputStream(new File(tmp_picturedata)),
			                            Document.PICTURE_TYPE_JPEG);
			                      
			                      int w =(int) (pic.getCTPicture().getSpPr().getXfrm().getExt().getCx()*96)/914400;
			                      int h=(int) (pic.getCTPicture().getSpPr().getXfrm().getExt().getCy()*96/914400);
			                      
			                      newdoc.createPicture(blipId,newdoc.getNextPicNameNumber(Document.PICTURE_TYPE_JPEG),w, h);
	    	                      // System.out.println("5");
			                      
			                      
			                      
			                      FileOutputStream outFile;
			                      outFile = new FileOutputStream(tmp_picturedata);
			                      outFile.write(2);
			                      //outFile.write("Test");
			                      outFile.flush();
			                      outFile.close();
			                      outFile = null;
			                      System.gc();
			                        
			                    }
			                 
			                }
			            
			            /////////////////////////////Table Copy///////////////////////////////////////////
	            	 
	            	
	            }else if( elementType.name().equals("TABLE") ) {

	                XWPFTable table = (XWPFTable) bodyElement;
	                
	                ////////////////////////Try this/////////////////////////////
	               
	                XWPFTable newtable = newdoc.createTable();
	                
	                newtable.setStyleID(table.getStyleID());
	                
	                newtable.setCellMargins(table.getCellMarginTop(), table.getCellMarginLeft(), table.getCellMarginBottom(), table.getCellMarginRight());
	                
	                newtable.setWidth(table.getWidth());
	                		                
	                newtable.setRowBandSize(table.getRowBandSize());
                	
	                newtable.setColBandSize(table.getColBandSize());
	                
	                
	                int num_row=table.getNumberOfRows();
	                
	                
	                for(int rr=0;rr<num_row;rr++){
	                	
	                	XWPFTableRow row = table.getRow(rr); 
		                
	                	if(row.getCell(1)!=null){
	                	
	                		//System.out.println("Row"+rr+":"+row.getCell(0).getText()+"-"+row.getCell(1).getText());	                		
	                		
	                	}
	                	
	                	newtable.addRow(table.getRow(rr));
	                	
	                }
	                
	                
	                //System.out.println("Number of rows in the copied table-----------------"+newtable.getNumberOfRows());
	                newtable.removeRow(0);
	                //System.out.println("After Number of rows in the copied table-----------------"+newtable.getNumberOfRows());
	                
	                
	                
	                //////////////////////////////////////////////////////////////////

	                int pos = newdoc.getTables().size()-1;
	                newdoc.setTable(pos, newtable);
	                
	                ////////////////////////////////////////Insert a enter after each table////////////////////////////////////////////////////
	                
	                insert_enter(newdoc);
	               
    				//////////////////////////////////////Insert a enter after each table////////////////////////////////////////////////////
	                
	                
	            }
	            
	        }
	        
	        
	        
	        
	       // String[] tmp_rslt= documnt.split("\\\\");
	        
	        String result="../DataUserGenerated\\EmbeddedObjects\\Docx\\JPEG\\Original_Files\\"+tmp_rslt[tmp_rslt.length-1];
	        
	        //System.out.println(tmp_rslt[tmp_rslt.length-1]);
	        
	        
	        FileOutputStream fos = new FileOutputStream(new File(result));
	        newdoc.write(fos);
	        fos.flush();
	        fos.close();
	        newdoc.close();
			
			
		
	        deleteDirectory("test_copy"+ttmmpp[0]+".zip");
			 deleteDirectory("test_copy"+ttmmpp[0]);
	        
	        
			
			
			
	}

		private static void copy_insert_image(String documnt, String image_url) throws IOException, InvalidFormatException {
		// TODO Auto-generated method stub
			BufferedImage bimg = ImageIO.read(new File(image_url));
	    	
	    	int width          = bimg.getWidth();
	    	int height         = bimg.getHeight(); 
	    	
	    	int number_of_paragraphs, image_position;
	    	
	    	String[] tmp_rslt= documnt.split("\\\\");
	        String ttmpp= tmp_rslt[tmp_rslt.length-1];
	        String[] ttmmpp= ttmpp.split("\\.");
	        
	        
	        String[] img_rslt= image_url.split("\\\\");
	        String img_ttmpp= img_rslt[img_rslt.length-1];
	        String[] img_ttmmpp= img_ttmpp.split("\\.");
	        
	        
	        
	        
	    	
	    //////////////////////////Creating a copy///////////////////////////////////////////////	

	    	
	    	FileInputStream fis = new FileInputStream(documnt);
	    	XWPFDocument document = new XWPFDocument(fis); 
	    	String tmp_file="test";
	    	String tmp_extnsn=".docx";
	    	String tmp_name = tmp_file+"_copy"+ttmmpp[0]+tmp_extnsn;
	    	
	    	
	    	    	 
	    	document.write(new FileOutputStream(new File(tmp_name))); 
	    	document.close();
	    	
	    	
	    	
	    	
	    	
	    /////////////////////////Rename//////////////////////////////////////////	
	    	// File (or directory) with old name
	    	File file = new File("test_copy"+ttmmpp[0]+".docx");
	    	// File (or directory) with new name
	    	File file2 = new File("test_copy"+ttmmpp[0]+".zip");

	    	if (file2.exists())
	    	   throw new java.io.IOException("file exists");

	    	// Rename file (or directory)
	    	boolean success = file.renameTo(file2);

	    	if (!success) {
	    	   // File was not successfully renamed
	    	}
	    	
	  ///////////////////////////Unzip//////////////////////////////////////  	
	    	
	    	
	    	
	    	String source = "test_copy"+ttmmpp[0]+".zip";
	    	String destination = "test_copy"+ttmmpp[0]+"\\";
	    	

	    	    try {
	    	        ZipFile zipFile = new ZipFile(source);
	    	        zipFile.extractAll(destination);
	    	    } catch (ZipException e) {
	    	        e.printStackTrace();
	    	    }
	    	
	 ////////////////////////////////////////////////////////////////////////////   	
	    	
	    	InputStream is = new FileInputStream(documnt);
	    	XWPFDocument doc = new XWPFDocument(is);

	        List<XWPFParagraph> paras = doc.getParagraphs();
	        
	        int cnttt=0;
	        
	        number_of_paragraphs=paras.size();
	        Random rn = new Random(number_of_paragraphs);
	        int value= rn.nextInt(number_of_paragraphs);
	        image_position =  value;
	        
	        
	        //System.out.println("Random Image position"+image_position+"*****************************");
	        
	        
	        ////////////////////////////////////////////////////////////////////////////////////////////////
	        
	        ////////////////////////////////////////////////////////////////////////////////////////////////
	        
	        int count=0;
	        
	        CustomXWPFDocument newdoc = new CustomXWPFDocument();
	        
	        XWPFStyles newstyle= newdoc.createStyles();
	        
	        XWPFStyles oldstyle=doc.getStyles();
	        
	        newstyle=oldstyle;
	        
	        for (IBodyElement bodyElement : doc.getBodyElements()) {

	            BodyElementType elementType = bodyElement.getElementType();

	            if (elementType.name().equals("PARAGRAPH")) {
	            	
	            	 XWPFParagraph para = (XWPFParagraph) bodyElement;
	            	 
	            	 
	            	 if (!para.getParagraphText().isEmpty()) {       
			                XWPFParagraph newpara = newdoc.createParagraph();
			                
			                newpara.setAlignment(para.getAlignment());
			                
			                newpara.setStyle(para.getStyle());
			                
			                copyAllRunsToAnotherParagraph(para, newpara);
			                
			                
							            }
			       
			            
			         ////////////////////////////////////Table///////////////////////////////////////////////   
		        
			            
			        
		            /////////////////////////////Image Copy///////////////////////////////////////////
			            
			            int cnn=0;
			      
			                for (XWPFRun run : para.getRuns()) {
			                	
			                    for (XWPFPicture pic : run.getEmbeddedPictures()) {
			                      cnn++;  
			                    	
			                      
			                      String tt= pic.getPictureData().toString();
			                      // /word/media/image8.jpeg - Content Type: image/jpeg
			                      String[] ttt=tt.split("-");
			                      String[] tttt=ttt[0].split("/");
			                    		
			                      String tmp_picturedata= "test_copy"+ttmmpp[0]+"\\"+tttt[1]+"\\"+tttt[2]+"\\"+tttt[3].trim();
			                      
			                      
	                              XWPFParagraph paragraphX = newdoc.createParagraph();
			                      paragraphX.setAlignment(ParagraphAlignment.CENTER);

			                      String blipId = paragraphX.getDocument().addPictureData(
			                            new FileInputStream(new File(tmp_picturedata)),
			                            Document.PICTURE_TYPE_JPEG);
			                      
			                      int w =(int) (pic.getCTPicture().getSpPr().getXfrm().getExt().getCx()*96)/914400;
			                      int h=(int) (pic.getCTPicture().getSpPr().getXfrm().getExt().getCy()*96/914400);
			                      //System.out.println("::::::::::::::::::::w:"+w+"::::::::::::::::::h:"+h);
			                    
			                      newdoc.createPicture(blipId,newdoc.getNextPicNameNumber(Document.PICTURE_TYPE_JPEG),w, h);
	    	                      // System.out.println("5");
			                      
			                      
			                      
			                      FileOutputStream outFile;
			                      outFile = new FileOutputStream(tmp_picturedata);
			                      outFile.write(2);
			                      //outFile.write("Test");
			                      outFile.flush();
			                      outFile.close();
			                      outFile = null;
			                      System.gc();
			                        
			                    }
			                 
			                }
			            
			            /////////////////////////////Table Copy///////////////////////////////////////////
			                

			                
			            ///////////////////////////////Try to insert image here randomly selected paragraph number///////////////////////////////////
			            
			            
			            
			            count++;
			            
			            if(count==image_position){
			            	// Adding a file
			                try {

			                    // Working addPicture Code below...
			                    XWPFParagraph paragraphX = newdoc.createParagraph();
			                    paragraphX.setAlignment(ParagraphAlignment.CENTER);

			                    String blipId = paragraphX.getDocument().addPictureData(
			                            new FileInputStream(new File(image_url)),
			                            Document.PICTURE_TYPE_JPEG);
			                    //System.out.println("4" + blipId);
			                    newdoc.createPicture(blipId,newdoc.getNextPicNameNumber(Document.PICTURE_TYPE_JPEG),width, height);
			                    
			                } catch (InvalidFormatException e1) {
			                    // TODO Auto-generated catch block
			                    e1.printStackTrace();
			                }
			            }
			            
			            
			            /////////////////////////////////////////////////////////////
			       
			            //System.out.println("@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@Total number of pictures:"+cnttt);
	            	 
	            	
	            }else if( elementType.name().equals("TABLE") ) {

	                XWPFTable table = (XWPFTable) bodyElement;
	                
	                ////////////////////////Try this/////////////////////////////
	               
	                XWPFTable newtable = newdoc.createTable();
	                
	                newtable.setStyleID(table.getStyleID());
	                
	                newtable.setCellMargins(table.getCellMarginTop(), table.getCellMarginLeft(), table.getCellMarginBottom(), table.getCellMarginRight());
	                
	                newtable.setWidth(table.getWidth());
	                		                
	                newtable.setRowBandSize(table.getRowBandSize());
                	
	                newtable.setColBandSize(table.getColBandSize());
	                
	                
	                int num_row=table.getNumberOfRows();
	                
	                
	                
	                for(int rr=0;rr<num_row;rr++){
	                	
	                	XWPFTableRow row = table.getRow(rr); 
		                
	                	if(row.getCell(1)!=null){
	                	
	                		//System.out.println("Row"+rr+":"+row.getCell(0).getText()+"-"+row.getCell(1).getText());	                		
	                		
	                	}
	                	
	                	newtable.addRow(table.getRow(rr));
	                	
	                }
	                
	                
	                //System.out.println("Number of rows in the copied table-----------------"+newtable.getNumberOfRows());
	                newtable.removeRow(0);
	                //System.out.println("After Number of rows in the copied table-----------------"+newtable.getNumberOfRows());
	                
	                
	                
	                //////////////////////////////////////////////////////////////////

	                int pos = newdoc.getTables().size()-1;
	                newdoc.setTable(pos, newtable);
	                
	                ////////////////////////////////////////Insert a enter after each table////////////////////////////////////////////////////
	                
	                insert_enter(newdoc);
	               
    				//////////////////////////////////////Insert a enter after each table////////////////////////////////////////////////////
	                
	                
	            }
	            
	        }
	        
	        
	        
	        
	       // String[] tmp_rslt= documnt.split("\\\\");
	        
	        String result="../DataUserGenerated\\EmbeddedObjects\\Docx\\JPEG\\Embedded_Files\\"+img_ttmmpp[0]+"_"+tmp_rslt[tmp_rslt.length-1];
	        
	        //System.out.println(tmp_rslt[tmp_rslt.length-1]);
	        
	        
	        FileOutputStream fos = new FileOutputStream(new File(result));
	        newdoc.write(fos);
	        fos.flush();
	        fos.close();
	        newdoc.close();
			
			
		
	        deleteDirectory("test_copy"+ttmmpp[0]+".zip");
	        
	        deleteDirectory("test_copy"+ttmmpp[0]);
		    
	        
	        
	}

		private static void insert_enter(CustomXWPFDocument newwdoc) {
		// TODO Auto-generated method stub
			XWPFParagraph para_enter= newwdoc.createParagraph();
            
            XWPFRun run_enter= para_enter.createRun();
            
            run_enter.setText("\n");
            run_enter.setText("\n");
			
			
			
	}

		// Copy all runs from one paragraph to another, keeping the style unchanged
		@SuppressWarnings("deprecation")
		private static void copyAllRunsToAnotherParagraph(XWPFParagraph oldPar, XWPFParagraph newPar) {
		    final int DEFAULT_FONT_SIZE = 10;

		    for (XWPFRun run1 : oldPar.getRuns()) {  
		        String textInRun1 = run1.getText(0);
		        if (textInRun1 == null || textInRun1.isEmpty()) {
		            continue;
		        }

		        float fontSize = run1.getFontSize();
		        //System.out.println("run text = '" + textInRun1 + "' , fontSize = " + fontSize); 
		        XWPFRun newRun = newPar.createRun();

		        
		        // Copy text
		        
		        newRun.setText(textInRun1);
		        
		        
		        // Apply the same style
		        
		        if((run1.getFontSize())!=-1){
		        	newRun.setFontSize(run1.getFontSize());
		        }
		        
		        
		        newRun.setFontFamily(run1.getFontFamily());
		        //newRun.setFontSize( ( fontSize == -1) ? DEFAULT_FONT_SIZE : run1.getFontSize() );    
		        
		        newRun.setBold( run1.isBold() );
		        newRun.setItalic( run1.isItalic() );
		        newRun.setStrike( run1.isStrike() );
		        newRun.setColor( run1.getColor() );
		    
		    
		    }   
		    
		    
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







class CustomXWPFDocument extends XWPFDocument
{
    public CustomXWPFDocument()    {
     super();
    }

    public CustomXWPFDocument(InputStream in) throws IOException
    {
        super(in);
    }



    public void createPicture(String blipId,int id, int width, int height)
    {
        final int EMU = 9525;
        width *= EMU;
        height *= EMU;
        //String blipId = getAllPictures().get(id).getPackageRelationship().getId();


        CTInline inline = createParagraph().createRun().getCTR().addNewDrawing().addNewInline();

        String picXml = "" +
                "<a:graphic xmlns:a=\"http://schemas.openxmlformats.org/drawingml/2006/main\">" +
                "   <a:graphicData uri=\"http://schemas.openxmlformats.org/drawingml/2006/picture\">" +
                "      <pic:pic xmlns:pic=\"http://schemas.openxmlformats.org/drawingml/2006/picture\">" +
                "         <pic:nvPicPr>" +
                "            <pic:cNvPr id=\"" + id + "\" name=\"Generated\"/>" +
                "            <pic:cNvPicPr/>" +
                "         </pic:nvPicPr>" +
                "         <pic:blipFill>" +
                "            <a:blip r:embed=\"" + blipId + "\" xmlns:r=\"http://schemas.openxmlformats.org/officeDocument/2006/relationships\"/>" +
                "            <a:stretch>" +
                "               <a:fillRect/>" +
                "            </a:stretch>" +
                "         </pic:blipFill>" +
                "         <pic:spPr>" +
                "            <a:xfrm>" +
                "               <a:off x=\"0\" y=\"0\"/>" +
                "               <a:ext cx=\"" + width + "\" cy=\"" + height + "\"/>" +
                "            </a:xfrm>" +
                "            <a:prstGeom prst=\"rect\">" +
                "               <a:avLst/>" +
                "            </a:prstGeom>" +
                "         </pic:spPr>" +
                "      </pic:pic>" +
                "   </a:graphicData>" +
                "</a:graphic>";

        //CTGraphicalObjectData graphicData = inline.addNewGraphic().addNewGraphicData();
        XmlToken xmlToken = null;
        try
        {
            xmlToken = XmlToken.Factory.parse(picXml);
        }
        catch(XmlException xe)
        {
            xe.printStackTrace();
        }
        inline.set(xmlToken);
        //graphicData.set(xmlToken);

        inline.setDistT(0);
        inline.setDistB(0);
        inline.setDistL(0);
        inline.setDistR(0);

        CTPositiveSize2D extent = inline.addNewExtent();
        extent.setCx(width);
        extent.setCy(height);

        CTNonVisualDrawingProps docPr = inline.addNewDocPr();
        docPr.setId(id);
        docPr.setName("Picture " + id);
        docPr.setDescr("Generated");
    }
}













