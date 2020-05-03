<?php
class Categoria extends ActiveRecord {
    function getCategories($page, $ppage=10)
    {
        return $this->paginate("page: $page", "per_page: $ppage", "order: idCategoria desc");
    }
}

