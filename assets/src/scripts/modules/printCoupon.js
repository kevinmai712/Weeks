class PrintCoupon {
	constructor() {
		this.init();
	}

	init() {

        var allCoupons = $(".page-template-coupons .coupon");        

        $(".page-template-coupons .coupon").each(function(index, value){
            $(allCoupons).click(function(e){
                e.preventDefault();
                var offers = $(this).find(".offer");
                var types = $(this).find(".couponType");
                var disclaimer = $(".disclaimer p");

                var homeUrl = window.location.hostname;
                //use this logo url for local
                //var logo = "//" + homeUrl + ":3000/wp-content/themes/Midstate-Plumbing/assets/dist/images/logo.png";
                //use this logo url for live
                var logo = "http://" + homeUrl + "/wp-content/themes/Midstate-Plumbing/assets/dist/images/logo.png";
                var mywindow = window.open('', 'Print', 'height=600,width=800');
            
                mywindow.document.write('<html><head><title>Print</title>');
                mywindow.document.write('<link rel="stylesheet" type="text/css" href="../wp-content/themes/fragment/assets/dist/css/style.css"/>');
                mywindow.document.write('</head><body class="print">');
                mywindow.document.write('<div style="width:200px; display: block; font-family: sans-serif; background-image:url(' + homeUrl + '/wp-content/uploads/2019/06/couponBackground.png); background-size: cover;">');
                mywindow.document.write('<img width="150px" height="78px" src="' + logo + '" alt="Logo">');
                mywindow.document.write( "<p>" + $(offers).html() + "</p><p>" + $(types).html() + "</p>");
                mywindow.document.write('<p style="font-size: 9px;" >Disclaimer: ' + disclaimer.html() + '</p>');
                mywindow.document.write('</div>');
                mywindow.document.write('</body></html>');
            
                mywindow.document.close();

                setTimeout(function() {
                    mywindow.focus()
                    mywindow.print();
                    mywindow.close();
                }, 250);

                return true;

            });
        });
    }
}

export default PrintCoupon;