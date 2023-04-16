// => ChatBox
// const chatBox = document.getElementById('chatBox');
// chatBox.addEventListener('click', () => {
// 	chat();
// });

const category = () => {
	const key = localStorage.getItem('kategori');

	// console.log('key: ', localStorage.getItem('kategori'));
	fetch(`./src/data/${key}.json`)
		.then((response) => {
			return response.json();
		})
		.then((responseJson) => {
			const aside = document.getElementById('title-sidebar');
			responseJson.forEach((data) => (aside.innerHTML = 'Microsoft ' + data.kategori));

			let tutorial = '';
			responseJson.forEach((data) => (tutorial += showTutor(data)));
			const containerMain = document.querySelector('.dataShow');
			containerMain.innerHTML = tutorial;

			let li = '';
			responseJson.forEach((data) => (li += showSideBar(data)));
			// responseJson.forEach((data) => console.log(data));
			const ul = document.getElementById('data-sidebar');
			ul.innerHTML = li;

			const sideBarMenu = document.querySelectorAll('a');

			// => Sidebar menu
			sideBarMenu.forEach((menuLink) => {
				menuLink.addEventListener('click', function () {
					const idDiv = document.querySelectorAll('.divID');
					idDiv.forEach((idD) => {
						if (idD.id == menuLink.innerText) {
							idD.setAttribute('style', 'display:block !important');

							const logo = document.querySelector('.logo');
							logo.setAttribute('style', 'display:none !important');
						} else {
							idD.setAttribute('style', 'display:none !important');
						}
					});
				});
			});
			const idDiv = document.querySelectorAll('.divID');
			idDiv.forEach((idD) => {
				idD.setAttribute('style', 'display:none !important');
			});
		});
};

const showTutor = (data) => {
	return `
    <br/>
		<div id="${data.kode}">
            <div  id="${data.link}" class="divID">
			<h1>${data.link}</h1>
                <h4 id="judul">${data.judul}</h4>
                <img src="${data.gambar}" class="rounded mx-auto d-block img-fluid" alt="Office Tutorial">
                <p id="tutorial">${data.tutorial}</p>
            </div>
		</div>
        `;
};

const showSideBar = (data) => {
	return `
            <li><a href="#" id="${data.kode}" class="link-sidebar">${data.link}</a></li>
            `;
};

// const showTemp = () => {
// 	return `
//             <img src="./assets/logo.png" class="rounded mx-auto d-block logo img-fluid" alt="Office Tutorial">
//             `;
// };

function chat() {
	const message = `Halo Min! Saya Mau Tanya nih. `;
	const whatsapp = `https://wa.me/62895638069206?text=${message}`;
	open(whatsapp, `_blank`);
}

// document.addEventListener('DOMContentLoaded', category());
category();
