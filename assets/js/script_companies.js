$(document).ready(function() {
    $(window).on('scroll', function() {
        var windowHeight = $(window).height();
        var windowScrollTop = $(window).scrollTop();

        // Define an array of section IDs to process
        var sectionIds = ['#company-section', '#about-section', '#services-section', '#location-section'];

        sectionIds.forEach(function(sectionId) {
            // Check if the element with the specified ID exists
            var sectionElement = $(sectionId);
            if (sectionElement.length > 0) {
                var sectionOffset = sectionElement.offset().top;

                if (windowScrollTop + windowHeight > sectionOffset) {
                    sectionElement.css({
                        'opacity': '1',
                        'transform': 'translateY(0)'
                    });
                }
            }
        });
    });
});
