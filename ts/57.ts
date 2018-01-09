var person = {
    firstName: "Tom",
    lastName: "Hanks",
    sayHello:function() {}
};
person.sayHello = function () {
    console.log("hello "+person.firstName);
};
person.sayHello();