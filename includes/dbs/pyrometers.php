<?php
    require_once CLASSROOT .'PyroClass.php';

    $pyrometers=[
        new Pyrometer('7770', 'pyrometer', 'Digital Pyrometer - reads to 2000 Degree\'s F - Supplied with standard Thermocouple Wire (2242T below)', '7770-sm-5-pyrometer-kiln-temperature.jpg', '59', [[1,'44.00'],[2,'39.60']], '4b8fa95c438c450d892ddffb4e9859ed', 'qty', 1),
        new Pyrometer('7771', 'pyrometer', 'Digital Pyrometer - Reads to 2000 Degree\'s F - Supplied with Ceramic Covered Heavy Duty Thermocouple wire that is rated to 2400 F&deg; (pyro will only to 2000 F though)', '7771-sm-4-pyrometer-kiln-temperature.jpg', '69', [[1,'54.00'],[2,'48.60']], '39019b4080d04391a16e1a2a718c7dd8', 'qty',1),

        new Pyrometer('2242T', 'thermocouple', 'Replacement Thermocouple.  Good to 2000 F&deg;. This will plug directly into many style pyrometers including the 7770 and 7771. The insulation at the end of the wire will normally burn away but will not affect performance.', 'thermocouple-for-pyrometer-2242T-sm.jpg', '9.00', '9.00', 'cbd99f89fe7242d7a714301f1cdae190', false, 1),
        new Pyrometer('2244T', 'thermocouple', 'Replacement Thermocouple. Ceramic covered heavy gauge wire. Good to 2400 F&deg;. This will plug directly into many style pyrometers including the 7770 and 7771', 'thermocouple-for-pyrometer-2244T-sm.jpg', '19.00', '19.00', '4b37508431014f6390793f6d1e34b985', false, 1),
        new Pyrometer('2243T', 'thermocouple', 'Adaptor AND replacement thermocouple for the 7773 pyrometer - once you have the adaptor, you can just order the 2242T', 'thermocouple-for-pyrometer-2243T-sm.jpg', 24.95, 24.95, 'e12b75bf73994823912eaf66e4641614', false, 1),
    ];