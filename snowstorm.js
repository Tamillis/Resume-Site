class Snowstorm {
    constructor() {
      this.storm = [];
      this.stormSize = 50;
  
      this.setup();
    }
  
    setup() {
      //atmost a storm size of 60, for fps
      this.stormSize = min(60, floor((windowWidth * windowHeight) / 8000));
  
      for (let i = 0; i < this.stormSize; i++) {
        this.storm.push(
          new Flake(
            createVector(random(width), random(height)),
            random(5, 15),
            random([3, 4, 5, 6, 7]),
            random(2, 3.5),
            random(90, 180)
          )
        );
      }
    }
  
    draw() {
      background(5, 20, 5);
  
      let flakePositions = [];
  
      for (let flake of this.storm) {
        flakePositions.push(flake.pos);
      }
  
      for (let flake of this.storm) {
        flake.moveFlake(flakePositions);
        flake.drawFlake();
      }
  
      //if a flake has dropped out of the window, make a new flake at a random x, y of -r
      for (let i = this.storm.length - 1; i > 0; i--) {
        if (this.storm[i].pos.y > height + this.storm[i].r) {
          //splice out the flake now out of bounds
          this.storm.splice(i, 1);
  
          //make a new flake using almost the same data as in setup
          this.storm.push(
            new Flake(
              createVector(random(width), -10),
              random(5, 15),
              random([3, 4, 5, 6, 7]),
              random(2, 4),
              random(90, 180)
            )
          );
        }
      }
    }
  }
  