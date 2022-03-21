<?php
// define a function in php
function welcome()
{
    echo 'Welcome' . '<br>';
}


// define function with param
function welcome2($username)
{
    echo 'Welcome ' . $username . '<br>';
}


// call defined functions
welcome();
welcome2('Admin');
welcome('Guest');


// define function with return value
function welcome3($username)
{
    return 'Welcome ' . $username . '<br>';
}

// use function's returned value
$message = welcome3('Admin');
echo $message;


// html in function
function welcome_user($username)
{
?>
    <h2>Welcome <?= $username ?></h2>
<?php
}

welcome_user('kaveh');