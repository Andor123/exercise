interface IPerson {
    firstname:string;
    lastname:string;
    sayHi: ()=>string;
}

var customer:IPerson = {
    firstname: "Tom",
    lastname: "Hanks",
    sayHi: ():string => {return "Hi there"}
};

console.log("Customer Object ");
console.log(customer.firstname);
console.log(customer.lastname);
console.log(customer.sayHi());

var employee:IPerson = {
    firstname: "Jim",
    lastname: "Blakes",
    sayHi: ():string => {return "Hello!!!"}
};

console.log("Employee Object");
console.log(employee.firstname);
console.log(employee.lastname);
console.log(employee.sayHi());