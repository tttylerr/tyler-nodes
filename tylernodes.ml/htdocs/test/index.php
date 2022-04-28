<!DOCTYPE html>
<?php
$url = 'http://api.tylernodes.ml';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HEADER, true);    // we want headers
curl_setopt($ch, CURLOPT_NOBODY, true);    // we don't need body
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_TIMEOUT,10);
$output = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

echo 'HTTP code: ' . $httpcode;
?>
<html>
  <head>
    
  </head>
  <body>
    <h1> test </h1>
    <script src="jq.js"></script>
    <script>
      $.getJSON("http://api.tylernodes.ml", function(data) {
        console.log(data)
      })
    </script>
  </body>
</html>