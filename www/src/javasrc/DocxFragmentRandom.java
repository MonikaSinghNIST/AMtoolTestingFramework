package javasrc;
import java.io.File;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.io.InputStream;
import java.nio.file.FileVisitResult;
import java.nio.file.Files;
import java.nio.file.Path;
import java.nio.file.Paths;
import java.nio.file.SimpleFileVisitor;
import java.nio.file.attribute.BasicFileAttributes;
import java.util.List;
import java.util.Random;
import org.apache.poi.openxml4j.exceptions.InvalidFormatException;
import org.apache.poi.xwpf.usermodel.BodyElementType;
import org.apache.poi.xwpf.usermodel.Document;
import org.apache.poi.xwpf.usermodel.IBodyElement;
import org.apache.poi.xwpf.usermodel.ParagraphAlignment;
import org.apache.poi.xwpf.usermodel.XWPFDocument;
import org.apache.poi.xwpf.usermodel.XWPFParagraph;
import org.apache.poi.xwpf.usermodel.XWPFPicture;
import org.apache.poi.xwpf.usermodel.XWPFRun;
import org.apache.poi.xwpf.usermodel.XWPFStyles;
import org.apache.poi.xwpf.usermodel.XWPFTable;
import org.apache.poi.xwpf.usermodel.XWPFTableRow;
import org.openxmlformats.schemas.drawingml.x2006.main.CTNonVisualDrawingProps;
import org.openxmlformats.schemas.drawingml.x2006.main.CTPositiveSize2D;
import org.openxmlformats.schemas.drawingml.x2006.wordprocessingDrawing.CTInline;
import org.apache.xmlbeans.XmlException;
import org.apache.xmlbeans.XmlToken;

import net.lingala.zip4j.core.ZipFile;
import net.lingala.zip4j.exception.ZipException;

public class DocxFragmentRandom {
	
	static int indxOfchar=0;

	public static void main(String[] args) throws Exception{
		
		String documnt;
		String result_fragment="../DataUserGenerated\\FragmentIdentification\\DocxData\\Random\\Results\\";
		String result_original="../DataUserGenerated\\FragmentIdentification\\DocxData\\Random\\Docx\\";
		String str="";
		String sourceFolder="../DataUserGenerated\\FragmentIdentification\\DocxData\\SourceDocx\\";
		
		File folder = new File(sourceFolder);
		File[] listOfFiles = folder.listFiles();

		for (File filee : listOfFiles) {
		    if (filee.isFile()) {
		    	str="";
				String ttmpp= filee.getName();
				String[] ttmmpp= ttmpp.split("\\.");
				String docxfldr=ttmmpp[0];
				documnt=sourceFolder+ttmpp;
				
				try {
				
				zipUnzipDocx(documnt,docxfldr);
				
				copy_original_file(documnt,result_original);
		
				generate_fragment(documnt,result_fragment);
						
				deleteDirectory("test_copy"+docxfldr+".zip");
				
				deleteDirectory("test_copy"+docxfldr);
				
				
				} catch (IOException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
				}
		    	
		    }
		}
		
	}

	private static void zipUnzipDocx(String documnt, String docxfldr) throws Exception {
		// TODO Auto-generated method stub
		

		
		//////////////////////////Creating a copy///////////////////////////////////////////////	
		
		FileInputStream fis = new FileInputStream(documnt);
		XWPFDocument document = new XWPFDocument(fis); 
		String tmp_file="test";
		String tmp_extnsn=".docx";
		String tmp_name = tmp_file+"_copy"+docxfldr+tmp_extnsn;
		document.write(new FileOutputStream(new File(tmp_name))); 
		document.close();
		
		
		/////////////////////////Rename//////////////////////////////////////////	
		// File (or directory) with old name
		File file = new File("test_copy"+docxfldr+".docx");
		// File (or directory) with new name
		File file2 = new File("test_copy"+docxfldr+".zip");
		
		if (file2.exists())
		throw new java.io.IOException("file exists");
		// Rename file (or directory)
		boolean success = file.renameTo(file2);
		
		if (!success) {
		// File was not successfully renamed
		}
		
		///////////////////////////Unzip//////////////////////////////////////  	
		
		String source = "test_copy"+docxfldr+".zip";
		String destination = "test_copy"+docxfldr+"\\";
		try {
		ZipFile zipFile = new ZipFile(source);
		zipFile.extractAll(destination);
		} catch (ZipException e) {
		e.printStackTrace();
		}
		
	}

	private static void generate_fragment(String documnt, String result_fragment) throws IOException, InvalidFormatException {
		// TODO Auto-generated method stub
		
		String str="";
		int[] numOfChPicTbl;
		
		File filee=new File(documnt);
		
		 if (filee.isFile()) {
			 indxOfchar=0;
			 
			 //////////////calcutate number of charecters in the file///////////////////// 
			 numOfChPicTbl= number_of_charecters(documnt);
		    str="";
			long sz=numOfChPicTbl[0];
			long OnePrcnt=sz/100;
			
			long frctnSz1=(sz*5)/100;
			long frctnSz2=frctnSz1+frctnSz1;
			long frctnSz3=frctnSz1*3;
			long frctnSz4=frctnSz1*4;
			long frctnSz5=frctnSz1*5;
			long frctnSz6=frctnSz1*6;
			long frctnSz7=frctnSz1*7;
			long frctnSz8=frctnSz1*8;
			long frctnSz9=frctnSz1*9;
			long frctnSz10=frctnSz1*10;
			long frctnSz11=frctnSz1*11;
			long frctnSz12=frctnSz1*12;
			long frctnSz13=frctnSz1*13;
			long frctnSz14=frctnSz1*14;
			long frctnSz15=frctnSz1*15;
			long frctnSz16=frctnSz1*16;
			long frctnSz17=frctnSz1*17;
			long frctnSz18=frctnSz1*18;
			long frctnSz19=frctnSz1*19;
			long frctnSz20=frctnSz19+OnePrcnt;
			long frctnSz21=frctnSz20+OnePrcnt;
			long frctnSz22=frctnSz21+OnePrcnt;
			long frctnSz23=frctnSz22+OnePrcnt;
			long frctnSz24=frctnSz23+OnePrcnt;
			
			
			for(int i=0;i<24;i++){
				
				long brkpnt=0;
				switch (i+1) {
	            case 1:  brkpnt=frctnSz1;
	                     break;
	            case 2:  brkpnt=frctnSz2;
	            		 break;         
	            case 3:  brkpnt=frctnSz3;
	                     break;         
	            case 4:  brkpnt=frctnSz4;
	            		 break;         
	            case 5:  brkpnt=frctnSz5;
	   		 			 break;         
	            case 6:  brkpnt=frctnSz6;
	   		 			 break;         
	            case 7:  brkpnt=frctnSz7;
				 		 break;         
	            case 8:  brkpnt=frctnSz8;
	            		 break;         
	            case 9:  brkpnt=frctnSz9;
	   		 			 break;         
	            case 10:  brkpnt=frctnSz10;
	   		 			 break;
	            case 11:  brkpnt=frctnSz11;
	       	 			 break;
	            case 12:  brkpnt=frctnSz12;
	       	 			 break;
	            case 13:  brkpnt=frctnSz13;
	       	 			 break;
	            case 14:  brkpnt=frctnSz14;
	       	 			 break;
	            case 15:  brkpnt=frctnSz15;
	       	 			 break;
	            case 16:  brkpnt=frctnSz16;
	       	 			 break;
	            case 17:  brkpnt=frctnSz17;
	       		 		 break;
	            case 18:  brkpnt=frctnSz18;
	       		 		 break;
	            case 19:  brkpnt=frctnSz19;
	       		 		 break;
	       		case 20:  brkpnt=frctnSz20;
	       		 		 break;
	       		case 21:  brkpnt=frctnSz21;
	       		 	 	 break;
	       		case 22:  brkpnt=frctnSz22;
	       		 		 break;
	       		case 23:  brkpnt=frctnSz23;
	       		 		 break;
	       		case 24:  brkpnt=frctnSz24;
	       		 		 break;
	       		 		 
	            default: 
	                     break;
	        }
				
				Random rn = new Random();
			    int rndm_value= rn.nextInt((int) sz-1-i);
			    createFragmentFile(documnt,result_fragment,brkpnt,i,rndm_value,sz);
			}
			
		}
		
		
	}

	private static void createFragmentFile(String documnt, String result_fragment, long brkpnt, int fn, int rndm_value, long sz) throws IOException, InvalidFormatException {
		// TODO Auto-generated method stub
		
		int number_of_paragraphs, image_position;
    	String[] tmp_rslt= documnt.split("\\\\");
        String ttmpp= tmp_rslt[tmp_rslt.length-1];
        String[] ttmmpp= ttmpp.split("\\.");
        
    	InputStream is = new FileInputStream(documnt);
    	XWPFDocument doc = new XWPFDocument(is);
        List<XWPFParagraph> paras = doc.getParagraphs();
        int cnttt=0;
        
        int rn_value=rndm_value;
        int count=0;
        indxOfchar=0;
        boolean flg=false;
        boolean flgpara=false;
        
        CustomXWPFDocument newdoc = new CustomXWPFDocument();
        
        XWPFStyles newstyle= newdoc.createStyles();
        
        XWPFStyles oldstyle=doc.getStyles();
        
        newstyle=oldstyle;
        
        long bgnFrgmnt= rndm_value+brkpnt;
		long bgnFrgmntTmp=0;
		
		if((bgnFrgmnt)>sz){
			bgnFrgmntTmp=brkpnt-(sz-rndm_value);
			flg=true;
				
		}
        
		
        for (IBodyElement bodyElement : doc.getBodyElements()) {

            BodyElementType elementType = bodyElement.getElementType();

            if (elementType.name().equals("PARAGRAPH")) {
            	
            	 XWPFParagraph para = (XWPFParagraph) bodyElement;
            	 if (!para.getParagraphText().isEmpty()) {
            		 	
            	        XWPFParagraph newpara = newdoc.createParagraph();
		                newpara.setAlignment(para.getAlignment());
		                newpara.setStyle(para.getStyle());
		                
		                final int DEFAULT_FONT_SIZE = 10;
		        		for (XWPFRun run1 : para.getRuns()) {  
		        	        String textInRun1 = run1.getText(0);
		        	        if (textInRun1 == null || textInRun1.isEmpty()) {
		        	            continue;
		        	        }
		        	        
		        	        indxOfchar=indxOfchar+textInRun1.length();
		        				count++;
		        				
		        				String prcntnt="";
		        				int prlen=textInRun1.length();
		        				String prestr="";
		        				String poststr="";
		        				
		        				
		        				if((rndm_value>(indxOfchar-prlen)) && (rndm_value<=indxOfchar) ){
		        					
		        					
		        					if((rndm_value+brkpnt)>prlen){
		        						prestr=presubstr(textInRun1, (rndm_value-1));
		        						bgnFrgmntTmp=rndm_value+brkpnt-indxOfchar;
		        						flgpara=true;
		        					}else{
		        						prestr=presubstr(textInRun1, (rndm_value-1));
		        						poststr=substr(textInRun1, (rndm_value+brkpnt));
		        						prcntnt=prestr+poststr;
		        					}
		        					
		        					
		        					
		        				}else{
		        				
			        					if(bgnFrgmntTmp>0){
			        						if(bgnFrgmntTmp<textInRun1.length()){
			        							prcntnt=substr(textInRun1,(bgnFrgmntTmp+1));
			        							flg=false;
			        							
			        						}else{
			        								
			        						}
			        						
			        						bgnFrgmntTmp=bgnFrgmntTmp-textInRun1.length();
			        					}else{
			        						prcntnt=textInRun1;
			        					}
		        					
		        				}
		        				
		        					float fontSize = run1.getFontSize();
				        	        XWPFRun newRun = newpara.createRun();
				        	        // Copy text
				        	        newRun.setText(prcntnt);
				        	        // Apply the same style
				        	        if((run1.getFontSize())!=-1){
				        	        	newRun.setFontSize(run1.getFontSize());
				        	        }
				        	        newRun.setFontFamily(run1.getFontFamily());
				        	        newRun.setBold( run1.isBold() );
				        	        newRun.setItalic( run1.isItalic() );
				        	        newRun.setStrike( run1.isStrike() );
				        	        newRun.setColor( run1.getColor() );
				        	    } 
		        				
		        			}
		                
		            
	            /////////////////////////////Image Copy///////////////////////////////////////////
		            
		            int cnn=0;
		            	//Uncomment this if we want to keep pictures of the file
		            	/*
		                for (XWPFRun run : para.getRuns()) {
		                	
		                    for (XWPFPicture pic : run.getEmbeddedPictures()) {
		                      cnn++;  
		                      String tt= pic.getPictureData().toString();
		                      
		                      
		                      String[] ttt=tt.split("-");
		                      String[] tttt=ttt[0].split("/");
		                      String tmp_picturedata= "test_copy"+ttmmpp[0]+"\\"+tttt[1]+"\\"+tttt[2]+"\\"+tttt[3].trim();
		                      
                              XWPFParagraph paragraphX = newdoc.createParagraph();
		                      paragraphX.setAlignment(ParagraphAlignment.CENTER);

		                      File fl_tmp= new File(tmp_picturedata);
		                      FileInputStream fl_pic=new FileInputStream(fl_tmp);
		                      String blipId = paragraphX.getDocument().addPictureData(fl_pic, Document.PICTURE_TYPE_JPEG);
		                      
		                      int w =(int) (pic.getCTPicture().getSpPr().getXfrm().getExt().getCx()*96)/914400;
		                      int h=(int) (pic.getCTPicture().getSpPr().getXfrm().getExt().getCy()*96/914400);
		                      newdoc.createPicture(blipId,newdoc.getNextPicNameNumber(Document.PICTURE_TYPE_JPEG),w, h);
		                      
		                      fl_tmp.delete();
		                      fl_pic.close();
		                      
		                      //FileOutputStream outFile;
		                      //outFile = new FileOutputStream(tmp_picturedata);
		                      //outFile.flush();
		                      //outFile.close();
		                      //outFile = null;
		                      //System.gc();
		                        
		                    }
		                 
		                }
		                */
		            
		            /////////////////////////////Table Copy///////////////////////////////////////////
            	 
            	
            }else if( elementType.name().equals("TABLE") ) {
            	//Want table in the file uncomment following and two other places where you see this comment
            	/*
                XWPFTable table = (XWPFTable) bodyElement;
                XWPFTable newtable = newdoc.createTable();
                newtable.setStyleID(table.getStyleID());
                newtable.setCellMargins(table.getCellMarginTop(), table.getCellMarginLeft(), table.getCellMarginBottom(), table.getCellMarginRight());
                newtable.setWidth(table.getWidth());
                newtable.setRowBandSize(table.getRowBandSize());
                newtable.setColBandSize(table.getColBandSize());
                
                int num_row=table.getNumberOfRows();
         
                for(int rr=0;rr<num_row;rr++){
                	XWPFTableRow row = table.getRow(rr); 
                	newtable.addRow(table.getRow(rr));
                	
                }
                
                newtable.removeRow(0);
                int pos = newdoc.getTables().size()-1;
                newdoc.setTable(pos, newtable);
                ////////////////////////////////////////Insert a enter after each table////////////////////////////////////////////////////
                insert_enter(newdoc);
				//////////////////////////////////////Insert a enter after each table////////////////////////////////////////////////////
                */
            }
            
        }
        
        int ln=tmp_rslt.length;
        String[] ttmp=tmp_rslt[ln-1].split("\\.");
        String result=result_fragment+ttmp[0]+"_"+fn+"."+ttmp[ttmp.length-1];
        FileOutputStream fos = new FileOutputStream(new File(result));
        newdoc.write(fos);
        fos.flush();
        fos.close();
        newdoc.close();
		
	}

	private static String presubstr(String textInRun1, int i) {
		// TODO Auto-generated method stub
		return null;
	}

	private static String substr(String textInRun1, long brkpnt) {
		// TODO Auto-generated method stub
		String sub="";
		for(int ii=0;ii<textInRun1.length();ii++){
			if(ii<brkpnt){
			
			}else{
			sub=sub+textInRun1.charAt(ii);
			}
			
		}
		
		return sub;
	}

	private static int[] number_of_charecters(String documnt) throws IOException {
		// TODO Auto-generated method stub
		
		int numOfChar=0;
		int numOfPic=0;
		int numOfTable=0;
		int[] numOfCPT=new int[3];
		
		int number_of_paragraphs, image_position;
    	
    	String[] tmp_rslt= documnt.split("\\\\");
        String ttmpp= tmp_rslt[tmp_rslt.length-1];
        String[] ttmmpp= ttmpp.split("\\.");
        
    	    	
    	InputStream is = new FileInputStream(documnt);
    	XWPFDocument doc = new XWPFDocument(is);
        List<XWPFParagraph> paras = doc.getParagraphs();
        int cnttt=0;
        number_of_paragraphs=paras.size();
        Random rn = new Random();
        int value= rn.nextInt((number_of_paragraphs - 0) + 1) + 0;
        image_position =  value;
        
        int count=0;
        CustomXWPFDocument newdoc = new CustomXWPFDocument();
        XWPFStyles newstyle= newdoc.createStyles();
        XWPFStyles oldstyle=doc.getStyles();
        newstyle=oldstyle;
        
        //para by para
        for (IBodyElement bodyElement : doc.getBodyElements()) {

            BodyElementType elementType = bodyElement.getElementType();

            if (elementType.name().equals("PARAGRAPH")) {
            	
            	 XWPFParagraph para = (XWPFParagraph) bodyElement;
            	 if (!para.getParagraphText().isEmpty()) {
            		 	
		                for (XWPFRun run1 : para.getRuns()) {  
		                	
		                	String textInRun1 = run1.getText(0);
		                	
		                	if(run1.getText(0)!=null){
			                	
			                	numOfChar=numOfChar+textInRun1.length();
		                		
		                	}
		                	
		                	
		                }
		                
		            }
		        
	            /////////////////////////////Image Copy///////////////////////////////////////////
		        /////////////if there is a picture in the paragraph it will retrieve and put it there//////////
		            int cnn=0;
		            /*
		                for (XWPFRun run : para.getRuns()) {
		                	
		                    for (XWPFPicture pic : run.getEmbeddedPictures()) {
		                      numOfPic++;
		                        
		                    }
		                 
		                }
		            */
		            /////////////////////////////Table Copy///////////////////////////////////////////
            	 
            	
            }else if( elementType.name().equals("TABLE") ) {
            	//Want table in the file uncomment following
                //numOfTable++;
                
            }
            
        }
        
		
		numOfCPT[0]=numOfChar;
		numOfCPT[1]=numOfPic;
		numOfCPT[2]=numOfTable;
		
		return numOfCPT;
		
		
		
	}

	private static void copy_original_file(String documnt, String result_original) throws IOException, InvalidFormatException {
		// TODO Auto-generated method stub
		
		int number_of_paragraphs, image_position;
    	
    	String[] tmp_rslt= documnt.split("\\\\");
        String ttmpp= tmp_rslt[tmp_rslt.length-1];
        String[] ttmmpp= ttmpp.split("\\.");
        ///////////////////////////here////////////////////////////////        
    	
    	
    	InputStream is = new FileInputStream(documnt);
    	XWPFDocument doc = new XWPFDocument(is);
        List<XWPFParagraph> paras = doc.getParagraphs();
        int cnttt=0;
        number_of_paragraphs=paras.size();
        Random rn = new Random();
        int value= rn.nextInt((number_of_paragraphs - 0) + 1) + 0;
        image_position =  value;
        
        
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
		       
		            
		        
	            /////////////////////////////Image Copy///////////////////////////////////////////
		            
		            int cnn=0;
		            	//Want to keep the pictures in the file uncomment following
		            	/*
		                for (XWPFRun run : para.getRuns()) {
		                	
		                	//System.out.print(run.getEmbeddedPictures().size());
		                	
		                    for (XWPFPicture pic : run.getEmbeddedPictures()) {
		                      
		                    	
		                      cnn++;  
		                      String tt= pic.getPictureData().toString();
		                      String[] ttt=tt.split("-");
		                      String[] tttt=ttt[0].split("/");
		                      String tmp_picturedata= "test_copy"+ttmmpp[0]+"\\"+tttt[1]+"\\"+tttt[2]+"\\"+tttt[3].trim();
		                      
                              XWPFParagraph paragraphX = newdoc.createParagraph();
		                      paragraphX.setAlignment(ParagraphAlignment.CENTER);
		                      
		                      
		                      File fl_tmp= new File(tmp_picturedata);
		                      FileInputStream fl_pic=new FileInputStream(fl_tmp);
		                      String blipId = paragraphX.getDocument().addPictureData(fl_pic, Document.PICTURE_TYPE_JPEG);
		                      
		                      int w =(int) (pic.getCTPicture().getSpPr().getXfrm().getExt().getCx()*96)/914400;
		                      int h=(int) (pic.getCTPicture().getSpPr().getXfrm().getExt().getCy()*96/914400);
		                      
		                      newdoc.createPicture(blipId,newdoc.getNextPicNameNumber(Document.PICTURE_TYPE_JPEG),w, h);
		                      
		                      fl_tmp.delete();
		                      
		                      fl_pic.close();
		                      
		                    }
		                    
		                  
		                 
		                }
		                
		                */
		            
		            /////////////////////////////Table Copy///////////////////////////////////////////
            	 
            	
            }else if( elementType.name().equals("TABLE") ) {
            	//Want table in the file uncomment following
            	/*
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
                	newtable.addRow(table.getRow(rr));
                	
                }
                
                newtable.removeRow(0);
                int pos = newdoc.getTables().size()-1;
                newdoc.setTable(pos, newtable);
                ////////////////////////////////////////Insert a enter after each table////////////////////////////////////////////////////
                insert_enter(newdoc);
				//////////////////////////////////////Insert a enter after each table////////////////////////////////////////////////////
                */
            }
            
        }
        
        
        String result=result_original+tmp_rslt[tmp_rslt.length-1];
        
        
        FileOutputStream fos = new FileOutputStream(new File(result));
        newdoc.write(fos);
        fos.flush();
        fos.close();
        
        newdoc.close();
	
       
		///////////////////////////////////////////////////////////////////////
		
	}

	private static void insert_enter(CustomXWPFDocument newwdoc) {
		// TODO Auto-generated method stub
		
		XWPFParagraph para_enter= newwdoc.createParagraph();
        
        XWPFRun run_enter= para_enter.createRun();
        
        run_enter.setText("\n");
        run_enter.setText("\n");
		
		
	}

	private static void copyAllRunsToAnotherParagraph(XWPFParagraph oldPar, XWPFParagraph newPar) {
		// TODO Auto-generated method stub
		final int DEFAULT_FONT_SIZE = 10;
		for (XWPFRun run1 : oldPar.getRuns()) {  
	        String textInRun1 = run1.getText(0);
	        if (textInRun1 == null || textInRun1.isEmpty()) {
	            continue;
	        }
	        float fontSize = run1.getFontSize();
	        XWPFRun newRun = newPar.createRun();
	        // Copy text
	        
	        newRun.setText(textInRun1);
	        // Apply the same style
	        if((run1.getFontSize())!=-1){
	        	newRun.setFontSize(run1.getFontSize());
	        }
	        newRun.setFontFamily(run1.getFontFamily());
	        newRun.setBold( run1.isBold() );
	        newRun.setItalic( run1.isItalic() );
	        newRun.setStrike( run1.isStrike() );
	        newRun.setColor( run1.getColor() );
	    } 
		
	}

		private static void deleteDirectory(String directoryFilePath) throws IOException {
		// TODO Auto-generated method stub
		
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



