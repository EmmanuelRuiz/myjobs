/*
 $(document).ready(function () {
    var respuesta;
    $.ajax({
        url: URL + '/administrar/grafica',
        type: 'POST',
        
        success: function (response) {
            respuesta = response;
            google.charts.load('current', {'packages': ['corechart']});
            google.charts.setOnLoadCallback(drawChart);
        }

    });
    function drawChart() {
        console.log(respuesta);
        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Rango');
        data.addColumn('number', 'Total');
        data.addRows([
          ['Mushrooms', 3],
          ['Onions', 1],
          ['Olives', 1],
          ['Zucchini', 1],
          ['Pepperoni', 2]
        ]);


        // Set chart options
        var options = {'title': 'How Much Pizza I Ate Last Night',
            'width': 400,
            'height': 300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }
});*/
