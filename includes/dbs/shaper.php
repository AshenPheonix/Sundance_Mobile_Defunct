<?php
    require_once CLASSROOT.'ShaperClass.php';

$shapers=[
    new Shaper('P1225G', 'paddle', '1&frac12; Inch by 2&frac12; Inch, handle on short side', 'paddle-graphite-glass-p1225-1med.jpg', '14', '120372d4ab654fefbc806dfcaa19c0fa', 1),
    new Shaper('P23G', 'paddle', '2 Inch by 3 Inch, handle on short side', 'paddle-graphite-glass-p23-1med.jpg', '14', '911dc98871c2437883ec9cf963068596', 1),
    new Shaper('P23GC', 'paddle', '2 Inch by 3 Inch, Composite Handle on the short side', 'paddle-graphite-glass-p23gc-1sm.jpg', '13', 'd3c57cb130c94d52b07b38ece22be949', 1, true),
    new Shaper('P32G', 'paddle', '3 Inch by 2 Inch, Handle on the Long side', 'paddle-graphite-glass-p32-1med.jpg', '14', '280cc11d2ed44cea922d7e50619793d5', 1),
    new Shaper('P23GH', 'paddle', '2 Inch by 3 Inch, Handle on the Short side. This paddle has a hole in the corner. To help hold or steady the hot end of the mandrel, put the end of your mandrel into this hole while turning.', 'paddle-hole-1med.jpg', '18', '44ecfb226965463a9cdc1448b444808a', 1),
    new Shaper('P34G Short', 'paddle', '3 Inch by 4 Inch, Handle on the Short side', 'paddle-graphite-glass-p34-1med.jpg', '16', 'c16c2f82c98949c7b8f0bc20c8f39b98', 1),
    new Shaper('P34GC Short', 'paddle', '3 Inch by 4 Inch, Composite Handle on the short side', 'paddle-3x4-import.jpg', '15', 'b767c77b60374cdeb2898c65b81b49b8', 1, true),
    new Shaper('P66', 'paddle', '6 Inch by 6 Inch wide paddle.', 'big-graphite-paddle.jpg', '45', 'ba08c80c90df40dd8d06edd9a9a5ef5c', 1),
    new Shaper('P31G', 'paddle', '1&frac58; Inch by 3 Inch.  Why work your glass with just a flat surface. Three different surfaces to work your glass at a great price.', 'paddle-hand-3in-one-1lgmed.jpg', '16', 'ae6502c9d41b433fb101d573de96306f', 1),
    new Shaper('P23G', 'paddle', '2 Inch by 3 Inch Paddle. Grooved surface to hold stringers or create patterns in your work, at a great price.', 'paddle-groves-2-sm.jpg', '39', '765db5eebac34dffb45925d9b721f294', 1),
    new Shaper('G24P', 'paddle', '2 Inch by 4 Inch Aluminum Metal Grooved Marvering Paddle. Smooth one side textured grooves other.', 'paddle-groved-metal-med.jpg', '19.95', 'db8adbf9ef8c4d49bea80ed2fb91ee26', 1),

    new Shaper('2223', 'shaper', 'The Wedgie Graphite Shaper. 2 Inch by 2&frac12; Inch Chiseled End', 'wedgie-stump-shaper-sm.jpg', '18', '092e7a7719603fb3769353a89526f6b9', 1),
    new Shaper('2227', 'shaper', 'The Wedgie Brass Shaper. 2 Inch by 2&frac12; Inch Chiseled End', '2227-shaping-paddle-wedgie-brass-sm.jpg', '28', '59635addbf4946bb8b81b88404f1624c', 1),
    new Shaper('2225', 'shaper', 'The Basic Brass Shaper. 2 Inch by 2&frac12; Inch Chiseled End. One Edge Rounded.', '2227-shaping-paddle-wedgie-brass-sm.jpg', '38', '262ba869c6728f5bcc842188f4e6f254', 1),
    new Shaper('2221', 'shaper', 'The Super Shaper. Graphite 2 Inch by 2&frac12; Inch.', 'stump-super-shaper1sm.jpg', '26.00', '36b7c2ced053d18e9909676f1621373b', 1, true),
    new Shaper('2230', 'shaper', 'The Super Shaper. Brass 1&frac18; Inch by 2&frac18; Inch.', 'stump-shaper-china-sm2-sm.jpg', [[1,'32.00'],[2,'28.80'],[4,'25.60'],[8,'22.40']], '81413d2ad5214deea4458fc8b283d6aa', 1, true),
    new Shaper('2222', 'shaper', 'The Super Shaper. 1&frac12; Inch by 2&frac12; Inch. Brass with taper on left side', 'stump-shaper-usa-regsm.jpg', '50', '9d82ed1395565bb2b48e13e344e5930d', 1),

    new Shaper('2226', 'multi tool', 'Multi Tool Standard', 'tool-ten-in-one-7.JPG', [[1,'49.00'],[2,'44.10'],[4,'39.20'],[8,'34.30']], '7060fd5ea42c40cd8b5b3cdb0e330d9d', 1),
    new Shaper('2229', 'multi tool', 'Multi Tool Enhanced', 'brians-multi-tool-enhanced-2med.jpg', [[1,'59.00'],[2,'53.10'],[4,'47.20'],[8,'41.30']], '86c3e786b821462c9cf0977eb2f83e3c', 1),
    
    new Shaper('15709', 'roller', 'Roller Shaper Number 1 - This tool, developed by Sundance decades ago, is the first in a series of unique glass shaping tools. It is used to help shape your glass bead. There are two ways to use this tool. Make a barrel bead by rolling your molten glass against the curve or turn the glass 90 degrees and work it in the other direction. Two different diameters allow two different size beads. Made of graphite carbon. Roller Shaper Number 1 - Used to shape beads as a cylinder. Two different sizes. The flat back side can be used as a paddle.', 'roller-shaper-1-sm.jpg', '20', '3e3579a05c0c72a2852c60dacd291796', 1),
    new Shaper('15710', 'roller', 'Roller Shaper Number 2 (Kindle Shaper) - This tool, designed by Shannon Kindle (despite others trying to take credit), is used to help shape your glass bead. Roll your bead back and forth in the grooves to shape. Also used a a frit trough.  Made of carbon graphite.', 'roller-shaper-2-kindle-sm.jpg', '36', '9fe13bdad681ba6e8b8d564e4bb3f1db', 1),
    new Shaper('15711', 'roller', 'Roller Shaper Number 3 - Similar to the above Kindle Shaper, but the handle is rotated 90 degrees and a shorter surface. Good for right or left handed persons. Rolling the hot bead in the groove helps shape the bead round. Four different sized grooves and two different shaped grooves to choose from. Graphite carbon block is 1-1/2 Inch ', 'roller-shaper-3-sm.jpg', '28', '9415778096e73df49188080e0014a1f2', 1),
    new Shaper('15714', 'roller', 'The Evolution continues. This tool, developed by Sundance, is used to help shape your glass bead. Roll your bead in the grooves to shape.  Made of graphite carbon. Roller Shaper Number 4 - Similar to our original best selling Roller Shaper #2 but modified to have tapered grooves. Pictured twice on the left so you can see both sides of the paddle. Made from Carbon Graphite. Pad is approx. 2 Inch x 3 Inch', 'roller-shaper-4-1%20sm.jpg', '49', '1e3f189e31cbcacfe898e93f76039051', 1),
    new Shaper('2228', 'roller', 'Helps shape beads. Bi-Cone on one side and curved shape on the other side. Handle can be inserted in either side for left or right handed people. Great deal because you get two tools in one! Made in the USA! Quality Polished Carbon Graphite. Lifetime Sundance Warranty. 2&frac14; Inch x 3&frac12; Inch Pad', 'dual-shaper.jpg', '49', '20964516ae62b635322f15a35ad8083d', 1),

    new Shaper('MPStar', 'milliPress', 'Milli Press}5 Bar Milli Press makes Star Murrini', 'millipress 3.JPG', '29.00', '7e4411a5aeeb41fbaa4940768e9caa7a', 1),

    new Shaper('2325', 'bead maker', 'Cone Shaper', 'lampworking-graphite-bead-mold-cone.jpg', '22', '7c5d775a2e7d454d8068694f652b0c92', 1),
    new Shaper('2326', 'bead maker', 'Tear Drop Shaper', 'lampworking-graphite-bead-mold-teardrop-sm.jpg', '29', '0ba7d7297d5b4845a84cb08a1bd2181f', 1),
    new Shaper('2324', 'bead maker', 'Disk Shaper', 'lampworking-graphite-bead-mold-disk.jpg', '29', '2c8310f0fd0c4610a49ec6628756d947', 1),
    new Shaper('2323', 'bead maker', 'Ribbed Shaper', 'lampworking-graphite-bead-mold-ribbed.jpg', '29', '9d727b05f44840389e97bdb8b1099c15', 1),
    new Shaper('2322', 'bead maker', 'Pillow Shaper', 'lampworking-graphite-bead-mold-pillow.jpg', '29', '4a6cd504a824464aa4eb0776599701fc', 1),
    new Shaper('2321', 'bead maker', 'Donut Shaper', 'lampworking-graphite-bead-mold-donut.jpg', '29', '59f4245f6f854b98bd2777ca99e9ab1a', 1),
    new Shaper('2320', 'bead maker', 'Barrel Shaper', 'lampworking-graphite-bead-mold-barrel.jpg', '29', 'b241a4f1ffcd47ceb9005f7b0d0f2534', 1),
    
    new Shaper('2310', 'marble maker', '2&frac12; Inch by 3 Inch pad. 3 Holes 1/2 Inch, 5/8 Inch and 3/4 Inch', NULL, '35', '44d0556542ee4c9ab0df44238630d761', 1),
    new Shaper('2311', 'marble maker', '2&frac12; Inch by 4 Inch pad. 3 Holes &frac78; Inch, 1 Inch, 1&frac18; Inch', NULL, '40', '6db83cf2f11b4ccdb5cfb329af3aaaac', 1),
    
    new Shaper('2300', 'lentil tool', 'Tool to make Lentil Shaped Glass Beads. Heat and work one side of the bead in the depression. then heat and work the other side. Alternate until it takes the shape of a lentil. Front and back sides are pictured. Four different sized depressions actually allows a wide range of size beads. Mandrel grooves help keep the mandrel release from breaking off. Paddles are Carbon Graphite.', 'lentil-shaper-tony-sm.jpg', '29', 'ab27d477819a3c5cf12b2d77eae361a9', 1),
    new Shaper('3317', 'lentil tool', 'Parallel Pliers with Lentil Shaping Pads Inserted. Parallel Pliers with additional Lentil Shaping Pads', 'lentil-maker-glass-beadmaking-1med.jpg', '175', '75c98ddb5f3243ba9b9f7283832a8929', 1),
    new Shaper('3317Pads', 'plates', 'Masher Plates for the 3317. Limited supply of each kind.', 'masherPads.png', [['2" square', '15.00'],['&frac12;" wide curve','15.00'],['1&frac38;" wide curve','15.00'],['Flat','15.00']], ['fda7bc93a33b422e9f58be2ed28c8bef','33285b4776234235955d008955bfabdd', '7c6809342bf34a1baba890c2b0d17d91', 'db420ac673f040b6b4a01fc2af8b995a'], [1,1,1,1]),

    new Shaper('G24M', 'metal', 'Metal Grooved Marvering Pad - Smooth one side textured grooves other side Aluminum 2 Inch x 4 Inch', 'marvergrovedmlg.gif', [[1,'12.95'],[2,'11.65'],[4,'10.36'],[8,'9.07']], 'bab3869030e74b509ce30a80ef4ceae6', 1),
    new Shaper('G24P', 'metal', 'Metal Grooved Marvering Paddle - Same marvering plate pictured above mounted on a handle. Often easier to work with when you are able to hold it up at eye level.', 'paddle-groved-metal-sm.jpg', [[1,'21.95'],[2,'19.75'],[4,'17.56'],[8,'15.37']], 'db8adbf9ef8c4d49bea80ed2fb91ee26', 1),

    new Shaper('1676', 'set', 'Set of 4', 'shaping-tools-4-1med-lampworking-glassblowing-glass-bead.jpg', [[1,'7.50'],[2,'6.75'],[4,'6.00'],[8,'5.25']], 'd9b4714a9fb83efc30aba9a33b06f23e', 1),
    new Shaper('1675', 'set', 'Set of 7', 'shaping-tools-7-1med-lampworking-glassblowing-glass-bead.jpg', [[1,'13.50'],[2,'12.15'],[4,'10.80'],[8,'9.45']], 'e2a5ab312d70c439b578154ea241ad1e', 1),
    new Shaper('1678', 'set', 'Set of 12', 'shaping-tools-1678-12.jpg', [[1,'19.00'],[2,'17.10'],[4,'15.20'],[8,'13.30']], '5993cee59ca8ca2b8ea4b3673f46d9fb', 1),

    new Shaper('5001', 'sculping', 'The Sharon Sculpting Tool - as described in the book &quot;Wonderful World Of Sharon Peters And Her Silly Sculptural Shapes&quot;', '5001.jpg', '7.00', 'b1edda02b119ccf7d52e71b106c9abe7', 1),

    new Shaper('60', 'circular', 'Core Vessel Mandrel 1&quot; diameter, 2&quot; long. On the left', NULL, '16.00', '82c9966ed1a84dc0ad31b790cacdc8c6', 1),
    new Shaper('65', 'circular', 'Napkin Wrapper 1&quot; diameter, 2&quot; long. On the right.', NULL, '12.00', '3049b3b2769e4473ab8837011c72ec47', 1),
    
    new Shaper('MT58', 'mini mandrel', 'Thimble Shaped Stainless Steel Mandrel . Machined with a roughened surface to better hold mandrel release.', 'mandrel-thimble-1-1sm.jpg', [[1,'9.95'],[2,'8.96'],[4,'7.96'],[8,'6.97']], 'e1f0aa2b6834445897181aa8da755813', -1),

    new Shaper('94524', 'raised marvering', 'The large 4 Inch x 7 Inch graphite pad sits almost 3 Inch high on a heavy steel base. Placed on your work table,  the graphite\'s elevation off the table makes for easy marvering and pickup with plenty of clearance between the worktable for your hand. We purposely used a heavy 4 pound steel base to make the pad very stable on the worktable for aggressive marvering using the top, edge and corners of the marvering pad.', '94524-marvering-pad-med.jpg', '69.00', 'de969f6b3f594d6092ae6b26431d4528', 1),
    new Shaper('94525', 'raised marvering', 'The large 4 Inch x 5 Inch graphite pad sits almost 3 Inch high on a heavy steel base. Placed on your work table,  the graphite\'s elevation off the table makes for easy marvering and pickup with plenty of clearance between the worktable for your hand. We purposely used a heavy 4 pound steel base to make the pad very stable on the worktable for aggressive marvering using the top, edge and corners of the marvering pad. The textured metal marver mounted on the side adds even more marvering', 'deluxe-raised-marver-sm.jpg', '89.00', 'bc90fa6cb0dc93481f95457a97ad97c9', 1),

    new Shaper('G23', 'marver', '2 Inch by 3 Inch', NULL, '9.00', '02d76a54c9bf4e43bd8d82135d7b2188', 1),
    new Shaper('G34', 'marver', '3 Inch by 4 Inch', NULL, '14.00', '30d963023b114671b3c655f4a91ad0eb', 1),
    new Shaper('G45', 'marver', '4 Inch by 5 Inch', NULL, '16.00', 'fef03ec479b74123af5fe23fcddad40c', 1),
    new Shaper('G55', 'marver', '5 Inch by 5 Inch', NULL, '22.00', 'd35950f2d5c644129a6059e6607bd6f0', 1),
    new Shaper('G66', 'marver', '6 Inch by 6 Inch', NULL, '26.00', '71ec950792ec4f5fb860a711a3bfc372', 1),
    new Shaper('G77', 'marver', '7 Inch by 7 Inch', NULL, '39.00', '9ddec7e1f26e4a36959e97d1d7ce5254', 1),
    new Shaper('G88', 'marver', '8 Inch by 8 Inch, over &frac12; Inch Thick', NULL, '46.00', '84cabe13d134418aae60b7765b30547c', 1),
    new Shaper('G10', 'marver', '10 Inch by 10 Inch, over &frac58; Inch Thick', NULL, '67.00', 'c3eaf7f855a14be9bea02c1393b327a6', 1),
    new Shaper('G12', 'marver', '12 Inch by 12 Inch, over &frac58; Inch Thick', NULL, '79.00', '1cd77dcbae854b74b85d96ded66529f5', -1),

    
];