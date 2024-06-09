document.addEventListener('load', function() { updateTotal(); });

function selectAll(selectAllCheckbox) {
    const productCheckboxes = document.querySelectorAll('.product-checkbox');
    productCheckboxes.forEach(checkbox => {
        checkbox.checked = selectAllCheckbox.checked;
    });
    updateTotal();
}

function removeProduct(icon) {
    const productDiv = icon.closest('.product');

    // Send request to remove the product
    fetch('remove_from_cart.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ name: productDiv.querySelector('h3').textContent })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            productDiv.remove();
            updateOrderSummary(data.newTotalItems, data.newTotalPrice);
        } else {
            alert('There was a problem removing the product.');
        }
    })
    .catch(error => console.error('Error:', error));
}

function updateTotal() {
    const productCheckboxes = document.querySelectorAll('.product-checkbox');
    const totalItems = document.getElementById('total-items');
    const totalPrice = document.getElementById('total-price');
    const checkoutItems = document.getElementById('checkout-items');

    let total = 0;
    let items = 0;

    productCheckboxes.forEach(checkbox => {
        if (checkbox.checked) {
            const price = parseFloat(checkbox.dataset.price);
            const quantity = parseInt(checkbox.closest('.product').querySelector('select').value);
            total += price * quantity;
            items += quantity;
        }
    });

    totalItems.textContent = items;
    totalPrice.textContent = total.toFixed(2);
    checkoutItems.textContent = items;
}