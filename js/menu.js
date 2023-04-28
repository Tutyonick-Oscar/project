let side = document.querySelector(".side");
let open = document.querySelector(".open");
let closer = document.querySelector(".close");
open.addEventListener("click", () => {
  side.style.display = "block";
  side.animate([
    {transform:'translateX(150px)'},
    {transform:'translateX(0)'}
  ],
    {duration : 500}
  )
  closer.style.display = "block";
  open.style.display = "none";
  side.style.position = "fixed";
});
closer.addEventListener('click',()=>{
    open.style.display ='block';
    closer.style.display ='none';
    side.animate([
        {transform:'translateX(0)',display:'block'},
        {transform:'translateX(160px)',display:'none'}
      ],
        {duration : 500}
      )
      setTimeout(()=>{
        side.style.display='none';
      },500)
})
