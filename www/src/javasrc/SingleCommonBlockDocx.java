package javasrc;
//import java.io.BufferedWriter;
import java.io.File;
import java.io.FileInputStream;
//import java.io.FileNotFoundException;
import java.io.FileOutputStream;
//import java.io.FileReader;
//import java.io.FileWriter;
import java.io.IOException;
import java.io.InputStream;
import java.nio.file.FileVisitResult;
import java.nio.file.Files;
import java.nio.file.Path;
import java.nio.file.Paths;
import java.nio.file.SimpleFileVisitor;
import java.nio.file.attribute.BasicFileAttributes;
import java.sql.Struct;
import java.util.ArrayList;
import java.util.Arrays;
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
import org.apache.xmlbeans.XmlException;
import org.apache.xmlbeans.XmlToken;
import org.openxmlformats.schemas.drawingml.x2006.main.CTNonVisualDrawingProps;
import org.openxmlformats.schemas.drawingml.x2006.main.CTPositiveSize2D;
import org.openxmlformats.schemas.drawingml.x2006.wordprocessingDrawing.CTInline;

import net.lingala.zip4j.core.ZipFile;
import net.lingala.zip4j.exception.ZipException;

public class SingleCommonBlockDocx {
	
	static int indxOfchar=0;

	public static void main(String[] args) throws Exception{
		
		
		//String documnt = "Data\\Docx\\test.docx";
		String str1="";
		String str2="";
		String documnt;
		String destinationFolder1="..\\DataUserGenerated\\RelatedDocument\\SingleCommonBlock\\Results\\Docx\\Source1\\";
		String destinationFolder2="..\\DataUserGenerated\\RelatedDocument\\SingleCommonBlock\\Results\\Docx\\Source2\\";
		int []commonBlockPercentage=  {50,40,30,20,10,5,4,3,2,1};
		String commonFile="..\\DataUserGenerated\\RelatedDocument\\SingleCommonBlock\\Source\\Docx\\";
		String str="";
		String commonstr="";
		String []numOfChPicTbl;
		File CommonFilefolder = new File(commonFile);
		File[] listOfCommonFiles = CommonFilefolder.listFiles();
		
		//////////////////////////Sort the file//////////////////////////////////////	
		ArrayList<String> sortedFileList= new ArrayList<String>();
		String dirPath=commonFile;
		sortedFileList= SortFolder(dirPath);
		
		//////////////////////////////////////////////////////////////////////////////////////////////////		
		///*
		int count=0;
    	String filename="";
    	String commonblck="";
    	String commonfileName="";
    	int commonstrLen = 0;
    	
    	double commonSize;
			String []CommonSubString= new String[10];
			double []BlockSize= new double[10];
			int []BlockSizeInt= new int[10];
			
    	for(int i=0;i<sortedFileList.size();i++){
    		filename=sortedFileList.get(i);
    		count++;
    		File filenamee=new File(filename);
			if (filenamee.isFile()) {
		    
    		//////////////////////////////////here starts/////////////////////////////////////////////////////
    		if((count%3)==1){
    			
    			commonfileName=filename;
    			commonstr="";
		    	
    			/////////////////////////////// Zipping code starts///////////////////////////////////////////////////////
				String ttmpp= commonfileName;
				String[] ttmmpp= ttmpp.split("\\.");
				String docxfldr=ttmmpp[0];
				documnt=commonfileName;
				numOfChPicTbl= text_and_number_of_charecters(documnt);
				commonstr = numOfChPicTbl[0];
				//System.out.println("Number of Charecters:"+numOfChPicTbl[1]+commonstr.length());
				commonSize=commonstr.length();
				
				BlockSize[0]=commonSize*100/100;
				BlockSize[1]=(commonSize*(0.667));
				BlockSize[2]=(commonSize*(0.4285));
				BlockSize[3]=(commonSize*(0.25));
				BlockSize[4]=(commonSize*(0.1111));
				BlockSize[5]=(commonSize*(0.0526));
				BlockSize[6]=(commonSize*(0.0416));
				BlockSize[7]=(commonSize*(0.0309));
				BlockSize[8]=(commonSize*(0.0204));
				BlockSize[9]=(commonSize*(0.0101));
				
				BlockSizeInt[0]=(int) BlockSize[0];
				BlockSizeInt[1]=(int) BlockSize[1];
				BlockSizeInt[2]=(int) BlockSize[2];
				BlockSizeInt[3]=(int) BlockSize[3];
				BlockSizeInt[4]=(int) BlockSize[4];
				BlockSizeInt[5]=(int) BlockSize[5];
				BlockSizeInt[6]=(int) BlockSize[6];
				BlockSizeInt[7]=(int) BlockSize[7];
				BlockSizeInt[8]=(int) BlockSize[8];
				BlockSizeInt[9]=(int) BlockSize[9];
				
				
				commonblck="";
				int ii=commonstr.length();
				commonstrLen=numOfChPicTbl[0].length();
				
				for(int x=0;x<BlockSize.length;x++) 
				{
					//System.out.println("BlockSize"+x+":  "+BlockSize[x]+"  Int : "+BlockSizeInt[x]);
					commonblck=commonstr.substring(0, BlockSizeInt[x]);
					CommonSubString[x]=commonblck;
					//System.out.println("commonblck:  "+commonblck);
				}
    			
    			///////////////////////////////////////////////////////////////////////////////////////
    			
    		}else if((count%3)==2){
    			
    			
    			String file1=filename;
    			String fl1nm;
    			int []dobumentSize=new int[3];
				
			    	str1="";
			    	String ttmpp1= file1;
					String[] ttmmpp1= ttmpp1.split("\\.");
					String docxfldr1=ttmmpp1[0];
					String documnt1=ttmpp1;
					String []ttmpp2=ttmmpp1[2].split("\\\\");
					fl1nm=ttmpp2[ttmpp2.length-1];
					String []cmmnStringtmp= commonfileName.split("\\.");
					String []cmmnStringtmp1=cmmnStringtmp[2].split("\\\\");
					String commonflnm=cmmnStringtmp1[cmmnStringtmp1.length-1];
					
					String file1splited=file1.split("\\.")[2];
					//System.out.println("file1.split(\"\\\\.\")[2]: "+file1.split("\\.")[2]);
					
					////////////////////////////////////////////////////////////////////////////////////////
					
					for(int j=0;j<CommonSubString.length;j++) {
						
						//System.out.println("commonflnm fl1nm"+commonflnm+"_"+fl1nm+"_"+commonBlockPercentage[j]);
						String destinationFileName=destinationFolder1+commonflnm+"_"+fl1nm+"_"+commonBlockPercentage[j]+".docx";
						generate_single_common_block_docx(documnt1,destinationFileName,commonstrLen,CommonSubString[j],commonBlockPercentage[j]);
						int []numOfChPicTbll= number_of_charecters(destinationFileName);
						//System.out.println("sourceFolder1+file1.getName()::::::::"+file1splited+".docx");
						int []numOfChPicTblll= number_of_charecters(".."+file1splited+".docx");
						
					}
					
					////////////////////////////////////////////////////////////////////////////////////
					String []file1splited2=file1splited.split("\\\\");
					String file1splited3=file1splited2[file1splited2.length-1];
					deleteDirectory("test_copy"+file1splited3+".zip");
					deleteDirectory("test_copy"+file1splited3);
			    	
    				///////////////////////////////////////////////////////////////////////////////////////
    			
    			
    		}else if((count%3)==0){
    			
    			//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    			
    			
    			String fl2nm;
    			int []documentSize=new int[3];
				str2="";
				String file2=filename;
				String ttmpp2= file2;
				String[] ttmmpp2= ttmpp2.split("\\.");
				String docxfldr2=ttmmpp2[0];
				String documnt2=ttmpp2;
				String []ttmpp22=ttmmpp2[2].split("\\\\");
				fl2nm=ttmpp22[ttmpp22.length-1];
				String []cmmnString2tmp= commonfileName.split("\\.");
				String []cmmnString2tmp1=cmmnString2tmp[2].split("\\\\");
				String commonflnm=cmmnString2tmp1[cmmnString2tmp1.length-1];
				String file1splitedd=file2.split("\\.")[2];
				//System.out.println("file2++++++++++++++++:"+file2.split("\\.")[2]);
				
				////////////////////////////////////////////////////////////////////////////////////////
				
				for(int j=0;j<CommonSubString.length;j++) {
					
					String destinationFileName2=destinationFolder2+commonflnm+"_"+fl2nm+"_"+commonBlockPercentage[j]+".docx";
					generate_single_common_block_docx(documnt2,destinationFileName2,commonstrLen,CommonSubString[j],commonBlockPercentage[j]);
					int []numOfChPicTbll2= number_of_charecters(destinationFileName2);
					//System.out.println("file1splitedd: "+file1splitedd);
					
					int []numOfChPicTblll2= number_of_charecters(".."+file1splitedd+".docx");
				}
				
				String []file1splitedd2=file1splitedd.split("\\\\");
				String file1splitedd3=file1splitedd2[file1splitedd2.length-1];
				deleteDirectory("test_copy"+file1splitedd3+".zip");
				deleteDirectory("test_copy"+commonflnm+".zip");
				deleteDirectory("test_copy"+file1splitedd3);
				deleteDirectory("test_copy"+commonflnm);
				////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    			
    		}
    		
    		
    	}
    		 
    	}
		
	}
	
	
	

	private static ArrayList<String> SortFolder(String dirPath) throws Exception {
		// TODO Auto-generated method stub
		
		final ArrayList<String> al_fn= new ArrayList<String>();
		
		String dcmnt;
		String fldr;
		String []fldrlst;
		String []fldrlst2;
		File inputfolder = new File(dirPath);
		File[] listOfInputFiles = inputfolder.listFiles();
		int []chPicTbl=new int[3];
		int numOfInputfiles=listOfInputFiles.length;
		int [] fl_sz=new int[numOfInputfiles];
		int inputFileIndex=0;

		for (File inputFile : listOfInputFiles) {
			dcmnt=dirPath+inputFile.getName();
			//System.out.println("dcmnt: "+dcmnt);
			fldrlst=inputFile.getAbsolutePath().split("\\.");
			//System.out.println("fldrlst[0]::"+fldrlst[2]);
			fldrlst2=fldrlst[2].split("\\\\");
			fldr=fldrlst2[fldrlst2.length-1];
			//System.out.println("fldr::"+fldr+"fldrlst2"+fldrlst2);
		    if (inputFile.isFile()) {
		        //System.out.println("File dcmnt:"+dcmnt+"---------fldr:"+fldr);
		        zipUnzipDocx(dcmnt,fldr);
		        chPicTbl= number_of_charecters(dcmnt);
		        al_fn.add(inputFileIndex, inputFile.toString());
		        fl_sz[inputFileIndex]=chPicTbl[0];
		    }
		    
		    inputFileIndex++;
		}

		
		//Bubble sort
		for (int n = 0; n < fl_sz.length-1; n++) {	 
	        for (int m = 0; m < (fl_sz.length - n-1); m++) {
	            if ((fl_sz[m]>(fl_sz[m + 1])) ) {
	                int swapInt = fl_sz[m];
	                fl_sz[m] = fl_sz[m + 1];
	                fl_sz[m + 1] = swapInt;
	                String swapString = al_fn.get(m);
	                al_fn.set(m,al_fn.get(m + 1));
	                al_fn.set((m + 1), swapString);
	            }
	        }
	    }
		return al_fn;
		
		}
	
	
	
	private static void generate_single_common_block_docx(String documnt1, String destinationFolder1, int sz, String commonSubString, int commonBlockPercentage) throws IOException {
		// TODO Auto-generated method stub
		
		try{
		int numOfChar=0;
		int numOfPic=0;
		int numOfTable=0;
		
		int textlimit=sz;
		int indxOfchar1=0;
		int number_of_paragraphs, image_position;
    	String[] tmp_rslt= documnt1.split("\\\\");
        String ttmpp= tmp_rslt[tmp_rslt.length-1];
        String[] ttmmpp= ttmpp.split("\\.");
        InputStream is = new FileInputStream(documnt1);
    	XWPFDocument doc = new XWPFDocument(is);
        List<XWPFParagraph> paras = doc.getParagraphs();
        int cnttt=0;
        number_of_paragraphs=paras.size();
        Random rn = new Random(sz);
        int value= rn.nextInt((sz - 0) + 1) + 0;
        image_position =  value;
        
        int count=0;
        CustomXWPFDocument newdoc = new CustomXWPFDocument();
        XWPFStyles newstyle= newdoc.createStyles();
        XWPFStyles oldstyle=doc.getStyles();
        newstyle=oldstyle;
        boolean flg=false;
        boolean limitflg=false;
        
        //para by para
        for (IBodyElement bodyElement : doc.getBodyElements()) {

            BodyElementType elementType = bodyElement.getElementType();

            if (elementType.name().equals("PARAGRAPH")) {
            	
            	 XWPFParagraph para = (XWPFParagraph) bodyElement;
            	 if (!para.getParagraphText().isEmpty()) {
            		 	
            		 
            		 XWPFParagraph newpara = newdoc.createParagraph();
		                newpara.setAlignment(para.getAlignment());
		                newpara.setStyle(para.getStyle());
            		 
		                for (XWPFRun run1 : para.getRuns()) {  
		                	
		                	String textInRun1 = run1.getText(0);
		        	        if (textInRun1 == null || textInRun1.isEmpty()) {
		        	            continue;
		        	        }
		        	        indxOfchar1=indxOfchar1+textInRun1.length();
		        				count++;
		        				
		        				if(flg==false) {
		        					
		        				if(indxOfchar1<=value){
		        					String prcntnt="";
		        					prcntnt=textInRun1;
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
		        					
		        				}else {
		        					
		        					String prcntnt="";
		        					int tg=value-(indxOfchar1-textInRun1.length());   
		        						
		        					String pre_str1=textInRun1.substring(0,tg);
									String post_str1=textInRun1.substring(tg,textInRun1.length());
									//prcntnt=pre_str1+"******************************"+commonSubString+"****************************"+post_str1;
									prcntnt=pre_str1+commonSubString+post_str1;
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
		        						
		        						flg=true;
		        					
		        				}
		        				
		        				
		        				
		                }else {
		                	
		                	///////////////////////////////////////////////////////////////////////////////////////////////////
		                	
		                	if(indxOfchar1<=textlimit){
		                		
		                		String prcntnt="";
	        					prcntnt=textInRun1;
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
	        					
	        				}else {
	        					
	        					String prcntnt="";
	        					
	        					int tg=(indxOfchar1-textlimit);   
	        					String pre_str1=textInRun1.substring(0,tg);
								prcntnt=pre_str1;
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
				        	        limitflg=true;
	        						break;
	        					
	        				}
		                	
		                	
		                }
		                	
		                }
		                
		            }
		        
	                int cnn=0;
		       
            	
            }
            
                        
            if(limitflg==true){
            	
            	break;
            	
            }
            
        }
        
		
        int ln=tmp_rslt.length;
        String result=destinationFolder1;
        FileOutputStream fos = new FileOutputStream(new File(result));
        newdoc.write(fos);
        fos.flush();
        fos.close();
        newdoc.close();
		
		
		}catch(Exception ex){
			ex.printStackTrace();
		}
		
	}


	private static void zipUnzipDocx(String documnt, String docxfldr) throws Exception {
		// TODO Auto-generated method stub
		
		//////////////////////////Creating a copy///////////////////////////////////////////////	
		//System.out.println("Documnt:"+documnt+"docxfldr::::"+docxfldr);
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
        
        try{ 	
    	InputStream is = new FileInputStream(documnt);
    	//System.out.println("documnt: "+documnt);
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
		      
		                for (XWPFRun run : para.getRuns()) {
		                	
		                    for (XWPFPicture pic : run.getEmbeddedPictures()) {
		                      numOfPic++;
		                        
		                    }
		                 
		                }
		            
		            /////////////////////////////Table Copy///////////////////////////////////////////
            	 
            	
            }else if( elementType.name().equals("TABLE") ) {

                numOfTable++;
                
            }
            
        }
        
		}catch(Exception ex){
		ex.printStackTrace();
		
	}
		
		numOfCPT[0]=numOfChar;
		numOfCPT[1]=numOfPic;
		numOfCPT[2]=numOfTable;
		
		return numOfCPT;
	//return null;
		
		
		
	}


	private static String[] text_and_number_of_charecters(String documnt) throws IOException {
		// TODO Auto-generated method stub
		
		int numOfChar=0;
		int numOfPic=0;
		int numOfTable=0;
		String txt="";
		String [] numOfCPT = new String[3];
		
		int number_of_paragraphs, image_position;
    	
    	String[] tmp_rslt= documnt.split("\\\\");
        String ttmpp= tmp_rslt[tmp_rslt.length-1];
        String[] ttmmpp= ttmpp.split("\\.");
        
        
        
    	try{    	
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
			                	txt=txt+textInRun1;
		                		
		                	}
		                	
		                	
		                }
		                
		            }
		        
	            /////////////////////////////Image Copy///////////////////////////////////////////
		        /////////////if there is a picture in the paragraph it will retrieve and put it there//////////
		            int cnn=0;
		      
		                for (XWPFRun run : para.getRuns()) {
		                	
		                    for (XWPFPicture pic : run.getEmbeddedPictures()) {
		                      numOfPic++;
		                        
		                    }
		                 
		                }
		            
		            /////////////////////////////Table Copy///////////////////////////////////////////
            	 
            	
            }else if( elementType.name().equals("TABLE") ) {

                numOfTable++;
                
            }
            
        }
        
	}catch(Exception ex){
		ex.printStackTrace();
		
	}
        
		numOfCPT[0]=txt;
		numOfCPT[1]=""+numOfChar;
		numOfCPT[2]=""+numOfPic+"-"+numOfTable;
		
		return numOfCPT;
		
		
	}






		private static void deleteDirectory(String directoryFilePath) throws IOException {
		// TODO Auto-generated method stub
		try{
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
	    
		}catch(Exception ex){
			ex.printStackTrace();
			
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









