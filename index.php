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
<?php include('footer.php'); ?>