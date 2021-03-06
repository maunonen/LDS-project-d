<?php require APPROOT . '/views/lds/header.php';?>  
  
          <!-- Showcase Slider -->
          <section id="showcase">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">    
                    <div class="carousel-item carousel-image-1 active">
                    <!-- <img class="d-block w-100" src="<?php //echo URLROOT;?>/images/image1.jpg" alt="First slide"> -->
                          <div class="container">
                            <div class="carousel-caption d-none d-sm-block text-right mb-5">
                                <h1 class="display-3">Heading One</h1>
                                <p class="lead">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                                    Placeat veniam id nam, modi provident quas quam vero eaque quaerat aliquam.
                                </p>
                                <a href="<?php echo URLROOT;?>/users/register" class="btn btn-danger btn-lg">Sign up now</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item carousel-image-2">
                    <!-- <img class="d-block w-100" src="<?php //echo URLROOT;?>/images/image2.jpg" alt="First slide"> -->
                      <div class="container">
                            <div class="carousel-caption d-none d-sm-block text-right mb-5">
                                <h1 class="display-5">Heading Two</h1>
                                <p class="lead">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                                    Placeat veniam id nam, modi provident quas quam vero eaque quaerat aliquam.
                                </p>
                                <a href="<?php echo URLROOT;?>/users/login" class="btn btn-primary btn-lg">Login</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item carousel-image-3">
                    <!-- <img class="d-block w-100" src="<?php //echo URLROOT;?>/images/image3.jpg" alt="First slide"> -->
                        <div class="container">
                            <div class="carousel-caption d-none d-sm-block mb-5">
                                <h1 class="display-5">Heading Three</h1>
                                <p class="lead">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                                    Placeat veniam id nam, modi provident quas quam vero eaque quaerat aliquam.
                                </p>
                                <a href="" class="btn btn-succes btn-lg">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <a href="#myCarousel" data-slide="prev" class="carousel-control-prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a href="#myCarousel" data-slide="next" class="carousel-control-next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </section>
        <!-- Home icon section -->

        <section id="home-icons" class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-4 text-center">
                        <i class="fa fa-cog fa-3x mb-2"></i>
                        <h3>Turning gears</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, esse.</p>
                    </div>
                    <div class="col-md-4 mb-4 text-center">
                            <i class="fa fa-cloud fa-3x mb-2"></i>
                            <h3>Sending data</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, esse.</p>
                    </div>
                    <div class="col-md-4 mb-4 text-center">
                            <i class="fa fa-cart-plus fa-3x mb-2"></i>
                            <h3>Making Money</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, esse.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- HOME HEADING SECTION -->

        <section id="home-heading" class="p-5">
            <div class="dark-overlay">
                <div class="row">
                    <div class="col">
                        <div class="container pt-5">
                            <h1>
                                Are you ready to get started?
                            </h1>
                            <p class="d-none d-md-block">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus quas 
                                quisquam maiores quod? Sequi quam distinctio quasi voluptates quidem tempore.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Info Section -->

        <section id="info" class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <h3>Lorem ipsum</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur 
                            debitis, nesciunt ex laborum dolorem adipisci. Quasi iure minus fuga! Deleniti!
                        </p>
                        <a href="about.html" class="btn btn-outline-danger btn-lg">Learn More</a>
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo URLROOT;?>/images/laptop.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <!-- VIDEO PLAY -->

        <section id="video-play">
            <div class="dark-overlay">
                <div class="row">
                    <div class="col">
                        <div class="container p-5">
                            <a href="" class="video" 
                                data-video="https://www.youtube.com/embed/WG8y2KBH0xY"
                                data-toggle="modal"
                                data-target="#videoModal"
                            ><i class="fa fa-play fa-3x"></i>
                            </a>
                            <h1>Sea What We Do</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- PHOTO GALLERY-->

        <section id="gallery" class="py-5">
            <div class="container">
                <h1 class="text-center">Photo Gallery</h1>
                <p class="text-canter">Check out our photos</p>
                <div class="row mb-4">
                    <div class="col-md-4">
                        <a href="https://source.unsplash.com/random/560x560" 
                            data-toggle="lightbox"
                            data-gallery="img-gallery"
                            data-height="560"
                            data-width ="560"
                        >
                             <img src="https://source.unsplash.com/random/560x560" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="https://source.unsplash.com/random/561x561" 
                            data-toggle="lightbox"
                            data-gallery="img-gallery"
                            data-height="561"
                            data-width ="561"
                        >
                                <img src="https://source.unsplash.com/random/561x561" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a  href="https://source.unsplash.com/random/562x562" 
                            data-toggle="lightbox"
                            data-gallery="img-gallery"
                            data-height="562"
                            data-width ="562"
                        >
                                <img src="https://source.unsplash.com/random/562x562" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                <!-- row 2-->
                <div class="row mb-4">
                    <div class="col-md-4">
                        <a href="https://source.unsplash.com/random/563x563" 
                            data-toggle="lightbox"
                            data-gallery="img-gallery"
                            data-height="563"
                            data-width ="563"
                        >
                                <img src="https://source.unsplash.com/random/563x563" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="https://source.unsplash.com/random/565x565" 
                            data-toggle="lightbox"
                            data-gallery="img-gallery"
                            data-height="565"
                            data-width ="565"
                        >
                                <img src="https://source.unsplash.com/random/565x565" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a  href="https://source.unsplash.com/random/564x564" 
                            data-toggle="lightbox"
                            data-gallery="img-gallery"
                            data-height="564"
                            data-width ="564"
                        >
                                <img src="https://source.unsplash.com/random/564x564" alt="" class="img-fluid"> 
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- NEWSLETTER -->
        <section id="newsletter" class="text-center py-5 bg-dark text-white">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1>Sign up for our news letter</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Quidem repudiandae ad temporibus beatae iste blanditiis ut, 
                            provident alias. Illum, impedit.
                        </p>
                        <form class="form-inline justify-content-center">
                            <input type="text" class="form-control mb-2 mr-2" placeholder="Enter Name">
                            <input type="text" class="form-control mb-2 mr-2" placeholder="Enter Email">
                            <div class="button btn btn-primary mb-2">Submit</div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        

        <!-- VIDEO MODAL -->

        <div id="videoModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <button class="close" data-dismiss="modal">
                            <span>&times;</span>
                        </button>
                        <iframe src="" frameborder="0" height="350" width="100%" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>


<?php require APPROOT . '/views/lds/footer.php';?>