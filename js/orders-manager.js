document.addEventListener('DOMContentLoaded', (event) => { initializeFormHandlers(); });

function initializeFormHandlers(){
    const deleteButtons = document.querySelectorAll('.delete-button');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function() {
            const orderID = this.getAttribute('data-id');
            const confirmed = confirm("Are you sure you want to delete the order: " + orderID + "?");

            if (confirmed) {
                const xhr = new XMLHttpRequest();
                xhr.open("POST", "../sql/delete_order.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        if (xhr.responseText === "success") {
                            button.closest('tr').remove();
                        } else {
                            alert("Error deleting order: " + xhr.responseText);
                        }
                    }
                };
                xhr.send("orderID=" + encodeURIComponent(orderID));
            }
        });
    });
}