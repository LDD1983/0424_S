<h2> 時間與日期</h2>
<?php
// 設置正確時區
date_default_timezone_set("Asia/Taipei");

echo date("Y-m-d H:i:s");
echo "<br/>";
echo strtotime("now");
echo "<br/>";
$yesd = strtotime("now",);
echo date("Y.m.d-h.i.s",$yesd);
echo "<br/>"; 
$today = strtotime( "now");
echo "現在的時間" .$today . "秒";
echo "<br>";
echo date("Y-m-d H:i:s");
echo "<br>";
$tomorrow = strtotime("+1 day",$today);
echo '$tomorrow , ' . date("Y-m-d H:i:s",$tomorrow);
echo "<br>";
$nextweek = strtotime("+1 week",$today);
echo date("Y-m-d H:i:s",$nextweek);
echo "<br>";
$lastweek = strtotime("-1 week",$today);
echo date("Y-m-d H:i:s , e , I",$lastweek); 


echo " <p>&nbsp</p> ";
echo " <p>&nbsp</p> ";
echo " <p>&nbsp</p> ";
echo " <p>&nbsp</p> ";
echo " <p>&nbsp</p> ";
echo " <p>&nbsp</p> ";


?>




