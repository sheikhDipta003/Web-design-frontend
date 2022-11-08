function loadCss(href){     //asyncronously adds css file to phy.html
    let _link = document.createElement("link");
    _link.rel = "stylesheet";
    _link.href = href;
    document.head.append(_link);
};

loadCss("css/phy.css");     //the codes below this line doesn't wait for this function to finish loading the css

const btn = document.querySelector("#back-to-top-btn");
btn.addEventListener("click", (e) => {
    e.preventDefault();

    window.scrollTo(0, 0);
});

window.addEventListener("scroll", () => {
    btn.hidden = (window.scrollY < document.documentElement.clientHeight);
});