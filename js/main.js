(function($) {

	var calculateWax = function() {

		var liquid = 0;

		var oil;

		var totalWax;

		var percentageOil = $('.oil-input').val();

		$('.liquid-input').each(function() {

			var thisLiquid = ($(this).val() != '') ? $(this).val() : 0;

			liquid += parseInt(thisLiquid);

		});

		totalWax = liquid * .9;

		totalPounds = Math.floor((totalWax / 16));

		remainingOunces = totalWax % 16;

		totalOunces = Math.ceil((remainingOunces));

		var waxResult = totalPounds + ' lbs ' + totalOunces + ' oz';

		totalOil = totalWax * (percentageOil / 100);

		var oilResult = totalOil + ' oz';

		$('.wax-results').html(waxResult);

		$('.oil-results').html(oilResult);

		$('.top-results').show();

		$('body, html').animate({
			scrollTop: 0
		}, 500);

	}

	$(document).ready(function() {

		$('#calculate').click(function(e) {

			e.preventDefault();

			calculateWax();

		});

		$('.add-row').click(function(e) {

			e.preventDefault();

			var newClone = $('.measurement-row.last').clone();

			$('.measurement-row.last').removeClass('last');

			$('.measurement-row__container').append(newClone);

		});

		$('.subtract-row').click(function(e) {

			e.preventDefault();

			var rows = $('.measurement-row').length;

			if (!rows.length == 1) {

				$('.measurement-row.last').remove();

				$('.measurement-row:last-child').addClass('last');

			}

		});

		$('.clear-results').click(function() {

			$('.liquid-input').val("");

			$('.oil-input').val("15");

			$('.top-results').hide();

		});

	})

})(jQuery);