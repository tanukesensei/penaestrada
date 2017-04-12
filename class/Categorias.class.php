<?php

  include_once 'Carrega.class.php';

   class Categorias
   {
      private $id;
      private $categoria;
      private $bd;


      function __construct()
      {
         $this->bd = new BD();
      }

      function __destruct()
      {
        unset($this->bd);
      }

      function __get($key)
      {
        return $this->$key;
      }

      function __set($key, $value)
      {
        $this->$key = $value;
      }

      public function CreateCategorias()
      {
        $sql    = "INSERT INTO categorias (categoria) VALUES ('$this->categoria')";
        $return = pg_query($sql);
        return $return;

      }

      public function ListCategorias()
      {
         $sql       = "SELECT * FROM categorias ORDER BY id_cat DESC";
         $resultado = pg_query($sql);

         while ($registro = pg_fetch_assoc($resultado))
         {
            $object            = new Categorias();
            $object->id        = $registro["id_cat"];
            $object->categoria = $registro["categoria"];

            $return[]       = $object;
         }
         return $return;
      }

      public function DeleteCategorias()
      {
         $sql    = "DELETE FROM categorias WHERE id_cat =$this->id";
         $return = pg_query($sql);
         return $return;
      }

      public function UpdateCategorias()
      {
         $sql    = "UPDATE categorias SET categoria ='$this->categoria' WHERE id_cat =$this->id";
         $return = pg_query($sql);
         return $return;
      }

      public function EditCategorias($id = "")
      {
        $sql       = "SELECT * FROM categorias WHERE categorias.id_cat =$id ";
        $resultado = pg_query($sql);
        $return    = NULL;

        while ($registro = pg_fetch_assoc($resultado))
        {
           $object            = new Categorias();
           $object->id        = $registro["id_cat"];
           $object->categoria = $registro["categoria"];

           $return = $object;
        }
        return $return;
      }

      public function labelCategorias($categoria = "")
      {
        $sql       = "SELECT * FROM categorias";
        $resultado = pg_query($sql);
        $ln        = pg_num_rows($resultado);

        if ($ln==0)
        {
           echo "<small class='label bg-red'>ERRO</small>";
        }
        else
        {
           while ($a = pg_fetch_assoc($resultado))
           {
             $this->id        = $a['id_cat'];
             $this->categoria = $a['categoria'];


            if(in_array($this->id, $categoria))
            {
              print "<small class='label bg-blue'>{$this->categoria}</small>  ";
            }
           }
         }
      }

}
?>
