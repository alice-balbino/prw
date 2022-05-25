USE projeto02;

$sql = "INSERT INTO usuario (nome_usuario, email_usuario, telefone_usuario, foto_blob, foto_nome)
VALUES ('".$nome."','".$email."','".$telefone."','".$fotoBlob."','".$fotoNome."' )";

SELECT * FROM usuario;