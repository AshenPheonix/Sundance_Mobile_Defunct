<?php

    require_once CLASSROOT.'PliersClass.php';

$pliers=[
    new Pliers('2203', 'combo pliers', 'In House Brand', NULL, [[1,'7.00'],[2,'6.30'],[4,'5.95'],[8,'5.60']], 'fb9e49fc14c047eeae01675e1cb8a38f', 1),
    new Pliers('PF05', 'combo pliers', 'Fan Out - High Quality, Japanese', NULL, '22.95', '5c30c23629204acea5621b618a135a89', 0),
    new Pliers('PTP2', 'running pliers', 'Plastic Running Pliers', NULL, '7', '70ca9cf08802447693aa62f947481a2f', 1),
    new Pliers('PTP1', 'running pliers', 'Metal Running Pliers', NULL, '12.00', 'c83f496951b947e6888b6fd64ac577b9', 1),
    new Pliers('4246', 'running pliers', 'Fletcher&copy; Running Pliers - 6"<br><br>-Pliers break-out or nip glass up to ¼” (6mm) thick<br>-Designed with interchangeable jaws, the pliers easily convert from a nipping tool a running (break-out) tool', NULL, '16', '71cf317643f4401896d8531b222be57a', 1),
    new Pliers('PTE2', 'breaking pliers', '&frac12; Inch Wide Jaw', NULL, '8', '32ab64a159fb4aab9eb73ab44a9278b6', 1),
    new Pliers('2205', 'lead dyke cutters', 'Lead Dyke Flush Ground Cutters (not to be used as wire cutters)', NULL, '6', 'a133b01c779f47ae89a73df177b8dd6f', 1),

    new Pliers('Jack14', 'jack', 'Sundance Glass Tweezer Jacks.<br>Blade length: 4.25 inch<br> Handle length: 6 inch<br> Overall length: 14 inch, Stainless steel', 'jack14.jpg', '56', '59050f8667394b378465b45235585ec0', 1),
    
    new Pliers('4503-45', 'tweezers', 'Set of 3, different ends. All 4 Inches long.', 'tweezers-glassblowing-lampworking-4504-sm.jpg', '5.50', 'bead0c544233462ca67d319aa72739c2', 1),
    new Pliers('4503', 'tweezers', 'Set of 3. 8 Inch, 10 Inch, and 12 Inch', 'tweezers-glassblowing-lampworking-4503sm.jpg', [[1,'11.50'],[2,'10.35'],[4,'9.20'],[8,'8.05']], '4868d7e104e66c32a6a31b708c7fe89e', 1),
    new Pliers('4502', 'tweezers', 'Set of 2, 8 Inch and 10 Inch', '4502.jpg', '7.50', 'c5c661ab327077c026c5baefb24524ba', 1),
    
    new Pliers('GFT01', 'grabbing tongs', 'Grabbing Tongs. 18 Inch Long. Pads are 9 Inch Long and 2 1/2 Inches wide', 'finishingtongs.jpg', '80', 'f062a146c9d64603ab1444dc47a037fd', 1),
    new Pliers('gft02', 'grabbing tongs', 'Small Grabbing Tongs. 11 Inches long. Pads are 2 Inches long and 2 1/2 Inches wide', 'smalltongs.jpg', '26.50', '5663f3e179994cfe87fd0178a07631ad', 1),

    new Pliers('15707', 'tweezer masher', '8 Inch Long, Flat.', '15707.jpg', '7.00', '14119175dae65e25c4bad22b7ce00ddd', 1),
    new Pliers('15708', 'tweezer masher', '8 Inch Long, Bent. For making hears or points.', '15708.jpg', '12.00', 'c553308dd65e68240a744899bc8dd2a1', 1),

    new Pliers('15704', 'micro masher', 'Tweezers Micro Masher. 4 mm wide pad - 4 Inches Long. Stainless Steel', 'tweezer-micro-15704-500.jpg', '3.75', '2f14968f95f24dbb957b8b0d7b1c673a', 1),
    new Pliers('15705', 'micro masher', 'Tweezers Micro Masher. 5 mm wide pad - 4&frac14;" Long. Stainless Steel', 'tweezer-micro-15705-500.jpg', '4.75', '77b44315fc224baa9a3e24aa9a6ee4d9', 1),
    new Pliers('15706', 'micro masher', 'Tweezers Micro Masher. 8 mm wide pad tapers to 5 mm. 4 Inches Long. Stainless Steel', 'tweezer-micro-15706-500.jpg', '5.75', 'a7953f331cb74baf8c1f1889f6866a7f', 1),
    
    new Pliers('PSS7', 'flameworkers pliers', 'A general purpose stainless steel plier for the flame worker. Long nose keeps your hand far from the flame. Serrated ends for better gripping or can make a ribbed texture in molten glass. Smooth spring action.', 'plierssslg.jpg', [[1,'14.00'],[2,'12.60'],[4,'11.20'],[8,'9.80']], '2a11ab44d2b0dac5a69b661c86830fce', 1),

    new Pliers('3349', 'squashing', 'Squashing Pliers - 1&frac12; Inch Round. One surface has a textured &quot;Leaf&quot; surface. Flat.', '3349.jpg', '18.00', 'f18fe9732eb439f3cd9bd490ab6e3b45', 1),
    new Pliers('3350', 'squashing', 'Squashing Pliers - 1&frac12; Inch Round. One surface has a textured &quot;Leaf&quot; surface. Angled', '3350.jpg', '18.00', '509730eaf9f48b1636037128b0449cba', 1),
    new Pliers('3347', 'squashing', 'Squashing Pliers - Parallel at 1/4 Inch. Works great to make flat glass beads.', '3347-1sm-glass-pliers.jpg', '16.00', 'a6fe6e97915d49e38edf1e1f859d7c96', 1),
    new Pliers('3348', 'squashing', 'Squashing Pliers - No Space when parallel. Closes Flat', '3348-1sm-glass-pliers.jpg', '16.00', 'eff3e5aa5f9c4ca5b94990f903ed7c48', 1),
    new Pliers('3300', 'squashing', 'Squashing Pliers - 1&frac12; Inch square stainless steel surface. &frac14; Inches space when parallel', 'tongsm.jpg', [[1,'12.00'],[2,'10.80'],[4,'9.60'],[8,'8.40']], '95e8b743a98c4aedb9efa9f9682a66c0', 1),
    new Pliers('1580', 'squashing', 'Graphite Squashing Pliers - 2 Inch by 2 Inch surface, parallel at 1/2 Inch. Works great to make flat glass beads', '1580-glass-blowing-plier-sm.jpg', '29.00', '051a866c8e5e46cbb7a8c934e00b638e', 1),
    new Pliers('1579', 'squashing', 'Squashing Pliers - 2 Inch by 2 Inch surface. 1/4 Inch spacing when parallel. Heavy steel plate reduces heat up time', '1575-plier-1lg.jpg', '18.00', '59381f5dd265fb9a2afc0e8bdc8cbfa1', 1),
    new Pliers('3301', 'squashing', 'Squashing Pliers - 1&frac38; Inch by 1&frac12; Inch surface. &frac14; Inch spacing when Parallel. Heavy steel plate reduce heat up time. Great making glass beads.', '3301sm-glass-pliers.jpg', '19.00', '6ff5e492ef477a16043d8bf8021bca3a', 1),
    new Pliers('3302', 'squashing', 'Squashing Pliers - 1&frac38; Inch by 1&frac12; Inch surface. Closes flat. Heavy Steel plate reduce heat up time.', '3302.jpg', '19.00', 'b56bcafecdb7d4b27ecf28e6afaf3e5e', 1),
    new Pliers('3316', 'squashing', 'Squashing Pliers - Remains parallel through entire closing. VERY comfortable to use. Has interchangeable round graphite pads and comes with a spacing stop. Perfect for beginners or pros.', '3312sm1-parallel-squashers-pro.jpg', '145.00', '695b13aa73514e8396da05348e690461', 1,'125.00'),
    new Pliers('3303', 'squashing', 'Squashing Pliers - Curved surface, 1&frac14; Inches wide by 2&frac14; Inch long pad. Curved away from each other leaving a &frac58; Inch gap (measured at largest gap)', '3303.jpg', '18.00', 'dd6177d6c5a98ee26f776531ecda7b02', 1),
    new Pliers('3304', 'squashing', 'Squashing Pliers - Curved surface, 1&frac14; Inches wide by 2&frac14; Inch long pad. (curved in)', '3304.jpg', '18.00', '6316aba6b2683ed11113fd31247465f1', 1),
    new Pliers('2203', 'squashing', 'Glass Combination Pliers - &frac38; jaw, 6 Inches long overall. The Jaws are curved and serrated to easily grab molten glass.', '2203-med-glass-combo-plier.jpg', [[1,'7.00'],[2,'6.30'],[4,'5.95'],[8,'5.60']], 'fb9e49fc14c047eeae01675e1cb8a38f', 1),
    
    new Pliers('3307', 'button maker', 'Button Maker Plier', '3307.jpg', '18.00', 'c7995be3c9d14e56157ad7094dd1ce4e', 1),
    new Pliers('2552', 'rod holder', 'Rod Holder, we Modified a hemostat to make a locking glass rod holder.', 'rod-holder-4551-medsm.jpg', [[1,'20.00'],[2,'18.00'],[4,'16.00'],[8,'14.00']], '96834377b71b48cbb30feefbda4908ab', 1),
];