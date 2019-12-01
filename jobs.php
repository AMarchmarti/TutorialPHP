<?php 

$jobs = [
    [
      'title' => 'PHP Developer',
      'description' => 'This is an awesome job!!!',
      'visible' => true,
      'months' => 16
    ],
    [
      'title' => 'Python Dev',
      'visible' => false,
      'months' => 14
    ],
    [
      'title' => 'Devops',
      'visible' => true,
      'months' => 5
    ],
    [
      'title' => 'Node Dev',
      'visible' => true,
      'months' => 24
    ],
    [
      'title' => 'Frontend Dev',
      'visible' => true,
      'months' => 3
    ]
  ];

  function getDuration($months) {
    $years = floor($months / 12);
    $extraMonths = $months % 12;
  
    return "$years years $extraMonths months";
  }
  
  function printJob($job) {
    if($job['visible'] == false) {
      return;
    }
  
    echo '<li class="work-position">'.
    '<h5>' . $job['title'] . '</h5>'.
    '<p>' . $job['description'] . '</p>'.
     '<p>' . getDuration($job['months']) . '</p>'.
     '<strong>Achievements:</strong>'.
     '<ul>'.
    '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>'.
     '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>'.
     '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>'.
     '</ul>'.
     '</li>';
  }