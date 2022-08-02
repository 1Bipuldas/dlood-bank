<?php require "config.php"; ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blood bank__Dashbord</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="assets/icon/fontawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col">



    <nav class="navbar navbar-expand-lg bg-info navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Blood Bank</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li>
            
          </li>
        </ul>
        <form class="d-flex" role="search" action="#" method="get">
          <select name="sdivision" class="form-select" aria-label="Default select example">
            <option value="">Please Select Division</option>
            <option value="Khulna">Khulna</option>
            <option value="Barisal Division">Barisal Division</option>
            <option value="Chittagong Division">Chittagong Division</option>
            <option value="Dhaka Division">Dhaka Division</option>
            <option value="Mymensingh Division">Mymensingh Division</option>
            <option value="Rajshahi Division">Rajshahi Division</option>
            <option value="Rangpur Division">Rangpur Division</option>
            <option value="Sylhet Division">Sylhet Division</option>
          </select>
          <select name="sbgroup" class="form-select" aria-label="Default select example">
            <option value="">Please Select Blood Group</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
          </select>
          <button class="btn btn-outline-light bg-primary text-light
          " type="submit" value="Search" name="search"><a href="serch.php" class="text-light ">Search</a></button>
        </form>
        <div class="ms-4">
          
          <div class="dropdown dropdown bg-secondary dropdown text-light">
        <button class="btn  dropdown-toggle text-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="assets/images/default-avatar.jpg" alt="" class="topbar-user-avater"><i class="fa-solid fa-user"></i> Mr. Sobuj
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="profile.php">Profile</a></li>
          <li><a class="dropdown-item" href="#">Settings</a></li>
          <li><a class="dropdown-item" href="#">Donation Date</a></li>
        </ul>
      </div>
        </div>
      </div>
    </div>
  </nav>