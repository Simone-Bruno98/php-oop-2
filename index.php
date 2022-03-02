<?php
    require_once __DIR__. "/classes/Sala.php";
    require_once __DIR__. "/classes/Sala4d.php";
    require_once __DIR__. "/classes/Film.php";
    require_once __DIR__. "/classes/Spettacolo.php";

    $film = [
        new Film("Belfast", 107, "Kenneth Branagh", "Belfast, film diretto da Kenneth Branagh, è ambientato negli anni '60 durante l'inizio dei Troubles, ovvero il conflitto nordirlandese, che ebbe inizio nel 1968 per durare ben trent'anni. Il film racconta la storia di Buddy (Jude Hill) un bambino di 9 anni che vive con i genitori (Jamie Dornan e Caitriona Balfe) e i suoi nonni (Judi Dench e Ciarán Hinds), due arzilli anziani, nel North Belfast. La sua famiglia appartiene alla working class, ma dove abita tutti si conoscono e questo fa sì che la famiglia di Buddy sia un po' in tutta Belfast. Il ragazzino trascorre le giornate nei pressi di un cinema o di fronte la TV a guardare film e programmi americani, che lo portano lontano, oltreoceano. Siamo verso la fine degli anni '60, quando la tranquillità respirata a Belfast viene soppiantata da un malcontento generale, che vede schierarsi cattolici contro protestanti. Iniziano rivolte e attacchi, finché tutta la città non diventa lo scenario di un conflitto che porterà inevitabilmente ai tumulti della guerra civile. L'infanzia di Buddy è segnata, la serenità vissuta fino a quel momento ha lasciato spazio a tante domande. Il bambino si sente come in uno dei suoi film, dove i cattivi e gli eroi si danno battaglia gli uni con gli altri. Vede sua madre cercare con fatica di proteggere la famiglia, mentre suo padre è in Inghilterra per lavoro. Buddy si chiede se sua madre sia disposta a sacrificare il suo passato per il bene dei suoi cari, se i suoi nonni ne usciranno illesi e, soprattutto, se il padre lontano sia quell'eroe di cui hanno bisogno per arrestare la guerra...", "Jamie Dornan, Jude Hill, Caitriona Balfe, Judi Dench") ,
        new Film("Drive my car", 179, "Ryusuke Hamagichi", "Drive My Car, film diretto da Ryûsuke Hamaguchi, racconta la storia di Yusuke Kafuku (Hidetoshi Nishijima), un attore e regista teatrale felicemente sposato, fino a quando sua moglie, una drammaturga, è venuta a mancare improvvisamente. Due anni dopo questo tragico evento, Yusuke viene ingaggiato per mettere in scena lo Zio Vanja di Checov in un festival teatrale che si tiene a Hiroshima. Durante le rappresentazioni conosce Misaki (Tōko Miura), una ragazza che è stata scelta per fagli da autista. Trascorrendo sempre più tempo insieme a bordo di una Saab 900 rossa tra un tragitto e l'altro, i due legano molto e anche la riservata Misaki riesce ad aprirsi e a parlare di sé. L'attore e la sua autista iniziano a raccontarsi sinceramente, fino ad affrontare il delicato tema del passato di entrambi.", "Hidetoshi Nishijima, Toko Miura, Reika Kirishima, Yoo-rim Park"),
        new Film("Licorice Pizza", 133, "Paul Thomas Anderson", "Licorice Pizza, film diretto da Paul Thomas Anderson, è ambientato nella San Fernando Valley degli anni Settanta e racconta la storia di un giovane liceale, il quindicenne Gary Valentine (Cooper Hoffman), con una carriera avviata come attore sin dall'infanzia. Il giorno in cui a scuola si scatta la foto per l'annuario Gary incontra Alana Kane (Alana Haim), una ragazza di diversi anni più grande di lui, da cui rimane fortemente colpito. I due iniziano a frequentarsi e a passare diverso tempo insieme, stringendo sempre più amicizia, tanto che finiscono per avviare un'azienda di letti ad acqua, gestita da Gary, ma con Alana come dipendente. Siamo nel 1973 e questi due giovani vivono diverse avventure, correndo da una parte all'altra della città, crescendo giorno dopo giorno e innamorandosi, ma non manca di certo anche qualche litigio.", "Alana Haim, Cooper Hoffman, Sean Penn, Bradley Cooper, Tom Waits, Benny Safdie"),
        new Film("Dune", 155, "Denis Villeneuve", "Dune, film diretto da Denis Villeneuve, è ambientato in un lontano futuro, controllato da un impero interstellare, nel quale vige una sorta di feudalesimo e ogni feudo è governato da una casa nobiliare. Racconta la storia del giovane Paul (Thimothée Chalamet), rampollo della casata degli Atreides, che si trasferisce sull'inospitale pianeta Arrakis, noto come Dune, insieme al padre, il Duca Leto (Oscar Isaac), alla madre Lady Jessica (Rebecca Ferguson) e alcuni consiglieri. Leto ha preso in gestione il pianeta nella speranza di scovare un posto sicuro, adatto alla sua famiglia e alla sua comunità. Dune, però, è sotto il mirino di tutte le forze dell'universo, decise a ottenerne il suo dominio per una rarità che cresce solo sul suo suolo. Si tratta di una preziosa risorsa, esistente solo qui, che permette a chi la possiede di sbloccare il più grande potenziale umano; infatti, chi assume questa spezia può viaggiare nello spazio, ottenere capacità sovrumane e può vivere più a lungo. L'estrazione di questa materia prima, però, non è ostacolata soltanto dai vari nemici di Leto, che cercheranno di tendergli più di una trappola, ma anche da enormi vermi della sabbia e dai Fremen, popolo nativo di Dune, che abita i deserti più profondi del pianeta. Inoltre, il controllo esclusivo di questa materia prima scatenerà una vera e propria guerra, ma solo chi riuscirà a superare le proprie paure e a sopravvivere su Dune potrà ottenete la sostanza più ambita dell'universo. Il giovane Paul, ignaro del suo destino, si ritroverà al centro di questo scontro, nel corso del quale compirà grandi gesta.", "Timothée Chalamet, Rebecca Ferguson, Dave Bautista, Stellan Skarsgård"),
    ];

    $sale = [
        new Sala("1", "350"),
        new Sala("2", "200", "true", "true", "true", "true", "true"),
        new Sala("3", "120"),
        new Sala("4", "250","true", "false", "true", "false", "true"),
    ];

    $spettacoli = [
        new Spettacolo($film[0], "1 marzo 2022", ["20:00", "23:00"], $sale[0]),
        new Spettacolo($film[1], "1 marzo 2022", ["16:30", "20:00", "23:30"], $sale[1]),
        new Spettacolo($film[2], "1 marzo 2022", ["18:00", "21:00", "23:30"], $sale[2]),
        new Spettacolo($film[3], "1 marzo 2022", ["16:00", "19:00", "22:00"], $sale[3])
    ];


// 1) Recupera l’elenco delle sale con relative informazioni, facendo particolare attenzione alle informazioni aggiuntive per le sale immersive.
        var_dump($sale);


// 2) Recuperare la capienza totale del cinema considerando tutte le sale a disposizione.
        $capacita = 0;
        foreach ($sale as $value) {
            $capacita += $value -> getPosti();
        }
        
        var_dump($capacita);
        
    
//3) Stabilito un giorno e un film, recuperare quante proiezioni totali di quel film ci saranno.
        $numSpettacoli = 0;
        $giorno = "1 marzo 2022";
        $pellicola = $film[1];
    
        foreach($spettacoli as $value){
            if(($giorno == $value->getData()) && ($pellicola == $value ->getTitolo())){
                $numSpettacoli = $value->getOra();
            }
        };