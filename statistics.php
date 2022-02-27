<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "templates/meta-data.html" ?>
    <title>Statistics</title>

    <!-- Scripts for the view page -->
    <script src="https://unpkg.com/vue@3"></script>
    <script src="src/vueApp.js" defer></script>
    <script src="https://cdn.plot.ly/plotly-2.9.0.min.js"></script>

    <?php include "src/loadDatabase.php" ?>
</head>

<body>

<section class="section">
    <h1 class="main-title">Survey Statistics</h1>
    <p>This page is built using Vue3 and plotly.js. Below is a dynamic display for each set of data, with vue handling the view and plotly powering the various visualisations.</p>
    <hr class="rule">
    <div id="app">
        <p id="introText">{{ introText }}</p>
        <div id="graph"></div>
        <!-- TODO: create a proper selection interface -->
        <button @click="changeText">Click Me</button>
        <p id="expalText">{{ explaText }}</p>
    </div>
    <hr class="rule">
</section>

</body>

</html>