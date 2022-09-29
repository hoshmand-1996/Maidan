var items = $('.row .my-col');
var numItems = items.length;
var perPage = 24;

//When pagination items less than or equals to 30, then display none the Pagination.
if(numItems <= 36){
  document.getElementById("pagination").style.display = "none";/** If we don't have any pages then Paginathion should be display none*/
}

items.slice(perPage).hide();

$('#pagination-container').pagination({
    items: numItems,
    itemsOnPage : perPage,
    prevText: '<i class="fa fa-chevron-left">',
    nextText: '<i class="fa fa-chevron-right">',
    onPageClick : function (pageNumber) {
        var showFrom = perPage * (pageNumber - 1);
        var showTo = showFrom + perPage;
        // // these under code used for when click on any pagination list automaticlly scrolling to top of the page.
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;

        // When click on any number of pagination if display the footer before scrolling to Top, this is fixing that problems.
        // but if you are using this the pagination is block (:
        // document.getElementById("my-footer").style.display = "none"; 
        items.hide().slice(showFrom, showTo).show();
    }
});

// these under code have a problem if we are using that we have some error from inspect in console. 
// screen.orientation.lock();
// screen.lockOrientation("orientation");
// screen.lockOrientationUniversal = screen.lockOrientation || screen.mozLockOrientation || screen.msLockOrientation;