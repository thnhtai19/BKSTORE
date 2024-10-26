document.addEventListener('DOMContentLoaded', () => {
    const selectAllCheckbox = document.getElementById('selectAll');
    const productCheckboxes = document.querySelectorAll('.product-checkbox');
    const quantityInputs = document.querySelectorAll('.quantity-input');
    const totalAmountDisplay = document.getElementById('totalAmount');

    selectAllCheckbox.addEventListener('change', (event) => {
        productCheckboxes.forEach(checkbox => {
            checkbox.checked = event.target.checked;
        });
        updateTotalAmount(); 
    });

    document.querySelectorAll('.increase-btn').forEach(button => {
        button.addEventListener('click', () => {
            const input = button.previousElementSibling;
            let quantity = parseInt(input.value);
            input.value = quantity + 1;
            updateTotalAmount();
        });
    });

    document.querySelectorAll('.decrease-btn').forEach(button => {
        button.addEventListener('click', () => {
            const input = button.nextElementSibling;
            let quantity = parseInt(input.value);
            if (quantity > 1) {
                input.value = quantity - 1;
                updateTotalAmount();
            }
        });
    });

    document.querySelectorAll('.remove-btn').forEach(button => {
        button.addEventListener('click', (event) => {
            const productDiv = event.target.closest('.flex');
            productDiv.closest('.pt-4').remove(); 
            updateTotalAmount(); 
        });
    });

    productCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', updateTotalAmount);
    });

    function updateTotalAmount() {
        let total = 0;
        document.querySelectorAll('.product-checkbox:checked').forEach((checkbox) => {
            const quantity = parseInt(checkbox.closest('.flex').querySelector('.quantity-input').value);
            const priceText = checkbox.closest('.flex').querySelector('.price').innerText.replace('đ', '').replace('.', '');
            const price = parseInt(priceText);
            total += price * quantity;
        });
        totalAmountDisplay.innerText = `Tạm tính: ${total.toLocaleString()}đ`;
    }
});
