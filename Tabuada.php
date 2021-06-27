<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<style>
        .tabuada{
        background-color:#8B0000;
        width:16vw;
        display:inline-block;
        margin: 0.5vw;
        border-radius:1vw;
        padding:1vw;
        color:#fff;
        
    }
    .tabuada:hover{
        background-color:black
    }
    .tabuada h1{
        font-size:1.4rem
    }
    .tabuada p{
        margin:0;
        font-size:1.5rem;
        padding:0.2vw
    }
    .tabuada p:hover{
        background-color:#8b0000;
        border-radius:0.1vw;
        
    }
    @media(max-width:900px){
       .tabuada {
        display: block;
        margin: 1vw auto;
        width: 90%;
        padding:3vw
    }
    .tabuada h1 {
        font-size: 3rem
    }
    .tabuada p {
        font-size: 2rem
    }
}
 

</style>
<?php
    for($i = 1; $i < 11; $i++){
        print "<section class=\"tabuada\">";
        print "<h1>Essa é a tabuada do $i</h1><br>";
        for($j = 1; $j <11; $j++){
            print "<p>$i X $j = ".($i * $j)."</p><br>";
        }
        print "</section>";
    
    };
     
?>