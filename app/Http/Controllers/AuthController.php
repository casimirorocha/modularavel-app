<?php

namespace App\Http\Controllers;

use JetBrains\PhpStorm\NoReturn;
use Spatie\RouteDiscovery\Attributes\Route;


class AuthController extends Controller
{

	#[NoReturn] #[Route('/loginx', 'login')]
	public function loginx()
	{
		dd("asasas");
	}
}
