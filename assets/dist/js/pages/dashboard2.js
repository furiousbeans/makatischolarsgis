$(function viewChart() {
  const ctx = document.getElementById("linebrgy").getContext("2d");
  const xaxisLabels = [];
  const myChart = new Chart(ctx, {
    type: "pie",
    data: {
      datasets: [
        {
          color: ["rgba(255, 99, 132, 0.2)"],
          tension: 0,
          fill: true,
        },
      ],
    },
    plugins: [ChartDataSource],
    options: {
      plugins: {
        datasource: {
          url: "assets/data/brgystats.csv",
        },
      },
    },
  });
});
