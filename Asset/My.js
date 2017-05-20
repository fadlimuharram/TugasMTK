var barChartData = {
            labels: chartX,
            datasets: [{
                type: 'bar',
                    data: chartY,
                    fill: false,
                    backgroundColor: '#71B37C',
                    borderColor: '#71B37C',
                    hoverBackgroundColor: '#71B37C',
                    hoverBorderColor: '#71B37C',
                    yAxisID: 'y-axis-1'
            }, {
                    type:'line',
                    data: chartY,
                    fill: false,
                    borderColor: '#EC932F',
                    backgroundColor: '#EC932F',
                    pointBorderColor: '#EC932F',
                    pointBackgroundColor: '#EC932F',
                    pointHoverBackgroundColor: '#EC932F',
                    pointHoverBorderColor: '#EC932F',
                    yAxisID: 'y-axis-2'
            }]
        };

        window.onload = function() {
            var ctx = document.getElementById("numerikchart").getContext("2d");
            window.myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {

                responsive: true,
                tooltips: {
                  mode: 'label'
              },
              elements: {
                line: {
                    fill: false
                }
            },
              scales: {
                xAxes: [{
                    categoryPercentage: 1,
                    barPercentage: 1,
                    display: true,
                    gridLines: {
                        display: false
                    },
                    labels: {
                        show: true,
                    }
                }],
                yAxes: [{
                    type: "linear",
                    display: true,
                    position: "left",
                    id: "y-axis-1",
                    gridLines:{
                        display: false
                    },
                    labels: {
                        show:true,

                    }
                }, {
                    type: "linear",
                    display: true,
                    position: "right",
                    id: "y-axis-2",
                    gridLines:{
                        display: false
                    },
                    labels: {
                        show:true,

                    }
                }]
            }
            }
            });
        };

$(document).ready(function() {
  $('.inputx').hide();
  $('.inputy').hide();
  $('#pilihjml').on('change', function(event) {
    event.preventDefault();
    $('#xdataID').html('');
    $('#ydataID').html('');
    $('.inputx').show();
    $('.inputy').show();
    var inputX = '<div class="col-md-1">'
                  + '<input id="xdata" name="xdata[]" placeholder="X" class="form-control input-md" required="" type="text">'
                  + '</div>';
    var inputY = '<div class="col-md-1">'
                  + '<input id="ydata" name="ydata[]" placeholder="Y" class="form-control input-md" required="" type="text">'
                  + '</div>';

    for (var i = 0; i < $('#pilihjml').val(); i++) {
      $('#xdataID').append(inputX);
      $('#ydataID').append(inputY);
    }

  });
});
