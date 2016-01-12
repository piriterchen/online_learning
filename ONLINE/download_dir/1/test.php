<!DOCTYPE html>
 <html>
 <head>
 <meta charset="utf-8">
 </head>
<body>
<p>11111111111111</p>
<p>
<?php
echo "帅哥哥";
include_once("./conn/config.php");
echo "good";
$DB= new ConnDB(dbtype,host,user,pwd,dbname);
$conn=$DB->GetConnId();
if($conn) echo "conncet success. ";
define('table',"t_course");
$sql="select * from ".table." where m_courseid=27";
$rs=$conn->query($sql);
$image=array();
if($rs){
echo "yes";
$image=mysqli_fetch_array($rs);
}
else{
echo "no";
}
$image_q=$image['m_image'];
echo $image_q;
?>
</p>
<img src="<?php echo $image_q;?>"/>
</body>
</html>
