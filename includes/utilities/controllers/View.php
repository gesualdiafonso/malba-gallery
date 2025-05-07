<?php

class View {
    
    private $name;
    private $title;
    private $description;

    /**
     * Valida el identificador de una vista y devuelve un objeto con los datos  
     * @param ?string $views el identificador de la vista, o null
     * 
     * @return Views un array con los datos de la vista, o null si no se encuentra
     */

    public static function validate_views(?string $identifier){

        $JSON = file_get_contents('./includes/utilities/data/views.json');
        $validate = json_decode($JSON);

        // echo "<pre>";
        // print_r($validate);
        // echo "</pre>";

        foreach( $validate as $view) {
            if($view->name == $identifier){
                
                $viewObject = new self();
                $viewObject->name = $view->name;
                $viewObject->title = $view->title;
                $viewObject->description = $view->description;

                return $viewObject;
            }
        }
        $notFound = new self();

        $notFound->name = "404";
        $notFound->title = "Not Found";
        $notFound->description = "Not Found";


        return $notFound;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}
?>