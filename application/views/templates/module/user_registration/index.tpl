<div>
	<h1>user registration</h1>

	<fieldset title="account info">
		<label for="username">Username: </label>
			<input type="text" id="username"/><br/>
		<label for="password">Password: </label>
			<input type="password" id="password"/><br/>
		<label for="retyped_password">Confirm Password: </label>
			<input type="password" id="retyped_password"/><br/>
		<label for="user_role">Role: </label>
			<select id="user_role">
				{foreach from=$html_array item=html}
					{$html}
				{/foreach}
			</select>

		<input type="submit" value='Register' onclick="registerUser()"/>
		<label id="message" for="message"></label>
	</fieldset>


</div>