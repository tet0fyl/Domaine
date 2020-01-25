<div class="d-flex admin-option align-self-end">
    <p>...</p>
    <div class="shadow p-0 mb-3 bg-white rounded">
        <div class="d-flex m-0 p-2">
            <a href="admin-edit<?php echo $type?>-<?php echo $obj->getId() ?>" title="'modifier">&#x270E modifier</a>
        </div>
        <div class="d-flex m-0 p-2">
            <a href='admin-delete<?php echo $type?>-<?php echo $obj->getId() ?>' title="supprimer">&#x2718 supprimer</a>
        </div>
    </div>
</div>