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
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/addsubject.js":
/*!************************************!*\
  !*** ./resources/js/addsubject.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  $('#btn_add').click(function () {
    $('#input').clone().appendTo('#add_subject_main');
  });
  $(document).on('click', '#btn_remove', function () {
    $(this).parents('#input').remove();
  });
  $(document).on('click', '#btn_remove_edit', function () {
    $(this).parents('#add_subject_main').remove();
  });
});

/***/ }),

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

// /**
//  * First we will load all of this project's JavaScript dependencies which
//  * includes Vue and other libraries. It is a great starting point when
//  * building robust, powerful web applications using Vue and Laravel.
//  */
// require('./bootstrap');
// window.Vue = require('vue');
// /**
//  * The following block of code may be used to automatically register your
//  * Vue components. It will recursively scan this directory for the Vue
//  * components and automatically register them with their "basename".
//  *
//  * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
//  */
// // const files = require.context('./', true, /\.vue$/i)
// // files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// /**
//  * Next, we will create a fresh Vue application instance and attach it to
//  * the page. Then, you may begin adding components to this application
//  * or customize the JavaScript scaffolding to fit your unique needs.
//  */
// const app = new Vue({
//     el: '#app',
// });

/***/ }),

/***/ "./resources/js/changeimg.js":
/*!***********************************!*\
  !*** ./resources/js/changeimg.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

function changeImg(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $('#avatar').attr('src', e.target.result);
    };

    reader.readAsDataURL(input.files[0]);
  }
}

$(document).ready(function () {
  $('#avatar').click(function () {
    $('#img').click();
  });
});

/***/ }),

/***/ "./resources/js/checkconfirm.js":
/*!**************************************!*\
  !*** ./resources/js/checkconfirm.js ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function checkConfirm() {
  var conf = confirm("Bạn có chắc chắn muốn xóa ?");
  return conf;
}

/***/ }),

/***/ "./resources/js/courses.js":
/*!*********************************!*\
  !*** ./resources/js/courses.js ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  var i = 1;
  $('#add').click(function () {
    i++;
    $('#add_subject').append();
  });
  $(document).on('click', '.btn_remove', function () {
    var button_id = $(this).attr("id");
    $("#row" + button_id + "").remove();
  });
});

/***/ }),

/***/ "./resources/js/datatable.js":
/*!***********************************!*\
  !*** ./resources/js/datatable.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  $('#table').DataTable();
});

/***/ }),

/***/ "./resources/js/logout.js":
/*!********************************!*\
  !*** ./resources/js/logout.js ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  $("#logout").click(function (e) {
    e.preventDefault();
    $("#logout-form").submit();
  });
});

/***/ }),

/***/ "./resources/js/option.js":
/*!********************************!*\
  !*** ./resources/js/option.js ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  $('#courses_option').click(function () {
    $('#btn-courses-option').click();
  });
});

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************************************************************************************************************************************************************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/js/logout.js ./resources/js/courses.js ./resources/js/changeimg.js ./resources/js/option.js ./resources/js/datatable.js ./resources/js/addsubject.js ./resources/js/checkconfirm.js ./resources/sass/app.scss ***!
  \*************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /home/chitt/Desktop/Project/resources/js/app.js */"./resources/js/app.js");
__webpack_require__(/*! /home/chitt/Desktop/Project/resources/js/logout.js */"./resources/js/logout.js");
__webpack_require__(/*! /home/chitt/Desktop/Project/resources/js/courses.js */"./resources/js/courses.js");
__webpack_require__(/*! /home/chitt/Desktop/Project/resources/js/changeimg.js */"./resources/js/changeimg.js");
__webpack_require__(/*! /home/chitt/Desktop/Project/resources/js/option.js */"./resources/js/option.js");
__webpack_require__(/*! /home/chitt/Desktop/Project/resources/js/datatable.js */"./resources/js/datatable.js");
__webpack_require__(/*! /home/chitt/Desktop/Project/resources/js/addsubject.js */"./resources/js/addsubject.js");
__webpack_require__(/*! /home/chitt/Desktop/Project/resources/js/checkconfirm.js */"./resources/js/checkconfirm.js");
module.exports = __webpack_require__(/*! /home/chitt/Desktop/Project/resources/sass/app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });