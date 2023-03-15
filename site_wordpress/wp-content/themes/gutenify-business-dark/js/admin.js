"use strict";

var _wp = wp,
    apiFetch = _wp.apiFetch;
jQuery(function ($) {
  var redirectToKitPage = function redirectToKitPage(res) {
    // if( res?.status && 'active' === res.status ) {
    window.location = "".concat(window.gutenify_business_dark.gutenify_kit_gallery); // }
  }; // Activate Gutenify.


  $(document).on('click', '.gutenify-business-dark-activate-gutenify', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('gutenify-business-dark-importing-gutenify');
    apiFetch({
      path: '/wp/v2/plugins/gutenify/gutenify',
      method: 'POST',
      data: {
        "status": "active"
      }
    }).then(function (res) {
      redirectToKitPage(res);
    })["catch"](function () {
      redirectToKitPage({});
    });
  });
  $(document).on('click', '.gutenify-business-dark-install-gutenify', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('gutenify-business-dark-importing-gutenify');
    apiFetch({
      path: '/wp/v2/plugins',
      method: 'POST',
      data: {
        "slug": "gutenify",
        "status": "active"
      }
    }).then(function (res) {
      redirectToKitPage(res);
    })["catch"](function () {
      redirectToKitPage({});
    });
  });
  $(document).on('click', '.gutenify-fse-admin-notice .notice-dismiss', function () {
    console.log(ajaxurl + "?action=gutenify_business_dark_hide_theme_info_noticebar");
    apiFetch({
      url: ajaxurl + "?action=gutenify_business_dark_hide_theme_info_noticebar&gutenify_business_dark-nonce-name=".concat(window.gutenify_business_dark.gutenify_business_dark_nonce),
      method: 'POST'
    }).then(function (res) {
      console.log(res);
    })["catch"](function (res) {
      console.log(res);
    });
  });
});