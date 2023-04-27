const imgContainer = document.querySelector(".img-container");
let detailDivs = document.querySelectorAll(".alls-datails");
const imgView = document.querySelectorAll(".img-view");
const button = document.querySelectorAll(".btn");
for (i = 0; i < detailDivs.length; i++) {
  detailDivs[i].style.display = "none";
}
const container = document.querySelector(".img-container");
let btns = document.querySelectorAll(".btn");
btns.forEach((element) => {
  element.addEventListener("click", (e) => {
    detailDivs.forEach((divs) => {
      if (divs.classList[1] == e.target.classList[0]) {
        divs.style.display = "block";
        imgView.forEach((imgs) => {
          imgs.style.display = "none";
        });
        button.forEach((buttons) => {
          buttons.style.display = "none";
        });
      }
    });
  });
});
const close = document.querySelectorAll(".fa-x");
close.forEach((x) => {
  x.addEventListener("click", (e) => {
    detailDivs.forEach((div) => {
      div.style.display = "none";
    });
    imgView.forEach((imgs) => {
      imgs.style.display = "block";
    });
    button.forEach((buttons) => {
      buttons.style.display = "block";
    });
  });
});