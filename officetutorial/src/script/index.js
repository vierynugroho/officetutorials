// => ChatBox
const chatBox = document.getElementById('chatBox');
chatBox.addEventListener('click', () => {
	chat();
});

function chat() {
	const message = `Halo Min! Saya Mau Tanya nih. `;
	const whatsapp = `https://wa.me/62895638069206?text=${message}`;
	open(whatsapp, `_blank`);
}

const btnSearch = document.getElementById('btn-search');

btnSearch.addEventListener('click', Searching);

function Searching() {
	const searchValue = document.getElementById('search').value;
	const lowerValue = searchValue.toLowerCase();
	const modalTitle = document.getElementById('exampleModalLabel');
	modalTitle.innerHTML = ' Office Tutorials | ' + searchValue;
	fetch(`./src/data/alldata.json`)
		.then((response) => {
			return response.json();
		})
		.then((responseJson) => {
			responseJson.forEach((data) => {
				const data_search = data.link.toLowerCase();
				const modal_body = document.querySelector('#isi-modal-body');

				const closeButton = document.querySelector('.btn-close');
				closeButton.addEventListener('click', function () {
					modal_body.innerHTML = ``;
				});
				const closeButton2 = document.querySelector('.btn-close2');
				closeButton2.addEventListener('click', function () {
					modal_body.innerHTML = ``;
				});

				const link = document.querySelector('#isi-modal-body');
				link.setAttribute('style', 'display:block !important');

				const body = document.querySelector('.data-modal');
				body.setAttribute('style', 'display:none !important');

				if (data_search.indexOf(lowerValue) != -1) {
					console.log(data_search.indexOf(lowerValue));
					const modal_body = document.querySelector('#isi-modal-body');
					modal_body.innerHTML += showLinkModal(data);
				} else {
					// code...
					// 	modal_body.innerHTML = ` <img src="./assets/cari_tutor.png" class="rounded mx-auto d-block img-fluid  logo-img"
					// alt="Office Tutorial" style="width: 70%; height:70%"> <br/> <h4 align="center">${lowerValue} Tidak Ditemukan</h4>`;
				}

				let tutorial = '';
				responseJson.forEach((data) => (tutorial += showDataModal(data)));
				const dataBody = document.querySelector('.data-modal');
				dataBody.innerHTML = tutorial;
			});

			// menangkap value li a hasil search
			const resultSearch = document.querySelectorAll('.link-sidebar');
			resultSearch.forEach((result) => {
				// console.log(result);
				result.addEventListener('click', function () {
					// console.log('Klik: ' + result.textContent);
					// value
					const idDiv = document.querySelectorAll('.divID');

					idDiv.forEach((idD) => {
						// console.log('IDd:', idD.id);
						console.log(idD.id);
						if (idD.id == result.textContent) {
							idD.setAttribute('style', 'display:block !important; position:absolute; top:0');

							const modal_body = document.querySelector('#isi-modal-body');
							modal_body.setAttribute('style', 'display:none !important');
							const body = document.querySelector('.data-modal');
							body.setAttribute('style', 'display:block !important');
						} else {
							idD.setAttribute('style', 'display:none !important');
						}
					});
				});
			});
		});
}

const showLinkModal = (data) => {
	return `
 <li id="resultSearch"><a href="#" class="link-sidebar">${data.link}</a></li>
 </div>
`;
};

const showDataModal = (data) => {
	return `
    <br/>

            <div  id="${data.link}" class="divID">
			<h1>${data.link}</h1>
                <h4 id="judul">${data.judul}</h4>
                <img src="${data.gambar}" class="rounded mx-auto d-block img-fluid" alt="Office Tutorial">
                <p id="tutorial">${data.tutorial}</p>
            </div>
		
        `;
};
