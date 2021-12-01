<?php
$con=mysqli_connect('localhost','root','','inventory');
$sql="select * from employee";
$res=mysqli_query($con,$sql);
$html='<table><tr><td>SN</td><td>Name</td><td>ID</td><td>Department</td><td>Designation</td><td>Laptop</td><td>Bag</td><td>Mouse</td></tr>';
while($row=mysqli_fetch_assoc($res)){
	$html.='<tr><td>'.$row['sl'].'</td><td>'.$row['name'].'</td><td>'.$row['id'].'</td><td>'.$row['designation'].'</td><td>'.$row['department'].'</td><td>'.$row['laptop'].'</td><td>'.$row['bag'].'</td><td>'.$row['mouse'].'</td></tr>';
}
$html.='</table>';
header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=IPDC Employee Report.xls');
echo $html;
?>