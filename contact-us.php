<?php
$pageTitle = "Contact Us";
$pageStyles = 'css/contact-us.css';
include "includes/layout_start.php"; 
?>


<main>
    <h1 class="grandient-highlight-text">Contact Us</h1>

    <div id="message-form">
            <form action="#" method="post">
                <fieldset>
                <legend>Write a message</legend>
                    <div id="container-form">
                        <label for="message-type">Type</label>
                        <select id="message-type" name="message-type"> 
                            <option>Package tracking</option>
                            <option>Refound</option>
                            <option>Order error</option>
                            <option>Website error</option>
                            <option>Other</option>
                        </select>

                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email">

                        <label for="message">Message:</label>
                        <textarea id="message" name="message"></textarea>

                        <input type="submit" value="Submit" class="magenta-button">
                    </div>
                </fieldset>
            </form>
        
        <div id="image">
            <img src="images/contact-us/image.svg">
        </div>
    </div>
</main>


<?php include "includes/layout_end.php"; ?>