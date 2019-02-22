/* Handle various modals */
/* Hard drive pricing modal */
if (document.getElementById('hdd-pricing-modal') !== null) {
    console.log('HDD pricing modal detected');
// Get the modal
    var modal = document.getElementById('hdd-pricing-modal');

// Get the button that opens the modal
    var btn = document.getElementById("hdd-pricing-modal-button");

    var span = document.getElementById("hdd-pricing-close");

    // Make sure we got all required things
    if (modal && btn && span) {
        bootstrapModals(modal, btn, span);
    } else {
        console.error('something went wrong with HDD pricing modal detection');
        console.error(modal, btn, span);
    }
}

/* Privacy Policy modal on shipping page */
if (document.getElementById('privacy-policy-modal') !== null) {
    console.log('Privacy policy modal detected');
// Get the modal
    var modal = document.getElementById('privacy-policy-modal');

// Get the button that opens the modal
    var btn = document.getElementById("privacy-policy-modal-button");

    var span = document.getElementById("privacy-policy-close");

    // Make sure we got all required things
    if (modal && btn && span) {
        bootstrapModals(modal, btn, span);
    } else {
        console.error('something went wrong with privacy policy modal detection');
        console.error(modal, btn, span);
    }
}

/* Terms and Conditions modal on shipping page */
if (document.getElementById('terms-and-conditions-modal') !== null) {
    console.log('Terms and conditions modal detected');
// Get the modal
    var modal = document.getElementById('terms-and-conditions-modal');

// Get the button that opens the modal
    var btn = document.getElementById("terms-and-conditions-modal-button");

    var span = document.getElementById("terms-and-conditions-close");

    // Make sure we got all required things
    if (modal && btn && span) {
        bootstrapModals(modal, btn, span);
    } else {
        console.error('something went wrong with terms and conditions modal detection');
        console.error(modal, btn, span);
    }
}

/* Bootstrap modal logic */
function bootstrapModals(modal, btn, span) {
    console.log('bootstrap function hit');
    // When the user clicks on the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

// When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

// When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    }
}