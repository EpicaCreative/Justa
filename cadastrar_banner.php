
<?php
include "cabecalho.php";

require "logger.php";

$message = "";
$banner = array();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    //Hangling the image uploading
    $allowed = array("jpg" => "image/jpg", 
        "jpeg" => "image/jpeg", "gif" => 
        "image/gif", "png" => "image/png");

    $nome = isset($_POST['nome'])  ? $_POST['nome'] : "";
    $pagina = isset($_POST['pagina'])  ? $_POST['pagina'] : "";
    $url = isset($_POST['url'])  ? $_POST['url'] : "";
    $ativo = 0;
    $id = isset($_POST['id']) ? $_POST['id'] : 0;
    $imagem_high = isset($_POST['imagem_high']) ? $_POST['imagem_high'] : '';
    $imagem_low = isset($_POST['imagem_low']) ? $_POST['imagem_low'] : '';

    if(isset($_POST['banner_ativo']))
    {
        if($_POST['banner_ativo'] === 'on'){
            $ativo = 1;
        }
    }

    print_r($nome);

    if(strlen($nome) > 0 && strlen($url))
    {
        $has_error_on_file = false;
        if(isset($_FILES["low_res_image"]) && $_FILES["low_res_image"]["error"] == 0)
        {
            $message = upload_image($_FILES["low_res_image"], $allowed);
        }else if(strlen($imagem_low) <= 0){
            $has_error_on_file = $id > 0 ? false : true;
            $message = $id > 0 ? "Edição de banner sem imagem" : "Imagem de baixa resolução não foi fornecida";
        }
    
        if((isset($_FILES["high_res_image"]) && $_FILES["high_res_image"]["error"] == 0))
        {
           $message = upload_image($_FILES["high_res_image"], $allowed);
        }else if(strlen($imagem_high) <= 0){
            $has_error_on_file = $id > 0 ? false : true;
            $message = $id > 0 ? "Edição de banner sem imagem" : "Imagem de alta resolução não foi fornecida";
        }

        // if(!$has_error_on_file)
        // {
            $low_res_image_name = $has_error_on_file ? $imagem_low : $_FILES["low_res_image"]["name"];
            $high_res_image_name =  $has_error_on_file ? $imagem_high : $_FILES["high_res_image"]["name"];

            if($id == 0)
            {            
                $sql_command_insert = "INSERT INTO tb_banners (imagem_low, imagem_high, ativo, nome, pagina, url)".
                "VALUES ('".$low_res_image_name."', '".$high_res_image_name."', $ativo, '$nome', '$pagina', '$url')";

                wh_log($sql_command_insert);
                $insert = mysqli_query(conexao(), $sql_command_insert);

                $message = $insert ?  "Banner cadastrado com sucesso" : "Falha ao cadastrar banner";
            }else if($id > 0)
            {
                $post_data_append = "";

                if(strlen($low_res_image_name) > 0)
                {
                    $post_data_append .= "imagem_low='".$low_res_image_name."'";
                }

                if(strlen($high_res_image_name) > 0)
                {
                    if(strlen($low_res_image_name) > 0)
                    {
                        $post_data_append .= ",";
                    }
                    $post_data_append .= "imagem_high='".$high_res_image_name."'";
                }

                if(strlen($low_res_image_name) > 0 || strlen($high_res_image_name) > 0)
                {
                    $post_data_append .= ",";
                }

                $sql_command_update = "UPDATE tb_banners SET $post_data_append ativo=$ativo, nome='$nome', pagina='$pagina', url='$url' WHERE id=".$id;

                
                wh_log($sql_command_update);

                $update = mysqli_query(conexao(), $sql_command_update);

                $message = $update ?  "Banner atualizado com sucesso" : "Falha ao atualizar banner"; 
            }

        //}
    }else{
        $message =  "Preencha todos os campos do formulário";
    }
}else{
    if(isset($_GET['id']))
    {
       $sql_command = mysqli_query( conexao(), "SELECT * FROM tb_banners WHERE id=".$_GET['id']);
       //$statement = mysqli_query(conexao(), $sql_command);
       $banner = mysqli_fetch_array( $sql_command );
    }
}

function upload_image($image, $allowed)
{
    $filename = $image["name"];
    $filetype = $image["type"];
    $filesize = $image["size"];

    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if(!array_key_exists($ext, $allowed))
    {
        return "Formato de arquivo inválido";
    }else
    {
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Tamanho do arquivo excede o limite");
    
        if(in_array($filetype, $allowed)){
            if(file_exists("../_images/" . $filename)){
                return $filename . " is already exists.";
            } else{
                $uploaded = move_uploaded_file($image['tmp_name'], "../_images/" . $filename);
                return $uploaded ? "Your file was uploaded successfully." : "We could not upload the file $filename";
            } 
        } else{
            return "Error: There was a problem uploading your file. Please try again."; 
        }
    }
}

function get_what_exists($name, $banner)
{
    if(isset($_POST[$name])) return $_POST[$name];
    if(isset($banner[$name])) return $banner[$name];
    return "";
}

function get_id()
{
    if(isset($_GET['id'])) return $_GET['id'];
    if(isset($_POST['id'])) return $_POST['id'];
}
?>
<div class="span9">

<div class="row-fluid pull">
    <?php if(strlen($message) > 0) {?>
    <div class="alert alert-warning">
		<button type="button" class="close" data-dismiss="alert">×</button>
            <h4>Mensagem</h4>
    <?php print($message); ?></div>

    <?php } ?>

        <h2 class="page-header" style="text-align: left">Manuten&ccedil;&atilde;o de Conte&uacute;do</h2>
        <div class="row">
            <div class="span6">
            <form method="POST" action="cadastrar_banner.php" enctype="multipart/form-data">
                <input type="hidden" value="<?php echo get_id(); ?>" name="id" id="id" />
                <input type="hidden" value="" name="sent" id="sent" />
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" class="form-control" value="<?php print(get_what_exists('nome', $banner)); ?>" id="nome" name="nome" placeholder="Nome">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Url</label>
                    <input type="text" class="form-control" value="<?php print(get_what_exists('url', $banner)); ?>" id="url" name="url" placeholder="Url">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Imagem de alta resolução</label>
                    <input type="text" class="form-control" value="<?php print(get_what_exists('imagem_high', $banner)); ?>" id="imagem_high" name="imagem_high" placeholder="Imagem de alta resolução">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Imagem de baixa resolução</label>
                    <input type="text" class="form-control" value="<?php print(get_what_exists('imagem_low', $banner)); ?>" id="imagem_low" name="imagem_low" placeholder="Imagem de baixa resolução">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Página</label>
                    <select type="select" class="form-control" id="pagina" name="pagina" placeholder="Password">
                        <option value="index.html" selected="<?php print(get_what_exists('pagina', $banner) == 'index.html' ? 'selected' : 'false'); ?>">Home</option>
                        <option value="justa-mais-tef" selected="<?php print(get_what_exists('pagina', $banner) == 'justa-mais-tef.html' ? 'selected' : 'false'); ?>">Justa Mais (TEF)</option>
                        <option value="credito-justo.html" selected="<?php print(get_what_exists('pagina', $banner) == 'credito-justo.html' ? 'selected' : 'false'); ?>">Crédito Justo</option>   
                        <option value="qrcode.html" selected="<?php print(get_what_exists('pagina', $banner) == 'qrcode.html' ? 'selected' : 'false'); ?>">QR Code</option>  
                    </select>
                </div>

                <hr />
                <div class="form-group">
                    <label for="exampleInputFile">Imagem de baixa resolução</label>
                    <input type="file" id="low_res_image" name="low_res_image">
                </div>
                <hr />
                <div class="form-group">
                    <label for="exampleInputFile">Imagem de alta resolução</label>
                    <input type="file" name="high_res_image" id="high_res_image">
                </div>
                <br>
                <p><strong>Note:</strong> Only .jpg, .jpeg, .gif, .png formats allowed to a max size of 5 MB.</p>
                <hr />
                <div class="checkbox">
                    <label>
                    <input type="checkbox" checked="<?php print(get_what_exists('url', $banner) == 1 ? 'checked' : ''); ?>" id="banner_ativo" name="banner_ativo"> Banner ativo
                    </label>
                </div>
                <button type="submit" class="btn btn-default">Salvar banner</button>
                </form>
            </div>
        </div>
</div>