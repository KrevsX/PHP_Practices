<?php
//validamos que exista el post
if (!empty($_POST)) {
    //trabajamos los campos
    // if ternario
    $nombre = (array_key_exists("txtNombre", $_POST)) ? $_POST["txtNombre"] : "";
    $correo = (array_key_exists("txtCorreo", $_POST)) ? $_POST["txtCorreo"] : "";
    $pais = (array_key_exists("sPais", $_POST)) ? $_POST["sPais"] : "";
    $color = (array_key_exists("rColor", $_POST)) ? $_POST["rColor"] : "";
    $pasatiempos = (array_key_exists("cPasatiempos", $_POST)) ?  implode(",", $_POST["cPasatiempos"]) : "";

    //creamos codigo php con php
    $table = '
        <table class="table table-info">
            <tr>
                <td>Nombre</td>
                <td>' . $nombre . '</td>
            </tr>
            <tr>
                <td>Correo</td>
                <td>' . $correo . '</td>
                </tr>
                <tr>
                    <td>País</td>
                    <td>' . $pais . '</td>
                </tr>
                <tr>
                    <td>Color</td>
                    <td>' . $color . '</td>
                </tr>
                <tr>
                <td>Pasatiempos</td>
                                <td>' . $pasatiempos . '</td>
                            </tr>
                        </table>
                        ';
    echo $table;
}
