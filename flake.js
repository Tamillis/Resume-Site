class Flake {
    constructor(s, posIn, rIn, armsIn = 6, densityIn = 4, fractalAngleIn = 120) {
      //basic motion vector data
      this.pos = posIn;

      //these variables get initialised outside the class, to make use of the p5 functionality
      //probalby awful practice, but then JS objects are lucy goosey anyway so???
      this.vel = s.createVector(0, 0);
      this.acc = s.createVector(0, 0);
      this.av = s.random(-2, 2);
  
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
  
    drawFlake(s) {
      s.push();
      s.translate(this.pos.x, this.pos.y);
      s.rotate(this.a);
  
      for (let i = 0; i < this.arms; i++) {
        //use recursive programming to make a branch,
        //then rotate and do it all again through the loop
        this.renderBranch(s, this.r, 0, 0, 0);
  
        s.rotate(360 / this.arms);
      }
  
      s.pop();
    }
  
    renderBranch(s, length, startX, startY, angle) {
      s.push();
      if (length > this.r / this.density) {
        //make the base of the line 00
        s.translate(startX, startY);
  
        //rotate reference by the angle
        s.rotate(angle);
  
        //draw a line from 00 to the length
        s.line(0, 0, 0, length);
  
        let newAngle = this.fractalAngle / this.arms;
  
        //if long, a quarter way down draw branches of 3/4 length
        if (length > (2 * this.r) / this.density) {
          this.renderBranch(s, (2 * length) / 4, 0, (1 * length) / 6, newAngle);
          this.renderBranch(s, (2 * length) / 4, 0, (1 * length) / 6, -newAngle);
        }
  
        //if medium, halfway down draw two new lines of half length
        if (length > (3 * this.r) / this.density) {
          this.renderBranch(s, length / 3, 0, (2 * length) / 4, newAngle);
          this.renderBranch(s, length / 3, 0, (2 * length) / 4, -newAngle);
        }
  
        //if short draw lines three quarters down of 1/4 length
        if (length > (4 * this.r) / this.density) {
          this.renderBranch(s, (1 * length) / 5, 0, (3 * length) / 4, newAngle);
          this.renderBranch(s, (1 * length) / 5, 0, (3 * length) / 4, -newAngle);
        }
      }
      s.pop();
    }
  
    moveFlake(s, positions) {
      //update position W.R.T. array of passed in positions
  
      //reset acc to windForce and gravity
      this.acc = s.createVector(0, this.gravity);
  
      //apply windForce
      let windForce = this.getWind(s, this.pos.y);
      this.acc.x += windForce;
      this.acc.x *= 1 - this.windInertia;
  
      //apply separation force
      let sepForce = this.separateFromPositions(s, positions);
      this.acc.add(sepForce);
  
      //move due to acc
      this.vel.add(this.acc);
  
      //slow due to air resistance
      this.vel.mult(1 - this.airResistance);
  
      //update position
      this.pos.add(this.vel);
  
      //wrap left to right
      if (this.pos.x < -this.r) this.pos.x = s.width + this.r;
  
      if (this.pos.x > s.width + this.r) this.pos.x = -this.r;
  
      //rotate
      this.a += this.av;
    }
  
    getWind(s, y) {
      //Get the wind force at this height position
  
      //gently varying with time
      let dt = s.millis() * 0.03;
  
      return (
        this.windForceFactor *
        (s.noise(y * this.noiseFac, dt * this.noiseFac) - 0.5)
      );
    }
  
    separateFromPositions(s, positions) {
      let force = s.createVector(0, 0);
  
      for (let i = 0; i < positions.length; i++) {
        let d = s.dist(this.pos.x, this.pos.y, positions[i].x, positions[i].y);
  
        //if the distance is greater than the shift and one (for reasonable ranges)
        if (d > s.abs(this.sepForceHorizontalShift) + 1) {
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
  