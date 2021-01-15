

<?php
function get_field2($key, $page_id = 0) {
    $id = $page_id !== 0 ? $page_id : get_the_ID();
    return get_post_meta($id, $key, true);
  }
  
  function the_field2($key, $page_id = 0) {
    echo get_field2($key, $page_id);
  }


add_action('cmb2_admin_init', 'cmb2_fields_pratoDoDiaHome');

function cmb2_fields_pratoDoDiaHome() {


  /*888888888888888888888888888888888888888
  Conteudo dos tipos de pratos
  88888888888888888888888888888888888888888*/

   $cmb = new_cmb2_box([
        'id' => 'home_box',
        'title' => 'Home',
        'object_types'=> ['page'],
        'show_on'=> [
            'key' => 'id', 
             'value' => [35,37,39, 41]
        ],
    ]);

    $cmb -> add_field([
        'name'=> 'Titulo',
        'id'=> 'titulo',
        'type'=> 'text'
    ]);

    $cmb -> add_field([
      'name'=> 'Imagem principal',
      'id'=> 'imagem_principal',
      'type'=> 'file'
  ]);

  $cmb -> add_field([
    'name'=> 'Ingredientes',
    'id'=> 'ingredientes',
    'type'=> 'textarea'
]);
$cmb -> add_field([
  'name'=> 'Modo de preparo',
  'id'=> 'preparo',
  'type'=> 'textarea'
]);

//REPETIÇÕES 

$botoes = $cmb ->add_field([
  'name'=> 'Botoes do Menu',
  'id' => 'botoes',
  'type'=> 'group',
  'repeatable' => true,
  'options' => [
    'group_title' => 'Pratos{#}',
    'add_button' => 'Adicionar',
    'remove_button'=> 'Remover',
    'sortable'=> true,
  ],
]);


$cmb->add_group_field($botoes,[
  'name'=> 'Nome',
  'id' => 'botao_menu',
  'type'=> 'text',
]); 






/*888888888888888888888888888888888888888
  CONTATO
88888888888888888888888888888888888888888*/



$cmbb = new_cmb2_box([
  'id' => 'home',
  'title' => 'Tuluse',
  'object_types'=> ['page'],
  'show_on'=> [
    'key' => 'id', 
    'value' => array( 33 )
  ],
]);

$cmbb -> add_field([
  'name'=> 'Titulo para Contato',
  'id'=> 'titulo',
  'type'=> 'text'
]);


/*888888888888888888888888888888888888888
  CAMPO TESTE DA HOME
88888888888888888888888888888888888888888*/



$cmv = new_cmb2_box([
  'id' => 'homess',
  'title' => 'valmyr',
  'object_types'=> ['page'],
  'show_on'=> [
    'key'=> 'page-template',
    'value' => 'Home.php',

  ],
]);

$cmv -> add_field([
  'name'=> 'Titulo Principal',
  'id'=> 'titulo',
  'type'=> 'text'
]);

//REPETIÇÃO

$pratos = $cmv ->add_field([
  'name'=> 'Pratos',
  'id' => 'pratos',
  'type'=> 'group',
  'repeatable' => true,
  'options' => [
    'group_title' => 'Pratos{#}',
    'add_button' => 'Adicionar',
    'remove_button'=> 'Remover',
    'sortable'=> true,
  ],
]);

$cmv->add_group_field($pratos,[
  'name'=> 'Nome',
  'id' => 'nome',
  'type'=> 'text',
]); 

$cmv->add_group_field($pratos,[
  'name'=> 'Imagem',
  'desc'    => 'Upload an image or enter an URL.',
  'id' => 'imag',
  'type'=> 'file',
  'options' => [
		'url' => false, 
  ],
]); 



/*888888888888888888888888888888888888888
  CAMPO PARA IMAGEM NAS MASSAS
88888888888888888888888888888888888888888*/


$cmvt = new_cmb2_box([
  'id'=> 'imagem_teste_massa',
  'title' => 'Novo Bloco Teste',
   'object_types'=>['page'],
   'show_on' => [
     'key'=> 'id',
     'value'=> [37],
   ],
]);

$cmvt -> add_field([
  'name'=> 'Nova imagem',
  'id'=> 'novaimagem',
  'type'=> 'file',
]);


/*888888888888888888888888888888888888888
 TESTE MENU
88888888888888888888888888888888888888888*/



$cmh = new_cmb2_box([
  'id' => 'header',
  'title' => 'TESTE BOTÃO MENU',
  'object_types'=> ['page'],
  'show_on'=> [
      'key' => 'id', 
      'value' => 'header.php'

  ],
]);

$cmh -> add_field([
  'name'=> 'BTN',
  'id'=> 'btn',
  'type'=> 'text'
]);






    
}


?>