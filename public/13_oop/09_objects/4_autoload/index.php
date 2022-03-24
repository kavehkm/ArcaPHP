<?php
// require loader
require_once 'functions.php';

// load Contact
load_model('Contact');

// test Contact
$contact = new Contact('mehrbaniankaveh@gmail.com');

echo $contact->getEmail() . '<br>';