    <?php
    $file = $post['Post']['file'];

    $subject = $post['Post']['subject'];
        switch ($subject) {
            case 0:
                $subject = "Consumidor";
                break;
            case 1:
                $subject = "Profissional";
                break;
            case 2:
                $subject = "Lojista";
                break;
            case 3:
                  $subject = "Estudantes";
                  break;
            case 4:
                   $subject = "Outros";
                   break;
        }
 ?>
<h1><?php echo $subject; echo ' '.$post['Post']['id']?></h1><br/>

<p><small>Criado em: <?php echo $post['Post']['created']?></small></p>

<p><small>Nome: <?php echo $post['Post']['name']?></small></p>

<p><small>Email: <?php echo $post['Post']['email']?></small></p>

<p><small>Telefone: <?php echo $post['Post']['phone']?></small></p>

<p><small>Assunto: <?php echo $subject?></small></p>

<p><small>Observação: <?php echo $post['Post']['observation']?></small></p>

<p><small>Arquivo: <a href="<?php echo $this->webroot.'files/'.$file; ?>"><?php echo $file;?></a></small></p>

