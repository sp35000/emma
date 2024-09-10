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
        <a href="https://www.band.uol.com.br/esportes/automobilismo/formula-1" class="btn btn-lg btn-success" target="_blank">F1 - Band</a>
        <a href="https://ge.globo.com/motor/formula-1/" class="btn btn-lg btn-success" target="_blank">F1 - GE</a>
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
<h2 align="center">2025 Season Calendar</h2>
 <pre>
    14/3 a 16/3: GP da Austrália
    21/3 a 23/3: GP da China
    4/4 a 6/4: GP do Japão
    11/4 a 13/4: GP do Bahrein
    18/4 a 20/4: GP da Arábia Saudita
    2/5 a 4/5: GP de Miami
    16/5 a 18/5: GP da Emilia-Romagna
    23/5 a 25/5: GP de Mônaco
    30/5 a 1/6: GP da Espanha
    13/6 a 15/6: GP do Canadá
    27/6 a 29/6: GP da Áustria
    4/7 a 6/7: GP da Inglaterra
    25/7 a 27/7: GP da Bélgica
    1/8 a 3/8: GP da Hungria
    29/8 a 31/8: GP da Holanda
    5/9 a 7/9: GP da Itália
    19/9 a 21/9: GP do Azerbaijão
    3/10 a 5/10: GP de Singapura
    17/10 a 19/10: GP dos EUA
    24/10 a 26/10: GP do México
    7/11 a 9/11: GP de São Paulo
    20/11 a 22/11: GP de Las Vegas
    28/11 a 30/11: GP do Qatar
    5/12 a 7/12: GP de Abu Dhabi
 </pre>
 </article>
 </div>
 <?php include("../include/footer.php"); ?>
</div>
</div>
<?php include("../include/bodyend.php"); ?>
</body>
</html>
