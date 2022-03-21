<?php
// define array to use with array_map
$lengths = [10, 20, 30];

// map length to area
$areas = array_map(function ($len) {
    return $len * $len;
}, $lengths);

// display result
echo 'lengths array:' . '<br>';
print_r($lengths);
echo '<br>';
echo 'areas array:' . '<br>';
print_r($areas);
echo '<br>';


// another example of array_mp
class User
{
    public $id;

    public $username;

    public $email;

    public function __construct(int $id, string $username, string $email)
    {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
    }
}

// create some instance from User class
$users = [
    new User(1, 'kaveh', 'kaveh@arca.net'),
    new User(2, 'amin', 'amin@arca.net'),
    new User(3, 'atoosa', 'atoosa2arca.net')
];
// get usernames by array_map
$usernames = array_map(fn ($user) => $user->username, $users);

// display usernames
foreach($usernames as $username) {
    echo $username . '<br>';
}