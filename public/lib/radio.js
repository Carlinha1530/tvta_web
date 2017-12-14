// TESTE 4 MediaElement
// jQuery(document).ready(function () {
// $('video,audio').mediaelementplayer({
// 	audioWidth: 500,
// 	features: ['playpause','current', 'progress', 'volume'],
// 	pluginVars: 'isvideo=true',
// 	flashStreamer: "rtmp://streamer1.streamhost.org/salive/GMI3anjoa",
// 	mode:'shim'
// });
// });


// // TESTE 2 flowplayer OKOK
jQuery(document).ready(function() {
    var api = flowplayer("#player", {
        live: true,
        splash: true,
        clip: {
            sources: [{
                type: "application/x-mpegurl",
                src: "rtmp://streamer1.streamhost.org/salive/GMI3anjoa",
            }],
            title: "Rádio Terceiro Anjo",
            autoplay: true,
        },
    });
});


// TESTE 5 Flowplayer OKOK
// window.onload = function () {
//     $("#fp-audio").flowplayer({
//         autoplay: true,
//         splash: true,
//         flashls: {
//             startfromlevel: 0
//         }
//     });

//     flowplayer($("#fp-audio")).on("ready", function (e, api, media) {
//         $("#audio-title").text(media.title);
//     });
// }


// TESTE 1 JwPlayer OKOK
// jQuery(document).ready(function () {
//     jwplayer.key="6q54wPD8VOy44ZqcGw1DWe6fBvFnLF0dpQSrwQ==";
//     jwplayer("streaming").setup({
//         file: 'rtmp://streamer1.streamhost.org/salive/GMI3anjoa',
//         height: 30,
//         autostart: 'true',
//         rtmp: {
//             bufferlength: 7
//         }
//     });
// });



// TESTE 4 Flowplayer
// window.onload = function () {

//      flowplayer("#mixed", {
//        ratio: 9/16,
//        splash: true,

//        playlist: [{
//          audio: true,
//         //  coverImage: "//releases.flowplayer.org/data/national.jpg",
//         sources: [
//            { type: "application/x-mpegurl", src: "http://streamer1.streamhost.org:1935/salive/GMItvfh/playlist.m3u8" },
//            { type: "audio/mpeg", src: "http://streamer1.streamhost.org:1935/salive/GMItvfh/playlist.m3u8" }
//          ]
//         }, 
//         // {
//         //  sources: [
//         //    { type: "application/x-mpegurl", src: "http://streamer1.streamhost.org:1935/salive/GMItvfh/playlist.m3u8" },
//         //    { type: "video/mp4",             src: "http://streamer1.streamhost.org:1935/salive/GMItvfh/playlist.m3u8" }
//         //  ]
//         // }
//         ]

//      });

//      // http://streamer1.streamhost.org:1935/salive/GMItvfh/playlist.m3u8
//     // rtmp://streamer1.streamhost.org/salive/GMI3anjoa

//      var icecastContainer = document.getElementById("icecast"),
//          icecastSources = [
//             { type: "application/x-mpegurl",
//                 src: "http://streamer1.streamhost.org:1935/salive/GMItvfh/playlist.m3u8" }
//          ];

//      // icecast streams are not delivered with mime-type
//      // remove HTML5 media sources for IE < 12
//      if (flowplayer.support.browser.msie || navigator.userAgent.indexOf("Trident/7") > -1) {
//        icecastSources.splice(0, 2);
//      }

//      flowplayer(icecastContainer, {
//        live: true,
//        splash: true,
//        audioOnly: true,
//        clip: {
//          sources: icecastSources
//        }

//      }).on("ready error", function (e, api, arg) {
//        document.getElementById("icecast-info").innerHTML = arg.src
//            ? ("Now playing: " + arg.src)
//            : arg.message;

//      }).on("progress.android", function (e, api) {
//        // *if* Android plays it, it botches up duration initially, overwrite
//        if (api.video.time < 4) {
//          icecastContainer.querySelector(".fp-duration").innerHTML = "Live";
//        } else {
//          api.off("progress.android");
//        }
//      });

// };


// http://streamer1.streamhost.org:1935/salive/GMItvfh/playlist.m3u8
// rtmp://streamer1.streamhost.org/salive/GMI3anjoa


// TESTE 3 FLOWPLAY - Vídeo
// install player manually after DOM is ready
// $(function() {
//     // install into all elements with class="player"
//     $(".player").flowplayer({
//         // video dimensions: 470px / 250px
//         aspectRatio: "47:25",
//         rtmp: "rtmp://streamer1.streamhost.org/salive/GMI3anjoa"
//     });
// });


/* <script>

    jQuery(document).ready(function() {
        var player = new MediaElementPlayer($('audio'), {

            pluginPath:'/mediaelement3/build/', 
            enablePluginDebug: true,
            alwaysShowControls: true,
        
        });
    });

</script>
<audio  width="640" height="360" controls="controls" preload="none" type="audio/rtmp" poster="http://in07442:8080/mediaelement/media/echo-hereweare.jpg">
        <source src="rtmp://streamer1.streamhost.org/salive/GMI3anjoa"   type="audio/rtmp" />
    
</audio>  */