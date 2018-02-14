<?php
/**
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>
  <div class="wrapper">
  <header class="l-header">
    <div class="l-header__inner">
      <div class="branding">
             <?php if (theme_get_setting('branding_type') == 'logo'): ?>
                <div class="branding__logo">
                    <a href="<?php print base_path();?>"><img src="<?php print file_create_url(theme_get_setting('bg_path')); ?>" /></a></div>
            <?php endif; ?>
            <?php if (theme_get_setting('branding_type') == 'text'): ?>
            <a href="<?php print base_path();?>">
              <h1 class="branding__text"><?php print variable_get('site_name'); ?></h1>
              <h2 class="branding__slogan"><?php print variable_get('site_slogan'); ?></h2>
            </a>
            <?php endif; ?>
      </div>


        <?php if ($main_menu): ?>
        <div class="main-menu">
          <nav id ="main-menu" class="navigation clearfix" role="navigation">
            <?php print theme('links__system_main_menu', array(
              'links' => $main_menu,
              'attributes' => array(
                'class' => array('menu'),
              ),
              'heading' => array(
                'text' => t('Main menu'),
                'level' => 'h2',
                'class' => array('element-invisible'),
              ),
            )); ?>
          </nav> <!-- navigation -->
        </div>  
        <?php endif; ?>
    </div>
  </header><!-- .header -->
  
  <section id="core-outer-wrapper" class="l-outer">
  
    <div class="l-outer__inner">
    
     <div id="highlighted" class="highlighted">
      <?php print $messages; ?>
      
      <?php if ($breadcrumb): ?>
      <div id="breadcrumb"><?php print $breadcrumb; ?>
      </div>
      <?php endif; ?>
      
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
    
      <?php if ($page['highlighted']): ?>
        <?php print render($page['highlighted']); ?>
      <?php endif; ?>
    </div>
  </section>

    <?php
    // need some good cleanup on these default Drupal elements
    ?>

    
    <div class="region-first">
      <p>Left</p>
    </div>

    <div class="main-content">
      <p>Main cont</p>
    </div>

    <div class="region-second">
      <p>Right</p>
    </div>
   


   
    
  




  

          </div>
