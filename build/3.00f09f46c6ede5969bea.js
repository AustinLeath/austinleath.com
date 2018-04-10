(window.webpackJsonp=window.webpackJsonp||[]).push([[3],{"./src/app/components/Pages/Faq/faq.scss":function(e,t,_){},"./src/app/components/Pages/Faq/index.tsx":function(module,__webpack_exports__,__webpack_require__){"use strict";__webpack_require__.r(__webpack_exports__),function(module){var react__WEBPACK_IMPORTED_MODULE_0__=__webpack_require__("./node_modules/react/index.js"),react__WEBPACK_IMPORTED_MODULE_0___default=__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__),react_hot_loader__WEBPACK_IMPORTED_MODULE_1__=__webpack_require__("./node_modules/react-hot-loader/index.js"),react_hot_loader__WEBPACK_IMPORTED_MODULE_1___default=__webpack_require__.n(react_hot_loader__WEBPACK_IMPORTED_MODULE_1__),components_misc_Page__WEBPACK_IMPORTED_MODULE_2__=__webpack_require__("./src/app/components/misc/Page/index.tsx"),_faq_scss__WEBPACK_IMPORTED_MODULE_3__=__webpack_require__("./src/app/components/Pages/Faq/faq.scss"),_faq_scss__WEBPACK_IMPORTED_MODULE_3___default=__webpack_require__.n(_faq_scss__WEBPACK_IMPORTED_MODULE_3__),enterModule;function _inheritsLoose(e,t){e.prototype=Object.create(t.prototype),e.prototype.constructor=e,e.__proto__=t}enterModule=__webpack_require__("./node_modules/react-hot-loader/index.js").enterModule,enterModule&&enterModule(module);var Question=function(_React$Component){function Question(e){var t;return(t=_React$Component.call(this,e)||this).state={open:!0},t}_inheritsLoose(Question,_React$Component);var _proto=Question.prototype;return _proto.toggle=function(){this.setState({open:!this.state.open})},_proto.render=function(){var e=this;return react__WEBPACK_IMPORTED_MODULE_0__.createElement("article",{className:"faq__item "+(this.state.open?"is-open":"is-closed")},react__WEBPACK_IMPORTED_MODULE_0__.createElement("a",{role:"header",className:"faq__item__question",onClick:function(){return e.toggle()}},this.props.question),react__WEBPACK_IMPORTED_MODULE_0__.createElement("section",{className:"faq__item__answer"},this.props.children))},_proto.__reactstandin__regenerateByEval=function __reactstandin__regenerateByEval(key,code){this[key]=eval(code)},Question}(react__WEBPACK_IMPORTED_MODULE_0__.Component);function FAQ(e){return react__WEBPACK_IMPORTED_MODULE_0__.createElement(components_misc_Page__WEBPACK_IMPORTED_MODULE_2__.c,{className:"faq"},react__WEBPACK_IMPORTED_MODULE_0__.createElement(components_misc_Page__WEBPACK_IMPORTED_MODULE_2__.b,null,react__WEBPACK_IMPORTED_MODULE_0__.createElement("div",{className:"container"},react__WEBPACK_IMPORTED_MODULE_0__.createElement("div",{className:"header"},"Frequently Asked Questions"))),react__WEBPACK_IMPORTED_MODULE_0__.createElement(components_misc_Page__WEBPACK_IMPORTED_MODULE_2__.a,null,react__WEBPACK_IMPORTED_MODULE_0__.createElement("div",{className:"container container--small"},react__WEBPACK_IMPORTED_MODULE_0__.createElement(Question,{question:"How is 'skill-rating' on the leaderboard determined?"},react__WEBPACK_IMPORTED_MODULE_0__.createElement("p",null,"The matchmaking algorithm creates a ",react__WEBPACK_IMPORTED_MODULE_0__.createElement("i",null,"skill-rating")," value for each player that it uses to find opponents. When you start out, you have a skill-rating of 25. This value gets updated by playing. Basically, the better you perform, the higher your skill-rating."),react__WEBPACK_IMPORTED_MODULE_0__.createElement("p",null,"Because such system can't be perfect, another variable exists: ",react__WEBPACK_IMPORTED_MODULE_0__.createElement("i",null,"uncertainty"),'. As the name suggests, uncertainty models how accurate your skill-rating is. As you play, the uncertainty value constantly falls and approaches zero: "Perfect certainty". The points you see in-game is called the mmr (MatchMaking Rating). This value is calculated from your skill-rating, and up until Red Crow, also took your playtime into consideration.'),react__WEBPACK_IMPORTED_MODULE_0__.createElement("p",null,"How does this relate to the leaderboard? When we decided on creating one, we had to find a stat to use as ranking. In our opinion win-rate and kill-death-ratio are not suitable for that, because they are easily skewed. For example:",react__WEBPACK_IMPORTED_MODULE_0__.createElement("blockquote",null,"In Season 2 (Dust Line) we managed to go on a 80 win streak in ranked. ",react__WEBPACK_IMPORTED_MODULE_0__.createElement("br",null),"We even managed to bring one of our mates up to a 54 win/loss ratio (thats 98%). There were (and still are) obviously way better players than us, but we had the nice stats."),'We\'d be "better" than most players, even though we really are not (well, except one).'," ",react__WEBPACK_IMPORTED_MODULE_0__.createElement("br",null),"After a bit of thinking we realized, that the game already tracks player performance: the skill-rating. By taking the skill-rating and subtracting the uncertainty, we get a value that basically describes the concept of 'you are guaranteed to be at least this good'. ",react__WEBPACK_IMPORTED_MODULE_0__.createElement("br",null),"We feel that this value is the safest and closest we can get to an accurate representation of player ability."),react__WEBPACK_IMPORTED_MODULE_0__.createElement("p",null,"TLDR: ",react__WEBPACK_IMPORTED_MODULE_0__.createElement("em",null,'"skill-rating" = skill - uncertainty')),react__WEBPACK_IMPORTED_MODULE_0__.createElement("p",null,"Of course, the board is skewed towards pre-made teams (as they have a significantly higher win-rate), but given the data we have, its the best metric.")),react__WEBPACK_IMPORTED_MODULE_0__.createElement(Question,{question:"When I search for my name it says that I haven't played the game yet..."},react__WEBPACK_IMPORTED_MODULE_0__.createElement("p",null,"The error can be triggered in multiple ways:",react__WEBPACK_IMPORTED_MODULE_0__.createElement("ul",null,react__WEBPACK_IMPORTED_MODULE_0__.createElement("li",null,"we didn't grab your data yet. Try again in a few minutes"),react__WEBPACK_IMPORTED_MODULE_0__.createElement("li",null,"you're looking on the wrong platform (see links at the top of the menu)"),react__WEBPACK_IMPORTED_MODULE_0__.createElement("li",null,"you actually don't own the game, or didn't play")))),react__WEBPACK_IMPORTED_MODULE_0__.createElement(Question,{question:"I won a match and should appear on the leaderboard. Why am i not on there?"},react__WEBPACK_IMPORTED_MODULE_0__.createElement("p",null,"We only update the leaderboard every 24 hours. Because of this it can take a bit until you show up there. ",react__WEBPACK_IMPORTED_MODULE_0__.createElement("br",null),"Also keep in mind, that we subtract your uncertainty from your skill-rating for the leaderboard (see first question)")),react__WEBPACK_IMPORTED_MODULE_0__.createElement(Question,{question:"I want to develop my own stuff with r6db data. Do you guys have an API?"},react__WEBPACK_IMPORTED_MODULE_0__.createElement("p",null,"The short answer is yes. Shoot us a mail and we'll get you going. Just to make it clear:",react__WEBPACK_IMPORTED_MODULE_0__.createElement("em",null,"We can and do NOT give any guarantee about uptime and availability for the API.")," ","While Muppet does give his best, it ",react__WEBPACK_IMPORTED_MODULE_0__.createElement("i",null,"is")," still a hobby project.")))))}var _default=Object(react_hot_loader__WEBPACK_IMPORTED_MODULE_1__.hot)(module)(FAQ),reactHotLoader,leaveModule;__webpack_exports__.default=_default,reactHotLoader=__webpack_require__("./node_modules/react-hot-loader/index.js").default,leaveModule=__webpack_require__("./node_modules/react-hot-loader/index.js").leaveModule,reactHotLoader&&(reactHotLoader.register(Question,"Question","C:\\Users\\Austin.L\\Documents\\GitHub\\frontend\\src\\app\\components\\Pages\\Faq\\index.tsx"),reactHotLoader.register(FAQ,"FAQ","C:\\Users\\Austin.L\\Documents\\GitHub\\frontend\\src\\app\\components\\Pages\\Faq\\index.tsx"),reactHotLoader.register(_default,"default","C:\\Users\\Austin.L\\Documents\\GitHub\\frontend\\src\\app\\components\\Pages\\Faq\\index.tsx"),leaveModule(module))}.call(this,__webpack_require__("./node_modules/webpack/buildin/harmony-module.js")(module))}}]);
//# sourceMappingURL=3.00f09f46c6ede5969bea.js.map