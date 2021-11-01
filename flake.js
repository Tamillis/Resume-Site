class Flake {
    constructor(posIn, rIn, armsIn = 6, densityIn = 4, fractalAngleIn = 120) {
      //basic motion vector data
      this.pos = posIn;
      this.vel = createVector(0, 0);
      this.acc = createVector(0, 0);
      this.av = random(-2, 2);
  
      //motion variables
      this.gravity = 0.4;
      this.airResistance = 0.2;
      this.noiseFac = 0.003;
      this.windForceFactor = 3;
      this.windInertia = 0.01;
  
      //separation force formula variables, tweaked over and over again
      this.sepForceFac = 14;
      this.attractForceFac = -0.3;
      this.sepForceConstant = 0.002;
      this.sepForceHorizontalShift = -4;
  
      //parameters for controlling the fractal pattern
      this.r = rIn;
      this.a = 0;
      this.arms = armsIn;
      this.density = densityIn;
      this.fractalAngle = fractalAngleIn;
    }
  
    drawFlake() {
      push();
      translate(this.pos.x, this.pos.y);
      rotate(this.a);
  
      for (let i = 0; i < this.arms; i++) {
        //use recursive programming to make a branch,
        //then rotate and do it all again through the loop
        this.renderBranch(this.r, 0, 0, 0);
  
        rotate(360 / this.arms);
      }
  
      pop();
    }
  
    renderBranch(length, startX, startY, angle) {
      push();
      if (length > this.r / this.density) {
        //make the base of the line 00
        translate(startX, startY);
  
        //rotate reference by the angle
        rotate(angle);
  
        //draw a line from 00 to the length
        line(0, 0, 0, length);
  
        let newAngle = this.fractalAngle / this.arms;
  
        //if long, a quarter way down draw branches of 3/4 length
        if (length > (2 * this.r) / this.density) {
          this.renderBranch((2 * length) / 4, 0, (1 * length) / 6, newAngle);
          this.renderBranch((2 * length) / 4, 0, (1 * length) / 6, -newAngle);
        }
  
        //if medium, halfway down draw two new lines of half length
        if (length > (3 * this.r) / this.density) {
          this.renderBranch(length / 3, 0, (2 * length) / 4, newAngle);
          this.renderBranch(length / 3, 0, (2 * length) / 4, -newAngle);
        }
  
        //if short draw lines three quarters down of 1/4 length
        if (length > (4 * this.r) / this.density) {
          this.renderBranch((1 * length) / 5, 0, (3 * length) / 4, newAngle);
          this.renderBranch((1 * length) / 5, 0, (3 * length) / 4, -newAngle);
        }
      }
      pop();
    }
  
    moveFlake(positions) {
      //update position W.R.T. array of passed in positions
  
      //reset acc to windForce and gravity
      this.acc = createVector(0, this.gravity);
  
      //apply windForce
      let windForce = this.getWind(this.pos.y);
      this.acc.x += windForce;
      this.acc.x *= 1 - this.windInertia;
  
      //apply separation force
      let sepForce = this.separateFromPositions(positions);
      this.acc.add(sepForce);
  
      //move due to acc
      this.vel.add(this.acc);
  
      //slow due to air resistance
      this.vel.mult(1 - this.airResistance);
  
      //update position
      this.pos.add(this.vel);
  
      //wrap left to right
      if (this.pos.x < -this.r) this.pos.x = width + this.r;
  
      if (this.pos.x > width + this.r) this.pos.x = -this.r;
  
      //rotate
      this.a += this.av;
    }
  
    getWind(y) {
      //Get the wind force at this height position
  
      //gently varying with time
      let dt = millis() * 0.03;
  
      return (
        this.windForceFactor *
        (noise(y * this.noiseFac, dt * this.noiseFac) - 0.5)
      );
    }
  
    separateFromPositions(positions) {
      let force = createVector(0, 0);
  
      for (let i = 0; i < positions.length; i++) {
        let d = dist(this.pos.x, this.pos.y, positions[i].x, positions[i].y);
  
        //if the distance is greater than the shift and one (for reasonable ranges)
        if (d > abs(this.sepForceHorizontalShift) + 1) {
          //get direction from position to this point
          let dir = p5.Vector.sub(this.pos, positions[i]);
  
          //set its magnitude to the sep force formula, mapped in google tweaked in sim
          let formula =
            this.sepForceFac / (d + this.sepForceHorizontalShift) ** 2 +
            this.attractForceFac / (d + this.sepForceHorizontalShift) +
            this.sepForceConstant;
  
          dir.setMag(formula);
          force.add(dir);
        }
      }
      return force;
    }
  }
  