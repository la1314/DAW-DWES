<?php
//Funciones
//Elimina directorios pasandole como parámetro la ruta del directorio
function delete_directory($dirname)
{
    if (is_dir($dirname)) {
        $dir_handle = opendir($dirname);
    }

    if (!$dir_handle) {
        return false;
    }

    while ($file = readdir($dir_handle)) {
        if ($file != "." && $file != "..") {
            if (!is_dir($dirname . "/" . $file)) {
                unlink($dirname . "/" . $file);
            } else {
                delete_directory($dirname . '/' . $file);
            }
        }
    }

    closedir($dir_handle);

    rmdir($dirname);

    return true;
}

//crea directorios pasandole como parámetro la ruta del nuevo directorio
function create_directory($dirname)
{
    echo $dirname;
    //Check if the directory already exists.
    if (!is_dir($dirname)) {

        //Directory does not exist, so lets create it.
        mkdir($dirname, 0755);
    }
}

//Crea/Reemplaza imagenes en el directorio especificado
function create_file($dirname, $files)
{

    //Extensiones a cotejar
    $extension = array("jpeg", "jpg", "png", "gif");

    // Count # of uploaded files in array
    $total = count($files['name']);

    // Loop through each file
    for ($i = 0; $i < $total; $i++) {

        //Get the temp file path
        $tmpFilePath = $files['tmp_name'][$i];

        //Se guarda la extensión actual en minúscula para cotejarla, esto no afecta a la extensión cuando sea guardada la imagen
        $ext = strtolower(pathinfo($files['name'][$i], PATHINFO_EXTENSION));

        if (in_array($ext, $extension)) {

            //Make sure we have a file path
            if ($tmpFilePath != "") {

                //Setup our new file path
                $newFilePath = $dirname . '/' . $files['name'][$i];

                //Upload the file into the temp dir
                move_uploaded_file($tmpFilePath, $newFilePath);

            }
        }
    }
}

//Elimina imagenes en el directorio especificado
//Ha de recibir un array simple de nombres cifrado.extensión
function delete_file($dirname, $files)
{
    // Count # of uploaded files in array
    $total = count($files);

    // Loop through each file
    for ($i = 0; $i < $total; $i++) {

        echo $files[$i];
        $DelFilePath = $dirname . '/' . $files[$i];

        # delete file if exists
        if (file_exists($DelFilePath)) {unlink($DelFilePath);}
    }

}

//Este PHP realizara determinadas acciones dependiendo al valor del $_POST['action']
//La variable $dirname se irá concatenando según sea necesario en cada caso

$action = $_POST['action'];

switch ($action) {

    case 'newEditorDirectory':

        $dirname = $_POST['editor'];

        create_directory($dirname);
        break;

    case 'newWordDirectory':

        $dirname = $_POST['editor'] . '/' . $_POST['work'];

        create_directory($dirname);
        break;

    case 'newChapterDirectory':

        $dirname = $_POST['editor'] . '/' . $_POST['work'] . '/' . $_POST['chapter'];

        create_directory($dirname);
        break;

    case 'newChapterFile':

        $dirname = $_POST['editor'] . '/' . $_POST['work'] . '/' . $_POST['chapter'];
        $files = $_FILES['images'];

        create_file($dirname, $files);

        break;

    case 'deleteEditorDirectory':

        $dirname = $_POST['editor'];

        delete_directory($dirname);
        break;

    case 'deleteWorkDirectory':

        $dirname = $_POST['editor'] . '/' . $_POST['work'];

        delete_directory($dirname);
        break;

    case 'deleteChapterDirectory':

        $dirname = $_POST['editor'] . '/' . $_POST['work'] . '/' . $_POST['chapter'];

        delete_directory($dirname);
        break;

    case 'deleteChapterFile':

        $dirname = $_POST['editor'] . '/' . $_POST['work'] . '/' . $_POST['chapter'];

        //array de nombres
        $files = $_POST['images'];

        delete_file($dirname, $files);
        break;
}