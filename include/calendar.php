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
  $j=1;
  echo "<div class=\"row\">";
  echo "<div class=\"cell bg-info\"><a href=?date=".$lastYear.">".substr($lastYear,0,4)."</a></div>";
  echo "<div class=\"cell\"><a href=?date=".$lastMonth.">".substr($lastMonth,0,6)."</a></div>";
  echo "<div class=\"cell bg-info\"><big>".$parmDate."</big></div>";
  echo "<div class=\"cell\"><a href=?date=".$nextMonth.">".substr($nextMonth,0,6)."</a></div>";
  echo "<div class=\"cell bg-info\"><a href=?date=".$nextYear.">".substr($nextYear,0,4)."</a></div>";
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
  for($i=0;$i<35;$i++) {
    $currentDay = $year.$month.str_pad($monthArray[$i], 2, '0', STR_PAD_LEFT);
    if ($currentDay == $parmDate) {
      $currentDayStyle = " bg-info";
    } else {
      $currentDayStyle = "";
    }
    if ($j<7) {
      if ($j==1) {
        if ($i==28 && $monthArray[$i]=="") {
          $rowFlag="0";
        } else {
          echo "<div class=\"row\">";
          $rowFlag="1";
        }
      }
      if ($rowFlag == 1) {
        echo "<div class=\"cell".$currentDayStyle."\">";
        echo "<a href=\"".$url."?date=".$currentDay."\"/>";
        // echo "[".$i."]";
        echo $monthArray[$i]."</a>";
        echo "</div>\n";
        }
      $j++;
    } else {
      if ($rowFlag == 1) {
        echo "<div class=\"cell".$currentDayStyle."\">";
        echo "<a href=\"".$url."?date=".$currentDay."\"/>";
        echo $monthArray[$i]."</a>";
        echo "</div>\n</div>\n";
      }        
      $j=1;
    }
  }
  echo "</div>";
}
?>