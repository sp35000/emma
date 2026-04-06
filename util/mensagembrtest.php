<h1>MensagemBR Post Test Page</h1>
<?php
include("./mensagembr.php");
$today = date("Ymd");
$year = substr($today,0,4);
$month = substr($today,4,2);
$day = substr($today,6,2);

function testYear($yearParm) {    
    $firstDay = $yearParm."0101";
    for($i=0;$i<=365;$i++) {     
        $currentDay=date("Ymd", strtotime($firstDay." + ".$i." days"));
        $currentPost=getPost($currentDay);
        echo "currentDay: ".$currentDay." - ".$currentPost."<br/>";
    }
}

function getPost($parmDay) {
    $parmTimestamp = DateTime::createFromFormat("Ymd",$parmDay);
    $post = getVariableSpecialDatePost($parmTimestamp);
    if ($post == "non variable special date") {
        $post = getFixedSpecialDatePost($parmDay);
    }
    if ($post == "non fixed special date") {
        $post = getDayOfTheWeekPost($parmDay);
    }
    return $post;
}

echo "today: ".$today."<br/>";
$todayType = getFixedSpecialDatePost($today);
echo "todayType: ".$todayType."<br/>";

$dayOfTheWeek = getDayOfTheWeekPost($today);
echo "day of the week: ".$dayOfTheWeek."<br/>";

$secondSunday = getSecondSunday($today);
echo "secondSunday: ".$secondSunday."<br/>";

$easterTest = calculateEaster($year);
$dayResult = getVariableSpecialDatePost($easterTest);
echo "easter test: ".$dayResult."<br/>";

$goodFridayTest = calculateGoodFriday($easterTest);
$parmDateTest = DateTime::createFromFormat("Ymd",$goodFridayTest);
$dayResult = getVariableSpecialDatePost($parmDateTest);
echo "good friday test: ".$dayResult."<br/>";

$carnivalPeriodTest = calculateCarnivalPeriod($easterTest);
$parmDateTest = DateTime::createFromFormat("Ymd",$carnivalPeriodTest[0]);
$dayResult = getVariableSpecialDatePost($parmDateTest);
echo $carnivalPeriodTest[0]." carnival test: ".$dayResult."<br/>";

$corpusChristiTest = calculateCorpusChristi($easterTest);
$parmDateTest = DateTime::createFromFormat("Ymd",$corpusChristiTest);
$dayResult = getVariableSpecialDatePost($parmDateTest);
echo "corpus christi test: ".$dayResult."<br/>";

echo "<hr/><p>Year ".$year." test</p>";
testYear($year);

$post = getPost($today);

echo "<hr/><p>Final result: ".$today." is ".$post."</p>";
generateOpenGraphFile($post);
include ("mensagembrOpenGraph.php");

echo "<br/>== end ==";
?>