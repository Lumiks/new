<?php // Файл настройки
// Константы для обращения к контроллерам
define ('PathPrefix', '../controllers/');
define ('PathPostfix', 'Controller.php');

// Используемый шаблон
$template = 'default';
$templateAdmin = 'admin';

// Пути к файлам Шаблонов (*.tpl)
define ('TemplatePrefix', "../views/{$template}/");
define ('TemplateAdminPrefix', "../views/{$templateAdmin}/");
define ('TemplatePostfix', '.tpl');

// Пути к файлам шаблонов в вебпространстве (в папке www)
define ('TemplateWebPath', "/templates/{$template}/");
define ('TemplateAdminWebPath', "/templates/{$templateAdmin}/");
//

// Инициализация  Smarty
require('../library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('../tmp/smarty/templates_c');// Откомпелированые шаблоны
$smarty->setCacheDir('../tmp/smarty/cache');// файлы для кеширования 
$smarty->setConfigDir('../library/Smarty/configs');

$smarty->assign('teplateWebPath', TemplateWebPath);
