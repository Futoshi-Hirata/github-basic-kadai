const text = document.querySelector("#text");
const btn =document.querySelector("#btn");

btn.addEventListener('click', () => {
    text.textContent = "ボタンをクリックしました";
})