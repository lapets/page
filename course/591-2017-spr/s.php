<?php /*********************************************************
**
** Script to render notes as HTML using Sheaf.
**
** s.php
**
*/

////////////////////////////////////////////////////////////////
//

// Load the library and rendering hooks.
include("sheaf/sheaf.php");
include("sheaf/hooks/math.php");

$s = new Sheaf(
       array(
           'file' => 'notes.xml',
           'path' => 'sheaf/',
           'note' => '<b>NOTE:</b> This page contains all the examples presented during the lectures, as well as all the assigned projects. <b><a href="index.html">Click here</a></b> to go back to the main page with the course information and schedule.',
           'toc' => 'true'
         )
      );

// Render the notes as HTML.
$s->html();

/*eof*/?>