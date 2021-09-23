
    function Person(lenom, lage) {
        this.nom = lenom ;
        this.age = lage ;
        this.presente = function (lang) {

            if ( lang == "fr"){
            console.log("bonjour , je suis " + this.nom + " et j'ai " + this.age + " ans.");
            }
            if (lang == "us"){

            console.log("Hi , my name is " + this.nom + " and i'm " + this.age + " years old");
            }
        }

        
    }

    const jam = new Person ("Jam" , 50)
    const joni = new Person ("Joni" , 45)
    const marco = new Person ("Marco", 16)
    let liste = [jam,joni,marco]
    liste.forEach(function(m){ m.presente('fr')})
    liste.forEach(function(m){ m.presente('us')})

    
