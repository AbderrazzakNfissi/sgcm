<?php

use App\Http\Controllers\ApexController;
use App\Http\Controllers\CoachsController;
use App\Http\Controllers\GroupsController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ManagersController;
use App\Http\Controllers\MatchesController;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\StadiumsController;
use App\Http\Controllers\TeamsController;
use Illuminate\Database\Capsule\Manager;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Groups;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [IndexController::class,'index'])->name('index');

Route::get('/apex', [ApexController::class,'index'])->name('apex');

Route::get('/teams',[TeamsController::class,'allTeams'])->name('teams');

Route::get('/team/{id}',[TeamsController::class,'team'])->name('team');

Route::get('/teamStats/{id}',[TeamsController::class,'statistiques'])->name('statistiques');

Route::get('/teamSquad/{id}',[TeamsController::class,'squad'])->name('squad');

Route::get('/players/{id}',[PlayersController::class,'player'])->name('palayer');

Route::get('/managers',[ManagersController::class,'managers'])->name('managers');

Route::get('/managers/{id}',[ManagersController::class,'manager'])->name('manager');

Route::get('/stadiums',[StadiumsController::class,'stadiums'])->name('stadiums');

Route::get('/stadiums/{id}',[StadiumsController::class,'stadium'])->name('stadium');

Route::get('/coachs',[CoachsController::class,'coachs'])->name('coachs');

Route::get('/groups',[GroupsController::class,'groupes'])->name('groupes');

Route::get('/groupe',[GroupsController::class,'groupe'])->name('groupe');

Route::get('/matches',[MatchesController::class,'matches'])->name('matches');

Route::post('/matches',[MatchesController::class,'search'])->name('matches');

Route::get('/matchHomeById/{name}',[MatchesController::class,'searchHomeById'])->name('matchBHomeyId');

Route::get('/matche/{id}',[MatchesController::class,'match'])->name('matche');

Route::get('/standings',[MatchesController::class,'standings'])->name('standings');

Route::get('/matchAwayById/{name}',[MatchesController::class,'searchAwayById'])->name('matchAwayById');


Route::get('/konckout',[MatchesController::class,'knockout'])->name('knockout');


Route::get('/contact',[MatchesController::class,'contact'])->name('contact');


Route::get('/search',[SearchController::class,'search'])->name('search');


Route::get('/player',[PlayersController::class,'player'])->name('player');