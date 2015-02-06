<?php /* Smarty version Smarty-3.1.19, created on 2014-12-03 06:15:05
         compiled from "..\templates\contacto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12690547e9c598f2740-56030246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9de4c2f61ede414dfbb7ae5004871ed9c641f77c' => 
    array (
      0 => '..\\templates\\contacto.tpl',
      1 => 1417583335,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12690547e9c598f2740-56030246',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_547e9c598f65c7_27772423',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547e9c598f65c7_27772423')) {function content_547e9c598f65c7_27772423($_smarty_tpl) {?><form role="form">
        <div class="form-group">
             <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
        </div>
        <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
</form>
<?php }} ?>
