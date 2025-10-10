// assets/js/charts.js

document.addEventListener('DOMContentLoaded', () => {
  console.log('Chart.js ready - initialization placeholder');
});


// assets/js/charts.js

document.addEventListener('DOMContentLoaded', () => {
  const chartPresupuesto = document.getElementById('chartPresupuesto');
  if (chartPresupuesto) {
    const labels = JSON.parse(chartPresupuesto.dataset.labels);
    const data = JSON.parse(chartPresupuesto.dataset.data);

    new Chart(chartPresupuesto, {
      type: 'pie', // Gráfico circular
      data: {
        labels: labels,
        datasets: [{
          data: data,
          backgroundColor: ["#60a5fa","#34d399","#fbbf24"]
        }]
      },
      options: {
        plugins: {
          tooltip: {
            callbacks: {
              label: function(context) {
                return context.label + ": " + context.parsed + "%";
              }
            }
          },
          legend: {
            position: 'bottom'
          }
        }
      }
    });
  }
});
