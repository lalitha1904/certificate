<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sudhir";
$con=mysqli_connect($servername,$username,$password,$dbname);

$sql="SELECT * FROM  certi";

$re=mysqli_query($con,$sql);	
$rowcount=mysqli_num_rows($re);
$i=1;
while($i<=$rowcount)
{ 
$ro=mysqli_fetch_array($re);

if($ro[23]=="")
{
	if($ro[7]=="IoT (Internet of Things)")
	{
		if($i<=9)
			$sql1="UPDATE certi SET code='CH0117000$i' WHERE rollno='$ro[3]' and course='IoT (Internet of Things)'";
		else if($i>=10 && $i<=99)
			$sql1="UPDATE certi SET code='CH011700$i' WHERE rollno='$ro[3]' and course='IoT (Internet of Things)'";
		else
			$sql1="UPDATE certi SET code='CH01170$i' WHERE rollno='$ro[3]' and course='IoT (Internet of Things)'";
	
		echo $sql1;
		
		$re1=mysqli_query($con,$sql1);
	}
	else if($ro[7]=="Python")
	{
		if($i<=9)
			$sql1="UPDATE certi SET code='CH0217000$i' WHERE rollno='$ro[3]' and course='Python'";
		else if($i>=10 && $i<=99)
			$sql1="UPDATE certi SET code='CH021700$i' WHERE rollno='$ro[3]' and course='Python'";
		else
			$sql1="UPDATE certi SET code='CH02170$i' WHERE rollno='$ro[3]' and course='Python'";
	
		echo $sql1;
		
		$re1=mysqli_query($con,$sql1);
	}
		else if($ro[7]=="Android")
	{
		if($i<=9)
			$sql1="UPDATE certi SET code='CH0317000$i' WHERE rollno='$ro[3]' and course='Android'";
		else if($i>=10 && $i<=99)
			$sql1="UPDATE certi SET code='CH031700$i' WHERE rollno='$ro[3]' and course='Android'";
		else
			$sql1="UPDATE certi SET code='CH03170$i' WHERE rollno='$ro[3]' and course='Android'";
	
		echo $sql1;
		
		$re1=mysqli_query($con,$sql1);
	}
	
	else if($ro[7]=="C - Programming")
	{
		if($i<=9)
			$sql1="UPDATE certi SET code='CH0417000$i' WHERE rollno='$ro[3]' and course='C - Programming'";
		else if($i>=10 && $i<=99)
			$sql1="UPDATE certi SET code='CH041700$i' WHERE rollno='$ro[3]' and course='C - Programming'";
		else
			$sql1="UPDATE certi SET code='CH04170$i' WHERE rollno='$ro[3]' and course='C - Programming'";
	
		echo $sql1;
		
		$re1=mysqli_query($con,$sql1);
	}
	else if($ro[7]=="Programming")
	{
		if($i<=9)
			$sql1="UPDATE certi SET code='CH0517000$i' WHERE rollno='$ro[3]' and course='Programming'";
		else if($i>=10 && $i<=99)
			$sql1="UPDATE certi SET code='CH051700$i' WHERE rollno='$ro[3]' and course='Programming'";
		else
			$sql1="UPDATE certi SET code='CH05170$i' WHERE rollno='$ro[3]' and course='Programming'";
	
		echo $sql1;
		
		$re1=mysqli_query($con,$sql1);
	}
	
	else if($ro[7]=="Java")
	{
		if($i<=9)
			$sql1="UPDATE certi SET code='CH0617000$i' WHERE rollno='$ro[3]' and course='Java'";
		else if($i>=10 && $i<=99)
			$sql1="UPDATE certi SET code='CH061700$i' WHERE rollno='$ro[3]' and course='Java'";
		else
			$sql1="UPDATE certi SET code='CH06170$i' WHERE rollno='$ro[3]' and course='Java'";
	
		echo $sql1;
		
		$re1=mysqli_query($con,$sql1);
	}
	else if($ro[7]=="Signal and Image Processing Using MATLAB")
	{
		if($i<=9)
			$sql1="UPDATE certi SET code='CH0717000$i' WHERE rollno='$ro[3]' and course='Signal and Image Processing Using MATLAB'";
		else if($i>=10 && $i<=99)
			$sql1="UPDATE certi SET code='CH071700$i' WHERE rollno='$ro[3]' and course='Signal and Image Processing Using MATLAB'";
		else
			$sql1="UPDATE certi SET code='CH07170$i' WHERE rollno='$ro[3]' and course='Signal and Image Processing Using MATLAB'";
	
		echo $sql1;
		
		$re1=mysqli_query($con,$sql1);
	}
	else if($ro[7]=="Embedded Systems")
	{
		if($i<=9)
			$sql1="UPDATE certi SET code='CH0817000$i' WHERE rollno='$ro[3]'and course='Embedded Systems'";
		else if($i>=10 && $i<=99)
			$sql1="UPDATE certi SET code='CH081700$i' WHERE rollno='$ro[3]' and course='Embedded Systems'";
		else
			$sql1="UPDATE certi SET code='CH08170$i' WHERE rollno='$ro[3]' and course='Embedded Systems'";
	
		echo $sql1;
		
		$re1=mysqli_query($con,$sql1);
	}
	
	else if($ro[7]=="MATLAB")
	{
		if($i<=9)
			$sql1="UPDATE certi SET code='CH0917000$i' WHERE rollno='$ro[3]'and course='MATLAB'";
		else if($i>=10 && $i<=99)
			$sql1="UPDATE certi SET code='CH091700$i' WHERE rollno='$ro[3]' and course='MATLAB'";
		else
			$sql1="UPDATE certi SET code='CH09170$i' WHERE rollno='$ro[3]' and course='MATLAB'";
	
		echo $sql1;
		
		$re1=mysqli_query($con,$sql1);
	}
		else if($ro[7]=="3D Modeling using Autodek Revit")
	{
		if($i<=9)
			$sql1="UPDATE certi SET code='CH1017000$i' WHERE rollno='$ro[3]' and course='3D Modeling using Autodek Revit'";
		else if($i>=10 && $i<=99)
			$sql1="UPDATE certi SET code='CH101700$i' WHERE rollno='$ro[3]' and course='3D Modeling using Autodek Revit'";
		else
			$sql1="UPDATE certi SET code='CH10170$i' WHERE rollno='$ro[3]' and course='3D Modeling using Autodek Revit'";
	
		echo $sql1;
		
		$re1=mysqli_query($con,$sql1);
	}
		else if($ro[7]=="CATIA and ANSYS")
	{
		if($i<=9)
			$sql1="UPDATE certi SET code='CH1117000$i' WHERE rollno='$ro[3]' and course='CATIA and ANSYS'";
		else if($i>=10 && $i<=99)
			$sql1="UPDATE certi SET code='CH111700$i' WHERE rollno='$ro[3]' and course='CATIA and ANSYS'";
		else
			$sql1="UPDATE certi SET code='CH11170$i' WHERE rollno='$ro[3]' and course='CATIA and ANSYS'";
	
		echo $sql1;
		
		$re1=mysqli_query($con,$sql1);
	}
	
		else if($ro[7]=="Drive Ready")
	{
		if($i<=9)
			$sql1="UPDATE certi SET code='CH1217000$i' WHERE rollno='$ro[3]' and course='Drive Ready'";
		else if($i>=10 && $i<=99)
			$sql1="UPDATE certi SET code='CH121700$i' WHERE rollno='$ro[3]' and course='Drive Ready'";
		else
			$sql1="UPDATE certi SET code='CH12170$i' WHERE rollno='$ro[3]' and course='Drive Ready'";
	
		echo $sql1;
		
		$re1=mysqli_query($con,$sql1);
	}
	
		else if($ro[7]=="IT ESSENTILAS")
	{
		if($i<=9)
			$sql1="UPDATE certi SET code='CH1317000$i' WHERE rollno='$ro[3]";
		else if($i>=10 && $i<=99)
			$sql1="UPDATE certi SET code='CH131700$i' WHERE rollno='$ro[3]'";
		else
			$sql1="UPDATE certi SET code='CH13170$i' WHERE rollno='$ro[3]'";
	
		echo $sql1;
		
		$re1=mysqli_query($con,$sql1);
	}
}
$i++;
}
?>