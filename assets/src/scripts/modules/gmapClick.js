class GmapClick {
	constructor() {
		this.init();
	}

	init() {

        $(function() {
            $('.gmap-click').click(function(e) {
                $(this).find('iframe').css('pointer-events', 'all');
            }).mouseleave(function(e) {
                $(this).find('iframe').css('pointer-events', 'none');
            });
        })

	}
}

export default GmapClick;