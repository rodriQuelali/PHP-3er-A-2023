const URL = "http://localhost/php-3ero-24/07-api/" 

const listPersona = ()=>{
    fetch(URL)
      .then(response => response.json())
      .then(json => {
        //console.log(json)
        let cur = "";
            json.forEach(element => {
                cur += `<tr>
                <td>${element.nombre}</td>
                <td>${element.telefono}</td>
                <td>${element.direccion}</td>
                <td><Button>Editar</Button> <button>eliminar</button></td>
              </tr>`;
                
            });

            document.getElementById("listPer").innerHTML = cur
            

        })
}

listPersona();

const tbn = document.getElementById("btnGuar");
tbn.onclick = () => savePersona()
const savePersona = ()=>{
    console.log(document.getElementById("txtNom").value);
    fetch(URL, {method: "POST", body: data})
      .then(response => response.json())
      .then(json => {
        //console.log(json)
        let cur = "";
            json.forEach(element => {
                cur += `<tr>
                <td>${element.nombre}</td>
                <td>${element.telefono}</td>
                <td>${element.direccion}</td>
                <td><Button>Editar</Button> <button>eliminar</button></td>
              </tr>`;
                
            });

            document.getElementById("listPer").innerHTML = cur
            

        })
}
