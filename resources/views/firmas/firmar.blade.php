<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="formFirma">
        Firma electrónica en formato PKCS12 (archivo .p12):
        <input type="file" id="archivo_p12" accept="data:application/x-pkcs12">
        <!--textarea rows="10" cols="50" id="p12info"></textarea-->
        <hr>
        Contraseña:
        <input type="text" id="p12password">
        <hr>
        Comprobante electrónico a ser firmado:
        <input type="file" id="archivo_comprobante" xxxaccept="image/*">
        <hr>
        <input type="submit" value="Firmar comprobante electrónico">
        <hr>
        Comprobante electrónico firmado:
        <br>
        <textarea rows="10" cols="50" id="comprobanteFirmado"></textarea>
    </form>
    <script src="./js/firma/buffer.js"></script>
    <script src="./js/firma/forge.min.js"></script>
    <script src="./js/firma/moment.min.js"></script>
    <script src="./js/firma/firma.js"></script>
</body>
</html>