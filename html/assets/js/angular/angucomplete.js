"use strict";angular.module("angucomplete-alt",[]).directive("angucompleteAlt",["$q","$parse","$http","$sce","$timeout","$templateCache",function(e,t,n,r,l,i){var s=40,o=39,c=38,a=37,u=27,d=13,g=9,p=3,h=500,f=200,m="autocomplete-required",v="Searching...",S="No results found",w="/angucomplete-alt/index.html";return i.put(w,'<div class="angucomplete-holder" ng-class="{\'angucomplete-dropdown-visible\': showDropdown}">  <input id="{{id}}_value" ng-model="searchStr" ng-disabled="disableInput" type="text" placeholder="{{placeholder}}" ng-focus="onFocusHandler()" class="{{inputClass}}" ng-focus="resetHideResults()" ng-blur="hideResults($event)" autocapitalize="off" autocorrect="off" autocomplete="off" ng-change="inputChangeHandler(searchStr)"/>  <div id="{{id}}_dropdown" class="angucomplete-dropdown" ng-show="showDropdown" ng-hide="!searching && (!results || results.length == 0)">       <div class="angucomplete-searching" ng-show="!searching && (!results || results.length == 0)" ng-bind="textNoResults"></div>    <div class="angucomplete-row" ng-repeat="result in results" ng-click="selectResult(result)" ng-mouseenter="hoverRow($index)" ng-class="{\'angucomplete-selected-row\': $index == currentIndex}">      <div ng-if="imageField" class="angucomplete-image-holder">        <img ng-if="result.image && result.image != \'\'" ng-src="{{result.image}}" class="angucomplete-image"/>        <div ng-if="!result.image && result.image != \'\'" class="angucomplete-image-default"></div>      </div>      <div class="angucomplete-title" ng-if="matchClass" ng-bind-html="result.title"></div>      <div class="angucomplete-title" ng-if="!matchClass">{{ result.title }}</div>      <div ng-if="matchClass && result.description && result.description != \'\'" class="angucomplete-description" ng-bind-html="result.description"></div>      <div ng-if="!matchClass && result.description && result.description != \'\'" class="angucomplete-description">{{result.description}}</div>    </div>  </div></div>'),{restrict:"EA",require:"^?form",scope:{selectedObject:"=",disableInput:"=",initialValue:"@",localData:"=",remoteUrlRequestFormatter:"=",remoteUrlResponseFormatter:"=",remoteUrlErrorCallback:"=",id:"@",placeholder:"@",remoteUrl:"@",remoteUrlDataField:"@",titleField:"@",descriptionField:"@",imageField:"@",inputClass:"@",pause:"@",searchFields:"@",minlength:"@",matchClass:"@",clearSelected:"@",overrideSuggestions:"@",fieldRequired:"@",fieldRequiredClass:"@",inputChanged:"=",autoMatch:"@",focusOut:"&",focusIn:"&"},templateUrl:function(e,t){return t.templateUrl||w},link:function(t,i,w,C){function x(e){return e.which?e.which:e.keyCode}function R(e){"function"==typeof t.selectedObject?t.selectedObject(e):t.selectedObject=e,y(e?!0:!1)}function I(e){return function(n){return t[e]?t[e](n):n}}function b(e){R({originalObject:e}),t.clearSelected&&(t.searchStr=null),_()}function F(e){return t.titleField.split(",").map(function(t){return $(e,t)}).join(" ")}function $(e,t){var n,r;return t?(n=t.split("."),r=e,n.forEach(function(e){r=r[e]})):r=e,r}function D(e,n){var l,i,s=new RegExp(n,"i");return e?(i=e.match(s),l=i?e.replace(s,'<span class="'+t.matchClass+'">'+i[0]+"</span>"):e,r.trustAsHtml(l)):void 0}function y(e){tt=t.searchStr,t.fieldRequired&&C&&C.$setValidity(et,e)}function O(e){var n=x(e);n!==a&&n!==o&&(n===c||n===d?e.preventDefault():n===s?(e.preventDefault(),!t.showDropdown&&t.searchStr&&t.searchStr.length>=X&&(M(),t.searching=!0,G(t.searchStr))):n===u?(_(),t.$apply(function(){W.val(t.searchStr)})):(t.searchStr&&""!==t.searchStr?t.searchStr.length>=X&&(M(),Z&&l.cancel(Z),t.searching=!0,Z=l(function(){G(t.searchStr)},t.pause)):t.showDropdown=!1,tt&&tt!==t.searchStr&&!t.clearSelected&&R(void 0)))}function q(e){!t.overrideSuggestions||t.selectedObject&&t.selectedObject.originalObject===t.searchStr||(e&&e.preventDefault(),b(t.searchStr))}function U(e){var t=getComputedStyle(e);return e.offsetHeight+parseInt(t.marginTop,10)+parseInt(t.marginBottom,10)}function j(){return rt.getBoundingClientRect().top+parseInt(getComputedStyle(rt).maxHeight,10)}function H(){return i[0].querySelectorAll(".angucomplete-row")[t.currentIndex]}function k(){return H().getBoundingClientRect().top-(rt.getBoundingClientRect().top+parseInt(getComputedStyle(rt).paddingTop,10))}function E(e){rt.scrollTop=rt.scrollTop+e}function V(){var e=t.results[t.currentIndex];W.val(t.matchClass?F(e.originalObject):e.title)}function B(e){var n=x(e),r=null,l=null;n===d&&t.results?(t.currentIndex>=0&&t.currentIndex<t.results.length?(e.preventDefault(),t.selectResult(t.results[t.currentIndex])):(q(e),_()),t.$apply()):n===s&&t.results?(e.preventDefault(),t.currentIndex+1<t.results.length&&t.showDropdown&&(t.$apply(function(){t.currentIndex++,V()}),lt&&(r=H(),j()<r.getBoundingClientRect().bottom&&E(U(r))))):n===c&&t.results?(e.preventDefault(),t.currentIndex>=1?(t.$apply(function(){t.currentIndex--,V()}),lt&&(l=k(),0>l&&E(l-1))):0===t.currentIndex&&t.$apply(function(){t.currentIndex=-1,W.val(t.searchStr)})):n===g&&(t.results&&t.results.length>0&&t.showDropdown?-1===t.currentIndex&&t.overrideSuggestions?q():(-1===t.currentIndex&&(t.currentIndex=0),t.selectResult(t.results[t.currentIndex]),t.$digest()):t.searchStr&&t.searchStr.length>0&&q())}function N(e){return function(n){t.searching=!1,J($(P(n),t.remoteUrlDataField),e)}}function T(e,n,r,l){0!==n&&(t.remoteUrlErrorCallback?t.remoteUrlErrorCallback(e,n,r,l):console&&console.error&&console.error("http error"))}function A(){nt&&nt.resolve()}function L(r){var l={},i=t.remoteUrl+r;t.remoteUrlRequestFormatter&&(l={params:t.remoteUrlRequestFormatter(r)},i=t.remoteUrl),A(),nt=e.defer(),l.timeout=nt.promise,n.get(i,l).success(N(r)).error(T)}function _(){t.showDropdown=!1,t.results=[],rt&&(rt.scrollTop=0)}function M(){t.showDropdown=!0,t.currentIndex=-1,t.results=[]}function z(e){var n,r,l,i,s=t.searchFields.split(","),o=[];for(n=0;n<t.localData.length;n++){for(r=!1,l=0;l<s.length;l++)i=$(t.localData[n],s[l])||"",r=r||i.toLowerCase().indexOf(e.toLowerCase())>=0;r&&(o[o.length]=t.localData[n])}t.searching=!1,J(o,e)}function Y(e,n,r){for(var l in n)if(n[l].toLowerCase()===r.toLowerCase())return void t.selectResult(e)}function G(e){e.length<X||(t.localData?t.$apply(function(){z(e)}):L(e))}function J(e,n){var r,l,i,s,o,c;if(e&&e.length>0)for(t.results=[],r=0;r<e.length;r++)t.titleField&&""!==t.titleField&&(s=o=F(e[r])),l="",t.descriptionField&&(l=c=$(e[r],t.descriptionField)),i="",t.imageField&&(i=$(e[r],t.imageField)),t.matchClass&&(o=D(s,n),c=D(l,n)),t.results[t.results.length]={title:o,description:c,image:i,originalObject:e[r]},t.autoMatch&&Y(t.results[t.results.length-1],{title:s,desc:l||""},t.searchStr);else t.results=[]}var K,P,Q,W=i.find("input"),X=p,Z=null,et=m,tt=null,nt=null,rt=i[0].querySelector(".angucomplete-dropdown"),lt=!1,it=null;i.on("mousedown",function(e){it=e.target.id}),t.currentIndex=null,t.searching=!1,t.searchStr=t.initialValue,Q=t.$watch("initialValue",function(e){e&&e.length>0&&(t.searchStr=t.initialValue,y(!0),Q())}),t.$on("angucomplete-alt:clearInput",function(e,n){n?t.id===n&&(t.searchStr=null,_()):(t.searchStr=null,_())}),t.onFocusHandler=function(){t.focusIn&&t.focusIn()},t.hideResults=function(){it===t.id+"_dropdown"?it=null:(K=l(function(){_(),t.$apply(function(){t.searchStr&&t.searchStr.length>0&&W.val(t.searchStr)})},f),A(),t.focusOut&&t.focusOut())},t.resetHideResults=function(){K&&l.cancel(K)},t.hoverRow=function(e){t.currentIndex=e},t.selectResult=function(e){t.matchClass&&(e.title=F(e.originalObject),e.description=$(e.originalObject,t.descriptionField)),t.searchStr=t.clearSelected?null:e.title,R(e),_()},t.inputChangeHandler=function(e){return e.length<X&&_(),t.inputChanged&&(e=t.inputChanged(e)),e},t.fieldRequiredClass&&""!==t.fieldRequiredClass&&(et=t.fieldRequiredClass),t.minlength&&""!==t.minlength&&(X=t.minlength),t.pause||(t.pause=h),t.clearSelected||(t.clearSelected=!1),t.overrideSuggestions||(t.overrideSuggestions=!1),t.fieldRequired&&C&&y(t.initialValue?!0:!1),t.textSearching=w.textSearching?w.textSearching:v,t.textNoResults=w.textNoResults?w.textNoResults:S,W.on("keydown",B),W.on("keyup",O),P=I("remoteUrlResponseFormatter"),t.$on("$destroy",function(){y(!0)}),l(function(){var e=getComputedStyle(rt);lt=e.maxHeight&&"auto"===e.overflowY})}}}]);