/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/seo.js":
/*!*****************************!*\
  !*** ./resources/js/seo.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function ($) {
  "use strict";

  var custom_meta_title;
  var custom_slug;
  $(document).ready(function () {
    urlCountInfo();
    metaTitleCountInfo();
    metaDescriptionCountInfo();
    var slug = $('#slug').val();
    var title = $('#title').val();
    var meta_title = $('#meta_title').val();
    custom_slug = slug == string_to_slug(title) ? false : true;
    custom_meta_title = meta_title == title ? false : true; // console.log(custom_slug)
  });
  $('#slug').on('keyup', function () {
    custom_slug = true;
    urlCountInfo();
  });
  $('#meta_title').on('keyup', function () {
    custom_meta_title = true;
    metaTitleCountInfo();
  });
  $('#meta_description').on('keyup', function () {
    metaDescriptionCountInfo();
  });
  $('#title').on('keyup', function () {
    var title = $('#title').val();
    var slug = string_to_slug(title);

    if (!custom_slug) {
      $('#slug').val(slug);
      urlCountInfo();
    }

    if (!custom_meta_title) {
      $('#meta_title').val(title);
      metaTitleCountInfo();
    }
  });

  function string_to_slug(str) {
    str = str.replace(/^\s+|\s+$/g, ''); // trim

    str = str.toLowerCase(); // remove accents, swap ñ for n, etc

    var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
    var to = "aaaaeeeeiiiioooouuuunc------";

    for (var i = 0, l = from.length; i < l; i++) {
      str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
    }

    str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
    .replace(/\s+/g, '-') // collapse whitespace and replace by -
    .replace(/-+/g, '-'); // collapse dashes

    return str;
  }

  function checklenght(str) {
    length = str.length;
    return length;
  }

  function urlCountInfo() {
    var slug = $('#slug').val();
    $('#slug-temp').text(slug);
    console.log($('#slug').val());
    $('#url-count').text(checklenght($('#url-complete').text()));

    if (checklenght($('#url-complete').text()) > 60) {
      $('#checkOrfailSlug').html('<i aria-hidden="true" class="fa fa-exclamation-triangle text-warning"></i> Shorter URLs tend to rank better than long URLs');

      if (checklenght($('#url-complete').text()) > 80) {
        $('#checkOrfailSlug').html('<i aria-hidden="true" class="fa fa-exclamation-triangle text-danger"></i> If you go way beyond (say 80+ characters), this is likely to have a negative impact on your ranking.');
      }
    } else {
      $('#checkOrfailSlug').html('<i class="fa fa-check-circle text-success" aria-hidden="true"></i> Awesome');

      if (checklenght($('#url-complete').text()) < 50) {
        $('#checkOrfailSlug').html('<i aria-hidden="true" class="fa fa-exclamation-triangle text-danger"></i> URL is too short');
      }
    }
  }

  function metaTitleCountInfo() {
    $('#title-count').text(checklenght($('#meta_title').val()));

    if (checklenght($('#meta_title').val()) > 60) {
      $('#checkOrfailTitle').html('<i aria-hidden="true" class="fa fa-exclamation-triangle text-danger"></i> Meta title is too long');
    } else {
      $('#checkOrfailTitle').html('<i class="fa fa-check-circle text-success" aria-hidden="true"></i> Nice');

      if (checklenght($('#meta_title').val()) < 30) {
        $('#checkOrfailTitle').html('<i aria-hidden="true" class="fa fa-exclamation-triangle text-danger"></i> Meta title is too short');
      }
    }
  }

  function metaDescriptionCountInfo() {
    $('#metadesc-count').text(checklenght($('#meta_description').val()));

    if (checklenght($('#meta_description').val()) > 160) {
      $('#checkOrfailDescription').html('<i aria-hidden="true" class="fa fa-exclamation-triangle text-danger"></i> Meta Description is too long');
    } else {
      $('#checkOrfailDescription').html('<i class="fa fa-check-circle text-success" aria-hidden="true"></i> Wonderful');

      if (checklenght($('#meta_description').val()) < 100) {
        $('#checkOrfailDescription').html('<i aria-hidden="true" class="fa fa-exclamation-triangle text-danger"></i> Meta Description is too short');
      }
    }
  }
})(jQuery);

/***/ }),

/***/ 2:
/*!***********************************!*\
  !*** multi ./resources/js/seo.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\Users\ysrael.jacinto\Documents\Esco Projects\escotapestlrx-clone\revamped.escotapestlerx\esco-tapestle-rx-revamp\resources\js\seo.js */"./resources/js/seo.js");


/***/ })

/******/ });