define(["require", "exports"], function (require, exports) {
    "use strict";
    exports.__esModule = true;
    var Triangle2 = /** @class */ (function () {
        function Triangle2() {
        }
        Triangle2.prototype.draw = function () {
            console.log("Triangle is drawn (external module)");
        };
        return Triangle2;
    }());
    exports.Triangle2 = Triangle2;
});
