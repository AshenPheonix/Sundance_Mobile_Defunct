function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var FritPriceCodes = function FritPriceCodes(prices) {
    _classCallCheck(this, FritPriceCodes);

    this.prices = prices;
};

var Frit = function Frit(image, number, color, code, types) {
    var _this = this;

    var out = arguments.length > 5 && arguments[5] !== undefined ? arguments[5] : null;

    _classCallCheck(this, Frit);

    this.image = image;
    this.number = number;
    this.color = color;
    this.types = types;
    this.out = out;
    this.code = fritPriceCodes[code];
    $.each(this.types.Fine, function(index, item) {
        item.printed = _this.code.Fine[index];
    });
    $.each(this.types.Medium, function(index, item) {
        item.printed = _this.code.Medium[index];
    });
    $.each(this.types.Coarse, function(index, item) {
        item.printed = _this.code.Coarse[index];
    });
    $.each(this.types.Powder, function(index, item) {
        item.printed = _this.code.Powder[index];
    });
};