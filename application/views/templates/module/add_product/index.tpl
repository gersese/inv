<div>
	<h1>add product</h1>

	<fieldset title="product info">
		<label for="product_name">Product name: </label>
			<input type="text" id="product_name"/><br/>
		<label for="serial_number">Serial Number: </label>
			<input type="text" id="serial_number"/><br/>
		<label for="category">Category: </label>
			<select id="category">
				{foreach from=$html_array item=html}
					{$html}
				{/foreach}
			</select>

		<input type="submit" value='Add Product' onclick="addProduct()"/>
		<label id="message" for="message"></label>
	</fieldset>


</div>