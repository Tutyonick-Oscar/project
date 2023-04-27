let imgs = document.querySelectorAll(".js-imgs");
let form = document.querySelector(".section-contact");
const observer = new IntersectionObserver(
  (observed) => {
    observed.forEach((element) => {
      if (element.isIntersecting) {
        element.target.animate(
          [
            {
              transform: "scale(0.5)",
              opacity: 1,
            },
            {
              transform: "scale(1)",
              opacity: 1,
            },
          ],
          { duration: 1000 }
        );
      }
    });
  }
);
imgs.forEach((images) => {
  observer.observe(images);
});
observer.observe(form);
