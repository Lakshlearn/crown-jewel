document.addEventListener("DOMContentLoaded", () => {

    const reveals = document.querySelectorAll(".reveal");

    const observer = new IntersectionObserver((entries) => {

        entries.forEach((entry,index) => {

            if(entry.isIntersecting){

                setTimeout(() => {

                    entry.target.classList.add("active");

                }, index * 80);

            }

        });

    },{
        threshold:0.15
    });

    reveals.forEach(item => {
        observer.observe(item);
    });

});