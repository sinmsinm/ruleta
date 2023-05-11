<!DOCTYPE html>
<html>
<head>
    <title>Roulette Room</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    <h1>Welcome to <?php echo $_GET['name']; ?> room</h1>

    <form action="index.php?action=addElement&room=<?php echo $_GET['name']; ?>" method="post">
        <input type="text" name="element" placeholder="Enter roulette element">
        <input type="submit" value="Add Element">
    </form>

    <a href="index.php?action=spin&room=<?php echo $_GET['name']; ?>">Spin the Roulette</a>
    <script src="js/main.js"></script>
</body>
</html>
