<!DOCTYPE html>
<html>
<head>
<!-- 1. skin -->
<link rel="stylesheet" href="../../../public/lib/flowplayer-7.0.4/skin/skin.css">

<!-- 2. jquery library - required for video tag based installs -->
<script src="../../../public/lib/jquery/dist/jquery.min.js"></script>

<!-- 3. flowplayer -->
<script src="../../../public/lib/flowplayer-7.0.4/flowplayer.min.js"></script>

<!-- The hlsjs plugin (light) for playback of HLS without Flash in modern browsers -->
<script src="../../../public/lib/flowplayer-7.0.4/flowplayer.hlsjs.light.min.js"></script>
</head>
<style>
.flowplayer {
  background-color: #00abcd;
}
.flowplayer .fp-color-play {
  fill: #eee;
}

</style>
<body>
<div data-live="true" data-ratio="0.5625" data-share="false" class="flowplayer">
 
   <video data-title="Live stream">
		  <source type="application/x-mpegurl" src="http://streamer1.streamhost.org:1935/salive/GMIFLNL/playlist.m3u8">
   </video>
 
</div>
</body>
</html>