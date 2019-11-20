<?php

$schedule = array(
  array(
    'date' => '2015-01-20',
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
    'date' => '2015-01-22',
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
    'date' => '2015-01-27',
    'dateHTML' => '<span style="text-decoration:underline;">2015-01-27</span><br/><span style="font-size:10px;"></span>',
    'type' => '',
    'cls' => 'nolecture',
    'topics' => '',
    'details' => array()
  )
  ,
  array(
    'date' => '2015-01-29',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'interpretation<br/>&amp; compilation',
    'details' => array(
        '<a href="s.html#95cb72f5b4d24ddba2c8081c7b42618a">lecture notes</a>',
        'more on parsing algorithms',
        array('recursive descent parsers' => array(
          'predictive',
          'backtracking'
        )),
        array('grammars &amp; parser implementation' => array(
          'left factoring',
          'elimination of left recursion'
        ))
      )
  )
  ,
  array(
    'date' => '2015-02-02',
    'dateHTML' => '<span style="text-decoration:underline;">2015-02-02</span><br/><span style="font-size:10px;">11:59 PM EST</span>',
    'type' => 'assignment',
    'cls' => 'assignmentdate',
    'topics' => '',
    'details' => array(
        '<b><a href="s.html#assignment1">assignment #1</a> due</b>',
        'now due Tuesday, 2015-02-03',
        'late penalties also shift by one day'
      )
  )
  ,
  array(
    'date' => '2015-02-03',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'interpretation<br/>&amp; compilation',
    'details' => array(
        '<a href="s.html#4">lecture notes</a>',
        'review of parsing',
        'operational semantics',
        'inference rules',
        'evaluation of expressions'
      )
  )
  ,
  array(
    'date' => '2015-02-05',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'interpretation<br/>&amp; compilation',
    'details' => array(
        '<a href="s.html#4.4">lecture notes</a>',
        'flow of control',
        'side effects',
        array('execution of statements' => array(
          'environments/contexts',
          'with variable assignment',
          'with looping constructs'
        ))
      )
  )
  ,
  array(
    'date' => '2015-02-10',
    'dateHTML' => '<span style="text-decoration:underline;">2015-02-10</span><br/><span style="font-size:10px;"></span>',
    'type' => '',
    'cls' => 'nolecture',
    'topics' => '',
    'details' => array()
  )
  ,
  array(
    'date' => '2015-02-12',
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
    'date' => '2015-02-17',
    'dateHTML' => '<span style="text-decoration:underline;">2015-02-17</span><br/><span style="font-size:10px;">Monday sched.</span><br/><span style="font-size:10px;">11:59 PM EST</span>',
    'type' => 'assignment',
    'cls' => 'assignmentdate',
    'topics' => '',
    'details' => array(
        '<b><a href="s.html#assignment2">assignment #2</a> due</b>'
      )
  )
  ,
  array(
    'date' => '2015-02-19',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'interpretation<br/>&amp; compilation',
    'details' => array(
        '<a href="s.html#3246043602d540668dc63d5b6277a47f">lecture notes</a>',
        'machine language programs',
        'heap management',
        'compiling expressions'
      )
  )
  ,
  array(
    'date' => '2015-02-24',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'interpretation<br/>&amp; compilation',
    'details' => array(
        '<a href="s.html#5.5">lecture notes</a>',
        array('compiling statements' => array(
             'with procedures and calls',
             'with assignment'
        )),
        array('compiling expressions' => array(
             'with variables'
        )),
        array('compiler optimizations' => array(
          'loop unrolling',
          'constant folding'
        ))
      )
  )
  ,
  array(
    'date' => '2015-02-26',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'interpretation<br/>&amp; compilation',
    'details' => array(
        '<a href="s.html#196b533f6ecf46a6a4f7f639b072c51f">lecture notes</a>',
        array('register allocation' => array(
          'interference graph',
          'graph coloring',
          'single static assignment'
        )),
        array('compiling procedures' => array(
          'with procedure parameters',
          'with local variables',
          'with data structures'
        ))
      )
  )
  ,
  array(
    'date' => '2015-03-03',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'static<br/>analysis',
    'details' => array(
        '<a href="s.html#5.8">lecture notes</a>',
        array('implementation correctness' => array(
          'test cases',
          'bounded exhaustive testing'
          //'formal verification'
        )),
        array('static analysis' => array(
          'type checking',
          'error reporting'
        ))
      )
  )
  ,
  array(
    'date' => '2015-03-04',
    'type' => 'assignment',
    'cls' => 'assignmentdate',
    'topics' => '',
    'details' => array(
	    '<b><a href="s.html#assignment3">assignment #3</a> due</b>'
      )
  )
  ,
  array(
    'date' => '2015-03-05',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'static<br/>analysis',
    'details' => array(
        '<a href="s.html#f7d615702fe211e38cf6ce3f5508acd9">lecture notes</a>',
        array('type checking' => array(
          'with variables',
          'with functions',
          'with looping constructs',
          'with size annotations'
        )),
        'abstract interpretation'
      )
  )
  ,
  array(
    'date' => '2015-03-10',
    'dateHTML' => '<span style="text-decoration:underline;">2015-03-10</span>',
    'type' => 'recess',
    'cls' => 'nolecture',
    'topics' => '',
    'details' => array()
  )
  ,
  array(
    'date' => '2015-03-12',
    'dateHTML' => '<span style="text-decoration:underline;">2015-03-12</span>',
    'type' => 'recess',
    'cls' => 'nolecture',
    'topics' => '',
    'details' => array()
  )
  ,
  array(
    'date' => '2015-03-17',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'declarative<br/>programming',
    'details' => array(
        '<a href="s.html#7">lecture notes</a>',
        'review',
        'programming language paradigms',
        'declarative languages',
        'substitution &amp; unification'
      )
  )
  ,
  array(
    'date' => '2015-03-19',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'declarative<br/>programming',
    'details' => array(
        '<a href="s.html#7.3">lecture notes</a>',
        'more on substitution &amp; unification',
        'Haskell syntax &amp; semantics',
        'declarative programming',
        'algebraic data types (ADTs)'
      )
  )
  ,
  array(
    'date' => '2015-03-23',
    'dateHTML' => '<span style="text-decoration:underline;">2015-03-23</span><br/><span style="font-size:10px;">11:59 PM EDT',
    'type' => 'take-home<br/>midterm due',
    'cls' => 'midterm',
    'topics' => '',
    'details' => array(
        '<b><a href="s.html#M.1">midterm posted</a></b>',
        'no late submissions'
      ),
  )
  ,
  array(
    'date' => '2015-03-24',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'declarative<br/>programming',
    'details' => array(
        '<a href="s.html#7.6">lecture notes</a>',
        'semantics of a declarative language',
        'more Haskell examples',
        'Haskell type system',
        'type synonyms',
        'infinitely large values'
      )
  )
  ,
  array(
    'date' => '2015-03-26',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'declarative<br/>programming',
    'details' => array(
        '<a href="s.html#7.8">lecture notes</a>',
        'logic programming',
        'higher-order functions',
        'function types',
        'data encapsulation using ADTs'
      )
  )
  ,
  array(
    'date' => '2015-03-31',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'declarative<br/>programming',
    'details' => array(
        '<a href="s.html#7.11">lecture notes</a>',
        'built-in Haskell type classes',
        'defining and overloading operators',
        'embedded languages',
        'more Haskell features and examples'
      )
  )
  ,
  array(
    'date' => '2015-04-02',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'declarative<br/>programming',
    'details' => array(
        '<a href="s.html#35e16e3052bf4683856ee61eda628366">lecture notes</a>',
        'composition of functions',
        array('list comprehensions' => array(
          'with pattern matching'
        )),
        array('state space search' => array(
          'representing state spaces',
          'comparing states'
        ))
      )
  )
  ,
  array(
    'date' => '2015-04-03',
    'type' => 'assignment',
    'cls' => 'assignmentdate',
    'topics' => '',
    'details' => array(
	    '<b><a href="s.html#assignment4">assignment #4</a> due</b>'
      )
  )
  ,
  array(
    'date' => '2015-04-07',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'declarative<br/>programming',
    'details' => array(
        '<a href="s.html#7.15">lecture notes</a>',
        'defining modules',
        array('polymorphism' => array(
          'ad-hoc (overloading)',
          'parametric',
          'defining type classes'
        )),
		'type inference &amp; unification'
      )
  )
  ,
  array(
    'date' => '2015-04-09',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'functional<br/>programming',
    'details' => array(
        '<a href="s.html#7.16">lecture notes</a>',
        'folds and unfolds',
        'map and filter',
        '&lambda; abstractions',
        'database languages'
      )
  )
  ,
  array(
    'date' => '2015-04-14',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'functional<br/>programming',
    'details' => array(
        'review for quiz',
        'more on folds and unfolds'
      )
  )
  ,
  array(
    'date' => '2015-04-16',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'functional<br/>programming',
    'details' => array(
        '<a href="s.html#7.18">lecture notes</a>',
        'folds and maps for datatypes',
        'lifting and joining',
        'composing monadic functions'
      )
  )
  ,
  array(
    'date' => '2015-04-17',
    'type' => 'assignment',
    'cls' => 'assignmentdate',
    'topics' => '',
    'details' => array(
	    '<b><a href="s.html#assignment5">assignment #5</a> due</b>'
      )
  )
  ,
  array(
    'date' => '2015-04-21',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'algebra of<br/>programming',
    'details' => array(
        array('exploiting algebraic properties' => array(
          'idempotency and monotonicity',
          'commutativity and associativity',
          'composition'
        ))
      )
  )
  ,
  array(
    'date' => '2015-04-23',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'algebra of<br/>programming',
    'details' => array(
	    /*'<a href="s.html#7.15">lecture notes</a>',*/
        /*array('exploiting algebraic properties' => array(
          'refactoring',
          'optimization',
          'distributed/web programming'
        ))*/
        )
  )
  ,
  array(
    'date' => '2015-04-28',
    'type' => 'lecture',
    'cls' => 'review',
    'topics' => 'review',
    'details' => array(
        '<a href="s.html#R.1">lecture notes</a>'
      )
  )
  ,
  array(
    'date' => '2015-04-30',
	'dateHTML' => '<span style="text-decoration:underline;">2015-04-30</span><br/><span style="font-size:10px;">Thursday<br/>12:35-1:55 PM<!--<br/><a href="http://www.bu.edu/maps/?id=??">???</a> ???--></span>',
	'type' => 'in-class<br/>exam',
    'cls' => 'final',
    'topics' => '',
    'details' => array()
  )
  ,  
  array(
    'date' => '2015-05-08',
    'dateHTML' => '<span style="text-decoration:underline;">2015-05-08</span><br/><span style="font-size:10px;">11:59 PM EDT',
    'type' => 'take-home<br/>project due',
    'cls' => 'final',
    'topics' => '',
    'details' => array(
        '<b><a href="s.html#F">project posted</a></b>'
      )
  
  )
);

?>

<html>
 <head>
 <title>BU CAS CS 320 Spring 2015</title>
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
     <br/>&nbsp;&nbsp; Tue. & Thu., 12:30 - 2 PM in <a href="http://www.bu.edu/classrooms/classroom/cas-211/">CAS 211</a>
     <br/>&nbsp;&nbsp; <span class="lbl">lecturer:</span> <a href="https://lapets.io">Andrei Lapets</a> (<a href="mailto:lapets@bu.edu">lapets@bu.edu</a>, MCS 173)
     <br/>&nbsp;&nbsp; <span class="lbl">OH:</span> Tue. 11:15 AM-12:15 PM; Thu. 2-4 PM (<a href="http://www.bu.edu/cs/resources/laboratories/undergraduate-lab/">CS lab</a>)
     <br/>
     <br/>
    </li>
    <li><span class="sect">sections and other assistance:</span>
     <br/>&nbsp;&nbsp; Wed., 10 AM - 11 AM in <a href="http://www.bu.edu/classrooms/classroom/mcs-b23/">MCS B23</a>
     <br/>&nbsp;&nbsp; Wed., 11 AM - 12 PM in <a href="http://www.bu.edu/classrooms/classroom/mcs-b23/">MCS B23</a>
     <br/>&nbsp;&nbsp; Wed., 12 PM - 1 PM in <a href="http://www.bu.edu/classrooms/classroom/mcs-b19/">MCS B19</a>
     <br/>&nbsp;&nbsp; <span class="lbl">teaching fellow:</span> <a href="https://sites.google.com/site/alex2ren/">Zhiqiang Ren</a> (<a href="http://teaching-space.readthedocs.org/en/latest/cs320_concept_programming_language_2015_spring/content.html">section notes</a>)
     <br/>&nbsp;&nbsp; <span class="lbl">OH:</span> Mon. 4-5:30 PM; Wed. 3-4:30 PM (<a href="http://www.bu.edu/cs/resources/laboratories/undergraduate-lab/">CS lab</a>)
     <br/>&nbsp;&nbsp; <span class="lbl"><a href="http://www.bu.edu/cs/resources/tutoring/">tutoring</a>:</span> Mon. 3-4 PM (<a href="http://www.bu.edu/cs/resources/laboratories/undergraduate-lab/">CS lab</a>)
     <br/>
     <br/>&nbsp;&nbsp; <span class="lbl">course assistant:</span> <a href="mailto:edunton@bu.edu">Eric Dunton</a>
     <br/>&nbsp;&nbsp; <span class="lbl">OH:</span> Thu. 6-8 PM (<a href="http://www.bu.edu/cs/resources/laboratories/undergraduate-lab/">CS lab</a>)
     <br/>
     <br/>&nbsp;&nbsp; <span class="lbl">course assistant:</span> <a href="mailto:zhenjier@bu.edu">Zhenjie Ruan</a>
     <br/>&nbsp;&nbsp; <span class="lbl">OH:</span> Tue. 5-7 PM (<a href="http://www.bu.edu/cs/resources/laboratories/undergraduate-lab/">CS lab</a>)
     <br/>
     <br/>
    </li>
    <li><span class="sect">questions and discussion:</span>
     <br/>&nbsp;&nbsp; <a href="mailto:cascs320a1-l@bu.edu">cascs320a1-l@bu.edu</a> (course mailing list)
     <br/>&nbsp;&nbsp; <a href="https://piazza.com/bu/spring2015/cs320">Q&amp;A page</a> on Piazza
    </li>
   </ul>
   <br/>
   <ul class="info_items">
    <li><span class="sect">homework assignment policies:</span>
     <br/>&nbsp;&nbsp; <span class="lbl">submission:</span> by 11:59 PM on due date <!-- (<a href="s.html#A">gsubmit</a>) -->
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
     <br/>&nbsp;&nbsp; <b><a href="s.html#assignment1">assignment #1</a></b>
     <br/>&nbsp;&nbsp; <b><a href="s.html#assignment2">assignment #2</a></b>
     <br/>&nbsp;&nbsp; <b><a href="s.html#assignment3">assignment #3</a></b>
     <br/>&nbsp;&nbsp; <b><a href="s.html#M.1">midterm</a></b>
     <br/>&nbsp;&nbsp; <b><a href="s.html#assignment4">assignment #4</a></b>
     <br/>&nbsp;&nbsp; <b><a href="s.html#assignment5">assignment #5</a></b>
     <br/>&nbsp;&nbsp; <b><a href="s.html#F">take-home project</a></b>
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
