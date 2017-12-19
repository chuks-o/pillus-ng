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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 15);
/******/ })
/************************************************************************/
/******/ ({

/***/ 15:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(16);


/***/ }),

/***/ 16:
/***/ (function(module, exports) {

throw new Error("Module build failed: SyntaxError: C:/xampp/htdocs/Pillus/vendor/unisharp/laravel-ckeditor/ckeditor.js: Unexpected token (484:0)\n\n\u001b[0m \u001b[90m 482 | \u001b[39mpanel\u001b[33m:\u001b[39m\u001b[36mnew\u001b[39m \u001b[33mCKEDITOR\u001b[39m\u001b[33m.\u001b[39mtemplate(\u001b[32m\".cke_panel_grouptitle [background-color:{lightBackground};border-color:{defaultBorder};] .cke_menubutton_icon [background-color:{menubuttonIcon};] .cke_menubutton:hover,.cke_menubutton:focus,.cke_menubutton:active [background-color:{menubuttonHover};] .cke_menubutton:hover .cke_menubutton_icon, .cke_menubutton:focus .cke_menubutton_icon, .cke_menubutton:active .cke_menubutton_icon [background-color:{menubuttonIconHover};] .cke_menubutton_disabled:hover .cke_menubutton_icon,.cke_menubutton_disabled:focus .cke_menubutton_icon,.cke_menubutton_disabled:active .cke_menubutton_icon [background-color:{menubuttonIcon};] .cke_menuseparator [background-color:{menubuttonIcon};] a:hover.cke_colorbox, a:active.cke_colorbox [border-color:{defaultBorder};] a:hover.cke_colorauto, a:hover.cke_colormore, a:active.cke_colorauto, a:active.cke_colormore [background-color:{ckeColorauto};border-color:{defaultBorder};] \"\u001b[39m)}\u001b[33m;\u001b[39m\n \u001b[90m 483 | \u001b[39m\u001b[36mreturn\u001b[39m \u001b[36mfunction\u001b[39m(b\u001b[33m,\u001b[39mc){\u001b[36mvar\u001b[39m e\u001b[33m=\u001b[39ma(b\u001b[33m.\u001b[39muiColor\u001b[33m,\u001b[39m\u001b[35m.4\u001b[39m)\u001b[33m,\u001b[39me\u001b[33m=\u001b[39m{id\u001b[33m:\u001b[39m\u001b[32m\".\"\u001b[39m\u001b[33m+\u001b[39mb\u001b[33m.\u001b[39mid\u001b[33m,\u001b[39mdefaultBorder\u001b[33m:\u001b[39ma(e\u001b[33m,\u001b[39m\u001b[33m-\u001b[39m\u001b[35m.2\u001b[39m)\u001b[33m,\u001b[39mtoolbarElementsBorder\u001b[33m:\u001b[39ma(e\u001b[33m,\u001b[39m\u001b[33m-\u001b[39m\u001b[35m.25\u001b[39m)\u001b[33m,\u001b[39mdefaultBackground\u001b[33m:\u001b[39me\u001b[33m,\u001b[39mlightBackground\u001b[33m:\u001b[39ma(e\u001b[33m,\u001b[39m\u001b[35m.8\u001b[39m)\u001b[33m,\u001b[39mdarkBackground\u001b[33m:\u001b[39ma(e\u001b[33m,\u001b[39m\u001b[33m-\u001b[39m\u001b[35m.15\u001b[39m)\u001b[33m,\u001b[39mckeButtonOn\u001b[33m:\u001b[39ma(e\u001b[33m,\u001b[39m\u001b[35m.4\u001b[39m)\u001b[33m,\u001b[39mckeResizer\u001b[33m:\u001b[39ma(e\u001b[33m,\u001b[39m\u001b[33m-\u001b[39m\u001b[35m.4\u001b[39m)\u001b[33m,\u001b[39mckeColorauto\u001b[33m:\u001b[39ma(e\u001b[33m,\u001b[39m\u001b[35m.8\u001b[39m)\u001b[33m,\u001b[39mdialogBody\u001b[33m:\u001b[39ma(e\u001b[33m,\u001b[39m\u001b[35m.7\u001b[39m)\u001b[33m,\u001b[39mdialogTab\u001b[33m:\u001b[39ma(e\u001b[33m,\u001b[39m\u001b[35m.65\u001b[39m)\u001b[33m,\u001b[39mdialogTabSelected\u001b[33m:\u001b[39m\u001b[32m\"#FFF\"\u001b[39m\u001b[33m,\u001b[39mdialogTabSelectedBorder\u001b[33m:\u001b[39m\u001b[32m\"#FFF\"\u001b[39m\u001b[33m,\u001b[39melementsPathColor\u001b[33m:\u001b[39ma(e\u001b[33m,\u001b[39m\u001b[33m-\u001b[39m\u001b[35m.6\u001b[39m)\u001b[33m,\u001b[39mmenubuttonHover\u001b[33m:\u001b[39ma(e\u001b[33m,\u001b[39m\u001b[35m.1\u001b[39m)\u001b[33m,\u001b[39mmenubuttonIcon\u001b[33m:\u001b[39ma(e\u001b[33m,\u001b[39m\u001b[35m.5\u001b[39m)\u001b[33m,\u001b[39mmenubuttonIconHover\u001b[33m:\u001b[39ma(e\u001b[33m,\u001b[39m\u001b[35m.3\u001b[39m)}\u001b[33m;\u001b[39m\u001b[36mreturn\u001b[39m f[c]\u001b[33m.\u001b[39moutput(e)\u001b[33m.\u001b[39mreplace(\u001b[35m/\\[/g\u001b[39m\u001b[33m,\u001b[39m\u001b[32m\"{\"\u001b[39m)\u001b[33m.\u001b[39mreplace(\u001b[35m/\\]/g\u001b[39m\u001b[33m,\u001b[39m\u001b[32m\"}\"\u001b[39m)}}()\u001b[33m,\u001b[39m\n\u001b[31m\u001b[1m>\u001b[22m\u001b[39m\u001b[90m 484 | \u001b[39m\n \u001b[90m     | \u001b[39m\u001b[31m\u001b[1m^\u001b[22m\u001b[39m\u001b[0m\n");

/***/ })

/******/ });