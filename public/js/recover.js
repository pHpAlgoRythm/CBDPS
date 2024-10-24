
const input = document.querySelector('.emailInput');
const button = document.querySelector('.emailBtn');

input.addEventListener('input', ()=>{
    if(input.value.trim() === ""){
        button.disabled = true;
    }else{
        button.disabled = false;
    }
})