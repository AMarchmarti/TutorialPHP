<?php

require 'app/Models/Job.php';
require 'app/Models/Project.php';
require_once 'app/Models/Printeable.php';

$job1 = new Job('PHP Developer', 'This is an awesome job!!!');
$job1->months = 16;

$job2 = new Job('Python Developer', 'This is an awesome job!!!');
$job2->months = 24;

$job3 = new Job('Devops', 'This is an awesome job!!!');
$job3->months = 32;

$project1 = new Project('Project 1', 'Description 1');

$jobs = [
    $job1,
    $job2,
    $job3
  ];

$projects = [
    $project1
];
  
function printElement($job) {
    if($job->visible == false) {
      return;
    }

$job1 = new Job('PHP Developer', 'This is an awesome job!!!');
$job1->months = 16;

$job2 = new Job('Python Developer', 'This is an awesome job!!!');
$job2->months = 24;

$job3 = new Job('Devops', 'This is an awesome job!!!');
$job3->months = 32;

$jobs = [
    $job1,
    $job2,
    $job3
  ];
  
  function printJob(Printeable $job) {
    if($job->visible == false) {
      return;
    }
    echo '<li class="work-position">'.
    '<h5>' . $job->getTitle() . '</h5>'.
    '<p>' . $job->getDescription() . '</p>'.
     '<p>' . $job->getDurationAsString(). '</p>'.
     '<strong>Achievements:</strong>'.
     '<ul>'.
    '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>'.
     '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>'.
     '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>'.
     '</ul>'.
     '</li>';
  }