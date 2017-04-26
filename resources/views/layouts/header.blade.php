<!DOCTYPE html>
  <html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="The Esavex A multi part Applications">
        <meta name="author" content="Eric Ku From Itroupe Ltd">

        <title>{{ config('app.name') }}</title>
        
        <!-- Dropzone css -->
        <link href="./assets/dashboard_assets/plugins/dropzone/dropzone.css" rel="stylesheet" type="text/css" />
        <link href="./assets/dashboard_assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="assets/back_assets/css/bootstrap-fileupload.min.css" type="text/css" />
        <!-- DataTables -->
        <link href="./assets/dashboard_assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <link href="./assets/dashboard_assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="./assets/dashboard_assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="./assets/dashboard_assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="./assets/dashboard_assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="./assets/dashboard_assets/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
        <link href="./assets/dashboard_assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="./assets/dashboard_assets/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="./assets/dashboard_assets/plugins/morris/morris.css">

        <link href="./assets/dashboard_assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="./assets/dashboard_assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="./assets/dashboard_assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="./assets/dashboard_assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="./assets/dashboard_assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="./assets/dashboard_assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <link href="./assets/switchery/switchery.min.css" rel="stylesheet" />
        <link href="./assets/switchery/switchery.js" rel="stylesheet" />
                <!-- Plugins css-->
        <link href="./assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
        <link href="./assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" />
        <link href="./assets/plugins/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />
        <link href="./assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="./assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
        <link href="./assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets/js/modernizr.min.js"></script>
<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-69506598-1', 'auto');
          ga('send', 'pageview');
        </script>



        <script src="./assets/dashboard_assets/js/modernizr.min.js"></script>
        <script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-69506598-1', 'auto');
          ga('send', 'pageview');
        </script>
    </head>
    <body class="fixed-left">
        <!-- Begin page -->
        <div id="wrapper">
            <!-- Top Bar Start -->
            <div class="topbar">
              <!-- Button mobile view to collapse sidebar menu -->
              <div class="navbar navbar-default" role="navigation">
                  <div class="container">
                      <div class="">

                          <ul class="nav navbar-nav navbar-right pull-right">
                              
                              <li class="dropdown top-menu-item-xs">
                                  <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                    <img src="uploads/users/{{Auth::user()->profile_pic}}" alt="user-img" class="img-circle"> </a>
                                  <ul class="dropdown-menu">
                                      <li><a href="javascript:void(0)">Hello {{Auth::user()->name}}</a></li>
                                      <li><a href="javascript:void(0)"><i class="ti-user m-r-10 text-custom"></i> Profile</a></li>
                                      <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                                          <i class="ti-power-off m-r-10 text-danger"></i>
                                        Logout
                                        </a>
                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          {{ csrf_field() }}
                                          </form>
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                      </div>
                      <!--/.nav-collapse -->
                  </div>
              </div>
          </div>
          <!-- Top Bar End -->

