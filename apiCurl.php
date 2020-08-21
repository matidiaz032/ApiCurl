<?php
   $cliente = curl_init();
   $httpheader = ["access_key = 1aad8cf1100eb43ad4fb677a85a783e2"];
   $url = "http://data.fixer.io/api/latest?access_key=1aad8cf1100eb43ad4fb677a85a783e2&symbols=USD";

   curl_setopt($cliente, CURLOPT_URL, $url);
   curl_setopt($cliente, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($cliente, CURLOPT_HTTPHEADER, $httpheader);
	$result = curl_exec($cliente);
   curl_close($cliente);
   
   $data = json_decode($result, true);
   $usd = $data['rates']['USD'];
   $eur = $data['base'];
   echo("1 ".$eur." es igual a ".$usd." USD");
?>