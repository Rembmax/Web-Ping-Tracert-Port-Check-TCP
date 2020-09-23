<!DOCTYPE html>
<?php	include ('head.php');	?>
<?php	include ('function.php');	?>
<html lang="en">
<body>
<div class="jumbotron text-center" style="margin-bottom:0">
<h1>Php Option Network</h1>
<br>
<h5> Ping / Port Check TCP / Tracert</h5>
</div>
<br>
<br>
<br>
<br>
<div class="container">
<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-8 text-center">
<h5> Your IP is: <?php echo getUserIP();?></h5><br>
<form class="" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input class="form-control mr-sm-2 text-center" name="IpCheck" type="text" placeholder="Enter Destination Ip " minlength="7" ma
xlength="15" size="15" pattern="^((\d{1,2}|1\d\d|2[0-4]\d|25[0-5])\.){3}(\d{1,2}|1\d\d|2[0-4]\d|25[0-5])$"><br>
<div class="text-info">
<label for="sel1">Protocol</label>
<select class="form-control text-center" id="sel1" name="protocol">
<option value="none" selected>----</option>
<option value="Ping">Ping</option>
<option value="PortTCP">Check Port TCP</option>
<option value"Tracert">Tracert</option>
</select>
</div>
<br>
<div class="form-group">
<button class="btn btn-success"  type="submit">Submit</button>
</div>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$IP = $_POST['IpCheck'];
$Protocol = $_POST['protocol'];
//////////////////////////////////////////////////////////////////////////////////////////////////////
if(!empty($IP) and $Protocol != '----'){
switch ($Protocol) {
case 'Ping':
        echo "<br><br><pre>".Ping($IP)."</pre>";
        break;
    case 'PortTCP':
        echo "<br><br><pre>".Nmap($IP)."</pre>";
        break;
    case 'Tracert':
        echo "<br><br><pre>".Tracert($IP)."</pre>";
        break;
}// END switch ($Protocol)
}// END if(!empty($IP) and $Protocol != '----')
///////////////////////////////////////////////////////////////////////////////////////////////////////
}// END ($_SERVER["REQUEST_METHOD"] == "POST")
?>
</div>
</div>
</body>
</html>
