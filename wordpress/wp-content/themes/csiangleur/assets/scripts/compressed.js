!function(a){a(".equipe__dispo__clic").click(function(b){b.preventDefault(),a(this).toggleClass("horaire-folded")})}(jQuery),jQuery(document).ready(function(a){function b(){var b=a(".forFloat");b.each(function(){var b=a(this);c(b),b.on("change keyup",function(){c(b)})})}function c(a){""==a.val()?a.parent().prev(".fLabel").removeClass("float"):a.parent().prev(".fLabel").addClass("float")}a(".floatingLabels").length>0&&b()}),function(a){a(".flexnav__dropbtn").click(function(b){b.preventDefault(),a(this).next().toggleClass("open"),a(this).toggleClass("unfolded")}),a(".menu-button").click(function(b){b.preventDefault(),a(this).toggleClass("menu-unfolded"),a("body").toggleClass("with-menu")})}(jQuery),function(a){a("body").removeClass("no-js"),a("body").addClass("js-active")}(jQuery);
