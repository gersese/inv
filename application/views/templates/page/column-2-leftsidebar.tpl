<div style="font-size: 9pt; text-align: right; background: #303030; color:#d3d3d3">
	<div style="display: inline-block; margin: : 5px; ">Welcome&nbsp;<span>{$username}</span><div style="display:inline-block; padding:8px 20px 8px 25px; background: #565656; margin-left: 10px; "><input type="button" onclick="signOut()" value="Sign Out"/></div></div>
</div>
<div>
<div style="border:0px solid #000; display:inline-block; vertical-align: top; width:20%; height:130%; background: #232323; color:#ededed">
	<!-- Logo -->
	<div style="border:0px dashed #fc3;">
		<img src="{$global_dec.imgpath}/logo-gca-white.png" style="width: 260px">
	</div>
	<!-- menu -->
	<div style="margin-top:20px;">
		<ul class="menu-side-main">
			<li>Dashboard</li>
			<li>Products</li>
			<li>Transaction</li>
			<li>Purchase Order</li>
			<li><input type="button" value="aws" onclick="showPreferences()"/></li>
		</ul>
	</div>
</div>
<div style="border:0px solid #000; display:inline-block; width:79%;  vertical-align: top;">
	<div style="padding:20px;">
		<h1 class="none-cs">Dashboard</h1>
		<div class="breadcrumbs">
			<span>Dashboard&nbsp;</span>><span>&nbsp;home</span>
		</div>
		<hr style="border:none; border-bottom: 1px solid #d2d2d2;" />
		<div style="padding:10px; border:0px solid #000;">
			{include file=$index}
		</div>
	</div>
</div>
</div>
