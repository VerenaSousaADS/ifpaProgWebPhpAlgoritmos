<?php
    $sql = "SELECT * FROM animais";
    include "conexao.php";
    $resposta = "<option value = '#'>Selecione ...</option>";
    if ($resultado = mysqli_query($con, $sql)) {
        while ($lh = mysqli_fetch_assoc($resultado)) {
            $resposta .= "<option value ='".$lh['id_animal']."'>".$lh['especie']. "</option>";   
        }
        mysqli_close($con);
        echo $resposta;    
    }else{
        mysqli_close($con);
        echo "Erro: ". $sql . "<br>" . mysqli_error($con);
    }

?>