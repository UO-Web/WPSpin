WPSpin
======

A WordPress plugin providing integration with Spinitron's SpinPAPI API service.

## Requirements

- WordPress version 3.5 or higher (may work on lower versions, not tested).
- PHP version 5.3 or higher.
- Spinitron API access. You will need your API Key and shared secret when installing this plugin. If you do not 
have this and need access, contact [Spinitron](http://spinitron.com).

## Installing

- Clone or copy project folder into wp-content/plugins directory
- Give write permissions to the wp-content/plugins/WPSpin/spinpapi/tmp folder
- Activate plugin from WordPress plugins screen
- Click 'Spinitron' in WordPress menu
- Fill in user id, secret key, and station callsign

Features
========

## "Now on Air" Content

To insert a block of content with information about the show currently on air, simply insert the shortcode
[wpspin-now-playing] into the page where you'd like the block to appear. 

## Playlist Widget

WPSpin provides a widget that displays the ten most recent items on the current playlist in reverse-chronological order.

## DJ Profiles

DJ Profiles are implemented as custom post types and can be edited to add photos and descriptions. A listing of all 
DJs can be accessed at <your website url>/wpspin\_profiles (e.g. www.mysite.com/wordpress/wpspin\_profiles).

Theming and Styles
==================

Both the playlist widget and the "Now on Air" content can be styled to fit with your site's wordpress theme.
HTML element types and their respective classes are listed below. 

Should you wish to edit the view templates, they can be found in /views/. 

## "Now on Air"
div *wps-now-playing*
- img *wps-nowplaying-show-image*
- h3 *wps-nowplaying-title*
- span *wps-nowplaying-desc*
- div *wps-nowplaying-profile*
- img *wps-nowplaying-profile-image*
- span *wps-nowplaying-profile-name*
- span *wps-nowplaying-profile-bio*
- span *wps-nowplaying-profile-facebook*
- span *wps-nowplaying-profile-twitter*

## Playlist
*wps-playlist-template*
- p *track*
- p *artist*
- p *timestamp*
