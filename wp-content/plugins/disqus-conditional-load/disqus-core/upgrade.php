<?php
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die('Damn it.! Dude you are looking for what?');
}
require(ABSPATH . 'wp-includes/version.php');

if ( !current_user_can('manage_options') ) {
    die();
}

$step = (isset($_GET['step']) ? $_GET['step'] : null);

?>
<div class="wrap">
    <h2><?php echo dsq_i('Upgrade Disqus Comments'); ?></h2>
    <form method="POST" action="?page=disqus&amp;step=<?php echo esc_attr($step); ?>">
        <?php wp_nonce_field('dsq-wpnonce_upgrade', 'dsq-form_nonce_upgrade'); ?>
        <p><?php echo dsq_i('You need to upgrade your database to continue.'); ?></p>

        <p class="submit" style="text-align: left">
            <input type="submit" name="upgrade" class="button-primary button" value="Upgrade &raquo;" />
        </p>
    </form>
</div>