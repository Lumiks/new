<?php /* Smarty version Smarty-3.1.6, created on 2019-12-19 19:43:21
         compiled from "../views/admin\adminHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17634945235dfa121948e2b5-73116695%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f57e82fa5ed0880e976fb6af9573ee08cc54de83' => 
    array (
      0 => '../views/admin\\adminHeader.tpl',
      1 => 1576773489,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17634945235dfa121948e2b5-73116695',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5dfa12194e027',
  'variables' => 
  array (
    'pageTitle' => 0,
    'teplateWebPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dfa12194e027')) {function content_5dfa12194e027($_smarty_tpl) {?>
<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
css/main.css" type="text/css" /> 
		<script type="text/javascript" src="/js/jquery-1.7.min.js"></script> 
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
js/admin.js"></script> 
    </head>    


<body>
	<div id="header" >
		<h1>Управление новостью</h1>
           <a href="http://test/" >Главная</a>
	</div>
		
<div id="centerColumn">

<?php }} ?>