function dividirNumeros() {
    let columnas = [];
    let inicio = 1;

    for (let letra = "B".charCodeAt(0); letra <= "O".charCodeAt(0); letra++) {
        let columna = [];
        for (let i = inicio; i <= inicio + 14; i++) {
            columna.push(i);
        }
        columnas.push(columna);
        inicio += 15;
    }
    return columnas;
}


function crearCeldas() {
    let numerosPorColumna = dividirNumeros();

    for (let i = 0; i < 5; i++) {
        let columna = numerosPorColumna[i];
        let filaId = "fila" + (i + 1);
        let filaElement = document.getElementById(filaId);

        for (let j = 0; j < columna.length; j++) {
            let cell = document.createElement("td");
            cell.id = `n${columna[j]}`;
            cell.textContent = columna[j];
            filaElement.appendChild(cell);
        }
    }
}


let generados = [];
let mostrables = [];

function generarValor() {
    let min = Math.ceil(1);
    let max = Math.floor(76);
    let letras = ["B", "I", "N", "G", "O"];

    while (true) {
        let valor = Math.floor(Math.random() * (max - min) + min);
        if (!generados.includes(valor)) {
            let cell = document.getElementById(`n${valor}`);
            let color = setColor(setFormato(valor, letras)[0]);
            cell.style.backgroundColor = color;
            cell.style.color = "black";
            generados.push(valor);
            if (mostrables.length >= 5) {
                mostrables.shift();
            }
            mostrables.push(setFormato(valor, letras));
            return setFormato(valor, letras);
        }
        if (generados.length === 75) {
            stopGen();
            Swal.fire("Ya se han jugado todos los numeros");
            return;
        }
    }
}


function setFormato(valor, letras) {
    if (valor < 16) {
        return `${letras[0]}${valor}`;
    } else if (valor >= 16 && valor <= 30) {
        return `${letras[1]}${valor}`;
    } else if (valor >= 31 && valor <= 45) {
        return `${letras[2]}${valor}`;
    } else if (valor >= 46 && valor <= 60) {
        return `${letras[3]}${valor}`;
    } else if (valor >= 61 && valor <= 75) {
        return `${letras[4]}${valor}`;
    }
}


// funcion para mostrar los valores =============================================================================================================================
function mostrarValor() {
    let texto = document.getElementById("valorGenerado");
    texto.textContent = generarValor();
    document.getElementById("shadow").style.background = "white";
    document.getElementById("shadow").style.boxShadow = " #f4eded;";
    document.getElementById("vlgnd").style.background = setColor(texto.textContent[0], 2);
    valores();
}


// funcion para mostrar los valores =============================================================================================================================
let interval;
function autoGen() {
    if (!interval) {
        let btn = document.getElementById("gen");
        btn.style.backgroundColor = "#2c0590";
        interval = setInterval(() => {
            if (generados.length === 75) {
                clearInterval(interval);
                interval = null;
            }
            mostrarValor();
        }, 2000);
    }
}

function stopGen() {
    let btn = document.getElementById("gen");
    btn.style.backgroundColor = "";
    clearInterval(interval);
    interval = null;
}


// alerta==========================================================================================================================================================
function confirmReset() {
    Swal.fire({
        title: "Estas seguro?",
        text: "No podras revertir esta accion!",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Si, Reinicialo!",
        cancelButtonText: "Cancelar",
    }).then((result) => {
        if (result.isConfirmed) {
            reset();
            Swal.fire("Reiniciado!", "Tu juego ha sido reiniciado!.");
        }
    });
}


// fin de la alerta=================================================================================================================================================
function reset() {
    for (let x = 0; x < generados.length; x++) {
        let cell = document.getElementById(`n${generados[x]}`);
        cell.style.backgroundColor = "transparent";
        cell.style.color = "rgb(252, 247, 189)";
    }
    document.getElementById("shadow").style.background = "transparent";
    document.getElementById("shadow").style.boxShadow = "transparent";
    document.getElementById("vlgnd").style.background = "transparent";

    let valor = document.getElementById("valorGenerado");
    let mostrable = document.getElementById("mostrar");
    mostrable.innerHTML = null;
    valor.textContent = null;
    generados = [];
    mostrables = [];
}


// valores animados====================================================
function valores() {
    let mostrable = document.getElementById("mostrar");
    mostrable.innerHTML = null;
    for (let x = 0; x < mostrables.length; x++) {
        let div = document.createElement("div");
        let color = setColor(mostrables[x][0], 1);
        div.style.background = color;
        div.textContent = mostrables[x];
        mostrable.appendChild(div);
    }
}


// Funcion para los colores ==============================================================
function setColor(letra, type) {
    let colores = {
        1: {
            // Colores para las pelostas rodantes
            B: "radial-gradient(circle at 0 0, rgb(252,177,177), rgb(255,0,0),rgb(20,0,0))",
            I: "radial-gradient(circle at 0 0,rgb(255,255,190),rgb(178,175,5),rgb(40,40,0))",
            N: "radial-gradient(circle at 0 0,rgb(255,255,255),green,rgb(0,31,0))",
            G: "radial-gradient(circle at 0 0,rgb(255,209,123),orange,rgb(60,39,0))",
            O: "radial-gradient(circle at 0 0,rgb(168,168,255),blue,rgb(1,1,59))",
        },
        2: {
            //Colores para la pelota que salta
            B: "radial-gradient(circle at 0 0, rgb(252,177,177), rgb(255,0,0),rgb(20,0,0))",
            I: "radial-gradient(circle at 0 0,rgb(255,255,190),rgb(178,175,5),rgb(40,40,0))",
            N: "radial-gradient(circle at 0 0,rgb(255,255,255),green,rgb(0,31,0))",
            G: "radial-gradient(circle at 0 0,rgb(255,209,123),orange,rgb(60,39,0))",
            O: "radial-gradient(circle at 0 0,rgb(168,168,255),blue,rgb(1,1,59))",
        },
        default: {
            //Colores de la tabla
            B: "red",
            I: "yellow",
            N: "green",
            G: "orange",
            O: "blue",
        },
    };
    return (colores[type] || colores.default)[letra];
}


// colores =================================================
function targetCells() {
    let div = document.getElementById("patron");
    div.innerHTML = null;
    for (let i = 0; i < 5; i++) {
        let row = document.createElement("tr");
        for (let j = 0; j < 5; j++) {
            let cell = document.createElement("td");
            cell.id = `c${i}${j}`;
            cell.style.width = "28px";
            cell.style.height = "28px";
            cell.style.border = "2px solid green";
            // cell.style.padding = "8px";
            if (i === 2 && j === 2) {
                cell.style.backgroundColor = "green";
            } else {
                cell.style.backgroundColor = "orange";
                cell.onclick = cambiarColor.bind(null, cell);
                cell.onmouseover = function () {
                    this.style.cursor = "pointer";
                    this.style.transition = "background-color 0.3s";
                };
            }
            row.appendChild(cell);
        }
        div.appendChild(row);
    }
}


function cambiarColor(celda) {
    if (celda.style.backgroundColor === "green") {
        celda.style.backgroundColor = "orange";
    } else {
        celda.style.backgroundColor = "green";
    }
}


function clearCells() {
    for (let i = 0; i < 5; i++) {
        for (let j = 0; j < 5; j++) {
            cell = document.getElementById(`c${i}${j}`);
            cell.style.backgroundColor = "orange";
            if (i === 2 && j === 2) {
                cell.style.background = "green";
            }
        }
    }
}


window.onload = () => {
    crearCeldas(), targetCells();
};
