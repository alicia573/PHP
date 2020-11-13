<html lang="en">
    <head>
        <title></title>
        <link rel="stylesheet" href="Bakkerijvlechtbeheer%20style.css">
    </head>
    <body>
        <header id="banner">Bakkerij Vlecht Beheer</header>

        <div id="wrapper">
            <a href="index.php" class="links"> Overzicht broodjes</a>
            <a href="Admin.php" class="links"> Broodjes toevoegen</a><br>

            <form action="Admin.php" name="Admin-form" method="POST" id="formulier" enctype="multipart/form-data">
                <label>Bestanden:
                <input type="file" name="image_url" class="form-control">
                </label><br>
                <label> Broodsoort:
                    <input type="text" name="brood" class="form-control">
                </label><br>
                <label>Meelsoort:
                    <input type="text" name="meel" class="form-control">
                </label><br>
                <label>Vormsoort:
                    <input type="text" name="vorm" class="form-control">
                </label><br>
                <label>Gewicht:
                    <input type="number" name="gewicht" class="form-control">
                </label><br>
                <button type="submit" id="submit-button">Submit</button>

            </form>
        </div>
        <?php
         include('Broodje.php');
        require ('Beheer.php');
        return('index.php')





        ?>
    </body>

</html>
