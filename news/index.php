<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<?php
$title="Work4Love.net - Banco de dados de Notícias";
$description=$title.".";
$keywords="news,database,nature,world,brazil,brasil,america,europe,asia,oceania,africa,finance,culture,travel,technology";
include("../include/header.php");
?>
<body>
<?php
include("../include/bodystart.php");
include("../include/menusup.php");
include("../include/tools.php");
?>
<body>
  <div class="container content-fluid">
    <div class="row">  
      <div class="col-md-12 columns text-center firstdiv">
        <h1>News</h1>
          <?php 
          include("../include/security.php");
          include("../include/validation.php");
          include("../include/calendar.php");
          if (isset($_GET['date'])) {
            $parmDate = test_input($_GET['date']);
            $isValidDate = isValidDate($parmDate,'Ymd');
            if ($isValidDate == false) {
              echo "Error: ".$parmDate." is an invalid date. Using today.";
              $parmDate = date('Ymd');
            }
          } else {
            $parmDate = date('Ymd');
          }
          // $url="http://192.168.0.21/sig/news/index.php";
          $url="https://work4love.net/news/index.php";
          echo drawCalendar($parmDate,$url);
          ?>
    </div>
    <div class="col-md-12 columns">
    <br/>
    <?php 
    include("../include/apitools.php"); 
    // $urlApi = "http://192.168.0.152:10000/api/news/date/".$parmDate;
    $urlApi = "https://work4love.net/serina-api/public/api/news/date/".$parmDate;
    $result = json_decode(getApiJson($urlApi));
    // echo "<pre>";print_r($result);echo "</pre>";
    getAdvTgt(1);
    echo "\n<ul>\n";
    $resultCounter=0;
    foreach ($result as $register) {

        $newsLine = "<li>";

        $newsLine = $newsLine."[<a href=\"../serina/news2.php?category=".$register->category."\">";
        $newsLine = $newsLine.$register->category."</a>]&nbsp;&nbsp;";

        $newsLine = $newsLine."<a href=".$register->link." target=\"_blank\">";
        $newsLine = $newsLine.$register->title."</a>&nbsp;&nbsp;";
        
        if ($register->hashtag != "") {
          $hashtagParm = str_replace("#","%23",$register->hashtag);
          $newsLine = $newsLine."[<a href=\"search.php?hashtag=".$hashtagParm."\">";
          $newsLine = $newsLine.$register->hashtag."</a>]";
        }
        
        $newsLine = $newsLine."</li>\n";
        echo $newsLine;


      $resultCounter++;
      if ($resultCounter % 10 == 0) {
        echo "</ul>\n";
        getAdvTgt(1);
        echo "\n<ul>\n";
      } else {
        if ($resultCounter % 5 == 0) {
          echo "</ul>\n";
          getAdvTgt(5);
          echo "\n<ul>\n";
        }
      }
    }
    echo "</ul>\n";
    ?>
    </div>
    </div>
    </div>
    <?php include("../include/footer.php"); ?>
</div>
</body>
</html>
