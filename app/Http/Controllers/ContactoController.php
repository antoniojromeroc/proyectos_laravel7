<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //return $request;
        $mensaje = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:10',
        ],[
            'name.required' => 'Tu nombre es importante. No lo dejes en blanco..'
        ]);

        //  Ahora vamos a enviar un email.
        //  Para esto lo primero es ejecutar este comando en consola y asi se crea una 
        //  nueva carpeta "mail" dentro de "app" y un archivo "MessageReceived.php"
        //  php artisan make:mail MessageReceived
        //  Luego debemos crear la vista: en resources/views crear carpeta emails y luego
        //  la vista message-received.blade.php

        //  Para enviar correos reales debemos usar una plataforma que pueda ser implementada
        //  en laravel. Por defecto laravel da soporte a varias plataformas. Sin embargo vamos 
        //  a usar una gratuita que tiene muy buenas prestaciones y la configuraremos en el 
        //  archivo config/mail.php. Esta se llama sendgrid.com
        //  Pero antes debemos instalar el paquete con composer: 
        //  $ composer require s-ichikawa/laravel-sendgrid-driver
        //  Seguir la configuracion que se indica en: https://github.com/s-ichikawa/laravel-sendgrid-driver
        //  La configuracion que me permitio finalmente hacer funcionar el envio de correos:
        //  https://codigofacilito.com/articulos/laravel-sendgrid
        //  Este es mi primer correo desde sendgrid usando mi app blog desarrolla en Laravel 7
        Mail::to($mensaje['email'])->send(new MessageReceived($mensaje));

        // Con esta instruccion podemos enviar el email al navegador de manera de poder
        // ver como va quedando al momento de desarrollar sin necesidad de estar enviando
        // correos reales.
        // Otra forma de ver los correos es por medio de mailtrap, para esto se requiere crear
        // un usuario en dicha plataforma.
        //return new MessageReceived($mensaje);

        //return 'Email Enviado...';
        return back()->with('status', 'Recibimos su mensaje. Gracias por contactarnos...');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
