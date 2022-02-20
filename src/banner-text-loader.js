//a demonstration of async await functionality
//the text for the marquee banner, which needs to be repeated to prevent
//odd behaviour on wide screens, is pulled and filled into the three p elements automatically
async function getText() {
    let text = await fetch("assets/banner-text.txt").then(response => response.text());
    let marqueePs = document.getElementsByClassName("banner-text-p");

    for(p of marqueePs) {
        p.innerHTML = text;
    }
}

getText();