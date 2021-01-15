<?php 
//Template Name:Contato
?>

<?php get_header(); ?>   


    <div class="contact">  
           <h1><?php  the_field2('titulo') ?></h1>
     
        <img class="chef-img" src="<?php echo get_stylesheet_directory_uri();?>./assets/Contato.png" alt="Mousse">
        <form action="">
            <label for="nome">NOME</label>
            <input type="text">
            <label for="nome">Email</label>
            <input type="email">
            <label>Dexe o seu comentário</label>
            <textarea name="comentario"  cols="30" rows="20"></textarea>
        </form>
    </div>
  

  
    <?php get_footer(); ?>