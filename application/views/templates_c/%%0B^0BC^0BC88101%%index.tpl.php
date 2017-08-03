<?php /* Smarty version 2.6.30, created on 2017-08-03 06:05:27
         compiled from module/user_registration/index.tpl */ ?>
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
				<?php $_from = $this->_tpl_vars['html_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['html']):
?>
					<?php echo $this->_tpl_vars['html']; ?>

				<?php endforeach; endif; unset($_from); ?>
			</select>

		<input type="submit" value='Register' onclick="registerUser()"/>
		<label id="message" for="message"></label>
	</fieldset>


</div>