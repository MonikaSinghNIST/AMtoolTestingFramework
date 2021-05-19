package javasrc;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.security.SecureRandom;
import java.util.Random;
import java.util.Scanner;

public class TextFragmentRandomPHP {

	public static void main(String[] agrs) throws IOException{
	
	Scanner sc = null;
	String text="";
	String str="";
	String[] flname = null;
	String sourceFolder="../DataUserGenerated\\FragmentIdentification\\TextData\\Random\\Text\\";
	String destinationFolder="../DataUserGenerated\\FragmentIdentification\\TextData\\Random\\Results\\";
	
	
	
	
	File folder = new File(sourceFolder);
	File[] listOfFiles = folder.listFiles();

	for (File filee : listOfFiles) {
	    if (filee.isFile()) {
	    	str="";
	    	
	    	
	    	
	    	

	try {
		FileReader reader = new FileReader(filee);
		int character;
		flname=filee.getName().split("\\.");
		
		while ((character = reader.read()) != -1) {
			
			str=str+(char) character;
		}
		
		reader.close();
		} catch (FileNotFoundException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		
		
	///////Random position
	
	long sz=str.length();
	
	
	
	
		
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
			
			Random rn = new Random();
			
		    int rndm_value= rn.nextInt((int) sz-1-i);
		    //System.out.print("Value"+rndm_value+"-Size"+sz+" ");
			
			String fileName = destinationFolder+flname[0] +"_"+ i + ".text";
			
			FileWriter writer = new FileWriter(fileName, true);
			
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
			
		long count=0;
		
		try {
		
			
			long val=0;
			
			
		for(int x=0;x<sz;x++){
				
				
				
				if((rndm_value+brkpnt)>sz){
					
					long rmng=(rndm_value+brkpnt)-sz;
					
					if((count<=rmng)){
						//System.out.print(str.charAt(x));	
						val++;
						//System.out.print(" x: "+x);
					
					}else if((count>rndm_value) && (count<=(sz))){
						val++;
						//System.out.print(" xx: "+x);
					}
					
					
					else{
				       
							writer.append(str.charAt(x)); 
					}
					
					
				}
				else{
					
					//System.out.print("Here");
					if((count>rndm_value) && (count<=(rndm_value+brkpnt))){
					//System.out.print(str.charAt(x));	
						val++;
					}
					else{
			       
						writer.append(str.charAt(x)); 
					}

				}
				
				count++;
				
			}
			
		//System.out.println("Fraction"+val+" brkpnt:"+brkpnt+" fileName: "+fileName);
		
			writer.close();
			} catch (IOException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			} 
		}
		
		
		
		    }
		}
		
		
	}
	
}
