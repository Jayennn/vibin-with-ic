const startTime = () => {
    const now = new Date();
    var jam = now.getHours();
    var menit = now.getMinutes();
    var detik = now.getSeconds();

    menit = checkTime(menit);
    detik = checkTime(detik);
    document.getElementById("clock").innerHTML =
        jam + ":" + menit + ":" + detik;
    var time = setTimeout(startTime, 1000);

    console.log(jam);
}

const checkTime = (i) => {
    if (i < 10) {
        i = "0" + i;
    }
    return i
}


