<?php 
//Template Name:Drinks
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
                <h1> <?php the_field2('titulo') ?>   </h1>
               <figure>
               <img src=" <?php the_field2('imagem_principal') ?> " alt="bebida verde"/>                
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