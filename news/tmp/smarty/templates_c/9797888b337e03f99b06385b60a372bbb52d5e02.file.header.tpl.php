<?php /* Smarty version Smarty-3.1.6, created on 2019-12-19 19:31:05
         compiled from "../views/default\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95724f68d95829a6e4-54800566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9797888b337e03f99b06385b60a372bbb52d5e02' => 
    array (
      0 => '../views/default\\header.tpl',
      1 => 1576673472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95724f68d95829a6e4-54800566',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4f68d95849501',
  'variables' => 
  array (
    'pageTitle' => 0,
    'teplateWebPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f68d95849501')) {function content_4f68d95849501($_smarty_tpl) {?><html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
css/main.css" type="text/css" /> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"><!-- bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script><!-- js -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script><!-- js -->
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script><!-- шрифт-->
  </head>
  <body>
    <!--Шапка сайта-->
      <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container-fuid">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">

              <li class="nav-item active">
                <a href="http://test/" class="nav-link">Главная</a>
              </li>

              <li class="nav-item active">
                <a href="http://test/admin/" class="nav-link">Управление новостью</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>
           
<div id="centerColumn">

<?php }} ?>