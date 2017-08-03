<?php /* Smarty version 2.6.30, created on 2017-08-02 11:02:06
         compiled from page/column-2-leftsidebar.tpl */ ?>
<div style="font-size: 9pt; text-align: right; background: #303030; color:#d3d3d3">
	<div style="display: inline-block; margin: : 5px; ">Welcome&nbsp;<span><?php echo $this->_tpl_vars['username']; ?>
</span><div style="display:inline-block; padding:8px 20px 8px 25px; background: #565656; margin-left: 10px; "><input type="button" onclick="signOut()" value="Sign Out"/></div></div>
</div>
<div>
<div style="border:0px solid #000; display:inline-block; vertical-align: top; width:20%; height:130%; background: #232323; color:#ededed">
	<!-- Logo -->
	<div style="border:0px dashed #fc3;">
		<img src="<?php echo $this->_tpl_vars['global_dec']['imgpath']; ?>
/logo-gca-white.png" style="width: 260px">
	</div>
	<!-- menu -->
	<div style="margin-top:20px;">
		<ul class="menu-side-main">
			<li><a class="sidebar-links" href="#" onclick="showDashboard()">Dashboard</a></li>
			<li><a class="sidebar-links" href="#" onclick="showProducts()">Products</a></li>
			<li><a class="sidebar-links" href="#" onclick="showTransactions()">Transactions</a></li>
			<li><a class="sidebar-links" href="#" onclick="showPurchaseOrder()">Purchase Order</a></li>
			<li><a class="sidebar-links" href="#" onclick="showPreferences()">Preferences</a></li>
		</ul>
	</div>
</div>
<div style="border:0px solid #000; display:inline-block; width:79%;  vertical-align: top;">
	<div id="main" style="padding:20px;">
		<h1 class="none-cs">Dashboard</h1>
		<div class="breadcrumbs">
			<span>Dashboard&nbsp;</span>><span>&nbsp;home</span>
		</div>
		<hr style="border:none; border-bottom: 1px solid #d2d2d2;" />
		<div style="padding:10px; border:0px solid #000;">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['index'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</div>
	</div>
</div>
</div>