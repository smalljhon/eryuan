<?php /* Smarty version Smarty-3.1.6, created on 2016-11-21 22:32:18
         compiled from "./Admin/Tpl\Public\pagerForm.html" */ ?>
<?php /*%%SmartyHeaderCode:2112758330572cadbb6-19131419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b58476071dcf322d7a032b16e5bfba3e2c4a166' => 
    array (
      0 => './Admin/Tpl\\Public\\pagerForm.html',
      1 => 1390292802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2112758330572cadbb6-19131419',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'currentPage' => 0,
    'numPerPage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58330572cc30b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58330572cc30b')) {function content_58330572cc30b($_smarty_tpl) {?><form id="pagerForm" action="__URL__/index" method="post">
	<input type="hidden" name="pageNum" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['currentPage']->value)===null||$tmp==='' ? '1' : $tmp);?>
" />
	<input type="hidden" name="numPerPage" value="<?php echo $_smarty_tpl->tpl_vars['numPerPage']->value;?>
" /><!--ÿҳ��ʾ������-->
	<input type="hidden" name="_order" value="<?php echo $_REQUEST['_order'];?>
"/>
	<input type="hidden" name="_sort" value="<?php echo $_REQUEST['_sort'];?>
"/>
</form><?php }} ?>