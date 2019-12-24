<h2>Новость</h2>

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

		{foreach $rsProducts as $item name=products}
			<tr>
				<td>{$smarty.foreach.products.iteration}</td>
				<td>{$item['id']}</td>
				<td>
					<input type="edit" id="itemName_{$item['id']}" value="{$item['name']}"/>
				</td>
				<td>
					<textarea id="itemDesc_{$item['id']}" style="margin: 0px; width: 322px; height: 196px;">
						{$item['description']}
					</textarea>
				</td>
				<td>
					{if $item['image']}
					<img src="/images/products/{$item['image']}" width="150" />
					{/if}
				</td>
				<td>
					<input type="button" value="Сохранить" onclick="updateProduct('{$item['id']}');">
				</td>
			</tr>
		{/foreach}

	</table>