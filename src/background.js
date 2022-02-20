const stormScript = s => {

    let storm;
    let stormCanvas;

    s.setup = function() {
        stormCanvas = s.createCanvas(s.windowWidth, s.windowHeight);
        stormCanvas.position(0,0);
        stormCanvas.style("z-index", "-1");

        s.stroke(220);
        s.angleMode(s.DEGREES);

        storm = new Snowstorm(s);
    }

    s.draw = function() {
        s.background(s.color("#2a312d"));
        storm.draw(s);
    }

    s.windowResized = function() {
        s.resizeCanvas(s.windowWidth, s.windowHeight);
    }
}

let myBackground = new p5(stormScript, "background-canvas");