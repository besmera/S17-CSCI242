<?php
require('Faculty.php');
require('Faculty2.php');

$faculty1 = new Faculty(); //Faculty.php
$faculty2 = new Faculty(); //Faculty2.php

$faculty1->doWork();
$faculty2->doOtherWork();
