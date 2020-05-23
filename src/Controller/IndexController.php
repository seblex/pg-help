<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class IndexController
 * @package App\Controller
 */
class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index() : Response
    {
        return $this->render('index.html.twig', [
            'h1' => 'Документация',
            'h3' => '',
            'breadcrumbs' => ''
        ]);
    }

    /**
     * @Route("/psql", name="psql")
     */
    public function psql() : Response
    {
        return $this->render('psql.html.twig', [
            'h1' => 'Документация',
            'h3' => 'интерактивный терминал PostgreSQL',
            'breadcrumbs' => 'psql'
        ]);
    }

    /**
     * @Route("/create-table", name="create-table")
     */
    public function createTable() : Response
    {
        return $this->render('tables/create.html.twig', [
            'h1' => 'Документация',
            'h3' => 'создание таблиц',
            'breadcrumbs' => 'создание таблиц'
        ]);
    }

    /**
     * @Route("/drop-table", name="drop-table")
     */
    public function dropTable() : Response
    {
        return $this->render('tables/drop.html.twig', [
            'h1' => 'Документация',
            'h3' => 'удаление таблиц',
            'breadcrumbs' => 'удаление таблиц'
        ]);
    }

    /**
     * @Route("/rows-insert", name="rows-insert")
     */
    public function insertRows() : Response
    {
        return $this->render('rows/insert.html.twig', [
            'h1' => 'Документация',
            'h3' => 'вставка строк',
            'breadcrumbs' => 'вставка строк'
        ]);
    }

    /**
     * @Route("/rows-select", name="rows-select")
     */
    public function selectRows() : Response
    {
        return $this->render('rows/select.html.twig', [
            'h1' => 'Документация',
            'h3' => 'выборка строк',
            'breadcrumbs' => 'выборка строк'
        ]);
    }

    /**
     * @Route("/rows-delete", name="rows-delete")
     */
    public function deleteRows() : Response
    {
        return $this->render('rows/delete.html.twig', [
            'h1' => 'Документация',
            'h3' => 'удаление строк',
            'breadcrumbs' => 'удаление строк'
        ]);
    }

    /**
     * @Route("/rows-update", name="rows-update")
     */
    public function updateRows() : Response
    {
        return $this->render('rows/update.html.twig', [
            'h1' => 'Документация',
            'h3' => 'изменение строк',
            'breadcrumbs' => 'изменение строк'
        ]);
    }

    /**
     * @Route("/type-numeric", name="type-numeric")
     */
    public function numericType() : Response
    {
        return $this->render('types/numeric.html.twig', [
            'h1' => 'Документация',
            'h3' => 'числовые типы',
            'breadcrumbs' => 'Числовые типы'
        ]);
    }

    /**
     * @Route("/type-string", name="type-string")
     */
    public function stringType() : Response
    {
        return $this->render('types/string.html.twig', [
            'h1' => 'Документация',
            'h3' => 'символьные типы',
            'breadcrumbs' => 'Символьные типы'
        ]);
    }

    /**
     * @Route("/type-datetime", name="type-datetime")
     */
    public function datetimeType() : Response
    {
        return $this->render('types/datetime.html.twig', [
            'h1' => 'Документация',
            'h3' => 'date/time типы',
            'breadcrumbs' => 'Date/time типы'
        ]);
    }

    /**
     * @Route("/type-boolean", name="type-boolean")
     */
    public function booleanType() : Response
    {
        return $this->render('types/boolean.html.twig', [
            'h1' => 'Документация',
            'h3' => 'логический тип',
            'breadcrumbs' => 'Логический тип'
        ]);
    }

    /**
     * @Route("/type-array", name="type-array")
     */
    public function arrayType() : Response
    {
        return $this->render('types/array.html.twig', [
            'h1' => 'Документация',
            'h3' => 'тип - массивы',
            'breadcrumbs' => 'Массивы'
        ]);
    }

    /**
     * @Route("/type-json", name="type-json")
     */
    public function jsonType() : Response
    {
        return $this->render('types/json.html.twig', [
            'h1' => 'Документация',
            'h3' => 'тип - json',
            'breadcrumbs' => 'JSON'
        ]);
    }
}
