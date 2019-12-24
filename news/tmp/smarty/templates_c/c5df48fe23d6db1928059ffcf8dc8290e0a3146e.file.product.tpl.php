<?php /* Smarty version Smarty-3.1.6, created on 2019-12-19 19:43:29
         compiled from "../views/default\product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1302679645d953347d81184-27867667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5df48fe23d6db1928059ffcf8dc8290e0a3146e' => 
    array (
      0 => '../views/default\\product.tpl',
      1 => 1576773579,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1302679645d953347d81184-27867667',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5d953347da45d',
  'variables' => 
  array (
    'rsProduct' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d953347da45d')) {function content_5d953347da45d($_smarty_tpl) {?>
<h3><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
</h3>

<img width="575" src="/images/News/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
">

<p> Описание <br /><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>
</p><?php }} ?>