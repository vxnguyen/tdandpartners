/* ========================================================================
 * Bootstrap: transition.js v3.3.7
 * http://getbootstrap.com/javascript/#transitions
 * Bootstrap: carousel.js v3.3.7
 * http://getbootstrap.com/javascript/#carousel
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */
+function(t) {
    "use strict";
    function e() {
        var t = document.createElement("bootstrap")
          , e = {
            WebkitTransition: "webkitTransitionEnd",
            MozTransition: "transitionend",
            OTransition: "oTransitionEnd otransitionend",
            transition: "transitionend"
        };
        for (var i in e)
            if (void 0 !== t.style[i])
                return {
                    end: e[i]
                };
        return !1
    }
    t.fn.emulateTransitionEnd = function(e) {
        var i = !1
          , n = this;
        t(this).one("bsTransitionEnd", function() {
            i = !0
        });
        var s = function() {
            i || t(n).trigger(t.support.transition.end)
        };
        return setTimeout(s, e),
        this
    }
    ,
    t(function() {
        t.support.transition = e(),
        t.support.transition && (t.event.special.bsTransitionEnd = {
            bindType: t.support.transition.end,
            delegateType: t.support.transition.end,
            handle: function(e) {
                return t(e.target).is(this) ? e.handleObj.handler.apply(this, arguments) : void 0
            }
        })
    })
}(jQuery),
+function(t) {
    "use strict";
    function e(e) {
        return this.each(function() {
            var n = t(this)
              , s = n.data("bs.carousel")
              , a = t.extend({}, i.DEFAULTS, n.data(), "object" == typeof e && e)
              , r = "string" == typeof e ? e : a.slide;
            s || n.data("bs.carousel", s = new i(this,a)),
            "number" == typeof e ? s.to(e) : r ? s[r]() : a.interval && s.pause().cycle()
        })
    }
    var i = function(e, i) {
        this.$element = t(e),
        this.$indicators = this.$element.find(".carousel-indicators"),
        this.options = i,
        this.paused = null ,
        this.sliding = null ,
        this.interval = null ,
        this.$active = null ,
        this.$items = null ,
        this.options.keyboard && this.$element.on("keydown.bs.carousel", t.proxy(this.keydown, this)),
        "hover" == this.options.pause && !("ontouchstart"in document.documentElement) && this.$element.on("mouseenter.bs.carousel", t.proxy(this.pause, this)).on("mouseleave.bs.carousel", t.proxy(this.cycle, this))
    };
    i.VERSION = "3.3.7",
    i.TRANSITION_DURATION = 600,
    i.DEFAULTS = {
        interval: 5e3,
        pause: "hover",
        wrap: !0,
        keyboard: !0
    },
    i.prototype.keydown = function(t) {
        if (!/input|textarea/i.test(t.target.tagName)) {
            switch (t.which) {
            case 37:
                this.prev();
                break;
            case 39:
                this.next();
                break;
            default:
                return
            }
            t.preventDefault()
        }
    }
    ,
    i.prototype.cycle = function(e) {
        return e || (this.paused = !1),
        this.interval && clearInterval(this.interval),
        this.options.interval && !this.paused && (this.interval = setInterval(t.proxy(this.next, this), this.options.interval)),
        this
    }
    ,
    i.prototype.getItemIndex = function(t) {
        return this.$items = t.parent().children(".item"),
        this.$items.index(t || this.$active)
    }
    ,
    i.prototype.getItemForDirection = function(t, e) {
        var i = this.getItemIndex(e)
          , n = "prev" == t && 0 === i || "next" == t && i == this.$items.length - 1;
        if (n && !this.options.wrap)
            return e;
        var s = "prev" == t ? -1 : 1
          , a = (i + s) % this.$items.length;
        return this.$items.eq(a)
    }
    ,
    i.prototype.to = function(t) {
        var e = this
          , i = this.getItemIndex(this.$active = this.$element.find(".item.active"));
        return t > this.$items.length - 1 || 0 > t ? void 0 : this.sliding ? this.$element.one("slid.bs.carousel", function() {
            e.to(t)
        }) : i == t ? this.pause().cycle() : this.slide(t > i ? "next" : "prev", this.$items.eq(t))
    }
    ,
    i.prototype.pause = function(e) {
        return e || (this.paused = !0),
        this.$element.find(".next, .prev").length && t.support.transition && (this.$element.trigger(t.support.transition.end),
        this.cycle(!0)),
        this.interval = clearInterval(this.interval),
        this
    }
    ,
    i.prototype.next = function() {
        return this.sliding ? void 0 : this.slide("next")
    }
    ,
    i.prototype.prev = function() {
        return this.sliding ? void 0 : this.slide("prev")
    }
    ,
    i.prototype.slide = function(e, n) {
        var s = this.$element.find(".item.active")
          , a = n || this.getItemForDirection(e, s)
          , r = this.interval
          , o = "next" == e ? "left" : "right"
          , l = this;
        if (a.hasClass("active"))
            return this.sliding = !1;
        var d = a[0]
          , c = t.Event("slide.bs.carousel", {
            relatedTarget: d,
            direction: o
        });
        if (this.$element.trigger(c),
        !c.isDefaultPrevented()) {
            if (this.sliding = !0,
            r && this.pause(),
            this.$indicators.length) {
                this.$indicators.find(".active").removeClass("active");
                var u = t(this.$indicators.children()[this.getItemIndex(a)]);
                u && u.addClass("active")
            }
            var h = t.Event("slid.bs.carousel", {
                relatedTarget: d,
                direction: o
            });
            return t.support.transition && this.$element.hasClass("slide") ? (a.addClass(e),
            a[0].offsetWidth,
            s.addClass(o),
            a.addClass(o),
            s.one("bsTransitionEnd", function() {
                a.removeClass([e, o].join(" ")).addClass("active"),
                s.removeClass(["active", o].join(" ")),
                l.sliding = !1,
                setTimeout(function() {
                    l.$element.trigger(h)
                }, 0)
            }).emulateTransitionEnd(i.TRANSITION_DURATION)) : (s.removeClass("active"),
            a.addClass("active"),
            this.sliding = !1,
            this.$element.trigger(h)),
            r && this.cycle(),
            this
        }
    }
    ;
    var n = t.fn.carousel;
    t.fn.carousel = e,
    t.fn.carousel.Constructor = i,
    t.fn.carousel.noConflict = function() {
        return t.fn.carousel = n,
        this
    }
    ;
    var s = function(i) {
        var n, s = t(this), a = t(s.attr("data-target") || (n = s.attr("href")) && n.replace(/.*(?=#[^\s]+$)/, ""));
        if (a.hasClass("carousel")) {
            var r = t.extend({}, a.data(), s.data())
              , o = s.attr("data-slide-to");
            o && (r.interval = !1),
            e.call(a, r),
            o && a.data("bs.carousel").to(o),
            i.preventDefault()
        }
    };
    t(document).on("click.bs.carousel.data-api", "[data-slide]", s).on("click.bs.carousel.data-api", "[data-slide-to]", s),
    t(window).on("load", function() {
        t('[data-ride="carousel"]').each(function() {
            var i = t(this);
            e.call(i, i.data())
        })
    })
}(jQuery),

jQuery("#slider").on("slide.bs.carousel", function(t) {
    var e = jQuery(t.relatedTarget).index();
    jQuery("#slider_captions .carousel-caption:not(#caption-" + e + ")").fadeOut("fast", function() {
        jQuery("#caption-" + e).fadeIn()
    })
});
