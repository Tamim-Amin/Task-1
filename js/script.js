function editUser(id){
    fetch('fetch_user.php?id=' + id)
    .then(response => response.json())
    .then(data => {
        document.getElementById('edit_id').value = data.id;
        document.getElementById('edit_first_name').value = data.first_name;
        document.getElementById('edit_last_name').value = data.last_name;
        document.getElementById('edit_dob').value = data.dob;
        document.getElementById('edit_gender').value = data.gender;
        document.getElementById('edit_email').value = data.email;
        document.getElementById('edit_phone').value = data.phone;
        document.getElementById('editModal').classList.remove('hidden');
        document.getElementById('editModal').classList.add('flex');
    });
}

function closeModal(){
    document.getElementById('editModal').classList.add('hidden');
    document.getElementById('editModal').classList.remove('flex');
}
