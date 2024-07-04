/*
** EPITECH PROJECT, 2024
** Training_arc
** File description:
** awaits
*/

function delay(ms) {
    return new Promise((resolve) => {
        setTimeout(resolve, ms);
    });
}

async function run() {
    console.log('Start');
    await delay(2000);
    console.log('Executed after 2 seconds');
    await delay(1000);
     console.log('Executed after 3 seconds');
}
run();
