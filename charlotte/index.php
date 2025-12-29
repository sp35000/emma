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
include("../include/tools.php");
?>
<div class="container">
   <div class="row">
      <div class="col-md-12 columns text-center firstdiv">
      <h1>Formula 1</h1>
      <p>
         <a href="https://www.formula1.com/" class="btn btn-lg btn-success" target="_blank">F1 - The Official Home</a>
         <a href="https://www.band.uol.com.br/esportes/automobilismo/formula-1" class="btn btn-lg btn-success" target="_blank">F1 - Band</a>
         <a href="https://ge.globo.com/motor/formula-1/" class="btn btn-lg btn-success" target="_blank">F1 - GE</a>
         <!-- <a href="/sig/serina/news2.php?hashtag=%23F1" class="btn btn-lg btn-success">F1 News</a> -->
      </p>

      <h2>F1 Latest News</h1>
      <div align="left">
         <?php getExternalContent("https://work4love.net/sig/serina/news4.php?hashtag=%23F1")?>
      </div>
      <p><a href="/sig/serina/news2.php?hashtag=%23f1" class="btn btn-lg btn-success">More...</a></p>

      <h2><a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vRA5QOsqbF-4XnJyoYp72C81UkPNUGk32IwSrh80a9hTAdNj_kv_mel5yKw2Fh9Bqtt3RvPxiiB9gXi/pubhtml" target="_blank"> Classification</a></h2>
         <!-- embedding Google spreadsheet-->
         <div class="frame-container">
         <!-- <iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRA5QOsqbF-4XnJyoYp72C81UkPNUGk32IwSrh80a9hTAdNj_kv_mel5yKw2Fh9Bqtt3RvPxiiB9gXi/pubhtml?widget=true&amp;headers=false"></iframe> -->
         <iframe class="responsive-iframe" loading="lazy" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRA5QOsqbF-4XnJyoYp72C81UkPNUGk32IwSrh80a9hTAdNj_kv_mel5yKw2Fh9Bqtt3RvPxiiB9gXi/pubhtml?widget=true&amp;headers=false" width="380 px" height="600 px"></iframe>
         </div>
      </div>
      </div>
   <div class="row">
      <div class="col-md-12 columns text-left" style="padding-left:10%;padding-right:10%">
      <h2 align="center">2026 Season Calendar</h2>
      <pre>
      6/3 a 8/3/26: GP da Austrália
      13/3 a 15/3/26: GP da China (*)
      27/3 a 29/3/26: GP do Japão
      10/4 a 12/4/26: GP do Bahrein
      17/4 a 19/4/26: GP da Arábia Saudita
      1/5 a 3/5/26: GP de Miami (*)
      22/5 a 24/5/26: GP do Canadá (*)
      5/6 a 7/6/26: GP de Mônaco
      12/6 a 14/6/26: GP de Barcelona-Catalunha
      26/6 a 28/6/26: GP da Áustria
      3/7 a 5/7/26: GP da Inglaterra (*)
      17/7 a 19/7/26: GP da Bélgica
      24/7 a 26/7/26: GP da Hungria
      21/8 a 23/8/26: GP da Holanda (*)
      4/9 a 6/9/26: GP da Itália
      11/9 a 13/9/26: GP da Espanha
      25/9 a 27/9/26: GP do Azerbaijão      
      9/10 a 11/10/26: GP de Singapura (*)
      23/10 a 25/10/26: GP dos EUA
      30/10 a 1/11/26: GP do México
      6/11 a 8/11/26: GP de São Paulo
      19/11 a 21/11/26: GP de Las Vegas
      27/11 a 29/11/26: GP do Qatar
      4/12 a 6/12/26: GP de Abu Dhabi
      ---
      (*) sprint race
      </pre>
      <!-- <h2 id="2026header" align="center" onclick="showHide()">2026 Season Calendar&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-chevron-down"></h2>
      <script>
         function showHide() {
            var x = document.getElementById("2026");
            var y = document.getElementById("2026header");
            if (x.style.display === "none") {
            x.style.display = "block";
            y.innerHTML="2026 Season Calendar&nbsp;&nbsp;&nbsp;<span class=\"glyphicon glyphicon-chevron-up\">";
            } else {
            x.style.display = "none";
            y.innerHTML="2026 Season Calendar&nbsp;&nbsp;&nbsp;<span class=\"glyphicon glyphicon-chevron-down\">";
            }
            }
      </script>
      <div id="2026" style="display:none">
      <pre>
      </pre>
      </div> -->
      </div>
   </div>
<?php include("../include/footer.php"); ?>
</div>
</body>
</html>
