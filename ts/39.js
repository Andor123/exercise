var mytuple = [10, "Hello", "World", "typescript"];
console.log("Items before push " + mytuple.length);
mytuple.push(12);
console.log("Items after push " + mytuple.length);
console.log("Items before pop " + mytuple.length);
console.log(mytuple.pop() + " popped from the tuple");
console.log("Items after pop " + mytuple.length);
