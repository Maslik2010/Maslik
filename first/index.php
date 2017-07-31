<!DOCTYPE HTML>
<head>
   <title>minidoc.by</title>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <link href="styles.css" rel="stylesheet">
   <script src="main.js"></script>
   <style>
  body { background: url(fon); no-repeat;
    background-size: 100%;
   }
   </style>
</head>
 <body>
  <h1 id="label" align="center"> Шоу программа "MiniDoc"</h1>
  <input onkeyup="VSPLIV()" type="text">
  <p onclick="H1Ficha()" align="center" onclick="VSPLIV()">  <img name="pic" src="apple-logo.ico" width="100" height="100" ">
  </p>
  <marquee behavior="alternate" direction="right"> <a target="_blank" href="http://privet.by/ru/"> 
  <button > НАЖМИ МЕНЯ</button>
  </marquee>
  <?php 
  function bel2usd($sum) {
    $result=$sum/1.9;
    return $result;
  }
  $result=bel2usd(20);
  $result=round($result,3);
  echo "<h1>$result</h1>";
  ?>
 </body>