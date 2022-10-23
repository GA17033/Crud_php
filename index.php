<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracket/img/bracket-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracket">
    <meta property="og:title" content="Bracket">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Productos</title>

    <!-- vendor css -->
    <link href="./public/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="./public/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="./public/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="./public/lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">

    <link href="./public/lib/datatables/jquery.dataTables.css" rel="stylesheet">
    <link href="./public/datatables/buttons.dataTables.min.css" rel="stylesheet"/>

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="./public/css/bracket.css">
  </head>

  <body>

  
     

      <div class="br-pagebody">
        <div class="br-section-wrapper">
            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Productos</h6>
            <button id="btnnuevo" class="btn btn-outline-primary btn-block mg-b-10">Nuevo Registro</button>

            <div class="table-wrapper">
              <table id="producto_data" class="table display responsive nowrap">
                <thead>
                  <tr>
                  <th class="wd-15p">Id</th>
                    <th class="wd-15p">Nombre</th>
                    <th class="wd-15p">Descripcion</th>
                    <th class="wd-15p">Creacion</th>
                    
                    <th class="wd-15p"></th>
                    <th class="wd-20p"></th>
                  </tr>
                </thead>
                <tbody>

                </tbody>
              </table>
            </div>
        </div>
      </div>
    
    <?php require_once "view/modalmantenimiento.php";?>

    <script src="./public/lib/jquery/jquery.js"></script>
    <script src="./public/lib/popper.js/popper.js"></script>
    <script src="./public/lib/bootstrap/bootstrap.js"></script>
    <script src="./public/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="./public/lib/moment/moment.js"></script>
    <script src="./public/lib/jquery-ui/jquery-ui.js"></script>
    <script src="./public/lib/jquery-switchbutton/jquery.switchButton.js"></script>
    <script src="./public/lib/peity/jquery.peity.js"></script>
    <script src="./public/js/bracket.js"></script>

    <script src="./public/lib/datatables/jquery.dataTables.js"></script>
    <script src="./public/lib/datatables-responsive/dataTables.responsive.js"></script>

    <script src="./public/datatables/dataTables.buttons.min.js"></script>
    <script src="./public/datatables/buttons.html5.min.js"></script>
    <script src="./public/datatables/buttons.colVis.min.js"></script>
    <script src="./public/datatables/jszip.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script type="text/javascript" src="view/mntproducto.js"></script>
  </body>
</html>
