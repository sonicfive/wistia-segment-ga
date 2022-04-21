<!DOCTYPE html>
<html>
  <head>
    <title>Segment - Wistia Example </title>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

  </head>
    <script
      src="https://fast.wistia.com/embed/medias/o0zsnqkb1x.jsonp"
      async
    ></script>
    <script
      src="https://fast.wistia.com/assets/external/E-v1.js"
      async
    ></script>


    <script>
      !(function () {
        var analytics = (window.analytics = window.analytics || []);
        if (!analytics.initialize)
          if (analytics.invoked)
            window.console &&
              console.error &&
              console.error("Segment snippet included twice.");
          else {
            analytics.invoked = !0;
            analytics.methods = [
              "trackSubmit",
              "trackClick",
              "trackLink",
              "trackForm",
              "pageview",
              "identify",
              "reset",
              "group",
              "track",
              "ready",
              "alias",
              "debug",
              "page",
              "once",
              "off",
              "on",
              "addSourceMiddleware",
              "addIntegrationMiddleware",
              "setAnonymousId",
              "addDestinationMiddleware",
            ];
            analytics.factory = function (e) {
              return function () {
                var t = Array.prototype.slice.call(arguments);
                t.unshift(e);
                analytics.push(t);
                return analytics;
              };
            };
            for (var e = 0; e < analytics.methods.length; e++) {
              var key = analytics.methods[e];
              analytics[key] = analytics.factory(key);
            }
            analytics.load = function (key, e) {
              var t = document.createElement("script");
              t.type = "text/javascript";
              t.async = !0;
              t.src =
                "https://cdn.segment.com/analytics.js/v1/" +
                key +
                "/analytics.min.js";
              var n = document.getElementsByTagName("script")[0];
              n.parentNode.insertBefore(t, n);
              analytics._loadOptions = e;
            };
            analytics._writeKey = "CI7brDC3DYDGStKS6WHZ0DeUv2Buq0Ve";
            analytics.SNIPPET_VERSION = "4.15.3";
            analytics.load("CI7brDC3DYDGStKS6WHZ0DeUv2Buq0Ve");
            analytics.page();
          }
      })();


    </script>
      </body>
      <div
        class="wistia_embed wistia_async_o0zsnqkb1x seo=false"
        style="height: 360px; width: 640px"
      >
        &nbsp;
      </div>
      <script src="main.js"></script>
  </body>
</html>
