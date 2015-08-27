<!--
<img id="page-loading" src="/yanlaidance/sites/all/themes/designmd/images/loading.gif" alt="loading" />
-->
<div id="header" class="wrapper">
    <!-- BEGIN: #logo-->
      <?php if ($logo): ?>
      <div id="logo"  class="three columns alpha">  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a></div>
      <?php endif; ?>
    <!-- END: #logo -->

    <?php if ($site_name || $site_slogan) : ?>
	<div id="branding-wrapper">
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
	<?php if ($page['social']): ?>
	 <div id="social">
		<?php print render ($page['social']); ?>
	</div>
	<?php endif; ?> 
	<div class="clear"></div>
</div><!--END: #header -->
	
<!-- BEGIN: #slider -->	
	<?php if ($page['slider']): ?>
	<div id="slider-wrapper" class="wrapper">
		<div class="clear"></div>
			<?php print render($page['slider']); ?>
		<div class="clear"></div>
	</div>
	<?php endif; ?> 	
<!-- END: #slider -->

<!-- BEGIN: #menu -->
 <?php if($menu_bar = render($page['menu_bar'])): ?>
            <!-- MAIN NAV -->
            <div id="menu-bar-wrapper" class="wrapper">            
            	<div class="clear"></div>
            		<?php print $menu_bar; ?>   
                <div class="clear"></div>          
            </div>
 <?php endif;?>
  <!-- END: #menu -->
<div class="clear"></div>

<!--BEGIN: #content-->
<div id="content" class="wrapper">
 <?php if ($page['featured']): ?><div class="welcome"><?php print render($page['featured']); ?></div><?php endif; ?>
<!--
 <div class="divider"></div>
-->
<?php 
$actual_link = 'http://'.$_SERVER['HTTP_HOST'];
$image_path = '/'. drupal_get_path('theme', 'designmd'). '/images';
if($actual_link == 'http://shiyishen.com')
$image_path = '/yanlaidance/'. drupal_get_path('theme', 'designmd'). '/images';
?>

    <!--BEGIN: right content-->
    <div id="page" class="alignleft">
    
     <?php print $messages; ?>

 	 <?php print render($title_prefix); ?>
        <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
        <?php print render($page['content']); ?>
        <?php print $feed_icons; ?>
        <img style="" src="<?php print $image_path;?>/bg/dance-character.png" />
     
    </div><!--END: right content-->

    
    <!-- BEGIN: sidebar -->    
           <div id="sidebar" class="alignright">
           <a href="/yanlaidance/register"><img src="<?php print $image_path;?>/start-dancing-button.png" alt="start dancing button"/></a>
          <?php if ($page['sidebar_second']): ?> <?php print render($page['sidebar_second']); ?>   <?php endif; ?>
           </div>   
     <!--END: sidebar -->  
        
    <div class="clear"></div>
    <div class="divider"></div>
   
<?php //if ($page['postscript_first']): ?><div class="one-two"><div id="postscript-first">
<div class="block-views">
	<h2 class="block-title">Media</h2>
	<div class="report odd">
		<img class="source" src="<?php print $image_path;?>/postgazettelogo2.jpg" />
		<div class="summary">They were the chosen ones. Selected from more than 7,000 candidates across mainland China, Yanlai Wu and Ying Li met at the Beijing Dance Academy. <br />
		<a href="http://www.post-gazette.com/stories/ae/uncategorized/trained-in-china-as-children-two-dancers-reunite-in-pittsburgh-597754/" target="_blank">- Trained in China as children, two dancers reunite in Pittsburgh</a>
		</div>
	</div>
	<div class="report even">
		<img width="48px" height="56px;" class="source" src="<?php print $image_path;?>/wqed.png" />
		<div class="summary">Pick a few good sentences in the video to write a short summary here. So people don’t have to view the video to have a basic idea of what it is about. Also, this text can be index in search engine as a good commerce for the school. <br />
		<a href="http://www.wqed.org/tv/watch/?series=2&id=562" target="_blank">- Horizons</a>
		</div>		
	</div>
</div>
<?php //print render($page['postscript_first']); ?></div></div>
    
    <div class="clear hide"></div>
    <div class="divider hide"></div><?php //endif; ?>
       
    
<?php if ($page['postscript_second']): ?><div class="one-two last"><div id="postscript-second"><?php print render($page['postscript_second']); ?></div></div>
        
    <div class="clear"></div>
    <div class="divider"></div><?php endif; ?>
       
    
    <?php if ($page['postscript_third']): ?><div class="one-two"><div id="postscript-third"><?php print render($page['postscript_third']); ?></div> </div>
    
    <div class="clear hide"></div>
    <div class="divider hide"></div><?php endif; ?>
   
    
     <?php if ($page['postscript_fourth']): ?><div class="one-two last"><div id="postscript-fourth"><?php print render($page['postscript_fourth']); ?></div> </div>

    <div class="clear"></div><?php endif; ?>
       
    <?php if ($page['content_full']): ?>
    	<div class="clear"></div>
    	<div id="content_full"><?php print render($page['content_full']); ?></div>
      <div class="clear"></div><?php endif; ?>
        
</div><!--END: #content-->
 

 <?php if($page['footer_top']) : ?>
 <!--BEGIN: client logo-->
          <div id="client-logo">
            <?php print render ($page['footer_top']); ?>
             <div class="clear"></div>
        </div><!--END: #client logo-->
          <?php endif; ?>
        
<!--BEGIN: #footer-->
<div id="footer" class="wrapper">
<a href="contact"><img style="position:absolute;top:-20px;left:30px;" src="<?php print $image_path;?>/bg/address-icon.png" alt="map icon"/></a>
    
    <?php if ($page['footer_firstcolumn']): ?>
<div class="one-four">
<?php print render($page['footer_firstcolumn']); ?>
</div>
 <?php endif; ?>

        
    
      
    
    <?php if ($page['footer_secondcolumn']): ?>
<div class="one-three">
<?php print render($page['footer_secondcolumn']); ?>
</div>
 <?php endif; ?>
       
    

    
     <?php if ($page['footer_thirdcolumn']): ?>
<div class="one-three">
<?php print render($page['footer_thirdcolumn']); ?>
  </div>
 <?php endif; ?>
           
  
    
    
    <?php if ($page['footer_fourthcolumn']): ?>
<div class="one-three">
<?php print render($page['footer_fourthcolumn']); ?>
 </div>
 <?php endif; ?>
        
   
        

    
    <?php if ($page['footer_fifthcolumn']): ?>
<div class="one-four last">
<?php print render($page['footer_fifthcolumn']); ?>
</div>
 <?php endif; ?>
       
    

    <div class="clear"></div>
    
    <!--BEGIN: footer bottom-->
    <div class="footer-buttom">
    
    <?php if ($page['footer-a']): ?>
<?php print render($page['footer-a']); ?>
 <?php endif; ?>
       
        
    <?php if ($page['footer-b']): ?>
<?php print render($page['footer-b']); ?>
 <?php endif; ?>
       
        
        <div class="clear"></div>
    </div><!--END: footer bootom-->
    
</div><!--END: #footer-->
