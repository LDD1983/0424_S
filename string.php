<style>
    *{
        font-size: ;
    }
    
</style>

<?php

$str = "今天天氣很好";
$str2 = "Today is a good day";

echo $str ;
echo "<br>";
echo $str2 ;

echo "<br>";
echo substr($str,0,6). "  , (6個字元)";

echo "<br>";
echo substr($str2,0,2) . "  , (2個字元)";

echo "<h3>mb_substr()</h3>";

echo $str;
echo "<br>";
echo $str2;
echo "<br>";

echo mb_substr($str,0,2)." - (2 byte)";

echo "<br>";
echo mb_substr($str2,0,2)." - (2 byte)";

echo "<h3>中英合用 mb_substr()</h3>";
$str3 = "Today , 真是個 a good day";
echo $str3 ;
echo "<br>";
echo mb_substr($str3,5,8)." - (8 byte)";

echo "<h3>trim()</h3>";
$str = "        今 天 真 是 個 好 天 氣       ";
$str2 = " 今 天 真 是 個 好 天 氣 ";
echo $str ;
echo "<br>";
echo $str2 ;
echo "<br>";
echo trim($str) ;
echo "<br>";
echo trim($str2) ;

echo "<h3>str_repeat()</h3>";

$str = "YA";
echo str_repeat($str , 10);

echo "<h3>str_replace()</h3>";

$str = "今天天氣很好";
$rep = "很糟";

echo $str ;
echo "<br>";
echo str_replace(["天","很好"],["日",$rep],$str);

echo "<h3>explode()</h3>";

$str = "生成式人工智慧（Generative AI）風潮席捲各界，其在工業製造領域也發揮關鍵作用，一如在上週登場的「2023漢諾威工業展」，也對AI正滲透工業設計與製造有諸多討論。達梭系統大中華區副總裁Samson Khaou則表示，生成式AI不只協助針對既有產品設計優化，更可進一步重新改善設計。";

$ex = explode("，",$str);
echo "<pre>";
var_dump($ex);
echo "</pre>";
$file = "list.doc";
$sub = explode(".",$file);
echo "<pre>";
var_dump($sub);
echo "</pre>";
echo $sub[1];


echo "<h3>implode() or join()</h3>";
echo "<pre>";
print_r($ex);
echo "</pre>";

// implode == join 
echo join(",",$ex);

echo "<h3>strpos() , mb_strpos()</h3>";

$str = "今天天氣很好";
$ser = "天氣";
echo $str;
echo "<br>";
echo $ser;
echo "<br>";
echo "<br>";


echo mb_strpos($str, $ser);

echo "<h3>strlen() , mb_strlen</h3>";

$str = "今天天氣很好";
$str2 = "Today is good day";
echo $str;
echo "<br>";
echo $str2;
echo "<br>";
echo "<br>";


echo mb_strlen($str);
echo "<br>";
echo strlen($str2);

echo "<h3>字串取代</h3>";
 $a = "aaddw1123";
echo str_replace(["a","d","w",1,2,3],"*",$a);
echo "<br>";

echo str_repeat("*",strlen($a));


 echo "<h3>字串分割</h3>";

 $a = "this,is,a,book";
 

 $ar = explode("," , $a);
 var_dump($ar);

 echo "<pre>";
 print_r($ar);
 echo "</pre>";


 echo "<h3>字串組合</h3>";

 echo "<pre>";
 print_r($ar);
 echo "</pre>";


 echo join(" ",$ar);

 echo "<h3>子字串取用</h3>";

$str = "The reason why a great man is great is that he resolves to be a great man";

echo mb_substr($str,0,10). str_repeat(".",3);

echo "<h3>尋找字串與HTML、css整合應用 子字串取用
給定一個句子，將指定的關鍵字放大
“學會PHP網頁程式設計，薪水會加倍，工作會好找”
請將上句中的 “程式設計” 放大字型或變色.</h3>";

$str = "學會PHP網頁程式設計，薪水會加倍，工作會好找";

$target = "好";
$replace="<span style='font-size:25px;color:red'> $target </span>";

echo "<br>";

echo str_replace($target,$replace,$str);

$sp = explode($target,$str);

echo "<br>";
echo join($replace,$sp);


















echo " <p>&nbsp</p> ";
echo " <p>&nbsp</p> ";
echo " <p>&nbsp</p> ";
echo " <p>&nbsp</p> ";
echo " <p>&nbsp</p> ";
echo " <p>&nbsp</p> ";














