<?php

/**
 * Now, all the code in this files is allowed here
 * however, we should be cautious about this.
 * if this files are a function or something in execution
 * it will also execute in this file
 */

// include 'aritmethic.php';
// include 'arrays.php';
// include 'constants.php';
// include 'control_structure.php';
// include 'functions.php';
// include 'hello.php';
// include 'logic.php';
// include 'output.php';
// include 'strings.php';
// include 'variables.php';
// include 'aoskdoaskda'; //Failed opening 'aoskdoaskda' for inclusion

// parameters('Hello', 'World', 'PHP');

// it is prevent to call multiples func or classes declarations here.
include_once 'functions.php';

// the same as include or include_once
require 'arrays.php';
require_once 'arrays.php';

/** the difference between include, include_once and require, require_once
 * this methods has the same behavior to get classes, func and variables from other files.
 * but require when a file cannot be included here then throws a fatal error and drop the application.
 */
