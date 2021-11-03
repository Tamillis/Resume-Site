const stormScript = s => {

    let storm;

    s.setup = function() {
        //set p5js canvas to desired canvas element
        //s.createCanvas(windowWidth, windowHeight).parent("background-canvas");

        s.stroke(220);
        s.angleMode(DEGREES);

        storm = new Snowstorm();
    }

    s.draw = function() {
        storm.draw();
    }

    s.windowResized = function() {
        s.resizeCanvas(windowWidth, windowHeight);
    }
}

let myBackground = new p5(stormScript, "background-canvas");