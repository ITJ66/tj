<?php>

$valid_passwords = array ("111" => "222");
$valid_users = array_keys($valid_passwords);

$user = $_SERVER['PHP_AUTH_USER'];
$pass = $_SERVER['PHP_AUTH_PW'];

$validated = (in_array($user, $valid_users)) && ($pass == $valid_passwords[$user]);

if (!$validated) {
header ('text');
header ('text');
die ("Not authorized");
}

?>

<?PHP
$ch = curl_init('https://itj66.github.io/tj/index.html');
curl_exect($ch);
curl_close($ch);
?>





