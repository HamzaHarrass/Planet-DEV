
   var modal = document.getElementById("StyleModal");
     modal.classList.add("style-modal");



   function edit(e) {
    // console.log(e);
    var BtnEdit = document.getElementById("update_user")
    var BtnSave = document.getElementById("save_user")
    BtnEdit.style.display = "block";
    BtnSave.style.display = "none";
     var id = e.getAttribute('id');
    //  console.log(id);
     var xhr = new XMLHttpRequest();
     var title = document.getElementById('title').value;
     var author = document.getElementById('author').value;
     var content = document.getElementById('content').value;
     var data = new FormData();
     data.append('id', id);
     var xhr = new XMLHttpRequest();
     xhr.open('POST', '/Planet.DEV/script/data.php', true);
     xhr.send(data);
     xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var data = JSON.parse(xhr.responseText);
            // alert('Data updated successfully');
            document.getElementById('id').value = data.id;
            document.getElementById('title').value = data.name;
            document.getElementById('author').value = data.author;
            document.getElementById('content').value = data.content;
        }
    }
}

function hideBtnEdit() {
    var BtnEdit = document.getElementById("update_user")
    var BtnSave = document.getElementById("save_user")
    BtnEdit.style.display = "none";
    BtnSave.style.display = "block";
}   

function remove(e){
    let id = e.getAttribute('id');
    let xhr = new XMLHttpRequest();
    let data = new FormData();
    data.append('id', id);
    console.log(data)
    xhr.open('POST', '/Planet.DEV/script/delete.php', true);
    xhr.send(data);
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            const list = document.getElementById("alert");
            list.innerHTML = `
            <div class="alert alert-success alert-dismissible fade show">
            <strong>Success!</strong>
            deleted successfully.
            <span><button type="button" class="btn-close" data-bs-dismiss="alert"></span>
            </div>
            `;
            e.parentElement.parentElement.remove();
            // alert('Data deleted successfully');
        }
    }

}