<?php
		global $wpdb;

		$sql = "SELECT post_modified_gmt FROM $wpdb->posts  WHERE post_status='publish'  ORDER BY post_modified_gmt DESC  LIMIT 1";
		
		$last_update = $wpdb->get_var( $sql );
		
		$dateFun  = mysql2date('F d, Y',$last_update);
		
		$timeFun  = mysql2date('g:i a',$last_update);
		
		
?>

<p>Last Updated on <?php echo $dateFun.' at '.$timeFun; ?></p>
