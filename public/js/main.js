// Generated by CoffeeScript 1.6.2
/*!
jQuery Waypoints - v2.0.5
Copyright (c) 2011-2014 Caleb Troughton
Licensed under the MIT license.
https://github.com/imakewebthings/jquery-waypoints/blob/master/licenses.txt
*/

(function () {
    var t =
            [].indexOf ||
            function (t) {
                for (var e = 0, n = this.length; e < n; e++) {
                    if (e in this && this[e] === t) return e;
                }
                return -1;
            },
        e = [].slice;
    (function (t, e) {
        if (typeof define === "function" && define.amd) {
            return define("waypoints", ["jquery"], function (n) {
                return e(n, t);
            });
        } else {
            return e(t.jQuery, t);
        }
    })(window, function (n, r) {
        var i, o, l, s, f, u, c, a, h, d, p, y, v, w, g, m;
        i = n(r);
        a = t.call(r, "ontouchstart") >= 0;
        s = { horizontal: {}, vertical: {} };
        f = 1;
        c = {};
        u = "waypoints-context-id";
        p = "resize.waypoints";
        y = "scroll.waypoints";
        v = 1;
        w = "waypoints-waypoint-ids";
        g = "waypoint";
        m = "waypoints";
        o = (function () {
            function t(t) {
                var e = this;
                this.$element = t;
                this.element = t[0];
                this.didResize = false;
                this.didScroll = false;
                this.id = "context" + f++;
                this.oldScroll = { x: t.scrollLeft(), y: t.scrollTop() };
                this.waypoints = { horizontal: {}, vertical: {} };
                this.element[u] = this.id;
                c[this.id] = this;
                t.bind(y, function () {
                    var t;
                    if (!(e.didScroll || a)) {
                        e.didScroll = true;
                        t = function () {
                            e.doScroll();
                            return (e.didScroll = false);
                        };
                        return r.setTimeout(t, n[m].settings.scrollThrottle);
                    }
                });
                t.bind(p, function () {
                    var t;
                    if (!e.didResize) {
                        e.didResize = true;
                        t = function () {
                            n[m]("refresh");
                            return (e.didResize = false);
                        };
                        return r.setTimeout(t, n[m].settings.resizeThrottle);
                    }
                });
            }
            t.prototype.doScroll = function () {
                var t,
                    e = this;
                t = {
                    horizontal: {
                        newScroll: this.$element.scrollLeft(),
                        oldScroll: this.oldScroll.x,
                        forward: "right",
                        backward: "left",
                    },
                    vertical: {
                        newScroll: this.$element.scrollTop(),
                        oldScroll: this.oldScroll.y,
                        forward: "down",
                        backward: "up",
                    },
                };
                if (a && (!t.vertical.oldScroll || !t.vertical.newScroll)) {
                    n[m]("refresh");
                }
                n.each(t, function (t, r) {
                    var i, o, l;
                    l = [];
                    o = r.newScroll > r.oldScroll;
                    i = o ? r.forward : r.backward;
                    n.each(e.waypoints[t], function (t, e) {
                        var n, i;
                        if (r.oldScroll < (n = e.offset) && n <= r.newScroll) {
                            return l.push(e);
                        } else if (
                            r.newScroll < (i = e.offset) &&
                            i <= r.oldScroll
                        ) {
                            return l.push(e);
                        }
                    });
                    l.sort(function (t, e) {
                        return t.offset - e.offset;
                    });
                    if (!o) {
                        l.reverse();
                    }
                    return n.each(l, function (t, e) {
                        if (e.options.continuous || t === l.length - 1) {
                            return e.trigger([i]);
                        }
                    });
                });
                return (this.oldScroll = {
                    x: t.horizontal.newScroll,
                    y: t.vertical.newScroll,
                });
            };
            t.prototype.refresh = function () {
                var t,
                    e,
                    r,
                    i = this;
                r = n.isWindow(this.element);
                e = this.$element.offset();
                this.doScroll();
                t = {
                    horizontal: {
                        contextOffset: r ? 0 : e.left,
                        contextScroll: r ? 0 : this.oldScroll.x,
                        contextDimension: this.$element.width(),
                        oldScroll: this.oldScroll.x,
                        forward: "right",
                        backward: "left",
                        offsetProp: "left",
                    },
                    vertical: {
                        contextOffset: r ? 0 : e.top,
                        contextScroll: r ? 0 : this.oldScroll.y,
                        contextDimension: r
                            ? n[m]("viewportHeight")
                            : this.$element.height(),
                        oldScroll: this.oldScroll.y,
                        forward: "down",
                        backward: "up",
                        offsetProp: "top",
                    },
                };
                return n.each(t, function (t, e) {
                    return n.each(i.waypoints[t], function (t, r) {
                        var i, o, l, s, f;
                        i = r.options.offset;
                        l = r.offset;
                        o = n.isWindow(r.element)
                            ? 0
                            : r.$element.offset()[e.offsetProp];
                        if (n.isFunction(i)) {
                            i = i.apply(r.element);
                        } else if (typeof i === "string") {
                            i = parseFloat(i);
                            if (r.options.offset.indexOf("%") > -1) {
                                i = Math.ceil((e.contextDimension * i) / 100);
                            }
                        }
                        r.offset = o - e.contextOffset + e.contextScroll - i;
                        if (
                            (r.options.onlyOnScroll && l != null) ||
                            !r.enabled
                        ) {
                            return;
                        }
                        if (
                            l !== null &&
                            l < (s = e.oldScroll) &&
                            s <= r.offset
                        ) {
                            return r.trigger([e.backward]);
                        } else if (
                            l !== null &&
                            l > (f = e.oldScroll) &&
                            f >= r.offset
                        ) {
                            return r.trigger([e.forward]);
                        } else if (l === null && e.oldScroll >= r.offset) {
                            return r.trigger([e.forward]);
                        }
                    });
                });
            };
            t.prototype.checkEmpty = function () {
                if (
                    n.isEmptyObject(this.waypoints.horizontal) &&
                    n.isEmptyObject(this.waypoints.vertical)
                ) {
                    this.$element.unbind([p, y].join(" "));
                    return delete c[this.id];
                }
            };
            return t;
        })();
        l = (function () {
            function t(t, e, r) {
                var i, o;
                if (r.offset === "bottom-in-view") {
                    r.offset = function () {
                        var t;
                        t = n[m]("viewportHeight");
                        if (!n.isWindow(e.element)) {
                            t = e.$element.height();
                        }
                        return t - n(this).outerHeight();
                    };
                }
                this.$element = t;
                this.element = t[0];
                this.axis = r.horizontal ? "horizontal" : "vertical";
                this.callback = r.handler;
                this.context = e;
                this.enabled = r.enabled;
                this.id = "waypoints" + v++;
                this.offset = null;
                this.options = r;
                e.waypoints[this.axis][this.id] = this;
                s[this.axis][this.id] = this;
                i = (o = this.element[w]) != null ? o : [];
                i.push(this.id);
                this.element[w] = i;
            }
            t.prototype.trigger = function (t) {
                if (!this.enabled) {
                    return;
                }
                if (this.callback != null) {
                    this.callback.apply(this.element, t);
                }
                if (this.options.triggerOnce) {
                    return this.destroy();
                }
            };
            t.prototype.disable = function () {
                return (this.enabled = false);
            };
            t.prototype.enable = function () {
                this.context.refresh();
                return (this.enabled = true);
            };
            t.prototype.destroy = function () {
                delete s[this.axis][this.id];
                delete this.context.waypoints[this.axis][this.id];
                return this.context.checkEmpty();
            };
            t.getWaypointsByElement = function (t) {
                var e, r;
                r = t[w];
                if (!r) {
                    return [];
                }
                e = n.extend({}, s.horizontal, s.vertical);
                return n.map(r, function (t) {
                    return e[t];
                });
            };
            return t;
        })();
        d = {
            init: function (t, e) {
                var r;
                e = n.extend({}, n.fn[g].defaults, e);
                if ((r = e.handler) == null) {
                    e.handler = t;
                }
                this.each(function () {
                    var t, r, i, s;
                    t = n(this);
                    i = (s = e.context) != null ? s : n.fn[g].defaults.context;
                    if (!n.isWindow(i)) {
                        i = t.closest(i);
                    }
                    i = n(i);
                    r = c[i[0][u]];
                    if (!r) {
                        r = new o(i);
                    }
                    return new l(t, r, e);
                });
                n[m]("refresh");
                return this;
            },
            disable: function () {
                return d._invoke.call(this, "disable");
            },
            enable: function () {
                return d._invoke.call(this, "enable");
            },
            destroy: function () {
                return d._invoke.call(this, "destroy");
            },
            prev: function (t, e) {
                return d._traverse.call(this, t, e, function (t, e, n) {
                    if (e > 0) {
                        return t.push(n[e - 1]);
                    }
                });
            },
            next: function (t, e) {
                return d._traverse.call(this, t, e, function (t, e, n) {
                    if (e < n.length - 1) {
                        return t.push(n[e + 1]);
                    }
                });
            },
            _traverse: function (t, e, i) {
                var o, l;
                if (t == null) {
                    t = "vertical";
                }
                if (e == null) {
                    e = r;
                }
                l = h.aggregate(e);
                o = [];
                this.each(function () {
                    var e;
                    e = n.inArray(this, l[t]);
                    return i(o, e, l[t]);
                });
                return this.pushStack(o);
            },
            _invoke: function (t) {
                this.each(function () {
                    var e;
                    e = l.getWaypointsByElement(this);
                    return n.each(e, function (e, n) {
                        n[t]();
                        return true;
                    });
                });
                return this;
            },
        };
        n.fn[g] = function () {
            var t, r;
            (r = arguments[0]),
                (t = 2 <= arguments.length ? e.call(arguments, 1) : []);
            if (d[r]) {
                return d[r].apply(this, t);
            } else if (n.isFunction(r)) {
                return d.init.apply(this, arguments);
            } else if (n.isPlainObject(r)) {
                return d.init.apply(this, [null, r]);
            } else if (!r) {
                return n.error(
                    "jQuery Waypoints needs a callback function or handler option."
                );
            } else {
                return n.error(
                    "The " + r + " method does not exist in jQuery Waypoints."
                );
            }
        };
        n.fn[g].defaults = {
            context: r,
            continuous: true,
            enabled: true,
            horizontal: false,
            offset: 0,
            triggerOnce: false,
        };
        h = {
            refresh: function () {
                return n.each(c, function (t, e) {
                    return e.refresh();
                });
            },
            viewportHeight: function () {
                var t;
                return (t = r.innerHeight) != null ? t : i.height();
            },
            aggregate: function (t) {
                var e, r, i;
                e = s;
                if (t) {
                    e = (i = c[n(t)[0][u]]) != null ? i.waypoints : void 0;
                }
                if (!e) {
                    return [];
                }
                r = { horizontal: [], vertical: [] };
                n.each(r, function (t, i) {
                    n.each(e[t], function (t, e) {
                        return i.push(e);
                    });
                    i.sort(function (t, e) {
                        return t.offset - e.offset;
                    });
                    r[t] = n.map(i, function (t) {
                        return t.element;
                    });
                    return (r[t] = n.unique(r[t]));
                });
                return r;
            },
            above: function (t) {
                if (t == null) {
                    t = r;
                }
                return h._filter(t, "vertical", function (t, e) {
                    return e.offset <= t.oldScroll.y;
                });
            },
            below: function (t) {
                if (t == null) {
                    t = r;
                }
                return h._filter(t, "vertical", function (t, e) {
                    return e.offset > t.oldScroll.y;
                });
            },
            left: function (t) {
                if (t == null) {
                    t = r;
                }
                return h._filter(t, "horizontal", function (t, e) {
                    return e.offset <= t.oldScroll.x;
                });
            },
            right: function (t) {
                if (t == null) {
                    t = r;
                }
                return h._filter(t, "horizontal", function (t, e) {
                    return e.offset > t.oldScroll.x;
                });
            },
            enable: function () {
                return h._invoke("enable");
            },
            disable: function () {
                return h._invoke("disable");
            },
            destroy: function () {
                return h._invoke("destroy");
            },
            extendFn: function (t, e) {
                return (d[t] = e);
            },
            _invoke: function (t) {
                var e;
                e = n.extend({}, s.vertical, s.horizontal);
                return n.each(e, function (e, n) {
                    n[t]();
                    return true;
                });
            },
            _filter: function (t, e, r) {
                var i, o;
                i = c[n(t)[0][u]];
                if (!i) {
                    return [];
                }
                o = [];
                n.each(i.waypoints[e], function (t, e) {
                    if (r(i, e)) {
                        return o.push(e);
                    }
                });
                o.sort(function (t, e) {
                    return t.offset - e.offset;
                });
                return n.map(o, function (t) {
                    return t.element;
                });
            },
        };
        n[m] = function () {
            var t, n;
            (n = arguments[0]),
                (t = 2 <= arguments.length ? e.call(arguments, 1) : []);
            if (h[n]) {
                return h[n].apply(null, t);
            } else {
                return h.aggregate.call(null, n);
            }
        };
        n[m].settings = { resizeThrottle: 100, scrollThrottle: 30 };
        return i.on("load.waypoints", function () {
            return n[m]("refresh");
        });
    });
}.call(this));
/* Responsive Tools
 * A collection of useful fixes and helpers for responsive projects
 **/
(function ($, window) {
    window.getActiveMQ = function () {
        $('<div id="getActiveMQ-watcher"></div>').appendTo("body").hide();

        var computed = window.getComputedStyle,
            watcher = document.getElementById("getActiveMQ-watcher");
        if ("currentStyle" in watcher) {
            window.getActiveMQ = function () {
                return watcher.currentStyle["fontFamily"].replace(/['"]/g, "");
            };
        } else if (computed) {
            window.getActiveMQ = function () {
                return computed(watcher, null)
                    .getPropertyValue("font-family")
                    .replace(/['"]/g, "");
            };
        } else {
            window.getActiveMQ = function () {
                return "unknown";
            };
        }
        return window.getActiveMQ();
    };

    /*! resize watcher */
    window.watchResize = function (callback) {
        var resizing;
        function done() {
            clearTimeout(resizing);
            resizing = null;
            callback();
        }
        $(window).resize(function () {
            if (resizing) {
                clearTimeout(resizing);
                resizing = null;
            }
            resizing = setTimeout(done, 50);
        });
        // init
        callback();
    };
    window.watchResize(function () {
        var size = window.getActiveMQ().replace("break-", "");
        window.WesternUnion = window.getActiveMQ();
    });

    /*! A fix for theWebKit Resize Bug https://bugs.webkit.org/show_bug.cgi?id=53166. */
    $(window).on("load", function () {
        window.watchResize(function () {
            var $body = $("body");
            $body.css("overflow", "hidden").height();
            $body.css("overflow", "auto");
        });
    });
})(jQuery, window);

// Resize function to trigger different scripts/classes
function westernUnionResize($, window) {
    window.watchResize = function (callback) {
        var resizing;
        function done() {
            clearTimeout(resizing);
            resizing = null;
            callback();
        }
        $(window).resize(function () {
            if (resizing) {
                clearTimeout(resizing);
                resizing = null;
            }
            resizing = setTimeout(done, 50);
        });
        // init
        callback();
    };
    window.watchResize(function () {
        size = window.WesternUnion.replace("break-", "");

        if (size < 3) {
            $("nav").addClass("mobile-menu");
        } else {
            $("nav").removeClass("mobile-menu");
        }

        // This would be a good place to put the Waypoints script
        if (size > 3) {
            $("#places-map").waypoint(
                function () {
                    $(".map-location-marker").addClass("animated bounceInDown");
                },
                { offset: "75%" }
            );
        }
    });
}
westernUnionResize(jQuery, window);

// Map modal
(function ($, window) {
    var $body = $("body");
    $(document).ready(function () {
        mapInfoInit();
    });

    function mapInfoInit() {
        $(".map-location-marker").click(function (e) {
            e.preventDefault();
            $("#map-info, #overlay").remove();
            buildmapInfo(
                $(this).data("mapLink"),
                $(this).data("mapTitle"),
                $(this).data("mapImage"),
                $(this).data("jobListings")
            );
        });
    }

    function buildmapInfo(location, title, src, link) {
        $('<div id="map-info">')
            .addClass(location)
            .fadeIn("slow")
            .appendTo("#places-map .map")
            .html(
                "<h1>" +
                    title +
                    "</h1>" +
                    '<a href="' +
                    link +
                    '">See Jobs</a>' +
                    '<img src="https://jeffbridgforth.com/codepen/' +
                    src +
                    '" alt="" />' +
                    '<span class="close-btn"></span>'
            );
        // Close map info if click anywhere outside of it
        /* http://stackoverflow.com/questions/1403615/use-jquery-to-hide-a-div-when-the-user-clicks-outside-of-it */
        var mapInfo = $("#map-info");
        $(document).mouseup(function (e) {
            if (!mapInfo.is(e.target) && mapInfo.has(e.target).length === 0) {
                mapInfo.fadeOut("slow", function () {
                    $(this).remove();
                });
            }
        });
        $("#map-info .close-btn").click(function (e) {
            $("#map-info").fadeOut("slow", function () {
                $(this).remove();
            });
        });
    }
})(jQuery, window);
