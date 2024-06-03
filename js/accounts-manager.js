document.addEventListener('DOMContentLoaded', (event) => { initializeFormHandlers(); });

function initializeFormHandlers(){
    const usernameInputs = document.querySelectorAll('input[type="text"]');
    const emailInputs = document.querySelectorAll('input[type="email"]');
    const deleteButtons = document.querySelectorAll('.delete-button');

    usernameInputs.forEach(input => {
        input.addEventListener('blur', function() {
            const newUsername = this.value;
            const oldUsername = this.getAttribute('data-old-username');

            if (newUsername !== oldUsername) {
                const confirmed = confirm("Are you sure you want to change the username from " + oldUsername + " to " + newUsername + "?");

                if (confirmed) {
                    const xhr = new XMLHttpRequest();
                    xhr.open("POST", "../sql/change_username.php", true);
                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhr.onreadystatechange = function () {
                        if (xhr.readyState === 4 && xhr.status === 200) {
                            if (xhr.responseText === "success") {
                                input.setAttribute('data-old-username', newUsername);
                            } else {
                                alert("Error updating username: " + xhr.responseText);
                            }
                        }
                    };
                    xhr.send("newUsername=" + encodeURIComponent(newUsername) + "&oldUsername=" + encodeURIComponent(oldUsername));
                } else {
                    input.value = oldUsername;
                }
            }
        });
    });

    emailInputs.forEach(input => {
        input.addEventListener('blur', function() {
            const newEmail = this.value;
            const oldEmail = this.getAttribute('data-old-email');

            if (newEmail !== oldEmail) {
                const confirmed = confirm("Are you sure you want to change the email from " + oldEmail + " to " + newEmail + "?");

                if (confirmed) {
                    const xhr = new XMLHttpRequest();
                    xhr.open("POST", "../sql/change_email.php", true);
                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhr.onreadystatechange = function () {
                        if (xhr.readyState === 4 && xhr.status === 200) {
                            if (xhr.responseText === "success") {
                                input.setAttribute('data-old-email', newEmail);
                            } else {
                                alert("Error updating email: " + xhr.responseText);
                            }
                        }
                    };
                    xhr.send("newEmail=" + encodeURIComponent(newEmail) + "&oldEmail=" + encodeURIComponent(oldEmail));
                } else {
                    input.value = oldEmail;
                }
            }
        });
    });

    deleteButtons.forEach(button => {
        button.addEventListener('click', function() {
            const username = this.getAttribute('data-username');
            const confirmed = confirm("Are you sure you want to delete the user: " + username + "?");

            if (confirmed) {
                const xhr = new XMLHttpRequest();
                xhr.open("POST", "../sql/delete_user.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        if (xhr.responseText === "success") {
                            button.closest('tr').remove();
                        } else {
                            alert("Error deleting user: " + xhr.responseText);
                        }
                    }
                };
                xhr.send("username=" + encodeURIComponent(username));
            }
        });
    });
}