
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

 	/* *************************************************
	幅の異なる画像のスライダー
	************************************************* */
	$(".js-carousel-slider__images").each(function () {
		let sliderWidth = $(this).width();

		$(this).clone(true).insertBefore(this);
		$(this).clone(true).insertAfter(this);

		$(".js-carousel-slider").css("width", sliderWidth * 3); // 親要素の横幅を子要素の３倍にする
	});


});
