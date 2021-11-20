class OpenForm {

    constructor() {
      this.init();
    }
  
    init() {
        var scheduleBtn = jQuery(".scheduleBtn-mobile a");
        var form = jQuery("#scheduleForm .form");

        scheduleBtn.click(function(){
            form.toggleClass("visible");
        });
    }
}

export default OpenForm;