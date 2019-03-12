<?php 
    require_once CLASSROOT.'kilnshelves.php';

    $shelves=[
        new KilnShelf('KS5', 'kiln shelf', null, null, 'Square', '5&quot; x 5&quot;', '&frac14;&quot;', '6.00', '559e4e9f6f62a2b87c304efafc2c0335', false, 0),
        new KilnShelf('KS6', 'kiln shelf', null, null, 'Square', '6&quot; x 6&quot;', '&frac38;&quot;', '6.00', '7d62af9e3f4047e68d291ba54dd46d70', false, 1),
        new KilnShelf('KS7', 'kiln shelf', null, null, 'Square', '7&quot; x 7&quot;', '&frac12;&quot;', '12.00', '53ee260f57c14d6790ae94d3f8f62e72', false, 1),
        new KilnShelf('KS8', 'kiln shelf', null, null, 'Square', '8&quot; x 8&quot;', '&frac12;&quot;', '8.00', '4322806170f748b8b47b2141070dcf9a', false, 1),
        new KilnShelf('KS910', 'kiln shelf', null, null, 'Square', '9&quot; x 10&quot;', '&frac14;&quot;', '9.00', 'd144adc7fe1341debfce8a0c1132cf3c', false, 0),
        new KilnShelf('KS10', 'kiln shelf', null, null, 'Square', '10&quot; x 10&quot;', '&frac38;&quot;', '16.00', '6570954b38914803a2419dba60111d3d', false, 1),
        new KilnShelf('KS12', 'kiln shelf', null, null, 'Square', '12&quot; x 12&quot;', '&frac38;&quot;', '14.00', 'b1fca11dd34d40998f308e459d2ecf5b', false, 1),
        new KilnShelf('KS14', 'kiln shelf', null, null, 'Square', '14&quot; x 14&quot;', '&frac38;&quot;', '18.00', '6f3f888b88c449a6b05191fdb7d02c5c', false, 1),
        new KilnShelf('KS15', 'kiln shelf', null, null, 'Square', '15&quot; x 15&quot;', '&frac38;&quot;', '18.00', 'b4a260e7b53641c19e2fcf2119c839d5', false, 1),
        new KilnShelf('KS16', 'kiln shelf', '(May be packed seperately to avoid damage)', null, 'Square', '16&quot; x 16&quot;', null, '26.00', '99091a2c988648bebdfcfabe42ce7bba', false, 1),
        new KilnShelf('KS20', 'kiln shelf', '(Must be shipped by truck to avoid damage)', null, 'Square', '20&quot; x 20&quot;', null, '45.00','ed2e0bd5b9cd4ada84885d15685821b5', false, 1),
        new KilnShelf('KS105R', 'kiln shelf', null, 'kiln-shelf-r11-sm.jpg', 'Round', '10&quot; Diameter', null, '9.00', '741bbaf925334170b7bceb50d03a23c2', false, 1),
        new KilnShelf('KS11R', 'kiln shelf', null, 'kiln-shelf-r11-sm.jpg', 'Round', '11&quot; Diameter', null, '11.00', '968932dd60384ea283eb312c404989a9', false, 1),
        new KilnShelf('KS13R', 'kiln shelf', null, null, 'Round', '13&quot; Diameter', null, '20.00', '9ac106cc782645d89595875b8f3b1e82', false, 1),
        new KilnShelf('KS15R', 'kiln shelf', null, null, 'Round', '15&quot; Diameter', null, '27.50', '316cee271cf848d1bca734b343dcf224', false, 1),
        new KilnShelf('KS16R', 'kiln shelf', '(May be packed seperately to avoid damage)', null, 'Round', '16&quot; Diameter', null, '30.00', '9af655e59db24cc0adb341bd4f7db237', false, 1),
        new KilnShelf('KS19R', 'kiln shelf', '(May be packed seperately to avoid damage)', null, 'Round', '19&quot; Diameter', null, '64.00', '1543117407e2435ea9960d560b68d3cf', false, 1),
        new KilnShelf('KS16OCT', 'kiln shelf', '(May be packed seperately to avoid damage)', null, 'Octagon', '15&quot; x 16&quot;', null, '25.00', '7d4b41950c6b45c4905b7bbd53d8ae16', false, 1),
        new KilnShelf('KS20DEC', 'kiln shelf', '(Must be shipped by truck to avoid damage)', null, 'Decagon', '21&quot; x 22&quot;', null, '58.00', '66a3f9ba35834aee90863c75786fc374', false, 1),

        new KilnShelf('4809', 'kiln post', null, null, 'Square', '1&quot;', '1&frac12;&quot;', '1.60', '24dddd681836e5eedead845e2cb7cd13', false, 0),
        new KilnShelf('48092', 'kiln post', null, null, 'Square', '2&quot;', '1&frac12;&quot;', '1.60', '4f8fa10415a24dd3a4dfddfc1addd8c3', false, 1),
        new KilnShelf('48093', 'kiln post', null, null, 'Square', '3&quot;', '1&frac12;&quot;', '1.80', '60aeb2cd802b4d28a856dcd5b3f65ad3', false, 1),
        new KilnShelf('48094', 'kiln post', null, null, 'Square', '4&quot;', '1&frac12;&quot;', '2.00', 'a5e84534531a40cca73e81d4c1f1437f', false, 0),
        new KilnShelf('4810', 'kiln post', null, null, 'Square', '6&quot;', '1&frac12;&quot;', '2.40', '95123bbb0f2b4814800514f7a5b37420', false, 1),
        
    ];