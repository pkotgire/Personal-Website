<?php
require_once 'master.php';

$body = <<<EOBODY
<!-- Picture and About Me -->
<div class="row">
  <div class="col-xs-4">
    <img src="portrait.jpg" height="350" width="350">
  </div>
  <div class="col-xs-8">
      <header>
        <h1>Prathamesh Kotgire</h1>
      </header>

      <!-- Brief Description -->
      <ul>
      <li>Aspiring Software Engineer</li>
      <li>Computer Science student at the University of Maryland</li>
      <li>Undergraduate Teaching Assistant</li>
      </ul>

      <!-- About Me -->
      <h3>About Me</h3>
      <p class="about-me">
        I am an undergraduate student at the University of Maryland pursuing my bachelors degree in Computer Science. I am currently in my 3rd year and plan on graduating in May 2019. My interests are in software development, specifically in back-end programming. Currently I am a Teaching Assistant for CMSC 132 - Object Oriented Programming. I assist students in this class with projects and assignments as well as grade materials.
      </p>

      <!-- Relevant Skills Table -->
      <div class="row">
        <div class="col-xs-8">
          <header>
            <h3>Relevant Skills</h3>
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
                      <tr><td>SQL</td><td>Intermediate</td></tr>
                      <tr><td>Python</td><td>Intermediate</td></tr>
                      <tr><td>PHP/JavaScript</td><td>Intermediate</td></tr>
                      <tr><td>HTML/CSS</td><td>Intermediate</td></tr>
                      <tr><td>Ruby</td><td>Proficient</td></tr>
                      <tr><td>Prolog</td><td>Proficient</td></tr>
                      <tr><td>OCaml</td><td>Proficient</td></tr>
                  </tbody>
              </table>
          </div>
        </div>
      </div>
  </div>
</div>
EOBODY;

echo generatePage($body, "Prathamesh Kotgire");
?>
