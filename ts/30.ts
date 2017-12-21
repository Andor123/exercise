function employee(id:number, name:string) {
    this.id = id;
    this.name = name;
}

var emp = new employee(123, "Smith");
employee.prototype.email = "smith@abc.com";

console.log("Employee's ID: " + emp.id);
console.log("Employee's Name: " + emp.name);
console.log("Employee's Email ID: " + emp.email);