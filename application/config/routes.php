<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'alumno_controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['login']                                                =     'login_controller';
$route['login/verificar']                                                =     'login_controller/verificar';
$route['admin/alumno']                                         =     'alumno_controller';
$route['admin/alumno/nuevo']                                   =     'alumno_controller/nuevo';
$route['admin/alumno/crear']                                   =     'alumno_controller/crear';
$route['admin/alumno/editar/(:num)']                           =     'alumno_controller/editar/$1';
$route['admin/alumno/actualizar']                              =     'alumno_controller/actualizar';
$route['admin/alumno/borrar/(:num)']                           =     'alumno_controller/borrar/$1';

$route['admin/mensaje']                                        =     'mensaje_controller';
$route['admin/mensaje/nuevo']                                  =     'mensaje_controller/nuevo';
$route['admin/mensaje/crear']                                  =     'mensaje_controller/crear';
$route['admin/mensaje/editar/(:num)']                          =     'mensaje_controller/editar/$1';
$route['admin/mensaje/actualizar']                             =     'mensaje_controller/actualizar';
$route['admin/mensaje/borrar/(:num)']                          =     'mensaje_controller/borrar/$1';

$route['admin/login']                                          =     'login_controller';
$route['admin/login/verificar']                                =     'login_controller/verificar';
$route['admin/login/salir']                                    =     'login_controller/salir';

$route['admin/carreras']                                       =     'carrera_controller';
$route['admin/carreras/nueva']                                 =     'carrera_controller/nuevo';
$route['admin/carreras/guardar']                                 =     'carrera_controller/insertar';
$route['admin/carreras/editar/(:num)']                         =     'carrera_controller/editar';
