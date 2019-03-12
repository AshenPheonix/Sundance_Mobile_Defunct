<?php
require_once CLASSROOT.'GasEquipClass.php';

$equipment=[
    # regulators
    new GlassEquipment( 'REB93', 'Oxygen Regulator', 'Two gauge. One Stage. <br>Inlet is CCA 540, Outlet male "B" fitting.', 'regulator', 'regulator-oxygen-lampworking-glass-beadmaking-glassblowing-sm.jpg', ['warranty'=>1], 85, 77, '9cf59643a595231e6dee24eec6e88142', true),
    new GlassEquipment( 'REB11', 'Fuel Gas Regulator', 'Propane, Propylene, or Acetylene<br>Two gauge. One Stage<br> Inlet CGA 510, Outlet male "B" fitting.', 'regulator', 'regulator-fuel-lampworking-glass-beadmaking-glassblowing-sm.jpg', ['warranty'=>1], 85, 77, '01070a1c5381c9eec9a538a5cf7cbc59', TRUE),
    new GlassEquipment( 'REB01', 'Hydrogen Fuel Regulator', 'Requires A hose fittings', 'regulator', 'regulator-hydrogen-lampworking-glass-beadmaking-glassblowing-lg.jpg', ['sale'=>30], 86, 59, 'ab33851cc0a441fab165c0ede1851876', 'sale'),
    new GlassEquipment( 'REB00', 'High Pressure Oxygen Regulator', 'Some torches need high pressure oxygen. For torches that consume 25 PSI or more. Will run up to apporximate 50 PSI. Requires B Fittings', 'regulator', 'regulator-high-pressure-sm.jpg', NULL, 86, 85, '10b4b5a8101f40ac89fad79b58c42c88', true),

    # hoses
    new GlassEquipment( 'T124', '', 'Female "B" fitting on one end and cut end of hose other side.<br><strong>&frac14;" diameter hose</strong>', 'hose', NULL, ['length'=>12], NULL, 22, '699d9e79755b4c83e6e65e81d537aecd', TRUE),
    new GlassEquipment( 'T254', '', 'Female "B" fitting on both ends<br><br><strong>&frac14;" diameter hose</strong>', 'hose', NULL, ['length'=>25], NULL, 34, '34e4a5be0cf3ad7fc3f30a7e0dca23e0', TRUE),
    new GlassEquipment( 'T128', '', 'Female "B" fitting one side and cut end of hose other side<br><strong>&frac38;" diameter hose</strong>', 'hose', NULL, ['length'=>12], NULL, 29.50, 'c1a06494070f4714bdc6bece678917e6', true),
    new GlassEquipment( 'T258', '', 'Female "B" fitting on both ends<br><strong>3/8" diameter hose</strong>', 'hose', null, ['length'=>25], NULL, 52.00, '78a9a0fbe7f54911bf2443b79cb01967', TRUE),

    # y-conn
    new GlassEquipment( '101',  '', 'Y Hose connector (oxygen)', 'y-connector', NULL, ['ends'=>['hose (B fitting)','Oxygen Regulator']], null, 19.50, '46db36fcff47c5f5b08330af180effe8', true),
    new GlassEquipment( '102',  '', 'Y Hose connector (propane)', 'y-connector', NULL, ['ends'=>['hose (B fitting)','Propane Regulator']], NULL, 19.50, 'bc324605aac73386ffac61a6817c65a3', TRUE),
    new GlassEquipment( '111V', '', 'Y hose connector with valve (oxygen)', 'y-connector', NULL, ['ends'=>['hose (B fitting)','Oxygen Regulator']], NULL, 32.50, '6a7a96bfa2618738f595cc72a946c801', TRUE),
    new GlassEquipment( '112V', '', 'Y hose connector with valve (propane)', 'y-connector', NULL, ['ends'=>['hose (B fitting)','Propane Regulator']], NULL, 32.50, 'fa8e3d18acf663ef8b905e7d166e681b', TRUE),

    # b-cap
    new GlassEquipment( '927',  '', 'Cap for "B" size hose (Oxygen)', 'b-cap', NULL, NULL, NULL, 3.95, '88094202754e4b8da5e3d29fa5d47d2f', TRUE),
    new GlassEquipment( '928',  '', 'Cap for "B" size Hose (Fuel)', 'b-cap', NULL, [], NULL, 3.95, 'c80ef7b36c0746f89bf3bec3034af797', TRUE),

    # Flashback Arrestors
    new GlassEquipment( 'FA30', 'Flashback Arrestors (One oxygen and one Fuel)', 'Connects directly to the regulator. This arrestor is the easiest to connect and our most popular', 'flashback', 'flashback-arrestor-fa30-1sm.jpg', ['ends'=>['Male B size gas hose fitting','Female B size gas hose fitting']], NULL, 56, 'fdba0ea327c37f39c1d04b451381e583', TRUE),
    new GlassEquipment( 'FA10', 'Flashback Arrestors (One oxygen and one fuel)', 'Connects directly to the fittings on a torch like the 3AB, 8M and Carlisle. We also include the fitting so you can put this arrestor in the middle of your twin hose. You may also need the A2 fittings listed below.', 'flashback', 'fa10-flashback-arrestors.jpg', ['ends'=>['Female B size hose fitting. Male B fitting can be done with included adaptor','Male size B hose fitting']], NULL, 56, '19f782f30893364d00871d2f7fa5c454', TRUE),
    new GlassEquipment( 'A2',   '&frac14;&quot; Barbed Hose fittings for Torches', 'For use with torches that have B (screw on) fittings to accomodate cut-end hoses. Insert barbed fitting into cut end of hose and secure with included hose clamp. Be sure to check for leaks.', 'flashback', 'a214.JPG', ['ends'=>['Female "B" size hose','Barb for &frac14;" hose, use a clamp']], NULL, 5, '8374eb8296c768bfd1119904fb20f039', true),
    new GlassEquipment( 'A3',   '&frac38;&quot; Barbed Hose fittings for Torches', 'For use with torches that have B (screw on) fittings to accomodate cut-end hoses. Insert barbed fitting into cut end of hose and secure with included hose clamp. Be sure to check for leaks.', 'flashback', 'a338-sm.jpg', ['ends'=>['Female "B" size hose fitting','Barb that fits a &frac38;" gas hose, use a clamp']], NULL, 5, 'c728b241f19c47bb9e77cf2c223cc3b5', TRUE),
    new GlassEquipment( 'A31',  'Oxygen and Fuel Gas Fittings', 'Allows you to connect a hose to another hose to make a longer hose (hoses need B size fittings)<br><br> A30 is for oxygen, A31 is for fuel', 'flashback', 'fitting-gass-hose-to-hose-1lg.jpg', ['spid'=>'2db6eed67e39c3c2730fafdec82fe119','pr1'=>1.50,'stype'=>'A30'], null, 1.50, '7166e74dd3c34faa8c92dbcba78906a1', true),

    #Quick Connects
    new GlassEquipment( 'QDB10', 'Quick Connects', 'pair', 'q-conn', NULL, ['ends'=>['Male B gas hose fitting','Female B fitting']], NULL, 54, 'aa83ee018b25bffdf0679791eaa5da75', TRUE),
    new GlassEquipment( 'QDB20', 'Quick Connects', 'pair<br>hose to hose', 'q-conn', null, ['ends'=>['Male B gas hose fitting','Male B gas hose fitting']], NULL, 54, '900f8034a5e396ccb395e4868c06daf4', TRUE),
    new GlassEquipment( 'QDB30', 'Quick Connects', 'pair<br>hose to regulator', 'q-conn', NULL, ['ends'=>['Female B fitting usually connects to regulator','Male B hose fitting']], NULL, 54, 'e1aed3144aeb30f08ff9ff4299b65251', true),

    #Manifold
    new GlassEquipment( 'MB7', 'Manifold Block ONLY', 'Works with oxygen or gas', 'manifold', NULL, [], NULL, 39, '8d1cc873c23543beb920b1e2a73d7a97', TRUE),
    new GlassEquipment( '32',  'Extra Fitting (Oxygen)', 'One side fits in manifold block, other side fits standard right hand threaded oxygen "B" size hose fittings', 'manifold', NULL, [], NULL, 1.50, '4cb219c844864f77a11fd5378a25c2fe', true),
    new GlassEquipment( '33',  'Extra Fitting (Fuel)', 'One side fits in the manifold block, the other side fits a standard left hand threaded "B" sized gas hose fitting. Has a mark stamped on nut for identification.', 'manifold', NULL, [], NULL, 1.50, 'dae38394cbeb4c17bb9b2111d8686448', true),
    new GlassEquipment( 'P41P', 'Manifold Plug', 'Plug for unused outlets', 'manifold', NULL, [], NULL, 2, '0401e82313c84ade9822db8f9027e7ac', true),

    #splitters
    new GlassEquipment( 'F271735', 'Propane Splitter with check valves.', 'Run more than one regulator, with check valves', 'splitter', 'F271765.jpg', [], null, 32, 'ddc4d3f713964fa69fa81250571037f9', true),
    new GlassEquipment( 'T15', 'Propane Splitter', 'Run more than one regulator, no check valves.', 'splitter', 'T15-1.jpg', [], NULL, 39, '341e0e93748f46e9b47ac3139df1946f', TRUE),

    #lighter
    new GlassEquipment( '1501', 'Spark Lighter', 'Used to light torches. Squeeze handles together to produce a spark.', 'lighter', 'sparklighter.gif', [], NULL, 3, 'ba4ef8c6bbfc98e134f1968b677b8879', true),
];