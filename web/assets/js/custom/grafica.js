$(document).ready(function() {
	console.log("dfks");
    $.ajax({
        url: URL + '/administrar/grafica',
        type: 'POST',
        success: function(response) {
            var datos = [];
            $.each(response, function(i, item) {
                datos.push(response[i].age)
            });
			console.log("fl,");
            graficar(response);
        }
    });

	function graficar(response) {
		console.log(response);
        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Rango');
        data.addColumn('number', 'Total');
        data.addRows(response);

        // Set chart options
        var options = {'title':'How Much Pizza I Ate Last Night',
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
});
