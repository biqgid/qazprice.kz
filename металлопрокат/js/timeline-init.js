//Timeline 3.1 init
$(window).load(function() {
    var blogPostId = "timeline-content";
    if ($("." + blogPostId).length > 0) {
        //Our blog post timline
        $('.tl2').timeline({
            openTriggerClass: '.read_more',
            startItem: '01/09/2016',
            hideTimeline: true,
            closeText: 'x',
            closeItemOnTransition: true
        });

        $('.tl2').on('ajaxLoaded.timeline', function(e) {
            console.log(e.element.find('.timeline_open_content span'));

            var height = e.element.height() - 60 - e.element.find('h2').height();
            e.element.find('.timeline_open_content span').css('max-height', height).mCustomScrollbar({
                autoHideScrollbar: true,
                theme: "light-thin"
            });
        });
    }

});