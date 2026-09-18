<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>...</title>
    <style>
        html, body {
            margin: 0;
            height: 100%;
            background: #000;
            overflow: hidden;
        }
        video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <video id="screan" src="screan.mp4" autoplay playsinline></video>
    <script>
        const v = document.getElementById("scream");
        v.muted = false;
        v.play();
    </script>
</body>
</html>

