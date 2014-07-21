<?php

require_once "_start.php";

$webdriver->get("http://www.karaoke.ru");


$webdriver->findElement(WebDriverBy::cssSelector('[name="q"]'))->sendKeys(['Фриске']);
$webdriver->getKeyboard()->pressKey(WebDriverKeys::ENTER);

$webdriver->findElement(WebDriverBy::cssSelector('[class="_login"]'))->click();
$webdriver->findElement(WebDriverBy::cssSelector('[id="frm-login_username"]'))->sendKeys('test12');
$webdriver->findElement(WebDriverBy::cssSelector('[id="frm-login_password"]'))->sendKeys('test1');
$webdriver->findElement(WebDriverBy::cssSelector('[name="_remember_me"]'))->click();
$webdriver->findElement(WebDriverBy::cssSelector('.submit [type="submit"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('[id="hello"]'));
if (strpos($block->getText(), 'Приветствуем, test12') === false)
    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[href="/logout/"]'))->click();

$webdriver->findElement(WebDriverBy::cssSelector('[class="_login"]'))->click();
$webdriver->findElement(WebDriverBy::cssSelector('[id="frm-login_username"]'))->sendKeys('     ');
$webdriver->findElement(WebDriverBy::cssSelector('[id="frm-login_password"]'))->sendKeys('test1');
$webdriver->findElement(WebDriverBy::cssSelector('[name="_remember_me"]'))->click();
$webdriver->findElement(WebDriverBy::cssSelector('.submit [type="submit"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('test1');
//$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
$webdriver->findElement(WebDriverBy::cssSelector('[id="_submit"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

//$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
//$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->clear();
//$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->click();
//$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys(' test12 ');
//$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->click();
//$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->click();
//$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('test1');
//$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
//$webdriver->findElement(WebDriverBy::cssSelector('[id="_submit"]'))->click();
//$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
//if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
//    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('TEST!@');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('test1');
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

//$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
//$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->clear();
//$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->click();
//$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('TeSt12');
//$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->click();
//$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->click();
//$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('test1');
//$webdriver->findElement(WebDriverBy::cssSelector('[id="_submit"]'))->click();
//$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
//if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
//    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('/.,,./');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('test1');
//$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('198645');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('test1');
$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('73648173468174681723678213687213687213687216348721368721638712634786487364837264872364832486531654634873264876325947574395374658263453645324687326473264873264873264876328463874687324683726487326487364873628452365476');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('test1');
$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('~`!@#$%^&*()_+<>?:"{}[];’');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('test1');
$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('еуые12');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('test1');
$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('test12');
$webdriver->getKeyboard()->pressKey(WebDriverKeys::BACKSPACE);
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('test1');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('test1');
$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('tes( )t12');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('test1');
$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('äöüÄÖÜß');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('test1');
$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('àâçéèêëîïôûùüÿ');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('test1');
$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('NÑO');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('test1');
$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('éàòù ÀàÁáÈèÉéÌìÍíÒòÓóÙùÚú');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('test1');
$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('中国的');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('test1');
$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('日本の');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('test1');
$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('한국의');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('test1');
$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys(' `~@#$%^&*()_+|-=\{}[]:”;’<>?,./®©£¥¢¦§«»€ ');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('test1');
$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('javascript:alert(\'1\')');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('test1');
$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('& < > ');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('test1');
$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('&quot; &apos; &amp; &lt; &gt');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('test1');
$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('“test" \'test’ & <test> <test\><script> <table>');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('test1');
$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('-13675643@');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('test1');
$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('1/34.4/98');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('test1');
$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

//$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
//$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('1/34,4/98');
//$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('test1');
//$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
//$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
//if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
//    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('1Е-16');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('test1');
$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('F0');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('test1');
$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');


$webdriver->close();

echo 'Ok';


///Данный автотест предназначен для проверки корректности восприятия поля Login на разные варианты вводимых значени. Поле Password заполняется корректными данными.