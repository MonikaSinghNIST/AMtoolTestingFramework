//*******************This is the the final working code for paper to generate single common block related Document file***********************//
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

public class MultipleBlockSimilarityText {

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
	
	
	String commonFile="..\\DataUserGenerated\\RelatedDocument\\MultipleCommonBlock\\Source\\Text\\";
	String destinationFolder1="..\\DataUserGenerated\\RelatedDocument\\MultipleCommonBlock\\Results\\Text\\Source1\\";
	String destinationFolder2="..\\DataUserGenerated\\RelatedDocument\\MultipleCommonBlock\\Results\\Text\\Source2\\";
	
	//long[] triggerPointFile1 = new long[numOfBlock];
	//long[] triggerPointFile2 = new long[numOfBlock];
	
	
	int []commonBlockPercentage=  {50,40,30,20,10,5,4,3,2,1};
	
	 ArrayList<String> sortedFileList= new ArrayList<String>();
     String dirPath=commonFile;
	
	
	sortedFileList= SortFolder(dirPath);
	//System.out.pri
	String commonstr="";
	int count=0;
	String filename="";
	String commonblck="";
	String commonfileName="";
	String sourceFolder1="";
	String sourceFoldername1="";
	String sourceFolder2="";
	String sourceFoldername2="";
	
	double commonSize;
	String []CommonSubString= new String[10];
	double []BlockSize= new double[10];
	int []BlockSizeInt= new int[10];
	
	
	
	for(int i=0;i<sortedFileList.size();i++){
			//System.out.println(sortedFileList.get(i)+"-");
		filename=sortedFileList.get(i);
		//System.out.println(sortedFileList.get(i)+"-");
		count++;
		
		
		
		
		
		if(count==1){
			
			///////////////////////////////////////////////////////////////////////
			commonfileName= filename;
				
				//System.out.println("here!!!"+commonFile+commonfileName.getName());
			    
			    	commonstr="";

			try {
				
				commonstr = new String(Files.readAllBytes(Paths.get(commonFile+commonfileName)));
				
				//System.out.println("commonFile+commonfileName:"+ commonFile+commonfileName);
				
				commonSize=commonstr.length();
				
				//System.out.println("commonstr:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::"+commonstr+"commonSize+++++++++++++++++++++++++++++++++++++++++++++++++++++"+commonSize);
				
				
				
				//commonSize=0;
				//CommonSubString= null;
				//BlockSize= null;
				//BlockSizeInt= null;
				
				
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
				for(int l=0;l<BlockSize.length;l++) 
				{
					commonblck=commonstr.substring(0, BlockSizeInt[l]);
					CommonSubString[l]=commonblck;
					
				}
				
				
			}catch(Exception e){
				
			}
			
			    
			
			
			
			
			///////////////////////////////////////////////////////////////////////////
			
			
			
			
			
			
			
		}else if(count==2){
			
			
			/////////////////////////////////////////////////////////////
			sourceFolder1=commonFile;
			sourceFoldername1=filename;
			
			try {
				
				String str_embddBlock="";
				
				str1 = new String(Files.readAllBytes(Paths.get(sourceFolder1+sourceFoldername1)));
				//System.out.println(sourceFolder1+sourceFoldername1);
				int sz1=0;
				sz1=str1.length();
				Random rn = new Random(sz1);
				int rndm_value= rn.nextInt((int) sz1-1);
				
				
				for(int j=0;j<CommonSubString.length;j++) {
					
					multiBlockInsertFiles(str1,CommonSubString[j],destinationFolder1,commonfileName,sourceFoldername1,commonBlockPercentage[j],numOfBlock_arr);
					
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
				
				str2 = new String(Files.readAllBytes(Paths.get(sourceFolder2+sourceFoldername2)));
				
				int sz2=0;
				sz2=str2.length();
				Random rn2 = new Random(sz2);
				int rndm_value2= rn2.nextInt((int) sz2-1);
				
				
				for(int j=0;j<CommonSubString.length;j++) {
				
					multiBlockInsertFiles(str2,CommonSubString[j],destinationFolder2,commonfileName,sourceFoldername2,commonBlockPercentage[j],numOfBlock_arr);
			        
					
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


	private static void multiBlockInsertFiles(String str, String ss, String destinationFolder1, String name, String file1, int commonBlockPercentage, int[] numOfBlock_arr) throws IOException {
		// TODO Auto-generated method stub
		
		int blockLength;
		int sz=0;
		sz=str.length();
		Random rn = new Random(sz);
		int rndm_value;
		
		
		for(int jj=0;jj<numOfBlock_arr.length;jj++){
			
			////////////////////////////////////////////////////////////////////////////////////////
			
			String[] commonSubString_array= new String[numOfBlock_arr[jj]];
			
			
			int commonblockSize=ss.length();
			//System.out.println("numOfBlock_arr[jj]: "+numOfBlock_arr[jj]+"ss size: "+commonblockSize);
			//System.out.println("ss: "+ss);
			if(commonblockSize<numOfBlock_arr[jj]){
				System.out.println("The common block is not big enough"+commonblockSize+" to devide it further into "+numOfBlock_arr[jj]+" smaller blocks.");
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
			
			String sh="";
			int indx=0;
			for(int zz=0;zz<randomNumber_array.length;zz++){
				
				//sh=sh+str.substring(indx, randomNumber_array[zz])+"**************************"+commonSubString_array[zz]+"**************************";
				sh=sh+str.substring(indx, randomNumber_array[zz])+commonSubString_array[zz];
				indx=randomNumber_array[zz];
			}
			
			sh=sh+str.substring(indx, str.length());
			
			//System.out.println(destinationFolder1+name.split("\\.")[0]+"_"+file1.split("\\.")[0]+"_"+commonBlockPercentage+"_"+numOfBlock_arr[jj]+".text");
			BufferedWriter writer = new BufferedWriter(new FileWriter(destinationFolder1+name.split("\\.")[0]+"_"+file1.split("\\.")[0]+"_"+commonBlockPercentage+"_"+numOfBlock_arr[jj]+".text"));
			writer.write(sh);
	        writer.close();
			

			//String pre_str1=str.substring(0, rndm_value);
			//String post_str1=str.substring(rndm_value, blocklength);
			//str_embddBlock=pre_str1+CommonSubString[j]+post_str1;
			
			
		}
			
		}
		
		
	}
	
}
