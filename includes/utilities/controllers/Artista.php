<?php
class Artista {
    private $id;
    private $name;
    private $title;
    private $biografia;
    private $estilo;
    private $critica;
    private $image; // Campo que faltava

    /**
     * Devuelve el listado de artistas para la renderización
     * 
     * @return Artista[] un array con todos los artistas
     */
    public static function artistas(): array
    {
        $artistas = [];

        $JSON = file_get_contents('./includes/utilities/data/artistas.json');
        $JSONData = json_decode($JSON);

        foreach ($JSONData as $value) {
            $artista = new self();

            $artista->id = $value->id;
            $artista->name = $value->name;
            $artista->title = $value->title;
            $artista->biografia = $value->biografia;
            $artista->estilo = $value->estilo;
            $artista->critica = $value->critica;
            $artista->image = $value->image; // atribuindo imagem

            $artistas[] = $artista;
        }

        return $artistas;
    }

    /**
     * Devuelve los datos de artistas en particular
     * 
     * @param int $idArtista de los artistas siendo unico
     * 
     * @return ?Artista
     */
    public static function artista_ids(int $idArtista): ?Artista
    {
        $lista = self::artistas();

        foreach($lista as $a){
            if ($a->id == $idArtista){
                return $a; 
            }
        }
        
        return null;
    }

    /**
     * Devuleve los datos de nombre del artista
     * 
     * @param int $idName el nombre de los artistas siendo unico
     * 
     * @return ?Artista
     */
    public static function getTitleById(int $idName): ?string
    {
        foreach (self::artistas() as $artista) {
            if ($artista->id == $idName) {
                return $artista->title;
            }
        }
        return null; // Retorna null se não encontrar
    }

    /**
     * Devolve um valor reducido de la biografia
     * 
     * @param int $limit
     * 
     */
    public function biografia_reducida(int $limit = 30): string
    {
        $texto = $this->biografia;

        $array = explode(" ", $texto);
        if (count($array) <= $limit){
            $resultado = $texto;
        } else{
            array_splice($array, $limit);
            $resultado = implode(" ", $array). "...";
        }

        return $resultado;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * Get the value of biografia
     */ 
    public function getBiografia()
    {
        return $this->biografia;
    }

    /**
     * Set the value of biografia
     *
     * @return  self
     */ 
    public function setBiografia($biografia)
    {
        $this->biografia = $biografia;

        return $this;
    }

    /**
     * Get the value of estilo
     */ 
    public function getEstilo()
    {
        return $this->estilo;
    }

    /**
     * Set the value of estilo
     *
     * @return  self
     */ 
    public function setEstilo($estilo)
    {
        $this->estilo = $estilo;

        return $this;
    }

    /**
     * Get the value of critica
     */ 
    public function getCritica()
    {
        return $this->critica;
    }

    /**
     * Set the value of critica
     *
     * @return  self
     */ 
    public function setCritica($critica)
    {
        $this->critica = $critica;

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }
}

?>