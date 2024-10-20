<div class="cookie-banner" id="cookieConsentModal">
    <div class="cookie-banner__content">
        <p class="cookie-banner__message">
            We use cookies to enhance your experience, analyze site usage, and provide tailored marketing efforts. You can manage your preferences or consent to the use of all cookies by clicking "Accept All". For more detailed information, see our <a href="/privacy" class="cookie-banner__link">Privacy Policy</a> or <a href="/cookies" class="cookie-banner__link">Cookie Policy</a>.
        </p>
        <div class="cookie-banner__actions">
            <button class="cookie-banner__btn js-cookie-consent-accept-all" onclick="acceptAllCookies()">
                Accept All
            </button>
            <button class="cookie-banner__btn js-cookie-consent-manage-preferences">
                Manage Preferences
            </button>
        </div>
    </div>

    <!-- Modal for managing preferences -->
    <div class="cookie-modal" id="cookiePreferencesModal">
        @csrf
        <div class="cookie-modal__content">
            <h3 class="cookie-modal__title">Manage Cookie Preferences</h3>
            <p class="cookie-modal__description">Select which cookies you want to allow:</p>

            <div class="cookie-modal__category">
                <h4>Necessary Cookies</h4>
                <p>These cookies are essential for the website to function and cannot be switched off.</p>
                <label>
                    <input type="checkbox" id="neccessaryCookie" checked disabled> Necessary Cookies
                </label>
            </div>

            <div class="cookie-modal__category">
                <h4>Analytics Cookies</h4>
                <p>These cookies help us understand how visitors interact with our website by collecting information anonymously.</p>
                <label>
                    <input type="checkbox" id="analyticsCookies"> Enable Analytics Cookies
                </label>
            </div>

            <div class="cookie-modal__category">
                <h4>Marketing Cookies</h4>
                <p>We use marketing cookies to track visitors across websites to display relevant advertisements.</p>
                <label>
                    <input type="checkbox" id="marketingCookies"> Enable Marketing Cookies
                </label>
            </div>
            <div class="cookie-modal__category">
                <h4>Google Analytics</h4>
                <p>We use Google Analytics to track visitors across websites to display relevant advertisements.</p>
                <label>
                    <input type="checkbox" id="googleAnalyticsCookies"> Enable Google Analytics
                </label>
            </div>
            <div class="cookie-modal__category">
                <h4>Facebook Pixel</h4>
                <p>We use Facebook Pixel to track visitors across websites to display relevant advertisements.</p>
                <label>
                    <input type="checkbox" id="facebookCookies"> Enable Facebook Pixel
                </label>
            </div>

            <div class="cookie-modal__category">
                <h4>Twitter Pixel</h4>
                <p>We use Twitter Pixel to track visitors across websites to display relevant advertisements.</p>
                <label>
                    <input type="checkbox" id="twitterCookies"> Enable Twitter Pixel
                </label>
            </div>

            <div class="cookie-modal__actions">
                <button class="cookie-modal__btn js-cookie-consent-save-preferences">Save Preferences</button>
                <button class="cookie-modal__btn js-cookie-consent-close">Cancel</button>
            </div>
        </div>
    </div>
</div>


<script>
    document.querySelector('.js-cookie-consent-accept-all').addEventListener('click', function () {
        // Set cookie to accept all
        document.cookie = "cookie_consent=1; path=/; max-age=31536000"; // 1-year expiry
        // Hide banner
        document.querySelector('.cookie-banner').style.display = 'none';
    });

    document.querySelector('.js-cookie-consent-manage-preferences').addEventListener('click', function () {
        // Show preferences modal
        document.getElementById('cookiePreferencesModal').style.display = 'block';
    });

    document.querySelector('.js-cookie-consent-close').addEventListener('click', function () {
        // Close preferences modal
        document.getElementById('cookiePreferencesModal').style.display = 'none';
    });

    document.querySelector('.js-cookie-consent-save-preferences').addEventListener('click', function () {
        // Collect cookie preferences from checkboxes or toggle switches
        const preferences = {
            marketing: document.querySelector('#marketingCookies').checked ? 'accepted' : 'denied',
            facebook: document.querySelector('#facebookCookies').checked ? 'accepted' : 'denied',
            twitter: document.querySelector('#twitterCookies').checked ? 'accepted' : 'denied',
            google_analytics: document.querySelector('#googleAnalyticsCookies').checked ? 'accepted' : 'denied'
        };

        // Send preferences to the Laravel backend
        fetch('/set-cookie-preferences', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content') // Ensure CSRF token is sent
            },
            body: JSON.stringify({ preferences })
        })
            .then(response => response.json())
            .then(data => {
                if (data.message === 'Preferences saved successfully') {
                    // Close the modal and display success message
                    const modal = document.getElementById('cookiePreferencesModal');
                    const consentModal = document.getElementById('cookieConsentModal');
                    modal.classList.remove('cookie-modal--visible');

                    setTimeout(() => modal.style.display = 'none', 500);
                    acceptAllCookies();
                    consentModal.style.display = 'none';
                }
            })
            .catch(error => console.error('Error saving cookie preferences:', error));
    });


    document.querySelector('.js-cookie-consent-manage-preferences').addEventListener('click', function () {
        // Show the modal by adding the visible class
        const modal = document.getElementById('cookiePreferencesModal');
        modal.style.display = 'block'; // Ensure it's displayed first
        setTimeout(function() {
            modal.classList.add('cookie-modal--visible'); // Slide in after display is set
        }, 10); // Add a slight delay to trigger the CSS transition
    });

    document.querySelector('.js-cookie-consent-close').addEventListener('click', function () {
        // Hide the modal by removing the visible class and then setting display to none
        const modal = document.getElementById('cookiePreferencesModal');
        modal.classList.remove('cookie-modal--visible'); // Slide out
        setTimeout(function() {
            modal.style.display = 'none'; // Completely hide after animation
        }, 500); // Match the duration of the CSS transition
    });

    document.addEventListener('DOMContentLoaded', function () {
        // Ensure modal is scrollable on mobile devices if content is long
        const modal = document.getElementById('cookiePreferencesModal');
        if (modal) {
            modal.style.maxHeight = window.innerHeight * 0.8 + 'px';
            modal.style.overflowY = 'auto';
        }

        // Other JS functions remain the same as previously shared
    });


    // Utility function to set cookies
    function setCookie(name, value, days) {
        const date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        const expires = "expires=" + date.toUTCString();
        document.cookie = name + "=" + value + ";" + expires + ";path=/";
    }

    // Function to get a cookie value by name
    function getCookie(name) {
        const nameEQ = name + "=";
        const ca = document.cookie.split(';');
        for(let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) === ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }


    function acceptAllCookies() {
        // Set all cookies to 'accepted'
        setCookie('marketing_cookies', 'accepted', 365);
        setCookie('facebook_cookies', 'accepted', 365);
        setCookie('twitter_cookies', 'accepted', 365);
        setCookie('google_analytics_cookies', 'accepted', 365);

        // Store a general flag to remember that user accepted all cookies
        setCookie('cookies_accepted', 'true', 365);

        // Hide the cookie consent modal
        document.getElementById('cookieConsentModal').style.display = 'none';
    }

    // Check if cookies were previously accepted
    function checkCookieConsent() {
        const modal = document.getElementById('cookieConsentModal');
        if (!modal) {
            console.error('Cookie Consent Modal not found!');
            return;
        }
        const cookiesAccepted = getCookie('cookies_accepted');
        if (cookiesAccepted === 'true') {
            // User already accepted, no need to show the consent modal again
            modal.style.display = 'none';
        } else {
            // Show the consent modal
            modal.style.display = 'block';
        }
    }

    // Call this function when the page loads to check cookie consent status
    document.addEventListener('DOMContentLoaded', function() {
        checkCookieConsent();
    });


</script>
