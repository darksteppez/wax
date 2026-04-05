document.addEventListener('DOMContentLoaded', function() {
    var calculateWax = function() {
        var liquid = 0;
        var oil;
        var totalWax;
        var percentageOil = document.querySelector('.oil-input').value;

        var liquidInputs = document.querySelectorAll('.liquid-input');
        Array.from(liquidInputs).forEach(function(input) {
            var thisLiquid = (input.value !== '') ? input.value : 0;
            liquid += parseInt(thisLiquid);
        });

        totalWax = liquid * 0.9;
        totalPounds = Math.floor(totalWax / 16);
        remainingOunces = totalWax % 16;
        totalOunces = Math.ceil(remainingOunces);
        var waxResult = totalPounds + ' lbs ' + totalOunces + ' oz';

        totalOil = totalWax * (percentageOil / 100);
        var oilResult = totalOil + ' oz';

        document.querySelector('.wax-results').innerHTML = waxResult;
        document.querySelector('.oil-results').innerHTML = oilResult;
        document.querySelector('.top-results').style.display = 'block';

        window.scrollTo({ top: 0, behavior: 'smooth' });
    };

    document.getElementById('calculate').addEventListener('click', function(e) {
        e.preventDefault();
        calculateWax();
    });

    document.querySelector('.add-row').addEventListener('click', function(e) {
        e.preventDefault();
        var lastRow = document.querySelector('.measurement-row.last');
        var newClone = lastRow.cloneNode(true);
        lastRow.classList.remove('last');
        document.querySelector('.measurement-row__container').appendChild(newClone);
    });

    document.querySelector('.subtract-row').addEventListener('click', function(e) {
        e.preventDefault();
        var rows = document.querySelectorAll('.measurement-row');
        if (rows.length > 1) {
            var lastRow = rows[rows.length - 1];
            lastRow.remove();
            var newLast = document.querySelector('.measurement-row:last-child');
            if (newLast) {
                newLast.classList.add('last');
            }
        }
    });

    document.querySelector('.clear-results').addEventListener('click', function() {
        var liquidInputs = document.querySelectorAll('.liquid-input');
        Array.from(liquidInputs).forEach(function(input) {
            input.value = "";
        });
        document.querySelector('.oil-input').value = "15";
        document.querySelector('.top-results').style.display = 'none';
    });
});