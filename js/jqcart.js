! function(c) {
    "use strict";
    var i, e, n = "",
        r = 0,
        a = !1,
        o = c('<div class="jqcart-cart-label"><span class="jqcart-title"><img class="icon-cart" src="../img/icon-cart.svg" alt=""></span><span class="jqcart-total-cnt">0</span></div>'),
        s = {
            priceAmount: 0,
            buttons: ".add_item",
            cartLabel: "body",
            visibleLabel: !1,
            openByAdding: !1,
            handler: "/",
            currency: "₸"
        },
        l = {
            init: function(t) {
                if (s = c.extend(s, t), null !== (i = l.getStorage()) && Object.keys(i).length) {
                    for (var e in i) i.hasOwnProperty(e) && (r += 1);
                    a = !0
                }
                return o.prependTo(s.cartLabel)[a || s.visibleLabel ? "show" : "hide"]().on("click", l.openCart).find(".jqcart-total-cnt").text(r), c(document).on("click", s.buttons, l.addToCart).on("click", ".jqcart-layout", function(t) {
                    t.target === this && l.hideCart()
                }).on("click", ".jqcart-incr", l.changeAmount).on("input keyup", ".jqcart-amount", l.changeAmount).on("click", ".jqcart-del-item", l.delFromCart).on("submit", ".jqcart-orderform", l.sendOrder).on("reset", ".jqcart-orderform", l.hideCart).on("click", ".jqcart-print-order", l.printOrder), !1
            },
            addToCart: function(t) {
                return t.preventDefault(), (e = c(this).data()).price = c(this).siblings("#w").val(), e.price_m = c(this).siblings("#z").val(), e.title = c("#title-product").text(), e.kol = c(this).siblings("#x").val(), e.meter = c(this).siblings("#y").val(), void 0 === e.id ? console.log("Отсутствует ID товара") : ((i = l.getStorage() || {}).hasOwnProperty(e.id) ? i[e.id].count++ : (e.count = 1, i[e.id] = e), l.setStorage(i), l.changeTotalCnt(1), o.show(), s.openByAdding && l.openCart()), !1
            },
            delFromCart: function() {
                var t = c(this),
                    e = t.closest(".jqcart-tr"),
                    r = e.data("id");
                return s.priceAmount = t.parent().siblings(".jqcart-price").text(), i = l.getStorage(), l.changeTotalCnt(-1), delete i[r], l.setStorage(i), e.remove(), l.recalcSum(), !1
            },
            changeAmount: function() {
                var t = c(this);
                t.hasClass("jqcart-amount") ? t.val() : t.data("incr"), t.closest(".jqcart-tr").data("id");
                return i = l.getStorage(), s.priceAmount = t.parent().siblings(".jqcart-price").text(), console.log(s.priceAmount), l.setStorage(i), l.recalcSum(), !1
            },
            recalcSum: function() {
                var t, e = 0,
                    r = 0,
                    a = a;
                return c(".jqcart-tr").each(function() {
                    t = +c(".jqcart-amount", this).val(), r = s.priceAmount / 1e3 * t, console.log(s.priceAmount), c(".jqcart-sum", this).html(r + " " + s.currency), e = Math.ceil(100 * (e + r)) / 100
                }), c(".jqcart-subtotal strong").text(e), c(".jqcart-total-cnt").text(a), a <= 0 && (l.hideCart(), s.visibleLabel || o.hide()), !1
            },
            changeTotalCnt: function(t) {
                var e = c(".jqcart-total-cnt");
                return e.text(+e.text() + t), !1
            },
            openCart: function() {
                var t, e = 0;
                i = l.getStorage(), n = '<p class="jqcart-cart-title">Корзина <span class="jqcart-print-order"></span></p><div class="jqcart-table-wrapper"><div class="jqcart-manage-order"><div class="jqcart-thead"><div>ID</div><div>Кол-во м.</div><div>Наименование</div><div>Цена</div><div>Кол-во</div><div>Сумма</div><div></div></div>';
                var r, a = 0;
                for (r in i) i.hasOwnProperty(r) && (a = Math.ceil(i[r].count * i[r].price * 100) / 100, e = Math.ceil(100 * (e + a)) / 100, n += '<div class="jqcart-tr" weight="' + i[r].weight + '" pr_price="' + i[r].price_m + '" data-id="' + i[r].id + '">', n += '<div class="jqcart-small-td">' + i[r].id + "</div>", n += '<div class="jqcart-small-td jqcart-item-img">' + i[r].meter + "</div>", n += "<div>" + i[r].title + "</div>", n += '<div class="jqcart-price">' + i[r].price_m + "</div>", n += '<div><input type="text" id="B" class="jqcart-amount" value="' + i[r].kol + '"></div>', n += '<div class="jqcart-sum">' + a + " " + s.currency + "</div>", n += '<div class="jqcart-small-td"><span class="jqcart-del-item"></span></div>', n += "</div>");
                n += "</div></div>", n += '<div class="jqcart-subtotal">Итого: <strong>' + e + "</strong> " + s.currency + "</div>", t = e ? n + '<p class="jqcart-cart-title">Контактная информация:</p><form class="jqcart-orderform"><p><label>Имя:</label><input type="text" name="user_name"></p><p><label>Телефон:</label><input type="text" name="user_phone"></p><textarea name="user_comment"></textarea><p class="submit-class"><input type="submit" value="Отправить заказ"><input type="reset" value="Вернуться к покупкам"></p></form>' : '<h2 class="jqcart-empty-cart">Корзина пуста</h2>', c('<div class="jqcart-layout"><div class="jqcart-checkout">123</div></div>').appendTo("body").find(".jqcart-checkout").html(t)
            },
            hideCart: function() {
                return c(".jqcart-layout").fadeOut("fast", function() {
                    c(this).remove()
                }), !1
            },
            sendOrder: function(t) {
                t.preventDefault();
                var e = c(this);
                if ("" === c.trim(c("[name=user_name]", e).val()) || "" === c.trim(c("[name=user_phone]", e).val())) return c('<p class="jqcart-error">Пожалуйста, укажите свое имя и контактный телефон!</p>').insertBefore(e).delay(3e3).fadeOut(), !1;
                c.ajax({
                    url: s.handler,
                    type: "GET",
                    dataType: "json",
                    data: {
                        orderlist: c.param(l.getStorage()),
                        userdata: e.serialize()
                    },
                    error: function() {},
                    success: function(t) {
                        c(".jqcart-checkout").html("<p>" + t.message + "</p>"), t.errors || setTimeout(d.clearCart, 2e3)
                    }
                })
            },
            printOrder: function() {
                var t = c(this).closest(".jqcart-checkout").prop("outerHTML");
                if (!t) return !1;
                var e = window.open("", "Печать заказа", "width=" + screen.width + ",height=" + screen.height),
                    r = c(e.opener.document).find('link[href$="jqcart.css"]').attr("href"),
                    a = new Date,
                    i = ("0" + a.getDate()).slice(-2) + "-" + ("0" + (a.getMonth() + 1)).slice(-2) + "-" + a.getFullYear() + " " + ("0" + a.getHours()).slice(-2) + ":" + ("0" + a.getMinutes()).slice(-2) + ":" + ("0" + a.getSeconds()).slice(-2);
                return e.document.write("<html><head><title>Заказ " + i + "</title>"), e.document.write('<link rel="stylesheet" href="' + r + '" type="text/css" />'), e.document.write("</head><body >"), e.document.write(t), e.document.write("</body></html>"), setTimeout(function() {
                    e.document.close(), e.focus(), e.print(), e.close()
                }, 100), !0
            },
            setStorage: function(t) {
                return localStorage.setItem("jqcart", JSON.stringify(t)), !1
            },
            getStorage: function() {
                return JSON.parse(localStorage.getItem("jqcart"))
            }
        },
        d = {
            clearCart: function() {
                localStorage.removeItem("jqcart"), o[s.visibleLabel ? "show" : "hide"]().find(".jqcart-total-cnt").text(0), l.hideCart()
            },
            openCart: l.openCart,
            printOrder: l.printOrder,
            test: function() {
                l.getStorage()
            }
        };
    c.jqCart = function(t) {
        return d[t] ? d[t].apply(this, Array.prototype.slice.call(arguments, 1)) : "object" != typeof t && t ? void c.error('Метод с именем "' + t + '" не существует!') : l.init.apply(this, arguments)
    }, c(function() {
        c.jqCart({
            buttons: ".add_item",
            handler: "../php/handler.php",
            cartLabel: ".label-place",
            visibleLabel: !0,
            openByAdding: !1,
            currency: "₸"
        }), c("#open").click(function() {
            c.jqCart("openCart")
        }), c("#clear").click(function() {
            c.jqCart("clearCart")
        })
    })
}(jQuery);