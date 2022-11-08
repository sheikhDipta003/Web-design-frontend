const btn = document.querySelector("#back-to-top-btn");
btn.addEventListener("click", (e) => {
    e.preventDefault();

    window.scrollTo(0, 0);
});

window.addEventListener("scroll", () => {
    btn.hidden = (window.scrollY < document.documentElement.clientHeight);
});