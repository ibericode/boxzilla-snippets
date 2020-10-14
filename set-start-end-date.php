add_filter( 'boxzilla_load_box_500', function( $load ) { 
  return ! is_user_logged_in();
  $today = date('Y-m-d');
  $Date=date('Y-m-d', strtotime($today));
  $DateBegin = date('Y-m-d', strtotime("01/01/2020"));
  $DateEnd = date('Y-m-d', strtotime("03/01/2030"));
  
  if (($Date >= $DateBegin) && ($Date <= $DateEnd)) {
    return true;
  } else {
    return false;
  }
});
