<?php
include("/home/ckropae6/lib/OpenGraph.php");
// include($_SERVER['HOME']."/lib/OpenGraph.php");
// echo $_SERVER['HOME']."/lib/OpenGraph.php<br/>";

function calculateEaster($year) {
    // Validate year input
    if ($year < 1583 || $year > 9999) {
        return null; // Gregorian calendar limits
    }
    // Meeus/Jones/Butcher algorithm for calculating Easter
    $a = $year % 19;
    $b = floor($year / 100);
    $c = $year % 100;
    $d = floor($b / 4);
    $e = $b % 4;
    $f = floor(($b + 8) / 25);
    $g = floor(($b - $f + 1) / 3);
    $h = (19 * $a + $b - $d - $g + 15) % 30;
    $i = floor($c / 4);
    $k = $c % 4;
    $l = (32 + 2 * $e + 2 * $i - $h - $k) % 7;
    $m = floor(($a + 11 * $h + 22 * $l) / 451);

    $month = floor(($h + $l - 7 * $m + 114) / 31);
    $month = str_pad($month, 2, '0', STR_PAD_LEFT);
    $day = (($h + $l - 7 * $m + 114) % 31) + 1;
    $day = str_pad($day, 2, '0', STR_PAD_LEFT);
    return new DateTime("$year-$month-$day");
}

function calculateGoodFriday($parmEaster) {
    $tmp = $parmEaster->format('Y-m-d H:i:s');
    return date("Ymd", strtotime($tmp.'- 2 days'));
}

function calculateCarnivalPeriod($parmEaster) {
    $tmp = $parmEaster->format('Y-m-d H:i:s');
    return [date("Ymd", strtotime($tmp.'- 50 days')),
    date("Ymd", strtotime($tmp.'- 49 days')),
    date("Ymd", strtotime($tmp.'- 48 days')),
    date("Ymd", strtotime($tmp.'- 47 days'))
    ];
}

function calculateCorpusChristi($parmEaster) {
    $tmp = $parmEaster->format('Y-m-d H:i:s');
    return date("Ymd", strtotime($tmp.'+ 60 days'));
}

function getSecondSunday($parmDateString) {
    $tmp = substr($parmDateString,0,6)."01";
    $firstSunday = date("Ymd",strtotime('next Sunday', strtotime($tmp)));
    $secondSunday = date("Ymd",strtotime('next Sunday', strtotime($firstSunday)));
    return date("Ymd", strtotime($secondSunday));
}

function getVariableSpecialDatePost($parmDate) {
    $tmpDate=$parmDate->format("Ymd");
    $tmpYear = substr($tmpDate,0,4);
    $tmpMonth = substr($tmpDate,4,2);
    $tmpDay = substr($tmpDate,6,2);
    $easter = calculateEaster($tmpYear);
    $goodFriday = calculateGoodFriday($easter);
    $carnival = calculateCarnivalPeriod($easter);
    foreach ($carnival as $d) {
        if ($d == $tmpDate) {
            return "https://mensagembr.com/um-otimo-carnaval/";
        }
    }
    if ($tmpDate == $goodFriday) {
        return "https://mensagembr.com/bom-feriado/";
    }
    if ($parmDate == $easter) {
        return "https://mensagembr.com/koalinhas-da-pascoa/";
    }
    $corpusChristi = calculateCorpusChristi($easter);
    if ($tmpDate == $corpusChristi) {
        return "https://mensagembr.com/bom-feriado/";
    }
    if ($tmpMonth == "05" and $tmpDay < 15) {
    $secondSunday = getSecondSunday($today);
    if ($today == $secondSunday) {
        return "https://mensagembr.com/feliz-dia-da-mamae/"; 
    }
    }
    if ($tmpMonth == "08" and $tmpDay < 15) {
    $secondSunday = getSecondSunday($today);
    if ($today == $secondSunday) {
        return "https://mensagembr.com/feliz-dia-dos-pais-3/"; 
    }
    }
    return "non variable special date";
}

function getFixedSpecialDatePost($parmDateString) {
    $tmpMonthDay=substr($parmDateString,4,4);
    $specialDaysPost=[
    // holiday
    "0101" => "https://mensagembr.com/um-ano-novo-especial/",
    "0421" => "https://mensagembr.com/bom-feriado/",
    "0501" => "https://mensagembr.com/bom-feriado/",
    "0612" => "https://mensagembr.com/love-is-in-the-air/",
    "0720" => "https://mensagembr.com/feliz-dia-da-amizade/",
    "0907" => "https://mensagembr.com/bom-feriado/",
    "1012" => "https://mensagembr.com/feliz-dia-das-criancas/",
    "1015" => "https://mensagembr.com/ao-mestre-com-carinho/",
    "1102" => "https://mensagembr.com/bom-feriado/",
    "1120" => "https://mensagembr.com/bom-feriado/",
    "1224" => "https://mensagembr.com/feliz-natal-3/",
    "1225" => "https://mensagembr.com/koalas-desejam-feliz-natal/",
    "1231" => "https://mensagembr.com/um-ano-novo-especial/",
    // seasons
    "0321" => "https://mensagembr.com/chegou-o-outono-koalas/",
    "0621" => "https://mensagembr.com/chegou-o-inverno-koalas/",
    "0923" => "https://mensagembr.com/chegou-a-primavera-koalas/",
    "1222" => "https://mensagembr.com/chegou-o-verao-koalas/",
    // begin of the month
    "0102" => "https://mensagembr.com/mensagem-para-janeiro/",
    "0201" => "https://mensagembr.com/mensagem-para-fevereiro/",
    "0301" => "https://mensagembr.com/mensagem-para-marco/",
    "0401" => "https://mensagembr.com/mensagem-para-abril/",
    "0502" => "https://mensagembr.com/mensagem-para-maio/",
    "0601" => "https://mensagembr.com/mensagem-para-junho/",
    "0701" => "https://mensagembr.com/mensagem-para-julho/",
    "0801" => "https://mensagembr.com/mensagem-para-agosto/",
    "0901" => "https://mensagembr.com/mensagem-para-setembro/",
    "1001" => "https://mensagembr.com/mensagem-para-outubro/",
    "1101" => "https://mensagembr.com/mensagem-para-novembro/",
    "1201" => "https://mensagembr.com/mensagem-para-dezembro/"
    ];
    if (array_key_exists($tmpMonthDay,$specialDaysPost)) {
        return $specialDaysPost[$tmpMonthDay];
    }
    else {
        return "non fixed special date";
    }
}

function getDayOfTheWeekPost($parmDateString) {
    $weekDaysPost = [
        "Sunday" => "https://mensagembr.com/mensagem-para-domingo/",
        "Monday" => "https://mensagembr.com/mensagem-para-segunda-feira/",
        "Tuesday" => "https://mensagembr.com/mensagem-para-terca-feira/",
        "Wednesday" => "https://mensagembr.com/mensagem-para-quarta-feira/",
        "Thursday" => "https://mensagembr.com/mensagem-para-quinta-feira/",
        "Friday" => "https://mensagembr.com/mensagem-para-sexta-feira/",
        "Saturday" => "https://mensagembr.com/mensagem-para-sabado/"
    ];
    $weekDay = date('l', strtotime($parmDateString));
    return $weekDaysPost[$weekDay];
}

function generateOpenGraphFile($parmUrl) {
    $graph = OpenGraph::fetch($parmUrl);
    $graphArray = [];
    foreach ($graph as $key => $value) {
        $graphArray[$key]=$value;
    }
    $openGraphResult = "<p><a href=\"".$graphArray["url"]."\" target=\"blank\"><big><strong>".$graphArray["title"]."</strong></big><br/><img src=".$graphArray["image:secure_url"]." width = \"40%\"/></a><br/>";
    $openGraphFile = fopen("mensagembrOpenGraph.php", "w");
    fwrite($openGraphFile,$openGraphResult);
    fclose($openGraphFile);
}

?>
