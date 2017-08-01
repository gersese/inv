<?php /* Smarty version 2.6.30, created on 2017-07-30 12:16:57
         compiled from core/header.tpl */ ?>
<html>
<head>
<?php $_from = $this->_tpl_vars['htmlhead']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['head']):
?>
	<?php echo $this->_tpl_vars['head']; ?>

<?php endforeach; endif; unset($_from); ?>
</head>
<script type="text/javascript">
	$.noConflict();
</script>
<title>Sample</title>
<body>
<div id="wrapper">