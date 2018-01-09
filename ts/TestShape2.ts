import shape = require("./IShape2");
import circle = require("./Circle2");
import triangle = require("./Triangle2");
function drawAllShapes(shapeToDraw: shape.IShape2) {
    shapeToDraw.draw();
}
drawAllShapes(new circle.Circle2());
drawAllShapes(new triangle.Triangle2());