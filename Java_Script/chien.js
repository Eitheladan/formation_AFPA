    function Animal(lenom, lage, larace, lepoids, lataille, laboiement, photo) {
        this.nom = lenom ;
        this.age = lage ;
        this.race = larace;
        this.weight = lepoids;
        this.size = lataille;
        this.bark = laboiement;
        this.photo = photo;

        this.presente = function () {

            if ( this.race == "Jack-russel"){

            document.write("<h1>" + this.race + "</h1> <div>Bonjour , je suis " + this.nom + " et j'ai " + this.age + " ans. Je fais " + this.weight + " kg et je mesure " + this.size + " cm au garrot. Quand je suis content je fais " + this.bark + " !!!</div> </br><img id=\"jack\" src=\"" + this.photo + "\"/><br>");
            }
            if ( this.race == "Fox-terrier"){

            document.write("<h1>" + this.race + "</h1> <div>Bonjour , je suis " + this.nom + " et j'ai " + this.age + " ans. Je fais " + this.weight + " kg et je mesure " + this.size + " cm au garrot. Quand je suis mechant je fais " + this.bark + " !!!</div> </br><img id=\"fox\" src=\"" + this.photo + "\"/><br>");
            }

            if ( this.race == "Bouledog"){

            document.write("<h1>" + this.race + "</h1> <div>Bonjour , je suis " + this.nom + " et j'ai " + this.age + " ans. Je fais " + this.weight + " kg et je mesure " + this.size + " cm au garrot. Quand je suis content je fais " + this.bark + " !!!</div> </br><img id=\"bouledog\" src=\"" + this.photo + "\"/>"  );
}
        }

        
    }

    const michel = new Animal ("Michel" , 4 , "Jack-russel" , 5.6 , 55 , "Whhaaafff" , "Jack_russel.jpg" )
    const rentanplan = new Animal ("Rantanplan" , 10 ,"Fox-terrier", 7.4 , 75 , "Grrrrrrrrrrrrrr" , "Fox_terrier.jpg" )
    const balaise = new Animal ("Balaise", 2 , "Bouledog" , 8.6 , 89 , "Whoooouuuufffffffff" , "Bouldog.jpg" )
    let liste = [michel,rentanplan,balaise]
    liste.forEach(function(m){ m.presente()})

    $("#jack").click(function(){

        let speaknow = new SpeechSynthesisUtterance ('Je suis mignon adopter moi !')
        window.speechSynthesis.speak(speaknow);

    })

    $("#fox").click(function(){

        let speaknow = new SpeechSynthesisUtterance ('Bonjour ! Woouuff ! je suis rantanplan G 10 ans ! Je suis un fox-terrier en forme ! Adopter moi ')
        window.speechSynthesis.speak(speaknow);

    })

    $("#bouledog").click(function(){

        let speaknow = new SpeechSynthesisUtterance ('les écouter pas je suis le plus mignon ! adopter moi !')
        window.speechSynthesis.speak(speaknow);

    })
