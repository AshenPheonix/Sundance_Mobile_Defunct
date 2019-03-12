<?php

require_once CLASSROOT.'DrillBitsClass.php';

$Bits=[
    new DrillBit('WB1', 'grinder bit', '&frac34; Inch Standard<br>220 grit', NULL, '15', '9de59afcd9dd4352ba40e4d0f54caf74', 1),
    new DrillBit('WB1S', 'grinder bit', '&frac34; Inch Speed Bit<br>100 grit', NULL, '19', '2eeb4704c9974a2abf5ea532036436e1', 1),
    new DrillBit('WB8', 'grinder bit', '&frac14; Inch Standard<br>220 grit', NULL, '15', '445b85822c6e4d5abeb2fa7223dde478', 1),
    new DrillBit('WB8S', 'grinder bit', '&frac14; Inch Speed Bit<br>100 grit', NULL, '15', '447205e2ad6749a49110267cf4380b35', 1),
    new DrillBit('WB9', 'grinder bit', '1 Inch Standard<br>220 grit', NULL, '19', '7c02b573e95843b5a83b3331e0ba9774', 1),
    new DrillBit('WB9S', 'grinder bit', '1 Inch Speed Bit<br>100 grit', NULL, '22', 'c504dcf1a37145dd9acd01b4b318ae04', 1),
    new DrillBit('WB18', 'grinder bit', '&frac34; Inch Lamp Bit', NULL, '20', '89e5e9720f1d4cd7a2a445e42db102be', 1),
    new DrillBit('WB21', 'grinder bit', '9 Degree Lamp Shade Bit for the G5 Starlet ONLY', null, '12.76', '02ace4a01d484e9389eda1b99774c8b2', 1),
    new DrillBit('WB22', 'grinder bit', '18 Degree Lamp Shade Bit for the G5 Starlet ONLY', null, '12.76', '99146b9586c4412d88da6da73a0215bf', 1),

    new HoleSaw('80302', 'holesaw', '1/16 Inch (1.6 mm)', '1/16 Inch (1.6 mm)', '1/2 Inch (12.7 mm)', NULL, '8', 'b675219007b54524afe4bf7d5cf7ceb7', 1),
    new HoleSaw('80307', 'holesaw', '1/4 Inch (6.4 mm)', '.242 Inch (6.2 mm)', '3/8 Inch (8 mm)', 'diamond-drill-bit-14.jpg', '15', '1f66c54f60764e399cb535b517b59439', 1),
    new HoleSaw('80309', 'holesaw', '3/8 Inch (9.5 mm)', '.371 Inch (9.4 mm)', '3/8 Inch (8 mm)', 'diamond-drill-bit-38-2-med.jpg', '18', 'b9dc8983c3a8432a850922502ebd9a43', 1),
    new HoleSaw('80312', 'holesaw', '1/2 Inch (12.2 mm)', '3/8 Inch (9.5 mm)', '3/4 Inch (19 mm)', 'diamond-drill-bit-12.jpg', '21', '0646951833ad4dcda5596bf5b0a42537', 1),
    new HoleSaw('80315', 'holesaw', '5/8 Inch (15.9 mm)', '.311 Inch (8.1 mm)', '1.51 Inch (38.4 mm)', 'diamond-drill-bit-58.jpg', '24', '64583091dc1b4ed794883273a5cd9328', 1),
    new HoleSaw('80324', 'holesaw', '1 Inch (25.4 mm)', '3/8 Inch (9.5 mm)', '.645 Inch (16 mm)', 'diamond-drill-bit-1sm.jpg', '36', '838f0f0f74564447b9c3d7c06260f332', 1),
    new HoleSaw('80330', 'holesaw', '1-1/4 Inch (31.7 mm)', '3/8 Inch (9.5 mm)', '.865 Inch (22 mm)', 'diamond-drill-bit-114.jpg', '42', 'f878392840b84a0199e8aeb70f22f991', 1),

    new DrillBit('DH6HS', 'holesaw set', '6 Pc Diamond Hole Saw Set: 80 Grit', NULL, '9.95', 'd59dcf757d8848d1bed2aa58e1e9601f', 1),
    new DrillBit('DC31210CD', 'holesaw set', '10 Pc Diamond Core Hole Set: 100 Grit', null, '11.95', '07ba3dfa448e46c299f41ea2582ce939', 1),
    new DrillBit('7575', 'dremel bit', 'Diamond Dril Bit - .75 mm', NULL, '8', 'a9ef5dde41d648af9b3b0df14ea2eca4', 1),
    new DrillBit('7518', 'dremel bit', 'Diamond Drill Bit - 1.8 mm', NULL, '8', 'abe0df35e07f4c7a84aa03443582e4a4', 1),
    new DrillBit('50112', 'engraver', 'Diamond plated engraver', 'inverted-cone-diamond-engraving-bit-sm.jpg', '9.95', '57d7b3d7e57845a2a84690b4672866e6', 1),
    new DrillBit('DD8', 'dremel set', '10 Piece Diamond Bit Set', NULL, '12', 'd66f6e93f6444c329fc14dab1af9de7b', 1),
    new DrillBit('DD20', 'dremel set', '20 Piece Diamond Bit Set', NULL, '16', 'e2497739e807435cad949b726cca1758', 1),

    new DrillBit('3553', 'cleaners', 'Set of 3 Diamond coated tools', '3553-glass-bead-cleaning-tool-sm.jpg', [[1,'2.50'],[2,'6.75'],[4,'6.00'],[8,'5.25']], 'f814de555354487a96fcdc8c1f8b9538', 1),
    new DrillBit('3554', 'cleaners', 'Set of 4 Diamond Coated Tools', '3554-glass-bead-cleaning-tool-sm.jpg', [[1,'9.50'],[2,'8.55'],[4,'7.60'],[8,'6.65']], '6bf9d3b834f486dc456feabfbacba458', 1),
    new DrillBit('DF83510', 'cleaners', 'Set of 10 Diamond Reamers. 5/64" shaft - taper from point to 5/64" for smaller size bead holes. Extra Small Size gets into the smallest bead hole. Used to clean out the inside hole of a bead. I think this type of cleaner is the best style. Use with a pin vice or use a drill. Always use with water to control dust and preserve the diamonds.', 'reamer-diamond-83510-sm.jpg', '7.50', '72d0e188bcd8457b81cd043ff7e55aab', 1),
    new DrillBit('DF83612', 'cleaners', 'Set of 10 Diamond Reamers. 1/8" shaft - taper from point to 1/8" for smaller size bead holes. Extra Small Size gets into the smallest bead hole. Used to clean out the inside hole of a bead. I think this type of cleaner is the best style. Use with a pin vice or use a drill. Always use with water to control dust and preserve the diamonds.', 'reamer-diamond-83612-sm.jpg', '8.50', 'e3e3082b8b994697a79acb63b3819a2f', 1),
    new DrillBit('3555', 'cleaner set', 'Set of 4 Diamond Tools with clear holding case and interchangable handle', 'bead-cleaning-reamer.jpg', [[1,'9.50'],[2,'8.55'],[4,'7.60'],[8,'6.65']], '3df7ac8860843e8c0f71895041b702a7', 1),
    new DrillBit('2105', 'wire cleaner', 'Bead Cleaning Brush', NULL, '6.00', '459badfd7ce247a8a293621a638107a6', 1),
    new DrillBit('2106', 'wire cleaner', 'Bead Cleaning Wire', NULL, '6.00', '4b1599107c404355b1414ff657d8147b', 1),
    new DrillBit('2107', 'wire cleaner', 'Bead Hole Scraper', NULL, '6.00', '57994d4252b6430e90853306bb3f3cb0', 1),
    new DrillBit('2110', 'wire cleaner', 'Set of 3 above', NULL, '13', '267acb97f66b899fb73b484c161d750f', 1),
];