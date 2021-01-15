<?php 
//Template Name:Peixes
?>
<?php get_header(); ?>
    <div class="content">
        <section class="receipe-content">
            <aside class="category-receipe">
              <?php
              $botoes = get_field2(botoes);
              if(isset($botoes)){foreach($botoes as $botao){
              ?>
                <button> <?php echo $botao['botao_menu']; ?> </button>
              <?php }}?>
            </aside>
            <main class="main-receipe">
           <h1> <?php the_field2('titulo')  ?>    </h1>
               <figure>               
                   <img src=" <?php the_field2('imagem_principal') ?> " alt="peixe"/>
               </figure>          
           </main>
        </section>
        <div class="content-text">
            <h2>Ingredientes</h2>
            <p>
            <?php the_field2('ingredientes')  ?>
            </p>
            <h2>Modo de preparo</h2>
            <p>    
            <?php the_field2('preparo')  ?>  
            </p>
        </div>
    </div>
    <?php get_footer(); ?>
    
                <!-- 1) Misture o chocolate em pó e a manteiga e leve ao fogo em banho-maria, mexendo sempre, até obter uma mistura homogênea. Desligue o fogo e reserve.             
                2) Bata as gemas com metade do açúcar de confeiteiro UNIÃO GLAÇÚCAR até obter uma gemada clara e fofa.             
                3) Adicione a mistura de chocolate e o creme de leite. Misture.             
                4) Incorpore, delicadamente, as claras previamente batidas com o açúcar de confeiteiro UNIÃO GLAÇÚCAR restante em ponto de merengue firme.             
                5) Reserve na geladeira. -->