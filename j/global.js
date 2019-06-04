/* This function will draw the left-column navigation */
function leftnav(section)
{
if (section == 1) /* Swift Difference */
{ 
	document.writeln("<ul id=\"section1_ln\">");
	document.writeln("<li class=\"hed\"><a href=\"#top\" title=\"The Swift Difference\">The Swift Difference</a></li>");
	document.writeln("<li><a href=\"#panel1\" title=\"Our Story\" class=\"our_story\">Our Story</a></li>");
	document.writeln("<li><a href=\"#panel2\" title=\"Swift History\" class=\"swift_history\">Swift History</a></li>");
	document.writeln("<li><a href=\"apply-now.html\" class=\"apply_now\" title=\"Apply Now\">Apply Now</a></li>");
	document.writeln("</ul>");
	
}
else if (section == 2) /* Career Paths */
{
	document.writeln("<ul id=\"section2_ln\">");
	document.writeln("<li class=\"hed\"><a href=\"#top\" title=\"Careers at Swift\">Careers at Swift</a></li>");
	document.writeln("<li><a href=\"#panel1\" class=\"career_paths\" title=\"Career Paths\">Career Paths</a></li>");
	document.writeln("<li><a href=\"#panel2\" class=\"mentors\" title=\"Mentors\">Mentors</a></li>");
	document.writeln("<li><a href=\"apply-now.html\" class=\"apply_now\" title=\"Apply Now\">Apply Now</a></li>");
	document.writeln("</ul>");
}
else if (section == 3) /* Offices & Terminals */
{
	document.writeln("<ul id=\"section3_ln\">");
	document.writeln("<li class=\"hed\"><a href=\"#top\" title=\"Offices &amp\; Terminals\" title=\"Swift Terminals\">Offices &amp\; Terminals</a></li>");
	document.writeln("<li><a href=\"#panel1\" class=\"terminal_map\" title=\"Swift Terminals\">Swift Terminals</a></li>");
	document.writeln("<li><a href=\"#panel2\" class=\"comfort_zones\" title=\"Comfort Zones\">Comfort Zones</a></li>");
	document.writeln("<li><a href=\"#panel3\" class=\"contact_recruiter\" title=\"Contact a Recruiter\">Contact a Recruiter</a></li>");
	document.writeln("</ul>");
}
else if (section == 4) /* New to Trucking? */
{
	document.writeln("<ul id=\"section4_ln\">");
	document.writeln("<li class=\"hed\"><a href=\"#top\" title=\"New to Trucking\">New to Trucking</a></li>");
	document.writeln("<li><a href=\"#panel1\" class=\"driving_schools\" title=\"Driving Schools\">Driving Schools</a></li>");
	document.writeln("<li><a href=\"#panel2\" class=\"for_veterans\" title=\"For Veterans\">For Veterans</a></li>");
	document.writeln("<li><a href=\"#panel3\" class=\"comp_bene\" title=\"Compensation &amp\; Benefits\">Compensation &amp\; Benefits</a></li>");
	document.writeln("<li><a href=\"#panel4\" class=\"hiring_events\" title=\"Hiring Events\">Hiring Events</a></li>");
	document.writeln("<li><a href=\"apply-now.html\" class=\"apply_now\" title=\"Apply Now\">Apply Now</a></li>");
	document.writeln("</ul>");
}
else if (section == 5) /* Experienced Drivers */
{
	document.writeln("<ul id=\"section5_ln\">");
	document.writeln("<li class=\"hed\"><a href=\"#top\" title=\"Experienced Drivers\">Experienced Drivers</a></li>");
	document.writeln("<li><a href=\"#panel1\" class=\"driving_schools\" title=\"Driving Schools\">Driving Schools</a></li>");
	document.writeln("<li><a href=\"#panel2\" class=\"comp_bene\" title=\"Compensation &amp\; Benefits\">Compensation &amp; Benefits</a></li>");
	document.writeln("<li><a href=\"apply-now.html\" class=\"apply_now\" title=\"Apply Now\">Apply Now</a></li>");
	document.writeln("</ul>");
}
else if (section == 6) /* Owner Operators */
{
	document.writeln("<ul id=\"section6_ln\">");
	document.writeln("<li class=\"hed\"><a href=\"#top\" title=\"Owner Operators\">Owner Operators</a></li>");
	document.writeln("<li><a href=\"#panel1\" class=\"lease_prog\" title=\"Lease Programs\">Lease Programs</a></li>");
	document.writeln("<li><a href=\"#panel2\" class=\"reqs\" title=\"Requirements\">Requirements</a></li>");
	document.writeln("<li><a href=\"#panel3\" class=\"comp_bene\" title=\"Compensation &amp\; Benefits\">Compensation &amp\; Benefits</a></li>");
	document.writeln("<li><a href=\"apply-now.html\" class=\"apply_now\" title=\"Apply Now\">Apply Now</a></li>");
	document.writeln("</ul>");
}
else if (section == 7) /* Apply Now */
{
	document.writeln("<ul id=\"section7_ln\">");
	document.writeln("<li class=\"hed\"><a href=\"#top\" title=\"Apply Now\">Apply Now</a></li>");
	document.writeln("<li><a href=\"#panel1\" class=\"contact_recruiter\" title=\"Contact a Recruiter\" id=\"contact\">Contact a Recruiter</a></li>");
	document.writeln("<li class=\"hline\">&nbsp\;</li>");
	document.writeln("<li><a href=\"#\" class=\"regulations\" id=\"reg\">Regulations</a></li>");
	document.writeln("<li><a href=\"https://intelliapp2.driverapponline.com/c/swiftcomp?r=joinswift.com&uri_b=ia_swiftcomp_875284378\" class=\"company_drivers\" title=\"Company Drivers\" target=\"_blank\">Company Drivers</a></li>");
	//document.writeln("<li><a href=\"pdf/Owner_Operator_Application.pdf\" onClick=\"javascript: _gaq.push(['_trackPageview', '/pdf/Owner_Operator_Application.pdf']);\" class=\"owner_operators\" title=\"Owner Operators\">Owner Operators</a></li>");
	document.writeln("</ul>");
	}
else if (section == 8) /* Apply Now for Regulations Override */
{
	document.writeln("<ul id=\"section7_ln\">");
	document.writeln("<li class=\"hed\"><a href=\"#top\" title=\"Apply Now\">Apply Now</a></li>");
	document.writeln("<li><a href=\"#panel1\" class=\"contact_recruiter\" title=\"Contact a Recruiter\" id=\"contact\">Contact a Recruiter</a></li>");
	document.writeln("<li class=\"hline\">&nbsp\;</li>");
	document.writeln("<li><a href=\"#regulations\" class=\"regulations\" id=\"reg2\">Regulations</a></li>");
	document.writeln("<li><a href=\"https://intelliapp2.driverapponline.com/c/swiftcomp?r=joinswift.com&uri_b=ia_swiftcomp_875284378\" class=\"company_drivers\" title=\"Company Drivers\" target=\"_blank\">Company Drivers</a></li>");
	//document.writeln("<li><a href=\"pdf/Owner_Operator_Application.pdf\" onClick=\"javascript: _gaq.push(['_trackPageview', '/pdf/Owner_Operator_Application.pdf']);\" class=\"owner_operators\" title=\"Owner Operators\">Owner Operators</a></li>");
	document.writeln("</ul>");
	}
}

/* This function will draw ALL the header elements and navigation on the page */
function header()
{
document.writeln("<div id=\"top\"></div>");
document.writeln("<div id=\"header\">");
    document.writeln("<div id=\"topnav\">");
        document.writeln("<ul>");
            document.writeln("<li><a href=\"http://careers.peopleclick.com/careerscp/client_swifttransportation/external/search.do\" target=\"_blank\" title=\"Corporate Careers\">Corporate Careers</a></li>");
            document.writeln("<li><a href=\"offices-terminals.html#contactrecruiter\" title=\"Contact a Recruiter\">Contact a Recruiter</a></li>");
            document.writeln("<li><a href=\"apply-now.html\" title=\"Apply Now\" class=\"applynow\">Apply Now</a></li>");	
			 document.writeln("<li class=\"last\"><a href=\"https://www.facebook.com/pages/Swift-Jobs/147555198708371\" title=\"Follow Us\">Follow Us</a></li>");	
			document.writeln("<li class=\"last\" class=\"facebook_nav\"><img align=\"right\" src=\"i/facbook_icon_small.png\" alt=\"Experienced Truckers\" title=\"Experienced Truckers\"/></li>");	
        document.writeln("</ul>");
    document.writeln("</div>");
    document.writeln("<div id=\"masthead\">");
        document.writeln("<h1 id=\"logo\"><a href=\"/\" title=\"Swift Transportation Careers\">Swift Transportation Careers</a></h1>");
        document.writeln("<div id=\"navigation\">");
            document.writeln("<ul id=\"navMenu\">");
                document.writeln("<li class=\"swift_difference\"><a href=\"swift-difference.html\" title=\"Swift Difference\" class=\"swift_difference\">Swift Difference</a></li>");
				document.writeln("<li class=\"career_paths\"><a href=\"career-paths.html\" title=\"Career Paths\" class=\"career_paths\">Career Paths</a></li>");
                document.writeln("<li class=\"offices_terminals\"><a href=\"offices-terminals.html\" title=\"Offices and Terminals\" class=\"offices_terminals\">Offices and Terminals</a></li>");
                document.writeln("<li class=\"new_trucking\"><a href=\"new-to-trucking.html\" title=\"New to Trucking\" class=\"new_trucking\">New to Trucking</a></li>");
                document.writeln("<li class=\"experienced_drivers\"><a href=\"experienced-drivers.html\" title=\"Experienced Drivers\" class=\"exp_drivers\">Experienced Drivers</a></li>");
                document.writeln("<li class=\"owner_operators\"><a href=\"owner-operators.html\" title=\"Owner Operators\" class=\"owner_ops\">Owner Operators</a></li>");
            document.writeln("</ul>");
        document.writeln("</div>");
    document.writeln("</div>");
document.writeln("</div>");
}

/* This function will draw the bottom footer drivers 1-3 */
function footerdrivers(driver)
{
if (driver == 1) /* displays on: homepage, career paths, offices + terminals */
{ 
	document.writeln("<div class=\"footer_drivers\">");
    document.writeln("<dl class=\"first\">");
        document.writeln("<dt class=\"first_img\"><a href=\"new-to-trucking.html\"><img src=\"i/newtotrucking_img_239x232.jpg\" alt=\"New to Trucking?\" title=\"New to Trucking?\"/></a></dt>");
        document.writeln("<dd class=\"first_title\" title=\"New to Trucking?\"><a href=\"new-to-trucking.html\">New to Trucking?</a></dd>");
        document.writeln("<dd class=\"first_dek\">Driving a truck offers more freedom, variety and rewards than any other career, and there's no better place to start than with Swift. Start getting a taste for it right here.</dd>");
        document.writeln("<dd class=\"learnmore\"><a href=\"new-to-trucking.html\" title=\"Learn More\">Learn More</a></dd>");
    document.writeln("</dl>");
    document.writeln("<dl class=\"second\">");
        document.writeln("<dt class=\"second_img\"><a href=\"experienced-drivers.html\"><img src=\"i/experiedtruckers_img_196x232.jpg\" alt=\"Experienced Truckers\" title=\"Experienced Truckers\"/></a></dt>");
        document.writeln("<dd class=\"second_title\" title=\"Experienced Truckers\"><a href=\"experienced-drivers.html\">Experienced Truckers</a></dd>");
        document.writeln("<dd class=\"second_dek\">You should experience more from your career as an Experienced Driver&#8212;more miles (we log over 2 billion a year), more money, more opportunities. And that's exactly what you'll get. See what we mean. </dd>");
        document.writeln("<dd class=\"learnmore\"><a href=\"experienced-drivers.html\" title=\"Learn More\">Learn More</a></dd>");
    document.writeln("</dl>");
    document.writeln("<dl class=\"third\">");
        document.writeln("<dt class=\"third_img\"><a href=\"owner-operators.html\"><img src=\"i/owneroperator_img_206x232.jpg\" alt=\"Owner Operators\" title=\"Owner Operators\"/></a></dt>");
        document.writeln("<dd class=\"third_title\" title=\"Owner Operators\"><a href=\"owner-operators.html\">Owner Operators</a></dd>");
        document.writeln("<dd class=\"third_dek\">Being an owner operator for Swift is the perfect way to build a great career for the long haul. As the leader in the truckload industry, Swift is able to give you the support you need to run your own business out on the road.</dd>");
        document.writeln("<dd class=\"learnmore\"><a href=\"owner-operators.html\" title=\"Learn More\">Learn More</a></dd>");
    document.writeln("</dl>");
    document.writeln("</div>");
}
else if (driver == 2) /* displays on: new to trucking, new + experienced drivers, owner operators, swift difference */
{ 
	document.writeln("<div class=\"footer_drivers\">");
    document.writeln("<dl class=\"first\">");
        document.writeln("<dt class=\"first_img\"><a href=\"apply-now.html\"><img src=\"i/joinswift_img_201x232.jpg\" alt=\"Join Swift\" title=\"Join Swift\"/></a></dt>");
        document.writeln("<dd class=\"first_title\" title=\"Join Swift\"><a href=\"apply-now.html\">Join Swift</a></dd>");
        document.writeln("<dd class=\"first_dek\">Apply now and be one step closer to becoming Best-in-Class.</dd>");
        document.writeln("<dd class=\"learnmore\"><a href=\"apply-now.html\" title=\"Apply Now\">Apply Now</a></dd>");
    document.writeln("</dl>");
    document.writeln("<dl class=\"second\">");
        document.writeln("<dt class=\"second_img\"><a href=\"offices-terminals.html#contactrecruiter\"><img src=\"i/contactarecruiter_img_223x232.jpg\" alt=\"Contact a Recruiter\" title=\"Contact a Recruiter\"/></a></dt>");
        document.writeln("<dd class=\"second_title\" title=\"Contact a Recruiter\"><a href=\"offices-terminals.html#contactrecruiter\">Contact a Recruiter</a></dd>");
        document.writeln("<dd class=\"second_dek\">Take the first step toward a rewarding career with Swift by contacting one of our recruiters.</dd>");
        document.writeln("<dd class=\"learnmore\"><a href=\"offices-terminals.html#contactrecruiter\" title=\"Learn More\">Learn More</a></dd>");
    document.writeln("</dl>");
    document.writeln("<dl class=\"third\">");
        document.writeln("<dt class=\"third_img\"><a href=\"offices-terminals.html\"><img src=\"i/officesterminals_img_215x232.jpg\" alt=\"Offices &amp\; Terminals\" title=\"Offices &amp\; Terminals\"/></a></dt>");
        document.writeln("<dd class=\"third_title\" title=\"Offices &amp\; Terminals\"><a href=\"offices-terminals.html\">Offices &amp; Terminals</a></dd>");
        document.writeln("<dd class=\"third_dek\">Swift maintains a network of 31 full-service terminals. That means that when you\'re driving for us, you\'re never far from a hot shower, a good meal and a friendly face.</dd>");
        document.writeln("<dd class=\"learnmore\"><a href=\"offices-terminals.html\" title=\"Find Now\">Find Now</a></dd>");
    document.writeln("</dl>");
    document.writeln("</div>");
}
else if (driver == 3) /* displays on: apply now */
{
	document.writeln("<div class=\"footer_drivers\">");
    document.writeln("<dl class=\"first\">");
        document.writeln("<dt class=\"first_img\"><a href=\"apply-now.html\"><img src=\"i/bestinclass_img_220x232.jpg\" alt=\"Best-in-Class\" title=\"Best-in-Class\"/></a></dt>");
        document.writeln("<dd class=\"first_title\" title=\"Best-in-Class\"><a href=\"apply-now.html\">Best-in-Class</a></dd>");
        document.writeln("<dd class=\"first_dek\">Apply now and be one step closer to becoming Best-in-Class.</dd>");
        document.writeln("<dd class=\"learnmore\"><a href=\"apply-now.html\" title=\"Apply Now\">Apply Now</a></dd>");
    document.writeln("</dl>");
    document.writeln("<dl class=\"second\">");
        document.writeln("<dt class=\"second_img\"><a href=\"swift-difference.html\"><img src=\"i/swiftdifference_footer_img_208x232.jpg\" alt=\"Swift Difference\" title=\"Swift Difference\"/></a></dt>");
        document.writeln("<dd class=\"second_title\" title=\"Swift Difference\"><a href=\"swift-difference.html\">Swift Difference</a></dd>");
        document.writeln("<dd class=\"second_dek\">Swift is committed to providing more rewarding career opportunities for our drivers.</dd>");
        document.writeln("<dd class=\"learnmore\"><a href=\"swift-difference.html\" title=\"Learn More\">Learn More</a></dd>");
    document.writeln("</dl>");
    document.writeln("<dl class=\"third\">");
        document.writeln("<dt class=\"third_img\"><a href=\"offices-terminals.html\"><img src=\"i/officesterminals_img_215x232.jpg\" alt=\"Offices &amp\; Terminals\" title=\"Offices &amp\; Terminals\"/></a></dt>");
        document.writeln("<dd class=\"third_title\" title=\"Offices &amp\; Terminals\"><a href=\"offices-terminals.html\">Offices &amp; Terminals</a></dd>");
        document.writeln("<dd class=\"third_dek\">Swift maintains a network of 31 full-service terminals. That means that when you\'re driving for us, you\'re never far from a hot shower, a good meal and a friendly face.</dd>");
        document.writeln("<dd class=\"learnmore\"><a href=\"offices-terminals.html\" title=\"Find Now\">Find Now</a></dd>");
    document.writeln("</dl>");
    document.writeln("</div>");
	}
}

/* global footer */
function footer()
{
	document.writeln("<div id=\"footer\">");
	document.writeln("<div id=\"facebook\">Follow Us");
	document.writeln("<a href=\"https://www.facebook.com/swift.transportation\"><img src=\"i/facbook_icon[2].png\" alt=\"Experienced Truckers\" title=\"Experienced Truckers\"/></a>");
	    document.writeln("</div>");
		document.writeln("<ul>");
			document.writeln("<li><a href=\"swift-difference.html\" title=\"Swift Difference\">Swift Difference</a> <a href=\"career-paths.html\" title=\"Career Paths\">Career Paths</a> <a href=\"offices-terminals.html\" title=\"Offices and Terminals\">Offices &amp\; Terminals</a> <a href=\"new-to-trucking.html\" title=\"New to Trucking\">New to Trucking</a> <a href=\"experienced-drivers.html\" title=\"Experienced Drivers\">Experienced Drivers</a> <a href=\"owner-operators.html\" title=\"Owner Operators\">Owner Operators</a></li>");
			document.writeln("<li class=\"last\"><a href=\"http://careers.peopleclick.com/careerscp/client_swifttransportation/external/search.do\" target=\"_blank\" title=\"Corporate Careers\">Corporate Careers</a> <a href=\"offices-terminals.html#contactrecruiter\" title=\"Contact a Recruiter\">Contact a Recruiter</a> <a href=\"apply-now.html\" title=\"Apply Now\">Apply Now</a><a href=\"http://joinswift.com/landing-pages/privacy-policy\" title=\"Privacy Policy\">Privacy Policy</a></li>");
		document.writeln("</ul>");
		document.writeln("<small title=\"&copy\; 2012 Swift Transportation\">&copy\; 2012 Swift Transportation Co., Inc.</small>");
	document.writeln("</div>");
}

/*
SITE ANIMATION AND EFFECTS
--------------------------------------------*/

/* main menu nav effects */
$(document).ready(function () {
	$('#navMenu li').append('<div class="hover"><\/div>');
	$('#navMenu li').hover(
		function() {
			$(this).children('div').stop(true, true).fadeIn('1000');
		}, 
		function() {		
			$(this).children('div').stop(true, true).fadeOut('1000');	
	}).click (function () {
		$(this).addClass('selected');
	});
});

/* anchor tags highlighting */
$(document).ready(function(){$("#topnav li a").hover(function(){$(this).stop().animate({"opacity": "0.5"}, "fast"); },function(){$(this).stop().animate({"opacity": "1"},"slow");});});
$(document).ready(function(){$("#footer li a").hover(function(){$(this).stop().animate({"opacity": "0.5"}, "fast"); },function(){$(this).stop().animate({"opacity": "1"},"slow");});});


/* leftnavGlobal scrollTo function */
// old code for selected items = $(document).ready(function(){ $('ul#section1_ln a').bind('click',function(event) { $('ul#section1_ln a').removeClass('selected'); $(this).addClass('selected'); var $anchor = $(this); $('html, body').stop().animate({scrollTop: $($anchor.attr('href')).offset().top}, 1500,'easeInOutExpo'); event.preventDefault(); });});
$(function() { $('ul#section1_ln a').bind('click',function(event){ var $anchor = $(this); $('html, body').stop().animate({scrollTop: $($anchor.attr('href')).offset().top }, 1500,'easeInOutExpo');event.preventDefault();});});
$(function() { $('ul#section2_ln a').bind('click',function(event){ var $anchor = $(this); $('html, body').stop().animate({scrollTop: $($anchor.attr('href')).offset().top }, 1500,'easeInOutExpo');event.preventDefault();});});
$(function() { $('ul#section3_ln a').bind('click',function(event){ var $anchor = $(this); $('html, body').stop().animate({scrollTop: $($anchor.attr('href')).offset().top }, 1500,'easeInOutExpo');event.preventDefault();});});
$(function() { $('ul#section4_ln a').bind('click',function(event){ var $anchor = $(this); $('html, body').stop().animate({scrollTop: $($anchor.attr('href')).offset().top }, 1500,'easeInOutExpo');event.preventDefault();});});
$(function() { $('ul#section5_ln a').bind('click',function(event){ var $anchor = $(this); $('html, body').stop().animate({scrollTop: $($anchor.attr('href')).offset().top }, 1500,'easeInOutExpo');event.preventDefault();});});
$(function() { $('ul#section6_ln a').bind('click',function(event){ var $anchor = $(this); $('html, body').stop().animate({scrollTop: $($anchor.attr('href')).offset().top }, 1500,'easeInOutExpo');event.preventDefault();});});
$(function() { $('ul#section7_ln a').bind('click',function(event){ var $anchor = $(this); $('html, body').stop().animate({scrollTop: $($anchor.attr('href')).offset().top }, 1500,'easeInOutExpo');event.preventDefault();});});




