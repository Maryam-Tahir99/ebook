/*function SelectRedirect() {
    // ON selection of section this function will work
    //alert( document.getElementById('s1').value);

    switch (document.getElementById('s1').value) {
        case "books":
            window.location = "books.php";
            break;

        case "favbooks":
            window.location = "favbooks.php";
            break;


            /// Can be extended to other different selections of SubCategory //////
        default:
            window.location = "../"; // if no selection matches then redirected to home page
            break;
    } // end of switch 
}*/
window.onload = function () {
    location.href = document.getElementById("selectbox").value;
}
jQuery(function () {
    // remove the below comment in case you need chnage on document ready
    // location.href=jQuery("#selectbox").val(); 
    jQuery("#selectbox").change(function () {
        location.href = jQuery(this).val();
    })
})