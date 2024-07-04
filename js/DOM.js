let texts = "my first text !"
let text_title = document.getElementById("title");
let web_text = document.getElementsByClassName("text");
let changeButton = document.getElementById("changeButton");
let colorButton = document.getElementById("colorButton");

text_title.textContent = texts
changeButton.addEventListener("click", function () {
    if (text_title.textContent === texts)
        text_title.textContent = "changed !";
    else
        text_title.textContent = texts;
});

colorButton.addEventListener("click", function () {
    for (let i = 0; i < web_text.length; i++) {
        if (web_text[i].style.color === "blue")
            web_text[i].style.color = "red";
        else
            web_text[i].style.color = "blue";
    }
});
