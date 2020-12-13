/**
 * @file
 * Contains JS function
 */

(function ($, Drupal, drupalSettings) {
  'use strict';

  Drupal.behaviors.srijanTaskJS = {
    attach: function (context, drupalSettings) {
      var id = drupalSettings.id;
      console.log(id);
    },
  };
})(jQuery, Drupal, drupalSettings);
