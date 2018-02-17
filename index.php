<?php 
include('header.php'); 

$service_query = "SELECT * FROM service ORDER BY id ASC";
$service_result = $conn->query($service_query);

$review_query = "SELECT review, title FROM service ORDER BY id ASC";
$review_result = $conn->query($review_query);

$service_opt_query = "SELECT * FROM service ORDER BY id ASC";
$service_opt_result = $conn->query($service_opt_query);
?>

<div id="home" class="home">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="img/slider1.jpg" alt="">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>WELCOME TO <label class="slider-text">THE HOME<span>SALON</span></label></h1>
                        <p>Trend Setters is a full-service beauty salon dedicated to consistently providing high customer satisfaction by rendering excellent service, quality products, and furnishing an enjoyable atmosphere at an acceptable price/value relationship. We will also maintain a friendly, fair, and creative work environment, which respects diversity, ideas, and hard work.</p>
                        <div class="buy">
                            <a href="#appointment"><div class="bnow">Book Appointment</div></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/slider2.jpg" alt="">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>WELCOME TO <label class="slider-text">THE HOME<span>SALON</span></label></h1>
                        <p>Trend Setters is a full-service beauty salon dedicated to consistently providing high customer satisfaction by rendering excellent service, quality products, and furnishing an enjoyable atmosphere at an acceptable price/value relationship. We will also maintain a friendly, fair, and creative work environment, which respects diversity, ideas, and hard work.</p>
                        <div class="buy">
                            <a href="#appointment"><div class="bnow">Book Appointment</div></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/slider3.jpg" alt="">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>WELCOME TO <label class="slider-text">THE HOME<span>SALON</span></label></h1>
                        <p>Trend Setters is a full-service beauty salon dedicated to consistently providing high customer satisfaction by rendering excellent service, quality products, and furnishing an enjoyable atmosphere at an acceptable price/value relationship. We will also maintain a friendly, fair, and creative work environment, which respects diversity, ideas, and hard work.</p>
                        <div class="buy">
                            <a href="#appointment"><div class="bnow">Book Appointment</div></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="fa fa-long-arrow-left" aria-hidden="true"></span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="fa fa-long-arrow-right" aria-hidden="true"></span>
          </a>
</div>    
</div>

<div id="about" class="about">
    <h1>About Us</h1>
    <div class="line"></div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <p class="center"></p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h2></h2>
                <p>Enthusiastic and passionate students of NIRMA UNIVERSITY studing COMPUTER ENGINEERING, who seeks for a knowledge and looking for an environment which enhances skills. A consummate learner and adept programmer having decent analytical and communication skills</p>
                <div class="photo1">
                    <img src="img/team_3.jpg" alt="" height="100px" width="100px">
                </div>
                <div class="text1">
                    <h3>Kaushal Thakkar</h3>
                    <h3>Professional Hairdresser</h3>
                </div>

                <div class="photo1" style="position: absolute;">
                    <img src="img/team_4.jpeg" alt="" height="100px" width="100px">
                </div>
                <div class="text1" style="position: absolute; margin-left: 115px">
                    <h3>Shaival Shah</h3>
                    <h3>Professional Hairdresser</h3>
                </div>

            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                <?php 
                while($row = $review_result->fetch_array())
                {
                    $title = $row['title'];
                    $review = $row['review'];    
                
                ?>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $review; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $review; ?>%;">
                        <span class="sr-only"><?php echo $review; ?>% Complete</span>
                      </div>
                    </div>
                    <h4><?php echo $title; ?> <?php echo $review; ?>%</h4>
                </div>

                <?php } ?>                
                
            </div>
        </div>
    </div>
</div>

<div id="services" class="services">
    <h1>Services</h1>
    <div class="line"></div>
    <div class="container">
        <p class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 p1">We provide different services like.....</p>
        <div class="row">

            <?php 
            while($row = $service_result->fetch_array())
            {
                $title = $row['title'];
                $description = $row['description'];
                $image = $row['image'];
                $price = $row['price'];
                $image_path = "img/".$image;
            ?>

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 padding-bottom">
                <div class="bgWhite">
                    <div class="service_price">&#8377; <?php echo $price; ?></div>
                    <div class="bgSv">
                        <div class="iconServices1" style="background: url(<?php echo $image_path; ?>) no-repeat;"></div>
                    </div>
                    <h2><?php echo $title; ?></h2>
                    <p class="p2"><?php echo $description; ?></p>
                </div>
            </div>

            <?php } ?>
        </div>
    </div>
</div>

<div class="appointment" id="appointment">
    <div class="container">
        <div class="row">
                <div class="col-md-offset-7 col-lg-offset-7 col-md-5 col-xs-6 col-sm-6">
                    <div class="bgWhite1">
                        <div class="h1">
                            <h1>MAKE AN <span>APPOINTMENT</span></h1>
                        </div>
                        <div class="line"></div>
                        
                        <div class="form">
                            <form action="" method="POST" id="appointment_form">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margins">
                                    <input type="text" id="app_name" name="app_name" placeholder="Your name">
                                </div>
                                <div class="col-lg-6 col-nd-6 col-sm-12 col-xs-12 margins">
                                    <input type="text" id="app_email" name="app_email" placeholder="Your email">
                                </div>
                                <div class="col-lg-6 col-nd-6 col-sm-12 col-xs-12 margins">
                                    <input type="text" id="app_phone" name="app_phone" placeholder="Your phone">
                                </div>
                                <div class="col-lg-12 col-nd-12 col-sm-12 col-xs-12 margins">
                                    <!-- <input type="text" placeholder="Your services"> -->
                                    <select id="app_service" name="app_service">
                                        <option selected disabled id="selected" value="0">Please select service</option>
                                        <?php 
                                        while($row = $service_opt_result->fetch_array())
                                        {
                                            $id = $row['id'];
                                            $title = $row['title'];
                                        ?>
                                        <option value="<?php echo $id; ?>"><?php echo $title; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-nd-6 col-sm-12 col-xs-12 margins">
                                    <input class="width-103" type="text" id="app_date" name="app_date" placeholder="Select date" readonly>
                                </div>
                                <div class="col-lg-6 col-nd-6 col-sm-12 col-xs-12 margins">
                                    <input class="width-103" type="time" id="app_time" name="app_time" placeholder="Select time">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sn-12 col-xs-12 margins">
                                    <textarea id="app_message" name="app_message" placeholder="Message...[Optional]"></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <button type="submit" class="bttn bttn-round bttn-solid" name="send">Book Appointment</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <div class="imgAppointment"></div>
</div>

<div id="team" class="team">
    <div class="container">
        <div class="row">
            <h1>TEAM</h1>
            <div class="line"></div>
            <p class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">The world's best team team for your servies !</p>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 teammargin">
                <div class="teamclass">
                    <div class="teamImg1">
                        <div class="bgBrown">
                            <h2>Kaushal Thakkar</h2>
                            <div class="follow1">
                                <ul>
                                    <li><a href="https://www.facebook.com/kaushal.9898" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/kaushalthakkar3" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://plus.google.com/117376313593994849723" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="https://linkedin.com/in/kaushal-thakkar-1bbb2a115" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 teammargin">
                <div class="teamclass">
                    <div class="teamImg2">
                        <div class="bgBrown">
                            <h2>Shaival Shah</h2>
                            <div class="follow1">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" target="_blank"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" target="_blank"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" target="_blank"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" target="_blank"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                       
        </div>
    </div>
</div>

<div id="portfolio" class="portfolio">
            <div class="container">
                <div class="row">
                    <h1>PORTFOLIO</h1>
                    <div class="line"></div>
                    <p class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">Some glimpses of our services provided by my team</p>
                </div>
            </div>
            <div class="container-fluid no-padding" data-wow-offset="10">
                <a href="img/gallery1.jpg" data-lightbox="image" data-title="Title Here">
                    <div class="col-md-3 col-sm-6 col-xs-6 no-padding">
                        <div class="hovereffect">
                            <img class="img-responsive" src="img/gallery1.jpg" alt="">
                                <div class="overlay top">
                                    <i class="fa fa-eye"></i>
                                </div>
                        </div>
                    </div>
                </a>
                <a href="img/gallery2.jpg" data-lightbox="image" data-title="Title Here">
                    <div class="col-md-3 col-sm-6 col-xs-6 no-padding">
                        <div class="hovereffect">
                            <img class="img-responsive" src="img/gallery2.jpg" alt="">
                                <div class="overlay top">
                                    <i class="fa fa-eye"></i>
                                </div>
                        </div>
                    </div>
                </a> 
                <a href="img/gallery3.jpg" data-lightbox="image" data-title="Title Here">
                    <div class="col-md-3 col-sm-6 col-xs-6 no-padding">
                        <div class="hovereffect">
                            <img class="img-responsive" src="img/gallery3.jpg" alt="">
                                <div class="overlay top">
                                    <i class="fa fa-eye"></i>
                                </div>
                        </div>
                    </div>
                </a> 
                <a href="img/gallery4.jpg" data-lightbox="image" data-title="Title Here">
                    <div class="col-md-3 col-sm-6 col-xs-6 no-padding">
                        <div class="hovereffect">
                            <img class="img-responsive" src="img/gallery4.jpg" alt="">
                                <div class="overlay top">
                                    <i class="fa fa-eye"></i>
                                </div>
                        </div>
                    </div>
                </a>
                <a href="img/gallery5.jpg" data-lightbox="image" data-title="Title Here">
                    <div class="col-md-3 col-sm-6 col-xs-6 no-padding">
                        <div class="hovereffect">
                            <img class="img-responsive" src="img/gallery5.jpg" alt="">
                                <div class="overlay top">
                                    <i class="fa fa-eye"></i>
                                </div>
                        </div>
                    </div>
                </a> 
                <a href="img/gallery6.jpg" data-lightbox="image" data-title="Title Here">
                    <div class="col-md-3 col-sm-6 col-xs-6 no-padding">
                        <div class="hovereffect">
                            <img class="img-responsive" src="img/gallery6.jpg" alt="">
                                <div class="overlay top">
                                    <i class="fa fa-eye"></i>
                                </div>
                        </div>
                    </div>
                </a>  
                <a href="img/gallery7.jpg" data-lightbox="image" data-title="Title Here">
                    <div class="col-md-3 col-sm-6 col-xs-6 no-padding">
                        <div class="hovereffect">
                            <img class="img-responsive" src="img/gallery7.jpg" alt="">
                                <div class="overlay top">
                                    <i class="fa fa-eye"></i>
                                </div>
                        </div>
                    </div>
                </a> 
                <a href="img/gallery8.jpg" data-lightbox="image" data-title="Title Here">
                    <div class="col-md-3 col-sm-6 col-xs-6 no-padding">
                        <div class="hovereffect">
                            <img class="img-responsive" src="img/gallery8.jpg" alt="">
                                <div class="overlay top">
                                    <i class="fa fa-eye"></i>
                                </div>
                        </div>
                    </div>
                </a> 
            </div>
        </div>

<div id="newsletter" class="newsletter">
    <div class="container">
    <div class="row">
        <h1>NEWSLETTER</h1>
        <div class="line"></div>
        <p class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 center1">Subscribe to our email newsletter today to receive updates on the latest news and special offers!</p>
        <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 padding-bottom">
            <form action="" method="POST" id="newsletter_form">
                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 no-padding">
                    <input type="text" id="newsletter_email" name="newsletter_email" placeholder="Your email">
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 no-padding">
                    <button type="submit" class="bttn2" name="send">Submit Now</button>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>

<div id="video" class="video">
    <div class="container">
        <div class="row">
            <h1>VIDEO</h1>
            <div class="line"></div>
            <p class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2"></p>
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
            <div id="wrap-player">
                <iframe id="player" width="600" height="400" src="new hairstyle for men 2016.mp4"></iframe>    
                <!-- <iframe id="player" width="600" height="400" src="http://www.youtube.com/embed/6CfAhQcjGXU"></iframe>     -->
            </div>
        </div>
    </div>
</div>
</div>

<div id="pricing" class="pricing">
    <div class="container">
        <div class="row">
            <h1>PRICING</h1>
            <div class="line"></div>
            <p class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2"></p>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 padding-bottom">
                <div class="bgWhite3">
                    <div class="sex">
                        <h2>Man</h2>
                    </div>
                    <div class="padding1">
                        <h4>$30</h4>
                        
                        <a href="#">
                            <div class="appointment1">
                                <h3>Buy Now</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 padding-bottom">
                <div class="bgWhite4">
                    <div class="sex1">
                        <h2>Woman</h2>
                    </div>
                    <div class="padding1">
                        <h4>$40</h4>
                        
                        <a href="#">
                            <div class="appointment2">
                                <h3>Buy Now</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="bgWhite3">
                    <div class="sex">
                        <h2>Child</h2>
                    </div>
                    <div class="padding1">
                        <h4>$20</h4>
                        
                        <a href="#">
                            <div class="appointment1">
                                <h3>Buy Now</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="contact" class="contact">
    <div class="container">
        <div class="row">
            <h1>CONTACT</h1>
            <div class="line"></div>
            <p class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">We are always available for your service.</p>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 padding-bottom">
                <form action="" method="POST" id="contact_form">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <input type="text" id="name" name="name" placeholder="Your name">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <input type="text" id="email" name="email" placeholder="Your email">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <input type="text" id="subject" name="subject" placeholder="Your Subject">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sn-12 col-xs-12 margins">
                        <textarea id="message" name="message" placeholder="Message..."></textarea>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <button type="submit" class="bttn1" name="send">Submit Now</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="google-map">
                     <div id="map" style="height:300px; width:100%;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Us Modal -->
<div class="modal fade" id="contact_modal" role="dialog">
    <div class="modal-dialog">  
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Confirmation</h4>
            </div>
            <div class="modal-body">
            Thank you for your request. A customer service representative will respond to your questions in 24-48 hrs.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default bt_close" data-dismiss="modal">Ok
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Newsletter Modal -->
<div class="modal fade" id="newsletter_modal" role="dialog">
    <div class="modal-dialog">  
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Thank You</h4>
            </div>
            <div class="modal-body">
            Thanks, your subscription has been confirmed. You've been added to our list and will hear from us soon. 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default bt_close" data-dismiss="modal">Ok
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Appointment Modal -->
<div class="modal fade" id="appointment_modal" role="dialog">
    <div class="modal-dialog">  
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Thank You</h4>
            </div>
            <div class="modal-body">
            Thanks, your appointment has been booked successfully. We will respond to you soon.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default bt_close" data-dismiss="modal">Ok
                </button>
            </div>
        </div>
    </div>
</div>

<style type="text/css">
    .error{
        color: red;
        font-weight: 400;
    }
    #contact_modal{
        padding-right: 17px;
    }
    #newsletter_modal{
        padding-right: 17px;
    }
    .modal-header {
        background: #16a085;
        text-align: center;
        border-radius: 7px;
    }
    .modal-footer{
        text-align: center;
    }
</style>
<script src="assets/jquery-1.8.3.min.js"></script>
<script src="assets/jquery.validate.min.js"></script>
<script type="text/javascript">
$('#contact_form').validate({
    rules: {
        name: {
            required: true
        },
        email: {
            required: true,
            email: true
        },
        subject:{
            required: true
        },
        message:{
            required: true  
        }
    },
    messages: {
        name: {
            required: "Please enter name"
        },
        email: {
            required: "Please enter email",
            email: "Please enter valid email"
        },
        subject: {
            required: "Please enter subject"
        },
        message: {
            required: "Please enter message"
        }
    },
    error: function(label) {
        $(this).addClass("error");
    },
    submitHandler : function(form) {
        
        $.ajax({
            type: "POST",
            dataType: 'json',
            url: "action/contact.php?" + $("#contact_form").serialize(),
            success: function (data) {
                
                if (data == 1) {
                    $("input[name=name]").val("");
                    $("input[name=email]").val("");
                    $("input[name=subject]").val("");
                    $("textarea").val("");

                    $('#contact_modal').modal('show');
                }
                else {
                    alert('Failed.');
                }
            }
        });
    }
});

$('#newsletter_form').validate({
    rules: {
        newsletter_email: {
            required: true,
            email: true
        }
    },
    messages: {
        newsletter_email: {
            required: "Please enter email",
            email: "Please enter valid email"
        }
    },
    error: function(label) {
        $(this).addClass("error");
    },
    submitHandler : function(form) {
        $(".loader").show();
        $.ajax({
            type: "POST",
            dataType: 'json',
            url: "action/newsletter.php?" + $("#newsletter_form").serialize(),
            success: function (data) {
                
                if (data == 1) {
                    
                    $("input[name=newsletter_email]").val("");
                    $('#newsletter_modal').modal('show');
                    $(".loader").hide();
                }
                else {
                    alert('Failed.');
                    $(".loader").hide();
                }
            }
        });
    }
});

$('#appointment_form').validate({
    rules: {
        app_name: {
            required: true
        },
        app_phone: {
            required: true,
            minlength: 10,
            maxlength: 10
        },
        app_email: {
            required: true,
            email: true
        },
        app_service: {
            required: true
        },
        app_date: {
            required: true
        },
        app_time: {
            required: true
        }
    },
    messages: {
        app_name: {
            required: "Please enter name"
        },
        app_phone: {
            required: "Please enter phone",
            minlength: "Please enter correct phone",
            maxlength: "Please enter correct phone"
        },
        app_email: {
            required: "Please enter email",
            email: "Please enter valid email"
        },
        app_service: {
            required: "Please select service"
        },
        app_date: {
            required: "Please select date"
        },
        app_time: {
            required: "Please select time"
        }
    },
    error: function(label) {
        $(this).addClass("error");
    },
    submitHandler : function(form) {
        
        $(".loader").show();
        
        $.ajax({
            type: "POST",
            dataType: 'json',
            url: "action/appointment.php?" + $("#appointment_form").serialize(),
            success: function (data) {
                
                if (data == 1) {
                    
                    $("input[name=app_name]").val("");
                    $("input[name=app_email]").val("");
                    $("input[name=app_phone]").val("");
                    $("#app_service").val("0");
                    $("input[name=app_date]").val("");
                    $("input[name=app_time]").val("");
                    $("textarea").val("");

                    $('#appointment_modal').modal('show');
                    $(".loader").hide();                    
                }
                else {
                    alert('Failed.');
                    $(".loader").hide();                    
                }
            }
        });
    }
});
</script>

<?php include('footer.php'); ?>