"undefined" == typeof Array.prototype.indexOf && (Array.prototype.indexOf = function(e, t) {
    for (var i = t || 0, n = this.length; n > i; i++)
        if (this[i] === e) return i;
    return -1
});
var MegaFilter = function() {};
MegaFilter.prototype = {
    _box: null,
    _options: null,
    _timeoutAjax: null,
    _timeoutSearchFiled: null,
    _url: null,
    _urlSep: null,
    _params: null,
    _jqContent: null,
    _jqLoader: null,
    _contentId: "#content",
    _busy: !1,
    _waitingChanges: !1,
    _lastResponse: "",
    _refreshPrice: function() {},
    _inUrl: null,
    _isInit: !1,
    _cache: null,
    _dataAlias: null,
    init: function(e, t) {
        var i, n = this;
        t.contentSelector && (n._contentId = t.contentSelector), n._jqContent = $(n._contentId), n._jqContent.length || (n._contentId = "#maincontent", n._jqContent = $(n._contentId)), n._box = e, n._options = t, n._cache = {
            lastResponse: {},
            mainContent: {}
        }, n.initUrls();
        for (i in t.params) "undefined" == typeof n._params[i] && (n._params[i] = t.params[i]);
        for (i in n) 0 === i.indexOf("_init") && n[i]();
        n._isInit = !0
    },
    initUrls: function(e) {
        var t = this;
        "undefined" == typeof e && (e = document.location.href.split("#")[0]), t._urlSep = t._parseSep(e).urlSep, t._url = t._parseSep(e).url, t._params = t._parseUrl(e), t._inUrl = t._parseUrl(e)
    },
    _initMfImage: function() {
        var e = this;
        e._box.find(".mfilter-image input").change(function() {
            var e = $(this).is(":checked");
            $(this).parent()[e ? "addClass" : "removeClass"]("mfilter-image-checked")
        }), e._box.find(".mfilter-image input:checked").parent().addClass("mfilter-image-checked")
    },
    _initBox: function() {
        var e = this;
        e._isInit || e._box.hasClass("mfilter-content_top") && e._box.find(".mfilter-content > ul > li").each(function(e) {
            e && e % 4 == 0 && $(this).before('<li style="clear:both; display:block;"></li>')
        })
    },
    _initSearchFiled: function() {
        function e() {
            t._timeoutSearchFiled && clearTimeout(t._timeoutSearchFiled), t._timeoutSearchFiled = null
        }
        var t = this,
            i = t._box.find('input[id="mfilter-opts-search"]'),
            n = t._box.find('[id="mfilter-opts-search_button"]');
        if (i.length) {
            var r = parseInt(i.unbind("keyup keydown click").attr("data-refresh-delay").toString().replace(/[^0-9]+/, "")),
                a = i.val();
            "-1" != r && i.bind("keyup", function(n) {
                $(this).val() != a && (r ? 13 != n.keyCode && (e(), t._timeoutSearchFiled = setTimeout(function() {
                    t.ajax(), t._timeoutSearchFiled = null
                }, r)) : t.ajax(), a = i.val())
            }), i.bind("keydown", function(i) {
                return 13 == i.keyCode ? (e(), t.ajax(), !1) : void 0
            }).bind("keyup.mf_shv", function() {
                $(this)[$(this).val() ? "addClass" : "removeClass"]("mfilter-search-has-value")
            }).trigger("keyup.mf_shv"), n.bind("click", function() {
                return e(), t.ajax(), !1
            })
        }
    },
    encode: function(e) {
        return e = e.replace(/,/g, "LA=="), e = e.replace(/\[/g, "Ww=="), e = e.replace(/\]/g, "XQ==")
    },
    decode: function(e) {
        return e = e.replace(/LA==/g, ","), e = e.replace(/Ww==/g, "["), e = e.replace(/XQ==/g, "]")
    },
    _parseSep: function(e) {
        var t = this,
            i = null;
        return "undefined" == typeof e && (e = t._url), e.indexOf("?") > -1 ? (e = e.split("?")[0], i = {
            f: "?",
            n: "&"
        }) : !t._options.smp.isInstalled || t._options.smp.disableConvertUrls ? (e = t.parse_url(e), e = e.scheme + "://" + e.host + (e.port ? ":" + e.port : "") + e.path, e = e.split("&")[0], i = {
            f: "?",
            n: "&"
        }) : (e = e.split(";")[0], i = {
            f: ";",
            n: ";"
        }), {
            url: e,
            urlSep: i
        }
    },
    _initContent: function() {
        var e = this;
        e._jqContent.css("position", "relative")
    },
    parse_url: function(e, t) {
        for (var i, n = ["source", "scheme", "authority", "userInfo", "user", "pass", "host", "port", "relative", "path", "directory", "file", "query", "fragment"], r = this.php_js && this.php_js.ini || {}, a = r["phpjs.parse_url.mode"] && r["phpjs.parse_url.mode"].local_value || "php", o = {
            php: /^(?:([^:\/?#]+):)?(?:\/\/()(?:(?:()(?:([^:@]*):?([^:@]*))?@)?([^:\/?#]*)(?::(\d*))?))?()(?:(()(?:(?:[^?#\/]*\/)*)()(?:[^?#]*))(?:\?([^#]*))?(?:#(.*))?)/,
            strict: /^(?:([^:\/?#]+):)?(?:\/\/((?:(([^:@]*):?([^:@]*))?@)?([^:\/?#]*)(?::(\d*))?))?((((?:[^?#\/]*\/)*)([^?#]*))(?:\?([^#]*))?(?:#(.*))?)/,
            loose: /^(?:(?![^:@]+:[^:@\/]*@)([^:\/?#.]+):)?(?:\/\/\/?)?((?:(([^:@]*):?([^:@]*))?@)?([^:\/?#]*)(?::(\d*))?)(((\/(?:[^?#](?![^?#\/]*\.[^?#\/.]+(?:[?#]|$)))*\/?)?([^?#\/]*))(?:\?([^#]*))?(?:#(.*))?)/
        }, s = o[a].exec(e), l = {}, c = 14; c--;) s[c] && (l[n[c]] = s[c]);
        if (t) return l[t.replace("PHP_URL_", "").toLowerCase()];
        if ("php" !== a) {
            var p = r["phpjs.parse_url.queryKey"] && r["phpjs.parse_url.queryKey"].local_value || "queryKey";
            o = /(?:^|&)([^&=]*)=?([^&]*)/g, l[p] = {}, i = l[n[12]] || "", i.replace(o, function(e, t, i) {
                t && (l[p][t] = i)
            })
        }
        return delete l.source, l
    },
    _parseInfo: function(e) {
        var t = this,
            i = t.filters(),
            n = $.parseJSON(e);
        for (var r in n) switch (r) {
            case "price":
                var a = t.getPriceRange();
                a.min == t._options.priceMin && a.max == t._options.priceMax && (t._box.find('[id="mfilter-opts-price-min"]').val(n[r].min), t._box.find('[id="mfilter-opts-price-max"]').val(n[r].max)), t._options.priceMin = n[r].min, t._options.priceMax = n[r].max, t._refreshPrice();
                break;
            case "attributes":
            case "options":
            case "manufacturers":
            case "stock_status":
                t._box.find(".mfilter-filter-item.mfilter-" + r).each(function() {
                    var e = $(this),
                        a = e.attr("data-seo-name"),
                        o = (e.attr("data-base-type"), e.attr("data-id"));
                    e.find(".mfilter-options .mfilter-option").each(function() {
                        var s = $(this),
                            l = s.find("input[type=checkbox],input[type=radio],select"),
                            c = l.val(),
                            p = $(this).find(".mfilter-counter"),
                            d = "",
                            f = n[r];
                        if (o && "undefined" != typeof f[o] && (f = f[o]), Object.keys(f).length)
                            if (s.hasClass("mfilter-select")) l.find("option").each(function() {
                                var e = $(this).attr("id");
                                e && (e = e.split("-").pop(), "undefined" != typeof f[e] ? $(this).removeAttr("disabled").html("(" + f[e] + ") " + $(this).val()) : $(this).attr("disabled", !0).html("(0) " + $(this).val()))
                            });
                            else {
                                var u = l.attr("id").split("-").pop();
                                "undefined" != typeof i[a] ? i[a].indexOf(encodeURIComponent(t.encode(c))) > -1 ? p.addClass("mfilter-close") : (e.hasClass("mfilter-radio") || (d += "+"), p.removeClass("mfilter-close")) : p.removeClass("mfilter-close"), "undefined" != typeof f[u] ? (d += f[u], s.removeClass("mfilter-disabled"), l.attr("disabled", !1)) : (d = "0", s.addClass("mfilter-disabled"), l.attr("disabled", !0)), p.text(d)
                            }
                    })
                })
        }
    },
    _initAlwaysSearch: function() {
        function e() {
            t._jqContent.find("[name^=filter_],[name=search],[name=category_id],[name=sub_category],[name=description]").each(function() {
                var e = $(this).attr("name"),
                    i = $(this).val(),
                    n = $(this).attr("type");
                ["checkbox", "radio"].indexOf(n) > -1 && !$(this).is(":checked") && (i = ""), e && (t._inUrl[e] = i, t._params[e] = i)
            }), t.reload()
        }
        var t = this;
        $("#button-search").unbind("click").click(function(t) {
            t.preventDefault(), e()
        }), t._jqContent.find("input[name=filter_name],input[name=search]").unbind("keydown").unbind("keyup").bind("keydown", function(t) {
            13 == t.keyCode && (t.preventDefault(), e())
        })
    },
    __initLoader: function() {
        var e = this;
        e._jqLoader = $('<span style="cursor: wait; z-index: 1; margin: 0; padding: 0; position: absolute; text-align: center; background-color: rgba(242,242,242,0.7);"></span>').prependTo(e._jqContent).html('<img src="catalog/view/theme/default/i/reload.gif" width="36" height="36" alt="" style="border-radius:50%; position: fixed; padding:4px; background-color:#FFF" />').hide()
    },
    _initHeading: function() {
        var e = this;
        e._box.hasClass("mfilter-content_top")
    },
    _initDisplayListOfItems: function() {
        var e = this;
        e._box.find(".mfilter-filter-item").each(function(t) {
            var i = $(this),
                n = i.attr("data-type"),
                r = i.attr("data-display-list-of-items");
            if (r || (r = e._options.displayListOfItems.type), "price" != n) {
                var a = i.find(".mfilter-content-wrapper"),
                    o = i.find("> .mfilter-content-opts"),
                    s = i.find("> .mfilter-heading");
                if (!e._box.hasClass("mfilter-content_top") && s.hasClass("mfilter-collapsed") && o.show(), "scroll" == r) {
                    var l = a.outerHeight();
                    l > e._options.displayListOfItems.maxHeight && a.attr("id", "mfilter-content-opts-" + t)
                } else if ("button_more" == r && !e._box.hasClass("mfilter-content_top")) {
                    var c = 0,
                        p = 0,
                        d = 0;
                    i.find(".mfilter-option").each(function(t) {
                        var i = $(this).outerHeight(!0);
                        p += i, t >= e._options.displayListOfItems.limit_of_items && (c += i, d++)
                    }), c = p - c
                }!e._box.hasClass("mfilter-content_top") && s.hasClass("mfilter-collapsed") && o.hide()
            }
        })
    },
    _initEvents: function() {
        function e(e) {
            var i = e.val(),
                n = e.parent().parent();
            "checkbox" != e.attr("type") && "radio" != e.attr("type") || (i = e.is(":checked"), t._options.showNumberOfProducts || n.find(".mfilter-counter")[i ? "addClass" : "removeClass"]("mfilter-close")), n[i ? "addClass" : "removeClass"]("mfilter-input-active")
        }
        var t = this;
        t._box.find("input[type=checkbox],input[type=radio],select").change(function() {
            t._dataAlias = $(this).attr("data-alias"), "using_button" != t._options.refreshResults && t.runAjax(), e($(this))
        }), t._box.find(".mfilter-option").each(function() {
            var t = $(this).find("input[type=checkbox],input[type=radio]");
            t.length && ($(this).find(".mfilter-counter").bind("click", function() {
                $(this).hasClass("mfilter-close") && t.attr("checked", !1).trigger("change")
            }), e(t))
        }), t._box.find(".mfilter-button a").bind("click", function() {
            return $(this).hasClass("mfilter-button-reset") && t.resetFilters(), t.ajax(), !1
        })
    },
    runAjax: function() {
        var e = this;
        switch (e._options.refreshResults) {
            case "using_button":
            case "immediately":
                e.ajax();
                break;
            case "with_delay":
                e._timeoutAjax && clearTimeout(e._timeoutAjax), e._timeoutAjax = setTimeout(function() {
                    e.ajax(), e._timeoutAjax = null
                }, e._options.refreshDelay)
        }
    },
    getPriceRange: function() {
        var e = this,
            t = e._box.find('[id="mfilter-opts-price-min"]'),
            i = e._box.find('[id="mfilter-opts-price-max"]'),
            n = t.val(),
            r = i.val();
        return (!/^[0-9]+$/.test(n) || n < e._options.priceMin) && (n = e._options.priceMin), (!/^[0-9]+$/.test(r) || r > e._options.priceMax) && (r = e._options.priceMax), {
            min: parseInt(n),
            max: parseInt(r)
        }
    },
    _initPrice: function() {
        function e() {
            t._refreshPrice(!1), "using_button" != t._options.refreshResults && t.runAjax()
        }
        var t = this,
            i = t.getPriceRange(),
            n = t.urlToFilters(),
            r = (t._box.find('[id="mfilter-opts-price-min"]').bind("change", function() {
                e()
            }).val(n.price ? n.price[0] : i.min), t._box.find('[id="mfilter-opts-price-max"]').bind("change", function() {
                e()
            }).val(n.price ? n.price[1] : i.max), document.getElementById("mfilter-price-slider"));
        t._refreshPrice = function(e) {
            var i = t.getPriceRange();
            i.min < t._options.priceMin && (i.min = t._options.priceMin), i.max > t._options.priceMax && (i.max = t._options.priceMax), i.min > i.max && (i.min = i.max), e !== !1 && (r.noUiSlider && r.noUiSlider.destroy(), noUiSlider.create(r, {
                start: [i.min, i.max],
                step: 100,
                connect: !0,
                direction: "ltr",
                range: {
                    min: t._options.priceMin,
                    max: t._options.priceMax
                }
            }), r.noUiSlider.on("update", function(e, i) {
                i ? $("#mfilter-opts-price-max").val(Math.round(e[i])) : $("#mfilter-opts-price-min").val(Math.round(e[i])), t._options.priceMin == t._options.priceMax ? $(".mfilter-price").hide() : $(".mfilter-price").show()
            }), r.noUiSlider.on("change", function() {
                $("#mfilter-opts-price-max, #mfilter-opts-price-min").trigger("change")
            }))
        }, $(document).on("blur", "#mfilter-opts-price-max, #mfilter-opts-price-min", function() {
            r.noUiSlider.set([$("#mfilter-opts-price-min").val(), $("#mfilter-opts-price-max").val()])
        }), $(document).on("keypress", "#mfilter-opts-price-max, #mfilter-opts-price-min", function(t) {
            13 === t.which && e()
        }), t._refreshPrice(!0)
    },
    _initWindowOnPopState: function() {
        var e = this;
        e._isInit || (window.onpopstate = function(t) {
            t.state ? (e.initUrls(), e.setFiltersByUrl(), e._render(t.state.html, t.state.json, !0)) : "undefined" != typeof e._cache.mainContent[document.location] && (e.initUrls(), e.setFiltersByUrl(), e._render(e._cache.mainContent[document.location].html, e._cache.mainContent[document.location].json, !0))
        })
    },
    setFiltersByUrl: function() {
        var e = this,
            t = e.urlToFilters();
        e.resetFilters(), e._box.find("li[data-type]").each(function() {
            var e = $(this),
                i = e.attr("data-type"),
                n = e.attr("data-seo-name"),
                r = t[n];
            if ("undefined" != typeof r) switch (i) {
                case "stock_status":
                case "manufacturers":
                case "image":
                case "radio":
                case "checkbox":
                    for (var a in r) e.find('input[value="' + r[a] + '"]').attr("checked", !0).parent().parent().find(".mfilter-counter").addClass("mfilter-close");
                    break;
                case "select":
                    e.find('select option[value="' + r[0] + '"]').attr("selected", !0)
            }
        })
    },
    _showLoader: function() {
        var e = this,
            t = e._jqContent.outerWidth(),
            i = e._jqContent.outerHeight(),
            n = e._jqContent.find(".product-list"),
            r = n.length ? n : e._jqContent.find(".product-grid"),
            a = r.length ? r : e._jqContent;
        r.length ? r.offset().top - 150 : a.offset().top;
        null == e._jqLoader && e.__initLoader(), e._jqLoader.css("width", t + "px").css("height", i + "px").fadeTo("normal", 1).find("img").css("margin-top", "150px"), e._options.autoScroll ? $("html,body").stop().animate({
            scrollTop: e._jqContent.offset().top + e._options.addPixelsFromTop
        }, "low", function() {
            e._busy = !1, e.render()
        }) : (e._busy = !1, e.render())
    },
    _hideLoader: function() {
        var e = this;
        null !== e._jqLoader && (e._jqLoader.remove(), e._jqLoader = null)
    },
    render: function(e) {
        var t = this;
        if ("" !== t._lastResponse && !t._busy) {
            t._hideLoader(), t._lastResponse = t._lastResponse.replace(/<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/gi, "");
            var i = $("<tmp>").html(t._lastResponse),
                n = i.find(t._contentId),
                r = t._options.showNumberOfProducts ? i.find("#mfilter-json") : null;
            if (n.length || (n = i.find("#mfilter-content-container")), n.length) {
                var a = t._jqContent.html().match(/<style\b[^<]*(?:(?!<\/style>)<[^<]*)*<\/style>/gi);
                if (null != a && a.length)
                    for (var o in a) $("head:first").append(a[o]);
                t._render(n.html(), t._options.showNumberOfProducts && r && r.length ? r.html() : null, e), t._lastResponse = ""
            } else t.reload()
        }
    },
    _render: function(e, t, i) {
        var n = this;
        if (t && n._parseInfo(t), n._jqContent.html(e), i !== !0) try {
            window.history.pushState({
                html: e,
                json: t
            }, "", n.createUrl())
        } catch (r) {}
        n._box.hasClass("mfilter-content_top") && (n._jqContent.prepend(n._box.removeClass("init")), n.init(n._box, n._options)), "function" == typeof display && ("function" == typeof $.totalStorage && $.totalStorage("display") ? display($.totalStorage("display")) : "function" == typeof $.cookie && $.cookie("display") ? display($.cookie("display")) : display("list"));
        for (var a in n) 0 === a.indexOf("_initAlways") && "function" == typeof n[a] && n[a]();
        "function" == typeof pq_initExt && pq_initExt()
    },
    ajax: function() {
        var e = this;
        if (e._busy) return void(e._waitingChanges = !0);
        var t = e.createUrl(),
            i = t + e._options.idx;
        return e._busy = !0, e._lastResponse = "", e._showLoader(), "undefined" != typeof e._params.page && delete e._params.page, "undefined" != typeof e._cache.lastResponse[i] ? (e._lastResponse = e._cache.lastResponse[i], void setTimeout(function() {
            e._busy = !1, e.render()
        }, 100)) : void $.ajax({
            type: "GET",
            url: t,
            timeout: 1e4,
            cache: !1,
            data: {
                mfilterAjax: "1",
                mfilterIdx: e._options.idx
            },
            success: function(t) {
                e._busy = !1, t ? (e._lastResponse = t, e._cache.lastResponse[i] = t, e.render(), e._waitingChanges && (e._waitingChanges = !1, e.ajax())) : e.reload()
            },
            error: function() {
                e.reload()
            }
        })
    },
    createUrl: function(e, t) {
        var i = this,
            n = i.paramsToUrl(e, t),
            r = i.filtersToUrl(),
            a = i._urlSep;
        return "undefined" == typeof e ? e = i._url : (a = i._parseSep(e.split("#")[0]).urlSep, e = i._parseSep(e.split("#")[0]).url), (n || r) && (e += a.f, n && (e += n), r && (n && (e += a.n), e += "mfp" + ("&" == a.n ? "=" : a.n) + r)), e
    },
    _validPrice: function(e, t) {
        var i = this;
        return e = parseInt(e), t = parseInt(t), e < i._options.priceMin ? !1 : t > i._options.priceMax ? !1 : e > t ? !1 : e != t || e != i._options.priceMin || t != i._options.priceMax
    },
    urlToFilters: function() {
        var e = this,
            t = {};
        if (!e._params.mfp) return t;
        e._params.mfp = decodeURIComponent(e._params.mfp);
        var i = e._params.mfp.match(/[a-z0-9\-_]+\[[^\]]+\]/g);
        if (!i) return t;
        for (var n = 0; n < i.length; n++) {
            var r = i[n].match(/([a-z0-9\-_]+)\[[^\]]+\]/)[1],
                a = i[n].match(/[a-z0-9\-_]+\[([^\]]+)\]/)[1].split(",");
            switch (r) {
                case "price":
                    "undefined" != typeof a[0] && "undefined" != a[1] && e._validPrice(a[0], a[1]) && (t[r] = a);
                    break;
                default:
                    t[r] = a
            }
        }
        return t
    },
    resetFilters: function() {
        var e = this;
        e._box.find("li[data-type]").each(function() {
            var e = $(this),
                t = e.attr("data-type");
            switch (t) {
                case "image":
                    e.find("input[type=checkbox]:checked,input[type=radio]:checked").attr("checked", !1).parent().removeClass("mfilter-image-checked");
                    break;
                case "stock_status":
                case "manufacturers":
                case "checkbox":
                case "radio":
                    e.find("input[type=checkbox]:checked,input[type=radio]:checked").attr("checked", !1).trigger("change"), e.find(".mfilter-counter").removeClass("mfilter-close");
                    break;
                case "search":
                    e.find('input[id="mfilter-opts-search"]').val("");
                    break;
                case "price":
                    break;
                case "select":
                    e.find("select option").removeAttr("selected"), e.find("select option:first").attr("selected", !0), e.find("select").prop("selectedIndex", 0)
            }
        })
    },
    filters: function() {
        var e = this,
            t = {},
            i = !!e._box.find('li[data-type="stock_status"]').length;
        return e._box.find("li[data-type]").each(function() {
            var i = $(this),
                n = i.attr("data-type"),
                r = i.attr("data-seo-name");
            switch (n) {
                case "stock_status":
                case "manufacturers":
                case "image":
                case "checkbox":
                    i.find("input[type=checkbox]:checked").each(function() {
                        "undefined" == typeof t[r] && (t[r] = []), t[r].push(encodeURIComponent(e.encode($(this).val())))
                    });
                    break;
                case "radio":
                    i.find("input[type=radio]:checked").each(function() {
                        t[r] = [encodeURIComponent(e.encode($(this).val()))]
                    });
                    break;
                case "price":
                    var a = e.getPriceRange();
                    a.min == e._options.priceMin && a.max == e._options.priceMax || e._validPrice(a.min, a.max) && (t[r] = [a.min, a.max]);
                    break;
                case "search":
                    i.find('input[id="mfilter-opts-search"]').each(function() {
                        "" !== $(this).val() && (t[r] = [encodeURIComponent(e.encode($(this).val()))])
                    });
                    break;
                case "select":
                    i.find("select").each(function() {
                        $(this).val() && (t[r] = [encodeURIComponent(e.encode($(this).val()))])
                    })
            }
        }), e._options.inStockDefaultSelected && "undefined" == typeof t.stock_status && (t.stock_status = i ? [] : [e._options.inStockStatus]), t
    },
    filtersToUrl: function() {
        var e = this,
            t = "",
            i = e.filters();
        for (var n in i) t += t ? "," : "", t += "" + n + "[" + i[n].join(",") + "]";
        return t
    },
    paramsToUrl: function(e, t) {
        var i = this,
            n = "",
            r = "undefined" == typeof e ? i._params : i._parseUrl(e, t),
            a = "undefined" == typeof e ? i._urlSep : i._parseSep(e).urlSep;
        for (var o in r)["mfilter-ajax", "mfp"].indexOf(o) > -1 || "undefined" == typeof e && "undefined" == typeof i._inUrl[o] || (n += n ? a.n : "", n += o + ("&" == a.n ? "=" : a.n) + r[o]);
        return n
    },
    _parseUrl: function(e, t) {
        if ("object" != typeof t && (t = {
                "mfilter-ajax": "1"
            }), "undefined" == typeof e) return t;
        var i, n, r, a, o, s = this;
        if (e = e.split("#")[0], e.indexOf("?") > -1 || e.indexOf("&") > -1)
            for (i = "undefined" != typeof s.parse_url(e).query ? s.parse_url(e).query.split("&") : e.split("&"), n = 0; n < i.length; n++) i[n].indexOf("=") < 0 || (o = i[n].split("="), r = o[0], a = o[1], r && (t[r] = a));
        else
            for (i = e.split(";"), r = null, n = 1; n < i.length; n++) null === r ? r = i[n] : (t[r] = i[n], r = null);
        return t
    },
    reload: function() {
        var e = this;
        window.location.href = e.createUrl()
    }
};
$(document).ready(function() {
    $("header nav .cat").mouseenter(function() {
        $(this).find(".sub").length && setTimeout(function() {
            $("header nav .cat:hover").length && $("header nav").addClass("active")
        }, 600)
    }), $("header nav").mouseleave(function() {
        $("header nav").removeClass("active")
    }), $('form[name="subscribe-yeezy"]').submit(function() {
        var t = $('input[name="vendor"]', this).val() ? $('input[name="vendor"]', this).val() : "";
        return $.ajax({
            method: "POST",
            url: $(this).attr("action"),
            data: {
                email: $('input[name="email"]', this).val(),
                vendor: t
            }
        }).done(function(t) {
            t.errors ? t.errors.email && alert(t.errors.email) : $('form[name="subscribe-yeezy"]').html("<p>Вы успешно подписаны</p>")
        }), !1
    }), $(".letters a").click(function() {
        $("a[name=" + $(this).attr("href").split("#")[1] + "]").next().next().addClass("highlight"), setTimeout(function() {
            $(".row.highlight").removeClass("highlight")
        }, 1e3)
    }), document.oncopy = addLink, $('img[src=""]').attr("src", "/catalog/view/theme/default/i/0.gif"), arrangeBrands(), $("#currency").lenght && cloneCurrency();
    var t = -1,
        i = -1;
    $(".nav").hover(function() {
        i = 1
    }, function() {
        i = -1
    }), $(".nav > li").not(".right").hover(function() {
        if (hideRightBlocks(!0), $(".sub", this).length) {
            t = $(this).index();
            var e = 400;
            ($(".shadow").is(":visible") || i > 0) && (e = 101), clearTimeout($.data(this, "navtimer")), $.data(this, "navtimer", setTimeout($.proxy(function() {
                t == $(this).index() && (setTimeout(function(t) {
                    $("a:first-child", t).hasClass("active") && $(".sub", t).stop(!0, !0).fadeIn("fast")
                }, 200, this), $(".sub", this).show(), $("#subnav").height($(".sub .centered", this).height() + 46), $(".sub", this).hide(), showShadow(), $("a:first-child", this).addClass("active"))
            }, this), e))
        }
    }, function() {
        $.data(this, "navtimer", setTimeout($.proxy(function() {
            $(".sub", this).stop(!0, !0).fadeOut("fast"), $("#subnav").height(0), $("a:first-child", this).removeClass("active")
        }, this), 100)), setTimeout(hideShadow, 300), t = -1
    }), $(".nav .cart > a, .nav .user > a, .nav .minicurrency > a").on("click", function(t) {
        var i = $("#minicart");
        return $(this).closest("li").hasClass("user") && (i = $("#userarea")), $(this).closest("li").hasClass("minicurrency") && (i = $("#minicurrency")), $(this).hasClass("active") ? hideRightBlocks(!0) : (hideRightBlocks(), $(this).addClass("active"), i.stop(!0, !0).slideDown(200, function() {
            "minicart" == $(this).attr("id") && $("#minicart .nano").nanoScroller()
        }), showShadow()), !1
    }), $(".shadow, .big-images").click(function() {
        $(".big-images").is(":visible") ? $(".big-images").fadeOut("fast", function() {
            hideRightBlocks(!0)
        }) : hideRightBlocks(!0)
    }), $(".sizechart, .inmsk, .games").click(function() {
        $(".shadow").addClass("darkshadow"), showShadow();
        var t = $('<div class="close"></div>');
        $(t).click(hideShadow), $("#popupinfo").empty().append(t).fadeIn("fast"), $(this).hasClass("inmsk") ? ($("#popupinfo").width(600).css("margin-left", "-300px"), $("#popupinfo").append($(this).find(".popupinfo").html()), $("#popupinfo").find(".PopupYMap").attr("id", "PopupYMap"), setTimeout(function() {
            initYMap("PopupYMap")
        }, 500)) : $(this).attr("data-url") ? $.get($(this).attr("data-url") + "/?&ajax=1", function(t) {
            var i = 475;
            if ($("img", t).length) {
                i = 730;
                var e = $("<div/>"),
                    o = $('<div style="width:300px; float: left"/>');
                $(o).append($("img", t)), $("img", o).width(300).height(300);
                var s = $('<div style="width:400px; display: table-cell; height: 300px; padding: 20px 0"/>');
                $(s).append($("h2", t)), $(s).append($("table", t)), $("table .header th:first-child", s).text().trim().length || $("table tr>td:first-child, table tr>th:first-child", s).css({
                    "font-weight": "bold",
                    "font-size": "12px"
                }), $(e).append(o).append(s), t = e, $("#popupinfo").append("<div/>")
            } else $("table tr:eq(0)", t).children().length <= 4 && (i = 365), $("table tr:eq(0)", t).children().length <= 3 && (i = 330), $("table tr:eq(0)", t).children().length <= 2 && (i = 300), $(t).hasClass("product-sizes-table-unavialable") ? (i = 500, $("#popupinfo").append("<div/>")) : $("#popupinfo").append('<div style="margin:30px"/>');
            $("#popupinfo").width(i).css({
                "margin-left": -i / 2 + "px"
            }), $("#popupinfo > div").not(".close").empty().append(t), $("#popupinfo table tr").length > 8 && (tableSwap($("#popupinfo table")), i = 1e3, $("#popupinfo").width(i).css({
                "margin-left": -i / 2 + "px"
            })), $(window).trigger("scroll")
        }) : ($("#popupinfo").width(548).height(526), setTimeout(function() {
            $("#popupinfo").append('<iframe id="pacman" src="http://newagebegins.github.com/pacman/Pacman.html" style="width: 548px; height: 526px; background-color: #000000; border-width: 0px;"></iframe>'), $(t).click(hideShadow)
        }, 500)), $(window).trigger("scroll")
    }), $(".nav #userlogin").length && $(".nav .user > a").on("click", function() {
        $(".shadow").addClass("darkshadow"), showShadow();
        var t = $('<div class="close"></div>');
        $(t).click(hideShadow), $("#popupinfo").empty().append(t).fadeIn("fast"), $("#popupinfo").width(450).css("margin-left", "-225px"), $("#userlogin").clone().appendTo($("#popupinfo")), $(window).trigger("scroll")
    }), minicart(), $("#totop").click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, "slow")
    });
    var e = $("header");
    if ($(window).on("scroll resize", function(t) {
            var i = 0;
            $(window).scrollTop() > e.position().top + e.height() - $("nav", e).height() ? (e.css("height", e.height() + "px"), e.addClass("fixed")) : e.removeClass("fixed"), $(window).height() - $("header").height() - 200 < 600 || $("#popupinfo").height() < 50 ? $("#popupinfo").css("margin-top", Math.round(i - $(window).height() / 2) + 70 + "px") : $("#popupinfo").css("margin-top", Math.round(-$("#popupinfo").height() / 2) + 70 + "px"), $(window).scrollTop() > $(".sidebar").height() + 100 ? $("#totop").addClass("vis") : $("#totop").removeClass("vis"), $(window).scrollTop() + $(window).height() > $(document).height() - $("footer").outerHeight() ? $("#totop").css("bottom", $(window).scrollTop() + $(window).height() - ($(document).height() - $("footer").outerHeight()) + 36 + "px") : $("#totop").css("bottom", "30px")
        }), $("header .about .txtinfo").click(function() {
            var t = $(this).parent().find(".tooltip");
            $("header .about .tooltip").fadeOut("fast"), $(t).is(":visible") || ($(t).fadeIn("fast", function() {
                $(".gmap", this).length && $(".gmap", this).is(":empty") && initGMap()
            }), $(t).css("left", Math.round(($(this).parent().width() - $(t).width()) / 2) + "px"))
        }), $("#search").submit(function() {
            var t = "/index.php?route=product/search",
                i = $("input", this).attr("value");
            return i && (t += "&search=" + encodeURIComponent(i)), window.location = t, !1
        }), $(".slideshow").length > 0 && $(".slideshow").on("init", function(t, i) {
            $(".slick-prev", this).appendTo($(".slick-dots", this)), $(".slick-next", this).appendTo($(".slick-dots", this))
        }).slick({
            speed: 1e3,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: !0,
            lazyLoad: "ondemand",
            autoplay: !0,
            autoplaySpeed: 1e4
        }), $("#slides").length > 0 && ($("#slides a").mousemove(function() {
            return !1
        }), $("#slides").slidesjs({
            width: 1300,
            height: 595,
            play: {
                active: !1,
                auto: !0,
                pauseOnHover: !0,
                interval: 9e3,
                swap: !1
            },
            effect: {
                slide: {
                    speed: 2e3
                }
            }
        }), $("#slides, #slides > a, #slides div, #slides img").hover(function(t) {
            "UL" != t.target.nodeName && $(".slidesjs-next, .slidesjs-previous").show()
        }, function(t) {
            $(".slidesjs-next, .slidesjs-previous").hide()
        })), $(".mfilter-heading-content").length && ($(".mfilter-heading-content").each(function() {
            var t = $('<div class="mfilter-reset-icon"></div>');
            t.hide(), $(this).closest(".mfilter-filter-item").find("input[type=checkbox]:checked").length && t.show(), t.click(function(t) {
                return t.preventDefault(), $(this).closest(".mfilter-filter-item").find("input[type=checkbox]:checked").prop("checked", !1).trigger("change"), $(this).hide(), !1
            }), $(this).append(t)
        }), $(".mfilter-filter-item").find("input[type=checkbox]").change(function() {
            $(this).closest(".mfilter-filter-item").find("input[type=checkbox]:checked").length ? $(this).closest(".mfilter-filter-item").find(".mfilter-reset-icon").show() : $(this).closest(".mfilter-filter-item").find(".mfilter-reset-icon").hide()
        })), $(".bloglist").length && ($(".blogblock").length > 1 ? ($(".blogblock:gt(0)").hide(), $(".blogmore").click(function() {
            return $(".blogblock:hidden:eq(0)").fadeIn("slow"), $(".blogblock:hidden").length || $(this).hide(), !1
        })) : $(".blogmore").hide(), $(".postshadow").each(function() {
            var t = $(this).closest(".blogpost");
            if ($(".fb", this).length) {
                var i = $(".blog-title", t).attr("href");
                $.getJSON("https://graph.facebook.com/?id=" + i, function(e) {
                    var o = 0;
                    e.shares && (o += e.shares);
                    var s = i.replace("https", "http");
                    $.getJSON("https://graph.facebook.com/?id=" + s, function(i) {
                        i.shares && (o += i.shares), $(".fb", t).text(o)
                    })
                }), $.getJSON("https://api.vk.com/method/likes.getList?type=sitepage&owner_id=3557499&item_id=" + $(".vk", t).attr("data-id") + "&page_url=" + i + "&filter=likes&callback=?", function(i, e, o) {
                    i.response && $(".vk", t).text(i.response.count)
                })
            }
        })), $(".showorder").length) {
        var o = window.location.hash.substring(1);
        o && showorder($("#" + o))
    }
    if ($(".showorder").click(function(t) {
            t.preventDefault();
            var i = $("html,body").scrollTop();
            return window.location.hash = $(this).attr("id"), $("html,body").scrollTop(i), $(this).closest("tr").hasClass("active") || showorder(this), !1
        }), $("#register-form .subscribe").length) {
        var s = $("#register-form .subscribe");
        $.getJSON("/index.php?route=account/newsletter", function(t) {
            var i = t.action;
            $("label[for=newschk]", s).text(t.heading_title), "1" == t.newsletter ? $("#newschk", s).prop("checked", !0) : $("#newschk", s).prop("checked", !1), $("#newschk").change(function() {
                var t = $(this).prop("checked");
                t = t ? "1" : "0", $.post(i, {
                    newsletter: t
                })
            }), $(s).show()
        })
    }
    if ($(".information .infonav").length && ($(".infocontent").html($(".information .infonav > li:eq(0) > div").html()), $(".information .infonav > li:eq(0)").addClass("active"), $(".information .infonav > li").click(function(t) {
            $(".information .infonav > li.active").removeClass("active"), $(this).addClass("active"), $(this).closest(".infonav").hasClass("faq") ? $(".infocontent").html($("div", this).html()).css("top", $(this).offset().top - Math.round($(this).outerHeight() / 2) - $("header").outerHeight() - $(".top").outerHeight() - Math.round($(".infocontent").outerHeight() / 2) + "px") : ($(".infocontent").html($("div", this).html()), t.preventDefault())
        }), window.location.hash && $(window.location.hash).length && ($(".information .infonav > li.active").removeClass("active"), $(window.location.hash).addClass("active"), $(".infocontent").html($(window.location.hash + " div").html()))), $(document).on("click touchstart", ".quik-eye", function() {
            quikview($(this).closest(".product").attr("data-product-id"))
        }), $(document).on("click touchstart", ".wishlist-products .product a:not(.delete)", function() {
            return quikview($(this).closest(".product").attr("data-id")), !1
        }), $("#question").length && ($("#question").css("z-index", "105"), $("#question .qtext").css("right", -$("#question .qtext").outerWidth() + "px"), $("#question .qtext").click(function() {
            $(this).closest("#question").toggleClass("active")
        }), $("#question").css("top", $(".product-image").offset().top + "px"), $(window).on("scroll", function() {
            $("#question").css("top", $("header .navcnt .bgblack").offset().top - $(window).scrollTop() + $(".product-image").offset().top - $("header").height() + $("header .navcnt .bgblack").height() + "px")
        })), $(".care").length && $(".care.icons > div > div").mouseover(function() {
            $(this).offset().left < 90 ? $(".tooltip", this).addClass("leftpos") : $(".leftpos", this).removeClass("leftpos")
        }), $(".specialcnt.vote").length && void 0 == getCookie("isvoteclosed") && ($(".specialcnt.vote").show().slideDown("fast"), $(".specialcnt.vote .close").click(function() {
            document.cookie = "isvoteclosed=1", $(".specialcnt.vote").slideUp("fast", function() {
                $(this).remove()
            })
        })), $('form[name="subscribe-form"]').submit(function() {
            $(".shadow").addClass("darkshadow"), showShadow();
            var t = $('<div class="close"></div>');
            return $(t).click(hideShadow), $("#popupinfo").empty().append(t).fadeIn("fast", function() {
                $(window).trigger("scroll")
            }), $("#popupinfo").css({
                width: "380px",
                height: "auto",
                "margin-left": "-190px"
            }), $("#popupinfo").append($("footer .subscribe-confirm").clone()), $("#popupinfo input[name=email]").val($("input[name=email]", this).val()), $("#popupinfo input").keydown(function() {
                $("#popupinfo .warning").slideUp()
            }), $("#popupinfo .subscribe-confirm form").submit(function() {
                return $(".warning", this).empty().hide(), $('input[name="email"]', this).val() ? $('input[name="email"]', this).val() != $('input[name="email-confirm"]', this).val() ? $(".warning", this).text($("footer .subscribe-confirm-texts .not-match").html()).show() : $.ajax({
                    method: "POST",
                    url: $('form[name="subscribe-form"]').attr("action"),
                    data: {
                        email: $('input[name="email"]', this).val()
                    }
                }).done(function(t) {
                    t.errors ? $("#popupinfo .subscribe-confirm form .warning").text(t.errors.email).show() : window.location = "/thankyou"
                }) : $(".warning", this).text($("footer .subscribe-confirm-texts .empty").html()).show(), !1
            }), $(window).trigger("scroll"), !1
        }), ymaps.ready(function() {
            $("#YMap, #YMapTop").each(function() {
                initYMap($(this).attr("id"))
            })
        }), $(".scrollslider").each(function() {
            var t = $(this),
                i = t.attr("data-wideslides") ? Math.round(t.attr("data-wideslides")) : 4,
                e = t.attr("data-slimslides") ? Math.round(t.attr("data-slimslides")) : 3,
                o = $("> *", t).length,
                s = i,
                a = "bc",
                n = {
                    speed: 300,
                    infinite: !0,
                    slidesToShow: i,
                    slidesToScroll: i,
                    initialSlide: 0
                };
            i !== e && (n.responsive = [{
                breakpoint: 1341,
                settings: {
                    slidesToShow: e,
                    slidesToScroll: e
                }
            }], t.on("breakpoint", function() {
                t.slick("unslick"), $(".scroll", t).remove(), t.slick(n)
            }));
            var c = $('<div class="scroll"/>');
            t.on("init", function() {
                setTimeout(function() {
                    c.empty().append($("<div/>")).on("barstart", function() {
                        $(this).addClass("dragging")
                    }).on("barmove", function(i, e) {
                        var o = $(".slick-track", t),
                            s = Math.round((o.width() - o.parent().width()) / 100 * e);
                        o.css("transform", "translate3d(-" + s + "px, 0px, 0px)")
                    }).on("barstop", function(i, e) {
                        $(this).removeClass("dragging");
                        var a = Math.round((o - s) * e / 100);
                        t.slick("slickSetOption", "slidesToScroll", 1), t.slick("slickGoTo", a), setTimeout(function() {
                            t.slick("slickSetOption", "slidesToScroll", s)
                        }, 100)
                    }).bar({
                        axis: "X"
                    }), t.append(c), s = t.slick("slickGetOption", "slidesToScroll"), setTimeout(function() {
                        var i = t.width() / o * 2;
                        100 > i && (i = 100), i > 400 && (i = 400), $("> *", c).width(i), console.log(i)
                    }, 200)
                }, 0)
            }).on("beforeChange", function(t, i, e, n) {
                a = "bc";
                var d = o - n - s;
                0 > d && (n += d);
                var r = n / (o - s) * 100;
                c.trigger("setPosition", [r])
            }).on("afterChange", function(i, e, o) {
                "bc" != a && s > o && o > 0 && t.slick("slickGoTo", 0), a = "ac"
            }).slick(n)
        }), $(".blockslide").on("init", function(t, i) {
            $(".prev", this).appendTo($(".slick-dots", this)), $(".next", this).appendTo($(".slick-dots", this))
        }).slick({
            dots: !0,
            prevArrow: '<button class="prev"></button>',
            nextArrow: '<button class="next"></button>'
        }), $(".pressa-o-nas").length) {
        var a = $(".pressa-o-nas");
        $(">div:hidden", a).length && $(".btn-showmore").fadeIn().click(function() {
            $(">div:hidden", a).slice(0, 5).fadeIn(), $(">div:hidden", a).length || $(this).hide()
        })
    }
}), $(document).on("click", ".wishlist-add, .wishlist-star", function() {
    var t = this;
    $(t).attr("data-id") && ($(t).hasClass("wish") ? ($(t).removeClass("wish"), $.ajax({
        url: "index.php?route=account/wishlist/remove",
        type: "post",
        data: "product_id=" + $(t).attr("data-id"),
        dataType: "json",
        success: function(i) {
            i.success ? $(".wishlist-add[data-id=" + $(t).attr("data-id") + "]").removeClass("wish") : $(".wishlist-add[data-id=" + $(t).attr("data-id") + "]").addClass("wish")
        },
        error: function() {
            $(".wishlist-add[data-id=" + $(t).attr("data-id") + "]").addClass("wish")
        }
    })) : ($(t).addClass("wish"), $.ajax({
        url: "index.php?route=account/wishlist/add",
        type: "post",
        data: "product_id=" + $(t).attr("data-id"),
        dataType: "json",
        success: function(i) {
            if (i.success) {
                $(".wishlist-add[data-id=" + $(t).attr("data-id") + "]").addClass("wish");
                var e = window._rutarget || [];
                e.push({
                    event: "addToCompare",
                    sku: $(t).attr("data-id")
                })
            } else $(".wishlist-add[data-id=" + $(t).attr("data-id") + "]").removeClass("wish"), window.location = "/wishlist"
        },
        error: function() {
            $(".wishlist-add[data-id=" + $(t).attr("data-id") + "]").removeClass("wish")
        }
    })))
}), $(document).on("click", ".wishlist-products .delete", function() {
    var t = $(this).closest(".product");
    $(t).hide(), $.ajax({
        url: "index.php?route=account/wishlist/remove",
        type: "post",
        data: "product_id=" + $(t).attr("data-id"),
        dataType: "json",
        success: function(i) {
            i.success ? ($(".status").html('<div class="success" style="margin-bottom: 25px">' + i.success + "</div>").slideDown("fast"), setTimeout(function() {
                $(".status").slideUp("fast")
            }, 3e3), t.remove()) : t.show()
        },
        error: function() {
            t.show()
        }
    })
}), $(document).on("click", ".information td", function() {
    $(this).closest("tr").find("h3 > a").length && (window.location = $(this).closest("tr").find("h3 > a").attr("href"))
}), $(document).on("click", ".infonav li", function() {
    $(this).attr("id") ? window.location.hash = $(this).attr("id") : window.location.hash = ""
}), $(document).bind("ready ajaxComplete", function() {
    if (setTimeout(function() {
            $("select.cSelect").not(".cSelect-init").cSelect()
        }, 400), setInterval(function() {
            $("select.cSelect").not(".cSelect-init").cSelect()
        }, 3e3), $(".category-products, .product-info").length && $(".category-products .product, .product-info .product-image").each(function() {
            $(".tooltip", this).length || ($(".quik-eye", this).append('<div class="tooltip"><span>' + lang.quikview + "</span></div>"), $(".wishlist-add", this).append('<div class="tooltip"><span>' + lang.wishlist + "</span></div>"))
        }), $(".infotext").length && !$(".showmore").length) {
        var t = $('<a href="#" class="infob showmore">Полное описание</a>');
        t.click(function() {
            return $(".infotext > *").show(), $(this).hide(), !1
        }), $(".infotext .tt").append(t);
        var i = $('<div class="row"></div><div class="row"><a href="#" class="infob hidemore">Скрыть описание</a></div>');
        $("a", i).click(function() {
            return $(".infotext > *").not(".tt").hide(), $(".infotext .tt .showmore").show(), !1
        }), $(".infotext").append(i), $(".infotext > *").not(".tt").hide()
    }
}), $("header").on("click", ".user, .phone, .shop, .cart", function() {
    $(".tooltip", this).fadeIn()
}), $(document).click(function(t) {
    $(t.target).closest("header .tooltip").length || $("header .tooltip:visible").each(function() {
        1 == $(this).css("opacity") && $(this).fadeOut("fast")
    }), $(".custom-select.active").removeClass("active")
}), $(document).on("click", ".custom-select .current", function(t) {
    t.stopPropagation(), $(".custom-select.active").removeClass("active"), $(this).closest(".custom-select").addClass("active")
}), $(document).on("click", ".custom-select[data-input-id] *[data-option-id]", function(t) {
    $($("#" + $(this).closest(".custom-select").attr("data-input-id"))).val($(this).attr("data-option-id")).trigger("change"), $(this).closest(".custom-select").find(".current em").html($(this).html()), $(this).closest(".custom-select").find(".current span").show()
});
var currentSlide = 0;
$(document).on("click", ".quik .product-thumbs-cnt a", function() {
    return currentSlide = $(this).index(), $(this).attr("href") != $(".product-image > img").attr("src") && ($(".quik .product-image .preloader").fadeIn("slow"), $(".quik .product-image > img").removeClass("loaded"), setTimeout(function(t, i) {
        $(t).attr("src", i)
    }, 400, $(".quik .product-image > img"), $(this).attr("href"))), !1
}), $(document).on("click", ".quik .product-image > img", function() {
    return currentSlide++, currentSlide >= $(".quik .product-thumbs-cnt a").length && (currentSlide = 0), $(".quik .product-image .preloader").fadeIn("slow"), $(this).removeClass("loaded"), setTimeout(function(t, i) {
        $(t).attr("src", i)
    }, 400, $(this), $(".quik .product-thumbs-cnt a").eq(currentSlide).attr("href")), !1
}), $(document).on("click", ".products-grid .product .btn-onesize-tocart", function() {
    if (!$(this).hasClass("disabled")) {
        var t = $(this).closest(".product").attr("data-product-id"),
            i = $(this).closest(".available-sizes").find("input"),
            e = {
                quantity: 1,
                product_id: t
            };
        e[i.attr("name")] = i.val();
        var o = this;
        $.ajax({
            url: "index.php?route=checkout/cart/add",
            type: "post",
            data: e,
            dataType: "json",
            beforeSend: function() {
                $(o).addClass("loading")
            },
            success: function() {
                minicart(), setTimeout(function() {
                    $(o).replaceWith('<div class="added">Добавлено</div>')
                }, 500)
            }
        })
    }
}), $(document).on("click", ".products-grid .available-sizes > *[data-option-id]", function() {
    var t = $(this).closest(".product").attr("data-product-id"),
        i = {
            quantity: 1,
            product_id: t
        };
    i["option[" + $(this).attr("data-option-id") + "]"] = $(this).attr("data-option-value"), $(this).replaceWith('<div class="added">Добавлено</div>'), productToCart(i)
}), $(document).on("click", ".share[data-social]", function() {
    var t, i = $(this).attr("data-social"),
        e = $(this).attr("data-url") ? $(this).attr("data-url") : encodeURIComponent(location.href);
    switch (i) {
        case "fb":
            t = "http://www.facebook.com/sharer.php?u=";
            break;
        case "vk":
            t = "http://vk.com/share.php?url=";
            break;
        case "gp":
            t = "https://plus.google.com/share?url=";
            break;
        case "tw":
            t = "https://twitter.com/home?status=";
            break;
        default:
            return !1
    }
    return window.open(t + e, "sharer", "toolbar=0,status=0,width=626,height=436"), !1
}), window.onmouseout = function(t) {
    if (null === t.toElement) {
        var i = window.pageYOffset || document.documentElement.scrollTop;
        window.scrollTo(0, i)
    }
}, $(document).on("mouseenter", ".products-grid .product", function() {
    if ($(".available-sizes", this).length && $(".available-sizes", this).is(":empty")) {
        var t = $(".available-sizes", this),
            i = $(this).find(".available-sizes").attr("data-offline");
        t.addClass("loading"), $.ajax({
            method: "POST",
            url: "/?route=product/category/getproductsize",
            data: {
                product_id: $(this).attr("data-product-id")
            }
        }).done(function(e) {
            if (console.log(e), "object" != typeof e && (e = JSON.parse(e)), 1 == e.length && "ONE SIZE" == e[0].name && void 0 == i) t.append('<button class="btn-onesize-tocart">В корзину</button>').append('<input type="hidden" name="option[' + e[0].product_option_id + ']" value="' + e[0].product_option_value_id + '">');
            else
                for (var o = 0; o < e.length; o++) t.append($("<div/>").text(e[o].name).attr("data-option-id", e[o].product_option_id).attr("data-option-value", e[o].product_option_value_id));
            setTimeout(function() {
                t.removeClass("loading"), t.height() < 35 && t.addClass("center")
            }, 500)
        })
    }
});
$(document).ready(function() {
    function t(t) {
        "number" != typeof t && (t = $(this).index());
        var i = $(".tabs > li:eq(" + t + ")"),
            e = $(".tabs > li.active");
        if (i.addClass("active"), e.length) {
            e.removeClass("active");
            var s = e.position().left,
                c = i.position().left + i.width();
            s > c && (s = i.position().left, c = e.position().left + e.width()), o.width(c - s).css("left", s), $(".texts .text").fadeOut("fast", function() {
                setTimeout(function() {
                    o.width(i.outerWidth()).css("left", i.position().left), $(".texts .text:eq(" + t + ")").fadeIn("fast")
                }, 150)
            })
        } else o.width(i.outerWidth()).css("left", i.position().left), $(".texts .text:eq(" + t + ")").fadeIn("fast")
    }
    $(".product-image-big img[data-zoom-src]").zoom({
        initEvent: "click"
    }).on("init", function() {
        $(".product-right > div:not(#zoom)").fadeOut("fast"), $("#zoom").height($("#zoom").width())
    }).on("destroy", function() {
        $(".product-right > div:not(#zoom)").fadeIn("fast")
    });
    var i = {
            lazyLoad: "progressive",
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: !1,
            fade: !0,
            draggable: !0
        },
        e = {
            dots: !1,
            asNavFor: ".product-image-big",
            prevArrow: '<div class="prev"></div>',
            nextArrow: '<div class="next"></div>',
            slidesToShow: 5,
            slidesToScroll: 1,
            variableWidth: !0,
            draggable: !1
        };
    if ($(".product-thumbs").children().length > 5 ? (i.asNavFor = ".product-thumbs", e.centerMode = !0) : ($(".product-images").addClass("lessthumbs"), $(".product-image-big").on("beforeChange", function(t, i, e, o) {
            console.log(o), $(".product-thumbs .slick-current").removeClass("slick-current"), $(".product-thumbs .slick-slide:eq(" + o + ")").addClass("slick-current")
        })), $(".product-thumbs").slick(e), $(".product-image-big img[src]").removeAttr("src"), $(".product-image-big").slick(i), $(document).on("click", ".product-thumbs .slick-slide", function() {
            $(".product-image-big").slick("slickGoTo", this.getAttribute("data-slick-index"))
        }), $('.text[itemprop="description"] ul').length ? $('.text[itemprop="description"] ul').appendTo($(".product-card-info .details")) : ($(".product-card-info .details > *").remove(), $(".product-card-info .details").width("17%")), $(".tabs").length) {
        $(".tabs").append($('<div class="ripple"/>')), $(document).on("click", ".tabs > li:not(.active)", t), $(".texts .text").hide();
        var o = $(".tabs .ripple");
        t(0), $(window).on("resize", function() {
            o.width($(".tabs > li.active").outerWidth()).css("left", $(".tabs > li.active").position().left)
        })
    }
    $(".btn-cart").click(productToCart), $("#product-size").change(function() {
        $(".btn-cart").show(), $(".btn-error").hide(), $(".btn-success").remove()
    }), $(document).on("click", ".share-box", function(t) {
        $(this).hasClass("active") ? $(this).removeClass("active") : (t.stopPropagation(), $(this).addClass("active"))
    }), $(document).click(function() {
        $(".share-box").removeClass("active")
    })
});

function minicart() {
    $.getJSON("/index.php?route=module/cart", function(e) {
        data = e.products, $("#minicart").empty();
        var t = 0,
            a = 0,
            i = $('<div class="products"></div>');
        if ($.each(data, function(s, n) {
                var o = $('<div class="product row">'),
                    c = $('<div class="delete"></div>');
                c.click(function() {
                    $.ajax({
                        url: "index.php?route=module/cart&remove=" + n.key,
                        success: function() {
                            var e = window._rutarget || [];
                            e.push({
                                event: "removeFromCart",
                                sku: n.key.split(":")[0],
                                qty: n.quantity
                            }), minicart()
                        }
                    })
                }), o.append(c), o.append('<a href="' + n.href + '"><img src="' + n.thumb + '"></a>'), o.append('<h2><a href="' + n.href + '">' + n.name + "</a></h2>");
                var d = "";
                $.each(n.option, function(e, t) {
                    "ONE SIZE" != t.value && (d += t.name + " - " + t.value + "<br />")
                }), o.append("<p>" + d + e.text_quantity + " - " + n.quantity + "<br />" + e.text_price + " - " + setrub(n.total) + "</p>"), i.append(o), t += n.quantity * Math.round(parseFloat(n.price)), a += n.quantity
            }), a > 0) {
            var s = $("<div/>").addClass("bottom").addClass("row").append('<div class="col-40 carttotal"><span>' + e.text_order_amount + '</span><span class="total">' + setrub(e.total) + "</span></div>").append('<div class="col-60"><a href="/cart/" class="btn btn-orange btn-fluid">' + e.text_cart + "</a></div>");
            $("#minicart").append(i).append(s), $("#minicart .products").addClass("nano-content"), $("nav .cart .badge").text(a), $("nav .cart").removeClass("empty")
        } else $("#minicart").append('<div class="empty">' + e.text_empty + "</div>"), $("nav .cart .qty").text("0"), $("nav .cart").addClass("empty")
    })
}

function loadZones(e, t) {
    e && $.ajax({
        url: "index.php?route=account/register/country&country_id=" + e,
        dataType: "json",
        beforeSend: function() {
            $("select[name='zone_id']").parent().append('<span class="wait">&nbsp;<img src="catalog/view/theme/default/i/loading.gif" hspace="10" vspace="5" align="right" alt="" /></span>')
        },
        complete: function() {
            $(".wait").remove()
        },
        success: function(e) {
            if ("1" == e.postcode_required ? $("#postcode-required").show() : $("#postcode-required").hide(), html = '<option value=""><?php echo $text_select; ?></option>', "" != e.zone)
                for (i = 0; i < e.zone.length; i++) html += '<option value="' + e.zone[i].zone_id + '"', e.zone[i].zone_id == t && (html += ' selected="selected"'), html += ">" + e.zone[i].name + "</option>";
            else html += '<option value="0" selected="selected"><?php echo $text_none; ?></option>';
            $("select[name='zone_id']").html(html)
        },
        error: function(e, t, a) {
            alert(a + "\r\n" + e.statusText + "\r\n" + e.responseText)
        }
    })
}

function loadZonesClear(e, t) {
    e && $.ajax({
        url: "index.php?route=account/register/country&country_id=" + e,
        dataType: "json",
        success: function(e) {
            var a = "";
            if ("" != e.zone)
                for (i = 0; i < e.zone.length; i++) a += '<option value="' + e.zone[i].zone_id + '"', e.zone[i].zone_id == t && (a += ' selected="selected"'), a += ">" + e.zone[i].name + "</option>";
            $("select[name='zone_id']").html(a)
        }
    })
}

function submitSearch(e) {
    url = $("base").attr("href") + "index.php?route=product/search";
    var t = $(e).attr("value");
    t && (url += "&search=" + encodeURIComponent(t)), location = url
}

function addToCart(e, t) {
    t = "undefined" != typeof t ? t : 1, $.ajax({
        url: "index.php?route=checkout/cart/add",
        type: "post",
        data: "product_id=" + e + "&quantity=" + t,
        dataType: "json",
        success: function(t) {
            $(".success, .warning, .attention, .information, .error").remove(), t.redirect && (location = t.redirect), t.success && (minicart(), $("#notification").html('<div class="success" style="display: none;">' + t.success + "</div>"), $(".success").fadeIn("slow"), $("#cart-total").html(t.total), $("html, body").animate({
                scrollTop: 0
            }, "slow")), dataLayer.push({
                event: "rrAddToCart",
                rrProductIdAddedToCart: e
            })
        }
    })
}

function productToCart(e) {
    "object" != typeof e && (e = $("input[type='text'], input[type='hidden'], input[type='radio']:checked, input[type='checkbox']:checked, select, textarea")), $.ajax({
        url: "index.php?route=checkout/cart/add",
        type: "post",
        data: e,
        dataType: "json",
        success: function(t) {
            if ($("#ajax_loader").hide(), $(".cart-block").show(), $(".success, .warning, .attention, information, .error").remove(), t.error) {
                if ($(".btn-cart").hide(), t.error.option)
                    for (i in t.error.option) $(".btn-error").text(t.error.option[i]).show();
                t.error.profile && ($(".btn-cart").hide(), $(".btn-error").text(t.error.profile).show())
            }
            if (t.success) {
                var a = window._rutarget || [];
                a.push({
                    event: "addToCart",
                    sku: $("input[name='product_id']").val(),
                    qty: $("input[name='quantity']").val(),
                    price: $('.price *[itemprop="price"]').attr("content")
                }), $(".btn-cart").after('<div class="btn btn-success">' + t.success + "</div>").hide(), minicart()
            }
            dataLayer.push({
                event: "rrAddToCart",
                rrProductIdAddedToCart: e.product_id
            })
        }
    })
}

function showorder(e) {
    $(e).closest("table").find(".active").removeClass("active"), $(e).closest("tr").addClass("active"), $("#orderinfo").empty(), $("#orderinfo").append('<div class="preloader"><img src="/catalog/view/theme/default/i/reload.gif" alt="" /></div>'), $.getJSON($(e).attr("href"), function(e) {
        var t = $('<table class="orderproducts">'),
            a = $('<div class="col-60 shipping"></div>'),
            i = $('<div class="col-35 col-offset-5 totals"></div>');
        $(t).append("<thead>").append("<tbody>"), $("thead", t).append("<tr>"), $.each(e.products_th, function(e, a) {
            $("thead tr", t).append("<td>" + a + "</td>")
        }), $.each(e.products, function(e, a) {
            var i = $("<tr>");
            $(i).append("<td>" + a.name + "</td>");
            var s = "ONE SIZE";
            $.each(a.option, function(e, t) {
                "Размер" == t.name && (s = t.value)
            }), $(i).append("<td>" + s + "</td>"), $(i).append("<td>" + a.quantity + "</td>"), $(i).append("<td>" + setrub(a.price) + "</td>"), $(i).append("<td>" + setrub(a.total) + "</td>"), $("tbody", t).append(i)
        }), $(a).append('<div class="row"><div class="col-30 col-sm-40">' + e.text_shipping_method + '</div><div class="col-60 black">' + e.shipping_method + "</div></div>"), $(a).append('<div class="row"><div class="col-30 col-sm-40">' + e.text_shipping_address + '</div><div class="col-60 black">' + e.shipping_address + "</div></div>"), $(a).append('<div class="row"><div class="col-30 col-sm-40">' + e.text_payment_method + '</div><div class="col-60 black">' + e.payment_method + "</div></div>"), e.ticket && $(a).append('<div class="row"><div class="col-30 col-sm-40">Трекинг-номер посылки:</div><div class="col-60 black">' + e.ticket + "</div></div>"), $.each(e.totals, function(e, t) {
            var a = "";
            "Итого" == t.title && (a = " black bold"), $(i).append('<div class="row' + a + '"><div class="col-60">' + t.title + '</div><div class="col-40 black taright">' + setrub(t.text) + "</div></div>")
        }), $(".row:first-child .taright", i).addClass("bold");
        var s = $('<div class="row">').append(a).append(i);
        $("#orderinfo").empty().hide().append("<h1>" + e.heading_title + " №" + e.order_id + "</h1>").append(t).append("<hr>").append(s).fadeIn("fast")
    })
}

function setrub(e) {
    return e.replace("р", '<em class="currency">р</em>')
}

function initYMap(e) {
    var t = ["zoomControl"];
    "YMapTop" == e && (t = []), bsMap[e] = new ymaps.Map(e, {
        center: [55.982013, 37.189911],
        zoom: 15,
        controls: t
    }, {
        suppressMapOpenBlock: !0
    }), bsMap[e].behaviors.disable("scrollZoom");

    new ymaps.Placemark([55.76697017, 37.62217883], {
        balloonContent: '<b>Парковка</b><br>Трубная площадь<br><a href="http://parking.mos.ru/about/151/" target="_blank">Как оплатить?</a><hr><b>Паркомат №001031</b><br>Трубная площадь, дом 2'
    }, {
        iconLayout: "default#image",
        iconImageHref: "catalog/view/theme/default/i/parking-blue.png",
        iconImageSize: [18, 24],
        iconImageOffset: [-9, -24]
    });
    "YMap" == e && (bsMap[e].geoObjects.add(i), bsMap[e].geoObjects.add(s));
    var n = new ymaps.Placemark([55.982013, 37.189911], {
        hintContent: "Брендовая одежда"
    }, {
        iconLayout: "default#image",
        iconImageHref: "/local/templates/main/images/logo-map.png",
        iconImageSize: [40, 40],
        iconImageOffset: [0, -41]
    });
    bsMap[e].geoObjects.add(n)
}

function arrangeBrands() {
    for (var e = 6, t = Math.ceil($(".nav .brands li").length / e), a = 1; e > a; a++) {
        var i = $('<ul class="brands"></ul>'),
            s = -1;
        $(".nav .brands:eq(" + (a - 1) + ") li:gt(" + t + ")").each(function(e, t) {
            0 > s && $(this).hasClass("letter") && (s = $(this).index() - 1)
        }), s >= 0 && s < $(".nav .brands:eq(" + (a - 1) + ") li").length && ($(".nav .brands:eq(" + (a - 1) + ") li:gt(" + s + ")").appendTo(i), $(".nav .brands").parent("div").append(i))
    }
    $(".nav .brands").css({
        width: (100 - 2 * ($(".nav .brands").length - 1)) / $(".nav .brands").length + "%"
    })
}

function hideRightBlocks(e) {
    $(".nav .right a:first-child").removeClass("active"), $("#userarea, #minicart, #minicurrency").stop(!0, !0).slideUp(200), e && hideShadow()
}

function showShadow() {
    $("#wrap > .shadow").stop(!0, !0).fadeIn("fast")
}

function hideShadow() {
    $("#popupinfo").fadeOut("fast"), $(".discountinfo").fadeOut("fast", function() {
        $(this).remove()
    }), $(".nav a.active").length || $(".big-images").is(":visible") || $("#wrap > .shadow").stop(!0, !0).fadeOut("fast", function() {
        $(this).removeClass("darkshadow")
    })
}

function quikview(e) {
    $(".shadow").addClass("darkshadow"), showShadow();
    var t = $('<div class="close"></div>').css("right", "-44px");
    $(t).click(hideShadow), $("#popupinfo").empty().append(t).fadeIn("fast"), $("#popupinfo").append('<div class="preloader"><img src="/catalog/view/theme/default/i/reload.gif" alt="" /></div>'), $("#popupinfo").width(890).height(560).css("margin", "-180px 0 0 -456px"), $.getJSON("/index.php?route=product/category/getproductinfo&product_id=" + e, function(t) {
        var a = window._rutarget || [];
        a.push({
            event: "showOffer",
            sku: e,
            price: t.special ? t.special.replace(/р/g, "") : t.price.replace(/р/g, "")
        });
        var i = $('<div class="quik"/>'),
            s = $('<div class="product-image-big"/>'),
            n = $('<div class="product-thumbs"/>');
        $.each(t.images, function(e, a) {
            s.append('<div><img src="' + t.big_images[e] + '" alt="" /></div>'), n.append('<div><img src="' + t.images[e] + '" alt="" /></div>')
        });
        var o = $('<div class="product-right"/>');
        if (o.append("<h1><span>" + t.manufacturer + "</span><span>" + t.category + "<br>" + t.model + "</span></h1>"), o.append('<div class="price"/>'), t.special ? ($(".price", o).append('<span class="regprice"><strike>' + t.price.replace(/р/g, '<em class="currency">р</em>') + "</strike></span>"), $(".price", o).append('<span class="saleprice" id="price">' + t.special.replace(/р/g, '<em class="currency">р</em>') + "</span>")) : $(".price", o).append('<span class="regprice" id="price">' + t.price.replace(/р/g, '<em class="currency">р</em>') + "</span>"), o.append('<div class="row product-select"/>'), $(".product-select", o).append('<div class="row"><div class="col-30">' + t.dimensions[0].name + '</div><div id="sizes" class="col-66 col-offset-4"></div></div>').append('<div class="row"><div class="col-30">' + lang.color + '</div><div id="colors" class="col-66 col-offset-4"></div></div>'), t.colors) {
            var c = $('<div class="custom-select"/>');
            c.append('<div class="current"><em>' + t.color + "</em> <span>" + lang.selected + "</span></div>"), c.append('<div class="select-box"><div class="options"></div></div>'), $.each(t.colors, function(e, t) {
                $(".options", c).append('<div data-id="' + t.product_id + '"><div class="img"><img src="' + t.images[0] + '"></div>' + t.color + "</div>")
            }), $("#colors", o).append(c)
        } else $("#colors", o).append('<div class="singleselect">' + t.color + "</div>");
        $("#colors .options *[data-id]", o).click(function() {
            quikview($(this).attr("data-id"))
        });
        var d = $('<div class="custom-select" data-input-id="product-size"/>');
        d.append('<div class="current"><em>' + t.dimensions[0].name + '</em> <span style="display: none;">' + lang.selected + "</span></div>"), d.append('<div class="select-box"><div class="options"></div></div>'), $.each(t.dimensions[0].option_value, function(e, t) {
            $(".options", d).append('<div data-option-id="' + t.product_option_value_id + '">' + t.name + "</div>")
        }), $("#sizes", o).append(d), o.append('<input type="hidden" name="option[' + t.dimensions[0].product_option_id + ']" id="product-size"> '), o.append('<input type="hidden" name="quantity" value="1" />'), o.append('<input type="hidden" name="product_id" value="' + t.product_id + '" />'), $("#product-size", o).change(function() {
            $(".btn-cart").show(), $(".btn-error").hide(), $(".btn-success").remove()
        });
        var r = t.stock_status,
            l = $('<div class="col-70"></div>');
        r.match(/Закрыто/g) || r.match(/Close/g) || r.match(/оффлайн/g) || r.match(/offline/g) || r.match(/не доступен/g) || r.match(/not available/g) ? ($("#sizes", o).closest(".row").remove(), t.location ? l.append('<span class="btn btn-salestart">' + t.location + "</span>") : l.append('<span class="btn btn-unavialable">' + r + "</span>")) : r.match(/Предзаказ/g) || r.match(/Pre-/g) ? l.append('<button type="button" title="' + lang.preorder + '" class="btn btn-cart btn-preorder">' + lang.preorder + "</button>") : l.append('<button type="button" title="' + lang.tobag + '" class="btn btn-cart">' + lang.tobag + "</button>"), l.append('<button style="display: none;" type="button" class="btn btn-error">' + lang.sizereq + "</button>");
        var p = $('<div class="col-30"/>'),
            u = $('<div class="wishlist-star' + (t.in_wish ? " wish" : "") + '" data-id="' + e + '"></div>');
        u.append('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><path d="M9 19 L21 19 L24 9 L24 9 L24 9 L28 19 L39 19 L30 26 L33 36 L24 30 L15 36 L19 26 Z"></path></svg>');
        var h = $('<div class="share-box"/>');
        if (h.append('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><path d="M19 12 L12 12 L12 35 L36 35 L36 12 L29 12"></path><path d="M20 19 L24 14 L28 19"></path><path d="M24 29 L24 14"></path></svg>'), h.append($('<div class="socials">').append('<div class="share" data-social="vk" data-url="' + t.href + '"><img src="/catalog/view/theme/default/i/social-vk.svg"></div>').append('<div class="share" data-social="fb" data-url="' + t.href + '"><img src="/catalog/view/theme/default/i/social-fb.svg"></div>')), p.append(h).append(u), o.append($('<div class="row">').append(l).append(p)), $(".btn-cart", o).click(function() {
                productToCart()
            }), t.description) {
            o.append('<div class="description"></div>');
            var v = t.description.split("&lt;/p&gt;");
            v = v[0].split("•"), v = $("<div />").html(v[0]).text(), $(".description", o).append(v), $(".description", o).text(cut(250))
        }
        var m = $("<div/>").addClass("product-images").append(s).append(n);
        o.append('<a href="' + t.href + '" class="btn btn-grey">' + lang.readmore + "</a>"), $(i).append(m).append(o), $("#popupinfo .quikcnt").remove(), $("#popupinfo").append(i), $("#popupinfo .preloader").fadeOut("fast", function() {
            $(this).remove
        });
        var g = {
                lazyLoad: "progressive",
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: !1,
                fade: !0,
                draggable: !1
            },
            f = {
                dots: !1,
                asNavFor: ".product-image-big",
                prevArrow: '<div class="prev"></div>',
                nextArrow: '<div class="next"></div>',
                slidesToShow: 3,
                slidesToScroll: 1,
                variableWidth: !0,
                draggable: !1
            };
        $(".product-thumbs").children().length > 3 ? (g.asNavFor = ".product-thumbs", f.centerMode = !0) : ($(".product-images").addClass("lessthumbs"), $(".product-image-big").on("beforeChange", function(e, t, a, i) {
            console.log(i), $(".product-thumbs .slick-current").removeClass("slick-current"), $(".product-thumbs .slick-slide:eq(" + i + ")").addClass("slick-current")
        })), $(".product-thumbs").slick(f), $(".product-image-big").slick(g)
    }), $(window).trigger("scroll")
}

function getCookie(e) {
    var t = document.cookie.match(new RegExp("(?:^|; )" + e.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, "\\$1") + "=([^;]*)"));
    return t ? decodeURIComponent(t[1]) : void 0
}

function cut(e) {
    return function(t, a) {
        if (a.length > e) {
            var i = a.substr(0, e);
            return /^\S/.test(a.substr(e)) ? i.replace(/\s+\S*$/, "") + "..." : i + "..."
        }
        return a
    }
}

function tableSwap(e) {
    e.each(function() {
        $(this).after('<table class="rev"><tbody></tbody></table>');
        var e = $(this).next("table").children("tbody");
        $(this).children("tbody").children("tr").each(function() {
            $(this).find("td, th").each(function(t) {
                null == e.children("tr:eq(" + t + ")").html() && e.append("<tr></tr>"), e.children("tr:eq(" + t + ")").append($(this)[0].outerHTML)
            })
        })
    }), e.remove()
}

function addLink() {
    var e, t = document.getElementsByTagName("body")[0];
    e = window.getSelection();
    var a = "<br /><br /> Источник: <a href='" + document.location.href + "'>" + document.location.href + "</a><br />Copyright &copy; brandshop.ru",
        i = e + a,
        s = document.createElement("div");
    s.style.position = "absolute", s.style.left = "-99999px", t.appendChild(s), s.innerHTML = i, e.selectAllChildren(s), window.setTimeout(function() {
        t.removeChild(s)
    }, 0)
}

function setSort(e) {
    var t = {
        sort: "",
        order: "",
        mfp: "",
        search: ""
    };
    for (p in t) try {
        t[p] = e.split(p + "=")[1].split("&")[0]
    } catch (a) {}
    try {
        t.mfp = location.search.split("mfp=")[1].split("&")[0]
    } catch (a) {}
    e = e.split("?")[0];
    var i = 0;
    for (p in t) t[p] && (e += (0 != i ? "&" : "?") + p + "=" + t[p], i++);
    location = e
}

function jivo_onLoadCallback() {
    $("html").click(function() {
        $("#chat").removeClass("explanded")
    }), $("#chat").addClass("visible").click(function(e) {
        e.stopPropagation()
    }), $("#chat > img").click(function() {
        return "online" !== jivo_config.chat_mode ? (jivo_api.open(), !1) : ($("#chat").addClass("explanded"), $("#chat .phonecall, #chat .startchat").click(function() {
            $("#chat").removeClass("visible");
            var e = $(this).hasClass("phonecall") ? {
                start: "call"
            } : "";
            jivo_api.open(e)
        }), void $("#chat .close").click(function() {
            $("#chat").addClass("visible").removeClass("explanded")
        }))
    })
}

function jivo_onOpen() {
    $("#chat").removeClass("visible").removeClass("explanded")
}

function jivo_onClose() {
    $("#chat").addClass("visible").removeClass("explanded")
}
$(document).on({
    mouseenter: function() {
        $(".product-image", this).css("display", "none"), $(".available-sizes", this).css("display", "block"), $(".available-sizes", this).width($(".product-image", this).width() - 8).css("margin-top", -$(".available-sizes", this).height() - 8 + "px")
    },
    mouseleave: function() {
        $(".product-image", this).css("display", "block"), $(".available-sizes", this).css("display", "none")
    }
}, ".product-image-wrap"), $.fn.cSelectDestroy = function() {
    this.parent().find("div.cSelect").remove(), this.removeClass("cSelect-init").show()
}, $.fn.cSelect = function() {
    this.not(".cSelect-init").each(function() {
        var e = this;
        $(e).addClass("cSelect-init"), e.cSelect = $("<div/>").addClass("cSelect"), e.cSelect.attr("style", $(e).attr("style"));
        var t = $("<div/>").addClass("cSelect-optscnt").addClass("row"),
            a = $("<div/>").addClass("cSelect-current").addClass("row"),
            i = 0;
        $("option:selected", this).length && (i = $("option:selected", this).index()), a.text($("option", e).eq(i).text()), a.text() || a.text("-"), $("option", this).each(function() {
            var i = $("<div/>").addClass("cSelect-option").addClass("row");
            i.text($(this).text()), i.click(function(t) {
                $(e).hasClass("cSelect-colorway") || a.text($(this).text()), $(e).val() != $("option", e).eq($(this).index()).val() && $(e).val($("option", e).eq($(this).index()).val()).trigger("change")
            }), $(e).hasClass("cSelect-colorway") && $(this).attr("data-image") && i.attr("title", $(this).attr("data-title")).prepend('<img src="' + $(this).attr("data-image") + '">'), i.text() || i.text("-"), t.append(i)
        }), $(e).hasClass("cSelect-colorway") && ($(e).closest(".quik").length ? $("option", this).length > 2 && t.width(236) : $("option", this).length > 3 ? t.width(354) : t.width(118 * ($("option", this).length - 1))), a.click(function() {
            $(this).closest(".cSelect").toggleClass("cSelect-opened")
        }), e.cSelect.append(a).append(t), $(this).after(e.cSelect), $(this).hasClass("cSelect-fixedwidth") ? t.width() + 20 >= a.width() && (a.width(t.width() + 20), t.width(t.width() + 20)) : a.css("display", "inline-block"), $(this).hasClass("cSelect-grey") && e.cSelect.addClass("cSelect-grey"), $(this).hasClass("cSelect-right") && e.cSelect.addClass("cSelect-right"), $(this).hasClass("cSelect-widthtoparent") && (e.cSelect.addClass("cSelect-widthtoparent"), t.width($(e).parent().width())), $(this).hasClass("cSelect-colorway") && e.cSelect.addClass("cSelect-colorway"), $(this).hasClass("cSelect-size") && e.cSelect.addClass("cSelect-size"), $(this).hasClass("cSelect-currentblack") && e.cSelect.addClass("cSelect-currentblack"), $(e).hide()
    })
}, $(document).on("mouseup", function(e) {
    !$(e.target).hasClass("cSelect-optscnt") && $(".cSelect-current").length && $(".cSelect-current").closest(".cSelect").removeClass("cSelect-opened")
});
var bsMap = [];
$("body").keydown(function(e) {
    if (e.ctrlKey && 13 == e.keyCode) {
        var t = "";
        if (window.getSelection ? t = window.getSelection().toString() : document.selection && "Control" != document.selection.type && (t = document.selection.createRange().text), t) {
            $(".shadow").addClass("darkshadow"), showShadow();
            var a = $('<div class="close"></div>').css("right", "-44px");
            $(a).click(hideShadow);
            var i = $("<div/>").addClass("mistake"),
                s = $("<form/>"),
                n = $('<button class="btn btn-orange" type="submit">Отправить</button>'),
                o = $('<input type="text" placeholder="Комментарий для автора (необязательно)">');
            s.append(o).append(n).submit(function() {
                return $.ajax({
                    url: "https://brandshop.ru/mistake",
                    type: "post",
                    data: "mistake=" + t + "&comment=" + o.val() + "&url=" + window.location.href,
                    dataType: "json",
                    success: hideShadow
                }), !1
            }), i.append($("<p/>").text(t.substring(0, 220))).append(s), $("#popupinfo").empty().append(a).append(i).fadeIn("fast").width(560).css("margin", "-100 0 0 -280px")
        }
    }
});