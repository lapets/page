<?php

$schedule = array(
  array(
    'date' => '2012-01-17',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'introduction &<br/>motivation',
    'details' => array(
      'course organization',
      'review of algebra and systems of equations',
      'high-level overview of the course material',
      'vectors, planes, spaces, and ways to<br/>symbolically represent them',
      '<a href="materials.php#lecture1">lecture notes</a>',
      'related readings [Lay 2003]: 1.1, 1.3'
      ),
  ),
  array(
    'date' => '2012-01-19',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'vectors',
    'details' => array(
      '<a href="materials.php#lecture2">lecture notes</a>',
      'algebraic properties of vectors',
      'vector space axioms',
      'related readings [Lay 2003]: 1.3'
      ),
  ),
  array(
    'date' => '2012-01-23',
    'type' => '',
    'cls' => 'assignmentdate',
    'topics' => '',
    'details' => array('<b><a href="materials.php?hw=1">assignment #1</a> posted</b>'),
  ),
  array(
    'date' => '2012-01-24',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'vectors',
    'details' => array(
      '<a href="materials.php#lecture3">lecture notes</a>',
      'vector norms and dot products in <b>R</b><sup>2</sup>',
      'vector properties and relationships:
       <ul>
        <li>orthogonality</li>
        <li>linear dependence and independence</li>
        <li>projections</li>
        <li>linear combinations</li>
        <li>spans</li>
      </ul>',
      'related readings [Lay 2003]: 6.1, 6.2, 6.3'
      ), 
  ),
  array(
    'date' => '2012-01-26',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'vectors',
    'details' => array(
      '<a href="materials.php#lecture4">lecture notes</a>',
      'review of set and predicate notation',
      'review of vector properties and relationships',
      'exercises and examples',
      'related readings [Lay 2003]: 1.3, 1.7'
      ),
  ),
  array(
    'date' => '2012-01-31',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'matrices',
    'details' => array(
      '<a href="materials.php#lecture5">lecture notes</a>',
      'linear combinations in applications',
      'from linear combinations to matrices',
      'interpretations of matrices',
      'matrix operations and properties
       <ul>
        <li>addition</li>
        <li>multiplication</li>
      </ul>',
      'related readings [Lay 2003]: 1.6, 2.1'
      ),
  ),
  array(
    'date' => '2012-02-02',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'matrices',
    'details' => array(
      'review: matrix interpretations in applications',
      'review: maps, composition, and inversion',
      'composition of matrices and applications',
      'related readings [Lay 2003]: 2.1, 2.2, 2.3'
      ),
  ),
  array(
    'date' => '2012-02-03',
    'type' => '',
    'cls' => 'assignmentdate',
    'topics' => '',
    'details' => array('<b><a href="materials.php?hw=1">assignment #1</a> due</b>'),
  ),
  array(
    'date' => '2012-02-04',
    'type' => '',
    'cls' => 'assignmentdate',
    'topics' => '',
    'details' => array('<b><a href="materials.php?hw=2">assignment #2</a> posted</b>'),
  ),
  array(
    'date' => '2012-02-07',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'matrices',
    'details' => array(
      '<a href="materials.php#lecture7">lecture notes</a>',
      'review of relations and functions',
      'matrix multiplication and inversion
       <ul>
        <li>interpretations</li>
        <li>review of algebraic properties</li>
      </ul>',
      'some subsets of <b>R<sup>n&times;n</sup></b> and properties',
      'determinants and inversion of <b>R</b><sup>2&times;2</sup> matrices',
      'related readings [Lay 2003]: 2.1, 2.2, 2.3'
      ),
  ),
  array(
    'date' => '2012-02-09',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'matrices',
    'details' => array(
      '<a href="materials.php#lecture8">lecture notes</a>',
      'details about subsets of <b>R<sup>n&times;n</sup></b> and properties',
      'solving <i>Mv</i> = <i>w</i> for <i>M</i> with various properties',
      'elementary matrices and row operations',
      'reduced row echelon forms of matrices',
      'related readings [Lay 2003]: 1.2, 2.3, 2.5'
    ),
  ),
  array(
    'date' => '2012-02-14',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'matrices',
    'details' => array(
      '<a href="materials.php#lecture9">lecture notes</a>',
      'more facts about invertible matrices',
      'matrix LU factorization',
      'matrix transposition',
      'orthogonal matrices',
      'matrix rank',
      'matrix similarity',
      'related readings [Lay 2003]: 1.2, 2.5'
    ),
  ),
  array(
    'date' => '2012-02-16',
    'type' => 'lecture',
    'cls' => 'review',
    'topics' => 'review',
    'details' => array('<a href="materials.php#lecture10">lecture notes (practice problems)</a>'),
  ),
  array(
    'date' => '2012-02-20',
    'type' => '',
    'cls' => 'assignmentdate',
    'topics' => '',
    'details' => array('<b><a href="materials.php?hw=2">assignment #2</a> due</b>'),
  ),
  array(
    'date' => '2012-02-21',
    'type' => 'monday schedule',
    'cls' => 'nolecture',
    'topics' => '',
    'details' => array(),
  ),
  array(
    'date' => '2012-02-23',
    'type' => 'midterm exam',
    'cls' => 'midterm',
    'topics' => '',
    'details' => array(),
  ),
  array(
    'date' => '2012-02-28',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'vector spaces',
    'details' => array(
      '<a href="materials.php#lecture11">lecture notes</a>',
      'sets of vectors and their notation',
      'computing equality of vector spaces',
      'abstract vector spaces',
      'fitting functions to data points'
    ),
  ),
  array(
    'date' => '2012-03-01',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'vector spaces',
    'details' => array(
      '<a href="materials.php#lecture12">lecture notes</a>',
      'more on computing equality of spans',
      'more abstract vector spaces',
      'fitting functions to many data points',
      'subspaces',
      'basis of a vector space'
    ),
  ),
  array(
    'date' => '2012-03-02',
    'type' => '',
    'cls' => 'assignmentdate',
    'topics' => '',
    'details' => array('<b><a href="materials.php?hw=3">assignment #3</a> posted</b>'),
  ),
  array(
    'date' => '2012-03-06',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'vector spaces',
    'details' => array(
      '<a href="materials.php#lecture13">lecture notes</a>',
      'computing an orthonormal basis',
      'projecting onto a subspace',
      'least-squares approximations',
      'dimension of a vector space',
      'orthogonal complement of a vector space',
      'algebra of vector spaces'
    ),
  ),
  array(
    'date' => '2012-03-08',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'vector spaces',
    'details' => array(
      '<a href="materials.php#lecture14">lecture notes</a>',
      'more on fitting functions to data',
      'approximating a matrix system model',
      'algebra of vector spaces',
      'review and more properties of maps'
    ),
  ),
  array(
    'date' => '2012-03-12',
    'type' => '',
    'cls' => 'assignmentdate',
    'topics' => '',
    'details' => array('<b><a href="materials.php?hw=3">assignment #3</a> due</b>'),
  ),
  array(
    'date' => '2012-03-13',
    'type' => 'spring recess',
    'cls' => 'nolecture',
    'topics' => '',
    'details' => array(),
  ),
  array(
    'date' => '2012-03-15',
    'type' => 'spring recess',
    'cls' => 'nolecture',
    'topics' => '',
    'details' => array(),
  ),
  array(
    'date' => '2012-03-20',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'linear<br/>transformations',
    'details' => array(
      '<a href="materials.php#lecture15">lecture notes</a>',
      'review and more properties of maps',
      'homomorphisms and linear transformations',
      'properties of linear transformations'
    ),
  ),
  array(
    'date' => '2012-03-22',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'linear<br/>transformations',
    'details' => array(
      '<a href="materials.php#lecture16">lecture notes</a>',
      'data modelling as a linear transformation',
      'more properties of linear transformations',
      'kernel of a linear transformation'
    ),
  ),
  array(
    'date' => '2012-03-27',
    'type' => 'lecture',
    'cls' => 'review',
    'topics' => 'review',
    'details' => array(
      '<a href="materials.php#lecture17">lecture notes (practice problems)</a>'
    ),
  ),
  array(
    'date' => '2012-03-29',
    'type' => 'midterm exam',
    'cls' => 'midterm',
    'topics' => '',
    'details' => array(),
  ),
  array(
    'date' => '2012-04-03',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'linear<br/>transformations',
    'details' => array(
      'review of midterm questions'
    ),
  ),
  array(
    'date' => '2012-04-04',
    'type' => '',
    'cls' => 'assignmentdate',
    'topics' => '',
    'details' => array('<b><a href="materials.php?hw=4">assignment #4</a> posted</b>'),
  ),
  array(
    'date' => '2012-04-05',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'linear<br/>transformations',
    'details' => array(
      '<a href="materials.php#lecture18">lecture notes</a>',
      'projections as linear transformations'
    ),
  ),
  array(
    'date' => '2012-04-10',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'applications to<br/>linear systems',
    'details' => array(
      '<a href="materials.php#lecture19">lecture notes</a>',
      'linear transformations in applications',
      '<b>span</b>, <b>dim</b>, &perp;, <b>ker</b>, and <b>im</b> in applications',
      'examples
      <ul>
        <li>observable systems</li>
        <li>compression and encryption</li>
      </ul>'
    ),
  ),
  array(
    'date' => '2012-04-12',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'applications to<br/>linear systems',
    'details' => array(
      '<b><a href="materials.php?hw=4">assignment #4</a> due</b>',
      '<a href="materials.php#lecture20">lecture notes</a>',
      'examples
      <ul>
        <li>encryption and error recovery</li>
        <li>adjacency matrices</li>
      </ul>'
    ),
  ),
  array(
    'date' => '2012-04-17',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'applications to<br/>linear systems',
    'details' => array('<a href="materials.php#lecture21">lecture notes</a>'),
  ),
  array(
    'date' => '2012-04-19',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'applications to<br/>linear systems',
    'details' => array('<b><a href="materials.php?hw=5">assignment #5</a> posted</b>'),
  ),
  array(
    'date' => '2012-04-24',
    'type' => 'lecture',
    'cls' => 'lecture',
    'topics' => 'eigenvectors & <br/> eigenvalues',
    'details' => array(
      '<a href="materials.php#lecture22">lecture notes</a>',
      'related readings [Lay 2003]: 4.9, 5.2'
    ),
  ),
  array(
    'date' => '2012-04-26',
    'type' => 'lecture',
    'cls' => 'review',
    'topics' => 'review',
    'details' => array('<a href="materials.php#lecture23">lecture notes</a>'),
  ),
  
  array(
    'date' => '2012-04-29',
    'type' => '',
    'cls' => 'assignmentdate',
    'topics' => '',
    'details' => array('<b><a href="materials.php?hw=5">assignment #5</a> due</b>'),
  ),
  array(
    'date' => '2012-05-01',
    'type' => 'lecture',
    'cls' => 'review',
    'topics' => 'review',
    'details' => array('<a href="materials.php#lecture24">lecture notes (practice problems)</a>'),
  ),
  array(
    'date' => '2012-05-09<br/>Wed. 3-5 PM',
    'type' => 'final exam',
    'cls' => 'final',
    'topics' => '',
    'details' => array(),
  ),
);

?>

<html>
 <head>
 <title>BU CAS MA 142 Spr 2012</title>
 <style>
  body { font-family: Verdana,Arial,Sans-serif; font-size:12px; }
  a { text-decoration:none; color:#AC701E; }
  a:hover { text-decoration:underline; color:firebrick; }
  #container { margin: 8px; }
  #info { margin: 8px; float:left; display:inline-block; }
  #info .lbl { color:#888888; }
  #schedule {
    /* max-width:400px;*/
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
   <br/><b>Mathematics 142 - Introduction to Linear Algebra</b>
   <br/>Tue. & Thu., 3:30 - 5:00 PM in MCS B23
   <br/>
   <br/>
   <ul class="info_items">
    <li><span class="lbl">instructor:</span> <a href="http://cs-people.bu.edu/lapets">Andrei Lapets</a> (<a href="mailto:lapets@bu.edu">lapets@bu.edu</a>, MCS 176)</li>
    <li><span class="lbl">office hours:</span> Mon. 3-4 PM; Fri. 12-2 PM <b>MCS B24</b></li>
    <li><span class="lbl">mailing list (questions/discussion):</span> <a href="mailto:casma142a1-l@bu.edu">casma142a1-l@bu.edu</a></li>
   </ul>
   <br/>
   <ul class="info_items">
    <li><span class="lbl">homework assignment policies:</span>
     <br/>&nbsp;&nbsp; <span class="lbl">submission:</span> email by 11:59 PM to <a href="mailto:lapets@bu.edu">lapets@bu.edu</a>
     <br/>&nbsp;&nbsp; <span class="lbl">collaboration:</span> list all collaborators
     <br/>&nbsp;&nbsp; <span class="lbl">lateness</span>: -10 points per day, 5 days maximum
    </li>
   </ul>
   <br/>
   <ul class="info_items">
    <li><span class="lbl">course grade:</span>
     <br/>&nbsp;&nbsp; 50% hw + 50% max{final, avg{mid<sub>1</sub>, mid<sub>2</sub>, final}}</li>
    </li>
   </ul>
   <br/>
   <ul class="info_items">
    <li><span class="lbl">course materials:</span>
     <br/>&nbsp;&nbsp; <a href="materials.php">lecture notes</a> (with assignments and review problems)
     <br/>&nbsp;&nbsp; <a href="http://www.pearsonhighered.com/educator/product/Linear-Algebra-and-Its-Applications/9780321385178.page">recommended textbook</a> (related readings are optional)
     <br/>&nbsp;&nbsp; <b><a href="materials.php?hw=1">assignment #1</a></b>
     <br/>&nbsp;&nbsp; <b><a href="materials.php?hw=2">assignment #2</a></b>
     <br/>&nbsp;&nbsp; <b><a href="materials.php?hw=3">assignment #3</a></b>
     <br/>&nbsp;&nbsp; <b><a href="materials.php?hw=4">assignment #4</a></b>
     <br/>&nbsp;&nbsp; <b><a href="materials.php?hw=5">assignment #5</a></b>
     <br/>&nbsp;&nbsp; <b><a href="exams/practice.pdf">practice final (with solutions)</a></b>
    </li>
   </ul>
   <br/>
   <ul class="info_items">
    <li><span class="lbl">automated verifier for checking assignments:</span><br/>
        (all versions are listed so that any potential issues with<br/>
         updates do not interfere with work)
     <br/>&nbsp;&nbsp; <a href="aartifact/">version 142.2012.9 (latest)</a>
     <br/>&nbsp;&nbsp; <a href="aartifact8/">version 142.2012.8</a>
     <br/>&nbsp;&nbsp; <a href="aartifact7/">version 142.2012.7</a>
     <br/>&nbsp;&nbsp; <a href="aartifact6/">version 142.2012.6</a>
    </li>
   </ul>
   <br/>
   <ul class="info_items">
    <li><a href="http://www.bu.edu/cas/students/undergrad-resources/code/">academic conduct code</a></li>
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
         echo '<td style="color:#AAAAAA; font-style:italic;">'.$entry['date'].'</td>';
       else
         echo '<td>'.$entry['date'].'</td>';

       if ($entry['type'] == 'lecture') {
         if ($entry['topics'] == '')
           echo '<td><span class="lecture_label">'.$entry['type'].'</span></td>';
         else       
           echo '<td><span class="lecture_label">'.$entry['type'].':</span><br/>'.$entry['topics'].'</td>';
       } else
         echo '<td>'.$entry['type'].'</td>';

       echo '<td><ul>';
       foreach ($entry['details'] as $item)
         echo '<li>'.$item.'</li>';
       echo '</ul></td>';
       echo '</tr>';
     }
   ?>
  </table>

 </div>
 </body>
</html>
