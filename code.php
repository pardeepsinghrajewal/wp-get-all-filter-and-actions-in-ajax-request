<?php 

/** use one of these code **/

/** WC **/
if(strpos($hook_name, 'coupon') !== false) 
{
  $firstTime = 0;
  $wp_filter_list[] = $hook_name;
  error_log(' * apply_filters * ');
  error_log($hook_name);
  error_log(' ');
}
/** WC **/



/** WC **/
global $wp_filter_list;
if(strpos($hook_name, 'coupon') !== false) 
{
  static $firstTime = 1;
  if( $firstTime || (is_array($wp_filter_list) && !in_array($hook_name, $wp_filter_list)) )
  {
    $firstTime = 0;
    $wp_filter_list[] = $hook_name;
    error_log(' * add_filter * ');
    error_log($hook_name);
    error_log(' ');
  }
}
/** WC **/
?>