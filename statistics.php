<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "templates/meta-data.html" ?>
    <title>Statistics</title>

    <!-- Data handling -->
    <?php include "src/loadDatabase.php" ?>
    <script>
        let data = '<?=$data?>';
    </script>

    <!-- Scripts for the view page -->
    <script src="https://cdn.plot.ly/plotly-2.9.0.min.js"></script>
    <script src="https://unpkg.com/vue@3"></script>
    <script src="src/vueApp.js" defer></script>
</head>

<body>

    <?php include "templates/sidebar.html" ?>

    <button class="nav-btn" id="nav-btn" onClick="toggleNav()">&#9776;</button>

    <div id="not-sidebar">

        <section class="section">
            <p class="subtitle">WIP</p>
            <h1 class="main-title">Survey Statistics</h1>
            <p>This page is built using Vue3 and plotly.js. Below is a dynamic display for each set of data, with vue handling the view and plotly powering the various visualisations.</p>
            <hr class="rule">

            <!-- The in page Vue App demonstration starts here -->
            <div id="app" class="main-text">
                <div class="intro-text"><p id="introText" class="">{{ originalQ[graphIndex] }}</p></div>
                
                <div class="graph-container">
                    <div id="graph"></div>
                </div>
                <!-- TODO: create a proper selection interface -->
                <button @click="nextGraph" class="btn">Next</button>
                <p id="expalText">{{ explaText[graphIndex] }}</p>
            </div>
            <hr class="rule">
        </section>
    </div>
</body>

<footer id="footer" class="main-footer">
    <label class="footer-text align-right" for="demo-div">This site demos: </label>
    <div id="demo-div">
        <img src="assets/plotly-dark-logo.png" width="32" height="32" alt="" title="Plotly in use">
        <svg version="1.1" viewBox="0 0 261.76 226.69" height="32" width="32" xmlns="http://www.w3.org/2000/svg">
            <title>Vue in use</title>
            <g transform="matrix(1.3333 0 0 -1.3333 -76.311 313.34)">
                <g transform="translate(178.06 235.01)">
                    <path d="m0 0-22.669-39.264-22.669 39.264h-75.491l98.16-170.02 98.16 170.02z" fill="#41b883" />
                </g>
                <g transform="translate(178.06 235.01)">
                    <path d="m0 0-22.669-39.264-22.669 39.264h-36.227l58.896-102.01 58.896 102.01z" fill="#34495e" />
                </g>
            </g>
        </svg>
    </div>
    <?php include "templates/footer-inner.html" ?>
</footer>

</html>