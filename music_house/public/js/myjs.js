const input = document.getElementById('duhast1'),
        quantity = document.getElementById('card-quantity'),
        btn_increment = document.getElementById('btn_increment'),
        btn_decrement = document.getElementById('btn_decrement');


input.addEventListener ('input', () => {
    currentQuantity = input.value;
    if(currentQuantity <= 100) {
        quantity.textContent = currentQuantity;
    }
})        

const UpdateQuantity = () => {
            currentQuantity = input.value;
            quantity.textContent = currentQuantity;
        }
        
btn_increment.addEventListener('click', () => {
    let currentQuantity = input.value;
    currentQuantity++;
    input.value = currentQuantity;
    UpdateQuantity();
});

btn_decrement.addEventListener('click', () => {
    let currentQuantity = input.value;
    if (currentQuantity > 0) {
        currentQuantity--;
    }
    input.value = currentQuantity;
    UpdateQuantity();
});