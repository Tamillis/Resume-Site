const handleGlyphs = p => {
    p.setup = () => {
        let canvasDiv = p.select(".graph-container");
        
        p.createCanvas(canvasDiv.width, canvasDiv.height);
        
        p.background(125);
    }

    p.draw = () => {
        p.background(125);
        p.circle(p.width/2, p.height/2, 50);
    }

    p.windowResized = () => {
        let canvasDiv = p.select(".graph-container");
        
        p.resizeCanvas(canvasDiv.width, canvasDiv.height);
    }
}