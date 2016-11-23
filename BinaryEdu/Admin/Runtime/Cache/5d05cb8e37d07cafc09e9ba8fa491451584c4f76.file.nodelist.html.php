<?php /* Smarty version Smarty-3.1.6, created on 2016-11-21 22:34:50
         compiled from "./Admin/Tpl\Roles\nodelist.html" */ ?>
<?php /*%%SmartyHeaderCode:83745833060a3ba0d8-10538897%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d05cb8e37d07cafc09e9ba8fa491451584c4f76' => 
    array (
      0 => './Admin/Tpl\\Roles\\nodelist.html',
      1 => 1392745000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83745833060a3ba0d8-10538897',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'role' => 0,
    'list' => 0,
    'vo' => 0,
    'mynode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5833060a4402b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5833060a4402b')) {function content_5833060a4402b($_smarty_tpl) {?>
<div class="pageContent">
	<form method="post" action="__URL__/savenode/navTabId/listrole/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><<?php ?>?php  //窗体组件采用这个 iframeCallback(this, navTabAjaxDone); ?<?php ?>>
		<input type="hidden" name="rid" value="<?php echo $_smarty_tpl->tpl_vars['role']->value['id'];?>
"/>
		<div class="pageFormContent" layoutH="60">
			<h3>当前角色:【<?php echo $_smarty_tpl->tpl_vars['role']->value['roletype'];?>
】的操作节点信息</h3>
			<?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
				<div style="width:140px;float:left;margin:5px;">
					<input type="checkbox" name="nid[]" <?php if (in_array($_smarty_tpl->tpl_vars['vo']->value['id'],$_smarty_tpl->tpl_vars['mynode']->value)){?>checked<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
"/><?php echo $_smarty_tpl->tpl_vars['vo']->value['name'];?>

				</div>
			<?php } ?>
		</div>
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
			</ul>
		</div>
	</form>
</div>
<?php }} ?>