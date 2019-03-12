<?php
require_once CLASSROOT.'FusingChemicalClass.php';

$fusingChem=[
    new Chemical('4819', 'separator', 'Hot Line Shelf Primer', '24 Oz.', 'smalloriginal.jpg', '7', 'fb4525aefc440ad9aa4e987c274a1526', 1),
    new Chemical('4815', 'separator', 'Hot Line Shelf Primer', '5 Pound', 'bigoriginal.jpg', '15', 'd3d8b30352b94dfab367f4201a7ad0cd', 1),
    new Chemical('48321', 'separator', 'Hot Line Hi Temp, for exta hot firing ONLY. If doing an extra hot firing, such as raking.', '24 Oz.', 'smallhotline.jpg', '7', '295fdcbe5eba2156b9efaa6fddbfab02', 1),
    new Chemical('483215', 'separator', 'Hot Line Hi Temp, for exta hot firing ONLY. If doing an extra hot firing, such as raking.', '5 Pound', 'bighotline.jpg', '15', 'ad3a01c4296c47189a5b3c4bbf515e87', 1),
    new Chemical('48235', 'separator', 'Primo Primer', '24 Oz.', 'smallprimo.jpg', '13', '588fdf4d72564383963afd22b3166ed1', 0),
    new Chemical('48230', 'separator', 'Primo Primer', '5 Pounds', 'bigprimo.jpg', '29', 'a5ecaadf092f4f42a55b336a6eb2eeeb', 0),
    new Chemical('8220', 'separator', 'Bullseye Glass Primer - List $29', '5 Pounds', 'bullseyeshelfprimer.jpg', '24.95', '93bf9471535c458d2bec5632d8ff1274', 1),
    new Chemical('ZYP', 'separator', 'Boron Nitride Mold Release - only shippable to the lower 48 states', '13 Oz. Spray Can', 'Boron-Nitrate.jpg', '44.00', 'b695bf502f84495eabf9983973c77863', 1),
    new Chemical('TF20', 'thinfire sheet', 'ThinFire Paper - 21 by 21 sheet', '4 sheets', null, '3.50', '8166ca1f7af0484080fc3f401a84ed89', 1, null, 4),
    new Chemical('TF20100', 'thinfire sheet', 'ThinFire Paper - 100 sheet pack', '1 pack', NULL, '200', 'e6ae2572daa0dcbf7d64c5e757f1cda0', 1),
    new Chemical('TF1007', 'thinfire roll', 'ThinFire Roll, 7 Inch wide', '1 roll, 10 ft. long', 'shelfpaper7x10.jpg', '10', '3a3223205f8742e98adaceccce580414', 1),
    new Chemical('TF1009', 'thinfire roll', 'ThinFire Roll, 9 Inch wide', '1 roll, 10 ft. long', 'shelfpaper9x10.jpg', '12', '1e3cdd42a6a6435198817ebb7d41f554', 1),
    new Chemical('TF1012', 'thinfire roll', 'ThinFire Roll, 12 Inch wide', '1 roll, 10 ft. long', 'shelfpaper12x10.jpg', '16', '0232e331079649a2ab1535e9681db813', 1),
    new Chemical('TF1013', 'thinfire roll', 'ThinFire Roll, 13 Inch wide', '1 roll, 10 ft. long', 'shelfpaper13x10.jpg', '17', 'd5c3ef2dd0b748c692f19b5b5a17ac99', 1),
    new Chemical('TF1016', 'thinfire roll', 'ThinFire Roll, 16 Inch wide', '1 roll, 10 ft. long', 'shelfpaper16x10.jpg', '22', '59431c73635e46a09b79d97e21c30aaa', 1),
    new Chemical('TF1018', 'thinfire roll', 'ThinFire Roll, 21 Inch wid', '1 roll, 10 ft. long', 'shelfpaper21x10.jpg', '24', '0a41c7b3ef034f209efaa24047059977', 1),
    new Chemical('TF25007', 'thinfire full roll', 'ThinFire Full Roll, <strong>20% off list price!</strong> 7 Inches Wide', '1 roll, 250 Ft. long', NULL, '126', '99cd899471564504920272d90e440aaa', 1),
    new Chemical('TF25009', 'thinfire full roll', 'ThinFire Full Roll, <strong>20% off list price!</strong> 9 Inches Wide', '1 roll, 250 Ft. long', NULL, '162', '7cc8985c60e3cdb24f436c52e1b297ff', 1),
    new Chemical('TF25013', 'thinfire full roll', 'ThinFire Full Roll, <strong>20% off list price!</strong> 13 Inches Wide', '1 roll, 250 Ft. long', NULL, '220', '4de73a7b437a4fecb3f3e07644f0eb6a', 1),
    new Chemical('TF25016', 'thinfire full roll', 'ThinFire Full Roll, <strong>20% off list price!</strong> 16 Inches Wide', '1 roll, 250 Ft. long', NULL, '252', 'c994937b411f23d3abf1735da2b7ef19', 1),
    new Chemical('TF25020', 'thinfire full roll', 'ThinFire Full Roll, <strong>20% off list price!</strong> 20&frac12; Inches Wide', '1 roll, 250 Ft. long', NULL, '277', 'f0600455da425591c55dd20457bffdbf', 1),
    new Chemical('TF25041', 'thinfire full roll', 'ThinFire Full Roll, <strong>20% off list price!</strong> 41&frac12; Inches Wide', '1 roll, 250 Ft. long', NULL, '508', 'ab1c249b139e811f8c86465ae9b4bec9', 1),
    new Chemical('4827', 'overspray chemical', 'Super Spray', '8 Oz.', 'super-spray-sm.jpg', '22.46', 'a893522945bffd0007a79137f9f061f5', 1),
    new Chemical('4827Q', 'overspray chemical', 'Super Spray', '32 Oz', 'super-spray-overglaze-sm.jpg', '53.10', '808fb18ed74c4a309f96c4a548e24b4a', 1),
    new Chemical('48251', 'squeegee oil', 'Squeegee Oil', '8 Oz', 'squeegee-oil-sm.jpg', '19.00', '9459c97208cacda6fc30cee398226151', 1),
    new Chemical('4847', 'bending glaze', 'Bending Glaze', '8 Oz', NULL, '27.00', 'cd84adc329acffffdde04b0331352267', 1),
    new Chemical('522010', 'wash away', 'Wash Away', '8 Oz', NULL, '6', '4dffe8f0d344608f434495c5ff71deba', 1),
    new Chemical('8244', 'fusing gel', 'GlasTac Gel Applicator Bottle', '4 Oz', NULL, '6.95', '3aa9c0eede5a42a0b70107f1b68c047a', 1),
    new Chemical('82432', 'fusing gel', 'GlasTac Gel Refill Bottle', '32 Oz', NULL, '19.50', '4d6bef5b55174e72882ece3ea4dcbd18', 0),
    new Chemical('8234', 'fusing glue', 'GlasTac Glue Applicator Bottle', '4 Oz', null, '6.95', '5ae867279bb10bcf3fefb625b88d279f', 1),
    new Chemical('8232', 'fusing glue', 'GlasTac Glue Refill Bottle', '32 Oz', NULL, '19.50', '2f447ae9402741cd9cdce180251c1cfa', 1),
    new Chemical('48260', 'cmc', 'CMC', '2 Oz by weight', NULL, '5.75', '36aceb2494b84a50ac7817c8c33b8f63', 1),
    new Chemical('48261', 'cmc', 'CMC', '1 Pound', NULL, '34.00', '2ca48b09b6ec44e9beb3b0545ac13a81', 1),
    new Chemical('8233', 'bubble maker', 'Bubble Maker<br>Create bubbles in your glass. Sprinkle even a TINY amount between layers of glass, fire and magically bubbles will form. A bit hard to control the size of bubbles. A little bit goes a long way. Non toxic.', '2 Fl. Oz Container', 'bubble-maker-sm.jpg', '4.50', 'd48c810016ec8218675c38c34017dcf7', 1),
    new Chemical('12700', 'metal leaf', '<strong>Copper</strong> Leaf: Very Thin', '25 5&frac12; Inch squares', NULL, '9.50', 'b81e6095f8ce4024b55492dd710f5599', 1),
    new Chemical('16502', 'metal leaf', '<strong>Silver</strong> Leaf: Very Thin', '25 Sheets', NULL, '19.50', '6f0e24df2c844d6ba40150363df43b07', 1),
    new Chemical('16503', 'metal leaf', '<strong>Silver</strong> Leaf: Heavy Leaf*', '25 Sheets', null, '25.50', '031aa33cca72403c80e753d20e2e09f2', 1),
    new Chemical('16501', 'metal leaf', '<strong>Gold</strong> Leaf: Very Thin', '25 Sheets', null, '74', 'f0b3d892df5e419e79d072aae3889aac', 1),
    new Chemical('16522', 'metal leaf', '<strong>Gold</strong> Leaf: Medium Thick**', '10 Sheets', null, '88', 'c0bd4580d9f549a5a62f891687c48a06', 1),
    new Chemical('12701', 'foil', 'Copper Foil Sheet', '2 Inch by 50 Ft', null, '55', '11f9c485caaa53686a9c3bbdbe49a8d1', 1),
    new Chemical('ETCH3', 'etching', 'Etching Cream', '3 Oz', NULL, '7.95', '5f824e6ebd5e47dfa5d9072f4d2f365c', 1),
    new Chemical('ETCH10', 'etching', 'Etching Cream', '10 Oz', null, '15.99', '4213010fd7d64c93b6453581744e6c1b', 1),
    new Chemical('ETCH22', 'etching', 'Etching Cream', '22 Oz', null, '23.95', 'dd550f48618b457b98c75692c5a19f60', 0),
];