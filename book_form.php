<?php
   $connection = mysqli_connect('localhost','root','','skuycation');

   if(isset($_POST['send'])){
      $nama_hotel = $_POST['nama_hotel'];
      $tipe = $_POST['tipe'];
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];

      $request = " insert into book_form(name, email, phone, address, location, guests, arrivals, leaving, nama_hotel, tipe) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving','$nama_hotel','$tipe') ";
      mysqli_query($connection, $request);

      header('location:book.php'); 

   }else{
      echo 'something went wrong please try again!';
   }
?>