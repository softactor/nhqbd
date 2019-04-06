<?php include('header.php'); ?>
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
        ],
        [
            'thumb' => 'img/services/transection.jpg',
            'title' => 'Transection Security',
            'list'  => [
                 '2FA',
                 'Risk base authentication',
                 'Adaptive authentication (Customer behavior)',
                 'Tranasection fraud Management (web and mobile channel)',
            ],
        ],
        [
            'thumb' => 'img/services/service_05.jpg',
            'title' => 'Compliance',
            'list'  => [
                 'SIEM',
                 'GRC',
                 'SOC',
                 'Email Archiving'
            ],
        ],
        [
            'thumb' => 'img/services/service_06.jpg',
            'title' => 'Remediation',
            'list'  => [
                 'PCI-DSS',
                 'Central Bank',
                 'ISO',
                 'HIPAA',
                 'GDPR',
            ],
        ]        
    ];
?>

<!-- Start service Area -->
<section class="service-area section-gap" id="service">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 pb-50 header-text text-center">
                <h1 class="mb-10">What we Offer to our Partners</h1>
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
    </div>	
</section>
<!-- End service Area -->

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
<section class="work-process-area section-gap" style="display: none;">
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

<?php include('footer.php'); ?>