<?php
$con=mysqli_connect('localhost','root','','inventory');
$sql="select * from laptop";
$res=mysqli_query($con,$sql);
$html='<table><tr><td>SN</td><td>Asset ID</td><td>Delevery Date</td><td>Laptop Hostname</td><td>IP</td><td>Laptop Username</td><td>Designation</td><td>Department</td><td>Location</td><td>Maker</td><td>Model</td><td>Serial</td><td>OS Key</td><td>Domain</td><td>CPU</td><td>RAM</td><td>HDD</td><td>SSD</td><td>OS Version</td><td>Vendor</td><td>Purchase Date</td><td>Procurement Reference</td><td>Warranty Year</td></tr>';
while($row=mysqli_fetch_assoc($res)){
	$html.='<tr><td>'.$row['sl'].'</td><td>'.$row['hostname'].'</td><td>'.$row['procurementdate'].'</td><td>'.$row['assetid'].'</td><td>'.$row['ip'].'</td><td>'.$row['laptopusername'].'</td><td>'.$row['department'].'</td><td>'.$row['designation'].'</td><td>'.$row['location'].'</td><td>'.$row['maker'].'</td><td>'.$row['model'].'</td><td>'.$row['serial'].'</td><td>'.$row['oskey'].'</td><td>'.$row['domain'].'</td><td>'.$row['cpu'].'</td><td>'.$row['ram'].'</td><td>'.$row['hdd'].'</td><td>'.$row['ssd'].'</td><td>'.$row['osversion'].'</td><td>'.$row['vendor'].'</td><td>'.$row['deleverydate'].'</td><td>'.$row['procrumentref'].'</td><td>'.$row['warranty'].'</td></tr>';
}
$html.='</table>';
header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=IPDC Laptop Report.xls');
echo $html;
?>