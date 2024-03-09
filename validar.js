function validarFormulario(){
    var id = document.getElementById('id').value;
    var name = document.getElementById('name').value;
    var pass = document.getElementById('pass').value;
    var mail = document.getElementById('mail').value;
    var vtype = document.getElementById('type').value;
    var coments = document.getElementById('coments').value;

    if(id == null && name == "" && pass == ""  && mail == "" && vtype == "" && coments == ""){
        alert('PORFAVOR LLENE TODOS LOS CAMPOS');
    }
    this.submit();
}