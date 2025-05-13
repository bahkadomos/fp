<!DOCTYPE html>
<html>
<body>

<h1>My First Heading</h1>
<p>My first 222 paragraph.</p>
<?php
var_dump($_SERVER);
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
?>
<script >IPmy = "<?=$ip?>"</script>

<script  type="text/javascript" charset="UTF-8" src="clientsafe.js"></script>
<script>
try {
  document.addEventListener("DOMContentLoaded", function(){ProcessFingerprint(false, "czt86nmp42e5pulx7yb56v9k6mby0gjyjx1iv46dvgw53tvbez8r1pnfo4i062ho")})

}
catch(err) {
  f = localStorage.getItem("FP");
  if (!f){
	 xhttp.open("GET", "err.php");
	xhttp.send(); 
	console.log("you got some critical err")
  }

}


</script>

</body>
</html>
