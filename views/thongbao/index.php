<div class="newsletter-popup mfp-hide bg-img" id=""newsletter-popup-form
    style="background: #f1f1f1 no-repeat center/cover url(assets/images/newsletter_popup_bg.jpg)">
    <div class="newsletter-popup-content">
        <img src="views/assets/images/logo.png" alt="Logo" class="logo-newsletter" width="111" height="44">
        <h2>Theo dõi chúng tôi </h2>

        <p>
            Nhận thông báo mới nhất từ những ưu đãi hot
        </p>

        <form id="">
            <div class="input-group">
                <input type="email" class="form-control" id="newsletter-email" name="newsletter-email"
                    placeholder="Your email address" required />
                <input type="submit" class="btn btn-primary" value="Submit" />
            </div>
        </form>
        <div class="newsletter-subscribe">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" value="0" id="show-again" />
                <label for="show-again" class="custom-control-label">
                    Không nhắc lại lại
                </label>
            </div>
        </div>
    </div>

    <button title="Close (Esc)" type="button" class="mfp-close" onclick="closePopup()">
        ×
    </button>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        var newsletterForm = document.getElementById("newsletter-form");

        if (newsletterForm) {
            newsletterForm.addEventListener("submit", function (event) {
                event.preventDefault(); // Prevent the default form submission behavior

                var showAgainCheckbox = document.getElementById("show-again");

                // If the checkbox is checked, save the user's preference on the server
                if (showAgainCheckbox.checked) {
                    var userEmail = document.getElementById("newsletter-email").value;
                    saveUserPreference(userEmail);
                }

                // Close the popup
                document.getElementById("newsletter-popup-form").style.display = "none";
            });
        }
    });

    function saveUserPreference(email) {
        // Make an AJAX request to your server to save the user's email preference
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "/save-preference", true);
        xhr.setRequestHeader("Content-Type", "application/json");

        var data = {
            email: email,
            preference: "do_not_show_again"
        };

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Handle the server's response if needed
                console.log(xhr.responseText);
            }
        };

        xhr.send(JSON.stringify(data));
    }

    function checkPopup() {
        // Check on the server whether to show the popup
        // Implement this function on your server and adjust the logic as needed
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "/check-show-popup", true);

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var showPopup = JSON.parse(xhr.responseText).showPopup;

                // If the server says to show the popup, display it
                if (showPopup) {
                    document.getElementById("newsletter-popup-form").style.display = "block";
                }
            }
        };

        xhr.send();
    }

    window.onload = checkPopup;
</script>