aside id="sidebar-container">
     <ul id="sidebar">
     <?php
          // If the sidebar is empty, output static content
          if ( !dyamic_sidebar( 'right-column' ) ) : ?>
          <li>Please add some widets to the <em>Right column</em> widget area!</li>
     <?php endif; ?>
     </ul>
</aside> <!-- #sidebar-container ends -->