/*
Plugin Name:    Custom CSS and JS
Plugin URI:     https://github.com/mrjshaw/custom-css-and-js/
Description:    A simple plugin to add custom CSS and JS. Comes in handy when you are making slight customizations to a child theme.
Author:         Jason Shaw
Author URI:     https://learningsystems.ca
License:        GNU General Public License v2 or later
License URI:    http://www.gnu.org/licenses/gpl-2.0.html
*/
// One page nav code 
jQuery( document ).ready(function(){
  /* Add padding and id's to each front page section */
  jQuery( "h2.entry-title" ).each( function() {
    var panelId = jQuery( this ).html().toLowerCase().replace(/\s+/g, "-");
      jQuery( this ).wrapInner(function() {
        return "<span style='padding-top:96px;' id='" + panelId + "'></span>";
      })
  })
    
  /* Remove navigation link highlighting */
    jQuery('#top-menu li').removeClass('current-menu-item current_page_item ');
  
  /* Add highlighting on click */
    jQuery('#top-menu li a').on('click', function(event) {
    jQuery(this).parent().parent().find('li').removeClass('current-menu-item');
    jQuery(this).parent().addClass('current-menu-item');
  });
  
    /* Check current URL and highlight nav for current page */
  jQuery('#top-menu li a').each( function() {
      var pageUrl = jQuery( location ).attr( 'href' );
      var navUrl = jQuery( this ).attr( 'href' );
      if ( navUrl == pageUrl ) {
          jQuery( this ).parent().addClass('current-menu-item');
        } 
    })
})



// Sticky nav on pages and posts
var body = jQuery( 'body' );
var navigation = body.find( '.navigation-top' );
var customHeader = body.find( '.custom-header' );
var navigationOuterHeight = navigation.outerHeight();
if ( body.hasClass( 'has-header-image' ) ) {
  var headerOffset = customHeader.innerHeight() - navigationOuterHeight;
}
jQuery( window ).on( 'scroll', function() {
  if ( jQuery( window ).scrollTop() >= headerOffset ) {
    navigation.addClass( 'site-navigation-fixed' );
  } else {
    navigation.removeClass( 'site-navigation-fixed' );
  }
});
