<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div id="container">
    
    <?php include('./Assets/nav.php') ?>
    <?php include('./Assets/header.php') ?>

    <section>
        <form>
            <div class="input-data">
                <label for="Prenom">Prenom:</label>
                <input type="text" id="prenom" required>
                <div class="underline"></div>
            </div>
        </form>
        <form>
            <div class="input-data">
                <label for="Nom">Nom:</label>
                <input type="text" id="nom" required>
                <div class="underline"></div>
            </div>
        </form>
        <form>
            <div class="input-data">
                <label for="Email">Email:</label>
                <input type="email" id="email" required>
                <div class="underline"></div>
            </div>
        </form>
        <form>
            <div class="input-data">
                <label for="tel">Télephone</label>
                <input type="tel" id="tel" required>
                <div class="underline"></div>
            </div>
        </form>
        <form >
            <div class="input-data textarea">
                <label for="message">Message</label>
                <textarea id="message" required></textarea>
                <div class="underline"></div>
            </div>
            <button>Envoyer le message</button>
        </form>
    </section>




    <?php include('./Assets/footer.php') ?>
</div>
</body>
</html>