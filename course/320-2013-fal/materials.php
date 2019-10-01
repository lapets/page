<?php /*********************************************************
**
** Lecture and assignment materials.
** 
** materials.php
**   Invokes the material instance for this course.
*/

////////////////////////////////////////////////////////////////
//

//ini_set('display_errors',1); 
//error_reporting(E_ALL);

// Set the configuration parameters for the material invocation.
$material = array(
    'file' => '320.xml',
    'path' => 'material/',
    'message' => '<b>NOTE:</b> This page contains all the examples presented during the lectures, as well as all the homework assignments. <b><a href="index.html">Click here</a></b> to go back to the main page with the course information and schedule.<br/>',
    'toc' => 'true'
  );

// Load rendering hooks.
include("material/material_math.php");
include("material/material_JavaScript.php");
include("material/material_Haskell.php");
include("material/material_SQL.php");
include("material/material_Python.php");

// Render the course materials in the specified XML file.
include("material/material.php");

/*eof*/?>