<?php /* Smarty version Smarty-3.1.6, created on 2019-12-17 21:54:32
         compiled from "../views/default\page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20716307985df9221ec61524-66661628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4492a32da18b0fd61ebbbcace4fe7454ebd18962' => 
    array (
      0 => '../views/default\\page.tpl',
      1 => 1576608722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20716307985df9221ec61524-66661628',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5df9221ec91fa',
  'variables' => 
  array (
    'rsInfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5df9221ec91fa')) {function content_5df9221ec91fa($_smarty_tpl) {?><h3><?php echo $_smarty_tpl->tpl_vars['rsInfo']->value['name'];?>
</h3>

<img width="575" src="/images/News/<?php echo $_smarty_tpl->tpl_vars['rsInfo']->value['image'];?>
">

<p> Описание <br /><?php echo $_smarty_tpl->tpl_vars['rsInfo']->value['description'];?>
</p>

<?php }} ?>