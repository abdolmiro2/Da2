new Chart(document.getElementById("doughnut-chart"), {
    type: 'doughnut',
    data: {
      labels: ["مطعم نيفارتيتى", "مستشفى الرجاء",  "كافية رمسيس", "مركز الامل للتجميل",  "مركز التوحيد للتجميل"],
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: ["#a3e1d4", "#dedede", "#b5b8cf", "#69e68b","#a4a3e1"],
          data: [2478,5267,734, 400, 500 ]
        }
      ]
    },
    options: {
      title: {
        display: true,
      }
    }
});