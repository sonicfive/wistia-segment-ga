window._wq = window._wq || [];

_wq.push({
  id: "_all",

  onReady: function (video) {

    video.bind("play", function () {

      analytics.track(

      {
        // "action": "Play",
        "event": "Play",
        "properties": {
          "category": "Video",
          "label": video.name()
        }
      }

    );

    });


    video.bind("pause", function () {

      analytics.track(

      {
        // "action": "Pause",
        "event": "Pause",
        "properties": {
          "category": "Video",
          "label": video.name()
        }
      }

    );

    });

    video.bind("end", function () {

      analytics.track(

      {
        // "action": "End",
        "event": "End",
        "properties": {
          "category": "Video",
          "label": video.name()
        }
      }

    );

    });

  }

});
