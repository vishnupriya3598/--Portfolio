<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Vishnupriya portfolio</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="ThemeZaa">
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <meta name="description" content="Elevate your online presence with Crafto - a modern, versatile, multipurpose Bootstrap 5 responsive HTML5, SCSS template using highly creative 52+ ready demos.">
        <!-- favicon icon -->
        <link rel="shortcut icon" href="assets/images/favicon.png">
        <link rel="apple-touch-icon" href="assets/images/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png">
        <!-- google fonts preconnect -->
        <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" href="assets/css/vendors.min.css"/>
        <link rel="stylesheet" href="assets/css/icon.min.css"/>
        <link rel="stylesheet" href="assets/css/style.css"/>
        <link rel="stylesheet" href="assets/css/responsive.css"/>
        <link rel="stylesheet" href="assets/demos/hosting/hosting.css" />
        <style>
                                /* Skills Section Styling */
                .skill-item {
                text-align: center;
                margin-bottom: 20px;
                }

                .skill-icon {
                width: 150px;
                height: 150px;
                margin-bottom: 10px;
                }

                .progress-bar {
                width: 100%;
                background-color: #f3f3f3;
                border-radius: 8px;
                height: 8px;
                margin: 5px 0;
                }

                .progress {
                height: 100%;
                background-color: #4caf50; /* Green color for progress */
                border-radius: 8px;
                }

                /* For text styling */
                h5 {
                font-size: 26px;
                font-weight: 600;
                color: white;
                margin-top: 10px;
                }
                .button1 i {
           
           margin: 0 15px;
           font-size: 30px; 
           cursor: pointer; 
           transition: color 0.3s ease; 
           margin-left: 20px;
           
       }
       
       .button1 i:hover {
           color: rgb(67, 153, 211); 
       }

        </style>
</heae>
<body data-mobile-nav-style="full-screen-menu" data-mobile-nav-bg-color="">
        @include('includes.header')
        @yield('content')
        @include('includes.script')
</body>