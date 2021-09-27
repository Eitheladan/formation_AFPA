let person = { name: "jhon" , lastname:"smith" , age:24}

for ( let property in person){

    console.log(`console.log ${property} : $ {person[property]}`)
}

let num = 3

for (let i of num){

    console.log("Hello world !");
}


let tab = [3,4,5]

tab.forEach(function(elementCourant, index){

    console.log(index +":" +  elementCourant);
})

