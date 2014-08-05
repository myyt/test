<html>
    <head>
        <title>{BeS} [..::HaCk::..]</title>
    </head>
    <body>
        <form method="POST">
        Login: <input type="text" name="login">
        <br>
        <input type="submit" value="OK">
        </form>
        <?php
            if (isset($_POST['login']))
            if ($_POST['login'] != '')
            {
                $login = $_POST['login'];
                echo $_POST['login'].'<BR>';
                $fp = fopen('base.php', 'r');// Имя базы
                while (!feof ($fp)) {
                    $buffer = fgets($fp);
                    if (strpos($buffer,$login) !== false)
                    {
                        echo $buffer.'<BR>';
                        break;
                    }
                }
                fclose($fp);
            }
        ?>
    </body>
</html>