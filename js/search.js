$(document).ready(function(){

    let wells = $(".well");

    console.log("Starting search script");
    console.log(wells);

    $("#search-box").keyup(function () {
        let search = $("#search-box").val();
        for(var i = 0; i < wells.length; i++) {
            if (search.length > 0 && !wells[i].innerText.toLocaleLowerCase().includes(search.toLocaleLowerCase())) {
                wells.eq(i).hide();
            } else {
                wells.eq(i).show();
            }
        }
    });
});
