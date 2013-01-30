<?php namespace WPSpin;

class ShortcodeController extends ControllerAbstract
{

  public static function initActions()
  {
    add_shortcode('wpspin-now-playing', 'WPSpin\ShortcodeController::nowPlaying');
  }

  public static function nowPlaying()
  {
?>

<span class="wps-now-playing"></span>
<script type="text/javascript">
jQuery(document).ready(function () {
  new NowPlaying.Display();
  Backbone.Mediator.publish("nowplaying:load");
});
</script>

<script type="text/template" class="wps-nowplaying-template">
<% if (image != false) { %>
  <img src="<%= image %>" class="wps-nowplaying-show-image" />
<% } %>
<h3 class="wps-nowplaying-title"><%= title %></h3>
<p><span class="wps-nowplaying-desc"><%= description %></span></p>
<span class="wps-nowplaying-profile">
<% _.each(profiles, function (profile) { %>
<p>
  <% if (profile.image != false) { %>
    <img src="<%= profile.image %>" class="wps-nowplaying-profile-image" />
  <% } %>
  <span class="wps-nowplaying-profile-name"><h3><%= profile.name %></h3></span>
  <span class="wps-nowplaying-profile-bio"><%= profile.bio %></span>
  <% if (profile.facebook != false || profile.twitter != false) { %>
    <h4>Social</h4>
    <p><span class="wps-nowplaying-profile-facebook"><%= profile.facebook %></span></p>
    <p><span class="wps-nowplaying-profile-twitter"><%= profile.twitter %></span></p>
  <% } %>
</p>
<% }); %>
</span>
</script>

<?php

  }

}

?>
