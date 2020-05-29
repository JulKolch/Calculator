<!doctype html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <title>Ein einfacher Rechner</title>
  <style>
     body {
        text-align: center;
        font-family: 'Source Sans Pro', sans-serif;
      }

      .btn {
        background: #0033ee;
        border-radius: 10px;
        font-family: Times;
        color: #ffffff;
        font-size: 1em;
        text-decoration: none;
        width: 100px;
        height: 35px;
        vertical-align:middle;
        margin-left: 10px;
        margin-bottom: 8px;
      }

      input[type=text] {
        border-radius: 5px;
        height: 30px;
        width: 80px;
        background-color: #eeeeee;
        font-size: 20px;
      }

      select {
        width: 60px;
        height: 30px;
        border-radius: 5px;
        background-color: lightgrey;
        font-size: 20px;
      }

  </style>
</head>
<body>
  <main>
    <h1>Einfacher Rechner</h1>
    <h2>Was möchten Sie berechnen?</h2>
    <form action="calculator.php" method="GET">
      <input type="text" name="va">
      <select name="op">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
      </select>
      <input type="text" name="vb">
      <button class="btn" type="submit">Berechnen</button>
    </form>
    <?php
	$va = $_GET["va"];
	$vb = $_GET["vb"];
	/*if (is_integer($va) == true){*/
	if (is_numeric($va)&& is_numeric($vb)){
		
	switch($_GET["op"])
	{
    case "+":
	$erg = $va + $vb;
    echo "<h2>Ergebnis: $va + $vb = $erg</h2>";
    break; 
    case "-":
    $erg = $va - $vb;
    echo "<h2>Ergebnis: $va - $vb = $erg</h2>";
    break;
    case "*":
    $erg = $va * $vb;
    echo "<h2>Ergebnis: $va * $vb = $erg</h2>";
    break; 
    case "/":
   $erg = $va / $vb;
    echo "<h2>Ergebnis: $va / $vb = $erg</h2>";
    break;
	}
	}else{
	echo '<h2><span style="color:#FB0000;">Die Anfrage ist fehlerhaft! Bitte Überprüfen Sie die Parameter.</span></h2>';
	}
	?>

  </main>
</body>
</html>
