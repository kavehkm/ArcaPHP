<?php
// use of htmlspecialchars to prevent from XXS
$comment = '<script>alert("hello world");</script>';
echo 'comment of escape is: ' . htmlspecialchars($comment) . '<br>';