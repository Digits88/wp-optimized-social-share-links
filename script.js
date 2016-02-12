function socialPopup(url, size) {
	// First, let's set the size of the popup. If the window is wider than 768px, set a fixed size:
	var docWidth = $(window).width();
	var docHeight = $(window).height();
	var popWidth,
		popHeight;

	if(docWidth >= 768) {
		popWidth = 600;
		popHeight = 400;
	}

	// Otherwise, set the height and width to 80% of the window
	else {
		popWidth = docWidth * 0.8;
		popHeight = docHeight * 0.8;
	}

	// Center the popup
	var leftPos = (docWidth / 2) - (popWidth / 2);
	var topPos = (docHeight / 2) - (popHeight / 2);
	console.log(topPos);

	window.open(url,"","menubar=no,toolbar=no,resizable=yes,scrollbars=yes,width=" + popWidth + ",height=" + popHeight + ",top=" + topPos + ",left=" + leftPos);
}

$(document).ready(function() {
    $('.social-share-link-container a').click(function(e) {
		e.preventDefault();
		socialPopup($(this).attr('href'));
	});
});
