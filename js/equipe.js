const photos = document.querySelectorAll(".photo");
const observer = new IntersectionObserver((photo) => {
  photo.forEach((el) => {
    if (el.isIntersecting) {
      el.target.animate(
        [{ transform: "scale(0.5)" }, { transform: "scale(1)" }],
        {
          duration: 800,
        }
      );
    }
  });
});
photos.forEach((element) => {
  observer.observe(element);
});
