<!DOCTYPE html>
	<?php	include ('head.php');	?>
  <?php	include ('function.php');	?>

  <html lang="en">
<body>
<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Php Option Network</h1>
  <p>Option Network: Ping / Nmap / ....</p>
</div>

<br>
<br>
<br>
<br>

<div class="container">

<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-4 text-center">


</div>
<div class="col-sm-4 text-center">


</div>



<div class="col-sm-2"></div>
</div>




<div class="row">
<div class="col-sm-2"></div>
    <div class="col-sm-8">
			<h5 class="text-primary text-center"> You IP: <?PHP echo getUserIP(); ?> </h5>
			<button type="button" id="ready" class="btn btn-success btn-block">Ready ?</button>

			<?PHP
			/*
			$result = shell_exec('ping 8.8.8.8 -c 5');
			echo $result;
			 */
			?>




</div>

<div class="col-sm-2"></div>
</div>
</body>
  </html>
