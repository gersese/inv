<?php /* Smarty version 2.6.30, created on 2017-08-01 07:09:31
         compiled from module/login/index.tpl */ ?>

<div style="border:0px solid #000; margin:100px auto; width: 70%;">
	<!-- <form id="login_form" method="post"> -->
	<table width="100%" cellpadding="0" cellspacing="0" style="table-layout: fixed; ">
		<tr>
			<td style="border:0px solid #d3d3d3"><div><img src="<?php echo $this->_tpl_vars['global_dec']['imgpath']; ?>
/logo-gca.png" style="width: 410px"></div></td>
			<td  style="padding-left:95px;"><div style="width: 100%; ">
				<table style="width:100%">
					<tr>
						<td style="padding-bottom: 24px; font-weight: bold;">Online Inventory System</td>
					</tr>
					<tr>
						<td>
							<span class="log_lbl">Username</span>
						</td>
					</tr>
					<tr>
						<td>
							<input id="username" type="text" class="reg_inp_bx">
						</td>
					</tr>
					<tr>
						<td>
							<span class="log_lbl">Password</span>
						</td>
					<tr>
						<td>
							<input id="password" type="password" class="reg_inp_bx">
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" value="Login" onclick="login()" />
						</td>
					</tr>
				</table>
			</div></td>
		</tr>
	</table>
	<!-- </form> -->
</div>