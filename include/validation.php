<?php
function isValidDate($date, $format= 'Ymd'){
    return $date == date($format, strtotime($date));
}
?>