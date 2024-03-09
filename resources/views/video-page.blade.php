<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Video Page</title>
    <!-- Add your custom styles here -->
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /*#video-container {*/
        /*    max-width: 800px;*/
        /*    margin: auto;*/
        /*    padding: 20px;*/
        /*    background-color: #fff;*/
        /*    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);*/
        /*    margin-top: 50px;*/
        /*}*/

        video {
            width: 100%;
            height: auto;
        }
        .header {
            width: 990px;
            margin: 0 auto;
            background: url(../images/header21.jpg) no-repeat 0 0;
            height: 96px;
            margin-top: 0px;
            position: relative;
            z-index: 5;
        }
        .clearfix {
            clear: both;
        }
        .wrapper {
            width: 960px;
            margin: 0 auto;
            background-color: #F7F8FD;
            position: relative;
            z-index: 10;
        }
    </style>
</head>
<body>
<header>
    <div class="header clearfix" style="margin-top:0" >

    </div>
</header>
<div class="wrapper" style="">
    <div id="video-container">
        <video controls>
            <!-- Embed the video URL dynamically -->
            <source src="{{ $videoUrl }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>


</body>
</html>
