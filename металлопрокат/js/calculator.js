!function(n){var t,e,i,a,r,l;function s(t){t.attr("pr_tonn"),t.attr("pr_length"),r=t.attr("weight"),l=t.attr("pr_price")}var o=0;localStorage.getItem("ID")&&(o=JSON.parse(localStorage.getItem("ID")),n("#cart-btn").attr("data-id",o));var c={pr_tonn:"",pr_length:"",pr_price:"",weight:""},p='<div class="yes"><div class="general-block"><div class="yes-header"><h3 id="title-product"></h3><hr></div><div class="yes-body">'+'<label>Количество, кг.</label><input type="text" id="x">'+'<label>Количество, м.</label><input type="text" id="y">'+'<label>Цена</label><input id="z" disabled>'+'<label>Сумма</label><input disabled id="w">'+'<button class="add_item cart-btn" id="cart-btn" data-id="" data-title="" data-price="" data-meter="0" data-kol="">Добавить в корзину</button></div><div id="yes-exit"></div></div></div>';localStorage.setItem("calc",p),n(document).ready(function(){""!=n(".otchet").text()&&setTimeout(function(){n(".otchet").remove()},5e3),n(".hide-form-price button").click(function(){n("#hide-form").toggle(100)}),n("body").on("click","#cart-btn",function(){if(""==n(this).siblings("#x").val())return n(this).after("<div class='false'>Укажите количество!!!</div>"),!1;o+=1,localStorage.setItem("ID",JSON.stringify(o)),console.log(localStorage.getItem("ID")),n(this).attr("data-id",o),n(this).parents(".yes").fadeOut(500),setTimeout(function(){n(".yes").after("<div class='btn-cart-info'>Ваш товар добавлен в корзину!</div>"),n(".yes-header").children("#title-product").remove()},400),setTimeout(function(){n(".btn-cart-info").slideUp(300)},2e3),n(this).attr("data-weight",n(this).parent().attr("weight"))}),n("body").on("click",".parent-calc",function(){c.pr_tonn=n(this).attr("pr_tonn"),c.pr_length=n(this).attr("pr_length"),c.pr_price=n(this).attr("pr_price"),c.weight=n(this).attr("weight"),n(this).after(localStorage.getItem("calc")),n("#title-product").text(n(this).children(".calculator").text()),n(".yes-body").attr({pr_tonn:c.pr_tonn,weight:c.weight,pr_length:c.pr_length,pr_price:c.pr_price})}),n("body").on("click","#yes-exit",function(){n(this).parents(".yes").fadeOut(500),n(this).siblings().children("#title-product").remove()}),n("body").on("focus","#x",function(){n(this).keyup(function(){s(n(this).parent()),t=n(this).val(),t=parseFloat(t.replace(/,/,".")),l/1e3*r,r=parseFloat(r.replace(/,/,".")),e=(t/r).toFixed(2),l/1e3*r,l=parseFloat(l.replace(/,/,".")),a=(e*((i=l)/1e3*r)+2).toFixed(0),n(this).parent().children("#y").val(e),n(this).parent().children("#z").val(i),n(this).parent().children("#w").val(a),""==n(this).val()&&(n(this).siblings("#y").val(""),n(this).siblings("#z").val(""),n(this).siblings("#w").val(""))})}),n("body").on("focus","#y",function(){n(this).keyup(function(){s(n(this).parent()),e=n(this).val(),e=parseFloat(e.replace(/,/,".")),l/1e3*r,r=parseFloat(r.replace(/,/,".")),t=(e*r).toFixed(2),l/1e3*r,l=parseFloat(l.replace(/,/,".")),a=(e*((i=l)/1e3*r)+2).toFixed(0),n(this).parent().children("#x").val(t),n(this).parent().children("#z").val(i),n(this).parent().children("#w").val(a+2),""==n(this).val()&&(n(this).siblings("#x").val(""),n(this).siblings("#z").val(""),n(this).siblings("#w").val(""))})}),n("body").on("focus","#B",function(){n(this).keyup(function(){var t,e,i,a,r;t=n(this).val(),t=parseFloat(t.replace(/,/,".")),a=n(this).parents(".jqcart-tr").attr("weight"),r=n(this).parents(".jqcart-tr").attr("pr_price"),i=(t/a).toFixed(3),e=(t*(r/1e3)).toFixed(3),console.log(),n(this).parent().siblings(".jqcart-item-img").text(i),n(this).parent().siblings(".jqcart-sum").text(e),""==n(this).val()&&(n(this).siblings("#x").val(""),n(this).siblings("#z").val(""),n(this).siblings("#w").val(""))})}),n(".calculator").parent().attr("class","parent-calc")}),n(document).ready(function(){n("form[name='form'] input[name='tel']").attr("placeholder","+7 (999) 999-9999")});!function(t){var e,i={trim:new RegExp("^"+t+"|"+t+"$","g"),trimLeft:new RegExp("^"+t),trimRight:new RegExp(t+"$")};for(e in i)String.prototype[e]||(String.prototype[e]=function(t){return function(){return this.replace(t,"")}}(i[e]));delete i,delete e}("[\\x09\\x0A-\\x0D\\x20\\xA0\\u1680\\u180E\\u2000-\\u200A\\u2028\\u2029\\u202F\\u205F\\u3000]+"),n.scrollTo=n.fn.scrollTo=function(t,e,i){return this instanceof n?(i=n.extend({},{gap:{x:0,y:0},animation:{easing:"swing",duration:600,complete:n.noop,step:n.noop}},i),this.each(function(){n(this).stop().animate({scrollLeft:isNaN(Number(t))?n(e).offset().left+i.gap.x:t,scrollTop:isNaN(Number(e))?n(e).offset().top+i.gap.y:e},i.animation)})):n.fn.scrollTo.apply(n("html, body"),arguments)},n(".services > div > a").attr("class","calculator")}(jQuery);
