<?php add_submenu_page( $parent_slug, $page_title, $menu_title, $capability, $menu_slug, $function ); ?>
<?php
function extra_post_info_page(){
?>
  <h1>WordPress Extra Post Info</h1>
  <form method="post" action="options.php">
    <?php settings_fields( 'extra-post-info-settings' ); ?>
    <?php do_settings_sections( 'extra-post-info-settings' ); ?>
    <table class="form-table">
      <tr valign="top">
      <th scope="row">Extra post info:</th>
      <td><input type="text" name="extra_post_info" value="<?php echo get_option( 'extra_post_info' ); ?>"/></td>
      </tr>
    </table>
    <?php submit_button(); ?>
  </form>

<?php
}
?>