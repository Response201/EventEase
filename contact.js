// document.addEventListener("DOMContentLoaded", function() {
//     var teacherInfos = document.querySelectorAll(".teacher-container-info");
//     teacherInfos.forEach(function(info, index) {
//         setTimeout(function() {
//             info.classList.add("show");
//         }, 1900 * (index + 1)); // Lägger till en ökande fördröjning för varje element
//     });
// });

document.addEventListener("DOMContentLoaded", function() {
    var teacherInfos = document.querySelectorAll(".teacher-container-info");

    function checkScroll() {
        var scrollPosition = window.scrollY;
        var windowHeight = window.innerHeight;

        teacherInfos.forEach(function(info, index) {
            var elementOffsetTop = info.getBoundingClientRect().top;

            // Om elementet är synligt på sidan
            if (elementOffsetTop - windowHeight < 0) {
                setTimeout(function() {
                    info.classList.add("show");
                }, 200 * (index + 1)); // Lägger till en ökande fördröjning för varje element
            }
        });
    }

    // Lyssna på scrollhändelsen och anropa checkScroll-funktionen
    window.addEventListener("scroll", checkScroll);

    // Kolla scrollpositionen när sidan laddas också
    checkScroll();
});