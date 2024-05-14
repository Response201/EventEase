document.addEventListener("DOMContentLoaded", function() {
    var teacherInfos = document.querySelectorAll(".teacher-container-info");

    function checkScroll() {
        var scrollPosition = window.scrollY;
        var windowHeight = window.innerHeight;

        teacherInfos.forEach(function(info, index) {
            var elementOffsetTop = info.getBoundingClientRect().top;


            if (elementOffsetTop - windowHeight < 0) {
                setTimeout(function() {
                    info.classList.add("show");
                }, 200 * (index + 1)); 
            }
        });
    }

    
    window.addEventListener("scroll", checkScroll);

  
    checkScroll();
});