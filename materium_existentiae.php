<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "templates/meta-data.html" ?>

  <title>Material Existentiae</title>

</head>

<body class="bg-img-pineforest" title="Photo by Samuel Ferrara on Unsplash">

  <?php include "templates/sidebar.html" ?>

  <button class="nav-btn" id="nav-btn" onClick="toggleNav()">&#9776;</button>

  <div id="not-sidebar">

    <section class="section bg-black-transparent-0p3">
      <p class="subtitle">WIP</p>

      <h1 class="main-title">World Building</h1>
      <h2 class="subtitle">The Materium Existentiae</h2>
      <input type="text" class="search-bar" value="Search..." size="50">
      <div class="main-text">
        <p>The Materium Existentiae is a world I've been working on for quite a while, adding bits coninuously here and
          there. It is the kitchen sink fantasy setting for my home games while also being unique and interesting in its
          own way, or at least I hope that it is!</p>
        <p>The setting splits the so-called material plane into country sized chunks of earth known as "Shards" which
          float in a hostile roiling soup known simply as the "Mists" which, as not so subtley implied by the name, are
          heavily inspired by the book and film of the same name.</p>
        <p>Each shard is a miniature world unto itself, with it's own unique collection of cultures and history, though
          all collectively pulling on an ancient pre-calamity history and a common cosmos, itself heavily inspired by the
          implied setting of Dungeons & Dragons (particularly fifth edition), but still it's own kettle of fish.</p>
        <p>This page is intended to be a depository of all sorts of player and GM oriented articles and sections for the
          various places, figures and stories of the world.</p>
        <p>The database part of that, and the search bar functionality, and frankly everything, is very much a work in
          progress.</p>
      </div>
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