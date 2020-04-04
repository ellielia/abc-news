<!DOCTYPE html>
<html lang="en">
<head>
    <!--
    This is a recreation of the ABC News website by /u/ellielia, for /r/AustraliaSim.
    -->
    <!--Metadata-->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="schema.DC" href="http://purl.org/dc/elements/1.1/">
    <link rel="schema.DCTERMS" href="http://purl.org/dc/terms/">
    <link rel="schema.iptc" href="urn:newsml:iptc.org:20031010:topicset.iptc-genre:8">
    <link rel="canonical" data-abc-platform="standard" href="https://www.abc.net.au/news/">
    <title>@yield('title') - ABC News AustraliaSim</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:site_name" content="ABC News AustraliaSim"/>
    <meta property="og:title" content="@yield('title') - ABC News AustraliaSim"/>
    <meta property="og:description" content="@yield('description')"/>
    <meta property="og:image" content="@yield('image')"/>
    <meta property="og:url" content="{{\Illuminate\Support\Facades\URL::current()}}"/>
    <meta name="description" content="@yield('description')">
    <link rel="shortcut icon" href="{{ asset('') }}">
    <!--ABC News CSS-->
    <link media="all" rel="stylesheet" type="text/css" href="{{asset('css/bundle.min.css')}}"/>
    <link media="all" rel="stylesheet" type="text/css" href="{{asset('css/desktop.css')}}"/>
    <!--ABC News JS and JQuery-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
{{--    <script type="text/javascript" src="{{asset('js/bundle.min.js')}}"></script>--}}
{{--    <script type="text/javascript" src="{{asset('js/desktop.js')}}"></script>--}}
{{--    <script type="text/javascript" src="{{asset('js/config.js')}}"></script>--}}
    <!--CSS-->
    <style type="text/css">
        @charset "UTF-8";
        .platform-mobile .player-promo.transformed {
            padding: 10px;
        }

        body div.player-promo.transformed,
        body aside.player-promo.transformed {
            background: black;
            position: relative;
            overflow: hidden;
            padding: 10px;
            box-sizing: border-box;
            position: relative;
            border: none;
        }

        body div.player-promo.transformed > *,
        body aside.player-promo.transformed > * {
            color: white;
            font-family: ABCSans, sans-serif;
        }

        body div.player-promo.transformed button,
        body div.player-promo.transformed a,
        body aside.player-promo.transformed button,
        body aside.player-promo.transformed a {
            touch-action: manipulation;
        }

        body div.player-promo.transformed *,
        body aside.player-promo.transformed * {
            margin: 0;
            padding: 0;
            text-transform: none;
            font-weight: normal;
            border: none;
            transition: opacity 0.2s;
        }

        body div.player-promo.transformed.loading .jw-text-elapsed,
        body div.player-promo.transformed.loading .jw-text-duration,
        body div.player-promo.transformed.loading .scrubber,
        body aside.player-promo.transformed.loading .jw-text-elapsed,
        body aside.player-promo.transformed.loading .jw-text-duration,
        body aside.player-promo.transformed.loading .scrubber {
            opacity: 0;
            pointer-events: none;
        }

        body div.player-promo.transformed.error .error,
        body aside.player-promo.transformed.error .error {
            display: block;
            text-align: center;
        }

        body div.player-promo.transformed.error .error a.btn,
        body aside.player-promo.transformed.error .error a.btn {
            padding: 9px 16px;
            color: black;
        }

        body div.player-promo.transformed.error .success,
        body aside.player-promo.transformed.error .success {
            display: none;
        }

        body div.player-promo.transformed:not(.error) .error,
        body aside.player-promo.transformed:not(.error) .error {
            display: none;
        }

        body div.player-promo.transformed .buttons *,
        body aside.player-promo.transformed .buttons * {
            opacity: 0;
        }

        body div.player-promo.transformed.playing .scrubber,
        body div.player-promo.transformed.playing .pause,
        body div.player-promo.transformed.playing .back,
        body div.player-promo.transformed.playing .forward,
        body div.player-promo.transformed.playing .buttons,
        body div.player-promo.transformed.playing .jw-text-elapsed,
        body div.player-promo.transformed.playing .jw-text-duration,
        body aside.player-promo.transformed.playing .scrubber,
        body aside.player-promo.transformed.playing .pause,
        body aside.player-promo.transformed.playing .back,
        body aside.player-promo.transformed.playing .forward,
        body aside.player-promo.transformed.playing .buttons,
        body aside.player-promo.transformed.playing .jw-text-elapsed,
        body aside.player-promo.transformed.playing .jw-text-duration {
            opacity: 1;
        }

        body div.player-promo.transformed.playing .play,
        body aside.player-promo.transformed.playing .play {
            opacity: 0;
            pointer-events: none;
        }

        body div.player-promo.transformed.paused .play,
        body div.player-promo.transformed.paused .scrubber,
        body div.player-promo.transformed.paused .buttons,
        body aside.player-promo.transformed.paused .play,
        body aside.player-promo.transformed.paused .scrubber,
        body aside.player-promo.transformed.paused .buttons {
            opacity: 1;
        }

        body div.player-promo.transformed.paused .jw-text-elapsed,
        body div.player-promo.transformed.paused .jw-text-duration,
        body div.player-promo.transformed.paused .pause,
        body div.player-promo.transformed.paused .back,
        body div.player-promo.transformed.paused .forward,
        body aside.player-promo.transformed.paused .jw-text-elapsed,
        body aside.player-promo.transformed.paused .jw-text-duration,
        body aside.player-promo.transformed.paused .pause,
        body aside.player-promo.transformed.paused .back,
        body aside.player-promo.transformed.paused .forward {
            opacity: 0;
            pointer-events: none;
        }

        body div.player-promo.transformed.new a.promo-image:before,
        body aside.player-promo.transformed.new a.promo-image:before {
            content: 'NEW';
            background: #000;
            color: #01cfff;
            padding: 6px 5px 3px 8px;
            position: absolute;
            left: 0;
            top: 0;
            font-weight: 700;
            font-size: 15px;
            border: 1px solid #000;
        }

        body div.player-promo.transformed h2,
        body div.player-promo.transformed h3,
        body div.player-promo.transformed a,
        body aside.player-promo.transformed h2,
        body aside.player-promo.transformed h3,
        body aside.player-promo.transformed a {
            color: white;
        }

        body div.player-promo.transformed .scrubber,
        body aside.player-promo.transformed .scrubber {
            margin-bottom: 10px;
        }

        body div.player-promo.transformed .jwplayer,
        body aside.player-promo.transformed .jwplayer {
            overflow: visible;
        }

        body div.player-promo.transformed .jw-controls,
        body aside.player-promo.transformed .jw-controls {
            overflow: visible;
        }

        body div.player-promo.transformed .jw-controls .jw-icon-playback,
        body div.player-promo.transformed .jw-controls .jw-icon-rewind,
        body div.player-promo.transformed .jw-controls .jw-icon-volume,
        body div.player-promo.transformed .jw-controls .jw-slider-volume,
        body aside.player-promo.transformed .jw-controls .jw-icon-playback,
        body aside.player-promo.transformed .jw-controls .jw-icon-rewind,
        body aside.player-promo.transformed .jw-controls .jw-icon-volume,
        body aside.player-promo.transformed .jw-controls .jw-slider-volume {
            display: none !important;
        }

        body div.player-promo.transformed .jw-controls .jwplayer .jw-background-color,
        body aside.player-promo.transformed .jw-controls .jwplayer .jw-background-color {
            background: transparent;
        }

        body div.player-promo.transformed .jw-controls .jw-rail,
        body aside.player-promo.transformed .jw-controls .jw-rail {
            background: rgba(255, 255, 255, 0.2);
        }

        body div.player-promo.transformed .jw-controls .jw-knob,
        body aside.player-promo.transformed .jw-controls .jw-knob {
            background: #00cfff;
            width: 15px;
            height: 15px;
            border-radius: 100%;
        }

        body div.player-promo.transformed .jw-controls .jw-text-elapsed,
        body aside.player-promo.transformed .jw-controls .jw-text-elapsed {
            position: absolute;
            left: 0;
            bottom: -20px;
        }

        body div.player-promo.transformed .jw-controls .jw-text-duration,
        body aside.player-promo.transformed .jw-controls .jw-text-duration {
            position: absolute;
            right: 0;
            bottom: -20px;
        }

        body div.player-promo.transformed .jw-controls .jw-text-countdown,
        body aside.player-promo.transformed .jw-controls .jw-text-countdown {
            display: none !important;
            position: absolute;
            right: 0;
            bottom: -20px;
        }

        body div.player-promo.transformed h1,
        body div.player-promo.transformed h2,
        body div.player-promo.transformed h3,
        body aside.player-promo.transformed h1,
        body aside.player-promo.transformed h2,
        body aside.player-promo.transformed h3 {
            text-align: center;
        }

        body div.player-promo.transformed img,
        body aside.player-promo.transformed img {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }

        body div.player-promo.transformed h1,
        body aside.player-promo.transformed h1 {
            font-size: 14px;
        }

        body div.player-promo.transformed h2,
        body aside.player-promo.transformed h2 {
            font-weight: 600;
            font-size: 18px;
            margin-bottom: 8px;
        }

        body div.player-promo.transformed .entry-content,
        body aside.player-promo.transformed .entry-content {
            margin-bottom: 10px;
        }

        body div.player-promo.transformed .buttons,
        body aside.player-promo.transformed .buttons {
            height: 50px;
            position: relative;
        }

        body div.player-promo.transformed .success button,
        body aside.player-promo.transformed .success button {
            display: block;
            width: 0;
            padding-left: 40px;
            height: 40px;
            border-radius: 100%;
            overflow: hidden;
            position: absolute;
            top: 5px;
            left: 50%;
            cursor: pointer;
            background: #00cfff no-repeat center;
            background-size: 24px;
            transition: all 0.2s;
        }

        body div.player-promo.transformed .success button:hover, body div.player-promo.transformed .success button:focus,
        body aside.player-promo.transformed .success button:hover,
        body aside.player-promo.transformed .success button:focus {
            background-color: rgba(255, 255, 255, 0.8);
            outline: none;
        }

        body div.player-promo.transformed .success button:active,
        body aside.player-promo.transformed .success button:active {
            outline: none;
        }

        body div.player-promo.transformed .success .play,
        body div.player-promo.transformed .success .pause,
        body aside.player-promo.transformed .success .play,
        body aside.player-promo.transformed .success .pause {
            padding-left: 50px;
            height: 50px;
            margin-top: -5px;
            margin-left: -25px;
            background-size: 32px;
        }

        body div.player-promo.transformed .success .play,
        body aside.player-promo.transformed .success .play {
            background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH4gMbBTEjNREOTAAAAIVJREFUWMPtl7ENgDAQA08swDCsxWisxCBUpqIDkaRIrMgnuX/plI8fQgghtHIAq/OAAk5gcx5QwAXszgM+sVOul1gp10dslOsnw5WrIEOVqzDDlKsy3ZWrIV2VqzFVypeZy8J0im0fifWasV7Utl+ddVmwrlu2hdW68lsfTfZnZwghzMANeuGxhAEmN+cAAAAASUVORK5CYII=");
        }

        body div.player-promo.transformed .success .pause,
        body aside.player-promo.transformed .success .pause {
            background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoAQMAAAC2MCouAAAACXBIWXMAAAsTAAALEwEAmpwYAAAABlBMVEVHcEwAAACfKoRRAAAAAXRSTlMAQObYZgAAABNJREFUCNdjYKAE8Dd+oDNJKQAAooAcgeBKnygAAAAASUVORK5CYII=");
        }

        body div.player-promo.transformed .success .back,
        body aside.player-promo.transformed .success .back {
            margin-left: -70px;
            background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB8AAAAhBAMAAADT8G3XAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAGFBMVEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABWNxwqAAAACHRSTlMB/bFz2QtGIjVK43wAAAEASURBVCjPnVG7UsMwEFxbfrRe44RWCgWtzcDQWqSgdTJkaO0AQxvz/wUnyRGvjp3x2bfS3mMN5BDkV4gYXOguYu4v3PKLcHjlT+KDZLMZY54yQMcqZmHaM1MKU79Y1lFUWCkqQce2ynVJQ6sBb45x34ZBYO8kPMuTBU3BS6gR6h4lK8kPe+EnDXKEdcLDE9uZWq2zHp1rnM88FZNOq7TC3LgaMwfsdFapColvk/wlTkiCZOclmSyVaLWSolMdttciQWNaGD97yRX2LY5bwA8mo9fRqd6/Jy7udVI+HKwRPDhftbyG375fiIzcvouFTbTQ/LLd2Sl4/P6vbuxDi//iEwXIHxt3lvQZAAAAAElFTkSuQmCC");
        }

        body div.player-promo.transformed .success .forward,
        body aside.player-promo.transformed .success .forward {
            left: calc(50% + 30px);
            background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB8AAAAhBAMAAADT8G3XAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAGFBMVEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABWNxwqAAAACHRSTlMB/bFz2QtGIjVK43wAAAD6SURBVCjPnVG7boNAEBxzh2kZcnHaQ7KVFtKkhSBRY0vpD1KkxYX/P7ccL7nMFAszaHZ2FyBAXaTGHRYoFvLYC0aUeCfQOGwYziSzceU5J2QLLwPnZeYR2Qyev2+GVpq2W0Am5QVL7IHWC8JjN02WG18S/xaX1WThG5SD+kTCU2hRobcgHfJMtotY+C7qpKuxNN9e0ByPvY3SKMWdj05CgKvVqUpx5YgnQZpqdjgslrCJ84J61RVKE2Ktt8DkhY8Ng6W4FRgaxH5EQZ2tZwij38PBgZ5u/jBtjuN6wlr2R5LPDpmEze9PTfN8dLsKSS283f0nfNRfBf6LP2gwH2v9i/s1AAAAAElFTkSuQmCC");
        }

        body div.player-promo.transformed ul,
        body aside.player-promo.transformed ul {
            text-align: center;
        }

        body div.player-promo.transformed li,
        body aside.player-promo.transformed li {
            list-style: none;
            display: inline-block;
        }

        body div.player-promo.transformed li + li,
        body aside.player-promo.transformed li + li {
            margin-left: 5px;
        }

        body div.player-promo.transformed li + li:before,
        body aside.player-promo.transformed li + li:before {
            content: '•';
            display: inline-block;
            margin-right: 7px;
        }
    </style>
    <style type="text/css">
        .uberlist.simple.pt-1 {
            padding-top: 1em;
        }

        .custom-placeholder .spinner {
            position: absolute;
            left: calc(50% - 20px);
            top: calc(50% - 20px);
        }

        [data-interactive-video-player-root] .meta {
            display: block;
            font-family: ABCSans, Arial, Helvetica, sans-serif;
            font-size: 15.97px;
            font-weight: 600;
            line-height: 19.17px;
            list-style-type: none;
            margin: 5px 0 0;
            overflow-wrap: break-word;
            padding: 0;
            text-align: left;
            text-rendering: optimizelegibility;
        }
    </style>
    <style type="text/css">
        /* Theming */
        .Wd5tgO {
            color: #0653b8;
        }

        ._28ny3R {
            color: #e37100;
        }

        ._3U_Ytn {
            color: #7500a3;
        }

        ._3fBlu9 {
            background-color: #0653b8;
        }

        ._1Ztriv {
            background-color: #e37100;
        }

        .Gc5lwY {
            background-color: #7500a3;
        }

        .cLCq7s,
        .nf_khH,
        ._3R_QoA {
            background-color: #fff;
        }

        .cLCq7s::before,
        .nf_khH::before,
        ._3R_QoA::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.25;
        }

        .cLCq7s::before {
            background-color: #0653b8;
        }

        .nf_khH::before {
            background-color: #e37100;
        }

        ._3R_QoA::before {
            background-color: #7500a3;
        }

        /* Parent */
        ._2T7DM4 {
            box-sizing: border-box;
            border: none !important;
            background-color: #eee;
        }

        .platform-mobile ._2T7DM4 {
            padding: 0.75rem !important;
        }

        .platform-standard ._2T7DM4 {
            border: 0 !important;
            border-radius: 0.5rem;
            padding: 1rem 1.5rem !important;
        }

        ._2T7DM4 .close {
            overflow: hidden;
            border-radius: 50% !important;
        }

        .platform-mobile ._2T7DM4 .close {
            top: 0.5rem !important;
            right: 0.5rem !important;
            padding: 0 0.1875rem !important;
        }

        .platform-standard ._2T7DM4 .close {
            top: -0.5rem !important;
            right: -0.5rem !important;
            padding: 0.0625rem 0.125rem !important;
        }

        ._2T7DM4 .abc-icon {
            width: 0.5rem !important;
            height: 0.5rem !important;
            line-height: 0.5rem !important;
        }

        ._2T7DM4 .abc-icon svg {
            fill: black !important;
        }

        /* Component */
        ._2he7UV {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            font-family: ABCSans, sans-serif;
            text-decoration: none !important;
            white-space: normal !important;
            cursor: default;
        }

        .platform-mobile ._2he7UV {
            margin: 0 auto;
            max-width: 26rem !important;
        }

        ._2he7UV > * {
            margin: 0 !important;
        }

        ._3bfyDT {
            color: #000;
            font-weight: 800;
            letter-spacing: 0.025em;
            line-height: 1.25;
        }

        .platform-mobile ._3bfyDT {
            margin-right: 1.5rem !important;
            margin-bottom: 0.5rem !important;
            font-size: 1rem;
        }

        .platform-standard ._3bfyDT {
            order: 2;
            flex: 0 0 26rem;
            font-size: 1.25rem;
        }

        ._0Oh0r {
            display: inline-block;
            border: 0.125rem solid transparent;
            border-radius: 0.375rem;
            color: #fff !important;
            letter-spacing: 0.025em;
            text-align: center;
            text-transform: uppercase;
            cursor: pointer;
        }

        .platform-mobile ._0Oh0r {
            padding: 0.375rem 0.5rem;
            font-size: 0.75rem;
        }

        .platform-standard ._0Oh0r {
            order: 3;
            margin-left: auto !important;
            padding: 0.5rem 0.75rem;
            font-size: 0.875rem;
        }

        ._0Oh0r:hover,
        ._0Oh0r:focus {
            border-color: rgba(255, 255, 255, 0.5);
        }

        ._1I1c_f {
            transform: translate(0, 0.0625rem);
            flex: 0 1 auto;
            height: auto;
        }

        .platform-mobile ._1I1c_f {
            margin-left: auto !important;
            width: 33%;
        }

        @media (max-width: 20rem) {
            .platform-mobile ._1I1c_f {
                width: 25%;
            }
        }

        .platform-standard ._1I1c_f {
            order: 1;
            margin-right: 2.5rem !important;
            width: 7.5rem;
        }
    </style>
    <script>
        window.dataLayer = window.dataLayer || [];
    </script>
    <script>
        window.dataLayer.push({
            'debug': {
                'schemaVersion': '20180315',
            },

            'document': {
                'language': '',
                'canonicalUrl': 'https://www.abc.net.au/news/politics/',
                'contentType': 'channel',
                'uri': 'coremedia://channel/7849224',
                'contentSource': 'coremedia',
                'id': '7849224',

                'pageTitle': 'Politics',

                'title': {

                    'title': 'Politics',

                },

                'siteRoot': {

                    'segment': 'news',

                    'title': 'ABC News',

                },

            },
        })
    </script>
    <script>
        window.dataLayer.push({
            'application': {
                'generatorName': 'WCMS JSP',
                'generatorVersion': '18.10.8.8.0',

                'environment': 'production',

                'wcmsTheme': 'phase1-news',
            }
        })
    </script>
</head>
<body id="@yield('body-id')" class="@yield('body-class')">
<!--Start ABC Corp Header-->
<nav id="abcHeader" class="global" aria-label="ABC Network Navigation"
     data-resourcebase="https://res.abc.net.au/bundles/2.4.0/"
     data-scriptsbase="https://res.abc.net.au/bundles/2.4.0/scripts/" data-version="2.4.0">
    <a class="home" href="/" data-mobile="/">
        <img src="https://res.abc.net.au/bundles/2.4.0/images/logo-abc@2x.png" width="65" height="16" alt=""/>
        ABC Home
    </a>
    <div class="accounts">
        <span data-src="images/icon-user-grey@1x.png" data-hover="images/icon-user-blue@1x.png"></span>
        <a class="controller"
           href="https://mylogin.abc.net.au/index.html?screen=login&amp;next=https%3A%2F%2Fwww.abc.net.au%2Fnews%2F&amp;cid=SnowplowTimedOutAfter 2000">
            <span class="text">Log In</span>
            <img src="https://res.abc.net.au/bundles/2.5.0/images/icon-user-grey@1x.png" class="icon" alt="">
        </a>
    </div>
    <a class="search" href="https://search.abc.net.au/" data-mobile="https://search.abc.net.au/">
        <span>Search</span>
        <img src="https://res.abc.net.au/bundles/2.4.0/images/icon-search-grey@1x.png"
             data-hover="images/icon-search-blue@1x.png" class="icon" alt=""/>
    </a>
</nav>
<!--End ABC Corp Header-->
@yield('page')
<div id="container_footer">
    <div class="page_margins">
        <div id="footer" class="page section">
            <!-- program footer-->
            <div class="subcolumns">
                <div id="sitemap" class="c75l">
                    <div class="section">
                        <h2>Site Map</h2>
                    </div>
                    <div class="subcolumns">
                        <div class="c16l">
                            <div class="section">
                                <h3>Sections</h3>
                                <ul class="nav" role="navigation">
                                    <li>


                                        <a href="/news/">


                                            <span>ABC News</span>


                                        </a>
                                    </li>
                                    <li>


                                        <a href="/news/justin/">


                                            <span>Just In</span>


                                        </a>
                                    </li>
                                    <li>


                                        <a href="/news/world/">


                                            <span>World</span>


                                        </a>
                                    </li>
                                    <li>


                                        <a href="/news/business/">


                                            <span>Business</span>


                                        </a>
                                    </li>
                                    <li>


                                        <a href="/news/health/">


                                            <span>Health</span>


                                        </a>
                                    </li>
                                    <li>


                                        <a href="/news/entertainment/">


                                            <span>Entertainment</span>


                                        </a>
                                    </li>
                                    <li>


                                        <a href="/news/sport/">


                                            <span>Sport</span>


                                        </a>
                                    </li>
                                    <li>


                                        <a href="/news/analysis-and-opinion/">


                                            <span>Analysis &amp; Opinion</span>


                                        </a>
                                    </li>
                                    <li>


                                        <a href="/news/weather/">


                                            <span>Weather</span>


                                        </a>
                                    </li>
                                    <li>


                                        <a href="/news/topics/">


                                            <span>Topics</span>


                                        </a>
                                    </li>
                                    <li>


                                        <a href="/news/archive/">


                                            <span>Archive</span>


                                        </a>
                                    </li>
                                    <li>


                                        <a href="/news/corrections/">


                                            <span>Corrections &amp; Clarifications</span>


                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="c16l">
                            <div class="section">
                                <h3>Local Weather</h3>
                                <ul class="nav" role="navigation">
                                    <li>


                                        <a href="https://www.abc.net.au/sydney/weather/">


                                            <span>Sydney Weather</span>


                                        </a>
                                    </li>
                                    <li>


                                        <a href="https://www.abc.net.au/melbourne/weather/">


                                            <span>Melbourne Weather</span>


                                        </a>
                                    </li>
                                    <li>


                                        <a href="https://www.abc.net.au/adelaide/weather/">


                                            <span>Adelaide Weather</span>


                                        </a>
                                    </li>
                                    <li>


                                        <a href="https://www.abc.net.au/brisbane/weather/">


                                            <span>Brisbane Weather</span>


                                        </a>
                                    </li>
                                    <li>


                                        <a href="https://www.abc.net.au/perth/weather/">


                                            <span>Perth Weather</span>


                                        </a>
                                    </li>
                                    <li>


                                        <a href="https://www.abc.net.au/hobart/weather/">


                                            <span>Hobart Weather</span>


                                        </a>
                                    </li>
                                    <li>


                                        <a href="https://www.abc.net.au/darwin/weather/">


                                            <span>Darwin Weather</span>


                                        </a>
                                    </li>
                                    <li>


                                        <a href="https://www.abc.net.au/canberra/weather/">


                                            <span>Canberra Weather</span>


                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="c16l">
                            <div class="section">
                                <h3>Local News</h3>
                                <ul class="nav" role="navigation">
                                    <li>


                                        <a href="/news/sydney/">


                                            <span>Sydney News</span>


                                        </a>
                                    </li>
                                    <li>


                                        <a href="/news/melbourne/">


                                            <span>Melbourne News</span>


                                        </a>
                                    </li>
                                    <li>


                                        <a href="/news/adelaide/">


                                            <span>Adelaide News</span>


                                        </a>
                                    </li>
                                    <li>


                                        <a href="/news/brisbane/">


                                            <span>Brisbane News</span>


                                        </a>
                                    </li>
                                    <li>


                                        <a href="/news/perth/">


                                            <span>Perth News</span>


                                        </a>
                                    </li>
                                    <li>


                                        <a href="/news/hobart/">


                                            <span>Hobart News</span>


                                        </a>
                                    </li>
                                    <li>


                                        <a href="/news/darwin/">


                                            <span>Darwin News</span>


                                        </a>
                                    </li>
                                    <li>


                                        <a href="/news/canberra/">


                                            <span>Canberra News</span>


                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="c16l">
                            <div class="section">
                                <h3>Media</h3>
                                <ul class="nav" role="navigation">
                                    <li>


                                        <a href="/news/video/">


                                            <span>Video</span>


                                        </a>
                                    </li>
                                    <li>


                                        <a href="/news/audio/">


                                            <span>Audio</span>


                                        </a>
                                    </li>
                                    <li>


                                        <a href="/news/photos/">


                                            <span>Photos</span>


                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="c16l">
                            <div class="section">
                                <h3>Subscribe</h3>
                                <ul class="nav" role="navigation">
                                    <li>


                                        <a href="/news/feeds/">


                                            <span>Podcasts</span>


                                        </a>
                                    </li>
                                    <li>


                                        <a href="https://www.abc.net.au/news/subscribe">


                                            <span>Newsletters</span>


                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="c16l">
                            <div class="section">
                                <h3>Connect</h3>
                                <ul class="nav" role="navigation">
                                    <li>


                                        <a href="/news/contact/">


                                            <span>Contact Us</span>


                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- right section-->
                <div class="c25r">
                    <div id="fineprint" class="section">
                        <p style="display: block;">
                            <small>Please note that this is a parody of the ABC website for /r/AustraliaSim. This site is not endorsed by the ABC in any way.
                                ALL EVENTS DEPICTED ARE ENTIRELY WORKS OF FICTION. ALL CORRELATION TO REAL WORD EVENTS ARE COINCIDENTAL. THE MAINTAINERS OF THIS SITE TAKE NO RESPONSIBILITY FOR HARM CAUSED BY USE OF THE CONTENT..</small>
                        </p>
                        <p style="display: block;">
                            <small>AEDT = Australian Eastern Daylight Savings Time which is 11 hours ahead of GMT
                                (Greenwich Mean Time)</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav id="abcFooter" class="global" aria-label="ABC Footer Navigation" data-version="2.5.0">
    <ul>
        <li><a href="https://about.abc.net.au/terms-of-use/">Terms of Use</a></li>
        <li><a href="https://about.abc.net.au/abc-privacy-policy/">Privacy Policy</a></li>
        <li><a href="https://about.abc.net.au/accessibility-statement/">Accessibility</a></li>
        <li><a href="https://help.abc.net.au/">ABC Help</a></li>
        <li><a href="https://www.abc.net.au/contact/">Contact the ABC</a></li>
        <li><a href="https://about.abc.net.au/terms-of-use/#UseOfContent">© <time>2019</time> ABC</a></li>
    </ul>
</nav>
</body>
</html>
