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
  <header class="l-header">
      <div class="col-1">
      <div class="logo">open charity</div>
      </div>
  </header><!-- .header -->
  
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
