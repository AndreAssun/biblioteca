let livros = {
    data:[
    {
        nomeLivro:"Capão pecado",
        autor:"Ferrez",
        categoria:"Romance",
        preco:"28.50",
        capa:"img/capas/capaopecado-capa.jpg",
    },

    {
        nomeLivro:"Padrões JavaScript",
        autor:"Jão Almeida",
        categoria:"Tecnologia",
        preco:"55.50",
        capa:"img/capas/padroesjs.jpg",
    },

    {
        nomeLivro:"Autobiografia Martin LKJ",
        autor:"Martin Luther King Jr",
        categoria:"Historia",
        preco:"30.00",
        capa:"img/capas/martinLT-biografia.jpg",
    },

    {
        nomeLivro:"A coisa",
        autor:"Stephen King",
        categoria:"Terror",
        preco:"22.50",
        capa:"./img/capas/a-coisa.jpg",
    },
    {
        nomeLivro:"A coisa",
        autor:"Stephen King",
        categoria:"Terror",
        preco:"22.50",
        capa:"./img/capas/a-coisa.jpg",
    },

    {
        nomeLivro:"Autobiografia Martin LKJ",
        autor:"Martin Luther King Jr",
        categoria:"Historia",
        preco:"30.00",
        capa:"img/capas/martinLT-biografia.jpg",
    },

    
 ],

};

for (let i of livros.data) {
    //criando cartao
    let card = document.createElement("div");
    //card tem que ter categoria e deve ficar inicialmente escondida
    card.classList.add("card-livros", i.categoria, "hide");
    //image div
    let imgContainer = document.createElement("div");
    imgContainer.classList.add("capa-container");
    //img tag
    let capa = document.createElement("img");
    capa.setAttribute("src", i.capa);
    imgContainer.appendChild(capa)
    card.appendChild(imgContainer);
    //container
    let container = document.createElement("div");
    container.classList.add("container");
    //nome livro
    let name = document.createElement("h5");
    name.classList.add("nome-livro");
    name.innerText = i.nomeLivro.toUpperCase();
    container.appendChild(name)
    //nome livro
    let autor = document.createElement("h5");
    autor.classList.add("autor-livro");
    autor.innerText = i.autor.toUpperCase();
    container.appendChild(autor)
    
    

    card.appendChild(container);

    document.getElementById("livros").appendChild(card);
}

//parâmetro passado do botão (parâmetro igual à categoria)
function filterProduct(value){
    //button de classe
    let buttons = document.querySelectorAll(".button-value");
    buttons.forEach((button) => {
        //check os innerText
        if(value.toUpperCase() == button.innerText.toUpperCase()){
            button.classList.add("active");
        } else{
            button.classList.remove("active");
        }

        
    });

    //select all cards
    let elements = document.querySelectorAll(".card-livros");
    //loop through all cards
    elements.forEach((element) => {
        //display all cards on "all" button click
        if (value == "todos") {
            element.classList.remove("hide");
        }
        else{
            //check if element contains category class
            if(element.classList.contains(value)){
               //display baseado na categoria 
               element.classList.remove("hide");   
            }  else {
                //escondendo outros elementos 
                element.classList.add("hide");
            }
        }
    });
}

//Mostrar inicialmente todos os produtos
window.onload = () => {
    filterProduct("todos");
};




