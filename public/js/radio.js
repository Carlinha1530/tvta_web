jQuery(document).ready(function () {
    jwplayer.key="6q54wPD8VOy44ZqcGw1DWe6fBvFnLF0dpQSrwQ==";
    jwplayer("streaming").setup({
        file: 'rtmp://streamer1.streamhost.org/salive/GMI3anjoa',
        height: 30,
        autostart: 'true',
        rtmp: {
            bufferlength: 7
        }
    });
});