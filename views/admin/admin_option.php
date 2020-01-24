<div class="d-flex admin-option" style="flex-direction: column; width:30px">
    <p>...</p>
    <div>
        <div class="d-flex">
            <a href="admin-edit<?php echo $type?>-<?php echo $obj->getId() ?>" title="'modifier">&#x270E modifier</a>
        </div>
        <div class="d-flex">
            <a href='admin-delete<?php echo $type?>-<?php echo $obj->getId() ?>' title="supprimer">&#x2718 supprimer</a>
        </div>
    </div>
</div>