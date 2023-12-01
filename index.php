<?php

    $pokemons_api = file_get_contents('https://pokeapi.co/api/v2/pokemon');
    $pokemons = json_decode($pokemons_api, true);

    for ($i=0; $i < 20; $i++) { 
        $pokemon = $pokemons['results'][$i];


        $todas_infos_api = file_get_contents($pokemon['url']);
        $pokemons['results'][$i] = json_decode($todas_infos_api, true);
    }

    // $dados_em_texto = file_get_contents("https://pokeapi.co/api/v2/pokemon/{$nome}");

    // $pokemon = json_decode($dados_em_texto, true);


?>


<html>

<head>
    <title>Pokedex</title>


    <style>

        #pesquisa {

            background: #c92626 ;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            padding: 20px;
            text-align: center;
    


        }

        .pokemon {
            width: 20%;
            border: solid 2px #555;
            padding: 15px; /* margem interna */
            margin: 10px 10px 10px 10px;
            float: left;
            text-align: center;

        }

        .pokemon img {
            max-widht: 100%;
            height: 150px;
        }

    </style>


</head>

    <body>
    
        <div id="Pesquisa">

            <form>

                <input type = "text" placeholder = "Digite um Pokémon">
                <input type = "submit" value = "Buscar">

            </form>

        </div>

        <div id="Pokemons">

        <?php for($i = 0; $i < 20; $i++): ?>

        

            <div class="Pokemon">

                <img src="<?= $pokemons['results'][$i]['sprites']['other']['dream_world']['front_default']?>" alt="Snorlax" width= "200px">

                <h1><?=  $pokemons['results'][$i]['name'] ?></h1>
                <p>peso: 460.0 kg</p>
                <p>altura: 2.1 m</p>


            </div>

            <?php endfor; ?>


        </div>



    </body>
</html>
