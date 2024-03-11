<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show PDF</title>
    <style>
        body {
            margin: 0;
            overflow: hidden;
        }
    </style>
</head>
<body>
<embed id="pdfViewer" src="{{ asset($pdfPath) }}" type="application/pdf" width="100%" height="750px" />

<script>
    // Wait for the PDF viewer to load
    document.getElementById('pdfViewer').addEventListener('load', function() {
        // Access the PDF.js viewer object
        var pdfViewer = this.contentDocument.getElementById('viewer');

        // Customize viewer options
        pdfViewer.style.backgroundColor = 'white';

        // Find and hide the download button
        var downloadButton = pdfViewer.querySelector('.download');
        if (downloadButton) {
            downloadButton.style.display = 'none';
        }
    });
</script>
</body>
</html>
