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
include("../include/security.php");
include("../include/validation.php");
    
    // obtain title
    if (isset($_GET['searchtext'])) {
      $searchtext = test_input($_GET['searchtext']);      
    }

    // obtain link
    if (isset($_GET['link'])) {
      $link = test_input($_GET['link']);
    }

    // obtain hashtag
    if (isset($_GET['hashtag'])) {
      $hashtag = test_input($_GET['hashtag']);      
    }
    
    // obtain initial date
    if (isset($_GET['initial_date'])) {
      $initial_date = test_input($_GET['initial_date']);
    }

    // obtain final date
    if (isset($_GET['final_date'])) {
      $final_date = test_input($_GET['final_date']);
    }

    // obtain category
    if (isset($_GET['category'])) {
      $category = test_input($_GET['category']);
    }

    if (($searchtext == "")
      &&($link == "")
      &&($hashtag == "")
      &&($initial_date == "")
      &&($final_date == "")
      &&($category == "")) {
      $sql_query = "Empty form";
    }

    if ($sql_query != "Empty form") {
      $sql_query = createQuery($searchtext,$link,$hashtag,$initial_date,$final_date,$category);
      $api_fields = createApiUrl($searchtext,$link,$hashtag,$initial_date,$final_date,$category);
    }    
    // // $urlApi = "http://192.168.0.152:10000/api/news/advsearch/".$parm;
    $urlApi = "https://work4love.net/serina-api/public/api/news/advsearch/".$api_fields;

?>
<body>
<div class="container content-fluid">
  <div class="row">  
    <div class="col-md-12 columns text-center firstdiv">
     <form method="get" action="advsearch.php">
      <p>Text:&nbsp;<input type="text" name="searchtext" value="<?=$searchtext?>" id="searchtext" size="50"></input>
      <input type="submit" value="Search">&nbsp;
      <input type="button" value="Clear" onclick="clearForm()"><br/>
      URL:&nbsp;<input type="text" id="link" name="link" value="<?=$link?>" name="link"></input>&nbsp;
      Hashtag:&nbsp;<input name="hashtag" value="<?=$hashtag?>" type="text" id="hashtag" name="hashtag"></input><br/>
      &nbsp;Initial Date&nbsp;<input type="text" value="<?=$initial_date?>" id="initial_date" name="initial_date" placeholder="yyyymmdd"></input>
      &nbsp;Final Date&nbsp;<input type="text" value="<?=$final_date?>" id="final_date" name="final_date" placeholder="yyyymmdd"></input>
      <!-- <span id="loaderDiv" style="display:none;"><img src="../js/ajax-loader.gif" alt="Loading" /></span> -->
      &nbsp;Category:
      <select name="category" id="category">
        <option value="<?=$category?>"><?=$category?></option>
        <option value="" id="first"></option>
        <option value="Economy">Economy</option>
        <option value="Brasil">Brasil</option>
        <option value="World">World</option>
        <option value="Technology">Technology</option>
        <option value="Europe">Europe</option>
        <option value="Nature">Nature</option>
        <option value="America">America</option>
        <option value="Asia">Asia</option>
        <option value="Culture">Culture</option>
        <option value="Travel">Travel</option>
        <option value="Africa">Africa</option>
        <option value="Oceania">Oceania</option>
        <option value="Health">Health</option>
        <option value="Middle East">Middle East</option>
       <option value="AI">AI</option>
      </select>
     </form>
     <hr/>
    <h2>Results</h2>
    <?php 
    ?>
    <p>Debug: <br/>
    <?=$sql_query?><br/>
    <?=$api_fields?></p>
    <?=$urlApi?></p>
    <div class="col-md-12 columns text-left">
    <?php 
      // echo "<pre>".$urlApi."</pre>";
      $result = "";
      if ($sql_query != "Empty form") {
        $result = json_decode(getApiJson($urlApi));
      }      
      // echo "<pre>";print_r($result);echo "</pre>";
      getAdvTgt(1);
      echo "\n<ul>\n";
      $resultCounter=0;
      foreach ($result as $register) {
        $newsLine = "<li>";

        $newsLine = $newsLine."[<a href=\"/sig/serina/news2.php?category=".$register->category."\">";
        $newsLine = $newsLine.$register->category."</a>]&nbsp;&nbsp;";

        $newsLine = $newsLine."[<a href=\"index.php?date=".$register->initial_date."\">";
        $newsLine = $newsLine.$register->initial_date."</a>]&nbsp;&nbsp;";
        
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
<script>
  function clearForm() {
    clearField('searchtext');
    clearField('link');
    clearField('hashtag');
    clearField('initial_date');
    clearField('final_date');
    const $select = document.querySelector('#category');
    const $option = $select.querySelector('#first');
    $select.value = $option.value;
  }
</script>
</div>
</body>
</html>
