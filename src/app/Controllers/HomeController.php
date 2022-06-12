<?php

namespace Tvartas\Controllers;

use Tvartas\App;
use App\DB\Json;


class HomeController
{

    public function index()
    {
        return App::view('home', ['title' => 'Tvartas']);
    }

    public function list()
    {
        $users = Json::get()->showAll();
        return App::view('list', ['title' => 'Tvartas', 'users' => $users]);
    }

    public function keep()
    {
        if ($_POST['add'] <=0 ) {
            return App::redirect("");
        }
        $acount = [];
        $acount = [
            'animals' => ($_POST['animals'] ?? 0),
            'svoris' => ($_POST['svoris'] ?? 0)
        ];
        Json::get()->create($acount);
        return App::redirect('list');
    }

    public function deleteAccount(string $id)
    {
        Json::get()->delete($id);
        return App::redirect('list');
    }
    public function toAdd(string $id)
    {
        $users = Json::get()->show($id);
        return App::view('edit', ['title' => 'Tvartas', 'users' => $users]);
    }
    public function add(string $id)
    {
        if ($_POST['add'] <=0 ) {
            return App::redirect("edit/$id");
        }
        $duomenys = Json::get()->show($id);
        $duomenys['svoris'] = $_POST['add'];
        Json::get()->update($id, $duomenys);
        return App::redirect('list');
    }
}
