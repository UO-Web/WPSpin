<?php namespace WPSpin;

class PlaylistWidgetView extends \WP_Widget { 

  public function __construct() {
    parent::__construct( 
      'wps_playlist',
      'WPSpin Playlist',
      array(
        'classname' => 'wps_playlist',
        'description' => __('Use this widget For Playlist Updates From Spinitron'),
      )
    );
  }

  public function widget($args, $instance) {
    extract($args);
    $title = apply_filters( 'widget_title', 'Recently Played' );
    echo $before_widget;
    if ( ! empty( $title ) ) {
      echo $before_title . $title . $after_title;
      include __DIR__ . "/../views/playlistwidget.php";
    }
    echo $after_widget;
  }

  public function update($instance) {

  }

  public function form($new_instance, $old_instance = NULL) {

  }

  public static function initPlaylistWidget() {
    register_widget("WPSpin\PlaylistWidgetView");
  }
}

?>
