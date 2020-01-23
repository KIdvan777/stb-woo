"use strict";

jQuery(function ($) {
  $('#search_input').on('keyup', function () {
    var search = $('#search_input').val();

    if (search.length < 4) {
      return false;
    }

    ;
    var data = {
      s: search,
      action: 'search-ajax',
      nonce: stb_ajax_search_form.nonce
    };
    $.ajax({
      url: stb_ajax_search_form.url,
      data: data,
      type: 'POST',
      dataType: 'json',
      beforeSend: function beforeSend(xhr) {},
      success: function success(data) {
        var resultDiv = $('.search_form_overlay__results');
        resultDiv.html(data.out);
        console.log(data.out);
      }
    }); // console.log(data);
  });
});
"use strict";

jQuery(function ($) {
  $('.top_hits_2_header_list').click(function (e) {
    var printCatName = e.target.innerText;
    var data = {
      name: printCatName,
      action: 'tabs-ajax',
      nonce: stb_ajax_tabs_script.nonce
    };
    $.ajax({
      url: stb_ajax_tabs_script.url,
      data: data,
      type: 'POST',
      dataType: 'json',
      beforeSend: function beforeSend(xhr) {
        var resultDiv = $('.top_hits_2_items');
        resultDiv.html('<div class="spinner-loader"><img src="//localhost:3000/wp-content/themes/stb/assets/img/25.gif"></div>');
      },
      success: function success(data) {
        var resultDiv = $('.top_hits_2_items');
        resultDiv.html('');
        resultDiv.html(data.out);
      }
    });
  });
});
"use strict";

function _typeof(obj) { if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

/******/
(function (modules) {
  // webpackBootstrap

  /******/
  // The module cache

  /******/
  var installedModules = {};
  /******/

  /******/
  // The require function

  /******/

  function __webpack_require__(moduleId) {
    /******/

    /******/
    // Check if module is in cache

    /******/
    if (installedModules[moduleId]) {
      /******/
      return installedModules[moduleId].exports;
      /******/
    }
    /******/
    // Create a new module (and put it into the cache)

    /******/


    var module = installedModules[moduleId] = {
      /******/
      i: moduleId,

      /******/
      l: false,

      /******/
      exports: {}
      /******/

    };
    /******/

    /******/
    // Execute the module function

    /******/

    modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
    /******/

    /******/
    // Flag the module as loaded

    /******/

    module.l = true;
    /******/

    /******/
    // Return the exports of the module

    /******/

    return module.exports;
    /******/
  }
  /******/

  /******/

  /******/
  // expose the modules object (__webpack_modules__)

  /******/


  __webpack_require__.m = modules;
  /******/

  /******/
  // expose the module cache

  /******/

  __webpack_require__.c = installedModules;
  /******/

  /******/
  // define getter function for harmony exports

  /******/

  __webpack_require__.d = function (exports, name, getter) {
    /******/
    if (!__webpack_require__.o(exports, name)) {
      /******/
      Object.defineProperty(exports, name, {
        enumerable: true,
        get: getter
      });
      /******/
    }
    /******/

  };
  /******/

  /******/
  // define __esModule on exports

  /******/


  __webpack_require__.r = function (exports) {
    /******/
    if (typeof Symbol !== 'undefined' && Symbol.toStringTag) {
      /******/
      Object.defineProperty(exports, Symbol.toStringTag, {
        value: 'Module'
      });
      /******/
    }
    /******/


    Object.defineProperty(exports, '__esModule', {
      value: true
    });
    /******/
  };
  /******/

  /******/
  // create a fake namespace object

  /******/
  // mode & 1: value is a module id, require it

  /******/
  // mode & 2: merge all properties of value into the ns

  /******/
  // mode & 4: return value when already ns object

  /******/
  // mode & 8|1: behave like require

  /******/


  __webpack_require__.t = function (value, mode) {
    /******/
    if (mode & 1) value = __webpack_require__(value);
    /******/

    if (mode & 8) return value;
    /******/

    if (mode & 4 && _typeof(value) === 'object' && value && value.__esModule) return value;
    /******/

    var ns = Object.create(null);
    /******/

    __webpack_require__.r(ns);
    /******/


    Object.defineProperty(ns, 'default', {
      enumerable: true,
      value: value
    });
    /******/

    if (mode & 2 && typeof value != 'string') for (var key in value) {
      __webpack_require__.d(ns, key, function (key) {
        return value[key];
      }.bind(null, key));
    }
    /******/

    return ns;
    /******/
  };
  /******/

  /******/
  // getDefaultExport function for compatibility with non-harmony modules

  /******/


  __webpack_require__.n = function (module) {
    /******/
    var getter = module && module.__esModule ?
    /******/
    function getDefault() {
      return module['default'];
    } :
    /******/
    function getModuleExports() {
      return module;
    };
    /******/

    __webpack_require__.d(getter, 'a', getter);
    /******/


    return getter;
    /******/
  };
  /******/

  /******/
  // Object.prototype.hasOwnProperty.call

  /******/


  __webpack_require__.o = function (object, property) {
    return Object.prototype.hasOwnProperty.call(object, property);
  };
  /******/

  /******/
  // __webpack_public_path__

  /******/


  __webpack_require__.p = "";
  /******/

  /******/

  /******/
  // Load entry module and return exports

  /******/

  return __webpack_require__(__webpack_require__.s = "./src/index.js");
  /******/
})(
/************************************************************************/

/******/
{
  /***/
  "./src/index.js":
  /*!**********************!*\
    !*** ./src/index.js ***!
    \**********************/

  /*! no static exports found */

  /***/
  function srcIndexJs(module, exports) {
    eval("\n\n//# sourceURL=webpack:///./src/index.js?");
    /***/
  }
  /******/

});
"use strict";

// jQuery('.search_input').hide();
// jQuery( "#search_img" ).click(function() {
//   // jQuery('#search_input').slideToggle();
//   jQuery('.search_input').show();
//   jQuery('#search_img').hide();
//
// });
// jQuery('.burger').click(function(){
//     jQuery('.mobile_menu').css('display', 'block');
//     jQuery('.mobile_menu').css('position', 'absolute');
// });
//
// jQuery('.mobile_menu_burger').click(function(){
//     jQuery('.mobile_menu').css('display', 'none');
// });
jQuery('.burger').click(function () {
  jQuery('.mobile_menu').toggleClass('mobile_menu_is_visible');
});
"use strict";

jQuery(document).ready(function () {
  jQuery(".owl-carousel").owlCarousel({
    items: 1,
    loop: true,
    nav: true,
    navText: ['<i class="fas fa-caret-left"></i>', '<i class="fas fa-caret-right"></i>'],
    dots: true,
    autoplay: false
  });
});
"use strict";

jQuery(function ($) {
  var searchOverlay = jQuery('.search_form_overlay_container');
  var searchIcon = jQuery('.search_icon');
  var searchformVissibleCloseIcon = jQuery('.search_form_vissible_close_icon');
  var domDocument = jQuery(document);
  var searchInput = jQuery('#search_input');
  var typingTimer;
  var resultDiv = jQuery('.search_form_overlay__results');
  var isOverlayOpen = false;
  var isSipnnerVissible = false;
  var previousValue;
  searchIcon.on('click', openSearchOverlay);

  function openSearchOverlay() {
    searchOverlay.addClass('search_form_overlay_container_show');
    isOverlayOpen = true;
  }

  searchformVissibleCloseIcon.on('click', closeSearchOverlay);

  function closeSearchOverlay() {
    searchOverlay.removeClass('search_form_overlay_container_show');
    isOverlayOpen = false;
  }

  domDocument.on('keyup', keyPressDispatcher);

  function keyPressDispatcher(event) {
    // console.log(event.keyCode);
    if (event.keyCode == 13 && !isOverlayOpen && !JQuery("input, textarea").is(':focus')) {
      openSearchOverlay();
    }

    if (event.keyCode == 27 && isOverlayOpen) {
      closeSearchOverlay();
    }
  }

  searchInput.on('keyup', typingLogic);

  function typingLogic() {
    if (searchInput.val() != previousValue) {
      clearTimeout(typingTimer);

      if (searchInput.val()) {
        if (!isSipnnerVissible) {
          resultDiv.html('<div class="spinner-loader"><img src="//localhost:3000/wp-content/themes/stb/assets/img/25.gif"></div>');
          isSipnnerVissible = true;
        }

        typingTimer = setTimeout(getResults, 2000);
      } else {
        resultDiv.html('');
        isSipnnerVissible = false;
      }
    }

    previousValue = searchInput.val();
  }

  function getResults() {}
});
"use strict";

jQuery(function ($) {
  $(document).ready(function () {
    $('.product_menu, .product_menu_2').slick({
      autoplay: false,
      slidesPerRow: 3,
      slidesToScroll: 1,
      speed: 600,
      prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-angle-double-right"></i></button>',
      nextArrow: '<button type="button" class="slick-next"><i class="fas fa-angle-double-left"></i></button>'
    });
  });
  $(document).ready(function () {
    $('.top_hits').slick({
      autoplay: true,
      slidesPerRow: 6,
      slidesToScroll: 1,
      speed: 300
    });
  });
});