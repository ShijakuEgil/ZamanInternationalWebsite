<h1>Zaman Theme Settings</h1>
<?php settings_errors(); ?>
<div class="zaman-popup-preview">
  <div class="zaman-popup">
    <h1 class="zaman-popup-h1"></h1>
    <h2 class="zaman-popup-h2"></h2>
    <div class="icon-wrapper">

    </div>
  </div>
</div>
<form method="post"  action="options.php">
  <?php settings_fields('zaman-settings-group'); ?>
  <?php do_settings_sections( 'zaman_theme' ); ?>
  <?php submit_button(); ?>
</form>
