$(document).ready(function() {

		$(window).scroll(function() {
			if ($(window).width() > 950) {
	          
                if ($('#sub-heading').attr('data-name') === 'st') {
                    if ($(this).scrollTop() > 0) {
                        $('#sub-heading').css("background", "rgb(33, 38, 52, 1)");
                    } else {
                        $('#sub-heading').css("background", "rgb(33, 38, 52, .75)");
                    }
                } else if ($('#sub-heading').attr('data-name') === 'jjw') {
                    if ($(this).scrollTop() > 0) {
                        $('#sub-heading').css("background", "rgba(0, 27, 21, 1)");
                    } else {
                        $('#sub-heading').css("background", "rgba(0, 27, 21, .75)");
                    }
                } else if ($('#sub-heading').attr('data-name') === 'twt') {
                    if ($(this).scrollTop() > 0) {
                        $('#sub-heading').css("background", "rgba(0, 41, 33, 1)");
                    } else {
                        $('#sub-heading').css("background", "rgba(0, 41, 33, .75)");
                    }
                }
	    	}
       });

        function a(a) {
            var b = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
            return b.test(a)
        }

        function b() {
            var a = $(window).width();
            768 > a ? (j.prepend($(".benefits-sections")), k.after($(".phone-number"))) : (l.hasClass("swift-special-offer") ? n.append($(".benefits-sections")) : m.after($(".benefits-sections")), $(".middle-copy .copy").after($(".phone-number")))
        }

        function c() {
            i = $(window).width(), 768 > i ? $(".right-side").after($(".container-form")) : $("#apply-form-overlay").after($(".container-form"))
        }
        var d = $("#apply-form-overlay"),
            e = $("#apply-email-field"),
            f = $(".container-form"),
            g = $(".email-control input"),
            h = $("body"),
            i = $(window).width(),
            j = $(".middle-container-wrap"),
            k = $(".container-form"),
            l = $(".main"),
            m = $(".map"),
            n = $(".right-side"),
            o = navigator.userAgent.toLowerCase(),
            p = o.indexOf("android") > -1,
            q = navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPod/i);
        p || q ? c() : ($(window).resize(c), $(window).trigger("resize")), $(window).resize(b), b(), $("#apply-btn").on("click", function() {
            var b = e.val();
            return "" == b ? (alert("Please enter your email"), !1) : a(b) ? (h.addClass("apply-form-showing"), d.fadeIn(), g.val(b), void f.fadeIn()) : (alert("Please enter a valid email"), !1)
        }), d.on("click", function() {
            h.removeClass("apply-form-showing"), f.fadeOut(), d.fadeOut()
        })
    }), $("input[name=phone]").mask("(999) 999-9999"),
    function(a, b, c) {
        var d = {};
        d.UTIL = {
            setupFormValidation: function() {
                a("#leadForm").validate({
                    rules: {
                        first_name: "required",
                        last_name: "required",
                        email: {
                            required: !0,
                            email: !0
                        },
                        phone: "required",
                        street_address: "required",
                        city: "required",
                        state: "required",
                        zip_code: "required",
                        moving_violation: "required",
                        cdl_valid: "required"
                    },
                    messages: {
                        firstname: "Please enter your firstname",
                        lastname: "Please enter your lastname",
                        email: "Please enter a valid email address",
                        phone: "This field is required",
                        street_address: "Please enter your street address",
                        city: "Please enter your city",
                        state: "Please select a state",
                        zip_code: "Please enter your zip code",
                        moving_violation: "This field is required",
                        cdl_valid: "This field is required"
                    },
                    submitHandler: function(a) {
                        a.submit()
                    }
                })
            }
        }, a(c).ready(function(a) {
            d.UTIL.setupFormValidation()
        })
    }(jQuery, window, document);