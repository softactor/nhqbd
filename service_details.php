<?php include('header.php'); ?>
<?php
    $services = [
        [
            'thumb' => 'img/services/service_01.jpg',
            'title' => 'End Point',
            'list'  => [
                'Next Gen AV',
                 'Active Response',
                 'EDR',
                 'DAC(ai)',
            ]
        ]
    ];
?>
<!-- Start service Area -->
<section class="service-area section-gap" id="service">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 pb-50 header-text text-center">
                <h1 class="mb-10">Details</h1>
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
                                    <li><a href="#"><span><?php echo $serviceDataList; ?></span></a></li>
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
        <div class="row gallery-item">
            <?php include './partial/partners_logo.php'; ?>
        </div>
    </div>	
</section>
<!-- End service Area -->

<?php include('footer.php'); ?>