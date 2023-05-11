<!DOCTYPE html>
<html>
<head>
    <title>Spin Result</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    <h1>Spin Result</h1>
    <h2><?php echo htmlspecialchars($result); ?></h2>

    <a href="index.php?action=room&name=<?php echo urlencode($_GET['room']); ?>">Back to Room</a>
    <script src="js/main.js"></script>
</body>
</html>

