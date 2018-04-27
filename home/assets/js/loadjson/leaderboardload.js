$.getJSON('leaderboard.json', (data) => {
    const tableData = data.reduce((pre, curr) => {
      return pre + `<tr><td>${curr.name}</td><td>${curr.placement}</td></tr>`;
    }, '');

    $(tableData).appendTo('#leaderboard tbody');
});
