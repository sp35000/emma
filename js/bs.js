function hostReachable(url) {
 var testreq = new XMLHttpRequest();
 var bootstrapreq = new XMLHttpRequest();
 testreq.onreadystatechange = function() {
  if (this.readyState == 4) {
   if (this.status == 200) {
    console.log("test ok");
    bootstrapreq.open('GET', bscssurl, true);
    bootstrapreq.send();
    bootstrapreq.open('GET', bsjsurl, true);
    bootstrapreq.send();
   }
  }
 }
 bootstrapreq.onreadystatechange = function() {
  if (this.readyState == 4) {
   if (this.status == 200) {
    console.log("bootstrap ok");
   }
  }
 }
 testreq.open('GET', bscssurl, true);
 testreq.send();
}
var bscssurl="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css";
var bsjsurl="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js";
var file="/bootstrap/3.4.0/css/bootstrap.min.css";
hostReachable(bscssurl);
