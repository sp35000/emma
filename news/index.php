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
?>
<body>
  <div class="container content-fluid">
    <div class="row">  
      <div class="col-md-12 columns text-center firstdiv">
        <h1>Serina News</h1>
        <div class="col-md-4"></div>
        <div class="col-md-4 table">
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
          $url="http://192.168.0.21/sig/news/index.php";
          // $url="https://work4love.net/news/index.php";
          echo drawCalendar($parmDate,$url);
          ?>
        </div>
      <div class="col-md-4"></div>
    </div>
    <div class="col-md-12 columns">
    <?php 
    include("../include/apitools.php"); 
    // $urlApi = "http://192.168.0.152:10000/api/news/date/".$parmDate;
    $urlApi = "https://work4love.net/serina-api/public/api/news/date/".$parmDate;
    $result = json_decode(getApiJson($urlApi));
    // echo "<pre>";print_r($result);echo "</pre>";
    echo "<ul>";
    foreach ($result as $register) {
      echo "<li><a href=".$register->link." target=\"_blank\">".$register->title."</a></li>";
    }
    echo "</ul>";
    ?>
    </div>
    </div>
    <?php include("../include/footer.php"); ?>
  </div>
</div>
<?php include("../include/bodyend.php"); ?>
</body>
</html>
