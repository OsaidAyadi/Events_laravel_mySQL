<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="0.5;url={{route('category.index')}}" />

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Event's</title>

    <style>
        body {
            -webkit-font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
            font-family: "proxima-nova-soft", sans-serif;
            -webkit-user-select: none;
            overflow: hidden;
        }
        body .vertical-centered-box {
            position: absolute;
            width: 100%;
            height: 100%;
            text-align: center;
        }
        body .vertical-centered-box:after {
            content: "";
            display: inline-block;
            height: 100%;
            vertical-align: middle;
            margin-right: -0.25em;
        }
        body .vertical-centered-box .content {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            display: inline-block;
            vertical-align: middle;
            text-align: left;
            font-size: 0;
        }
        * {
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            -o-transition: all 0.3s;
            transition: all 0.3s;
        }
        body {
            background: #2c2d44;
        }
        .loader-circle {
            position: absolute;
            left: 50%;
            top: 50%;
            width: 120px;
            height: 120px;
            border-radius: 50%;
            box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.1);
            margin-left: -60px;
            margin-top: -60px;
        }
        .loader-line-mask {
            position: absolute;
            left: 50%;
            top: 50%;
            width: 60px;
            height: 120px;
            margin-left: -60px;
            margin-top: -60px;
            overflow: hidden;
            -webkit-transform-origin: 60px 60px;
            -moz-transform-origin: 60px 60px;
            -ms-transform-origin: 60px 60px;
            -o-transform-origin: 60px 60px;
            transform-origin: 60px 60px;
            -webkit-animation: rotate 1.2s infinite linear;
            -moz-animation: rotate 1.2s infinite linear;
            -o-animation: rotate 1.2s infinite linear;
            animation: rotate 1.2s infinite linear;
        }
        .loader-line-mask .loader-line {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.5);
        }
        #particles-background,
        #particles-foreground {
            left: -51%;
            top: -51%;
            width: 202%;
            height: 202%;
            -webkit-transform: scale3d(0.5, 0.5, 1);
            -moz-transform: scale3d(0.5, 0.5, 1);
            -ms-transform: scale3d(0.5, 0.5, 1);
            -o-transform: scale3d(0.5, 0.5, 1);
            transform: scale3d(0.5, 0.5, 1);
        }
        #particles-background {
            background: #2c2d44;
            background-image: -moz-linear-gradient(45deg, #3f3251 2%, #002025 100%);
            background-image: -webkit-linear-gradient(45deg, #3f3251 2%, #002025 100%);
            background-image: linear-gradient(45deg, #3f3251 2%, #002025 100%);
        }
        lesshat-selector {
            -lh-property: 0; }
        @-webkit-keyframes rotate{ 0% { -webkit-transform: rotate(0deg);} 100% { -webkit-transform: rotate(360deg);}}
        @-moz-keyframes rotate{ 0% { -moz-transform: rotate(0deg);} 100% { -moz-transform: rotate(360deg);}}
        @-o-keyframes rotate{ 0% { -o-transform: rotate(0deg);} 100% { -o-transform: rotate(360deg);}}
        @keyframes rotate{ 0% {-webkit-transform: rotate(0deg);-moz-transform: rotate(0deg);-ms-transform: rotate(0deg);transform: rotate(0deg);} 100% {-webkit-transform: rotate(360deg);-moz-transform: rotate(360deg);-ms-transform: rotate(360deg);transform: rotate(360deg);}}
        [not-existing] {
            zoom: 1;
        }
        lesshat-selector {
            -lh-property: 0; }
        @-webkit-keyframes fade{ 0% { opacity: 1;} 50% { opacity: 0.25;}}
        @-moz-keyframes fade{ 0% { opacity: 1;} 50% { opacity: 0.25;}}
        @-o-keyframes fade{ 0% { opacity: 1;} 50% { opacity: 0.25;}}
        @keyframes fade{ 0% { opacity: 1;} 50% { opacity: 0.25;}}
        [not-existing] {
            zoom: 1;
        }
        lesshat-selector {
            -lh-property: 0; }
        @-webkit-keyframes fade-in{ 0% { opacity: 0;} 100% { opacity: 1;}}
        @-moz-keyframes fade-in{ 0% { opacity: 0;} 100% { opacity: 1;}}
        @-o-keyframes fade-in{ 0% { opacity: 0;} 100% { opacity: 1;}}
        @keyframes fade-in{ 0% { opacity: 0;} 100% { opacity: 1;}}
        [not-existing] {
            zoom: 1;
        }


    </style>



</head>




<body>



<div id="particles-background" class="vertical-centered-box"></div>
<div id="particles-foreground" class="vertical-centered-box"></div>

<div class="vertical-centered-box">
    <div class="content">
        <div class="loader-circle"></div>
        <div class="loader-line-mask">
            <div class="loader-line"></div>
        </div>

        <svg width="36px" height="24px" viewBox="0 0 36 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <path d="M8.98885921,23.8523026 C8.8942483,23.9435442 8.76801031,24 8.62933774,24 L2.03198365,24 C1.73814918,24 1.5,23.7482301 1.5,23.4380086 C1.5,23.2831829 1.55946972,23.1428989 1.65570253,23.0416777 L13.2166154,12.4291351 C13.3325814,12.3262031 13.4061076,12.1719477 13.4061076,11.999444 C13.4061076,11.8363496 13.3401502,11.6897927 13.2352673,11.587431 L1.68841087,0.990000249 C1.57298556,0.88706828 1.5,0.733668282 1.5,0.561734827 C1.5,0.251798399 1.73814918,2.85130108e-05 2.03198365,2.85130108e-05 L8.62933774,2.85130108e-05 C8.76855094,2.85130108e-05 8.89532956,0.0561991444 8.98994048,0.148296169 L21.4358709,11.5757407 C21.548593,11.6783875 21.6196864,11.8297916 21.6196864,11.999444 C21.6196864,12.1693815 21.5483227,12.3219261 21.4350599,12.4251432 L8.98885921,23.8523026 Z M26.5774333,23.8384453 L20.1765996,17.9616286 C20.060093,17.8578413 19.9865669,17.703871 19.9865669,17.5310822 C19.9865669,17.3859509 20.0390083,17.2536506 20.1246988,17.153855 L23.4190508,14.1291948 C23.5163648,14.0165684 23.6569296,13.945571 23.8131728,13.945571 C23.9602252,13.945571 24.0929508,14.0082997 24.1894539,14.1092357 L33.861933,22.9913237 C33.9892522,23.0939706 34.0714286,23.2559245 34.0714286,23.4381226 C34.0714286,23.748059 33.8332794,23.9998289 33.5394449,23.9998289 L26.9504707,23.9998289 C26.8053105,23.9998289 26.6733958,23.9382408 26.5774333,23.8384453 Z M26.5774333,0.161098511 C26.6733958,0.0615881034 26.8053105,0 26.9504707,0 L33.5394449,0 C33.8332794,0 34.0714286,0.251769886 34.0714286,0.561706314 C34.0714286,0.743904453 33.9892522,0.905573224 33.861933,1.00822006 L24.1894539,9.89030807 C24.0929508,9.99152926 23.9602252,10.0542579 23.8131728,10.0542579 C23.6569296,10.0542579 23.5163648,9.98354562 23.4190508,9.87063409 L20.1246988,6.8459739 C20.0390083,6.74617837 19.9865669,6.613878 19.9865669,6.46874677 C19.9865669,6.29624305 20.060093,6.14198767 20.1765996,6.03848544 L26.5774333,0.161098511 Z" fill="#FFFFFF"></path>
        </svg>

    </div>
</div>
<script>

    /*!
 * Particleground
 *
 * @author Jonathan Nicol - @mrjnicol
 * @version 1.1.0
 * @description Creates a canvas based particle system background
 *
 * Inspired by http://requestlab.fr/ and http://disruptivebydesign.com/
 */
    !(function(a, b) {
        "use strict";
        function c(a) {
            a = a || {};
            for (var b = 1; b < arguments.length; b++) {
                var c = arguments[b];
                if (c)
                    for (var d in c)
                        c.hasOwnProperty(d) &&
                        ("object" == typeof c[d] ? deepExtend(a[d], c[d]) : (a[d] = c[d]));
            }
            return a;
        }
        function d(d, g) {
            function h() {
                if (y) {
                    (r = b.createElement("canvas")),
                        (r.className = "pg-canvas"),
                        (r.style.display = "block"),
                        d.insertBefore(r, d.firstChild),
                        (s = r.getContext("2d")),
                        i();
                    for (
                        var c = Math.round(r.width * r.height / g.density), e = 0;
                        c > e;
                        e++
                    ) {
                        var f = new n();
                        f.setStackPos(e), z.push(f);
                    }
                    a.addEventListener(
                        "resize",
                        function() {
                            k();
                        },
                        !1
                    ),
                        b.addEventListener(
                            "mousemove",
                            function(a) {
                                (A = a.pageX), (B = a.pageY);
                            },
                            !1
                        ),
                    D &&
                    !C &&
                    a.addEventListener(
                        "deviceorientation",
                        function() {
                            (F = Math.min(Math.max(-event.beta, -30), 30)),
                                (E = Math.min(Math.max(-event.gamma, -30), 30));
                        },
                        !0
                    ),
                        j(),
                        q("onInit");
                }
            }
            function i() {
                (r.width = d.offsetWidth),
                    (r.height = d.offsetHeight),
                    (s.fillStyle = g.dotColor),
                    (s.strokeStyle = g.lineColor),
                    (s.lineWidth = g.lineWidth);
            }
            function j() {
                if (y) {
                    (u = a.innerWidth),
                        (v = a.innerHeight),
                        s.clearRect(0, 0, r.width, r.height);
                    for (var b = 0; b < z.length; b++) z[b].updatePosition();
                    for (var b = 0; b < z.length; b++) z[b].draw();
                    G || (t = requestAnimationFrame(j));
                }
            }
            function k() {
                i();
                for (
                    var a = d.offsetWidth, b = d.offsetHeight, c = z.length - 1;
                    c >= 0;
                    c--
                )
                    (z[c].position.x > a || z[c].position.y > b) && z.splice(c, 1);
                var e = Math.round(r.width * r.height / g.density);
                if (e > z.length)
                    for (; e > z.length; ) {
                        var f = new n();
                        z.push(f);
                    }
                else e < z.length && z.splice(e);
                for (c = z.length - 1; c >= 0; c--) z[c].setStackPos(c);
            }
            function l() {
                G = !0;
            }
            function m() {
                (G = !1), j();
            }
            function n() {
                switch ((this.stackPos,
                    (this.active = !0),
                    (this.layer = Math.ceil(3 * Math.random())),
                    (this.parallaxOffsetX = 0),
                    (this.parallaxOffsetY = 0),
                    (this.position = {
                        x: Math.ceil(Math.random() * r.width),
                        y: Math.ceil(Math.random() * r.height)
                    }),
                    (this.speed = {}),
                    g.directionX)) {
                    case "left":
                        this.speed.x = +(
                            -g.maxSpeedX +
                            Math.random() * g.maxSpeedX -
                            g.minSpeedX
                        ).toFixed(2);
                        break;
                    case "right":
                        this.speed.x = +(Math.random() * g.maxSpeedX + g.minSpeedX).toFixed(
                            2
                        );
                        break;
                    default:
                        (this.speed.x = +(
                            -g.maxSpeedX / 2 +
                            Math.random() * g.maxSpeedX
                        ).toFixed(2)),
                            (this.speed.x += this.speed.x > 0 ? g.minSpeedX : -g.minSpeedX);
                }
                switch (g.directionY) {
                    case "up":
                        this.speed.y = +(
                            -g.maxSpeedY +
                            Math.random() * g.maxSpeedY -
                            g.minSpeedY
                        ).toFixed(2);
                        break;
                    case "down":
                        this.speed.y = +(Math.random() * g.maxSpeedY + g.minSpeedY).toFixed(
                            2
                        );
                        break;
                    default:
                        (this.speed.y = +(
                            -g.maxSpeedY / 2 +
                            Math.random() * g.maxSpeedY
                        ).toFixed(2)),
                            (this.speed.x += this.speed.y > 0 ? g.minSpeedY : -g.minSpeedY);
                }
            }
            function o(a, b) {
                return b ? void (g[a] = b) : g[a];
            }
            function p() {
                console.log("destroy"),
                    r.parentNode.removeChild(r),
                    q("onDestroy"),
                f && f(d).removeData("plugin_" + e);
            }
            function q(a) {
                void 0 !== g[a] && g[a].call(d);
            }
            var r,
                s,
                t,
                u,
                v,
                w,
                x,
                y = !!b.createElement("canvas").getContext,
                z = [],
                A = 0,
                B = 0,
                C = !navigator.userAgent.match(
                    /(iPhone|iPod|iPad|Android|BlackBerry|BB10|mobi|tablet|opera mini|nexus 7)/i
                ),
                D = !!a.DeviceOrientationEvent,
                E = 0,
                F = 0,
                G = !1;
            return (
                (g = c({}, a[e].defaults, g)),
                    (n.prototype.draw = function() {
                        s.beginPath(),
                            s.arc(
                                this.position.x + this.parallaxOffsetX,
                                this.position.y + this.parallaxOffsetY,
                                g.particleRadius / 2,
                                0,
                                2 * Math.PI,
                                !0
                            ),
                            s.closePath(),
                            s.fill(),
                            s.beginPath();
                        for (var a = z.length - 1; a > this.stackPos; a--) {
                            var b = z[a],
                                c = this.position.x - b.position.x,
                                d = this.position.y - b.position.y,
                                e = Math.sqrt(c * c + d * d).toFixed(2);
                            e < g.proximity &&
                            (s.moveTo(
                                this.position.x + this.parallaxOffsetX,
                                this.position.y + this.parallaxOffsetY
                            ),
                                g.curvedLines
                                    ? s.quadraticCurveTo(
                                    Math.max(b.position.x, b.position.x),
                                    Math.min(b.position.y, b.position.y),
                                    b.position.x + b.parallaxOffsetX,
                                    b.position.y + b.parallaxOffsetY
                                    )
                                    : s.lineTo(
                                    b.position.x + b.parallaxOffsetX,
                                    b.position.y + b.parallaxOffsetY
                                    ));
                        }
                        s.stroke(), s.closePath();
                    }),
                    (n.prototype.updatePosition = function() {
                        if (g.parallax) {
                            if (D && !C) {
                                var a = (u - 0) / 60;
                                w = (E - -30) * a + 0;
                                var b = (v - 0) / 60;
                                x = (F - -30) * b + 0;
                            } else (w = A), (x = B);
                            (this.parallaxTargX =
                                (w - u / 2) / (g.parallaxMultiplier * this.layer)),
                                (this.parallaxOffsetX +=
                                    (this.parallaxTargX - this.parallaxOffsetX) / 10),
                                (this.parallaxTargY =
                                    (x - v / 2) / (g.parallaxMultiplier * this.layer)),
                                (this.parallaxOffsetY +=
                                    (this.parallaxTargY - this.parallaxOffsetY) / 10);
                        }
                        var c = d.offsetWidth,
                            e = d.offsetHeight;
                        switch (g.directionX) {
                            case "left":
                                this.position.x + this.speed.x + this.parallaxOffsetX < 0 &&
                                (this.position.x = c - this.parallaxOffsetX);
                                break;
                            case "right":
                                this.position.x + this.speed.x + this.parallaxOffsetX > c &&
                                (this.position.x = 0 - this.parallaxOffsetX);
                                break;
                            default:
                                (this.position.x + this.speed.x + this.parallaxOffsetX > c ||
                                    this.position.x + this.speed.x + this.parallaxOffsetX < 0) &&
                                (this.speed.x = -this.speed.x);
                        }
                        switch (g.directionY) {
                            case "up":
                                this.position.y + this.speed.y + this.parallaxOffsetY < 0 &&
                                (this.position.y = e - this.parallaxOffsetY);
                                break;
                            case "down":
                                this.position.y + this.speed.y + this.parallaxOffsetY > e &&
                                (this.position.y = 0 - this.parallaxOffsetY);
                                break;
                            default:
                                (this.position.y + this.speed.y + this.parallaxOffsetY > e ||
                                    this.position.y + this.speed.y + this.parallaxOffsetY < 0) &&
                                (this.speed.y = -this.speed.y);
                        }
                        (this.position.x += this.speed.x), (this.position.y += this.speed.y);
                    }),
                    (n.prototype.setStackPos = function(a) {
                        this.stackPos = a;
                    }),
                    h(),
                    { option: o, destroy: p, start: m, pause: l }
            );
        }
        var e = "particleground",
            f = a.jQuery;
        (a[e] = function(a, b) {
            return new d(a, b);
        }),
            (a[e].defaults = {
                minSpeedX: 0.1,
                maxSpeedX: 0.7,
                minSpeedY: 0.1,
                maxSpeedY: 0.7,
                directionX: "center",
                directionY: "center",
                density: 1e4,
                dotColor: "#666666",
                lineColor: "#666666",
                particleRadius: 7,
                lineWidth: 1,
                curvedLines: !1,
                proximity: 100,
                parallax: !0,
                parallaxMultiplier: 5,
                onInit: function() {},
                onDestroy: function() {}
            }),
        f &&
        (f.fn[e] = function(a) {
            if ("string" == typeof arguments[0]) {
                var b,
                    c = arguments[0],
                    g = Array.prototype.slice.call(arguments, 1);
                return (
                    this.each(function() {
                        f.data(this, "plugin_" + e) &&
                        "function" == typeof f.data(this, "plugin_" + e)[c] &&
                        (b = f.data(this, "plugin_" + e)[c].apply(this, g));
                    }),
                        void 0 !== b ? b : this
                );
            }
            return "object" != typeof a && a
                ? void 0
                : this.each(function() {
                    f.data(this, "plugin_" + e) ||
                    f.data(this, "plugin_" + e, new d(this, a));
                });
        });
    })(window, document) /**
     * requestAnimationFrame polyfill by Erik Möller. fixes from Paul Irish and Tino Zijdel
     * @see: http://paulirish.com/2011/requestanimationframe-for-smart-animating/
     * @see: http://my.opera.com/emoller/blog/2011/12/20/requestanimationframe-for-smart-er-animating
     * @license: MIT license
     */,
        (function() {
            for (
                var a = 0, b = ["ms", "moz", "webkit", "o"], c = 0;
                c < b.length && !window.requestAnimationFrame;
                ++c
            )
                (window.requestAnimationFrame = window[b[c] + "RequestAnimationFrame"]),
                    (window.cancelAnimationFrame =
                        window[b[c] + "CancelAnimationFrame"] ||
                        window[b[c] + "CancelRequestAnimationFrame"]);
            window.requestAnimationFrame ||
            (window.requestAnimationFrame = function(b) {
                var c = new Date().getTime(),
                    d = Math.max(0, 16 - (c - a)),
                    e = window.setTimeout(function() {
                        b(c + d);
                    }, d);
                return (a = c + d), e;
            }),
            window.cancelAnimationFrame ||
            (window.cancelAnimationFrame = function(a) {
                clearTimeout(a);
            });
        })();

    particleground(document.getElementById("particles-foreground"), {
        dotColor: "rgba(255, 255, 255, 1)",
        lineColor: "rgba(255, 255, 255, 0.05)",
        minSpeedX: 0.3,
        maxSpeedX: 0.6,
        minSpeedY: 0.3,
        maxSpeedY: 0.6,
        density: 50000, // One particle every n pixels
        curvedLines: false,
        proximity: 250, // How close two dots need to be before they join
        parallaxMultiplier: 10, // Lower the number is more extreme parallax
        particleRadius: 4 // Dot size
    });

    particleground(document.getElementById("particles-background"), {
        dotColor: "rgba(255, 255, 255, 0.5)",
        lineColor: "rgba(255, 255, 255, 0.05)",
        minSpeedX: 0.075,
        maxSpeedX: 0.15,
        minSpeedY: 0.075,
        maxSpeedY: 0.15,
        density: 30000, // One particle every n pixels
        curvedLines: false,
        proximity: 20, // How close two dots need to be before they join
        parallaxMultiplier: 20, // Lower the number is more extreme parallax
        particleRadius: 2 // Dot size
    });


</script>


</body>
</html>
