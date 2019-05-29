<?php
    $partnersLogo   =   [
        [
            'title'         =>  'Mcafee',
            'full_image'    =>  'img/l4.png',
            'thumb_image'   =>  'img/l4.png',
            'link'          =>  '',
        ],
        [
            'title'         =>  'RSA',
            'full_image'    =>  'img/l1.png',
            'thumb_image'   =>  'img/l1.png',
            'link'          =>  '',
        ],
        [
            'title'         =>  'forcepoint',
            'full_image'    =>  'img/l2.png',
            'thumb_image'   =>  'img/l2.png',
            'link'          =>  '',
        ],
        [
            'title'         =>  'symantec',
            'full_image'    =>  'img/l3.png',
            'thumb_image'   =>  'img/l3.png',
            'link'          =>  '',
        ],
        [
            'title'         =>  'f5',
            'full_image'    =>  'img/27.png',
            'thumb_image'   =>  'img/27.png',
            'link'          =>  '',
        ],
        [
            'title'         =>  'paloalto',
            'full_image'    =>  'img/l9.png',
            'thumb_image'   =>  'img/l9.png',
            'link'          =>  '',
        ],
        [
            'title'         =>  'microsoft',
            'full_image'    =>  'img/20.png',
            'thumb_image'   =>  'img/20.png',
            'link'          =>  '',
        ],
        [
            'title'         =>  'adobe',
            'full_image'    =>  'img/26.png',
            'thumb_image'   =>  'img/26.png',
            'link'          =>  '',
        ],
        [
            'title'         =>  'radware',
            'full_image'    =>  'img/l8.png',
            'thumb_image'   =>  'img/l8.png',
            'link'          =>  '',
        ],
        [
            'title'         =>  'skybox',
            'full_image'    =>  'img/24.png',
            'thumb_image'   =>  'img/24.png',
            'link'          =>  '',
        ],
        [
            'title'         =>  'secure64',
            'full_image'    =>  'img/23.png',
            'thumb_image'   =>  'img/23.png',
            'link'          =>  '',
        ],
        [
            'title'         =>  'veritas',
            'full_image'    =>  'img/l5.png',
            'thumb_image'   =>  'img/l5.png',
            'link'          =>  '',
        ],
        [
            'title'         =>  'manageengine',
            'full_image'    =>  'img/21.png',
            'thumb_image'   =>  'img/21.png',
            'link'          =>  '',
        ],
        [
            'title'         =>  'rapid7',
            'full_image'    =>  'img/22.png',
            'thumb_image'   =>  'img/22.png',
            'link'          =>  '',
        ],
        [
            'title'         =>  'ibm',
            'full_image'    =>  'img/25.png',
            'thumb_image'   =>  'img/25.png',
            'link'          =>  '',
        ],
    ];
    if(isset($partnersLogo) && !empty($partnersLogo)){
        foreach ($partnersLogo as $plogo){   
?>
<div class="col-md-4">
    <a href="<?php echo $plogo['full_image'];  ?>" class="img-gal" title="<?php echo $plogo['title'];  ?>">
        <div class="single-gallery-image" style="background: url(<?php echo $plogo['thumb_image'];  ?>);"></div>
    </a>
</div>
    <?php }} ?>