<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Status</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/favicon2.png" type="image/x-icon">
</head>
<body>
<header>
    <h1>System Status</h1>
    <a href="index.html">Back to Home</a>
</header>
    <p><?php echo "System running: " . (new DateTime())->format('d/m/Y H:i:s'); ?></p>
    <p><?php echo "Operating System: " . PHP_OS; ?></p>
    <p><?php echo "PHP Version: " . phpversion(); ?></p>
    <p><?php echo "Server Software: " . $_SERVER['SERVER_SOFTWARE']; ?></p>
    <p><?php echo "Server Name: " . $_SERVER['SERVER_NAME']; ?></p>
    <p><?php echo "Server Port: " . $_SERVER['SERVER_PORT']; ?></p>
    <p><?php echo "Current Script: " . $_SERVER['SCRIPT_NAME']; ?></p>
    <p><?php echo "Client IP Address: " . $_SERVER['REMOTE_ADDR']; ?></p>
    <p><?php echo "Client User Agent: " . $_SERVER['HTTP_USER_AGENT']; ?></p>
    <p><?php echo "Request Method: " . $_SERVER['REQUEST_METHOD']; ?></p>
    <p><?php echo "Request Time: " . date('d/m/Y H:i:s', $_SERVER['REQUEST_TIME']); ?></p>
    <p><?php echo "Request Protocol: " . $_SERVER['SERVER_PROTOCOL']; ?></p>
    <br>
    <button  onclick="location.reload();">Refresh</button>

</body>
</html>