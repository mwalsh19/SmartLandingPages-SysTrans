$(document).ready(function(){function a(){var a=$(window).width();768>a?$(".lead-form-mobile").append($("#leadForm")):$(".lead-form-desktop").append($("#leadForm"))}window.isMobile=!1;var b=navigator.userAgent.toLowerCase(),c=b.indexOf("android")>-1,d=navigator.userAgent.match(/iPhone/i)||navigator.userAgent.match(/iPod/i);c||d?(window.isMobile=!0,a()):($(window).resize(a),$(window).trigger("resize")),$("input[name=phone]").mask("(999) 999-9999"),$("#leadForm").validate({rules:{first_name:"required",last_name:"required",email:{required:!0,email:!0},phone:"required",street_address:"required",city:"required",state:"required",zip_code:"required",moving_violation:"required",cdl_valid:"required"},errorPlacement:function(a,b){},errorClass:"error-input",invalidHandler:function(a,b){var c=b.numberOfInvalids();c>0&&($(".errors-form").html("Ups!, The are fields are required or has errors, please complete the form."),$(".errors-form").show())},submitHandler:function(a){window.isMobile?swiftEventTracking("Submit","Mobile Submit"):swiftEventTracking("Submit","Desktop Submit"),a.submit()}});var e=$("form, input"),f=($("input"),$(".form-wrap"));e.on("mouseover",function(a){f.addClass("over")}),e.on("mouseout",function(a){f.removeClass("over")})});