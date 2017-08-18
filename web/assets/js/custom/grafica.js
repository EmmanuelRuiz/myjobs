$(document).ready(function() {

    $.ajax({
        url: URL + '/administrar/grafica',
        type: 'POST',
        success: function(response) {
            var datos = [];
            $.each(response, function(i, item) {
                datos.push(response[i].age)
            });
            graficar(datos);
        }
    });


});

function graficar(datos) {
    //tamaño de la grafica
    var w = 500;
    var h = 300;

    var svg = d3.select('.rellenar')
        .append('svg')
        .attr("width", w)
        .attr("height", h);

    svg.selectAll("rect")
        .data(datos)
        .enter()
        .append("rect")
        .attr("x", 0)
        .attr("y", 0)
        .attr("width", 20)
        .attr("height", 100)

    .attr("x", function(d, i) {
        return i * 21 + 30;
    })

    .attr("height", function(d) {
        return d + 50;
    })

    .attr("y", function(d) {
            return h - d - 50;
        })
        .attr("fill", "SteelBlue")

    //el metodo on alimenta la lista de elementos que han alimentado al svg
    //queremos escuchar en el on el mouse over
    //para trabajar con elementos de la grafica lo debemos seleccionar

    .on("mouseover", function() {
        d3.select(this)
            .attr("fill", "tomato");
    })

    .on("mouseout", function(d, i) {
        d3.select(this)
            .attr("fill", "SteelBlue");
    });


    svg.selectAll("text")
        .data(datos)
        .enter()
        .append("text")
        .text(function(d) {
            return d;
        })
        .attr("x", function(d, i) {
            return i * 21 + 40;
        })
        .attr("y", function(d) {
            return h - d - 53;
        })
}