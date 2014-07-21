<?php

require_once
"../_phpwebdriver/__init__.php";
$host = 'http://localhost:9515'; // this is the default
$capabilities = array(WebDriverCapabilityType::BROWSER_NAME => 'chrome');
//$capabilities = array(WebDriverCapabilityType::BROWSER_NAME =>'firefox');
//$capabilities = array(WebDriverCapabilityType::BROWSER_NAME =>'opera');
$webdriver = RemoteWebDriver::create($host, $capabilities);
$webdriver->manage()->timeouts()->implicitlyWait(100);