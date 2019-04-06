<?php include('header.php'); ?>
<?php include('slider.php'); ?>
<?php
    $services = [
        [
            'thumb' => 'img/services/service_01.jpg',
            'title' => 'End Point Security',
            'list'  => [
                'Next Gen AV',
                 'Active Response',
                 'EDR',
                 'DAC(ai)',
            ]
        ],
        [
            'thumb' => 'img/services/service_02.jpg',
            'title' => 'Network Security',
            'list'  => [
                 'IPS',
                 'IDS',
                 'Network DLP',
                 'DAC(ai)',
            ],
        ],
        [
            'thumb' => 'img/services/service_03.jpg',
            'title' => 'Gateway Security',
            'list'  => [
                 'Web Security',
                 'Email Security',
                 'NAC',
                 'Authentication(2FA, Multifactor)',
            ],
        ],
        [
            'thumb' => 'img/services/service_04.jpg',
            'title' => 'Datacenter Security',
            'list'  => [
                 'Server security',
                 'Database Activity Monitoring',
                 'File Integrity Monitoring',
                 'Email Archiving',
            ],
        ]
    ];
?>

<!-- Start service Area -->
<section class="service-area section-gap" id="service">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 pb-50 header-text text-center">
                <h1 class="mb-10">Our Deliverables</h1>
                <p>
                    Who are in extremely love with eco friendly system..
                </p>
            </div>
        </div>						
        <div class="row">
            <?php
            if (isset($services) && !empty($services)) {
                foreach ($services as $serviceData) {
                    ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-service">
                            <div class="thumb">
                                <img src="<?php echo $serviceData['thumb']; ?>" alt="">									
                            </div>
                            <h4><?php echo $serviceData['title'] ?></h4>
                            <div class="imglist">
                                <ul>
                                    <?php
                                    if (isset($serviceData['list']) && !empty($serviceData['list'])) {
                                        foreach ($serviceData['list'] as $serviceDataList) {
                                            ?>
                                    <li><a href="service_details.php"><span><?php echo $serviceDataList; ?></span></a></li>
                                        <?php }
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php }
            }
            ?>
        </div>
        <a href="services.php" class="genric-btn info-border circle arrow pull-right">More<span class="lnr lnr-arrow-right"></span></a>
    </div>	
</section>
<!-- End service Area -->

<!-- Start home-about Area -->
<section class="home-about-area section-gap relative">			
    <div class="container">
        <div class="row align-items-center justify-content-start">
            <div class="col-lg-6 no-padding home-about-right">
                <h1>
                    Our Vision
                </h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed leo metus, vehicula sit amet mauris sed, porta blandit mi. Duis sit amet dictum neque, eget fringilla elit. Sed mollis sapien dolor, a feugiat quam eleifend nec. Morbi ornare, est eget eleifend elementum, quam urna aliquet nulla, a aliquet velit felis vitae velit. Fusce fermentum accumsan ante, et vestibulum arcu molestie a. Phasellus vitae nulla et justo placerat porttitor. Donec egestas finibus facilisis. Pellentesque eget ex sit amet magna volutpat convallis. Donec faucibus magna dui, id dignissim massa fringilla tempus. Etiam ut condimentum diam. Praesent auctor tempor sapien aliquam eleifend. Praesent sit amet risus quis velit scelerisque fringilla in ac sem. In dignissim lacus quis semper tempor. Mauris laoreet gravida neque, et tincidunt ligula tincidunt ac. Aenean rhoncus mollis nunc finibus convallis. Ut elementum lectus in vehicula dignissim.
                </p>
            </div>
        </div>
    </div>	
</section>
<section class="service-area section-gap">			
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 pb-50 header-text text-center">
                <h1 class="mb-10">Our Partner</h1>
<!--                <p>
                    Who are in extremely love with eco friendly system..
                </p>-->
            </div>
        </div>
    </div>	
</section>
<section class="brands-area pb-10">
    <div class="container no-padding">
        <div class="brand-wrap">
            <div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
                <div class="col single-brand">
                    <a href="#"><img class="mx-auto" src="img/l1.png" alt=""></a>
                </div>
                <div class="col single-brand">
                    <a href="#"><img class="mx-auto" src="img/l2.png" alt=""></a>
                </div>
                <div class="col single-brand">
                    <a href="#"><img class="mx-auto" src="img/l3.png" alt=""></a>
                </div>
                <div class="col single-brand">
                    <a href="#"><img class="mx-auto" src="img/l4.png" alt=""></a>
                </div>
                <div class="col single-brand">
                    <a href="#"><img class="mx-auto" src="img/l5.png" alt=""></a>
                </div>								
            </div>																			
        </div>
    </div>	
</section>
<section class="service-area section-gap">			
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 pb-50 header-text text-center">
                <h1 class="mb-10">Our Customers</h1>
<!--                <p>
                    Who are in extremely love with eco friendly system..
                </p>-->
            </div>
        </div>
    </div>	
</section>
<section class="brands-area pb-10">
    <div class="container no-padding">
        <div class="brand-wrap">
            <div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
                <div class="col single-brand">
                    <a href="#"><img class="mx-auto" src="img/l1.png" alt=""></a>
                </div>
                <div class="col single-brand">
                    <a href="#"><img class="mx-auto" src="img/l2.png" alt=""></a>
                </div>
                <div class="col single-brand">
                    <a href="#"><img class="mx-auto" src="img/l3.png" alt=""></a>
                </div>
                <div class="col single-brand">
                    <a href="#"><img class="mx-auto" src="img/l4.png" alt=""></a>
                </div>
                <div class="col single-brand">
                    <a href="#"><img class="mx-auto" src="img/l5.png" alt=""></a>
                </div>								
            </div>																			
        </div>
    </div>	
</section>
<!-- End home-about Area -->

<!-- Start discount-section Area -->
<section class="discount-section-area relative section-gap" style="display: none;">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row align-items-center justify-content-between no-gutters">
            <div class="col-lg-6 discount-left">
                <h1 class="text-white">Enjoy 25% Seasonal Discount!</h1>
                <p class="text-white">
                    inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial.
                </p>
                <a href="#" class="header-btn">Order Service Now</a>
            </div>
            <div class="col-lg-5 discount-right">
                <h4 class="text-white">Get a free Estimate</h4>
                <form class="booking-form" id="myForm" action="#">
                    <div class="row">
                        <div class="col-lg-12 d-flex flex-column">
                            <input name="name" placeholder="Your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'" class="form-control mt-20" required="" type="text">
                        </div>
                        <div class="col-lg-6 d-flex flex-column">
                            <input name="phone" placeholder="Phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone'" class="form-control mt-20" required="" type="text">
                        </div>
                        <div class="col-lg-6 d-flex flex-column">
                            <input name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" class="form-control mt-20" required="" type="email">
                        </div>
                        <div class="col-lg-12 flex-column">
                            <textarea rows="5" class="form-control mt-20" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                        </div>

                        <div class="col-lg-12 d-flex justify-content-end send-btn">
                            <button class="genric-btn primary mt-20 text-uppercase ">Get Estimate</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>	
</section>
<!-- End discount-section Area -->

<!-- Start work-process Area -->
<section class="work-process-area pt-120" style="display: none;">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-7">
                <div class="title text-center">
                    <h1 class="mb-10">Our Working Process</h1>
                    <p>It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game</p>
                </div>
            </div>
        </div>	
        <div class="total-work-process d-flex flex-wrap justify-content-around align-items-center">
            <div class="single-work-process">
                <div class="work-icon-box">
                    <span class="lnr lnr-funnel"></span>
                </div>
                <h4 class="caption">Detect problem</h4>
            </div>
            <div class="work-arrow">
                <img src="img/arrow.png" alt="">
            </div>
            <div class="single-work-process">
                <div class="work-icon-box">
                    <span class="lnr lnr-layers"></span>
                </div>
                <h4 class="caption">Split solution into parts</h4>
            </div>
            <div class="work-arrow">
                <img src="img/arrow.png" alt="">
            </div>
            <div class="single-work-process">
                <div class="work-icon-box">
                    <span class="lnr lnr-paw"></span>
                </div>
                <h4 class="caption">Analyzing method</h4>
            </div>
            <div class="work-arrow">
                <img src="img/arrow.png" alt="">
            </div>
            <div class="single-work-process">
                <div class="work-icon-box">
                    <span class="lnr lnr-smile"></span>
                </div>
                <h4 class="caption">Final result comes out</h4>
            </div>											
            <div class="row">
                <div class="col"></div>
            </div>
        </div>	
</section>
<!-- End work-process Area -->

<!-- Start faq Area -->
<section class="faq-area section-gap" style="display: none;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 pb-50 header-text text-center">
                <h1 class="mb-10">Frequently Asked Questions</h1>
                <p>
                    Who are in extremely love with eco friendly system.
                </p>
            </div>
        </div>			
        <div class="row faq-contents justify-content-center align-items-center">
            <div class="col-lg-8 faq-left">
                <div class="mn-accordion" id="accordion">
                    <!--Accordion item-->
                    <div class="accordion-item">
                        <div class="accordion-heading">
                            <h3>Success</h3>
                            <div class="icon">
                                <i class="lnr lnr-chevron-right"></i>
                            </div>
                        </div>
                        <div class="accordion-content">
                            <p>For many of us, our very first experience of learning about the celestial bodies begins when we saw our first full moon in the sky. It is truly a magnificent view even to the naked eye. If the night is clear, you can see amazing detail of the lunar surface just star gazing on in your back yard.</p>
                        </div>
                    </div>
                    <!--Accordion item-->

                    <!--Accordion item-->
                    <div class="accordion-item">
                        <div class="accordion-heading">
                            <h3>Info</h3>
                            <div class="icon">
                                <i class="lnr lnr-chevron-right"></i>
                            </div>
                        </div>
                        <div class="accordion-content">
                            <p>For many of us, our very first experience of learning about the celestial bodies begins when we saw our first full moon in the sky. It is truly a magnificent view even to the naked eye. If the night is clear, you can see amazing detail of the lunar surface just star gazing on in your back yard.</p>
                        </div>
                    </div>
                    <!--Accordion item-->

                    <!--Accordion item-->
                    <div class="accordion-item">
                        <div class="accordion-heading">
                            <h3>danger</h3>
                            <div class="icon">
                                <i class="lnr lnr-chevron-right"></i>
                            </div>
                        </div>
                        <div class="accordion-content">
                            <p>For many of us, our very first experience of learning about the celestial bodies begins when we saw our first full moon in the sky. It is truly a magnificent view even to the naked eye. If the night is clear, you can see amazing detail of the lunar surface just star gazing on in your back yard.</p>
                        </div>
                    </div>
                    <!--Accordion item-->
                    <!--Accordion item-->
                    <div class="accordion-item">
                        <div class="accordion-heading">
                            <h3>Warning</h3>
                            <div class="icon">
                                <i class="lnr lnr-chevron-right"></i>
                            </div>
                        </div>
                        <div class="accordion-content">
                            <p>For many of us, our very first experience of learning about the celestial bodies begins when we saw our first full moon in the sky. It is truly a magnificent view even to the naked eye. If the night is clear, you can see amazing detail of the lunar surface just star gazing on in your back yard.</p>
                        </div>
                    </div>
                    <!--Accordion item-->
                </div>
            </div>						
        </div>
        <div class="row pt-120 skill-area justify-content-center" id="skills">
            <div class="col-lg-3 single-skill mx-auto d-block">
                <div class="skills skill-1" data-percent="80"></div>
                <h6 class="text-uppercase">web design</h6>							
            </div> 
            <div class="col-lg-3 single-skill mx-auto d-block">
                <div class="skills skill-2" data-percent="75"></div>	
                <h6 class="text-uppercase">ui / ux design</h6>						      		
            </div>	
            <div class="col-lg-3 single-skill mx-auto d-block">
                <div class="skills skill-3" data-percent="60"></div>
                <h6 class="text-uppercase">mobile app</h6>						     			
            </div>
            <div class="col-lg-3 single-skill mx-auto d-block">
                <div class="skills skill-4" data-percent="90"></div>
                <h6 class="text-uppercase">web development</h6>						     			
            </div>
        </div>
    </div>	
</section>
<!-- End faq Area -->

<!-- Start testomial Area -->
<section class="testomial-area section-gap" id="testimonail" style="display: none;">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-7">
                <div class="title text-center">
                    <h1 class="mb-10 text-white">Feedback from our real clients</h1>
                    <p class="text-white">It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game.</p>
                </div>
            </div>
        </div>						
        <div class="row">
            <div class="active-testimonial-carusel">
                <div class="single-testimonial item">
                    <img class="mx-auto" src="img/t1.png" alt="">
                    <p class="desc">
                        Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
                    </p>
                    <h5>Mark Alviro Wiens</h5>
                    <p>
                        CEO at Google
                    </p>
                </div>
                <div class="single-testimonial item">
                    <img class="mx-auto" src="img/t2.png" alt="">
                    <p class="desc">
                        Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
                    </p>
                    <h5>Mark Alviro Wiens</h5>
                    <p>
                        CEO at Google
                    </p>
                </div>
                <div class="single-testimonial item">
                    <img class="mx-auto" src="img/t3.png" alt="">
                    <p class="desc">
                        Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
                    </p>
                    <h5>Mark Alviro Wiens</h5>
                    <p>
                        CEO at Google
                    </p>
                </div>	
                <div class="single-testimonial item">
                    <img class="mx-auto" src="img/t1.png" alt="">
                    <p class="desc">
                        Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
                    </p>
                    <h5>Mark Alviro Wiens</h5>
                    <p>
                        CEO at Google
                    </p>
                </div>
                <div class="single-testimonial item">
                    <img class="mx-auto" src="img/t2.png" alt="">
                    <p class="desc">
                        Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
                    </p>
                    <h5>Mark Alviro Wiens</h5>
                    <p>
                        CEO at Google
                    </p>
                </div>
                <div class="single-testimonial item">
                    <img class="mx-auto" src="img/t3.png" alt="">
                    <p class="desc">
                        Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
                    </p>
                    <h5>Mark Alviro Wiens</h5>
                    <p>
                        CEO at Google
                    </p>
                </div>															
                <div class="single-testimonial item">
                    <img class="mx-auto" src="img/t1.png" alt="">
                    <p class="desc">
                        Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
                    </p>
                    <h5>Mark Alviro Wiens</h5>
                    <p>
                        CEO at Google
                    </p>
                </div>
                <div class="single-testimonial item">
                    <img class="mx-auto" src="img/t2.png" alt="">
                    <p class="desc">
                        Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
                    </p>
                    <h5>Mark Alviro Wiens</h5>
                    <p>
                        CEO at Google
                    </p>
                </div>
                <div class="single-testimonial item">
                    <img class="mx-auto" src="img/t3.png" alt="">
                    <p class="desc">
                        Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
                    </p>
                    <h5>Mark Alviro Wiens</h5>
                    <p>
                        CEO at Google
                    </p>
                </div>														
            </div>
        </div>
    </div>	
</section>
<!-- End testomial Area -->

<!-- Start brands Area -->
<!--<section class="brands-area pb-120">
    <div class="container no-padding">
        <div class="brand-wrap">
            <div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
                <div class="col single-brand">
                    <a href="#"><img class="mx-auto" src="img/l1.png" alt=""></a>
                </div>
                <div class="col single-brand">
                    <a href="#"><img class="mx-auto" src="img/l2.png" alt=""></a>
                </div>
                <div class="col single-brand">
                    <a href="#"><img class="mx-auto" src="img/l3.png" alt=""></a>
                </div>
                <div class="col single-brand">
                    <a href="#"><img class="mx-auto" src="img/l4.png" alt=""></a>
                </div>
                <div class="col single-brand">
                    <a href="#"><img class="mx-auto" src="img/l5.png" alt=""></a>
                </div>								
            </div>																			
        </div>
    </div>	
</section>-->
<!-- End brands Area -->
<?php include('footer.php'); ?>