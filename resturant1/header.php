
	<!-- Start header -->

	<header >

                    <a>
                        <img src="images/f1.png" width="180px" height="90px" >
                    </a>
                    <ul>
                        <li class="nav-item active"><a class="nav-link" href="index1.php">Home</a></li>
                        <li class="nav-item active"><a class="nav-link" href="menu.php">Menu</a></li>
                        <li class="nav-item active"><a class="nav-link" href="about.php">About</a></li>
                        <li class="nav-item active"><a class="nav-link" href="contactus.php">Contact Us</a></li>


                            <?php
                            if(isset($_SESSION['uid']))
                            {
                                ?>
                               <li class="nav-item active" ><a class="nav-link" href="cart.php">Cart</a></li>&nbsp;&nbsp;
                                <li class="nav-item active" <a class="nav-link">&nbsp;&nbsp;HI 🙋‍♀<?php echo $_SESSION['uid']; ?> </a></li>&nbsp;&nbsp;
                                <li><a href="logout.php"> <img src="images/logout.png" width="50px" height="50px" ></a></li>
                                <?php
                            }
                            else
                            {
                                ?>
                                <a href="account.html">Login</a>
                                <?php
                            }
                            ?>
                            </a>
                        </li>



                   <!-- <form action="logout.php" method="post">
                        <a href="logout.php">
                            <img src="images/logout.png" width="50px" height="50px" >
                        </a>
                    </form>-->
                     <!--   <li class="nav-item active"><a class="nav-link" href="order.html">Order</a></li>-->



						<!--<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Pages</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="reservation.html">Reservation</a>
								<a class="dropdown-item" href="stuff.html">Stuff</a>
								<a class="dropdown-item" href="gallery.html">Gallery</a>
							</div>
						</li> -->
						<!--<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blog</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="blog.html">blog</a>
								<a class="dropdown-item" href="blog-details.html">blog Single</a>
							</div>
						</li> -->
						<!--<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li> -->
					</ul>
				</div>
			</div>
		</nav>
	</header>
    <script type="text/javascript">
        window.addEventListener("scroll", function (){
            var header=document.querySelector("header");
            header.classList.toggle("sticky",window.scrollY>0);
        })
    </script>
	<!-- End header -->
