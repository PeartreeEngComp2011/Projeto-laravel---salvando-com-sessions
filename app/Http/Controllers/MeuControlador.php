<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\User;
//use App\Http\controllers\controller;

class MeuControlador extends Controller
{
    public function produtos()
    {
        echo "<h1>Produtos</h1>";
        echo "<ol>";
        echo "<li>Notebook</li>";
        echo "<li>Impressora</li>";
        echo "<li>Mouse</li>";
        echo "</ol>";
    }
}
