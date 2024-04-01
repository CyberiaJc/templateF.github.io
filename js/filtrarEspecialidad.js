let grid = document.querySelector(".products");
let filterInput = document.getElementById("filterInput");




fetch('./Database/db.json')
    .then(res => res.json())
    .then(json =>{

        // Itera los productos
        for (let value of json){
            addElement(grid, value)
        }
        
    });


// Escucha el evento al presionar la barra buscadora
filterInput.addEventListener('keyup', filterProducts);

// funcion callback
function filterProducts(){
    let filterValue = filterInput.value.toUpperCase();
    let item = grid.querySelectorAll('.item')


    for (let i = 0; i < item.length; i++){
        let span = item[i].querySelector('.title');

        if(span.innerHTML.toUpperCase().indexOf(filterValue) > -1){
            item[i].style.display = "initial";
        }else{
            item[i].style.display = "none";
        }

    }
}


function addElement(appendIn, value) {
    let div = document.createElement('div');
    div.className = "item items2 justify-self-center "; 

    let { pulgadas, title, description, enlace, category, boton } = value;

    div.innerHTML = `
    <div class="filteritems">
        <div class="box Caja">

            <div class="img-box">
            <h3 class="colorPulg">${pulgadas}</h5>
            </div>

            <div class="text-center py-3 font-poppins margins">
                <div class="detail-box title">
                    <h5>${title}</h5>
                    <p class="filtertext">${description}</p>
                </div>
                <div class="btn-box">
                    <a ${enlace}>${boton}</a>
                </div>
            </div>

        </div>
    </div>
    `;

    appendIn.appendChild(div);
}