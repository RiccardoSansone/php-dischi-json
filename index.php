<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>php-dischi-json</title>
</head>
<body>
    
    <div id="app">

        <nav>
            <img class="logo" src="./logo.png" alt="">
        </nav>

        <div class="container">
                <div class="card" v-for="disc in discs" :key="disc.title">
                    <img :src="disc.poster" alt="Poster">
                    <h2>{{ disc.title }}</h2>
                    <p>{{ disc.author }}</p>
                    <h2>{{ disc.year }}</>
                </div>
        </div>
    </div>


    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios@0.21.4/dist/axios.min.js"></script>
    <script src="script.js"></script>



</body>
</html>