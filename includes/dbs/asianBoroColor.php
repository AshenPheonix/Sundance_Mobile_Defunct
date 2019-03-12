<?php
    require_once CLASSROOT.'AsianBoroColorClass.php';

    $asianBoroColor=[
        new AsianBoroColor('8202', 'rod', 'Cobalt Blue','6-7 mm (&ap;&frac14; inch)', '15 inches', null,'asian-cobalt-sm.jpg',  ['clickImg'=>'asian-cobalt-lg.jpg'],'f07bb141e0bf41d39c85bd8fce0e1ed3', '18.00', '9.00', false, 1),
        new AsianBoroColor('8205', 'rod', 'Light Amber','6-10 mm (&ap;3/8 inch)', '15 inches', null,'asian-lt-amber-sm.jpg', ['clickImg'=>'asian-lt-amber-lg.jpg'], '86f136d74f174facb265d2025bee9204', '18.00', '9.00', false, 1),
        new AsianBoroColor('8209', 'rod', 'Lavender','6-7 mm (&ap;&frac14; inch)', '24 inches', null,'asian-lavender-5m-sm.jpg',['clickImg'=>'asian-lavender-5m-lg.jpg'], 'a0ef8e902e27416385324f5735be8336', '18.00', '9.00', false, 1),
        new AsianBoroColor('8210', 'rod', 'Lavender','9-10 mm (&ap;3/8 inch) and ', '24 inches', null,'asian-lavender-sm.jpg',['clickImg'=>'asian-lavender-lg.jpg'], 'bbac1ac9dd854c638cc8099084a2f50d', '18.00', '9.00', false, 1),
        new AsianBoroColor('8204', 'rod', 'Green Rod','16-17 mm (&ap;5/8 inch) and', '24 inches', null,'boro-rod-asian-greensm.jpg', null, 'adee0862bff345599e5d44464965d963', '18.00', '9.00', false, 1),

        new AsianBoroColor('BTC16x2.5Blue', 'tube', 'Blue', '5/8 inch (16 mm)', '48 inches', '2.5 mm', 'borosilicate-colored-tubing-blue-16sm.jpg', null, ['310958533f3246f49878e189640cc603', '463c35c9f1fc479491f1d539a56abd8a'], null, [['1 tube', '6.00'], ['12 Tubes','46.80']], 'select', [1,1]),
        new AsianBoroColor('BTC19x2.8Blue', 'tube', 'Blue', '3/4 inch (19 mm)', '48 inches', '2.8 mm', 'borosilicate-colored-tubing-blue-3.jpg', null, ['eb2a73d0b7104c1c838088d8bdd938dd', '3eb689ec19a64ff38bb97851150150ee'], null, [['1 Tube', '9.00'], ['12 Tubes', '70.20']], 'select', [1,1]),
        new AsianBoroColor('BTC25x4Blue', 'tube', 'Blue', '1 inch (25 mm)', '48 inches', '4 mm', 'borosilicate-colored-tubing-blue-3.jpg', null, ['edf0714c295e4d00b08d35376b19e05a', '1e8e197d9c104e0e9356a1f1d693624e'], null, [['1 Tube', '16.00'], ['12 Tubes', '128.00']], 'select', [1,1]),
        new AsianBoroColor('BTC32x4Blue', 'tube', 'Blue', '1 &amp; 14 Inch (25 mm)', '48 inches', '4 mm', 'borosilicate-colored-tubing-blue-1.jpg', null, ['0a0749e57397470e84386a75b9d35abb', '28991ade81c84b26bd1363ef9e03b581'], null, [['1 Tube', '16.00'], ['12 Tubes', '156.00']], 'select', [1,1]),
        new AsianBoroColor('BTC19x2.8Lavender', 'tube', 'Lavender', '3/4 inch (19 mm)', '48 inches', '2.8 mm', 'borosilicate-colored-tubing-lavander-sm.jpg', null, ['ab99b336c8cd42059ce86e80bad87726', '8d034168ce3440e7aad6975df846fbdf'], null, [['1 Tube', '9.00'], ['12 Tubes', '70.20']], 'select', [1,1]),
        new AsianBoroColor('BTC25x4Lavender', 'tube', 'Lavender', '1 Inch (25 mm)', '48 inches', '4 mm', 'borosilicate-colored-tubing-lavander-sm.jpg', null, ['82212d2eabee464f865fcc91b70e6737', '0ce81b17085146e7b9f776f613c2eca9'], null, [['1 Tube', '16.00'], ['12 Tubes', '124.80']], 'select', [1,1]),
        new AsianBoroColor('BTC25x4Black', 'tube', 'Black', '1 Inch (25 mm)', '48 Inches', '4 mm', 'borosilicate-colored-tubing-black.jpg', null, ['2a63c13a76d9404b96aec4805b960cfb','e41f66b5bbaf4854acee296ee8ed4a93'], null, [['1 Tube', '24.00'],['12 Tubes', '216.00']], 'select', [1,1]),
        new AsianBoroColor('BTC32x4Black', 'tube', 'Black', '1-1/4 Inch (32 mm)', '48 inches', '4 mm', 'borosilicate-colored-tubing-black.jpg', null, ['1e9df0d2955d488da712c85122c3eaf1','9d2aa66942ff4c05b8e914afb69f5564'], null, [['1 Tube', '39.00'],['12 Tubes', '351.00']], 'select', [1,1]),
        new AsianBoroColor('BTC25x4White', 'tube', 'White', '1 Inch (25 mm)', '48 inches', '4 mm', 'borosilicate-colored-tubing-white.jpg', null, ['87c6102cbd684d0fb317da83435fc7ad', '3d48b8bdebe4487197526fc6e274414b'], null, [['1 Tube', '24.00'], ['12 Tubes', '216.00']], 'select', [1,1]),
        new AsianBoroColor('BTC32x4White', 'tube', 'White', '1-1/4 Inch (23 mm)', '48 Inches', '4 mm', 'borosilicate-colored-tubing-white.jpg', null, ['08a28564635f4e5886fb383e8dd30aef', '8d6bc953bef44d3898a330d56e3ff052'], null, [['1 Tube', '39.00'], ['12 Tubes', '351.00']], 'select', [1,1]),
        new AsianBoroColor('BTC16x2.5Green', 'tube', 'Green', '5/8 Inch (16 mm)', '48 Inches', '2.5 mm', 'borosilicate-colored-tubing-green-sm.jpg', null, ['97915eccb3a74b56a0813e7f6c0d595f', '88737eefad804866b8586a1f751b2fb5'], null, [['1 Tube', '6.00'], ['12 Tubes', '46.80']], 'select', [1,1]),
        new AsianBoroColor('BTC19x2.8Green', 'tube', 'Green', '3/4 Inch (19 mm)', '48 Inches', '2.8 mm', 'borosilicate-colored-tubing-green-sm.jpg', null, ['c35c7d4c526e4cccb7ce958df28bd55e', '41b63b22c9314d3288723cb412a32b73'], null, [['1 Tube', '9.00'], ['12 Tubes', '70.20']], 'select', [1,1]),
        new AsianBoroColor('BTC25x4Green', 'tube', 'Green', '1 Inch (25 mm)', '48 Inches', '4 mm', 'borosilicate-colored-tubing-green-sm.jpg', null, ['b64f15e096c741c89af0a449d257c659','fa005d8badef4376894b414c14c58c3b'], null, [['1 Tube', '16.00'], ['12 Tubes', '124.80']], 'select', [1,1]),
        new AsianBoroColor('BTC32x4Green', 'tube', 'Green', '1-1/4 Inches (32 mm)', '48 Inches', '4 mm', 'borosilicate-colored-tubing-green-sm.jpg', null, ['8b2816c73e3d4019a6a5d65a67970b05', '70a6a500309042649cc2b0ab086a1eee'], null, [['1 Tube', '20.00'], ['12 Tubes', '156.00']], 'select', [1,1]),
        new AsianBoroColor('BTC16x2.5LakeGreen', 'tube', 'Lake Green', '5/8 Inch (16 mm)', '48 Inches', '2.5 mm', 'borosilicate-colored-tubing-lake-green-sm.jpg', null, ['dd3859eebdde48d58816c98794ce8b1b', 'a08a53b8c62140cd8f588134e2c3a85c'], null, [['1 Tube', '6.00'], ['12 Tubes', '46.80']], 'select', [1,1]),
        new AsianBoroColor('BTC19x2.8LakeGreen', 'tube', 'Lake Green', '3/4 Inch (19 mm)', '48 Inches', '2.8 mm', 'borosilicate-colored-tubing-lake-green-sm.jpg', null, ['d693209628ac4ca095064a0dff640073', 'cb1a5d4b77c741b69bd9e86a261fdf79'], null, [['1 Tube', '9.00'], ['12 Tubes', '70.20']], 'select', [1,1]),
        new AsianBoroColor('BTC25x4LakeGreen', 'tube', 'Lake Green', '1 Inch (25 mm)', '48 Inches', '4 mm', 'borosilicate-colored-tubing-lake-green-sm.jpg', null, ['3d2fdf338cb44ce68e2cea902725f687', 'cd247a53ecb047b9afee29342f648df7'], null, [['1 Tube', '16.00'], ['12 Tubes', '124.00']], 'select', [1,1]),
        new AsianBoroColor('BTC32x4LakeGreen', 'tube', 'Lake Green', '1-1/4 Inches (32 mm)', '48 Inches', '4 mm', 'borosilicate-colored-tubing-lake-green-sm.jpg', null, ['08ce2255c09a49bd93d42058a629e49e', '0033d7bcb24942e4b381361ee317045e'], null, [['1 Tube', '20.00'], ['12 Tubes', '156.00']], 'select', [1,1]),
        new AsianBoroColor('BTC16x2.5Amber', 'tube', 'Amber', '5/8 Inch (16 mm)', '48 Inches', '2.5 mm', 'borosilicate-colored-tubing-amber.jpg', null, ['cde32c3b3fcb4fdba54ade523c5ed304', '5d47258f29064912957cde050d4d340e'], null, [['1 Tube', '6.00'], ['12 Tubes', '46.80']], 'select', [1,1]),
        new AsianBoroColor('BTC19x3Amber', 'tube', 'Amber', '3/4 Inch (19 mm)', '48 Inches', '3 mm', 'borosilicate-colored-tubing-amber.jpg', null, ['d693209628ac4ca095064a0dff640073', 'cb1a5d4b77c741b69bd9e86a261fdf79'], null, [['1 Tube', '9.00'], ['12 Tubes', '70.20']], 'select', [1,1]),
        new AsianBoroColor('BTC25x4Amber', 'tube', 'Amber', '1 Inch (25 mm)', '48 Inches', '4 mm', 'borosilicate-colored-tubing-amber.jpg', null, ['388b383328b74045803097135a7a9e2d', 'c4e2a9ea8a41455891a72c56f3d621ed'], null, [['1 Tube', '16.00'], ['12 Tubes', '124.00']], 'select', [1,1]),
        new AsianBoroColor('BTC32x4Amber', 'tube', 'Amber', '1-1/4 Inches (32 mm)', '48 Inches', '4 mm', 'borosilicate-colored-tubing-amber.jpg', null, ['a589cd6afb3d4c17aa3d2cefc5a7a153', '59646e42913045ad8182d44c66d08c5b'], null, [['1 Tube', '20.00'], ['12 Tubes', '156.00']], 'select', [1,1]),
        new AsianBoroColor('BTC19x3Pink', 'tube', 'Pink', '3/4 Inch (19 mm)', '48 Inches', '3 mm', 'borosilicate-colored-tubing-pink-sm.jpg', null, ['b28af19ba2c34401b9d463873a754f79', '473b4ad144434392af73dddb7723ca56'], null, [['1 Tube', '20.00'], ['12 Tubes', '180.00']], 'select', [1,1]),
        new AsianBoroColor('BTC25x4Pink', 'tube', 'Pink', '1 Inch (25 mm)', '48 Inches', '4 mm', 'borosilicate-colored-tubing-pink-sm.jpg', null, ['adbc5d11f102440aa4428340af252ef2', 'dca21341706c4b4ca72e2ca594665693'], null, [['1 Tube', '32.00'], ['12 Tubes', '288.00']], 'select', [1,1]),
    ];