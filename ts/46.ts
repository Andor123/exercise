interface RunOptions {
    program:string;
    commandline:string[]|string|(()=>string);
}

var options:RunOptions = {
    program: "test1",
    commandline: "Hello"
};
console.log(options.commandline);

options = {
    program: "test1",
    commandline: ["Hello", "World"]
};
console.log(options.commandline[0]);
console.log(options.commandline[1]);

options = {
    program: "test1",
    commandline: ()=>{return "**Hello World**"}
};

var fn:any = options.commandline;
console.log(fn());