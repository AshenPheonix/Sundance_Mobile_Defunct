<?php

require_once CLASSROOT.'GroundJoints.php';

$groundJoints=[
    #german
    new GroundJoint('1019F', 'german', 'German Ground Joint. Female 10/19 with a 1.5 mm wall', '3efa4c18d7594ffbbe6af6b570feae9f', 'qty', 'stem-14mm-female-sm.png', ['clickImg'=>'stem-14mm-female-lg.JPG'], [[1,'2.29'],[50, '1.95']], 1),
    new GroundJoint('1019M', 'german', 'German Ground Joint. Male 10/19 with a 1.5 mm wall', '3bb9013099c94bdb84ba65668c19e1bd', 'qty', 'stem-14mm-male-sm.png', ['clickImg'=>'stem-14mm-male-lg.JPG'], [[1,2.29],[50, 1.95]], 1),
    new GroundJoint('1423F', 'german', 'German Ground Joint. Female 14/23 with a 1.8 mm wall', '7266ae768ee44379825b506199d4303f', 'qty', 'stem-14mm-female-sm.png', ['clickImg'=>'stem-14mm-female-lg.JPG'], [[1,2.29],[50,1.95]], 1),
    new GroundJoint('1423M', 'german', 'German Ground Joint. Male 14/23 with a 1.5 mm wall', '2d89287cbc41460dacd58cd74d5e0146', 'qty', 'stem-14mm-male-sm.png', ['clickImg'=>'stem-14mm-male-lg.JPG'], [[1,2.29],[50,1.95]], 1),
    new GroundJoint('1926F', 'german', 'German Ground Joint. Female 19/26 with a 1.8 mm wall', '825f591de211457faf4eb726809c2aec', 'qty', 'stem-17mm-female-sm.png', ['clickImg'=>'stem-17mm-female-lg.JPG'], [[1,2.29],[50,1.95]], 1),
    new GroundJoint('1926M', 'german', 'German Ground Joint. Male 19/26 with a 1.8 mm wall', '016ec4545dc74608a43d85f075768608', 'qty', 'stem-17mm-male-sm.png', ['clickImg'=>'stem-17mm-male-lg.JPG'], [[1,2.29],[50,'1.95']],1),
    new GroundJoint('B1926F', 'german', 'German Ground Joint. Female 19/26 Bistibal with a 2.8 mm wall', 'b617c50c752f456cac0b5fc187c1ed3b', 'qty', 'b1926m.jpg', ['clickImg'=>'b1626mlg.jpg'], [[1,2.69],[50,2.15]],1),
    new GroundJoint('B1926M', 'german', 'German Ground Joint. Male 19/26 Bistibal with a 2.5 mm wall', '0a127fc3ab7f4949a91d4f6bf159a2c0', 'qty', 'b1626m.jpg', ['clickImg'=>'b1626mlg.jpg'], [[1,2.69],[50,2.15]], 1),
    new GroundJoint('1423MF', 'german', 'German Ground Joint. Pair 14/23 with a thin wall', '2ee88f1f479344fdb1fdeca0bcc692e9', 'qty', 'ground-joint-14mm-pair-sm.png', ['clickImg'=>'ground-joint-14mm-pair-lg.png'], [[1,'4.00'],[50,'3.50']], 1),
    new GroundJoint('1926MF', 'german', 'German Ground Joint. Pair 19/26 with a thin wall', 'ea844b0f704841af8ba2fcb34ff19b08', 'qty', 'ground-joint-17mm-pair-sm.png', ['clickImg'=>'ground-joint-17mm-pair-lg.png'], [[1,'4.00'], [50,'3.50']],1),
    new GroundJoint('B1926MF', 'german', 'German Ground Joint. Pair 19/26 Bistibal with a heavy wall', '2a80c5adba4d46efaa6f1d536abe973a', 'qty', 'b1926p.jpg', ['clickImg'=>'b1926plg.jpg'], [[1,'5.00'],[50,'4.50']], 1),
    new GroundJoint('1423Dewar', 'german', 'German Ground Joint. 14/23 Dewar Seal.', 'a30b743d6d584013ad87946b4f9b1c0c', false, '1426dewarsw.jpg', ['clickImg'=>'1426dewar.jpg'], 4.89, 1),
    new GroundJoint('lopro1420', 'german', 'German Ground Joint. Lo Pro Bushing. 19/26 outer and 14/19 Internal.', 'a5372dca0f8b473f9a704879e7b4ac30', false, 'loprobushing.jpg', ['clickImg'=>'loprobushing.jpg'], '4.20', 1),

    #chinese
    new GroundJoint('C1423F', 'chinese', 'Chinese Ground Joint. Female 14/23.', '3455b440b5b3421bbec70dde57521b91', 'multi', 'stem-14mm-female-sm.png', ['clickImg'=>'stem-14mm-female-lg.JPG'], 1.25, 1),
    new GroundJoint('C1423M', 'chinese', 'Chinese Ground Joint. Male 14/23.', '7e3e2b6f288a4bf8820f9457475ea1c5', 'multi', 'stem-14mm-male-sm.png', ['clickImg'=>'stem-14mm-male-lg.JPG'], 1.25, 1),
    new GroundJoint('C1926F', 'chinese', 'Chinese Ground Joint. Female 19/26', 'c17720b0852a45158b152e511b871189', 'multi', 'stem-14mm-female-sm.png', ['clickImg'=>'stem-14mm-female-lg.JPG'], 1.25, 1),
    new GroundJoint('C1926M', 'chinese', 'Chinese Ground Joint. Male 19/26', 'afa1021075f14285bc467b76ae577f1e', 'multi', 'stem-14mm-male-sm.png', ['clickImg'=>'stem-14mm-male-lg.JPG'], 1.25, 1),
    new GroundJoint('C1926MB', 'chinese', 'Chinese Ground Joint. Male 19/26 in Cobalt Blue', '2e979cedb82d4cc3bc8450a7e5e8c57b', 'multi', '1926bluesm.jpg', ['clickImg'=>'1926blue.jpg'], 1.25, 1),
    new GroundJoint('C1926MLG', 'chinese', 'Chinese Ground Joint. Male 19/26 in Lake Green', 'e7562dfc0b1e4194882410c4069b3dc1', 'multi', '1926lakegreensm.jpg', ['clickImg'=>'1926lakegreen.jpg'], 1.25, 1),
    
];