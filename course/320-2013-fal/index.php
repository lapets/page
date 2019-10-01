<?php

$schedule = array(
  array(
    'date' => '2013-09-03',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'languages',
    'details' => array(
        '<a href="s.html#1">lecture notes</a>',
        'overview, motivation, &amp; background',
        'defining programming languages',
        'syntax and BNF notation'
      )
  ),
  array(
    'date' => '2013-09-05',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'languages',
    'details' => array(
        '<a href="s.html#19dc317f45ec4ae18018ca5b17fce114">lecture notes</a>',
        'more on syntax and BNF notation',
        'lexing and parsing'
      )
  ),
  array(
    'date' => '2013-09-10',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'parsing',
    'details' => array(
        '<a href="s.html#2cd418f2876c42d59a57e34bd6288f22">lecture notes</a>',
        array('more on parsing algorithms' => array(
          array('recursive descent parsers' => array(
             'predictive',
             'backtracking'
          ))
        )),
        'inference rule notation',
        'operational semantics'
      )
  ),
  array(
    'date' => '2013-09-12',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'interpretation<br/>&amp; compilation',
    'details' => array(
        '<a href="s.html#3.4">lecture notes</a>',
        array('more on parser implementation' => array(
          'generic/parameterized',
          'left factoring'
        )),
        'more on operational semantics'
      )
  ),
  array(
    'date' => '2013-09-17',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'interpretation<br/>&amp; compilation',
    'details' => array(
        '<a href="s.html#60b6dc0bb16b498594677f3bb08ccc82">lecture notes</a>',
        array('implementing interpreters' => array(
          array('evaluation of expressions' => array(
            'formula constants',
            'formula operators'
          ))
        ))
      )
  ),
  array(
    'date' => '2013-09-18',
    'dateHTML' => '2013-09-18<br/><span style="font-size:10px;">11:59 PM EDT<br/></span>',
    'type' => '',
    'cls' => 'assignmentdate',
    'topics' => '',
    'details' => array('<b><a href="s.html#assignment1">assignment #1</a> due</b>'),
  ),
  array(
    'date' => '2013-09-19',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'interpretation<br/>&amp; compilation',
    'details' => array(
        '<a href="s.html#4.4">lecture notes</a>',
        array('implementing interpreters' => array(
          'evaluation of expressions',
           array('execution of statements' => array(
             'with side effects'
           )),
          'environment/contexts'
        ))
      )
  ),
  array(
    'date' => '2013-09-24',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'interpretation<br/>&amp; compilation',
    'details' => array(
        '<a href="s.html#cbfa02d3624d42b08704d6a4c4fb9e03">lecture notes</a>',
        array('implementing interpreters' => array(
          array('evaluation of expressions' => array(
            'with variables'
          )),
          array('execution of statements' => array(
            'with variable assignment',
            'with looping constructs'
          ))
        )),
      )
  ),
  array(
    'date' => '2013-09-26',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'interpretation<br/>&amp; compilation',
    'details' => array(
        '<a href="s.html#c09ab939e50b40428d392867c00b4710">lecture notes</a>',
        array('implementing interpreters' => array(
          array('execution of statements' => array(
             'with looping constructs'
          ))
        )),
        'interpretation vs. compilation',
        'example of a machine language'
      )
  ),
  array(
    'date' => '2013-10-01',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'interpretation<br/>&amp; compilation',
    'details' => array(
        '<a href="s.html#5">lecture notes</a>',
        array('compilation' => array(
          'history and background',
          'formal definition',
          'compiling expressions'
        ))
      )
  ),
  array(
    'date' => '2013-10-03',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'interpretation<br/>&amp; compilation',
    'details' => array(
        '<a href="s.html#3ee4c63a96db4254ba2b6ad0ee4e29a2">lecture notes</a>',
        array('compilation' => array(
          array('compiling expressions' => array(
             'with variables'
          )),
          array('compiling statements' => array(
             'with assignment',
             'with procedures'
          ))
        ))
      )
  ),
  array(
    'date' => '2013-10-04',
    'dateHTML' => '2013-10-04<br/><span style="font-size:10px;">11:59 PM EDT<br/></span>',
    'type' => '',
    'cls' => 'assignmentdate',
    'topics' => '',
    'details' => array(
      '<b><a href="s.html#assignment2">assignment #2</a> due</b>',
      'only 3 late days available',
      'late penalty starts at 30 points'
      ),
  ),
  array(
    'date' => '2013-10-08',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'interpretation<br/>&amp; compilation',
    'details' => array(
        '<a href="s.html#3246043602d540668dc63d5b6277a47f">lecture notes</a>',
        array('compilation' => array(
          array('compiling statements' => array(
             'with data structures',
             'with procedure parameters'
          )),
          array('memory management' => array(
          'stack and heap',
          'garbage collection'
        ))
          
        ))
      )
  ),
  array(
    'date' => '2013-10-10',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'interpretation<br/>&amp; compilation',
    'details' => array(
        '<a href="s.html#3246043602d540668dc63d5b6277a47f">lecture notes</a>',
        'machine language exercise',
        array('memory management' => array(
          'stack and heap',
          'garbage collection'
        )),
        array('compiler optimizations' => array(
          'constant folding',
          'loop unrolling'
        ))
      )
  ),
  array(
    'date' => '2013-10-15',
    'dateHTML' => '<span style="text-decoration:underline;">2013-10-15</span><br/><span style="font-size:10px;">Monday sched.<br/></span>',
    'type' => '',
    'cls' => 'nolecture',
    'topics' => '',
    'details' => array()
  ),
  array(
    'date' => '2013-10-17',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'static<br/>analysis',
    'details' => array(
        //'interpretation with parallelism',
        //'compilation with parallelism',
        '<a href="s.html#5.8">lecture notes</a>',
        array('implementation correctness' => array(
          'test cases',
          'bounded exhaustive testing',
          'formal verification'
        )),
        array('static analysis' => array(
          'type checking',
          'error reporting'
        ))
      )
  ),
  array(
    'date' => '2013-10-18',
    'dateHTML' => '2013-10-18<br/><span style="font-size:10px;">11:59 PM EDT<br/></span>',
    'type' => '',
    'cls' => 'assignmentdate',
    'topics' => '',
    'details' => array(
        '<b><a href="s.html#assignment3">assignment #3</a> due</b>',
        'only 3 late days available',
        'late penalty starts at 30 points'
        ),
  ),
  array(
    'date' => '2013-10-22',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'static<br/>analysis',
    'details' => array(
        '<a href="s.html#f7d615702fe211e38cf6ce3f5508acd9">lecture notes</a>',
        'review',
        'static analysis',
        'abstract interpretation'
      )
  ),
  array(
    'date' => '2013-10-24',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'static<br/>analysis',
    'details' => array(
        '<a href="s.html#f7d60f9e2fe211e38cf6ce3f5508acd9">lecture notes</a>',
        array('more on static analysis' => array(
          'liveness analysis',
          array('type checking' => array(
            'function types',
            'size-annotated types'
          ))
        ))
      )
  ),
  array(
    'date' => '2013-10-25',
    'dateHTML' => '<span style="text-decoration:underline;">2013-10-25</span><br/>',
    'type' => 'midterm<br/>project due',
    'cls' => 'midterm',
    'topics' => '',
    'details' => array(
      '<b><a href="s.html#M.1">midterm posted</a></b>'
      ),
  ),
  array(
    'date' => '2013-10-29',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'static<br/>analysis',
    'details' => array(
        '<a href="s.html#f7d61e6c2fe211e38cf6ce3f5508acd9">lecture notes</a>',
        'more on type checking',
        'more on abstract interpretation',
        'programming paradigms'
      )
  ),
  array(
    'date' => '2013-10-31',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'declarative<br/>programming',
    'details' => array(
        '<a href="s.html#7.2">lecture notes</a>',
        'substitution &amp; unification',
        'declarative languages'
      )
  ),
  array(
    'date' => '2013-11-05',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'declarative<br/>programming',
    'details' => array(
        '<a href="s.html#7.3">lecture notes</a>',
        'Haskell syntax &amp; semantics',
        'declarative programming',
        'algebraic data types (ADTs)'
      )
  ),
  array(
    'date' => '2013-11-07',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'declarative<br/>programming',
    'details' => array(
        '<a href="s.html#7.6">lecture notes</a>',
        'Haskell type system',
        'infinitely large values'
      )
  ),
  array(
    'date' => '2013-11-08',
    'dateHTML' => '2013-11-08<br/><span style="font-size:10px;">11:59 PM EDT<br/></span>',
    'type' => '',
    'cls' => 'assignmentdate',
    'topics' => '',
    'details' => array(
        '<b><a href="s.html#assignment4">assignment #4</a> due</b>'
        ),
  ),
  array(
    'date' => '2013-11-12',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'declarative<br/>programming',
    'details' => array(
        '<a href="s.html#7.8">lecture notes</a>',
        'higher-order functions',
        'type synonyms',
        'encapsulation using ADTs',
        'built-in Haskell type classes'
      )
  ),
  array(
    'date' => '2013-11-14',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'functional<br/>programming',
    'details' => array(
        '<a href="s.html#7.11">lecture notes</a>',
        'more Haskell examples',
        array('state space search' => array(
          'representing state spaces',
          'comparing states',
          'optimizing choice of state'
        ))
      )
  ),
  array(
    'date' => '2013-11-19',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'functional<br/>programming',
    'details' => array(
        '<a href="s.html#7.12">lecture notes</a>',
        array('state space search' => array(
          'optimizing choice of state',
          'building up algorithms'
        )),
        array('polymorphism' => array(
          'ad-hoc (overloading)',
          'parametric'
        )),
      )
  ),
  array(
    'date' => '2013-11-21',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'functional<br/>programming',
    'details' => array(
        '<a href="s.html#7.14">lecture notes</a>',
        'more on polymorphism',
        'implementing modules'
      )
  ),
  array(
    'date' => '2013-11-23',
    'dateHTML' => '2013-11-23<br/><span style="font-size:10px;">11:59 PM EDT<br/></span>',
    'type' => '',
    'cls' => 'assignmentdate',
    'topics' => '',
    'details' => array(
        '<b><a href="s.html#assignment5">assignment #5</a> due</b>',
        'only 4 late days available',
        'late penalty starts at 20 points'
      ),
  ),
  array(
    'date' => '2013-11-26',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'algebra of<br/>programming',
    'details' => array(
        '<a href="s.html#7.14">lecture notes</a>',
        'defining modules',
        'defining type classes',
        'folds and unfolds',
        '&lambda;-calculus'
      )
  ),
  array(
    'date' => '2013-11-28',
    'dateHTML' => '<span style="text-decoration:underline;">2013-11-28</span>',
    'type' => 'recess',
    'cls' => 'nolecture',
    'topics' => '',
    'details' => array()
  ),
  array(
    'date' => '2013-12-03',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'algebra of<br/>programming',
    'details' => array(
        '<a href="s.html#7.15">lecture notes</a>',
        array('folds, maps, and &lambda; abstractions' => array(
          'in Haskell',
          'in Python',
          'in JavaScript',
          'in database languages'
        ))
      )
  ),
  array(
    'date' => '2013-12-05',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'algebra of<br/>programming',
    'details' => array(
        array('exploiting algebraic properties' => array(
          'refactoring',
          'optimization',
          'distributed/web programming'
        ))
      )
  ),
  array(
    'date' => '2013-12-06',
    'dateHTML' => '2013-12-06<br/><span style="font-size:10px;">11:59 PM EDT<br/></span>',
    'type' => '',
    'cls' => 'assignmentdate',
    'topics' => '',
    'details' => array(
        '<b><a href="s.html#assignment6">assignment #6</a> due</b>'
      ),
  ),
  array(
    'date' => '2013-12-10',
    'type' => 'lecture',
    'cls' => 'review',
    'topics' => 'review',
    'details' => array(
        '<a href="s.html#R.1">lecture notes</a>',
      )
  ),
  array(
    'date' => '2013-12-13',
    'dateHTML' => '<span style="text-decoration:underline;">2013-12-13</span><br/><span style="font-size:10px;">11:59 PM EDT',
    'type' => 'final<br/>take-home<br/>portion due',
    'cls' => 'final',
    'topics' => '',
    'details' => array(
        '<b><a href="s.html#F.1">take-home portion posted</a></b>'
      ),
  ),
  array(
    'date' => '2013-12-16',
    'dateHTML' => '<span style="text-decoration:underline;">2013-12-16</span><br/><span style="font-size:10px;">Mon.<br/>12:30-2:30 PM<br/><a href="http://www.bu.edu/maps/?id=30">CAS</a> 316</span>',
    'type' => 'final<br/>in-class<br/>exam',
    'cls' => 'final',
    'topics' => '',
    'details' => array(),
  )
);

?>

<html>
 <head>
 <title>BU CAS CS 320 Fall 2013</title>
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
  #schedule .midterm { color:firebrick; font-weight:bold; }
  #schedule .final { color:firebrick; font-weight:bold; }
  #schedule .review { font-weight:bold; }
  #schedule .upcoming { background-color:#F9EFE1; }
  #schedule .lecture_label { color:#AAAAAA; font-weight:normal; font-style:normal; }
  ul { padding-top:0px; padding-bottom:0px; padding-left:0px; padding-right:25px; margin:0px;  }
  li { 
    list_style_type:none; list-style-image:url('bullet.png'); padding:0px;
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
   <br/><b>BU CAS Computer Science 320</b>
   <br/><b>Concepts of Programming Languages</b>
   <br/>
   <br/>
   <br/>
   <ul class="info_items">
    <li><span class="sect">lectures:</span>
     <br/>&nbsp;&nbsp; Tue. & Thu., 12:30 - 2:00 PM in CAS 316
     <br/>&nbsp;&nbsp; <span class="lbl">lecturer:</span> <a href="http://cs-people.bu.edu/lapets">Andrei Lapets</a> (<a href="mailto:lapets@bu.edu">lapets@bu.edu</a>)
     <br/>&nbsp;&nbsp; <span class="lbl">OH:</span> Wed. 1 - 3 PM; Thu. 2:15 - 3:15 PM <b>(<a href="http://www.bu.edu/cs/resources/laboratories/undergraduate-lab/">CS lab</a>)</b>
     <br/>
     <br/>
    </li>
    <li><span class="sect">sections:</span>
     <br/>&nbsp;&nbsp; Wed., 10 AM - 11 AM in SED 140
     <br/>&nbsp;&nbsp; Wed., 11 AM - 12 PM in KCB 103
     <br/>&nbsp;&nbsp; Wed., 3 PM - 4 PM in COM 215
     <br/>&nbsp;&nbsp; <span class="lbl">teaching fellow:</span> <a href="http://cs-people.bu.edu/hwwu/cs320">Hanwen Wu</a> (<a href="mailto:hwwu@bu.edu">hwwu@bu.edu</a>)
     <br/>&nbsp;&nbsp; <span class="lbl">OH:</span> Wed. 1 - 2:30 PM; Wed. 5:30 - 7 PM (PSY 234)
     <br/>
     <br/>
    </li>
    <li><span class="sect">for questions and discussion:</span>
     <br/>&nbsp;&nbsp; <a href="mailto:cascs320a1-l@bu.edu">cascs320a1-l@bu.edu</a> (course mailing list)
     <br/>&nbsp;&nbsp; <a href="https://piazza.com/bu/fall2013/cs320">Q&amp;A page</a> on Piazza
    </li>
   </ul>
   <br/>
   <ul class="info_items">
    <li><span class="sect">homework assignment policies:</span>
     <br/>&nbsp;&nbsp; <span class="lbl">submission:</span> by 11:59 PM on due date (<a href="http://www.cs.bu.edu/teaching/hw/gsubmit/">gsubmit</a>)
     <br/>&nbsp;&nbsp; <span class="lbl">collaboration:</span> discussion only; list all collaborators
     <br/>&nbsp;&nbsp; <span class="lbl">late policy</span>: -10 points per day, 5 days maximum
    </li>
   </ul>
   <br/>
   <ul class="info_items">
    <li><span class="sect">course grade:</span>
     <br/>&nbsp;&nbsp; 50% <i>homework</i> + 50% max{<i>final</i>, avg{<i>mid</i>, <i>final</i>}}</li>
    </li>
   </ul>
   <br/>
   <ul class="info_items">
    <li><span class="sect">course materials:</span>
     <br/>&nbsp;&nbsp; <a href="s.html">lecture notes</a> (w/ assignments &amp; review problems)
     <br/>&nbsp;&nbsp; <b><a href="s.html#assignment1">assignment #1</a></b>
     <br/>&nbsp;&nbsp; <b><a href="s.html#assignment2">assignment #2</a></b>
     <br/>&nbsp;&nbsp; <b><a href="s.html#assignment3">assignment #3</a></b>
     <br/>&nbsp;&nbsp; <b><a href="s.html#M.1">midterm</a></b>
     <br/>&nbsp;&nbsp; <b><a href="s.html#assignment4">assignment #4</a></b>
     <br/>&nbsp;&nbsp; <b><a href="s.html#assignment5">assignment #5</a></b>
     <br/>&nbsp;&nbsp; <b><a href="s.html#assignment6">assignment #6</a></b>
     <br/>&nbsp;&nbsp; <b><a href="s.html#F.1">final (take-home portion)</a></b>
    </li>
    </li>
   </ul>
   <br/>
   <ul class="info_items">
    <li><span class="sect">software used in the course:</span>
     <br/>&nbsp;&nbsp; <a href="http://www.python.org/getit/">Python 3.3</a>
     <br/>&nbsp;&nbsp; <a href="http://www.haskell.org/platform/">Haskell Platform</a>
    </li>
   </ul>
   <br/>
   <ul class="info_items">
    <li><span class="sect">other reading materials (not required):</span>
     <br/>
     <br/>&nbsp;&nbsp; <b><a href="http://www.cs.princeton.edu/~appel/modern/">Modern Compiler Implementation.</a></b>
     <br/>&nbsp;&nbsp;&nbsp;&nbsp; Andew W. Appel.
     <br/>
     <br/>&nbsp;&nbsp; <b><a href="http://www.haskellcraft.com/">Haskell, The Craft of Functional Programming.</a></b>
     <br/>&nbsp;&nbsp;&nbsp;&nbsp; Simon Thompson.
    </li>
   </ul>
   <br/>
   <ul class="info_items">
    <li><a href="http://www.bu.edu/academics/resources/academic-conduct-code/">academic conduct code</a></li>
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
         echo '<td style="color:#AAAAAA; font-style:italic;">'.$entry[(array_key_exists('dateHTML', $entry)) ? 'dateHTML' : 'date'].'</td>';
       else
         echo '<td>'.$entry[(array_key_exists('dateHTML', $entry)) ? 'dateHTML' : 'date'].'</td>';

       if ($entry['type'] == 'lecture') {
         if ($entry['topics'] == '')
           echo '<td><span class="lecture_label">'.$entry['type'].'</span></td>';
         else       
           echo '<td><span class="lecture_label">'.$entry['type'].':</span><br/>'.$entry['topics'].'</td>';
       } else
         echo '<td>'.$entry['type'].'</td>';

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
