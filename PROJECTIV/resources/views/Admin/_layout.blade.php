
 <!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Mannat Themes">
        <meta name="keyword" content="">

        <title>FRESH FOOD</title>
        <style>
    #abuttonv{
      float:right;
    }
    #abuttonv a {
      background-color: #fff;
      border: 1px solid #ddd;
      box-sizing: border-box;
      color: blue;
      cursor: pointer;
      display: inline-block;
      font-family: din-round,sans-serif;
      font-size: 15px;
      font-weight: 700;
      padding: 10px 12px;
      text-align: center;
      width: 100%;
    }
      #abuttonv li.active > a:not(.page-link),
      #abuttonv li.active > a:not(.page-link):hover,
      #abuttonv li.active > a:not(.page-link):focus {
      border-color: #696cff;
      background-color: #696cff;
      color: #fff;
      box-shadow: 0 0.125rem 0.25rem rgba(105, 108, 255, 0.4);
    }
    /* #abuttonv a:first-child{
      border-top-left-radius: 25px;
      border-bottom-left-radius: 25px;
    }
    #abuttonv a:last-child{
      border-top-right-radius: 25px;
      border-bottom-right-radius: 25px;
    } */
    </style>

        <!-- Theme icon -->
        <link rel="shortcut icon" href="/Admin/assets/images/favicon.ico">

        <link href="/Admin/assets/plugins/morris-chart/morris.css" rel="stylesheet">
        <!-- Theme Css -->
        <link href="/Admin/assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="/Admin/assets/css/slidebars.min.css" rel="stylesheet">
        <link href="/Admin/assets/css/icons.css" rel="stylesheet">
        <link href="/Admin/assets/css/menu.css" rel="stylesheet" type="text/css">
        <link href="/Admin/assets/css/style.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>


        <script src="/Adminjs/angular.min.js"></script>
        
    </head>

    <body class="sticky-header"  ng-app="myapp" ng-controller="mycontroller">
        <section>
            <!-- sidebar left start-->
            @include('includes.sidebar')
           <!-- sidebar left end-->

            <!-- body content start-->
            <div class="body-content">
                <!-- header section start-->
             @include('includes.header')
                <!-- header section end-->

                <div class="container-fluid">
                   
              <!--end row-->
                                          
                    @yield('content')
                </div><!--end container-->

                <!--footer section start-->
                <footer class="footer">
                    2018 &copy; Syntra.
                </footer>
                <!--footer section end-->
                <!-- Right Slidebar start -->
           
                <!--end Right Slidebar-->
            </div>
            <!--end body content-->
        </section>

        <!-- jQuery -->
        <script src="/Admin/assets/js/jquery-3.2.1.min.js"></script>
        <script src="/Admin/assets/js/popper.min.js"></script>
        <script src="/Admin/assets/js/bootstrap.min.js"></script>
        <script src="/Admin/assets/js/jquery-migrate.js"></script>
        <script src="/Admin/assets/js/modernizr.min.js"></script>
        <script src="/Admin/assets/js/jquery.slimscroll.min.js"></script>
        <script src="/Admin/assets/js/slidebars.min.js"></script>
        <!--plugins js-->
        <script src="/Admin/assets/plugins/counter/jquery.counterup.min.js"></script>
        <script src="/Admin/assets/plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="/Admin/assets/plugins/sparkline-chart/jquery.sparkline.min.js"></script>
        <script src="/Admin/assets/pages/jquery.sparkline.init.js"></script>

        <script src="/Admin/assets/plugins/chart-js/Chart.bundle.js"></script>
        <script src="/Admin/assets/plugins/morris-chart/raphael-min.js"></script>
        <script src="/Admin/assets/plugins/morris-chart/morris.js"></script>
        <script src="/Admin/assets/pages/dashboard-init.js"></script>


        <!--app js-->
        <script src="/Admin/assets/js/jquery.app.js"></script>
        <script src="/Adminjs/fontawesome.min.js"></script>

       
<script src="https://rawgit.com/michaelbromley/angularUtils-pagination/master/dirPagination.js"></script>
</html>
