/*
** EPITECH PROJECT, 2024
** Training_arc
** File description:
** part1
*/

let num = 10;
let nb = 2;
let str = "hello world";
let arr = [1, 2, 3, 4, 5, 6];
let sum = 0;

console.log("==============ex 1 - 2==============");
console.log(str);
console.log("add:", num + nb);
console.log("minus:", num - nb);
console.log("times:", num * nb);
console.log("divide:", num / nb);
console.log("=================ex 3===========");
for (let i = 0; i < 10; i++){
    if (i % 2 === 0)
        console.log(i, "Got it");
    else if (i === 5)
        console.log("halfway through");
    else
        console.log(i, "it ain't it");
}
console.log("================ex 3 part2=============");
for (let i = 0; i <= 10; i++)
    console.log(i);
console.log("================ex 4=============");
for(let i = 0; i < arr.length; i++)
    sum += arr[i];
console.log ("result:", sum);
console.log("=============================");