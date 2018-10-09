!function(e){function t(l){if(n[l])return n[l].exports;var a=n[l]={i:l,l:!1,exports:{}};return e[l].call(a.exports,a,a.exports,t),a.l=!0,a.exports}var n={};t.m=e,t.c=n,t.d=function(e,n,l){t.o(e,n)||Object.defineProperty(e,n,{configurable:!1,enumerable:!0,get:l})},t.n=function(e){var n=e&&e.__esModule?function(){return e.default}:function(){return e};return t.d(n,"a",n),n},t.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},t.p="",t(t.s=0)}([function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var l=(n(1),n(4)),a=(n.n(l),n(5)),r=(n.n(a),n(6));n.n(r)},function(e,t,n){"use strict";var l=n(2),a=(n.n(l),n(3)),r=(n.n(a),wp.i18n.__),o=wp.blocks.registerBlockType,c=wp.components,i=c.PanelBody,u=c.RadioControl,p=c.ToggleControl,s=wp.editor,m=s.InspectorControls,w=s.InnerBlocks,d=wp.element.Fragment,b=["pb/column","pb/full","pb/main","pb/sub"],f=function(e){switch(e){case"full":return[["pb/full"]];case"split":return[["pb/main"],["pb/sub"]];default:return[["pb/full"]]}};o("pb/panel",{title:r("Panel"),icon:"welcome-widgets-menus",category:"layout",keywords:[r("Panel"),r("PB Panel")],attributes:{type:{type:"string",default:"full"},contained:{type:"boolean",default:!1}},edit:function(e){function t(){r({contained:!a})}var n=e.attributes,l=n.type,a=n.contained,r=e.setAttributes;return wp.element.createElement(d,null,wp.element.createElement(m,null,wp.element.createElement(i,null,wp.element.createElement(u,{label:"Panel Type",help:"The type of Panel to display",selected:l,options:[{label:"Split",value:"split"},{label:"Full",value:"full"}],onChange:function(e){r({type:e})}}),wp.element.createElement(p,{label:"Contained",checked:a,onChange:t}))),a?wp.element.createElement("div",{className:"pbpanel"},wp.element.createElement("div",{class:"container"},wp.element.createElement("div",{class:"row"},wp.element.createElement(w,{template:f(l),allowedBlocks:b})))):wp.element.createElement("div",{className:"pbpanel"},wp.element.createElement(w,{template:f(l),allowedBlocks:b})))},save:function(e){var t=e.attributes,n=(t.type,t.contained);return wp.element.createElement("div",{className:"panel"},n?wp.element.createElement("div",{className:"container"},wp.element.createElement("div",{class:"row"},wp.element.createElement(w.Content,null))):wp.element.createElement(w.Content,null))}})},function(e,t){},function(e,t){},function(e,t){var n=wp.i18n.__,l=wp.blocks.registerBlockType,a=wp.editor.InnerBlocks;l("pb/full",{title:n("Column - Full"),parent:["pb/panel"],icon:"welcome-widgets-menus",description:n("A single full width column within a panel block."),category:"layout",keywords:[n("Column"),n("Full"),n("PB Column")],supports:{inserter:!1},attributes:{},edit:function(){return wp.element.createElement("div",{className:"full"},wp.element.createElement(a,null))},save:function(){return wp.element.createElement("div",{className:"full"},wp.element.createElement(a.Content,null))}})},function(e,t){var n=wp.i18n.__,l=wp.blocks.registerBlockType,a=wp.editor.InnerBlocks;l("pb/main",{title:n("Column - Main"),parent:["pb/panel"],icon:"welcome-widgets-menus",description:n("A single main column within a panel block."),category:"layout",keywords:[n("Column"),n("Main"),n("PB Column")],supports:{inserter:!1},attributes:{},edit:function(){return wp.element.createElement("div",{className:"main"},wp.element.createElement(a,null))},save:function(){return wp.element.createElement("div",{className:"main"},wp.element.createElement(a.Content,null))}})},function(e,t){var n=wp.i18n.__,l=wp.blocks.registerBlockType,a=wp.editor.InnerBlocks;l("pb/sub",{title:n("Column - Sub"),parent:["pb/panel"],icon:"welcome-widgets-menus",description:n("A single sub column within a panel block."),category:"layout",keywords:[n("Column"),n("Sub"),n("PB Column")],supports:{inserter:!1},attributes:{},edit:function(){return wp.element.createElement("div",{className:"sub"},wp.element.createElement(a,null))},save:function(){return wp.element.createElement("div",{className:"sub"},wp.element.createElement(a.Content,null))}})}]);