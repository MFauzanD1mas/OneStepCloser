function calculateWR() {
    var match = document.getElementById("match").value;
    var wr = document.getElementById("wr").value;
    var target = document.getElementById("target").value;

    if (match === "" || wr === "" || target === "") {
      document.getElementById("result").textContent = "Silahkan isi semua kolom";
      return;
    }

    var win = Math.round((wr / 100) * match);
    var lose = match - win;
    var winNeeded = Math.round((target / 100) * match) - win;

    if (winNeeded < 0) {
      document.getElementById("result").textContent = "Anda sudah mencapai WR yang diinginkan!";
    } else {
      document.getElementById("result").textContent = "Anda membutuhkan " + winNeeded + " kemenangan lagi untuk mencapai WR " + target + "%";
    }
  }