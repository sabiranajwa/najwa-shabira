<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PUSAT PENULISAN BY NAJWA</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0 auto;
            padding: 0;
            background-color:white;
            width: 60%;

        }
        header {
            background: slategrey;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        .container {
            width: auto;
            margin: auto;
            overflow: hidden;
        }
        h1 {
            margin: 20px 0;
        }

        .menu {
            background-color: darkgrey;
            width: 100%;
            height: 100% auto;
            float: left;
         }
        ul{
            overflow: hidden;
         }
        ul li{
            list-style-type: none;
            display: inline;
            margin-inline: 10px;
         }
        .content {
            width: 100%;
            height: 100% auto;
            background: #FAD0C9;
            padding: 20px;
            border-radius: 5px;
            float: left;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        footer {
            text-align: center;
            padding: 20px 0;
            background: slategrey;
            color: white;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>SELAMAT DATANG <br> DI WEBSITE PUSAT PENULISAN BY NAJWA</h1>
    </header>
    <div class="container">
        <div class="menu">
               <ul>
                    <li><a href="?page=home.php">Home</a></li>
                    
                    <li><a href="?page=view_data">Lihat Stok</a></li>
                    
                     <li><a href="?page=add_data">Input Stok</a></li>

               </ul>
          </div>
        <div class="content">
            <p>
                    <?php 
                    error_reporting(0);
                    switch($_GET['page']) {     
                         default:
                         include "home.php";
                         break;
                    case "add_data";
                    include "add_data.php";
                    break;
                    case "view_data";
                    include "view_data.php";
                    break;
                    case "proses";
                    include "proses.php";
                    break;
                    case "edit";
                    include "edit.php";
                    break;
                     } 
                     ?>

               </p>
        </div>
        
    </div>
    <footer>
        <p>&copy; 42423013_najwa <br>Website Kami. Semua hak dilindungi.</p