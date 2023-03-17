<div class="wrap">
  <h1><?php _e( 'Speed Kit', 'baqend' ); ?> &rsaquo; <?php _e( 'Upgrade', 'baqend' ); ?></h1>

  <?php include 'tabs.php'; ?>

  <div class="upgrade-hero">
    <h2><?php _e('Upgrade Speed Kit Now!', 'baqend'); ?></h2>
  </div>

  <ol class="upgrade-promo">
    <li class="upgrade-promo-feature">
      <img src="<?php echo plugin_dir_url(__DIR__); ?>img/upgrade1.png" alt="Timer" width="250" height="250">
      <span>
        <?php _e('50-300% <br> <strong>Faster Page Loads</strong>', 'baqend'); ?>
        <i class="badge badge-green iqon-badge">
          <i class="iqon-badge-check"></i>
        </i>
      </span>
    </li>
    <li class="upgrade-promo-feature">
      <img src="<?php echo plugin_dir_url(__DIR__); ?>img/upgrade2.png" alt="Desktop, Mobile and Tablet" width="250" height="250">
      <span>
        <?php _e('Works With Your <strong>Current Site</strong>', 'baqend'); ?>
        <i class="badge badge-green iqon-badge">
          <i class="iqon-badge-check"></i>
        </i>
      </span>
    </li>
    <li class="upgrade-promo-feature">
      <img src="<?php echo plugin_dir_url(__DIR__); ?>img/upgrade3.png" alt="Globe Diagram" width="250" height="250">
      <span>
        <?php _e('Gives Your WordPress <strong>Scalability</strong>', 'baqend'); ?>
        <i class="badge badge-green iqon-badge">
          <i class="iqon-badge-check"></i>
        </i>
      </span>
    </li>
    <li class="upgrade-promo-feature">
      <img src="<?php echo plugin_dir_url(__DIR__); ?>img/upgrade4.png" alt="Performance Research" width="250" height="250">
      <span>
        <?php _e('State of the Art <strong>Guaranteed</strong>', 'baqend'); ?>
        <i class="badge badge-green iqon-badge">
          <i class="iqon-badge-check"></i>
        </i>
      </span>
    </li>
  </ol>

  <div class="upgrade-hero">
    <p class="about-text"><?php echo sprintf( __('You already used <strong>%d%%</strong> of your free tier. <br> Upgrade to keep your WordPress <strong>fast</strong>!', 'baqend'), $stats->percent ); ?></p>
    <a class="button button-primary button-hero button-baqend" href="https://dashboard.baqend.com/app/<?php echo $app_name; ?>/checkout#limit" target="_blank">
      <span><?php _e('Upgrade to Pay-as-you-Go', 'baqend') ?></span>
    </a>
  </div>
</div>
