<html>
 <body>
<?php

$name = "Mahak Sharma";
$cgpa = 9.0;
$branch = "DS";
$year = date("Y");
$month = date("m");
$prev_year = $year-1;
$next_year = $year+1;
if($month <7){
    echo "Year $year-$next_year";
} else {
    echo "year $prev_year - $year";
}
?>


<h1><?=$name?> </h1>
<p><?=$cgpa?></p>
<p><?=$branch?></p>
<p>Date:<?=DATE("Y-m-d H:i:s")?></p>
<P>You are visiting from: <?=$_SERVER["REMOTE_ADDR"]?></P>
</body>
</html>