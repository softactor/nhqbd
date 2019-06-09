<?php include('header.php'); ?>
<?php include('clients_image_array.php'); ?>
<!-- Start home-about Area -->
<section class="section-gap relative">			
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>
                    Clients
                </h1>
                <p>
                    
                </p>                
                <section class="slider">
                    <?php
                        if(isset($clients) && !empty($clients)){
                            foreach($clients as $clint){
                    ?>
                    <h3><?php echo $clint['title']; ?></h3>
                    <div class="flexslider carousel">
                        <ul class="slides client_slides">
                            <?php
                                if(isset($clint['list']) && !empty($clint['list'])){
                                    foreach($clint['list'] as $clintList){
                            ?>
                            <li>
                                <img src="<?php echo $clintList['logo']; ?>" title="<?php echo $clintList['title']; ?>" alt="<?php echo $clintList['title']; ?>" />
                            </li>
                            <?php }} ?>
                        </ul>
                    </div>
                    <?php }} ?>
                </section>
            </div>
        </div>
    </div>	
</section>
<!-- End home-about Area -->

<?php include('footer.php'); ?>