  const ctx = document.getElementById('myChart');
  let cMurid = Number(document.getElementById('cMurid').innerText); 
  let muridCakep = cMurid / 2;
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Mahasiswa jelek', 'Mahasiswa Cakep', 'Mahasiswa miskin', 'Mahasiswa kaya'],
      datasets: [{
        label: '# of Votes',
        data: [cMurid, muridCakep , 20, 4],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
