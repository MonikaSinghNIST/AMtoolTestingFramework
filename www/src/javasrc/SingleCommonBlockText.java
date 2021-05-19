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

public class SingleCommonBlockText {

	public static void main(String[] agrs) throws IOException{
	
	Scanner sc = null;
	String text="";
	String str1="";
	String str2="";
	String resultStr="";
	String[] flname1 = null;
	String[] flname2 = null;
	int numOfBlock=5;
	
	
	//String sourceFolder1="DataUserGenerated\\RelatedDocument\\SingleCommonBlock\\Source1\\";
	//String sourceFolder2="DataUserGenerated\\RelatedDocument\\SingleCommonBlock\\Source1\\\\";
	//String commonFile="DataUserGenerated\\RelatedDocument\\SingleCommonBlock\\CommonFile\\";
	//String destinationFolder1="DataUserGenerated\\RelatedDocument\\SingleCommonBlock\\Results\\Source1\\";
	//String destinationFolder2="DataUserGenerated\\RelatedDocument\\SingleCommonBlock\\Results\\Source2\\";
	
	String sourceFolder="..\\DataUserGenerated\\RelatedDocument\\SingleCommonBlock\\Source\\Text\\";
	String destinationFolder1="..\\DataUserGenerated\\RelatedDocument\\SingleCommonBlock\\Results\\Text\\Source1\\";
	String destinationFolder2="..\\DataUserGenerated\\RelatedDocument\\SingleCommonBlock\\Results\\Text\\Source2\\";
	
	
	long[] triggerPointFile1 = new long[numOfBlock];
	long[] triggerPointFile2 = new long[numOfBlock];
	
	
	int []commonBlockPercentage=  {50,40,30,20,10,5,4,3,2,1};
	
	
	
	
	/////////////////////////////////////////////////////////////
	String commonstr="";
	int commonstrLen=0;
	String []CommonSubString= new String[10];
	
//////////////////////////Sort the file//////////////////////////////////////	
	ArrayList<String> sortedFileList= new ArrayList<String>();
    String dirPath=sourceFolder;
        
    	sortedFileList= SortFolder(dirPath);
    	
    	int count=0;
    	String filename="";
    	String commonblck="";
    	String commonfileName="";
    	for(int i=0;i<sortedFileList.size();i++){
    		filename=sortedFileList.get(i);
    		//System.out.println(sortedFileList.get(i)+"-");
    		count++;
    		
    		double []BlockSize= new double[10];
			int []BlockSizeInt= new int[10];
    		//////////////////////////////////here starts/////////////////////////////////////////////////////
    		if(count==1){
    			
    			commonfileName=filename;
    			commonstr = new String(Files.readAllBytes(Paths.get(dirPath+commonfileName)));
    			
    			double commonSize=commonstr.length();
    			
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
    			commonstrLen=commonstr.length();
    			
    			for(int j=0;j<BlockSize.length;j++) 
    			{
    			
    				commonblck=commonstr.substring(0, BlockSizeInt[j]);
    				CommonSubString[j]=commonblck;
    			
    			}
    			
    			
    		}else if(count==2){
    			
    			String str_embddBlock="";
				
    			String file1name=filename;
    			
				str1 = new String(Files.readAllBytes(Paths.get(dirPath+file1name)));
				str1=str1.substring(0, (commonstrLen+1));
				int sz1=0;
				sz1=str1.length();
				Random rn = new Random(sz1);
				int rndm_value= rn.nextInt((int) sz1-1);
				
				
				for(int j=0;j<CommonSubString.length;j++) {
				
					String pre_str1=str1.substring(0, rndm_value);
					String post_str1=str1.substring(rndm_value, sz1);
					str_embddBlock=pre_str1+CommonSubString[j]+post_str1;
					BufferedWriter writer = new BufferedWriter(new FileWriter(destinationFolder1+commonfileName.split("\\.")[0]+"_"+file1name.split("\\.")[0]+"_"+commonBlockPercentage[j]+".text"));
					//System.out.println(destinationFolder1+commonfileName.split("\\.")[0]+"_"+file1name.split("\\.")[0]+"_"+commonBlockPercentage[j]+".text");
					//System.out.println(str_embddBlock);
					writer.write(str_embddBlock);
			        writer.close();
					
				}
    			
    			
    		}else if(count==3){
    			
    			
    			String str_embddBlock2="";
    			String file2name=filename;
				
				str2 = new String(Files.readAllBytes(Paths.get(dirPath+file2name)));
				str2=str2.substring(0, (commonstrLen+1));
				
				int sz2=0;
				sz2=str2.length();
				Random rn2 = new Random(sz2);
				int rndm_value2= rn2.nextInt((int) sz2-1);
				
				for(int j=0;j<CommonSubString.length;j++) {
				
					String pre_str2=str2.substring(0, rndm_value2);
					String post_str2=str2.substring(rndm_value2, sz2);
					str_embddBlock2=pre_str2+CommonSubString[j]+post_str2;
					BufferedWriter writer2 = new BufferedWriter(new FileWriter(destinationFolder2+commonfileName.split("\\.")[0]+"_"+file2name.split("\\.")[0]+"_"+commonBlockPercentage[j]+".text"));
					writer2.write(str_embddBlock2);
			        writer2.close();
					
				}
    			
    			count=0;
    			
    		}
    		
    		
    	}
    	
	
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
            al.add(file.getName());
        }
        
        return al;
	}
	
	
	
}
