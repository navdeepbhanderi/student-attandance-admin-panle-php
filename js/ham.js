let btn1 = document.getElementById('hamburger');
let allLi = document.querySelectorAll('ul li p')
    btn1.addEventListener("click",()=>{
    allLi.forEach((item) =>{
    item.classList.toggle('hidden');

})
})