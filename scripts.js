/*
 * Handle all modal links
 */

jQuery(document).ready(function() {
    // All modal open buttons
    let btn = document.getElementsByClassName("modal-open");
    for (let i = 0; i < btn.length; i++) {
        let thisBtn = btn[i];
        //Open the appropriate modal
        thisBtn.addEventListener("click", function () {
            let modal = document.getElementById(this.dataset.modal);
            modal.style.display = "block";
            // The close button X for the appropriate modal
            let close = document.getElementById(this.dataset.close);
            close.onclick = function () {
                modal.style.display = "none";
            };
            // Also close if the user clicks anywhere outside the modal
            window.onclick = function(event) {
                if (event.target === modal) {
                    modal.style.display = "none";
                }
            }
        }, false);
    }
});


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

/*
 * interactive sidebar actions
 *
 * TODO update to jQuery
 */
function sidebar_open() {
    console.log('open clicked');
    document.getElementById("edgeSidebar").style.display = "block";
}

function sidebar_close() {
    console.log('close clicked');
    document.getElementById("edgeSidebar").style.display = "none";
}