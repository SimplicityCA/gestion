/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Drupal, drupalSettings) {
  Drupal.behaviors.ckeditorDrupalImageSettingsSummary = {
    attach: function attach() {
      $('[data-ckeditor-plugin-id="drupalimage"]').drupalSetSummary(function (context) {
        var root = 'input[name="editor[settings][plugins][drupalimage][image_upload]';
        var $status = $(root + '[status]"]');
        var $maxFileSize = $(root + '[max_size]"]');
        var $maxWidth = $(root + '[max_dimensions][width]"]');
        var $maxHeight = $(root + '[max_dimensions][height]"]');
        var $scheme = $(root + '[scheme]"]:checked');

        var maxFileSize = $maxFileSize.val() ? $maxFileSize.val() : $maxFileSize.attr('placeholder');
        var maxDimensions = $maxWidth.val() && $maxHeight.val() ? '(' + $maxWidth.val() + 'x' + $maxHeight.val() + ')' : '';

        if (!$status.is(':checked')) {
          return Drupal.t('Uploads disabled');
        }

        var output = '';
        output += Drupal.t('Uploads enabled, max size: @size @dimensions', { '@size': maxFileSize, '@dimensions': maxDimensions });
        if ($scheme.length) {
          output += '<br />' + $scheme.attr('data-label');
        }
        return output;
      });
    }
  };
})(jQuery, Drupal, drupalSettings);