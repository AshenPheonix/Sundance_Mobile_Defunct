<?php

require_once CLASSROOT .'Crucibles.php';

$crucibles=[
    new Crucible('C3', 'crucible', 3.4, 4.5, ['13 cu&sup3; In', '.22 Quarts'], '33a2d5166e514f88b1ae98bfdc8675aa', 'crucible-4sm.jpg', 6, 1),
    new Crucible('C3.5', 'crucible', 3.5, 5, ['25 cu&sup3; In,', '.43 Quarts'], 'eb5dbf5eec8a4321b96142a8e51d86de', 'crucible-5sm.jpg', 8, 1), 
    new Crucible('C4.2', 'crucible', 4.2, 6.45, ['2.5 Lbs', '2 Cups'], 'f7849243b6c44c959bb0ab6c23a6d66e', 'crucible-6sm.jpg', 14, 1),
    new Crucible('C5.5', 'crucible', 5.5, 8.4, ['4 Pounds', '1.2 Quarts'], '9e83aeeff77249248b74106e57755493', 'crucible-7sm.jpg', 25, 1),
    new Crucible('C7.1', 'crucible', 7.1, 10.3, ['17 Lbs', '3.5 Quarts'], '1708a21175044c04a3ae94d05984c6c5', 'crucible-8sm.jpg', 79, 1),
    new Crucible('C9', 'crucible', 9.5, 13, ['30 Pounds', '6 quarts'], 'c7f52c7e57c64f738125f9d115e9cbd0', 'crucible-C9-180.jpg', 135, 1),

    new Crucible('CCD6', 'catch', 6, null, null, 'f34e83bdcfd24fa9b03c302edb976676', null, 19, 1),
    new Crucible('CCD8', 'catch', 8, null, null, '9af2e5b6f8914c5ead3c6417074da1f9', null, 24, 1)
];