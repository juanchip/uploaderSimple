<?PHP
  if(!empty($_FILES['uploaded_file']))
  {
    $path = "archivos/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "El archivo ".  basename( $_FILES['uploaded_file']['name']). 
      " se subio bien, gracias";
    } else{
        echo "Chequeaste internet?!";
    }
  }
?>
