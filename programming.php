<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "templates/meta-data.html" ?>

  <title>Programming</title>

  <script src="libraries/p5.min.js"></script>
  <script src="libraries/p5.sound.min.js"></script>
</head>

<body>

  <?php include "templates/sidebar.html" ?>

  <button class="nav-btn" id="nav-btn" onClick="toggleNav()">&#9776;</button>

  <div id="not-sidebar">

    <section class="section bg-black-transparent-0p3">
      <h1 class="main-title">Programming</h1>
      <h2 class="subtitle">So what's this about?</h2>
      <div class="main-text">
        <p>
          Over the years I've dabbled in various programming languages and environments. For me it started back in
          sixth-form college where I took my first Computing class that used BASIC as its language of instruction and
          welcome into the wonderful world of computer programming. Within the (old) visual studio suite I learned first
          to make my fullscreen form flash random colours. It’s been my way of saying Hello World ever since.<br><br>
          I can’t say I’m an expert at any of the languages I use, I’ll let you be the judge of that, but I have managed
          to drag myself to a level of familiarity with Python, Java, C# and JavaScript in that order. Most recently
          I’ve put myself through a program of learning CSS and HTML, the product of which is what you see here. Nothing
          more than some static functionality along with some usage of server side files, but for now I’m proud of what
          I’ve managed to get together over the course of a few months or so.<br><br>
          Below you will find iframes of my various other projects that I’m willing to let the wider world see, mostly
          in JavaScript and Java through the handy library of P5JS and Processing3. I’m afraid my old PyGame ventures
          from 16 year old me are lost to the void. Thankfully, haha. And maybe one of these days I’ll get around to
          finish the Brickbreak clone I was throwing together in C# and Monogame.<br><br>
          What is difficult to show are my ventures into Linux and learning the terminal, but I got far enough to be able
          to say "I use Arch by the way." Although honesty does compel me to say that it is not my daily driver. <br><br>
          Anyway, here’s my showcase, if you want to take a peak at any of the code open up the P5JS programs in a new tab
          and take a look at the online editor there. Everything is on show. If you have any other questions please feel
          free to contact me via the nav menu contact.
        </p>
      </div>

      <hr class="rule">

      <h2 class="subtitle">Randomly Coloring Tiles</h2>
      <p class="main-text">As noted, my first foray into something nearly always involves filling the screen with random
        colours. Like this.</p>

      <button type="button" class="btn" id="randomly-coloring-tiles-btn" onclick="toggleIframe('randomly-coloring-tiles', 'https://preview.p5js.org/Tamillis/embed/Os9tzE3r-')">Open</button>
      <div class="wrap" id="randomly-coloring-tiles"></div>

      <h2 class="subtitle">Smokey Wanderer</h2>
      <p class="main-text">This was another of the first forays into JavaScript, this time primarily to familiarise myself
        with array functions and make something pretty. Click to pause.</p>
      <button type="button" class="btn" id="smokey-wanderer-btn" onclick="toggleIframe('smokey-wanderer', 'https://preview.p5js.org/Tamillis/embed/EJ8E8twVF')">Open</button>
      <div class="wrap" id="smokey-wanderer"></div>

      <h2 class="subtitle">Boids</h2>
      <p class="main-text">Following along with Daniel Schiffman's videos I decided to implement the flocking algorithm,
        setting this up. It also makes use of DOM elements generated from inside the script that dynamically effect the
        simulation. Also they flee the mouse, which I thought was cute.</p>
      <button type="button" class="btn" id="boids-btn" onclick="toggleIframe('boids', 'https://preview.p5js.org/Tamillis/embed/_zCa9LADT')">Open</button>
      <div class="wrap" id="boids"></div>

      <h2 class="subtitle">Continent Generator</h2>
      <p class="main-text">One of these days I will get around to a full world generating program or, perhaps, some kind
        of zero player simulator of agents on a tiled world. For now, I busied myself with this generator that randomly
        creates continents using voronoi cells with a randomised distance function. Left and right arrow keys allow
        scrolling, to show that it is left-right wrappable. Click to generate a new set.</p>
      <button type="button" class="btn" id="continent-generator-btn" onclick="toggleIframe('continent-generator', 'https://preview.p5js.org/Tamillis/embed/6j5IixBqc')">Open</button>
      <div class="wrap" id="continent-generator"></div>

      <h2 class="subtitle">Conways Life</h2>
      <p class="main-text">I love Conway's Life, so it was only a matter of time before I made it in P5JS. Here is that
        implementation. It also allows users to draw in new cells. P for pause and N for new set.</p>
      <button type="button" class="btn" id="conways-life-btn" onclick="toggleIframe('conways-life', 'https://preview.p5js.org/Tamillis/embed/_f0BjwSbT')">Open</button>
      <div class="wrap" id="conways-life"></div>

      <h2 class="subtitle">No Overlap</h2>
      <p class="main-text">This particular sketch started as an attempt to explain recursion to a friend, and eventually
        into a packing algorithm challenge to myself, could I make one in less than the hour that I had before heading to
        work?<br>
        Of course not, but I did get the bulk of it done, and I polished it up to the state seen within the same day. Keep
        clicking and the balls will get smaller. It's probably my only properly commented program, haha.</p>
      <button type="button" class="btn" id="no-overlap-btn" onclick="toggleIframe('no-overlap', 'https://preview.p5js.org/Tamillis/embed/jE5l0FIlz')">Open</button>
      <div class="wrap" id="no-overlap"></div>

    </section>

    <footer id="footer" class="main-footer">
      <label class="footer-text align-right" for="demo-div">This site demos: </label>
      <div id="demo-div">
        <img src="assets/p5-sq-reverse-filled.png" alt="" height="32" width="32" title="P5JS">
        <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
          <!-- while the svg and path elements were provided by the above the rect SVG is my own addition -->
          <rect width="50" height="50" rx="10" ry="10" style="fill:rgb(255,255,255);stroke:0" />
          <path style="text-indent:0;text-align:start;line-height:normal;text-transform:none;-inkscape-font-specification:Sans" d="M 5 5 C 3.3550302 5 2 6.3550302 2 8 L 2 36 C 2 37.64497 3.3550302 39 5 39 L 20 39 L 20 42 L 18 42 C 16.35503 42 15 43.35503 15 45 L 15 46 L 15 47 L 16 47 L 34 47 L 35 47 L 35 46 L 35 45 C 35 43.35503 33.64497 42 32 42 L 30 42 L 30 39 L 45 39 C 46.64497 39 48 37.64497 48 36 L 48 8 C 48 6.3550302 46.64497 5 45 5 L 5 5 z M 5 7 L 45 7 C 45.56503 7 46 7.4349698 46 8 L 46 36 C 46 36.56503 45.56503 37 45 37 L 20 37 L 5 37 C 4.4349698 37 4 36.56503 4 36 L 4 8 C 4 7.8587425 4.012893 7.7139858 4.0625 7.59375 C 4.211321 7.2330426 4.5762273 7 5 7 z M 9 13 C 7.9069372 13 7 13.906937 7 15 L 7 28 C 7 29.093063 7.9069372 30 9 30 L 15 30 C 16.093063 30 17 29.093063 17 28 L 17 15 C 17 13.906937 16.093063 13 15 13 L 9 13 z M 23 13 C 21.906937 13 21 13.906937 21 15 L 21 28 C 21 29.093063 21.906937 30 23 30 L 41 30 C 42.093063 30 43 29.093063 43 28 L 43 15 C 43 13.906937 42.093063 13 41 13 L 23 13 z M 9 15 L 15 15 L 15 28 L 9 28 L 9 15 z M 23 15 L 41 15 L 41 28 L 23 28 L 23 15 z M 12 25 C 11.447715 25 11 25.447715 11 26 C 11 26.552285 11.447715 27 12 27 C 12.552285 27 13 26.552285 13 26 C 13 25.447715 12.552285 25 12 25 z M 32 25 C 31.447715 25 31 25.447715 31 26 C 31 26.552285 31.447715 27 32 27 C 32.552285 27 33 26.552285 33 26 C 33 25.447715 32.552285 25 32 25 z M 25 34 C 24.447715 34 24 34.447715 24 35 C 24 35.552285 24.447715 36 25 36 C 25.552285 36 26 35.552285 26 35 C 26 34.447715 25.552285 34 25 34 z M 22 39 L 28 39 L 28 42 L 22 42 L 22 39 z M 18 44 L 32 44 C 32.56503 44 33 44.43497 33 45 L 17 45 C 17 44.43497 17.43497 44 18 44 z" />
          <title>MediaQueries in use</title>
        </svg>
      </div>
      <?php include "templates/footer-inner.html" ?>
    </footer>
  </div>
</body>

</html>