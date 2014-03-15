/**
 * Magpie Featured Content admin behavior: add a tag suggestion
 * when changing the tag.
 */
/* global ajaxurl:true */

jQuery(document).ready(function(e){e("#customize-control-featured-content-tag-name input").suggest(ajaxurl+"?action=ajax-tag-search&tax=post_tag",{delay:200,minchars:2})})
