@include('header')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        .fuse_social_icons_links {
            display: block;
        }

        .facebook-awesome-social::before {
            content: "\f09a" !important;
        }

        .awesome-social-img img {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .awesome-social-img {
            position: relative;
        }

        .icon_wrapper .awesome-social {
            font-family: 'FontAwesome' !important;
        }

        #icon_wrapper .fuse_social_icons_links .awesome-social {
            font-family: "FontAwesome" !important;
            ext-rendering: auto !important;
            -webkit-font-smoothing: antialiased !important;
            -moz-osx-font-smoothing: grayscale !important;
        }


        #icon_wrapper {
            position: fixed;
            top: 50%;
            left: 0px;
            z-index: 99999;
        }

        .awesome-social {

            margin-top: 2px;

            color: #fff !important;

            text-align: center !important;

            display: block;


            line-height: 34px !important;

            width: 32px !important;

            height: 32px !important;

            font-size: 16px !important;


            -moz-transition: width 0.5s, height 0.5s, -webkit-transform 0.5s;
            /* For Safari 3.1 to 6.0 */



            -webkit-transition: width 0.5s, height 0.5s, -webkit-transform 0.5s;
            /* For Safari 3.1 to 6.0 */

            transition: width 0.5s, height 0.5s, transform 0.5s;






        }


        .awesome-social:hover {



            -webkit-transform: rotate(360deg);
            /* Chrome, Safari, Opera */

            transform: rotate(deg);

            -moz-transform: rotate(360deg);
            /* Chrome, Safari, Opera */

            -ms-transform: rotate(360deg);
            /* Chrome, Safari, Opera */



        }


        .fuse_social_icons_links {

            outline: 0 !important;



        }

        .fuse_social_icons_links:hover {

            text-decoration: none !important;

        }


        .fb-awesome-social {

            background: #3b5998;
            border-color: #3b5998;

        }

        .facebook-awesome-social {

            background: #3b5998;
            border-color: #3b5998;
        }


        .tw-awesome-social {

            background: #00aced;
            border-color: #00aced;

        }

        .twitter-awesome-social {

            background: #00aced;
            border-color: #00aced;

        }

        .rss-awesome-social {

            background: #FA9B39;
            border-color: #FA9B39;

        }

        .linkedin-awesome-social {

            background: #007bb6;
            border-color: #007bb6;
        }

        .youtube-awesome-social {

            background: #bb0000;
            border-color: #bb0000;
        }

        .flickr-awesome-social {

            background: #ff0084;
            border-color: #ff0084;
        }

        .pinterest-awesome-social {

            background: #cb2027;
            border-color: #cb2027;
        }

        .stumbleupon-awesome-social {

            background: #f74425;
            border-color: #f74425;
        }

        .google-plus-awesome-social {

            background: #f74425;
            border-color: #f74425;
        }

        .instagram-awesome-social {

            background: -moz-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
            background: -webkit-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
            background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f09433', endColorstr='#bc1888', GradientType=1);
            border-color: #f09433;


        }

        .tumblr-awesome-social {

            background: #32506d;
            border-color: #32506d;
        }

        .vine-awesome-social {

            background: #00bf8f;
            border-color: #00bf8f;
        }

        .vk-awesome-social {



            background: #45668e;
            border-color: #45668e;

        }

        .soundcloud-awesome-social {

            background: #ff3300;
            border-color: #ff3300;

        }

        .reddit-awesome-social {



            background: #ff4500;
            border-color: #ff4500;

        }

        .stack-awesome-social {



            background: #fe7a15;
            border-color: #fe7a15;

        }

        .behance-awesome-social {

            background: #1769ff;
            border-color: #1769ff;

        }

        .github-awesome-social {

            background: #999999;
            border-color: #999999;



        }

        .envelope-awesome-social {

            background: #ccc;
            border-color: #ccc;
        }

        /*  Mobile */



        @media(max-width:768px) {
            #icon_wrapper {



                display: none;

            }

        }




        /* Custom Background */
    </style>


    <!-- All in One SEO 4.1.5.2 -->
    <meta name="description"
        content="MCC - Magna Carta College offers the best courses related to related to Business Management, MBA and Professional Certifications " />
    <meta name="robots" content="max-image-preview:large" />
    <link rel="canonical" href="https://magnacartacollege.ac.uk/about-us/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:site_name"
        content="Magna Carta College - UK Qualifications from Oxford&#039;s Independant Business School" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="About Magna Carta College | MCC" />
    <meta property="og:description"
        content="MCC - Magna Carta College offers the best courses related to related to Business Management, MBA and Professional Certifications " />
    <meta property="og:url" content="https://magnacartacollege.ac.uk/about-us/" />
    <meta property="article:published_time" content="2021-09-28T11:25:54+00:00" />
    <meta property="article:modified_time" content="2022-09-26T12:31:49+00:00" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:domain" content="magnacartacollege.ac.uk" />
    <meta name="twitter:title" content="About Magna Carta College | MCC" />
    <meta name="twitter:description"
        content="MCC - Magna Carta College offers the best courses related to related to Business Management, MBA and Professional Certifications " />
    <script type="application/ld+json" class="aioseo-schema">
			{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebSite","@id":"https:\/\/magnacartacollege.ac.uk\/#website","url":"https:\/\/magnacartacollege.ac.uk\/","name":"Magna Carta College","description":"UK Qualifications from Oxford's Independant Business School","inLanguage":"en-US","publisher":{"@id":"https:\/\/magnacartacollege.ac.uk\/#organization"}},{"@type":"Organization","@id":"https:\/\/magnacartacollege.ac.uk\/#organization","name":"Magna Carta College","url":"https:\/\/magnacartacollege.ac.uk\/"},{"@type":"BreadcrumbList","@id":"https:\/\/magnacartacollege.ac.uk\/about-us\/#breadcrumblist","itemListElement":[{"@type":"ListItem","@id":"https:\/\/magnacartacollege.ac.uk\/#listItem","position":1,"item":{"@type":"WebPage","@id":"https:\/\/magnacartacollege.ac.uk\/","name":"Home","description":"Join MCC - Magna Carta College UK for the best courses related to IFY, Level 7, BA Top Up Business Management, MBA and Professional Certifications.","url":"https:\/\/magnacartacollege.ac.uk\/"},"nextItem":"https:\/\/magnacartacollege.ac.uk\/about-us\/#listItem"},{"@type":"ListItem","@id":"https:\/\/magnacartacollege.ac.uk\/about-us\/#listItem","position":2,"item":{"@type":"WebPage","@id":"https:\/\/magnacartacollege.ac.uk\/about-us\/","name":"About Us","description":"MCC - Magna Carta College offers the best courses related to related to Business Management, MBA and Professional Certifications","url":"https:\/\/magnacartacollege.ac.uk\/about-us\/"},"previousItem":"https:\/\/magnacartacollege.ac.uk\/#listItem"}]},{"@type":"WebPage","@id":"https:\/\/magnacartacollege.ac.uk\/about-us\/#webpage","url":"https:\/\/magnacartacollege.ac.uk\/about-us\/","name":"About Magna Carta College | MCC","description":"MCC - Magna Carta College offers the best courses related to related to Business Management, MBA and Professional Certifications","inLanguage":"en-US","isPartOf":{"@id":"https:\/\/magnacartacollege.ac.uk\/#website"},"breadcrumb":{"@id":"https:\/\/magnacartacollege.ac.uk\/about-us\/#breadcrumblist"},"datePublished":"2021-09-28T11:25:54+00:00","dateModified":"2022-09-26T12:31:49+00:00"}]}
		</script>
    <!-- All in One SEO -->

    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin />
    <link rel="alternate" type="application/rss+xml" title="Magna Carta College &raquo; Feed"
        href="https://magnacartacollege.ac.uk/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Magna Carta College &raquo; Comments Feed"
        href="https://magnacartacollege.ac.uk/comments/feed/" />
    <!-- This site uses the Google Analytics by MonsterInsights plugin v8.10.0 - Using Analytics tracking - https://www.monsterinsights.com/ -->
    <!-- Note: MonsterInsights is not currently configured on this site. The site owner needs to authenticate with Google Analytics in the MonsterInsights settings panel. -->
    <!-- No UA code set -->
    <!-- / Google Analytics by MonsterInsights -->
    <script type="text/javascript">
        /* <![CDATA[ */
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/magnacartacollege.ac.uk\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.4.2"
            }
        };
        /*! This file is auto-generated */
        ! function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
                        .getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !
                            n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e,
                                "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                            );
                    case "emoji":
                        return !n(e, "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff",
                            "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
                        300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() <
                            e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
                        typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p
                                .toString()
                            ].join(",") + "));",
                            r = new Blob([e], {
                                type: "text/javascript"
                            }),
                            a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(a.onmessage = function(e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
                    .supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
                        .everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
                    .DOMReady = !1, n.readyCallback = function() {
                        n.DOMReady = !0
                    }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e
                    .concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
        /* ]]> */
    </script>
    <link rel='stylesheet' id='course-review-css'
        href='https://magnacartacollege.ac.uk/wp-content/plugins/learnpress-course-review/assets/css/course-review.css?ver=6.4.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='sb_instagram_styles-css'
        href='https://magnacartacollege.ac.uk/wp-content/plugins/instagram-feed/css/sbi-styles.min.css?ver=2.9.8'
        type='text/css' media='all' />
    <style id='wp-emoji-styles-inline-css' type='text/css'>
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
    <link rel='stylesheet' id='wp-block-library-css'
        href='https://magnacartacollege.ac.uk/wp-includes/css/dist/block-library/style.min.css?ver=6.4.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-vendors-style-css'
        href='https://magnacartacollege.ac.uk/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-style.css?ver=5.9.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-css'
        href='https://magnacartacollege.ac.uk/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-style.css?ver=5.9.1'
        type='text/css' media='all' />
    <style id='classic-theme-styles-inline-css' type='text/css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id='global-styles-inline-css' type='text/css'>
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
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
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
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        body .is-layout-grid>* {
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
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
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
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
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
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
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
    <link rel='stylesheet' id='contact-form-7-css'
        href='https://magnacartacollege.ac.uk/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.5.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='cookie-law-info-css'
        href='https://magnacartacollege.ac.uk/wp-content/plugins/cookie-law-info/public/css/cookie-law-info-public.css?ver=2.0.6'
        type='text/css' media='all' />
    <link rel='stylesheet' id='cookie-law-info-gdpr-css'
        href='https://magnacartacollege.ac.uk/wp-content/plugins/cookie-law-info/public/css/cookie-law-info-gdpr.css?ver=2.0.6'
        type='text/css' media='all' />
    <link rel='stylesheet' id='ditty-news-ticker-font-css'
        href='https://magnacartacollege.ac.uk/wp-content/plugins/ditty-news-ticker/inc/static/libs/fontastic/styles.css?ver=2.3.14'
        type='text/css' media='all' />
    <link rel='stylesheet' id='ditty-news-ticker-css'
        href='https://magnacartacollege.ac.uk/wp-content/plugins/ditty-news-ticker/inc/static/css/style.css?ver=1639558109'
        type='text/css' media='all' />
    <link rel='stylesheet' id='fontawesome-css'
        href='https://magnacartacollege.ac.uk/wp-content/plugins/fuse-social-floating-sidebar/inc/font-awesome/css/font-awesome.min.css?ver=6.4.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='rs-plugin-settings-css'
        href='https://magnacartacollege.ac.uk/wp-content/plugins/revslider/public/assets/css/rs6.css?ver=6.4.11'
        type='text/css' media='all' />
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        #rs-demo-id {}
    </style>
    <link rel='stylesheet' id='woocommerce-layout-css'
        href='https://magnacartacollege.ac.uk/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=5.8.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css'
        href='https://magnacartacollege.ac.uk/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=5.8.0'
        type='text/css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css'
        href='https://magnacartacollege.ac.uk/wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=5.8.0'
        type='text/css' media='all' />
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='1aaf3b081-css'
        href='https://magnacartacollege.ac.uk/wp-content/uploads/essential-addons-elementor/734e5f942.min.css?ver=1702383858'
        type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-css'
        href='https://magnacartacollege.ac.uk/wp-content/plugins/rselements/assets/css/bootstrap.min.css?ver=6.4.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='magnific-popup-css'
        href='https://magnacartacollege.ac.uk/wp-content/plugins/rselements/assets/css/magnific-popup.css?ver=6.4.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-latest-css'
        href='https://magnacartacollege.ac.uk/wp-content/plugins/rselements/assets/css/fontawesome.css?ver=6.4.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='slick-css'
        href='https://magnacartacollege.ac.uk/wp-content/plugins/rselements/assets/css/slick.css?ver=6.4.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='slick-theme-css'
        href='https://magnacartacollege.ac.uk/wp-content/plugins/rselements/assets/css/slick-theme.css?ver=6.4.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='brands-css'
        href='https://magnacartacollege.ac.uk/wp-content/plugins/rselements/assets/css/brands.css?ver=6.4.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='solid-css'
        href='https://magnacartacollege.ac.uk/wp-content/plugins/rselements/assets/css/solid.css?ver=6.4.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='rsaddons-floaticon-css'
        href='https://magnacartacollege.ac.uk/wp-content/plugins/rselements/assets/fonts/flaticon.css?ver=6.4.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='headding-title-css'
        href='https://magnacartacollege.ac.uk/wp-content/plugins/rselements/assets/css/headding-title.css?ver=6.4.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='ddbeforeandafter-css'
        href='https://magnacartacollege.ac.uk/wp-content/plugins/rselements/assets/css/ddbeforeandafter.css?ver=6.4.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='boostrap-css'
        href='https://magnacartacollege.ac.uk/wp-content/themes/educavo/assets/css/bootstrap.min.css?ver=6.4.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-all-css'
        href='https://magnacartacollege.ac.uk/wp-content/themes/educavo/assets/css/font-awesome.min.all.css?ver=6.4.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-css'
        href='https://magnacartacollege.ac.uk/wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min.css?ver=4.7.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='flaticon-css'
        href='https://magnacartacollege.ac.uk/wp-content/themes/educavo/assets/css/flaticon.css?ver=6.4.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='animate-css'
        href='https://magnacartacollege.ac.uk/wp-content/themes/educavo/assets/css/animate.css?ver=6.4.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='owl-carousel-css'
        href='https://magnacartacollege.ac.uk/wp-content/themes/educavo/assets/css/owl.carousel.css?ver=6.4.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='educavo-style-default-css'
        href='https://magnacartacollege.ac.uk/wp-content/themes/educavo/assets/css/default.css?ver=6.4.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='educavo-style-custom-css'
        href='https://magnacartacollege.ac.uk/wp-content/themes/educavo/assets/css/custom.css?ver=6.4.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='educavo-gutenberg-custom-css'
        href='https://magnacartacollege.ac.uk/wp-content/themes/educavo/assets/css/gutenberg-custom.css?ver=6.4.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='educavo-style-responsive-css'
        href='https://magnacartacollege.ac.uk/wp-content/themes/educavo/assets/css/responsive.css?ver=6.4.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='educavo-style-css'
        href='https://magnacartacollege.ac.uk/wp-content/themes/educavo-child/style.css?ver=6.4.2' type='text/css'
        media='all' />
    <link rel='stylesheet' id='studio-fonts-css'
        href='//fonts.googleapis.com/css?family=Rubik%3A300%2C400%2C500%2C600%2C700%2C900%7CNunito%3A300%2C400%2C500%2C600%2C700%2C900&#038;ver=1.0.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='dashicons-css'
        href='https://magnacartacollege.ac.uk/wp-includes/css/dashicons.min.css?ver=6.4.2' type='text/css'
        media='all' />
    <link rel='stylesheet' id='wpdreams-asl-basic-css'
        href='https://magnacartacollege.ac.uk/wp-content/plugins/ajax-search-lite/css/style.basic.css?ver=4.9.5'
        type='text/css' media='all' />
    <link rel='stylesheet' id='wpdreams-ajaxsearchlite-css'
        href='https://magnacartacollege.ac.uk/wp-content/plugins/ajax-search-lite/css/style-curvy-black.css?ver=4.9.5'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-css'
        href='https://magnacartacollege.ac.uk/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.12.0'
        type='text/css' media='all' />
    <style id='elementor-icons-inline-css' type='text/css'>
        .elementor-add-new-section .elementor-add-templately-promo-button {
            background-color: #5d4fff;
            background-image: url(https://magnacartacollege.ac.uk/wp-content/plugins/essential-addons-for-elementor-lite/assets/admin/images/templately/logo-icon.svg);
            background-repeat: no-repeat;
            background-position: center center;
            margin-left: 5px;
            position: relative;
            bottom: 5px;
        }
    </style>
    <link rel='stylesheet' id='elementor-frontend-css'
        href='https://magnacartacollege.ac.uk/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=3.4.3'
        type='text/css' media='all' />
    <style id='elementor-frontend-inline-css' type='text/css'>
        @font-face {
            font-family: eicons;
            src: url(https://magnacartacollege.ac.uk/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.eot?5.10.0);
            src: url(https://magnacartacollege.ac.uk/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.eot?5.10.0#iefix) format("embedded-opentype"), url(https://magnacartacollege.ac.uk/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff2?5.10.0) format("woff2"), url(https://magnacartacollege.ac.uk/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff?5.10.0) format("woff"), url(https://magnacartacollege.ac.uk/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.ttf?5.10.0) format("truetype"), url(https://magnacartacollege.ac.uk/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.svg?5.10.0#eicon) format("svg");
            font-weight: 400;
            font-style: normal
        }
    </style>
    <link rel='stylesheet' id='elementor-post-14-css'
        href='https://magnacartacollege.ac.uk/wp-content/uploads/elementor/css/post-14.css?ver=1630325257'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-global-css'
        href='https://magnacartacollege.ac.uk/wp-content/uploads/elementor/css/global.css?ver=1630325258'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-17613-css'
        href='https://magnacartacollege.ac.uk/wp-content/uploads/elementor/css/post-17613.css?ver=1664195517'
        type='text/css' media='all' />
    <link rel='stylesheet' id='childstyle-css'
        href='https://magnacartacollege.ac.uk/wp-content/themes/educavo/style.css?ver=6.4.2' type='text/css'
        media='all' />
    <link rel='stylesheet' id='popupaoc-public-style-css'
        href='https://magnacartacollege.ac.uk/wp-content/plugins/popup-anything-on-click/assets/css/popupaoc-public.css?ver=2.0.7'
        type='text/css' media='all' />
    <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic&#038;display=swap&#038;ver=1698734868" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic&#038;display=swap&#038;ver=1698734868"
        media="print" onload="this.media='all'"><noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic&#038;display=swap&#038;ver=1698734868" />
    </noscript>
    <link rel='stylesheet' id='learnpress-widgets-css'
        href='https://magnacartacollege.ac.uk/wp-content/plugins/learnpress/assets/css/widgets.css?ver=4.1.4'
        type='text/css' media='all' />
    <link rel='stylesheet' id='google-fonts-1-css'
        href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.4.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-shared-0-css'
        href='https://magnacartacollege.ac.uk/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-solid-css'
        href='https://magnacartacollege.ac.uk/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3'
        type='text/css' media='all' />
    <script type="text/javascript" src="https://magnacartacollege.ac.uk/wp-includes/js/jquery/jquery.min.js?ver=3.7.1"
        id="jquery-core-js"></script>
    <script type="text/javascript"
        src="https://magnacartacollege.ac.uk/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js">
    </script>
    <script type="text/javascript" id="cookie-law-info-js-extra">
        /* <![CDATA[ */
        var Cli_Data = {
            "nn_cookie_ids": [],
            "cookielist": [],
            "non_necessary_cookies": [],
            "ccpaEnabled": "",
            "ccpaRegionBased": "",
            "ccpaBarEnabled": "",
            "strictlyEnabled": ["necessary", "obligatoire"],
            "ccpaType": "gdpr",
            "js_blocking": "1",
            "custom_integration": "",
            "triggerDomRefresh": "",
            "secure_cookies": ""
        };
        var cli_cookiebar_settings = {
            "animate_speed_hide": "500",
            "animate_speed_show": "500",
            "background": "#FFF",
            "border": "#b1a6a6c2",
            "border_on": "",
            "button_1_button_colour": "#61a229",
            "button_1_button_hover": "#4e8221",
            "button_1_link_colour": "#fff",
            "button_1_as_button": "1",
            "button_1_new_win": "",
            "button_2_button_colour": "#333",
            "button_2_button_hover": "#292929",
            "button_2_link_colour": "#444",
            "button_2_as_button": "",
            "button_2_hidebar": "",
            "button_3_button_colour": "#dedfe0",
            "button_3_button_hover": "#b2b2b3",
            "button_3_link_colour": "#333333",
            "button_3_as_button": "1",
            "button_3_new_win": "",
            "button_4_button_colour": "#dedfe0",
            "button_4_button_hover": "#b2b2b3",
            "button_4_link_colour": "#333333",
            "button_4_as_button": "1",
            "button_7_button_colour": "#61a229",
            "button_7_button_hover": "#4e8221",
            "button_7_link_colour": "#fff",
            "button_7_as_button": "1",
            "button_7_new_win": "",
            "font_family": "inherit",
            "header_fix": "",
            "notify_animate_hide": "1",
            "notify_animate_show": "",
            "notify_div_id": "#cookie-law-info-bar",
            "notify_position_horizontal": "right",
            "notify_position_vertical": "bottom",
            "scroll_close": "",
            "scroll_close_reload": "",
            "accept_close_reload": "",
            "reject_close_reload": "",
            "showagain_tab": "",
            "showagain_background": "#fff",
            "showagain_border": "#000",
            "showagain_div_id": "#cookie-law-info-again",
            "showagain_x_position": "100px",
            "text": "#333333",
            "show_once_yn": "",
            "show_once": "10000",
            "logging_on": "",
            "as_popup": "",
            "popup_overlay": "",
            "bar_heading_text": "",
            "cookie_bar_as": "banner",
            "popup_showagain_position": "bottom-right",
            "widget_position": "left"
        };
        var log_object = {
            "ajax_url": "https:\/\/magnacartacollege.ac.uk\/wp-admin\/admin-ajax.php"
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://magnacartacollege.ac.uk/wp-content/plugins/cookie-law-info/public/js/cookie-law-info-public.js?ver=2.0.6"
        id="cookie-law-info-js"></script>
    <script type="text/javascript" id="fuse-social-script-js-extra">
        /* <![CDATA[ */
        var fuse_social = {
            "ajax_url": "https:\/\/magnacartacollege.ac.uk\/wp-admin\/admin-ajax.php"
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://magnacartacollege.ac.uk/wp-content/plugins/fuse-social-floating-sidebar/inc/js/fuse_script.js?ver=2099849574"
        id="fuse-social-script-js"></script>
    <script type="text/javascript"
        src="https://magnacartacollege.ac.uk/wp-content/plugins/revslider/public/assets/js/rbtools.min.js?ver=6.4.8"
        id="tp-tools-js"></script>
    <script type="text/javascript"
        src="https://magnacartacollege.ac.uk/wp-content/plugins/revslider/public/assets/js/rs6.min.js?ver=6.4.11"
        id="revmin-js"></script>
    <link rel="https://api.w.org/" href="https://magnacartacollege.ac.uk/wp-json/" />
    <link rel="alternate" type="application/json" href="https://magnacartacollege.ac.uk/wp-json/wp/v2/pages/17613" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD"
        href="https://magnacartacollege.ac.uk/xmlrpc.php?rsd" />
    <meta name="generator" content="WordPress 6.4.2" />
    <meta name="generator" content="WooCommerce 5.8.0" />
    <link rel='shortlink' href='https://magnacartacollege.ac.uk/?p=17613' />
    <link rel="alternate" type="application/json+oembed"
        href="https://magnacartacollege.ac.uk/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmagnacartacollege.ac.uk%2Fabout-us%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="https://magnacartacollege.ac.uk/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmagnacartacollege.ac.uk%2Fabout-us%2F&#038;format=xml" />
    <meta name="framework" content="Redux 4.3.1" />
    <style id="learn-press-custom-css">
        :root {
            --lp-primary-color: #ffb606;
            --lp-secondary-color: #442e66;
        }
    </style>

    <script>
        document.documentElement.className = document.documentElement.className.replace('no-js', 'js');
    </script>
    <style>
        .no-js img.lazyload {
            display: none;
        }

        figure.wp-block-image img.lazyloading {
            min-width: 150px;
        }

        .lazyload,
        .lazyloading {
            opacity: 0;
        }

        .lazyloaded {
            opacity: 1;
            transition: opacity 400ms;
            transition-delay: 0ms;
        }
    </style>
    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preload" as="style" href="//fonts.googleapis.com/css?family=Open+Sans&display=swap" />
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans&display=swap" media="all" />

    <!-- Facebook Pixel Code -->
    <script type="text/plain" data-cli-class="cli-blocker-script"  data-cli-script-type="analytics" data-cli-block="true"  data-cli-element-position="head">
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
</script>
    <!-- End Facebook Pixel Code -->
    <script type="text/plain" data-cli-class="cli-blocker-script"  data-cli-script-type="analytics" data-cli-block="true"  data-cli-element-position="head">
  fbq('init', '1795000420711134', {}, {
    "agent": "wordpress-6.4.2-3.0.6"
});
</script>
    <script type="text/plain" data-cli-class="cli-blocker-script"  data-cli-script-type="analytics" data-cli-block="true"  data-cli-element-position="head">
  fbq('track', 'PageView', []);
</script>
    <!-- Facebook Pixel Code -->
    <noscript>
        <img height="1" width="1" style="display:none" alt="fbpx"
            src="https://www.facebook.com/tr?id=1795000420711134&ev=PageView&noscript=1" />
    </noscript>
    <!-- End Facebook Pixel Code -->
    <meta name="generator"
        content="Powered by Slider Revolution 6.4.11 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <style>
        @font-face {
            font-family: 'aslsicons2';
            src: url('https://magnacartacollege.ac.uk/wp-content/plugins/ajax-search-lite/css/fonts/icons2.eot');
            src: url('https://magnacartacollege.ac.uk/wp-content/plugins/ajax-search-lite/css/fonts/icons2.eot?#iefix') format('embedded-opentype'),
                url('https://magnacartacollege.ac.uk/wp-content/plugins/ajax-search-lite/css/fonts/icons2.woff2') format('woff2'),
                url('https://magnacartacollege.ac.uk/wp-content/plugins/ajax-search-lite/css/fonts/icons2.woff') format('woff'),
                url('https://magnacartacollege.ac.uk/wp-content/plugins/ajax-search-lite/css/fonts/icons2.ttf') format('truetype'),
                url('https://magnacartacollege.ac.uk/wp-content/plugins/ajax-search-lite/css/fonts/icons2.svg#icons') format('svg');
            font-weight: normal;
            font-style: normal;
        }

        div[id*='ajaxsearchlitesettings'].searchsettings .asl_option_inner label {
            font-size: 0px !important;
            color: rgba(0, 0, 0, 0);
        }

        div[id*='ajaxsearchlitesettings'].searchsettings .asl_option_inner label:after {
            font-size: 11px !important;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1;
        }

        div[id*='ajaxsearchlite'].wpdreams_asl_container {
            width: 100%;
            margin: 0px 0px 0px 0px;
        }

        div[id*='ajaxsearchliteres'].wpdreams_asl_results div.resdrg span.highlighted {
            font-weight: bold;
            color: rgba(217, 49, 43, 1);
            background-color: rgba(238, 238, 238, 1);
        }

        div[id*='ajaxsearchliteres'].wpdreams_asl_results .results div.asl_image {
            width: 70px;
            height: 70px;
            background-size: cover;
            background-repeat: no-repeat;
        }

        div.asl_r .results {
            max-height: none;
        }

        .asl_w,
        .asl_w * {
            font-family: "Montserrat", "Open Sans" !important;
        }

        .asl_m input[type=search]::placeholder {
            font-family: "Montserrat", "Open Sans" !important;
        }

        .asl_m input[type=search]::-webkit-input-placeholder {
            font-family: "Montserrat", "Open Sans" !important;
        }

        .asl_m input[type=search]::-moz-placeholder {
            font-family: "Montserrat", "Open Sans" !important;
        }

        .asl_m input[type=search]:-ms-input-placeholder {
            font-family: "Montserrat", "Open Sans" !important;
        }

        div.asl_r.asl_w.vertical .results .item::after {
            display: block;
            position: absolute;
            bottom: 0;
            content: '';
            height: 1px;
            width: 100%;
            background: #D8D8D8;
        }

        div.asl_r.asl_w.vertical .results .item.asl_last_item::after {
            display: none;
        }
    </style>
    <script type="text/javascript">
        if (typeof _ASL !== "undefined" && _ASL !== null && typeof _ASL.initialize !== "undefined") {
            _ASL.initialize();
        }
    </script>
    <script type="text/javascript">
        function setREVStartSize(e) {
            //window.requestAnimationFrame(function() {
            window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
            window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
            try {
                var pw = document.getElementById(e.c).parentNode.offsetWidth,
                    newh;
                pw = pw === 0 || isNaN(pw) ? window.RSIW : pw;
                e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
                e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
                e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
                e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
                e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
                e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
                e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
                if (e.layout === "fullscreen" || e.l === "fullscreen")
                    newh = Math.max(e.mh, window.RSIH);
                else {
                    e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                    for (var i in e.rl)
                        if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                    e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                    e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                    for (var i in e.rl)
                        if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

                    var nl = new Array(e.rl.length),
                        ix = 0,
                        sl;
                    e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                    e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                    e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                    e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                    for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                    sl = nl[0];
                    for (var i in nl)
                        if (sl > nl[i] && nl[i] > 0) {
                            sl = nl[i];
                            ix = i;
                        }
                    var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
                    newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
                }
                if (window.rs_init_css === undefined) window.rs_init_css = document.head.appendChild(document.createElement(
                    "style"));
                document.getElementById(e.c).height = newh + "px";
                window.rs_init_css.innerHTML += "#" + e.c + "_wrapper { height: " + newh + "px }";
            } catch (e) {
                console.log("Failure at Presize of Slider:" + e)
            }
            //});
        };
    </script>
    <style type="text/css" id="wp-custom-css">
        .user-icons {
            display: none;
        }


        /* .menu-area .navbar ul{
 margin-right:400px;
} */

        .header-style-4 .menu-area .navbar ul li a {
            font-size: 17px;

        }

        @media(max-width: 1199px) {
            .menu-area .navbar ul {
                margin-right: 270px;
            }
        }



        .rs-footer.rs-footer-top-gap .footer-top {
            padding-top: 50px
        }



        #rs-header .menu-area .navbar ul>li.mega.max-w8 .sub-menu {
            max-width: 110%;
        }


        header#rs-header.header-style-4 .menu-area .container-fluid {
            padding-left: 40px;
        }

        #rs-header.header-style-4 .btn_quote {
            padding-right: 40px;
        }



        .rs-footer .footer-logo-wrap {
            padding-bottom: 10px;
            padding-top: 0;
        }



        .footer-0 {
            margin-top: -28px;
        }



        .footer-bottom .copyright_border {
            padding: 11px 0px;
        }



        .footer_social {
            /* 	display: none; */
        }








        input[type="text"],
        input[type="number"],
        input[type="email"],
        input[type="url"],
        select,
        input[type="password"] {
            margin-bottom: 15px;
        }


        /* BLOG */
        element {
            background-image: url('https://magnacartacollege-ac-uk.preview-domain.com/wp-content/uploads/2020/10/blog-single.jpg');
            display: none;
        }



        .rs-breadcrumbs .breadcrumbs-single {
            display: none;
        }




        #respond {
            display: none
        }



        .breadcrumbs-inner {
            margin-top: 40px;
        }



        body.search-results .site-main>article {
            margin-top: 80px;
        }



        #rs-header .toolbar-area {
            background: #fff0 !important;
        }





        #rs-header .toolbar-area {

            z-index: 3;
        }

        .elementor-12109 .elementor-element.elementor-element-6e70b56:not(.elementor-motion-effects-element-type-background),
        .elementor-12109 .elementor-element.elementor-element-6e70b56>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            z-index: 2
        }




        /* Blog */
        .author-name {
            display: none !important;
        }

        .comment-right {
            display: none !important;
        }

        #icon_wrapper {
            top: 36%;
        }




        .single .bs-img img {
            width: 100% !important;
        }

        .single-post .bs-img {
            text-align: center;
        }

        #rs-header .menu-area .navbar ul li.mega ul>li a {
            font-size: 14px;
        }


        #rs-header .menu-area .navbar ul li.mega ul.sub-menu li a {
            cursor: pointer !important;
        }

        /* font-awesome */
        .fa.fa-sign-in::before {
            content: "\f090" !important;
        }

        .fa.fa-facebook::before {
            content: "\f09a" !important;
        }

        .paoc-design-1 .paoc-popup-con-bg {
            background-color: #f1f1e6;
        }



        .cli-bar-container {
            flex-direction: column;
        }

        .cli-style-v2 .cli-bar-message {
            width: 70%;
            text-align: center;
            margin: 20px 0;
        }


        #cookie-law-info-bar {

            z-index: 9999999999999999;
        }


        /* adding overlay loader style */


        #overlay-button-click {
            width: 100%;
            height: 100vh;
            position: fixed;
            top: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 99999999999999999999;
            display: none;
            place-items: center;
        }

        .loader-loader {
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid #0a2535;
            width: 120px;
            height: 120px;
            -webkit-animation: spin 2s linear infinite;/ Safari / animation: spin 2s linear infinite;
        }

        / Safari / @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .parent-undergrad .child-undergrad {
            display: none !important;
        }

        .parent-undergrad:hover .child-undergrad {
            display: block !important;
        }


        .parent-undergrad .sub-menu {
            padding-left: 8px !important;
        }

        .parent-undergrad .sub-menu .child-undergrad a {
            font-size: 11px !important;
        }

        .menu-area .navbar ul>li>a span {
            display: inline !important;
        }

        .blink {
            animation: blinkingmenu 0.9s infinite;

        }

        @keyframes blinkingmenu {
            0% {
                color: #F49120;
            }

            49% {
                color: #ffffff;
            }

            /* 60%{    color: #ffeb00; }
99%{    color:#f95e68;  }
100%{   color: #ffffff; } */
        }
        }

        /* span.eael-accordion-tab-title{
 line-height: 20px  !important;
} */

        /* BA (Hons) Business Management with Foundation Year */
        .ielts-test-dates-table {
            border-collapse: collapse;
            width: 100%;
        }

        .ielts-test-dates-table td,
        .ielts-test-dates-table th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        .ielts-test-dates-table tr:nth-child(even) {
            background-color: #dddddd;
        }

        .ielts-test-dates-table th {
            color: #fff;
            background-color: #0A2535;
        }

        .ielts-test-dates-table th:hover,
        .ielts-test-dates-table td:hover {
            background-color: #F49120;
            color: #fff;
        }

        .menu-area .navbar {
            margin-right: 140px !important;
        }

        /* .testt :hover{
 color: #ffffff !important;
}
.testtt :hover{
 background-color: #B70D0D;
 color: #ffffff !important;
 Padding: 5px;
} */
        /* Team Dean Css  */
        .card-title {
            color: #000000;
            font-size: 1.5em;
            line-height: normal;
            font-weight: 700;
            margin-bottom: 0.5em;
        }

        .small-desc {
            font-size: 1em;
            font-weight: 400;
            text-align: justify;
            line-height: 1.5em;
            color: #452c2c;
        }

        .small-desc {
            font-size: 1em;
        }

        .go-corner {
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            width: 3.25em;
            height: 3.25em;
            overflow: hidden;
            top: 0;
            right: 0;
            background: linear-gradient(135deg, #F49120, #F49120);
            border-radius: 0 4px 0 32px;
        }

        .go-arrow {
            margin-top: -4px;
            margin-right: -4px;
            color: white;
            font-family: courier, sans;
        }

        .card {
            display: block;
            position: relative;
            max-width: 700px;
            max-height: 320px;
            background-color: #f2f8f9;
            border-radius: 10px;
            padding: 2em 1.2em;
            margin: 12px;
            text-decoration: none;
            z-index: 0;
            overflow: hidden;
            background: linear-gradient(to bottom, #ffffff, #ffffff);
            font-family: Arial, Helvetica, sans-serif;
        }

        .card:before {
            content: '';
            position: absolute;
            z-index: -1;
            top: -16px;
            right: -16px;
            background: linear-gradient(135deg, #F49120, #F49120);
            height: 64px;
            width: 64px;
            border-radius: 32px;
            transform: scale(1);
            transform-origin: 50% 50%;
            transition: transform 0.35s ease-out;
        }

        .card:hover:before {
            transform: scale(28);
        }

        .card:hover .small-desc {
            transition: all 0.5s ease-out;
            color: rgba(255, 255, 255, 0.8);
        }

        .card:hover .card-title {
            transition: all 0.5s ease-out;
            color: #ffffff;
        }



        @media (max-width: 767px) {
            .card-title {
                color: #000000;
                font-size: 1.5em;
                line-height: normal;
                font-weight: 700;
                margin-bottom: 0.5em;
            }

            .small-desc {
                font-size: 1em;
                font-weight: 400;
                text-align: left;
                line-height: 1.5em;
                color: #452c2c;
            }

            .small-desc {
                font-size: 1em;
            }

            .go-corner {
                display: flex;
                align-items: center;
                justify-content: center;
                position: absolute;
                width: 3.25em;
                height: 3.25em;
                overflow: hidden;
                top: 0;
                right: 0;
                background: linear-gradient(135deg, #F49120, #F49120);
                border-radius: 0 4px 0 32px;
            }

            .go-arrow {
                margin-top: -4px;
                margin-right: -4px;
                color: white;
                font-family: courier, sans;
            }

            .card {
                display: block;
                position: relative;
                max-width: 400px;
                max-height: 600px;
                background-color: #f2f8f9;
                border-radius: 10px;
                padding: 2em 1.2em;
                margin: 12px;
                text-decoration: none;
                z-index: 0;
                overflow: hidden;
                background: linear-gradient(to bottom, #ffffff, #ffffff);
                font-family: Arial, Helvetica, sans-serif;
            }

            .card:before {
                content: '';
                position: absolute;
                z-index: -1;
                top: -16px;
                right: -16px;
                background: linear-gradient(135deg, #F49120, #F49120);
                height: 64px;
                width: 64px;
                border-radius: 32px;
                transform: scale(1);
                transform-origin: 50% 50%;
                transition: transform 0.35s ease-out;
            }

            .card:hover:before {
                transform: scale(28);
            }

            .card:hover .small-desc {
                transition: all 0.5s ease-out;
                color: rgba(255, 255, 255, 0.8);
            }

            .card:hover .card-title {
                transition: all 0.5s ease-out;
                color: #ffffff;
            }

        }
    </style>
    <style id="educavo_option-dynamic-css" title="dynamic-css" class="redux-options-output">
        .sidenav .widget,
        body .sidenav #mobile_menu .widget_nav_menu ul li a {
            border-color: #040933;
        }
    </style><!-- Typography -->

    <style>
        body {
            background: #FFFFFF;
            color: #555555 !important;
            font-family: Montserrat !important;

            font-size: 16px !important;
        }

        body.single-teams {
            background: #FFFFFF;
        }


        h1 {
            color: #333;
            font-family: Montserrat;
            font-size: 46px;
            font-weight: 700;

            line-height: 56px;

        }

        h2 {
            color: #333;
            font-family: Montserrat;

            font-size: 36px;
            font-weight: 700;

            line-height: 46px
        }

        h3 {
            color: #333;
            font-family: Montserrat;

            font-size: 28px;

            line-height: 32px;
        }

        h4 {
            color: #333;
            font-family: Montserrat;
            font-size: 20px;
            font-weight: 700;

            line-height: 28px;

        }

        h5 {
            color: #333;
            font-family: Montserrat;
            font-size: 18px;
            font-weight: 700;

            line-height: 26px;
        }

        h6 {
            color: #333;
            font-family: Montserrat;
            font-size: 16px;
            font-weight: 700;

            line-height: 20px;
        }

        .menu-area .navbar ul li>a,
        .sidenav .widget_nav_menu ul li a {
            font-weight: 600;
            font-family: Montserrat;
            font-size: 16px;
        }

        #rs-header .toolbar-area .toolbar-contact ul.rs-contact-info li,
        #rs-header .toolbar-area .toolbar-contact ul.rs-contact-info li a,
        #rs-header .toolbar-area .toolbar-contact ul li a,
        #rs-header .toolbar-area .toolbar-contact ul li,
        #rs-header .toolbar-area {
            color: #020202;
        }


        #rs-header.header-transparent .toolbar-area .toolbar-contact ul.rs-contact-info li,
        #rs-header.header-transparent .toolbar-area .toolbar-contact ul.rs-contact-info li i,
        #rs-header.header-transparent .toolbar-area .toolbar-contact ul.rs-contact-info li a,
        #rs-header.header-style-4 .btn_quote .toolbar-sl-share ul li a {
            color: #020202
        }

        #rs-header.header-transparent .toolbar-area .toolbar-contact ul.rs-contact-info li:hover a,
        #rs-header.header-style-4 .btn_quote .toolbar-sl-share ul li a:hover {
            color: #CCCCCC
        }


        #rs-footer {
            background-position: center bottom !important;
        }

        #rs-footer {
            background-repeat: no-repeat !important;
        }


        #rs-footer {
            background-size: cover !important;
        }

        .rs-newsletter .newsletter-wrap {
            background: #F49120;
        }



        .tops-btn .quote-buttons {
            background: #F49120;
        }

        .tops-btn .quote-buttons {
            color: #FFFFFF;
        }

        .toolbar-area .toolbar-contact i,
        .toolbar-area .opening i,
        .toolbar-area .opening i:before,
        .toolbar-area .toolbar-contact i:before {
            color: #FFFFFF;
        }

        .toolbar-area .toolbar-sl-share i,
        .toolbar-area .toolbar-sl-share i:before {
            color: #FFFFFF;
        }


        .toolbar-area .toolbar-sl-share i:hover,
        .toolbar-area .toolbar-sl-share a:hover i:before {
            color: #F49120;
        }



        .menu-area .navbar ul li ul.sub-menu {
            border-color: #F49120;
        }


        header#rs-header.header-style-4 .sidebarmenu-area {
            background: #FFFFFF;
        }

        .menu-wrap-off .inner-offcan .nav-link-container .close-button {
            background: #F49120;
        }

        #rs-header .toolbar-area .toolbar-contact ul li,
        #rs-header.header-style5 .toolbar-area,
        #rs-header.header-style5 .toolbar-area .opening,
        #rs-header.header-style5 .toolbar-area .toolbar-contact ul li,
        #rs-header .toolbar-area .opening {
            border-color: ;
        }


        #rs-header .toolbar-area .toolbar-contact ul.rs-contact-info li a,
        #rs-header .toolbar-area .toolbar-contact ul li a,
        #rs-header .toolbar-area .tops-btn .btn_login a,
        #rs-header .toolbar-area .toolbar-contact ul li i,
        #rs-header .toolbar-area .toolbar-sl-share ul li a i {
            color: #020202;
        }

        #rs-header .toolbar-area .toolbar-contact ul.rs-contact-info li a:hover,
        #rs-header .toolbar-area .toolbar-sl-share ul li a.quote-buttons:hover,
        #rs-header .toolbar-area .toolbar-sl-share ul li a.quote-buttons:before,
        #rs-header .toolbar-area .toolbar-contact ul li a:hover,
        #rs-header .toolbar-area .tops-btn .btn_login a:hover,
        #rs-header .toolbar-area .toolbar-sl-share ul li a i:hover {
            color: #F49120;
        }

        #rs-header .toolbar-area {
            background: ;
        }


        .mobile-menu-container div ul>li.current_page_parent>a,
        #rs-header.header-transparent .menu-area .navbar ul li.current-menu-ancestor a,
        #rs-header.header-transparent .menu-area .navbar ul li.current_page_item a,
        .menu-area .navbar ul.menu>li.current_page_item>a,
        .menu-area .navbar ul li.current-menu-ancestor a,
        .menu-area .navbar ul li.current_page_item a,
        .menu-area .navbar ul li ul.sub-menu>li.menu-item-has-children>a:before {
            color: #F49120;
        }



        .menu-area .navbar ul>li.menu-item-has-children.hover-minimize>a:after {
            background: #F49120 !important;
        }

        .menu-area .navbar ul>li.menu-item-has-children.hover-minimize:hover>a:after {
            background: #F49120 !important;
        }

        .menu-area .navbar ul li:hover a:before {
            color: #F49120;
        }

        .menu-area .navbar ul li:hover>a,
        .mobile-menu-container div ul li a:hover,
        #rs-header.header-style5 .header-inner.menu-sticky.sticky .menu-area .navbar ul li:hover>a,
        #rs-header.header-style-4 .menu-area .menu li:hover>a,
        #rs-header .sticky_search:hover i::before,
        #rs-header.header-style-4 .header-inner .menu-area .navbar ul li:hover a,
        #rs-header.header-style-4 .menu-area .navbar ul li:hover a:before,
        .menu-cart-area i:hover,
        #rs-header.header-style1 .category-menu .menu li:hover:after,
        #rs-header.header1.header-style1 .menu-area .navbar ul li:hover a,
        #rs-header.header-style-3.header-style-2 .sticky-wrapper .menu-area .navbar ul li:hover>a {
            color: #F49120;
        }

        .nav-link-container .nav-menu-link:hover span,
        .single-header.header1.header-style1 .menu-area .navbar ul>li.menu-item-has-children.hover-minimize:hover>a::after {
            background: #F49120;
        }

        .menu-area .navbar ul li a,
        #rs-header .sticky_search i::before,
        .menu-cart-area i,
        #rs-header.header1.header-style1 .sticky_search i::before,
        #rs-header.header1.header-style1 .menu-area .navbar ul li a,
        body #rs-header.header-style-4.header-style7 .category-menu .menu li::after,
        body #rs-header.header-style-4.header-style6 .category-menu .menu li::after,
        #rs-header.header-style1.header1 .btn_apply a,
        #rs-header.header-style1 .category-menu .menu li::after,
        #rs-header.header-style-4 .category-menu .menu li::after,
        .menu-cart-area i,
        #rs-header.header-transparent .menu-area.dark .menu-cart-area i {
            color: #333333;
        }

        .nav-link-container .nav-menu-link span,
        #rs-header.header1.header-style1 .nav-link-container .nav-menu-link span,
        #rs-header.header1.header-style1 .nav-link-container .nav-menu-link span {
            background: #333333;
        }

        #rs-header.header-transparent .menu-area.dark .navbar ul.menu>li.current_page_item>a::before,
        #rs-header.header-transparent .menu-area.dark .navbar ul.menu>li.current_page_item>a::after,
        #rs-header.header-transparent .menu-area.dark .navbar ul.menu>li>a::before,
        #rs-header.header-transparent .menu-area.dark .navbar ul.menu>li>a::after,
        #rs-header.header-transparent .menu-area.dark .navbar ul.menu>li>a,
        #rs-header.header-transparent .menu-area.dark .menu-responsive .sidebarmenu-search .sticky_search .fa {
            color: #333333 !important;
        }



        #rs-header.header-transparent .menu-area .navbar ul li a,
        #rs-header.header-transparent .menu-cart-area i,
        #rs-header.header-style5 .sticky_search i::before,
        #rs-header.header-style1.header-style3 .sticky_search i:before,
        #rs-header.header-transparent .menu-responsive .sidebarmenu-search .sticky_search,
        #rs-header.header-transparent .menu-responsive .sidebarmenu-search .sticky_search .fa,
        #rs-header.header-transparent .menu-area.dark .navbar ul>li>a,
        #rs-header.header-transparent .menu-area .navbar ul li:hover>a {
            color: #050505
        }

        .header-style5 .nav-link-container .nav-menu-link span {
            background: #050505
        }

        #rs-header.header-style5 .header-inner .menu-area .navbar ul>li>a,
        #rs-header.header-style-4 .category-menu .menu li::after,
        .header-style1.header-style3 .menu-area .navbar ul li a,
        #rs-header.header-style5 .menu-cart-area>a,
        .user-icons a,
        .header-style1.header-style3 .menu-cart-area i,
        #rs-header.header-style5 .menu-responsive .sidebarmenu-search .sticky_search,
        #rs-header.header-style5 .menu-cart-area i {
            color: #050505
        }


        #rs-header.header-style3 .menu-cart-area>a,
        .user-icons a,
        #rs-header.header-style5 .menu-cart-area>a {
            border-color: #050505
        }

        #rs-header.header-style5 .menu-cart-area>a:hover,
        .user-icons a:hover {
            border-color: #F49120
        }


        #rs-header.header-style5 .header-inner .menu-area .navbar ul li:hover>a,
        #rs-header.header-style1.header-style3 .sticky_search:hover i:before,
        .header-style1.header-style3 .menu-cart-area i:hover,
        .user-icons a:hover,
        #rs-header.header-style5 .sticky_search:hover i:before,
        #rs-header.header-style5 .menu-cart-area>a:hover,
        #rs-header.header-style5 .menu-cart-area>a:hover i:before,
        #rs-header.header-style5 .menu-cart-area i:hover,
        .header-style1.header-style3 .menu-area .navbar ul li:hover a {
            color: #F49120
        }


        .header-style1.header-style3 .nav-link-container .nav-menu-link:hover span,
        .header-style5 .nav-link-container .nav-menu-link:hover span,
        .single-header.header-style1.header-style3 .menu-area .navbar ul>li.menu-item-has-children.hover-minimize:hover>a::after,
        #rs-header.header-style5 .header-inner .menu-area .navbar ul>li.menu-item-has-children.hover-minimize:hover>a:after {
            background: #F49120 !important;
        }



        #rs-header.header-style5 .header-inner .menu-area .navbar ul>li.menu-item-has-children.hover-minimize>a:after {
            background: #F49120 !important;
        }

        .rs-footer .widget.widget_nav_menu ul li a::before,
        .rs-footer .widget.widget_pages ul li a::before,
        .rs-footer .widget.widget_nav_menu ul li a::before,
        .rs-footer .widget.widget_recent_comments ul li::before,
        .rs-footer .widget.widget_pages ul li a::before,
        .rs-footer .footer-top h3.footer-title::after,
        .rs-footer .widget.widget_archive ul li a::before,
        .rs-footer .widget.widget_categories ul li a::before,
        .rs-footer .widget.widget_archive ul li a::before,
        .rs-footer .widget.widget_categories ul li a::before {
            background: #F49120;
        }





        .rs-footer .fa-ul li i::before {
            color: #F49120;
        }



        #rs-header.header-style5 .menu-area .navbar ul>li.current-menu-ancestor>a,
        #rs-header.header-style5 .header-inner .menu-area .navbar ul>li.current-menu-ancestor>a,
        #rs-header.header-style5 .header-inner.menu-sticky.sticky .menu-area .navbar ul>li.current-menu-ancestor>a {
            color: #F49120 !important;
        }



        .header-style-4 .menu-cart-area span.icon-num,
        .header-style1.header-style3 .nav-link-container .nav-menu-link span,
        .header-style5 .menu-cart-area span.icon-num {
            background: #050505;
        }




        #rs-header.header-transparent .menu-area.dark ul.offcanvas-icon .nav-link-container .nav-menu-link span {
            background: #050505
        }



        .nav-link-container .nav-menu-link span,
        #rs-header.header-style-4 .nav-link-container .nav-menu-link span {
            background: #363636
        }


        .menu-ofcn.off-open,
        .menu-wrap-off {
            background: #FFFFFF
        }


        .menu-ofcn.off-open,
        .sidenav .fa-ul li a {
            color: #333333
        }


        .menu-ofcn.off-open,
        .sidenav .widget .widget-title {
            color: #333333
        }


        .sidenav .widget-title:before {
            background: #333333
        }



        .sidenav .fa-ul li a,
        .sidenav ul.footer_social li a i {
            color: #333333
        }



        .sidenav .fa-ul li a:hover,
        .sidenav ul.footer_social li a:hover i {
            color: #F49120
        }




        #rs-header.header-transparent .menu-area .navbar ul>li>a:hover,
        #rs-header.header-transparent .menu-area .navbar ul li:hover>a,
        #rs-header.header-transparent .menu-area.dark .navbar ul>li:hover>a {
            color: #F49120
        }




        .menu-area .navbar ul li .sub-menu li a,
        #rs-header .menu-area .navbar ul li.mega ul li a,
        #rs-header.header-transparent .menu-area .navbar ul li .sub-menu li.current-menu-ancestor>a,
        #rs-header.header-transparent .menu-area .navbar ul li.current-menu-ancestor li a {
            color: #171F32 !important;
        }

        .menu-area .navbar ul li ul.sub-menu li.current_page_item>a,
        .menu-area .navbar ul li .sub-menu li a:hover,
        #rs-header .menu-area .navbar ul li.mega ul>li>a:hover,
        .menu-area .navbar ul li ul.sub-menu li:hover>a,
        #rs-header.header-style5 .header-inner .menu-area .navbar ul li .sub-menu>li:hover>a,
        #rs-header.header-transparent .menu-area .navbar ul li .sub-menu li:hover>a,
        #rs-header .menu-area .navbar ul li.mega ul li a:hover,
        #rs-header .menu-area .navbar ul li.mega ul>li.current-menu-item>a,
        .menu-sticky.sticky .menu-area .navbar ul li ul li a:hover,
        #rs-header.header-transparent .menu-area .navbar ul li .sub-menu li.current-menu-ancestor>a,
        #rs-header.header-transparent .menu-area .navbar ul li .sub-menu li.current_page_item>a,
        #rs-header.header-transparent .menu-area .navbar ul li.current-menu-ancestor li a:hover {
            color: #F49120 !important;
        }



        .menu-area .navbar ul li .sub-menu {
            background: #FFFFFF;
        }


        #rs-header .toolbar-area .toolbar-contact ul li,
        #rs-header .toolbar-area a,
        #rs-header .toolbar-area .toolbar-contact ul li i:before {
            font-size: 14px;
        }





        .footer-bottom .copyright p {
            color: #e0e0e0;
        }


        .rs-footer,
        .rs-footer h3,
        .rs-footer a,
        .rs-footer .fa-ul li a,
        .rs-footer .widget.widget_nav_menu ul li a {
            font-size: 14px;
        }

        .rs-footer h3,
        .rs-footer .footer-top h3.footer-title {
            font-size: 18px;
        }










        .rs-footer,
        .rs-footer .footer-top h3.footer-title,
        .rs-footer a,
        .rs-footer .fa-ul li a,
        .rs-footer .widget.widget_nav_menu ul li a,
        .rs-footer .widget.widget_recent_comments ul li,
        .rs-footer .widget.widget_pages ul li a,
        .rs-footer .widget.widget_recent_comments ul li a,
        .rs-footer .widget.widget_archive ul li a,
        .rs-footer .widget.widget_categories ul li a,
        .rs-footer .widget.widget_nav_menu ul li a,
        .rs-footer .footer-top input[type="email"]::placeholder {
            color: #FFFFFF;
        }

        .rs-footer .footer-top h3.footer-title {
            color: #E0E0E0;
        }

        .rs-footer a:hover,
        .rs-footer .widget.widget_nav_menu ul li a:hover,
        .rs-footer .fa-ul li a:hover,
        .rs-footer .widget.widget_recent_comments ul li a:hover,
        .rs-footer .widget.widget_pages ul li a:hover,
        .rs-footer .widget.widget_recent_comments ul li:hover,
        .rs-footer .widget.widget_archive ul li a:hover,
        .rs-footer .widget.widget_categories ul li a:hover,
        .rs-footer .widget a:hover {
            color: #F49120;
        }




        ul.footer_social>li>a {
            color: #FFFFFF !important;
        }


        ul.footer_social>li>a:hover {
            color: #EEEEEE !important;
        }








        .rs-footer .recent-post-widget .show-featured .post-desc i,
        .rs-heading .title-inner .sub-text,
        .rs-services-default .services-wrap .services-item .services-icon i,
        .rs-blog .blog-item .blog-slidermeta span.category a:hover,
        .btm-cate li a:hover,
        .ps-navigation ul a:hover span,
        .rs-portfolio-style5 .portfolio-item .portfolio-content a,
        .rs-services1.services-left.border_style .services-wrap .services-item .services-icon i:hover,
        .rs-services1.services-right .services-wrap .services-item .services-icon i:hover,
        .rs-galleys .galley-img .zoom-icon:hover,
        #about-history-tabs ul.tabs-list_content li:before,
        #rs-header.header-style-3 .header-inner .logo-section .toolbar-contact-style4 ul li i,
        #sidebar-services .widget.widget_nav_menu ul li.current-menu-item a,
        #sidebar-services .widget.widget_nav_menu ul li a:hover,
        .single-teams .team-inner ul li i,
        #rs-header.header-transparent .menu-area .navbar ul li .sub-menu li.current-menu-ancestor>a,
        #rs-header.header-transparent .menu-area .navbar ul li .sub-menu li.current_page_item>a,
        rs-heading .title-inner .title,
        .team-grid-style1 .team-item .team-content1 h3.team-name a,
        .rs-team-grid.team-style5 .team-item .normal-text .person-name a,
        .rs-team-grid.team-style4 .team-wrapper .team_desc .name a,
        .rs-team-grid.team-style4 .team-wrapper .team_desc .name .designation,
        .contact-page1 .form-button .submit-btn i:before,
        .woocommerce nav.woocommerce-pagination ul li span.current,
        .woocommerce nav.woocommerce-pagination ul li a:hover,
        .single-teams .ps-informations h2.single-title,
        .single-teams .ps-informations ul li.phone a:hover,
        .single-teams .ps-informations ul li.email a:hover,
        .single-teams .siderbar-title,
        .single-teams .team-detail-wrap-btm.team-inner .appointment-btn a,
        ul.check-icon li:before,
        .rs-project-section .project-item .project-content .title a:hover,
        .subscribe-text i,
        .subscribe-text .title,
        .subscribe-text span a:hover,
        .timeline-icon,
        blockquote::before,
        .rs-edash-details .learndash-wrapper .ld-status-icon .ld-icon:before,
        .service-carousels .services-sliders3 span.num,
        .service-readons:before,
        .tutor-pagination-wrap.tutor-pagination-wrap a:hover,
        .tutor-pagination-wrap.tutor-pagination-wrap span:hover,
        .tutor-pagination-wrap.tutor-pagination-wrap a:hover,
        .tutor-pagination-wrap.tutor-pagination-wrap span:hover,
        .tutor-pagination-wrap span.current,
        body .tutor-course-filter-wrapper .tutor-course-filter-container .tutor-course-search-field i,
        body .tutor-courses-wrap .tutor-course-filter-container .tutor-course-search-field i,
        .learndash-wrapper .ld-status-icon .ld-icon::before,
        .rs-edash-details .learndash-wrapper .ld-course-status.ld-course-status-not-enrolled .ld-course-status-price,
        .rs-blog-details .bs-meta li i,
        .services-sliders4:hover .services-desc h4.services-title a,
        .rs-footer.footerlight .footer_social li a .fa,
        .single-teams .ps-informations h4.single-title {
            color: #F49120;
        }

        .portfolio-slider-data .slick-next,
        .portfolio-slider-data .slick-prev,
        .ps-navigation ul a:hover span,
        ul.chevron-right-icon li:before,
        .sidenav .fa-ul li i,
        body.profile #learn-press-user-profile .profile-tabs #profile-content-courses .learn-press-subtab-content ul.lp-sub-menu li a:hover,
        .woocommerce div.product p.price,
        .woocommerce div.product span.price,
        .woocommerce ul.products li.product .price,
        .single-lp_course .author-info h4 a:hover,
        .single-lp_course .author-info ul li a:hover,
        .single-lp_course .review-list li::before,
        .single-lp_course .requirement-list li::before,
        .single-lp_course .course-features-info ul li i,
        .single-lp_course .inner-column.sticky-top .intro-video a,
        .single-lp_course .course-item-nav a:hover,
        .learn-press-pagination ul.page-numbers li span.current,
        .learn-press-pagination ul.page-numbers li a.current,
        .rs_course_style1 .courses-item .content-part .title a:hover,
        .single-lp_course ul.curriculum-sections .section-content .course-item .section-item-link::before,
        body.profile #learn-press-user-profile .profile-tabs #learn-press-profile-content .emails a:hover,
        body.profile #learn-press-user-profile .profile-tabs #learn-press-profile-content .phones a:hover,
        body.profile #learn-press-user-profile .profile-tabs #learn-press-profile-content .emails i::before,
        body.profile #learn-press-user-profile .profile-tabs #learn-press-profile-content .phones i::before,
        body.profile #learn-press-user-profile .user-tab .user-information .insturctor-author-social li a:hover,
        .rs-portfolio.style2 .portfolio-slider .portfolio-item .portfolio-content h3.p-title a:hover,
        #rs-header.header-style5 .stuck.sticky .menu-area .navbar ul>li.active a,
        #rs-header .menu-area .navbar ul>li.active a,
        .woocommerce-message::before,
        .woocommerce-info::before,
        .pagination-area .nav-links span.current,
        body.single-sfwd-topic .learndash-wrapper .ld-breadcrumbs .ld-breadcrumbs-segments span a,
        body.single-sfwd-lessons .learndash-wrapper .ld-breadcrumbs .ld-breadcrumbs-segments span a,
        body.single-sfwd-lessons .learndash-wrapper .ld-breadcrumbs .ld-breadcrumbs-segments span+span a:hover,
        .rs-sl-social-icons a:hover,
        body.single-sfwd-topic .learndash-wrapper .ld-breadcrumbs .ld-breadcrumbs-segments span+span a:hover,
        .rs-portfolio.vertical-slider.style4 .portfolio-slider .portfolio-item:hover .p-title a {
            color: #F49120 !important;
        }


        .transparent-btn:hover,
        .testimonial-light #cl-testimonial .testimonial-slide7 .single-testimonial:after,
        .rs-portfolio-style2 .portfolio-item .portfolio-img .read_more:hover,
        .service-carousel .owl-dots .owl-dot.active,
        .service-carousel .owl-dots .owl-dot,
        .bs-sidebar.dynamic-sidebar .service-singles .menu li a:hover,
        .bs-sidebar.dynamic-sidebar .service-singles .menu li.current-menu-item a,
        .rs-footer.footerlight .footer-top .mc4wp-form-fields input[type="email"],
        .bs-sidebar .tagcloud a:hover,
        .rs_course_style3 .courses-item .content-part .bottom-part .btn-part a:hover,
        .rs_course_style5 .courses-item .content-part .bottom-part .btn-part a:hover,
        .rs_course_style1 .courses-item .content-part .bottom-part .btn-part a:hover,
        .rs_course_style4 .courses-item .content-part .bottom-part .btn-part a:hover,
        .lp-tab-sections .section-tab.active span,
        .learn-press-message.error,
        .rs-blog-details .bs-info.tags a:hover,
        .single-teams .team-skill .rs-progress {
            border-color: #F49120 !important;
        }

        .single-lp_course ul.curriculum-sections .section-content .course-item .course-item-meta .count-questions,
        .learndash-wrapper .ld-focus .ld-focus-header .ld-brand-logo,
        body .tutor-courses-wrap .tutor-course-loop-level,
        .tutor-loop-author .tutor-single-course-avatar .tutor-text-avatar {
            background: #171F32 !important;
        }

        .owl-carousel .owl-nav [class*="owl-"],
        html input[type="button"]:hover,
        input[type="reset"]:hover,
        .rs-video-2 .popup-videos:before,
        .sidenav .widget-title:before,
        .rs-team-grid.team-style5 .team-item .team-content,
        .rs-team-grid.team-style4 .team-wrapper .team_desc::before,
        .rs-services-style4:hover .services-icon i,
        .team-grid-style1 .team-item .social-icons1 a:hover i,
        .loader__bar,
        .rs-blog-grid .blog-img a.float-cat,
        #sidebar-services .download-btn ul li,
        .transparent-btn:hover,
        .rs-portfolio-style2 .portfolio-item .portfolio-img .read_more:hover,
        .rs-video-2 .popup-videos,
        .rs-blog-details .blog-item.style2 .category a,
        .rs-blog .blog-item.style2 .category a,
        .blog .blog-item.style2 .category a,
        .rs-blog-details .blog-item.style1 .category a,
        .rs-blog .blog-item.style1 .category a,
        .blog .blog-item.style1 .category a,
        #mobile_menu .submenu-button,
        .icon-button a,
        .team-grid-style1 .team-item .image-wrap .social-icons1,
        .team-slider-style1 .team-item .image-wrap .social-icons1,
        .rs-heading.style8 .title-inner:after,
        .rs-heading.style8 .description:after,
        #slider-form-area .form-area input[type="submit"],
        .services-style-5 .services-item:hover .services-title,
        #sidebar-services .rs-heading .title-inner h3:before,
        #rs-contact .contact-address .address-item .address-icon::before,
        .team-slider-style4 .team-carousel .team-item:hover,
        #rs-header.header-transparent .btn_quote a:hover,
        .bs-sidebar .tagcloud a:hover,
        .rs-heading.style2:after,
        .rs-blog-details .bs-info.tags a:hover,
        .mfp-close-btn-in .mfp-close,
        .top-services-dark .rs-services .services-style-7.services-left .services-wrap .services-item,
        .single-teams .team-inner h3:before,
        .single-teams .team-detail-wrap-btm.team-inner,
        ::selection,
        .rs-heading.style2 .title:after,
        .readon:hover,
        .rs-blog-details #reply-title:before,
        .rs-cta .style2 .title-wrap .exp-title:after,
        .rs-project-section .project-item .project-content .p-icon,
        .proces-item.active:after,
        .proces-item:hover:after,
        .subscribe-text .mc4wp-form input[type="submit"],
        .rs-footer #wp-calendar th,
        .service-carousel.services-dark .services-sliders2 .services-desc:before,
        .service-carousels.services-dark .services-sliders2 .services-desc:before,
        .rs-services .services-style-9 .services-wrap:after,
        .close-search,
        blockquote cite::before,
        blockquote::after,
        .single-lp_course .course-rate .review-bar .rating,
        .bs-sidebar .widget-title::after,
        .portfolio-slider-data .slick-dots li.slick-active,
        .portfolio-slider-data .slick-dots li:hover,
        .rs-portfolio.vertical-slider.style4 .portfolio-slider .portfolio-item .p-title a:before,
        .rs-team-grid.team-style4 .team-wrapper:hover .team_desc,
        .single-portfolios .ps-informations h3,
        .woocommerce a.remove:hover,
        .submit-btn .wpcf7-submit,
        .rs_course_style3 .courses-item .content-part .bottom-part .btn-part a:hover,
        .rs_course_style5 .courses-item .content-part .bottom-part .btn-part a:hover,
        .rs_course_style1 .courses-item .content-part .bottom-part .btn-part a:hover,
        .rs_course_style4 .courses-item .content-part .bottom-part .btn-part a:hover,
        .rs_course_style3 .courses-item .content-part .meta-part li span.price,
        .rs_course_style5 .courses-item .content-part .meta-part li span.price,
        .rs_course_style1 .courses-item .content-part .meta-part li span.price,
        .rs_course_style4 .courses-item .content-part .meta-part li span.price,
        .lp-archive-courses .rs-search button,
        .learn-press-pagination ul.page-numbers li::before,
        .lp-archive-courses .course-left .course-icons a.active-grid,
        .rs-heading.style6 .title-inner .sub-text:after,
        .bs-sidebar.dynamic-sidebar .service-singles .menu li.current-menu-item a,
        .bs-sidebar.dynamic-sidebar .service-singles .menu li a:hover,
        .single-teams .team-skill .rs-progress .progress-bar,
        .woocommerce div.product .woocommerce-tabs ul.tabs li:hover,
        .tutor-course-topics-wrap span.toogle-informaiton-icon,
        #learn-press-course-curriculum.course-curriculum ul.curriculum-sections .section-content .course-item.item-preview .course-item-preview,
        .woocommerce span.onsale,
        .woocommerce div.product .woocommerce-tabs ul.tabs li.active {
            background: #F49120;
        }

        .woocommerce span.onsale,
        .team-grid-style1 .team-item:after,
        .team-slider-style1 .team-item:after,
        .learn-press-message.error:before,
        .single-lp_course ul.curriculum-sections .section-content .course-item::before,
        .single-lp_course .learn-press-message::before,
        .faq-simple .elementor-accordion-item .elementor-tab-title.elementor-active,
        .single-lp_course ul.curriculum-sections .section-content .course-item .course-item-meta .duration,
        .bs-sidebar .bs-search button {
            background: #F49120 !important;
        }

        .portfolio-slider-data .slick-dots li,
        .lp-list-table thead tr th {
            background: #171F32;
        }

        .review-stars-rated .review-stars.empty,
        .review-stars-rated .review-stars.filled {
            color: #F49120;
        }

        .sidenav .widget_nav_menu ul>li.current-menu-item>a,
        .sidenav .widget_nav_menu ul>li>a:hover {
            color: #F49120 !important;
        }

        #cl-testimonial .testimonial-slide7 .single-testimonial:after,
        #cl-testimonial .testimonial-slide7 .single-testimonial:before {
            border-right-color: #F49120;
            border-right: 30px solid #F49120;
        }

        #cl-testimonial .testimonial-slide7 .single-testimonial {
            border-left-color: #F49120;
        }

        .team-slider-style1 .team-item .team-content1 h3.team-name a:hover,
        .rs-service-grid .service-item .service-content .service-button .readon.rs_button:hover:before,
        .rs-heading.style6 .title-inner .sub-text,
        .rs-heading.style7 .title-inner .sub-text,
        .rs-portfolio-style1 .portfolio-item .portfolio-content .pt-icon-plus:before,
        .team-grid-style1 .team-item .team-content1 h3.team-name a,
        .service-readons:hover,
        .service-readons:before:hover {
            color: #F49120 !important;
        }

        .rs-services-style3 .bg-img a,
        .rs-services-style3 .bg-img a:hover {
            background: #F49120;
            border-color: #F49120;
        }

        .rs-service-grid .service-item .service-content .service-button .readon.rs_button:hover {
            border-color: #F49120;
            ;
            color: #F49120;
        }

        .woocommerce div.product p.price ins,
        .woocommerce div.product span.price ins,
        .woocommerce div.product p.price,
        .woocommerce div.product span.price,
        .cd-timeline__content .short-info h2,
        .cd-timeline__content .short-info h3 {
            color: #F49120 !important;
        }

        .team-grid-style3 .team-img .team-img-sec:before,
        #loading,
        #sidebar-services .bs-search button:hover,
        .team-slider-style3 .team-img .team-img-sec:before,
        .rs-blog-details .blog-item.style2 .category a:hover,
        .rs-blog .blog-item.style2 .category a:hover,
        .blog .blog-item.style2 .category a:hover,
        .icon-button a:hover,
        .tutor-profile-completion-warning .profile-completion-warning-content .profile-completion-warning-status .tutor-progress-bar-wrap .tutor-progress-filled,
        .tutor-course-loop-level,
        .rs-blog-details .blog-item.style1 .category a:hover,
        .rs-blog .blog-item.style1 .category a:hover,
        .blog .blog-item.style1 .category a:hover,
        .skew-style-slider .revslider-initialised::before,
        .top-services-dark .rs-services .services-style-7.services-left .services-wrap .services-item:hover,
        .icon-button a:hover,
        .fullwidth-services-box .services-style-2:hover,
        #rs-header.header-style-4 .logo-section:before,
        .post-meta-dates,
        .woocommerce ul.products li.product .price ins,
        #scrollUp i,
        .cd-timeline__img.cd-timeline__img--picture,
        .rs-portfolio-style4 .portfolio-item .portfolio-img:before,
        .rs-portfolio-style3 .portfolio-item .portfolio-img:before {
            background: #F49120;
        }

        html input[type="button"],
        input[type="reset"],
        input[type="submit"] {
            background: #F49120;
        }


        .round-shape:before {
            border-top-color: #171F32;
            border-left-color: #171F32;
        }

        .round-shape:after {
            border-bottom-color: #171F32;
            border-right-color: #171F32;
        }

        #sidebar-services .wpb_widgetised_column {
            border-color: #F49120;
        }

        #sidebar-services .download-btn,
        .rs-video-2 .overly-border,
        .learn-press-message.success,
        .tutor-user-public-profile .tutor-user-profile-content,
        .single-teams .ps-informations ul li.social-icon i,
        .woocommerce-error,
        .woocommerce-info,
        .woocommerce-message {
            border-color: #F49120 !important;
        }

        .testimonial-light #cl-testimonial .testimonial-slide7 .single-testimonial:before,
        .testimonial-light #cl-testimonial .testimonial-slide7 .single-testimonial:after {
            border-right-color: #171F32 !important;
            border-top-color: transparent !important;
        }

        .testimonial-light #cl-testimonial .testimonial-slide7 .single-testimonial {
            border-left-color: #171F32 !important;
        }

        .portfolio-filter button:hover,
        .portfolio-filter button.active,
        .team-grid-style1 .team-item .team-content1 h3.team-name a:hover,
        #cl-testimonial .testimonial-slide7 .right-content i,
        .testimonial-light #cl-testimonial .testimonial-slide7 .single-testimonial .cl-author-info li:first-child,
        .rs-blog-details .bs-img .blog-date span.date,
        .rs-blog .bs-img .blog-date span.date,
        .blog .bs-img .blog-date span.date,
        .rs-blog-details .blog-img .blog-date span.date,
        .rs-blog .blog-img .blog-date span.date,
        .blog .blog-img .blog-date span.date,
        .rs-portfolio-style5 .portfolio-item .portfolio-content a:hover,
        #cl-testimonial.cl-testimonial9 .single-testimonial .cl-author-info li,
        #cl-testimonial.cl-testimonial9 .single-testimonial .image-testimonial p i,
        .rs-services1.services-left.border_style .services-wrap .services-item .services-icon i,
        .rs-services1.services-right .services-wrap .services-item .services-icon i,
        body.profile #learn-press-user-profile .profile-tabs #profile-content-quizzes .learn-press-subtab-content ul.lp-sub-menu li a:hover,
        body.profile #learn-press-user-profile .profile-tabs .nav.nav-tabs li a:hover,
        body.profile #learn-press-user-profile .profile-tabs #profile-content-courses .lp-tab-sections li a:hover,
        body.profile #learn-press-user-profile .profile-tabs #profile-content-courses .learn-press-subtab-content .profile-courses-list li h3:hover,
        .rs-portfolio.style2 .portfolio-slider .portfolio-item .portfolio-img .portfolio-content .categories a:hover,
        .woocommerce ul.products li.product .price,
        .course-features-info h3.title,
        .course-features-info ul li i,
        .full-blog-content .btm-cate .tag-line i,
        .rs-blog .blog-item .blog-meta .blog-date i,
        .full-blog-content .author i,
        .full-blog-content .blog-title a:hover,
        .learn-press-filters>li span,
        .learn-press-tabs .learn-press-tabs__checker:nth-child(1):checked~.learn-press-tabs__nav .learn-press-tabs__tab:nth-child(1) label a,
        .learn-press-filters>li span+span,
        .learn-press-filters>li span+span:before,
        .learn-press-filters>li span+span:after,
        body.profile #learn-press-user-profile .profile-tabs .nav.nav-tabs li.active a,
        body.profile #learn-press-user-profile .profile-tabs #profile-content-courses .lp-tab-sections li.active span,
        #rs-services-slider .menu-carousel .heading-block h4 a:hover,
        .rs-team-grid.team-style5 .team-item .normal-text .person-name a:hover,
        .lp-archive-courses .learn-press-courses .course .course-item .course-content .course-instructor a,
        #learn-press-profile #profile-nav .lp-profile-nav-tabs li.active>ul .active>a,
        .service-readons:hover,
        .service-readons:hover:before,
        .single-teams .designation-info {
            color: #F49120;
        }

        .rs-team-grid.team-style4 .team-wrapper .team_desc:before,
        .rs-team-grid.team-style5 .team-item .normal-text .team-text:before,
        .rs-services3 .slick-arrow,
        .single-teams .ps-image .ps-informations,
        .slidervideo .slider-videos,
        .slidervideo .slider-videos:before,
        body.profile .lp-label.label-completed,
        body.profile .lp-label.label-finished,
        .service-readon,
        .learn-press-tabs .learn-press-tabs__checker:nth-child(1):checked~.learn-press-tabs__nav .learn-press-tabs__tab:nth-child(1):before,
        body.profile #learn-press-user-profile .profile-tabs #profile-content-quizzes .learn-press-subtab-content .learn-press-message::before,
        .service-carousel .owl-dots .owl-dot.active,
        .rs-blog-details .bs-img .categories .category-name a,
        .rs-blog .bs-img .categories .category-name a,
        .blog .bs-img .categories .category-name a,
        .lp-badge.featured-course,
        .learn-press-message.success::before,
        .rs-blog-details .blog-img .categories .category-name a,
        .rs-blog .blog-img .categories .category-name a,
        .blog .blog-img .categories .category-name a {
            background: #F49120;
        }

        .rs-blog-details .bs-img .blog-date:before,
        .rs-blog .bs-img .blog-date:before,
        .blog .bs-img .blog-date:before,
        .rs-blog-details .blog-img .blog-date:before,
        .rs-blog .blog-img .blog-date:before,
        .blog .blog-img .blog-date:before {
            border-bottom: 0 solid;
            border-bottom-color: #F49120;
            border-top: 80px solid transparent;
            border-right-color: #F49120;
        }


        body.profile #learn-press-user-profile .profile-tabs #profile-content-courses .lp-tab-sections .section-tab.active span,
        .team-grid-style3 .team-img:before,
        .team-slider-style3 .team-img:before {
            border-bottom-color: #F49120;
        }

        .team-grid-style3 .team-img:after,
        .team-slider-style3 .team-img:after {
            border-top-color: #F49120;
        }

        .woocommerce-info,
        .timeline-alter .divider:after,
        body.single-services blockquote,
        .rs-porfolio-details.project-gallery .file-list-image .p-zoom:hover {
            border-color: #F49120;
        }

        .slidervideo .slider-videos i,
        .list-style li::before,
        .slidervideo .slider-videos i:before,
        #team-list-style .team-name a,
        .rs-blog .blog-item .blog-button a:hover {
            color: #F49120;
        }

        .rs-blog .blog-meta .blog-title a:hover .about-award a:hover,
        #team-list-style .team-name a:hover,
        #team-list-style .team-social i:hover,
        #team-list-style .social-info .phone a:hover,
        .woocommerce ul.products li .woocommerce-loop-product__title a:hover,
        #rs-contact .contact-address .address-item .address-text a:hover,
        a,
        .bs-sidebar .recent-post-widget .post-desc a:hover,
        .bs-sidebar .widget_categories ul li a:hover,
        a:hover,
        a:focus,
        a:active,
        .rs-blog .blog-meta .blog-title a:hover,
        .rs-blog .blog-item .blog-meta .categories a:hover,
        .bs-sidebar ul a:hover {
            color: #F49120;
        }

        .about-award a:hover {
            border-color: #F49120;
        }


        .rs-blog-details .bs-img .categories .category-name a:hover,
        .rs-blog .bs-img .categories .category-name a:hover,
        .blog .bs-img .categories .category-name a:hover,
        .rs-blog-details .blog-img .categories .category-name a:hover,
        .rs-blog .blog-img .categories .category-name a:hover,
        .blog .blog-img .categories .category-name a:hover,
        #rs-header.header-style-4 .logo-section .times-sec {
            background: #F49120;
        }

        .readon,
        .rs-heading.style3 .description:after,
        .team-grid-style1 .team-item .social-icons1 a i,
        .team-slider-style1 .team-item .social-icons1 a i,
        .owl-carousel .owl-nav [class*="owl-"]:hover,
        button,
        html input[type="button"],
        input[type="reset"],
        .rs-service-grid .service-item .service-img:before,
        .rs-service-grid .service-item .service-img:after,
        #rs-contact .contact-address .address-item .address-icon::after,
        .rs-services1.services-left.border_style .services-wrap .services-item .services-icon i:hover,
        .rs-services1.services-right .services-wrap .services-item .services-icon i:hover,
        .rs-service-grid .service-item .service-content::before,
        .rs-services-style4 .services-item .services-icon i,
        #rs-services-slider .img_wrap:before,
        #rs-services-slider .img_wrap:after,
        .rs-galleys .galley-img:before,
        .woocommerce-MyAccount-navigation ul li:hover,
        .woocommerce-MyAccount-navigation ul li.is-active,
        .rs-galleys .galley-img .zoom-icon,
        .team-grid-style2 .team-item-wrap .team-img .team-img-sec::before,
        .services-style-5 .services-item .icon_bg,
        #cl-testimonial.cl-testimonial10 .slick-arrow,
        .contact-sec .contact:before,
        .contact-sec .contact:after,
        .contact-sec .contact2:before,
        body .tutor-course-filter-wrapper .tutor-course-filter-container div h4::after,
        body .tutor-courses-wrap .tutor-course-filter-container div h4::after,
        .team-grid-style2 .team-item-wrap .team-img .team-img-sec:before,
        .rs-porfolio-details.project-gallery .file-list-image:hover .p-zoom:hover,
        .team-slider-style2 .team-item-wrap .team-img .team-img-sec:before,
        .rs-team-grid.team-style5 .team-item .normal-text .social-icons a i:hover {
            background: #F49120;
        }

        #rs-header.header-style-4 .logo-section .times-sec:after {
            border-bottom-color: #F49120;
        }


        .full-video .rs-services1.services-left .services-wrap .services-item .services-icon i,
        #cl-testimonial.cl-testimonial9 .single-testimonial .testimonial-image img,
        .rs-services1.services-left.border_style .services-wrap .services-item .services-icon i,
        .rs-services1.services-right .services-wrap .services-item .services-icon i,
        #cl-testimonial.cl-testimonial10 .slick-arrow,
        .learn-press-message,
        .team-grid-style2 .team-item-wrap .team-img img,
        .team-slider-style2 .team-item-wrap .team-img img,
        .contact-sec .wpcf7-form .wpcf7-text,
        .contact-sec .wpcf7-form .wpcf7-textarea {
            border-color: #F49120 !important;
        }

        #rs-services-slider .item-thumb .owl-dot.service_icon_style.active .tile-content a,
        #rs-services-slider .item-thumb .owl-dot.service_icon_style:hover .tile-content a,
        .team-grid-style2 .appointment-bottom-area .app_details:hover a,
        .team-slider-style2 .appointment-bottom-area .app_details:hover a {
            color: #F49120 !important;
        }

        #rs-header .menu-sticky.sticky .menu-area,
        #rs-header.header-style-3.header-style-2 .sticky-wrapper .header-inner.sticky .box-layout {
            background: #FFFFFF !important;
        }

        #rs-header .menu-sticky.sticky .menu-area .navbar ul li a,
        #rs-header.header-style1 .header-inner.sticky .category-menu .menu li:after,
        #rs-header.header-style-4 .header-inner.sticky .menu-cart-area i,
        #rs-header.header-style-4 .header-inner.sticky .sidebarmenu-search i,
        #rs-header.header-style-4 .header-inner.sticky .btn_quote .toolbar-sl-share ul li a {
            color: #101010;
        }



        #rs-header .menu-sticky.sticky .nav-link-container .nav-menu-link span {
            background: #101010;
        }



        #rs-header .menu-sticky.sticky .nav-link-container .nav-menu-link:hover span {
            background: #F49120;
        }


        #rs-header.header-transparent .menu-sticky.sticky .menu-area .navbar ul>li.current-menu-ancestor>a,
        #rs-header .menu-sticky.sticky .menu-area .navbar ul>li.current-menu-ancestor>a,
        #rs-header .menu-sticky.sticky .menu-area .navbar ul>li.current_page_item>a,
        #rs-header .menu-sticky.sticky .menu-area .navbar ul li .sub-menu li.current-menu-item page_item a,
        #rs-header.header-style-4 .menu-sticky.sticky .menu-area .navbar ul>li.current_page_item>a,
        #rs-header.header-style-4 .menu-sticky.sticky .menu-area .menu>li.current-menu-ancestor>a {
            color: #F49120 !important;
        }

        .menu-sticky.sticky .menu-area .navbar ul li .sub-menu {
            background: #FFFFFF;
        }


        #rs-header.header-style-4 .header-inner.sticky .nav-link-container .nav-menu-link:hover span,
        #rs-header.header-style1.header1 .header-inner.sticky .menu-area .navbar ul>li.menu-item-has-children.hover-minimize:hover>a:after {
            background: #F49120 !important;
        }

        #rs-header .menu-sticky.sticky .menu-area .navbar ul>li:hover>a,
        #rs-header.header-style-4 .header-inner.sticky .btn_quote .toolbar-sl-share ul>li a:hover,
        #rs-header.header-style-4 .header-inner.sticky .menu-cart-area i:hover,
        #rs-header.header-style1 .header-inner.sticky .category-menu .menu li:hover:after,
        #rs-header.header-style1 .header-inner.sticky .category-menu .menu li:hover:after,
        #rs-header.header-style-4 .header-inner.sticky .sidebarmenu-search i:hover,
        #rs-header .menu-sticky.sticky .menu-area .navbar ul li ul.submenu>li.current-menu-ancestor>a {
            color: #F49120 !important;
        }

        #rs-header .toolbar-area .toolbar-sl-share ul li a.quote-buttons {
            color: #020202
        }


        #rs-header .menu-sticky.sticky .menu-area .navbar ul li .sub-menu li a {
            color: #171F32 !important;
        }

        #rs-header .menu-sticky.sticky .menu-area .navbar ul li .sub-menu li a:hover,
        #rs-header .menu-sticky.sticky .menu-area .navbar ul li .sub-menu li.current-menu-item page_item a,
        #rs-header .menu-sticky.sticky .menu-area .navbar ul li .sub-menu li.current_page_item>a {
            color: #F49120 !important;
        }




        #rs-header .btn_quote a,
        .comment-respond .form-submit #submit,
        .woocommerce #respond input#submit,
        .woocommerce a.button,
        .woocommerce .wc-forward,
        .woocommerce button.button,
        .woocommerce input.button,
        .woocommerce #respond input#submit.alt,
        .woocommerce a.button.alt,
        .woocommerce button.button.alt,
        .woocommerce input.button.alt,
        .woocommerce button.button.alt.disabled,
        .woocommerce ul.products li.product .images-product .overley .winners-details .product-info ul li a,
        .wp-block-file .wp-block-file__button {
            border-color: #F49120;
        }

        #rs-header .btn_quote a:hover,
        .woocommerce #respond input#submit.alt:hover,
        .woocommerce #respond input#submit:hover,
        .woocommerce .wc-forward:hover,
        .woocommerce a.button.alt:hover,
        .woocommerce a.button:hover,
        .woocommerce button.button.alt:hover,
        .woocommerce button.button:hover,
        .woocommerce input.button.alt:hover,
        .woocommerce input.button:hover,
        .comment-respond .form-submit #submit:hover {
            border-color: #171F32;
        }

        #rs-header .btn_quote a,
        .submit-btn .wpcf7-submit,
        body.single-events .course-features-info .book-btn a,
        .comment-respond .form-submit #submit {
            color: #FFFFFF;
        }


        .woocommerce button.button,
        .woocommerce button.button.alt,
        .woocommerce ul.products li a.button,
        .woocommerce .wc-forward,
        .woocommerce #respond input#submit,
        .woocommerce a.button,
        .woocommerce .wc-forward,
        .woocommerce button.button,
        .woocommerce input.button,
        .woocommerce #respond input#submit.alt,
        .woocommerce a.button.alt,
        .woocommerce button.button.alt,
        .woocommerce input.button.alt,
        .woocommerce a.button,
        .comments-area .comment-list li.comment .reply a,
        .single-lp_course .inner-column.sticky-top .course-seats.price .course-price,
        .comment-respond .form-submit #submit,
        .menu-sticky.sticky .quote-button,
        #rs-header.header-style-3 .btn_quote .quote-button,
        .wp-block-file .wp-block-file__button,
        body.single-events .course-features-info .book-btn a,
        .wp-block-button__link,
        #rs-header .btn_quote a {
            background: #F49120;
        }


        .readon,
        .woocommerce button.button,
        .woocommerce #respond input#submit,
        .woocommerce a.button,
        .woocommerce .wc-forward,
        .woocommerce button.button,
        .woocommerce input.button,
        .woocommerce #respond input#submit.alt,
        .woocommerce a.button.alt,
        .woocommerce button.button.alt,
        .woocommerce input.button.alt,
        .woocommerce a.button,
        .woocommerce .wc-forward,
        .comment-respond .form-submit #submit,
        .comments-area .comment-list li.comment .reply a,
        .woocommerce button.button.alt,
        .woocommerce ul.products li a.button,
        .menu-sticky.sticky .quote-button:hover,
        body.single-events .course-features-info .book-btn a,
        #rs-header.header-style-3 .btn_quote .quote-button {
            color: #FFFFFF;
        }

        #rs-header .btn_quote a:hover,
        .comment-respond .form-submit #submit:hover,
        .submit-btn .wpcf7-submit:hover,
        body.single-events .course-features-info .book-btn a:hover,
        #rs-header.header-style-3 .btn_quote .quote-button:hover {
            color: #FFFFFF !important;
        }


        .comments-area .comment-list li.comment .reply a:hover,
        .woocommerce a.button:hover,
        .woocommerce #respond input#submit:hover,
        .woocommerce a.button:hover,
        .woocommerce .wc-forward:hover,
        .woocommerce button.button:hover,
        .woocommerce input.button,
        .woocommerce #respond input#submit.alt:hover,
        .woocommerce a.button.alt:hover,
        .woocommerce button.button.alt:hover,
        .woocommerce button.button.alt:hover,
        .woocommerce button.button:hover,
        body.single-events .course-features-info .book-btn a:hover,
        .woocommerce ul.products li:hover a.button,
        .menu-sticky.sticky .quote-button:hover,
        #rs-header.header-transparent .btn_quote a:hover,
        #rs-header.header-style-3 .btn_quote .quote-button:hover,
        .readon:before,
        .submit-btn:before,
        .comment-respond .form-submit #submit:hover,
        .woocommerce #respond input#submit:before,
        .woocommerce a.button:before,
        .woocommerce .wc-forward:before,
        .woocommerce button.button:before,
        .woocommerce input.button:before,
        .woocommerce #respond input#submit.alt:before,
        .woocommerce a.button.alt:before,
        .woocommerce button.button.alt:before,
        .woocommerce input.button.alt:before {
            background: #171F32;

        }

        @media only screen and (min-width: 1300px) {
            .container {
                max-width: 1270px;
            }
        }


        .menu-area .navbar ul li,
        .menu-area .navbar ul>li a {
            padding-left: 0px;
        }

        .menu-area .navbar ul li,
        .menu-area .navbar ul>li a {
            padding-right: 16px;
        }





        .menu-area .navbar ul li ul.sub-menu li a {
            padding-left: 40px;
            padding-right: 40px;
        }

        .menu-area .navbar ul li ul.sub-menu {
            padding-top: 21px;
            padding-bottom: 21px;
        }

        .menu-area .navbar ul li ul.sub-menu li a {
            padding-top: 10px;
            padding-bottom: 10px;
        }



        #rs-header .menu-area .navbar ul>li.mega>ul {
            padding-top: 21px;
            padding-bottom: 21px;
        }

        #rs-header .menu-area .navbar ul li.mega ul.sub-menu li a {
            padding-top: 10px;
            padding-bottom: 10px;
        }


        .rs-breadcrumbs {
            background: #171F32;
        }



        .menu-wrap-off .inner-offcan .nav-link-container .close-button span {
            background: #FFFFFF;
        }


        .menu-wrap-off .off-nav-layer {
            background: #FFFFFF;
        }




        .sidenav .widget_nav_menu ul li a,
        .sidenav.offcanvas-icon .rs-offcanvas-right a,
        .sidenav .menu>li.menu-item-has-children:before,
        .sidenav a {
            color: #333333;
        }







        .rs-breadcrumbs .page-title {
            color: #FFFFFF !important;
        }

        .rs-breadcrumbs ul li *,
        .rs-breadcrumbs ul li.trail-begin a:before,
        .rs-breadcrumbs ul li,
        .rs-breadcrumbs .breadcrumbs-title .current-item,
        .rs-breadcrumbs .breadcrumbs-title span a span {
            color: #FFFFFF !important;
        }

        .rs-breadcrumbs .breadcrumbs-title span a:after,
        .rs-breadcrumbs .breadcrumbs-title span a:before {
            background-color: #FFFFFF !important;
        }

        .rs-breadcrumbs .breadcrumbs-inner,
        #rs-header.header-style-3 .rs-breadcrumbs .breadcrumbs-inner {
            padding-top: 170px;
            padding-bottom: 170px;
        }

        @media only screen and (max-width: 991px) {

            .rs-breadcrumbs .breadcrumbs-inner,
            #rs-header.header-style-3 .rs-breadcrumbs .breadcrumbs-inner {
                padding-top: 150px;
                padding-bottom: 100px;
            }
        }

        body.single-post,
        body.blog,
        body.archive,
        body.single-services,
        body.single-mp-event {
            background: #FBFBFB;
        }

        .loader .loader-container:before {
            border-color: #FF5421 !important;
        }

        .loader .loader-container {
            border-color: #EBEBEC !important;
        }

        #educavo-load {
            background: #FFFFFF !important;
        }


        @media only screen and (max-width: 767px) {
            .btn_quote {
                display: none !important;
            }
        }

        @media only screen and (max-width: 767px) {
            .sidebarmenu-search {
                display: none !important;
            }
        }

        @media only screen and (max-width: 767px) {
            .menu-cart-area {
                display: none !important;
            }
        }


        body.archive.tax-product_cat {
            background: #FFFFFF !important;
        }

        .page-error.coming-soon .countdown-inner .time_circles div,
        .page-error.coming-soon .content-area h3,
        .page-error.coming-soon .content-area h3 span,
        .page-error.coming-soon .follow-us-sbuscribe p,
        .page-error.coming-soon .countdown-inner .time_circles div h4,
        .page-error.coming-soon .countdown-inner .time_circles div span {
            color: #FFFFFF
        }

        .page-error.coming-soon .countdown-inner .time_circles div {
            border-color: #FFFFFF
        }



        .page-error.coming-soon .countdown-inner .time_circles div {
            background: #F49120
        }
    </style>

    <style>
        .main-contain #content,
        body.rs-pages-btm-gap .main-contain #content {
            padding-top: 20%;
        }
    </style>

    <style>
        .header-logo .custom-logo-area img {
            max-height: 35px !important;
        }

        .header-logo .custom-sticky-logo img {
            max-height: 25px !important;
        }
    </style>
    <!-- OverlayLoader -->
    <div id = "overlay-button-click">
        <div class="loader-loader"></div>
    </div>
    <script>
        var overlayOption = document.getElementById('overlay-button-click');

        function addOverlayLoader() {
            overlayOption.style.display = "grid";
            const myTimeout = setTimeout(removeOverlayLoader, 2000);
        }

        function removeOverlayLoader() {
            overlayOption.style.display = "none";
        }
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-92053697-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-92053697-1');
    </script>



    <!-- Global site tag (gtag.js) - Google Ads: 725256293 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-725256293"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'AW-725256293');
    </script>



    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v12.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_GB/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- Your Chat Plugin code -->
    <div class="fb-customerchat" attribution="install_email" attribution_version="biz_inbox"
        page_id="1616943888578964">
    </div>

    <!-- To remove image title attribute on hover -->
    <script>
        jQuery(document).ready(function($) {
            $('img[title]').each(function() {
                $(this).removeAttr('title');
            });
        });
    </script>
</head>

<body
    class="page-template-default page page-id-17613 theme-educavo checkout courses profile become_a_teacher educavo-child learnpress learnpress-page woocommerce-no-js elementor-default elementor-kit-14 elementor-page elementor-page-17613">

    <div class="main-contain offcontents">

        <div class="container">
            <div id="content" class="site-content">
                <div class="row padding-">
                    <div class="col-lg-12 ">

                        <article id="post-17613" class="post-17613 page type-page status-publish hentry">
                            <div class="entry-content">
                                <div data-elementor-type="wp-page" data-elementor-id="17613"
                                    class="elementor elementor-17613" data-elementor-settings="[]">
                                    <div class="elementor-section-wrap">
                                        <section
                                            class="elementor-section elementor-top-section elementor-element elementor-element-c05938a elementor-section-content-middle elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                            data-id="c05938a" data-element_type="section"
                                            data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e121ec1"
                                                    data-id="e121ec1" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-7363fed elementor-widget elementor-widget-heading"
                                                            data-id="7363fed" data-element_type="widget"
                                                            data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2
                                                                    class="elementor-heading-title elementor-size-default">
                                                                    About LCAS</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section
                                            class="elementor-section elementor-top-section elementor-element elementor-element-7ec54b3 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                            data-id="7ec54b3" data-element_type="section"
                                            data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3873811"
                                                    data-id="3873811" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-afb4ef6 elementor-invisible elementor-widget elementor-widget-heading"
                                                            data-id="afb4ef6" data-element_type="widget"
                                                            data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}"
                                                            data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2
                                                                    class="elementor-heading-title elementor-size-default">
                                                                    Making <span style = "color: #F49120;">UK
                                                                        Recognised Qualifications</span> Accessible
                                                                    Globally</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-eba1554 elementor-widget elementor-widget-text-editor"
                                                            data-id="eba1554" data-element_type="widget"
                                                            data-widget_type="text-editor.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="wpb_row vc_row vc_row-fluid mk-fullwidth-false attched-false js-master-row mk-grid mk-in-viewport"
                                                                    data-mk-stretch-content="true">
                                                                    <div
                                                                        class="vc_col-sm-12 wpb_column column_container _ height-full">
                                                                        <div id="ultimate-heading-593461543edb784ea"
                                                                            class="uvc-heading ult-adjust-bottom-margin ultimate-heading-593461543edb784ea uvc-2602 "
                                                                            data-hspacer="no_spacer"
                                                                            data-halign="left">
                                                                            <div class="uvc-sub-heading ult-responsive"
                                                                                data-ultimate-target=".uvc-heading.ultimate-heading-593461543edb784ea .uvc-sub-heading "
                                                                                data-responsive-json-new="{">Magna
                                                                                Carta College is an independent business
                                                                                school, located in Oxford, founded 10
                                                                                years ago by senior Oxford academics.
                                                                                With its team of Oxbridge faculty and
                                                                                experienced industry practitioners,
                                                                                Magna Carta College delivers the highest
                                                                                quality business teaching, learning and
                                                                                insights, combining relevant,
                                                                                insightful, practical and theoretical
                                                                                experience and research, to an
                                                                                international and richly diverse student
                                                                                body.</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="wpb_row vc_row vc_row-fluid mk-fullwidth-false attched-false js-master-row mk-grid mk-in-viewport"
                                                                    data-mk-stretch-content="true">
                                                                    <div
                                                                        class="vc_col-sm-12 wpb_column column_container _ height-full">
                                                                        <div id="ultimate-heading-843361543edb79b1a"
                                                                            class="uvc-heading ult-adjust-bottom-margin ultimate-heading-843361543edb79b1a uvc-3072 "
                                                                            data-hspacer="no_spacer"
                                                                            data-halign="left">
                                                                            <div class="uvc-sub-heading ult-responsive"
                                                                                data-ultimate-target=".uvc-heading.ultimate-heading-843361543edb79b1a .uvc-sub-heading "
                                                                                data-responsive-json-new="{">In
                                                                                partnership with UK Universities we
                                                                                enable students to achieve
                                                                                internationally recognised UK university
                                                                                degrees, through flexible distributed
                                                                                leaning and face-to-face teaching and
                                                                                tutorials.</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-de6575e elementor-invisible elementor-widget elementor-widget-heading"
                                                            data-id="de6575e" data-element_type="widget"
                                                            data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}"
                                                            data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2
                                                                    class="elementor-heading-title elementor-size-default">
                                                                    Our <span
                                                                        style = "color: #F49120;">Programmes</span>
                                                                </h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-7e4a9df elementor-widget elementor-widget-text-editor"
                                                            data-id="7e4a9df" data-element_type="widget"
                                                            data-widget_type="text-editor.default">
                                                            <div class="elementor-widget-container">
                                                                <p>Magna Carta College specialises in programmes for
                                                                    tomorrow business leaders, including Masters and
                                                                    Bachelors programmes in Business Studies, as well as
                                                                    Executive Education programmes, which are designed
                                                                    to address specific company and organisational
                                                                    challenges and needs.</p>
                                                                <p>Learn more about the programmes offered by Magna
                                                                    Carta College at <a
                                                                        href="https://magnacartacollege.ac.uk/programmes/"><u>our
                                                                            programmes</u> </a>section.</p>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-e4d9ceb elementor-invisible elementor-widget elementor-widget-heading"
                                                            data-id="e4d9ceb" data-element_type="widget"
                                                            data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}"
                                                            data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2
                                                                    class="elementor-heading-title elementor-size-default">
                                                                    Make the right choice with <span
                                                                        style = "color: #F49120;">Magna Carta
                                                                        College</span></h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-d031427 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                            data-id="d031427" data-element_type="widget"
                                                            data-widget_type="icon-list.default">
                                                            <div class="elementor-widget-container">
                                                                <ul class="elementor-icon-list-items">
                                                                    <li class="elementor-icon-list-item">
                                                                        <span class="elementor-icon-list-icon" style="color:#F49120;">✔</span>
                                                                        <span class="elementor-icon-list-text">High
                                                                            calibre team providing quality
                                                                            experience</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-3896569 elementor-widget elementor-widget-text-editor"
                                                            data-id="3896569" data-element_type="widget"
                                                            data-widget_type="text-editor.default">
                                                            <div class="elementor-widget-container">
                                                                <p>With highly qualified faculty from top UK
                                                                    universities and industry experts from all over the
                                                                    world, state of the art technology, enhanced student
                                                                    experience and personalised services at Magna Carta
                                                                    College, students are in safe hands to fulfill their
                                                                    educational aspirations and goals.</p>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-3a285f6 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                            data-id="3a285f6" data-element_type="widget"
                                                            data-widget_type="icon-list.default">
                                                            <div class="elementor-widget-container">
                                                                <ul class="elementor-icon-list-items">
                                                                    <li class="elementor-icon-list-item">
                                                                        <span class="elementor-icon-list-icon" style="color:#F49120;">✔</span>
                                                                        <span class="elementor-icon-list-text">You come
                                                                            first with our student-centric
                                                                            approach</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-09abb8f elementor-widget elementor-widget-text-editor"
                                                            data-id="09abb8f" data-element_type="widget"
                                                            data-widget_type="text-editor.default">
                                                            <div class="elementor-widget-container">
                                                                <p>One of our key competitive strengths is to be able to
                                                                    offer all our students the highest quality education
                                                                    by our Oxbridge faculty putting them at the centre
                                                                    of all that we do. We enable our students to get
                                                                    ahead of their peers in today’s competitive
                                                                    environment and increase their employability skills
                                                                    for the next stages of their careers.</p>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-7ff0bca elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                            data-id="7ff0bca" data-element_type="widget"
                                                            data-widget_type="icon-list.default">
                                                            <div class="elementor-widget-container">
                                                                <ul class="elementor-icon-list-items">
                                                                    <li class="elementor-icon-list-item">
                                                                        <span class="elementor-icon-list-icon" style="color:#F49120;">✔</span>
                                                                        <span class="elementor-icon-list-text">Globally
                                                                            recognised and regarded
                                                                            qualifications</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-aea0885 elementor-widget elementor-widget-text-editor"
                                                            data-id="aea0885" data-element_type="widget"
                                                            data-widget_type="text-editor.default">
                                                            <div class="elementor-widget-container">
                                                                <p>MCC offers world-class academic and general
                                                                    qualifications such as BTEC from the most
                                                                    prestigious and globally recognised awarding
                                                                    organisations such as Pearson, which is the largest
                                                                    awarding organisation offering academic and
                                                                    vocational qualifications that are globally
                                                                    recognized and bench-marked.</p>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-e75e253 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                            data-id="e75e253" data-element_type="widget"
                                                            data-widget_type="icon-list.default">
                                                            <div class="elementor-widget-container">
                                                                <ul class="elementor-icon-list-items">
                                                                    <li class="elementor-icon-list-item">
                                                                        <span class="elementor-icon-list-icon" style="color:#F49120;">✔</span>
                                                                        <span class="elementor-icon-list-text">Working
                                                                            with employers and career development at
                                                                            work</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-19dd263 elementor-widget elementor-widget-text-editor"
                                                            data-id="19dd263" data-element_type="widget"
                                                            data-widget_type="text-editor.default">
                                                            <div class="elementor-widget-container">
                                                                <p>Our expertise of Executive Education enables us to
                                                                    work with employers around the world, deliver
                                                                    training tailored to their needs and help their
                                                                    workforce in career development. This also underpins
                                                                    the content, relevance and evolution of our MBA
                                                                    Programme.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>

                            </div>
                            <!-- .entry-content -->

                        </article>
                        <!-- #post-17613 -->
                    </div>
                </div>
            </div>
        </div>

    </div>

    @include('footer')
    <!--googleoff: all-->
    <div id="cookie-law-info-bar" data-nosnippet="true"><span>
            <div class="cli-bar-container cli-style-v2">
                <div class="cli-bar-message">We use cookies on our website to give you the most relevant experience by
                    remembering your preferences and repeat visits. By clicking “Accept All”, you consent to the use of
                    ALL the cookies. However, you may visit "Cookie Settings" to provide a controlled consent.</div>
                <div class="cli-bar-btn_container"><a role='button' tabindex='0'
                        class="medium cli-plugin-button cli-plugin-main-button cli_settings_button"
                        style="margin:0px 5px 0px 0px;">Cookie Settings</a><a id="wt-cli-accept-all-btn"
                        tabindex="0" role='button' data-cli_action="accept_all"
                        class="wt-cli-element medium cli-plugin-button wt-cli-accept-all-btn cookie_action_close_header cli_action_button">Accept
                        All</a></div>
            </div>
        </span></div>
    <div id="cookie-law-info-again" style="display:none;" data-nosnippet="true"><span
            id="cookie_hdr_showagain">Manage consent</span></div>
    <div class="cli-modal" data-nosnippet="true" id="cliSettingsPopup" tabindex="-1" role="dialog"
        aria-labelledby="cliSettingsPopup" aria-hidden="true">
        <div class="cli-modal-dialog" role="document">
            <div class="cli-modal-content cli-bar-popup">
                <button type="button" class="cli-modal-close" id="cliModalClose">
                    <svg class="" viewBox="0 0 24 24">
                        <path
                            d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z">
                        </path>
                        <path d="M0 0h24v24h-24z" fill="none"></path>
                    </svg>
                    <span class="wt-cli-sr-only">Close</span>
                </button>
                <div class="cli-modal-body">
                    <div class="cli-container-fluid cli-tab-container">
                        <div class="cli-row">
                            <div class="cli-col-12 cli-align-items-stretch cli-px-0">
                                <div class="cli-privacy-overview">
                                    <h4>Privacy Overview</h4>
                                    <div class="cli-privacy-content">
                                        <div class="cli-privacy-content-text">This website uses cookies to improve your
                                            experience while you navigate through the website. Out of these, the cookies
                                            that are categorized as necessary are stored on your browser as they are
                                            essential for the working of basic functionalities of the website. We also
                                            use third-party cookies that help us analyze and understand how you use this
                                            website. These cookies will be stored in your browser only with your
                                            consent. You also have the option to opt-out of these cookies. But opting
                                            out of some of these cookies may affect your browsing experience.</div>
                                    </div>
                                    <a class="cli-privacy-readmore" aria-label="Show more" tabindex="0"
                                        role="button" data-readmore-text="Show more"
                                        data-readless-text="Show less"></a>
                                </div>
                            </div>
                            <div class="cli-col-12 cli-align-items-stretch cli-px-0 cli-tab-section-container">
                                <div class="cli-tab-section">
                                    <div class="cli-tab-header">
                                        <a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile"
                                            data-target="necessary" data-toggle="cli-toggle-tab">
                                            Necessary </a>
                                        <div class="wt-cli-necessary-checkbox">
                                            <input type="checkbox" class="cli-user-preference-checkbox"
                                                id="wt-cli-checkbox-necessary" data-id="checkbox-necessary"
                                                checked="checked" />
                                            <label class="form-check-label"
                                                for="wt-cli-checkbox-necessary">Necessary</label>
                                        </div>
                                        <span class="cli-necessary-caption">Always Enabled</span>
                                    </div>
                                    <div class="cli-tab-content">
                                        <div class="cli-tab-pane cli-fade" data-id="necessary">
                                            <div class="wt-cli-cookie-description">
                                                Necessary cookies are absolutely essential for the website to function
                                                properly. These cookies ensure basic functionalities and security
                                                features of the website, anonymously.
                                                <table class="cookielawinfo-row-cat-table cookielawinfo-winter">
                                                    <thead>
                                                        <tr>
                                                            <th class="cookielawinfo-column-1">Cookie</th>
                                                            <th class="cookielawinfo-column-3">Duration</th>
                                                            <th class="cookielawinfo-column-4">Description</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="cookielawinfo-row">
                                                            <td class="cookielawinfo-column-1">
                                                                cookielawinfo-checkbox-analytics</td>
                                                            <td class="cookielawinfo-column-3">11 months</td>
                                                            <td class="cookielawinfo-column-4">This cookie is set by
                                                                GDPR Cookie Consent plugin. The cookie is used to store
                                                                the user consent for the cookies in the category
                                                                "Analytics".</td>
                                                        </tr>
                                                        <tr class="cookielawinfo-row">
                                                            <td class="cookielawinfo-column-1">
                                                                cookielawinfo-checkbox-functional</td>
                                                            <td class="cookielawinfo-column-3">11 months</td>
                                                            <td class="cookielawinfo-column-4">The cookie is set by
                                                                GDPR cookie consent to record the user consent for the
                                                                cookies in the category "Functional".</td>
                                                        </tr>
                                                        <tr class="cookielawinfo-row">
                                                            <td class="cookielawinfo-column-1">
                                                                cookielawinfo-checkbox-necessary</td>
                                                            <td class="cookielawinfo-column-3">11 months</td>
                                                            <td class="cookielawinfo-column-4">This cookie is set by
                                                                GDPR Cookie Consent plugin. The cookies is used to store
                                                                the user consent for the cookies in the category
                                                                "Necessary".</td>
                                                        </tr>
                                                        <tr class="cookielawinfo-row">
                                                            <td class="cookielawinfo-column-1">
                                                                cookielawinfo-checkbox-others</td>
                                                            <td class="cookielawinfo-column-3">11 months</td>
                                                            <td class="cookielawinfo-column-4">This cookie is set by
                                                                GDPR Cookie Consent plugin. The cookie is used to store
                                                                the user consent for the cookies in the category "Other.
                                                            </td>
                                                        </tr>
                                                        <tr class="cookielawinfo-row">
                                                            <td class="cookielawinfo-column-1">
                                                                cookielawinfo-checkbox-performance</td>
                                                            <td class="cookielawinfo-column-3">11 months</td>
                                                            <td class="cookielawinfo-column-4">This cookie is set by
                                                                GDPR Cookie Consent plugin. The cookie is used to store
                                                                the user consent for the cookies in the category
                                                                "Performance".</td>
                                                        </tr>
                                                        <tr class="cookielawinfo-row">
                                                            <td class="cookielawinfo-column-1">viewed_cookie_policy
                                                            </td>
                                                            <td class="cookielawinfo-column-3">11 months</td>
                                                            <td class="cookielawinfo-column-4">The cookie is set by the
                                                                GDPR Cookie Consent plugin and is used to store whether
                                                                or not user has consented to the use of cookies. It does
                                                                not store any personal data.</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cli-tab-section">
                                    <div class="cli-tab-header">
                                        <a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile"
                                            data-target="functional" data-toggle="cli-toggle-tab">
                                            Functional </a>
                                        <div class="cli-switch">
                                            <input type="checkbox" id="wt-cli-checkbox-functional"
                                                class="cli-user-preference-checkbox" data-id="checkbox-functional" />
                                            <label for="wt-cli-checkbox-functional" class="cli-slider"
                                                data-cli-enable="Enabled" data-cli-disable="Disabled"><span
                                                    class="wt-cli-sr-only">Functional</span></label>
                                        </div>
                                    </div>
                                    <div class="cli-tab-content">
                                        <div class="cli-tab-pane cli-fade" data-id="functional">
                                            <div class="wt-cli-cookie-description">
                                                Functional cookies help to perform certain functionalities like sharing
                                                the content of the website on social media platforms, collect feedbacks,
                                                and other third-party features.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cli-tab-section">
                                    <div class="cli-tab-header">
                                        <a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile"
                                            data-target="performance" data-toggle="cli-toggle-tab">
                                            Performance </a>
                                        <div class="cli-switch">
                                            <input type="checkbox" id="wt-cli-checkbox-performance"
                                                class="cli-user-preference-checkbox" data-id="checkbox-performance" />
                                            <label for="wt-cli-checkbox-performance" class="cli-slider"
                                                data-cli-enable="Enabled" data-cli-disable="Disabled"><span
                                                    class="wt-cli-sr-only">Performance</span></label>
                                        </div>
                                    </div>
                                    <div class="cli-tab-content">
                                        <div class="cli-tab-pane cli-fade" data-id="performance">
                                            <div class="wt-cli-cookie-description">
                                                Performance cookies are used to understand and analyze the key
                                                performance indexes of the website which helps in delivering a better
                                                user experience for the visitors.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cli-tab-section">
                                    <div class="cli-tab-header">
                                        <a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile"
                                            data-target="analytics" data-toggle="cli-toggle-tab">
                                            Analytics </a>
                                        <div class="cli-switch">
                                            <input type="checkbox" id="wt-cli-checkbox-analytics"
                                                class="cli-user-preference-checkbox" data-id="checkbox-analytics" />
                                            <label for="wt-cli-checkbox-analytics" class="cli-slider"
                                                data-cli-enable="Enabled" data-cli-disable="Disabled"><span
                                                    class="wt-cli-sr-only">Analytics</span></label>
                                        </div>
                                    </div>
                                    <div class="cli-tab-content">
                                        <div class="cli-tab-pane cli-fade" data-id="analytics">
                                            <div class="wt-cli-cookie-description">
                                                Analytical cookies are used to understand how visitors interact with the
                                                website. These cookies help provide information on metrics the number of
                                                visitors, bounce rate, traffic source, etc.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cli-tab-section">
                                    <div class="cli-tab-header">
                                        <a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile"
                                            data-target="advertisement" data-toggle="cli-toggle-tab">
                                            Advertisement </a>
                                        <div class="cli-switch">
                                            <input type="checkbox" id="wt-cli-checkbox-advertisement"
                                                class="cli-user-preference-checkbox"
                                                data-id="checkbox-advertisement" />
                                            <label for="wt-cli-checkbox-advertisement" class="cli-slider"
                                                data-cli-enable="Enabled" data-cli-disable="Disabled"><span
                                                    class="wt-cli-sr-only">Advertisement</span></label>
                                        </div>
                                    </div>
                                    <div class="cli-tab-content">
                                        <div class="cli-tab-pane cli-fade" data-id="advertisement">
                                            <div class="wt-cli-cookie-description">
                                                Advertisement cookies are used to provide visitors with relevant ads and
                                                marketing campaigns. These cookies track visitors across websites and
                                                collect information to provide customized ads.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cli-tab-section">
                                    <div class="cli-tab-header">
                                        <a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile"
                                            data-target="others" data-toggle="cli-toggle-tab">
                                            Others </a>
                                        <div class="cli-switch">
                                            <input type="checkbox" id="wt-cli-checkbox-others"
                                                class="cli-user-preference-checkbox" data-id="checkbox-others" />
                                            <label for="wt-cli-checkbox-others" class="cli-slider"
                                                data-cli-enable="Enabled" data-cli-disable="Disabled"><span
                                                    class="wt-cli-sr-only">Others</span></label>
                                        </div>
                                    </div>
                                    <div class="cli-tab-content">
                                        <div class="cli-tab-pane cli-fade" data-id="others">
                                            <div class="wt-cli-cookie-description">
                                                Other uncategorized cookies are those that are being analyzed and have
                                                not been classified into a category as yet.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cli-modal-footer">
                    <div class="wt-cli-element cli-container-fluid cli-tab-container">
                        <div class="cli-row">
                            <div class="cli-col-12 cli-align-items-stretch cli-px-0">
                                <div class="cli-tab-footer wt-cli-privacy-overview-actions">

                                    <a id="wt-cli-privacy-save-btn" role="button" tabindex="0"
                                        data-cli-action="accept"
                                        class="wt-cli-privacy-btn cli_setting_save_button wt-cli-privacy-accept-btn cli-btn">SAVE
                                        & ACCEPT</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cli-modal-backdrop cli-fade cli-settings-overlay"></div>
    <div class="cli-modal-backdrop cli-fade cli-popupbar-overlay"></div>
    <!--googleon: all--><!-- Instagram Feed JS -->
    <script type="text/javascript">
        var sbiajaxurl = "https://magnacartacollege.ac.uk/wp-admin/admin-ajax.php";
    </script>
    <!-- Click to Chat - https://holithemes.com/plugins/click-to-chat/  v3.6 -->
    <div class="ht-ctc ht-ctc-chat ctc-analytics ctc_wp_desktop style-7  " id="ht-ctc-chat"
        style="display: none;  position: fixed; bottom: 24px; right: 100px;">
        <div class="ht_ctc_style ht_ctc_chat_style">
            <style id="ht-ctc-s7">
                .ht-ctc.style-7:hover .ctc_s_7_icon_padding {
                    background-color: #25d366 !important;
                }

                .ht-ctc.style-7:hover svg g path {
                    fill: #f4f4f4 !important;
                }
            </style>


            <span class="ht_ctc_chat_data" data-no_number=""
                data-settings="{&quot;number&quot;:&quot;447931097437&quot;,&quot;pre_filled&quot;:&quot;&quot;,&quot;dis_m&quot;:&quot;show&quot;,&quot;dis_d&quot;:&quot;show&quot;,&quot;css&quot;:&quot;display: none; cursor: pointer; z-index: 99999999;&quot;,&quot;pos_d&quot;:&quot;position: fixed; bottom: 24px; right: 100px;&quot;,&quot;pos_m&quot;:&quot;position: fixed; bottom: 90px; right: 28px;&quot;,&quot;schedule&quot;:&quot;no&quot;,&quot;se&quot;:150,&quot;ani&quot;:&quot;no-animations&quot;,&quot;web&quot;:&quot;y&quot;,&quot;ga&quot;:&quot;yes&quot;,&quot;fb&quot;:&quot;yes&quot;}"></span>
            <!-- Facebook Pixel Event Code -->
            <script type='text/javascript'>
                document.addEventListener('wpcf7mailsent', function(event) {
                    if ("fb_pxl_code" in event.detail.apiResponse) {
                        eval(event.detail.apiResponse.fb_pxl_code);
                    }
                }, false);
            </script>
            <!-- End Facebook Pixel Event Code -->
            <div id='fb-pxl-ajax-code'></div>
            <script type="text/javascript">
                (function() {
                    var c = document.body.className;
                    c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
                    document.body.className = c;
                })();
            </script>

            <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="pswp__bg"></div>
                <div class="pswp__scroll-wrap">
                    <div class="pswp__container">
                        <div class="pswp__item"></div>
                        <div class="pswp__item"></div>
                        <div class="pswp__item"></div>
                    </div>
                    <div class="pswp__ui pswp__ui--hidden">
                        <div class="pswp__top-bar">
                            <div class="pswp__counter"></div>
                            <button class="pswp__button pswp__button--close" aria-label="Close (Esc)"></button>
                            <button class="pswp__button pswp__button--share" aria-label="Share"></button>
                            <button class="pswp__button pswp__button--fs" aria-label="Toggle fullscreen"></button>
                            <button class="pswp__button pswp__button--zoom" aria-label="Zoom in/out"></button>
                            <div class="pswp__preloader">
                                <div class="pswp__preloader__icn">
                                    <div class="pswp__preloader__cut">
                                        <div class="pswp__preloader__donut"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                            <div class="pswp__share-tooltip"></div>
                        </div>
                        <button class="pswp__button pswp__button--arrow--left"
                            aria-label="Previous (arrow left)"></button>
                        <button class="pswp__button pswp__button--arrow--right"
                            aria-label="Next (arrow right)"></button>
                        <div class="pswp__caption">
                            <div class="pswp__caption__center"></div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/template" id="tmpl-variation-template">
	<div class="woocommerce-variation-description"></div>
	<div class="woocommerce-variation-price"></div>
	<div class="woocommerce-variation-availability"></div>
</script>
            <script type="text/template" id="tmpl-unavailable-variation-template">
	<p>Sorry, this product is unavailable. Please choose a different combination.</p>
</script>
            <link rel='stylesheet' id='cookie-law-info-table-css'
                href='https://magnacartacollege.ac.uk/wp-content/plugins/cookie-law-info/public/css/cookie-law-info-table.css?ver=2.0.6'
                type='text/css' media='all' />
            <link rel='stylesheet' id='e-animations-css'
                href='https://magnacartacollege.ac.uk/wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.4.3'
                type='text/css' media='all' />
            <link rel='stylesheet' id='photoswipe-css'
                href='https://magnacartacollege.ac.uk/wp-content/plugins/woocommerce/assets/css/photoswipe/photoswipe.min.css?ver=5.8.0'
                type='text/css' media='all' />
            <link rel='stylesheet' id='photoswipe-default-skin-css'
                href='https://magnacartacollege.ac.uk/wp-content/plugins/woocommerce/assets/css/photoswipe/default-skin/default-skin.min.css?ver=5.8.0'
                type='text/css' media='all' />
            <script type="text/javascript" id="ht_ctc_app_js-js-extra">
                /* <![CDATA[ */
                var ht_ctc_chat_var = {
                    "number": "447931097437",
                    "pre_filled": "",
                    "dis_m": "show",
                    "dis_d": "show",
                    "css": "display: none; cursor: pointer; z-index: 99999999;",
                    "pos_d": "position: fixed; bottom: 24px; right: 100px;",
                    "pos_m": "position: fixed; bottom: 90px; right: 28px;",
                    "schedule": "no",
                    "se": "150",
                    "ani": "no-animations",
                    "web": "y",
                    "ga": "yes",
                    "fb": "yes"
                };
                /* ]]> */
            </script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/plugins/click-to-chat-for-whatsapp/new/inc/assets/js/332.app.js?ver=3.6"
                id="ht_ctc_app_js-js"></script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-includes/js/dist/vendor/wp-polyfill-inert.min.js?ver=3.1.2"
                id="wp-polyfill-inert-js"></script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.14.0"
                id="regenerator-runtime-js"></script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0" id="wp-polyfill-js">
            </script>
            <script type="text/javascript" id="contact-form-7-js-extra">
                /* <![CDATA[ */
                var wpcf7 = {
                    "api": {
                        "root": "https:\/\/magnacartacollege.ac.uk\/wp-json\/",
                        "namespace": "contact-form-7\/v1"
                    }
                };
                /* ]]> */
            </script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.5.2"
                id="contact-form-7-js"></script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/plugins/ditty-news-ticker/inc/static/js/swiped-events.min.js?ver=1.1.4"
                id="swiped-events-js"></script>
            <script type="text/javascript" src="https://magnacartacollege.ac.uk/wp-includes/js/imagesloaded.min.js?ver=5.0.0"
                id="imagesloaded-js"></script>
            <script type="text/javascript" src="https://magnacartacollege.ac.uk/wp-includes/js/jquery/ui/effect.min.js?ver=1.13.2"
                id="jquery-effects-core-js"></script>
            <script type="text/javascript" id="ditty-news-ticker-js-extra">
                /* <![CDATA[ */
                var mtphr_dnt_vars = {
                    "is_rtl": ""
                };
                /* ]]> */
            </script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/plugins/ditty-news-ticker/inc/static/js/ditty-news-ticker.min.js?ver=1639558109"
                id="ditty-news-ticker-js"></script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/plugins/popup-anything-on-click/assets/js/popupaoc-public.js?ver=2.0.7"
                id="popupaoc-public-js-js"></script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.5.8.0"
                id="jquery-blockui-js"></script>
            <script type="text/javascript" id="wc-add-to-cart-js-extra">
                /* <![CDATA[ */
                var wc_add_to_cart_params = {
                    "ajax_url": "\/wp-admin\/admin-ajax.php",
                    "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
                    "i18n_view_cart": "View cart",
                    "cart_url": "https:\/\/magnacartacollege.ac.uk",
                    "is_cart": "",
                    "cart_redirect_after_add": "no"
                };
                /* ]]> */
            </script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=5.8.0"
                id="wc-add-to-cart-js"></script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.5.8.0"
                id="js-cookie-js"></script>
            <script type="text/javascript" id="woocommerce-js-extra">
                /* <![CDATA[ */
                var woocommerce_params = {
                    "ajax_url": "\/wp-admin\/admin-ajax.php",
                    "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
                };
                /* ]]> */
            </script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=5.8.0"
                id="woocommerce-js"></script>
            <script type="text/javascript" id="wc-cart-fragments-js-extra">
                /* <![CDATA[ */
                var wc_cart_fragments_params = {
                    "ajax_url": "\/wp-admin\/admin-ajax.php",
                    "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
                    "cart_hash_key": "wc_cart_hash_1dac97e2ad7b9a30e28851347953a9ca",
                    "fragment_name": "wc_fragments_1dac97e2ad7b9a30e28851347953a9ca",
                    "request_timeout": "5000"
                };
                /* ]]> */
            </script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=5.8.0"
                id="wc-cart-fragments-js"></script>
            <script type="text/javascript" id="1aaf3b081-js-extra">
                /* <![CDATA[ */
                var localize = {
                    "ajaxurl": "https:\/\/magnacartacollege.ac.uk\/wp-admin\/admin-ajax.php",
                    "nonce": "08eeaba844",
                    "i18n": {
                        "added": "Added ",
                        "compare": "Compare",
                        "loading": "Loading..."
                    }
                };
                /* ]]> */
            </script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/uploads/essential-addons-elementor/734e5f942.min.js?ver=1702383858"
                id="1aaf3b081-js"></script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/plugins/rselements/assets/js/jquery.magnific-popup.min.js?ver=201513434"
                id="magnific-popup-js"></script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/plugins/rselements/assets/js/popper.min.js?ver=201513434"
                id="popper-js"></script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/plugins/rselements/assets/js/bootstrap.min.js?ver=201513434"
                id="bootstrap-js"></script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/plugins/rselements/assets/js/datatables.min.js?ver=201513434"
                id="datatables-js"></script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/plugins/rselements/assets/js/waypoints.min.js?ver=201513434"
                id="waypoints-js"></script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/plugins/rselements/assets/js/jquery.counterup.min.js?ver=201513434"
                id="jquery-counterup-js"></script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/plugins/rselements/assets/js/time-circle.js?ver=201513434"
                id="time-circle-js"></script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/plugins/rselements/assets/js/headding-title.js?ver=201513434"
                id="headding-title-js"></script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/plugins/rselements/assets/js/slick.min.js?ver=201513434"
                id="slick-js"></script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/plugins/rselements/assets/js/jQuery-plugin-progressbar.js?ver=201513434"
                id="jquery-plugin-progressbar-js"></script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/plugins/rselements/assets/js/tilt.jquery.min.js?ver=201513434"
                id="js-tilt-view-js"></script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/plugins/rselements/assets/js/ddbeforeandafter.js?ver=201513434"
                id="ddbeforeandafter-js"></script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/plugins/rselements/assets/js/custom.js?ver=201513434"
                id="rsaddons-custom-pro-js"></script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/themes/educavo/assets/js/modernizr-2.8.3.min.js?ver=20151215"
                id="modernizr-js"></script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/themes/educavo/assets/js/owl.carousel.min.js?ver=20151215"
                id="owl-carousel-js"></script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/themes/educavo/assets/js/waypoints-sticky.min.js?ver=20151215"
                id="waypoints-sticky-js"></script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/themes/educavo/assets/js/jquery.magnific-popup.min.js?ver=20151215"
                id="jquery-magnific-popup-js"></script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/themes/educavo/assets/js/isotope-educavo.js?ver=20151215"
                id="isotope-educavo-js"></script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/themes/educavo/assets/js/classie.js?ver=201513434"
                id="educavo-classie-js"></script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/themes/educavo/assets/js/theia-sticky-sidebar.js?ver=20151215"
                id="theia-sticky-sidebar-js"></script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/themes/educavo/assets/js/mobilemenu.js?ver=201513434"
                id="educavo-mobilemenu-js"></script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/themes/educavo/assets/js/main.js?ver=201513434"
                id="educavo-main-js"></script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-includes/js/dist/hooks.min.js?ver=c6aec9a8d4e5a5d543a1" id="wp-hooks-js">
            </script>
            <script type="text/javascript" id="wpdreams-ajaxsearchlite-js-before">
                /* <![CDATA[ */
                window.ASL = typeof window.ASL !== 'undefined' ? window.ASL : {};
                window.ASL.wp_rocket_exception = "DOMContentLoaded";
                window.ASL.ajaxurl = "https:\/\/magnacartacollege.ac.uk\/wp-admin\/admin-ajax.php";
                window.ASL.backend_ajaxurl = "https:\/\/magnacartacollege.ac.uk\/wp-admin\/admin-ajax.php";
                window.ASL.js_scope = "jQuery";
                window.ASL.detect_ajax = 0;
                window.ASL.scrollbar = true;
                window.ASL.js_retain_popstate = 0;
                window.ASL.version = 4750;
                window.ASL.min_script_src = [
                    "https:\/\/magnacartacollege.ac.uk\/wp-content\/plugins\/ajax-search-lite\/js\/min\/jquery.ajaxsearchlite.min.js"
                ];
                window.ASL.highlight = {
                    "enabled": false,
                    "data": []
                };
                window.ASL.fix_duplicates = 1;
                window.ASL.analytics = {
                    "method": 0,
                    "tracking_id": "",
                    "string": "?ajax_search={asl_term}",
                    "event": {
                        "focus": {
                            "active": 1,
                            "action": "focus",
                            "category": "ASL",
                            "label": "Input focus",
                            "value": "1"
                        },
                        "search_start": {
                            "active": 0,
                            "action": "search_start",
                            "category": "ASL",
                            "label": "Phrase: {phrase}",
                            "value": "1"
                        },
                        "search_end": {
                            "active": 1,
                            "action": "search_end",
                            "category": "ASL",
                            "label": "{phrase} | {results_count}",
                            "value": "1"
                        },
                        "magnifier": {
                            "active": 1,
                            "action": "magnifier",
                            "category": "ASL",
                            "label": "Magnifier clicked",
                            "value": "1"
                        },
                        "return": {
                            "active": 1,
                            "action": "return",
                            "category": "ASL",
                            "label": "Return button pressed",
                            "value": "1"
                        },
                        "facet_change": {
                            "active": 0,
                            "action": "facet_change",
                            "category": "ASL",
                            "label": "{option_label} | {option_value}",
                            "value": "1"
                        },
                        "result_click": {
                            "active": 1,
                            "action": "result_click",
                            "category": "ASL",
                            "label": "{result_title} | {result_url}",
                            "value": "1"
                        }
                    }
                };
                /* ]]> */
            </script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/plugins/ajax-search-lite/js/min/jquery.ajaxsearchlite.min.js?ver=4.9.5"
                id="wpdreams-ajaxsearchlite-js"></script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/plugins/wp-smushit/app/assets/js/smush-lazy-load.min.js?ver=3.9.2"
                id="smush-lazy-load-js"></script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.4.3"
                id="elementor-webpack-runtime-js"></script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.4.3"
                id="elementor-frontend-modules-js"></script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2"
                id="elementor-waypoints-js"></script>
            <script type="text/javascript" src="https://magnacartacollege.ac.uk/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2"
                id="jquery-ui-core-js"></script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/plugins/elementor/assets/lib/swiper/swiper.min.js?ver=5.3.6"
                id="swiper-js"></script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/plugins/elementor/assets/lib/share-link/share-link.min.js?ver=3.4.3"
                id="share-link-js"></script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/plugins/elementor/assets/lib/dialog/dialog.min.js?ver=4.8.1"
                id="elementor-dialog-js"></script>
            <script type="text/javascript" id="elementor-frontend-js-extra">
                /* <![CDATA[ */
                var PaModulesSettings = {
                    "equalHeight_url": "https:\/\/magnacartacollege.ac.uk\/wp-content\/plugins\/premium-addons-for-elementor\/assets\/frontend\/min-js\/premium-eq-height.min.js"
                };
                /* ]]> */
            </script>
            <script type="text/javascript" id="elementor-frontend-js-before">
                /* <![CDATA[ */
                var elementorFrontendConfig = {
                    "environmentMode": {
                        "edit": false,
                        "wpPreview": false,
                        "isScriptDebug": false
                    },
                    "i18n": {
                        "shareOnFacebook": "Share on Facebook",
                        "shareOnTwitter": "Share on Twitter",
                        "pinIt": "Pin it",
                        "download": "Download",
                        "downloadImage": "Download image",
                        "fullscreen": "Fullscreen",
                        "zoom": "Zoom",
                        "share": "Share",
                        "playVideo": "Play Video",
                        "previous": "Previous",
                        "next": "Next",
                        "close": "Close"
                    },
                    "is_rtl": false,
                    "breakpoints": {
                        "xs": 0,
                        "sm": 480,
                        "md": 768,
                        "lg": 1025,
                        "xl": 1440,
                        "xxl": 1600
                    },
                    "responsive": {
                        "breakpoints": {
                            "mobile": {
                                "label": "Mobile",
                                "value": 767,
                                "default_value": 767,
                                "direction": "max",
                                "is_enabled": true
                            },
                            "mobile_extra": {
                                "label": "Mobile Extra",
                                "value": 880,
                                "default_value": 880,
                                "direction": "max",
                                "is_enabled": false
                            },
                            "tablet": {
                                "label": "Tablet",
                                "value": 1024,
                                "default_value": 1024,
                                "direction": "max",
                                "is_enabled": true
                            },
                            "tablet_extra": {
                                "label": "Tablet Extra",
                                "value": 1200,
                                "default_value": 1200,
                                "direction": "max",
                                "is_enabled": false
                            },
                            "laptop": {
                                "label": "Laptop",
                                "value": 1366,
                                "default_value": 1366,
                                "direction": "max",
                                "is_enabled": false
                            },
                            "widescreen": {
                                "label": "Widescreen",
                                "value": 2400,
                                "default_value": 2400,
                                "direction": "min",
                                "is_enabled": false
                            }
                        }
                    },
                    "version": "3.4.3",
                    "is_static": false,
                    "experimentalFeatures": {
                        "e_dom_optimization": true,
                        "a11y_improvements": true,
                        "e_import_export": true,
                        "landing-pages": true,
                        "elements-color-picker": true,
                        "admin-top-bar": true
                    },
                    "urls": {
                        "assets": "https:\/\/magnacartacollege.ac.uk\/wp-content\/plugins\/elementor\/assets\/"
                    },
                    "settings": {
                        "page": [],
                        "editorPreferences": []
                    },
                    "kit": {
                        "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                        "global_image_lightbox": "yes",
                        "lightbox_enable_counter": "yes",
                        "lightbox_enable_fullscreen": "yes",
                        "lightbox_enable_zoom": "yes",
                        "lightbox_enable_share": "yes",
                        "lightbox_title_src": "title",
                        "lightbox_description_src": "description"
                    },
                    "post": {
                        "id": 17613,
                        "title": "About%20Magna%20Carta%20College%20%7C%20MCC",
                        "excerpt": "",
                        "featuredImage": false
                    }
                };
                /* ]]> */
            </script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.4.3"
                id="elementor-frontend-js"></script>
            <script type="text/javascript" id="elementor-frontend-js-after">
                /* <![CDATA[ */
                window.scopes_array = {};
                window.backend = 0;
                jQuery(window).on("elementor/frontend/init", function() {
                    elementorFrontend.hooks.addAction("frontend/element_ready/section", function($scope, $) {
                        if ("undefined" == typeof $scope) {
                            return;
                        }
                        if ($scope.hasClass("premium-equal-height-yes")) {
                            var id = $scope.data("id");
                            window.scopes_array[id] = $scope;
                        }
                        if (elementorFrontend.isEditMode()) {
                            var url = PaModulesSettings.equalHeight_url;
                            jQuery.cachedAssets = function(url, options) {
                                // Allow user to set any option except for dataType, cache, and url.
                                options = jQuery.extend(options || {}, {
                                    dataType: "script",
                                    cache: true,
                                    url: url
                                });
                                // Return the jqXHR object so we can chain callbacks.
                                return jQuery.ajax(options);
                            };
                            jQuery.cachedAssets(url);
                            window.backend = 1;
                        }
                    });
                });
                jQuery(document).ready(function() {
                    if (jQuery.find(".premium-equal-height-yes").length < 1) {
                        return;
                    }

                    var url = PaModulesSettings.equalHeight_url;

                    jQuery.cachedAssets = function(url, options) {
                        // Allow user to set any option except for dataType, cache, and url.
                        options = jQuery.extend(options || {}, {
                            dataType: "script",
                            cache: true,
                            url: url
                        });

                        // Return the jqXHR object so we can chain callbacks.
                        return jQuery.ajax(options);
                    };
                    jQuery.cachedAssets(url);
                });
                /* ]]> */
            </script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/plugins/elementor/assets/js/preloaded-modules.min.js?ver=3.4.3"
                id="preloaded-modules-js"></script>
            <script type="text/javascript" src="https://magnacartacollege.ac.uk/wp-includes/js/underscore.min.js?ver=1.13.4"
                id="underscore-js"></script>
            <script type="text/javascript" id="wp-util-js-extra">
                /* <![CDATA[ */
                var _wpUtilSettings = {
                    "ajax": {
                        "url": "\/wp-admin\/admin-ajax.php"
                    }
                };
                /* ]]> */
            </script>
            <script type="text/javascript" src="https://magnacartacollege.ac.uk/wp-includes/js/wp-util.min.js?ver=6.4.2"
                id="wp-util-js"></script>
            <script type="text/javascript" id="wpforms-elementor-js-extra">
                /* <![CDATA[ */
                var wpformsElementorVars = {
                    "captcha_provider": "recaptcha",
                    "recaptcha_type": "v2"
                };
                /* ]]> */
            </script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/plugins/wpforms-lite/assets/js/integrations/elementor/frontend.min.js?ver=1.7.1.2"
                id="wpforms-elementor-js"></script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/plugins/woocommerce/assets/js/zoom/jquery.zoom.min.js?ver=1.7.21-wc.5.8.0"
                id="zoom-js"></script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/plugins/woocommerce/assets/js/flexslider/jquery.flexslider.min.js?ver=2.7.2-wc.5.8.0"
                id="flexslider-js"></script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe.min.js?ver=4.1.1-wc.5.8.0"
                id="photoswipe-js"></script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe-ui-default.min.js?ver=4.1.1-wc.5.8.0"
                id="photoswipe-ui-default-js"></script>
            <script type="text/javascript" id="wc-add-to-cart-variation-js-extra">
                /* <![CDATA[ */
                var wc_add_to_cart_variation_params = {
                    "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
                    "i18n_no_matching_variations_text": "Sorry, no products matched your selection. Please choose a different combination.",
                    "i18n_make_a_selection_text": "Please select some product options before adding this product to your cart.",
                    "i18n_unavailable_text": "Sorry, this product is unavailable. Please choose a different combination."
                };
                /* ]]> */
            </script>
            <script type="text/javascript"
                src="https://magnacartacollege.ac.uk/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min.js?ver=5.8.0"
                id="wc-add-to-cart-variation-js"></script>
            <script type="text/javascript" id="wc-single-product-js-extra">
                /* <![CDATA[ */
                var wc_single_product_params = {
                    "i18n_required_rating_text": "Please select a rating",
                    "review_rating_required": "yes",
                    "flexslider": {
                        "rtl": false,
                        "animation": "slide",
                        "smoothHeight": true,
                        "directionNav": false,
                        "controlNav": "thumbnails",
                        "slideshow": false,
                        "animationSpeed": 500,
                        "animationLoop": false,
                        "allowOneSlide": false
                    },
                    "zoom_enabled": "1",
                    "zoom_options": [],
                    "photoswipe_enabled": "1",
                    "photoswipe_options": {
                        "shareEl": false,
                        "closeOnScroll": false,
                        "history": false,
                        "hideAnimationDuration": 0,
                        "showAnimationDuration": 0
                    },
                    "flexslider_enabled": "1"
                };
                /* ]]> */
            </script>
</body>
</html>
