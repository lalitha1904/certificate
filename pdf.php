<?php
require('fpdf/fpdf.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sudhir";

$con=mysqli_connect($servername,$username,$password,$dbname);
$pdf=new FPDF();
$i=1;
$sql="SELECT * FROM  certi";

$re=mysqli_query($con,$sql);	
$rowcount=mysqli_num_rows($re);
	

while($i<=$rowcount)
{ 
$ro=mysqli_fetch_array($re);
$pdf->AddPage("L");

if($ro[7]=="IoT (Internet of Things)")
{
$pdf->Image('courses/iot.jpg',0,0,297);
}
if($ro[7]=="Python")
{
$pdf->Image('courses/python.jpg',0,0,297);
}
if($ro[7]=="Android")
{
$pdf->Image('courses/android.jpg',0,0,297);
}
if($ro[7]=="C - Programming")
{
$pdf->Image('courses/c.jpg',0,0,297);
}

if($ro[7]=="Programming")
{
$pdf->Image('courses/prog.jpg',0,0,297);
}

if($ro[7]=="Java")
{
$pdf->Image('courses/java.jpg',0,0,297);
}
if($ro[7]=="Signal and Image Processing Using MATLAB")
{
$pdf->Image('courses/sip.jpg',0,0,297);
}

if($ro[7]=="CATIA and ANSYS")
{
$pdf->Image('courses/c&a.jpg',0,0,297);
}

if($ro[7]=="3D Modeling using Autodek Revit")
{
$pdf->Image('courses/revit.jpg',0,0,297);
}


if($ro[7]=="Java" && $ro[6]=="phase - II")
{
$pdf->Image('courses/java2.jpg',0,0,297);
}

if($ro[7]=="C - Programming" && $ro[6]=="phase - II")
{
$pdf->Image('courses/c2.jpg',0,0,297);
}

if($ro[7]=="IoT (Internet of Things)" && $ro[6]=="phase - II")
{
$pdf->Image('courses/iot2.jpg',0,0,297);
}


if($ro[7]=="Embedded Systems")
{
$pdf->Image('courses/ES.jpg',0,0,297);
}
if($ro[7]=="MATLAB")
{
$pdf->Image('courses/MAT.jpg',0,0,297);
}

if($ro[7]=="Drive Ready")
{
$pdf->Image('courses/DRIVE.jpg',0,0,297);
}

if($ro[7]=="IT ESSENTILAS")
{
$pdf->Image('courses/ITE.jpg',0,0,297);
}


// Set font
$pdf->SetFont('Arial','B',20);
// Move to 8 cm to the right
$pdf->SetXY(100,94);
$name=ucfirst($ro[2]);
// Centered text in a framed 20*10 mm cell and line break
$pdf->Cell(20,10,$ro[1]." ".$name);


$pdf->SetFont('Arial','B',12);
$pdf->SetXY(32,179);
$pdf->Cell(20,10,$ro[23]);
$i++;
}


    


$pdf->Output();

?>
