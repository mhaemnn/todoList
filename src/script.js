const inputText = document.querySelector("#text");
const myButtons = document.querySelector(".btn-list");
const list = document.querySelector(".container ul");

myButtons.addEventListener("click", (e) => {
  if (inputText.value != "") {
    e.preventDefault();
    //membuat li
    const myLi = document.createElement("li");
    myLi.innerHTML = inputText.value;
    list.appendChild(myLi);

    //membuat span
    // membuat span dengan ikon trash
    const mySpan = document.createElement("span");
    mySpan.innerHTML = '<i class="fas fa-trash-alt"></i>';
    myLi.appendChild(mySpan);
  }
  const close = document.querySelectorAll("span");
  for (let i = 0; i < close.length; i++) {
    close[i].addEventListener("click", () => {
      close[i].parentElement.style.opacity = 0;
      setTimeout(() => {
        close[i].parentElement.style.display = "none";
        close[i].parentElement.remove();
      }, 500);
    });
  }
  inputText.value = "";
});
