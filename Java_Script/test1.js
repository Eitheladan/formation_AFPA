let journal = [
    {
        titre: "titre1" , 
        events: ["work","touchef tree","pizza","running","television"],
    },
    {
        titre: "titre2" , 
        events: ["work","ice cream","cauliflower","lasagna","touched tree","bruched teeth"],
    },
    {
        titre: "titre3" , 
        events: ["weekend","cycling","break","peanuts","beer"],
    },
]


/* parcourir cet objet avec la fonction forEach et crée une page html avec document.write*/


journal.forEach (function(journal){

    document.write(journal)
})