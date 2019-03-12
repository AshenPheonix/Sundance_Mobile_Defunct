'use strict';

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var glass = function () {
    function glass(image, name, id, price, colors, brand, values) {
        _classCallCheck(this, glass);

        this.image = image;
        this.id = id;
        this.price = price;
        this.values = values;
        this.color = colors;
        this.brand = brand;
        this.name = name;
    }

    _createClass(glass, [{
        key: 'prices',
        value: function prices(which) {
            if (which = "quarter") {
                return price * .25;
            } else if (which = 'rod') {
                return price * .12;
            } else if (which = '5to9') {
                return price * .25 * .25;
            } else if (which = '10+') {
                return price * .30 * .5;
            }
        }
    }, {
        key: 'calculated',
        value: function calculated(which) {
            var temp = prices(which);
            var demoing = temp;
            demoing = temp * 100;
            if (demoing - Math.floor(demoing) > 0) {
                return (Math.floor(demoing) + 1) / 100;
            } else {
                return temp;
            }
        }
    }, {
        key: 'value',
        value: function value(which) {
            return this.values[which];
        }
    }, {
        key: 'image',
        get: function get() {
            return this.image;
        }
    }, {
        key: 'imageLg',
        get: function get() {
            return this.largeImage;
        }
    }, {
        key: 'id',
        get: function get() {
            return this.id;
        }
    }, {
        key: 'color',
        get: function get() {
            return this.colors;
        }
    }]);

    return glass;
}();
