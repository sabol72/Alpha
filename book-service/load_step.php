<?php
session_start();

if (isset($_POST['stepChange'])) {
  $stepChange = (int)$_POST['stepChange'];

  // Update current step based on step change
  $_SESSION['currentStep'] += $stepChange;

  // Load content of new step
  switch ($_SESSION['currentStep']) {
    case 1:
      include 'step1.php';
      break;
    case 2:
      include 'step2.php';
      break;
    case 3:
      include 'step3.php';
      break;
    case 4:
      include 'step4.php';
      break;
    case 5:
      include 'step5.php';
      break;
    default:
      echo "Invalid step.";
      break;
  }
}
?>
