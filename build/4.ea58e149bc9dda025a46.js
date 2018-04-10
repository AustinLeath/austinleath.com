(window.webpackJsonp=window.webpackJsonp||[]).push([[4],{"./src/app/components/Pages/Leaderboard/Chankaboard.tsx":function(module,__webpack_exports__,__webpack_require__){"use strict";__webpack_require__.r(__webpack_exports__),function(module){var react__WEBPACK_IMPORTED_MODULE_0__=__webpack_require__("./node_modules/react/index.js"),react__WEBPACK_IMPORTED_MODULE_0___default=__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__),react_hot_loader__WEBPACK_IMPORTED_MODULE_1__=__webpack_require__("./node_modules/react-hot-loader/index.js"),react_hot_loader__WEBPACK_IMPORTED_MODULE_1___default=__webpack_require__.n(react_hot_loader__WEBPACK_IMPORTED_MODULE_1__),react_redux__WEBPACK_IMPORTED_MODULE_2__=__webpack_require__("./node_modules/react-redux/es/index.js"),lib_store_actions__WEBPACK_IMPORTED_MODULE_3__=__webpack_require__("./src/app/lib/store/actions/index.ts"),lib_domain__WEBPACK_IMPORTED_MODULE_4__=__webpack_require__("./src/app/lib/domain.ts"),redux_first_router_link__WEBPACK_IMPORTED_MODULE_5__=__webpack_require__("./node_modules/redux-first-router-link/dist/index.js"),redux_first_router_link__WEBPACK_IMPORTED_MODULE_5___default=__webpack_require__.n(redux_first_router_link__WEBPACK_IMPORTED_MODULE_5__),components_misc_FadeImage__WEBPACK_IMPORTED_MODULE_6__=__webpack_require__("./src/app/components/misc/FadeImage/index.tsx"),components_misc_Loading__WEBPACK_IMPORTED_MODULE_7__=__webpack_require__("./src/app/components/misc/Loading/index.tsx"),components_misc_Page__WEBPACK_IMPORTED_MODULE_8__=__webpack_require__("./src/app/components/misc/Page/index.tsx"),assets_backgrounds_chankaboard_jpg__WEBPACK_IMPORTED_MODULE_9__=__webpack_require__("./src/assets/backgrounds/chankaboard.jpg"),assets_backgrounds_chankaboard_jpg__WEBPACK_IMPORTED_MODULE_9___default=__webpack_require__.n(assets_backgrounds_chankaboard_jpg__WEBPACK_IMPORTED_MODULE_9__),enterModule;function _inheritsLoose(_,e){_.prototype=Object.create(e.prototype),_.prototype.constructor=_,_.__proto__=e}enterModule=__webpack_require__("./node_modules/react-hot-loader/index.js").enterModule,enterModule&&enterModule(module);var isSelected=function(_,e){return _===e},Chankaboard=function(_React$Component){function Chankaboard(_){return _React$Component.call(this,_)||this}_inheritsLoose(Chankaboard,_React$Component);var _proto=Chankaboard.prototype;return _proto.changePlatform=function(_){this.props.changePlatform(_),this.props.load(_)},_proto.render=function(){var _=this;return react__WEBPACK_IMPORTED_MODULE_0__.createElement(components_misc_Page__WEBPACK_IMPORTED_MODULE_8__.c,{className:"leaderboard"},react__WEBPACK_IMPORTED_MODULE_0__.createElement(components_misc_Page__WEBPACK_IMPORTED_MODULE_8__.b,{image:assets_backgrounds_chankaboard_jpg__WEBPACK_IMPORTED_MODULE_9___default.a,position:"50% 60%"},react__WEBPACK_IMPORTED_MODULE_0__.createElement("div",{className:"container leaderboard__header"},react__WEBPACK_IMPORTED_MODULE_0__.createElement("h1",{className:"header leaderboard__title"},"Most kills with Tachanka LMG"))),react__WEBPACK_IMPORTED_MODULE_0__.createElement(components_misc_Page__WEBPACK_IMPORTED_MODULE_8__.a,null,react__WEBPACK_IMPORTED_MODULE_0__.createElement("div",{className:"container"},react__WEBPACK_IMPORTED_MODULE_0__.createElement("div",{className:"leaderboard__filters"},react__WEBPACK_IMPORTED_MODULE_0__.createElement("p",{className:"leaderboard__platform"},react__WEBPACK_IMPORTED_MODULE_0__.createElement("label",{htmlFor:"platformselect"},"Platform"),react__WEBPACK_IMPORTED_MODULE_0__.createElement("select",{id:"platformselect",value:this.props.platform,onChange:function(e){return _.changePlatform(e.target.value)}},react__WEBPACK_IMPORTED_MODULE_0__.createElement("option",{value:"PC"},"PC"),react__WEBPACK_IMPORTED_MODULE_0__.createElement("option",{value:"PS4"},"PS4"),react__WEBPACK_IMPORTED_MODULE_0__.createElement("option",{value:"XBOX"},"XBOX")))),react__WEBPACK_IMPORTED_MODULE_0__.createElement("table",{className:"container container-small leaderboard__entries"},react__WEBPACK_IMPORTED_MODULE_0__.createElement("thead",{className:"leaderboard__entriesheader"},react__WEBPACK_IMPORTED_MODULE_0__.createElement("tr",null,react__WEBPACK_IMPORTED_MODULE_0__.createElement("th",null,"Rank"),react__WEBPACK_IMPORTED_MODULE_0__.createElement("th",null,"Player"),react__WEBPACK_IMPORTED_MODULE_0__.createElement("th",null,"Kills"))),react__WEBPACK_IMPORTED_MODULE_0__.createElement("tbody",{className:"leaderboard__entriesbody"},this.props.entries.map(function(e,a){return react__WEBPACK_IMPORTED_MODULE_0__.createElement("tr",{className:"entry",key:e.id},react__WEBPACK_IMPORTED_MODULE_0__.createElement("td",null,react__WEBPACK_IMPORTED_MODULE_0__.createElement("span",{className:"entry__placement"},a+1),react__WEBPACK_IMPORTED_MODULE_0__.createElement("span",{className:"entry__medal"})),react__WEBPACK_IMPORTED_MODULE_0__.createElement("td",null,react__WEBPACK_IMPORTED_MODULE_0__.createElement(redux_first_router_link__WEBPACK_IMPORTED_MODULE_5___default.a,{to:Object(lib_store_actions__WEBPACK_IMPORTED_MODULE_3__.b)(e.id),className:"entry__info"},react__WEBPACK_IMPORTED_MODULE_0__.createElement("div",{className:"entry__image"},react__WEBPACK_IMPORTED_MODULE_0__.createElement(components_misc_FadeImage__WEBPACK_IMPORTED_MODULE_6__.b,{src:Object(lib_domain__WEBPACK_IMPORTED_MODULE_4__.b)(e.userId||e.id,_.props.platform)})),react__WEBPACK_IMPORTED_MODULE_0__.createElement("span",{className:"entry__name"},e.name))),react__WEBPACK_IMPORTED_MODULE_0__.createElement("td",{className:"entry__rating"},0|e.value))}))),this.props.loading?react__WEBPACK_IMPORTED_MODULE_0__.createElement(components_misc_Loading__WEBPACK_IMPORTED_MODULE_7__.a,null):null)))},_proto.__reactstandin__regenerateByEval=function __reactstandin__regenerateByEval(key,code){this[key]=eval(code)},Chankaboard}(react__WEBPACK_IMPORTED_MODULE_0__.Component),mapStateToProps=function(_){return{loading:_.loading,platform:_.platform,entries:_.chankaboard||[]}},mapDispatchToProps=function(_){return{changePlatform:function(e){return _({type:"PLATFORM",payload:e})},load:function(e){return _({type:"CHANKABOARD",payload:{platform:e}})}}},_default=Object(react_hot_loader__WEBPACK_IMPORTED_MODULE_1__.hot)(module)(Object(react_redux__WEBPACK_IMPORTED_MODULE_2__.connect)(mapStateToProps,mapDispatchToProps)(Chankaboard)),reactHotLoader,leaveModule;__webpack_exports__.default=_default,reactHotLoader=__webpack_require__("./node_modules/react-hot-loader/index.js").default,leaveModule=__webpack_require__("./node_modules/react-hot-loader/index.js").leaveModule,reactHotLoader&&(reactHotLoader.register(isSelected,"isSelected","C:\\Users\\Austin.L\\Documents\\GitHub\\frontend\\src\\app\\components\\Pages\\Leaderboard\\Chankaboard.tsx"),reactHotLoader.register(Chankaboard,"Chankaboard","C:\\Users\\Austin.L\\Documents\\GitHub\\frontend\\src\\app\\components\\Pages\\Leaderboard\\Chankaboard.tsx"),reactHotLoader.register(mapStateToProps,"mapStateToProps","C:\\Users\\Austin.L\\Documents\\GitHub\\frontend\\src\\app\\components\\Pages\\Leaderboard\\Chankaboard.tsx"),reactHotLoader.register(mapDispatchToProps,"mapDispatchToProps","C:\\Users\\Austin.L\\Documents\\GitHub\\frontend\\src\\app\\components\\Pages\\Leaderboard\\Chankaboard.tsx"),reactHotLoader.register(_default,"default","C:\\Users\\Austin.L\\Documents\\GitHub\\frontend\\src\\app\\components\\Pages\\Leaderboard\\Chankaboard.tsx"),leaveModule(module))}.call(this,__webpack_require__("./node_modules/webpack/buildin/harmony-module.js")(module))},"./src/assets/backgrounds/chankaboard.jpg":function(_,e,a){_.exports={srcSet:a.p+"3d47e7ce15f85adf41ff9142533ac026-320.jpg 320w,"+a.p+"ddbb1dd175f54e0fa53c16a379d0d07d-640.jpg 640w,"+a.p+"45258bd3b94868f38ec716022622f661-1200.jpg 1200w,"+a.p+"e3a7812b892b8e677e959a28d89140e4-1600.jpg 1600w,"+a.p+"8d5edaf7f8929569f0cf6533b48bc39a-1920.jpg 1920w",images:[{path:a.p+"3d47e7ce15f85adf41ff9142533ac026-320.jpg",width:320,height:179},{path:a.p+"ddbb1dd175f54e0fa53c16a379d0d07d-640.jpg",width:640,height:358},{path:a.p+"45258bd3b94868f38ec716022622f661-1200.jpg",width:1200,height:672},{path:a.p+"e3a7812b892b8e677e959a28d89140e4-1600.jpg",width:1600,height:896},{path:a.p+"8d5edaf7f8929569f0cf6533b48bc39a-1920.jpg",width:1920,height:1075}],src:a.p+"3d47e7ce15f85adf41ff9142533ac026-320.jpg",toString:function(){return a.p+"3d47e7ce15f85adf41ff9142533ac026-320.jpg"},placeholder:"data:image/jpeg;base64,/9j/2wBDAAUDBAQEAwUEBAQFBQUGBwwIBwcHBw8LCwkMEQ8SEhEPERETFhwXExQaFRERGCEYGh0dHx8fExciJCIeJBweHx7/2wBDAQUFBQcGBw4ICA4eFBEUHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh7/wAARCAAWACgDASIAAhEBAxEB/8QAGgABAAIDAQAAAAAAAAAAAAAAAAUGAQIIB//EACkQAAEDAwMCBwADAAAAAAAAAAECAwQABREGEiExQQcTIlFhcZEjgcH/xAAYAQEAAwEAAAAAAAAAAAAAAAAEAQMGAv/EACQRAAIBBAAFBQAAAAAAAAAAAAECAAMEESEFEjFBUSKBobHw/9oADAMBAAIRAxEAPwDmNyyMR7YqYxIXJaW6ltCy1t525UCMnkHip6x6Gn3Cwv3eFtcZacSgjPqGaxDbZkRWIbYKI6SThBxyTyf3tV2hXnSdh0iYxlzmrmiWUvRUugodb2ApUO3fHPtWcrXNxy4p7OfibAWdspBq6GO3mVheiHk2puaJbClrWUeSFpLgI905yB8ng1GXHRkmOlpTrzZEhhTrXPXacY/RVvZ1bp+OoMNQYkppaBlwqCVJVnpkDsD8c1tPett8mtNW10NrhKKlIU5/EUFXJCv76ff3XJubnI1gShLe1RuvNKNc9KBelId9ckORwqGdqCwSHXUOKSUhXQYTtJ+xSvf9Y33w0b8IU2qe1511Z3FjAKgFqABVwMYxSr+H3tSsrF1IwT2+oS9oCm4Cj9595zHbZTrC0OJecTjnANSi348yeqU4XwVY44POMf5SlMqAA5k02PSTFpfhp2EsLX13A4GfysSb+WZQDMZKAlISAD2zmlKOFDHcUXZB6ZCXa5vS21MqUvbnHqOT1pSlKQBRgQVRizZM/9k=",width:320,height:179}}}]);
//# sourceMappingURL=4.ea58e149bc9dda025a46.js.map