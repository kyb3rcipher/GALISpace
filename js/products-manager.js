function filterProducts(type) {
    let rows = document.getElementsByClassName('product-row');
    for (let i = 0; i < rows.length; i++) {
        if (type === 'All' || rows[i].classList.contains(type)) {
            rows[i].style.display = '';
        } else {
            rows[i].style.display = 'none';
        }
    }
}

// Change selected new image
function previewImage(event, id) {
    const reader = new FileReader();
    reader.onload = function(){
        const output = document.getElementById('img-' + id);
        output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
}

function deleteProduct(product) {
    const id = product.getAttribute('data-id');
    const confirmed = confirm("Are you sure you want to delete the product: " + id + "?");

    if (confirmed) {
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "../sql/delete_product.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                if (xhr.responseText === "success") {
                    product.closest('tr').remove();
                } else {
                    alert("Error deleting product: " + xhr.responseText);
                }
            }
        };
        xhr.send("id=" + encodeURIComponent(id));
    }
}

document.querySelector('.custom-file-upload input[type="file"]').addEventListener('change', function() {
    document.getElementById('file-name').innerHTML = '<i class="fa fa-cloud-upload"></i> Selected';
});