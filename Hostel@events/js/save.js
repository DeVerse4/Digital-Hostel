
// Saved Events section
const save = document.querySelector('.save span');
const events = document.querySelectorAll('.event');
const savedEvents = document.querySelector('.saved-events .table tbody'); // get el to fill

const btnClear = document.querySelector('.btn-checkout'); // clear applied events

// add to applied events
function addEvent() {
	console.log('Hello Hello');
	const e_id = this.dataset.id;
	const parent = this.parentNode;
	const eventBody = parent.parentNode;

	const title = eventBody.querySelector('.card-title').innerHTML;
	const date = parent.querySelector('.date').innerHTML;
	const category = eventBody.querySelector('.category').innerHTML;


	let event = JSON.parse(localStorage.getItem('eventsWebStore')) || [];

	const item = {
		id: e_id,
		title,
		category,
		date
	};

	let productExists = false;
	// check if a events already exist in the save
	for (let i = 0; i < event.length; i++) {
		if (event[i]['id'] === e_id) {
			productExists = true;
			break;
		}
	}

	if (!productExists) {
		event.push(item);
	}

	localStorage.setItem('eventsWebStore', JSON.stringify(event));
	save.textContent = ' ' + event.length;
}

// get from save and display on table
function populate() { // get items on page load
	let event = JSON.parse(localStorage.getItem('eventsWebStore')) || 0;

	if (event) save.textContent = event.length + ' ';

	if (!savedEvents || event == 0) return;

	event.forEach(function (p) { // fill the save events

		const el = document.createElement('tr');
		el.innerHTML = (` 
			<th>${p.id}</th>
			<td>${p.title}</td>
			<td>${p.category}</td>
			<td>${p.date}</td>
		`);
		savedEvents.appendChild(el);
	});

};

populate();

events.forEach(function (element) {
	btnAdd = element.querySelector('.save-button');
	btnAdd.addEventListener('click', addEvent)
});

function checkout(argument) {
	localStorage.removeItem('eventsWebStore');

	savedEvents.innerHTML = '';
	save.textContent = '0 ';
}

if (btnClear) {
	btnClear.addEventListener('click', checkout);
}