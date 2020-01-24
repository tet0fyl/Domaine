function $id(target){
    return document.getElementById(target);
}

function $class(target){
    return document.getElementsByClassName(target);
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
