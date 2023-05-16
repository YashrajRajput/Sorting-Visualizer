<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting Visualizer</title>
    <link rel="stylesheet" href="home.css">
    
</head>
<body>
    <div class="container">
       <div class="navbar">
          <img src="./logo.png" class="logo">
          <nav>
              <ul>
                  <li><a href="./Home.php">HOME</a></li>
                  <li><a href="./AboutUs.php">ABOUT</a></li>
                  <li><a href="./connect.php">CONTACT US</a></li>
              </ul>
          </nav>
        
    </div>
    <div class="row">
        <div class="col">
            <h1>Sorting Visulaizer</h1>
            <p>Lets make learing fun!</p>
            <button onclick="window.location.href='index.php';" class="btn">Start Sorting !</button>
        </div>
    <div class="col">
        <div class="card card1">
            <h5>BUBBLE SORT</h5>
            <button onclick="window.location.href='bubblesort.php';"></button>
            <p>  </p>
        </div>
        <div class="card card2">
            <h5>INSERTION SORT</h5>
            <button onclick="window.location.href='insertion.php';"></button>
            <p></p>
        </div>
        <div class="card card3">
            <h5>HEAP SORT</h5>
            <button onclick="window.location.href='heapsort.php';"></button>
            <p></p>
        </div>
        <div class="card card4">
            <h5>SELECTION SORT</h5>
            <button onclick="window.location.href='selectionsort.php';"></button>
            <p></p>
        </div>
        <div class="card card5">
            <h5>MERGE SORT</h5>
            <button onclick="window.location.href='mergesort.php';"></button>
            <p></p>
        </div>
        <div class="card card6">
            <h5>QUICK SORT</h5>
            <button onclick="window.location.href='quicksort.php';"></button>
            <p></p>
        </div>
    </div>
</body>
</html>

<?php

?>
