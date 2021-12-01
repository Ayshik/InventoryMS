<?php
$con=mysqli_connect('localhost','root','','inventory');
$sql="select * from allocation";
$res=mysqli_query($con,$sql);
$html='<table><tr><td>SN</td><td>Name</td><td>Employee ID</td><td>Designation</td><td>Laptop Hostname</td></tr>';
while($row=mysqli_fetch_assoc($res)){
	$html.='<tr><td>'.$row['sl'].'</td><td>'.$row['name'].'</td><td>'.$row['employeeid'].'</td><td>'.$row['department'].'</td><td>'.$row['assetid'].'</td></tr>';
}
$html.='</table>';
header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=IPDC Allocated Laptop Report.xls');
echo $html;
?>