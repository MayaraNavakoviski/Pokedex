<?php


       $pokemons_api =  file_get_contents('https://pokeapi.co/api/v2/pokemon?limit=100000&offset=0');
       $pokemons =json_decode ($pokemons_api, true);

       for($i = 0; $i < 20; $i++){
            $pokemon = $pokemons['results']['$i'];
       }

       $todas_infos_api =  file_get_contents($pokemon ['url']);
       $pokemons ['results'][$i] = json_decode ($todas_infos_api, true);

?>



<html>

<head>
    <title>Pokedex</title>


    <style>

        #pesquisa {
            
            background: #c92626;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            padding: 20px;
            text-align: center;
        }

        .pokemon {
            width: 20%;
            border: solid 2px #555;
            padding: 15px;/* margem interna  */
            margin: 10px 10px 10px 10px;
            float: left;
            text-align: center;
            margin: 1% ;
            
        }

        .pokemon img {
            max-width: 100%;
        }

    </style>


</head>

<body>

    <div id="pesquisa" >
        <form>
            <input type="text" placeholder="Digite um Pokémon" >
            <input type="submit" value="buscar" >
        </form>
    </div>

    <div id="pokemons">

        <?php for($i = 0; $i < 20; $i++): ?>
        <div class="pokemon">

            <img src="<?= pokemons['results'][$i]['sprites']['other']['dream_world']['']https://assets.pokemon.com/assets/cms2/img/pokedex/full/039.png" alt="Jigglypuff" width="200px">

            <h1> <?= $pokemons['results'] [$i] ['name']?> </h1>
            <p>peso: 0.8</p>
            <p>altura 0.8</p>
        </div>
        <?php endfor; ?>


    </div>


    
</body>
</html>
