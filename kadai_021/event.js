const text = document.querySelector("#text");
const btn =document.querySelector("#btn");


btn.addEventListener('click', () => {
    setTimeout(() => {
    text.textContent = "ボタンをクリックしました";
    }, 2000);
});