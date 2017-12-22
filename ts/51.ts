class Root {
    str:string;
}

class Child extends Root {}
class Leaf extends Child {}

var obj = new Leaf();
obj.str = "hello";
console.log(obj.str);