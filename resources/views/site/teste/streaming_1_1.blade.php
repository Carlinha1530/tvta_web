<center>
   <video src="http://streamer1.streamhost.org:1935/salive/GMIFLNL/playlist.m3u8" width="531" height="300" autoplay="true" id="tvplayer1">
     <source type="application/x-mpegURL" src="http://streamer1.streamhost.org:1935/salive/GMIFLNL/playlist.m3u8" />
   </video>
</center>

<p style="text-align: center;"><em>If the stream is not playing, please make sure that you have the latest Adobe Flash Player installed for your browser. To install it for free, please go to: <a href="https://get.adobe.com/flashplayer/" target="_blank">https://get.adobe.com/flashplayer/</a></em></p>

 <head>
    <script src="http://www.globalfamilynetwork.net/site/build/jquery.js"></script>
    <script src="http://www.globalfamilynetwork.net/site/build/mediaelement-and-player.min.js" ></script>
    <link rel="stylesheet" href="http://www.globalfamilynetwork.net/site/build/mediaelementplayer.min.css" />
    <script>
      $(document).ready(function(){
        $('audio,video').mediaelementplayer({
        enableAutosize: true, 
        alwaysShowControls: false,
        startVolume: 1.0,
        features: ['playpause','current','progress','volume','fullscreen']
        });
      });
    </script>
 </head>