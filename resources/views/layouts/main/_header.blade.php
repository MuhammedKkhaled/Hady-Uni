<!DOCTYPE html>
<html lang="en-US">
<!-- Mirrored from milmaa.wpengine.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Feb 2024 11:05:37 GMT -->
<!-- Added by HTTrack --><meta
    http-equiv="content-type"
    content="text/html;charset=UTF-8"
/><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="profile" href="https://gmpg.org/xfn/11" />

    <script>
        document.documentElement.className =
            document.documentElement.className + " yes-js js_active js";
    </script>
    <title>Milmaa &#8211; Dairy Farm WordPress</title>
    <meta name="robots" content="noindex, nofollow" />
    <link rel="dns-prefetch" href="http://fonts.googleapis.com/" />
    <link
        rel="alternate"
        type="application/rss+xml"
        title="Milmaa &raquo; Feed"
        href="https://milmaa.wpengine.com/feed/"
    />
    <link
        rel="alternate"
        type="application/rss+xml"
        title="Milmaa &raquo; Comments Feed"
        href="https://milmaa.wpengine.com/comments/feed/"
    />
    <script type="text/javascript">
        /* <![CDATA[ */
        window._wpemojiSettings = {
            baseUrl: "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            ext: ".png",
            svgUrl: "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            svgExt: ".svg",
            source: {
                concatemoji:
                    "https:\/\/milmaa.wpengine.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.4.3",
            },
        };
        /*! This file is auto-generated */
        !(function (i, n) {
            var o, s, e;
            function c(e) {
                try {
                    var t = { supportTests: e, timestamp: new Date().valueOf() };
                    sessionStorage.setItem(o, JSON.stringify(t));
                } catch (e) {}
            }
            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height),
                    e.fillText(t, 0, 0);
                var t = new Uint32Array(
                        e.getImageData(0, 0, e.canvas.width, e.canvas.height).data
                    ),
                    r =
                        (e.clearRect(0, 0, e.canvas.width, e.canvas.height),
                            e.fillText(n, 0, 0),
                            new Uint32Array(
                                e.getImageData(0, 0, e.canvas.width, e.canvas.height).data
                            ));
                return t.every(function (e, t) {
                    return e === r[t];
                });
            }
            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(
                            e,
                            "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f",
                            "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f"
                        )
                            ? !1
                            : !n(
                                e,
                                "\ud83c\uddfa\ud83c\uddf3",
                                "\ud83c\uddfa\u200b\ud83c\uddf3"
                            ) &&
                            !n(
                                e,
                                "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                            );
                    case "emoji":
                        return !n(
                            e,
                            "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff",
                            "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff"
                        );
                }
                return !1;
            }
            function f(e, t, n) {
                var r =
                        "undefined" != typeof WorkerGlobalScope &&
                        self instanceof WorkerGlobalScope
                            ? new OffscreenCanvas(300, 150)
                            : i.createElement("canvas"),
                    a = r.getContext("2d", { willReadFrequently: !0 }),
                    o = ((a.textBaseline = "top"), (a.font = "600 32px Arial"), {});
                return (
                    e.forEach(function (e) {
                        o[e] = t(a, e, n);
                    }),
                        o
                );
            }
            function t(e) {
                var t = i.createElement("script");
                (t.src = e), (t.defer = !0), i.head.appendChild(t);
            }
            "undefined" != typeof Promise &&
            ((o = "wpEmojiSettingsSupports"),
                (s = ["flag", "emoji"]),
                (n.supports = { everything: !0, everythingExceptFlag: !0 }),
                (e = new Promise(function (e) {
                    i.addEventListener("DOMContentLoaded", e, { once: !0 });
                })),
                new Promise(function (t) {
                    var n = (function () {
                        try {
                            var e = JSON.parse(sessionStorage.getItem(o));
                            if (
                                "object" == typeof e &&
                                "number" == typeof e.timestamp &&
                                new Date().valueOf() < e.timestamp + 604800 &&
                                "object" == typeof e.supportTests
                            )
                                return e.supportTests;
                        } catch (e) {}
                        return null;
                    })();
                    if (!n) {
                        if (
                            "undefined" != typeof Worker &&
                            "undefined" != typeof OffscreenCanvas &&
                            "undefined" != typeof URL &&
                            URL.createObjectURL &&
                            "undefined" != typeof Blob
                        )
                            try {
                                var e =
                                        "postMessage(" +
                                        f.toString() +
                                        "(" +
                                        [JSON.stringify(s), u.toString(), p.toString()].join(
                                            ","
                                        ) +
                                        "));",
                                    r = new Blob([e], { type: "text/javascript" }),
                                    a = new Worker(URL.createObjectURL(r), {
                                        name: "wpTestEmojiSupports",
                                    });
                                return void (a.onmessage = function (e) {
                                    c((n = e.data)), a.terminate(), t(n);
                                });
                            } catch (e) {}
                        c((n = f(s, u, p)));
                    }
                    t(n);
                })
                    .then(function (e) {
                        for (var t in e)
                            (n.supports[t] = e[t]),
                                (n.supports.everything =
                                    n.supports.everything && n.supports[t]),
                            "flag" !== t &&
                            (n.supports.everythingExceptFlag =
                                n.supports.everythingExceptFlag && n.supports[t]);
                        (n.supports.everythingExceptFlag =
                            n.supports.everythingExceptFlag && !n.supports.flag),
                            (n.DOMReady = !1),
                            (n.readyCallback = function () {
                                n.DOMReady = !0;
                            });
                    })
                    .then(function () {
                        return e;
                    })
                    .then(function () {
                        var e;
                        n.supports.everything ||
                        (n.readyCallback(),
                            (e = n.source || {}).concatemoji
                                ? t(e.concatemoji)
                                : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)));
                    }));
        })((window, document), window._wpemojiSettings);
        /* ]]> */
    </script>
    <style id="wp-emoji-styles-inline-css" type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link
        rel="stylesheet"
        id="wpacu-combined-css-head-1"
        href="https://milmaa.wpengine.com/wp-content/cache/asset-cleanup/css/head-f782125aa3a5520c07a70d3b54b70d56dd26e0ed.css"
        type="text/css"
        media="all"
    />
    <style id="classic-theme-styles-inline-css" type="text/css">
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(0.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em;
        }
        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none;
        }
    </style>
    <style id="global-styles-inline-css" type="text/css">
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--color--primary: #023373;
            --wp--preset--color--secondary: #eb4694;
            --wp--preset--color--tertiary: #ebd4ae;
            --wp--preset--color--body-bg: #f5ead8;
            --wp--preset--color--body-text: #4b4b4b;
            --wp--preset--color--alternate: #023373;
            --wp--preset--color--transparent: rgba(0, 0, 0, 0);
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(
                135deg,
                rgba(6, 147, 227, 1) 0%,
                rgb(155, 81, 224) 100%
            );
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(
                135deg,
                rgb(122, 220, 180) 0%,
                rgb(0, 208, 130) 100%
            );
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(
                135deg,
                rgba(252, 185, 0, 1) 0%,
                rgba(255, 105, 0, 1) 100%
            );
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(
                135deg,
                rgba(255, 105, 0, 1) 0%,
                rgb(207, 46, 46) 100%
            );
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(
                135deg,
                rgb(238, 238, 238) 0%,
                rgb(169, 184, 195) 100%
            );
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(
                135deg,
                rgb(74, 234, 220) 0%,
                rgb(151, 120, 209) 20%,
                rgb(207, 42, 186) 40%,
                rgb(238, 44, 130) 60%,
                rgb(251, 105, 98) 80%,
                rgb(254, 248, 76) 100%
            );
            --wp--preset--gradient--blush-light-purple: linear-gradient(
                135deg,
                rgb(255, 206, 236) 0%,
                rgb(152, 150, 240) 100%
            );
            --wp--preset--gradient--blush-bordeaux: linear-gradient(
                135deg,
                rgb(254, 205, 165) 0%,
                rgb(254, 45, 45) 50%,
                rgb(107, 0, 62) 100%
            );
            --wp--preset--gradient--luminous-dusk: linear-gradient(
                135deg,
                rgb(255, 203, 112) 0%,
                rgb(199, 81, 192) 50%,
                rgb(65, 88, 208) 100%
            );
            --wp--preset--gradient--pale-ocean: linear-gradient(
                135deg,
                rgb(255, 245, 203) 0%,
                rgb(182, 227, 212) 50%,
                rgb(51, 167, 181) 100%
            );
            --wp--preset--gradient--electric-grass: linear-gradient(
                135deg,
                rgb(202, 248, 128) 0%,
                rgb(113, 206, 126) 100%
            );
            --wp--preset--gradient--midnight: linear-gradient(
                135deg,
                rgb(2, 3, 129) 0%,
                rgb(40, 116, 252) 100%
            );
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1),
            6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }
        :where(.is-layout-flex) {
            gap: 0.5em;
        }
        :where(.is-layout-grid) {
            gap: 0.5em;
        }
        body .is-layout-flow > .alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }
        body .is-layout-flow > .alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }
        body .is-layout-flow > .aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }
        body .is-layout-constrained > .alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }
        body .is-layout-constrained > .alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }
        body .is-layout-constrained > .aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }
        body
        .is-layout-constrained
        > :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }
        body .is-layout-constrained > .alignwide {
            max-width: var(--wp--style--global--wide-size);
        }
        body .is-layout-flex {
            display: flex;
        }
        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }
        body .is-layout-flex > * {
            margin: 0;
        }
        body .is-layout-grid {
            display: grid;
        }
        body .is-layout-grid > * {
            margin: 0;
        }
        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }
        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }
        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }
        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }
        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }
        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }
        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }
        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }
        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }
        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }
        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }
        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }
        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }
        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }
        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }
        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }
        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }
        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }
        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }
        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }
        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }
        .has-luminous-vivid-orange-background-color {
            background-color: var(
                --wp--preset--color--luminous-vivid-orange
            ) !important;
        }
        .has-luminous-vivid-amber-background-color {
            background-color: var(
                --wp--preset--color--luminous-vivid-amber
            ) !important;
        }
        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }
        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }
        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }
        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }
        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }
        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }
        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }
        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }
        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }
        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }
        .has-luminous-vivid-orange-border-color {
            border-color: var(
                --wp--preset--color--luminous-vivid-orange
            ) !important;
        }
        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }
        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }
        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }
        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }
        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }
        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }
        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(
                --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple
            ) !important;
        }
        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(
                --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan
            ) !important;
        }
        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(
                --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange
            ) !important;
        }
        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(
                --wp--preset--gradient--luminous-vivid-orange-to-vivid-red
            ) !important;
        }
        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(
                --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray
            ) !important;
        }
        .has-cool-to-warm-spectrum-gradient-background {
            background: var(
                --wp--preset--gradient--cool-to-warm-spectrum
            ) !important;
        }
        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }
        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }
        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }
        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }
        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }
        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }
        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }
        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }
        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }
        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }
        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }
        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }
        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }
        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }
        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }
        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link
        rel="stylesheet"
        id="woocommerce-smallscreen-css"
        href="https://milmaa.wpengine.com/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=6.2.2"
        type="text/css"
        media="only screen and (max-width: 768px)"
    />

    <link
        rel="stylesheet"
        id="bf420a116b69a7b8244224c70b72a816-css"
        href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800,900&amp;subset=latin-ext"
        type="text/css"
        media="all"
    />
    <link
        rel="stylesheet"
        id="e9a1e001934af7121d3283b538999bad-css"
        href="http://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&amp;subset=latin-ext"
        type="text/css"
        media="all"
    />
    <link
        rel="stylesheet"
        id="1d9aa0e7b7a043548d134f3d89fd753b-css"
        href="http://fonts.googleapis.com/css?family=Merriweather:400&amp;subset=latin-ext"
        type="text/css"
        media="all"
    />
    <link
        rel="stylesheet"
        id="61f180e65cb9280b339502ab077d40fc-css"
        href="http://fonts.googleapis.com/css?family=Sen:400,700,800&amp;subset=latin-ext"
        type="text/css"
        media="all"
    />
    <link
        rel="stylesheet"
        id="f562e241c1c8b24ab7a4dd36af4e492b-css"
        href="http://fonts.googleapis.com/css?family=Lilita+One:400&amp;subset=latin-ext"
        type="text/css"
        media="all"
    />
    <link
        rel="stylesheet"
        id="5d5cd0aadc8ea00aad005f6044700045-css"
        href="http://fonts.googleapis.com/css?family=Sen:400&amp;subset=latin-ext"
        type="text/css"
        media="all"
    />

    <style id="milmaa-inline-css" type="text/css">
        :root {
            --mfxPrimaryColor: #023373;
            --mfxPrimaryColorRgb: 2, 51, 115;
            --mfxSecondaryColor: #eb4694;
            --mfxSecondaryColorRgb: 235, 70, 148;
            --mfxTertiaryColor: #ebd4ae;
            --mfxTertiaryColorRgb: 235, 212, 174;
            --mfxBodyBGColor: #f5ead8;
            --mfxBodyBGColorRgb: 245, 234, 216;
            --mfxBodyTxtColor: #4b4b4b;
            --mfxBodyTxtColorRgb: 75, 75, 75;
            --mfxHeadAltColor: #023373;
            --mfxHeadAltColorRgb: 2, 51, 115;
            --mfxLinkColor: #4b4b4b;
            --mfxLinkColorRgb: 75, 75, 75;
            --mfxLinkHoverColor: #eb4694;
            --mfxLinkHoverColorRgb: 235, 70, 148;
            --mfxBorderColor: #e9d4b2;
            --mfxBorderColorRgb: 233, 212, 178;
            --mfxAccentTxtColor: #ffffff;
            --mfxAccentTxtColorRgb: 255, 255, 255;
            --mfxFontTypo_Base: "Sen", sans-serif;
            --mfxFontWeight_Base: 400;
            --mfxFontSize_Base: 18px;
            --mfxLineHeight_Base: 1.875;
            --mfxFontTypo_Alt: "Lilita One", cursive;
            --mfxFontWeight_Alt: 400;
            --mfxFontSize_Alt: 46px;
            --mfxLineHeight_Alt: 1.3;
            --mfxFontTypo_H1: "Lilita One", cursive;
            --mfxFontWeight_H1: 400;
            --mfxFontSize_H1: 46px;
            --mfxLineHeight_H1: 1.3;
            --mfxFontTypo_H2: "Lilita One", cursive;
            --mfxFontWeight_H2: 400;
            --mfxFontSize_H2: 40px;
            --mfxLineHeight_H2: 1.3;
            --mfxFontTypo_H3: "Lilita One", cursive;
            --mfxFontWeight_H3: 400;
            --mfxFontSize_H3: 34px;
            --mfxLineHeight_H3: 1.3;
            --mfxFontTypo_H4: "Lilita One", cursive;
            --mfxFontWeight_H4: 400;
            --mfxFontSize_H4: 28px;
            --mfxLineHeight_H4: 1.3;
            --mfxFontTypo_H5: "Lilita One", cursive;
            --mfxFontWeight_H5: 400;
            --mfxFontSize_H5: 24px;
            --mfxLineHeight_H5: 1.3;
            --mfxFontTypo_H6: "Lilita One", cursive;
            --mfxFontWeight_H6: 400;
            --mfxFontSize_H6: 22px;
            --mfxLineHeight_H6: 1.3;
            --mfxFontTypo_Ext: "Lilita One", cursive;
            --mfxFontWeight_Ext: 400;
            --mfxFontSize_Ext: 16px;
            --mfxLineHeight_Ext: 1.1;
        }
    </style>

    <style type="text/css" data-wpacu-inline-css-file="1">
        /*!/wp-content/plugins/milmaa-plus/modules/breadcrumb/assets/css/breadcrumb.css*/
        .main-title-section.aligncenter {
            text-align: center;
        }
        .main-title-section.alignright {
            text-align: right;
        }
        .main-title-section-wrapper.breadcrumb-left .breadcrumb {
            clear: none;
            float: left;
            width: 35%;
            padding-right: 20px;
            margin-top: 13px;
        }
        .main-title-section-wrapper.breadcrumb-left .main-title-section {
            float: right;
            width: 65%;
            text-align: right;
        }
        .main-title-section-wrapper.breadcrumb-right .breadcrumb {
            clear: none;
            float: right;
            text-align: right;
            width: 35%;
            padding-left: 20px;
            margin-top: 13px;
        }
        .main-title-section-wrapper.breadcrumb-right .main-title-section {
            float: left;
            width: 65%;
        }
        .main-title-section-wrapper.breadcrumb-top-left-title-center
        .main-title-section {
            width: 100%;
            text-align: center;
        }
        .main-title-section-wrapper.breadcrumb-top-left-title-center .breadcrumb {
            margin-top: -70px;
            width: 100%;
            float: left;
        }
        .main-title-section-wrapper.breadcrumb-top-right-title-center
        .main-title-section {
            width: 100%;
            text-align: center;
        }
        .main-title-section-wrapper.breadcrumb-top-right-title-center
        .breadcrumb {
            margin-top: -70px;
            width: 100%;
            float: right;
            text-align: right;
        }
        .mfx-dark-bg .breadcrumb,
        .mfx-dark-bg .breadcrumb a:hover,
        .mfx-dark-bg .breadcrumb span.current {
            color: rgba(var(--mfxAccentTxtColorRgb), 0.6);
        }
        .mfx-dark-bg .breadcrumb a {
            color: var(--mfxAccentTxtColor);
        }
        .mfx-dark-bg .breadcrumb .fa.default {
            background: var(--mfxAccentTxtColor);
        }
        @media only screen and (min-width: 1025px) and (max-width: 1280px) {
            .main-title-section-wrapper.breadcrumb-right .main-title-section h1 {
                font-size: 26px;
            }
            .main-title-section-wrapper.breadcrumb-right .main-title-section {
                width: 58%;
            }
            .main-title-section-wrapper.breadcrumb-right .breadcrumb {
                width: 42%;
            }
        }
        @media only screen and (min-width: 768px) and (max-width: 1024px) {
            .main-title-section-wrapper.breadcrumb-right .main-title-section h1 {
                font-size: 24px;
                margin-top: 11px;
            }
        }
        @media only screen and (max-width: 767px) {
            .main-title-section-wrapper.breadcrumb-right .main-title-section,
            .main-title-section-wrapper.breadcrumb-right .breadcrumb,
            .main-title-section-wrapper.breadcrumb-left .main-title-section,
            .main-title-section-wrapper.breadcrumb-left .breadcrumb {
                width: 100%;
                padding: 0;
                text-align: center;
            }
            .no-breadcrumb.page-with-slider
            #header-wrapper.header-top-absolute
            #header {
                position: static;
            }
        }
    </style>

    <style type="text/css" data-wpacu-inline-css-file="1">
        /*!/wp-content/plugins/milmaa-plus/modules/site-to-top/assets/css/totop.css*/
        #back-to-top {
            position: fixed;
            display: none;
            text-decoration: none;
            bottom: 20px;
            right: 20px;
            overflow: hidden;
            width: 40px;
            height: 40px;
            border: none;
            text-indent: 100%;
            z-index: 9;
            text-indent: -9999px;
            border-radius: var(--mfxRadius_Part);
        }
        .back-to-top-icon {
            display: block;
            position: absolute;
            left: 0;
            right: 0;
            margin: -1px auto 0;
            top: 50%;
            transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            color: var(--mfxAccentTxtColor);
            -webkit-transition: all 0.3s linear;
            -moz-transition: all 0.3s linear;
            -o-transition: all 0.3s linear;
            -ms-transition: all 0.3s linear;
            transition: all 0.3s linear;
            text-indent: 0;
            text-align: center;
            font-size: 20px;
            line-height: 1;
        }
        .back-to-top-icon i:before {
            margin: 0;
        }
        #back-to-top:hover .back-to-top-icon {
            margin-top: -6px;
        }
        #back-to-top:after {
            background-color: var(--mfxAccentTxtColor);
            content: "";
            display: block;
            height: 15px;
            margin: 0 auto;
            opacity: 0;
            position: absolute;
            left: 50%;
            top: 50%;
            text-align: center;
            text-indent: 0;
            width: 2px;
            -webkit-transform: translate(-50%, 50%);
            transform: translate(-50%, 50%);
            -webkit-transition: all 0.3s linear;
            transition: all 0.3s linear;
        }
        #back-to-top:hover:after {
            margin-top: 1px;
            opacity: 1;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
        #back-to-top:active,
        #back-to-top:focus {
            outline: none;
        }
        #back-to-top {
            background-color: var(--mfxPrimaryColor);
        }
        #back-to-top:hover {
            background-color: var(--mfxSecondaryColor);
        }
        @media only screen and (max-width: 1280px) {
            .nav-is-visible #back-to-top {
                opacity: 0;
            }
        }
    </style>

    <style type="text/css" data-wpacu-inline-css-file="1">
        /*!/wp-content/themes/milmaa/modules/footer/assets/css/footer.css*/
        #footer {
            float: left;
            clear: both;
            width: 100%;
            margin: 0;
        }
        #footer .container {
            z-index: 9;
        }
        .footer-widgets {
            float: left;
            clear: both;
            width: 100%;
            margin: 0;
            padding: 75px 0 35px;
        }
        .footer-copyright {
            float: left;
            clear: both;
            width: 100%;
            margin: 0;
            padding: 30px 0;
        }
        .footer-copyright .alignright img {
            float: right;
        }
        .mfx-no-footer-builder-content.footer-copyright {
            position: relative;
        }
        .mfx-no-footer-builder-content.footer-copyright:before {
            position: absolute;
            z-index: -1;
            top: 0;
            bottom: 0;
            left: 50%;
            width: 9999px;
            height: 100%;
            content: "";
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
        }
        .mfx-no-footer-builder-content.footer-copyright > * {
            vertical-align: middle;
        }
        #footer a:not(:focus),
        .footer-widgets a:not(:focus) {
            text-decoration: none;
        }
        .mfx-no-footer-builder-content.footer-copyright:before {
            background-color: rgba(var(--mfxSecondaryColorRgb), 0.075);
        }
        #footer a,
        .footer-widgets a {
            color: var(--mfxBodyTxtColor);
        }
    </style>

    <style type="text/css" data-wpacu-inline-css-file="1">
        /*!/wp-content/plugins/milmaa-plus/modules/menu/assets/css/nav-menu.css*/
        .backend-menu-walker-submenu-none {
            display: none;
        }
    </style>

    <style type="text/css" data-wpacu-inline-css-file="1">
        .elementor-kit-6 {
            --e-global-color-primary: #023373;
            --e-global-color-secondary: #eb4694;
            --e-global-color-text: #4b4b4b;
            --e-global-color-accent: #ffffff;
            --e-global-color-f13a82a: #ebd4ae;
            --e-global-typography-primary-font-family: "Lilita One";
            --e-global-typography-primary-font-weight: 600;
            --e-global-typography-secondary-font-family: "Lilita One";
            --e-global-typography-secondary-font-weight: 600;
            --e-global-typography-text-font-family: "Sen";
            --e-global-typography-text-font-weight: 400;
            --e-global-typography-accent-font-family: "Sen";
            --e-global-typography-accent-font-weight: 400;
        }
        .elementor-section.elementor-section-boxed > .elementor-container {
            max-width: 1440px;
        }
        .elementor-widget:not(:last-child) {
            margin-bottom: 20px;
        }
        {
        }
        h1.entry-title {
            display: var(--page-title-display);
        }
        @media (max-width: 1540px) {
            .elementor-section.elementor-section-boxed > .elementor-container {
                max-width: 1080px;
            }
        }
        @media (max-width: 1280px) {
            .elementor-section.elementor-section-boxed > .elementor-container {
                max-width: 900px;
            }
        }
        @media (max-width: 1024px) {
            .elementor-section.elementor-section-boxed > .elementor-container {
                max-width: 710px;
            }
        }
        @media (max-width: 767px) {
            .elementor-section.elementor-section-boxed > .elementor-container {
                max-width: 420px;
            }
        }
        @media (max-width: 479px) {
            .elementor-section.elementor-section-boxed > .elementor-container {
                max-width: 290px;
            }
        }
    </style>

    <link
        rel="stylesheet"
        id="google-fonts-1-css"
        href="https://fonts.googleapis.com/css?family=Lilita+One%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CSen%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.4.3"
        type="text/css"
        media="all"
    />

    <style type="text/css" data-wpacu-inline-css-file="1">
        /*!
 * Font Awesome Free 5.15.3 by @fontawesome - https://fontawesome.com
 * License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License)
 */
        @font-face {
            font-family: "Font Awesome 5 Free";
            font-style: normal;
            font-weight: 900;
            font-display: block;
            src: url(https://milmaa.wpengine.com/wp-content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-solid-900.eot);
            src: url(https://milmaa.wpengine.com/wp-content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-solid-900.eot?#iefix)
            format("embedded-opentype"),
            url(https://milmaa.wpengine.com/wp-content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-solid-900.woff2)
            format("woff2"),
            url(https://milmaa.wpengine.com/wp-content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-solid-900.woff)
            format("woff"),
            url(https://milmaa.wpengine.com/wp-content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-solid-900.ttf)
            format("truetype"),
            url(https://milmaa.wpengine.com/wp-content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-solid-900.svg#fontawesome)
            format("svg");
        }
        .fa,
        .fas {
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
        }
    </style>
    <script
        id="wpacu-combined-js-head-group-1"
        type="text/javascript"
        src="https://milmaa.wpengine.com/wp-content/cache/asset-cleanup/js/head-12613d092f994a1d5c75d6f766f20c3ee4c2eb1c.js"
    ></script>
    <link
        rel="https://api.w.org/"
        href="https://milmaa.wpengine.com/wp-json/"
    />
    <link
        rel="alternate"
        type="application/json"
        href="https://milmaa.wpengine.com/wp-json/wp/v2/pages/7"
    />
    <link
        rel="EditURI"
        type="application/rsd+xml"
        title="RSD"
        href="https://milmaa.wpengine.com/xmlrpc.php?rsd"
    />
    <link rel="canonical" href="https://milmaa.wpengine.com/" />
    <link rel="shortlink" href="https://milmaa.wpengine.com/" />
    <link
        rel="alternate"
        type="application/json+oembed"
        href="https://milmaa.wpengine.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmilmaa.wpengine.com%2F"
    />
    <link
        rel="alternate"
        type="text/xml+oembed"
        href="https://milmaa.wpengine.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmilmaa.wpengine.com%2F&amp;format=xml"
    />
    <noscript
    ><style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style></noscript
    >
    <style type="text/css" id="custom-background-css">
        body.custom-background {
            background-color: #f5ead8;
        }
    </style>
    <link
        rel="icon"
        href="https://milmaa.wpengine.com/wp-content/uploads/2021/12/favicon.png"
        sizes="32x32"
    />
    <link
        rel="icon"
        href="https://milmaa.wpengine.com/wp-content/uploads/2021/12/favicon.png"
        sizes="192x192"
    />
    <link
        rel="apple-touch-icon"
        href="https://milmaa.wpengine.com/wp-content/uploads/2021/12/favicon.png"
    />
    <meta
        name="msapplication-TileImage"
        content="https://milmaa.wpengine.com/wp-content/uploads/2021/12/favicon.png"
    />
    <style id="milmaa-woo-non-archive-inline-css" type="text/css">
        /*--------------------------------------------------------------*/
        /* #region - Product Listing */
        /*--------------------------------------------------------------*/

        .woocommerce .woocommerce-result-count {
            float: left;
        }
        .woocommerce .woocommerce-ordering {
            float: right;
        }

        .woocommerce ul.products {
            clear: both;
            margin: 0;
            padding: 0;
        }

        .woocommerce ul.products:after,
        .woocommerce ul.products:before,
        .woocommerce-page ul.products:after,
        .woocommerce-page ul.products:before {
            content: none;
        }

        .woocommerce ul.products li.product {
            margin: 0;
            padding: 0;
        }
        .woocommerce ul.products li.product,
        .woocommerce ul.products[class*="columns-"] li.product,
        .woocommerce-page ul.products li.product,
        .woocommerce-page ul.products[class*="columns-"] li.product {
            margin: 0;
            width: 100%;
        }

        .woocommerce ul.products li.first,
        .woocommerce ul.products li.first .column {
            clear: both;
        }
        .woocommerce ul.products li.first .column {
            margin-left: 0;
        }

        .woocommerce ul.products:not(.swiper-wrapper) {
            display: block;
            float: none;
            margin: 0 -15px;
            width: auto;
        }
        .woocommerce ul.products:not(.swiper-wrapper) li.product {
            display: inline;
        }

        .woocommerce ul.products.product-loader .mfx-col {
            -webkit-transition: var(--mfxBaseTransition);
            -moz-transition: var(--mfxBaseTransition);
            -ms-transition: var(--mfxBaseTransition);
            -o-transition: var(--mfxBaseTransition);
            transition: var(--mfxBaseTransition);
        }

        .woocommerce ul.products li.product.isotope-grid-sizer .mfx-col {
            min-height: 0;
        }

        .woocommerce ul.products li.product.isotope-grid-sizer .mfx-col:empty {
            padding: 0;
        }

        .woocommerce ul.products li.product .product-wrapper {
            display: inline-block;
            float: left;
            margin: 0 0 35px;
            width: 100%;
        }

        .page-template-tpl-fullwidth-php .woocommerce ul.products {
            overflow: hidden;
            padding-bottom: 80px;
        }

        .woocommerce ul.products li.product .product-wrapper,
        .woocommerce ul.products li.product .product-wrapper:before,
        .woocommerce ul.products li.product .product-thumb,
        .woocommerce ul.products li.product .product-thumb .image,
        .woocommerce
        ul.products
        li.product
        .product-thumb
        .image
        .product-thumb-overlay,
        .woocommerce ul.products li.product .product-thumb .image img {
            -webkit-border-radius: var(--mfxRadius_3X);
            border-radius: var(--mfxRadius_3X);
        }

        /* Product Listing - Thumb */
        .woocommerce ul.products li.product .product-thumb,
        .woocommerce ul.products li.product .product-thumb .image,
        .woocommerce
        ul.products
        li.product
        .product-thumb
        .image
        .product-thumb-overlay,
        .woocommerce ul.products li.product .product-thumb .image img {
            float: left;
            line-height: 0;
            margin: 0;
            width: 100%;
        }

        .woocommerce ul.products li.product .product-thumb {
            position: relative;
            overflow: hidden;
        }
        .woocommerce ul.products li.product .product-thumb .image {
            display: block;
            overflow: hidden;
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
        }

        .woocommerce
        ul.products
        li.product
        .product-thumb
        .image
        .product-thumb-overlay {
            height: 100%;
            position: relative;
            z-index: 1;
        }

        .woocommerce ul.products li.product .product-thumb .image .primary-image,
        .woocommerce
        ul.products
        li.product
        .product-thumb
        .image
        .secondary-image {
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
            width: 100%;
        }

        .woocommerce ul.products li.product .product-thumb .image,
        .woocommerce ul.products li.product .product-thumb .image .primary-image,
        .woocommerce
        ul.products
        li.product
        .product-thumb
        .image
        .secondary-image {
            height: auto;
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            top: 0;
            width: auto;
        }

        .woocommerce
        ul.products
        li.product
        .product-thumb
        a.image:focus
        > div[class*="image"] {
            outline: thin dotted;
            outline-offset: -5px;
        }

        .woocommerce
        ul.products[class*="product-overlay-"]
        li.product
        .product-thumb
        .image
        .product-thumb-overlay {
            display: block;
            height: 100%;
            opacity: 0;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
        }

        .woocommerce
        ul.products[class*="product-overlay-"]
        li.product:hover
        .product-thumb
        .image
        .product-thumb-overlay {
            opacity: 1;
        }

        .woocommerce ul.products li.product .product-thumb .image .primary-image {
            margin: 0;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            -o-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-transform-style: preserve-3d;
            -moz-transform-style: preserve-3d;
            -ms-transform-style: preserve-3d;
            -o-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }

        .woocommerce
        ul.products
        li.product
        .product-thumb
        .product-thumb-content
        > * {
            line-height: normal;
            position: relative;
            z-index: 1;
        }

        .woocommerce ul.products li.product-category .product-thumb .image {
            position: relative;
            width: 100%;
        }
        .woocommerce ul.products li.product-category .product-thumb:before,
        .woocommerce ul.products li.product-category .product-thumb:after {
            content: none;
        }

        /* Product Listing - Buttons */
        .woocommerce ul.products li.product .product-buttons-wrapper {
            display: inline-block;
            margin: auto;
            z-index: 1;
        }
        .woocommerce
        ul.products
        li.product
        .product-buttons-wrapper
        .wc_inline_buttons {
            display: inline-block;
        }

        .woocommerce ul.products li.product a.add_to_cart_button.added,
        .woocommerce
        ul.products
        li.product
        .product-thumb
        .yith-wcwl-add-button.hide
        a,
        .woocommerce
        ul.products
        li
        .yith-wcwl-add-to-wishlist
        .yith-wcwl-wishlistaddedbrowse
        .feedback,
        .woocommerce
        ul.products
        li
        .yith-wcwl-add-to-wishlist
        .yith-wcwl-wishlistexistsbrowse
        .feedback {
            display: none !important;
        }

        /* Product Listing - Content */
        .woocommerce ul.products li.product .product-details {
            display: block;
            float: left;
            padding: 0;
            position: relative;
            text-align: center;
            width: 100%;
        }

        .woocommerce ul.products li.product .product-thumb-content {
            display: inline-block;
            padding: 15px;
            width: 100%;
        }

        .woocommerce ul.products li.product .product-thumb-content > div,
        .woocommerce ul.products li.product .product-details > div {
            clear: both;
            display: inline-block;
            float: left;
            margin: 6px 0 0;
            width: 100%;
        }

        .woocommerce ul.products li.product .selection-box:after {
            border-width: 0;
        }

        /* Transitions */
        .woocommerce ul.products li.product .product-wrapper,
        .woocommerce ul.products li.product a img,
        .woocommerce ul.products li.product .product-thumb-content,
        .woocommerce ul.products li.product .product-thumb .image .primary-image,
        .woocommerce
        ul.products
        li.product
        .product-thumb
        .image
        .product-thumb-overlay,
        .woocommerce
        ul.products[class*="product-hover-"]
        li.product
        .product-wrapper:before,
        .woocommerce
        ul.products[class*="product-hover-thumb"]
        li.product
        .product-thumb
        .image:before {
            -webkit-transition: var(--mfxBaseTransition);
            transition: var(--mfxBaseTransition);
        }

        /*----*****---- << Product Listing Options >> ----*****----*/

        /* Product Listing - Thumb Content Alignment */
        .woocommerce ul.products li.product .product-thumb-content {
            text-align: center;
        }

        .woocommerce ul.products li.product .product-thumb:before,
        .woocommerce ul.products li.product .product-thumb:after {
            content: "";
            display: block;
        }

        .woocommerce ul.products li.product .product-thumb:before {
            padding-top: 50%;
        }
        .woocommerce ul.products li.product .product-thumb:after {
            padding-bottom: 50%;
        }

        /* Product Listing - IconGroup Position */
        .woocommerce
        ul.products:not([class*="product-thumb-iconsgroup-position"])
        li.product
        .product-thumb
        .product-buttons-wrapper.product-icons {
            position: static;
            text-align: inherit;
        }

        /* Product Listing - Content Alignment */
        .woocommerce
        ul.products.product-content-alignment-center
        li.product
        .product-details {
            text-align: center;
        }

        /* Product Listing - Overall Hover Effects */
        .woocommerce
        ul.products[class*="product-hover-"]
        li.product
        .product-wrapper {
            position: relative;
        }

        .woocommerce
        ul.products[class*="product-hover-"]
        li.product
        .product-wrapper:before,
        .woocommerce
        ul.products[class*="product-hover-thumb"]
        li.product
        .product-thumb
        .image:before {
            content: "";
            position: absolute;
            pointer-events: none;
        }

        .woocommerce
        ul.products[class*="product-hover-thumb"]
        li.product
        .product-wrapper:before {
            content: none;
        }

        /* Product Listing - Image Hover Effects */
        .woocommerce
        ul.products
        li:not(.product-with-secondary-image):hover
        .product-thumb
        .image
        .primary-image {
            -webkit-transform: none;
            transform: none;
        }

        /* #endregion  - Product Listing */

        /*--------------------------------------------------------------*/
        /* #region - Product - Labels */
        /*--------------------------------------------------------------*/

        .woocommerce ul.products li.product .onsale,
        .woocommerce ul.products li.product .out-of-stock,
        .woocommerce ul.products li.product .product-labels > span {
            display: inline-block;
            font-size: 10px;
            font-weight: 600;
            letter-spacing: 1px;
            margin: 0;
            padding: 0;
            position: relative;
            left: auto;
            top: auto;
            text-align: center;
            text-transform: uppercase;
        }

        .woocommerce.single-product div.product .onsale,
        .woocommerce.single-product div.product .out-of-stock {
            font-weight: normal;
        }

        .woocommerce ul.products li.product .out-of-stock {
            font-size: 9px;
        }
        .woocommerce ul.products li.product .product-labels .new {
            background-color: indianred;
            color: var(--mfxBodyBGColor);
        }
        .woocommerce ul.products li.product .product-labels span span {
            display: inline-block;
            width: 100%;
        }

        .woocommerce ul.products li.product .product-labels {
            position: absolute;
            right: 0;
            top: 0;
            text-align: right;
            z-index: 2;
        }

        /* Featured */
        .woocommerce ul.products li.product .featured-tag {
            height: 25px;
            line-height: 25px;
            position: absolute;
            left: 0;
            top: 6px;
            z-index: 9;
        }

        .woocommerce.single-product .images .featured-tag,
        .mfx-product-image-gallery-container .featured-tag {
            height: 25px;
            line-height: 25px;
            position: absolute;
            right: 0;
            top: 0;
            z-index: 9;
        }

        .woocommerce ul.products li.product .featured-tag i,
        .woocommerce.single-product .images .featured-tag i,
        .mfx-product-image-gallery-container .featured-tag i {
            font-size: 12px;
            line-height: inherit;
            position: absolute;
            right: 0;
            text-align: center;
            width: 100%;
        }

        .woocommerce ul.products li.product .featured-tag > div,
        .woocommerce.single-product .images .featured-tag > div,
        .mfx-product-image-gallery-container .featured-tag > div {
            height: 100%;
            line-height: inherit;
            position: relative;
            width: 25px;
            z-index: 99;
            -webkit-transition: width 0.1s cubic-bezier(0.86, 0, 0.07, 1) 0.05s;
            transition: width 0.1s cubic-bezier(0.86, 0, 0.07, 1) 0.05s;
        }

        .woocommerce ul.products li.product .featured-tag span,
        .woocommerce.single-product .images .featured-tag span,
        .mfx-product-image-gallery-container .featured-tag span {
            display: none;
            float: left;
            font-weight: 400;
            overflow: hidden;
            padding-right: 20px;
            width: 3em;
            -webkit-transition-delay: 0s, 0s, 0s;
            transition-delay: 0s, 0s, 0s;
            -webkit-transition-duration: 0.3s, 0.25s, 0.25s;
            transition-duration: 0.3s, 0.25s, 0.25s;
            -webkit-transition-property: opacity, padding, width;
            transition-property: opacity, padding, width;
            -webkit-transition-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
            transition-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
        }

        .woocommerce ul.products li.product:hover .featured-tag > div span,
        .woocommerce.single-product .images .featured-tag > div span,
        .mfx-product-image-gallery-container .featured-tag > div span {
            padding-left: 10px;
            width: 100%;
        }

        .woocommerce ul.products li.product .featured-tag:after,
        .woocommerce.single-product .images .featured-tag:after,
        .mfx-product-image-gallery-container .featured-tag:after {
            background-color: transparent;
            border-style: solid;
            border-width: 12px;
            content: "";
            position: absolute;
            bottom: 0;
            right: -15px;
            top: 0;
            z-index: 9;
        }

        .woocommerce.single-product .images .featured-tag:after,
        .mfx-product-image-gallery-container .featured-tag:after {
            left: -15px;
            right: auto;
        }

        .woocommerce ul.products li.product .featured-tag span {
            opacity: 0;
            filter: alpha(opacity=0);
        }
        .woocommerce ul.products li.product:hover .featured-tag > div span {
            opacity: 1;
            filter: alpha(opacity=100);
        }

        /* #endregion - Product - Labels */

        /*--------------------------------------------------------------*/
        /* #region - Product - Rating */
        /*--------------------------------------------------------------*/

        .woocommerce .star-rating,
        .woocommerce ul.products li.product .star-rating {
            font-size: var(--mfxFontSize_Base);
            text-indent: -9999px;
            width: 5em;
        }
        .woocommerce .star-rating span,
        .woocommerce ul.products li.product .star-rating span {
            height: 100%;
            padding-top: 0;
        }

        .woocommerce .star-rating:before,
        .woocommerce .star-rating span:before {
            font-family: "WooCommerce";
            letter-spacing: 0;
            text-align: left;
            text-indent: 0;
        }
        .woocommerce .star-rating:before {
            content: "\e021\e021\e021\e021\e021";
        }
        .woocommerce .star-rating > span:before {
            content: "\e020\e020\e020\e020\e020";
        }

        .woocommerce .star-rating:before,
        .woocommerce ul.products li.product .star-rating:before {
            color: rgba(var(--mfxHeadAltColorRgb), 0.25);
        }
        .woocommerce .star-rating > span:before,
        .woocommerce ul.products li.product .star-rating > span:before {
            color: var(--mfxPrimaryColor);
        }

        /* #endregion - Product - Rating */

        /*--------------------------------------------------------------*/
        /* #region - Product - Swatches */
        /*--------------------------------------------------------------*/

        .zoo-cw-variations .zoo-cw-group-attribute {
            width: auto;
        }
        .zoo-cw-wrap-shop .zoo-cw-group-attribute {
            margin-bottom: 8px;
        }
        .zoo-cw-wrap-shop .zoo-cw-group-attribute:last-child {
            margin-bottom: 0;
        }

        .zoo-cw-group-attribute .zoo-cw-attribute-option {
            display: inline-block;
            float: none;
            margin: 3px;
        }
        .zoo-cw-group-attribute .zoo-cw-attribute-option .zoo-cw-attr-item {
            border-width: 0 !important;
            overflow: visible;
            padding: 0;
            position: relative;
            box-shadow: 1px 1px 4px 0 rgba(0, 0, 0, 0.35);
        }
        .zoo-cw-wrap-shop
        .zoo-cw-group-attribute[data-attribute-display-type]
        .selection-box {
            display: inline-block;
            width: auto;
        }
        .zoo-cw-wrap-shop
        .zoo-cw-group-attribute[data-attribute-display-type]
        .select2 {
            max-width: 100%;
        }

        .zoo-cw-active select:not(.zoo-cw-attribute-select),
        .zoo-cw-active select:not(.zoo-cw-attribute-select) + .select2,
        .variations_form:not(.no-cw-data)
        .zoo-cw-group-attribute
        select:not(.zoo-cw-attribute-select),
        .variations_form:not(.no-cw-data)
        .zoo-cw-group-attribute
        select:not(.zoo-cw-attribute-select)
        + select {
            display: none !important;
        }

        .woo-variation-swatches-stylesheet-enabled
        .variable-items-wrapper
        .variable-item:not(.radio-variable-item),
        .woo-variation-swatches-stylesheet-enabled
        .variable-items-wrapper
        .variable-item:not(.radio-variable-item):hover
        .variable-item-span,
        .woo-variation-swatches-stylesheet-enabled
        .variable-items-wrapper
        .variable-item:not(.radio-variable-item).selected
        .variable-item-span,
        .woo-variation-swatches-stylesheet-enabled
        .variable-items-wrapper
        .variable-item:not(.radio-variable-item).selected:hover
        .variable-item-span,
        .zoo-cw-group-attribute .zoo-cw-attribute-option:hover .zoo-cw-attr-item,
        .zoo-cw-group-attribute
        .zoo-cw-attribute-option.zoo-cw-active
        .zoo-cw-attr-item {
            box-shadow: none !important;
        }

        .woo-variation-swatches-stylesheet-enabled
        .variable-items-wrapper
        .variable-item:not(.radio-variable-item)
        .variable-item-span:after,
        .woo-variation-swatches-stylesheet-enabled
        .variable-items-wrapper
        .variable-item:not(.radio-variable-item).color-variable-item
        .variable-item-span-color::after,
        .woo-variation-swatches-stylesheet-enabled
        .variable-items-wrapper
        .image-variable-item:not(.radio-variable-item)
        img:before,
        .zoo-cw-group-attribute .zoo-cw-attribute-option .zoo-cw-attr-item:after {
            background: none;
            content: "";
            height: auto;
            opacity: 0;
            margin: -2px;
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            top: 0;
            width: auto;
            -webkit-border-radius: inherit;
            border-radius: inherit;
            box-shadow: 0 0 3px 1px rgba(0, 0, 0, 0.5);
            -webkit-transform: scale(0);
            -moz-transform: scale(0);
            -ms-transform: scale(0);
            -o-transform: scale(0);
            transform: scale(0);
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -ms-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
        }

        .woo-variation-swatches-stylesheet-enabled
        .variable-items-wrapper
        .variable-item:not(.radio-variable-item).button-variable-item
        .variable-item-span::after,
        .zoo-cw-group-attribute .zoo-cw-attribute-option .zoo-cw-attr-item:after {
            margin: -2px;
        }

        .woo-variation-swatches-stylesheet-enabled
        .variable-items-wrapper
        .variable-item:not(.radio-variable-item):hover
        .variable-item-span:after,
        .woo-variation-swatches-stylesheet-enabled
        .variable-items-wrapper
        .variable-item:not(.radio-variable-item).selected
        .variable-item-span:after,
        .woo-variation-swatches-stylesheet-enabled
        .variable-items-wrapper
        .variable-item:not(.radio-variable-item).selected:hover
        .variable-item-span:after,
        .woo-variation-swatches-stylesheet-enabled
        .variable-items-wrapper
        .image-variable-item:not(.radio-variable-item):hover
        img:before,
        .woo-variation-swatches-stylesheet-enabled
        .variable-items-wrapper
        .image-variable-item:not(.radio-variable-item).selected
        img:before,
        .woo-variation-swatches-stylesheet-enabled
        .variable-items-wrapper
        .image-variable-item:not(.radio-variable-item).selected:hover
        img:before,
        .zoo-cw-group-attribute
        .zoo-cw-attribute-option:hover
        .zoo-cw-attr-item:after,
        .zoo-cw-group-attribute
        .zoo-cw-attribute-option.zoo-cw-active
        .zoo-cw-attr-item:after {
            opacity: 1;
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1);
        }

        .zoo-cw-group-attribute.zoo-cw-type-text
        .zoo-cw-attribute-option
        .zoo-cw-attr-item {
            z-index: 0;
        }

        .zoo-cw-group-attribute.zoo-cw-type-text
        .zoo-cw-attribute-option
        .zoo-cw-attr-item:after {
            margin: 0;
            z-index: -1;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .zoo-cw-group-attribute.zoo-cw-type-text .zoo-cw-attribute-option:hover,
        .zoo-cw-group-attribute.zoo-cw-type-text
        .zoo-cw-attribute-option.zoo-cw-active {
            box-shadow: none;
        }

        .zoo-cw-group-attribute.zoo-cw-type-text
        .zoo-cw-attribute-option
        .zoo-cw-attr-item,
        .zoo-cw-group-attribute.attribute_pa_size
        .zoo-cw-attribute-option
        .zoo-cw-attr-item,
        .woo-variation-swatches-stylesheet-enabled
        .variable-items-wrapper
        .variable-item:not(.radio-variable-item).button-variable-item {
            height: auto;
            line-height: normal;
            padding: 0;
            width: auto;
        }

        .zoo-cw-group-attribute.zoo-cw-type-text
        .zoo-cw-attribute-option
        .zoo-cw-attr-item.zoo-cw-option-display-shape-circle,
        .zoo-cw-group-attribute.attribute_pa_size
        .zoo-cw-attribute-option
        .zoo-cw-attr-item.zoo-cw-option-display-shape-circle,
        .zoo-cw-group-attribute.zoo-cw-type-text
        .zoo-cw-attribute-option
        .zoo-cw-attr-item.zoo-cw-option-display-shape-circle:after,
        .zoo-cw-group-attribute.attribute_pa_size
        .zoo-cw-attribute-option
        .zoo-cw-attr-item.zoo-cw-option-display-shape-circle:after {
            border-radius: 10px;
        }

        .zoo-cw-group-attribute.zoo-cw-type-text
        .zoo-cw-attribute-option
        .zoo-cw-attr-item,
        .zoo-cw-group-attribute.attribute_pa_size
        .zoo-cw-attribute-option
        .zoo-cw-attr-item,
        .woo-variation-swatches-stylesheet-enabled
        .variable-items-wrapper
        .variable-item:not(.radio-variable-item).button-variable-item
        span {
            font-size: 14px;
            padding: 2px 8px;
            -webkit-border-radius: 3px;
            border-radius: 3px;
        }

        .zoo-cw-group-attribute.zoo-cw-type-text
        .zoo-cw-attribute-option
        .zoo-cw-attr-item
        .zoo-cw-label-text,
        .zoo-cw-group-attribute.attribute_pa_size
        .zoo-cw-attribute-option
        .zoo-cw-attr-item
        .zoo-cw-label-text {
            font-size: inherit;
            line-height: inherit;
        }

        .zoo-cw-attribute-option .zoo-cw-attr-item:before,
        .zoo-cw-attribute-option .zoo-cw-attr-item:hover:before,
        .woo-variation-swatches-stylesheet-enabled.woo-variation-swatches-attribute-behavior-blur
        .variable-item:not(.radio-variable-item).disabled:before,
        .woo-variation-swatches-stylesheet-enabled.woo-variation-swatches-attribute-behavior-blur
        .variable-item:not(.radio-variable-item).disabled:hover:before {
            background: none !important;
            color: red;
            content: "\2716" !important;
            height: 0;
            line-height: 0;
            margin: auto !important;
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            top: 0;
            text-align: center;
            width: 100%;
            -webkit-transform: scale(0);
            -moz-transform: scale(0);
            -ms-transform: scale(0);
            -o-transform: scale(0);
            transform: scale(0);
        }

        .zoo-cw-attribute-option.unavailable .zoo-cw-attr-item:before,
        .zoo-cw-attribute-option.unavailable .zoo-cw-attr-item:hover:before {
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1);
        }

        .zoo-cw-attribute-option.unavailable
        .zoo-cw-attr-item.zoo-cw-option-display-size-2:before,
        .zoo-cw-attribute-option.unavailable
        .zoo-cw-attr-item.zoo-cw-option-display-size-2:hover:before {
            font-size: 18px;
        }

        .zoo-cw-group-attribute.zoo-cw-type-text
        .zoo-cw-attribute-option:hover
        .zoo-cw-attr-item
        .zoo-cw-label-text,
        .zoo-cw-group-attribute.zoo-cw-type-text
        .zoo-cw-attribute-option.zoo-cw-active
        .zoo-cw-attr-item
        .zoo-cw-label-text {
            color: #fff;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .woo-variation-swatches-stylesheet-enabled.woo-variation-swatches-attribute-behavior-blur
        .variable-item:not(.radio-variable-item).disabled:after,
        .woo-variation-swatches-stylesheet-enabled.woo-variation-swatches-attribute-behavior-blur
        .variable-item:not(.radio-variable-item).disabled:hover:after {
            content: none !important;
        }

        .zoo-cw-gallery-loading {
            background-color: rgba(242, 242, 242, 0.6);
        }
        .zoo-cw-gallery-loading > * {
            opacity: 0 !important;
        }

        .zoo-cw-gallery-loading.wpb_wrapper,
        .zoo-cw-gallery-loading.elementor-widget-container {
            display: inline-block;
            height: 100%;
            position: relative;
        }

        /* #endregion - Product - Swatches */

        /*--------------------------------------------------------------*/
        /* #region - Product Single */
        /*--------------------------------------------------------------*/

        .woocommerce div.product div.images,
        .woocommerce div.product div.images div.thumbnails a {
            float: left;
        }

        .woocommerce div.product > div.summary {
            float: right;
        }

        .woocommerce div.product div.images div.thumbnails:after,
        .woocommerce div.product form.cart:after,
        .woocommerce div.product form.cart:before,
        .woocommerce div.product p.cart:after,
        .woocommerce div.product p.cart:before {
            content: "";
            display: table;
        }

        .mfx-product-image-gallery-holder {
            text-align: center;
        }
        .mfx-product-image-gallery-holder .mfx-product-image-gallery-thumb img {
            padding: 20px !important;
        }
        .mfx-product-image-gallery-holder
        .mfx-product-image-gallery-thumb-container {
            margin-top: 30px !important;
        }

        @media only screen and (min-width: 1281px) {
            .elementor-widget-mfx-shop-product-single-images-carousel
            .mfx-product-image-gallery-holder
            .mfx-product-image
            img {
                padding: 0 10%;
            }
        }

        /* #endregion - Product Single */

        /*--------------------------------------------------------------*/
        /* #region - Misc */
        /*--------------------------------------------------------------*/

        /* #region - Tables */
        .woocommerce table.shop_table {
            border-width: 0 0 1px;
            -webkit-border-radius: 0;
            border-radius: 0;
        }

        .woocommerce table.shop_table,
        .woocommerce table.shop_attributes {
            border-style: solid;
            border-width: 1px;
        }
        .woocommerce table.shop_attributes tr th {
            border-right: 1px solid rgba(var(--mfxBorderColorRgb), 0.15);
        }

        .woocommerce table.shop_attributes tr th,
        .woocommerce table.shop_attributes tr td {
            border-top: 1px solid rgba(var(--mfxBorderColorRgb), 0.15);
        }

        .woocommerce table.shop_attributes td {
            text-align: left;
        }

        .woocommerce table.shop_attributes tr:first-child td,
        .woocommerce table.shop_attributes tr:first-child th {
            border-top-width: 0;
        }

        .woocommerce table.shop_attributes th,
        .woocommerce table.shop_attributes td {
            padding: 15px 20px;
        }

        .woocommerce table.shop_table tbody th,
        .woocommerce table.shop_table tbody td,
        .woocommerce table.shop_table tfoot th,
        .woocommerce table.shop_table tfoot td,
        .woocommerce table.shop_attributes tr td,
        .woocommerce table.shop_attributes tr th {
            border-bottom-width: 0;
        }

        .woocommerce a.remove {
            display: inline-block;
            vertical-align: middle;
            font-weight: normal;
            height: 24px;
            line-height: 22px;
            width: 24px;
            margin-top: 0;
        }

        .woocommerce .shop_table tfoot th:last-child,
        .woocommerce .shop_table.cart tfoot th:last-child,
        .woocommerce table.shop_attributes tr:last-child th,
        .woocommerce table.shop_attributes tr:last-child td {
            border-bottom-color: transparent;
        }

        .woocommerce table.shop_table,
        .woocommerce-page table.shop_table {
            margin-bottom: 30px;
            border-width: 2px;
        }

        .woocommerce table.shop_table thead th,
        .woocommerce-page table.shop_table tbody td {
            border-left-width: 0;
            border-right-width: 0;
            text-align: left;
            vertical-align: middle;
            overflow-wrap: anywhere;
        }

        .woocommerce table.shop_table tr td > label,
        .woocommerce-page table.shop_table tr td > label {
            display: none;
        }

        .woocommerce table.shop_table tbody tr td,
        .woocommerce-page table.shop_table tbody tr td {
            border-bottom-width: 1px;
        }
        .woocommerce table.shop_table tbody tr:last-child td,
        .woocommerce-page table.shop_table tbody tr:last-child td {
            border-bottom-width: 0;
        }

        .woocommerce table.shop_table thead th,
        .woocommerce-page table.shop_table thead th {
            background: transparent;
            font-size: 14px;
            font-weight: 700;
            line-height: 30px;
            padding: 15px;
            text-transform: uppercase;
        }

        .woocommerce table.shop_table td,
        .woocommerce-page table.shop_table td {
            background: none;
            border-width: 0;
            padding: 15px;
        }

        .woocommerce table.shop_table thead th:first-child,
        .woocommerce-page table.shop_table thead th:first-child {
            padding-left: 30px;
            width: 150px;
        }

        .woocommerce table.shop_table tr td:first-child,
        .woocommerce-page table.shop_table tr td:first-child {
            padding-left: 30px;
        }

        .woocommerce table.shop_table tr td:last-child,
        .woocommerce-page table.shop_table tr td:last-child {
            padding-right: 30px;
        }

        .woocommerce table.shop_table tr td.product-remove,
        .woocommerce-page table.shop_table tr td.product-remove {
            width: 10px;
        }

        .woocommerce table.shop_table .product-thumbnail a,
        .woocommerce-page table.shop_table .product-thumbnail a {
            display: inline-block;
        }

        .woocommerce table.shop_table tbody td .woocommerce-Price-currencySymbol,
        .woocommerce-page
        table.shop_table
        tbody
        td
        .woocommerce-Price-currencySymbol {
            margin-right: 5px;
        }

        .woocommerce .shop_table tr td.product-stock-status > span {
            border: 1px solid;
            display: inline-block;
            font-size: 10px;
            font-weight: 500;
            letter-spacing: 2px;
            line-height: normal;
            padding: 14px 10px;
            text-align: center;
            text-transform: uppercase;
            width: 100%;
        }

        .woocommerce table tbody tr:nth-child(2n + 1),
        .woocommerce-page table tbody tr:nth-child(2n + 1) {
            background: none;
        }

        .woocommerce table.shop_table tr .woocommerce-remove-coupon {
            display: block;
        }

        /* Orders & Address Details */
        .woocommerce-page .woocommerce-customer-details {
            border-style: solid;
            border-width: 2px;
            margin: 0 0 20px;
            padding: 4px;
        }
        .woocommerce-page .woocommerce-customer-details .addresses {
            border-width: 0;
            padding: 0;
            margin-bottom: 0;
        }
        .woocommerce-page
        .woocommerce-customer-details
        .addresses
        .woocommerce-column {
            border-color: var(--mfxBorderColor);
            border-style: solid;
            border-width: 2px;
            margin: 0;
            padding: 4px !important;
        }

        .woocommerce-page.woocommerce-view-order
        .woocommerce-customer-details
        .addresses
        .woocommerce-column
        + .woocommerce-column {
            margin-top: 30px;
        }

        .woocommerce-page
        .woocommerce-customer-details
        .addresses
        address:last-child,
        .woocommerce-page
        .woocommerce-customer-details
        .addresses
        address
        p:last-child {
            margin-bottom: 0;
        }

        .woocommerce-page .woocommerce-customer-details address,
        .woocommerce-page .woocommerce-customer-details h2 {
            border-style: dashed;
            border-width: 2px;
            margin: 0 !important;
            padding: 20px;
        }

        .woocommerce-page .woocommerce-customer-details h2 {
            border-bottom-width: 0;
        }
        .woocommerce-page .woocommerce-customer-details address {
            border-top-width: 0;
            padding-top: 0;
        }

        .woocommerce
        .woocommerce-customer-details
        .woocommerce-customer-details--email,
        .woocommerce
        .woocommerce-customer-details
        .woocommerce-customer-details--phone {
            margin: 15px 0 0 !important;
        }

        .addresses .col-1 header,
        .addresses .col-2 header,
        .addresses .col-1 address,
        .addresses .col-2 address,
        .woocommerce-page
        .woocommerce-customer-details
        .addresses
        .woocommerce-column
        .woocommerce-column__title {
            border-color: var(--mfxBorderColor);
            border-style: dashed;
            border-width: 2px;
            padding: 10px 20px;
        }

        .woocommerce-page
        .woocommerce-customer-details
        .addresses
        .woocommerce-column
        .woocommerce-column__title {
            border-bottom-width: 0;
            margin: 0 0 -2px;
            padding: 20px;
            text-align: left;
        }

        .addresses .col-1 header,
        .addresses .col-2 header {
            border-bottom-width: 0;
        }

        .addresses .col-1 h3,
        .addresses .col-2 h3 {
            margin-bottom: 0;
        }
        .addresses .col-1 address,
        .addresses .col-2 address {
            margin-top: 0;
        }

        .woocommerce-address-fields .woocommerce-address-fields__field-wrapper {
            display: inline-block;
            margin-bottom: 20px;
            width: 100%;
        }

        .woocommerce-page .woocommerce-customer-details address {
            margin-top: 0;
        }

        .woocommerce-page .woocommerce-customer-details address:last-child,
        .woocommerce-page .woocommerce-customer-details address p:last-child {
            margin-bottom: 0;
        }

        .addresses .col-1 header,
        .addresses .col-2 header,
        .addresses .col-1 address,
        .addresses .col-2 address {
            border-top-width: 0;
            padding: 0 20px 10px;
        }

        .addresses .col-1 header,
        .addresses .col-2 header {
            border-bottom-width: 0;
        }
        .addresses .col-1 address,
        .addresses .col-2 address {
            margin-top: 0;
        }
        .addresses .col-1 h3,
        .addresses .col-2 h3 {
            margin-bottom: 0;
        }

        .woocommerce-page .woocommerce-customer-details,
        .woocommerce-page .woocommerce-customer-details h2,
        .woocommerce-page .woocommerce-customer-details address {
            border-color: var(--mfxBorderColor);
        }

        .woocommerce .shop_table.order_details th,
        .woocommerce .shop_table.order_details td {
            text-align: left;
        }

        .woocommerce-page .woocommerce-order-details {
            border: 2px solid;
            margin-bottom: 50px;
            overflow: hidden;
            padding: 60px;
        }
        .woocommerce-account .woocommerce-order-details {
            padding: 25px 35px;
        }

        .woocommerce
        .woocommerce-order-details
        .woocommerce-order-details__title {
            display: inline-block;
            margin-bottom: 20px;
        }
        .woocommerce-account
        .woocommerce-order-details
        .woocommerce-order-details__title {
            margin-bottom: 15px;
        }

        .woocommerce .shop_table.customer_details th,
        .woocommerce .shop_table.customer_details td {
            text-align: left;
        }

        .woocommerce-page
        .woocommerce-order-details
        .shop_table
        tr
        th:first-child,
        .woocommerce-page .woocommerce-order-details .shop_table tr th:last-child,
        .woocommerce-page
        .woocommerce-order-details
        .shop_table
        tr
        td:first-child,
        .woocommerce-page
        .woocommerce-order-details
        .shop_table
        tr
        td:last-child {
            border-left-width: 0;
            border-right-width: 0;
            font-size: 15px;
            line-height: 30px;
            padding: 20px 0;
            vertical-align: middle;
        }

        .woocommerce-page .woocommerce-order-details table.shop_table tr th,
        .woocommerce-page .woocommerce-order-details table.shop_table tr td {
            background: transparent;
            line-height: 30px;
            padding: 20px 50px 20px 0;
            vertical-align: middle;
        }

        .woocommerce
        .woocommerce-order-details
        table.shop_table.order_details
        thead
        th {
            border-top-width: 0;
            font-size: 16px;
            font-weight: bold;
        }

        .woocommerce
        .woocommerce-order-details
        .shop_table.order_details
        tfoot
        th {
            font-weight: 600;
            text-transform: capitalize;
        }

        .woocommerce
        .woocommerce-order-details
        .shop_table.order_details
        tfoot
        td {
            font-weight: 500;
        }

        .woocommerce-page
        .woocommerce-order-details
        table.shop_table
        tr
        th:last-child,
        .woocommerce-page
        .woocommerce-order-details
        table.shop_table
        tr
        td:last-child {
            text-align: right;
        }

        .woocommerce
        .woocommerce-order-details
        .shop_table.order_details
        small.shipped_via {
            display: block;
            margin-top: -8px;
        }
        .woocommerce
        .woocommerce-order-details
        .shop_table.order_details
        tr
        td.woocommerce-table__product-name {
            width: 66.66%;
        }
        .woocommerce
        .woocommerce-order-details
        .shop_table.order_details
        tr
        td.woocommerce-table__product-name
        a {
            font-weight: 600;
        }
        .woocommerce
        .woocommerce-order-details
        .shop_table.order_details
        td.product-name
        .product-quantity {
            display: inline-block;
            font-weight: 500;
        }

        .woocommerce
        .woocommerce-order-details
        .shop_table.order_details
        td.product-name
        .wc-item-meta {
            padding-left: 0;
        }
        .woocommerce
        .woocommerce-order-details
        .shop_table.order_details
        td.product-name
        .wc-item-meta
        li {
            display: inline-flex;
        }
        .woocommerce td.product-name .wc-item-meta dt,
        .woocommerce td.product-name .wc-item-meta dt + *,
        .woocommerce td.product-name dl.variation dt,
        .woocommerce td.product-name dl.variation dt + *,
        .woocommerce td.product-name .wc-item-meta .wc-item-meta-label,
        .woocommerce td.product-name .wc-item-meta .wc-item-meta-label + *,
        .woocommerce td.product-name dl.variation .wc-item-meta-label,
        .woocommerce td.product-name dl.variation .wc-item-meta-label + * {
            display: inline-block;
            float: none;
        }

        .woocommerce .woocommerce-order-details .shop_table.order_details {
            border-width: 0 !important;
            margin-bottom: 0;
        }
        .woocommerce
        .woocommerce-order-details
        .shop_table.order_details
        tfoot
        tr:last-child
        th,
        .woocommerce
        .woocommerce-order-details
        .shop_table.order_details
        tfoot
        tr:last-child
        td {
            padding-bottom: 10px;
        }

        .woocommerce .woocommerce-order-details + .woocommerce-customer-details,
        .woocommerce-page.woocommerce-view-order .woocommerce-customer-details,
        .woocommerce-page.woocommerce-order-received
        .woocommerce-customer-details {
            border-width: 0;
            padding: 0;
        }

        /* #endregion - Tables */

        /* #region - Forms */
        .woocommerce form .form-row {
            float: left;
            margin-bottom: 20px;
            padding: 0;
            width: 100%;
        }

        .woocommerce form .form-row-first,
        .woocommerce form .form-row-last {
            display: inline-block;
            overflow: visible;
            padding: 0;
            width: -webkit-calc(50% - 15px);
            width: -moz-calc(50% - 15px);
            width: calc(50% - 15px);
        }

        .woocommerce
        .woocommerce-form-coupon.checkout_coupon
        .form-row-last
        .button {
            margin: 0;
        }

        .woocommerce form .form-row-first {
            float: left;
        }
        .woocommerce form .form-row-last {
            float: right;
        }

        .woocommerce form .form-row input.input-text,
        .woocommerce form .form-row textarea {
            border: 1px solid var(--mfxBorderColor);
            line-height: var(--mfxLineHeight_Base);
            padding: var(--mfxInputPadding);
        }

        .woocommerce form .form-row textarea {
            height: 180px;
        }

        .woocommerce form .form-row.notes {
            margin-bottom: 0;
        }

        .woocommerce form p {
            display: inline-block;
            margin-bottom: 20px;
            position: relative;
            vertical-align: top;
            width: 100%;
        }

        .woocommerce select,
        .woocommerce form select,
        .woocommerce form .form-row select {
            padding-left: 12px;
        }
        .woocommerce form .form-row .select2-container {
            line-height: 38px;
            width: 100% !important;
        }

        .woocommerce form.lost_reset_password p,
        .woocommerce form .woocommerce-privacy-policy-text p {
            line-height: inherit;
        }

        .woocommerce
        form
        .woocommerce-privacy-policy-text
        p
        a.woocommerce-privacy-policy-link {
            position: relative;
        }
        .woocommerce
        form
        .woocommerce-privacy-policy-text
        p
        a.woocommerce-privacy-policy-link:before {
            position: absolute;
            content: "";
            display: block;
            bottom: 1px;
            width: 100%;
            background: currentColor;
            height: 1px;
            left: 0;
            right: 0;
        }

        .woocommerce form .form-row label,
        .woocommerce-page form .form-row label {
            display: inline-block;
            font-weight: normal;
        }

        .woocommerce form .form-row label:not(.checkbox),
        .woocommerce-page form .form-row label:not(.checkbox) {
            padding-bottom: 5px;
            margin-bottom: 5px;
            width: 100%;
        }

        .woocommerce form .form-row label.inline {
            display: inline-block;
            line-height: 18px;
            margin: 0;
            padding: 15px 20px;
        }

        .woocommerce-form__label-for-checkbox input[type="checkbox"] {
            margin-right: 10px;
            margin-top: -2px;
        }

        .woocommerce ul#shipping_method li,
        .woocommerce-checkout #payment ul.payment_methods li,
        .woocommerce ul#shipping_method li label,
        .woocommerce-checkout #payment ul.payment_methods li label {
            line-height: inherit;
        }

        .comment-form-mfx-privatepolicy input[type="checkbox"],
        .woocommerce form .form-row .input-checkbox,
        .woocommerce-form__label-for-checkbox input[type="checkbox"] {
            opacity: 0;
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .comment-form-mfx-privatepolicy input[type="checkbox"] ~ label,
        .woocommerce-form__label-for-checkbox > span,
        .woocommerce .woocommerce-shipping-methods input[type="radio"] ~ label,
        .woocommerce-page
        #payment.woocommerce-checkout-payment
        ul.payment_methods
        li
        input[type="radio"]
        ~ label {
            display: inline-block;
            line-height: var(--mfxLineHeight_Base);
            padding-left: 30px;
            position: relative;
        }

        .comment-form-mfx-privatepolicy input[type="checkbox"] ~ label::before,
        .woocommerce-form__label-for-checkbox > span::before,
        .woocommerce
        .woocommerce-shipping-methods
        input[type="radio"]
        ~ label::before,
        .woocommerce-page
        #payment.woocommerce-checkout-payment
        ul.payment_methods
        li
        input[type="radio"]
        ~ label::before {
            border-width: 2px;
            border-style: solid;
            content: "";
            height: 15px;
            left: 0;
            margin-top: 0;
            position: absolute;
            top: 10px;
            -webkit-border-radius: 1px;
            border-radius: 1px;
            -webkit-transition: 0.2s;
            transition: 0.2s;
            width: 15px;
            z-index: 0;
        }

        .comment-form-mfx-privatepolicy input[type="checkbox"] ~ label:before {
            top: 3px;
        }

        .comment-form-mfx-privatepolicy
        input[type="checkbox"]:checked
        ~ label::before,
        .woocommerce-form__label-for-checkbox
        .woocommerce-form__input-checkbox:checked
        + span:before,
        .woocommerce
        .woocommerce-shipping-methods
        li
        input[type="radio"]:checked
        + label:before,
        .woocommerce-page
        #payment.woocommerce-checkout-payment
        ul.payment_methods
        li
        input[type="radio"]:checked
        + label:before {
            background: none;
            border-bottom: 1px solid currentColor;
            border-left: 1px solid transparent;
            border-right: 1px solid currentColor;
            border-top: 1px solid transparent;
            height: 18px;
            left: -2px;
            top: 6px;
            width: 9px;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-transform: rotate(40deg);
            transform: rotate(40deg);
            -webkit-transform-origin: 100% 100%;
            transform-origin: 100% 100%;
        }

        .comment-form-mfx-privatepolicy
        input[type="checkbox"]:checked
        ~ label:before {
            top: -1px;
        }

        .woocommerce-shipping-fields
        #ship-to-different-address
        .woocommerce-form__label-for-checkbox
        > span {
            top: -2px;
            margin-left: -1px;
        }

        .woocommerce-shipping-fields
        #ship-to-different-address
        .woocommerce-form__label-for-checkbox
        .woocommerce-form__input-checkbox
        + span:before {
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .woocommerce-shipping-fields
        #ship-to-different-address
        .woocommerce-form__label-for-checkbox
        .woocommerce-form__input-checkbox:checked
        + span:before {
            top: 50%;
            -webkit-transform: translateY(-50%) rotate(40deg);
            transform: translateY(-50%) rotate(40deg);
        }

        .woocommerce .woocommerce-shipping-methods input[type="radio"],
        .woocommerce-page
        #payment.woocommerce-checkout-payment
        ul.payment_methods
        li
        input[type="radio"] {
            opacity: 0;
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .woocommerce-page
        #payment.woocommerce-checkout-payment
        ul.payment_methods
        li
        input[type="radio"] {
            position: absolute;
        }

        .woocommerce ul#shipping_method li > input[type="radio"] ~ label,
        .woocommerce
        .woocommerce-shipping-methods
        li
        > input[type="radio"]
        ~ label,
        .woocommerce-page
        #payment.woocommerce-checkout-payment
        ul.payment_methods
        li
        input[type="radio"]
        ~ label {
            display: inline-block;
            font-weight: 500;
            letter-spacing: 0.5px;
            vertical-align: middle;
            cursor: pointer;
            position: relative;
            top: -1px;
        }

        #add_payment_method .cart-collaterals .shipping-calculator-button::after,
        .woocommerce-cart .cart-collaterals .shipping-calculator-button::after,
        .woocommerce-checkout
        .cart-collaterals
        .shipping-calculator-button::after {
            content: none;
        }

        /* Color - Border */
        .woocommerce-form__label-for-checkbox > span:before,
        .woocommerce
        .woocommerce-shipping-methods
        li
        > input[type="radio"]
        ~ label:before,
        .woocommerce-page
        #payment.woocommerce-checkout-payment
        ul.payment_methods
        li
        input[type="radio"]
        ~ label:before {
            border-color: var(--mfxBorderColor);
        }

        /* Color - Color */
        .woocommerce
        .woocommerce-shipping-methods
        li
        > input[type="radio"]
        ~ label,
        .woocommerce-page
        #payment.woocommerce-checkout-payment
        ul.payment_methods
        li
        input[type="radio"]
        ~ label {
            color: rgba(var(--mfxHeadAltColorRgb), 0.8);
        }

        .woocommerce
        .woocommerce-shipping-methods
        li
        > input[type="radio"]
        ~ label:hover,
        .woocommerce
        .woocommerce-shipping-methods
        li
        > input[type="radio"]:checked
        + label,
        .woocommerce-page
        #payment.woocommerce-checkout-payment
        ul.payment_methods
        li
        input[type="radio"]
        ~ label:hover,
        .woocommerce-page
        #payment.woocommerce-checkout-payment
        ul.payment_methods
        li
        input[type="radio"]:checked
        + label {
            color: var(--mfxHeadAltColor);
        }

        /* Accent - Primary */
        .comment-form-mfx-privatepolicy input[type="checkbox"] ~ label::before,
        .woocommerce-form__label-for-checkbox > span::before,
        .woocommerce
        .woocommerce-shipping-methods
        input[type="radio"]
        ~ label::before,
        .woocommerce-page
        #payment.woocommerce-checkout-payment
        ul.payment_methods
        li
        input[type="radio"]
        ~ label::before,
        .woocommerce form.login .woocommerce-form-row label:before,
        .woocommerce form.register .woocommerce-form-row label:before {
            color: var(--mfxPrimaryColor);
        }

        /* #endregion - Forms */

        /* #region - Buttons */

        .woocommerce a.button,
        .woocommerce button.button,
        .woocommerce input.button,
        .woocommerce #respond input#submit,
        #add_payment_method .wc-proceed-to-checkout a.checkout-button,
        .woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
        .woocommerce-checkout .wc-proceed-to-checkout a.checkout-button,
        .woocommerce
        ul.products
        li.product
        .product-buttons-wrapper.product-button
        a,
        .woocommerce
        ul.products
        li.product
        .product-buttons-wrapper.product-button
        a.button,
        .woocommerce
        ul.products
        li.product
        .product-buttons-wrapper.product-button
        button,
        .woocommerce
        ul.products
        li.product
        .product-buttons-wrapper.product-button
        button.button,
        .woocommerce
        ul.products
        li.product
        .product-buttons-wrapper.product-button
        .button,
        .woocommerce .product .summary .yith-wcwl-add-to-wishlist a,
        .woocommerce .product .summary .compare,
        .woocommerce .product .summary .yith-wcqv-button,
        .woocommerce .product .summary .mfx-wcsg-button {
            cursor: pointer;
            display: inline-block;
            float: none;
            position: relative;
            outline: none;
        }

        .woocommerce
        ul.products
        li.product
        .product-buttons-wrapper.product-button
        a,
        .woocommerce
        ul.products
        li.product
        .product-buttons-wrapper.product-button
        a.button,
        .woocommerce
        ul.products
        li.product
        .product-buttons-wrapper.product-button
        button,
        .woocommerce
        ul.products
        li.product
        .product-buttons-wrapper.product-button
        button.button,
        .woocommerce
        ul.products
        li.product
        .product-buttons-wrapper.product-button
        .button,
        .woocommerce
        ul.products
        li.product
        .product-element-group-items
        .wc_btn_inline
        a,
        .woocommerce
        ul.products
        li.product
        .product-element-group-items
        .wc_btn_inline
        a.button,
        .woocommerce
        ul.products
        li.product
        .product-element-group-items
        .wc_btn_inline
        button,
        .woocommerce
        ul.products
        li.product
        .product-element-group-items
        .wc_btn_inline
        button.button,
        .woocommerce
        ul.products
        li.product
        .product-element-group-items
        .wc_btn_inline
        .button {
            letter-spacing: 0;
            margin-top: 0;
        }

        .woocommerce form .button,
        .woocommerce table .button,
        .woocommerce form .button.alt,
        .woocommerce table .button.alt {
            margin-top: 0;
        }

        .woocommerce .product .summary .compare,
        .woocommerce .product .summary .wccm_btn_wrapper a.compare,
        .woocommerce .product .summary .yith-wcwl-add-to-wishlist a,
        .woocommerce .product .summary .wcqv_btn_wrapper a.button,
        .woocommerce .product .summary .wcsg_btn_wrapper a.button {
            margin: 8px 0;
        }

        .yith-wcwl-add-to-wishlist {
            display: inline-block !important;
            margin-top: 0;
        }
        .yith-wcwl-add-to-wishlist .yith-wcwl-add-button {
            display: inline-block !important;
            position: relative;
        }
        .yith-wcwl-add-to-wishlist .yith-wcwl-add-button img {
            margin: auto;
            position: absolute;
            left: 0;
            right: 0;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }
        .yith-wcwl-add-to-wishlist .yith-wcwl-add-button.hide {
            display: none !important;
        }
        .yith-wcwl-add-to-wishlist .feedback {
            display: none;
            margin-bottom: 8px;
        }
        .yith-wcwl-add-to-wishlist a .yith-wcwl-icon {
            display: none;
        }

        .woocommerce .button.loading:after,
        .woocommerce button.button.loading:after,
        .woocommerce input.button.loading::after,
        .woocommerce a.button.loading::after,
        .woocommerce #respond input#submit.loading:after {
            content: "\f110";
            display: inline-block;
            font-family: "Mfx Icons";
            font-size: 16px;
            margin-left: 10px;
            position: relative;
            right: auto;
            top: auto;
            vertical-align: middle;
        }

        .woocommerce a.button.disabled,
        .woocommerce a.button:disabled,
        .woocommerce a.button:disabled[disabled],
        .woocommerce button.button.disabled,
        .woocommerce button.button:disabled,
        .woocommerce button.button:disabled[disabled],
        .woocommerce input.button.disabled,
        .woocommerce input.button:disabled,
        .woocommerce input.button:disabled[disabled],
        .woocommerce #respond input#submit.disabled,
        .woocommerce #respond input#submit:disabled,
        .woocommerce #respond input#submit:disabled[disabled],
        .woocommerce a.button.alt.disabled,
        .woocommerce a.button.alt:disabled,
        .woocommerce a.button.alt:disabled[disabled],
        .woocommerce button.button.alt.disabled,
        .woocommerce button.button.alt:disabled,
        .woocommerce button.button.alt:disabled[disabled],
        .woocommerce input.button.alt.disabled,
        .woocommerce input.button.alt:disabled,
        .woocommerce input.button.alt:disabled[disabled],
        .woocommerce #respond input#submit.alt.disabled,
        .woocommerce #respond input#submit.alt:disabled,
        .woocommerce #respond input#submit.alt:disabled[disabled] {
            cursor: not-allowed !important;
            opacity: 0.6;
        }

        .woocommerce a.button,
        .woocommerce button.button,
        .woocommerce input.button,
        .woocommerce #respond input#submit,
        .woocommerce a.button.alt,
        .woocommerce button.button.alt,
        .woocommerce input.button.alt,
        .woocommerce #respond input#submit.alt,
        .woocommerce a.button.disabled,
        .woocommerce a.button:disabled,
        .woocommerce a.button:disabled[disabled],
        .woocommerce button.button.disabled,
        .woocommerce button.button:disabled,
        .woocommerce button.button:disabled[disabled],
        .woocommerce input.button.disabled,
        .woocommerce input.button:disabled,
        .woocommerce input.button:disabled[disabled],
        .woocommerce #respond input#submit.disabled,
        .woocommerce #respond input#submit:disabled,
        .woocommerce #respond input#submit:disabled[disabled],
        .woocommerce a.button.alt.disabled,
        .woocommerce a.button.alt:disabled,
        .woocommerce a.button.alt[disabled]:disabled,
        .woocommerce button.button.alt.disabled,
        .woocommerce button.button.alt:disabled,
        .woocommerce button.button.alt[disabled]:disabled,
        .woocommerce input.button.alt.disabled,
        .woocommerce input.button.alt:disabled,
        .woocommerce input.button.alt[disabled]:disabled,
        .woocommerce #respond input#submit.alt.disabled,
        .woocommerce #respond input#submit.alt:disabled,
        .woocommerce #respond input#submit.alt[disabled]:disabled,
        .yith-wcwl-add-to-wishlist a,
        .yith-wcqv-button,
        .mfx-wcsg-button,
        .woocommerce .wishlist_table .add_to_cart.button,
        .woocommerce .yith-wcwl-popup-button a.add_to_wishlist,
        .woocommerce .wishlist_table a.ask-an-estimate-button,
        .woocommerce .wishlist-title a.show-title-form,
        .woocommerce .hidden-title-form a.hide-title-form,
        .woocommerce .hidden-title-form a.save-title-form,
        .woocommerce .wishlist_manage_table a.create-new-wishlist,
        .woocommerce a.added_to_cart {
            background-color: var(--mfxHeadAltColor);
            color: var(--mfxAccentTxtColor);
            border-width: 0;
            cursor: pointer;
            display: inline-block;
            float: none;
            font-family: var(--mfxFontTypo_Base);
            font-size: 0.8em;
            font-style: normal;
            font-weight: normal;
            line-height: 1.5;
            margin: 10px 0 0;
            outline: none;
            padding: var(--mfxPadding_Btn);
            position: relative;
            text-align: center !important;
            text-transform: uppercase;
            -webkit-appearance: none;
            appearance: none;
            -webkit-border-radius: var(--mfxRadius_Part);
            border-radius: var(--mfxRadius_Part);
            letter-spacing: 0.06em;
        }

        /* Hover */
        .woocommerce a.button:hover,
        .woocommerce button.button:hover,
        .woocommerce input.button:hover,
        .woocommerce #respond input#submit:hover,
        .woocommerce a.button.alt:hover,
        .woocommerce button.button.alt:hover,
        .woocommerce input.button.alt:hover,
        .woocommerce #respond input#submit.alt:hover,
        .woocommerce a.button.disabled:hover,
        .woocommerce a.button:disabled:hover,
        .woocommerce a.button:disabled[disabled]:hover,
        .woocommerce button.button.disabled:hover,
        .woocommerce button.button:disabled:hover,
        .woocommerce button.button:disabled[disabled]:hover,
        .woocommerce input.button.disabled:hover,
        .woocommerce input.button:disabled:hover,
        .woocommerce input.button:disabled[disabled]:hover,
        .woocommerce #respond input#submit.disabled:hover,
        .woocommerce #respond input#submit:disabled:hover,
        .woocommerce #respond input#submit:disabled[disabled]:hover,
        .woocommerce a.button.alt.disabled:hover,
        .woocommerce a.button.alt:disabled:hover,
        .woocommerce a.button.alt[disabled]:disabled:hover,
        .woocommerce button.button.alt.disabled:hover,
        .woocommerce button.button.alt:disabled:hover,
        .woocommerce button.button.alt[disabled]:disabled:hover,
        .woocommerce input.button.alt.disabled:hover,
        .woocommerce input.button.alt:disabled:hover,
        .woocommerce input.button.alt[disabled]:disabled:hover,
        .woocommerce #respond input#submit.alt.disabled:hover,
        .woocommerce #respond input#submit.alt:disabled:hover,
        .woocommerce #respond input#submit.alt[disabled]:disabled:hover,
        .yith-wcwl-add-to-wishlist a:hover,
        .yith-wcqv-button:hover,
        .mfx-wcsg-button:hover,
        .woocommerce .wishlist_table .add_to_cart.button:hover,
        .woocommerce .yith-wcwl-popup-button a.add_to_wishlist:hover,
        .woocommerce .wishlist_table a.ask-an-estimate-button:hover,
        .woocommerce .wishlist-title a.show-title-form:hover,
        .woocommerce .hidden-title-form a.hide-title-form:hover,
        .woocommerce .hidden-title-form a.save-title-form:hover,
        .woocommerce .wishlist_manage_table a.create-new-wishlist:hover,
        .woocommerce a.added_to_cart:hover {
            background-color: rgba(var(--mfxHeadAltColorRgb), 0.75);
            color: var(--mfxAccentTxtColor);
        }

        /* #endregion - Buttons */

        /* #region - Product Quantity */
        .woocommerce .quantity,
        .woocommerce-page .quantity {
            margin: 0 auto;
            overflow: hidden;
            position: relative;
            width: auto;
        }
        .woocommerce .quantity .qty,
        .woocommerce-page .quantity .qty,
        .woocommerce .quantity input,
        .woocommerce-page .quantity input {
            display: inline-block;
            float: left;
            font-weight: bold;
            margin-top: 0;
            min-height: 60px;
            padding: 0;
            vertical-align: middle;
            width: 45px;
            -webkit-box-shadow: 0 0 0 1px rgba(var(--mfxBorderColorRgb), 0.15) inset;
            box-shadow: 0 0 0 1px rgba(var(--mfxBorderColorRgb), 0.15) inset;
        }

        .woocommerce .woocommerce-grouped-product-list .quantity input,
        .woocommerce-page .woocommerce-grouped-product-list .quantity input {
            width: 40px;
        }

        .woocommerce .cart .quantity .qty,
        .woocommerce-page .cart .quantity .qty {
            text-align: center;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            -ms-box-shadow: none;
            -o-box-shadow: none;
            box-shadow: none;
            background-color: var(--mfxAccentTxtColor);
        }

        .woocommerce div.quantity > a {
            border-width: 0;
        }

        .woocommerce .quantity input:not(.qty) {
            color: var(--mfxBodyTxtColor);
            font-size: 22px;
            font-weight: normal;
            padding: 0;
            text-align: center;
        }

        .woocommerce div.product form.cart div.quantity,
        .woocommerce div.product form.cart div.quantity ~ a,
        .woocommerce div.product form.cart div.quantity ~ a.button,
        .woocommerce div.product form.cart div.quantity ~ button,
        .woocommerce div.product form.cart div.quantity ~ button.button,
        .woocommerce div.product form.cart div.quantity ~ .button {
            display: inline-block;
            float: none;
            vertical-align: middle;
        }

        .woocommerce div.product form.cart div.quantity {
            margin-right: 10px;
        }

        .woocommerce
        div.product
        form.cart
        + .yith-wcwl-add-to-wishlist
        .yith-wcwl-add-button
        a {
            margin-top: 0;
        }

        .woocommerce div.quantity .qty {
            font-size: 1.125rem;
            font-weight: 400;
        }
        .woocommerce div.quantity > a[class*="arrow"] {
            height: 20px;
        }
        .woocommerce div.quantity > a:focus {
            outline: thin dotted;
        }

        .woocommerce div.quantity:not(.quantity-with-plusminus) .qty,
        .woocommerce-page div.quantity:not(.quantity-with-plusminus) .qty,
        .woocommerce div.quantity:not(.quantity-with-plusminus) input,
        .woocommerce-page div.quantity:not(.quantity-with-plusminus) input {
            padding: 10px 30px;
            text-align: left;
            width: 155px;
        }

        .woocommerce
        div.quantity:not(.quantity-with-plusminus)
        > a[class*="arrow"] {
            background: transparent !important;
            border-width: 0;
        }
        .woocommerce
        div.quantity:not(.quantity-with-plusminus)
        > a[class*="arrow"]
        > i {
            position: absolute;
            left: 0;
            right: 0;
        }
        .woocommerce
        div.quantity:not(.quantity-with-plusminus)
        > a[class*="arrow"]
        > i:before {
            display: block;
        }
        .woocommerce
        div.quantity:not(.quantity-with-plusminus)
        > a.arrow-plus
        > i {
            bottom: 0;
        }
        .woocommerce
        div.quantity:not(.quantity-with-plusminus)
        > a.arrow-minus
        > i {
            top: 0;
        }

        .woocommerce
        div.quantity:not(.quantity-with-plusminus)
        > a[class*="arrow"]
        > i.mfxicon-caret-up:before,
        .woocommerce
        div.quantity:not(.quantity-with-plusminus)
        > a[class*="arrow"]
        > i.mfxicon-caret-down:before {
            content: "";
            background-image: url("data:image/svg+xml,%3C%3Fxml version='1.0' standalone='no'%3F%3E%3C!DOCTYPE svg PUBLIC '-//W3C//DTD SVG 20010904//EN' 'http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd'%3E%3Csvg version='1.0' xmlns='http://www.w3.org/2000/svg' width='973.000000pt' height='559.000000pt' viewBox='0 0 973.000000 559.000000' preserveAspectRatio='xMidYMid meet'%3E%3Cg transform='translate(0.000000,559.000000) scale(0.100000,-0.100000)'%0Afill='%23000000' stroke='none'%3E%3Cpath d='M193 5378 c101 -117 1182 -1372 2402 -2788 1220 -1416 2221 -2576%0A2225 -2578 6 -2 4794 5456 4873 5555 l18 23 -448 -1 -448 0 -1157 -1302 c-636%0A-716 -1528 -1719 -1982 -2229 l-825 -928 -1967 2228 -1968 2227 -453 3 -454 2%0A184 -212z'/%3E%3C/g%3E%3C/svg%3E%0A");
            background-size: 9px 5px;
            width: 9px;
            height: 5px;
            background-repeat: no-repeat;
        }
        .woocommerce
        div.quantity:not(.quantity-with-plusminus)
        > a[class*="arrow"]
        > i.mfxicon-caret-up:before {
            transform: rotate(180deg);
        }

        .woocommerce .product > .summary form.cart div.quantity ~ .button {
            margin: 0;
        }

        /* Quantity - Shop Call-to-action Pages */
        .woocommerce table.shop_table tbody td .quantity,
        .woocommerce-page table.shop_table tbody td .quantity,
        .woocommerce table.shop_table.cart tbody td .quantity,
        .woocommerce-page table.shop_table.cart tbody td .quantity {
            display: inline-block;
            margin: 0;
            overflow: hidden;
            position: relative;
            text-align: center;
            vertical-align: middle;
        }

        .woocommerce table.shop_table tbody td .quantity > label,
        .woocommerce-page table.shop_table tbody td .quantity > label,
        .woocommerce table.shop_table.cart tbody td .quantity > label,
        .woocommerce-page table.shop_table.cart tbody td .quantity > label {
            display: none;
        }

        .woocommerce table.shop_table tbody td .quantity .qty,
        .woocommerce-page table.shop_table tbody td .quantity .qty,
        .woocommerce table.shop_table.cart tbody td .quantity .qty,
        .woocommerce-page table.shop_table.cart tbody td .quantity .qty {
            float: left;
            font-size: var(--mfxFontSize_Base);
            font-weight: normal;
        }

        .woocommerce .cart .quantity > a[class*="arrow"],
        .woocommerce-page .cart .quantity > a[class*="arrow"] {
            float: left;
            font-size: 15px;
            height: 20px;
            line-height: 20px;
            margin: 0 !important;
            padding: 0;
            position: absolute !important;
            right: 20px;
            text-align: center;
            top: 0;
            width: 20px;
        }

        .woocommerce .cart .quantity > a.arrow-minus,
        .woocommerce-page .cart .quantity > a.arrow-minus {
            bottom: 0;
            line-height: 0;
            top: auto;
        }

        /* Quantity PlusMinus */
        .woocommerce div.product form.cart div.quantity.quantity-with-plusminus {
            width: auto;
        }

        .woocommerce .quantity.quantity-with-plusminus,
        .woocommerce-page .quantity.quantity-with-plusminus {
            border: 1px solid rgba(var(--mfxBorderColorRgb), 0.15);
        }
        .woocommerce .quantity.quantity-with-plusminus input.qty,
        .woocommerce-page .quantity.quantity-with-plusminus input.qty {
            font-weight: normal;
            text-align: center;
        }

        .woocommerce .quantity.quantity-with-plusminus .qty,
        .woocommerce-page .quantity.quantity-with-plusminus .qty,
        .woocommerce .quantity.quantity-with-plusminus input,
        .woocommerce-page .quantity.quantity-with-plusminus input {
            border-width: 0;
            float: left;
            margin: 0;
            -webkit-border-radius: 0;
            border-radius: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .woocommerce .quantity.quantity-with-plusminus input.plus,
        .woocommerce-page .quantity.quantity-with-plusminus input.plus {
            font-size: 18px;
        }

        .woocommerce .quantity.quantity-with-plusminus input.minus:hover,
        .woocommerce-page .quantity.quantity-with-plusminus input.minus:hover,
        .woocommerce .quantity.quantity-with-plusminus input.plus:hover,
        .woocommerce-page .quantity.quantity-with-plusminus input.plus:hover {
            color: var(--mfxHeadAltColor);
        }

        .woocommerce .cart .quantity.quantity-with-plusminus .qty,
        .woocommerce-page .cart .quantity.quantity-with-plusminus .qty {
            border-style: solid;
            border-width: 0 1px;
        }

        .woocommerce .quantity.quantity-with-plusminus .qty,
        .woocommerce-page .quantity.quantity-with-plusminus .qty,
        .woocommerce .quantity.quantity-with-plusminus input,
        .woocommerce-page .quantity.quantity-with-plusminus input,
        .woocommerce .cart .quantity.quantity-with-plusminus .qty:focus,
        .woocommerce-page .cart .quantity.quantity-with-plusminus .qty:focus {
            border-color: var(--mfxBorderColor);
        }

        /* Quantity PlusMinus - Shop Call-to-action Pages */
        .woocommerce
        table.shop_table
        tbody
        td
        .quantity.quantity-with-plusminus
        input[type="button"],
        .woocommerce-page
        table.shop_table
        tbody
        td
        .quantity.quantity-with-plusminus
        input[type="button"],
        .woocommerce
        table.shop_table.cart
        tbody
        td
        .quantity.quantity-with-plusminus
        input[type="button"],
        .woocommerce-page
        table.shop_table.cart
        tbody
        td
        .quantity.quantity-with-plusminus
        input[type="button"] {
            width: 40px;
        }

        .woocommerce .quantity.quantity-with-plusminus .qty:hover,
        .woocommerce-page .quantity.quantity-with-plusminus .qty:hover,
        .woocommerce .quantity.quantity-with-plusminus input:hover,
        .woocommerce-page .quantity.quantity-with-plusminus input:hover,
        .woocommerce
        table.shop_table.cart
        .quantity.quantity-with-plusminus
        input:hover,
        .woocommerce-page
        table.shop_table.cart
        .quantity.quantity-with-plusminus
        input:hover {
            background: none;
        }

        .woocommerce .cart .quantity > a[class*="arrow"],
        .woocommerce-page .cart .quantity > a[class*="arrow"],
        .woocommerce.single-product
        div.product
        .cart
        .quantity
        > a[class*="arrow"] {
            color: var(--mfxHeadAltColor);
        }

        .woocommerce .cart .quantity > a[class*="arrow"]:hover,
        .woocommerce-page .cart .quantity > a[class*="arrow"]:hover,
        .woocommerce.single-product
        div.product
        .cart
        .quantity
        > a[class*="arrow"]:hover,
        .woocommerce .quantity.quantity-with-plusminus input:not(.qty):hover,
        .woocommerce-page .quantity.quantity-with-plusminus input:not(.qty):hover,
        .woocommerce-page table.shop_table.cart .quantity > a:hover i,
        .woocommerce-page
        .woocommerce
        table.shop_table
        tbody
        td
        .quantity
        > a:hover {
            color: var(--mfxPrimaryColor);
        }

        .woocommerce .quantity-with-arrows input[type="number"],
        .woocommerce-page .quantity-with-arrows input[type="number"],
        .woocommerce .quantity-with-plusminus input[type="number"],
        .woocommerce-page .quantity-with-plusminus input[type="number"] {
            -webkit-appearance: none;
            appearance: none;
        }

        /* Webkit browsers like Safari and Chrome */
        .woocommerce
        .quantity.quantity-with-arrows
        input[type="number"]::-webkit-inner-spin-button,
        .woocommerce
        .quantity.quantity-with-arrows
        input[type="number"]::-webkit-outer-spin-button,
        .woocommerce
        .quantity.quantity-with-plusminus
        input[type="number"]::-webkit-inner-spin-button,
        .woocommerce
        .quantity.quantity-with-plusminus
        input[type="number"]::-webkit-outer-spin-button {
            margin: 0;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        /* For Firefox */
        .woocommerce .quantity.quantity-with-arrows input[type="number"],
        .woocommerce .quantity.quantity-with-plusminus input[type="number"] {
            -moz-appearance: textfield;
        }

        .woocommerce .quantity.quantity-with-arrows noindex:-o-prefocus,
        .woocommerce .quantity.quantity-with-arrows input[type="number"],
        .woocommerce .quantity.quantity-with-plusminus noindex:-o-prefocus,
        .woocommerce .quantity.quantity-with-plusminus input[type="number"] {
            padding-right: 1.2em;
        }

        /* #endregion - Quantity */

        /* #region - Notices */
        .woocommerce .woocommerce-message,
        .woocommerce .woocommerce-info,
        .woocommerce .woocommerce-error,
        .woocommerce-notice {
            clear: both;
            display: inline-block;
            letter-spacing: 0;
            margin: 0 0 30px !important;
            padding: 20px 30px !important;
            position: relative;
            width: 100%;
            z-index: 1;
        }

        .woocommerce .woocommerce-message,
        .woocommerce .woocommerce-info,
        .woocommerce .woocommerce-error {
            background-color: #fafafa !important;
            border-width: 3px 0 0;
        }

        .woocommerce-notice {
            background-color: var(--mfxAccentTxtColor);
            border-left: 5px solid;
        }

        .woocommerce-notices-wrapper .woocommerce-message,
        .woocommerce-notices-wrapper .woocommerce-info,
        .woocommerce-notices-wrapper .woocommerce-error,
        .woocommerce-notice {
            -webkit-box-shadow: 0 0 3px rgba(var(--mfxBorderColorRgb), 0.15);
            box-shadow: 0 0 3px rgba(var(--mfxBorderColorRgb), 0.15);
        }

        .woocommerce .woocommerce-error:before,
        .woocommerce .woocommerce-error:after,
        .woocommerce .woocommerce-info:before,
        .woocommerce .woocommerce-info:after,
        .woocommerce .woocommerce-message:before,
        .woocommerce .woocommerce-message:after {
            content: none;
        }

        .woocommerce .woocommerce-error > a,
        .woocommerce .woocommerce-info > a,
        .woocommerce .woocommerce-message > a {
            display: inline-block;
            line-height: normal;
            position: relative;
            text-decoration: none;
            -webkit-box-shadow: 0 -1px 0 var(--mfxHeadAltColor) inset;
            box-shadow: 0 -1px 0 var(--mfxHeadAltColor) inset;
        }

        .woocommerce .woocommerce-error > a:focus,
        .woocommerce .woocommerce-error > a:hover,
        .woocommerce .woocommerce-info > a:focus,
        .woocommerce .woocommerce-info > a:hover,
        .woocommerce .woocommerce-message > a:focus,
        .woocommerce .woocommerce-message > a:hover {
            outline: none;
            text-decoration: none !important;
            -webkit-box-shadow: 0 2px 0 var(--mfxBorderColor);
            box-shadow: 0 2px 0 var(--mfxBorderColor);
        }

        .woocommerce .woocommerce-error .button,
        .woocommerce .woocommerce-info .button,
        .woocommerce .woocommerce-message .button {
            background: transparent;
            display: inline-block;
            float: right;
            font-size: 14px;
            line-height: 24px;
            margin: 0;
            padding: 0;
            text-transform: capitalize;
            -webkit-border-radius: var(--mfxRadius_Zero);
            border-radius: var(--mfxRadius_Zero);
        }

        .woocommerce .woocommerce-error .button:focus,
        .woocommerce .woocommerce-info .button:focus,
        .woocommerce .woocommerce-message .button:focus {
            outline: none;
            text-decoration: none !important;
        }

        .woocommerce .woocommerce-error .button:hover,
        .woocommerce .woocommerce-info .button:hover,
        .woocommerce .woocommerce-message .button:hover {
            background: transparent;
            color: rgba(var(--mfxHeadAltColorRgb), 0.7) !important;
        }

        .woocommerce .woocommerce-message,
        .woocommerce-notice.woocommerce-notice--success {
            border-color: #3db44c;
        }
        .woocommerce .woocommerce-error,
        .woocommerce-notice.woocommerce-notice--error {
            border-color: #e0352d;
        }
        .woocommerce .woocommerce-info,
        .woocommerce-notice.woocommerce-notice--info {
            border-color: #019ed5;
        }
        .woocommerce-notice.woocommerce-notice--warning {
            border-color: #fb0;
        }

        .woocommerce .woocommerce-error,
        .woocommerce .woocommerce-info,
        .woocommerce .woocommerce-message,
        .woocommerce .woocommerce-error > a,
        .woocommerce .woocommerce-info > a,
        .woocommerce .woocommerce-message > a {
            color: var(--mfxHeadAltColor);
        }

        .woocommerce-checkout-header
        ~ form.woocommerce-checkout
        .woocommerce-NoticeGroup {
            margin-top: 30px;
        }

        /* #endregion - Notices */

        /* #region - Typography */

        .woocommerce div.product .product_title {
            font-size: 2rem;
        }

        .woocommerce div.product .mfx-product-tabs .woocommerce-tabs .panel > h2,
        .woocommerce div.product .mfx-product-tabs .woocommerce-Reviews-title,
        .woocommerce div.product .mfx-product-tabs-exploded > h2,
        .woocommerce #reviews #comments h2,
        .related.products > h2,
        .upsells.products > h2,
        .woocommerce .wishlist-title h2,
        .woocommerce #customer_login.col2-set h2 {
            font-size: 1.6rem;
        }

        .related.products > h2,
        .upsells.products > h2 {
            margin-bottom: 1em;
        }

        .woocommerce #review_form #respond .comment-reply-title,
        .mfx-shop-single-sticky-addtocart-info > h3,
        .woocommerce-billing-fields h3,
        .woocommerce-additional-fields > h3,
        .woocommerce-shipping-fields h2,
        .woocommerce .mfx-cart-coupon-holder .coupon label,
        .woocommerce .cart-collaterals .cart_totals h2,
        .woocommerce .cart-collaterals .cross-sells h2,
        #order_review_heading,
        .woocommerce-account .woocommerce-MyAccount-content form h3,
        .woocommerce-order-downloads__title {
            font-size: 1.6rem;
        }

        .woocommerce-shipping-fields #ship-to-different-address,
        .woocommerce
        .woocommerce-order-details
        .woocommerce-order-details__title {
            font-size: 1.45rem;
        }

        .woocommerce
        ul.products
        li.product
        .product-thumb-content
        .product-title
        h5,
        .woocommerce ul.products li.product .product-details .product-title h5,
        .woocommerce ul.products li.product-category .product-wrapper h3,
        .woocommerce
        .related.products
        ul.products
        li.product
        .product-details
        .product-title
        h5,
        .woocommerce-page
        .related.products
        ul.products
        li.product
        .product-details
        .product-title
        h5,
        .woocommerce
        .cart-collaterals
        .cross-sells
        ul.products.default-shop
        li.product
        .product-details
        > .product-title
        h5,
        .woocommerce-page
        .cart-collaterals
        .cross-sells
        ul.products.default-shop
        li.product
        .product-details
        > .product-title
        h5 {
            font-size: 1.375rem;
        }

        .woocommerce-page .woocommerce-customer-details h2,
        .woocommerce-account
        .woocommerce-MyAccount-content
        .woocommerce-Addresses
        h3,
        .woocommerce-page
        .woocommerce-customer-details
        .addresses
        .woocommerce-column
        .woocommerce-column__title,
        .woocommerce-account .woocommerce-MyAccount-content fieldset legend {
            font-size: 1.25rem;
        }

        .woocommerce .related.products h2,
        .woocommerce-page .related.products h2,
        .woocommerce .cart-collaterals .cross-sells h2,
        .woocommerce-page .cart-collaterals .cross-sells h2 {
            display: inline-block;
            margin: 0 0 50px;
            width: 100%;
        }

        /* .woocommerce .mfx-cart-coupon-holder .coupon label { font-size: 1rem; } */

        .woocommerce .cart-collaterals .cart_totals h2,
        .woocommerce-billing-fields h3,
        .woocommerce-shipping-fields h2,
        .woocommerce-additional-fields > h3,
        .woocommerce-checkout-order-review-wrap #order_review_heading,
        .woocommerce
        .woocommerce-order-details
        .woocommerce-order-details__title {
            line-height: 1em;
            margin-top: 0;
            margin-bottom: 20px;
        }

        .woocommerce table.shop_table thead th,
        .woocommerce-page table.shop_table thead th {
            font-size: var(--mfxFontSize_Base);
            text-transform: capitalize;
        }

        .woocommerce div.product .mfx-product-tabs .woocommerce-tabs .panel > h2,
        .woocommerce div.product .mfx-product-tabs .woocommerce-Reviews-title,
        .woocommerce div.product .mfx-product-tabs-exploded > h2,
        .woocommerce #review_form #respond .comment-reply-title {
            text-transform: none;
        }

        /* #endregion - Typography */

        /* #endregion - Misc */

        /*--------------------------------------------------------------*/
        /* #region - Default Colors */
        /*--------------------------------------------------------------*/

        /* Backgrounds */
        .woocommerce ul.products li.product .featured-tag,
        .woocommerce.single-product .featured-tag,
        .mfx-product-image-gallery-container .featured-tag {
            background-color: var(--mfxHeadAltColor);
        }

        .woocommerce-tabs .panel {
            background-color: var(--mfxBodyBGColor);
        }

        .woocommerce .shop_table th,
        .woocommerce
        .widget_price_filter
        .price_slider_wrapper
        .ui-widget-content {
            background-color: rgba(var(--mfxHeadAltColorRgb), 0.15);
        }

        .woocommerce tbody td,
        .woocommerce tbody th,
        .woocommerce table.shop_attributes .alt td,
        .woocommerce table.shop_attributes .alt th,
        .woocommerce table.shop_attributes tr:nth-child(even) td,
        .woocommerce table.shop_attributes tr:nth-child(even) th {
            background: rgba(var(--mfxBorderColorRgb), 0.2);
        }

        .woocommerce .shop_attributes tbody tr:nth-child(2n + 1) th,
        .woocommerce .shop_attributes tbody tr:nth-child(2n + 1) td,
        .woocommerce-page .shop_attributes tbody tr:nth-child(2n + 1) th,
        .woocommerce-page .shop_attributes tbody tr:nth-child(2n + 1) td {
            background: rgba(var(--mfxBorderColorRgb), 0.5);
        }

        .woocommerce ul.products li.product:hover .onsale {
            background-color: #77a464;
        }

        .woocommerce span.out-of-stock,
        .woocommerce ul.products li.product:hover .out-of-stock,
        .woocommerce a.remove:hover,
        .woocommerce .widget_shopping_cart .cart_list li a.remove:hover,
        .woocommerce.widget_shopping_cart .cart_list li a.remove:hover {
            background-color: #9f2124;
        }

        .woocommerce ul.products li.product-category .product-details h5 .count,
        .woocommerce .quantity input:not(.qty),
        .woocommerce .product form.cart table.variations td,
        .woocommerce .product form.cart .group_table td,
        .woocommerce p.price del,
        .woocommerce span.price del,
        .woocommerce .product-price del,
        .woocommerce-grouped-product-list-item__price del,
        .woocommerce p.price ins,
        .woocommerce span.price ins,
        .woocommerce .product-price ins,
        .woocommerce-grouped-product-list-item__price ins,
        .woocommerce p.price .amount,
        .woocommerce span.price .amount,
        .woocommerce .product-price .amount,
        .woocommerce-grouped-product-list-item__price .amount {
            background-color: transparent;
        }

        /* Borders */
        .woocommerce ul.products li.product .featured-tag:after,
        .woocommerce ul.products li.product:hover .featured-tag:after,
        .woocommerce.single-product .featured-tag:after,
        .mfx-product-image-gallery-container .featured-tag:after {
            border-color: var(--mfxHeadAltColor);
        }

        .woocommerce ul.products li.product .featured-tag:after {
            border-right-color: transparent !important;
        }

        .woocommerce.single-product .images .featured-tag:after,
        .mfx-product-image-gallery-container .featured-tag:after {
            border-left-color: transparent !important;
        }

        .woocommerce ul.products li.product .product-details h5,
        .woocommerce ul.products li.product-category .product-wrapper h3 {
            border-color: #f2f2f2;
        }

        .woocommerce ul.products li.product:hover a img,
        .woocommerce-page .woocommerce ul.products li.product:hover a img {
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .woocommerce table.shop_table,
        .woocommerce table.shop_attributes,
        .woocommerce-page table.shop_table tbody tr td,
        .woocommerce table.shop_table tbody tr td,
        .woocommerce table.shop_attributes tr th,
        .woocommerce table.shop_attributes tr td,
        .woocommerce table.shop_table tbody th,
        .woocommerce table.shop_table tfoot td,
        .woocommerce table.shop_table tfoot th,
        .woocommerce .shop_table tr td.product-stock-status > span,
        .woocommerce .cart .quantity,
        .woocommerce-page .cart .quantity,
        .woocommerce .order_details,
        .woocommerce .order_details li,
        .woocommerce-page .woocommerce-order-details {
            border-color: var(--mfxBorderColor);
        }

        /* Colors */
        .woocommerce ul.products li.product:hover .onsale,
        .woocommerce ul.products li.product:hover .out-of-stock,
        .woocommerce .product span.out-of-stock,
        .woocommerce ul.products li.product .featured-tag i,
        .woocommerce.single-product .featured-tag i,
        .mfx-product-image-gallery-container .featured-tag i,
        .woocommerce ul.products li.product .featured-tag > div,
        .woocommerce.single-product .featured-tag > div,
        .mfx-product-image-gallery-container .featured-tag > div {
            color: var(--mfxBodyBGColor);
        }

        .woocommerce
        ul.products
        li.product
        .product-details
        .product-category-wrapper
        a,
        .woocommerce
        .product
        .woocommerce-product-rating
        .woocommerce-review-link,
        .woocommerce .product .summary .product_meta a {
            color: var(--mfxBodyTxtColor);
        }

        .woocommerce ul.products li .product-title p,
        .woocommerce ul.products li.product .price del,
        .woocommerce ul.products li.product .price,
        .woocommerce
        ul.products
        li.product
        .product-details
        .product-category-wrapper
        a:hover,
        .woocommerce p.price del,
        .woocommerce span.price del,
        .woocommerce .product-price del,
        .woocommerce p.price del .amount,
        .woocommerce span.price del .amount,
        .woocommerce .product-price del .amount,
        .product .summary .price .amount,
        .product .summary .price .from,
        .woocommerce ul.products li .product-title h3,
        .woocommerce ul.products li .product-title h3 a,
        .woocommerce div.product p.price,
        .woocommerce div.product span.price,
        .woocommerce p.price,
        .woocommerce span.price,
        .woocommerce .product-price,
        .woocommerce p.price ins,
        .woocommerce span.price ins,
        .woocommerce .product-price ins,
        .woocommerce p.price ins .amount,
        .woocommerce span.price ins .amount,
        .woocommerce .product-price ins .amount,
        .woocommerce table.shop_attributes tbody th,
        .woocommerce-page .woocommerce table.shop_table thead th,
        .woocommerce-page .woocommerce table.shop_table tbody td .quantity .qty,
        .woocommerce-page .woocommerce table.shop_table tbody td .quantity > a,
        .woocommerce .woocommerce-order-details table.shop_table tr th,
        .woocommerce
        .woocommerce-order-details
        table.shop_table
        tr
        td:last-child {
            color: var(--mfxBodyTxtColor);
        }

        .woocommerce-page
        .woocommerce-order-details
        table.shop_table
        td
        a:not(.button) {
            color: inherit;
        }

        .woocommerce a.remove {
            color: #9f2124;
        }

        /* #endregion - Default Colors */

        /*--------------------------------------------------------------*/
        /* #region - Accents */
        /*--------------------------------------------------------------*/

        /*----*****---- <<  Primary >> ----*****----*/

        .woocommerce span.onsale {
            background-color: var(--mfxPrimaryColor) !important;
        }

        .woocommerce ul.products li.product .featured-tag,
        .woocommerce ul.products li.product:hover .featured-tag,
        .woocommerce.single-product .featured-tag,
        .zoo-cw-group-attribute.zoo-cw-type-text
        .zoo-cw-attribute-option:hover
        .zoo-cw-attr-item:after,
        .zoo-cw-group-attribute.zoo-cw-type-text
        .zoo-cw-attribute-option.zoo-cw-active
        .zoo-cw-attr-item:after,
        .woocommerce
        .widget.widget_price_filter
        .price_slider_wrapper
        .ui-widget-content
        .ui-slider-range {
            background-color: var(--mfxPrimaryColor);
        }

        .woocommerce ul.products li.product .featured-tag:after,
        .woocommerce ul.products li.product:hover .featured-tag:after,
        .woocommerce.single-product .featured-tag:after,
        .mfx-product-image-gallery-container .featured-tag:after,
        .woocommerce
        .product
        form.cart
        .variations
        li.zoo-cw-attr-row
        > .zoo-cw-type-text
        > .zoo-cw-attribute-option:hover,
        .woocommerce
        .product
        form.cart
        .variations
        li.zoo-cw-attr-row
        > .zoo-cw-type-text
        > .zoo-cw-attribute-option.zoo-cw-active {
            border-color: var(--mfxPrimaryColor);
        }

        .woocommerce .widget_layered_nav ul li.chosen > a,
        .woocommerce .widget_layered_nav ul li.chosen > .count,
        .woocommerce .widget_layered_nav_filters ul li.chosen > a,
        .woocommerce .widget_layered_nav_filters ul li.chosen > .count,
        .woocommerce-page
        .woocommerce-order-details
        table.shop_table
        td
        a:not(.button):hover {
            color: var(--mfxPrimaryColor);
        }

        /* Buttons WooCommerce */
        .woocommerce a.button,
        .woocommerce button.button,
        .woocommerce input.button,
        .woocommerce #respond input#submit,
        .woocommerce a.button.alt,
        .woocommerce button.button.alt,
        .woocommerce input.button.alt,
        .woocommerce #respond input#submit.alt,
        .woocommerce a.button.disabled,
        .woocommerce a.button:disabled,
        .woocommerce a.button:disabled[disabled],
        .woocommerce button.button.disabled,
        .woocommerce button.button:disabled,
        .woocommerce button.button:disabled[disabled],
        .woocommerce input.button.disabled,
        .woocommerce input.button:disabled,
        .woocommerce input.button:disabled[disabled],
        .woocommerce #respond input#submit.disabled,
        .woocommerce #respond input#submit:disabled,
        .woocommerce #respond input#submit:disabled[disabled],
        .woocommerce a.button.alt.disabled,
        .woocommerce a.button.alt:disabled,
        .woocommerce a.button.alt[disabled]:disabled,
        .woocommerce button.button.alt.disabled,
        .woocommerce button.button.alt:disabled,
        .woocommerce button.button.alt[disabled]:disabled,
        .woocommerce input.button.alt.disabled,
        .woocommerce input.button.alt:disabled,
        .woocommerce input.button.alt[disabled]:disabled,
        .woocommerce #respond input#submit.alt.disabled,
        .woocommerce #respond input#submit.alt:disabled,
        .woocommerce #respond input#submit.alt[disabled]:disabled,
        .yith-wcwl-add-to-wishlist a,
        .yith-wcqv-button,
        .mfx-wcsg-button,
        .woocommerce .wishlist_table .add_to_cart.button,
        .woocommerce .yith-wcwl-popup-button a.add_to_wishlist,
        .woocommerce .wishlist_table a.ask-an-estimate-button,
        .woocommerce .wishlist-title a.show-title-form,
        .woocommerce .hidden-title-form a.hide-title-form,
        .woocommerce .hidden-title-form a.save-title-form,
        .woocommerce .wishlist_manage_table a.create-new-wishlist,
        .woocommerce a.added_to_cart {
            background-color: var(--mfxSecondaryColor);
        }

        /*----*****---- <<  Secondary >> ----*****----*/

        /* Buttons WooCommerce */
        .woocommerce a.button:hover,
        .woocommerce button.button:hover,
        .woocommerce input.button:hover,
        .woocommerce #respond input#submit:hover,
        .woocommerce a.button.alt:hover,
        .woocommerce button.button.alt:hover,
        .woocommerce input.button.alt:hover,
        .woocommerce #respond input#submit.alt:hover,
        .woocommerce a.button.disabled:hover,
        .woocommerce a.button:disabled:hover,
        .woocommerce a.button:disabled[disabled]:hover,
        .woocommerce button.button.disabled:hover,
        .woocommerce button.button:disabled:hover,
        .woocommerce button.button:disabled[disabled]:hover,
        .woocommerce input.button.disabled:hover,
        .woocommerce input.button:disabled:hover,
        .woocommerce input.button:disabled[disabled]:hover,
        .woocommerce #respond input#submit.disabled:hover,
        .woocommerce #respond input#submit:disabled:hover,
        .woocommerce #respond input#submit:disabled[disabled]:hover,
        .woocommerce a.button.alt.disabled:hover,
        .woocommerce a.button.alt:disabled:hover,
        .woocommerce a.button.alt[disabled]:disabled:hover,
        .woocommerce button.button.alt.disabled:hover,
        .woocommerce button.button.alt:disabled:hover,
        .woocommerce button.button.alt[disabled]:disabled:hover,
        .woocommerce input.button.alt.disabled:hover,
        .woocommerce input.button.alt:disabled:hover,
        .woocommerce input.button.alt[disabled]:disabled:hover,
        .woocommerce #respond input#submit.alt.disabled:hover,
        .woocommerce #respond input#submit.alt:disabled:hover,
        .woocommerce #respond input#submit.alt[disabled]:disabled:hover,
        .yith-wcwl-add-to-wishlist a:hover,
        .yith-wcqv-button:hover,
        .mfx-wcsg-button:hover,
        .woocommerce .wishlist_table .add_to_cart.button:hover,
        .woocommerce .yith-wcwl-popup-button a.add_to_wishlist:hover,
        .woocommerce .wishlist_table a.ask-an-estimate-button:hover,
        .woocommerce .wishlist-title a.show-title-form:hover,
        .woocommerce .hidden-title-form a.hide-title-form:hover,
        .woocommerce .hidden-title-form a.save-title-form:hover,
        .woocommerce .wishlist_manage_table a.create-new-wishlist:hover,
        .woocommerce a.added_to_cart:hover {
            background-color: var(--mfxPrimaryColor);
        }

        /* #endregion - Accents */

        /*--------------------------------------------------------------*/
        /* #region - Responsive */
        /*--------------------------------------------------------------*/

        /* Note: Design for a width of 960px */
        @media only screen and (min-width: 1025px) and (max-width: 1280px) {
            .woocommerce table.shop_table th,
            .woocommerce-page table.shop_table th,
            .woocommerce table.shop_table td,
            .woocommerce-page table.shop_table td,
            .woocommerce table.shop_table tbody th,
            .woocommerce table.shop_table tfoot th,
            .woocommerce table.shop_table tfoot td {
                font-weight: normal;
            }
        }

        /*----*****---- << Tablet >> ----*****----*/

        /* Note: Design for a width of 768px */
        @media only screen and (min-width: 768px) and (max-width: 1280px) {
            .woocommerce .page-with-sidebar table.shop_table,
            .woocommerce .page-with-sidebar table.shop_table tbody,
            .woocommerce .page-with-sidebar table.shop_table tfoot,
            .woocommerce .page-with-sidebar table.shop_table tr,
            .woocommerce .page-with-sidebar table.shop_table tr th,
            .woocommerce .page-with-sidebar table.shop_table tr td {
                display: block;
                margin: 10px 0 0;
                text-align: center;
                width: 100%;
            }

            .woocommerce .page-with-sidebar table.shop_table tr {
                display: block;
                overflow: hidden;
                position: relative;
            }

            .page-with-sidebar
            .woocommerce
            table.shop_table
            tbody
            tr:last-child
            td:last-child,
            .woocommerce-page
            .page-with-sidebar
            table.shop_table
            tbody
            tr:last-child
            td:last-child {
                padding-top: 0 !important;
            }

            .page-with-sidebar .woocommerce table.shop_table tr td.product-remove {
                border-radius: 5px;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 45px !important;
                line-height: 45px;
                margin: auto;
                padding: 0;
                padding-top: 0px;
                position: absolute;
                right: 20px;
                text-align: center;
                top: 20px;
                width: 45px !important;
                z-index: 1;
            }

            .woocommerce
            .page-with-sidebar
            table.shop_table
            tr
            td.product-thumbnail {
                line-height: 0;
                margin: 0;
                padding: 15px;
                width: 100% !important;
            }

            .woocommerce
            .page-with-sidebar
            form.woocommerce
            input[type="hidden"]
            + table.shop_table {
                margin-top: 0;
            }

            .woocommerce .page-with-sidebar table.shop_table tr th,
            body .woocommerce .page-with-sidebar table.shop_table tr td {
                border-bottom-width: 0;
                border-left-width: 0;
                border-width: 0;
                float: left;
                height: auto !important;
                margin-bottom: 20px;
                padding: 5px 15px;
                text-align: left;
                width: auto !important;
            }

            .page-with-sidebar
            .woocommerce
            table.shop_table
            tr
            td.product-thumbnail {
                font-size: 18px;
            }
            .page-with-sidebar .woocommerce .shop_table .product-thumbnail a {
                display: inline-block;
                margin: 0;
                max-width: 100%;
            }

            .page-with-sidebar
            .woocommerce
            table.shop_table
            tr
            td.product-thumbnail
            img {
                width: 100%;
                height: auto;
            }

            .page-with-sidebar .woocommerce table.shop_table tr td > label,
            .page-with-sidebar .woocommerce-page table.shop_table tr td > label {
                display: block;
                font-size: 0.8em;
                font-weight: 700;
                line-height: normal;
                margin-bottom: 10px;
                width: 100%;
            }

            .page-with-sidebar .woocommerce table.shop_table tr td.product-quantity,
            .page-with-sidebar .woocommerce table.shop_table tr td.product-price {
                display: table-cell;
                float: none;
                text-align: center;
                vertical-align: middle;
                width: 1% !important;
            }

            .page-with-sidebar
            .woocommerce
            table.shop_table
            tr
            td.product-subtotal {
                border-style: solid;
                border-bottom-style: solid;
                border-width: 1px 0 0;
                border-bottom-width: 0px;
                display: block;
                margin: 10px 0 0;
                padding: 20px 15px;
            }

            .page-with-sidebar .woocommerce table.shop_table tr th,
            body .page-with-sidebar .woocommerce table.shop_table tr td {
                border-width: 0;
            }

            .page-with-sidebar .woocommerce table.shop_table,
            .page-with-sidebar .woocommerce table.shop_table tbody,
            .page-with-sidebar .woocommerce table.shop_table tfoot,
            .page-with-sidebar .woocommerce table.shop_table tr,
            .page-with-sidebar .woocommerce table.shop_table tr th,
            .page-with-sidebar .woocommerce table.shop_table tr td {
                margin-bottom: 15px;
            }

            .woocommerce .page-with-sidebar form .form-row,
            .woocommerce-page .page-with-sidebar form .form-row {
                padding: 0;
            }

            .woocommerce .page-with-sidebar form .form-row-first,
            .woocommerce-page .page-with-sidebar form .form-row-first,
            .woocommerce .page-with-sidebar form .form-row-last,
            .woocommerce-page .page-with-sidebar form .form-row-last {
                width: 100%;
            }

            .woocommerce .page-with-sidebar .woocommerce-message,
            .woocommerce .page-with-sidebar .woocommerce-info,
            .woocommerce .page-with-sidebar .woocommerce-error {
                display: flex;
                align-items: center;
                justify-content: space-between;
                width: 100%;
            }

            .woocommerce .page-with-sidebar .woocommerce-error > a:not(.button),
            .woocommerce .page-with-sidebar .woocommerce-info > a:not(.button),
            .woocommerce .page-with-sidebar .woocommerce-message > a:not(.button) {
                text-decoration: underline;
            }

            .woocommerce .page-with-sidebar .woocommerce-error > a,
            .woocommerce .page-with-sidebar .woocommerce-info > a,
            .woocommerce .page-with-sidebar .woocommerce-message > a {
                display: block;
                margin-left: 0;
                order: 1;
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
            }

            .page-with-sidebar
            .woocommerce
            table.shop_table.order_details
            tbody
            tr
            td,
            .woocommerce-page
            .page-with-sidebar
            table.shop_table.order_details
            tbody
            tr
            td,
            .page-with-sidebar
            .woocommerce
            table.shop_table.order_details
            tfoot
            tr:not(:last-child)
            th,
            .woocommerce-page
            .page-with-sidebar
            table.shop_table.order_details
            tfoot
            tr:not(:last-child)
            th,
            .page-with-sidebar
            .woocommerce
            table.shop_table.order_details
            tfoot
            tr:not(:last-child)
            td,
            .woocommerce-page
            .page-with-sidebar
            table.shop_table.order_details
            tfoot
            tr:not(:last-child)
            td {
                border-bottom: 1px solid rgba(var(--mfxBorderColorRgb), 0.15);
            }

            .woocommerce-page .page-with-sidebar .woocommerce-order-details {
                padding: 25px 20px;
            }

            .woocommerce .quantity .qty,
            .woocommerce-page .quantity .qty,
            .woocommerce .quantity input,
            .woocommerce-page .quantity input {
                min-height: 30px;
            }

            .woocommerce div.quantity:not(.quantity-with-plusminus) .qty,
            .woocommerce-page div.quantity:not(.quantity-with-plusminus) .qty,
            .woocommerce div.quantity:not(.quantity-with-plusminus) input,
            .woocommerce-page div.quantity:not(.quantity-with-plusminus) input {
                padding: 10px 25px;
                width: 100px;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 1024px) {
            .woocommerce table.shop_table tbody th,
            .woocommerce table.shop_table th,
            .woocommerce table.shop_table td,
            .woocommerce-page table.shop_table th,
            .woocommerce-page table.shop_table td,
            .woocommerce table.shop_table tfoot th,
            .woocommerce table.shop_table tfoot td {
                font-weight: normal;
            }

            .woocommerce table.shop_table td,
            .woocommerce-page table.shop_table td,
            .woocommerce table.shop_table thead th,
            .woocommerce-page table.shop_table thead th {
                padding: 20px 10px;
            }

            .woocommerce .shop_table tr td.product-stock-status > span {
                font-size: 10px;
                line-height: 20px;
            }

            .woocommerce
            table.shop_table
            tbody
            td
            .quantity.quantity-with-plusminus
            input[type="button"],
            .woocommerce-page
            table.shop_table
            tbody
            td
            .quantity.quantity-with-plusminus
            input[type="button"] {
                width: 30px;
            }

            .woocommerce
            table.shop_table
            tbody
            td
            .quantity.quantity-with-plusminus
            input.qty,
            .woocommerce-page
            table.shop_table
            tbody
            td
            .quantity.quantity-with-plusminus
            input.qty {
                width: 35px;
            }
        }

        @media only screen and (max-width: 768px) {
            .woocommerce .woocommerce-message,
            .woocommerce .woocommerce-info,
            .woocommerce .woocommerce-error {
                display: table;
                text-align: center;
                width: 100%;
            }

            .woocommerce .woocommerce-error .button,
            .woocommerce .woocommerce-info .button,
            .woocommerce .woocommerce-message .button {
                display: table-footer-group;
                float: none;
                text-decoration: underline;
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
            }

            .woocommerce ul.products li.product,
            .woocommerce ul.products[class*="columns-"] li.product,
            .woocommerce-page ul.products li.product,
            .woocommerce-page ul.products[class*="columns-"] li.product {
                margin: 0;
                width: 100%;
            }

            .woocommerce table.shop_table tr td::before,
            .woocommerce-page table.shop_table tr td::before {
                content: none;
            }

            .woocommerce-page
            .woocommerce-customer-details
            .addresses
            .woocommerce-column {
                margin: 0 0 20px;
            }
        }

        @media only screen and (min-width: 768px) {
            /* Plugin Styles Override */
            .woocommerce table.shop_table thead,
            .woocommerce-page table.shop_table thead {
                display: table-header-group;
            }

            .woocommerce table.shop_table tr,
            .woocommerce-page table.shop_table tr {
                display: table-row;
            }

            .woocommerce table.shop_table tbody th,
            .woocommerce-page table.shop_table tbody th,
            .woocommerce table.shop_table tr td,
            .woocommerce-page table.shop_table tr td {
                display: table-cell;
            }

            .woocommerce table.shop_table tr:nth-child(2n) td,
            .woocommerce-page table.shop_table tr:nth-child(2n) td {
                background: none;
            }

            .woocommerce table.shop_table tr td:not(:last-child),
            .woocommerce-page table.shop_table tr td:not(:last-child) {
                text-align: left !important;
            }

            .woocommerce #content table.cart .product-thumbnail,
            .woocommerce table.cart .product-thumbnail,
            .woocommerce-page #content table.cart .product-thumbnail,
            .woocommerce-page table.cart .product-thumbnail {
                display: table-cell;
            }

            .woocommerce-cart table.shop_table tr.cart-discount th,
            .woocommerce-cart table.shop_table tr.cart-discount td {
                vertical-align: middle;
            }
        }

        /*----*****---- << Mobile (Landscape) >> ----*****----*/

        /* Common Styles for the devices below 767px width */
        @media only screen and (max-width: 767px) {
            .woocommerce .pagination .column {
                margin: 0 auto;
                text-align: center;
                width: 100%;
            }
            .woocommerce .pagination ul,
            .woocommerce .pagination ul li {
                float: none;
            }
            .woocommerce .pagination ul li {
                display: inline-block;
            }

            .woocommerce .woocommerce-message,
            .woocommerce .woocommerce-info,
            .woocommerce .woocommerce-error {
                display: table;
                text-align: center;
                width: 100%;
            }

            .woocommerce .woocommerce-error .button,
            .woocommerce .woocommerce-info .button,
            .woocommerce .woocommerce-message .button {
                display: table-footer-group;
                float: none;
                text-decoration: underline;
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
            }

            .woocommerce .woocommerce-error > a,
            .woocommerce .woocommerce-info > a,
            .woocommerce .woocommerce-message > a {
                display: block;
                margin-left: 0;
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
            }

            .woocommerce .woocommerce-error > a:not(.button),
            .woocommerce .woocommerce-info > a:not(.button),
            .woocommerce .woocommerce-message > a:not(.button) {
                text-decoration: underline;
            }

            .woocommerce .product p.price del,
            .woocommerce-page .product p.price del,
            .woocommerce div.product p.price del,
            .woocommerce-page div.product p.price del,
            .woocommerce .product span.price del,
            .woocommerce-page .product span.price del,
            .woocommerce div.product span.price del,
            .woocommerce-page div.product span.price del,
            .woocommerce .product-price del,
            .woocommerce-page .product-price del {
                font-size: 14px;
            }

            .woocommerce .product p.price,
            .woocommerce-page .product p.price,
            .woocommerce div.product p.price,
            .woocommerce-page div.product p.price,
            .woocommerce .product span.price,
            .woocommerce-page .product span.price,
            .woocommerce div.product span.price,
            .woocommerce-page div.product span.price,
            .woocommerce .product p.price ins,
            .woocommerce-page .product p.price ins,
            .woocommerce div.product p.price ins,
            .woocommerce-page div.product p.price ins,
            .woocommerce .product span.price ins,
            .woocommerce-page .product span.price ins,
            .woocommerce div.product span.price ins,
            .woocommerce-page div.product span.price ins {
                font-size: 16px;
            }

            .woocommerce div.product form.cart div.quantity .qty {
                font-size: 14px;
            }

            .woocommerce a.button,
            .woocommerce button.button,
            .woocommerce input.button,
            .woocommerce #respond input#submit,
            .woocommerce a.button.alt,
            .woocommerce button.button.alt,
            .woocommerce input.button.alt,
            .woocommerce #respond input#submit.alt,
            .woocommerce a.button.disabled,
            .woocommerce a.button:disabled,
            .woocommerce a.button:disabled[disabled],
            .woocommerce button.button.disabled,
            .woocommerce button.button:disabled,
            .woocommerce button.button:disabled[disabled],
            .woocommerce input.button.disabled,
            .woocommerce input.button:disabled,
            .woocommerce input.button:disabled[disabled],
            .woocommerce #respond input#submit.disabled,
            .woocommerce #respond input#submit:disabled,
            .woocommerce #respond input#submit:disabled[disabled],
            .woocommerce a.button.alt.disabled,
            .woocommerce a.button.alt:disabled,
            .woocommerce a.button.alt[disabled]:disabled,
            .woocommerce button.button.alt.disabled,
            .woocommerce button.button.alt:disabled,
            .woocommerce button.button.alt[disabled]:disabled,
            .woocommerce input.button.alt.disabled,
            .woocommerce input.button.alt:disabled,
            .woocommerce input.button.alt[disabled]:disabled,
            .woocommerce #respond input#submit.alt.disabled,
            .woocommerce #respond input#submit.alt:disabled,
            .woocommerce #respond input#submit.alt[disabled]:disabled,
            .yith-wcwl-add-to-wishlist a,
            .yith-wcqv-button,
            .mfx-wcsg-button,
            .woocommerce .wishlist_table .add_to_cart.button,
            .woocommerce .yith-wcwl-popup-button a.add_to_wishlist,
            .woocommerce .wishlist_table a.ask-an-estimate-button,
            .woocommerce .wishlist-title a.show-title-form,
            .woocommerce .hidden-title-form a.hide-title-form,
            .woocommerce .hidden-title-form a.save-title-form,
            .woocommerce .wishlist_manage_table a.create-new-wishlist,
            .woocommerce a.added_to_cart {
                font-size: 0.72em;
            }

            .woocommerce .related.products h2,
            .woocommerce-page .related.products h2,
            .woocommerce .cart-collaterals .cart_totals h2,
            .woocommerce-page .cart-collaterals .cart_totals h2,
            .woocommerce .cart-collaterals .cross-sells h2,
            .woocommerce-page .cart-collaterals .cross-sells h2 {
                margin: 0 0 20px;
                width: 100%;
            }

            .woocommerce .product-buttons-wrapper a.added_to_cart {
                display: none;
            }

            /* #region - Plugin Style Override */
            .woocommerce table.shop_table tr:nth-child(2n) td,
            .woocommerce-page table.shop_table tr:nth-child(2n) td {
                background: none;
            }

            .woocommerce table.shop_table tr td,
            .woocommerce-page table.shop_table tr td {
                text-align: inherit !important;
            }

            .woocommerce table.shop_table tr td:before,
            .woocommerce-page table.shop_table tr td:before {
                display: none;
            }

            /* #endregion */

            .woocommerce table.shop_table tr {
                display: block;
                overflow: hidden;
                position: relative;
            }

            .woocommerce table.shop_table th,
            .woocommerce-page table.shop_table th,
            .woocommerce table.shop_table td,
            .woocommerce-page table.shop_table td,
            .woocommerce table.shop_table tbody th,
            .woocommerce table.shop_table tfoot th,
            .woocommerce table.shop_table tfoot td {
                font-size: 16px;
                font-weight: normal;
            }

            .woocommerce
            table.shop_table
            tr
            td.product-name[data-title="Product"]
            a {
                font-size: 0.83em;
                font-weight: var(--mfxFontWeight_Alt);
            }

            .woocommerce table.shop_table th,
            .woocommerce-page table.shop_table th,
            .woocommerce table.shop_table tbody th,
            .woocommerce-page table.shop_table tbody th,
            .woocommerce table.shop_table tfoot th,
            .woocommerce-page table.shop_table tfoot th {
                font-size: 16px;
            }

            .woocommerce table.shop_table th,
            .woocommerce-page table.shop_table th {
                text-align: center;
            }

            .woocommerce table.shop_table td,
            .woocommerce-page table.shop_table td {
                padding: 0;
            }

            .woocommerce table.shop_table th,
            .woocommerce-page table.shop_table th,
            .woocommerce .shop_table thead th:first-child,
            .woocommerce .shop_table thead th:last-child {
                border-bottom-width: 0;
                border-top: 1px solid transparent;
            }

            .woocommerce .shop_table .product-thumbnail a {
                display: inline-block;
                margin: 10px 0 0;
            }

            .woocommerce .shop_table td.product-name a,
            .woocommerce .shop_table td.product-stock-status span,
            .woocommerce .shop_table tr.order td a {
                display: inline-block;
                margin-top: 18px;
            }

            .woocommerce .shop_table td.product-name a {
                white-space: normal;
            }
            .woocommerce .shop_table td.product-price span,
            .woocommerce .shop_table td.product-subtotal span {
                margin-top: 10px;
                display: inline-block;
            }

            .woocommerce table.shop_table tr td.product-remove {
                border: 1px solid rgba(var(--mfxHeadAltColorRgb), 0.15) !important;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 45px !important;
                line-height: 45px;
                margin: auto;
                padding: 0 !important;
                position: absolute;
                right: 15px;
                text-align: center;
                top: 15px;
                width: 45px !important;
                z-index: 1;
            }

            .woocommerce table.shop_table tr td.product-remove > div {
                display: inherit;
            }

            .woocommerce table.shop_table,
            .woocommerce table.shop_table tbody,
            .woocommerce table.shop_table tfoot,
            .woocommerce table.shop_table tr,
            .woocommerce table.shop_table tr th,
            .woocommerce table.shop_table tr td {
                display: block;
                text-align: center;
                width: 100%;
            }

            .woocommerce table.shop_table tr th,
            body .woocommerce table.shop_table tr td {
                border-width: 0;
                float: left;
                height: auto !important;
                margin-bottom: 20px;
                padding: 5px 15px;
                text-align: left;
                width: auto !important;
            }

            .woocommerce table.shop_table tr td:first-child,
            .woocommerce-page table.shop_table tr td:first-child {
                padding-left: 15px;
            }

            .woocommerce table.shop_table tr td:last-child,
            .woocommerce-page table.shop_table tr td:last-child {
                padding-right: 15px;
            }

            .woocommerce table.shop_table tr td.product-thumbnail {
                line-height: 0;
                margin: 0;
                padding: 15px;
                width: 100% !important;
            }

            .woocommerce #content table.cart .product-thumbnail,
            .woocommerce table.cart .product-thumbnail,
            .woocommerce-page #content table.cart .product-thumbnail,
            .woocommerce-page table.cart .product-thumbnail {
                display: block;
            }

            .woocommerce table.shop_table tr td.product-thumbnail a {
                display: inline-block;
                margin: 0;
                max-width: 100%;
                width: 100%;
            }

            .woocommerce table.shop_table tr td.product-thumbnail img {
                height: auto;
                width: 100%;
            }

            .woocommerce table.shop_table tr td.product-name {
                margin: 0 0 10px;
            }

            .woocommerce .shop_table td.product-name a,
            .woocommerce .shop_table tr.order td a,
            .woocommerce .shop_table td.product-stock-status span {
                margin: 0;
            }

            .woocommerce table.shop_table tr td.product-quantity,
            .woocommerce table.shop_table tr td.product-price {
                display: table-cell;
                float: none;
                text-align: center;
                vertical-align: middle;
                width: 1% !important;
            }

            .woocommerce table.shop_table tr td.product-subtotal {
                border-style: solid;
                border-width: 1px 0 0;
                display: block;
                margin: 10px 0 0;
                padding: 20px 15px 15px;
            }

            .woocommerce table.shop_table tr td.product-name,
            .woocommerce table.shop_table tr td.product-subtotal {
                text-align: center;
                width: 100% !important;
            }

            .woocommerce table.shop_table tr td > label,
            .woocommerce-page table.shop_table tr td > label {
                display: block;
                font-size: 16px;
                font-weight: 600;
                line-height: normal;
                margin-bottom: 10px;
                width: 100%;
            }

            .woocommerce .shop_table td.product-price span,
            .woocommerce .shop_table td.product-subtotal span {
                margin: 0;
                line-height: 30px;
                height: 30px;
            }

            .woocommerce .shop_table td.product-price del > span {
                display: unset;
            }

            .woocommerce .shop_table.order_details th,
            .woocommerce .shop_table.order_details td {
                text-align: center;
            }

            .woocommerce table.shop_table.order_details thead th,
            .woocommerce-page table.shop_table.order_details thead th {
                border-bottom-width: 0;
            }

            .woocommerce .shop_table.order_details td.product-name a {
                margin-top: 0;
            }

            .woocommerce
            .woocommerce-order-details
            .shop_table.order_details
            tr
            td.woocommerce-table__product-name
            a,
            .woocommerce
            table.shop_table.woocommerce-table--order-downloads
            tr
            td[data-title="Product"]
            a {
                color: var(--mfxHeadAltColor);
                font-size: var(--mfxFontSize_Base);
                font-weight: bold;
            }

            .woocommerce-page .woocommerce-order-details {
                padding: 25px 20px;
            }

            .woocommerce
            .woocommerce-order-details
            .woocommerce-order-details__title {
                margin-bottom: 10px;
                text-align: center;
                width: 100%;
            }
            .woocommerce
            .woocommerce-order-details
            .shop_table.order_details
            thead {
                display: none;
            }
            .woocommerce .woocommerce-order-details .shop_table.order_details tr {
                border-color: var(--mfxBorderColor);
                border-style: solid;
                border-width: 0 0 1px;
                padding: 10px 0;
            }
            .woocommerce
            .woocommerce-order-details
            .shop_table.order_details
            tfoot
            tr:last-child {
                border-width: 0;
            }

            .woocommerce .woocommerce-order-details .shop_table.order_details tr th,
            .woocommerce
            .woocommerce-order-details
            .shop_table.order_details
            tr
            td {
                display: block;
                margin: 0;
                padding: 0 !important;
                width: 100% !important;
            }

            .woocommerce .woocommerce-order-details .order-again {
                text-align: center;
            }
            .woocommerce-page
            .woocommerce-order-details
            table.shop_table
            tr
            td:last-child {
                text-align: center;
            }

            .woocommerce table.shop_table tbody td .quantity .qty,
            .woocommerce-page table.shop_table tbody td .quantity .qty {
                font-size: 14px;
            }

            .woocommerce .quantity.quantity-with-plusminus .qty,
            .woocommerce-page .quantity.quantity-with-plusminus .qty,
            .woocommerce .quantity.quantity-with-plusminus input,
            .woocommerce-page .quantity.quantity-with-plusminus input,
            .woocommerce
            table.shop_table
            tbody
            td
            .quantity.quantity-with-plusminus
            input[type="button"],
            .woocommerce-page
            table.shop_table
            tbody
            td
            .quantity.quantity-with-plusminus
            input[type="button"] {
                width: 35px;
            }

            .woocommerce form .form-row-first,
            .woocommerce-page form .form-row-first,
            .woocommerce form .form-row-last,
            .woocommerce-page form .form-row-last {
                width: 100%;
            }

            .woocommerce form .form-row,
            .woocommerce-page form .form-row {
                padding: 0;
            }

            .woocommerce .quantity .qty,
            .woocommerce-page .quantity .qty,
            .woocommerce .quantity input,
            .woocommerce-page .quantity input {
                min-height: 30px;
            }

            .woocommerce div.quantity:not(.quantity-with-plusminus) .qty,
            .woocommerce-page div.quantity:not(.quantity-with-plusminus) .qty,
            .woocommerce div.quantity:not(.quantity-with-plusminus) input,
            .woocommerce-page div.quantity:not(.quantity-with-plusminus) input {
                padding: 10px 25px;
                width: 100px;
            }

            /* Quick View */
            body[class*="woocommerce"]
            .yith-wcqv-wrapper
            #yith-quick-view-content
            > div.product
            > div.product {
                padding-right: 0;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
            }
            body[class*="woocommerce"]
            .yith-wcqv-wrapper
            #yith-quick-view-content
            div.images,
            body[class*="woocommerce"]
            .yith-wcqv-wrapper
            #yith-quick-view-content
            div.summary {
                display: block;
                float: none;
                margin: 25px;
                width: auto;
            }

            body[class*="woocommerce"]
            .yith-wcqv-wrapper
            #yith-quick-view-content
            div.summary {
                margin-top: 0;
            }
            body[class*="woocommerce"] .yith-wcqv-wrapper #yith-quick-view-close {
                background-color: #f00;
                color: var(--mfxBodyBGColor) !important;
                height: 45px;
                line-height: 45px;
                opacity: 1;
                right: 0;
                top: 0;
                width: 45px;
                z-index: 10;
                -webkit-transform: scale(0);
                transform: scale(0);
                -webkit-transition: all 0.3s linear;
                transition: all 0.3s linear;
            }

            body[class*="woocommerce"]
            .yith-wcqv-wrapper:hover
            #yith-quick-view-close {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
            body[class*="woocommerce"]
            .yith-wcqv-wrapper:hover
            #yith-quick-view-close:hover {
                background-color: var(--mfxHeadAltColor);
            }

            body[class*="woocommerce"]
            .yith-wcqv-wrapper
            #yith-quick-view-content
            div.summary,
            body[class*="woocommerce"]
            .yith-wcqv-wrapper
            #yith-quick-view-content
            div.summary
            .product
            form.cart
            .variations
            li.zoo-cw-attr-row
            div.label,
            body[class*="woocommerce"]
            .yith-wcqv-wrapper
            #yith-quick-view-content
            div.summary
            .product
            form.cart
            .variations
            li.zoo-cw-attr-row
            div.label
            label {
                text-align: left;
            }

            .mfx-product-image-gallery-holder .mfx-product-image-gallery-thumb img {
                padding: 5px !important;
            }
        }

        @media only screen and (max-width: 768px) {
            .woocommerce-page.woocommerce-view-order
            .woocommerce-customer-details
            .addresses
            .woocommerce-column
            + .woocommerce-column {
                margin-top: 30px;
            }
        }

        /*----*****---- << Mobile >> ----*****----*/

        /* Mobile Portrait Size to Mobile Landscape Size (devices and browsers) */
        @media only screen and (max-width: 479px) {
            .woocommerce div.product .product_title {
                font-size: 0.9em;
            }

            .woocommerce .shop_table tr td.product-stock-status > span {
                font-size: 10px;
                padding: 10px 5px;
            }
            .woocommerce form .form-row label.inline {
                padding-left: 0;
            }

            .woocommerce .woocommerce-message,
            .woocommerce .woocommerce-info,
            .woocommerce .woocommerce-error {
                display: table;
                text-align: center;
            }

            .woocommerce .woocommerce-error .button,
            .woocommerce .woocommerce-info .button,
            .woocommerce .woocommerce-message .button {
                display: table-footer-group;
                float: none;
                text-decoration: underline;
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
            }

            .woocommerce div.product form.cart div.quantity,
            .woocommerce div.product form.cart div.quantity ~ a,
            .woocommerce div.product form.cart div.quantity ~ a.button,
            .woocommerce div.product form.cart div.quantity ~ button,
            .woocommerce div.product form.cart div.quantity ~ button.button,
            .woocommerce div.product form.cart div.quantity ~ .button,
            .woocommerce div.product form.cart div.quantity ~ .button.alt,
            .woocommerce div.product form.cart div.quantity ~ .button.disabled,
            .woocommerce div.product form.cart div.quantity ~ .button[disabled],
            .woocommerce div.product form.cart div.quantity ~ .button.alt.disabled,
            .woocommerce
            div.product
            form.cart
            div.quantity
            ~ .button.alt[disabled] {
                margin-top: 5px;
                margin-bottom: 5px;
            }
        }

        /*----*****---- << Mobile >> ----*****----*/

        /* Mobile Portrait Size to Mobile Landscape Size (devices and browsers) */
        @media only screen and (min-width: 320px) and (max-width: 479px) {
            .woocommerce select,
            .woocommerce-page select {
                min-height: auto;
            }
        }

        /*----*****---- << Mobile >> ----*****----*/

        /* Mobile Portrait Size to Mobile Landscape Size (devices and browsers) */
        @media only screen and (max-width: 319px) {
            .woocommerce .woocommerce-ordering {
                min-width: 100%;
            }

            .woocommerce table.shop_table th,
            .woocommerce-page table.shop_table th {
                width: 90px;
            }

            .woocommerce table.shop_table td,
            .woocommerce-page table.shop_table td {
                width: 161px;
            }

            .woocommerce table.shop_table .quantity.quantity-with-plusminus input,
            .woocommerce-page
            table.shop_table
            .quantity.quantity-with-plusminus
            input,
            .woocommerce
            table.shop_table
            tbody
            td
            .quantity.quantity-with-plusminus
            .qty,
            .woocommerce-page
            table.shop_table
            tbody
            td
            .quantity.quantity-with-plusminus
            .qty,
            .woocommerce
            table.shop_table
            tbody
            td
            .quantity.quantity-with-plusminus
            input[type="button"],
            .woocommerce-page
            table.shop_table
            tbody
            td
            .quantity.quantity-with-plusminus
            input[type="button"] {
                width: 24px;
            }

            .woocommerce .shop_table.order_details th:first-child,
            .woocommerce .shop_table.order_details td:first-child {
                width: 50%;
            }
        }

        /* #endregion - Responsive */

        /*--------------------------------------------------------------*/
        /* #region - Product Single */
        /*--------------------------------------------------------------*/

        .woocommerce div.product div.images,
        .woocommerce div.product div.summary,
        .woocommerce div.product .mfx-product-tabs div.summary,
        .woocommerce-page div.product .mfx-product-tabs div.summary,
        .woocommerce
        div.product
        *[class*="-mfx-shop-product-single-summary"]
        div.summary,
        .woocommerce-page
        div.product
        *[class*="-mfx-shop-product-single-summary"]
        div.summary {
            float: left;
            margin: 0 0 35px;
            position: relative;
            width: 100%;
        }

        .woocommerce div.product .elementor-widget div.images,
        .woocommerce div.product .elementor-widget div.summary {
            width: 100%;
        }

        .woocommerce.single-product div.images span.onsale,
        .woocommerce-product-gallery span.onsale,
        .mfx-product-image-gallery-container span.onsale,
        #yith-quick-view-content span.onsale,
        .woocommerce.single-product div.images span.out-of-stock,
        .woocommerce-product-gallery span.out-of-stock,
        .mfx-product-image-gallery-container span.out-of-stock,
        #yith-quick-view-content span.out-of-stock {
            display: inline-block;
            font-size: 12px;
            height: 38px;
            line-height: 38px;
            min-height: 38px;
            min-width: 38px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            left: 8px;
            top: 8px;
            text-align: center;
            width: 38px;
            z-index: 1;
            -webkit-border-radius: var(--mfxRadius_Full);
            border-radius: var(--mfxRadius_Full);
        }

        /* .woocommerce.single-product div.images span.out-of-stock, .woocommerce-product-gallery span.out-of-stock, .mfx-product-image-gallery-container span.out-of-stock, #yith-quick-view-content span.out-of-stock { font-size: 12px; padding: 0 20px; position: absolute; top: 10px; left: 10px; width: auto; z-index: 1; } */

        .woocommerce-product-gallery .featured-tag + span.new,
        .mfx-product-image-gallery-container .featured-tag + span.new {
            right: 0;
            top: 30px;
        }

        .woocommerce.single-product .featured-tag span,
        .mfx-product-image-gallery-container .featured-tag span {
            opacity: 0;
            filter: alpha(opacity=0);
        }

        .woocommerce.single-product .featured-tag > div span,
        .mfx-product-image-gallery-container .featured-tag > div span {
            opacity: 1;
            filter: alpha(opacity=100);
        }

        .related-products-container,
        .upsell-products-container {
            clear: both;
            float: left;
            margin: 20px 0 0;
            padding: 0;
            width: 100%;
        }

        /* #region - Product Images Gallery - Default */
        .woocommerce div.product.type-product > div.images {
            width: 36%;
        }

        .woocommerce
        div.product
        div.images
        .woocommerce-product-gallery__trigger {
            position: absolute;
            top: 10px;
            left: 10px;
            -webkit-transform: scale(0.5);
            transform: scale(0.5);
            z-index: 9;
            text-align: center;
            width: 40px;
            height: 40px;
            line-height: 40px;
            background: var(--mfxBodyBGColor);
            border-radius: 50%;
            opacity: 0;
            visibility: hidden;
        }

        .woocommerce
        div.product
        div.images
        .woocommerce-product-gallery__trigger:before {
            content: "\e802";
            display: inline-block;
            font-family: "Mfx Icons";
            font-size: 1em;
            height: 100%;
            width: 100%;
        }
        .woocommerce
        div.product
        div.images
        .woocommerce-product-gallery__trigger
        img {
            margin: auto !important;
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            top: 0;
        }

        .woocommerce
        div.product
        div.images:hover
        .woocommerce-product-gallery__trigger {
            opacity: 1;
            visibility: visible;
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1);
        }

        .woocommerce div.product div.images .flex-viewport,
        .woocommerce
        div.product
        div.images
        .flex-viewport
        .woocommerce-product-gallery__wrapper,
        .woocommerce
        div.product
        div.images
        .flex-viewport
        .woocommerce-product-gallery__wrapper
        .woocommerce-product-gallery__image,
        .woocommerce
        div.product
        div.images
        .flex-viewport
        .woocommerce-product-gallery__wrapper
        .woocommerce-product-gallery__image
        a {
            display: block;
            float: left;
            overflow: hidden;
            width: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }

        .woocommerce
        div.product
        div.images
        .woocommerce-product-gallery__wrapper {
            margin: 0;
        }

        .woocommerce div.product div.images ol.flex-control-nav {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            margin: 0 -5px;
            min-width: 100%;
            overflow: hidden;
            padding: 5px 0 0;
            width: auto;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        /* .woocommerce div.product div.images ol.flex-control-nav li { float: left; list-style: none; min-height: 100%; min-width: 20%; padding: 5px; width: 20%; } */

        .woocommerce div.product div.images ol.flex-control-nav li {
            float: left;
            list-style: none;
            min-height: 100%;
            min-width: auto;
            padding: 5px;
            width: auto;
        }

        .woocommerce div.product div.images ol.flex-control-nav li img {
            border: 2px solid transparent !important;
            cursor: pointer;
            height: auto;
            margin: auto;
            min-height: 100%;
            opacity: 1;
            width: auto;
            -webkit-box-shadow: 0 0 0 1px rgba(var(--mfxBorderColorRgb), 0.05);
            box-shadow: 0 0 0 1px rgba(var(--mfxBorderColorRgb), 0.05);
            -webkit-transition: var(--mfxBaseTransition);
            transition: var(--mfxBaseTransition);
        }

        .woocommerce
        div.product
        div.images
        ol.flex-control-nav
        li
        img.flex-active {
            -webkit-box-shadow: 0 0 0 1px var(--mfxBorderColor);
            box-shadow: 0 0 0 1px var(--mfxBorderColor);
        }

        .woocommerce.single-product .product-with-secondary-image {
            clear: both;
        }
        .woocommerce.single-product .product-thumb-wrapper {
            float: left;
            position: relative;
            width: 100%;
        }

        .woocommerce.single-product .product-thumb-wrapper span.onsale,
        .woocommerce.single-product .product-thumb-wrapper span.out-of-stock {
            font-size: 11px;
            height: 50px;
            line-height: 50px;
            left: auto;
            right: -1em;
            top: -1em;
            width: 50px;
            z-index: 1000;
        }

        .woocommerce.single-product .product-thumb-wrapper span.out-of-stock {
            font-size: 10px;
            height: 50px;
            line-height: normal;
            padding: 12px 0 0;
            width: 50px;
        }

        .woocommerce-product-gallery span.new {
            background-color: indianred;
            font-size: 0.857em;
            color: var(--mfxAccentTxtColor);
            padding: 2px 10px;
            position: absolute;
            left: auto;
            right: 0;
            top: 0;
            z-index: 9;
        }

        .woocommerce div.product .images .thumbnails {
            margin: 0 -5px;
            overflow: hidden;
        }
        .woocommerce div.product .images .thumbnails .yith_magnifier_gallery li {
            margin: 0 5px;
            padding: 0;
            width: 122px !important;
        }

        .woocommerce
        .page-with-sidebar
        .product
        .images
        .thumbnails
        .yith_magnifier_gallery
        li,
        .woocommerce-page
        .page-with-sidebar
        .product
        .images
        .thumbnails
        .yith_magnifier_gallery
        li {
            width: 88px !important;
        }

        .woocommerce div.product div.images div.thumbnails a {
            margin-right: 3.8%;
            width: 30.75%;
        }
        .woocommerce div.product div.images div.thumbnails a.first {
            clear: both;
        }
        .woocommerce div.product div.images div.thumbnails a.last {
            margin-right: 0;
        }

        /* #endregion - Product Images Gallery - Default */

        /* #region - Product Content Summary */
        .woocommerce div.product.type-product > div.summary {
            width: 60%;
            margin: 0 0 0 4%;
        }

        .woocommerce
        div.product.type-product
        > div.summary
        > *:not(.clear):not(.button),
        .woocommerce div.product .summary-content > *,
        .woocommerce div.product .summary-content .woocommerce-product-rating,
        .woocommerce div.product .summary form.cart,
        .woocommerce div.product .summary form.cart .variations,
        .woocommerce div.product .summary .variations_button,
        .woocommerce div.product .summary .woocommerce-variation-price,
        .woocommerce div.product .summary .woocommerce-variation-availability,
        .woocommerce div.product .summary .woocommerce-variation-description {
            clear: both;
            display: inline-block;
            line-height: var(--mfxLineHeight_Base);
            margin: 10px 0;
            width: 100%;
        }

        .woocommerce div.product .summary form.cart .variations {
            padding: 0;
        }
        .woocommerce
        div.product
        .summary
        form.cart
        .single_variation_wrap
        .single_variation
        > p {
            margin: 10px 0;
        }

        .woocommerce div.product > div.summary > *:first-child {
            margin-top: 0;
        }

        .woocommerce div.product > div.summary > *:last-child {
            margin-bottom: 0;
        }

        .woocommerce div.product .summary form.cart + .yith-wcwl-add-to-wishlist,
        .woocommerce div.product .summary form.cart + .compare {
            margin-top: 0;
            margin-bottom: 0;
        }

        .woocommerce div.product .summary form.cart *:last-child {
            margin-bottom: 0;
        }

        .woocommerce div.product form.cart .variations label {
            color: var(--mfxBodyTxtColor);
            text-transform: capitalize;
        }

        .woocommerce
        div.product
        div.summary
        > *:not(.clear):not(.mfx-single-product-separator):empty,
        .woocommerce div.product .summary-content > *:not(.clear):empty,
        .woocommerce
        div.product
        .summary
        .woocommerce-variation-description:empty,
        .woocommerce
        div.product
        .summary-content
        .woocommerce-variation-description:empty,
        .woocommerce div.product .summary .woocommerce-variation-price:empty,
        .woocommerce
        div.product
        .summary-content
        .woocommerce-variation-price:empty,
        .woocommerce
        div.product
        .summary
        .woocommerce-variation-availability:empty,
        .woocommerce
        div.product
        .summary-content
        .woocommerce-variation-availability:empty,
        .woocommerce
        div.product
        .summary
        .woocommerce-variation.single-variation
        > *:empty,
        .woocommerce
        div.product.type-product
        > .summary
        > *[id*="tmpl-add-to-cart-button"] {
            display: none;
        }

        .woocommerce .product p.price del,
        .woocommerce-page .product p.price del,
        .woocommerce div.product p.price del,
        .woocommerce-page div.product p.price del,
        .woocommerce .product span.price del,
        .woocommerce-page .product span.price del,
        .woocommerce div.product span.price del,
        .woocommerce-page div.product span.price del,
        .woocommerce .product-price del,
        .woocommerce-page .product-price del {
            font-size: 16px;
            margin: 0 5px 0 0;
            position: relative;
            text-decoration: none;
        }

        .woocommerce .product p.price del:after,
        .woocommerce-page .product p.price del:after,
        .woocommerce div.product p.price del:after,
        .woocommerce-page div.product p.price del:after,
        .woocommerce .product span.price del:after,
        .woocommerce-page .product span.price del:after,
        .woocommerce div.product span.price del:after,
        .woocommerce-page div.product span.price del:after,
        .woocommerce .product-price del:after,
        .woocommerce-page .product-price del:after {
            background-color: currentColor;
            content: "";
            height: 1px;
            margin: auto;
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            top: 0;
            width: 100%;
        }

        .woocommerce .product p.price,
        .woocommerce-page .product p.price,
        .woocommerce div.product p.price,
        .woocommerce-page div.product p.price,
        .woocommerce .product span.price,
        .woocommerce-page .product span.price,
        .woocommerce div.product span.price,
        .woocommerce-page div.product span.price,
        .woocommerce .product p.price ins,
        .woocommerce-page .product p.price ins,
        .woocommerce div.product p.price ins,
        .woocommerce-page div.product p.price ins,
        .woocommerce .product span.price ins,
        .woocommerce-page .product span.price ins,
        .woocommerce div.product span.price ins,
        .woocommerce-page div.product span.price ins {
            font-size: 22px;
            font-weight: normal;
        }

        .woocommerce .product-price,
        .woocommerce-page .product-price,
        .woocommerce .product-price ins,
        .woocommerce-page .product-price ins {
            font-size: 18px;
        }

        .woocommerce div.product .summary .variations_button,
        .woocommerce div.product .summary .woocommerce-variation-price,
        .woocommerce div.product .summary .woocommerce-variation-availability,
        .woocommerce div.product .summary .woocommerce-variation-description,
        .woocommerce
        div.product
        .summary
        .woocommerce-product-details__short-description,
        .woocommerce
        div.product
        .summary
        form.cart
        .single_variation_wrap
        .single_variation
        > p {
            line-height: var(--mfxLineHeight_Base);
        }

        .woocommerce div.product .summary .woocommerce-variation-availability,
        .woocommerce div.product .summary .woocommerce-variation-description,
        .woocommerce
        div.product
        .summary
        .woocommerce-product-details__short-description {
            margin: 20px 0;
        }

        .woocommerce
        div.product
        .summary
        .variations_form
        .variations_button
        .button.alt.disabled.wc-variation-is-unavailable {
            opacity: 1;
        }
        .woocommerce
        div.product
        .summary
        .variations_form
        .variations_button
        .button.alt.disabled.wc-variation-is-unavailable:before {
            content: none;
        }

        .woocommerce
        div.product
        .summary
        .woocommerce-variation-description
        > *:last-child,
        .woocommerce
        div.product
        .summary
        .woocommerce-product-details__short-description
        > *:last-child {
            margin-bottom: 0;
        }

        .woocommerce div.product p.price del,
        .woocommerce div.product p.price ins,
        .woocommerce div.product span.price del,
        .woocommerce div.product span.price ins {
            display: inline-block;
        }

        .woocommerce div.product .summary .variations_form .stock,
        .woocommerce div.product .summary .variations_form p.stock {
            margin: 0 0 10px;
        }

        .woocommerce div.product form.cart p:last-child,
        .woocommerce div.product .variations_form .stock:last-child,
        .woocommerce div.product .variations_form p.stock:last-child,
        .woocommerce-product-details__short-description *:last-child,
        .woocommerce-variation-description *:last-child {
            margin-bottom: 0;
        }

        .woocommerce div.product .summary form.cart .variations,
        .woocommerce div.product .summary .yith-wcwl-add-to-wishlist a,
        .woocommerce div.product .summary .compare,
        .woocommerce div.product .summary .yith-wcqv-button,
        .woocommerce div.product .summary .mfx-wcsg-button {
            width: auto;
        }

        .woocommerce div.product .summary .woocommerce-product-rating {
            display: inline-block;
        }
        .woocommerce
        div.product
        .summary
        .woocommerce-product-rating
        .star-rating {
            margin: 0 5px 0 0;
        }
        .woocommerce
        div.product
        .summary
        .woocommerce-product-rating
        .star-rating,
        .woocommerce
        div.product
        .summary
        .woocommerce-product-rating
        .woocommerce-review-link {
            display: inline-block;
            float: none;
            vertical-align: middle;
        }
        .woocommerce
        div.product
        .summary
        .woocommerce-product-rating
        .woocommerce-review-link:not(:focus) {
            text-decoration: none;
        }

        .woocommerce
        div.product
        .summary
        .woocommerce-variation.single-variation
        > *:empty {
            display: none;
        }

        .woocommerce div.product div.summary .stock,
        .woocommerce div.product.type-product > div.summary p.stock {
            border: 1px solid rgba(var(--mfxBorderColorRgb), 0.15);
            color: rgba(var(--mfxBorderColorRgb), 0.75);
            display: table;
            padding: 5px 10px;
            vertical-align: middle;
            width: auto;
            border-radius: 3px;
        }

        .woocommerce div.product .summary .stock.out-of-stock,
        .woocommerce div.product.type-product > .summary p.stock.out-of-stock {
            border-color: currentColor;
            color: #9f2124;
        }

        .woocommerce div.product.type-product > .summary p.price del,
        .woocommerce div.product.type-product > .summary span.price del {
            display: inline-block;
        }

        .woocommerce div.product form.cart .group_table td {
            padding: 12px 15px;
            vertical-align: middle;
        }
        .woocommerce
        div.product
        form.cart
        .group_table
        td.woocommerce-grouped-product-list-item__quantity {
            padding-left: 0;
            text-align: left;
        }
        .woocommerce
        div.product
        form.cart
        .group_table
        td.woocommerce-grouped-product-list-item__price {
            padding-right: 0;
            text-align: right;
        }

        .woocommerce .product.product-type-grouped .summary .cart .group_table {
            margin-bottom: 30px;
        }
        .woocommerce
        .product.product-type-grouped
        .summary
        .cart
        .group_table
        td {
            border-width: 0;
            padding: 15px 0;
            width: 33.33%;
        }

        .woocommerce
        .product.product-type-grouped
        .summary
        .cart
        .group_table
        tr {
            border-color: var(--mfxBorderColor);
            border-style: solid;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            justify-content: space-between;
        }

        .woocommerce
        .product.product-type-grouped
        .summary
        .cart
        .group_table
        tr
        + tr {
            border-width: 1px 0 0;
            margin-top: 25px;
            padding-top: 15px;
        }

        .woocommerce
        .product.product-type-grouped
        .summary
        .cart
        .group_table
        td {
            border-width: 0;
            padding: 0;
            text-align: left;
            width: auto;
        }

        .woocommerce
        .product.product-type-grouped
        .summary
        .cart
        .group_table
        td
        a {
            background: transparent !important;
            padding: 0 !important;
        }

        .woocommerce
        .product.product-type-grouped
        .summary
        .cart
        .group_table
        td
        a:not(:focus) {
            text-decoration: none;
        }

        .woocommerce
        .product.product-type-grouped
        .summary
        .cart
        .group_table
        td
        a:not(:hover) {
            color: inherit;
        }

        .woocommerce
        .product.product-type-grouped
        .summary
        .cart
        .group_table
        td
        a:hover {
            opacity: 0.75;
        }

        .woocommerce
        div.product.product-type-grouped
        .summary
        form.cart
        .group_table
        tr
        td.woocommerce-grouped-product-list-item__label {
            font-family: var(--mfxFontTypo_Alt);
            font-size: 1em;
            color: var(--mfxHeadAltColor);
            padding: 0;
            -webkit-box-ordinal-group: -1;
            -ms-flex-order: -1;
            text-align: left;
        }

        .woocommerce
        .product.product-type-grouped
        .summary
        .cart
        .group_table
        td.woocommerce-grouped-product-list-item__quantity {
            order: 2;
        }

        .woocommerce
        div.product.product-type-grouped
        .summary
        form.cart
        .group_table
        tr
        td.woocommerce-grouped-product-list-item__price {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding: 0;
            -webkit-box-ordinal-group: 1;
            -ms-flex-order: 1;
            order: 3;
            justify-content: flex-end;
        }

        .woocommerce
        div.product.product-type-grouped
        .summary
        form.cart
        .group_table
        tr
        td.woocommerce-grouped-product-list-item__price
        del,
        .woocommerce
        div.product.product-type-grouped
        .summary
        form.cart
        .group_table
        tr
        td.woocommerce-grouped-product-list-item__price
        ins {
            display: inline-block;
        }

        .woocommerce
        div.product.product-type-grouped
        .summary
        form.cart
        .group_table
        tr
        td.woocommerce-grouped-product-list-item__price
        del
        + ins {
            margin-left: 4px;
        }

        .woocommerce .product form.cart .variations li {
            padding: 0;
        }
        .woocommerce .product form.cart table.variations {
            display: table;
        }
        .woocommerce .product form.cart table.variations tbody {
            display: inline-flex;
            flex-direction: row;
            margin: 0 -5px;
            position: relative;
            z-index: 0;
            flex-wrap: wrap;
        }
        .woocommerce .product form.cart .variations tr {
            display: inline-block;
            padding: 5px;
            vertical-align: middle;
        }
        .woocommerce .product form.cart .variations tr th {
            display: table;
            padding: 0;
        }
        .woocommerce .product form.cart .variations tr th.label {
            display: block;
            margin-bottom: 10px;
            padding: 0;
            text-align: left;
            background-color: transparent;
        }
        .woocommerce div.product form.cart .variations .selection-box {
            position: relative;
            z-index: 1;
        }
        .woocommerce div.product form.cart .variations select {
            display: block;
            float: none;
        }
        .woocommerce div.product form.cart .variations td,
        .woocommerce div.product form.cart .variations th {
            vertical-align: middle;
        }

        .woocommerce
        div.product
        form.cart
        .variations
        .zoo-cw-group-attribute
        .zoo-cw-attribute-option.unavailable {
            cursor: not-allowed;
        }
        .woocommerce
        div.product
        form.cart
        .variations
        .zoo-cw-group-attribute[data-attribute-display-type="text"]
        .selection-box:after {
            content: none;
        }

        .woocommerce .product form.cart table.variations {
            margin-bottom: 20px !important;
        }
        .woocommerce div.product form.cart .variations .reset_variations {
            display: none !important;
        }

        .woocommerce
        div.product
        form.cart
        .variations
        .zoo-cw-group-attribute
        .zoo-cw-attribute-option.unavailable {
            cursor: not-allowed;
        }

        .woocommerce .product form.cart .variations li.zoo-cw-attr-row > div {
            display: inline-block;
            float: none;
            line-height: normal;
            position: relative;
            text-align: inherit;
            vertical-align: middle;
            width: auto;
        }
        .woocommerce .product form.cart .variations li.zoo-cw-attr-row div.label {
            margin: 0 15px 0 0;
            min-width: 60px;
        }
        .woocommerce
        .product
        form.cart
        .variations
        li.zoo-cw-attr-row
        div.label
        label {
            display: inline-block;
            font-size: var(--mfxFontSize_Base);
            line-height: var(--mfxLineHeight_Base);
            margin: 0;
        }
        .woocommerce
        .product
        form.cart
        .variations
        li:not(.zoo-cw-attr-row)
        div.label
        label {
            display: block;
            margin: 0 0 8px;
        }
        .woocommerce
        .product
        form.cart
        .variations
        li.zoo-cw-attr-row
        div.label
        .zoo-cw-name {
            display: none;
        }

        .woocommerce div.product .summary form.cart .variations {
            padding: 0;
        }
        .woocommerce
        div.product
        .summary
        form.cart
        .variations
        li:not(:last-child) {
            margin: 0 0 20px;
        }

        /* #endregion - Product Content Summary */

        /* #region - Product Summary Meta */
        .woocommerce div.product .summary .product_meta {
            margin: 0;
        }
        .woocommerce div.product .summary .product_meta > span {
            display: inline-block;
            margin: 10px 0;
            width: 100%;
        }
        .woocommerce div.product .summary .product_meta > span:only-child {
            margin: 0;
        }

        .woocommerce div.product .summary .product_meta > span strong {
            margin-right: 3px;
        }

        .woocommerce div.product .summary .product_meta a {
            position: relative;
        }
        .woocommerce div.product .summary .product_meta a:not(:focus) {
            text-decoration: none;
        }

        .woocommerce div.product .summary form.cart + .product_meta,
        .woocommerce div.product .summary .compare + .product_meta,
        .woocommerce
        div.product
        .summary
        .wccm_btn_wrapper
        a.compare
        + .product_meta,
        .woocommerce
        div.product
        .summary
        .yith-wcwl-add-to-wishlist
        a
        + .product_meta,
        .woocommerce
        div.product
        .summary
        .wcqv_btn_wrapper
        a.button
        + .product_meta,
        .woocommerce
        div.product
        .summary
        .wcsg_btn_wrapper
        a.button
        + .product_meta,
        .woocommerce
        div.product
        .summary
        .product-buttons-wrapper
        + .product_meta,
        .woocommerce
        div.product
        .summary
        .product-buttons-wrapper
        + .product_meta_wrapper {
            margin-top: 20px;
        }

        /* #endregion - Summary Meta */

        /* #region - Product Summary Buttons */
        .woocommerce div.product .summary .product-button.style-simple .compare,
        .woocommerce
        div.product
        .summary
        .product-button.style-simple
        .yith-wcwl-add-to-wishlist
        a {
            background: none !important;
            border-width: 0;
            padding: 0;
        }

        .woocommerce.single-product .product .single_add_to_cart_button:before {
            content: "\f217";
            font-family: "Mfx Icons";
            font-weight: normal;
            margin-right: 7px;
            vertical-align: top;
            display: none;
        }

        .woocommerce.single-product .product .yith-wcwl-add-to-wishlist a:before {
            content: "\e805";
            font-family: "Mfx Icons";
            font-weight: normal;
        }

        .woocommerce.single-product
        .product
        .yith-wcwl-wishlistaddedbrowse
        a:before,
        .woocommerce.single-product
        .product
        .yith-wcwl-wishlistexistsbrowse
        a:before {
            content: "\e804";
            font-family: "Mfx Icons";
            margin-right: 5px;
        }

        .woocommerce.single-product .product .compare:before {
            content: "\e866";
            font-family: "Mfx Icons";
            margin-right: 5px;
            position: relative;
            top: 1px;
        }
        .woocommerce.single-product .product .yith-wcqv-button:before {
            content: "\e802";
            font-family: "Mfx Icons";
            margin-right: 5px;
            position: relative;
            top: 1px;
        }

        .woocommerce.single-product .product .mfx-wcsg-button:before {
            content: "\e809";
            display: inline-block;
            font-family: "Ext Icons";
            font-weight: normal;
            margin-right: 10px;
        }

        /* Variations / Swatches */
        .woocommerce
        .product
        form.cart
        .variations
        li.zoo-cw-attr-row
        > .zoo-cw-type-text
        > .zoo-cw-attribute-option {
            border: 2px solid;
            display: inline-block;
            font-size: 14px;
            font-weight: 400;
            height: 30px;
            line-height: 26px;
            margin: 5px 10px 5px 0;
            text-align: center;
            -webkit-border-radius: 0;
            border-radius: 0;
        }

        .woocommerce
        .product
        form.cart
        .variations
        li.zoo-cw-attr-row
        > .zoo-cw-type-text
        > .zoo-cw-attribute-option
        .zoo-cw-attr-item {
            display: inline-block;
            height: 100% !important;
            line-height: 26px;
            margin: 0;
            overflow: hidden;
            padding: 0;
            width: 100%;
            -webkit-border-radius: 0;
            border-radius: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .woocommerce
        .product
        form.cart
        .variations
        li.zoo-cw-attr-row
        > .zoo-cw-type-text
        > .zoo-cw-attribute-option
        .zoo-cw-attr-item:after {
            content: none;
        }

        .woocommerce
        .product
        form.cart
        .variations
        li.zoo-cw-attr-row
        > .zoo-cw-type-text
        > .zoo-cw-attribute-option
        .zoo-cw-attr-item
        span {
            display: inline-block;
            font-size: 16px;
            line-height: inherit;
            padding: 0 10px;
            position: relative;
            width: 100%;
        }

        .woocommerce
        .product
        form.cart
        .variations
        .zoo-cw-group-attribute.zoo-cw-type-text
        .zoo-cw-attribute-option:hover
        .zoo-cw-attr-item
        .zoo-cw-label-text,
        .woocommerce
        .product
        form.cart
        .variations
        .zoo-cw-group-attribute.zoo-cw-type-text
        .zoo-cw-attribute-option.zoo-cw-active
        .zoo-cw-attr-item
        .zoo-cw-label-text {
            color: inherit;
        }

        /* #endregion - Product Summary Buttons */

        /* #region - Product Rating */
        .woocommerce #review_form #respond p.stars span {
            margin: 0;
            padding: 0;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .woocommerce p.stars a:before {
            color: var(--mfxBorderColor);
            -webkit-transition: inherit;
            transition: inherit;
        }

        .woocommerce p.stars a:before,
        .woocommerce p.stars a:hover ~ a:before,
        .woocommerce p.stars.selected a.active:before {
            content: "\e021";
            font-family: "WooCommerce";
        }
        .woocommerce p.stars.selected a.active:before {
            content: "\e020";
            font-family: "WooCommerce";
        }

        .woocommerce p.stars a:hover ~ a:before,
        .woocommerce p.stars.selected a.active:before {
            color: var(--mfxPrimaryColor);
        }

        .woocommerce p.stars a:before,
        .woocommerce p.stars a:hover ~ a:before,
        .woocommerce p.stars.selected a.active ~ a:before {
            color: var(--mfxPrimaryColor) !important;
        }

        .woocommerce p.stars.selected a.active:before,
        .woocommerce p.stars:hover a:before,
        .woocommerce p.stars.selected a:not(.active):before,
        .woocommerce p.stars.selected a.active:before {
            color: var(--mfxPrimaryColor) !important;
        }

        /* #endregion - Product Rating */

        /* #region - Product Tabs */
        .woocommerce div.product .mfx-product-tabs:empty {
            display: none;
        }
        .woocommerce div.product .mfx-product-tabs {
            display: inline-block;
            margin: 50px 0 0 0;
            position: relative;
            width: 100%;
        }
        .woocommerce div.product .mfx-product-tabs .woocommerce-tabs {
            clear: both;
            display: inline-block;
            position: relative;
            width: 100%;
        }
        .woocommerce div.product .mfx-product-tabs .woocommerce-tabs:before {
            content: "";
            height: 1px;
            left: 50%;
            position: absolute;
            top: 0;
            transform: translateX(-50%);
            transform: translateX(-50%);
            width: -webkit-calc(100vw);
            width: -moz-calc(100vw);
            width: calc(100vw);
            -moz-transform: translateX(-50%);
            -webkit-transform: translateX(-50%);
        }
        .woocommerce div.product .mfx-product-tabs .woocommerce-tabs ul.tabs {
            clear: both;
            margin: 0 0 50px;
            overflow: visible;
            padding: 0;
            text-align: center;
        }
        .woocommerce
        div.product
        .mfx-product-tabs
        .woocommerce-tabs
        ul.tabs:before {
            border: none;
            content: "";
            height: 1px;
            left: 50%;
            position: absolute;
            transform: translateX(-50%);
            transform: translateX(-50%);
            width: -webkit-calc(100vw);
            width: -moz-calc(100vw);
            width: calc(100vw);
            -moz-transform: translateX(-50%);
            -webkit-transform: translateX(-50%);
        }

        .woocommerce div.product .mfx-product-tabs .woocommerce-tabs ul.tabs li {
            background: none !important;
            border-radius: 0;
            border-width: 0;
            display: inline-block;
            list-style: none;
            margin: 0 20px;
            padding: 0;
        }

        .woocommerce
        div.product
        .mfx-product-tabs
        .woocommerce-tabs
        ul.tabs
        li:first-child {
            margin-left: 0;
            padding-left: 0;
        }
        .woocommerce
        div.product
        .mfx-product-tabs
        .woocommerce-tabs
        ul.tabs
        li.active {
            z-index: auto;
        }
        .woocommerce
        div.product
        .mfx-product-tabs
        .woocommerce-tabs
        ul.tabs
        li:after,
        .woocommerce
        div.product
        .mfx-product-tabs
        .woocommerce-tabs
        ul.tabs
        li:before,
        .woocommerce
        div.product
        .mfx-product-tabs
        .woocommerce-tabs
        ul.tabs
        li.active:after,
        .woocommerce
        div.product
        .mfx-product-tabs
        .woocommerce-tabs
        ul.tabs
        li.active:before {
            content: none;
        }

        .woocommerce
        div.product
        .mfx-product-tabs
        .woocommerce-tabs
        ul.tabs
        li
        a {
            font-size: 20px;
            font-weight: 600 !important;
            letter-spacing: 0;
            line-height: 26px;
            padding: 25px 0;
            position: relative;
            text-transform: none;
        }

        .woocommerce
        div.product
        .mfx-product-tabs
        .woocommerce-tabs
        ul.tabs
        li
        a:before,
        .woocommerce
        div.product
        .mfx-product-tabs
        .woocommerce-tabs
        ul.tabs
        li
        a:after {
            content: "";
            position: absolute;
            width: 0;
            height: 1px;
            bottom: 0;
            margin: auto;
        }
        .woocommerce
        div.product
        .mfx-product-tabs
        .woocommerce-tabs
        ul.tabs
        li
        a:before {
            left: 0px;
            z-index: 1;
        }
        .woocommerce
        div.product
        .mfx-product-tabs
        .woocommerce-tabs
        ul.tabs
        li
        a:after {
            right: 0;
            transition: width 0.8s cubic-bezier(0.22, 0.61, 0.36, 1);
            -moz-transition: width 0.8s cubic-bezier(0.22, 0.61, 0.36, 1);
            -webkit-transition: width 0.8s cubic-bezier(0.22, 0.61, 0.36, 1);
        }
        .woocommerce
        div.product
        .mfx-product-tabs
        .woocommerce-tabs
        ul.tabs
        li:hover
        a:before,
        .woocommerce
        div.product
        .mfx-product-tabs
        .woocommerce-tabs
        ul.tabs
        li.active
        a:before {
            width: 100%;
            -webkit-transition: width 0.5s cubic-bezier(0.22, 0.61, 0.36, 1);
            -moz-transition: width 0.5s cubic-bezier(0.22, 0.61, 0.36, 1);
            transition: width 0.5s cubic-bezier(0.22, 0.61, 0.36, 1);
        }
        .woocommerce
        div.product
        .mfx-product-tabs
        .woocommerce-tabs
        ul.tabs
        li:hover
        a:after,
        .woocommerce
        div.product
        .mfx-product-tabs
        .woocommerce-tabs
        ul.tabs
        li.active
        a:after {
            background: transparent;
            width: 100%;
        }

        .woocommerce div.product .mfx-product-tabs .woocommerce-tabs .panel {
            background-color: transparent;
            border: none;
            margin: 0 0 50px 0;
            position: relative;
            text-align: left;
            width: 100%;
        }
        .woocommerce div.product .mfx-product-tabs .woocommerce-tabs .panel > h2,
        .woocommerce div.product .mfx-product-tabs .woocommerce-Reviews-title {
            display: none;
            font-size: 1.6em;
            margin-bottom: 30px;
            padding-bottom: 15px;
            position: relative;
            text-align: center;
            text-transform: none;
            word-wrap: break-word;
            -ms-word-wrap: break-word;
        }

        .woocommerce
        div.product
        .mfx-product-tabs
        .woocommerce-tabs
        .panel
        > h2:before,
        .woocommerce
        div.product
        .mfx-product-tabs
        .woocommerce-Reviews-title:before {
            bottom: 0;
            content: "";
            display: block;
            height: 1px;
            left: 0;
            margin: 0 auto;
            position: absolute;
            right: 0;
            width: 40px;
        }

        .mfx-product-tabs-wrapper.mfx-product-hide-tab-title
        .woocommerce-tabs
        .panel
        > h2:first-child,
        .mfx-product-tabs-wrapper.mfx-product-hide-tab-title
        .woocommerce-Reviews-title {
            display: none;
        }

        .woocommerce div.product .elementor-toggle-item .mfx-product-tabs {
            margin: 0;
        }
        .woocommerce
        div.product
        .elementor-toggle-item
        .mfx-product-tabs.mfx-product-tabs-exploded
        > h2 {
            font-size: 1.2rem;
        }

        .woocommerce table.shop_attributes td p {
            line-height: normal;
            padding: 0;
        }

        .woocommerce .comment-form-rating select,
        .woocommerce .comment-form-rating .select2 {
            display: none;
        }

        .woocommerce #reviews #comments ol.commentlist {
            margin: 0 0 20px;
            padding: 0;
        }
        .woocommerce #reviews #comments ol.commentlist li {
            border: 1px solid var(--mfxBorderColor);
            padding: 30px 20px 25px;
        }
        .woocommerce #reviews #comments ol.commentlist li:last-child {
            margin-bottom: 0;
        }
        .woocommerce #reviews #comments ol.commentlist li .comment_container {
            position: relative;
        }
        .woocommerce #reviews #comments ol.commentlist li img.avatar {
            background: none;
            position: absolute;
            left: 0;
            top: 5px;
            width: 40px;
            -webkit-border-radius: 50%;
            border-radius: 50%;
        }

        .woocommerce #reviews #comments ol.commentlist li .star-rating {
            display: inline-block;
            float: right;
            margin: 5px 0;
        }
        .woocommerce #reviews #comments ol.commentlist li .star-rating:before,
        .woocommerce
        #reviews
        #comments
        ol.commentlist
        li
        .star-rating
        span:before {
            font-size: var(--mfxFontSize_Base);
            line-height: inherit;
        }

        .woocommerce #reviews #comments ol.commentlist li .comment-text {
            border-width: 0;
            display: block;
            margin: 0 0 0 50px;
            padding: 0;
            -webkit-border-radius: var(--mfxRadius_Zero);
            border-radius: var(--mfxRadius_Zero);
        }
        .woocommerce #reviews #comments ol.commentlist li .meta {
            color: var(--mfxBodyTxtColor);
        }
        .woocommerce #reviews #comments ol.commentlist li .comment-text p.meta {
            float: left;
            font-size: 14px;
            line-height: 30px;
            margin: 5px 0;
            min-height: 30px;
            vertical-align: middle;
        }
        .woocommerce
        #reviews
        #comments
        ol.commentlist
        li
        .comment-text
        p.meta
        .woocommerce-review__author {
            color: var(--mfxHeadAltColor);
            font-size: var(--mfxFontSize_Base);
            text-transform: capitalize;
            font-weight: var(--mfxFontWeight_Base);
        }
        .woocommerce
        #reviews
        #comments
        ol.commentlist
        li
        .comment-text
        p.meta
        .woocommerce-review__published-date {
            letter-spacing: 0;
        }

        .woocommerce #reviews #comments ol.commentlist li .description {
            border-top: 1px solid var(--mfxBorderColor);
            clear: both;
            display: block;
            margin: 0;
            padding: 10px 0 0;
        }
        .woocommerce
        #reviews
        #comments
        ol.commentlist
        li
        .description
        p:last-child {
            margin-bottom: 0;
        }

        .woocommerce #review_form #respond {
            margin-top: 20px;
        }
        .woocommerce #review_form #respond > .comment-form:last-child,
        .woocommerce
        #review_form
        #respond
        > .comment-form:last-child
        > p:last-child {
            margin-bottom: 0;
        }

        .woocommerce #review_form #respond .comment-reply-title {
            display: inline-block;
            font-size: 20px;
            font-weight: bold;
            line-height: normal;
            margin-bottom: 20px;
        }
        .woocommerce #review_form #respond p,
        .woocommerce #review_form #respond .comment-notes {
            margin-bottom: 20px;
        }

        .woocommerce #review_form #respond p,
        .woocommerce #review_form #respond .comment-form-rating {
            clear: both;
            line-height: inherit;
        }
        .woocommerce #review_form #respond label {
            display: block;
            line-height: 1.5em;
            margin-bottom: 5px;
            font-weight: 500;
        }

        .woocommerce #review_form #respond .comment-form-cookies-consent label {
            display: inline;
            font-weight: 500;
        }

        .woocommerce
        #review_form
        #respond
        .comment-form
        > .column:first-child:not(.first),
        .woocommerce
        #review_form
        #respond
        .comment-notes
        + .column.mfx-three-fourth,
        .woocommerce
        #review_form
        #respond
        form.comment-form
        .column.mfx-three-fourth:first-child {
            margin-left: 0;
            width: 100%;
        }

        .woocommerce.single-product .elementor-widget-tabs .mfx-product-tabs {
            margin-left: 10px !important;
            margin-right: 10px !important;
            width: auto;
        }
        .woocommerce.single-product
        .elementor-widget-tabs
        .mfx-product-tabs
        .elementor-tab-title,
        .woocommerce.single-product
        .elementor-widget-tabs
        .mfx-product-tabs
        .elementor-tab-content {
            padding-left: 0;
            padding-right: 0;
        }

        .mfx-shop-default-single-template.woocommerce
        div.product
        .mfx-product-tabs
        .woocommerce-tabs
        .panel
        > h2 {
            display: none;
        }

        .woocommerce
        .page-with-sidebar
        div.product
        .mfx-product-tabs
        .woocommerce-tabs:before,
        .woocommerce
        .page-with-sidebar
        div.product
        .mfx-product-tabs
        .woocommerce-tabs
        ul.tabs:before {
            width: 100%;
        }

        .woocommerce
        .page-with-sidebar
        div.product
        .mfx-product-tabs
        .woocommerce-tabs
        ul.tabs
        li {
            margin: 0 10px;
        }

        /* #endregion - Product Tabs */

        /* #endregion - Product Single */

        /*--------------------------------------------------------------*/
        /* #region - Custom CSS - Single Product Page */
        /*--------------------------------------------------------------*/

        .woocommerce div.product .summary.bg-with-shadow {
            background: var(--mfxBodyBGColor);
            padding: 35px 35px 30px 35px;
            padding-left: 20px !important;
            padding-right: 20px !important;
            -webkit-box-shadow: 0 0 5px rgba(var(--mfxBorderColorRgb), 0.15);
            box-shadow: 0 0 5px rgba(var(--mfxBorderColorRgb), 0.15);
        }

        .woocommerce
        div.product
        .bg-white
        .mfx-product-tabs
        .woocommerce-tabs:after {
            background: var(--mfxBodyBGColor);
            content: "";
            height: 100%;
            position: absolute;
            left: 50%;
            top: 0;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
            width: -webkit-calc(100vw);
            width: -moz-calc(100vw);
            width: calc(100vw);
            z-index: -1;
        }

        .mfx-content-scroll {
            padding-right: 6px;
        }
        .mfx-content-scroll
        .elementor-section
        > .elementor-column-gap-default
        > .elementor-row,
        .mfx-content-scroll
        .elementor-section.elementor-section-boxed:not(
          [data-settings*="background_background"]
        ):not([class*="ary-bg"])
        > .elementor-column-gap-default
        > .elementor-row {
            margin: 0 0 0 -10px;
            width: auto;
        }

        /* Custom Vertical Bordered Tabs */
        .elementor-widget-tabs.elementor-tabs-view-vertical.mfx-vertical-bordered
        .elementor-tabs-wrapper {
            border-color: rgba(var(--mfxBorderColor), 0.2);
            border-style: solid;
            border-width: 1px 0 1px 1px;
        }
        .elementor-widget-tabs.elementor-tabs-view-vertical.mfx-vertical-bordered
        .elementor-tabs-wrapper
        .elementor-tab-title {
            border-width: 1px 0 !important;
        }
        .elementor-widget-tabs.elementor-tabs-view-vertical.mfx-vertical-bordered
        .elementor-tabs-wrapper
        .elementor-tab-title:first-child {
            border-top-width: 0 !important;
        }
        .elementor-widget-tabs.elementor-tabs-view-vertical.mfx-vertical-bordered
        .elementor-tabs-wrapper
        .elementor-tab-title:last-child {
            margin-bottom: -1px;
        }

        /* Custom Bottom-line Accordion */
        .mfx-accordion-custom-bottomline.elementor-widget-accordion
        .elementor-accordion
        .elementor-tab-title,
        .mfx-accordion-custom-bottomline.elementor-widget-accordion
        .elementor-accordion
        .elementor-tab-content {
            border-color: var(--mfxBorderColor);
            border-style: solid;
            border-width: 0 0 1px !important;
        }

        .mfx-accordion-custom-bottomline.elementor-widget-accordion
        .elementor-accordion
        .elementor-tab-title {
            line-height: normal;
            padding: 30px 0;
        }
        .mfx-accordion-custom-bottomline.elementor-widget-accordion
        .elementor-accordion
        .elementor-tab-content {
            padding: 24px 0 28px;
        }

        .mfx-accordion-custom-bottomline.elementor-widget-accordion
        .elementor-accordion
        .elementor-tab-content
        > *:last-child {
            margin-bottom: 0;
        }

        .mfx-accordion-custom-bottomline.elementor-widget-accordion
        .elementor-accordion
        .elementor-accordion-item {
            border-width: 0;
        }
        .mfx-accordion-custom-bottomline.elementor-widget-accordion
        .elementor-accordion
        .elementor-accordion-item:first-child
        .elementor-tab-title {
            padding-top: 10px;
        }
        .mfx-accordion-custom-bottomline.elementor-widget-accordion
        .elementor-accordion
        .elementor-accordion-item:last-child
        .elementor-tab-title:not(.elementor-active) {
            border-width: 0 !important;
            padding-bottom: 10px;
        }

        /* #endregion - Custom CSS - Single Product Page */

        /*--------------------------------------------------------------*/
        /* #region - Default Colors */
        /*--------------------------------------------------------------*/

        /* Backgrounds */
        .woocommerce
        div.product
        .mfx-product-tabs
        .woocommerce-tabs
        .panel
        > h2:before,
        .woocommerce
        div.product
        .mfx-product-tabs
        .woocommerce-Reviews-title:before,
        .woocommerce div.product .woocommerce-tabs:before,
        .woocommerce div.product .woocommerce-tabs ul.tabs:before {
            background-color: var(--mfxBorderColor);
        }

        .woocommerce
        div.product
        .mfx-product-summary
        .product-buttons-wrapper.style-skin-bgfill
        .wc_btn_inline
        button.disabled.wc-variation-is-unavailable,
        .woocommerce
        div.product
        .mfx-product-summary
        .product-buttons-wrapper.style-skin-bgfill
        .wc_btn_inline
        button.button.disabled.wc-variation-is-unavailable,
        .woocommerce
        div.product
        .mfx-product-summary
        .product-buttons-wrapper.style-skin-bgfill
        .wc_btn_inline
        .button.alt.disabled.wc-variation-is-unavailable,
        .woocommerce
        div.product
        .mfx-product-summary
        .product-buttons-wrapper.style-skin-bgfill
        .wc_btn_inline
        .button.disabled.wc-variation-is-unavailable,
        .woocommerce
        div.product
        .mfx-product-summary
        .product-buttons-wrapper.style-skin-bgfill
        .wc_btn_inline
        .button.alt.disabled.wc-variation-is-unavailable {
            background-color: rgba(var(--mfxBorderColorRgb), 0.5);
        }

        /* Borders */
        .woocommerce
        .product
        form.cart
        .variations
        li.zoo-cw-attr-row
        > .zoo-cw-type-text
        > .zoo-cw-attribute-option {
            border-color: rgba(var(--mfxBorderColor), 0.15);
        }

        .woocommerce
        .product
        form.cart
        .variations
        li.zoo-cw-attr-row
        > .zoo-cw-type-text
        > .zoo-cw-attribute-option:hover,
        .woocommerce
        .product
        form.cart
        .variations
        li.zoo-cw-attr-row
        > .zoo-cw-type-text
        > .zoo-cw-attribute-option.zoo-cw-active {
            border-color: var(--mfxBorderColor);
        }

        /* Colors */
        .woocommerce div.product .summary .yith-wcwl-add-to-wishlist a,
        .woocommerce div.product .summary .compare,
        .woocommerce div.product .summary .yith-wcqv-button,
        .woocommerce div.product .summary .mfx-wcsg-button,
        .woocommerce div.product form.cart .variations .reset_variations:before {
            color: var(--mfxAccentTxtColor);
        }

        .woocommerce div.product .summary .product_meta a,
        .woocommerce div.product .summary .product_meta > span strong,
        .woocommerce div.product .summary .product-button.style-simple .compare,
        .woocommerce div.product .summary form.cart .group_table td label a,
        .woocommerce #review_form #respond .comment-reply-title,
        .woocommerce
        .product
        form.cart
        .variations
        li.zoo-cw-attr-row
        div.label
        label,
        .woocommerce
        .product
        form.cart
        .variations
        li.zoo-cw-attr-row
        > .zoo-cw-type-text
        > .zoo-cw-attribute-option:hover
        .zoo-cw-attr-item
        span:before,
        .woocommerce
        .product
        form.cart
        .variations
        li.zoo-cw-attr-row
        > .zoo-cw-type-text
        > .zoo-cw-attribute-option.zoo-cw-active
        .zoo-cw-attr-item
        span:before,
        .woocommerce
        .product
        form.cart
        .variations
        li.zoo-cw-attr-row
        > .zoo-cw-type-text
        > .zoo-cw-attribute-option
        .zoo-cw-attr-item
        span:hover:first-letter {
            color: var(--mfxHeadAltColor);
        }

        .woocommerce .woocommerce-breadcrumb,
        .woocommerce .woocommerce-breadcrumb a,
        .woocommerce div.product .woocommerce-tabs ul.tabs li a,
        .woocommerce small.note,
        .woocommerce
        .product
        form.cart
        .variations
        li.zoo-cw-attr-row
        > .zoo-cw-type-text
        > .zoo-cw-attribute-option
        .zoo-cw-attr-item
        span:first-letter {
            color: var(--mfxBodyTxtColor);
        }

        /* #endregion - Default Colors */

        /*--------------------------------------------------------------*/
        /* #region - Accents */
        /*--------------------------------------------------------------*/

        .woocommerce
        div.product
        .mfx-product-tabs
        .woocommerce-tabs
        ul.tabs
        li
        a:before,
        .woocommerce
        div.product
        .mfx-product-tabs
        .woocommerce-tabs
        ul.tabs
        li
        a:after,
        .woocommerce div.product .woocommerce-tabs ul.tabs li.active a:after,
        .woocommerce div.product form.cart .variations .reset_variations:before {
            background-color: var(--mfxPrimaryColor);
        }

        .woocommerce
        div.product
        div.images
        ol.flex-control-nav
        li
        img.flex-active,
        div[class*="thumb-container"]
        .swiper-wrapper
        .swiper-slide.swiper-slide-active
        img,
        .woocommerce div.product .woocommerce-tabs ul.tabs li a:hover,
        .woocommerce div.product .woocommerce-tabs ul.tabs li.active a,
        .woocommerce
        div.product
        .mfx-product-tabs
        .woocommerce-tabs
        ul.tabs
        li.active
        a,
        .woocommerce
        div.product
        .mfx-product-tabs
        .woocommerce-tabs
        ul.tabs
        li
        a:hover,
        .woocommerce div.product .summary .product_meta a:hover,
        .woocommerce div.product .summary form.cart .group_table td label a:hover,
        .woocommerce
        div.product
        .woocommerce-product-rating
        .woocommerce-review-link:hover,
        .woocommerce table.cart td.product-name a:not(.button):hover {
            color: var(--mfxPrimaryColor);
        }

        .woocommerce
        div.product
        form.cart
        .variations
        .reset_variations:hover:before {
            background-color: var(--mfxSecondaryColor);
        }

        .woocommerce div.product .summary .product_meta a:hover {
            color: var(--mfxSecondaryColor);
        }

        /* #endregion - Accents */

        /*--------------------------------------------------------------
    Responsive
--------------------------------------------------------------*/

        /* Note: Design for a width of 960px */
        @media only screen and (min-width: 1025px) and (max-width: 1280px) {
            .woocommerce
            div.product
            .images
            .thumbnails
            .yith_magnifier_gallery
            li {
                width: 92px !important;
            }

            .woocommerce
            .page-with-sidebar
            .product
            .images
            .thumbnails
            .yith_magnifier_gallery
            li,
            .woocommerce-page
            .page-with-sidebar
            .product
            .images
            .thumbnails
            .yith_magnifier_gallery
            li {
                width: 67px !important;
            }
        }

        /*----*****---- << Tablet (Portrait) >> ----*****----*/

        /* Note: Design for a width of 768px */
        @media only screen and (min-width: 768px) and (max-width: 1024px) {
            .woocommerce .page-with-sidebar .product div.images,
            .woocommerce-page .page-with-sidebar .product div.images,
            .woocommerce .page-with-sidebar .product div.summary,
            .woocommerce-page .page-with-sidebar .product div.summary {
                float: left;
                width: 100%;
            }
            .woocommerce .page-with-sidebar .product div.summary,
            .woocommerce-page .page-with-sidebar .product div.summary {
                margin: 0;
            }

            .woocommerce.single-product
            .page-with-sidebar
            .product-thumb-wrapper
            span.onsale,
            .woocommerce.single-product
            .page-with-sidebar
            .product-thumb-wrapper
            span.out-of-stock {
                right: -25px;
            }

            .woocommerce
            div.product
            .images
            .thumbnails
            .yith_magnifier_gallery
            li {
                width: 71px !important;
            }

            .woocommerce
            .page-with-sidebar
            .product
            .images
            .thumbnails
            .yith_magnifier_gallery
            li,
            .woocommerce-page
            .page-with-sidebar
            .product
            .images
            .thumbnails
            .yith_magnifier_gallery
            li {
                width: 160px !important;
            }

            .mfx-sticky-content.elementor-widget-accordion {
                position: inherit !important;
                margin: 20px -20px 0;
                left: auto !important;
                top: auto !important;
                width: auto !important;
            }
        }

        /*----*****---- << Tablet >> ----*****----*/

        /* Note: Design for a width of 768px */
        @media only screen and (min-width: 768px) and (max-width: 1280px) {
            .woocommerce
            .product
            form.cart
            .variations
            li.zoo-cw-attr-row
            div.label {
                margin: 0 0 15px;
            }
        }

        /*----*****---- << Mobile (Landscape) >> ----*****----*/

        /* Common Styles for the devices below 767px width */
        @media only screen and (max-width: 767px) {
            .woocommerce div.product.type-product > div.images,
            .woocommerce div.product.type-product > div.summary {
                width: 100%;
            }

            .woocommerce div.product.type-product > div.summary {
                margin: 0;
            }

            .woocommerce div.product div.images,
            .woocommerce-page div.product div.images,
            .woocommerce div.product div.summary,
            .woocommerce-page div.product div.summary {
                float: left;
                width: 100%;
            }

            .woocommerce div.product .woocommerce-tabs ul.tabs:before,
            .woocommerce div.product .mfx-product-tabs .woocommerce-tabs:before {
                content: none;
            }

            .woocommerce div.product .woocommerce-tabs ul.tabs li,
            .woocommerce
            div.product
            .mfx-product-tabs
            .woocommerce-tabs
            ul.tabs
            li {
                display: block;
                margin: 0;
                padding: 0;
                text-align: center;
            }

            .woocommerce div.product .woocommerce-tabs ul.tabs li:not(:last-child),
            .woocommerce
            div.product
            .mfx-product-tabs
            .woocommerce-tabs
            ul.tabs
            li:not(:last-child) {
                border-style: solid;
                border-width: 0 0 1px;
            }

            .woocommerce div.product .woocommerce-tabs ul.tabs li,
            .woocommerce div.product .woocommerce-tabs ul.tabs li.active,
            .woocommerce div.product .mfx-product-tabs .woocommerce-tabs ul.tabs li,
            .woocommerce
            div.product
            .mfx-product-tabs
            .woocommerce-tabs
            ul.tabs
            li.active {
                border-color: rgba(var(--mfxBorderColor), 0.15);
            }

            .woocommerce-tabs ul.tabs li a {
                font-size: 13px;
            }
            .woocommerce-tabs .panel h2 {
                font-size: 18px;
            }

            .woocommerce #review_form #respond p.form-submit input {
                display: inline-block;
                float: none;
            }
            .woocommerce #review_form #respond p.comment-form-comment {
                margin-bottom: 0;
            }

            .woocommerce div.product form.cart .group_table {
                border-width: 1px;
                display: block;
                position: relative;
                width: 100%;
            }

            .woocommerce-page div.product form.cart .group_table {
                border-top-width: 0 !important;
            }

            .woocommerce div.product form.cart .group_table thead {
                display: block;
                float: left;
            }

            .woocommerce div.product form.cart .group_table tbody {
                display: block;
                overflow-x: auto;
                position: relative;
                width: auto;
                white-space: nowrap;
            }

            .woocommerce div.product form.cart .group_table td {
                display: block;
                min-height: 1.25em;
            }

            .woocommerce table.shop_attributes th,
            .woocommerce-page table.shop_attributes th {
                width: auto;
            }
            .woocommerce table.shop_attributes th,
            .woocommerce table.shop_attributes td {
                font-size: 14px;
            }

            .woocommerce div.product form.cart .group_table td,
            .woocommerce-page div.product form.cart .group_table td {
                font-size: 16px;
                font-weight: normal;
            }

            .woocommerce .cart .button,
            .woocommerce-page .cart .button,
            .woocommerce .cart input.button,
            .woocommerce-page .cart input.button,
            .woocommerce div.product form.cart .button {
                display: inline-block;
                float: none;
                margin: 10px 0 0;
            }

            .woocommerce div.product div.images,
            .woocommerce div.product div.summary {
                width: 100%;
            }

            .woocommerce div.product form.cart .group_table td {
                font-size: 1rem;
            }

            .woocommerce.single-product .product-thumb-wrapper span.onsale,
            .woocommerce.single-product .product-thumb-wrapper span.out-of-stock {
                right: 5px;
                top: 5px;
            }

            .woocommerce.single-product
            .elementor-widget-tabs
            .elementor-tab-content
            .elementor-widget-accordion
            .elementor-accordion
            .elementor-tab-title {
                border-width: 0;
            }
            .woocommerce.single-product
            .mfx-product-tabs
            .elementor-section.elementor-section-boxed
            > .elementor-container {
                max-width: 100%;
            }

            .woocommerce table.shop_attributes td {
                text-align: center;
            }
        }

        /* Note: Design for a width of 480px */
        @media only screen and (min-width: 480px) and (max-width: 767px) {
            .woocommerce div.product .images .thumbnails .yith_magnifier_gallery li,
            .woocommerce.single-product
            .page-with-sidebar
            .product
            .images
            .thumbnails
            .yith_magnifier_gallery
            li {
                width: 133px !important;
            }

            .woocommerce div.product .woocommerce-tabs ul.tabs li {
                padding: 0 12px 0 5px;
            }
            .woocommerce div.product .woocommerce-tabs ul.tabs li a {
                font-size: 12px;
            }

            .woocommerce #reviews #comments ol.commentlist li .star-rating:before,
            .woocommerce
            #reviews
            #comments
            ol.commentlist
            li
            .star-rating
            span:before {
                font-size: var(--mfxFontSize_Base);
            }

            .woocommerce
            #reviews
            #comments
            ol.commentlist
            li
            .comment-text
            p.meta
            .woocommerce-review__dash {
                display: none;
            }
            .woocommerce
            #reviews
            #comments
            ol.commentlist
            li
            .comment-text
            p.meta
            .woocommerce-review__published-date {
                display: block;
            }

            .woocommerce table.shop_attributes td {
                text-align: left;
            }
        }

        /* Common Styles for the devices below 479px width */
        @media only screen and (max-width: 479px) {
            .woocommerce div.product.product-type-external .summary a,
            .woocommerce div.product.product-type-external .summary a.button,
            .woocommerce div.product.product-type-external .summary button,
            .woocommerce div.product.product-type-external .summary button.button,
            .woocommerce div.product.product-type-external .summary .button,
            .woocommerce div.product.product-type-external .summary .button.alt,
            .woocommerce
            div.product.product-type-external
            .summary
            .button.disabled,
            .woocommerce
            div.product.product-type-external
            .summary
            .button[disabled],
            .woocommerce
            div.product.product-type-external
            .summary
            .button.alt.disabled,
            .woocommerce
            div.product.product-type-external
            .summary
            .button.alt[disabled] {
                font-size: 13px;
            }

            .woocommerce div.product .woocommerce-tabs .panel {
                text-align: center;
            }
            .woocommerce #review_form #respond p {
                text-align: left;
            }

            .woocommerce .woocommerce-product-rating .star-rating {
                margin-top: 2px;
            }

            .woocommerce.single-product
            div.images
            .thumbnails.slider
            .caroufredsel_wrapper {
                width: 100% !important;
            }

            .woocommerce #reviews #comments ol.commentlist li img.avatar {
                display: block;
                float: none;
                margin: 0 auto;
                position: static;
                text-align: center;
                width: 60px;
            }
            .woocommerce #reviews #comments ol.commentlist li .description {
                margin: 0;
            }
            .woocommerce #reviews #comments ol.commentlist li .comment-text {
                margin: 20px 0 0;
                padding: 0;
                text-align: center;
            }
            .woocommerce #reviews #comments ol.commentlist li .comment-text p.meta {
                display: inline-block;
                float: none;
            }
            .woocommerce
            #reviews
            #comments
            ol.commentlist
            li
            .comment-text
            p.meta
            .woocommerce-review__dash {
                display: none;
            }
            .woocommerce
            #reviews
            #comments
            ol.commentlist
            li
            .comment-text
            p.meta
            .woocommerce-review__published-date {
                display: block;
            }

            .woocommerce
            #reviews
            #comments
            ol.commentlist
            li
            .comment-text
            .star-rating {
                display: block;
                float: none;
                margin: 0 auto;
            }

            .woocommerce table.shop_attributes tr:not(:last-child) {
                border-color: rgba(var(--mfxBorderColorRgb), 0.15);
                border-style: solid;
                border-width: 0 0 1px;
            }
            .woocommerce table.shop_attributes th,
            .woocommerce table.shop_attributes td {
                border-width: 0 !important;
            }
            .woocommerce table.shop_attributes td {
                text-align: center !important;
            }

            .woocommerce table.shop_attributes th,
            .woocommerce-page table.shop_attributes th,
            .woocommerce table.shop_attributes td,
            .woocommerce-page table.shop_attributes td {
                float: left;
                width: 100%;
            }

            .woocommerce-cart .cart-collaterals .cart_totals table {
                border-top-width: 0;
            }
            .woocommerce table.shop_attributes tr:first-child td,
            .woocommerce table.shop_attributes tr:first-child th {
                border-top-width: 1px !important;
            }

            .woocommerce
            .product
            form.cart
            .variations
            li.zoo-cw-attr-row
            div.label {
                margin: 0 0 15px;
            }
            .woocommerce
            .product
            form.cart
            .variations
            li.zoo-cw-attr-row
            div.label,
            .woocommerce
            .product
            form.cart
            .variations
            li.zoo-cw-attr-row
            div.label
            label {
                width: 100%;
            }
            .woocommerce
            div.product
            form.cart
            .variations
            .reset_variations:before {
                right: 0;
            }

            .woocommerce #review_form #respond p.stars span,
            .woocommerce #review_form #respond p.stars a {
                margin-left: 0;
                margin-right: 0;
            }

            .woocommerce
            .product.product-type-grouped
            .summary
            .cart
            .group_table
            tr
            > * {
                flex-basis: 100%;
            }

            .woocommerce
            div.product.product-type-grouped
            .summary
            form.cart
            .group_table
            tr
            td.woocommerce-grouped-product-list-item__quantity {
                order: 1;
            }

            .woocommerce
            div.product.product-type-grouped
            .summary
            form.cart
            .group_table
            tr
            td.woocommerce-grouped-product-list-item__label,
            .woocommerce
            div.product.product-type-grouped
            .summary
            form.cart
            .group_table
            tr
            td.woocommerce-grouped-product-list-item__price {
                padding: 0 0 15px;
            }

            .woocommerce
            div.product.product-type-grouped
            .summary
            form.cart
            .group_table
            tr
            td.woocommerce-grouped-product-list-item__price {
                order: 0;
                justify-content: start;
            }

            /* Custom CSS - Single Product Page */
            .mfx-accordion-custom-bottomline.elementor-widget-accordion
            .elementor-accordion
            .elementor-tab-title {
                display: table;
                direction: rtl;
                width: 100%;
            }
            .mfx-accordion-custom-bottomline.elementor-widget-accordion
            .elementor-accordion
            .elementor-tab-title
            > * {
                display: table-cell;
                float: none !important;
                vertical-align: middle;
            }
            .mfx-accordion-custom-bottomline.elementor-widget-accordion
            .elementor-accordion
            .elementor-tab-title
            .elementor-accordion-icon {
                font-size: 0.75em;
            }
        }

        /*----*****---- << Mobile >> ----*****----*/

        /* Mobile Portrait Size to Mobile Landscape Size (devices and browsers) */
        @media only screen and (min-width: 320px) and (max-width: 479px) {
            .woocommerce.single-product
            .product
            .images
            .thumbnails
            .yith_magnifier_gallery
            li,
            .woocommerce.single-product
            .page-with-sidebar
            .product
            .images
            .thumbnails
            .yith_magnifier_gallery
            li {
                width: 90px !important;
            }

            .woocommerce div.product form.cart .variations td.label {
                font-size: var(--mfxFontSize_Base);
            }
        }

        /*----*****---- << Mobile >> ----*****----*/

        /* Mobile Portrait Size to Mobile Landscape Size (devices and browsers) */
        @media only screen and (max-width: 319px) {
            .woocommerce div.product .product_title {
                font-size: 20px;
            }
            .woocommerce #review_form #respond {
                margin: 30px 0 0;
            }
            .woocommerce div.product .woocommerce-tabs ul.tabs li a {
                font-size: 13px;
                letter-spacing: 0;
            }
            .woocommerce .product form.cart .variations td {
                font-size: 12px;
                text-align: center;
                width: 100%;
            }

            .woocommerce.single-product
            div.product
            .images
            .thumbnails
            .yith_magnifier_gallery
            li,
            .woocommerce.single-product
            .page-with-sidebar
            div.product
            .images
            .thumbnails
            .yith_magnifier_gallery
            li {
                width: 60px !important;
            }
        }

        /*--------------------------------------------------------------*/
        /* #region - Product Listing Style */
        /*--------------------------------------------------------------*/

        .woocommerce
        ul.products.product-style-default:not(.product-padding-content)
        li.product.product-grid-view
        .product-details {
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .woocommerce
        ul.products.product-style-default
        li.product
        .product-details
        > div.product-title:first-child
        > h5 {
            margin-top: 0;
        }

        /* #endregion - Product Listing Style */

        /*--------------------------------------------------------------*/
        /* #region - Product Listing - Hover Styles */
        /*--------------------------------------------------------------*/

        .woocommerce
        ul.products.product-hover-fade-skinborder
        li.product
        .product-wrapper:before,
        .woocommerce
        ul.products.product-hover-thumb-fade-skinborder
        li.product
        .product-thumb
        .image:before {
            border: 1px solid transparent;
            bottom: 0;
            left: 0;
            margin: auto;
            right: 0;
            top: 0;
            z-index: 1;
        }

        .woocommerce
        ul.products.product-hover-thumb-fade-skinborder
        li.product
        .product-thumb
        .image:before {
            margin: 1px;
            z-index: 100;
        }

        .woocommerce
        ul.products.product-style-bordered.product-hover-fade-skinborder
        li.product
        .product-wrapper:before,
        .woocommerce
        ul.products.product-style-bordered.product-hover-thumb-fade-skinborder
        li.product
        .product-thumb
        .image:before {
            bottom: -1px;
            left: -1px;
            right: -1px;
            top: -1px;
        }

        .woocommerce
        ul.products.product-style-bordered.product-hover-thumb-fade-skinborder
        li.product
        .product-thumb
        .image:before {
            margin: 2px;
        }

        .woocommerce
        ul.products.product-hover-fade-skinborder.product-padding-default
        li.product
        .product-wrapper
        .product-details {
            padding: 0 15px 25px;
            line-height: normal;
        }

        /* #endregion - Product Listing - Hover Styles */

        /*--------------------------------------------------------------*/
        /* #region - Accents */
        /*--------------------------------------------------------------*/

        /* Primary */
        .woocommerce
        ul.products.product-hover-fade-skinborder
        li.product:hover
        .product-wrapper:before {
            border-color: var(--mfxPrimaryColor);
        }

        /* #endregion - Accents */

        /*--------------------------------------------------------------*/
        /* #region - Secondary Image Hover Effects */
        /*--------------------------------------------------------------*/

        .woocommerce
        ul[class*="product-hover-secimage"]
        li.product.product-with-secondary-image
        .product-thumb
        .image
        .primary-image,
        .woocommerce
        ul[class*="product-hover-secimage"]
        li.product.product-with-secondary-image
        .product-thumb
        .image
        .secondary-image {
            -webkit-transition: all 0.35s ease;
            transition: all 0.35s ease;
        }

        /* Secondary Image Hover Effect - Fade
    ------------------------------------ */
        .woocommerce
        ul.products.product-hover-secimage-fade
        li.product.product-with-secondary-image
        .product-thumb
        .image
        .secondary-image {
            opacity: 0;
        }
        .woocommerce
        ul.products.product-hover-secimage-fade
        li.product.product-with-secondary-image:hover
        .product-thumb
        .image
        .secondary-image {
            opacity: 1;
        }

        .woocommerce
        ul.products.product-hover-thumb-fade-border
        li.product
        .product-thumb
        .image:before,
        .woocommerce
        ul.products.product-hover-thumb-fade-skinborder
        li.product
        .product-thumb
        .image:before {
            z-index: 1;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;

            margin: auto;

            border-width: 1px;
            border-style: solid;
            border-color: transparent;
        }

        /* #endregion - Secondary Image Hover Effects */

        /*--------------------------------------------------------------*/
        /* #region - Overlay Dark BG-Color */
        /*--------------------------------------------------------------*/

        .woocommerce
        ul.products.product-overlay-dark-bgcolor
        li.product
        .product-thumb-content
        .product-separator {
            background-color: rgba(var(--mfxBodyBGColorRgb), 0.15);
        }

        .woocommerce
        ul.products.product-overlay-dark-bgcolor
        li.product
        .product-thumb-content
        .product-element-group-wrapper,
        .woocommerce
        ul.products.product-overlay-dark-bgcolor
        li.product
        .product-thumb-content
        select {
            border-color: rgba(var(--mfxBodyBGColorRgb), 0.15);
        }

        .woocommerce
        ul.products.product-overlay-dark-bgcolor
        li.product
        .product-thumb-content
        .selection-box:before {
            border-top-color: rgba(var(--mfxBodyBGColorRgb), 0.5);
        }

        .woocommerce
        ul.products.product-overlay-dark-bgcolor
        li.product
        .product-thumb-content
        .zoo-cw-group-attribute
        .zoo-cw-attribute-option
        .zoo-cw-attr-item {
            -webkit-box-shadow: 1px 1px 4px 0 rgba(var(--mfxBodyBGColorRgb), 0.35);
            box-shadow: 1px 1px 4px 0 rgba(var(--mfxBodyBGColorRgb), 0.35);
        }

        .woocommerce
        ul.products.product-overlay-dark-bgcolor
        li.product
        .product-thumb-content
        .zoo-cw-group-attribute
        .zoo-cw-attribute-option
        .zoo-cw-attr-item::after {
            -webkit-box-shadow: 0 0 3px 1px rgba(var(--mfxBodyBGColorRgb), 0.5);
            box-shadow: 0 0 3px 1px rgba(var(--mfxBodyBGColorRgb), 0.5);
        }

        .woocommerce
        ul.products.product-overlay-dark-bgcolor
        li.product
        .product-thumb-content,
        .woocommerce
        ul.products.product-overlay-dark-bgcolor
        li.product
        .product-thumb-content
        select,
        .woocommerce
        ul.products.product-overlay-dark-bgcolor
        li.product
        .product-thumb-content
        .product-title
        h5
        a:not(:hover),
        .woocommerce
        ul.products.product-overlay-dark-bgcolor
        li.product
        .product-thumb-content
        .product-category-wrapper
        a,
        .woocommerce
        ul.products.product-overlay-dark-bgcolor
        li.product
        .product-thumb-content
        .price,
        .woocommerce
        ul.products.product-overlay-dark-bgcolor
        li.product
        .product-thumb-content
        .price
        del,
        .woocommerce
        ul.products.product-overlay-dark-bgcolor
        li.product
        .product-thumb-content
        .price
        ins,
        .woocommerce
        ul.products.product-overlay-dark-bgcolor
        li.product
        .product-thumb-content
        .price
        del
        .amount,
        .woocommerce
        ul.products.product-overlay-dark-bgcolor
        li.product
        .product-thumb-content
        .price
        ins
        .amount,
        .woocommerce
        ul.products.product-overlay-dark-bgcolor
        li.product
        .product-thumb-content
        .mfx-product-sale-countdown-holder
        .downcount
        .mfx-counter-wrapper
        .mfx-counter-number,
        .woocommerce
        ul.products.product-overlay-dark-bgcolor
        li.product
        .product-thumb-content
        .star-rating:before,
        .woocommerce
        ul.products.product-overlay-dark-bgcolor
        li.product
        .product-thumb-content
        .star-rating
        span:before {
            color: var(--mfxAccentTxtColor);
        }

        .woocommerce
        ul.products.product-overlay-dark-bgcolor
        li.product
        .product-thumb-content
        .product-title
        h5
        a:hover,
        .woocommerce
        ul.products.product-overlay-dark-bgcolor
        li.product
        .product-thumb-content
        .product-category-wrapper
        a:hover {
            color: rgba(var(--mfxAccentTxtColorRgb), 0.8);
        }

        /* #endregion - Overlay Dark BG-Color */

        /*--------------------------------------------------------------*/
        /* #region - Product Listing - List View */
        /*--------------------------------------------------------------*/

        .woocommerce ul.products li.product.product-list-view .product-wrapper {
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            float: none;
            -webkit-box-align: stretch;
            -webkit-align-items: stretch;
            align-items: stretch;
            -ms-flex-align: stretch;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;

            border-bottom: 1px solid rgba(var(--mfxHeadAltColorRgb), 0.075);
        }

        .woocommerce
        ul.products
        li.product.product-list-view
        .product-wrapper
        .product-thumb,
        .woocommerce
        ul.products
        li.product.product-list-view
        .product-wrapper
        .product-details {
            float: none;

            vertical-align: middle;
        }

        .woocommerce
        ul.products
        li.product.product-list-view
        .product-wrapper
        .product-thumb {
            width: 33.33%;
        }
        .woocommerce
        ul.products
        li.product.product-list-view
        .product-wrapper
        .product-details {
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;

            width: 66.66%;
            padding: 15px 30px;
        }

        .woocommerce
        ul.products
        li.product.product-list-view
        .product-wrapper
        .product-thumb:only-child,
        .woocommerce
        ul.products
        li.product.product-list-view
        .product-wrapper
        .product-details:only-child {
            width: 100%;
        }

        .woocommerce
        ul.products:not(.product-content-alignment-center)
        li.product.product-list-view
        .product-wrapper
        .product-details {
            text-align: left;
        }

        .woocommerce
        ul.products
        li.product.product-list-view
        .product-buttons-wrapper.product-button {
            text-align: inherit !important;
        }

        .woocommerce
        ul.products
        li.product.product-list-view
        .product-buttons-wrapper.product-button
        a,
        .woocommerce
        ul.products
        li.product.product-list-view
        .product-buttons-wrapper.product-button
        a.button,
        .woocommerce
        ul.products
        li.product.product-list-view
        .product-buttons-wrapper.product-button
        button,
        .woocommerce
        ul.products
        li.product.product-list-view
        .product-buttons-wrapper.product-button
        button.button,
        .woocommerce
        ul.products
        li.product.product-list-view
        .product-buttons-wrapper.product-button
        .button {
            text-align: center !important;
        }

        .woocommerce
        ul.products.product-content-buttonelement-stretch:not(
          .product-content-alignment-center
        )
        li.product.product-list-view
        .product-buttons-wrapper.product-button
        .wc_inline_buttons
        .wc_btn_inline,
        .woocommerce
        ul.products.product-content-buttonelement-stretch:not(
          .product-content-alignment-center
        )
        li.product.product-list-view
        .product-buttons-wrapper.product-button
        .wc_inline_buttons
        .wc_btn_inline
        a,
        .woocommerce
        ul.products.product-content-buttonelement-stretch:not(
          .product-content-alignment-center
        )
        li.product.product-list-view
        .product-buttons-wrapper.product-button
        .wc_inline_buttons
        .wc_btn_inline
        a.button,
        .woocommerce
        ul.products.product-content-buttonelement-stretch:not(
          .product-content-alignment-center
        )
        li.product.product-list-view
        .product-buttons-wrapper.product-button
        .wc_inline_buttons
        .wc_btn_inline
        button,
        .woocommerce
        ul.products.product-content-buttonelement-stretch:not(
          .product-content-alignment-center
        )
        li.product.product-list-view
        .product-buttons-wrapper.product-button
        .wc_inline_buttons
        .wc_btn_inline
        button.button,
        .woocommerce
        ul.products.product-content-buttonelement-stretch:not(
          .product-content-alignment-center
        )
        li.product.product-list-view
        .product-buttons-wrapper.product-button
        .wc_inline_buttons
        .wc_btn_inline
        .button {
            width: auto;
        }

        .woocommerce
        ul.products
        li.product.product-list-view
        .product-wrapper[style*="background-color"] {
            border-width: 0;
        }

        /* Left Thumb */
        .woocommerce
        ul.products
        li.product-list-left-thumb
        .product-details
        > div:last-child {
            margin-bottom: 10px !important;
        }

        /* Right Thumb */
        .woocommerce
        ul.products
        li.product.product-list-view.product-list-right-thumb
        .product-wrapper {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: reverse;
            -ms-flex-direction: row-reverse;
            flex-direction: row-reverse;
        }

        .woocommerce
        ul.products:not(.product-content-alignment-center)
        li.product.product-list-view.product-list-right-thumb
        .product-wrapper
        .product-details {
            text-align: right;
        }

        .woocommerce
        ul.products
        li.product.product-list-view.product-list-right-thumb
        .product-details
        .product-element-group-wrapper {
            direction: rtl;
        }
        .woocommerce
        ul.products
        li.product.product-list-view.product-list-right-thumb
        .product-details
        .product-element-group-wrapper
        > div {
            direction: ltr;
        }
        .woocommerce
        ul.products
        li.product.product-list-view.product-list-right-thumb
        .product-details
        .product-element-group-wrapper
        > div:nth-child(1):nth-last-child(2) {
            text-align: right;
        }
        .woocommerce
        ul.products
        li.product.product-list-view.product-list-right-thumb
        .product-details
        .product-element-group-wrapper
        > div:nth-child(2):nth-last-child(1) {
            text-align: left;
        }

        /* #endregion - Product Listing - List View */

        /*--------------------------------------------------------------*/
        /* #region - Responsive */
        /*--------------------------------------------------------------*/

        /*----*****---- << Tablet (Landscape) >> ----*****----*/

        /* Note: Design for a width of 960px */
        @media only screen and (min-width: 1025px) and (max-width: 1280px) {
            .woocommerce
            .page-with-sidebar
            ul.products
            li.product.product-list-view
            .product-wrapper
            .product-thumb,
            .page-with-sidebar
            .woocommerce
            ul.products
            li.product.product-list-view
            .product-wrapper
            .product-thumb {
                width: 40%;
            }

            .woocommerce
            .page-with-sidebar
            ul.products
            li.product.product-list-view
            .product-wrapper
            .product-details,
            .page-with-sidebar
            .woocommerce
            ul.products
            li.product.product-list-view
            .product-wrapper
            .product-details {
                width: 60%;
            }
        }

        /*----*****---- << Tablet (Portrait) >> ----*****----*/

        /* Note: Design for a width of 768px */
        @media only screen and (min-width: 768px) and (max-width: 1024px) {
            .woocommerce
            ul.products
            li.product.product-list-view
            .product-wrapper
            .product-thumb {
                width: 40%;
            }
            .woocommerce
            ul.products
            li.product.product-list-view
            .product-wrapper
            .product-details {
                width: 60%;
            }

            .woocommerce
            .page-with-sidebar
            ul.products
            li.product.product-list-view
            .product-wrapper
            .product-thumb,
            .page-with-sidebar
            .woocommerce
            ul.products
            li.product.product-list-view
            .product-wrapper
            .product-thumb,
            .woocommerce
            .page-with-sidebar
            ul.products
            li.product.product-list-view
            .product-wrapper
            .product-details,
            .page-with-sidebar
            .woocommerce
            ul.products
            li.product.product-list-view
            .product-wrapper
            .product-details {
                display: block;

                width: 100%;
            }
        }

        /*----*****---- << Mobile (Landscape) >> ----*****----*/

        /* Common Styles for the devices below 767px width */
        @media only screen and (max-width: 767px) {
            .woocommerce ul.products li.product.product-list-view .product-wrapper,
            .woocommerce
            ul.products
            li.product.product-list-view.product-list-left-thumb
            .product-wrapper,
            .woocommerce
            ul.products
            li.product.product-list-view.product-list-right-thumb
            .product-wrapper {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
            }

            .woocommerce
            ul.products
            li.product.product-list-view
            .product-wrapper
            .product-thumb,
            .woocommerce
            ul.products
            li.product.product-list-view
            .product-wrapper
            .product-details {
                display: table;

                width: 100%;
            }
            .woocommerce
            ul.products
            li.product.product-list-view
            .product-wrapper
            .product-details {
                padding: 10px 20px;
            }

            /* Right Thumb */
            .woocommerce
            ul.products
            li.product.product-list-view.product-list-right-thumb
            .product-details
            .product-element-group-wrapper {
                direction: ltr;
            }

            .woocommerce
            ul.products
            li.product.product-list-view.product-list-right-thumb
            .product-details
            .product-element-group-wrapper
            > div:nth-child(1):nth-last-child(2) {
                text-align: left;
            }

            .woocommerce
            ul.products
            li.product.product-list-view.product-list-right-thumb
            .product-details
            .product-element-group-wrapper
            > div:nth-child(2):nth-last-child(1) {
                text-align: right;
            }
        }

        /* Common Styles for the devices below 479px width */
        @media only screen and (max-width: 479px) {
            .woocommerce
            ul.products
            li.product.product-list-view
            .product-wrapper
            .product-details {
                padding: 10px;
            }
        }

        /* #endregion - Responsive */

        .abctest {
            display: block;
        }

        /*--------------------------------------------------------------*/
        /* #region - Product Listing Labels */
        /*--------------------------------------------------------------*/

        .woocommerce ul.products.product-label-circle li.product .product-labels {
            direction: rtl;
            right: 5px;
            top: 5px;
        }

        .woocommerce
        ul.products.product-label-circle
        li.product
        .product-labels
        > span {
            display: inline-block;
            font-weight: normal;
            height: 42px;
            line-height: 42px;
            margin: 1px;
            padding: 0;
            min-height: 42px;
            min-width: 42px;
            overflow: hidden;
            vertical-align: middle;
            width: 42px;
            border-radius: 50%;
        }

        /* .woocommerce ul.products.product-label-circle li.product .product-labels .out-of-stock { display: flex; align-items: center; font-size: 10px; line-height: normal; } */

        .woocommerce
        ul.products.product-label-circle
        li.product
        .product-labels
        span
        span {
            display: block;
            height: 100%;
        }

        .woocommerce
        ul.products.product-label-circle[class*="thumb-alignment-top"]
        li.product
        .product-labels
        > span
        ~ span {
            margin: 0 -1px 0 0;
            -webkit-transform: translateX(100%);
            transform: translateX(100%);
        }

        .woocommerce
        ul.products.product-label-circle[class*="thumb-alignment-top"]
        li.product
        .product-labels
        > span:nth-child(1):nth-last-child(2) {
            opacity: 0;
            visibility: hidden;
            -webkit-transform: scale(0);
            transform: scale(0);
            -webkit-transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
            transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
        }

        .woocommerce
        ul.products.product-label-circle[class*="thumb-alignment-top"]
        li.product:hover
        .product-labels
        > span:nth-child(1):nth-last-child(2) {
            opacity: 1;
            visibility: visible;
            -webkit-transform: scale(1);
            transform: scale(1);
        }

        /* #endregion - Product Listing Labels */

        /*--------------------------------------------------------------*/
        /* #region - Product Listing - Thumb Content Alignment */
        /*--------------------------------------------------------------*/

        .woocommerce
        ul.products.product-thumb-alignment-top
        li.product
        .product-thumb-content {
            text-align: center;
        }

        .woocommerce
        ul.products.product-thumb-alignment-top
        li.product
        .product-thumb:before {
            padding-top: 0;
            padding-bottom: 0;
        }

        .woocommerce
        ul.products.product-thumb-alignment-top.product-label-boxed
        li.product
        .product-thumb-content,
        .woocommerce
        ul.products.product-thumb-alignment-top.product-label-rounded
        li.product
        .product-thumb-content,
        .woocommerce
        ul.products.product-thumb-alignment-top.product-label-angular
        li.product
        .product-thumb-content,
        .woocommerce
        ul.products.product-thumb-alignment-top.product-label-ribbon
        li.product
        .product-thumb-content,
        .woocommerce
        ul.products.product-thumb-alignment-top.product-label-circle
        li.product
        .product-thumb-content {
            padding-left: 60px;
            padding-right: 60px;
        }

        /* Hover Style - IconGroup - Bounce */
        .woocommerce
        ul.products.product-icongroup-hover-bounce[class*="thumb-alignment-top"]:not(
          [class*="product-thumb-iconsgroup-position"]
        )
        li.product
        .product-thumb
        .product-buttons-wrapper.product-icons
        a,
        .woocommerce
        ul.products.product-icongroup-hover-bounce[class*="thumb-alignment-top"]:not(
          [class*="product-thumb-iconsgroup-position"]
        )
        li.product
        .product-thumb
        .product-buttons-wrapper.product-icons
        a.button,
        .woocommerce
        ul.products.product-icongroup-hover-bounce[class*="thumb-alignment-top"]:not(
          [class*="product-thumb-iconsgroup-position"]
        )
        li.product
        .product-thumb
        .product-buttons-wrapper.product-icons
        button,
        .woocommerce
        ul.products.product-icongroup-hover-bounce[class*="thumb-alignment-top"]:not(
          [class*="product-thumb-iconsgroup-position"]
        )
        li.product
        .product-thumb
        .product-buttons-wrapper.product-icons
        button.button,
        .woocommerce
        ul.products.product-icongroup-hover-bounce[class*="thumb-alignment-top"]:not(
          [class*="product-thumb-iconsgroup-position"]
        )
        li.product
        .product-thumb
        .product-buttons-wrapper.product-icons
        .button {
            bottom: auto;
            top: -60px;
            visibility: hidden;
        }

        .woocommerce
        ul.products.product-icongroup-hover-bounce[class*="thumb-alignment-top"]:not(
          [class*="product-thumb-iconsgroup-position"]
        )
        li.product:hover
        .product-thumb
        .product-buttons-wrapper.product-icons
        a,
        .woocommerce
        ul.products.product-icongroup-hover-bounce[class*="thumb-alignment-top"]:not(
          [class*="product-thumb-iconsgroup-position"]
        )
        li.product:hover
        .product-thumb
        .product-buttons-wrapper.product-icons
        a.button,
        .woocommerce
        ul.products.product-icongroup-hover-bounce[class*="thumb-alignment-top"]:not(
          [class*="product-thumb-iconsgroup-position"]
        )
        li.product:hover
        .product-thumb
        .product-buttons-wrapper.product-icons
        button,
        .woocommerce
        ul.products.product-icongroup-hover-bounce[class*="thumb-alignment-top"]:not(
          [class*="product-thumb-iconsgroup-position"]
        )
        li.product:hover
        .product-thumb
        .product-buttons-wrapper.product-icons
        button.button,
        .woocommerce
        ul.products.product-icongroup-hover-bounce[class*="thumb-alignment-top"]:not(
          [class*="product-thumb-iconsgroup-position"]
        )
        li.product:hover
        .product-thumb
        .product-buttons-wrapper.product-icons
        .button {
            top: 0;
            visibility: visible;
        }

        .woocommerce
        ul.products.product-icongroup-hover-bounce.product-thumb-iconsgroup-style-simple[class*="thumb-alignment-top"]:not(
          [class*="product-thumb-iconsgroup-position"]
        )
        li.product:hover
        .product-thumb
        .product-buttons-wrapper.product-icons
        a,
        .woocommerce
        ul.products.product-icongroup-hover-bounce.product-thumb-iconsgroup-style-simple[class*="thumb-alignment-top"]:not(
          [class*="product-thumb-iconsgroup-position"]
        )
        li.product:hover
        .product-thumb
        .product-buttons-wrapper.product-icons
        a.button,
        .woocommerce
        ul.products.product-icongroup-hover-bounce.product-thumb-iconsgroup-style-simple[class*="thumb-alignment-top"]:not(
          [class*="product-thumb-iconsgroup-position"]
        )
        li.product:hover
        .product-thumb
        .product-buttons-wrapper.product-icons
        button,
        .woocommerce
        ul.products.product-icongroup-hover-bounce.product-thumb-iconsgroup-style-simple[class*="thumb-alignment-top"]:not(
          [class*="product-thumb-iconsgroup-position"]
        )
        li.product:hover
        .product-thumb
        .product-buttons-wrapper.product-icons
        button.button,
        .woocommerce
        ul.products.product-icongroup-hover-bounce.product-thumb-iconsgroup-style-simple[class*="thumb-alignment-top"]:not(
          [class*="product-thumb-iconsgroup-position"]
        )
        li.product:hover
        .product-thumb
        .product-buttons-wrapper.product-icons
        .button {
            bottom: auto;
            top: 0;
        }

        /* #endregion - Product Listing - Thumb Content Alignment */

        /*--------------------------------------------------------------*/
        /* #region - Thumb IconsGroup Icon */
        /*--------------------------------------------------------------*/

        .woocommerce
        ul.products
        li.product
        .product-buttons-wrapper.product-icons
        a.button.product_type_simple:before {
            content: "\e820";
            font-family: "Mfx Icons";
        }

        .woocommerce
        ul.products
        li.product
        .product-buttons-wrapper.product-icons
        a.button.product_type_variable:before {
            content: "\f218";
            font-family: "Mfx Icons";
        }

        .woocommerce
        ul.products
        li.product
        .product-buttons-wrapper.product-icons
        a.button.product_type_variation:before {
            content: "\f218";
            font-family: "Mfx Icons";
        }

        .woocommerce
        ul.products
        li.product
        .product-buttons-wrapper.product-icons
        a.button.add_to_cart_button.product_type_simple:before {
            content: "\f217";
            font-family: "Mfx Icons";
        }

        .woocommerce
        ul.products
        li.product
        .product-buttons-wrapper.product-icons
        a.added_to_cart.wc-forward:before {
            content: "\e843";
            font-family: "Mfx Icons";
            z-index: 1;
        }

        .woocommerce
        ul.products
        li.product
        .product-buttons-wrapper.product-icons
        a.button.product_type_external:before {
            content: "\f08e";
            font-family: "Mfx Icons";
        }

        .woocommerce
        ul.products
        li.product
        .product-buttons-wrapper.product-icons
        a.button.product_type_grouped:before {
            content: "\f16b";
            font-family: "Mfx Icons";
        }

        .woocommerce ul.products li.product a.add_to_cart_button.added {
            display: none !important;
        }

        /* #endregion - Thumb IconsGroup Icon */

        /*--------------------------------------------------------------*/
        /* #region - Thumb IconsGroup Icon */
        /*--------------------------------------------------------------*/

        .woocommerce
        ul.products
        li.product
        .product-buttons-wrapper.product-icons
        a.add_to_wishlist:before {
            content: "\e805";
            font-family: "Mfx Icons";
        }

        .woocommerce
        ul.products
        li.product
        .product-buttons-wrapper.product-icons
        .yith-wcwl-wishlistaddedbrowse
        a:before,
        .woocommerce
        ul.products
        li.product
        .product-buttons-wrapper.product-icons
        .yith-wcwl-wishlistexistsbrowse
        a:before {
            content: "\e804";
            font-family: "Mfx Icons";
        }

        .woocommerce ul.products li .yith-wcwl-add-to-wishlist,
        .woocommerce
        ul.products
        li
        .yith-wcwl-add-to-wishlist
        .yith-wcwl-add-button {
            vertical-align: top;
        }

        .woocommerce
        ul.products
        li.product
        .product-thumb
        .yith-wcwl-add-button.hide
        a,
        .woocommerce
        ul.products
        li
        .yith-wcwl-add-to-wishlist
        .yith-wcwl-wishlistaddedbrowse
        .feedback,
        .woocommerce
        ul.products
        li
        .yith-wcwl-add-to-wishlist
        .yith-wcwl-wishlistexistsbrowse
        .feedback {
            display: none !important;
        }

        /* #endregion - Thumb IconsGroup Icon */

        /*--------------------------------------------------------------*/
        /* #region - Thumb IconsGroup Style */
        /*--------------------------------------------------------------*/

        .woocommerce
        ul.products.product-thumb-iconsgroup-style-simple
        li.product
        .product-thumb
        .product-buttons-wrapper.product-icons
        a,
        .woocommerce
        ul.products.product-thumb-iconsgroup-style-simple
        li.product
        .product-thumb
        .product-buttons-wrapper.product-icons
        a.button,
        .woocommerce
        ul.products.product-thumb-iconsgroup-style-simple
        li.product
        .product-thumb
        .product-buttons-wrapper.product-icons
        button,
        .woocommerce
        ul.products.product-thumb-iconsgroup-style-simple
        li.product
        .product-thumb
        .product-buttons-wrapper.product-icons
        button.button,
        .woocommerce
        ul.products.product-thumb-iconsgroup-style-simple
        li.product
        .product-thumb
        .product-buttons-wrapper.product-icons
        .button {
            background: none !important;
            color: var(--mfxBodyTxtColor);
            border-radius: 50%;
        }

        .woocommerce
        ul.products.product-thumb-iconsgroup-style-simple
        li.product
        .product-thumb
        .product-buttons-wrapper.product-icons
        .wc_inline_buttons {
            background-color: #fafafa;
            -webkit-box-shadow: 0 0 5px 0 rgba(var(--mfxHeadAltColorRgb), 0.25);
            box-shadow: 0 0 5px 0 rgba(var(--mfxHeadAltColorRgb), 0.25);
        }

        /* #endregion - Thumb IconsGroup Style */

        /*--------------------------------------------------------------*/
        /* #region - Accents */
        /*--------------------------------------------------------------*/

        /* Primary */
        .woocommerce
        ul.products.product-thumb-iconsgroup-style-simple
        li.product
        .product-thumb
        .product-buttons-wrapper.product-icons
        a:hover,
        .woocommerce
        ul.products.product-thumb-iconsgroup-style-simple
        li.product
        .product-thumb
        .product-buttons-wrapper.product-icons
        a.button:hover,
        .woocommerce
        ul.products.product-thumb-iconsgroup-style-simple
        li.product
        .product-thumb
        .product-buttons-wrapper.product-icons
        button:hover,
        .woocommerce
        ul.products.product-thumb-iconsgroup-style-simple
        li.product
        .product-thumb
        .product-buttons-wrapper.product-icons
        button.button:hover,
        .woocommerce
        ul.products.product-thumb-iconsgroup-style-simple
        li.product
        .product-thumb
        .product-buttons-wrapper.product-icons
        .button:hover {
            color: var(--mfxPrimaryColor);
        }

        /* #endregion - Accents */

        /*--------------------------------------------------------------*/
        /* #region - Thumb Button Element */
        /*--------------------------------------------------------------*/

        .woocommerce
        ul.products
        li.product
        .product-buttons-wrapper.product-button
        a.button.product_type_simple:after {
            content: "\e820";
            font-family: "Mfx Icons";
        }

        .woocommerce
        ul.products
        li.product
        .product-buttons-wrapper.product-button
        a.button.product_type_variable:after {
            content: "\f218";
            font-family: "Mfx Icons";
        }

        .woocommerce
        ul.products
        li.product
        .product-buttons-wrapper.product-button
        a.button.add_to_cart_button.product_type_simple:after {
            content: "\f217";
            font-family: "Mfx Icons";
        }

        .woocommerce
        ul.products
        li.product
        .product-buttons-wrapper.product-button
        a.added_to_cart.wc-forward:after {
            content: "\e843";
            font-family: "Mfx Icons";
            z-index: 1;
        }

        .woocommerce
        ul.products
        li.product
        .product-buttons-wrapper.product-button
        a.button.product_type_external:after {
            content: "\f08e";
            font-family: "Mfx Icons";
        }

        .woocommerce
        ul.products
        li.product
        .product-buttons-wrapper.product-button
        a.button.product_type_grouped:after {
            content: "\f16b";
            font-family: "Mfx Icons";
        }

        /* #endregion - Thumb IconsGroup Icon */

        /*--------------------------------------------------------------*/
        /* #region - Thumb Button Element Style */
        /*--------------------------------------------------------------*/

        .woocommerce
        ul.products.product-thumb-buttonelement-style-bgfill-rounded
        li.product
        .product-thumb
        .product-buttons-wrapper.product-button
        .wc_btn_inline {
            -webkit-border-radius: 30px;
            border-radius: 30px;
        }

        .woocommerce
        ul.products.product-thumb-buttonelement-style-bgfill-rounded
        li.product
        .product-thumb
        .product-buttons-wrapper.product-button
        a,
        .woocommerce
        ul.products.product-thumb-buttonelement-style-bgfill-rounded
        li.product
        .product-thumb
        .product-buttons-wrapper.product-button
        a.button,
        .woocommerce
        ul.products.product-thumb-buttonelement-style-bgfill-rounded
        li.product
        .product-thumb
        .product-buttons-wrapper.product-button
        button,
        .woocommerce
        ul.products.product-thumb-buttonelement-style-bgfill-rounded
        li.product
        .product-thumb
        .product-buttons-wrapper.product-button
        button.button,
        .woocommerce
        ul.products.product-thumb-buttonelement-style-bgfill-rounded
        li.product
        .product-thumb
        .product-buttons-wrapper.product-button
        .button {
            padding-left: 30px;
            padding-right: 30px;
        }

        .woocommerce
        ul.products[class*="product-thumb-buttonelement-style-bgfill"]
        li.product
        .product-thumb
        .product-buttons-wrapper.product-button
        .wc_btn_inline:not(:hover) {
            background-color: var(--mfxBodyBGColor);
            -webkit-box-shadow: 0 1px 2px rgba(var(--mfxHeadAltColorRgb), 0.2);
            box-shadow: 0 1px 2px rgba(var(--mfxHeadAltColorRgb), 0.2);
        }

        .woocommerce
        ul.products[class*="product-thumb-buttonelement-style-bgfill"]
        li.product
        .product-thumb
        .product-buttons-wrapper.product-button
        .wc_btn_inline:not(:hover)
        a:not(:hover),
        .woocommerce
        ul.products[class*="product-thumb-buttonelement-style-bgfill"]
        li.product
        .product-thumb
        .product-buttons-wrapper.product-button
        .wc_btn_inline:not(:hover)
        a.button:not(:hover),
        .woocommerce
        ul.products[class*="product-thumb-buttonelement-style-bgfill"]
        li.product
        .product-thumb
        .product-buttons-wrapper.product-button
        .wc_btn_inline:not(:hover)
        button:not(:hover),
        .woocommerce
        ul.products[class*="product-thumb-buttonelement-style-bgfill"]
        li.product
        .product-thumb
        .product-buttons-wrapper.product-button
        .wc_btn_inline:not(:hover)
        button.button:not(:hover),
        .woocommerce
        ul.products[class*="product-thumb-buttonelement-style-bgfill"]
        li.product
        .product-thumb
        .product-buttons-wrapper.product-button
        .wc_btn_inline:not(:hover)
        .button:not(:hover) {
            color: rgba(var(--mfxHeadAltColorRgb), 0.8);
        }

        .woocommerce
        ul.products[class*="product-thumb-buttonelement-style-bgfill"]
        li.product
        .product-thumb
        .product-buttons-wrapper.product-button
        .wc_btn_inline
        a:hover,
        .woocommerce
        ul.products[class*="product-thumb-buttonelement-style-bgfill"]
        li.product
        .product-thumb
        .product-buttons-wrapper.product-button
        .wc_btn_inline
        a.button:hover,
        .woocommerce
        ul.products[class*="product-thumb-buttonelement-style-bgfill"]
        li.product
        .product-thumb
        .product-buttons-wrapper.product-button
        .wc_btn_inline
        button:hover,
        .woocommerce
        ul.products[class*="product-thumb-buttonelement-style-bgfill"]
        li.product
        .product-thumb
        .product-buttons-wrapper.product-button
        .wc_btn_inline
        button.button:hover,
        .woocommerce
        ul.products[class*="product-thumb-buttonelement-style-bgfill"]
        li.product
        .product-thumb
        .product-buttons-wrapper.product-button
        .wc_btn_inline
        .button:hover {
            color: var(--mfxAccentTxtColor);
        }

        /* Accents - Primary */
        .woocommerce
        ul.products[class*="product-thumb-buttonelement-style-bgfill"]
        li.product
        .product-thumb
        .product-buttons-wrapper.product-button
        .wc_btn_inline:hover {
            background-color: var(--mfxPrimaryColor);
        }

        /* #endregion - Thumb Button Element Style */

        /*--------------------------------------------------------------*/
        /* #region - Product Listing - Content - Title */
        /*--------------------------------------------------------------*/

        .woocommerce ul.products li.product .product-details .product-title h5 {
            margin: 0;

            text-transform: capitalize;
        }

        .woocommerce ul.products li.product .product-details > .product-title h5 {
            margin-top: 10px;
        }

        .woocommerce
        ul.products
        li.product
        .product-details
        > .product-title
        h5
        a {
            display: inline-block;

            padding: 0;
        }
        .woocommerce
        ul.products
        li.product-category
        .product-details
        .product-title
        h5 {
            display: block;

            padding: 5px 0;
        }

        .woocommerce ul.products li.product .product-details h5 .count {
            font-style: normal;
        }
        .woocommerce ul.products li.product-category .product-details h5 {
            margin: 10px 0;
        }

        .woocommerce ul.products li.product .product-wrapper > h3,
        .woocommerce ul.products li.product .product-wrapper > a h3 {
            display: none !important;
        }

        .woocommerce
        ul.products
        li.product
        .product-details
        .product-title
        h5
        a:not(:hover) {
            color: inherit;
        }

        /* #endregion - Product Listing - Content - Title */

        /*--------------------------------------------------------------*/
        /* #region - Product Content - Price */
        /*--------------------------------------------------------------*/

        .woocommerce ul.products li.product .product-details .price {
            letter-spacing: 0;
        }
        .woocommerce ul.products li.product .product-details .price ins {
            font-weight: normal;
        }
        .woocommerce ul.products li.product .product-details .price del {
            opacity: 0.85;
        }

        .woocommerce ul.products li.product .product-details .price {
            width: 100%;
            margin: -1px 0 0;
            padding: 0;

            letter-spacing: 0.4px;
        }
        .woocommerce ul.products li.product .product-details .price,
        .woocommerce ul.products li.product .product-details .price ins,
        .woocommerce ul.products li.product .product-details .price del {
            font-size: 14px;
        }
        .woocommerce ul.products li.product .product-details .price ins {
            font-weight: 600;
        }

        .woocommerce ul.products li.product .product-details .product-price {
            width: 100%;
        }

        .woocommerce ul.products li.product .product-details .product-price,
        .woocommerce
        ul.products
        li.product
        .product-details
        .product-price
        .price,
        .woocommerce ul.products li.product .product-details .price del {
            display: inline-block;
        }

        .woocommerce ul.products li.product .product-details .product-price,
        .woocommerce ul.products li.product .product-details .price {
            -webkit-transition: all 300ms linear 0s;
            -moz-transition: all 300ms linear 0s;
            -ms-transition: all 300ms linear 0s;
            -o-transition: all 300ms linear 0s;
            transition: all 300ms linear 0s;
        }

        /* #endregion - Product Content - Price */

        /*--------------------------------------------------------------*/
        /* #region - Product Listing - Content Alignment */
        /*--------------------------------------------------------------*/

        .woocommerce
        ul.products.product-content-alignment-center
        li.product
        .product-details {
            text-align: center;
        }

        /* #endregion - Product Listing - Content Alignment */

        /*--------------------------------------------------------------*/
        /* #region - Content IconsGroup Style */
        /*--------------------------------------------------------------*/

        .woocommerce
        ul.products.product-content-iconsgroup-style-simple
        li.product
        .product-details
        .product-buttons-wrapper.product-icons
        a,
        .woocommerce
        ul.products.product-content-iconsgroup-style-simple
        li.product
        .product-details
        .product-buttons-wrapper.product-icons
        a.button,
        .woocommerce
        ul.products.product-content-iconsgroup-style-simple
        li.product
        .product-details
        .product-buttons-wrapper.product-icons
        button,
        .woocommerce
        ul.products.product-content-iconsgroup-style-simple
        li.product
        .product-details
        .product-buttons-wrapper.product-icons
        button.button,
        .woocommerce
        ul.products.product-content-iconsgroup-style-simple
        li.product
        .product-details
        .product-buttons-wrapper.product-icons
        .button {
            color: var(--mfxBodyTxtColor);
            -webkit-border-radius: 50%;
            border-radius: 50%;
            background: none !important;
        }

        .woocommerce
        ul.products.product-content-iconsgroup-style-simple
        li.product
        .product-details
        .product-buttons-wrapper.product-icons
        .wc_inline_buttons {
            background-color: rgba(var(--mfxHeadAltColorRgb), 0.015);
            -webkit-box-shadow: 1px 1px 1px rgba(var(--mfxHeadAltColorRgb), 0.15);
            box-shadow: 1px 1px 1px rgba(var(--mfxHeadAltColorRgb), 0.15);
        }

        /* #endregion - Content IconsGroup Style */

        /*--------------------------------------------------------------*/
        /* #region - Accents */
        /*--------------------------------------------------------------*/

        /* Primary */
        .woocommerce
        ul.products.product-content-iconsgroup-style-simple
        li.product
        .product-details
        .product-buttons-wrapper.product-icons
        a:hover,
        .woocommerce
        ul.products.product-content-iconsgroup-style-simple
        li.product
        .product-details
        .product-buttons-wrapper.product-icons
        a.button:hover,
        .woocommerce
        ul.products.product-content-iconsgroup-style-simple
        li.product
        .product-details
        .product-buttons-wrapper.product-icons
        button:hover,
        .woocommerce
        ul.products.product-content-iconsgroup-style-simple
        li.product
        .product-details
        .product-buttons-wrapper.product-icons
        button.button:hover,
        .woocommerce
        ul.products.product-content-iconsgroup-style-simple
        li.product
        .product-details
        .product-buttons-wrapper.product-icons
        .button:hover {
            color: var(--mfxPrimaryColor);
        }

        /* #endregion - Accents */

        /*--------------------------------------------------------------*/
        /* #region - Button Element Button */
        /*--------------------------------------------------------------*/

        .woocommerce
        ul.products
        li.product
        .product-buttons-wrapper.product-button
        a.button.product_type_simple:after {
            font-family: "Mfx Icons";

            content: "\e820";
        }

        .woocommerce
        ul.products
        li.product
        .product-buttons-wrapper.product-button
        a.button.product_type_variable:after {
            font-family: "Mfx Icons";

            content: "\f218";
        }

        .woocommerce
        ul.products
        li.product
        .product-buttons-wrapper.product-button
        a.button.add_to_cart_button.product_type_simple:after {
            font-family: "Mfx Icons";

            content: "\f217";
        }

        .woocommerce
        ul.products
        li.product
        .product-buttons-wrapper.product-button
        a.added_to_cart.wc-forward:after {
            font-family: "Mfx Icons";

            z-index: 1;

            content: "\e843";
        }

        .woocommerce
        ul.products
        li.product
        .product-buttons-wrapper.product-button
        a.button.product_type_external:after {
            font-family: "Mfx Icons";

            content: "\f08e";
        }

        .woocommerce
        ul.products
        li.product
        .product-buttons-wrapper.product-button
        a.button.product_type_grouped:after {
            font-family: "Mfx Icons";

            content: "\f16b";
        }

        /* #endregion - IconsGroup Button */

        /*--------------------------------------------------------------*/
        /* #region - Product Content Button Element Style */
        /*--------------------------------------------------------------*/

        .woocommerce
        ul.products.product-content-buttonelement-style-simple
        li.product
        .product-details
        .product-buttons-wrapper.product-button
        .wc_btn_inline
        a,
        .woocommerce
        ul.products.product-content-buttonelement-style-simple
        li.product
        .product-details
        .product-buttons-wrapper.product-button
        .wc_btn_inline
        a.button,
        .woocommerce
        ul.products.product-content-buttonelement-style-simple
        li.product
        .product-details
        .product-buttons-wrapper.product-button
        .wc_btn_inline
        button,
        .woocommerce
        ul.products.product-content-buttonelement-style-simple
        li.product
        .product-details
        .product-buttons-wrapper.product-button
        .wc_btn_inline
        button.button,
        .woocommerce
        ul.products.product-content-buttonelement-style-simple
        li.product
        .product-details
        .product-buttons-wrapper.product-button
        .wc_btn_inline
        .button {
            color: var(--mfxBodyTxtColor);
            border-radius: 50%;
            background: none !important;
        }

        .woocommerce
        ul.products.product-content-buttonelement-style-simple
        li.product
        .product-details
        .product-buttons-wrapper.product-button
        .wc_inline_buttons
        .wc_btn_inline {
            background-color: rgba(var(--mfxHeadAltColorRgb), 0.015);
            -webkit-box-shadow: 1px 1px 1px rgba(var(--mfxHeadAltColorRgb), 0.15);
            box-shadow: 1px 1px 1px rgba(var(--mfxHeadAltColorRgb), 0.15);
        }

        /* #endregion - Product Content Button Element Style */

        /*--------------------------------------------------------------*/
        /* #region - Accents */
        /*--------------------------------------------------------------*/

        /* Primary */
        .woocommerce
        ul.products.product-content-buttonelement-style-simple
        li.product
        .product-details
        .product-buttons-wrapper.product-button
        .wc_btn_inline:hover,
        .woocommerce
        ul.products.product-content-buttonelement-style-simple
        li.product
        .product-details
        .product-buttons-wrapper.product-button
        .wc_btn_inline
        a:hover,
        .woocommerce
        ul.products.product-content-buttonelement-style-simple
        li.product
        .product-details
        .product-buttons-wrapper.product-button
        .wc_btn_inline
        a.button:hover,
        .woocommerce
        ul.products.product-content-buttonelement-style-simple
        li.product
        .product-details
        .product-buttons-wrapper.product-button
        .wc_btn_inline
        button:hover,
        .woocommerce
        ul.products.product-content-buttonelement-style-simple
        li.product
        .product-details
        .product-buttons-wrapper.product-button
        .wc_btn_inline
        button.button:hover,
        .woocommerce
        ul.products.product-content-buttonelement-style-simple
        li.product
        .product-details
        .product-buttons-wrapper.product-button
        .wc_btn_inline
        .button:hover {
            color: var(--mfxPrimaryColor);
        }

        /* #endregion - Accents */
    </style>
    <style id="mfx-elementor-logo-inline-inline-css" type="text/css">
        div#milmaa-51e6d15 img {
            width: 130px;
            max-width: 130px;
        }
    </style>
</head>

<body
    class="home page-template-default page page-id-7 custom-background wp-custom-logo theme-milmaa woocommerce-no-js has-go-to-top milmaa-plus-1.0.2 milmaa-pro-1.0.0 elementor-default elementor-kit-6 elementor-page elementor-page-7"
>
<a class="skip-link screen-reader-text" href="#main">Skip to content</a>

