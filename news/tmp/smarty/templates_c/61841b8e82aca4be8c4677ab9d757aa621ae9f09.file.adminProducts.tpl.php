<?php /* Smarty version Smarty-3.1.6, created on 2019-12-19 19:53:06
         compiled from "../views/admin\adminProducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10237661875dfa13342a72a0-21051352%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61841b8e82aca4be8c4677ab9d757aa621ae9f09' => 
    array (
      0 => '../views/admin\\adminProducts.tpl',
      1 => 1576774342,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10237661875dfa13342a72a0-21051352',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5dfa13342f0f4',
  'variables' => 
  array (
    'rsProducts' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dfa13342f0f4')) {function content_5dfa13342f0f4($_smarty_tpl) {?><h2>Новость</h2>

	<table border="1" cellpadding="1" cellspacing="1">
		<caption>Добавить новость</caption>
		<tr>
			<th>Название</th>
			<th>Описание</th>
			<th>Сохранить</th>
		</tr>

		<tr>
			<td>
				<input type="edit" id="newItemName" value=""/>
			</td>

			<td>
				<textarea id="newItemDesc"></textarea>
			</td>
			<td>
				<input type="button" value="Сохранить" onclick="addProduct();">
			</td>

		</tr>
	</table>

	<table border="1" cellpadding="1" cellspacing="1">
		<caption>Редактировать</caption>
		<tr>
			<th>N</th>
			<th>ID</th>
			<th>Название</th>
			<th>Описание</th>
			<th>Изображение</th>
			<th>Сохранить</th>
		</tr>

		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']++;
?>
			<tr>
				<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
				<td>
					<input type="edit" id="itemName_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
"/>
				</td>
				<td>
					<textarea id="itemDesc_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" style="margin: 0px; width: 322px; height: 196px;">
						<?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>

					</textarea>
				</td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['image']){?>
					<img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="150" />
					<?php }?>
				</td>
				<td>
					<input type="button" value="Сохранить" onclick="updateProduct('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
');">
				</td>
			</tr>
		<?php } ?>

	</table><?php }} ?>