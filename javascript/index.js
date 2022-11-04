// script pour modifier des éléments dans la page

// modifier la couleur l'icone en bas
const elementIcone = document.getElementById('tag-profile');
const couleurNoir = '#232323';

changerCouleurIcone(elementIcone);

function changerCouleurIcone(ele) {
	if (!ele) return;

	switch (ele.value) {
		case 'dansProfile':
			document.getElementById('footer-i-profile').style.color = couleurNoir;
			break;
		case 'dansAccueilDefi':
			document.getElementById('footer-i-defi').style.color = couleurNoir;
			break;
		case 'dansMessage':
			const bandeVerteDiv = document.getElementById('message-expand-div');
			document.getElementById('footer-i-message').style.color = couleurNoir;
			agrandirBande(bandeVerteDiv);
			break;

		default:
			break;
	}
}

/* pour la bande verte dans message */

function agrandirBande(ele) {
	if (!ele) return; // si pas trouvé

	ele.setAttribute('id', 'drope-bande-verte');

	/* le nom du groupe */
	let nomGroupe = document.createElement('p');
	let text = document.createTextNode('SLAM-J');
	nomGroupe.appendChild(text);
	ele.appendChild(nomGroupe);

	/* les images des membres */
	for (let i = 0; i < 3; i++) {
		// crée 3 bulles
		let bulle = document.createElement('img');
		bulle.src = './images/emptypfp.png';
		ele.appendChild(bulle);
	}

	/* Bulle pour les autres */
	let rondAutre = document.createElement('div');
	let pRondAutre = document.createElement('p');
	let troisPoint = document.createTextNode('...');
	rondAutre.appendChild(pRondAutre);
	pRondAutre.appendChild(troisPoint);
	ele.appendChild(rondAutre);

	console.log('la bande verte est complète!');
}
