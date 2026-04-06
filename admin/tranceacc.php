<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TranceAcc</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../css/sig.css" />
<body>
    <div id="acc02" class="content-fluid text-center">
        <div class="row">
            <div class="col-sm-12">
                <h1>TranceAcc</h1>
                <form class="form-inline" action="tranceacc.php" method="post">
                    <div class="input-group">
                        <label>acc01:&nbsp;</label>
                        <input name="acc01text" type="text" size="15" maxlength="30" />&nbsp;
                        <br/>
                        <label>acc02:&nbsp;</label>
                        <input name="acc02text" type="text" size="15" maxlength="30" />&nbsp;
                        <br/>
                        <input class="btn btn-success" type="submit" value="Search" alt="Search" />
                    </div>
                </form>
    <?php
    $acc01text = $_POST["acc01text"];
    $acc02text = $_POST["acc02text"];
    if ($acc01text != "") {
     echo "<h2>acc01</h2>";
     $file="/home/ckropae6/acc/acc01.txt";
     $doc=explode("\n",file_get_contents($file));
     $out=preg_grep("/".$acc01text."/",$doc);
     foreach($out as $line) {
      echo $line."<br/>";
     }
    }
    if ($acc02text != "") {
     echo "<h2>acc02</h2>";
     $file="/home/ckropae6/acc/acc02.txt";
     $doc=explode("\n",file_get_contents($file));
     $out=preg_grep("/".$acc02text."/",$doc);
     foreach($out as $line) {
      echo $line."<br/>";
     }
    }
    ?>
   </div>
  </div>
 </div>
</body>
