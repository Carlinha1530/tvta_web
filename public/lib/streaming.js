jQuery(document).ready(function () {

    jwplayer.key = "6q54wPD8VOy44ZqcGw1DWe6fBvFnLF0dpQSrwQ==";

    var qual = {
        md: {
            f: 'rtmp://streamer1.streamhost.org:1935/salive/GMI3anjom',
            sources: [
                {file: "http://streamer1.streamhost.org:1935/salive/GMI3anjom/playlist.m3u8"},
                {file: "rtmp://streamer1.streamhost.org:1935/salive/GMI3anjom"},
                {file: "rtsp://streamer1.streamhost.org:1935/salive/GMI3anjom"}
            ],
            w: 640,
            h: 360
        },
        lg: {
            f: 'rtmp://streamer1.streamhost.org:1935/salive/GMI3anjoh',
            sources: [
                {file: "http://streamer1.streamhost.org:1935/salive/GMItvfh/playlist.m3u8"},
                {file: "rtmp://streamer1.streamhost.org:1935/salive/GMI3anjoh"},
                {file: "rtsp://streamer1.streamhost.org:1935/salive/GMI3anjoh"}
            ],
            w: 718,
            h: 404
        }
    };

    jwplayer("streaming").setup({
        file: qual.lg.f,
        image: "/img/Streaming-Background.png",
        primary: "html5",
        width: qual.lg.w,
        height: qual.lg.h,
        autostart: true,
        rtmp: {
            bufferlength: 10
        }
    });

    $('#video-control input').on('change', function (e) {
        e.preventDefault;
        var obj = $(this).data('qual');
        jwplayer("streaming").resize(qual[obj].w, qual[obj].h).load([{file: qual[obj].f}]);
        $('#video-control a').removeClass('disabled');
        $(this).addClass('disabled');
    });

});