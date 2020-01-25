function $id(target){
    return document.getElementById(target);
}

function $class(target){
    return document.getElementsByClassName(target);
}

function $query(target){
    return document.querySelector(target);
}

if($class('displayIfCheckBox')[0]){
    $class('displayIfCheckBox')[0].oninput = function(e){
        if($class('displayIfCheckBox')[1].style.display === 'block'){
            $class('displayIfCheckBox')[1].style.display = "none";
        } else {
            $class('displayIfCheckBox')[1].style.display = "block";
        }
    }
}
if($query('#adminDisplayForm')){
    $query('#adminDisplayForm > button').onclick = function(e){
        if($query('#adminDisplayForm > form').style.display === 'block'){
            $query('#adminDisplayForm > form').style.display = "none";
            e.target.textContent = 'Ajouter'
        } else {
            $query('#adminDisplayForm > form').style.display = "block";
            e.target.textContent = 'Retour'
        }
    }
}

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#renderImg').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#imgInp").change(function() {
    readURL(this);
});