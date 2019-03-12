<?php

    require_once CLASSROOT.'Dichro4X4.php';


$dichro4by4s=[
    #"Flat"
    new Dichro904X4('D90RB244B', 'flat', 'Rainbow 2', 'Thin Black', 'b3f4dedf8f6e697e86d0eb01a67b3ec4', 'dichroic-glass-D90RB244C-med.jpg', false, null, 19,1),
    new Dichro904X4('D90Mix44B', 'flat', 'Mixture', 'Thin Black', '4f22d7b178bbd5f490de467890beadbd', 'dichroic-glass-D90Mix44C-med-1.jpg', false, null, 13, 1),
    new Dichro904X4('D90CC9X44C', 'flat', 'Cyan / Copper', 'Thin Clear', '023da0269a33e27d216703665de5cd02', 'dichroic-glass-D90CC44C-med.jpg', false, null, 13, 1),
    new Dichro904X4('D90BLKCH9X44C', 'flat', 'Black Cherry', 'Clear or Black', ['2664968b529129aaaac232c6cc2674c2','13695f7eed374a10b27f2793025189e8'], 'dichroic-glass-color-black-cherry.jpg', 'select', null, [['on Clear', '13.00'],['on Black','13.00']], [1,1]),
    new Dichro904X4('D90S9X44C', 'flat', 'Salmon', 'Clear or Black', ['f953f83109df4fbb5046ab3ca8457a29','70e63d1ab3ee4051930955ee20d24854'], 'dichroic-glass-class-salmon.jpg', 'select', null, [['on Clear', '13.00'],['on Black','13.00']], [1,0]),
    new Dichro904X4('D90GM9X44C', 'flat', 'Green / Magenta', 'Clear or Black', ['7d74d81800b040daa51ba30d044e3892', 'cdb2ba7132784fdbb017f65cfd8b7241'], 'dichroic-glass-color-green-magenta.jpg', 'select', null, [['on Clear', '16.00'],['on Black', '16.00']], [0,1]),
    new Dichro904X4('D90DMB9X44C', 'flat', 'Green / Magenta / Blue', 'Clear and Black', ['5cf5fef24b4e4a5bbcf32102274f72a8', 'd1c823a03a5a452db1a07f11ca88ed51'], 'dichroic-glass-color-green-magenta-blue.jpg', 'select', null, [['on Clear', '16.00'],['on Black','16.00']], [0,1]),
    new Dichro904X4('D90GP9X44C', 'flat', 'Green / Pink', 'Clear or Black (clear also has blue)', ['d4880b583718411e9665d8f8c492e912', 'b1e65a38dcfc4de996f8402dacd15649'], 'dichroic-glass-color-green-pink.jpg', 'select', null, [['on Clear', '16.00'],['on Black','16.00']], [1,1]),
    new Dichro904X4('D90MG9X44C', 'flat', 'Magenta / Green', 'Clear or Black', ['5c497a6cb31941bcb0d305fd11d928da','1d753799b06d4e1785d2cf870c2cde6d"'], 'dichroic-glass-color-magenta-green.jpg', 'select', null, [['on Clear', '13.00'], ['on Black', '13.00']], [1,0]),
    new Dichro904X4('D90YP9X44C', 'flat', 'Yello / Purple', 'Clear or Black', ['33443d18b3184800b726415257472339','5d97f17478c347449b29e373adab37f7'], 'dichroic-glass-color-yellow-purple.jpg', 'select', null, [['on Clear', '13.00'],['on Black', '13.00']], [0,1]),
    
    #Pattern
    new Dichro904X4('D90Mix9Box144C', 'pattern', 'Mixture Coating with Box Pattern', 'Clear', '6c5705cb196842fc903865c88b440837', 'dichroic-glass-D90MixB44C-med.jpg', false, null, '13.00', 1),
    new Dichro904X4('D90RB19Dot144C', 'pattern', 'Rainbow Coating with Dot 1 Pattern', 'Clear or Black', ['a170a6ded9097dd4638c41c4c20cef68', 'ee91e7b82e94476b8fe9827b840c5f2f'], 'dichroic-glass-pattern-dot116_tn.jpg', 'select', null, [['on Clear', '13.00'], ['on Black', '13.00']], [1,1]),
    new Dichro904X4('D90RB19Dot244B', 'pattern', 'Rainbow Coating with Dot 2 Pattern', 'Black', '13d0e0b7f78e4c3faca52fbe92b5039a', 'dichroic-glass-pattern-dot18_tn.jpg', false, null, '13.00', 1),
    new Dichro904X4('D90R12DotD44B', 'pattern', 'Rainbow Coating with Dot 3 Pattern', 'Black', '7b1dd90564fd4020b9a870c69c0c9324', 'dichroic-glass-pattern-dot12_tn.jpg', false, null, '13.00', 1),
    new Dichro904X4('D90RB19Sq544B', 'pattern', 'Rainbow Coating with .5 Square Pattern', 'Clear or Black', ['e3be034ea5be08079a6015707ed7e98f', 'db55e80984844b2d844d7072cd5531bb'], 'dichroic-glass-pattern-sq116_tn.jpg', 'select', null, [['on Clear', '13.00'],['on Black', '13.00']], [0,1]),
    new Dichro904X4('D90RB19Sq144B', 'pattern', 'Rainbow Coating with Square Pattern 1', 'Clear or Black', ['3506a1a35b7f8248320229517044681b', 'af7a346b3f4145508c104bde514be383'], 'dichroic-glass-pattern-sq118_tn.jpg', 'select', null, [['on Clear', '13.00'], ['on Black', '13.00']], [0,1]),
    new Dichro904X4('D90RB19Sq244B', 'pattern', 'Rainbow Coating with Square Pattern 2', 'Clear or Black', ['4ef57d49a1dd22f92993b62778d039f1', '87f109490e114bf0bca7df8aca2a87a8'], 'dichroic-glass-pattern-sq316_tn.jpg', 'select', null, [['on Clear', '13.00'],['on Black', '13.00']], [0,1]),
    new Dichro904X4('D90RB19Sq244B', 'pattern', 'Rainbow Coating with Square Pattern 3', 'Clear and Black', ['894a5af3ce63f6a4b57b65496cce1ec5', 'da238252dc934f91a48bc6c8249712dd'], 'dichroic-glass-pattern-sq14_tn.jpg', 'select', null, [['on Clear', '13.00'],['on Black', '13.00']], [0,1]),
    new Dichro904X4('D90R1BRK44C', 'pattern', 'Rainbow Coating with Brick 1 Pattern', 'Black', '0aa4d858779d462a2dc08d268e1785ef', 'dichroic-glass-pattern-brick_tn.jpg', false, null, '13.00', 1),
    new Dichro904X4('D90R1M44C', 'pattern', 'Rainbow Ocating with Marquis 1 Pattern', 'Clear or Black', ['399d59d44ad06e74b158cfe8c2ed1034', 'dd74ff76e20c40bca25ed025b0ef9f6f'], 'dichroic-glass-pattern-marquis1.jpg', 'select', ['clickImg'=>'dichroic-glass-pattern-marquis1-lg.jpg'], [['on Clear','13.00'],['on Black','13.00']], [1,1]),
    new Dichro904X4('D90R2M44C', 'pattern', 'Rainbow Coating with Marquis 2 Pattern', 'Clear or Black', ['cc878be445406af6fa1a2d1111e18a38', '079c8055080241bb9a000b9919192f4e'], 'dichroic-glass-D90R2M44C-med.jpg', 'select', ['clickImg'=>'dichroic-glass-D90R2M44C-lg.jpg'], [['on Clear', '13.00'],['on Black', '13.00']], [1,1]),
    new Dichro904X4('D90Mix9Bal344C', 'pattern', 'Mixture Coating with Baloons Pattern', 'Clear or Black', ['79564c3f1d52cea26636b5a9227c23ef', '86c3de196ddf4e6da5fc01d7e44fb333'], 'dichroic-glass-D90Mix9BAL344B-sm.jpg', 'select', ['clickImg'=>'dichroic-glass-D90Mix9BAL344B-lg.jpg'], [['on Clear', '13.00'], ['on Black', '13.00']], [1,1]),
    
    #Textured
    new Dichro904X4('D90CC2X44B', 'texture', 'Cyan/Copper Coating', 'Thin Reed Textured Black', '5dc5d61cd2d842d0a3cdee89ceb9be48', 'dichroic-glass-D90CCR44C-med.jpg', false, ['clickImg'=>'dichroic-glass-D90CCR44C-lg.jpg'], '13.00', 1),
    new Dichro904X4('D90GMB1X44C', 'texture', 'Green/Magenta/Blue', 'Uroboros Fibroid 3mm on Clear or Black', ['4234b3471dd0e1029cfd463be6c4e3a8', '756d822610103112ba2beb53e9349bd8'], 'dichroic-glass-D90GMFib44C-sm.jpg', 'select', ['clickImg'=>'dichroic-glass-D90GMFib44C-lg.jpg'], [['on Clear', '16.00'],['on Black', '16.00']], [1,1]),
    new Dichro904X4('D90V2X44B', 'texture', 'Violet Coating', 'Bullseye Reed Textured Black', '0aadbc77d4a648700bc9d87bc1113.00f52', 'dichroic-glass-D90V2X44B-sm.jpg', false, ['clickImg'=>'dichroic-glass-D90V2X44B-lg.jpg'], '13.00', 1),
    new Dichro904X4('D90S2X44C', 'texture', 'Salmon Coating', 'Bullseye Reed Textured Clear or Black', ['9a7e05899559ef02a455227e053c5c3b', 'a123d512563d4aad29daddeb7aa802fc'], 'dichroic-glass-D90V2X44C-med-1.jpg', 'select', ['clickImg'=>'dichroic-glass-D90S2X44B-lg.jpg', 'secondaryImg'=>['dichroic-glass-D90S2X44B-sm.jpg', 'dichroic-glass-D90S2X44B-lg.jpg']], [['on Clear', '13.00'], ['on Black', '13.00']], [1,1]),
    new Dichro904X4('D90YB4X44B', 'texture', 'Yellow/Blue Coating', 'Radium 3mm Textured Black', 'd9da69c9a16.00ae1fccb2fcbe6975894fb', 'D90YB4X44B-thumb.jpg', false, ['clickImg'=>'D90YB4X44B.jpg'], '13.00', 0),
    new Dichro904X4('D90CR88X44B', 'texture', 'Cyan/Red Coating', 'Granite Ripple Textured Black', 'f40a84556de9f46e4015bf4ed888fb5f', null, false, null, '13.00', 1),
    new Dichro904X4('D90CYDR88X44B', 'texture', 'Cyan/Dark Red Coating', 'Granite Ripple Textured Black', 'b112587de944c88a0ee63a95d9a55a63', 'dichroic-glass-D90CDR88X-full-sm.jpg', false, ['clickImg'=>'dichroic-glass-D90CDR88X-full-lg.jpg'], '13.00', 1),
    new Dichro904X4('D90MIX88X44B', 'texture', 'Mix Coating', 'Granite Ripple Textured Black', 'b0aebde5e47e1425481c7f51ab8920a1', null, false, null, '13.00', 1),
    new Dichro904X4('D90GMB88X44B', 'texture', 'Green/Magenta/Blue Coating', 'Granite Ripple Texture on Black', '02dd3ad35a5526a92337d90f1bbd059c', null, false, null, '16.00', 1),
    new Dichro904X4('D90R288X44B', 'texture', 'Rainbow 2 Coating', 'Granite Ripple Textured Black', '1e177fbedbcb47c983b71966fdea0bf1', null, false, null, '19.00', 1),
    new Dichro904X4('D90RS88X44B', 'texture', 'Red/Silver Coating', 'Granite Ripple Textured Black', 'd3d61966a5cfa97be560ea12bf0969ba', null, false, null, '16.00', 1),
    new Dichro904X4('D90BG8X44B', 'texture', 'Blue/Gold Coating', 'Granite Ripple Textured Black Or Clear', ['a87441991a5f09568f246766209a4ea8','65f1fc1750c84451a256330373894803'], 'dichroic-glass-D90BG8X-lg-1.jpg', 'select', null, [['on Black', '13.00'], ['on Clear', '13.00']], [1,1]),
    new Dichro904X4('D90MIX6X44B', 'texture', 'Mix Coating', 'Fipple Textured Black', '7429100535617963e60febcd60fdab1f', null, false, null, '13.00', 1),
    new Dichro904X4('D90R26X44B', 'texture', 'Rainbow 2 Coating', 'Fipple Textured Black', '566b0a2dfe3e4d24a329503011c16.00561', null, false, null, '19.00', 1),
    new Dichro904X4('D90R16X44B', 'texture', 'Rainbow 1 Coating', 'Fipple Textured Black', '487279a9e267f62954d32a04ee41b24a', null, false, null, '13.00', 1),
    new Dichro904X4('D90RS6X44B', 'texture', 'Red/Silver Coating', 'Fipple Textured Black', 'f49328525e93f13.00c63aa1932eadcb76b', null, false, null, '16.00', 1),
    new Dichro904X4('D90GMB6X44B', 'texture', 'Green/Magenta/Blue Coating', 'Fipple Textured Black', 'be38098f06a688228093568987925e8a', null, false, null, '16.00', 1),
    new Dichro904X4('D90CR6X44B', 'texture', 'Cyan/Red Coating', 'Fipple Textured Black', '0dacff5ae46344688bbbcf2594239.0086e', 'CR1X-12vsm.jpg', false, null, 13.00, 1),
    new Dichro904X4('D90GM1X44C', 'texture', 'Green/Magenta Coating', 'Fibroid Textured Clear', '15bfd37c4075639.008ac14aa297d60ad21', 'dichroic-glass-D90GMFib44C-sm.jpg', false, ['clickImg'=>'dichroic-glass-D90GMFib44C-lg.jpg', 'secondaryImg'=>['dichroic-glass-D90GMFib44C-med-2.jpg','dichroic-glass-D90GMFib44C-lg-2.jpg']], '16.00', 1),
    new Dichro904X4('D90YB1X44C', 'texture', 'Yellow/Blue Coating', 'Fibroid Textured Clear', 'f07cb0b6ecf16.0042026189712c90c5a67', null, false, null, '13.00', 1),
    new Dichro904X4('D90RB21X44B', 'texture', 'Rainbow 2 Coating', 'Fibroid 3mm Textured Black', '7776554233d54262b5409425743f1bef', null, false, null, '19.00', 1),
    new Dichro904X4('D90GMB3X44B', 'texture', 'Green/Magenta/Blue coating', 'Accordian Textured 3mm Black', 'e33e311e66b8778dd84a605473931d14', null, false, null, '16.00',1),
    new Dichro904X4('D90YP3X44C', 'texture', 'Yellow/Purple Coating', 'Accordian Textured 3mm on Clear or Black', ['74b9f8ea973299d12ccc5340b1806323', '26b191f03300e2b2f7d2a28608745861'], null, 'select', null, [['on Clear', '13.00'],['on Black', '13.00']], 1),
    new Dichro904X4('D90RB3X44B', 'texture', 'Rainbow 1 Coating', 'Accordian Textured 3mm on Black', '9a8d12b464266b09770f2e378df17788', null, false, null, '13.00', 1),
    new Dichro904X4('D90S3X44B', 'texture', 'Salmon Coating', 'Accordion Textured 3mm  on Black or Clear', ['9ca2cf77bf34fbf8b81b5e593bb16990', 'ae045de6ef9145b187936262d3f4be24'], null, 'select', null, [['on Black', '13.00'],['on Clear', '13.00']], [0,1]),
    new Dichro904X4('D90BLKCH2X44B', 'texture', 'Black Cherry Coating', 'Reed Textured 3mm on Black', 'bf6bf4c005740cbda5c2e4ba2a61a165', null, false, null, '13.00', 1),
    new Dichro904X4('D90RS2X44B', 'texture', 'Red/Silver Coating', 'Reed Textured 3mm on Black or Clear', ['c4a15de1fa620ae293534a437ad3f85f', '00c71204e27e2883a8bd98d79806d0ba'], null, 'select', null, [['on Black', '16.00'], ['on Clear', '16.00']], [1,1]),
    new Dichro904X4('D90CARED2X44C', 'texture', 'Candy Apple Red Coating', 'Reed Textured 3mm on Clear Glass', 'bb3dca8767b32cd77aa4ae440225fd7e', null, false, null, '13.00', 1),
    new Dichro904X4('D90GMB1X44B', 'texture', 'Green/Magenta/Blue Coating', 'Reed Textured 3mm on Black or Clear', ['756d822610103112ba2beb53e9349bd8','4234b3471dd0e1029cfd463be6c4e3a8'], null, 'select', null, [['on Black', '16.00'],['on Clear', '16.00']], [1,0]),
    new Dichro904X4('D90E2X44B', 'texture', 'Emerald Coating', 'Reed Textured 3mm on Black or Clear', ['a581ed3533cb60b9f0a095cc8ca23c0c', '7423b0e3da96c8a913a4be5c7a9fb539'], 'D90E2X44-thumb.jpg', 'select', ['clickImg'=>'D90E2X44-lg.jpg'], [['on Black', '13.00'],['on Clear', '13.00']], [1,0]),
    new Dichro904X4('D90BG2X44B', 'texture', 'Blue/Gold Coating', 'Reed Textured 3mm on Black', '4ebdcc98e7a5364bb76c8568cf8ce25e', null, false, null, '13.00', 1),
    new Dichro904X4('D90V2X44C', 'texture', 'Violet Coating', 'Reed Textured 3mm on Clear or Black', ['73f7c454eee7b3c593b7f33b42c0e013', '0aadbc77d4a648700bc9d87bc1113f52'], 'dichroic-glass-D90V2X44B-sm.jpg', 'select', ['clickImg'=>'dichroic-glass-D90V2X44B-lg.jpg'], '13.00', 1),
    
    #Borderline
    new Dichro904X4('44440', 'borderline', 'Nautilus', 'Clear', 'dedb29aedfce4949a3c97fbd8e7bf6b2', 'NAUTILUS-MX-FUSION-med.jpg', false, null, '29.00', 1),
    new Dichro904X4('44446', 'borderline', 'Thorns', 'Clear', '1d4a38f64df64080a5247aeee5cf02a1', 'THORNS-med.jpg', false, null, '29.00', 1),
    new Dichro904X4('44259', 'borderline', 'Animals', 'Clear', '49cf00aa8f5a44988eec05fe79b059a5', 'ANIMALS-med.jpg', false, null, '19.00', 1),
];