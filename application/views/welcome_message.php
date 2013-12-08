<head>
    <meta charset="utf-8">
    <title>BookShelf from BetaTurtle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Loading Bootstrap -->
    <link href="<?=base_url('assets/bootstrap/css/bootstrap.css')?>" rel="stylesheet">
    <!-- Loading Flat UI -->
    <link href="<?=base_url('assets/css/flat-ui.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/css/demo.css')?>" rel="stylesheet">

    <link rel="shortcut icon" href="assets/images /favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="<?=base_url('assets/js/html5shiv.js')?>"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="demo-headline">
        <h1 class="demo-logo">
          <div class="logo"></div>
          BookShelf
          <small>An initiative from theBetaTurtle</small>
          
      
        </h1><br/>
        <br/>
        <button data-toggle="modal" data-target="#signin" class="btn btn-block btn-lg btn-inverse" style="
    width: 20%;
    margin: 0 auto;
">Sign in</button>
<div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

        <h4 class="modal-title" id="myModalLabel">Sign in with...</h4>
      </div>
      <div class="modal-body">
         
<div class="row">
  <div class="col-xs-6">
    <a href="<?=base_url('index.php/auth/session/google')?>" class="btn btn-block btn-lg btn-danger">Google</a>
  </div>
  <div class="col-xs-6">
    <a href="<?=base_url('index.php/auth/session/facebook')?>" class="btn btn-block btn-lg btn-inverse">Facebook</a>
  </div>
</div>
      </div>
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
      </div>
      
    </div>

<footer>
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h3 class="footer-title">Subscribe</h3>
            <p>Do you like what we are doing?<br/>
              Subscribe to betaturtle news and updates to stay tuned on great applications.<br/>
             
            </p>

           
          </div> <!-- /col-md-7 -->

          <div class="col-md-5">
            <div class="footer-banner">
              <h3 class="footer-title">Who are we?</h3>
              <ul>
                <li>eh?</li>
                <li>what?</li>
              </ul>
              Go to: <a href="http://betaturtle.co.nr/" target="_blank">Betaturtle.com</a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
    <!-- Load JS here for greater good =============================-->
    <script src="<?=base_url('assets/js/jquery-1.8.3.min.js')?>"></script>
    <script src="<?=base_url('assets/js/jquery-ui-1.10.3.custom.min.js')?>"></script>
    <script src="<?=base_url('assets/js/jquery.ui.touch-punch.min.js')?>"></script>
    <script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?=base_url('assets/js/bootstrap-select.js')?>"></script>
    <script src="<?=base_url('assets/js/bootstrap-switch.js')?>"></script>
    <script src="<?=base_url('assets/js/flatui-checkbox.js')?>"></script>
    <script src="<?=base_url('assets/js/flatui-radio.js')?>"></script>
    <script src="<?=base_url('assets/js/jquery.tagsinput.js')?>"></script>
    <script src="<?=base_url('assets/js/jquery.placeholder.js')?>"></script>
    <script src="<?=base_url('assets/js/jquery.stacktable.js')?>"></script>
    <script src="http://vjs.zencdn.net/4.1/video.js"></script>
    <script src="<?=base_url('assets/js/application.js')?>"></script>
  </body>
</html>
