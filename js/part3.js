/*
** EPITECH PROJECT, 2024
** Training_arc
** File description:
** part3
*/

function delay(success)
{
    return new Promise((resolve, reject) => {
        setTimeout(() =>{
            if (success)
                resolve("got it !");
            else
                reject("damn it !");
        }, 2000);
    });
}

async function sync(success)
{
    try {
        let result = await delay(success);
        console.log(result);
    } catch(error) {
        console.error(error);
    }
}

sync(true).then ( () => {
    console.log("==========");
    return sync(false);
})