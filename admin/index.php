<?php
require_once('../koneksi.php');
require_once('sesi_admin.php');
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin POLKESMA</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">

        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                                <div class="m-b-md text-center">
                                    <img alt="image" class="img-circle" src="logobem.png" width="140px" />

                                    <div><a href="https://fikti.bem.gunadarma.ac.id" rel="nofollow" target="_blank">
                                            BEM FIKTI UG </a></div>
                                </div>
                            </span>
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold" style="color:white;">Admin POLKESMA</strong>
                        </div>
                        <div class="logo-element">
                            BEM FIKTI
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                        <form role="search" class="navbar-form-custom" action="">

                        </form>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">

                        <li>
                            <a href="?ak=logout">
                                <i class="fa fa-sign-out"></i>Log out
                            </a>
                        </li>
                    </ul>

                </nav>
            </div>
            <?php
            require('view/tahap.php');
            ?>


            <div class="footer">
                <div>
                    <p title="Farhan"><center><strong>Maintained by Biro PTI 2022/2022</strong></center></p>
                </div>
            </div>

        </div>
    </div>



    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="js/plugins/dataTables/datatables.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [{
                        extend: 'copy'
                    },
                    {
                        extend: 'csv'
                    },
                    {
                        extend: 'excel',
                        title: 'Data MUARA'
                    },
                    {
                        extend: 'pdf',
                        title: 'Data MUARA'
                    },

                    {
                        extend: 'print',
                        customize: function(win) {
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                        }
                    }
                ]

            });

        });
    </script>

</body>

</html>