<?php
$title="Work4Love.net - Formula 1";
$description="Work4Love.net - Formula 1: notícias, vídeos, classificação.";
$keywords="sports,f1,classification,news,esporte,classificação,notícias";
include("../include/header.php");
?>
<body>
<?php
include("../include/bodystart.php");
include("../include/menusup.php");
?>
 <div class="container">
 <div class="row">
 <div class="col-md-12 columns text-center firstdiv">
 <article>
   <h1>Formula 1</h1>
   <h2><a href="https://work4love.net/sig/serina/news3.php?hashtag=%23f1">F1 News</a></h1>
     <p>
        <a href="https://www.formula1.com/" class="btn btn-lg btn-success" target="_blank">F1 - The Official Home</a>
        <a href="https://www.band.uol.com.br/esportes/automobilismo/formula-1" class="btn btn-lg btn-success" target="_blank">F1 na Band</a>
        <a href="https://youtube.com/playlist?list=PL1wt1uIbBJ2e7ziMVlHnEBOsa7tdvqsO9" class="btn btn-lg btn-success" target="_blank">Race Highlights</a>
        <a href="../serina/news3.php?hashtag=%23f1" class="btn btn-lg btn-success">F1 News</a>
     </p>
   <h2><a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vRA5QOsqbF-4XnJyoYp72C81UkPNUGk32IwSrh80a9hTAdNj_kv_mel5yKw2Fh9Bqtt3RvPxiiB9gXi/pubhtml" target="_blank"> Classification</a></h2>
   <!-- embedding Google spreadsheet-->
   <div class="frame-container">
<!-- <iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRA5QOsqbF-4XnJyoYp72C81UkPNUGk32IwSrh80a9hTAdNj_kv_mel5yKw2Fh9Bqtt3RvPxiiB9gXi/pubhtml?widget=true&amp;headers=false"></iframe> -->
   <iframe class="responsive-iframe" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRA5QOsqbF-4XnJyoYp72C81UkPNUGk32IwSrh80a9hTAdNj_kv_mel5yKw2Fh9Bqtt3RvPxiiB9gXi/pubhtml?widget=true&amp;headers=false" width="380 px" height="600 px"></iframe>
 </div>
</div>
<div class="col-md-12 columns" style="padding-left:10%;padding-right:10%">
  <h2 align="center">2024 Season Calendar</h2>
  <pre>
    Date            Grand Prix              Venue
    ----            ----------              -----
    March 2         Bahrain                 Sakhir (*)
    March 9         Saudi Arabia            Jeddah (*)
    March 24        Australia               Melbourne
    April 7         Japan                   Suzuka
    April 21        China                   Shanghai (sprint)
    May 5           Miami                   Miami (sprint)
    May 19          Emilia Romagna          Imola
    May 26          Monaco                  Monaco
    June 9          Canada                  Montreal
    June 23         Spain                   Barcelona
    June 30         Austria                 Spielberg (sprint)
    July 7          United Kingdom          Silverstone
    July 21         Hungary                 Budapest
    July 28         Belgium                 Spa
    August 25       Netherlands             Zandvoort
    September 1     Italy                   Monza
    September 15    Azerbaijan              Baku
    September 22    Singapore               Singapore
    October 20      USA                     Austin (sprint)
    October 27      Mexico                  Mexico City
    November 3      Brazil                  Sao Paulo (sprint)
    November 23     Las Vegas               Las Vegas (*)
    December 1      Qatar                   Lusail (sprint)
    December 8      Abu Dhabi               Yas Marina
    ---
    (*) Saturday races
 </pre>
 </article>
 </div>
 <?php include("../include/footer.php"); ?>
</div>
</div>
<?php include("../include/bodyend.php"); ?>
</body>
</html>
