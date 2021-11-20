class JobForm {
	constructor() {
		this.init();
	}

	init() {

        var openjobFormbtn = $(".jobpopupbtn");
        var closejobFormbtn = $(".close-job-form");
        var form = $(".popup-job-form");

        //jQuery('.popupformwrap > div.wpcf7 > form').wpcf7InitForm();
        openjobFormbtn.click(function(){
            form.css('display', 'flex');
            $("body").addClass("form-open");
            $("body").addClass("noscroll");
            window.scrollTo(0,0);
        });
        closejobFormbtn.click(function(){
            form.css('display', 'none');
            $("body").removeClass("form-open");
            $("body").removeClass("noscroll");
        });

	}
}

export default JobForm;