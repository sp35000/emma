<?php
function drawCalendar($parmDate,$url) {
  $date = strtotime($parmDate);
  // $url="http://192.168.0.152:8000/worklogs";
  // $url="http://192.168.0.21/intra/beta/calendar.php";
  $year = date('Y',$date);
  $lastYear = date('Ymd',strtotime('-1 year ',$date));
  $nextYear = date('Ymd',strtotime('+1 year ',$date));
  $lastMonth = date('Ymd',strtotime('-1 month ',$date));
  $nextMonth = date('Ymd',strtotime('+1 month ',$date));
  $month = date('m',$date);
  $daysOfMonth = date('t',$date);
  $daysPast = date('d',$date)-1;
  $firstDay = strtotime('-'.$daysPast.' day',$date);
  $firstDayWeekDay = date('w',$firstDay);
  $monthArray = [];
  $calendarDate = 1;
  $limit=($firstDayWeekDay + $daysOfMonth);
  for ($i=$firstDayWeekDay; $i < $limit; $i++) {
    $monthArray[$i]=$calendarDate;
    $calendarDate++;    
  }
  echo "<div class=\"row\">";
  echo "<div class=\"cell bg-info\"><a href=?date=".$lastYear."><<</a></div>";
  echo "<div class=\"cell\"><a href=?date=".$lastMonth."><</a></div>";
  echo "<div class=\"cell bg-info\"><big>".$parmDate."</big></div>";
  echo "<div class=\"cell\"><a href=?date=".$nextMonth.">></a></div>";
  echo "<div class=\"cell bg-info\"><a href=?date=".$nextYear.">>></a></div>";
  echo "</div>";
  echo "<div class=\"row\">
    <div class=\"cell bg-info\">Su</div>
    <div class=\"cell bg-info\">Mo</div>
    <div class=\"cell bg-info\">Tu</div>
    <div class=\"cell bg-info\">We</div>
    <div class=\"cell bg-info\">Th</div>
    <div class=\"cell bg-info\">Fr</div>
    <div class=\"cell bg-info\">Sa</div>
    </div>";
  $weekDay=1;
  for($i=0;$i<42;$i++) {
    $currentDay = $year.$month.str_pad($monthArray[$i], 2, '0', STR_PAD_LEFT);
    if ($currentDay == $parmDate) {
      $currentDayStyle = " bg-info";
    } else {
      $currentDayStyle = "";
    }
    if ($weekDay<7) {
      if ($weekDay==1) {
        if ($month == 2) {
          $limit = 27;
        } else {
          $limit = 32;
        }
        if ($i>$limit && $monthArray[$i]=="") {
          $rowFlag="0";
        } else {
          echo "<div class=\"row\">";
          $rowFlag="1";
        }
      }
      if ($rowFlag == 1) {
        echo "<div class=\"cell".$currentDayStyle."\">";
        echo "<a href=\"".$url."?date=".$currentDay."\"/>";
        // echo "[".$i.",".$weekDay."]";
        echo $monthArray[$i]."</a>";
        echo "</div>\n";
        }
      $weekDay++;
    } else {
      if ($rowFlag == 1) {
        echo "<div class=\"cell".$currentDayStyle."\">";
        echo "<a href=\"".$url."?date=".$currentDay."\"/>";
        // echo "[".$i.",".$weekDay."]";
        echo $monthArray[$i]."</a>";
        echo "</div>\n</div>\n";
      }        
      $weekDay=1;
    }
  }
  echo "</div>";
}
?>