<?php

namespace GaSettings
{
  class GaSettingsController extends \WpMvc\BaseController
  {
    public function index()
    {
      global $site;

      $site = \WpMvc\Site::find( 1 );

      #$blogs = Blog::all();
      #$footer = \WpMvc\CustomFooter::virgin();

      #$this->create_attribute_if_not_exists( $site, 'footer_content' );
      $site = \WpMvc\Site::find( 1 );
      $this->create_attribute_if_not_exists( $site, 'ga_script_block' );
      $this->create_attribute_if_not_exists( $site, 'ga_tracking_id' );
      $this->create_attribute_if_not_exists( $site, 'ga_access_token' );
      $this->create_attribute_if_not_exists( $site, 'ga_request_token' );
      $this->create_attribute_if_not_exists( $site, 'ga_secret' );

      $this->create_attribute_if_not_exists( $site, 'ga_request_token_oauth_secret' );
      $this->create_attribute_if_not_exists( $site, 'ga_active' );

      if ( $_SERVER['REQUEST_METHOD'] == 'POST' && isset( $_GET['page'] ) && $_GET['page'] == 'ga_settings_settings' ) {
        $site->takes_post( $_POST['site'] );

        $site->save();
      }

      $this->render( $this, "index" );
    }

    private function create_attribute_if_not_exists( &$site, $attribute )
    {
      if ( ! isset( $site->sitemeta->{$attribute} ) ) {
        $site->sitemeta->{$attribute} = \WpMvc\SiteMeta::virgin();
        $site->sitemeta->{$attribute}->site_id = $site->id;
        $site->sitemeta->{$attribute}->meta_key = "$attribute";
        $site->sitemeta->{$attribute}->meta_value = "";
        $site->sitemeta->{$attribute}->save();
      }
    }
  }
}
