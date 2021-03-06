<?php error_reporting(0); ?>
<!DOCTYPE HTML>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="apple-mobile-web-app-capable" content="yes">
   <title>Noorte - ja huvikeskus Ulei</title>
   <link rel="stylesheet" type="text/css" href="./assets/css/style.css" />
   <link rel="stylesheet" type="text/css" href="./assets/css/datatables.min.css"/>
   <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
   <script src="./assets/js/jquery-3.5.1.min.js"></script>
   <script type="text/javascript" src="./assets/js/pdfmake.min.js"></script>
   <script type="text/javascript" src="./assets/js/vfs_fonts.js"></script>
   <script type="text/javascript" src="./assets/js/jquery.dataTables.min.js"></script>
   <script type="text/javascript" src="./assets/js/datatables.min.js"></script>
   <script type="text/javascript" src="./assets/js/dataTables.buttons.min.js"></script>
   <script type="text/javascript" src="./assets/js/buttons.flash.min.js"></script>
   <script type="text/javascript" src="./assets/js/jszip.min.js"></script>
   <script type="text/javascript" src="./assets/js/buttons.html5.min.js"></script>
   <script type="text/javascript" src="./assets/js/buttons.print.min.js"></script>
   <script type="text/javascript" src="./assets/js/popper.min.js"></script>
   <script src="./assets/js/bootstrap.min.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="./assets/css/font-awesome.min.css" crossorigin="anonymous">
   <style>
       <?php if (!isset($_SESSION['UserData']['Username'])) : ?>
       .dt-buttons {
           display:none;
           visibility:hidden;
       }
       <?php else : ?>
        .dt-buttons {
           display:block;
           visibility:visible;
       }
       <?php endif ?>

       /* specific checkbox styling for Safari otherwise chebox don't render the same away as in other browser with touch functionality */
       input[type='checkbox'] {
          /* remove browser chrome */
          -webkit-appearance: none;
            -moz-appearance: none;
                  appearance: none;
          outline: none;
          /*add styling */
          position: relative;
          width: 2rem;
          height: 2rem;
          border: 2px solid #455A64;
          overflow: hidden;
          border-radius: 3px;
          box-shadow: inset 0 0 5px 0 rgba(0, 0, 0, 0.6);
          cursor: pointer;
        }

        input[type='checkbox']::before {
          content: '';
          color: #fff;
          position: absolute;
          top: 4px;
          right: 4px;
          bottom: 4px; 
          left: 4px;
          background-color: transparent;
          background-size: contain;
          background-position: center center;
          background-repeat: no-repeat;
          border-radius: 2px;
          -webkit-transform: scale(0);
                  transform: scale(0);
          -webkit-transition: -webkit-transform 0.25s ease-in-out;
          transition: -webkit-transform 0.25s ease-in-out;
          transition: transform 0.25s ease-in-out;
          transition: transform 0.25s ease-in-out, -webkit-transform 0.25s ease-in-out;
          /* base64 encoded to make things easier to show 
            normally you would use an image or a font
          */
          background-image: url("data:image/svg+xml;base64,PCEtLSBHZW5lcmF0ZWQgYnkgSWNvTW9vbi5pbyAtLT4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjQ0OCIgaGVpZ2h0PSI0NDgiIHZpZXdCb3g9IjAgMCA0NDggNDQ4Ij4KPHRpdGxlPjwvdGl0bGU+CjxnIGlkPSJpY29tb29uLWlnbm9yZSI+CjwvZz4KPHBhdGggZD0iTTQxNy43NSAxNDEuNWMwIDYuMjUtMi41IDEyLjUtNyAxN2wtMjE1IDIxNWMtNC41IDQuNS0xMC43NSA3LTE3IDdzLTEyLjUtMi41LTE3LTdsLTEyNC41LTEyNC41Yy00LjUtNC41LTctMTAuNzUtNy0xN3MyLjUtMTIuNSA3LTE3bDM0LTM0YzQuNS00LjUgMTAuNzUtNyAxNy03czEyLjUgMi41IDE3IDdsNzMuNSA3My43NSAxNjQtMTY0LjI1YzQuNS00LjUgMTAuNzUtNyAxNy03czEyLjUgMi41IDE3IDdsMzQgMzRjNC41IDQuNSA3IDEwLjc1IDcgMTd6Ij48L3BhdGg+Cjwvc3ZnPgo=");
        }

        input[type='checkbox']:checked::before {
          -webkit-transform: scale(2);
                  transform: scale(2);
        }
       </style>
  </head>
