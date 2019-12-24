<?php /* Smarty version Smarty-3.1.6, created on 2019-12-18 13:46:52
         compiled from "../views/default\category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15547251665d91142521a967-77257941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76efe512959f670dcfbe2dc8447081a8ad91a48b' => 
    array (
      0 => '../views/default\\category.tpl',
      1 => 1576666011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15547251665d91142521a967-77257941',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5d91142529c4d',
  'variables' => 
  array (
    'rsProducts' => 0,
    'rsChildCats' => 0,
    'item' => 0,
    'rsCategory' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d91142529c4d')) {function content_5d91142529c4d($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['rsProducts']->value||$_smarty_tpl->tpl_vars['rsChildCats']->value){?>
		 <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsChildCats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		 	<h2><a href="/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></h2>
		 <?php } ?>

<h1> Товары категории <?php echo $_smarty_tpl->tpl_vars['rsCategory']->value['name'];?>
</h1>

		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']++;
?>
				<div style="float: left; padding: 0px 30px 40px 0px;">
					<a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
			           <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="100" />
       				</a><br />
       				 <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
    			</div>

	        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']%3==0){?>
	           <div style="clear: both;"></div>
	        <?php }?>
    	<?php } ?>

 <?php }else{ ?>
<h2 style="color:red"> <ins>404 Страница не найдена</ins>! </h2>
<?php }?>

<?php }} ?>