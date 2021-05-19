/*******************This is the the final working code for paper to generate single common block related Document file***********************/
package javasrc;
import java.io.BufferedWriter;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.nio.file.Files;
import java.nio.file.Paths;
import java.security.SecureRandom;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.Random;
import java.util.Scanner;
import java.io.FileInputStream;
import java.io.InputStream;
import java.util.List;
import java.io.FileOutputStream;


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


public class MultipleBlockSimilarityDocx{

	static int notCreatedFilecount=0;
	static int totalNumberofFileCount=0;

	public static void main(String[] agrs) throws IOException{
	
	Scanner sc = null;
	String text="";
	String str1="";
	String str2="";
	String resultStr="";
	String[] flname1 = null;
	String[] flname2 = null;
	
	
	
	//int numOfBlock=5;
	
	int[] numOfBlock_arr= new int[5];
	
	numOfBlock_arr[0]=2;
	numOfBlock_arr[1]=4;
	numOfBlock_arr[2]=8;
	numOfBlock_arr[3]=16;
	numOfBlock_arr[4]=32;
	
	//String sourceFolder1="Data\\SizedFiles\\10MB\\Source1\\";
	//String sourceFolder2="Data\\SizedFiles\\10MB\\Source2\\";
	//String destinationFolder1="Data\\Results\\MultiBlock\\Document1\\";
	
	//MultipleCommonBlock\Source\Docx
	String commonFile="..\\DataUserGenerated\\RelatedDocument\\MultipleCommonBlock\\Source\\Docx\\";
	//String commonFile="..\\DataUserGenerated\\RelatedDocument\\MultipleCommonBlock\\Results\\Docx\\Source\\";
	String destinationFolder1="..\\DataUserGenerated\\RelatedDocument\\MultipleCommonBlock\\Results\\Docx\\Source1\\";
	String destinationFolder2="..\\DataUserGenerated\\RelatedDocument\\MultipleCommonBlock\\Results\\Docx\\Source2\\";
	String documnt;
	//long[] triggerPointFile1 = new long[numOfBlock];
	//long[] triggerPointFile2 = new long[numOfBlock];
	
	
	int []commonBlockPercentage=  {50,40,30,20,10,5,4,3,2,1};
	
	 ArrayList<String> sortedFileList= new ArrayList<String>();
     String dirPath=commonFile;
	
	
	sortedFileList= SortFolder(dirPath);
	//System.out.pri
	String commonstr="";
	String []numOfChPicTbl;
	String []numOfChPicTbl2;
	String []numOfChPicTbl3;
	int count=0;
	String filename="";
	String commonblck="";
	String commonfileName="";
	String sourceFolder1="";
	String sourceFoldername1="";
	String sourceFolder2="";
	String sourceFoldername2="";
	int commonstrLen = 0;
	
	double commonSize;
	String []CommonSubString= new String[10];
	double []BlockSize= new double[10];
	int []BlockSizeInt= new int[10];
	
	//System.out.println("here!!!");
	
	for(int i=0;i<sortedFileList.size();i++){
			//System.out.println(sortedFileList.get(i)+"-");
		filename=sortedFileList.get(i);
		//System.out.println(filename);
		count++;
		
		if(count==1){
			
			///////////////////////////////////////////////////////////////////////
			commonfileName= filename;
			commonstr="";

			try {
				
				//commonstr = new String(Files.readAllBytes(Paths.get(commonFile+commonfileName)));
			/////////////////////////////// Zipping code starts///////////////////////////////////////////////////////
				String ttmpp= commonfileName;//
				String[] ttmmpp= ttmpp.split("\\.");//
				String docxfldr=ttmmpp[0];//
				documnt=commonFile+commonfileName;
				numOfChPicTbl= text_and_number_of_charecters(documnt);
				commonstr = numOfChPicTbl[0];
				
				//System.out.println("commonFile+commonfileName:"+ commonFile+commonfileName);
				
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
				
				for(int l=0;l<BlockSize.length;l++) 
				{
					commonblck=commonstr.substring(0, BlockSizeInt[l]);
					CommonSubString[l]=commonblck;
					
				}
				
				
			}catch(Exception e){
				
			}
			
			
			
		}else if(count==2){
			
			
			/////////////////////////////////////////////////////////////
			sourceFolder1=commonFile;
			sourceFoldername1=filename;
			
			try {
				
				String str_embddBlock="";
				
				//str1 = new String(Files.readAllBytes(Paths.get(sourceFolder1+sourceFoldername1)));
				numOfChPicTbl2= text_and_number_of_charecters(sourceFolder1+sourceFoldername1);
				str1 = numOfChPicTbl2[0];
				
				
				//System.out.println(sourceFolder1+"---------"+sourceFoldername1);
				int sz1=0;
				sz1=str1.length();
				Random rn = new Random(sz1);
				int rndm_value= rn.nextInt((int) sz1-1);
				
				
				for(int j=0;j<CommonSubString.length;j++) {
					//System.out.println("str1: "+str1+" CommonSubstring[j]: "+CommonSubString[j]+" destinationFolder1: "+destinationFolder1+" commonfileName: "+commonfileName+" sourceFolder1: "+sourceFolder1+" sourceFoldername1: "+sourceFoldername1+" commonBlockPercentage[j]: "+commonBlockPercentage[j]+" numOfBlock_arr "+numOfBlock_arr);
					multiBlockInsertFiles(str1,CommonSubString[j],destinationFolder1,commonfileName,sourceFolder1,sourceFoldername1,commonBlockPercentage[j],numOfBlock_arr);
					
					
					
				}
				
				totalNumberofFileCount++;
				} catch (FileNotFoundException e) {
					// TODO Auto-generated catch block
					e.printStackTrace();
				}
			
			
			
			//count++;
			
			/////////////////////////////////////////////////////////////
			
			
			
			
			
		}else if(count==3){
			
			///////////////////////////////////////////////////////////////////////////
			
			sourceFolder2=commonFile;
			sourceFoldername2=filename;
			
			try {
				
				String str_embddBlock2="";
				
				//str2 = new String(Files.readAllBytes(Paths.get(sourceFolder2+sourceFoldername2)));
				numOfChPicTbl3= text_and_number_of_charecters(sourceFolder2+sourceFoldername2);
				str2 = numOfChPicTbl3[0];
				
				int sz2=0;
				sz2=str2.length();
				Random rn2 = new Random(sz2);
				int rndm_value2= rn2.nextInt((int) sz2-1);
				
				
				for(int j=0;j<CommonSubString.length;j++) {
				
					multiBlockInsertFiles(str2,CommonSubString[j],destinationFolder2,commonfileName,sourceFolder2,sourceFoldername2,commonBlockPercentage[j],numOfBlock_arr);
			        
					
				}
				totalNumberofFileCount++;
				
				} catch (FileNotFoundException e) {
					// TODO Auto-generated catch block
					e.printStackTrace();
				}
			
			
			//count++;
			
			///////////////////////////////////////////////////////////////////////////
			
			count=0;
			
		}
		
		
		
	}
	
	
	
	
	/////////////////////////////////////////////////////////////
	
	
	//System.out.println("notCreatedFilecount: "+notCreatedFilecount);
	//System.out.println("totalNumberofFileCount: "+totalNumberofFileCount);
	int totalNumberOfFileShouldBeCreated=totalNumberofFileCount*numOfBlock_arr.length*commonBlockPercentage.length;
	int totalNumberOfFilesActuallyCreated=totalNumberOfFileShouldBeCreated-notCreatedFilecount;
	//System.out.println("totalNumberOfFileShouldBeCreated: "+totalNumberOfFileShouldBeCreated);
	//System.out.println("totalNumberOfFilesActuallyCreated: "+totalNumberOfFilesActuallyCreated);
	
	
	/////////////////////////////////////////////////////////////
	
	
	}

	
	private static ArrayList<String> SortFolder(String dirPath) {
		// TODO Auto-generated method stub
		File dir=null;
        File[] paths;
		
        final ArrayList<String> al= new ArrayList<String>();
        
        dir = new File(dirPath);
		
		
        // array of files and directory
        paths = dir.listFiles();


        class Pair implements Comparable 
        {
            public long t;
            public File f;

            public Pair(File file)
            {
                f = file;
                t = file.length();
            }

            public int compareTo(Object o) 
            {
                long u = ((Pair) o).t;
                return t < u ? -1 : t == u ? 0 : 1;
            }
        };

        Pair[] pairs = new Pair[paths.length];
        for (int i = 0; i < paths.length; i++)
            pairs[i] = new Pair(paths[i]);

        Arrays.sort(pairs);

        // Take the sorted pairs and extract only the file part, discarding the timestamp.
        for (int i = 0; i < paths.length; i++)
            paths[i] = pairs[i].f;



        for(File file:paths)
        {
            // prints filename and directory name
            //System.out.println(file.getName()+" - " +file.length() );
            al.add(file.getName());
        }
        
        return al;
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
        
        //System.out.println("documnt: "+documnt);
        
        
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
	
	
	
	

	private static void multiBlockInsertFiles(String str, String ss, String destinationFolder1, String name, String sourceFolder1,String file1, int commonBlockPercentage, int[] numOfBlock_arr) throws IOException {
		// TODO Auto-generated method stub
		
		int blockLength;
		int sz=0;
		sz=str.length();
		Random rn = new Random(sz);
		int rndm_value;
		//int indxOfchar1=0;
		int textlimit=sz;
		
        int value= rn.nextInt((sz - 0) + 1) + 0;
       
		
		for(int jj=0;jj<numOfBlock_arr.length;jj++){
			int indxOfchar1=0;
			
			
			String[] commonSubString_array= new String[numOfBlock_arr[jj]];
			
			//System.out.println("numOfBlock_arr: "+numOfBlock_arr[jj]);
			
			int commonblockSize=ss.length();
			//System.out.println("numOfBlock_arr[jj]: "+numOfBlock_arr[jj]+"ss size: "+commonblockSize);
			//System.out.println("ss: "+ss);
			if(commonblockSize<numOfBlock_arr[jj]){
				//System.out.println("The common block is not big enough"+commonblockSize+" to devide it further into "+numOfBlock_arr[jj]+" smaller blocks.");
				notCreatedFilecount++;
			}else{
			
			blockLength=commonblockSize/numOfBlock_arr[jj];
			int lastIndx=0;
			int firstIndx=0;
			int ii=0;
			while(lastIndx<commonblockSize){
				lastIndx=lastIndx+blockLength;
				if(lastIndx>commonblockSize){
					lastIndx=commonblockSize;
				}
				if(ii==(numOfBlock_arr[jj]-1)){
					lastIndx=commonblockSize;
				}
				//System.out.println("ii: "+ii+"firstIndx: "+firstIndx+" lastIndx: "+(lastIndx));
				commonSubString_array[ii]=ss.substring(firstIndx, lastIndx);
				//System.out.println("commonSubString_array: "+commonSubString_array[ii]);
				ii++;
				
				firstIndx=lastIndx;
			}
			
			
			
			///////////////////////////////////////////////////////////////////////////////////////
			
			
			int[] randomNumber_array= new int[numOfBlock_arr[jj]];
			
			for(int jjj=0;jjj<numOfBlock_arr[jj];jjj++){
				
				rndm_value= rn.nextInt((int) sz-1);
				randomNumber_array[jjj]=rndm_value;
				//System.out.println("rndm_value : "+rndm_value);
			}
			Arrays.sort(randomNumber_array);
			
			/*
			for(int k=0;k<randomNumber_array.length;k++){
				
				System.out.println("rndm_value["+k+"] : "+randomNumber_array[k]);
			}
			*/
			
			String sh="";
			int indx=0;
			int rndmarrsz=randomNumber_array.length;
			int rndmpos_indx=0;
			int rndmpos;
			
			
			
			
			
			/////////////////////////////////////////////////////////////////////////////////
			
			String[] tmp_rslt= destinationFolder1.split("\\\\");
	        String ttmpp= tmp_rslt[tmp_rslt.length-1];
	        String[] ttmmpp= ttmpp.split("\\.");
	        //System.out.println("destinationFolder1: "+destinationFolder1+" file1: "+file1);
	        InputStream is = new FileInputStream(sourceFolder1+file1);
	    	XWPFDocument doc = new XWPFDocument(is);
			
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
			        				//count++;
			        				
			        				if(rndmpos_indx<rndmarrsz) {
			        					rndmpos=randomNumber_array[rndmpos_indx];
			        					value=rndmpos;
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
			        					prcntnt=pre_str1+commonSubString_array[rndmpos_indx];
			        					//System.out.println("rndmpos_indx: "+rndmpos_indx+" randomNumber value: "+randomNumber_array[rndmpos_indx]);
			        					rndmpos_indx++;
			        					int tmp_value=value;
			        					String post_str1=textInRun1.substring(tg,textInRun1.length());
			        					
			        					if(rndmpos_indx<rndmarrsz) {
			        					int tmp_rndval=randomNumber_array[rndmpos_indx];	
			        					//System.out.println("randomNumber_array[rndmpos_indx]<indxOfchar1: "+tmp_rndval+"<"+indxOfchar1);
			        					
			        					while((rndmpos_indx<rndmarrsz)&&(randomNumber_array[rndmpos_indx]<indxOfchar1)) {
			        						//System.out.println("Inn Here :D");
			        						//System.out.println("rndmpos_indx: "+rndmpos_indx+" randomNumber value: "+randomNumber_array[rndmpos_indx]);
			        						value=randomNumber_array[rndmpos_indx];
			        						//System.out.println("value-(tmp_value) "+value+"-"+tmp_value);
				        					int tg_intm=value-(tmp_value);
			        						tmp_value=value;
				        					String pre_str_intm1=post_str1.substring(0,tg_intm);
				        					prcntnt=prcntnt+pre_str_intm1+commonSubString_array[rndmpos_indx];
				        					rndmpos_indx++;
				        					//System.out.println("post_str1: "+post_str1);
				        					post_str1=post_str1.substring(tg_intm,post_str1.length());
			        						
			        					}
			        					}
			        					
			        					prcntnt=prcntnt+post_str1;
										
										//prcntnt=pre_str1+"******************************"+commonSubString+"****************************"+post_str1;
										//prcntnt=pre_str1+commonSubString+post_str1;
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
			        						
			        						//flg=true;
						        	        
						        	        //rndmpos_indx++;
						        	        
						        	        
						        	        
						        	        
			        					
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
		        					
		        					int tg=value-(indxOfchar1-textlimit);   
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
	        String result=destinationFolder1+name.split("\\.")[0]+"_"+file1.split("\\.")[0]+"_"+commonBlockPercentage+"_"+numOfBlock_arr[jj]+".docx";
	        FileOutputStream fos = new FileOutputStream(new File(result));
	        newdoc.write(fos);
	        fos.flush();
	        fos.close();
	        newdoc.close();
			
			
			
			
			
			//////////////////////////////////////////////////////////////////////////////////
			
			/*
			for(int zz=0;zz<randomNumber_array.length;zz++){
				sh=sh+str.substring(indx, randomNumber_array[zz])+commonSubString_array[zz];
				indx=randomNumber_array[zz];
			}
			
			sh=sh+str.substring(indx, str.length());
			BufferedWriter writer = new BufferedWriter(new FileWriter(destinationFolder1+name.split("\\.")[0]+"_"+file1.split("\\.")[0]+"_"+commonBlockPercentage+"_"+numOfBlock_arr[jj]+".docx"));
			writer.write(sh);
	        writer.close();
	        */

			
			
		}
			
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









