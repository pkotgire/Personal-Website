<?php
require_once 'master.php';

$body = <<<EOBODY
<!-- Picture and About Me -->
<div class="row">
  <div class="col-xs-4">
    <a href="http://github.com/pkotgire">
      <img src="portrait.jpg" height="350" width="350">
    </a>
  </div>
  <div class="col-xs-8">
      <header>
        <h1 id="heading1">About Me</h1>
      </header>
      <p class="about-me">
        I am an undergraduate student at the University of Maryland pursuing my bachelors degree in Computer Science. I am currently in my 3rd year and plan on graduating in May 2019. My interests are in software development, specifically in back-end programming. Currently I am a Teaching Assistant for CMSC 132 - Object Oriented Programming. I assist students in this class with projects and assignments as well as grade materials.
      </p>
      <h3 style="display: inline">Relevant Coursework</h3>
      <span style="display: inline" class="glyphicon glyphicon-education"</span>
      <ol>
        <li>Data Structures</li>
        <li>Computer and Network Security</li>
        <li>Database Design</li>
        <li>Introduction to Data Science</li>
      </ol>
  </div>
</div>

<!-- Skills -->
<div class="row">
  <div class="col-xs-6">
      <header>
        <h2>Skills</h2>
      </header>

      <div class="table-responsive">
          <table class="table table-bordered table-striped table-hover table-condensed text-center">
              <thead>
                  <th class="text-center">Language</th>
                  <th class="text-center">Proficiency</th>
              </thead>

              <tbody>
                  <tr><td>Java</td><td>Advanced</td></tr>
                  <tr><td>C</td><td>Intermediate</td></tr>
                  <tr><td>Python</td><td>Intermediate</td></tr>
                  <tr><td>HTML/CSS</td><td>Intermediate</td></tr>
              </tbody>
          </table>
      </div>
  </div>
</div>
EOBODY;

echo generatePage($body, "Prathamesh Kotgire");
?>
