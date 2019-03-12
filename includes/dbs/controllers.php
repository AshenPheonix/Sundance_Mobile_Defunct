<?php

require_once CLASSROOT.'ControllerClass.php';

$controllers=[
    new Controller('5557 & 5558', '3key', '120 Volts in 2 Amp styles; 15 and 20 amp', ['2217ef5e89d44b4089f542a4ec33f91e','c987014667e0472fa954d713306673d3'] , 'select', null, 'sentry-express-40-controller-med.jpg', 604, [['15 Amp', 483], ['20 amp', 483]], [1,1]),
    new Controller('TNF12015', '12-key', '110-120 volts at 15 Amps', '6004e668e1dc4a72982e77f397255193', false, null, null, 720, 576, 1),
    new Controller('TNF12020', '12-key', '110-120 volts at 20 Amps', '5b92656bf7954920a42b302a9ff2c20a', false, null, null, 720, 576, 1),
    new Controller('TNF24020', '12-key', '220-240 volts at 20 Amps', 'b39efd313ce74b5ea1d20424e78fd6d2', false, null, null, 720, 576, 1),
    new Controller('TNF24030', '12-key', '220-240 volts at 30 Amps', '4824daab0a6648f380e6de37e3965866', false, null, null, 810, 648, 1),
    new Controller('TNF24050', '12-key', '220-240 volts at 50 Amps', 'dd68627a3ca44e63a03b8207bffe633e', false, null, null, 930, 744, 1),
    new Controller('PCB1', 'ICS', 'Infinte Control Switch', '25cfc2b64da344d6f9016a1fc857e48f', false, null, null, 91, 84, 1),
    
];