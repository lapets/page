<?php

$schedule = array(
  array(
    'date' => '2015-09-03',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'languages',
    'details' => array(
        '<a href="s.html#1">lecture notes</a>',
        'background &amp; motivation',
        array('defining programming languages' => array(
          'sets of character strings',
          'regular expressions',
          'examples with regular expressions',
          'sets of token sequences',
          'syntax and BNF notation'
        ))
      )
  )
  ,
  array(
    'date' => '2015-09-08',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'languages',
    'details' => array(
        '<a href="s.html#8c1203dd65bb49868abc64ad5353725f">lecture notes</a>',
        'more on syntax and BNF notation',
        'concrete and abstract syntaxes',
        'abstract syntax trees',
        'lexing and parsing'
      )
  )
  ,
  array(
    'date' => '2015-09-10',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'parsing',
    'details' => array(
        '<a href="s.html#95cb72f5b4d24ddba2c8081c7b42618a">lecture notes</a>',
        'more on parsing algorithms',
        array('recursive descent parsers' => array(
          'predictive',
          'backtracking'
        )),
        array('more on parser implementation' => array(
          'elimination of left recursion',
          'left factoring'
        )),
      )
  )
  ,
  array(
    'date' => '2015-09-15',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'interpretation<br/>&amp; compilation',
    'details' => array(
        '<a href="s.html#4">lecture notes</a>',
        'operational semantics',
        'inference rules',
        'implementing interpreters',
        'evaluation of expressions'
      )
  )
  ,
  array(
    'date' => '2015-09-16',
    'dateHTML' => '2015-09-16<br/><span style="font-size:10px;">11:59 PM EDT<br/></span>',
    'type' => 'assignment',
    'cls' => 'assignmentdate',
    'topics' => '',
    'details' => array('<b><a href="s.html#assignment1">assignment #1</a> due</b>')
  )
  ,
  array(
    'date' => '2015-09-17',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'interpretation<br/>&amp; compilation',
    'details' => array(
        '<a href="s.html#4.4">lecture notes</a>',
        array('execution of statements' => array(
          'control flow',
          'side effects',
          'environments/contexts',
          'variable assignment',
          'program subblocks'
        ))
      )
  )
  ,
  array(
    'date' => '2015-09-22',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'interpretation<br/>&amp; compilation',
    'details' => array(
        '<a href="s.html#4ebc67e9336c475a939d6c8c0dcedc36">lecture notes</a>',
        array('execution of statements' => array(
          'conditional branches',
          'looping constructs'
        )),
        'control flow graphs'
      )
  )
  ,
  array(
    'date' => '2015-09-24',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'interpretation<br/>&amp; compilation',
    'details' => array(
        '<a href="s.html#5">lecture notes</a>',
        array('compilation' => array(
          'history and background',
          'formal definition',
          'interpretation vs. compilation'
        )),
        'example of a machine language'
      )
  )
  ,
  array(
    'date' => '2015-09-29',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'interpretation<br/>&amp; compilation',
    'details' => array(
        '<a href="s.html#3246043602d540668dc63d5b6277a47f">lecture notes</a>',
        'machine language programs',
        'compiling expressions',
        'heap (memory region)'
      )
  )
  ,
  array(
    'date' => '2015-10-01',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'interpretation<br/>&amp; compilation',
    'details' => array(
        '<a href="s.html#5.5">lecture notes</a>',
        array('compiling expressions' => array(
          'variable occurrences'
        )),
        array('compiling statements' => array(
          'assignments',
          'procedures'
        )),
        'stack vs. heap'
      )
  )
  ,
  array(
    'date' => '2015-10-02',
    'dateHTML' => '2015-10-02<br/><span style="font-size:10px;">11:59 PM EDT<br/></span>',
    'type' => 'assignment',
    'cls' => 'assignmentdate',
    'topics' => '',
    'details' => array('<b><a href="s.html#assignment2">assignment #2</a> due</b>')
  )
  ,
  array(
    'date' => '2015-10-06',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'interpretation<br/>&amp; compilation',
    'details' => array(
        '<a href="s.html#f7d618222fe211e38cf6ce3f5508acd9">lecture notes</a>',
        array('compiling statements' => array(
          'procedure calls',
          'procedure parameters',
          'looping constructs'
        )),
        'stack pointer',
        'stack frames'
      )
  )
  ,
  array(
    'date' => '2015-10-08',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'interpretation<br/>&amp; compilation',
    'details' => array(
        '<a href="s.html#5.7">lecture notes</a>',
        array('compiler optimizations' => array(
          'loop unrolling',
          'constant folding'
        )),
        array('register allocation' => array(
          'interference graph',
          'graph coloring',
          'single static assignment'
        )),
        'compiling comprehensions'
      )
  )
  ,
  array(
    'date' => '2015-10-13',
    'dateHTML' => '<span style="text-decoration:none;">2015-10-13</span><br/><span style="font-size:10px;">Monday sched.<br/></span>',
    'type' => '',
    'cls' => 'nolecture',
    'topics' => '',
    'details' => array()
  )
  ,
  array(
    'date' => '2015-10-15',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'interpretation<br/>&amp; compilation',
    'details' => array(
        array('more on compiling procedures' => array(
          'local variables',
          'data structures'
        )),
        array('memory management' => array(
          'stack and heap',
          'garbage collection'
        ))
      )
  )
  ,
  array(
    'date' => '2015-10-20',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'static<br/>analysis',
    'details' => array(
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
        /*'<a href="s.html#f7d615702fe211e38cf6ce3f5508acd9">lecture notes</a>',
        array('type checking' => array(
          'with variables',
          'with functions'
        ))*/
      )
  )
  ,
  array(
    'date' => '2015-10-21',
    'dateHTML' => '2015-10-21<br/><span style="font-size:10px;">11:59 PM EDT<br/></span>',
    'type' => 'assignment',
    'cls' => 'assignmentdate',
    'topics' => '',
    'details' => array('<b><a href="s.html#assignment3">assignment #3</a> due</b>')
  )
  ,
  array(
    'date' => '2015-10-22',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'static<br/>analysis',
    'details' => array(
        '<a href="s.html#f7d60f9e2fe211e38cf6ce3f5508acd9">lecture notes</a>',
        array('more type checking and interpretation' => array(
          'functions with parameters',
          'types with size annotations'
        ))
      )
  )
  ,
  array(
    'date' => '2015-10-27',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'static<br/>analysis',
    'details' => array(
        '<a href="s.html#6.2">lecture notes</a>',
        'abstract interpretation',
        'review'
      )
  )
  ,
  array(
    'date' => '2015-10-29',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'declarative<br/>programming',
    'details' => array(
        '<a href="s.html#7">lecture notes</a>',
        'programming paradigms',
        'declarative languages',
        'substitution &amp; unification'
      )
  )
  ,
  array(
    'date' => '2015-11-02',
    'dateHTML' => '<span style="text-decoration:underline;">2015-11-02</span><br/><span style="font-size:10px;">11:59 PM EDT',
    'type' => 'take-home<br/>midterm due',
    'cls' => 'midterm',
    'topics' => '',
    'details' => array(
        '<b><a href="s.html#M.1">midterm posted</a></b>'
      ),
  )
  ,
  array(
    'date' => '2015-11-03',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'declarative<br/>programming',
    'details' => array(
        '<a href="s.html#788d70ecb3ab4acaa98a9355657fca3d">lecture notes</a>',
        'more on substitution &amp; unification',
        'Haskell syntax &amp; semantics',
        'declarative programming',
        'algebraic data types (ADTs)'
      )
  )
  ,
  array(
    'date' => '2015-11-05',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'declarative<br/>programming',
    'details' => array(
        '<a href="s.html#7.6">lecture notes</a>',
        'semantics of a declarative language',
        'Haskell type system',
        'type synonyms',
        'infinitely large values'
      )
  )
  ,
  array(
    'date' => '2015-11-10',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'functional<br/>programming',
    'details' => array(
        '<a href="s.html#7.7">lecture notes</a>',
        'more on infinitely large values',
        'function types',
        'higher-order functions',
        //'data encapsulation using ADTs',
        'type checking in Haskell'
      )
  )
  ,
  array(
    'date' => '2015-11-12',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'functional<br/>programming',
    'details' => array(
        '<a href="s.html#7.9">lecture notes</a>',
        'logic programming',
        'built-in Haskell type classes',
        'defining and overloading operators',
        'embedded languages'
      )
  )
  ,
  array(
    'date' => '2015-11-16',
    'dateHTML' => '2015-11-16<br/><span style="font-size:10px;">11:59 PM EDT<br/></span>',
    'type' => 'assignment',
    'cls' => 'assignmentdate',
    'topics' => '',
    'details' => array('<b><a href="s.html#assignment4">assignment #4</a> due</b>')
  )
  ,
  array(
    'date' => '2015-11-17',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'functional<br/>programming',
    'details' => array(
        '<a href="s.html#7.12">lecture notes</a>',
        'more Haskell features and examples',
        array('list comprehensions' => array(
          'with pattern matching'
        )),
        array('state space search' => array(
          'defining a game state',
          'building a state space'
        ))
      )
  )
  ,
  array(
    'date' => '2015-11-19',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'functional<br/>programming',
    'details' => array(
        '<a href="s.html#7.14">lecture notes</a>',
        array('state space search' => array(
          'comparing states',
          'choosing states optimally'
        )),
        array('polymorphism' => array(
          'ad-hoc (overloading)',
          'parametric'
        )),
        'defining modules',
        'defining data structures',
        'defining type classes'
      )
  )
  ,
  array(
    'date' => '2015-11-24',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'functional<br/>programming',
    'details' => array(
        '<a href="s.html#1dade7b3338943cebc188d3b4b9890ba">lecture notes</a>',
        'more on state spaces',
        'more on polymorphism'
      )
  )
  ,
  array(
    'date' => '2015-11-26',
    'dateHTML' => '<span style="text-decoration:none;">2015-11-26</span>',
    'type' => 'recess',
    'cls' => 'nolecture',
    'topics' => '',
    'details' => array()
  )
  ,
  array(
    'date' => '2015-12-01',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'algebra of<br/>programming',
    'details' => array(
        'fold operations over data types'
      )
  )
  ,
  array(
    'date' => '2015-12-03',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'algebra of<br/>programming',
    'details' => array(
        'polymorphic fold operations',
        array('folds, maps, and filters' => array(
          'as comprehensions',
          'in Haskell',
          'in Python',
          'in database languages'
        )),
        'exploiting algebraic properties',
        'lifts and joins'
        )
  )
  ,
  array(
    'date' => '2015-12-07',
    'dateHTML' => '2015-12-07<br/><span style="font-size:10px;">11:59 PM EDT<br/></span>',
    'type' => 'assignment',
    'cls' => 'assignmentdate',
    'topics' => '',
    'details' => array('<b><a href="s.html#assignment5">assignment #5</a> due</b>')
  )
  ,
  array(
    'date' => '2015-12-08',
    'type' => 'lecture',
    'cls' => 'review',
    'topics' => 'review',
    'details' => array(
        '<a href="s.html#R.1">lecture notes</a>',
      )
  )
  ,
  array(
    'date' => '2015-12-10',
    'dateHTML' => '<span style="text-decoration:underline;">2015-12-10</span><br/><span style="font-size:10px;">Thursday<br/>12:35-1:55 PM<!--<br/><a href="http://www.bu.edu/maps/?id=??">???</a> ???--></span>',
    'type' => 'in-class<br/>exam',
    'cls' => 'final',
    'topics' => '',
    'details' => array(),
  )
  ,
  array(
    'date' => '2014-12-17',
    'dateHTML' => '<span style="text-decoration:underline;">2014-12-17</span><br/><span style="font-size:10px;">11:59 PM EDT',
    'type' => 'take-home<br/>project due',
    'cls' => 'final',
    'topics' => '',
    'details' => array(
        '<b><a href="s.html#F">take-home project posted</a></b>'
      ),
  )
);

?>

<html>
 <head>
 <title>BU CAS CS 320 Fall 2015</title>
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
   <br/><b>BU CAS Computer Science 320</b>
   <br/><b>Concepts of Programming Languages</b>
   <br/>
   <br/>
   <br/>
   <ul class="info_items">
    <li><span class="sect">lectures:</span>
     <br/>&nbsp;&nbsp; Tue. & Thu., 12:30 - 2 PM in <a href="http://www.bu.edu/classrooms/classroom/cgs-511/">CGS 511</a>
     <br/>&nbsp;&nbsp; <span class="lbl">lecturer:</span> <a href="http://cs-people.bu.edu/lapets">Andrei Lapets</a> (<a href="mailto:lapets@bu.edu">lapets@bu.edu</a>, MCS 173)
     <br/>&nbsp;&nbsp; <span class="lbl">OH:</span> Wed. 5 - 7 PM; Thu. 2 - 3 PM (<a href="http://www.bu.edu/cs/resources/laboratories/undergraduate-lab/">CS lab</a>)
     <br/>
     <br/>
    </li>
    <li><span class="sect">sections and other assistance:</span>
     <br/>&nbsp;&nbsp; Wed., 10 AM - 11 AM in <a href="http://www.bu.edu/classrooms/classroom/psy-b47/">PSY B47</a>
     <br/>&nbsp;&nbsp; Wed., 11 AM - 12 PM in <a href="http://www.bu.edu/classrooms/classroom/kcb-103/">KCB 103</a>
     <br/>&nbsp;&nbsp; Wed., 12 PM - 1 PM in <a href="http://www.bu.edu/classrooms/classroom/mcs-B23/">MCS B23</a>
     <br/>&nbsp;&nbsp; Wed., 3 PM - 4 PM in <a href="http://www.bu.edu/classrooms/classroom/epc-208/">EPC 208</a>
     <br/>&nbsp;&nbsp; <span class="lbl">teaching fellow:</span> <a href="http://cs-people.bu.edu/smirzaei/">Saber Mirzaei</a>
     <br/>&nbsp;&nbsp; <span class="lbl">OH:</span> Mon. 3 - 4:30 PM; Tue. 3 - 4:30 PM (<a href="http://www.bu.edu/cs/resources/laboratories/undergraduate-lab/">CS lab</a>)
     <br/>
     <br/>&nbsp;&nbsp; <span class="lbl">course assistant:</span> <a href="mailto:jgyou@bu.edu">Jacqueline You</a>
     <br/>&nbsp;&nbsp; <span class="lbl">OH:</span> Fri. 3 - 5 PM (<a href="http://www.bu.edu/cs/resources/laboratories/undergraduate-lab/">CS lab</a>)
     <br/>
     <br/>&nbsp;&nbsp; <span class="lbl">course assistant:</span> <a href="mailto:zhenjier@bu.edu">Zhenjie Ruan</a>
     <br/>&nbsp;&nbsp; <span class="lbl">OH:</span> Mon. 4 - 6 PM (<a href="http://www.bu.edu/cs/resources/laboratories/undergraduate-lab/">CS lab</a>)
     <br/>
     <br/>
    </li>
    <li><span class="sect">questions and discussion:</span>
     <br/>&nbsp;&nbsp; <a href="mailto:cascs320a1-l@bu.edu">cascs320a1-l@bu.edu</a> (course mailing list)
     <br/>&nbsp;&nbsp; <a href="https://piazza.com/bu/fall2015/cs320">Q&amp;A page</a> on Piazza
    </li>
   </ul>
   <br/>
   <ul class="info_items">
    <li><span class="sect">homework assignment policies:</span>
     <br/>&nbsp;&nbsp; <span class="lbl">submission:</span> by 11:59 PM on due date (<a href="s.html#A">gsubmit</a>)
     <br/>&nbsp;&nbsp; <span class="lbl">collaboration:</span> discussion only; list all collaborators
     <br/>&nbsp;&nbsp; <span class="lbl">late policy</span>: -10 points per day, 4 days maximum
    </li>
   </ul>
   <br/>
   <ul class="info_items">
    <li><span class="sect">course grade:</span>
     <!--<br/>&nbsp;&nbsp; 50% <i>homework</i> + 50% max{<i>final</i>, avg{<i>mid</i>, <i>final</i>}}</li>-->
     <br/>&nbsp;&nbsp; 50% <i>homework</i> +
     <br/>&nbsp;&nbsp; max{
     <br/>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;50% max{<i>end</i>, avg{<i>mid</i>, <i>end</i>}}, 
     <br/>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;40% max{<i>end</i>, avg{<i>mid</i>, <i>end</i>}} + 10% <i>quiz</i>
     <br/>&nbsp;&nbsp; &nbsp;&nbsp;}
    </li>
   </ul>
   <br/>
   <ul class="info_items">
    <li><span class="sect">course materials:</span>
     <!--<br/>&nbsp;&nbsp; to be posted-->
     <br/>&nbsp;&nbsp; <a href="s.html">lecture notes</a> (w/ assignments &amp; review problems)
     <br/>&nbsp;&nbsp; <a href="machine.php">machine language simulator</a>
     <br/>&nbsp;&nbsp; <b><a href="s.html#assignment1">assignment #1</a></b>
     <br/>&nbsp;&nbsp; <b><a href="s.html#assignment2">assignment #2</a></b>
     <br/>&nbsp;&nbsp; <b><a href="s.html#assignment3">assignment #3</a></b>
     <br/>&nbsp;&nbsp; <b><a href="s.html#M.1">midterm</a> (<a href="midterm/solutions">solutions</a>)</b>
     <br/>&nbsp;&nbsp; <b><a href="s.html#assignment4">assignment #4</a></b>
     <br/>&nbsp;&nbsp; <b><a href="s.html#assignment5">assignment #5</a></b>
     <br/>&nbsp;&nbsp; <b><a href="s.html#F">take-home project</a></b>
     <br/>&nbsp;&nbsp; <a href="https://github.com/lapets/course-programming-languages">GitHub repository</a>
    </li>
    </li>
   </ul>
   <br/>
   <ul class="info_items">
    <li><span class="sect">software used in the course:</span>
     <br/>&nbsp;&nbsp; <a href="https://www.python.org/downloads/">Python 3.3</a>+
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
     <br/>&nbsp;&nbsp; <b><a href="http://www.haskellcraft.com/">Haskell: the Craft of Functional Programming.</a></b>
     <br/>&nbsp;&nbsp;&nbsp;&nbsp; Simon Thompson.
    </li>
   </ul>
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
       if ($entry['cls'] == 'assignmentdate') {
         if (!array_key_exists('dateHTML', $entry))
           echo '<td style="color:#AAAAAA; font-style:italic;"><span style="text-decoration:underline;">'.$entry['date'].'</span><br/><span style="font-size:10px;">11:59 PM EDT<br/></span></td>';
         else
           echo '<td style="color:#AAAAAA; font-style:italic;">'.$entry[(array_key_exists('dateHTML', $entry)) ? 'dateHTML' : 'date'].'</td>';
       } else
         echo '<td>'.$entry[(array_key_exists('dateHTML', $entry)) ? 'dateHTML' : 'date'].'</td>';

       if ($entry['type'] == 'lecture') {
         if ($entry['topics'] == '')
           echo '<td><span class="lecture_label">'.$entry['type'].'</span></td>';
         else       
           echo '<td><span class="lecture_label">'.$entry['type'].':</span><br/>'.$entry['topics'].'</td>';
       } else if($entry['type'] == 'take-home<br/>midterm due') {
         echo '<td><span class="midterm">'.$entry['type'].'</span></td>';  
       } else if($entry['type'] == 'take-home<br/>project due') {
         echo '<td><span class="midterm">'.$entry['type'].'</span></td>';  
       } else if($entry['type'] == 'in-class<br/>exam') {
         echo '<td><span class="midterm">'.$entry['type'].'</span></td>';  
       } else
         echo '<td><span class="assignment_label">'.$entry['type'].'</span></td>';

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
