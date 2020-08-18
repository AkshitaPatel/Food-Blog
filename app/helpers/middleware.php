<?php


function usersOnly($redirect = '/index.php'){

  if(empty($_SESSION['id'])){
    $_SESSION['message'] = 'You need to log in first';
    $_SESSION['type'] = 'error';
    header('location: ' . $_SERVER['DOCUMENT_ROOT']. "/Blog" . $redirect);
    exit(0);
  }
}


function adminOnly($redirect = '/index.php'){
  if(empty($_SESSION['id']) || empty($_SESSION['admin'])){
    $_SESSION['message'] = 'You need to log in first';
    $_SESSION['type'] = 'error';
    header('location: ' . $_SERVER['DOCUMENT_ROOT']. "/Blog" . $redirect);
    exit(0);
  }

}


function guestsOnly($redirect = '/index.php'){
  if(empty($_SESSION['id'])){

    header('location: ' . $_SERVER['DOCUMENT_ROOT']. "/Blog" . $redirect);
    exit(0);
  }

}


 ?>
