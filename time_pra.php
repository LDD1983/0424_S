<h2> 計算</h2>

<?php

 $sd = strtotime("2023-04-24");
 $ed = strtotime("2023-04-26");
 $gap = ($ed - $sd )/(60*60*24);


 echo $sd;
 echo "<br>";
 echo $ed;
 echo "<br>";
echo $gap;
?>

<h2> 計算生日</h2>

<?php

$sd = strtotime(date("Y-m-d"));
$bd = strtotime("2024-03-28");
echo $sd . "<br>";
echo $bd . "<br>";
$gap = ($bd - $sd )/(60*60*24);

echo $gap ;

echo "<h2>利用date()函式的格式化參數，完成以下的日期格式呈現</h2>";

// 2021/10/05
// 10月5日 Tuesday
// 2021-10-5 12:9:5
// 2021-10-5 12:09:05
// 今天是西元2021年10月5日 上班日(或假日)

echo date("Y/m/d"). "<br>";
echo date("n月j日 l"). "<br>";
echo date("Y-n-j G:"). (int)date("i") . (int)date("s") . "<br>";
echo date("今天是西元Y年n月d日") ;
echo date("N")>=6?" 假日":" 上班日" ; 
?>

<h2>迴圈計算周一</h2>

<?php

$today = strtotime("now");
$weekd = date("N",$today);
$gap = 1-$weekd;
$monday = date("Y-m-d l " , strtotime("$gap days",$today ));
$sec = strtotime("$gap days",$today );

echo $monday;
echo "<br>";
for ($i=0; $i <5 ; $i++) { 
    echo date("Y-m-d l " , strtotime("+$i week",$sec ) );
    echo "<br>";
}

?>

<p>&nbsp</p>
<p>&nbsp</p>
<p>&nbsp</p>
<p>&nbsp</p>
<p>&nbsp</p>
<p>&nbsp</p>





