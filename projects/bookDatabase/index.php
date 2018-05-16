<?php
/*
* This is the first file loaded by the web server.
* It asks the user what book they are looking for
*/

// Requests user's seach request
$looking = isset($_GET['title']) || isset($_GET['author']);

// and then include the rest of html
require 'index.html';