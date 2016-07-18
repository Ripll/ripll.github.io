<?php
function getDB($file)
{
while(!feof($file))
{ 
echo fgets($file) . "\n";
}
}
if ($_GET['password'] != Gjez00ob6i99dpISGGg9)
{
echo "У вас нет доступа к этому фалу!";
}
elseif ($_GET['type'] == "phone")
{
$f = fopen("phone.ini", "r");
getDB($f);
fclose($f);
}
elseif ($_GET['type'] == "api_key")
{
$f = fopen("api_key.ini", "r");
getDB($f);
fclose($f);
}
else
{
echo "Error!";
}



?>