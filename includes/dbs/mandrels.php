<?php
require_once CLASSROOT.'MandrelClass.php';
require_once CLASSROOT.'BraceletMandrelClass.php';

$mandrels=[
    new Mandrel('M045', 'bead', '3/64 Inch (.045 Inch - 1.1 mm) Diameter', 170, NULL, [['Dozen(12)','6.00'],['1 Pound Bulk Finished','33.00'],['1 Pound Bulk Unfinished *', '24']],['0148eb3477b4cb009aea61551d2dadc2','72bcfe2738d544288a4fbe731ef424f9','99b7afb7710c4c209b35cdac22cb8f7a'], 'select', [1,1,1]),
    new Mandrel('M062', 'bead', '1/16 Inch (.062 Inch - 1.6 mm) Diameter', 198, NULL, [['Dozen(12)', '7.00'],['2 Pound Bulk Finished', '48.00'],['2 Pound Bulk Unfinished*', '39.00']], ['40c65ff918317b0a9961636a8550f5af', '51c96e9690bf4444aa72b40123ea10d6', 'fb2cdc9d2d634c0781832fc0e9f7d73e'], 'select', [1,1,1]),
    new Mandrel('M080', 'bead', '5/64 Inch (.080 Inch - 2 mm) Diameter', 116, NULL, [['Dozen(12)', '8.00'],['2 Pound Bulk Finished', '42.00'],['2 Pound Bulk Unfinished*', '35.00']], ['b38537c6d72264531fd64bbee67cdd44', '8789bcf4f27f4b09ac14fe76ecbf328e', '00baf46d88da4c0e9c4e1b8c129ea533'], 'select', [1,1,1]),
    new Mandrel('M092', 'bead', '3/32 Inch (.092 Inch - 2.3 mm) Diameter', 83, NULL, [['Dozen(12)', '9.00'],['2 Pound Bulk Finished', '42.00'],['2 Pound Bulk Unfinished*', '35.00']], ['e2e45d39dcfe45fb8c03b3ff755fbda5', 'd2cedff756717b9318bd7b5164bf91e1', 'b8c339ce3e95467fb4e2469473625a0b'], 'select', [1,1,1]),
    new Mandrel('M125', 'bead', '1/8 Inch (.125 Inch - 3.2 mm) Diameter', 48, NULL, [['Dozen(12)', '10.00'],['2 Pound Bulk Finished', '42.00'],['2 Pound Bulk Unfinished*', '35.00']], ['7dd5ce5b2521bb370fea5038848dcd97', 'fac37919371d470f9761641479ddce40', '2889e6ad5f924bd2bbaea4390de724a7'], 'select', [1,1,1]),
    new Mandrel('M156', 'bead', '5/32 Inch (.156 Inch - 4 mm) Diameter', 30, NULL, [['Dozen(12)', '16.00'],['2 Pound Bulk Finished', '42.00'],['2 Pound Bulk Unfinished*', '35.00']], ['8bbdbda3f40558137c44b5944a5f9684', '75a8adceac2c42699f31908960891e13', 'e0562250177d48179f8e27a2ee671a50'], 'select', [1,1,1]),
    new Mandrel('M187', 'bead', '3/16 Inch (.187 Inch - 4.75 mm) Diameter. Bulk Pricing Not available', NULL, NULL, '19.00', '6d7d4b3ac2fe42859207ebe1c212ad6d', false, 1),
    new Mandrel('M500', 'bead', '13 Assorted of each. No Bulk', NULL, NULL, '12.00', '7cd43cff195696c3bfc4732cee8b3985', false, 1),
    
    new Mandrel('BM4 & BM3', 'button', 'Steel Mandrels for making glass buttons. Prongs for BM4 are 5.5 mm apart (measured center to center) and 2.5 mm(3/32 Inch) thick. <br>Prongs for BM3 are 4 mm apart (measured center to center) and 1.5 mm(1/16 Inch) thick', NULL, 'button-mandrels-two.jpg', [['BM3','5.50','eee3558b9ddd4e35b387b0d2de2e2cbd'],['BM4','5.50','1927b3f929a345e6875ffbf8cd334ab5']], NULL, 'select', [1,1]),

    new Mandrel('M14T', 'tube', '&frac14; inch (6.34 mm) Diameter and a 12 inch length', null, null, '7.00', '9ab51090dc854bd61e90d9eef4a1e072', false, 1),
    new Mandrel('M516T', 'tube', '5/16 Inch (7.93 mm) Diameter and 12 inches long', null, null, '8.00', '2b01d09ada2c4e8da5fdb8d2901ed96d', false, 1),
    new Mandrel('M38T', 'tube', '&frac38; Inch (9.5 mm) Diameter and 12 OR 18 inches long', null, null, [['12 Inch Length','8.00','aa065b1f5ffbce9975bdb61eea9b5eaa'],['18 Inch Length','11.00','ac08c0b157624940b6e107547c0e1cfc']], null, 'select', [1,1]),
    new Mandrel('M716T', 'tube', '7/16 inch (11.1 mm) Diameter and 12 OR 18 inches long', null, null, [['12 Inch Length','9.00','d6c7d84f21454eba9fa7c50b7ed88b32'],['18 Inch Length','11.00','308435befaf84a698b6d24f5fbb68d48']], null, 'select', [1,1]),
    new Mandrel('M12T', 'tube', '&frac12; Inch (12 mm) Diameter and 12 OR 18 inches long', null, null, [['12 Inch length','9.00','4d3813e7706719a860f2e7f79006b486'],['18 Inch Length','11.50','f86bc731d2f24ed3ae95b046aa2c3ff0']], null, 'select', [1,1]),
    new Mandrel('MTA', 'tube', 'One of each tube mandrel AND a Large Diameter Diamond Glass Bead Reamer.', null, 'mandrel-tube-set-sm.jpg', '$49', 'd140b2e2461d445ba6808c5d72f06103', false, 1),

    new Mandrel('M250H', 'hollow', '&frac14; Inch Diameter Mandrel', null, null, '18.00', 'ba2d205d3f3a4a8dbb4921bc185d4931', false, 1),
    new Mandrel('M187H', 'hollow', '3/16 Inch Diameter Mandrel', null, null, '18.00', 'f0c222cfec6c443a826942e8430c28d7', false, 1),
    new Mandrel('M125H', 'hollow', '&frac18; Inch Diameter Mandrel', null, null, '18.00', '5554055de64149a5885de307b709c389', false, 1),
    new Mandrel('MSET3H', 'hollow', 'All Three Sizes of Mandrel', null, null, '48.60', '6b3b991dd239429eab312758a0a5af41', false, 1),

    new Mandrel('3306', 'holder', 'Holds M045 - 3/64 inch mandrels', null, null, '16.00', 'd3e99683092707dbb4e216056f967c36', false, 1),
    new Mandrel('3309', 'holder', 'Holds M090 - 3/32 inch mandrels', null, null, '16.00', '5ba40224bb26435e92734830b1498d55', false, 1),
    new Mandrel('3312', 'holder', 'Holds M125 - 1/8 inch mandrels', null, null, '16.00', '98c014553b2646289eb775a07c38d514', false, 1),
    new Mandrel('3315', 'holder', 'Brass Finger rod with wooden handle. Divot near tip to hold the end of a mandrel and steady it.', null, 'brass-finger-2.jpg', '8.50', '5618344817c54d718287ef618bd8d6c4', false, -1),

    new Mandrel('BLK', 'release pop', 'Black Coat}regular strength', null, 'mandrel-release-bead-black-coat-1med.jpg', [['4 fl. Oz (about half a pound)', '7.00','58e7471bc8023c3a8a017e2be84573df'],['2 lb','22.00','419e2566f332421f87b134bc547f360c']], null, 'select' , [1,1]),
    new Mandrel('BLU', 'release pop', 'Blue Coat}Medium Strength (recommended)', null, 'mandrel-release-bead-blue-coat-1sm.jpg', [['4 fl. oz. (about half a pound)','7.00','d482b6eca4eb2e3dd78e7a639f7e3f4d'],['2 lb','22.00','ef65b6f004a847449b90798ebd408c5b'],['10 lb','75.38','909c44077e5043ba961d32f0d401dabe']], null, 'select', [1,1,1]),
    new Mandrel('1590', 'release pop', 'Flame-Dri}Regular Strength', null, 'mandrel-release-flame-dri-lg.jpg', [['4 Oz','8.00','c30a548ca9d451ea208ca0f59fb467f8'],['1.85 lb','20.00','ecf20c95e63f4f1ead3b541467d0f9fc']], null, 'select', [1,0]),
    new Mandrel('15907', 'release', 'Grip-N-Slip}4 Fl. Oz Bottle', null, 'grip-n-slip-mandrel-release-4sm.jpg', '11.95', '3311a796d5a34aebba5a2421ece537d1', false, 1),

    new BraceletMandrel('1604', 'bracelet', 'Ring/Finger Mandrel<br>12 Inches Long', null, 'ring-mandrel-glass-5med.jpg', '32.00', [['1','16.00'],['2', '14.40',],['4','12.80'],['8','11.20']], '28e1d426a46b4df881228df16284736d', 'qty', 1),
    new BraceletMandrel('1604H', 'bracelet', 'Ring/Finger Mandrel Holder<br>Adjustable Clamp to hold your mandrel. We reccomend using 1 or more C clamps (see below)', null, 'ring-mandrel-holder-1vsm.jpg', null, '9.95', 'f1a8404646e64326b763c95e8ed7532d', false, 1, '16.00'),
    new BraceletMandrel('CLAMP', 'bracelet', 'C Clamp for holding the ring mandrel holder', null, 'c-clamp.JPG', null, '4.00', '9bcb9d4b5d9b45b5b6779effa06efe99', false, 1),
    new BraceletMandrel('1605', 'bracelet', 'Bracelet Mandrel. 12 Inches long, 2&frac34; inch Diameter tapers to &frac12; inch diameter', 'Round', 'bracelet-mandrel-med.jpg', null, [['1','24.00'],['2','21.60'],['4','19.20'],['8','16.80']], 'c463b0796db446399de9dd1f09d3f0ba', 'qty', 1),
    new BraceletMandrel('1605M', 'bracelet', 'Bracelet Mandrel. 12 Inches long. 2&frac34; Inch tapers to 1&frac12; Inch. Angle is adjustable with a bit of muscle. We recommend securing it with C Clamps (above)', 'Round', 'bracelet-mandrel-mounted-1vsm.jpg', null, [['1','59.00'],[2,'53.10'],[4,'47.20']], '507cb94a0712490ea745e271ccc00c63', 'qty', 1),
    new BraceletMandrel('1606', 'bracelet', 'Bracelet Mandrel. 12 Inches Long. 2&frac12; by 2&frac18; inches tapers to 1&frac12; by 1&frac14; inches', 'Oval', 'bracelet-mandrel-9606-sm.jpg', null, [[1,'29.00'],[2,'26.10'],[4,'23.20'],[8,'20.30']], '50a42536221f4d86a2d327c430f56234', false, 1),
    new BraceletMandrel('1606M', 'bracelet', 'Bracelet Mandrel with Mount. 12 Inches Long. 2&frac18; by 2&frac12; Inch tapers to 1&frac12 by 1&frac12;. We reccommend securing it with C Clamps, Adjustable via muscle.', 'Oval', 'bracelet-mandrel-mounted-1vsm.jpg', null, [[1,'74.00'],[2,'66.60'],[4,'59.20']], '3f5ece34fc364a868db6d9a7df15a595', 'qty', 1),
    new BraceletMandrel('160605', 'bracelet', 'Bracelet Mandrel. 15 Inches Long', 'Pentagon (5 sided)', 'mandrel-bracelet-glass-5-1sm.jpg', null, '64.00', 'bb27f6fae0204fa891b3c2c725ec7044', false, 1),
    new BraceletMandrel('160606', 'bracelet', 'Bracelet Mandrel. 15 Inches Long', 'Hexagon (6 sided)', 'mandrel-bracelet-glass-6-3sm.jpg', null, '64.00', '3fac08d1e3ad4dc3874aafc0d4db7351', false, 1),
    new BraceletMandrel('160608', 'bracelet', 'Bracelet Mandrel. 15 Inches Long', 'Octagon (8 sided)', 'mandrel-bracelet-glass-8-1sm.jpg', null, '51.20', '3d707182bb6345e2ac96957252cf34bb', false, 1),
    new BraceletMandrel('160610', 'bracelet', 'Bracelet Mandrel. 15 Inches Long', 'Decagon (10 sided)', 'mandrel-bracelet-glass-10-1sm.jpg', null, '51.20', '6c4d751a30c14a18bbdc81c53f042764', false, 1),
    new BraceletMandrel('160612', 'bracelet', 'Bracelet Mandrel. 15 Inches Long', 'Dodecagon (12 sided)', 'mandrel-bracelet-glass-12-1sm.jpg', null, '64.00', '67d061feb8654dafad64e7fbcab20206', false, 1),
    new BraceletMandrel('160604', 'bracelet', 'Stepped Bracelet Mandrel. 9 Inches Long. 4 Steps', 'Round', 'mandrel-step-2sm.jpg', null, '34.00', '982b8cc612414743bfdcba75d52869f3', false, 1),
    new BraceletMandrel('1607', 'bracelet', 'Bracelet Mandrel with Mounting Stem. 15 Inches Long.', 'Oval', 'mandrel-bracelet-oval-mount-1med.jpg', null, '44.00', 'ebff71eec9634a1698e3ccc700a4f56b', false, 0),
    new BraceletMandrel('1609', 'bracelet', 'Bracelet Mandrel. 15 Inches Long. 3 Inch tapers to 1&frac12; Inch.', 'Oval', 'bracelet-mandrel-med.jpg', null, '37.00', '29555ea00f944d99a8868f5d2842a964', false, 1),
    new BraceletMandrel('1611', 'bracelet', 'Ring & Bracelet Mandrel. 12&frac14; Inches Long. 2 Inches tapers to 5/16 Inch. Includes square mounting stem', 'Round', 'mandrel-1611.jpg', null, '36.00', 'c9db9959a52e42c296d5c82c3f11d5ca', false, 1),
];