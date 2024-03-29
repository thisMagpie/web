/**
 * Magpie Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */
(function(e){wp.customize("blogname",function(t){t.bind(function(t){e(".site-title a").text(t)})});wp.customize("blogdescription",function(t){t.bind(function(t){e(".site-description").text(t)})});wp.customize("header_textcolor",function(t){t.bind(function(t){if("blank"===t){e(".site-title, .site-description").css({clip:"rect(1px, 1px, 1px, 1px)",position:"absolute"})}else{e(".site-title,  .site-description").css({clip:"auto",position:"static"});e(".site-title a").css({color:t})}})})})(jQuery)
