/*
** EPITECH PROJECT, 2024
** Training_arc
** File description:
** part2
*/
function printf(str)
{
    console.log(str);
}

function factorial(a)
{
    if (a === 0)
        return 1;
    else
        return a * factorial(a - 1);
}

let obj = {
    name : "maximus",
    age : 22
}
obj.birth = 2002;
console.log(obj.name, "is", obj.age, "old", "because he's from", obj.birth);

obj.greetings = function () {
    console.log("hello there" , this.name, "!");
};

let trie = {
    name : "nigga",
    birthyear : 2004,
    actual_year : new Date().getFullYear(),
    shit: function () {
        console.log("you are", this.actual_year - this.birthyear, "years old");
    },
    adds : function (a, b) {
        return a + b;
    },
    subs: function (a, b) {
        return a - b;
    },
    multiplys: function (a, b) {
        return a * b;
    },
    divides: function (a, b) {
        if (b != 0)
            return a / b;
        else
            console.log("Error: Zero division forbidden");
    }
};

let student = {};

student.name = "jake";
student.profession = "actor";
student.age = 19;
let nb = [];
student.num = [12, "yo", 3, 4, 5, 6, 7];
nb = student.num;
console.log(nb[1]);

printf("hello world");
obj.greetings();
console.log(trie.adds(12, 5));
console.log(trie.subs(12, 5));
console.log(trie.multiplys(12, 5));
console.log(trie.divides(12, 5));
trie.shit(2004);