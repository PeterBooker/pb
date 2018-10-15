!function(t){var a={};function o(i){if(a[i])return a[i].exports;var e=a[i]={i:i,l:!1,exports:{}};return t[i].call(e.exports,e,e.exports,o),e.l=!0,e.exports}o.m=t,o.c=a,o.d=function(t,a,i){o.o(t,a)||Object.defineProperty(t,a,{enumerable:!0,get:i})},o.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},o.t=function(t,a){if(1&a&&(t=o(t)),8&a)return t;if(4&a&&"object"==typeof t&&t&&t.__esModule)return t;var i=Object.create(null);if(o.r(i),Object.defineProperty(i,"default",{enumerable:!0,value:t}),2&a&&"string"!=typeof t)for(var e in t)o.d(i,e,function(a){return t[a]}.bind(null,e));return i},o.n=function(t){var a=t&&t.__esModule?function(){return t.default}:function(){return t};return o.d(a,"a",a),a},o.o=function(t,a){return Object.prototype.hasOwnProperty.call(t,a)},o.p="",o(o.s=0)}([function(t,a,o){o(1),t.exports=o(2)},function(t,a,o){"use strict";var i,e,n;o.r(a),function(t){t.heroes="http://cdn.dota2.com/apps/dota2/images/heroes/",t.abilities="http://cdn.dota2.com/apps/dota2/images/abilities/",t.items="http://cdn.dota2.com/apps/dota2/images/items/",t.agiIcon="http://cdn.dota2.com/apps/dota2/images/heropedia/overviewicon_agi.png",t.strIcon="http://cdn.dota2.com/apps/dota2/images/heropedia/overviewicon_str.png",t.intIcon="http://cdn.dota2.com/apps/dota2/images/heropedia/overviewicon_int.png",t.attackIcon="http://cdn.dota2.com/apps/dota2/images/heropedia/overviewicon_attack.png",t.speedIcon="http://cdn.dota2.com/apps/dota2/images/heropedia/overviewicon_speed.png",t.armorIcon="http://cdn.dota2.com/apps/dota2/images/heropedia/overviewicon_defense.png",t.goldIcon="http://cdn.dota2.com/apps/dota2/images/tooltips/gold.png",t.manaIcon="http://cdn.dota2.com/apps/dota2/images/tooltips/mana.png",t.cooldownIcon="http://cdn.dota2.com/apps/dota2/images/tooltips/cooldown.png"}(i||(i={})),function(t){t.Base="https://dota.peterbooker.com/api/v1/",t.abilityAPI="https://dota.peterbooker.com/api/v1/ability/",t.heroAPI="https://dota.peterbooker.com/api/v1/hero/",t.itemAPI="https://dota.peterbooker.com/api/v1/item/"}(e||(e={})),function(t){t.Get=function(t,a){var o=new XMLHttpRequest;return o.responseType="json",o.addEventListener("load",a),o.addEventListener("error",a),o.addEventListener("abort",a),o.open("GET",encodeURI(t)),o.send(),o}}(n||(n={}));var s,d=function(){var t=Object.setPrototypeOf||{__proto__:[]}instanceof Array&&function(t,a){t.__proto__=a}||function(t,a){for(var o in a)a.hasOwnProperty(o)&&(t[o]=a[o])};return function(a,o){function i(){this.constructor=a}t(a,o),a.prototype=null===o?Object.create(o):(i.prototype=o.prototype,new i)}}();!function(t){var a={Lang:"en",Theme:"default"},o={},l=["dota2.com","www.dota2.com","opendota.com","www.opendota.com","dotabuff.com","www.dotabuff.com"];function c(t){var i=document.getElementById("dotadata-tooltip"),s=t.target;i||((i=document.createElement("div")).id="dotadata-tooltip",i.className="theme-"+a.Theme,document.body.appendChild(i));var d=t.target,l=d.getAttribute("data-type"),c=d.getAttribute("data-item"),r=a.Lang,p=a.Theme;if(c in o){var f=o[c];switch(l){case"ability":var b=new v(f,p);i=b.buildTip(i);break;case"hero":b=new u(f,p);i=b.buildTip(i);break;case"item":b=new h(f,p);i=b.buildTip(i);break;case"unit":b=new m(f,p);i=b.buildTip(i)}}else{i.innerHTML='\n                <div class="dotadata-tooltip-container">\n                    <div class="dotadata-tooltip-loading">\n                        <div class="dotadata-tooltip-loader">Loading...</div>\n                    </div>\n                </div>\n            ';var w=e.Base+""+l+"/"+c+"?lang="+r;n.Get(w,function(){if(4===this.readyState&&this.status>=200&&this.status<300){var t;switch(t=this.response,o[c]=t,l){case"ability":var a=new v(t,p);i=a.buildTip(i);break;case"hero":a=new u(t,p);i=a.buildTip(i);break;case"item":a=new h(t,p);i=a.buildTip(i);break;case"unit":a=new m(t,p);i=a.buildTip(i)}g(i,s)}else i.classList.remove("active"),i.innerHTML="",i.innerText="",console.error("Failed to fetch API data, no Tooltip displayed.")})}i.classList.add("active"),g(i,s)}function r(t){var a=document.getElementById("dotadata-tooltip");!function(t,a){var o=t.clientX,i=t.clientY,e=a.getBoundingClientRect(),n=e.width,s=e.height,d=e.left,l=e.top,c=l,r=l+s;if(o<d||o>d+n)return!1;if(i<c||i>r)return!1;return!0}(t,a)?(a.removeEventListener("mouseleave",r),a&&(a.classList.remove("active"),a.innerHTML="",a.innerText="")):a.addEventListener("mouseleave",r)}(s||(s={})).Init=function(){if(!document.getElementById("ddtip-css")){var t=document.getElementsByTagName("head")[0],o=document.createElement("link");o.id="ddtip-css",o.rel="stylesheet",o.type="text/css",o.media="all",o.href="https://dota.peterbooker.com/assets/tooltips/ddtips.latest.css",t.appendChild(o)}window.onload=function(){null!=window.ddConfig&&(a.Lang=null==window.ddConfig.Lang?"en":window.ddConfig.Lang,a.Theme=null==window.ddConfig.Theme?"default":window.ddConfig.Theme);for(var t=document.links,o=0;o<t.length;o++){var i=t[o],e=i.attributes.href.value,n=document.createElement("a");n.href=e;var s=l.indexOf(n.hostname),d=!1;if(null!=i.dataset.type&&null!=i.dataset.item&&(d=!0),d)i.addEventListener("mouseenter",c),i.addEventListener("mouseleave",r);else if(-1!==s){var p=void 0;switch(l[s]){case"dota2.com":case"www.dota2.com":if(!((p=f(n.pathname).split("/")).length>1&&"hero"===p[0]||"item"===p[0]))continue;i.setAttribute("data-type",p[0]),i.setAttribute("data-item",p[1]);break;case"opendota.com":case"www.opendota.com":if(!((p=f(n.pathname).split("/")).length>1&&"heroes"===p[0]))continue;i.setAttribute("data-type","hero"),i.setAttribute("data-item",p[1]);break;case"dotabuff.com":case"www.dotabuff.com":var u=!1;if((p=f(n.pathname).split("/")).length>1&&"heroes"===p[0]&&(u=!0,i.setAttribute("data-type","hero"),i.setAttribute("data-item",p[1].replace("-","_"))),p.length>1&&"items"===p[0]&&(u=!0,i.setAttribute("data-type","item"),i.setAttribute("data-item",p[1].replace("-","_"))),!u)continue}i.addEventListener("mouseenter",c),i.addEventListener("mouseleave",r)}}}};var p=function(){return function(){}}(),u=function(t){function a(a,o){var i=t.call(this)||this;return i.data=a,i.theme=o,i}return d(a,t),a.prototype.getClass=function(){return"hero-"+this.data.name},a.prototype.getIconClasses=function(t){return this.data.attribute_primary===t?"primary icon":"icon"},a.prototype.buildTip=function(t){for(var a=["dotadata-tooltip-container","dotadata-tooltip-hero",this.getClass()],o="",e=0,n=this.data.abilities;e<n.length;e++){var s=n[e];o+='<div class="dotadata-tooltip-ability ability-'+s.name+'"><img src="'+s.img_url+'" title="'+s.title+'" /><div class="dotadata-tooltip-name">'+s.title+'</div><div class="dotadata-tooltip-description">'+s.desc+"</div></div>"}var d='\n            <div class="'+a.join(" ")+'">\n                <div class="dotadata-tooltip-arrow"></div>\n                <div class="dotadata-tooltip-header">\n                    <span class="dotadata-tooltip-image-container">\n                        <img class="dotadata-tooltip-image" src="'+this.data.img_url+'" alt="'+this.data.title+' Portrait - Dota 2 Hero" title="'+this.data.title+'" />\n                    </span>\n                    <h2 class="dotadata-tooltip-title">'+this.data.title+'</h2>\n                    <div class="dotadata-tooltip-role">\n                        <span class="dotadata-tooltip-attack">'+this.data.attack_type+'</span>\n                        <span class="dotadata-tooltip-roles">'+this.data.roles.join(" - ")+'</span>\n                    </div>\n                    <div class="dotadata-tooltip-stats">\n                        <span class="group">\n                            <img class="'+this.getIconClasses("intellect")+'" src="'+i.intIcon+'" alt="Intelligence Icon" />\n                            <span class="stat">'+this.data.attribute_base_int+'</span>\n                        </span>\n                        <span class="group">\n                            <img class="'+this.getIconClasses("agility")+'" src="'+i.agiIcon+'" alt="Agility Icon" />\n                            <span class="stat">'+this.data.attribute_base_agi+'</span>\n                        </span>\n                        <span class="group">\n                            <img class="'+this.getIconClasses("strength")+'" src="'+i.strIcon+'" alt="Strength Icon" />\n                            <span class="stat">'+this.data.attribute_base_str+'</span>\n                        </span>\n                    </div>\n                    <div class="dotadata-tooltip-stats">\n                        <span class="group">\n                            <img class="icon attack" src="'+i.attackIcon+'" alt="Attack Icon" />\n                            <span class="stat">'+this.data.attack_dmg_min+"-"+this.data.attack_dmg_max+'</span>\n                        </span>\n                        <span class="group">\n                            <img class="icon movespeed" src="'+i.speedIcon+'" alt="Move Speed Icon" />\n                            <span class="stat">'+this.data.movement_speed+'</span>\n                        </span>\n                        <span class="group">\n                            <img class="icon armor" src="'+i.armorIcon+'" alt="Armor Icon" />\n                            <span class="stat">'+this.data.armor+'</span>\n                        </span>\n                    </div>\n                </div>\n                <div class="dotadata-tooltip-body">\n                    <div class="dotadata-tooltip-abilities">'+o+'</div>\n                </div>\n                <div class="dotadata-tooltip-footer">\n                    <div class="dotadata-tooltip-biography">'+this.data.bio+"</div>\n                </div>\n            </div>\n            ";return t.innerHTML=d,t},a}(p),v=function(t){function a(a,o){var i=t.call(this)||this;return i.data=a,i.theme=o,i}return d(a,t),a.prototype.getClass=function(){return"ability-"+this.data.name},a.prototype.buildTip=function(t){var a,o,e,n=["dotadata-tooltip-container","dotadata-tooltip-ability",this.getClass()];a=null!=this.data.cd?'<span class="dotadata-tooltip-cooldown"><img class="icon" src="'+i.cooldownIcon+'" title="Cooldown Icon" />'+this.data.cd.join(" / ")+"</span>":"",null!=this.data.mc?o='<span class="dotadata-tooltip-mana"><img class="icon" src="'+i.manaIcon+'" title="Mana Cost Icon" />'+this.data.mc.join(" / ")+"</span>":a="",e=o||a?'<div class="dotadata-tooltip-usage">'+a+o+"</div>":"";var s="";null!=this.data.dmg&&(s='<div class="dotadata-tooltip-damage">'+this.data.dmg+"</div>");var d='\n            <div class="dotadata-tooltip-arrow"></div>\n            <div class="'+n.join(" ")+'">\n                <div class="dotadata-tooltip-header">\n                    <span class="dotadata-tooltip-image-container">\n                        <img class="dotadata-tooltip-image" src="'+this.data.img_url+'" alt="'+this.data.title+' - Dota 2 Ability" title="'+this.data.title+'" />\n                    </span>\n                    <h2 class="dotadata-tooltip-title">'+this.data.title+'</h2>\n                    <div class="dotadata-tooltip-affects">'+this.data.affects+'</div>\n                </div>\n                <div class="dotadata-tooltip-body">\n                    <div class="dotadata-tooltip-description">'+this.data.desc+"</div>\n                    "+s+'\n                    <div class="dotadata-tooltip-attributes">'+this.data.attributes+"</div>\n                    "+e+'\n                </div>\n                <div class="dotadata-tooltip-footer">\n                    <div class="dotadata-tooltip-biography">'+this.data.lore+"</div>\n                </div>\n            </div>\n            ";return t.innerHTML=d,t},a}(p),h=function(t){function a(a,o){var i=t.call(this)||this;return i.data=a,i.theme=o,i}return d(a,t),a.prototype.getClass=function(){return"item-"+this.data.name},a.prototype.buildTip=function(t){var a,o,e,n=["dotadata-tooltip-container","dotadata-tooltip-item",this.getClass()];if(null!=this.data.cd)if(null!=this.data.level){for(var s="",d=1;d<=this.data.cd.length;d++){var l=this.data.cd[d-1];this.data.level==d?s+=this.data.mc.length==d?'<span class="dotadata-tooltip-active">'+l+"</span>":'<span class="dotadata-tooltip-active">'+l+"</span> / ":s+=this.data.mc.length==d?""+l:l+" / "}a='<span class="dotadata-tooltip-cooldown"><img class="icon" src="'+i.cooldownIcon+'" title="Cooldown Icon" />'+s+"</span>"}else a='<span class="dotadata-tooltip-cooldown"><img class="icon" src="'+i.cooldownIcon+'" title="Cooldown Icon" />'+this.data.cd.join(" / ")+"</span>";else a="";if(null!=this.data.mc)if(null!=this.data.level){var c="";for(d=1;d<=this.data.mc.length;d++){var r=this.data.mc[d-1];this.data.level==d?c+=this.data.mc.length==d?'<span class="dotadata-tooltip-active">'+r+"</span>":'<span class="dotadata-tooltip-active">'+r+"</span> / ":c+=this.data.mc.length==d?""+r:r+" / "}o='<span class="dotadata-tooltip-mana"><img class="icon" src="'+i.manaIcon+'" title="Mana Cost Icon" />'+c+"</span>"}else o='<span class="dotadata-tooltip-mana"><img class="icon" src="'+i.manaIcon+'" title="Mana Cost Icon" />'+this.data.mc.join(" / ")+"</span>";else o="";e=o||a?'<div class="dotadata-tooltip-usage">'+a+o+"</div>":"";var p="";null!=this.data.components&&this.data.components instanceof Array&&this.data.components.forEach(function(t){p+='<div class="dotadata-tooltip-component"><img class="icon" src="'+t.img_url+'" alt="'+t.title+' - Dota 2 Item" title="'+t.title+'" />'+t.cost+"</div>"});var u="";null!=this.data.level&&(u='<span class="dotadata-tooltip-level">Level '+this.data.level+"</span>");var v="";null!=this.data.level&&(v='<div class="dotadata-tooltip-notes">'+this.data.notes+"</div>");var h='\n            <div class="dotadata-tooltip-arrow"></div>\n            <div class="'+n.join(" ")+'">\n                <div class="dotadata-tooltip-header">\n                    <span class="dotadata-tooltip-image-container">\n                        <img class="dotadata-tooltip-image" src="'+this.data.img_url+'" alt="'+this.data.title+' - Dota 2 Item" title="'+this.data.title+'" />\n                    </span>\n                    <h2 class="dotadata-tooltip-title">'+this.data.title+u+'</h2>\n                    <div class="dotadata-tooltip-meta">\n                        <div class="dotadata-tooltip-cost">\n                            <img class="icon" src="'+i.goldIcon+'" title="Gold Icon" />'+this.data.cost+'\n                        </div>\n                        <div class="dotadata-tooltip-components">\n                            '+p+'\n                        </div>\n                    </div>\n                </div>\n                <div class="dotadata-tooltip-body">\n                    <div class="dotadata-tooltip-description">'+this.data.desc+"</div>\n                    "+v+"\n                    "+e+'\n                </div>\n                <div class="dotadata-tooltip-footer">\n                    <div class="dotadata-tooltip-biography">'+this.data.lore+"</div>\n                </div>\n            </div>\n            ";return t.innerHTML=h,t},a}(p),m=function(t){function a(a,o){var i=t.call(this)||this;return i.data=a,i.theme=o,i}return d(a,t),a.prototype.getClass=function(){return"unit-"+this.data.name},a.prototype.buildTip=function(t){var a='\n            <div class="dotadata-tooltip-arrow"></div>\n            <div class="'+["dotadata-tooltip-container","dotadata-tooltip-unit",this.getClass()].join(" ")+'">\n                <div class="dotadata-tooltip-header">\n                    <span class="dotadata-tooltip-image-container">\n                        <img class="dotadata-tooltip-image" src="'+this.data.img_url+'" alt="'+this.data.title+' - Dota 2 Ability" />\n                    </span>\n                    <h2 class="dotadata-tooltip-title">'+this.data.title+'</h2>\n                </div>\n                <div class="dotadata-tooltip-body">\n                </div>\n                <div class="dotadata-tooltip-footer">\n                </div>\n            </div>\n            ';return t.innerHTML=a,t},a}(p);function g(t,a){var o=a.getBoundingClientRect(),i=o.left,e=o.top,n=o.width,s=o.height,d=i-t.offsetWidth/2+n/2+window.scrollX,l=e+s+window.scrollY;t.style.left=d+"px",t.style.top=l+"px"}function f(t){return"/"===t.substr(0,1)&&(t=t.substr(1,t.length)),"/"===t.substr(t.length-1,1)&&(t=t.substr(0,t.length-1)),t}}(),s.Init()},function(t,a){}]);