<?php
// Switch the working directory to 'src' so internal includes (like whitelist.php) work
chdir(__DIR__ . '/../src');

// Load the actual application code
require 'index.php';
