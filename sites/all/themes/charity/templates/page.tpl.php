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
  <header id="heading" class="l-header grid">
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
  
  <section id="core-outer-wrapper" class="l-outer grid">
  
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

  <main class="l-main">
    





  <section class="region-content region-content__color grid">
      <div class="col-1">
          <h2>New Events </h2>
              <p>cancer research uk</p>
        </div>
    </section><!-- .events -->
  

    <section class="col-2 grid">

    <div class="col-2__title"><h2 class="content-title">Mission</h2></div>
    
        <ul>
  
          <li>
          <p>test</p>
          </li>
          <li>
          <p>test2</p>
          </li>
          <li>
           <p>test3</p>
          </li>
        </ul>
      </section>


      <section class="col-2 grid">
      <div class="col-2__title"><h2 class="content-title">Mission</h2></div>
    
        <ul>
  
          <li>
          <p>test</p>
          </li>
          <li>
          <p>test2</p>
          </li>
          <li>
           <p>test3</p>
          </li>
        </ul>
      </section>
        </section>









        <section class="col-1 grid">
            <ul>
                <li>
                   <p>test3</p>
                  </li>
      
              <li>
               <p>test3</p>
              </li>
              <li>
                <p>test3</p>
              </li>
              <li>
               <p>test3</p>
              </li>
            </ul>
          </section>


          <section class="col-1 grid">
          <ul>
                <li>
                   <p>test3</p>
                  </li>
      
              <li>
               <p>test3</p>
              </li>
              <li>
                <p>test3</p>
              </li>
              <li>
               <p>test3</p>
              </li>
            </ul>
            </section>
  

  </main>
  
  <footer class="colophon grid">

    <div class="more-content">
        <h2 class="content-title">Footer</h2>
        <p>Test<p>
      </div><!-- .more-content -->

  </footer>
