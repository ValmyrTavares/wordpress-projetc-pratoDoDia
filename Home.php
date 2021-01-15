
<?php 
//Template Name:Home
?>

    
    <?php get_header(); ?>
    <section class="main-content">
      <h1> <?php the_field2('titulo')?>  <h1>
       
       <main>

            <?php
                $pratos = get_field2(pratos);
                if(isset($pratos)){foreach($pratos as $prato){  ?>                     
                <figure>
                    <img src="<?php echo $prato['imag']; ?> " alt="">
                    <p> <?php echo $prato['nome'];?> </p>
                </figure>
            <?php }}?> 
           
       </main>
    </section>     
    <?php get_footer(); ?>
