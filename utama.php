<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Staatliches&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="utama.css">
</head>
<body>
    <nav class="judul">
        <div id="tc">✶ TRADITIONAL CUISINES ✶</div>
        <div id="nama">Welcome, <br>
        <?php echo "$_POST[nama]" ?>
        </div>
        <a href="form.php"><img src="assets/back0.png" alt="back" id="back"></a>
    </nav>

    <section class="gambar app">
            <span id="sample"><h1>BATAGOR</h1></span>
            <div id="subjdl"><h1>Appetizer</h1></div>
            <a href="batagor.php"><div id="resep"><h1>Recipe ➔</h1></div></a>   
    </section>

    <article class="isi" id="a">
        <div id="prf">Appetizer merupakan hidangan pembuka yang pertama kali akan disajikan untuk membuka rangkaian full course meal. Seperti namanya, appetizer diambil dari apetite atau nafsu makan.</article></div>
    </article>

    <section class="gambar mc">
            <span id="sample"><h1>RENDANG SAPI</h1></span>
            <div id="subjdl"><h1>Main Course</h1></div>
            <a href="rendangsapi.php"><div id="resep"><h1>Recipe ➔</h1></div></a>
    </section>

    <article class="isi" id="b">
        <div id="prf">Main course atau hidangan utama yang dihidangkan dengan baik dan bertujuan untuk memuaskan dan menyenangkan para tamu atau pengunjung. Hidangan ini biasanya merupakan hidangan yang paling mengenyangkan dan padat komposisinya.</article></div>
    </article>

    <section class="gambar des">
            <span id="sample"><h1>CENDOL DAWET</h1></span>
            <div id="subjdl"><h1>Dessert</h1></div>
            <a href="cendoldawet.php"><div id="resep"><h1>Recipe ➔</h1></div></a>
    </section>

    <article class="isi" id="c">
        <div id="prf">Dessert adalah hidangan penutup yang disajikan setelah hidangan utama (main course). Sebagai hidangan penutup, dessert juga biasa disebut dengan hidangan pencuci mulut. Sajian dessert sering juga dikenal dengan nama The Final Couse atau The Last Course dan rasa manis atau disebut sweet.</article></div>
    </article>
</body>
</html>
