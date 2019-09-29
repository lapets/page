<?php /*********************************************************
**
** Lecture and assignment materials.
** 
** s.php
**   Invokes the sheaf instance for this course.
*/

////////////////////////////////////////////////////////////////
//

//ini_set('display_errors',1); 
//error_reporting(E_ALL);

// Load the library and rendering hooks.
include("sheaf/sheaf.php");
include("sheaf/hooks/math.php");
include("sheaf/hooks/Python.php");

// Build the course material data structure instance by setting
// the configuration parameters for the sheaf invocation.
$s = new Sheaf(
       array(
           'file' => '235.xml',
           'path' => 'sheaf/',
           'message' => '<b>NOTE:</b> This page contains all the examples presented during the lectures, as well as all the homework assignments. <b><a href="index.html">Click here</a></b> to go back to the main page with the course information and schedule.<br/>',
           'toc' => 'true'
         )
      );

// Render the course materials in the specified XML file.
$s->html();

/*eof*/?>