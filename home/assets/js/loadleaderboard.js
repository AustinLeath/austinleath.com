$.getJSON('leaderboard.json', (data) => {
    const tableData = data.reduce((pre, curr) => {
      return pre + `<tr><td>${curr.placement}</td><td>${curr.name}</td></tr>`;
    }, '');

    $(tableData).appendTo('#leaderboard tbody');
});
