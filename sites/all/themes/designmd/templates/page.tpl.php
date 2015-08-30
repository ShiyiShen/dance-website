<div id="header" class="container-fluid">
  <div class="row" id="sticky-header">
    <div class="col-lg-3 col-md-3 col-sm-8 col-xs-10">
    <!-- BEGIN: #logo-->
      <?php if ($logo): ?>
      <div id="logo">  
      	<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      </div>
      <?php endif; ?>
    <!-- END: #logo -->

    <?php if ($site_name || $site_slogan) : ?>
	<div id="branding">
		<?php if ($site_name) : ?>
			<?php if ($is_front) : ?>
				<h1 class="site-name"><a href="<?php print $base_path ?>" title="<?php print $site_name ?>"><?php print $site_name ?></a></h1>
			<?php endif; ?>
			<?php if (!$is_front) : ?>
				<h2 class="site-name"><a href="<?php print $base_path ?>" title="<?php print $site_name ?>"><?php print $site_name ?></a></h2>
			<?php endif; ?>
		<?php endif; ?>
		<?php if ($site_slogan) : ?>
			<div class='site-slogan'><?php print $site_slogan; ?></div>
		<?php endif; ?>
    </div>    
	<?php endif; ?>
	</div>
	
	<!-- BEGIN: #menu -->
 	<?php if($menu_bar = render($page['menu_bar'])): ?>        
       <div class="col-lg-9 col-md-9 col-sm-4 col-xs-2">            
           <?php print $menu_bar; ?>      
       </div>            
 	<?php endif;?>
  	<!-- END: #menu -->
</div>
<div class="row">
	<!-- BEGIN: #slider -->	
	<?php if ($page['slider']): ?>
	<div id="slider" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
		<?php print render($page['slider']); ?>
	</div>
	<?php endif; ?> 	
	<!-- END: #slider -->
</div>
</div><!--END: #header -->
	

<?php 
$actual_link = 'http://'.$_SERVER['HTTP_HOST'];
$image_path = '/'. drupal_get_path('theme', 'designmd'). '/images';
if($actual_link == 'http://shiyishen.com')
$image_path = '/yanlaidance/'. drupal_get_path('theme', 'designmd'). '/images';
?>

<!--BEGIN: #content-->
<div id="content" class="container">
 <div class="row" id="section-1">
 	<!-- #breadcrumb -->
 	<?php if ($breadcrumb):?> 
	 	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	 		<?php print $breadcrumb; ?>
	 	</div>
 	<?php endif;?>
 	<!-- /#breadcrumb -->
 		
	 <?php if ($page['featured']): ?>
	 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	  <?php print render($page['featured']); ?>
	 </div>
	 <?php endif; ?>
	 	
	 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <?php print render($title_prefix); ?>
	     <?php if ($title): ?><h1 class="title h-divider" id="page-title"><?php print $title; ?></h1><?php endif; ?>
	     <?php print render($title_suffix); ?>
	     <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
	     <?php print render($page['help']); ?>
	     <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>       
		 <?php print $messages; ?>
	</div>
	
     <?php if ($page['sidebar_first']): ?>    
        <!-- #sidebar -->
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"> 
          	<?php print render($page['sidebar_first']); ?>              
        </div><!-- /#sidebar -->   
      <?php endif; ?>
      
    <!--BEGIN: content-->
    <div id="main-content" class="<?php if ($page['sidebar_first'] || $page['sidebar_second']){ if($page['sidebar_first'] && $page['sidebar_second']) print 'col-lg-6 col-md-6 col-sm-12 col-xs-12'; else print 'col-lg-9 col-md-9 col-sm-12 col-xs-12';}else print 'col-lg-12 col-md-12 col-sm-12 col-xs-12'?>">     

        <?php print render($page['content']); ?>   
    </div><!--END: content-->
    
    <!-- BEGIN: sidebar --> 
    <?php if ($page['sidebar_second']): ?>    
       <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <?php print render($page['sidebar_second']); ?>   
        </div>  
     <?php endif; ?>
     <!--END: sidebar -->  
 </div>
 <div class="row" id="section-2">     
    <div class="divider"></div>
    	
	<?php if ($page['postscript_first']): ?>
	<div id="postscript-first" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<?php print render($page['postscript_first']); ?>
	</div>
	<?php endif; ?>

	<?php if ($page['postscript_second']): ?>
		<div id="postscript-second" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<?php print render($page['postscript_second']); ?>
		</div>
	<?php endif; ?>
 </div>
  <div class="row" id="section-3">        
    <?php if ($page['content_full']): ?>    	
    	<div id="content_full" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    		<?php print render($page['content_full']); ?>
    	</div>
    <?php endif; ?>  
   </div>  
    
   <div id="section-4" class="row">  
     <?php if ($page['content_full_second']): ?>    	
    	<div id="content_full_second" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    		<?php print render($page['content_full_second']); ?>
    	</div>
    <?php endif; ?>
   </div>
   
</div><!--END: #content-->
 
<div id="footer" class="container">
	<a href="contact">
		<img style="position:absolute;top:-40px;left:10px;" src="<?php print $image_path;?>/bg/address-icon.png" alt="map icon"/>
	</a>
    
	<?php if ($page['footer_firstcolumn']): ?>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<?php print render($page['footer_firstcolumn']); ?>
		</div>
	<?php endif; ?>

    <?php if ($page['footer_secondcolumn']): ?>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<?php print render($page['footer_secondcolumn']); ?>
		</div>
	<?php endif; ?>
</div><!--END: #footer-->
<div id="footer-buttom" class="container">
	<div class="row">
	    <!--BEGIN: footer bottom-->
	    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">   
	    <?php if ($page['footer_bottom']): ?>
			<?php print render($page['footer_bottom']); ?>
		 <?php endif; ?>
	    </div><!--END: footer bootom-->
	</div>
</div>
