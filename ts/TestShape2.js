define(["require", "exports", "./Circle2", "./Triangle2"], function (require, exports, circle, triangle) {
    "use strict";
    exports.__esModule = true;
    function drawAllShapes(shapeToDraw) {
        shapeToDraw.draw();
    }
    drawAllShapes(new circle.Circle2());
    drawAllShapes(new triangle.Triangle2());
});
