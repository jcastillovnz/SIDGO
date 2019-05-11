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

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

<<<<<<< HEAD
throw new Error("Module build failed (from ./node_modules/css-loader/index.js):\nModuleBuildError: Module build failed (from ./node_modules/resolve-url-loader/index.js):\nError: Cannot find module 'object-path'\n    at Function.Module._resolveFilename (internal/modules/cjs/loader.js:613:15)\n    at Function.Module._load (internal/modules/cjs/loader.js:539:25)\n    at Module.require (internal/modules/cjs/loader.js:667:17)\n    at require (C:\\laragon\\www\\SIDGO\\node_modules\\v8-compile-cache\\v8-compile-cache.js:161:20)\n    at Object.<anonymous> (C:\\laragon\\www\\SIDGO\\node_modules\\adjust-sourcemap-loader\\codec\\utility\\get-context-directory.js:4:18)\n    at Module._compile (C:\\laragon\\www\\SIDGO\\node_modules\\v8-compile-cache\\v8-compile-cache.js:192:30)\n    at Object.Module._extensions..js (internal/modules/cjs/loader.js:749:10)\n    at Module.load (internal/modules/cjs/loader.js:630:32)\n    at tryModuleLoad (internal/modules/cjs/loader.js:570:12)\n    at Function.Module._load (internal/modules/cjs/loader.js:562:3)\n    at Module.require (internal/modules/cjs/loader.js:667:17)\n    at require (C:\\laragon\\www\\SIDGO\\node_modules\\v8-compile-cache\\v8-compile-cache.js:161:20)\n    at Object.<anonymous> (C:\\laragon\\www\\SIDGO\\node_modules\\adjust-sourcemap-loader\\codec\\project-relative.js:6:27)\n    at Module._compile (C:\\laragon\\www\\SIDGO\\node_modules\\v8-compile-cache\\v8-compile-cache.js:192:30)\n    at Object.Module._extensions..js (internal/modules/cjs/loader.js:749:10)\n    at Module.load (internal/modules/cjs/loader.js:630:32)\n    at tryModuleLoad (internal/modules/cjs/loader.js:570:12)\n    at Function.Module._load (internal/modules/cjs/loader.js:562:3)\n    at Module.require (internal/modules/cjs/loader.js:667:17)\n    at require (C:\\laragon\\www\\SIDGO\\node_modules\\v8-compile-cache\\v8-compile-cache.js:161:20)\n    at Object.<anonymous> (C:\\laragon\\www\\SIDGO\\node_modules\\adjust-sourcemap-loader\\codec\\webpack-protocol.js:3:23)\n    at Module._compile (C:\\laragon\\www\\SIDGO\\node_modules\\v8-compile-cache\\v8-compile-cache.js:192:30)\n    at Object.Module._extensions..js (internal/modules/cjs/loader.js:749:10)\n    at Module.load (internal/modules/cjs/loader.js:630:32)\n    at tryModuleLoad (internal/modules/cjs/loader.js:570:12)\n    at Function.Module._load (internal/modules/cjs/loader.js:562:3)\n    at Module.require (internal/modules/cjs/loader.js:667:17)\n    at require (C:\\laragon\\www\\SIDGO\\node_modules\\v8-compile-cache\\v8-compile-cache.js:161:20)\n    at Object.<anonymous> (C:\\laragon\\www\\SIDGO\\node_modules\\adjust-sourcemap-loader\\codec\\index.js:2:3)\n    at Module._compile (C:\\laragon\\www\\SIDGO\\node_modules\\v8-compile-cache\\v8-compile-cache.js:192:30)\n    at Object.Module._extensions..js (internal/modules/cjs/loader.js:749:10)\n    at Module.load (internal/modules/cjs/loader.js:630:32)\n    at tryModuleLoad (internal/modules/cjs/loader.js:570:12)\n    at Function.Module._load (internal/modules/cjs/loader.js:562:3)\n    at Module.require (internal/modules/cjs/loader.js:667:17)\n    at require (C:\\laragon\\www\\SIDGO\\node_modules\\v8-compile-cache\\v8-compile-cache.js:161:20)\n    at runLoaders (C:\\laragon\\www\\SIDGO\\node_modules\\webpack\\lib\\NormalModule.js:301:20)\n    at C:\\laragon\\www\\SIDGO\\node_modules\\loader-runner\\lib\\LoaderRunner.js:367:11\n    at C:\\laragon\\www\\SIDGO\\node_modules\\loader-runner\\lib\\LoaderRunner.js:172:11\n    at loadLoader (C:\\laragon\\www\\SIDGO\\node_modules\\loader-runner\\lib\\loadLoader.js:32:11)\n    at iteratePitchingLoaders (C:\\laragon\\www\\SIDGO\\node_modules\\loader-runner\\lib\\LoaderRunner.js:169:2)\n    at iteratePitchingLoaders (C:\\laragon\\www\\SIDGO\\node_modules\\loader-runner\\lib\\LoaderRunner.js:165:10)\n    at C:\\laragon\\www\\SIDGO\\node_modules\\loader-runner\\lib\\LoaderRunner.js:176:18\n    at loadLoader (C:\\laragon\\www\\SIDGO\\node_modules\\loader-runner\\lib\\loadLoader.js:47:3)\n    at iteratePitchingLoaders (C:\\laragon\\www\\SIDGO\\node_modules\\loader-runner\\lib\\LoaderRunner.js:169:2)\n    at iteratePitchingLoaders (C:\\laragon\\www\\SIDGO\\node_modules\\loader-runner\\lib\\LoaderRunner.js:165:10)\n    at C:\\laragon\\www\\SIDGO\\node_modules\\loader-runner\\lib\\LoaderRunner.js:176:18\n    at loadLoader (C:\\laragon\\www\\SIDGO\\node_modules\\loader-runner\\lib\\loadLoader.js:47:3)\n    at iteratePitchingLoaders (C:\\laragon\\www\\SIDGO\\node_modules\\loader-runner\\lib\\LoaderRunner.js:169:2)\n    at runLoaders (C:\\laragon\\www\\SIDGO\\node_modules\\loader-runner\\lib\\LoaderRunner.js:365:2)\n    at NormalModule.doBuild (C:\\laragon\\www\\SIDGO\\node_modules\\webpack\\lib\\NormalModule.js:280:3)\n    at NormalModule.build (C:\\laragon\\www\\SIDGO\\node_modules\\webpack\\lib\\NormalModule.js:427:15)\n    at Compilation.buildModule (C:\\laragon\\www\\SIDGO\\node_modules\\webpack\\lib\\Compilation.js:635:10)\n    at moduleFactory.create (C:\\laragon\\www\\SIDGO\\node_modules\\webpack\\lib\\Compilation.js:1021:12)\n    at factory (C:\\laragon\\www\\SIDGO\\node_modules\\webpack\\lib\\NormalModuleFactory.js:405:6)\n    at hooks.afterResolve.callAsync (C:\\laragon\\www\\SIDGO\\node_modules\\webpack\\lib\\NormalModuleFactory.js:155:13)\n    at AsyncSeriesWaterfallHook.eval [as callAsync] (eval at create (C:\\laragon\\www\\SIDGO\\node_modules\\tapable\\lib\\HookCodeFactory.js:33:10), <anonymous>:6:1)\n    at AsyncSeriesWaterfallHook.lazyCompileHook (C:\\laragon\\www\\SIDGO\\node_modules\\tapable\\lib\\Hook.js:154:20)\n    at resolver (C:\\laragon\\www\\SIDGO\\node_modules\\webpack\\lib\\NormalModuleFactory.js:138:29)\n    at process.nextTick (C:\\laragon\\www\\SIDGO\\node_modules\\webpack\\lib\\NormalModuleFactory.js:342:9)\n    at processTicksAndRejections (internal/process/next_tick.js:74:9)");
=======
throw new Error("Module build failed (from ./node_modules/extract-text-webpack-plugin/dist/loader.js):\nC:\\laragon\\www\\SIDGO\\node_modules\\webpack\\lib\\node\\NodeTemplatePlugin.js:1\n(function (exports, require, module, __filename, __dirname) { �X\u0004�s�>\u0007���{|����RCdR4\u0014�&,(�,�B\u0001s��b�b��\u0012�q\u0011*�pb��Q����\u001f\u000f�\u0012Ae�����(�\f��<�B���*�V��G��ǵ�����O �w�\u0010�ךY:E��\u0010\n                                                              ^\n\nSyntaxError: Invalid or unexpected token\n    at new Script (vm.js:85:7)\n    at NativeCompileCache._moduleCompile (C:\\laragon\\www\\SIDGO\\node_modules\\v8-compile-cache\\v8-compile-cache.js:226:18)\n    at Module._compile (C:\\laragon\\www\\SIDGO\\node_modules\\v8-compile-cache\\v8-compile-cache.js:172:36)\n    at Object.Module._extensions..js (internal/modules/cjs/loader.js:749:10)\n    at Module.load (internal/modules/cjs/loader.js:630:32)\n    at tryModuleLoad (internal/modules/cjs/loader.js:570:12)\n    at Function.Module._load (internal/modules/cjs/loader.js:562:3)\n    at Module.require (internal/modules/cjs/loader.js:667:17)\n    at require (C:\\laragon\\www\\SIDGO\\node_modules\\v8-compile-cache\\v8-compile-cache.js:159:20)\n    at Object.<anonymous> (C:\\laragon\\www\\SIDGO\\node_modules\\extract-text-webpack-plugin\\dist\\loader.js:20:27)\n    at Module._compile (C:\\laragon\\www\\SIDGO\\node_modules\\v8-compile-cache\\v8-compile-cache.js:178:30)\n    at Object.Module._extensions..js (internal/modules/cjs/loader.js:749:10)\n    at Module.load (internal/modules/cjs/loader.js:630:32)\n    at tryModuleLoad (internal/modules/cjs/loader.js:570:12)\n    at Function.Module._load (internal/modules/cjs/loader.js:562:3)\n    at Module.require (internal/modules/cjs/loader.js:667:17)\n    at require (C:\\laragon\\www\\SIDGO\\node_modules\\v8-compile-cache\\v8-compile-cache.js:159:20)\n    at loadLoader (C:\\laragon\\www\\SIDGO\\node_modules\\loader-runner\\lib\\loadLoader.js:18:17)\n    at iteratePitchingLoaders (C:\\laragon\\www\\SIDGO\\node_modules\\loader-runner\\lib\\LoaderRunner.js:169:2)\n    at runLoaders (C:\\laragon\\www\\SIDGO\\node_modules\\loader-runner\\lib\\LoaderRunner.js:365:2)\n    at NormalModule.doBuild (C:\\laragon\\www\\SIDGO\\node_modules\\webpack\\lib\\NormalModule.js:280:3)\n    at NormalModule.build (C:\\laragon\\www\\SIDGO\\node_modules\\webpack\\lib\\NormalModule.js:427:15)\n    at Compilation.buildModule (C:\\laragon\\www\\SIDGO\\node_modules\\webpack\\lib\\Compilation.js:635:10)\n    at factory.create (C:\\laragon\\www\\SIDGO\\node_modules\\webpack\\lib\\Compilation.js:884:14)\n    at factory (C:\\laragon\\www\\SIDGO\\node_modules\\webpack\\lib\\NormalModuleFactory.js:405:6)\n    at hooks.afterResolve.callAsync (C:\\laragon\\www\\SIDGO\\node_modules\\webpack\\lib\\NormalModuleFactory.js:155:13)\n    at AsyncSeriesWaterfallHook.eval [as callAsync] (eval at create (C:\\laragon\\www\\SIDGO\\node_modules\\tapable\\lib\\HookCodeFactory.js:33:10), <anonymous>:6:1)\n    at AsyncSeriesWaterfallHook.lazyCompileHook (C:\\laragon\\www\\SIDGO\\node_modules\\tapable\\lib\\Hook.js:154:20)\n    at resolver (C:\\laragon\\www\\SIDGO\\node_modules\\webpack\\lib\\NormalModuleFactory.js:138:29)\n    at process.nextTick (C:\\laragon\\www\\SIDGO\\node_modules\\webpack\\lib\\NormalModuleFactory.js:342:9)\n    at processTicksAndRejections (internal/process/next_tick.js:74:9)");
>>>>>>> parent of dd2b44e... REPARADO

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

<<<<<<< HEAD
__webpack_require__(/*! C:\laragon\www\SIDGO\resources\js\app.js */"./resources/js/app.js");
=======
!(function webpackMissingModule() { var e = new Error("Cannot find module 'C:\\laragon\\www\\SIDGO\\resources\\js\\app.js'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());
>>>>>>> parent of dd2b44e... REPARADO
module.exports = __webpack_require__(/*! C:\laragon\www\SIDGO\resources\sass\app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });