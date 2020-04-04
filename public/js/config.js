// This must mirror the context on the root channel.
if (!window.ABC) window.ABC = {};
if (!ABC.News) ABC.News = {};
if (!ABC.News.config) ABC.News.config = {};
ABC.News.config.values = {
    // base url for the ABC login API & website
    livefyre: {
        // Livefyre front-end code version
        version: '2.0.6',
        // Gigya API key for getting user's logged in details
        gigyaAPIKey: "3_fA1lYde7bHFw4kAQ_VLT37l-OacxV6xOkYAn0KOPFjrXyrlrovPpV1toELQLABDp",
        // login page & API endpoints
        api: "https://mylogin-api.abc.net.au",
        redirect: "https://mylogin.abc.net.au/index.html",
        // Livefyre environment details
        siteId: 385174,
        network: 'australianbroadcasting.fyre.co',
    },
    clickTrack: [
        { target: '.platform-standard #header .weather-widget', 'name': 'Desktop header weather widget' },
        { target: '.platform-standard #newshome .section.simple a', 'name': 'Desktop home more ABC News video' },
        { target: '.platform-standard #localAndStatePanel .c50l', 'name': 'Desktop home state & territory news' },
        { target: '.platform-standard #most-popular.page.section', 'name': 'Desktop most popular footer' },
        { target: '.platform-standard #my-topics.page.section', 'name': 'Desktop my topics' },
        { target: '.platform-standard #my-topics.page.section .button.right', 'name': 'Desktop my topics add' },
        { target: '.platform-standard img[src*="4745996"]', 'name': 'Desktop article sidebar podcasts' },
        { target: '.platform-mobile #footer-top-stories', 'name': 'Mobile article footer recirculation' },
        { target: '.platform-mobile article aside.related', 'name': 'Mobile article related' },
        { target: '.platform-mobile footer nav.section', 'name': 'Mobile footer section nav' },
        { target: '.platform-mobile footer nav.site', 'name': 'Mobile footer site nav' },
        { target: '.platform-mobile footer nav.global', 'name': 'Mobile footer global nav' },
        { target: '.platform-mobile a:contains("Listen: NEWS on Radio")', 'name': 'mobile radio live' },
        { target: '.platform-mobile a:contains("Watch: ABC NEWS Live TV Stream")', 'name': 'mobile news channel' },
        { target: '.platform-mobile a:contains("Watch: News in 90 Seconds")', 'name': 'mobile news in 90 seconds' },
        { target: '.platform-mobile a:contains("More radio streams")', 'name': 'mobile more radio streams' },
        { target: '.platform-mobile #mostPopular_articles a', 'name': 'mobile home most popular' },
        { target: '.platform-mobile .mobile-home-business-news', 'name': 'mobile home business' },
        { target: '.platform-mobile .mobile-home-features a.split', 'name': 'mobile home features split' },
        { target: '.platform-mobile .mobile-home-photos', 'name': 'mobile home photos' },
        { target: '.platform-mobile .mobile-home-goodnews', 'name': 'mobile home good news' },
        { target: '.platform-mobile a[href*="abc-editorial-standards"]', 'name': 'mobile editorial standards' },
        { target: '.jw-recirculation .more a', 'name': 'Phase 1 video recirculation more videos' },
        { target: '.inf-carousel a', 'name': 'inf carousel radio player' },
        { target: 'a.platform-standard.switch', name: 'Mobile change to standard' },
        { target: 'a.top.skip-link', name: 'Mobile top of page' },
        { target: '.platform-standard a[href="\/news\/feeds\/"]', 'name': 'Podcasts' },
        { target: 'a.platform-mobile.switch', name: 'Desktop change to mobile' },
        { target: '.accounts .controller', name: 'Login button' }
    ],
    learnings: []
};
// Visual Website Optimizer
if(ABC.News.Mobile && navigator.doNotTrack !== '1'){
var _vwo_code=function(){var e=!1,t=document;return{use_existing_jquery:function(){return!1},library_tolerance:function(){return 2500},finish:function(){if(!e){e=!0;var n=t.getElementById("_vis_opt_path_hides");n&&n.parentNode.removeChild(n)}},finished:function(){return e},load:function(e){var n=t.createElement("script");n.src=e,n.type="text/javascript",n.innerText,n.onerror=function(){_vwo_code.finish()},t.getElementsByTagName("head")[0].appendChild(n)},init:function(){return settings_timer=setTimeout("_vwo_code.finish()",2e3),this.load("//dev.visualwebsiteoptimizer.com/j.php?a=315126&u="+encodeURIComponent(t.URL)+"&r="+Math.random()),settings_timer}}}();_vwo_settings_timer=_vwo_code.init();
}
