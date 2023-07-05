// window.addEventListener("load", function(){
//     setTimeout(
//         function open(event){
//             document.querySelector(".popup_box").style.display = "none";
//         },
//         10
//     )
// });
//     document.querySelector("#close").addEventListener("click", function(){
//     document.querySelector(".popup_box").style.display = "none";
// });


setTimeout(() => {
    document.getElementById('sesionPopUp').style.display="block"
  }, 1000);

  let close = document.getElementById('close').addEventListener('click',function(){
    document.getElementById('sesionPopUp').style.display="none"
  });
  