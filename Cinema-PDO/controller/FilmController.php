<?php
require_once 'app/DAO.php';


class FilmController
{
    // function qui permet de récupérer la liste de tout les films ajoutés en BDD
    public function listFilms()
    {
        $dao = new DAO();

        $sql = 'SELECT id_film, title, date_format(date_release, "%Y") year, duration, synopsis, note, picture 
                FROM film
                ORDER BY date_release DESC';

        $films = $dao->executeRequest($sql);
        require 'view/film/listFilms.php';
    }

   
}
