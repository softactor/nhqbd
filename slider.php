<?php
$themeImages    =   [
    [
        'title' =>  'Thme Image 01',
        'path'  =>  'theme_01.jpg',
    ],
    [
        'title' =>  'Thme Image 02',
        'path'  =>  'theme_02.jpg',
    ],
    [
        'title' =>  'Thme Image 03',
        'path'  =>  'theme_03.jpg',
    ],
    [
        'title' =>  'Thme Image 02',
        'path'  =>  'theme_04.jpg',
    ],
    [
        'title' =>  'Thme Image 03',
        'path'  =>  'theme_05.jpg',
    ],
];
?>

<!-- start banner Area -->
<div class="slider-wrapper theme-default">
    <div id="slider" class="nivoSlider">
        <?php
            if(isset($themeImages) && !empty($themeImages)){
                foreach($themeImages as $image){   
        ?>
        <img src="images/<?php echo $image['path']; ?>" data-thumb="images/<?php echo $image['path']; ?>" alt="<?php echo $image['title']; ?>" />
        <?php }} ?>
    </div>
</div>
<!-- End banner Area -->