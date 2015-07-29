<?php

if( ['is_page', 'about-us'])
{
    dynamic_sidebar('sidebar-about');
}
else {
dynamic_sidebar('sidebar-primary');
  }
?>
