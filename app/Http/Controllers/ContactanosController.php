<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;

class ContactanosController extends Controller
{
    public function index()
    {
        return view('contactanos.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'correo' => 'required|email',
            'mensaje' => 'required',
            'phone' => 'nullable|string|max:20',
            'country_code' => 'required|string|max:5',
        ]);

        $fullPhone = $request->country_code . ' ' . $request->phone;

        // Guardar en la base de datos
        Contact::create([
            'name' => $request->name,
            'email' => $request->correo,
            'message' => $request->mensaje,
            'phone' => $fullPhone,
        ]);

        // Preparar los datos para el correo
        $contactData = $request->all();
        $contactData['phone'] = $fullPhone;

        // Enviar el correo
        $correo = new ContactanosMailable($contactData);
        Mail::to('marcosteven0718@gmail.com')->send($correo);

        return redirect()->route('contactanos.index')->with('info', 'Mensaje enviado');
    }
}