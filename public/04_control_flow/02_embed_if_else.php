<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Embed if-else</title>
</head>
<body>
    <?php $is_authenticated = true; ?>
    <?php if ($is_authenticated): ?>
    <a href="#">Logout</a>
    <?php else: ?>
    <a href="#">Login</a>
    <?php endif; ?>
</body>
</html>