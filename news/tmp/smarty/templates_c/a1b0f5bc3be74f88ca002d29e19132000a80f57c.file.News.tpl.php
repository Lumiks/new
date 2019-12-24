<?php /* Smarty version Smarty-3.1.6, created on 2019-12-17 21:42:15
         compiled from "../views/default\News.tpl" */ ?>
<?php /*%%SmartyHeaderCode:897244755df909b49a46c9-25015094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1b0f5bc3be74f88ca002d29e19132000a80f57c' => 
    array (
      0 => '../views/default\\News.tpl',
      1 => 1576608131,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '897244755df909b49a46c9-25015094',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5df909b49cc55',
  'variables' => 
  array (
    'rsInfo' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5df909b49cc55')) {function content_5df909b49cc55($_smarty_tpl) {?>
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['rsInfo']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['rsInfo']['iteration']++;
?>
	    <div style="float: left; padding: 0px 30px 40px 0px;">
		    <a href="/page/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
	           <img src="/images/News/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="100" />
	        </a><br />
        <a href="/page/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
	    </div>

        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['rsInfo']['iteration']%3==0){?>
           <div style="clear: both;"></div>
        <?php }?>
    <?php } ?>

<?php }} ?>