$.getDataJson = function(url, data, callback) {
	return $.ajax({
		method: 'POST',
		url: url,
		data: data,
		dataType: 'json',
		success: callback
	});
}

function autoHideHeader() {
	var currentTop = $(window).scrollTop();

	(belowNavHeroContent.length > 0) '?' checkStickyNavigation(currentTop) : checkSimpleNavigation(currentTop);

	previousTop = currentTop;
	scrolling = false;
}

function checkSimpleNavigation(currentTop) {
    //there's no secondary nav or secondary nav is below primary nav
    if (previousTop - currentTop > scrollDelta) {
        //if scrolling up...
        mainHeader.removeClass('is-hidden');
    } else if( currentTop - previousTop > scrollDelta && currentTop > scrollOffset) {
        //if scrolling down...
        mainHeader.addClass('is-hidden');
    }
}

function checkStickyNavigation(currentTop) {
    //secondary nav below intro section - sticky secondary nav
    var secondaryNavOffsetTop = belowNavHeroContent.offset().top - secondaryNavigation.height() - mainHeader.height();
    
    if (previousTop >= currentTop ) {
        //if scrolling up... 
        if( currentTop < secondaryNavOffsetTop ) {
            //secondary nav is not fixed
            mainHeader.removeClass('is-hidden');
            secondaryNavigation.removeClass('fixed slide-up');
            belowNavHeroContent.removeClass('secondary-nav-fixed');
        } else if( previousTop - currentTop > scrollDelta ) {
            //secondary nav is fixed
            mainHeader.removeClass('is-hidden');
            secondaryNavigation.removeClass('slide-up').addClass('fixed'); 
            belowNavHeroContent.addClass('secondary-nav-fixed');
        }
        
    } else {
        //if scrolling down...  
        if( currentTop > secondaryNavOffsetTop + scrollOffset ) {
            //hide primary nav
            mainHeader.addClass('is-hidden');
            secondaryNavigation.addClass('fixed slide-up');
            belowNavHeroContent.addClass('secondary-nav-fixed');
        } else if( currentTop > secondaryNavOffsetTop ) {
            //once the secondary nav is fixed, do not hide primary nav if you haven't scrolled more than scrollOffset 
            mainHeader.removeClass('is-hidden');
            secondaryNavigation.addClass('fixed').removeClass('slide-up');
            belowNavHeroContent.addClass('secondary-nav-fixed');
        }

    }
}