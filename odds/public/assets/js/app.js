function initializeClickToggle() {
    const e = document.querySelectorAll(".bk-date");
    e.forEach(function(t) {
        t.addEventListener("click", function() {
            e.forEach(function(t) {
                t.classList.remove("active")
            }),
            this.classList.add("active")
        })
    })
}
function toggleCollapse(t) {
    t.classList.toggle("is-open")
}
function isMobileDevice() {
    const userAgent = navigator.userAgent.toLowerCase();
    return /android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/.test(userAgent);
}




document.addEventListener("DOMContentLoaded", function() {
    const n = document.querySelectorAll(".tablinks");
    n.forEach(function(t) {
        t.addEventListener("click", function() {
            var t = this.getAttribute("data-target");
            const e = document.querySelectorAll(".tabcontent");
            e.forEach(function(t) {
                t.style.display = "none"
            }),
            n.forEach(function(t) {
                t.classList.remove("active")
            }),
            document.getElementById(t).style.display = "block",
            this.classList.add("active")
        })
    }),
    document.querySelectorAll(".tab").forEach(function(t) {
        const e = t.querySelector(".tablinks");
        if (e) {
            e.classList.add("active");
            t = e.getAttribute("data-target");
            const n = document.getElementById(t);
            n && (n.style.display = "block")
        }
    }),
    document.querySelectorAll(".tab-group").forEach(function(t) {
        const e = t.querySelector(".tablinks");
        e && e.click()
    })
}),
document.addEventListener("DOMContentLoaded", initializeClickToggle),
document.addEventListener("DOMContentLoaded", function() {
    const t = document.querySelectorAll(".c-bettype__row-heading, .bk-match .bk-league");
    t.forEach(function(t) {
        t.addEventListener("click", function() {
            t.classList.toggle("is-open"),
            toggleCollapse(this.nextElementSibling)
        })
    })
}),
document.addEventListener("DOMContentLoaded", function() {
  if (isMobileDevice()) {
    var t = document.querySelectorAll(".more-odds, .title-odds");
  } else {
    var t = document.querySelectorAll(".more-odds");
  }


    t && t.forEach(function(t) {
        t.addEventListener("click", function() {
            t.closest(".odds-other").nextElementSibling.classList.toggle("is-open")
        })
    })




}),
document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".title-odds").forEach(e=>{
        e.addEventListener("click", function() {
            e.classList.toggle("is-open");
            var t = this.closest(".bk-match");
            t && t.querySelectorAll(".odds-list").forEach(function(t, e) {
                t.classList.contains("is-show") ? t.classList.remove("is-show") : t.classList.add("is-show")
            })
        })
    }
    )
});
