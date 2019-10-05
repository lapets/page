<?php

$schedule = array(
  array(
    'date' => '2016-01-19',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => '',
    'details' => array(
        '<b><a href="s.html#1">lecture notes</a></b>',
        'introduction, background, and goals',
        'organization and workflow',
        'potential data sets and problems'
      )
  )
  ,
  array(
    'date' => '2016-01-21',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'data and<br/>transformations',
    'details' => array(
        '<b><a href="s.html#2">lecture notes</a></b>',
        array('formal definitions of data' => array(
          "relational model",
          "MapReduce paradigm",
          'other algebraic considerations'
        )),
        'data provenance'
      )
  )
  ,
  array(
    'date' => '2016-01-26',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'data and<br/>transformations',
    'details' => array(
        'data transformations',
        'fine-grained data provenance',
        'data flows in the relational model',
        '<i>k</i>-means relational data flow'
      )
  )
  ,
  array(
    'date' => '2016-01-27',
    'type' => 'assignment',
    'cls' => 'assignmentdate',
    'topics' => '',
    'details' => array(
        '<b><a href="s.html#project0">project #0</a> due</b>'
        //'<b>assignment #1 due</b>'
	  )
  )
  ,
  array(
    'date' => '2016-01-28',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'data and<br/>transformations',
    'details' => array(
        array('algorithms in the relational model' => array(
          "Floyd-Warshall shortest paths",
          "shortest routes",
          "<i>k</i>-means clustering"
        ))
      )
  )
  ,
  array(
    'date' => '2016-02-02',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'data and<br/>transformations',
    'details' => array(
        array('algorithms using the MapReduce paradigm' => array(
          'using MapReduce in MongoDB',
          "<i>k</i>-means clustering",
          'comparing data sets'
        ))
      )
  )
  ,
  array(
    'date' => '2016-02-04',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'models &amp;<br/>algorithms',
    'details' => array(
        'Cartesian products using MapReduce',
        array('spatial algorithms &amp; data structures' => array(
          'minimum/maximum spanning tree',
          "shortest/widest paths",
          'quadtrees'
        ))
      )
  )
  ,
  array(
    'date' => '2016-02-09',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'models &amp;<br/>algorithms',
    'details' => array(
        'relational queries in MongoDB',
        'repository/platform architecture',
        array('systems and models' => array(
          'representations for modeling',
          'models used in algorithms'
        ))
      )
  )
  , 
  array(
    'date' => '2016-02-11',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'models &amp;<br/>algorithms',
    'details' => array(
        'more on provenance',
        'PROV standard'
      )
  )
  ,
  array(
  'date' => '2016-02-16',
  'dateHTML' => '<span style="text-decoration:underline;">2016-02-16</span><br/><span style="font-size:10px;">Monday sched.<br/></span>',
  'type' => '',
  'cls' => 'nolecture',
  'topics' => '',
  'details' => array()
  )
  ,
  array(
    'date' => '2016-02-18',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'models &amp;<br/>algorithms',
    'details' => array(
        'JSON schemas',
        'more on systems and models',
        array('tools for finding models' => array(
          'matrix equations',
          'SMT solvers',
          'linear programming'
        ))
      )
  )
  ,
  array(
    'date' => '2016-02-23',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'optimization',
    'details' => array(
        'optimization &amp; decomposition'
      )
  )
  ,
  array(
    'date' => '2016-02-25',
	'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'optimization',
    'details' => array(
        'review of calculus',
        'basic gradient descent'
      )
  )
  ,
  array(
    'date' => '2016-03-01',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'optimization',
    'details' => array(
        '<b><a href="s.html#project1">project #1</a> due</b>'
      )
  )
  ,
  array(
  'date' => '2016-03-03',
  'type' => 'lecture',
  'cls' => 'lecture',
  'topics' => 'optimization',
  'details' => array()
  )
  ,
  array(
    'date' => '2016-03-08',
	'dateHTML' => '<span style="text-decoration:underline;">2016-03-08</span>',
	'type' => 'recess',
	'cls' => 'nolecture',
	'topics' => '',
	'details' => array()
  )
  ,
  array(
    'date' => '2016-03-10',
	'dateHTML' => '<span style="text-decoration:underline;">2016-03-10</span>',
	'type' => 'recess',
	'cls' => 'nolecture',
	'topics' => '',
	'details' => array()
  )
  ,
  array(
    'date' => '2016-03-15',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => '',
    'details' => array(
        'review for midterm'
      )
  )
  ,
  array(
    'date' => '2016-03-17',
    'dateHTML' => '<span style="text-decoration:underline;">2016-03-17</span><br/><span style="font-size:10px;">Tuesday<br/>2:05-3:05 PM</span>',
	'type' => 'midterm<br/>exam',
    'cls' => 'midterm',
    'topics' => '',
    'details' => array(),
  )
  ,
  array(
    'date' => '2016-03-22',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'statistics',
    'details' => array(
        'review of midterm solutions',
        '<b><a href="s.html#4">lecture notes</a></b>',
        'Cauchy-Schwarz inequality',
        'means &amp; standard deviations',
        'covariance &amp; correlation'
      )
  )
  ,
  array(
    'date' => '2016-03-24',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'statistics',
    'details' => array(
        '<b><a href="s.html#4.2">lecture notes</a></b>',
        'more on covariance &amp; correlation',
        'distributions',
        '<i>p</i>-values &amp; significance'
      )
  )
  ,
  array(
    'date' => '2016-03-29',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'statistics',
    'details' => array(
        '<b><a href="s.html#4.4">lecture notes</a></b>',
        'proportions',
        'probability sampling',
        'reservoir sampling'
      )
  )
  ,
  array(
    'date' => '2016-03-31',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'visualization',
    'details' => array(
        'SVG and D3.js',
        'networks and graphs with D3'
      )
  )
  ,
  array(
    'date' => '2016-04-05',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'visualization',
    'details' => array(
        'plots &amp; charts with D3'
      )
  )
  ,
  array(
    'date' => '2016-04-07',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'visualization',
    'details' => array(
        'web-based map APIs',
        'visualization design topics',
        'visual perception'
      )
  )
  ,
  array(
    'date' => '2016-04-12',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'other topics',
    'details' => array(
        'more on GeoJSON and mapping',
        'comments on ZIP archives',
        'crowdsourcing',
        'incentive compatibility'
      )
  )
  ,
  array(
  	'date' => '2016-04-13',
  	'type' => 'assignment',
  	'cls' => 'assignmentdate',
  	'topics' => '',
  	'details' => array(
        '<b><a href="s.html#project2">project #2</a> due</b>'
      )
  )
  ,
  array(
    'date' => '2016-04-14',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'other topics',
    'details' => array(
        'web services &amp; web applications',
        'REST architectures',
        'implementing a web service'
      )
  )
  ,
  array(
    'date' => '2016-04-19',
	'type' => 'lecture',
	'cls' => 'lecture',
	'topics' => 'other topics',
	'details' => array(
        'review for midterm'  
      )
  )
  ,
  array(
    'date' => '2016-04-21',
    'dateHTML' => '<span style="text-decoration:underline;">2016-04-21</span><br/><span style="font-size:10px;">Thursday<br/>2:05-3:05 PM</span>',
	'type' => 'midterm<br/>exam',
    'cls' => 'midterm',
    'topics' => '',
    'details' => array(),
  )
  ,
  array(
    'date' => '2016-04-26',
    'dateHTML' => '<span style="text-decoration:underline;">2016-04-26</span><br/><span style="font-size:10px;">Tuesday<br/>2:00-5:00 PM</span>',
	'type' => 'poster<br/>session',
    'cls' => 'session',
    'topics' => '',
    'details' => array(),
  )
  ,
  array(
    'date' => '2016-04-28',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => '',
    'details' => array()
  )
);

?>

<html>
 <head>
 <title>BU CAS CS 591 L1 Spring 2016</title>
 <style>
  body { font-family: Verdana,Arial,Sans-serif; font-size:12px; }
  a { text-decoration:none; color:#AC701E; }
  a:hover { text-decoration:underline; color:firebrick; }
  #container { margin: 8px; }
  #info { margin: 8px; float:left; display:inline-block; }
  #info .lbl { font-weight:bold; color:#555555; }
  #info .sect { color:#888888; }
  #schedule {
    /* max-width:400px; */
    float:left; display:inline-block;
    margin-top:20px; margin-left:10px; margin-bottom:15px; 
    border-collapse:collapse; 
    font-family: Verdana,Arial,Sans-serif; font-size:12px;
    }
  #schedule td { border: 1px solid #CCCCCC; padding:6px; }
  #schedule .lecture { }
  #schedule .nolecture { color:#AAAAAA; font-style:italic; }
  #schedule .assignmentdate { }
  #schedule .quiz { color:firebrick; font-weight:bold; }
  #schedule .midterm { color:firebrick; font-weight:bold; }
  #schedule .final { color:firebrick; font-weight:bold; }
  #schedule .exam { color:firebrick; font-weight:bold; }
  #schedule .session { color:firebrick; font-weight:bold; }
  #schedule .review { font-weight:bold; }
  #schedule .upcoming { background-color:#F9EFE1; }
  #schedule .lecture_label { color:#AAAAAA; font-weight:normal; font-style:normal; }
  #schedule .assignment_label { color:#AAAAAA; font-weight:normal; font-style:normal; }
  ul { padding-top:0px; padding-bottom:0px; padding-left:0px; padding-right:25px; margin:0px;  }
  li { 
    list_style_type:none; list-style-image:url('../bullet.gif'); padding:0px;
    min-width:200px; position:relative; left:15px; text-align:left; line-height:140%;
    }
  #info_items li { margin-bottom:4px; }
  #info_items li ul { margin-top:4px; }
  #info_items li ul li { margin-bottom:4px; }
 </style>
 </head>
 <body>
 <div id="container">

  <div id="info">
   <br/><b>BU CAS Computer Science 591 L1</b>
   <br/><b>Data Mechanics</b>
   <br/>
   <br/>
   <br/>
   <ul class="info_items">
    <li><span class="sect">lectures:</span>
     <br/>&nbsp;&nbsp; Tue. & Thu., 2 - 3:30 PM in <a href="http://www.bu.edu/classrooms/classroom/mcs-b33/">MCS B33</a>
     <br/>&nbsp;&nbsp; <span class="lbl">lecturer:</span> <a href="http://cs-people.bu.edu/lapets">Andrei Lapets</a>  (<a href="mailto:lapets@bu.edu">lapets@bu.edu</a>, MCS 176)
     <br/>&nbsp;&nbsp; <span style="font-size:12px;"><span class="lbl">OH:</span> Tue. 4 - 6 PM; Thu. 11 AM - 12 PM (<a href="http://www.bu.edu/cs/resources/laboratories/undergraduate-lab/">CS lab</a>)</span>
     <br/>
     <br/>
    </li>
    <li><span class="sect">questions and discussion:</span>
     <br/>&nbsp;&nbsp; <a href="mailto:cascs591l1-l@bu.edu">cascs591l1-l@bu.edu</a> (course mailing list)
     <br/>&nbsp;&nbsp; <a href="https://piazza.com/bu/spring2016/cs591l1">Q&amp;A page</a> on Piazza
    </li>
   </ul>
   <br/>
   <ul class="info_items">
    <li><span class="sect">project submission policies:</span>
     <br/>&nbsp;&nbsp; <span class="lbl">submission:</span> by 11:59 PM on due date (via <a href="s.html#A.1">GitHub</a>)
     <br/>&nbsp;&nbsp; <span class="lbl">collaboration:</span> list all collaborators outside of group
     <br/>&nbsp;&nbsp; <span class="lbl">late policy</span>: -15 points per day, 3 days maximum
    </li>
   </ul>
   <br/>
   <ul class="info_items">
    <li><span class="sect">course grade:</span>
     <br/>&nbsp;&nbsp; 30% <i>exams</i> + 70% <i>projects</i>
    </li>
   </ul>
   <br/>
   <ul class="info_items">
    <li><span class="sect">course materials:</span>
     <!--<br/>&nbsp;&nbsp; to be posted-->
     <br/>&nbsp;&nbsp; <a href="s.html">lecture notes</a> <!--(w/ projects &amp; organization notes)-->
     <br/>&nbsp;&nbsp; <b><a href="s.html?#project0">project #0</a></b>
     <br/>&nbsp;&nbsp; <b><a href="s.html?#project1">project #1</a></b>
     <br/>&nbsp;&nbsp; <b><a href="s.html?#project2">project #2</a></b>
    </li>
   </ul>
   <br/>
   <ul class="info_items">
    <li><span class="sect">software used in the course:</span>
     <br/>&nbsp;&nbsp; <a href="https://www.python.org/downloads/">Python 3.3</a>+
     <br/>&nbsp;&nbsp; <a href="https://www.mongodb.org/">MongoDB</a>
    </li>
   </ul>
   <br/>
   <br/>
   <ul class="info_items">
    <li><a href="http://www.bu.edu/academics/policies/academic-conduct-code/">academic conduct code</a></li>
   </ul>
   <br/>
  </div>

  <table id="schedule">
   <?php
     $upcoming = 'unshown';

     foreach ($schedule as $entry) {
       if ($upcoming == 'show') $upcoming = 'shown';
       if ($upcoming == 'unshown' && $entry['date'] >= date("Y-m-d")) $upcoming = 'show';

       echo '<tr class="'.$entry['cls'].' '.($upcoming=='show'?'upcoming':'').'">';
       if ($entry['cls'] == 'assignmentdate')
         echo '<td style="color:#AAAAAA; font-style:italic;"><span style="text-decoration:none;">'.$entry[(array_key_exists('dateHTML', $entry)) ? 'dateHTML' : 'date'].'</span></td>';
       else
         echo '<td>'.$entry[(array_key_exists('dateHTML', $entry)) ? 'dateHTML' : 'date'].'</td>';

       if ($entry['type'] == 'lecture') {
         if ($entry['topics'] == '')
           echo '<td><span class="lecture_label">'.$entry['type'].'</span></td>';
         else       
           echo '<td><span class="lecture_label">'.$entry['type'].':</span><br/>'.$entry['topics'].'</td>';
       } else if ( $entry['type'] == 'midterm<br/>exam'
                || $entry['type'] == 'quiz'
                || $entry['type'] == 'final<br/>exam'
                || $entry['type'] == 'poster<br/>session'
                 ) {
         echo '<td><span class="exam">'.$entry['type'].'</span></td>';     
       } else
         echo '<td><span class="assignment_label">'.(($entry['type'] == 'assignment') ? 'project' : $entry['type']).'</span></td>';

       echo '<td><ul>';
       foreach ($entry['details'] as $item) {
         echo '<li>';
         if (is_array($item)) {
           foreach ($item as $itemhead => $subitems) {
             echo $itemhead;
             echo '<ul>';
             foreach ($subitems as $subitem) {
               echo '<li>';
               if (is_array($subitem)) {
                 foreach ($subitem as $subitemhead => $subsubitems) {
                   echo $subitemhead;
                   echo '<ul>';
                   foreach ($subsubitems as $subsubitem)
                     echo '<li>'.$subsubitem.'</li>';
                   echo '</ul>';
                 }
               } else {
                 echo $subitem;
               }
               echo '</li>';
             }
           }
           echo '</ul>';
         } else {
           echo $item;
         }
         echo '</li>';
       }
       echo '</ul></td>';
       echo '</tr>';
     }
   ?>
  </table>

 </div>
 </body>
</html>
