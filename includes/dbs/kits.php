<?php

require_once CLASSROOT.'KitClass.php';
/* 
 *Old Kits
 *
$kits=[
    new Kit( 'Beginner Alpha Kit', 'soft', 'Designed for Soft Glass Torchwork, including but not limited to: Glassblowing, Marblemaking, Beads and Pendants', 'Alpha Torch', 'beginner-alpha.php', 'alpha-beginner-bead-kit-sm.jpg', '495.95', '6738d4f419327b3aac63d5b6b623403b', 1, false),
    new Kit( 'Beginner Bravo Kit', 'soft hard', 'Designed for any Kind of Torchwork, including but not limited to: Glassblowing, Marblemaking, and Pipemaking', 'Bravo Torch', 'beginner-bravo.php', 'bravokit-sm.jpg', '1349.95', '3a955f384b90663ce7089d56e2befe75', 1, false),

    new Kit( 'Kit #1', 'soft', 'Designed for any kind of lampworking and glass beadmaking with soft glass like Effetre/Moretti (this torch will not work with Pyrex).', 'HotHead Torch', 'kit1.php', 'kit1-1sm-words.jpg', '99.00', 'b4f1b000b4d50c398b57876d2e5e7eea'),
    new Kit( 'Kit #2', 'soft', 'Designed for any kind of lampworking and glass beadmaking with soft glass like Effetre/Moretti (this torch will not work with Pyrex).', 'HotHead Torch', 'kit2.php', 'lampkit2vsm.jpg', '157.00', 'bb7ae071f2e0aa978507773675295efd'),
    new Kit( 'Kit #3', 'soft', 'Designed for any kind of lampworking and glass beadmaking with soft glass like Effetre/Moretti (this torch will not work with Pyrex).', 'HotHead Torch', 'kit3.php', 'Kit3-1med-lampworking-glass-beadmaking-words.jpg', '231.00', 'e72ae6ad19b7a54b329d6366ecfa199c'),
    new Kit( 'Kit #4', 'soft hard', 'Designed for any kind of lampworking and glass beadmaking.', 'Minor Burner Torch', 'kit4.php', 'lampworking-kit-4-sm.jpg', '310.00', '1980f5fb5d7ddf8c066bd82da1776280'),
    new Kit( 'Kit #5', 'soft hard', 'Designed for any kind of lampworking and glass beadmaking.', 'Minor Burner Torch', 'kit5.php', 'lampkit5sm.jpg', '434.50', 'b2c7dc87f2fda7dafa82a3f33d728d3e'),
    new Kit( 'Kit #6', 'soft hard', 'Designed for any kind of lampworking and glass beadmaking.', 'Minor Burner Torch', 'kit6.php', 'kit6-lampwork-glass-beadmaking-med1.jpg', '497.00', 'f8274f1486f3a8052288f0346ff2958a'),
    #new Kit( 'Kit #8', 'soft hard', 'Designed for any kind of lampworking and glass beadmaking.', 'Major Burner Torch', 'kit8.php', 'lampkit8sm.jpg', '727.00', '1374f9fdddbbb13448727e736b191c6f'),
    new Kit( 'Kit #10', 'soft hard', 'Designed for any kind of lampworking and glass beadmaking.', 'Major Burner Torch', 'kit10.php', 'flameworking-kit-10-lg.jpg', '901.00', '1c4b77c209226ca808f4344b3b45e9fc'),
    #new Kit( 'Kit #12', 'soft hard', 'Complete Kit designed for the artist making pipes, sculptures and ornaments with pyrex glass. ', 'Major Burner Torch', '829', 'lampkitGeneric.jpg', '829.00', '375650399ffa0fda6c9cada6315b6253'),
    new Kit( 'Kit #21', 'soft', 'Designed for any kind of lampworking and glass beadmaking with soft glass like Effetre/Moretti (this torch will not work with Pyrex).', 'HotHead Torch', 'kit21.php', 'glass-beadmaking-kit-21-med.jpg', '199.00', '77298d3ee440bb233e28cb5f68c09c78'),
    new Kit( 'Kit #420 Basic', 'hard', 'This kit is designed for borosilicate glass working. Marbles, Beads, Pipes, and Sculpture', 'National 6B Torch', 'kit420basic.php', 'kit-420-med-words.jpg', '420.00', 'db51e0703daa191c90ab650ea8040edd'),
    new Kit( 'Kit #420 Deluxe', 'hard', 'This kit is designed for borosilicate glass working. Marbles, Beads, Pipes, and Sculpture', 'National 6B Torch', 'kit-420-glass-pipe-deluxe.php', 'kit-420-advanced-1sm.jpg', '568.00', 'fbca0e29a8b371c2b726b440981de0a8'),
    new Kit( 'Kit #420 X', 'hard', 'This kit is designed for borosilicate glass working. Marbles, Beads, Pipes, and Sculpture', 'Major Burner torch with Minor Burner Top', 'kit-pipe-420x.php', 'kit-420X-1sm-words.jpg', '999.00', '5d3ec94abca4724e20021e4768d7365b'),
];*/

$kits=[
    new Kit('BBKA', 'tool', 'Basic Bead Kit}Created with the starting beadworker in mind.', 'basicBead.php', 'beadkit1.jpg', '152.50', '135.90', '3a955f384b90663ce7089d56e2befe75', 1),
    new Kit('BMAK1', 'tool', 'Deluxe Marble and Bead Kit}Created for beadworkers with a need for a more complete kit.', 'delBead.php', 'bmak.jpg', '405.30', '365.00', '1974ef63b37c5a9bff889d87268ffc67', 1),
    new Kit('420TK', 'tool', '420 Kit}A basic kit for Borosilicate work. Make Marbles, sculptures, pipes and more',  '420kit.php', '420kit.jpg', '271.30', '245.00', 'f5d060c82f64a90f7b8d60ea7adf0b21', 1),
    new Kit('420DTK', 'tool', '420 Deluxe Kit}A more complete kit for Borosilicate work. Make Marbles, scuptures, pipes, and more', '420DelKit.php', '420Dkit.jpg', '383.80', '346.00', '3259ca42075770ebbf7adacdce896bd1', 1),
    new Kit('430XTK', 'tool', '420 eXtreme Kit}Our Most complete kit for Borosilicate work. Make Marbles, scuptures, pipes, and more', '420XKit.php', 'toolkit420xsm.jpg', '537.00', '484.00', 'c70d6f5a391a063c13a54aca21506cae', 1),

    new Kit('TEK1', 'gas', 'Torch Equipment Kit}&frac14;&quot Hose for use with an oxygen tank. Includes hoses, lighter, regulators, and clamps', 'torchEquip1.php', 'tk2sm.jpg', '179.00', '162.00', '52aa8d336a1301496a05694b26297770', 1),
    new Kit('TEK2', 'gas', 'Torch Equipment Kit}&frac14;&quot Hose for use with an oxygen concentrator. Includes hoses, lighter, regulator, and clamps', 'torchEquip2.php', 'tk1sm.jpg', '109.00', '92.00', '5d37da5b0700045b5700d69cf3c375b1', 1),
    new Kit('TEK3', 'gas', 'Torch Equipment Kit}&frac38;&quot Hose for use with an oxygen tank. Includes hoses, lighter, regulators, and clamps', 'torchEquip3.php', 'tk3sm.jpg', '186.00', '168.00', 'dabd8a62e32ccb754275ecf96e637def', 1),
    new Kit('TEK4', 'gas', 'Torch Equipment Kit}&frac38;&quot Hose for use with an oxygen concentrator. Includes hoses, lighter, regulator, and clamps', 'torchEquip4.php', 'tk4sm.jpg', '109.00', '99.00', '49626db725edf50ba5133f988b2fbf9d', 1),
];