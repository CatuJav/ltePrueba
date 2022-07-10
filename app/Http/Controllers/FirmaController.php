<?php

namespace App\Http\Controllers;

use App\Models\Firma;
use Illuminate\Http\Request;
use PhpCfdi\Credentials\Credential;

class FirmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cerFile = 'fiel/certificado.cer';
        $pemKeyFile = 'C:\Users\javca\Downloads\sri-master\sri-master\src\sri\compro';
        $passPhrase = 'silvio'; // contraseña para abrir la llave privada

        $fiel = Credential::openFiles($cerFile, $pemKeyFile, $passPhrase);

        $sourceString = 'texto a firmar';
        // alias de privateKey/sign/verify
        $signature = $fiel->sign($sourceString);
        echo base64_encode($signature), PHP_EOL;

        // alias de certificado/publicKey/verify
        $verify = $fiel->verify($sourceString, $signature);
        var_dump($verify); // bool(true)

        // objeto certificado
        $certificado = $fiel->certificate();
        echo $certificado->rfc(), PHP_EOL; // el RFC del certificado
        echo $certificado->legalName(), PHP_EOL; // el nombre del propietario del certificado
        echo $certificado->branchName(), PHP_EOL; // el nombre de la sucursal (en CSD, en FIEL está vacía)
        echo $certificado->serialNumber()->bytes(), PHP_EOL; // número de serie del certificado
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Firma  $firma
     * @return \Illuminate\Http\Response
     */
    public function show(Firma $firma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Firma  $firma
     * @return \Illuminate\Http\Response
     */
    public function edit(Firma $firma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Firma  $firma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Firma $firma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Firma  $firma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Firma $firma)
    {
        //
    }
}
