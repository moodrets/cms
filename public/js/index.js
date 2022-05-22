"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["/js/index"],{

/***/ 975:
/*!****************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Offcanvas.vue?vue&type=script&lang=js& ***!
  \****************************************************************************************************************************************************************************************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      visible: false
    };
  },
  methods: {
    bodyToggleClass: function bodyToggleClass() {
      if (this.visible) {
        document.body.classList.add('overflow-hidden');
      } else {
        document.body.classList.remove('overflow-hidden');
      }
    },
    toggle: function toggle() {
      this.visible = !this.visible;
      this.bodyToggleClass();
    },
    clickHandler: function clickHandler(event) {
      if (event.target.hasAttribute('data-offcanvas-element')) {
        this.visible = false;
      }

      this.bodyToggleClass();
    }
  }
});

/***/ }),

/***/ 972:
/*!*******************************************!*\
  !*** ./resources/js/helpers/themeMode.js ***!
  \*******************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "themeOnLoad": function() { return /* binding */ themeOnLoad; },
/* harmony export */   "toggleTheme": function() { return /* binding */ toggleTheme; }
/* harmony export */ });
var STORAGE_THEME_ITEM_NAME = 'app-theme';
function toggleTheme() {
  document.body.classList.remove('dark', 'light');
  var theme = localStorage.getItem(STORAGE_THEME_ITEM_NAME);

  if (theme && theme === 'dark') {
    document.body.classList.add('light');
    localStorage.setItem(STORAGE_THEME_ITEM_NAME, 'light');
    return;
  }

  if (theme && theme === 'light') {
    document.body.classList.add('dark');
    localStorage.setItem(STORAGE_THEME_ITEM_NAME, 'dark');
    return;
  }

  document.body.classList.add('dark');
  localStorage.setItem(STORAGE_THEME_ITEM_NAME, 'dark');
}
function themeOnLoad() {
  var theme = localStorage.getItem(STORAGE_THEME_ITEM_NAME);

  if (theme) {
    document.body.classList.add(theme);
  }
}

/***/ }),

/***/ 823:
/*!*******************************!*\
  !*** ./resources/js/index.js ***!
  \*******************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var vue__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! vue */ 538);
/* harmony import */ var _helpers_themeMode__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./helpers/themeMode */ 972);
/* harmony import */ var _components_Offcanvas__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./components/Offcanvas */ 673);

 // [+] components

 // [-] components

vue__WEBPACK_IMPORTED_MODULE_2__["default"].component('app-offcanvas', _components_Offcanvas__WEBPACK_IMPORTED_MODULE_1__["default"]);
var app = new vue__WEBPACK_IMPORTED_MODULE_2__["default"]({
  el: '#main',
  methods: {
    toggleTheme: _helpers_themeMode__WEBPACK_IMPORTED_MODULE_0__.toggleTheme,
    showOffcanvas: function showOffcanvas() {
      this.$refs['offcanvas'] && this.$refs['offcanvas'].toggle();
    }
  }
});
(0,_helpers_themeMode__WEBPACK_IMPORTED_MODULE_0__.themeOnLoad)();
window.APP = app;

/***/ }),

/***/ 399:
/*!*******************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[2]!./node_modules/sass-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[3]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Offcanvas.vue?vue&type=style&index=0&lang=scss& ***!
  \*******************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/***/ (function(module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../../node_modules/css-loader/dist/runtime/api.js */ 645);
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__);
// Imports

var ___CSS_LOADER_EXPORT___ = _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default()(function(i){return i[1]});
// Module
___CSS_LOADER_EXPORT___.push([module.id, ".offcanvas {\n  --offcanvas-width: 280px;\n  position: fixed;\n  right: 0;\n  left: 0;\n  top: 0;\n  bottom: 0;\n  z-index: 100;\n  transition: all 0.3s;\n  opacity: 0;\n  visibility: hidden;\n  pointer-events: none;\n  background: rgba(43, 42, 51, 0.7);\n}\n.offcanvas.is-opened {\n  opacity: 1;\n  visibility: visible;\n  pointer-events: auto;\n}\n.offcanvas.is-opened .offcanvas__body {\n  transform: translate3d(0, 0, 0);\n}\n.offcanvas.is-opened .offcanvas__close {\n  transform: translate3d(0, 0, 0);\n}\n.offcanvas__close {\n  position: absolute;\n  left: calc(var(--offcanvas-width) + 20px);\n  top: 20px;\n  transition: all 0.3s;\n  transform: translate3d(calc(var(--offcanvas-width) * -1 - 20px), 0, 0);\n  cursor: pointer;\n}\n.offcanvas__close .svg-icon {\n  width: 24px;\n  height: 24px;\n}\n.offcanvas__body {\n  width: var(--offcanvas-width);\n  height: 100%;\n  transition: all 0.3s;\n  transform: translate3d(-120%, 0, 0);\n  overflow-y: auto;\n  padding: 20px;\n}", ""]);
// Exports
/* harmony default export */ __webpack_exports__["default"] = (___CSS_LOADER_EXPORT___);


/***/ }),

/***/ 597:
/*!***********************************!*\
  !*** ./resources/scss/index.scss ***!
  \***********************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ 698:
/*!***********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[2]!./node_modules/sass-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[3]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Offcanvas.vue?vue&type=style&index=0&lang=scss& ***!
  \***********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! !../../../node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js */ 379);
/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _node_modules_css_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_2_node_modules_sass_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_3_node_modules_vue_loader_lib_index_js_vue_loader_options_Offcanvas_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! !!../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[2]!../../../node_modules/sass-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[3]!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Offcanvas.vue?vue&type=style&index=0&lang=scss& */ 399);

            

var options = {};

options.insert = "head";
options.singleton = false;

var update = _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default()(_node_modules_css_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_2_node_modules_sass_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_3_node_modules_vue_loader_lib_index_js_vue_loader_options_Offcanvas_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_1__["default"], options);



/* harmony default export */ __webpack_exports__["default"] = (_node_modules_css_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_2_node_modules_sass_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_3_node_modules_vue_loader_lib_index_js_vue_loader_options_Offcanvas_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_1__["default"].locals || {});

/***/ }),

/***/ 673:
/*!***********************************************!*\
  !*** ./resources/js/components/Offcanvas.vue ***!
  \***********************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Offcanvas_vue_vue_type_template_id_53a9a22c___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Offcanvas.vue?vue&type=template&id=53a9a22c& */ 351);
/* harmony import */ var _Offcanvas_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Offcanvas.vue?vue&type=script&lang=js& */ 163);
/* harmony import */ var _Offcanvas_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./Offcanvas.vue?vue&type=style&index=0&lang=scss& */ 819);
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! !../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ 900);



;


/* normalize component */

var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__["default"])(
  _Offcanvas_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Offcanvas_vue_vue_type_template_id_53a9a22c___WEBPACK_IMPORTED_MODULE_0__.render,
  _Offcanvas_vue_vue_type_template_id_53a9a22c___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/Offcanvas.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ 163:
/*!************************************************************************!*\
  !*** ./resources/js/components/Offcanvas.vue?vue&type=script&lang=js& ***!
  \************************************************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Offcanvas_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Offcanvas.vue?vue&type=script&lang=js& */ 975);
 /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Offcanvas_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ 819:
/*!*********************************************************************************!*\
  !*** ./resources/js/components/Offcanvas.vue?vue&type=style&index=0&lang=scss& ***!
  \*********************************************************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_style_loader_dist_cjs_js_node_modules_css_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_2_node_modules_sass_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_3_node_modules_vue_loader_lib_index_js_vue_loader_options_Offcanvas_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/style-loader/dist/cjs.js!../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[2]!../../../node_modules/sass-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[3]!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Offcanvas.vue?vue&type=style&index=0&lang=scss& */ 698);


/***/ }),

/***/ 351:
/*!******************************************************************************!*\
  !*** ./resources/js/components/Offcanvas.vue?vue&type=template&id=53a9a22c& ***!
  \******************************************************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": function() { return /* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Offcanvas_vue_vue_type_template_id_53a9a22c___WEBPACK_IMPORTED_MODULE_0__.render; },
/* harmony export */   "staticRenderFns": function() { return /* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Offcanvas_vue_vue_type_template_id_53a9a22c___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns; }
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Offcanvas_vue_vue_type_template_id_53a9a22c___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Offcanvas.vue?vue&type=template&id=53a9a22c& */ 858);


/***/ }),

/***/ 858:
/*!*********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Offcanvas.vue?vue&type=template&id=53a9a22c& ***!
  \*********************************************************************************************************************************************************************************************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": function() { return /* binding */ render; },
/* harmony export */   "staticRenderFns": function() { return /* binding */ staticRenderFns; }
/* harmony export */ });
var render = function () {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    {
      staticClass: "offcanvas",
      class: { "is-opened": _vm.visible },
      attrs: { "data-offcanvas-element": "" },
      on: {
        click: function ($event) {
          return _vm.clickHandler($event)
        },
      },
    },
    [
      _c(
        "div",
        {
          staticClass: "offcanvas__close text-white",
          on: {
            click: function ($event) {
              return _vm.toggle()
            },
          },
        },
        [
          _c("div", { staticClass: "svg-icon" }, [
            _c("svg", [_c("use", { attrs: { "xlink:href": "#close" } })]),
          ]),
        ]
      ),
      _vm._v(" "),
      _c(
        "div",
        { staticClass: "offcanvas__body bg-white" },
        [_vm._t("default")],
        2
      ),
    ]
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ })

},
/******/ function(__webpack_require__) { // webpackRuntimeModules
/******/ var __webpack_exec__ = function(moduleId) { return __webpack_require__(__webpack_require__.s = moduleId); }
/******/ __webpack_require__.O(0, ["css/index","/js/vendor"], function() { return __webpack_exec__(823), __webpack_exec__(597); });
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);