<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script src="jquery-2.1.1.min.js"></script>
	<script src="letters.js"></script>
	<script src="lb-demo.js"></script>
	<link rel="stylesheet" type="text/css" href="letters.css">
</head>
<body>
		<?php  $File = "counter.txt" ;
		$handle = fopen($File, 'r+') ;
		$data = fread($handle, 512) ;
		$count = $data + 1;
		$count_padded = sprintf("%06s", $count);
		print "<h1 class='lb giant scrolled' id='counter' >".$count_padded."</h1>" ;
		fseek($handle, 0) ;
		fwrite($handle, $count) ;
		fclose($handle) ;
		?>
	<h4 class="lb small looped" id="counter-label">people who clicked this small red button</h4>
	<button class="red-button" onClick="window.location.reload()">a button</button>
	<div class="alfabeto">
		<div class="alphabet lb scrolled big">q w e r</div>
		<div class="alphabet lb scrolled big">t y u i</div>
		<div class="alphabet lb scrolled big">o p a s</div>
		<div class="alphabet lb scrolled big">d f g h</div>
		<div class="alphabet lb scrolled big">j k l z</div>
		<div class="alphabet lb scrolled big">x c v b</div>
		<div class="alphabet lb scrolled big">n m , :</div>
		<div class="alphabet lb scrolled big">! . " ?</div>
		<div class="alphabet lb scrolled big">' + - =</div>
		<div class="alphabet lb scrolled big">*</div>
	</div>
	
	<p class="">
		<div class="quote lb looped small">this is letterbolt, my animated js font.</div>
		<br>
		<div class="quote lb looped small">if interested, follow me to stay updated.</div>
		<a class="twitter" href="https://twitter.com/ruggeromotta">@ruggeromotta</a>
	</p>


</body>

</html>