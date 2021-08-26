!(function () {
    "use strict";
    function e(e, t, n) {
        return (
            t in e
                ? Object.defineProperty(e, t, {
                      value: n,
                      enumerable: !0,
                      configurable: !0,
                      writable: !0,
                  })
                : (e[t] = n),
            e
        );
    }
    function t(e, t) {
        var n = Object.keys(e);
        if (Object.getOwnPropertySymbols) {
            var o = Object.getOwnPropertySymbols(e);
            t &&
                (o = o.filter(function (t) {
                    return Object.getOwnPropertyDescriptor(e, t).enumerable;
                })),
                n.push.apply(n, o);
        }
        return n;
    }
    var n =
        "undefined" != typeof globalThis
            ? globalThis
            : "undefined" != typeof window
            ? window
            : "undefined" != typeof global
            ? global
            : "undefined" != typeof self
            ? self
            : {};
    function o(e, t, n) {
        return (
            e(
                (n = {
                    path: t,
                    exports: {},
                    require: function (e, t) {
                        return (function () {
                            throw new Error(
                                "Dynamic requires are not currently supported by @rollup/plugin-commonjs"
                            );
                        })(null == t && n.path);
                    },
                }),
                n.exports
            ),
            n.exports
        );
    }
    for (
        var r = o(function (e) {
                var t =
                    ("undefined" != typeof crypto &&
                        crypto.getRandomValues &&
                        crypto.getRandomValues.bind(crypto)) ||
                    ("undefined" != typeof msCrypto &&
                        "function" == typeof window.msCrypto.getRandomValues &&
                        msCrypto.getRandomValues.bind(msCrypto));
                if (t) {
                    var n = new Uint8Array(16);
                    e.exports = function () {
                        return t(n), n;
                    };
                } else {
                    var o = new Array(16);
                    e.exports = function () {
                        for (var e, t = 0; t < 16; t++)
                            0 == (3 & t) && (e = 4294967296 * Math.random()),
                                (o[t] = (e >>> ((3 & t) << 3)) & 255);
                        return o;
                    };
                }
            }),
            i = [],
            a = 0;
        a < 256;
        ++a
    )
        i[a] = (a + 256).toString(16).substr(1);
    var s,
        c,
        d = function (e, t) {
            var n = t || 0,
                o = i;
            return [
                o[e[n++]],
                o[e[n++]],
                o[e[n++]],
                o[e[n++]],
                "-",
                o[e[n++]],
                o[e[n++]],
                "-",
                o[e[n++]],
                o[e[n++]],
                "-",
                o[e[n++]],
                o[e[n++]],
                "-",
                o[e[n++]],
                o[e[n++]],
                o[e[n++]],
                o[e[n++]],
                o[e[n++]],
                o[e[n++]],
            ].join("");
        },
        u = 0,
        l = 0;
    var p = function (e, t, n) {
        var o = (t && n) || 0,
            i = t || [],
            a = (e = e || {}).node || s,
            p = void 0 !== e.clockseq ? e.clockseq : c;
        if (null == a || null == p) {
            var w = r();
            null == a && (a = s = [1 | w[0], w[1], w[2], w[3], w[4], w[5]]),
                null == p && (p = c = 16383 & ((w[6] << 8) | w[7]));
        }
        var f = void 0 !== e.msecs ? e.msecs : new Date().getTime(),
            m = void 0 !== e.nsecs ? e.nsecs : l + 1,
            h = f - u + (m - l) / 1e4;
        if (
            (h < 0 && void 0 === e.clockseq && (p = (p + 1) & 16383),
            (h < 0 || f > u) && void 0 === e.nsecs && (m = 0),
            m >= 1e4)
        )
            throw new Error("uuid.v1(): Can't create more than 10M uuids/sec");
        (u = f), (l = m), (c = p);
        var b = (1e4 * (268435455 & (f += 122192928e5)) + m) % 4294967296;
        (i[o++] = (b >>> 24) & 255),
            (i[o++] = (b >>> 16) & 255),
            (i[o++] = (b >>> 8) & 255),
            (i[o++] = 255 & b);
        var g = ((f / 4294967296) * 1e4) & 268435455;
        (i[o++] = (g >>> 8) & 255),
            (i[o++] = 255 & g),
            (i[o++] = ((g >>> 24) & 15) | 16),
            (i[o++] = (g >>> 16) & 255),
            (i[o++] = (p >>> 8) | 128),
            (i[o++] = 255 & p);
        for (var v = 0; v < 6; ++v) i[o + v] = a[v];
        return t || d(i);
    };
    var w = function (e, t, n) {
            var o = (t && n) || 0;
            "string" == typeof e &&
                ((t = "binary" === e ? new Array(16) : null), (e = null));
            var i = (e = e || {}).random || (e.rng || r)();
            if (((i[6] = (15 & i[6]) | 64), (i[8] = (63 & i[8]) | 128), t))
                for (var a = 0; a < 16; ++a) t[o + a] = i[a];
            return t || d(i);
        },
        f = w;
    (f.v1 = p), (f.v4 = w);
    var m = f;
    const h = { v: 1, t: "event", tid: "UA-155375238-1" },
        b = { v: 1, t: "event", tid: "UA-155375238-4" },
        g = () => {
            if (document.cookie) {
                var e = document.cookie;
                return e.match(/_ga=(.+?);/)
                    ? e
                          .match(/_ga=(.+?);/)[1]
                          .split(".")
                          .slice(-2)
                          .join(".")
                    : !!e.match(/_ga=(.+?)$/) &&
                          e
                              .match(/_ga=(.+?)$/)[1]
                              .split(".")
                              .slice(-2)
                              .join(".");
            }
            return !1;
        },
        v = () => {
            var e,
                t = document.cookie.match(/_mc_uid=(.+?);/)
                    ? document.cookie.match(/_mc_uid=(.+?);/)[1]
                    : !!document.cookie.match(/_mc_uid=(.+?)$/) &&
                      document.cookie.match(/_mc_uid=(.+?)$/)[1];
            return (
                t ||
                    ((e = new Date().getTime()),
                    (t = "xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(
                        /[xy]/g,
                        function (t) {
                            var n = (e + 16 * Math.random()) % 16 | 0;
                            return (
                                (e = Math.floor(e / 16)),
                                ("x" === t ? n : (3 & n) | 8).toString(16)
                            );
                        }
                    )),
                    (document.cookie = "_mc_uid=" + t)),
                t
            );
        },
        y = () => (L() ? L() : g() ? g() : v()),
        C = (e, t = h) =>
            new Promise((n, o) => {
                var r = ((e) => {
                        var t = "";
                        for (const n in e)
                            e[n] &&
                                (t +=
                                    encodeURIComponent(n) +
                                    "=" +
                                    encodeURIComponent(e[n]) +
                                    "&");
                        return t;
                    })(Object.assign(t, { cid: y() }, e)),
                    i = new XMLHttpRequest();
                (i.withCredentials = !0),
                    i.addEventListener("readystatechange", function () {
                        if (4 === this.readyState)
                            try {
                                n(JSON.parse(this.responseText));
                            } catch (e) {
                                n({});
                            }
                    });
                i.open("POST", "https://www.google-analytics.com/collect"),
                    i.send(r);
            }),
        M = (e, t, n) => {
            if (window.parent) {
                const o = window.MC.USrc.Parent.cpmId;
                window.parent.postMessage(
                    {
                        event: "tracking.mc",
                        payload: {
                            event: e,
                            provider: n,
                            id: o,
                            data: JSON.parse(JSON.stringify(t)),
                        },
                    },
                    "*"
                );
            }
        },
        _ = (e) => {
            var t = ((e) => {
                const t = {
                    "em.fare.popup.fareListTwoColumn": "fare-list--two-columns",
                    "em.fare.popup.fareListPopularDestination":
                        "popular-destinations",
                    "em.fare.popup.faresCarouselBackgroundImage":
                        "fares-carousel-background-image",
                    "em.fare.popup.fareListLowFareCalendar":
                        "low-fare-calendar",
                    "em.fare.popup.fareListFeaturedDestination":
                        "featured-destination",
                    "em.fare.popup.heroMonthlyHistogramContainer":
                        "hero-monthly-histogram",
                    "em.fare.popup.fareTable": "fare-table",
                    "em.fare.popup.faresGridBackgroundImage":
                        "fares-grid-background-image",
                };
                return t[e] ? t[e] : e;
            })(e);
            if (
                t === e &&
                window.MC &&
                window.MC.Pages &&
                window.MC.Pages.LoadedComponents
            ) {
                var n = window.MC.Pages.LoadedComponents;
                for (let o = 0; o < n.length; o++) {
                    const r = n[o];
                    r.name === e && (t = r.cmpId);
                }
            }
            return t;
        },
        x = (e) => {
            let t = e.split(".");
            if (((t = t[3] || null), t)) {
                t = ((e) => {
                    let t = e
                        .replace(/([a-z0-9])([A-Z])/g, "$1 $2")
                        .toLowerCase()
                        .replace(/ /g, "-");
                    return (
                        "fare-list-two-column" === t &&
                            (t = "fare-list--two-columns"),
                        t
                    );
                })(t);
                const n = {
                    team: S(),
                    userID: y(),
                    itemID: _(e),
                    availableComponents: k().length > 0 ? k() : [{ name: t }],
                    metric: "cta",
                    conversion: !0,
                    componentTrack: _(e),
                    installedAt: A(),
                    pageContext: {
                        code: I(),
                        url: window.IFrameReferer
                            ? window.IFrameReferer
                            : document.referrer
                            ? document.referrer
                            : window.location.href,
                        referrer: document.referrer,
                        urlTarget: window.location.href,
                    },
                };
                window.MC.Helpers.collect(n);
            }
        },
        P = (e, t) => {
            if (t && t.component && t.action) {
                let e = {
                    availableComponents:
                        k().length > 0
                            ? k()
                            : [
                                  {
                                      name: t.component,
                                      moduleId: t.moduleId,
                                      cmpId: t.cmpId,
                                      version: t.version,
                                      social: t.social,
                                  },
                              ],
                    team: S(),
                    userID: y(),
                    itemID: t.component,
                    metric: t.action,
                    conversion: !0,
                    componentTrack: t.component,
                    installedAt: A(),
                    social: t.social,
                    pageContext: {
                        code: I(),
                        url: window.IFrameReferer
                            ? window.IFrameReferer
                            : document.referrer
                            ? document.referrer
                            : window.location.href,
                        referrer: document.referrer,
                        urlTarget: window.location.href,
                    },
                };
                if ("impression" === t.action) {
                    if (
                        ((e.metric = "print"),
                        (e.conversion = !1),
                        O() &&
                            "about:blank" !== e.pageContext.url &&
                            "about:blank" !== e.pageContext.urlTarget)
                    ) {
                        const t = T();
                        t && (e.sampling = t), window.MC.Helpers.collect(e);
                    }
                } else window.MC.Helpers.collect(e);
            }
        },
        E = (e, t) => {
            if (t && t.component && t.action) {
                let e = {
                    ec: "widget",
                    ea: "click",
                    dl: window.location.href,
                    el: t.component,
                    dr: window.IFrameReferer
                        ? window.IFrameReferer
                        : document.referrer
                        ? document.referrer
                        : window.location.href,
                };
                t.gclid && "" !== t.gclid && (e.gclid = t.gclid),
                    "impression" === t.action
                        ? ((e.ea = "view"),
                          O() &&
                              "about:blank" !== e.dr &&
                              "about:blank" !== e.dl &&
                              (C(e),
                              0 === A() && ((e.ea = "install"), C(e), C(e, b))))
                        : C(e);
            }
        },
        O = () => {
            const e = T();
            return e ? (e && Math.random() > e ? 1 : 0) : 1;
        },
        S = () =>
            (window.MC &&
                window.MC.Pages &&
                window.MC.Pages.Team &&
                window.MC.Pages.Team._id) ||
            "n-a",
        T = () =>
            (window.MC &&
                window.MC.Pages &&
                window.MC.Pages.Sampling &&
                window.MC.Pages.Sampling.value) ||
            0,
        L = () =>
            (window.MC &&
                window.MC.Pages &&
                window.MC.Pages.Tracking &&
                window.MC.Pages.Tracking.userId) ||
            0,
        I = () =>
            (window.MC &&
                window.MC.Pages &&
                window.MC.Pages.Properties &&
                window.MC.Pages.Properties.code) ||
            0,
        A = () =>
            (window.MC &&
                window.MC.Pages &&
                window.MC.Pages.Properties &&
                window.MC.Pages.Properties.installedAt) ||
            0,
        k = () => {
            if (
                window.MC &&
                window.MC.Pages &&
                window.MC.Pages.LoadedComponents
            ) {
                var e = window.MC.Pages.LoadedComponents,
                    t = [];
                return (
                    e.forEach((e) => {
                        const {
                            name: n,
                            cmpId: o,
                            moduleId: r,
                            version: i,
                            gclid: a,
                            social: s,
                        } = e;
                        t.push({
                            name: n,
                            cmpId: o,
                            moduleId: r,
                            version: i,
                            gclid: a,
                            social: s,
                        });
                    }),
                    t
                );
            }
            return [];
        };
    var j = (function () {
            if ("undefined" != typeof Map) return Map;
            function e(e, t) {
                var n = -1;
                return (
                    e.some(function (e, o) {
                        return e[0] === t && ((n = o), !0);
                    }),
                    n
                );
            }
            return (function () {
                function t() {
                    this.__entries__ = [];
                }
                return (
                    Object.defineProperty(t.prototype, "size", {
                        get: function () {
                            return this.__entries__.length;
                        },
                        enumerable: !0,
                        configurable: !0,
                    }),
                    (t.prototype.get = function (t) {
                        var n = e(this.__entries__, t),
                            o = this.__entries__[n];
                        return o && o[1];
                    }),
                    (t.prototype.set = function (t, n) {
                        var o = e(this.__entries__, t);
                        ~o
                            ? (this.__entries__[o][1] = n)
                            : this.__entries__.push([t, n]);
                    }),
                    (t.prototype.delete = function (t) {
                        var n = this.__entries__,
                            o = e(n, t);
                        ~o && n.splice(o, 1);
                    }),
                    (t.prototype.has = function (t) {
                        return !!~e(this.__entries__, t);
                    }),
                    (t.prototype.clear = function () {
                        this.__entries__.splice(0);
                    }),
                    (t.prototype.forEach = function (e, t) {
                        void 0 === t && (t = null);
                        for (
                            var n = 0, o = this.__entries__;
                            n < o.length;
                            n++
                        ) {
                            var r = o[n];
                            e.call(t, r[1], r[0]);
                        }
                    }),
                    t
                );
            })();
        })(),
        R =
            "undefined" != typeof window &&
            "undefined" != typeof document &&
            window.document === document,
        q =
            "undefined" != typeof global && global.Math === Math
                ? global
                : "undefined" != typeof self && self.Math === Math
                ? self
                : "undefined" != typeof window && window.Math === Math
                ? window
                : Function("return this")(),
        z =
            "function" == typeof requestAnimationFrame
                ? requestAnimationFrame.bind(q)
                : function (e) {
                      return setTimeout(function () {
                          return e(Date.now());
                      }, 1e3 / 60);
                  };
    var D = [
            "top",
            "right",
            "bottom",
            "left",
            "width",
            "height",
            "size",
            "weight",
        ],
        N = "undefined" != typeof MutationObserver,
        H = (function () {
            function e() {
                (this.connected_ = !1),
                    (this.mutationEventsAdded_ = !1),
                    (this.mutationsObserver_ = null),
                    (this.observers_ = []),
                    (this.onTransitionEnd_ = this.onTransitionEnd_.bind(this)),
                    (this.refresh = (function (e, t) {
                        var n = !1,
                            o = !1,
                            r = 0;
                        function i() {
                            n && ((n = !1), e()), o && s();
                        }
                        function a() {
                            z(i);
                        }
                        function s() {
                            var e = Date.now();
                            if (n) {
                                if (e - r < 2) return;
                                o = !0;
                            } else (n = !0), (o = !1), setTimeout(a, t);
                            r = e;
                        }
                        return s;
                    })(this.refresh.bind(this), 20));
            }
            return (
                (e.prototype.addObserver = function (e) {
                    ~this.observers_.indexOf(e) || this.observers_.push(e),
                        this.connected_ || this.connect_();
                }),
                (e.prototype.removeObserver = function (e) {
                    var t = this.observers_,
                        n = t.indexOf(e);
                    ~n && t.splice(n, 1),
                        !t.length && this.connected_ && this.disconnect_();
                }),
                (e.prototype.refresh = function () {
                    this.updateObservers_() && this.refresh();
                }),
                (e.prototype.updateObservers_ = function () {
                    var e = this.observers_.filter(function (e) {
                        return e.gatherActive(), e.hasActive();
                    });
                    return (
                        e.forEach(function (e) {
                            return e.broadcastActive();
                        }),
                        e.length > 0
                    );
                }),
                (e.prototype.connect_ = function () {
                    R &&
                        !this.connected_ &&
                        (document.addEventListener(
                            "transitionend",
                            this.onTransitionEnd_
                        ),
                        window.addEventListener("resize", this.refresh),
                        N
                            ? ((this.mutationsObserver_ = new MutationObserver(
                                  this.refresh
                              )),
                              this.mutationsObserver_.observe(document, {
                                  attributes: !0,
                                  childList: !0,
                                  characterData: !0,
                                  subtree: !0,
                              }))
                            : (document.addEventListener(
                                  "DOMSubtreeModified",
                                  this.refresh
                              ),
                              (this.mutationEventsAdded_ = !0)),
                        (this.connected_ = !0));
                }),
                (e.prototype.disconnect_ = function () {
                    R &&
                        this.connected_ &&
                        (document.removeEventListener(
                            "transitionend",
                            this.onTransitionEnd_
                        ),
                        window.removeEventListener("resize", this.refresh),
                        this.mutationsObserver_ &&
                            this.mutationsObserver_.disconnect(),
                        this.mutationEventsAdded_ &&
                            document.removeEventListener(
                                "DOMSubtreeModified",
                                this.refresh
                            ),
                        (this.mutationsObserver_ = null),
                        (this.mutationEventsAdded_ = !1),
                        (this.connected_ = !1));
                }),
                (e.prototype.onTransitionEnd_ = function (e) {
                    var t = e.propertyName,
                        n = void 0 === t ? "" : t;
                    D.some(function (e) {
                        return !!~n.indexOf(e);
                    }) && this.refresh();
                }),
                (e.getInstance = function () {
                    return (
                        this.instance_ || (this.instance_ = new e()),
                        this.instance_
                    );
                }),
                (e.instance_ = null),
                e
            );
        })(),
        U = function (e, t) {
            for (var n = 0, o = Object.keys(t); n < o.length; n++) {
                var r = o[n];
                Object.defineProperty(e, r, {
                    value: t[r],
                    enumerable: !1,
                    writable: !1,
                    configurable: !0,
                });
            }
            return e;
        },
        $ = function (e) {
            return (e && e.ownerDocument && e.ownerDocument.defaultView) || q;
        },
        V = X(0, 0, 0, 0);
    function B(e) {
        return parseFloat(e) || 0;
    }
    function F(e) {
        for (var t = [], n = 1; n < arguments.length; n++)
            t[n - 1] = arguments[n];
        return t.reduce(function (t, n) {
            return t + B(e["border-" + n + "-width"]);
        }, 0);
    }
    function W(e) {
        var t = e.clientWidth,
            n = e.clientHeight;
        if (!t && !n) return V;
        var o = $(e).getComputedStyle(e),
            r = (function (e) {
                for (
                    var t = {}, n = 0, o = ["top", "right", "bottom", "left"];
                    n < o.length;
                    n++
                ) {
                    var r = o[n],
                        i = e["padding-" + r];
                    t[r] = B(i);
                }
                return t;
            })(o),
            i = r.left + r.right,
            a = r.top + r.bottom,
            s = B(o.width),
            c = B(o.height);
        if (
            ("border-box" === o.boxSizing &&
                (Math.round(s + i) !== t && (s -= F(o, "left", "right") + i),
                Math.round(c + a) !== n && (c -= F(o, "top", "bottom") + a)),
            !(function (e) {
                return e === $(e).document.documentElement;
            })(e))
        ) {
            var d = Math.round(s + i) - t,
                u = Math.round(c + a) - n;
            1 !== Math.abs(d) && (s -= d), 1 !== Math.abs(u) && (c -= u);
        }
        return X(r.left, r.top, s, c);
    }
    var G =
        "undefined" != typeof SVGGraphicsElement
            ? function (e) {
                  return e instanceof $(e).SVGGraphicsElement;
              }
            : function (e) {
                  return (
                      e instanceof $(e).SVGElement &&
                      "function" == typeof e.getBBox
                  );
              };
    function J(e) {
        return R
            ? G(e)
                ? (function (e) {
                      var t = e.getBBox();
                      return X(0, 0, t.width, t.height);
                  })(e)
                : W(e)
            : V;
    }
    function X(e, t, n, o) {
        return { x: e, y: t, width: n, height: o };
    }
    var Y = (function () {
            function e(e) {
                (this.broadcastWidth = 0),
                    (this.broadcastHeight = 0),
                    (this.contentRect_ = X(0, 0, 0, 0)),
                    (this.target = e);
            }
            return (
                (e.prototype.isActive = function () {
                    var e = J(this.target);
                    return (
                        (this.contentRect_ = e),
                        e.width !== this.broadcastWidth ||
                            e.height !== this.broadcastHeight
                    );
                }),
                (e.prototype.broadcastRect = function () {
                    var e = this.contentRect_;
                    return (
                        (this.broadcastWidth = e.width),
                        (this.broadcastHeight = e.height),
                        e
                    );
                }),
                e
            );
        })(),
        Z = function (e, t) {
            var n,
                o,
                r,
                i,
                a,
                s,
                c,
                d =
                    ((o = (n = t).x),
                    (r = n.y),
                    (i = n.width),
                    (a = n.height),
                    (s =
                        "undefined" != typeof DOMRectReadOnly
                            ? DOMRectReadOnly
                            : Object),
                    (c = Object.create(s.prototype)),
                    U(c, {
                        x: o,
                        y: r,
                        width: i,
                        height: a,
                        top: r,
                        right: o + i,
                        bottom: a + r,
                        left: o,
                    }),
                    c);
            U(this, { target: e, contentRect: d });
        },
        K = (function () {
            function e(e, t, n) {
                if (
                    ((this.activeObservations_ = []),
                    (this.observations_ = new j()),
                    "function" != typeof e)
                )
                    throw new TypeError(
                        "The callback provided as parameter 1 is not a function."
                    );
                (this.callback_ = e),
                    (this.controller_ = t),
                    (this.callbackCtx_ = n);
            }
            return (
                (e.prototype.observe = function (e) {
                    if (!arguments.length)
                        throw new TypeError(
                            "1 argument required, but only 0 present."
                        );
                    if (
                        "undefined" != typeof Element &&
                        Element instanceof Object
                    ) {
                        if (!(e instanceof $(e).Element))
                            throw new TypeError(
                                'parameter 1 is not of type "Element".'
                            );
                        var t = this.observations_;
                        t.has(e) ||
                            (t.set(e, new Y(e)),
                            this.controller_.addObserver(this),
                            this.controller_.refresh());
                    }
                }),
                (e.prototype.unobserve = function (e) {
                    if (!arguments.length)
                        throw new TypeError(
                            "1 argument required, but only 0 present."
                        );
                    if (
                        "undefined" != typeof Element &&
                        Element instanceof Object
                    ) {
                        if (!(e instanceof $(e).Element))
                            throw new TypeError(
                                'parameter 1 is not of type "Element".'
                            );
                        var t = this.observations_;
                        t.has(e) &&
                            (t.delete(e),
                            t.size || this.controller_.removeObserver(this));
                    }
                }),
                (e.prototype.disconnect = function () {
                    this.clearActive(),
                        this.observations_.clear(),
                        this.controller_.removeObserver(this);
                }),
                (e.prototype.gatherActive = function () {
                    var e = this;
                    this.clearActive(),
                        this.observations_.forEach(function (t) {
                            t.isActive() && e.activeObservations_.push(t);
                        });
                }),
                (e.prototype.broadcastActive = function () {
                    if (this.hasActive()) {
                        var e = this.callbackCtx_,
                            t = this.activeObservations_.map(function (e) {
                                return new Z(e.target, e.broadcastRect());
                            });
                        this.callback_.call(e, t, e), this.clearActive();
                    }
                }),
                (e.prototype.clearActive = function () {
                    this.activeObservations_.splice(0);
                }),
                (e.prototype.hasActive = function () {
                    return this.activeObservations_.length > 0;
                }),
                e
            );
        })(),
        Q = "undefined" != typeof WeakMap ? new WeakMap() : new j(),
        ee = function e(t) {
            if (!(this instanceof e))
                throw new TypeError("Cannot call a class as a function.");
            if (!arguments.length)
                throw new TypeError("1 argument required, but only 0 present.");
            var n = H.getInstance(),
                o = new K(t, n, this);
            Q.set(this, o);
        };
    ["observe", "unobserve", "disconnect"].forEach(function (e) {
        ee.prototype[e] = function () {
            var t;
            return (t = Q.get(this))[e].apply(t, arguments);
        };
    });
    var te = void 0 !== q.ResizeObserver ? q.ResizeObserver : ee;
    !(function () {
        if ("function" == typeof window.CustomEvent) return !1;
        window.CustomEvent = (e, t) => {
            t = t || { bubbles: !1, cancelable: !1, detail: null };
            var n = document.createEvent("CustomEvent");
            return n.initCustomEvent(e, t.bubbles, t.cancelable, t.detail), n;
        };
    })();
    const ne = (e, t, n) => {
            e &&
                e.postMessage &&
                "function" == typeof e.postMessage &&
                e.postMessage({ event: t, payload: n || {} }, "*");
        },
        oe = (e, t) => {
            window.parent !== window && ne(window.parent, e, t);
        },
        re = (e, t, n) => {
            t = t || window;
            const o = ((e, t) =>
                new CustomEvent(e, {
                    bubbles: !0,
                    cancelable: !0,
                    detail: t || null,
                }))(e, n);
            t.dispatchEvent(o);
        },
        ie = (e) => {
            var t;
            return (({
                method: e = "GET",
                url: t,
                headers: n,
                data: o,
                withCredentials: r = null,
            }) =>
                new Promise((i, a) => {
                    (n = n || {}),
                        "object" == typeof o &&
                            ((o = JSON.stringify(o)),
                            Object.hasOwnProperty(n, "Content-Type") ||
                                (n["Content-Type"] = "application/json"));
                    const s = new XMLHttpRequest();
                    r && (s.withCredentials = r),
                        s.open(e, t, !0),
                        Object.keys(n).forEach((e) => {
                            s.setRequestHeader(e, n[e]);
                        }),
                        (s.onloadend = (e) => {
                            if (200 === s.status) {
                                let t = {};
                                e.currentTarget &&
                                    s.responseText &&
                                    (t = { data: s.responseText });
                                try {
                                    t = { data: JSON.parse(s.responseText) };
                                } catch (e) {}
                                i(t);
                            } else a();
                        }),
                        (s.onerror = (e) => {
                            a(e);
                        }),
                        (s.onabort = (e) => {
                            a(e);
                        }),
                        o ? s.send(o) : s.send();
                }))({
                url: "https://us-central1-core-period-259421.cloudfunctions.net/availableComponentTracks",
                method: "POST",
                data:
                    (t = e) && "object" == typeof t && t.constructor === Object
                        ? JSON.stringify(e)
                        : {},
                withCredentials: !0,
            });
        };
    var ae = !1;
    if ("undefined" != typeof window) {
        var se = {
            get passive() {
                ae = !0;
            },
        };
        window.addEventListener("testPassive", null, se),
            window.removeEventListener("testPassive", null, se);
    }
    var ce =
            "undefined" != typeof window &&
            window.navigator &&
            window.navigator.platform &&
            (/iP(ad|hone|od)/.test(window.navigator.platform) ||
                ("MacIntel" === window.navigator.platform &&
                    window.navigator.maxTouchPoints > 1)),
        de = [],
        ue = !1,
        le = -1,
        pe = void 0,
        we = void 0,
        fe = function (e) {
            return de.some(function (t) {
                return !(
                    !t.options.allowTouchMove || !t.options.allowTouchMove(e)
                );
            });
        },
        me = function (e) {
            var t = e || window.event;
            return (
                !!fe(t.target) ||
                t.touches.length > 1 ||
                (t.preventDefault && t.preventDefault(), !1)
            );
        },
        he = function () {
            void 0 !== we &&
                ((document.body.style.paddingRight = we), (we = void 0)),
                void 0 !== pe &&
                    ((document.body.style.overflow = pe), (pe = void 0));
        },
        be = function (e, t) {
            if (e) {
                if (
                    !de.some(function (t) {
                        return t.targetElement === e;
                    })
                ) {
                    var n = { targetElement: e, options: t || {} };
                    (de = [].concat(
                        (function (e) {
                            if (Array.isArray(e)) {
                                for (
                                    var t = 0, n = Array(e.length);
                                    t < e.length;
                                    t++
                                )
                                    n[t] = e[t];
                                return n;
                            }
                            return Array.from(e);
                        })(de),
                        [n]
                    )),
                        ce
                            ? ((e.ontouchstart = function (e) {
                                  1 === e.targetTouches.length &&
                                      (le = e.targetTouches[0].clientY);
                              }),
                              (e.ontouchmove = function (t) {
                                  1 === t.targetTouches.length &&
                                      (function (e, t) {
                                          var n =
                                              e.targetTouches[0].clientY - le;
                                          !fe(e.target) &&
                                              ((t &&
                                                  0 === t.scrollTop &&
                                                  n > 0) ||
                                              ((function (e) {
                                                  return (
                                                      !!e &&
                                                      e.scrollHeight -
                                                          e.scrollTop <=
                                                          e.clientHeight
                                                  );
                                              })(t) &&
                                                  n < 0)
                                                  ? me(e)
                                                  : e.stopPropagation());
                                      })(t, e);
                              }),
                              ue ||
                                  (document.addEventListener(
                                      "touchmove",
                                      me,
                                      ae ? { passive: !1 } : void 0
                                  ),
                                  (ue = !0)))
                            : (function (e) {
                                  if (void 0 === we) {
                                      var t =
                                              !!e &&
                                              !0 === e.reserveScrollBarGap,
                                          n =
                                              window.innerWidth -
                                              document.documentElement
                                                  .clientWidth;
                                      t &&
                                          n > 0 &&
                                          ((we =
                                              document.body.style.paddingRight),
                                          (document.body.style.paddingRight =
                                              n + "px"));
                                  }
                                  void 0 === pe &&
                                      ((pe = document.body.style.overflow),
                                      (document.body.style.overflow =
                                          ""));
                              })(t);
                }
            } else
                console.error(
                    "disableBodyScroll unsuccessful - targetElement must be provided when calling disableBodyScroll on IOS devices."
                );
        };
    const ge = () => {
            const e =
                (window.MC &&
                    window.MC.Loader &&
                    window.MC.Loader.resize &&
                    window.MC.Loader.resize.selector &&
                    document.querySelector(window.MC.Loader.resize.selector)) ||
                document.body;
            let t = e.offsetHeight;
            window.MC &&
                window.MC.Loader &&
                window.MC.Loader.resize &&
                window.MC.Loader.resize.factor &&
                (t += window.MC.Loader.resize.factor);
            const n = getComputedStyle(e);
            return (
                (t +=
                    parseInt(n.marginTop) +
                    parseInt(n.marginBottom) +
                    parseInt(n.paddingTop) +
                    parseInt(n.paddingBottom)),
                t
            );
        },
        ve = () => {
            oe("usrc:data-loaded", {
                id: window.MC.USrc.Parent.cpmId,
                height: ge(),
            });
        },
        ye = (e) => {
            const t = document.querySelector(
                `div[data-mc-lightbox="${e.cpmId}"] iframe`
            );
            var n;
            t
                ? ((n = t.parentElement)
                      ? ((de = de.filter(function (e) {
                            return e.targetElement !== n;
                        })),
                        ce
                            ? ((n.ontouchstart = null),
                              (n.ontouchmove = null),
                              ue &&
                                  0 === de.length &&
                                  (document.removeEventListener(
                                      "touchmove",
                                      me,
                                      ae ? { passive: !1 } : void 0
                                  ),
                                  (ue = !1)))
                            : de.length || he())
                      : console.error(
                            "enableBodyScroll unsuccessful - targetElement must be provided when calling enableBodyScroll on IOS devices."
                        ),
                  (t.parentNode.style.opacity = "0"),
                  (t.parentNode.style.display = "none"))
                : (ce
                      ? (de.forEach(function (e) {
                            (e.targetElement.ontouchstart = null),
                                (e.targetElement.ontouchmove = null);
                        }),
                        ue &&
                            (document.removeEventListener(
                                "touchmove",
                                me,
                                ae ? { passive: !1 } : void 0
                            ),
                            (ue = !1)),
                        (le = -1))
                      : he(),
                  (de = []));
        },
        Ce = (e) =>
            e.includes("widgets.woxo.tech/") ||
            e.startsWith("http://127.0.0.1");
    var Me = o(function (e, t) {
        var o, r;
        (o = ("object" == typeof window && window) || n),
            (r = {}),
            (o.PubSub = r),
            (function (e) {
                var t = {},
                    n = -1,
                    o = "*";
                function r(e) {
                    var t;
                    for (t in e)
                        if (Object.prototype.hasOwnProperty.call(e, t))
                            return !0;
                    return !1;
                }
                function i(e) {
                    return function () {
                        throw e;
                    };
                }
                function a(e, t, n) {
                    try {
                        e(t, n);
                    } catch (e) {
                        setTimeout(i(e), 0);
                    }
                }
                function s(e, t, n) {
                    e(t, n);
                }
                function c(e, n, o, r) {
                    var i,
                        c = t[n],
                        d = r ? s : a;
                    if (Object.prototype.hasOwnProperty.call(t, n))
                        for (i in c)
                            Object.prototype.hasOwnProperty.call(c, i) &&
                                d(c[i], e, o);
                }
                function d(e, t, n) {
                    return function () {
                        var r = String(e),
                            i = r.lastIndexOf(".");
                        for (c(e, e, t, n); -1 !== i; )
                            (i = (r = r.substr(0, i)).lastIndexOf(".")),
                                c(e, r, t, n);
                        c(e, o, t, n);
                    };
                }
                function u(e) {
                    var n = String(e);
                    return Boolean(
                        Object.prototype.hasOwnProperty.call(t, n) && r(t[n])
                    );
                }
                function l(e) {
                    for (
                        var t = String(e),
                            n = u(t) || u(o),
                            r = t.lastIndexOf(".");
                        !n && -1 !== r;

                    )
                        (r = (t = t.substr(0, r)).lastIndexOf(".")), (n = u(t));
                    return n;
                }
                function p(e, t, n, o) {
                    var r = d(
                        (e = "symbol" == typeof e ? e.toString() : e),
                        t,
                        o
                    );
                    return !!l(e) && (!0 === n ? r() : setTimeout(r, 0), !0);
                }
                (e.publish = function (t, n) {
                    return p(t, n, !1, e.immediateExceptions);
                }),
                    (e.publishSync = function (t, n) {
                        return p(t, n, !0, e.immediateExceptions);
                    }),
                    (e.subscribe = function (e, o) {
                        if ("function" != typeof o) return !1;
                        (e = "symbol" == typeof e ? e.toString() : e),
                            Object.prototype.hasOwnProperty.call(t, e) ||
                                (t[e] = {});
                        var r = "uid_" + String(++n);
                        return (t[e][r] = o), r;
                    }),
                    (e.subscribeAll = function (t) {
                        return e.subscribe(o, t);
                    }),
                    (e.subscribeOnce = function (t, n) {
                        var o = e.subscribe(t, function () {
                            e.unsubscribe(o), n.apply(this, arguments);
                        });
                        return e;
                    }),
                    (e.clearAllSubscriptions = function () {
                        t = {};
                    }),
                    (e.clearSubscriptions = function (e) {
                        var n;
                        for (n in t)
                            Object.prototype.hasOwnProperty.call(t, n) &&
                                0 === n.indexOf(e) &&
                                delete t[n];
                    }),
                    (e.countSubscriptions = function (e) {
                        var n,
                            o = 0;
                        for (n in t)
                            Object.prototype.hasOwnProperty.call(t, n) &&
                                0 === n.indexOf(e) &&
                                o++;
                        return o;
                    }),
                    (e.getSubscriptions = function (e) {
                        var n,
                            o = [];
                        for (n in t)
                            Object.prototype.hasOwnProperty.call(t, n) &&
                                0 === n.indexOf(e) &&
                                o.push(n);
                        return o;
                    }),
                    (e.unsubscribe = function (n) {
                        var o,
                            r,
                            i,
                            a = function (e) {
                                var n;
                                for (n in t)
                                    if (
                                        Object.prototype.hasOwnProperty.call(
                                            t,
                                            n
                                        ) &&
                                        0 === n.indexOf(e)
                                    )
                                        return !0;
                                return !1;
                            },
                            s =
                                "string" == typeof n &&
                                (Object.prototype.hasOwnProperty.call(t, n) ||
                                    a(n)),
                            c = !s && "string" == typeof n,
                            d = "function" == typeof n,
                            u = !1;
                        if (!s) {
                            for (o in t)
                                if (
                                    Object.prototype.hasOwnProperty.call(t, o)
                                ) {
                                    if (((r = t[o]), c && r[n])) {
                                        delete r[n], (u = n);
                                        break;
                                    }
                                    if (d)
                                        for (i in r)
                                            Object.prototype.hasOwnProperty.call(
                                                r,
                                                i
                                            ) &&
                                                r[i] === n &&
                                                (delete r[i], (u = !0));
                                }
                            return u;
                        }
                        e.clearSubscriptions(n);
                    });
            })(r),
            void 0 !== e && e.exports && (t = e.exports = r),
            (t.PubSub = r),
            (e.exports = t = r);
    });
    (window.MC = window.MC || {}),
        (window.MC.Loader = window.MC.Loader || {}),
        (window.MC.Pages = window.MC.Pages || {}),
        (window.MC.Pages.Components = window.MC.Pages.Components || []),
        (window.MC.Pages.LoadedComponents =
            window.MC.Pages.LoadedComponents || []),
        (window.MC.Pages.Definitions = window.MC.Pages.Definitions || {}),
        (window.MC.Pages.__fcRuntime = window.MC.Pages.__fcRuntime || {}),
        (window.MC.Pages.__fcRuntime.bundles =
            window.MC.Pages.__fcRuntime.bundles || {}),
        (window.MC.Pages.__fcRuntime.styles =
            window.MC.Pages.__fcRuntime.styles || {}),
        (window.MC.USrc = window.MC.USrc || {}),
        (window.MC.USrc.Parent = window.MC.USrc.Parent || {}),
        (window.MC.Vendors = window.MC.Vendors || {}),
        (window.MC.Vendors.PubSub = Me),
        (window.EM = window.EM || {}),
        (window.EM.___fcRuntime = window.EM.___fcRuntime || {}),
        (window.EM.___fcRuntime.vendors = window.EM.___fcRuntime.vendors || {}),
        (window.EM.utils = window.EM.utils || {}),
        (window.EM.utils.PubSub = Me);
    const _e = 5e4,
        xe = 5e3;
    (({ appendLightbox: e = () => {} }) => {
        window.addEventListener("message", (t) => {
            const n = t.data;
            switch (n.event) {
                case "resize":
                    ((e) => {
                        const t = document.querySelector(
                            `div[data-mc-cmp-id="${e.id}"]`
                        );
                        if (
                            t &&
                            e.height &&
                            !t.getAttribute("data-mc-manual-resizing")
                        ) {
                            let n = e.height;
                            window.MC.Loader &&
                                window.MC.Loader.resize &&
                                Number(window.MC.Loader.resize.scale) &&
                                (n *= Number(window.MC.Loader.resize.scale)),
                                (t.style.height = n + "px"),
                                "external-iframe" ===
                                    t.getAttribute("data-mc-type") &&
                                    t.parentNode &&
                                    "ARTICLE" === t.parentNode.tagName &&
                                    (t.parentNode.style.height = n + "px");
                        }
                    })(n.payload);
                    break;
                case "open-lightbox-child":
                    (o = n.payload),
                        window.MC.USrc.Lightbox ||
                            (window.MC.USrc.Lightbox = {}),
                        window.MC.USrc.Lightbox.open ||
                            re("open-lightbox", window, o),
                        (window.MC.USrc.Lightbox.open = !0);
                    break;
                case "open-lightbox-parent":
                    ((e) => {
                        const t = document.querySelector(
                            `div[data-mc-lightbox="${e.cpmId}"] iframe`
                        );
                        t &&
                            (be(t.parentElement),
                            ne(
                                t.contentWindow,
                                "open-lightbox-child",
                                e.params
                            ),
                            (t.parentNode.style.display = "unset"),
                            setTimeout(() => {
                                t.parentNode.style.opacity = 1;
                            }, 500));
                    })(n.payload);
                    break;
                case "close-lightbox-parent":
                    ye(n.payload);
                    break;
                case "append-lightbox":
                    e(n.payload);
            }
            var o;
        }),
            window.addEventListener("data-loaded", ve),
            window.addEventListener("open-lightbox", (e) => {
                oe("open-lightbox-parent", {
                    params: e.detail,
                    cpmId: window.MC.USrc.Parent.cpmId,
                });
            }),
            window.addEventListener("close-lightbox", (e, t) => {
                window.MC.USrc.Lightbox || (window.MC.USrc.Lightbox = {}),
                    (window.MC.USrc.Lightbox.open = !1),
                    oe("close-lightbox-parent", {
                        cpmId: window.MC.USrc.Parent.cpmId,
                    });
            });
        const t = document.querySelector("div[data-page-container]");
        if (t) {
            new te((e) => {
                for (let t of e) {
                    t.contentRect.height > 0 &&
                        oe("resize", {
                            id: window.MC.USrc.Parent.cpmId,
                            height: ge(),
                        });
                }
            }).observe(t);
        }
    })({
        appendLightbox: (e) => {
            const t = document.createElement("div");
            t.setAttribute("data-mc-lightbox", e.cmpId),
                (t.innerHTML = `<iframe src="${e.lightboxSrc}#${e.cmpId}" style="height:100%;width:100%;border:none:"></iframe>`),
                t.setAttribute(
                    "style",
                    "position:fixed;top:0;left:0;height:100vh;width:100vw;display:none;opacity:0;transition:0.5s;z-index:22222222222"
                ),
                document.body.appendChild(t);
        },
    }),
        ((e) => {
            !e ||
                (window.MC && window.MC.Helpers && window.MC.Helpers.collect) ||
                ((window.MC = window.MC || {}),
                (window.MC.Helpers = window.MC.Helpers || {}),
                (window.MC.Helpers.collect = e)),
                window.EM &&
                    window.EM.utils &&
                    window.EM.utils.PubSub &&
                    "function" == typeof window.EM.utils.PubSub.subscribe &&
                    (window.EM.utils.PubSub.subscribe("em", x),
                    window.EM.utils.PubSub.subscribe("em", (e, t) =>
                        M(e, t, "em")
                    )),
                window.MC &&
                    window.MC.Vendors &&
                    window.MC.Vendors.PubSub &&
                    "function" == typeof window.MC.Vendors.PubSub.subscribe &&
                    (window.MC.Vendors.PubSub.subscribe("tracking.mc", P),
                    window.MC.Vendors.PubSub.subscribe("tracking.mc", (e, t) =>
                        M(e, t, "mc")
                    ),
                    window.MC.Vendors.PubSub.subscribe("tracking.mc", E));
        })(ie),
        (() => {
            const n = {},
                o = (e, t) => {
                    const n = document.querySelector(
                        "[data-mc-cmp-id=" + e + "]"
                    );
                    return n && t && n.getAttribute("data-mc-loaded")
                        ? null
                        : n || null;
                },
                r = ({ url: e, style: t, onLoad: o, title: r, cmpId: i }) => {
                    const a = document.createElement("iframe");
                    a.setAttribute("src", `${e}#${i}`),
                        (a.style = t),
                        a.setAttribute("title", r),
                        a.setAttribute("data-hj-allow-iframe", !0);
                    return (
                        window.addEventListener("message", (e) => {
                            const { data: t } = e;
                            "usrc:data-loaded" === t.event &&
                                t.payload &&
                                t.payload.id === i &&
                                o((t.payload && t.payload.height) || "auto");
                        }),
                        (n[a.cmpId] = new Date().getTime()),
                        setTimeout(() => {
                            if (
                                document.querySelector(`[data-cmp-id="${i}"]`)
                            ) {
                                const e = ((e) => {
                                    const t = document.querySelector(
                                        "[data-mc-cmp-id=" + e + "]"
                                    );
                                    return t &&
                                        t.parentNode &&
                                        t.parentNode.parentNode
                                        ? t.parentNode.parentNode
                                        : null;
                                })(i);
                                e && e.parentNode.removeChild(e);
                            }
                        }, _e),
                        a
                    );
                },
                i = (e) => {
                    const t = o(e.cmpId);
                    if (t) {
                        e.settings &&
                            e.settings.initialHeight &&
                            (t.style.height = e.settings.initialHeight + "px"),
                            (t.style.position = "relative"),
                            (t.style.overflow = "hidden"),
                            (t.style["flex-basis"] = "100%"),
                            (t.style.width = "100%");
                        let n = (e.settings && e.settings.src) || null;
                        n &&
                            (window.location.search &&
                                (n += "" + window.location.search),
                            window.location.hash &&
                                (n += window.location.hash)),
                            Ce(n) &&
                                t.setAttribute("data-mc-manual-resizing", !0),
                            e.settings &&
                                !1 !== e.settings.loaderCls &&
                                t.appendChild(
                                    (({ cmpId: e, className: t }) => {
                                        if (
                                            !document.querySelector(
                                                "[woxo-loader-style]"
                                            )
                                        ) {
                                            const e =
                                                document.createElement("style");
                                            (e.innerText =
                                                "@keyframes mc-iframe-loader{0%{transform:scale(0,0);opacity:1;}100%{transform:scale(2,2);opacity:0;}},"),
                                                e.setAttribute(
                                                    "woxo-loader-style",
                                                    !0
                                                ),
                                                document.head.appendChild(e);
                                        }
                                        const n = document.createElement("div");
                                        return (
                                            (n.innerHTML = `<div data-cmp-id="${e}"style="position:absolute;height:100%;width:100%;z-index:11;top:0;left:0;">\n  <div ${
                                                !0 !== t ? "class=" + t : ""
                                            } style="height:100%;display:flex;align-items:center;justify-content:center;flex:1 1 0%;">\n    <div style="width:80px;height:80px;display:inline-block;position:relative;">\n    <div style="border:4px solid #4c4a4a;position:absolute;animation:mc-iframe-loader 1s cubic-bezier(0, 0.2, 0.8, 1) infinite;border-radius:50%;height:36px;width:36px;top:25%;left:25%"></div>\n    <div style="border:4px solid #4c4a4a;position:absolute;animation:mc-iframe-loader 1s cubic-bezier(0, 0.2, 0.8, 1) infinite;border-radius:50%;height:36px;width:36px;top:25%;left:25%;animation-delay:-0.5s"></div>\n    </div>\n  </div>\n</div>`),
                                            n
                                        );
                                    })({
                                        cmpId: e.cmpId,
                                        className: e.settings.loaderCls,
                                    })
                                ),
                            t.appendChild(
                                r({
                                    url: n,
                                    style: `width:100%;height:100%;border:none;overflow:hidden;opacity:${
                                        Ce(n) ? 0 : null
                                    };transition:${Ce(n) ? "0.5s" : null};`,
                                    title: e.title,
                                    onLoad: (n) => {
                                        const o = t.querySelector("iframe");
                                        o && (o.style.opacity = 100),
                                            n && (t.style.height = n + "px"),
                                            t.removeAttribute(
                                                "data-mc-manual-resizing"
                                            );
                                        const r = t.querySelector(
                                            `[data-cmp-id="${e.cmpId}"]`
                                        );
                                        r && r.parentNode.removeChild(r);
                                    },
                                    cmpId: e.cmpId,
                                })
                            ),
                            t.setAttribute("data-mc-loaded", !0),
                            re("mc-rendered-component");
                    }
                },
                a = () => {
                    if (window.MC.Pages.Components.length) {
                        if (o(window.MC.Pages.Components[0].cmpId, !0)) {
                            const n = window.MC.Pages.Components.shift();
                            window.MC.Pages.LoadedComponents.push(n),
                                ((e) => {
                                    "iframe" === e.type && i(e);
                                })(
                                    (function (n) {
                                        for (
                                            var o = 1;
                                            o < arguments.length;
                                            o++
                                        ) {
                                            var r =
                                                null != arguments[o]
                                                    ? arguments[o]
                                                    : {};
                                            o % 2
                                                ? t(Object(r), !0).forEach(
                                                      function (t) {
                                                          e(n, t, r[t]);
                                                      }
                                                  )
                                                : Object.getOwnPropertyDescriptors
                                                ? Object.defineProperties(
                                                      n,
                                                      Object.getOwnPropertyDescriptors(
                                                          r
                                                      )
                                                  )
                                                : t(Object(r)).forEach(
                                                      function (e) {
                                                          Object.defineProperty(
                                                              n,
                                                              e,
                                                              Object.getOwnPropertyDescriptor(
                                                                  r,
                                                                  e
                                                              )
                                                          );
                                                      }
                                                  );
                                        }
                                        return n;
                                    })({}, n)
                                );
                        }
                    } else
                        window.removeEventListener("scroll", a),
                            window.removeEventListener(
                                "mc-rendered-component",
                                a
                            );
                };
            (window.MC.Loader.init = () => {
                (() => {
                    const e = document.querySelector("[data-usrc]"),
                        t = e.getAttribute("src");
                    let n = e.getAttribute("data-usrc");
                    n || (n = t.split("#")[1]);
                    (window.MC.Pages.Team && window.MC.Pages.Team._id) ||
                        ((window.MC.Pages.Team = window.MC.Pages.Team || {}),
                        (window.MC.Pages.Team._id = n));
                })(),
                    setTimeout(() => {
                        ie({
                            availableComponents: [
                                {
                                    cmpId: "mission-control--84724674",
                                    moduleId: "runtime",
                                    name: "usrc",
                                    version: "last-stable-version",
                                },
                            ],
                            pageType:
                                (window.MC.Pages.Properties &&
                                    window.MC.Pages.Properties.type) ||
                                "external",
                            componentTrack: "mission-control--84724674",
                            metric: "print",
                            pageContext: { url: window.location.href },
                            team: window.MC.Pages.Team._id,
                        });
                    }, xe),
                    window.MC &&
                        window.MC.Pages &&
                        Array.isArray(window.MC.Pages.Components) &&
                        (document
                            .querySelectorAll("div[data-mc-src]")
                            .forEach((e) => {
                                const t = e
                                        .getAttribute("data-mc-src")
                                        .split("#"),
                                    n = t[1] || "woxo";
                                let o = t[0];
                                o.match(
                                    /^[0-9a-f]{8}-[0-9a-f]{4}-[0-5][0-9a-f]{3}-[089ab][0-9a-f]{3}-[0-9a-f]{12}$/i
                                ) && (o = "https://widgets.woxo.tech//" + o);
                                const r = {
                                    type: "iframe",
                                    cmpId:
                                        "mission-control-component-" + m.v4(),
                                    settings: {
                                        loaderCls:
                                            "false" !==
                                                e.getAttribute(
                                                    "data-mc-loader"
                                                ) &&
                                            (e.getAttribute("data-mc-loader") ||
                                                !0),
                                        initialHeight:
                                            e.getAttribute("data-mc-height") ||
                                            200,
                                        src: o,
                                    },
                                };
                                if (
                                    ((r.element = e),
                                    (r.title = `${n
                                        .charAt(0)
                                        .toUpperCase()}${n.substring(
                                        1
                                    )} widgets for website`),
                                    e.hasAttributes())
                                )
                                    for (var i in e.attributes)
                                        e.attributes[i] &&
                                            e.attributes[i].name &&
                                            e.attributes[i].name.startsWith(
                                                "data-mc"
                                            ) &&
                                            e.removeAttribute(
                                                e.attributes[i].name
                                            );
                                window.MC.Pages.Components.push(r);
                            }),
                        window.MC.Pages.Components.forEach((e) => {
                            ((e) => {
                                if (
                                    !document.querySelector(
                                        "div[data-mc-cmp-id='" + e.cmpId + "']"
                                    )
                                ) {
                                    let t =
                                        e.element ||
                                        document.querySelector(
                                            "[data-page-container]"
                                        );
                                    t || (t = document.body);
                                    const n = document.createElement("article"),
                                        o = document.createElement("div");
                                    o.setAttribute("data-mc-cmp-id", e.cmpId),
                                        e.name &&
                                            o.setAttribute(
                                                "data-mc-cmp",
                                                e.name
                                            ),
                                        e.version &&
                                            o.setAttribute(
                                                "data-mc-version",
                                                e.version
                                            ),
                                        n.appendChild(o),
                                        t.appendChild(n);
                                }
                            })(e);
                        }),
                        window.addEventListener("scroll", a, !1),
                        window.addEventListener("mc-rendered-component", a, !1),
                        re("mc-rendered-component"));
            }),
                window.addEventListener("load", () => {
                    const e = document.querySelector("div[data-mc-src]");
                    if (
                        "lazy" === e.getAttribute("loading") &&
                        null != window.IntersectionObserver
                    ) {
                        new IntersectionObserver((e, t) => {
                            e.forEach((e) => {
                                e.isIntersecting &&
                                    (t.disconnect(), window.MC.Loader.init());
                            });
                        }).observe(e);
                    } else window.MC.Loader.init();
                });
        })();
})();
