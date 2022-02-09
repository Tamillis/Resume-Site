<!-- A file for saving test form data onto a database / in an accessible format such as an array of data in a JSON or w/e -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="portfolio, resume, curriculum vitae, Peter, Bellaby, Peter Bellaby">
    <meta name="description" content="A resume and portfolio of Peter Bellaby">
    <meta name="author" content="Peter Bellaby">

    <title>Test Form</title>

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="testForm.css">
</head>

<body>
    <section class="section">
        <p class="subtitle">You submitted the data: </p>
        <pre>
            <?php var_dump($_POST); ?>
        </pre>
    </section>
</body>

</html>