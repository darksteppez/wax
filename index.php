<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="container">

            <header>

                <div class="row">

                    <div class="col-md-12">

                        <h1 class="text-center">Yitsy's<br/>Wax-ulator</h1>

                    </div>

                </div>

            </header>

            <section class="top-results">

                <div class="row">

                    <div class="col-md-12">

                        <h3>Results <span class="btn btn-danger clear-results">CLEAR</span></h3>

                        <ul class="results-list">

                            <li class="results-item">Total Wax: <span class="results-single wax-results"></span></li>

                            <li class="results-item">Total Oil: <span class="results-single oil-results"></span></li>

                        </ul>

                    </div>

                </div>

            </section>

            <section class="top-form">

                <div class="row">

                    <div class="col-md-12">

                        <h2>Add Measurements:</h2>

                        <form name="init-measurements" method="POST">

                            <label for="liquid">Liquid Size</label>

                            <div class="row">

                                <div class="col-md-4 col-sm-8 col-xs-7">

                                    <div class="measurement-row__container">

                                        <div class="row measurement-row last">

                                            <div class="col-md-12 co-sm-12 col-xs-12">

                                                <div class="input-group">

                                                    <input type="number" name="liquid" placeholder="oz" class="liquid-input form-control" pattern="[0-9]*">

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-2 col-sm-2 col-xs-5">

                                    <button class="btn btn-info add-row"><span class="fa fa-plus"></span></button> <button class="btn btn-info subtract-row"><span class="fa fa-minus"></span></button>

                                </div>

                            </div>

                            <div class="row oil-row">

                                <div class="col-md-2 co-sm-4 col-xs-12">

                                    <div class="input-group">

                                        <label for="oil">Percentage of Oil</label>

                                        <input type="number" name="oil" placeholder="Numbers Only!" class="oil-input form-control" value="15" pattern="[0-9]*">

                                    </div>

                                </div>

                            </div>

                            <div class="row waxulate-row">

                                <div class="col-md-2 co-sm-2 col-xs-12">

                                    <div class="input-group">

                                        <button id="calculate" name="submit" class="btn btn-success">WAXULATE</button>

                                    </div>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </section>

        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/plugins.js" type="text/javascript"></script>
        <script src="js/main.js" type="text/javascript"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
