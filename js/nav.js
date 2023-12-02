
let dropdownlist = document.querySelector('#list div');
let dropdown = document.querySelector('#list ul');
console.log(dropdown)
dropdownlist.addEventListener("click",()=>{
    dropdown.classList.toggle('hidden');
    dropdownlist.querySelector('#down').classList.toggle('rotate-180')
})

