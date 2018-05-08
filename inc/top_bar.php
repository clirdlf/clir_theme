<?php
// Top-bar customization

if( $display_top_bar == 'yes' ):?>
<div class="top-bar">
<div class="<?php echo $header_container; ?>">
<div class="top-bar-left">
<nav class="top-bar-menu clir-custom-menu">
<li class="menu-item menu-item-type-custom menu-item-object-custom">
<a href="https://publications.clir.org">
<i class="icon-clir-logo-square anchor-color bigger"></i><span class="clir-font">CLIR</span>
</a>
</li>

<li class="menu-item menu-item-type-custom menu-item-object-custom">
<a href="https://publications.clir.org"><span>Publications</span></a>
</li>
</nav>
<?php // alchem_get_topbar_content( $top_bar_left_content );?>
</div>
  <div class="top-bar-right">

  <ul class="list-inline">
  <li class="dropdown high-z">
  <a href="#" class="dropdown-tottle" data-toggle="dropdown">
  <i class="icon-clir-logo header-logo-size"></i>
  CLIR Programs
  <i class="fa fa-angle-down"></i>
  </a>
  <ul class="dropdown-menu dropdown-menu-right" aria-labelled-by="clir-programs" role="menu">
  <li><a href="https://www.diglib.org/">Digital Library Federation</a></li>
  <li><a href="#">Digital Library of the Middle East</a></li>
  <li><a href="#">Digitizing Hidden Special Collections and Archives</a></li>
  <li><a href="http://www.leadingchangeinstitute.org">Leading Change Institute</a></li>
  <li><a href="#">Data Curation (escience institute?)</a></li>
  <li><a href="#">Postdoctoral Fellowship Program</a></li>
  <li><a href="#">CIOs in Library Arts Colleges</a></li>
  <li><a href="#">Rovelstad Scholarship in International Librarianship</a></li>
  <li><a href="#">Mellon Fellowships for Dissertation Research</a></li>
  <li><a href="http://coherence.clir.org/">Committee on Coherence at Scale for Higher Education</a></li>
  </ul>
  </li>
  </ul>
  <?php //alchem_get_topbar_content( $top_bar_right_content );?>
</div>
  </div>
  <div class="clear"></div>
  </div>
  <?php endif;?>
