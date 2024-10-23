<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Preview</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .print-content {
            border: 1px solid #ccc;
            padding: 20px;
            margin: 20px;
        }
    </style>
</head>
<body>
    <h1>Print Preview</h1>
    <div class="print-content">
        {!! nl2br(e($content)) !!} <!-- Display content in the preview -->
    </div>
    <button onclick="window.print()">Print</button> <!-- Print button -->
</body>
</html>
