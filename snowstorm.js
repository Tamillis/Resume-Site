class Snowstorm {
    constructor(s) {
      this.storm = [];
      this.stormSize = 50;
  
      this.setup(s);
    }
  
    setup(s) {
      //atmost a storm size of 60, for fps
      this.stormSize = s.min(60, s.floor((s.windowWidth * s.windowHeight) / 8000));
  
      for (let i = 0; i < this.stormSize; i++) {
        this.storm.push(
          new Flake(
            s, 
            s.createVector(s.random(s.width), s.random(s.height)),
            s.random(5, 15),
            s.random([3, 4, 5, 6, 7]),
            s.random(2, 3.5),
            s.random(90, 180)
          )
        );
      }
    }
  
    draw(s) {
      //create a list of all current flake positions
      let flakePositions = [];
      for (let flake of this.storm) {
        flakePositions.push(flake.pos);
      }
      
      //for each flake, move it and draw it
      for (let flake of this.storm) {
        //flakes interact with all other flakes, so that position data needs to be passed in
        flake.moveFlake(s, flakePositions);
        flake.drawFlake(s);
      }
  
      //if a flake has dropped out of the window, make a new flake at a random x, y of -r
      for (let i = this.storm.length - 1; i > 0; i--) {
        if (this.storm[i].pos.y > s.height + this.storm[i].r) {
          //splice out the flake now out of bounds
          this.storm.splice(i, 1);
  
          //make a new flake using almost (whats different?) the same data as in setup
          this.storm.push(
            new Flake(
              s,
              s.createVector(s.random(s.width), -10),
              s.random(5, 15),
              s.random([3, 4, 5, 6, 7]),
              s.random(2, 4),
              s.random(90, 180)
            )
          );
        }
      }
    }
  }
  