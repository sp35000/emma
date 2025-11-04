<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<?php
$title="Work4Love.net - Sites úteis sobre Finanças, Tecnologia, Viagens, Cursos e Entretenimento";
$description=$title.".";
$keywords="sites,social,estudo,lazer,trabalho,finanças,tecnologia,viagens,cursos,entretenimento";
include("../include/header.php");
?>
<body>
<?php
include("../include/bodystart.php");
include("../include/menusup.php");
include("../include/apitools.php"); 
?>
<body>
<div class="container content-fluid">
  <div class="row">  
    <div class="col-md-12 columns text-center firstdiv">
    <h1>Sites</h1>
    <form method="get" action="/sig/sites/search.php">
      <input name="hashtag" type="text">&nbsp;
      <input type="submit" value="Sites Search">&nbsp;
    </form>
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
    $urlApi = "https://work4love.net/emma-api/public/api/news/date/".$parm;

    // obtain category
    if (isset($_GET['category'])) {
      $parm = test_input($_GET['category']);
      // $urlApi = "http://192.168.0.152:10000/api/news/category/".$parm;
      $urlApi = "https://work4love.net/emma-api/public/api/news/category/".$parm;
    }

    // obtain search parameter
    if (isset($_GET['hashtag'])) {
      $parm = test_input($_GET['hashtag']);
      $parm = str_replace("#","%23",$parm);
      // $urlApi = "http://192.168.0.152:10000/api/news/search/".$parm;
      $urlApi = "https://work4love.net/emma-api/public/api/news/search/".$parm;
    }
    // $url="http://192.168.0.21/sig/sites/search.php";
    $url="https://work4love.net/sites/search.php";
    ?>
      <p>Search: <?=$parm?></p>
      <div class="col-md-12 columns text-left">
      <?php 
      // echo "<pre>".$urlApi."</pre>";
      $result = json_decode(getApiJson($urlApi));
      // echo "<pre>";print_r($result);echo "</pre>";
      echo "<ul>";
      foreach ($result as $register) {
        echo "<li>".$register->initial_date." [".$register->category."]&nbsp;&nbsp;<a href=".$register->link." target=\"_blank\">".$register->title."</a></li>";
        }
      echo "</ul>";
      ?>
      </div>

    </div>
  </div>
<?php include("../include/footer.php"); ?>
</div>
</body>
</html>
