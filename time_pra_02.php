<style>
table{
    border-collapse: collapse;
}
tr,td{
    border: 1px solid #ccc;
}

</style>

<h2>月曆</h2>

<?php
$today = strtotime("now");
$month = date("n");
$days = date("t");
$firdate = date("Y-n-1");
$findate = date("Y-n-t");
$firdateW = date("w" ,strtotime($firdate) );
$findateW = date("w" ,strtotime($findate) );
$weeks = ceil(($days + $firdateW)/7);

echo "幾月 : " . $month;
echo "<br>";
echo "天數 : ". $days;
echo "<br>";
echo "第一天 : ". $firdate;
echo "<br>";
echo "最後一天 : ". $findate;
echo "<br>";
echo "第一天星期幾 : ". $firdateW;
echo "<br>";
echo "最後一天星期幾 : ". $findateW;
echo "<br>";
echo "週數 : ". $weeks;
echo "<br>";
$firdateWs = $firdateW-1;
echo "第一周的空格數 : ". $firdateWs;
echo "<hr>";

echo "<table>";
echo "<tr>";
echo "<td>日</td>";
echo "<td>一</td>";
echo "<td>二</td>";
echo "<td>三</td>";
echo "<td>四</td>";
echo "<td>五</td>";
echo "<td>六</td>";

echo "</tr>";
for ($i=0; $i <$weeks ; $i++) {
        echo "<tr>";
        for ($j=0; $j <7 ; $j++) { 
         echo "<td>";   
        if ($i == 0) {
               if($j<$firdateW){
                echo "&nbsp";
               }else{echo $j+7*$i-$firdateWs;}
        }else if ($i==$weeks-1){
            if($j>$findateW){
                echo " ";
            }else{
                echo $j+7*$i-$firdateWs ;
            }
        }
        else{
            echo $j+7*$i-$firdateWs;
        }     
        echo "</td>";

        
     }
       echo "</tr>";
}
echo "</table>";