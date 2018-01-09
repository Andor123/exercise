import shape = require("./IShape2");
export class Circle2 implements shape.IShape2 {
    public draw() {
        console.log("Circle is drawn (external module)");
    }
}