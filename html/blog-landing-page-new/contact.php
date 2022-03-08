<?php $page= "contact";?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name=”description”>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>xyz</title>

<!-- normalize -->
<link rel="stylesheet" href="assets/css/normalize.min.css">
<!-- fav-icon -->    
<link rel="shortcut icon" href="assets/image/brand1.png"> 
<!-- Bootstrap 4.4.1-->
<link rel="stylesheet" href="assets/bootstrap-4.4.1/css/bootstrap.min.css">
<!-- Font-Awesome -->
<link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
<!-- google-fonts -->    
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Roboto:wght@300&family=Teko:wght@500&display=swap" rel="stylesheet">
<!-- style.css -->
<link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
    <main>
        <!-- header -->
        <header>
            <?php include("header.php"); ?>
        </header>


        <!-- section1 -->
        <section class="section1 bg-primary">
            <div class="container pt-5 pb-5">
                <div class="row pt-5 pb-5">
                    <div class="col-lg-12 pt-5 pb-5 text-center">
                        <h1 class="text-white display-4 font-weight-bold">CONTACT US</h1>
                        <h6 class="mt-4">
                            <a class="clr-red mr-2 font-weight-bold text-decoration-none" href="#">HOME</a> 
                            <span class="text-muted font-weight-bold"> / &nbsp; CONTACT US</span>
                        </h6>
                    </div>
                </div>
            </div>
        </section>


        <!-- section2 -->
        <section class="section2">
            <div class="container-fluid">
                <div class="row">
                    <!-- google-map -->
                    <div class="col-12 col-lg-6 p-md-0">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.0721376413476!2d-73.73979336718509!3d40.7164284386799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c263d234963e1f%3A0xb8c246c12c49cdc6!2s217-44%2098th%20Ave%2C%20Queens%20Village%2C%20NY%2011429%2C%20USA!5e0!3m2!1sen!2sin!4v1583386875157!5m2!1sen!2sin"
        width="100%" height="100%" frameborder="0" style="margin: 0;" allowfullscreen=""></iframe>
                    </div>
                    <div class="col-12 pt-5 col-lg-6 pl-md-5 pr-md-5">
                        <form name="frmContact" id="frmContact" method="post" action="#" enctype="multipart/form-data">
                            <div class="form-row mt-1 mb-4" data-aos="fade-up" data-aos-duration="1000">
                                <h2>CONTACT FORM</h2>
                                <div class="row">
                                    <div class="form-group col-6 mt-5">
                                        <div class="border border-muted p-2 bg-light">
                                            <input type="text" placeholder="Full Name" name="txtName" id="txtName" class="form-control border-0 bg-light shadow-none">
                                        </div>
                                    </div>
                                    <div class="form-group col-6 mt-5">
                                        <div class="border border-muted p-2 bg-light">
                                            <input type="text" placeholder="Full Name" name="txtName" id="txtName" class="form-control border-0 bg-light shadow-none">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-12 mt-4">
                                    <div class="border border-muted p-2 bg-light">
                                        <input type="email" placeholder="Email Address" name="txtEmail" id="txtEmail" class="form-control bg-light border-0 shadow-none">
                                    </div>
                                </div>
                                <div class="form-group col-12 mt-4">
                                    <textarea name="txtMessage" id="txtMessage" class="form-control p-2 bg-light rounded-0 shadow-none" rows="5" placeholder="Comment"></textarea>
                                </div>
                                <div class="form-group col-12 mt-4">
                                    <a href="#" class="btn btn bg-red hvr-shutter-out-horizontal text-white border-0 px-5 mt-3 py-3 rounded-0">SEND MESSAGE</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    
        <!-- footer -->
        <footer>
            <?php include("footer.php"); ?>
        </footer>
    </main>

<!-- bootstrap 4.4.1 -->
<script src="assets/bootstrap-4.4.1/js/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="assets/bootstrap-4.4.1/js/bootstrap.min.js"></script>
<!-- page-scrollreveal-3.3.2 -->
<script src="assets/page-scrollreveal-3.3.2/scrollreveal.min.js"></script>

<!-- javascript.js --> 
<script src="assets/js/common.js"></script>          
<script src="assets/js/contact.js"></script>         

</body>
</html>