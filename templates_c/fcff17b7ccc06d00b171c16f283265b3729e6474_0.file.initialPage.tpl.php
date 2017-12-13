<?php
/* Smarty version 3.1.30, created on 2017-12-13 11:52:58
  from "/usr/users2/mieec2012/ee12144/public_html/trabalhosSiem/trabalhoPHP-2/templates/initialPage/initialPage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a31149adec165_85296626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcff17b7ccc06d00b171c16f283265b3729e6474' => 
    array (
      0 => '/usr/users2/mieec2012/ee12144/public_html/trabalhosSiem/trabalhoPHP-2/templates/initialPage/initialPage.tpl',
      1 => 1513165604,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:menu/menu.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5a31149adec165_85296626 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<body>
  <?php $_smarty_tpl->_subTemplateRender("file:menu/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


  <div class="containerPagPrincipal">
      <div class="cover">
        <p class="TextCover">TRAVEL WITH US </p>
        <p class="TextCover" style="margin-top:0em; margin-bottom:20em;font-size:1.5em;"> KombiWithUs and get a unique experience with your familly or your friends </p>
      </div>

      <div style="  grid-row-start: 2; grid-row-end: 3; background-color: red;">
      </div>
      <div style="  grid-row-start: 3; grid-row-end: 4; background-color: blue;">
      </div>
      <div style="  grid-row-start: 4; grid-row-end: 5; background-color: red;">
      </div>
      <div style="  grid-row-start: 5; grid-row-end: 6; background-color: blue;">
      </div>
  </div>


<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
