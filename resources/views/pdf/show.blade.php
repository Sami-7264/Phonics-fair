<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple PDF Viewer</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.943/pdf.min.js"></script>
    <style>
        html {
            font-size: 14px;
            margin: 0;
            padding: 0;
        }
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0; /* Changed background to a lighter gray */
        }
        .pdf-container {
            width: 100%;
            height: calc(100% - 50px); /* Subtract toolbar height */
            overflow: auto;
            padding-top: 50px; /* Add padding equal to toolbar height */
            position: relative;
        }
        .pdf-canvas {
            width: 100%;
            height: 100%;
        }
        .pdf-toolbar {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 50px;
            background-color: #333; /* Changed to a darker gray */
            color: #fff;
            border-bottom: 1px solid #ddd;
            z-index: 1;
            display: flex;
            justify-content: space-between; /* Adjusted toolbar buttons alignment */
            align-items: center; /* Adjusted toolbar buttons alignment */
            padding: 0 20px; /* Increased padding for better spacing */
        }

        .pdf-toolbar-button {
            padding: 10px 15px; /* Increased button padding */
            margin: 0;
            color: #fff;
            background-color: #007bff; /* Changed to a subdued blue */
            border-color: #007bff; /* Changed to match button background */
            font-size: 14px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s, border-color 0.3s, color 0.3s; /* Added smooth transition */
        }

        .pdf-toolbar-button:hover {
            background-color: #0056b3; /* Darker shade on hover */
            border-color: #0056b3; /* Darker shade on hover */
        }

        .pdf-input {
            width: 20%;
            height: 40px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            padding: 0 10px;
            font-size: 14px;
            color: #212529;
            outline: none;
            background-color: #fff;
            box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
            margin-right: 10px;
        }

        #zoom_controls {
            display: flex; /* Ensured zoom controls are aligned horizontally */
            align-items: center; /* Centered vertically */
        }

        #navigation_controls {
            display: flex; /* Ensured navigation controls are aligned horizontally */
            align-items: center; /* Centered vertically */
        }

        #navigation_controls button {
            margin-right: 10px; /* Added margin between navigation buttons */
        }

        #zoom_controls button {
            margin-right: 10px; /* Added margin between zoom buttons */
        }
    </style>
</head>
<body>
<div class="pdf-toolbar">
    <div id="navigation_controls">
        <button class="pdf-toolbar-button" id="previous">Previous</button>
        <input class="pdf-input" id="current_page" value="1" type="number"/>
        <button class="pdf-toolbar-button" id="next">Next</button>
    </div>

    <div id="zoom_controls">
        <button class="pdf-toolbar-button" id="zoom_in">+</button>
        <button class="pdf-toolbar-button" id="zoom_out">-</button>
    </div>
</div>
<div class="pdf-container">
    <div class="pdf-canvas">
        <div id="canvas_container" style="text-align-last: center;">
            <canvas id="pdf_renderer"></canvas>
        </div>

    </div>

</div>

<script>
    var defaultState = {
        pdf: null,
        currentPage: 1,
        zoom: 1
    }

    pdfjsLib.getDocument('{{$pdfPath}}').then((pdf) => {

        defaultState.pdf = pdf;
        render();

    });

    function render() {
        defaultState.pdf.getPage(defaultState.currentPage).then((page) => {

            var canvas = document.getElementById("pdf_renderer");
            var ctx = canvas.getContext('2d');

            var viewport = page.getViewport(defaultState.zoom);

            canvas.width = viewport.width;
            canvas.height = viewport.height;

            page.render({
                canvasContext: ctx,
                viewport: viewport
            });
        });
    }

    document.getElementById('previous').addEventListener('click', (e) => {
        if(defaultState.pdf == null || defaultState.currentPage == 1)
            return;
        defaultState.currentPage -= 1;
        document.getElementById("current_page").value = defaultState.currentPage;
        render();
    });

    document.getElementById('next').addEventListener('click', (e) => {
        if(defaultState.pdf == null || defaultState.currentPage > defaultState.pdf._pdfInfo.numPages)
            return;
        defaultState.currentPage += 1;
        document.getElementById("current_page").value = defaultState.currentPage;
        render();
    });


    document.getElementById('current_page').addEventListener('keypress', (e) => {
        if(defaultState.pdf == null) return;


        var code = (e.keyCode ? e.keyCode : e.which);

        if(code == 13) {
            var desiredPage =
                document.getElementById('current_page').valueAsNumber;

            if(desiredPage >= 1 && desiredPage <= defaultState.pdf._pdfInfo.numPages) {
                defaultState.currentPage = desiredPage;
                document.getElementById("current_page").value = desiredPage;
                render();
            }
        }
    });

    document.getElementById('zoom_in').addEventListener('click', (e) => {
        if(defaultState.pdf == null) return;
        defaultState.zoom += 0.125;
        render();
    });

    document.getElementById('zoom_out').addEventListener('click', (e) => {
        if(defaultState.pdf == null) return;
        defaultState.zoom -= 0.125;
        render();
    });
</script>
</body>
</html>
