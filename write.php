<?php
if (!preg_match("/^380\d{9}$/", $_POST['phone']))
{
echo "Номер введен неверно. Попробуйте еще раз.";
}
elseif (!preg_match("/^\S{36}$/i", $_POST['api']))
{
echo "API ключ введен неверно. Попробуйте еще раз.";
}
else
{
$fp1 = fopen('phone.ini', 'a');
fwrite($fp1, $_POST['phone']."\n");
$fp2 = fopen('api_key.ini', 'a');
fwrite($fp2, $_POST['api']."\n");
fclose($fp1);
fclose($fp2);
echo "Регистрация прошла успешно! После обновления vstup.info Вам прийдет СМС!";
}
?>