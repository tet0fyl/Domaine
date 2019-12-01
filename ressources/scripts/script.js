function $id(target){
    return document.getElementById(target);
}

if($id('addForm')){
    $id('addForm').getElementsByTagName('button')[0].onclick = function(e){
        e.target.style.display = "none";
        $id('addForm').getElementsByTagName('form')[0].style.display = "block"
    }
    $id('addForm').getElementsByTagName('button')[1].onclick = function(e){
        $id('addForm').getElementsByTagName('button')[0].display = "block";
        $id('addForm').getElementsByTagName('form')[0].style.display = "none"
    }
}