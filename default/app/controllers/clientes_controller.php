<?php
class clientesController extends AppController
{
    public function index( $page = 1 )
    {
        View::template('bootstraptemplate');
        $this->categoriasMenu = (new Categoria)->getCategories( $page );

    }

    public function create()
    {
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}

