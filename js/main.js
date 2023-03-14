/* -----------------------------------------------------------
	Window resize after
----------------------------------------------------------- */
$.fn.superResize = function (options) {
	var viewportWidth = 0,
		viewportHeight = 0,
		w = viewportWidth,
		h = viewportHeight,
		timer = false,
		defaults = {
			resizeAfter: function () { }
		},
		setting = $.extend(defaults, options)
	this.on('resize', function () {
		viewportWidth = Math.max(document.documentElement.clientWidth, window.innerWidth || 0)
		viewportHeight = Math.max(document.documentElement.clientHeight, window.innerHeight || 0)
	})
	this.on('load', function () {
		setting.resizeAfter()
	})
	this.on('resize', function () {
		if (timer !== false) clearTimeout(timer)
		timer = setTimeout(function () {
			if (w != viewportWidth || h != viewportHeight) {
				setting.resizeAfter()
				w = viewportWidth
				h = viewportHeight
			}
		}, 300)
	})
	return (this)
}

// Viewport
var viewportWidth = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
var viewportHeight = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);

$(window).superResize({
	resizeAfter: function () {
		viewportWidth = Math.max(document.documentElement.clientWidth, window.innerWidth || 0)
		viewportHeight = Math.max(document.documentElement.clientHeight, window.innerHeight || 0)
	}
});


/* -----------------------------------------------------------
	Common
----------------------------------------------------------- */
$(function() {
	/* -----------------------------------------------------------
		Header fixed
	----------------------------------------------------------- */
	$(window).on('scroll', function() {
		if ($(window).scrollTop() > 0) {
			$('body').addClass('fixed-header').css('padding-top', $('.main-header').outerHeight());
		} else {
			$('body').removeClass('fixed-header').css('padding-top', '');
		}
	});
});


$(document).ready(function () {
	$('.menu-item').removeClass('active')
	$('a[href="' + location.pathname.split("/")[location.pathname.split("/").length-1] + '"]').addClass('active')

	$("#apply-recruitment").on("click", function() {
			$('html, body').animate({
        scrollTop: $("#block-recruit").offset().top
    }, 500);
	});

	const currentMode = localStorage.getItem('mode')
	if (currentMode === 'dark') {
		changeDarkMode()
	}

	function RGBToHex(rgb) {
		// Choose correct separator
		let sep = rgb.indexOf(",") > -1 ? "," : " ";
		// Turn "rgb(r,g,b)" into [r,g,b]
		rgb = rgb.substr(4).split(")")[0].split(sep);

		let r = (+rgb[0]).toString(16),
				g = (+rgb[1]).toString(16),
				b = (+rgb[2]).toString(16);

		if (r.length == 1)
			r = "0" + r;
		if (g.length == 1)
			g = "0" + g;
		if (b.length == 1)
			b = "0" + b;

		return "#" + r + g + b;
	}

	function changeDarkMode() {
		const lightColor1 = '#3ac5c9'
		const darkColor1 = '#8251ea'

		const lightColor2 = '#1a202c'
		const darkColor2 = '#ffffff'

		const lightColor3 = '#ffffff'
		const darkColor3 = '#333333'

		const lightColor4 = '#f5f5f5'
		const darkColor4 = '#111111'

		const lightColor5 = '#313955'
		const darkColor5 = '#1f1f1f'

		const lightColor6 = '#f1516e'
		const darkColor6 = '#f7b801'

		const lightColor7 = '#edf2f7'
		const darkColor7 = '#444444'

		const lightColor8 = '#313955'
		const darkColor8 = '#f7b801'

		const lightColor9 = '#e2e8f0'
		const darkColor9 = '#333333'

		const lightColor10 = '#e2e8f0'
		const darkColor10 = '#444444'

		const lightColor11 = '#4a5568'
		const darkColor11 = '#999999'


		$("*").each(function () {
			$(this).removeClass('light-mode').addClass('dark-mode')
      const color = RGBToHex($(this).css('color'))
      const borderColor = RGBToHex($(this).css("border-bottom-color"))
      const backgroundColor = RGBToHex($(this).css("background-color"))

			 if (color === lightColor1) {
				$(this).css('color', darkColor1)
			 } else if (color === lightColor2) {
				$(this).css('color', darkColor2)
			 } else if (color === lightColor5) {
				$(this).css('color', darkColor2)
			 } else if (color === lightColor11) {
				$(this).css('color', darkColor11)
			 }

			 if (borderColor === lightColor1) {
				$(this).css('border-bottom-color', darkColor1)
			 } else if (borderColor === lightColor7) {
				$(this).css('border-bottom-color', darkColor7)
			 } else if (borderColor === lightColor9) {
				$(this).css('border-color', darkColor9)
			 }else if (borderColor === lightColor3) {
				$(this).css('border-color', darkColor3)
			 }

			 if (backgroundColor === lightColor1) {
				$(this).css('background-color', darkColor1)
			 } else if (backgroundColor === lightColor2) {
				$(this).css('background-color', darkColor2)
			 } else if (backgroundColor === lightColor3) {
				$(this).css('background-color', darkColor3)
			 } else if (backgroundColor === lightColor4) {
				$(this).css('background-color', darkColor4)
			 } else if (backgroundColor === lightColor5) {
					$(this).css('background-color', darkColor5)
			 } else if (backgroundColor === lightColor6) {
				$(this).css('background-color', darkColor6)
			 } else if (backgroundColor === lightColor7) {
				$(this).css('background-color', darkColor7)
			 }else if (backgroundColor === lightColor10) {
				$(this).css('background-color', darkColor10)
			 }
    });
		localStorage.setItem('mode', 'dark')
	}

	function changeLightMode() {
		const darkColor1 = '#3ac5c9'
		const lightColor1 = '#8251ea'

		const darkColor2 = '#1a202c'
		const lightColor2 = '#ffffff'

		const darkColor3 = '#ffffff'
		const lightColor3 = '#333333'

		const darkColor4 = '#f5f5f5'
		const lightColor4 = '#111111'

		const darkColor5 = '#313955'
		const lightColor5 = '#1f1f1f'

		const darkColor6 = '#f1516e'
		const lightColor6 = '#f7b801'

		const darkColor7 = '#edf2f7'
		const lightColor7 = '#444444'

		const darkColor8 = '#313955'
		const lightColor8 = '#f7b801'

		const darkColor9 = '#ffffff'
		const lightColor9 = '#333333'


		const darkColor10 = '#e2e8f0'
		const lightColor10 = '#444444'

		const darkColor11 = '#999999'
		const lightColor11 = '#4a5568'


	$("*").each(function () {
		$(this).removeClass('dark-mode').addClass('light-mode')
		const color = RGBToHex($(this).css('color'))
		const borderColor = RGBToHex($(this).css("border-bottom-color"))
		const backgroundColor = RGBToHex($(this).css("background-color"))
		 if (color === lightColor1) {
			$(this).css('color', darkColor1)
		 } else if (color === lightColor2) {
			$(this).css('color', darkColor2)
		 } else if (color === lightColor5) {
			$(this).css('color', darkColor5)
		 } else if(color === darkColor11) {
			$(this).css('color', darkColor11)
		 }


		 if (borderColor === lightColor1) {
			$(this).css('border-bottom-color', darkColor1)
		 } else if (borderColor === lightColor7) {
			$(this).css('border-bottom-color', darkColor7)
		 } else if (borderColor === lightColor9) {
			$(this).css('border-color', darkColor9)
		 }else if (borderColor === lightColor3) {
			$(this).css('border-color', darkColor3)
		 }

		 if (backgroundColor === lightColor1) {
			$(this).css('background-color', darkColor1)
		 } else if (backgroundColor === lightColor2) {
			$(this).css('background-color', darkColor2)
		 } else if (backgroundColor === lightColor3) {
			$(this).css('background-color', darkColor3)
		 } else if (backgroundColor === lightColor4) {
			$(this).css('background-color', darkColor4)
		 } else if (backgroundColor === lightColor5) {
				$(this).css('background-color', darkColor5)
		 } else if (backgroundColor === lightColor6) {
			$(this).css('background-color', darkColor6)
		 } else if (backgroundColor === lightColor7) {
			$(this).css('background-color', darkColor7)
		 } else if (backgroundColor === lightColor9) {
			$(this).css('background-color', darkColor9)
		 } else if (backgroundColor === lightColor10) {
			$(this).css('background-color', darkColor10)
		 }
	});
	localStorage.setItem('mode', 'light')
	}

	$(".btn-dark-mode").on('click', function() {
		const currentMode = localStorage.getItem('mode')
		if (currentMode  && currentMode === 'dark') return;
		changeDarkMode()
		location.reload()
	})


	$(".btn-light-mode").on('click', function() {
		const currentMode = localStorage.getItem('mode')
		if (currentMode  && currentMode === 'light') return;
		changeLightMode()
		location.reload()
	})

});


