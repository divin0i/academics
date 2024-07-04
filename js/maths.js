/*
** EPITECH PROJECT, 2024
** Training_arc
** File description:
** maths
*/
export function add(a, b)
{
    return a + b;
}

export function subtract(a, b)
{
    return a - b;
}

export function multiply(a, b)
{
    return a * b;
}

export function divide(a, b)
{
    if (b !== 0) {
        return a / b;
    } else {
        console.log("Error: Division by zero");
        return undefined;
    }
}
