<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <!--getmdl-select-->
    <link rel="stylesheet" href="path_to/getmdl-select/getmdl-select.min.css">
    <script defer src="path_to/getmdl-select/getmdl-select.min.js"></script>
    <!-- Angular Material style sheet -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.8/angular-material.min.css">
    <!--  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Ticket Reservation</title>
  </head>

  <style>

  body{
    background: url('https://stmed.net/sites/default/files/minimalism-wallpapers-25255-6197636.jpg') center / cover;
    background-repeat: no-repeat;
    /* background-color: #FF4081; */
    font-family: 'Quicksand', sans-serif;
    width: 100%;
  }
  .quicksand-font{
    font-family: 'Quicksand', sans-serif;
  }
  .list-icon{
    color: #FFF;
    margin-left: -15px;
  }
  .mobile-menu{
    visibility: hidden;
  }
  .top-menu{
    top: 10px;
    right: 15px;
    position: fixed;
  }
  a.top-menu__items{
    margin-right: 20px;
    text-decoration: none;
    color: #FFF !important;
  }
  a.top-menu__items:hover{
    margin-right: 20px;
    text-decoration: none;
    color: #757575 !important;
  }
  .mdl-site__title{
    margin-top: 15%;
    color: #FFF;
  }
  .site-logo{
    left: 5px;
    top: 5px;
    position: fixed;
    color: #FFF;
  }
  @media (max-width: 480px) {
    .side-menu{
      visibility: hidden;
    }

  }
  .side-menu{
    margin-top: 25px;
    left : 0px;
    position: fixed;
    height: 100%;
  }
  a.mdl-list__item-icon{
    margin-left: 12px;
    text-decoration: none;
    color: #FFF !important;
  }
  a.mdl-list__item-icon:hover{
    margin-left: 12px;
    text-decoration: none;
    color: #757575 !important;
  }

  .reservation{
    padding:15px;
    background-color: #FFF;
    border-radius: 5px;
    color: #757575;
  }
  md-input-container{
    margin-left: 15px;
    margin-top: 15px;
    margin-bottom: 15px;
    width: 90%;
  }

  .getmdl-select{
    width: 100%;
  }
  .date-picker{
    margin-left: -20px;
  }
  .search-button{
    font-size: 16px;
  }

  .reservation-container{
    position: fixed;
    bottom: 0px;
    /* background-color: #FFF; */
    width: 100%;
    height: 64px;
  }
  </style>
  <body ng-app="myBookApp" ng-cloak>
