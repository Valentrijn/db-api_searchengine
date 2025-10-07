    
let allPokemonNames = [];
    async function fetchAllPokemonNames() {
      const response = await fetch("https://pokeapi.co/api/v2/pokemon?limit=385");
      const data = await response.json();
      allPokemonNames = data.results.map(p => p.name);
    }

    fetchAllPokemonNames();

    function checkOption() {
      const selectedValue = document.getElementById("source").value;
      if (selectedValue === "api") {
        filterPokemon();
      }
    }

    async function filterPokemon() {
      const input = document.getElementById("pokemonName").value.toLowerCase();
      const selectedValue = document.getElementById("source").value;
      const results = document.getElementById("results");
      results.innerHTML = "";

      if (selectedValue !== "api" || input.length === 0) return;

      const matches = allPokemonNames.filter(name => name.startsWith(input));

      for (const name of matches.slice(0, 10)) {
        try {
          const res = await fetch(`https://pokeapi.co/api/v2/pokemon/${name}`);
          if (!res.ok) continue;

          const data = await res.json();
          const li = document.createElement("li");
          li.textContent = data.name;

          const img = document.createElement("img");
          img.src = data.sprites.front_default;
          li.appendChild(img);

          results.appendChild(li);
          console.log(data)
        } catch (error) {
          console.error(`Failed to fetch ${name}:`, error);
        }
      }

        document.getElementById("pokemonSprite").style.display = "none";
      }

    

        


//       function checkOption() {

//       const selectedValue = document.getElementById("source").value;

//       if (selectedValue === "api") {
//         fetchData
//       }
//     }
//   async function fetchData(){

//     try{

//         const pokemonName = document.getElementById("pokemonName").value.toLowerCase();
//         const response = await fetch(`https://pokeapi.co/api/v2/pokemon/${pokemonName}`)

//         if(!response.ok){
//             throw new Error ("kon het niet krijgen");
//         }

//         const data = await response.json();
//         const pokemonSprite = data.sprites.front_default
//         const imgElement = document.getElementById("pokemonSprite");
//         document.getElementById("Pokemon").textContent = data.name;

//         imgElement.src =  pokemonSprite;
//         imgElement.style.display = "block";
        
    


//     }
//     catch(error){
//         console.error(error);
//     }
// }

    
    



console.log('hello');
console.log('adipisicing');

// fetch("https://pokeapi.co/api/v2/pokemon/slowking")
// .then(response => {

//     if(!response.ok){
//         throw new Error("niet in de lijst");
//     }
//     return response.json();
// })
// .then(data => console.log(data))
// .catch(error => console.error(error));
// fetchData();

// document.getElementById("FIRST").textContent = 'Fellow';
// document.getElementById("SECOND").textContent = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam impedit quae ducimus rerum perferendis soluta adipisci reiciendis cupiditate sed voluptatem eius et mollitia assumenda dicta, exercitationem tempora tenetur magnam nemo'
// //window.alert('this is an alert')
// //window.alert('ihadhwajod')

// function ppp(s, name){
// console.log("oke");
// console.log("oke");
// console.log("oke");
// console.log("oke");
// console.log(`nou nou ${s}`);
// console.log(`wow!!!! en ${name} `);
// }


// ppp("sssssss", 35);
// ppp(682, "leuk gedaan");

// function add(x,y){
//     let result = x * y;
//     return result;
// }

// let answer = add(14,8);
// console.log(answer);

//goed gedaan!!

/*
gvguidha
hvabhid
bhduwhahdf
buwbduah
*/