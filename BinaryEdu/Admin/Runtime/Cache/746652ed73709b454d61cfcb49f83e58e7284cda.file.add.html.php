<?php /* Smarty version Smarty-3.1.6, created on 2016-11-21 22:33:17
         compiled from "./Admin/Tpl\Cat\add.html" */ ?>
<?php /*%%SmartyHeaderCode:3941583305adc09027-78553447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '746652ed73709b454d61cfcb49f83e58e7284cda' => 
    array (
      0 => './Admin/Tpl\\Cat\\add.html',
      1 => 1392629052,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3941583305adc09027-78553447',
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
  'unifunc' => 'content_583305adc5fa1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583305adc5fa1')) {function content_583305adc5fa1($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'D:\\work\\projects\\eryuan\\code\\ThinkPHP\\Extend\\Vendor\\Smarty\\plugins\\function.html_options.php';
?>
<div class="pageContent">
	<form method="post" action="__URL__/insert/navTabId/listcat/callbackType/closeCurrent" class="pageForm required-validate" onsubmit="return iframeCallback(this,dialogAjaxDone);"><<?php ?>?php  //窗体组件采用这个 iframeCallback(this, navTabAjaxDone); ?<?php ?>>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>父类：</dt>
                <dd><?php echo smarty_function_html_options(array('name'=>'pid','options'=>$_smarty_tpl->tpl_vars['myOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['mySelect']->value),$_smarty_tpl);?>
</dd>
            </dl>
            <dl>
				<dt>子类名：</dt>
				<dd><input type="text" style="width:100%" name="name"/></dd>
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