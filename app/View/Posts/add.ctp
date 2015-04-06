<h1>Mande uma Mensagem</h1>
<?php
echo $this->Form->create('Post', array('type' => 'file', 'onsubmit'=>'return validation()'));
echo $this->Form->input('name', array('label'=>'Nome'));
echo $this->Form->input('email', array('label'=>'Email'));
echo $this->Form->input('phone', array('label'=>'Telefone'));
echo $this->Form->input('subject',array('label'=>'Assunto',
        'options' => array('Consumidor', 'Profissional' , 'Lojista', 'estudante', 'outros'),
        'empty' => '(escolha uma opção)'));
echo $this->Form->file('file');
echo $this->Form->input('observation', array('label'=>'Observação', 'onkeyup'=>'limitText(this.value)','rows' => '3')); ?>
(caracteres restantes: <span id="cont"></span>)
<?php echo $this->Form->end('Enviar'); ?>