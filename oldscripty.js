/* Handle various modals */
jQuery( document ).ready(function() {

    /* Hard drive mechanical failure modal */
    if (document.getElementById('hdd-mechanical-failure-modal') !== null) {
        // Get the modal
        var modal = document.getElementById('hdd-mechanical-failure-modal');

        // Get the button that opens the modal
        var btn = document.getElementById("hdd-mechanical-failure-modal-button");

        var span = document.getElementById("hdd-mechanical-failure-close");

        // Make sure we got all required things
        if (modal && btn && span) {
            bootstrapModals(modal, btn, span);
        } else {
            console.error('something went wrong with HDD mechanical failure modal detection');
            console.error(modal, btn, span);
        }
    }

    /* Hard drive electrical failure modal */
    if (document.getElementById('hdd-electrical-failure-modal') !== null) {
        // Get the modal
        var modal = document.getElementById('hdd-electrical-failure-modal');

        // Get the button that opens the modal
        var btn = document.getElementById("hdd-electrical-failure-modal-button");

        var span = document.getElementById("hdd-electrical-failure-close");

        // Make sure we got all required things
        if (modal && btn && span) {
            bootstrapModals(modal, btn, span);
        } else {
            console.error('something went wrong with HDD electrical failure modal detection');
            console.error(modal, btn, span);
        }
    }

    /* Hard drive bad sectors modal */
    if (document.getElementById('hdd-bad-sectors-modal') !== null) {
        // Get the modal
        var modal = document.getElementById('hdd-bad-sectors-modal');

        // Get the button that opens the modal
        var btn = document.getElementById("hdd-bad-sectors-modal-button");

        var span = document.getElementById("hdd-bad-sectors-close");

        // Make sure we got all required things
        if (modal && btn && span) {
            bootstrapModals(modal, btn, span);
        } else {
            console.error('something went wrong with HDD bad sectors modal detection');
            console.error(modal, btn, span);
        }
    }

    /* Hard drive firmware failure modal */
    if (document.getElementById('hdd-firmware-modal') !== null) {
        // Get the modal
        var modal = document.getElementById('hdd-firmware-modal');

        // Get the button that opens the modal
        var btn = document.getElementById("hdd-firmware-modal-button");

        var span = document.getElementById("hdd-firmware-close");

        // Make sure we got all required things
        if (modal && btn && span) {
            bootstrapModals(modal, btn, span);
        } else {
            console.error('something went wrong with HDD firmware modal detection');
            console.error(modal, btn, span);
        }
    }

    /* Hard drive pricing modal */
    if (document.getElementById('hdd-pricing-modal') !== null) {
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
});

/* Bootstrap modal logic */
function bootstrapModals(modal, btn, span) {
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

/* Read more buttons for sections with the read-more class
* Currently not used
*  */
jQuery(document).ready(function(){
    // White background buttons
    jQuery('.read-more').readmore({
        collapsedHeight: 170,
        moreLink: '<i class="fa-2x fa-plus-circle read-more-button" aria-hidden="true"></i>',
        lessLink: '<i class="fa-2x fa-minus-circle read-more-button" aria-hidden="true"></i>'
    });
    // Dark background buttons
    jQuery('.read-more-dark').readmore({
        collapsedHeight: 170,
        moreLink: '<i class="fa-2x fa-plus-circle read-more-button-dark" aria-hidden="true"></i>',
        lessLink: '<i class="fa-2x fa-minus-circle read-more-button-dark" aria-hidden="true"></i>'
    });

    // Bordered box readmores
    jQuery('.read-more-box .col-inner').readmore({
        collapsedHeight: 125,
        moreLink: '<i class="fa-2x fa-plus-square-o read-more-button" aria-hidden="true"></i>',
        lessLink: '<i class="fa-2x fa-minus-square-o read-more-button" aria-hidden="true"></i>'
    });
});