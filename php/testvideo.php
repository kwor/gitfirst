<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>capture screen</title>
</head>
<body>
<video id="video" controls="controls">
<source src="http://whois8.cn/files/1502381710889video_061.mov">
</video>
<div id="output"></div>
<script type="text/javascript">
(function(){
var video, output;
var scale = 0.8;
var initialize = function() {
output = document.getElementById("output");
video = document.getElementById("video");
video.addEventListener('loadeddata',captureImage);
};
 
var captureImage = function() {
            var canvas = document.createElement("canvas");
            canvas.width = video.videoWidth * scale;
            canvas.height = video.videoHeight * scale;
            canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
 
            var img = document.createElement("img");
            img.src = canvas.toDataURL("image/png");
            output.appendChild(img);
};
 
initialize();
})();
</script>
</body>
</html>