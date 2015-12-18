<?php 
    if($_POST['admin_hidden'] == 'Y') {
        //Form data verzonden
        $dbhost = $_POST['admin_dbhost'];
        update_option('admin_dbhost', $dbhost);
         
        $dbname = $_POST['admin_dbname'];
        update_option('admin_dbname', $dbname);
         
        $dbuser = $_POST['admin_dbuser'];
        update_option('admin_dbuser', $dbuser);
         
        $dbpwd = $_POST['admin_dbpwd'];
        update_option('admin_dbpwd', $dbpwd);
        ?>
        <div class="updated"><p><strong><?php _e('Options saved.' ); ?></strong></p></div>
        <?php
    } else {
        //Normale page display
		$dbhost = get_option('admin_dbhost');
        $dbname = get_option('admin_dbname');
        $dbuser = get_option('admin_dbuser');
        $dbpwd = get_option('admin_dbpwd');
    }
?>
<div class="wrap">
    <?php    echo "<h2>" . __( 'Database connect settings', 'admin_trdom' ) . "</h2>"; ?>
     
    <form name="admin_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
        <input type="hidden" name="oscimp_hidden" value="Y">
        <?php    echo "<h4>" . __( 'Database Settings', 'admin_trdom' ) . "</h4>"; ?>
        <p><?php _e("Database host: " ); ?><input type="text" name="admin_dbhost" value="<?php echo $dbhost; ?>" size="20"><?php _e(" ex: dtsl.ehb.be" ); ?></p>
        <p><?php _e("Database name: " ); ?><input type="text" name="admin_dbname" value="<?php echo $dbname; ?>" size="20"><?php _e(" ex: WDAWP011" ); ?></p>
        <p><?php _e("Database user: " ); ?><input type="text" name="admin_dbuser" value="<?php echo $dbuser; ?>" size="20"><?php _e(" ex: WDAWP011" ); ?></p>
        <p><?php _e("Database password: " ); ?><input type="text" name="admin_dbpwd" value="<?php echo $dbpwd; ?>" size="20"><?php _e(" ex: 16349857" ); ?></p>     
     
        <p class="submit">
        <input type="submit" name="Submit" value="<?php _e('Update Options', 'admin_trdom' ) ?>" />
        </p>
    </form
    ></div>