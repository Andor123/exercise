define(["require", "exports"], function (require, exports) {
    "use strict";
    exports.__esModule = true;
    var Circle2 = /** @class */ (function () {
        function Circle2() {
        }
        Circle2.prototype.draw = function () {
            console.log("Circle is drawn (external module)");
        };
        return Circle2;
    }());
    exports.Circle2 = Circle2;
});
