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
include("../include/apitools.php"); 
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

    // obtain date
    if (isset($_GET['date'])) {
      $parm = test_input($_GET['date']);
      $isValidDate = isValidDate($parmDate,'Ymd');
      if ($isValidDate == false) {
      echo "Error: ".$parmDate." is an invalid date. Using today.";
      $parm = date('Ymd');
    }
    } else {
      $parm = date('Ymd');
    }
    // $urlApi = "http://192.168.0.152:10000/api/news/date/".$parm;
    $urlApi = "https://work4love.net/serina-api/public/api/news/date/".$parm;

    // obtain category
    if (isset($_GET['category'])) {
      $parm = test_input($_GET['category']);
      // $urlApi = "http://192.168.0.152:10000/api/news/category/".$parm;
      $urlApi = "https://work4love.net/serina-api/public/api/news/category/".$parm;
    }

    // obtain search parameter
    if (isset($_GET['hashtag'])) {
      $parm = test_input($_GET['hashtag']);
      $parm = str_replace("#","%23",$parm);
      // $urlApi = "http://192.168.0.152:10000/api/news/search/".$parm;
      $urlApi = "https://work4love.net/serina-api/public/api/news/search/".$parm;
    }
    // $url="http://192.168.0.21/sig/news/search.php";
    $url="https://work4love.net/news/search.php";
    ?>
      <p>Search: <?=$parm?></p>
      <div class="col-md-12 columns text-left">
      <?php 
      // echo "<pre>".$urlApi."</pre>";
      $result = json_decode(getApiJson($urlApi));
      // echo "<pre>";print_r($result);echo "</pre>";
      getAdvTgt(1);
      echo "<ul>";
      $resultCounter = 0;
      foreach ($result as $register) {
        echo "<li>".$register->initial_date." [".$register->category."]&nbsp;&nbsp;<a href=".$register->link." target=\"_blank\">".$register->title."</a></li>";
        $resultCounter++;
        if ($resultCounter % 10 == 0) {
          echo "</ul>";
          getAdvTgt(1);
          echo "<ul>";
        } else {
          if ($resultCounter % 5 == 0) {
            echo "</ul>";
            getAdvTgt(5);
            echo "<ul>";
          }
        }
        echo "</ul>";
      }
      ?>
      </div>

    </div>
  </div>
<?php include("../include/footer.php"); ?>
</div>
</body>
</html>
