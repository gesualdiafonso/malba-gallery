<?php
class Obras{
    private $id;
    private $name;
    private $title; 
    private $artista;
    private $author;
    private $category;
    private $publication;
    private $description;
    private $informe;
    private $image;
    private $price;


    /**
     * Devuelve el listado de obras completas de productos
     * 
     * @return Obra[] un array con todas las obras 
     */
    public static function galeria_completa():array
    {
        $galeria = [];

        $JSON = file_get_contents('./includes/utilities/data/productos.json');
        $JSONData = json_decode($JSON);

        foreach($JSONData as $value){

            $obra = new self();

            $obra->id = $value->id;
            $obra->name = $value->name;
            $obra->title = $value->title;
            $obra->artista = $value->artista;
            $obra->author = $value->author;
            $obra->category = $value->category;
            $obra->publication = $value->publication;
            $obra->description = $value->description;
            $obra->informe = $value->informe;
            $obra->image = $value->image;
            $obra->price = $value->price;

            $galeria[] = $obra;

            // echo "<pre>";
            // print_r($obra);
            // echo "</pre>";
            
        }

        // echo "<pre>";
        // print_r($JSONData);
        // echo "</pre>";

        return $galeria;
    }

    /**
     * Devuelve el listado de obras por su categoria ["Ilustración", "Arte", "Pintura"]
     * @param string $categoria Las categorias deseadas son ["Ilustración", "Arte", "Pintura"]
     * 
     * @return Obra[] un array con todas las obras de la categoria seleccionada
     */

    public static function categoria(string $categoria):array
    {
        $galeria = self::galeria_completa();
        $filtrado = [];

        foreach($galeria as $cat) {
            if ($cat->category == $categoria) {
                $filtrado[] = $cat;
            }
        }
        // echo "<pre>";
        // print_r($filtrado);
        // echo "</pre>";

        return $filtrado;
    }

    /**
     * Converte nomes de categoria para capitalização correta
     * @param string $categoria
     * @return string
    */
    public static function formataCategoria(string $categoria): string
    {
        return mb_convert_case($categoria, MB_CASE_TITLE, "UTF-8");
    }

    /**
     * Devuelve el listado de obras por su autor
     * @param int $artistaId El ID del autor deseado
     * 
     * @return Obra[] un array con todas las obras del autor seleccionado
     */
    public static function galeriaPorAutor(int $artistaId):array
    {
        $galeria = self::galeria_completa();
        
        $filtrado = [];

        foreach($galeria as $aut) {
            if ($aut->artista == $artistaId) {
                $filtrado[] = $aut; // era $artistaId, mas tem que ser o objeto
            }
        }

        // echo "<pre>";
        // print_r($filtrado);
        // echo "</pre>";

        return $filtrado;

    }

    /**
     * Devuelve el listado de obras por su id 
     * 
     * @param int $id El id de la obra deseada
     * 
     * @return ?Obra un array con todas las obras del id seleccionado
     */
    public static function galeria_id(int $obraId): ?Obras
    {
        $galeria = self::galeria_completa();

        foreach($galeria as $obras) {
            if ($obras->id === $obraId) {
                return $obras;
            }
        }

        return null;
    }

    // /**
    /*  * Devuelve el listado de precio de las obras en formato
    */
    public function getFormattedPrice(): string
    {
        return '$ ' . number_format($this->price, 2, ',', '.');
    }

    // Getter y setter de toda las clases
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
     * Get the value of author
     */ 
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set the value of author
     *
     * @return  self
     */ 
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get the value of cateogry
     */ 
    public function getCateogry()
    {
        return $this->category;
    }

    /**
     * Set the value of cateogry
     *
     * @return  self
     */ 
    public function setCateogry($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get the value of publication
     */ 
    public function getPublication()
    {
        return $this->publication;
    }

    /**
     * Set the value of publication
     *
     * @return  self
     */ 
    public function setPublication($publication)
    {
        $this->publication = $publication;

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

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

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
     * Get the value of informe de portada
     */ 
    public function getInforme()
    {
        return $this->informe;
    }

    /**
     * Set the value of informe de portada
     *
     * @return  self
     */ 
    public function setInforme($informe)
    {
        $this->informe = $informe;

        return $this;
    }

    /**
     * Get the value of artista
     */ 
    public function getArtista()
    {
        return $this->artista;
    }

    /**
     * Set the value of artista
     *
     * @return  self
     */ 
    public function setArtista($artista)
    {
        $this->artista = $artista;

        return $this;
    }
}
?>