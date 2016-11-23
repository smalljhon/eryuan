<?php /* Smarty version Smarty-3.1.6, created on 2016-11-21 22:32:46
         compiled from "./Admin/Tpl\Node\add.html" */ ?>
<?php /*%%SmartyHeaderCode:253905833058ee44101-45193344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5be9b6624f7808d5ce5daab933d2b3527cfda81' => 
    array (
      0 => './Admin/Tpl\\Node\\add.html',
      1 => 1393405586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '253905833058ee44101-45193344',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5833058ee9dd2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5833058ee9dd2')) {function content_5833058ee9dd2($_smarty_tpl) {?>
<div class="pageContent">
	<form method="post" action="__URL__/insert/navTabId/listnode/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><<?php ?>?php  //窗体组件采用这个 iframeCallback(this, navTabAjaxDone); ?<?php ?>>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>节点名称：</dt>
				<dd><input type="text" class="required"  style="width:100%" name="name"/></dd>
			</dl>
			<dl>
				<dt>模块名：</dt>
				<dd><input type="text"  style="width:100%" name="mname"/></dd>
			</dl>
			<dl>
				<dt>动作名：</dt>
				<dd><input type="text"  style="width:100%" name="aname"/></dd>
			</dl>
			<dl>
				<dt>状态：</dt>
				<dd><input type="radio" name="status" value="1" checked/>启用
					<input type="radio" name="status" value="0"/>禁用
				</dd>
			</dl>
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