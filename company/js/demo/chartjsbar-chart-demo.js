new Chart(document.getElementById("doughnut-chart1"), {
    type: 'doughnut',
    data: {
      labels: ["جدة", "الرياض",  "  مكة", " الدمام"],
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: ["#a3e1d4", "#dedede", "#b5b8cf", "#00bcd496"],
          data: [2478,5267,734, 3232]
        }
      ]
    },
    options: {
      title: {
        display: true,
      }
    }
});