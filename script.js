
// Receiver Form Submit
const receiverForm = document.getElementById('receiverForm');
if (receiverForm) {
  receiverForm.addEventListener('submit', async (e) => {
    e.preventDefault();
    const receiver = {
      name: document.getElementById('rname').value,
      age: document.getElementById('rage').value,
      blood_group: document.getElementById('rblood_group').value,
      medical_conditions: document.getElementById('rmedical_conditions').value,
      contact: document.getElementById('rcontact').value
    };
    await fetch('/add-receiver', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify(receiver)
    });
    alert('Receiver Registered Successfully');
    receiverForm.reset();
  });
}

// View Donors
const donorList = document.getElementById('donorList');
if (donorList) {
  fetch('/donor')
    .then(response => response.json())
    .then(data => {
      data.forEach(donor => {
        donorList.innerHTML += `<p><b>${donor.name}</b> - ${donor.blood_group} - ${donor.contact}</p>`;
      });
    });
}
