<?php
class View {
    public function render($data) {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>User Information</title>
            <link rel="stylesheet" href="https://unpkg.com/98.css" />
            <style>
                body {
                    margin: 20px;
                }
                .window {
                    width: 300px;
                    margin: auto;
                }
                .window-body {
                    padding: 10px;
                }
                .field-row {
                    margin-bottom: 10px;
                }
            </style>
            <script>
                function showAlert() {
                    alert("Hello, " + document.getElementById('name').innerText + "!");
                }
            </script>
        </head>
        <body>
            <div class="window">
                <div class="title-bar">
                    <div class="title-bar-text">User Information</div>
                    <div class="title-bar-controls">
                        <button aria-label="Close"></button>
                    </div>
                </div>
                <div class="window-body">
                    <div class="field-row">
                        <label>Name:</label>
                        <span id="name" class="status-bar-field"><?php echo htmlspecialchars($data['name']); ?></span>
                    </div>
                    <div class="field-row">
                        <label>Email:</label>
                        <span id="email" class="status-bar-field"><?php echo htmlspecialchars($data['email']); ?></span>
                    </div>
                    <button class="button" onclick="showAlert()">Show Alert</button>
                </div>
            </div>
        </body>
        </html>
        <?php
    }
}
?>
