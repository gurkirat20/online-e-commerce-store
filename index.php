<!DOCTYPE html>
<html lang="en">

<head>
    <title>Persona | Online Clothing Store</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ==== CSS file ==== -->
    <link rel="stylesheet" href="index.css">
    <!-- ==== Font awesome ==== -->
    <script src="https://kit.fontawesome.com/b3ac121c74.js" crossorigin="anonymous"></script>
    <!-- ==== Google fonts ==== -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        

</head>

<body>

<div class="signup-form">
    <form action="home.php" method="post" enctype="multipart/form-data">
		<h2>Welcome</h2>
        <br>

            <?php
				session_start();
				include 'database.php';
				$ID= $_SESSION["ID"];
				$sql=mysqli_query($conn,"SELECT * FROM register where ID='$ID' ");
				$row  = mysqli_fetch_array($sql);
            ?>
            
        <img src="upload/<?php echo $row['File'] ?>" height="150" width="150" style="border-radius:50%;display:block;margin-left:auto;margin-right:auto;" />
		<p class="hint-text"><br><b>Welcome </b><?php echo $_SESSION["User_Name"] ?> </p>
        <!-- <div class="text-center">Want to Leave the Page? <br><a href="logout.php">Logout</a></div> -->
    </form>
	
</div>

    <!-- ==== Home section ==== -->
    <section class="home" id="home">

        <!-- === Navbar ==== -->
        <nav class="navbar">

            <div class="logo">
                <span>persona.</span>
            </div>

            <div class="menu">
                <ul class="menu-list">
                    <li><a href="index.html" class="active">HOME</a></li>
                    <li><a href="men.html">MENS</a></li>
                    <li><a href="womens.html">WOMENS</a></li>
                    <li><a href="kids.html">KIDS</a></li>
                </ul>
            </div>

            <div class="icons">
                <a href="#"  class="active search-click">
                    <i class="fa fa-search" ></i>
                    <div class="search-box">
                        <input type="text" placeholder=""/>
                        <input type="button" value="Search"/>
                    </div>
                </a>
                <a href="signIn.html">
                    <i class="fas fa-user"></i>
                </a>
                <a href="#">
                    <i class="fas fa-heart"></i>
                </a>
                <a href="cart.html">
                    <i class="fas fa-shopping-cart"></i>
                </a>
            </div>

        </nav>

        <main class="main">

            <div class="container">
                <h1 class="homepage-text">Choose your outfit<br>according to your<br>personality</h1>
                <p class="homepage-text">Find your perfect outfit from our<br>amazing collection which portrays<br>your character....</p>
                <a href="#" class="homepage-text">Explore</a>
            </div>

        </main>

    </section>

    <!-- ==== Top Products -->
    <section class="top-products" id="top-products">

        <div class="text-buttons-container">
            <span class="top">TOP</span><br>
            <span class="products">PRODUCTS</span>
            <div class="buttons">
                <button id="back" onclick=traversalRight(this)>
                    <i class="fas fa-arrow-left"></i>
                </button>
                <button id="forward" onclick=traversalLeft(this)>
                    <i class="fas fa-arrow-right"></i>
                </button>
            </div>
        </div>



        <div class="cards-container">
            <div class="reel-div">
                <div class="reel">
                    <div class="card">
                        <div class="card-image jacket-1"></div>
                        <div class="card-text">
                            <h1 class="card-title">RED BOMBER JACKET</h1>
                            <p class="card-desc">30% off</p>
                            <a class="card-button">View Product <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-image shoes-1"></div>
                        <div class="card-text">
                            <h1 class="card-title">JAGO SNEAKERS</h1>
                            <p class="card-desc">40% off</p>
                            <a class="card-button">View Product <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-image sweater-1"></div>
                        <div class="card-text">
                            <h1 class="card-title">CROCHET SWEATER</h1>
                            <p class="card-desc">30% off</p>
                            <a class="card-button">View Product <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-image jacket-2"></div>
                        <div class="card-text">
                            <h1 class="card-title">SUEDE BIKER JACKET</h1>
                            <p class="card-desc">20% off</p>
                            <a class="card-button">View Product <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-image Hoodie-1"></div>
                        <div class="card-text">
                            <h1 class="card-title">DOUBLE HOODIE</h1>
                            <p class="card-desc">45% off</p>
                            <a class="card-button">View Product <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-image Hoodie-2"></div>
                        <div class="card-text">
                            <h1 class="card-title">RABBIT HOODIE</h1>
                            <p class="card-desc">20% off</p>
                            <a class="card-button">View Product <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-image shirts-1"></div>
                        <div class="card-text">
                            <h1 class="card-title">WOMEN'S FALL SHIRTS</h1>
                            <p class="card-desc">50% off</p>
                            <a class="card-button">View Product <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section class="categories" id="categories">

        <h1 class="section-title">CATEGORIES</h1>

        <div class="categories-row" id="categories-row-one">
            <div>
                <div class="item r1-one"></div>
                <span>Shirts</span>
            </div>
            <div>
                <div class="item r1-two"></div>
                <span>Shoes</span>
            </div>
            <div>
                <div class="item r1-three"></div>
                <span>Jackets</span>
            </div>
            <div>
                <div class="item r1-four"></div>
                <span>T-Shirts</span>
            </div>
            <div>
                <div class="item r1-five"></div>
                <span>Shorts</span>
            </div>
        </div>

        <div class="categories-row" id="categories-row-two">
            <div>
                <div class="item r2-one"></div>
                <span>Kurtis</span>
            </div>
            <div>
                <div class="item r2-two"></div>
                <span>Mini-Dresses</span>
            </div>
            <div>
                <div class="item r2-three"></div>
                <span>Tops</span>
            </div>
            <div>
                <div class="item r2-four"></div>
                <span>Heels</span>
            </div>
            <div>
                <div class="item r2-five"></div>
                <span>Handbags</span>
            </div>
        </div>

    </section>

    <section class="trending">
        <div class="section-title">BE IN TREND WITH OUR TREND WEAR</div>

        <div class="grid-container">
            <div class="grid-item tall one">
                <div class="wishlist"><i class="far fa-heart"></i></div>
                <div class="text">Air Force 1080 Shadow Pastel Custom</div>
            </div>
            <div class="grid-item tall two">
                <div class="wishlist"><i class="far fa-heart"></i></div>
                <div class="text">Air Max 270 React-Yellow /Red/Off-Blue</div>
            </div>
            <div class="grid-item long three">
                <div class="text">
                    <h4>New Season Textures</h4>
                    <h5>Available in variety of colors.</h5>
                </div>
            </div>
            <div class="grid-item long four">
                <div class="text">
                    <h4>Nylon Hoodies</h4>
                    <h5>For Men.</h5>
                </div>
            </div>
            <div class="grid-item long five">
                <div class="text">
                    <h4>Winter Weekends</h4>
                    <h5>Layers. On. Layers.</h5>
                </div>
            </div>
            <div class="grid-item tall six">
                <div class="wishlist"><i class="far fa-heart"></i></div>
                <div class="text">O-Neck Men's Fleece Hip-Hop Streetwear</div>
            </div>
            <div class="grid-item tall seven">
                <div class="wishlist"><i class="far fa-heart"></i></div>
                <div class="text">Men's Black Slim Fit Peviani Denim</div>
            </div>
            <div class="grid-item long eight">
                <div class="text">All Black Outfits</div>
            </div>
        </div>
        
    </section>
    

    <section class="section" id="section">

        <div class="container">
            <div class="container_item">
                <div class="image">
                    <i class="fas fa-location-arrow"></i>
                </div>
                <div class="text">
                    <div class="heading">Free Shipping</div>
                    <div class="para">Orders over $100</div>
                </div>
            </div>
            <div class="container_item">
                <div class="image">
                    <i class="fas fa-undo"></i>
                </div>
                <div class="text">
                    <div class="heading">Free Returns</div>
                    <div class="para">Within 30 days</div>
                </div>
            </div>
            <div class="container_item">
                <div class="image">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="text">
                    <div class="heading">100% Secure</div>
                    <div class="para">Payment Online</div>
                </div>
            </div>
            <div class="container_item">
                <div class="image">
                    <i class="fas fa-tag"></i>
                </div>
                <div class="text">
                    <div class="heading">Best Price</div>
                    <div class="para">Guaranteed</div>
                </div>
            </div>

        </div>

    </section>


    <!-- ==== Footer ==== -->
    <footer id="footer">

        <div class="content">

            <div class="col-1">
                <div class="heading">persona.</div>
                <div class="list">
                    <ul>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-2">
                <div class="heading">Help</div>
                <div class="list">
                    <ul>
                        <li><a href="#">Track Your Order</a></li>
                        <li><a href="#">Frequently Asked Questions</a></li>
                        <li><a href="#">Returns and Refund Policy</a></li>
                        <li><a href="#">Order Cancellation</a></li>
                        <li><a href="#">Fees & Payments</a></li>
                        <li><a href="#">Customer Care</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-3">
                <div class="heading">Shop by</div>
                <div class="list">
                    <ul>
                        <li><a href="#">Men</a></li>
                        <li><a href="#">Women</a></li>
                        <li><a href="#">Kids</a></li>
                        <li><a href="#">New Arrivals</a></li>
                        <li><a href="#">Gift Cards</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-4">
                <div class="heading">Keep in Touch</div>
                <div class="list">
                    <ul>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Pinterest</a></li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="container">
            <p>In any concern, <span>Contact Us</span></p>
            <p class="copyright">&copy; 2021 www.persona.com. All Rights Reserved.</p>
        </div>

    </footer>

    <script>
        var c=0;
        function traversalRight(item) {
            var cardContainer = item.parentNode.parentNode.parentNode.children;
            var reelArr = cardContainer[1].children;
            var reel = reelArr[0].children;
            var reelMain=reel[0];

            if(c==0)return;

            c--;
            
            if(document.documentElement.offsetWidth>600)
            reelMain.style.transform += "translateX(50vw)";
            
            else 
            reelMain.style.transform += "translateX(70vw)";


        }

        function traversalLeft(item) {
            var cardContainer = item.parentNode.parentNode.parentNode.children;
            var reelArr = cardContainer[1].children;
            
            var reel = reelArr[0].children;
            var reelMain=reel[0];//.reel
            var container=cardContainer[1].children;//.reel-div
            var counterForTraverse=reelMain.offsetWidth/(document.documentElement.offsetWidth/100*57);//-cardContainer[0].offsetWidth-cardContainer[0].parentNode.style.marginRight-cardContainer[0].parentNode.style.marginLeft
            console.log(counterForTraverse,reelMain.offsetWidth,document.documentElement.offsetWidth-cardContainer[0].offsetWidth)
            if(c>counterForTraverse-1) 
            {return;}

            
            var reel = reelArr[0].children;
            var reelMain=reel[0];
            
            if(document.documentElement.offsetWidth>600)
            reelMain.style.transform += "translateX(-50vw)";
            
            else if(document.documentElement.offsetWidth<=600 &&c<counterForTraverse-2)
            {// && c>counterForTraverse-1
                reelMain.style.transform += "translateX(-70vw)";
            
            }
            c++;
        }
        // $(document).ready(function() {
     
            $(document).ready(function() {
     
     $(".fa-search").click(function() {
        $(".search-box").toggle();
        $("input[type='text']").focus();
      });

  });
  $(document).ready(function() {
     
     $(".active").click(function() {
         console.log("heyy");
        $(".search-box").toggle();
        $("input[type='text']").focus();
      });

  });
    </script>

    <!-- <script>

            function traversalLeft(itemNo) {
             tempForCounterProduct=9*productsArray[itemNo].offsetWidth;

             console.log(counterForTraversal,tempForCounterProduct,tempForCounterReel,tempForCounterProduct/tempForCounterReel)
            
             if(itemNo==0)
             {
                 var tempTempForCounterProduct=tempForCounterProduct+2*productsArray[0].offsetWidth;
                 console.log(counterForTraversal[itemNo] , tempTempForCounterProduct/tempForCounterReel)
                 if(counterForTraversal[itemNo]>tempTempForCounterProduct/tempForCounterReel)
                     return;
             }
             else if(counterForTraversal[itemNo]>tempForCounterProduct/tempForCounterReel)
                 return;
             else
            var reel = document.getElementsByClassName("cards-container");
             if(reel[itemNo].style.transform!="translate(-1px)")  
             {
                 return;
             }
             counterForTraversal[itemNo]++;
             console.log(counterForTraversal[itemNo]);
            reel[0].style.transform += "translateX(-20.5%)";//-20%-not terminating problem
        }

        function traversalRight(itemNo) {
             if(counterForTraversal[itemNo]<=0)
                 return;

             cons

            var reel = document.getElementsByClassName("cards-container");
            reel[0].style.transform += "translateX(20.5%)";//20%-not terminating problem
             console.log(counterForTraversal[itemNo]);
             counterForTraversal[itemNo]--;
        }

         </script> -->

</body>

</html>