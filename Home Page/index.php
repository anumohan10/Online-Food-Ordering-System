<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>Foodiess</title>
        
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.7/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>




<link href="storestyle.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <!-- top navbar -->
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <a href="index.php" class="navbar-brand">Foodiess</a>
                <ul class="nav navbar-nav">
                    <li class="dropdown" id="accountmenu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                            <li><a href="vegpage.html">Veg</a></li>
                            <li><a href="nonvegpage.html">Non Veg</a></li>
                        </ul>
                        
                    </li>
                </ul>
                <div class="navright">
                    <a href="login.html" class="navbar-brand">Login</a>
                    <a href="signup.html" class="navbar-brand">Register</a>
                    <a href="aboutus.html" class="navbar-brand">About us</a>
                </div>
            </div>
            
        <!-- header -->
        <div id="headerWrapper">
            
            <div id="logotext"></div>
                
        </div>
        
        <div class="container-fluid">
            <div class="col-md-2"></div>
            
            <div class="col-md-8">
                <div class="row">
                    <h2 class="text-center">Specials</h2>
                    <div class="col-md-3">
                        <h4>Cheese burst pizza</h4>
                        <img src="pizza.jpg" alt="cheese burst pizza" class="img-thumb"/>
                        <p class="price">Price: 180 Rs</p>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
                    </div>
                    
                    <div class="col-md-3">
                        <h4>Burger</h4>
                        <img src="burger.jpg" alt="burger" class="img-thumb"/>
                        <p class="price">Price: 80 Rs</p>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-2">Details</button>
                    </div>
                    
                    <div class="col-md-3">
                        <h4>Chicken Biryani</h4>
                        <img src="biryani.jpg" alt="biryani" class="img-thumb"/>
                        <p class="price">Price: 150 Rs</p>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-3">Details</button>
                    </div>
                    
                    <div class="col-md-3">
                        <h4>Idli</h4>
                        <img src="idli.jpg" alt="Idli" class="img-thumb"/>
                        <p class="price">Price: 70 Rs</p>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-4">Details</button>
                    </div>
                    
                    <div class="col-md-3">
                        <h4>Stuffed parathas</h4>
                        <img src="stuffed-parathas.jpeg" alt="parathas" class="img-thumb"/>
                        <p class="price">Price: 100 Rs</p>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-5">Details</button>
                    </div>
                    
                    <div class="col-md-3">
                        <h4>Tandoori Chicken</h4>
                        <img src="tandoori-chicken.jpg" alt="tandoori" class="img-thumb"/>
                        <p class="price">Price: 130 Rs</p>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-6">Details</button>
                    </div>
                    
                    <div class="col-md-3">
                        <h4>Noodles</h4>
                        <img src="noodles.jpg" alt="noodles" class="img-thumb"/>
                        <p class="price">Price: 120 Rs</p>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-7">Details</button>
                    </div>
                    
                    <div class="col-md-3">
                        <h4>Sizzler</h4>
                        <img src="sizzler.jpg" alt="sizzler" class="img-thumb"/>
                        <p class="price">Price: 150 Rs</p>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-8">Details</button>
                    </div>
                </div>
            </div>
            
            <div class="col-md-2"></div>
            
        </div>
               <footer class="text-center" id="footer">&copy Copyright 2020-2022 Foodies dayout</footer>
                
               <!--Details Model -->
               <div class="modal fade details-1" id="details-1" tabindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true" data-backdrop="false">
                   <div class="modal-dialog modal-lg">
                       <div class="modal-content">
                       <div class="modal-header">
                           <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                           </button>
                           <h4 class="modal-title text-center">Cheese burst pizza</h4>
                           
                      </div>
                       <div class="modal-body">
                           <div class="container-fluid">
                               <div class="row">
                                   <div class="col-sm-6" >
                                       <div class="center-block" >
                                           <img src="pizza.jpg" alt="cheese burst pizza" class="details img-responsive">
                                       </div>
                                       
                                   </div>
                                   <div class="col-sm-6" >
                                       <h4>Details</h4>
                                       <p>Foodies dayout offers Mouth watering cheese burst pizzas which can make your pizza eating experience memorable.</p>
                                       <hr>
                                       <p>Price 180 rs</p>
                                       <form>
                                           <div class="form-group">
                                               <div class="col-xs-3">
                                                   <label for="quantity">Quantity:</label>
                                                   <input type="text" class="form-control" id="quantity" name="quantity">
                                               </div>
                                           </div>
                                       </form>
                                   </div>   
                                   
                               </div>
                           </div>
                       </div>
                       <div class="modal-footer">
                           <button class="btn btn-default" data-dismiss="modal">Close</button>
                           <button class="btn btn-warning" type="submit" onClick="window.location='login.html'"><span class="glyphicon glyphicon-shopping-cart"></span>Add to cart</button>
                       </div>
                       </div>
                   </div>
               </div>
               
               
               <div class="modal fade details-1" id="details-2" tabindex="-1" role="dialog" aria-labelledby="details-2" aria-hidden="true" data-backdrop="false">
                   <div class="modal-dialog modal-lg">
                       <div class="modal-content">
                       <div class="modal-header">
                           <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                           </button>
                           <h4 class="modal-title text-center">Burger</h4>
                           
                      </div>
                       <div class="modal-body">
                           <div class="container-fluid">
                               <div class="row">
                                   <div class="col-sm-6" >
                                       <div class="center-block" >
                                           <img src="burger.jpg" alt="burger" class="details img-responsive">
                                       </div>
                                       
                                   </div>
                                   <div class="col-sm-6" >
                                       <h4>Details</h4>
                                       <p>We all need to make time for a burger once. Grab this delicious burger before it sells out.</p>
                                       <hr>
                                       <p>Price 80 rs</p>
                                       <form>
                                           <div class="form-group">
                                               <div class="col-xs-3">
                                                   <label for="quantity">Quantity:</label>
                                                   <input type="text" class="form-control" id="quantity" name="quantity">
                                               </div>
                                           </div>
                                       </form>
                                   </div>   
                                   
                               </div>
                           </div>
                       </div>
                       <div class="modal-footer">
                           <button class="btn btn-default" data-dismiss="modal">Close</button>
                           <button class="btn btn-warning" type="submit" onClick="window.location='login.html'"><span class="glyphicon glyphicon-shopping-cart"></span>Add to cart</button>
                       </div>
                       </div>
                   </div>
               </div>
               
               <div class="modal fade details-1" id="details-3" tabindex="-1" role="dialog" aria-labelledby="details-3" aria-hidden="true" data-backdrop="false">
                   <div class="modal-dialog modal-lg">
                       <div class="modal-content">
                       <div class="modal-header">
                           <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                           </button>
                           <h4 class="modal-title text-center">Chicken Biryani</h4>
                           
                      </div>
                       <div class="modal-body">
                           <div class="container-fluid">
                               <div class="row">
                                   <div class="col-sm-6" >
                                       <div class="center-block" >
                                           <img src="biryani.jpg" alt="biryani" class="details img-responsive">
                                       </div>
                                       
                                   </div>
                                   <div class="col-sm-6" >
                                       <h4>Details</h4>
                                       <p>Need a feast of flavours !! 
                                       Grab this delicious Chicken Biryani at the best rates .</p>
                                       <hr>
                                       <p>Price 150 rs</p>
                                       <form>
                                           <div class="form-group">
                                               <div class="col-xs-3">
                                                   <label for="quantity">Quantity:</label>
                                                   <input type="text" class="form-control" id="quantity" name="quantity">
                                               </div>
                                           </div>
                                       </form>
                                   </div>   
                                   
                               </div>
                           </div>
                       </div>
                       <div class="modal-footer">
                           <button class="btn btn-default" data-dismiss="modal">Close</button>
                           <button class="btn btn-warning" type="submit" onClick="window.location='login.html'"><span class="glyphicon glyphicon-shopping-cart"></span>Add to cart</button>
                       </div>
                       </div>
                   </div>
               </div>
               
               <div class="modal fade details-1" id="details-4" tabindex="-1" role="dialog" aria-labelledby="details-4" aria-hidden="true" data-backdrop="false">
                   <div class="modal-dialog modal-lg">
                       <div class="modal-content">
                       <div class="modal-header">
                           <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                           </button>
                           <h4 class="modal-title text-center">Idli</h4>
                           
                      </div>
                       <div class="modal-body">
                           <div class="container-fluid">
                               <div class="row">
                                   <div class="col-sm-6" >
                                       <div class="center-block" >
                                           <img src="idli.jpg" alt="Idli" class="details img-responsive">
                                       </div>
                                       
                                   </div>
                                   <div class="col-sm-6" >
                                       <h4>Details</h4>
                                       <p>Celebrate & treat your taste buds to scrumptious and delectable Idli.</p>
                                       <hr>
                                       <p>Price 80 rs</p>
                                       <form>
                                           <div class="form-group">
                                               <div class="col-xs-3">
                                                   <label for="quantity">Quantity:</label>
                                                   <input type="text" class="form-control" id="quantity" name="quantity">
                                               </div>
                                           </div>
                                       </form>
                                   </div>   
                                   
                               </div>
                           </div>
                       </div>
                       <div class="modal-footer">
                           <button class="btn btn-default" data-dismiss="modal">Close</button>
                           <button class="btn btn-warning" type="submit" onClick="window.location='login.html'"><span class="glyphicon glyphicon-shopping-cart"></span>Add to cart</button>
                       </div>
                       </div>
                   </div>
               </div>

        <div class="modal fade details-1" id="details-5" tabindex="-1" role="dialog" aria-labelledby="details-5" aria-hidden="true" data-backdrop="false">
                   <div class="modal-dialog modal-lg">
                       <div class="modal-content">
                       <div class="modal-header">
                           <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                           </button>
                           <h4 class="modal-title text-center">Stuffed Paratha</h4>
                           
                      </div>
                       <div class="modal-body">
                           <div class="container-fluid">
                               <div class="row">
                                   <div class="col-sm-6" >
                                       <div class="center-block" >
                                           <img src="stuffed-parathas.jpeg"  alt="parathas" class="details img-responsive">
                                       </div>
                                       
                                   </div>
                                   <div class="col-sm-6" >
                                       <h4>Details</h4>
                                       <p> Nothing beats a freshly made Paratha with a knob of butter!</p>
                                       <hr>
                                       <p>Price 100 rs</p>
                                       <form>
                                           <div class="form-group">
                                               <div class="col-xs-3">
                                                   <label for="quantity">Quantity:</label>
                                                   <input type="text" class="form-control" id="quantity" name="quantity">
                                               </div>
                                           </div>
                                       </form>
                                   </div>   
                                   
                               </div>
                           </div>
                       </div>
                       <div class="modal-footer">
                           <button class="btn btn-default" data-dismiss="modal">Close</button>
                           <button class="btn btn-warning" type="submit" onClick="window.location='login.html'"><span class="glyphicon glyphicon-shopping-cart"></span>Add to cart</button>
                       </div>
                       </div>
                   </div>
               </div>

    <div class="modal fade details-1" id="details-6" tabindex="-1" role="dialog" aria-labelledby="details-6" aria-hidden="true" data-backdrop="false">
                   <div class="modal-dialog modal-lg">
                       <div class="modal-content">
                       <div class="modal-header">
                           <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                           </button>
                           <h4 class="modal-title text-center">Chicken Tandoori</h4>
                           
                      </div>
                       <div class="modal-body">
                           <div class="container-fluid">
                               <div class="row">
                                   <div class="col-sm-6" >
                                       <div class="center-block" >
                                           <img src="tandoori-chicken.jpg"  alt="tandoori" class="details img-responsive">
                                       </div>
                                       
                                   </div>
                                   <div class="col-sm-6" >
                                       <h4>Details</h4>
                                       <p> You can hardly go a day without eating scrumptious chicken dishes!</p>
                                       <hr>
                                       <p>Price 130 rs</p>
                                       <form>
                                           <div class="form-group">
                                               <div class="col-xs-3">
                                                   <label for="quantity">Quantity:</label>
                                                   <input type="text" class="form-control" id="quantity" name="quantity">
                                               </div>
                                           </div>
                                       </form>
                                   </div>   
                                   
                               </div>
                           </div>
                       </div>
                       <div class="modal-footer">
                           <button class="btn btn-default" data-dismiss="modal">Close</button>
                           <button class="btn btn-warning" type="submit" onClick="window.location='login.html'"><span class="glyphicon glyphicon-shopping-cart"></span>Add to cart</button>
                       </div>
                       </div>
                   </div>
               </div>
      
         <div class="modal fade details-1" id="details-7" tabindex="-1" role="dialog" aria-labelledby="details-7" aria-hidden="true" data-backdrop="false">
                   <div class="modal-dialog modal-lg">
                       <div class="modal-content">
                       <div class="modal-header">
                           <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                           </button>
                           <h4 class="modal-title text-center">Noodles</h4>
                           
                      </div>
                       <div class="modal-body">
                           <div class="container-fluid">
                               <div class="row">
                                   <div class="col-sm-6" >
                                       <div class="center-block" >
                                           <img src="noodles.jpg"  alt="noodles" class="details img-responsive">
                                       </div>
                                       
                                   </div>
                                   <div class="col-sm-6" >
                                       <h4>Details</h4>
                                       <p>All the dreamers in all the world are dizzy in the noodle!</p>
                                       <hr>
                                       <p>Price 120 rs</p>
                                       <form>
                                           <div class="form-group">
                                               <div class="col-xs-3">
                                                   <label for="quantity">Quantity:</label>
                                                   <input type="text" class="form-control" id="quantity" name="quantity">
                                               </div>
                                           </div>
                                       </form>
                                   </div>   
                                   
                               </div>
                           </div>
                       </div>
                       <div class="modal-footer">
                           <button class="btn btn-default" data-dismiss="modal">Close</button>
                           <button class="btn btn-warning" type="submit" onClick="window.location='login.html'"><span class="glyphicon glyphicon-shopping-cart"></span>Add to cart</button>
                       </div>
                       </div>
                   </div>
               </div>         

         <div class="modal fade details-1" id="details-8" tabindex="-1" role="dialog" aria-labelledby="details-8" aria-hidden="true" data-backdrop="false">
                   <div class="modal-dialog modal-lg">
                       <div class="modal-content">
                       <div class="modal-header">
                           <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                           </button>
                           <h4 class="modal-title text-center">Sizzler</h4>
                           
                      </div>
                       <div class="modal-body">
                           <div class="container-fluid">
                               <div class="row">
                                   <div class="col-sm-6" >
                                       <div class="center-block" >
                                           <img src="sizzler.jpg"  alt="sizzler" class="details img-responsive">
                                       </div>
                                       
                                   </div>
                                   <div class="col-sm-6" >
                                       <h4>Details</h4>
                                       <p>Get your hands on the delicious and mouthwatering sizzler now!</p>
                                       <hr>
                                       <p>Price 150 rs</p>
                                       <form>
                                           <div class="form-group">
                                               <div class="col-xs-3">
                                                   <label for="quantity">Quantity:</label>
                                                   <input type="text" class="form-control" id="quantity" name="quantity">
                                               </div>
                                           </div>
                                       </form>
                                   </div>   
                                   
                               </div>
                           </div>
                       </div>
                       <div class="modal-footer">
                           <button class="btn btn-default" data-dismiss="modal">Close</button>
                           <button class="btn btn-warning" type="submit" onClick="window.location='login.html'"><span class="glyphicon glyphicon-shopping-cart"></span>Add to cart</button>
                       </div>
                       </div>
                   </div>
               </div>         









               
               
        <?php
        // put your code here
        include 'contindex.php';
        ?>
    </body>
</html>
