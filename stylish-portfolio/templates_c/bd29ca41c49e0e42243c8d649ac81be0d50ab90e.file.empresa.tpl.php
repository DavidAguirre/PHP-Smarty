<?php /* Smarty version Smarty-3.1.19, created on 2014-10-05 19:07:35
         compiled from "..\templates\empresa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1499654317ad7b9b5e5-01760886%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd29ca41c49e0e42243c8d649ac81be0d50ab90e' => 
    array (
      0 => '..\\templates\\empresa.tpl',
      1 => 1412528798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1499654317ad7b9b5e5-01760886',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54317ad7c00ef7_09536289',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54317ad7c00ef7_09536289')) {function content_54317ad7c00ef7_09536289($_smarty_tpl) {?><header>
	  <link  href="../css/empresa.css" rel="stylesheet" type="text/css">
	
	 

</header>
<nav id="menu_empresa">
	<ul>
		<li class="active_empresa"><a href="#p1">Section 1</a></li>
		<li class="active_empresa"><a href="#p2">Section 2</a></li>
		<li class="active_empresa"><a href="#p3">Section 3</a></li>
		<li class="active_empresa"><a href="#p4">Section 4</a></li>
	</ul>
</nav>

<section id="viewport_empresa" class="loading">

	<div id="container_empresa">
		<section id="rotator">
		
			<div id="intro">
				<i class="fa fa-smile-o"></i>
			</div>
			
	    	<section id="p1" class="page_empresa">
	    		<h1>Section 1</h1>
	    		<p>Porta habitasse augue aliquet mattis porttitor nec sed, purus! In augue urna phasellus! Nascetur dictumst, et sagittis nec integer, aliquet ultricies placerat magna diam ut nec, eu tincidunt parturient! Sed porttitor pellentesque augue proin sit, cum scelerisque vel hac sagittis ultricies.</p>
	    	</section>
	    	
	    	<section id="p2" class="page_empresa">
	    		<h1>Section 2</h1>
	    		<p>Porta habitasse augue aliquet mattis porttitor nec sed, purus! In augue urna phasellus! Nascetur dictumst, et sagittis nec integer, aliquet ultricies placerat magna diam ut nec, eu tincidunt parturient! Sed porttitor pellentesque augue proin sit, cum scelerisque vel hac sagittis ultricies.</p>
	    	</section>
	    	
	    	<section id="p3" class="page_empresa">
	    		<h1>Section 3</h1>
	    		<p>Porta habitasse augue aliquet mattis porttitor nec sed, purus! In augue urna phasellus! Nascetur dictumst, et sagittis nec integer, aliquet ultricies placerat magna diam ut nec, eu tincidunt parturient! Sed porttitor pellentesque augue proin sit, cum scelerisque vel hac sagittis ultricies.</p>
	    	</section>
	    	
			<section id="p4" class="page_empresa">
	    		<h1>Section 4</h1>
	    		<p>Porta habitasse augue aliquet mattis porttitor nec sed, purus! In augue urna phasellus! Nascetur dictumst, et sagittis nec integer, aliquet ultricies placerat magna diam ut nec, eu tincidunt parturient! Sed porttitor pellentesque augue proin sit, cum scelerisque vel hac sagittis ultricies.</p>
	    	</section>
    	
		</section>
	</div>

</section>
 
<script type="text/javascript">

	var ww, wh;

function adjustSizes(){
	ww = $(window).width();
	wh = $(window).height();
	
	if (ww > wh) $('#rotator').css({ 'width' : wh, 'height' : wh, 'left' : ((ww / 2) - (wh / 2)) });
	else $('#rotator').css({ 'width' : ww, 'height' : ww, 'left' : 0 });
}

$(function(){

	adjustSizes();
	$(window).resize(function(){ adjustSizes(); });
	
	setTimeout(function(){	 
		$('#viewport_empresa').removeClass('loading'); 
	}, 1000);
	
	// on click
	$('#menu_empresa a').click(function(e){
		e.preventDefault();
		
		if ($(this).parents('li').hasClass('active_empresa')){
			
			$('#menu li').removeClass('active_empresa');
			$(this).parents('li').addClass('active_empresa');
			
			$('#viewport_empresa').addClass('zoom');
		
			mytarget = $(this).attr('href');
			myindex = $(mytarget).index('.page_empresa') + 1;
			
			$('#rotator').removeClass();
			$('#rotator').addClass('r' + myindex);
			
			setTimeout(function(){	 
	    		$('#viewport_empresa').removeClass('zoom'); 
	    	}, 900);
		}
		
	});
	
});







</script><?php }} ?>
