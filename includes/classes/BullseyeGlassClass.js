"use strict";

function _classCallCheck(instance, Constructor) {
    if (!(instance instanceof Constructor)) {
        throw new TypeError("Cannot call a class as a function");
    }
}

var PriceCode = function PriceCode(pound, eleven, thirteen) {
    var fifteen = arguments.length > 3 && arguments[3] !== undefined ?
        arguments[3] :
        null;
    var thin = arguments.length > 4 && arguments[4] !== undefined ?
        arguments[4] :
        null;

    _classCallCheck(this, PriceCode);

    this.pound = pound;
    this.eleven = eleven;
    this.thirteen = thirteen;
    this.fifteen = fifteen;
    this.thin = thin;
};

var priceCodes = {
    A: new PriceCode("8.00", "12.00", "18.00", null, "6.00"),
    "A+": new PriceCode("10.00", "15.00", "22,00", null, "10.00"),
    B: new PriceCode("11.70", "15.73", "21.97", "29.25", "13.00"),
    "B+": new PriceCode("11.00", "16.00", "24.00", null, "12.00"),
    C: new PriceCode("13.40", "18.00", "25.15", "33.48", "14.00"),
    "C+": new PriceCode("14.25", "19.00", "27.00", null, null),
    D: new PriceCode("15.00", "20.19", "28.19", "37.53", "18.00"),
    "D+": new PriceCode("18.08", "24.30", "33.94", null, null),
    E: new PriceCode("18.36", "24.68", "34.48", "40.00", "18.60"),
    "E+": new PriceCode("21.42", "28.80", "40.22", null, null),
    F: new PriceCode("24.25", "32.75", "45.75", null, "30.30"),
    G: new PriceCode("29.00", "36.00", "50.00", null, "24.00"),
    K: new PriceCode("19.00", "25.70", "35.90", null, null)
};

var Glass = function Glass(image, id, name, type, code, pids) {
    var stock = arguments.length > 6 && arguments[6] !== undefined ?
        arguments[6] :
        true;

    _classCallCheck(this, Glass);

    this.image = image;
    this.id = id;
    this.name = name;
    this.name = name;
    this.type = type;
    this.code = priceCodes[code];
    this.pids = pids;
    this.stock = stock;
};