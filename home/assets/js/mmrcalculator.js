(function () {
  function calculateRankGoal(mmr, elo, goal) {
    mmr = parseFloat(mmr);
    elo = parseFloat(elo);
    goal = parseFloat(goal);
    return ((goal - mmr) / elo);
  }

  var rankGoal = document.getElementById("rankGoal");
  if (rankGoal) {
    rankGoal.onsubmit = function () {
    document.getElementById("result").innerHTML = calculateRankGoal(this.mmr.value, this.elo.value, this.goal.value);
    return false;
    };
  }
  if ( calculateRankGoal(this.mmr.value, this.elo.value, this.goal.value) > 0) {
       document.getElementById("wl").innerHTML = "you need to win";
  } else if ( calculateRankGoal(this.mmr.value, this.elo.value, this.goal.value) < 0) {
       document.getElementById("wl").innerHTML = "you need to lose";
  } else {
       document.getElementById("wl").innerHTML = "you don't need to win or lose";
  }
}());
//<script>
//(function () {
//  function calculateRankGoal(mmr, elo, goal) {
//    mmr = parseFloat(mmr);
//    elo = parseFloat(elo);
//    goal = parseFloat(goal);
//    return ((goal - mmr) / elo);
//  }
//
//  var rankGoal = document.getElementById("rankGoal");
//  if (rankGoal) {
//    rankGoal.onsubmit = function () {
//      document.getElementById("result").innerHTML = calculateRankGoal(this.mmr.value, this.elo.value, this.goal.value);
//      return false;
//    };
//  }
// }());
// </script>
