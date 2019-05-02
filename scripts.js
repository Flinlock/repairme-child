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
    

    /*
    jQuery(document).ready(function(){
        jQuery('.featured-box').readmore({
            collapsedHeight: 38,
            moreLink: '<a href="#" class="read-more-button fw-btn">More</a>',
            lessLink: '<a href="#" class="read-more-button fw-btn">Less</a>'
        });
    });
    */
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