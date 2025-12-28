  const ctx = document.getElementById('myChart');
  let cMurid = Number(document.getElementById('cMurid').innerText); 
  let muridJelek = cMurid / 2.3;
  let muridCakep = cMurid / 2;
  let muridMiskin = cMurid / 2.3;
  let muridKaya = cMurid / 3;
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Mahasiswa jelek', 'Mahasiswa Cakep', 'Mahasiswa miskin', 'Mahasiswa kaya'],
      datasets: [{
        label: '# of Votes',
        data: [muridJelek, muridCakep , muridMiskin, muridKaya],
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
