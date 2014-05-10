<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistema de Inventario</title>
    <link rel="stylesheet" type= "text/css" href = "foundation/css/my_css.css">
    <link rel="stylesheet" href="foundation/css/foundation.css" />
    

    <script src="foundation/js/jquery-1.11.0.min.js"></script>
    <script src="foundation/js/jquery.js"></script>
    <script src="foundation/js/foundation.min.js"></script>
    <script src="foundation/js/foundation/foundation.js"></script>  
    <script src="foundation/js/foundation/foundation.orbit.js"></script> 
    <script src="foundation/js/vendor/modernizr.js"></script>      <!--script necesario para usar Foundation-->


  </head>
  <body>
    
    <!--header-->
    <div class ="row">
      <div class="large-12 columns">
        <div class="panel">
          <h1> <center>UNA IMAGEN</center></h1>
        </div>
      </div>
    </div>
    <!--Fin de header-->

    <!--principal-->
   <div class="row">
      <div class="large-12 columns">
   
          <div class="row">
            <div class="large-7 medium-7 small-5 columns">
             
                <div id="container"> 
                  <ul data-orbit id="lc" style="width:600px; height:300px;">
                    <li>
                      <img src="http://www.for-gamers.com.ar/blog/wp-content/uploads/2013/09/xbox-logo-600x300.jpg" alt="slide 1" />
                      <div class="orbit-caption">
                        Caption One.
                      </div>
                    </li>
                    <li >
                      <img src="http://www.kelsealittle.com/wp-content/uploads/2012/03/P0001_09-600x300.jpg" alt="slide 2" />
                      <div class="orbit-caption">
                        Caption Two.
                      </div>
                    </li>
                    <li>
                      <img src="http://flankright.com/wp-content/uploads/2013/10/test1.jpg" alt="slide 3" />
                      <div class="orbit-caption">
                        Caption Three.
                      </div>
                    </li>
                  </ul>

                  <!-- Navigation Arrows 
                  <a href="#" class="orbit-prev">Prev <span></span></a>
                  <a href="#" class="orbit-next">Next <span></span></a>-->

                  <!-- Slide Numbers 
                  <div class="orbit-slide-number">
                    <span>1</span> of <span>3</span>
                  </div> -->

                  <!-- Timer and Play/Pause Button--> 
                  <div class="orbit-timer">
                    <span></span>
                    <div class="orbit-progress"></div>
                  </div>
                </div>

          
            </div>
            <div class="large-5 medium-5 small-5 columns">
              <div class="row">
                <div class="large-8 large-offset-2 medium-8 medium-offset-2 small-8 columns small-offset-2">
                  <form>
                    <label>Login</label>
                    <input type="text" placeholder="Usuario" />

                    <label>Password</label>
                    <input type="password" placeholder="Contraseña" />
                  </form>
                </div>
              </div>

            </div>    
          </div>
        
      </div>
    </div>
    <!--fin de principal-->

    <div id="footer">
      <div class ="row">
        <div class="large-12 columns">
          <!--<div class="panel">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </div>-->

            <div class="row">
                <div class="large-3 medium-3 small-3 columns">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. 
                  </p>
                </div>

                <div class="large-3 medium-3 small-3 columns" style="border-left: 2px solid white">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>

                <div class="large-3 medium-3 small-3 columns" style="border-left: 2px solid white">
                   <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. </p>

                </div>

                <div class="large-3 medium-3 small-3 columns" style="border-left: 2px solid white">
                    <p style="color:white">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
        </div>      
      </div>
    </div>

    <div class ="row">
      <div class="large-12 columns">
          <h3> 
            <center>Derechos Reservados 2014</center>
          </h3>
    </div>
 

    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
