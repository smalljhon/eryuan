<?php /* Smarty version Smarty-3.1.6, created on 2016-11-21 22:33:33
         compiled from "./Admin/Tpl\Test\add.html" */ ?>
<?php /*%%SmartyHeaderCode:15585583305bde28a88-57841454%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba411e36c4770066e0ee00a198b4897e5702beb0' => 
    array (
      0 => './Admin/Tpl\\Test\\add.html',
      1 => 1392733458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15585583305bde28a88-57841454',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'myOptions' => 0,
    'mySelect' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_583305bde759d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583305bde759d')) {function content_583305bde759d($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'D:\\work\\projects\\eryuan\\code\\ThinkPHP\\Extend\\Vendor\\Smarty\\plugins\\function.html_options.php';
?>
<div class="pageContent">
	<form method="post" action="__URL__/insert/navTabId/listtest/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><<?php ?>?php  //窗体组件采用这个 iframeCallback(this, navTabAjaxDone); ?<?php ?>>
        <div class="pageFormContent" layoutH="60">
            <dl>
                <dt>试卷类型:</dt>
                <dd><?php echo smarty_function_html_options(array('name'=>'tid','options'=>$_smarty_tpl->tpl_vars['myOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['mySelect']->value),$_smarty_tpl);?>
</dd>
            </dl>
			<dl>
				<dt>试卷名:</dt>
				<dd><input type="text" class="required"  style="width:100%" name="title"/></dd>
			</dl>
		</div>
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">提交</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
			</ul>
		</div>
	</form>
</div>

<?php }} ?>