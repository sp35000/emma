<?php
$title="Work4Love.net - Music.";
$description="Work4Love.net - Music: Playlists de Músicas.";
$keywords="60,70,80,90,music,mpb,dance,forró,bahia,axé,pop,rock,brasil,australia,plena,zouk,lambada";
include("../include/header.php");
?>
<body>
<?php
include("../include/bodystart.php");
include("../include/menusup.php");
include("../serina/util/tools.php");

$eighties = "PLzna5ex_MnggOaykVGpgaseMMFjqaJ4R9";
$rockbr = "PLzna5ex_Mngg-YiQFQ0Qc3FmKRzcWLQco";
$dance = "PLzna5ex_MnghgdD7IRlqprVbiK2El2vg6";
$mpb = "PLzna5ex_Mngg4rpN3zPe3c3seQY3tuGtl";
$norteNordeste = "PLzna5ex_MngjN-vo56f4DGNoR6jeCQipj";
$forro = "PLzna5ex_MnghLsliJ3804j1hpYR_fpaa8";
$sambaReggae = "PLzna5ex_MnghNc7QxZKGaEV56e_C3LBxO";

?>

<div class="container">
<div class="col-md-12 columns text-center firstdiv">

<h1>Music</h1>

<p><a href="https://work4love.net/melody/" class="btn btn-lg btn-success">All Playlists</a></p>

<h2>80's</h2>
<?php showUrlVideo($eighties);?>

<h2>RockBR</h2>
<?php showUrlVideo($rockbr);?>

<h2>Dance Music</h2>
<?php showUrlVideo($dance);?>

<h2>MPB</h2>
<?php showUrlVideo($mpb);?>

<h2>Brail Norte e Nordeste</h2>
<?php showUrlVideo($norteNordeste);?>

<h2>Forró</h2>
<?php showUrlVideo($forro);?>

<h2>Samba Reggae</h2>
<?php showUrlVideo($sambaReggae);?>

<p><a href="https://work4love.net/melody/" class="btn btn-lg btn-success">All Playlists</a></p>

</div>
</div>
<?php include("../include/footer.php"); ?>
</div>
</div>
<?php include("../include/bodyend.php"); ?>
</body>
</html>
