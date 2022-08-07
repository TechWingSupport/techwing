(function ($) {
    "use strict";
    $(document).ready(function () {
        // Start app code
        const techList = [
            'building a website',
            'technical support',
            'optimizing a current website',
            'setting up hosting and domain names',
            'moving servers',
            'Git and version control'
        ]
        
        let heroTagline = $('.skill-interval');

        function displaySkill(output, interval) {
            let i = 0;
            var displayInterval = setInterval(function() {
                if (i < 6) {
                    var opValue = output[i];
                    heroTagline.html(opValue);
                    console.log(opValue);
                    i++
                } else {
                   i = 0;
                }
                if(i === output.length) { 
                    clearInterval(displayInterval);
                    displaySkill(techList, 2000);
                };
            }, interval);
        }
            
        displaySkill(techList, 2000);

        // Date and time
        var now = (function () {
            var year = new Date(new Date().getFullYear().toString()).getTime();
            return function () {
                return Date.now();
            }
        })();
        console.log(Date(now()));
	});
}(jQuery));