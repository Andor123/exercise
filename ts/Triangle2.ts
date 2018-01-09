import shape = require("./IShape2");
export class Triangle2 implements shape.IShape2 {
    public draw() {
        console.log("Triangle is drawn (external module)");
    }
}