<?php
    $partnersLogo   =   [
        [
            'title'         =>  'Mcafee',
            'full_image'    =>  'images/partners/mcafee.jpg',
            'thumb_image'   =>  'images/partners/mcafee.jpg',
            'link'          =>  '',
        ],
        [
            'title'         =>  'RSA',
            'full_image'    =>  'images/partners/rsa.png',
            'thumb_image'   =>  'images/partners/rsa.png',
            'link'          =>  '',
        ],
        [
            'title'         =>  'forcepoint',
            'full_image'    =>  'images/partners/forcepoint.png',
            'thumb_image'   =>  'images/partners/forcepoint.png',
            'link'          =>  '',
        ],
        [
            'title'         =>  'symantec',
            'full_image'    =>  'images/partners/symantec.png',
            'thumb_image'   =>  'images/partners/symantec.png',
            'link'          =>  '',
        ],
        [
            'title'         =>  'f5',
            'full_image'    =>  'images/partners/f5.png',
            'thumb_image'   =>  'images/partners/f5.png',
            'link'          =>  '',
        ],
        [
            'title'         =>  'paloalto',
            'full_image'    =>  'images/partners/paloalto.png',
            'thumb_image'   =>  'images/partners/paloalto.png',
            'link'          =>  '',
        ],
        [
            'title'         =>  'GFi',
            'full_image'    =>  'images/partners/GFi.png',
            'thumb_image'   =>  'images/partners/GFi.png',
            'link'          =>  '',
        ],
        [
            'title'         =>  'microsoft',
            'full_image'    =>  'images/partners/microsoft.png',
            'thumb_image'   =>  'images/partners/microsoft.png',
            'link'          =>  '',
        ],
        [
            'title'         =>  'adobe',
            'full_image'    =>  'images/partners/adobe.png',
            'thumb_image'   =>  'images/partners/adobe.png',
            'link'          =>  '',
        ],
        [
            'title'         =>  'radware',
            'full_image'    =>  'images/partners/radware.png',
            'thumb_image'   =>  'images/partners/radware.png',
            'link'          =>  '',
        ],
        [
            'title'         =>  'fsecure',
            'full_image'    =>  'images/partners/fsecure.png',
            'thumb_image'   =>  'images/partners/fsecure.png',
            'link'          =>  '',
        ],
        [
            'title'         =>  'skybox',
            'full_image'    =>  'images/partners/skybox.png',
            'thumb_image'   =>  'images/partners/skybox.png',
            'link'          =>  '',
        ],
        [
            'title'         =>  'secure64',
            'full_image'    =>  'images/partners/secure64.png',
            'thumb_image'   =>  'images/partners/secure64.png',
            'link'          =>  '',
        ],
        [
            'title'         =>  'veritas',
            'full_image'    =>  'images/partners/veritas.png',
            'thumb_image'   =>  'images/partners/veritas.png',
            'link'          =>  '',
        ],
        [
            'title'         =>  'manageengine',
            'full_image'    =>  'images/partners/manageengine.jpg',
            'thumb_image'   =>  'images/partners/manageengine.jpg',
            'link'          =>  '',
        ],
        [
            'title'         =>  'rapid7',
            'full_image'    =>  'images/partners/rapid7.png',
            'thumb_image'   =>  'images/partners/rapid7.png',
            'link'          =>  '',
        ],
        [
            'title'         =>  'temable',
            'full_image'    =>  'images/partners/temable.png',
            'thumb_image'   =>  'images/partners/temable.png',
            'link'          =>  '',
        ],
        [
            'title'         =>  'ibm',
            'full_image'    =>  'images/partners/ibm.png',
            'thumb_image'   =>  'images/partners/ibm.png',
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