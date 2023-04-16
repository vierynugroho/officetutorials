<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TESTING</title>

    <script>
    fetch(`./src/data/teams.json`)
        .then(response => {
            return response.json();
        })
        .then(responseJson => {
            let testing = "";
            let tabels = "";
            responseJson.forEach((data) => (testing += showTutor(data)));
            responseJson.forEach((data) => (tabels += showSideBar(data)));
            responseJson.forEach((data) => (
                console.log(data)
            ));
            const tabel = document.getElementById('table')
            const tes = document.getElementById('tes');
            tabel.innerHTML = tabels;
            tes.innerHTML = testing;
        });


    const showSideBar = (data) => {
        return `
            <td>${data.link}</td>
            `;
    };

    const showTutor = (data) => {
        return `
            <h4 id="judul">${data.judul}</h4>
            <img id="gambar" src="${data.gambar}" alt="gambar tutorial">
            <p id="tutorial">${data.tutorial}</p>
        `
    };
    </script>
</head>

<body>
    <h1 align="center">TES JSON TUTORIAL</h1>
    <div id="tes"></div>
    <div class="tabel">
        <h2 align="center">SIDEBAR</h2>
        <table border="1">
            <tr id="table"></tr>
        </table>
    </div>
</body>

</html>