//**** Code written by me ****
// Store whether cookies have been accepted
// Store different types of cookies selection

const cookies = {
    cookieAccept: undefined,
    functional: true,
    performance: true,
    company: [true, true, true, true, true, true]
}

// Check to see if cookies have been accepted
if (localStorage.cookieAccept === "true") {
    $('.cookie-container').css("display", "none");
}
else {
    // Disable scrolling
    $('body').css("overflow", "hidden");
    // Show cookies popup
    $('.cookie-container').css("display", "flex");
}    

// Toggle cookie settings and button selection
$('#functional-enable').click(function() {
	if (cookies["functional"] !== true) {
		cookies["functional"] = true;
		$('#functional-enable').toggleClass('dark-btn');
		$('#functional-disable').toggleClass('dark-btn');
		console.log(cookies.functional);
	}
})
$('#functional-disable').click(function() {
	if (cookies["functional"] !== false) {
		cookies["functional"] = false;
		$('#functional-disable').toggleClass('dark-btn');
		$('#functional-enable').toggleClass('dark-btn');
		console.log(cookies.functional);
	}
})
$('#performance-enable').click(function() {
	if (cookies["performance"] !== true) {
		cookies["performance"] = true;
		$('#performance-enable').toggleClass('dark-btn');
		$('#performance-disable').toggleClass('dark-btn');
		console.log(cookies.performance);
	}
})
$('#performance-disable').click(function() {
	if (cookies["performance"] !== false) {
		cookies["performance"] = false;
		$('#performance-disable').toggleClass('dark-btn');
		$('#performance-enable').toggleClass('dark-btn');
		console.log(cookies.performance);
	}
})

for (let i = 1; i < 7; i++) {
    $(`#enable-company${i}`).click(function() {
		if(cookies.company[(i-1)] !== true) {
			cookies.company[(i-1)] = true;
			$(`#enable-company${i}`).toggleClass('dark-btn');
			$(`#disable-company${i}`).toggleClass('dark-btn');
			console.log(cookies.company[(i-1)]);
		}
    });
    $(`#disable-company${i}`).click(function() {
		if(cookies.company[(i-1)] !== false) {
			cookies.company[(i-1)] = false;
			$(`#disable-company${i}`).toggleClass('dark-btn');
			$(`#enable-company${i}`).toggleClass('dark-btn');
			console.log(cookies.company[(i-1)]);
		}
    })
}


// Hide/show preferences table
$('#preferencesBtn').click( function() {
    if ($('#preferencesBtn').text() === "SHOW DETAILED PREFERENCES") {
        $('.cookie-table').css("display", "block");
        $('#preferencesBtn').text("HIDE DETAILED PREFERENCES");
    } 
    else {
        $('.cookie-table').css("display", "none");
        $('#preferencesBtn').text("SHOW DETAILED PREFERENCES");
    }
});

// View cookie settings
$('#settings').click( function() {
  $('.cookie-settings').css("display", "flex");
});

// Close cookie settings 
$('#cancel').click(function() {
    $('.cookie-settings').css("display", "none");
})

// Close cookie popup
$('.accept').click(function() {
    $('body').css("overflow", "")
    cookies.cookieAccept = true;
    localStorage.cookieAccept = true;
    console.log(localStorage);
    $('.cookie-settings').css("display", "none");
    $('.cookie-container').css("display", "none");
})









// // **** Babel Code to ensure it is compatible in dif. browsers ****
// "use strict";

// // Store whether cookies have been accepted
// // Store different types of cookies selection
// var cookies = {
//   functional: true,
//   performance: true,
//   company: [true, true, true, true, true, true]
// }; 
// // Check to see if cookies have been accepted
// if (localStorage.cookieAccept === "true") {
//   $('.cookie-container').css("display", "none");
// } else {
//     // Disable scrolling
//   $('body').css("overflow", "hidden"); 
//   // Show cookies popup
//   $('.cookie-container').css("display", "flex");
// } 

// // Toggle cookie settings and button selection
// $('#functional-enable').click(function () {
//   if (cookies["functional"] !== true) {
//     cookies["functional"] = true;
//     $('#functional-enable').removeClass('light-btn').addClass('dark-btn');
//     $('#functional-disable').removeClass('dark-btn').addClass('light-btn');
//     console.log(cookies.functional);
//   }
// });
// $('#functional-disable').click(function () {
// 	if(cookies["functional"] !== false) {
// 		cookies["functional"] = false;
// 		$('#functional-disable').removeClass('light-btn').addClass('dark-btn');
// 		$('#functional-enable').removeClass('dark-btn').addClass('light-btn');
// 		console.log(cookies.functional);
// 	}
// });
// $('#performance-enable').click(function () {
// 	if(cookies["performance"] !== true) {
// 		cookies["performance"] = true;
// 		$('#performance-enable').removeClass('light-btn').addClass('dark-btn');
// 		$('#performance-disable').removeClass('dark-btn').addClass('light-btn');
// 		console.log(cookies.performance);
// 	}
// });
// $('#performance-disable').click(function () {
// 	if(cookies["performance"] !== false) {
// 		cookies["performance"] = false;
// 		$('#performance-disable').removeClass('light-btn').addClass('dark-btn');
// 		$('#performance-enable').removeClass('dark-btn').addClass('light-btn');
// 		console.log(cookies.performance);
// 	}
// });

// var _loop = function _loop(i) {
//   $("#enable-company".concat(i)).click(function () {
//     cookies.company[i - 1] = true;
//     $("#enable-company".concat(i)).removeClass('light-btn').addClass('dark-btn');
//     $("#disable-company".concat(i)).removeClass('dark-btn').addClass('light-btn');
//     console.log(cookies.company[i - 1]);
//   });
//   $("#disable-company".concat(i)).click(function () {
//     cookies.company[i - 1] = false;
//     $("#disable-company".concat(i)).removeClass('light-btn').addClass('dark-btn');
//     $("#enable-company".concat(i)).removeClass('dark-btn').addClass('light-btn');
//     console.log(cookies.company[i - 1]);
//   });
// };

// for (var i = 1; i < 7; i++) {
//   _loop(i);
// } 

// // Hide/show preferences table
// $('#preferencesBtn').click(function () {
//   if ($('#preferencesBtn').text() === "SHOW DETAILED PREFERENCES") {
//     $('.cookie-table').css("display", "block");
//     $('#preferencesBtn').text("HIDE DETAILED PREFERENCES");
//   } else {
//     $('.cookie-table').css("display", "none");
//     $('#preferencesBtn').text("SHOW DETAILED PREFERENCES");
//   }
// }); 

// // View cookie settings
// $('#settings').click(function () {
//   $('.cookie-settings').css("display", "flex");
// }); 

// // Close cookie settings 
// $('#cancel').click(function () {
//   $('.cookie-settings').css("display", "none");
// }); 

// // Close cookie popup
// $('.accept').click(function () {
//   $('body').css("overflow", "");
//   cookies.cookieAccept = true;
//   localStorage.cookieAccept = true;
//   localStorage.cookiesChoices = JSON.stringify(cookies);
//   console.log(localStorage);
//   $('.cookie-settings').css("display", "none");
//   $('.cookie-container').css("display", "none");
// });