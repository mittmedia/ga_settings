<?php global $site; ?>

<div class="wrap">
  <div id="icon-options-general" class="icon32"><br></div>
  <h2><?php _e( 'Google Analytics Settings', 'ga-settings' ); ?></h2>
  <?php

  $content = array(
    array(
      'title' => 'Använd Google Analytics',
      'name' => $site->sitemeta->ga_active->meta_key,
      'type' => 'select',
      'options' => array(
        'true' => 'Ja',
        'false' => 'Nej',
      ),
      'object' => $site->sitemeta->ga_active,
      'default_value' => \OasSettings\SettingsHelper::activation_option_to_text( $site->sitemeta->ga_active->meta_value ),
      'key' => 'meta_value'
    ),
    array(
      'title' => 'Script',
      'name' => $site->sitemeta->ga_script_block->meta_key,
      'type' => 'textarea',
      'object' => $site->sitemeta->ga_script_block,
      'default_value' => $site->sitemeta->ga_script_block->meta_value,
      'key' => 'meta_value',
      'description' => 'Script-tag för Google Analytics.'
    ),
    array(
      'title' => 'Tracking ID',
      'name' => $site->sitemeta->ga_tracking_id->meta_key,
      'type' => 'text',
      'object' => $site->sitemeta->ga_tracking_id,
      'default_value' => $site->sitemeta->ga_tracking_id->meta_value,
      'key' => 'meta_value',
      'description' => 'Denna parameter är INTE samma som Google Analytics Id UA-XXXXXXX-X utan fylls i av Superadmin'
    ),
    array(
      'title' => 'Access Token',
      'name' => $site->sitemeta->ga_access_token->meta_key,
      'type' => 'text',
      'object' => $site->sitemeta->ga_access_token,
      'default_value' => $site->sitemeta->ga_access_token->meta_value,
      'key' => 'meta_value',
      'description' => 'Den här textsnutten lyfts in i sin helhet på alla bloggar för att fyllas i av Superadmin'
    ),
    array(
      'title' => 'Request Token',
      'name' => $site->sitemeta->ga_request_token->meta_key,
      'type' => 'text',
      'object' => $site->sitemeta->ga_request_token,
      'default_value' => $site->sitemeta->ga_request_token->meta_value,
      'key' => 'meta_value',
      'description' => 'Den här textsnutten lyfts in i sin helhet på alla bloggar för att fyllas i av Superadmin'
    ),
    array(
      'title' => 'Request Token OAuth Secret',
      'name' => $site->sitemeta->ga_request_token_oauth_secret->meta_key,
      'type' => 'text',
      'object' => $site->sitemeta->ga_request_token_oauth_secret,
      'default_value' => $site->sitemeta->ga_request_token_oauth_secret->meta_value,
      'key' => 'meta_value',
      'description' => 'Den här textsnutten lyfts in i sin helhet på alla bloggar för att fyllas i av Superadmin'
    ),
    array(
      'title' => 'Secret',
      'name' => $site->sitemeta->ga_secret->meta_key,
      'type' => 'text',
      'object' => $site->sitemeta->ga_secret,
      'default_value' => $site->sitemeta->ga_secret->meta_value,
      'key' => 'meta_value',
      'description' => 'Den här textsnutten lyfts in i sin helhet på alla bloggar för att fyllas i av Superadmin'
    )
  );

  \WpMvc\FormHelper::render_form( $site, $content );
  ?>
</div>