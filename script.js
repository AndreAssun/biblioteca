let products = {
    data: [
      {
        productName: "Malcom X",
        autor:"Luiz Carlos Santos",
        category: "Historia",
        price: "30",
        image: "/img/capas/MALCONX.jpg",
  
      },
      
      {
        productName: "Capão pecado",
        autor:"Ferrez",
        category: "Romance",
        price: "30",
        image: "/img/capas/capaopecado-capa.jpg",
  
      },
      {
        productName:"Padrões JavaScript",
        autor:"Jão Almeida",
        category: "Tecnologia",
        price: "49",
        image: "/img/capas/padroesjs.jpg",
  
      },
      {
        productName:"Introdução á linguagem SQL",
        autor:"Thomas Nield",
        category: "Tecnologia",
        price: "55",
        image: "/img/capas/sql.jpg",
  
      },
      {
        productName:"Banco de dados",
        autor:"Willian Pereira Alves",
        category: "Tecnologia",
        price: "49",
        image: "/img/capas/bancodados.jpg",
  
      },
      {
        productName:"Aprendendo Node",
        autor:"Shelley Powers",
        category: "Tecnologia",
        price: "49",
        image: "/img/capas/node.jpg",
  
      },
      {
        productName:"Introdução á programação Python",
        autor:"Nilo Ney",
        category: "Tecnologia",
        price: "49",
        image: "/img/capas/phyton.jpg",
  
      },
      {
        productName:"Autobiografia Martin LKJ",
        autor:"Martin Luther King Jr",
        category: "Historia",
        price: "99",
        image: "/img/capas/martinLT-biografia.jpg",
      },
      {
        productName:"A coisa",
        autor:"Stephen King",
        category:"Terror",
        price: "29",
        image: "/img/capas/a-coisa.jpg",
  
        
      },
      {
        productName: "Dono do Morro",
        autor:"Caco Barcellos",
        category: "Romance",
        price: "30",
        image: "/img/capas/donodomorro.jpg",
  
      },
      {
        productName: "Romeu e Julieta",
        autor:"William Shakespeare",
        category: "Romance",
        price: "30",
        image: "/img/capas/romeu-julieta.jpg",
  
      },
      {
        productName: "A culpa é das estrelas",
        autor:"Harry Jon",
        category: "Romance",
        price: "30",
        image: "/img/capas/culpadasestrelas.jpg",
  
      },
      {
        productName: "O iluminado",
        autor:"Stephen King",
        category: "Terror",
        price: "30",
        image: "/img/capas/o-iluminado.jpg",
  
      },
      {
        productName: "The Amityville Horror",
        autor:"Stephen King",
        category: "Terror",
        price: "30",
        image: "/img/capas/amityville.jpg",
  
      },
      {
        productName: "Cemitério maldito",
        autor:"Stephen King",
        category: "Terror",
        price: "30",
        image: "/img/capas/cemiterio.jpg",
  
      },
      {
        productName: "Luiz Gama",
        autor:"Luiz Carlos Santos",
        category: "Historia",
        price: "30",
        image: "/img/capas/luizgama.jpg",
  
      },
      
    ],
  };
  
 for (let i of products.data) {
    //Create Card
    let card = document.createElement("div");
    
    //Card should have category and should stay hidden initially
    card.classList.add("card-livros", i.category, "hide");
    
    // Create an anchor element
    let anchor = document.createElement("a");
    anchor.setAttribute("href", i.link); // Set the href attribute to the link from the data

    //image div
    let imgContainer = document.createElement("div");
    imgContainer.classList.add("capa-container");
    //img tag
    let image = document.createElement("img");
    image.setAttribute("src", i.image);
    imgContainer.appendChild(image);
    anchor.appendChild(imgContainer);

    //container
    let container = document.createElement("div");
    container.classList.add("container");
    //product name
    let name = document.createElement("h5");
    name.classList.add("product-name");
    name.innerText = i.productName;
    container.appendChild(name);

    //autor name
    let autor = document.createElement("h3");
    autor.classList.add("autor");
    autor.innerText = i.autor;
    container.appendChild(autor);
    
    // Append the container to the anchor instead of the card
    anchor.appendChild(container);
    
    // Append the anchor to the card
    card.appendChild(anchor);
    
    document.getElementById("products").appendChild(card);
}
  
  //parameter passed from button (Parameter same as category)
  function filterProduct(value) {
    //Button class code
    let buttons = document.querySelectorAll(".button-value");
    buttons.forEach((button) => {
      //check if value equals innerText
      if (value.toUpperCase() == button.innerText.toUpperCase()) {
        button.classList.add("active");
      } else {
        button.classList.remove("active");
      }
    });
  
    //select all cards
    let elements = document.querySelectorAll(".card-livros");
    //loop through all cards
    elements.forEach((element) => {
      //display all cards on 'all' button click
      if (value == "todos") {
        element.classList.remove("hide");
      } else {
        //Check if element contains category class
        if (element.classList.contains(value)) {
          //display element based on category
          element.classList.remove("hide");
        } else {
          //hide other elements
          element.classList.add("hide");
        }
      }
    });
  }
  
  // Search button click
document.getElementById("search").addEventListener("click", () => {
  // Initialization
  let searchInput = document.getElementById("search-input").value.toLowerCase();
  let elements = document.querySelectorAll(".product-name");
  let cards = document.querySelectorAll(".card-livros");

  // Loop through all elements
  elements.forEach((element, index) => {
    // Check if text includes the search value (case-insensitive and partial match)
    if (element.innerText.toLowerCase().includes(searchInput)) {
      // Display matching card
      cards[index].classList.remove("hide");
    } else {
      // Hide others
      cards[index].classList.add("hide");
    }
  });
});
  
 
//Mostrar inicialmente todos os produtos
window.onload = () => {
    filterProduct("todos");
};