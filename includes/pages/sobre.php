<main>
    <!-- O que nos move -->
    <section class="move scrollpsy" id="move">
        <div class="row container">
            <div class="col s12 l5 move-girapix" data-aos="fade-right">
                <img src="<?php bloginfo('template_url'); ?>/images/oquenosmove.svg" alt="O que nos move?">
            </div>
            <div class="col s12 l6 offset-l1 move-texto" data-aos="fade-left">
                <h1 class="amarelo">O que nos move?</h1>
                <p>Quantas vezes você ouviu que era loucura, que não valia a pena, que um emprego era muito melhor? Quantas vezes você virou a noite trabalhando, madrugando para entregar aquela encomenda ou trabalho? Será que em meio a uma sociedade tão desacreditada, ainda vale a pena empreender e investir em um sonho?</p>
                <p>Todos nós precisamos de um (re)começo, de pessoas que nos incentivem, que nos mostrem o quanto somos bons e o quanto valeu a pena batalhar por nossos sonhos, e que barreiras e obstáculos estão aí para serem quebrados.</p>
                <p>Nós somos a Girapix, e acreditamos que cada sonho realizado envolve muito esforço e trabalho árduo, e que essas conquistas precisam ser contadas ao mundo. Afinal o cliente não compra o que você vende, e sim o por que você vende.</p>
                <p>Nós temos o desejo, talvez até mesmo prepotente, de inspirar o mundo, bairros, empresas e pessoas a mostrarem a concretização de seus sonhos. E fazemos isso através de sites bem construídos e de uma comunicação digital que busca muito mais que curtidas. Nós somos uma empresa jovem que busca relacionamentos duradouros e impactar diretamente os sonhadores que ainda sonham, exaltar os que realizaram, resgatar os desacreditados e construir novos sonhos.</p>
            </div>
        </div>
    </section>
    <!-- Motivacional -->
    <section class="motivacional scrollspy" id="motivacional">
        <div class="row container">
            <div class="col s12 l5 motivacional-texto">
                <p>Nós acreditamos no poder que uma boa história tem, e por isso focamos tanto em contar a trajetória de cada um dos nossos clientes.</p>
                <br>
                <p>Sobretudo, somos jovens, determinados e criativos, com muito conhecimento especifico, e principalmente, muita vontade em inspirar e ajudar pessoas a atingir seus objetivos.</p>
            </div>
            <div class="col s12 l6 offset-l1 motivacional-frase">
                <h1>"Obter um site de qualidade não é uma despesa, mas sim um investimento."</h1>
                <p>Dr. Cristopher Dayagdag</p>
            </div>
        </div>
    </section>
    <section class="equipe">

        <?php query_posts('post_type=equipe&post_per_page=3'); ?>
        <div class="row container time">
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>

                <div class="col s12 l4 equipe-membro center">
                    <div class="membro-img" data-aos="zoom-in">
                    <?php 

                    $image = get_field('avatar-time');

                    if( !empty($image) ): ?>

                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                    <?php endif; ?>
                    </div>
                    <h1><?php the_title(); ?></h1>
                    <?php 

                    $funcao = get_field('funcao-time');

                    if( !empty($funcao) ): ?>

                        <h2><?php echo $funcao ?></h2>

                    <?php endif; ?>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis similique ipsum vero nulla praesentium nostrum at quia, placeat fugiat atque, culpa velit hic? Aliquid itaque, eveniet voluptatem dolorem odit deleniti molestiae vitae?</p>
                </div>

                <?php endwhile; ?>

            <?php else : ?>
                Não há membros da equipe cadastrados...

            <?php endif; ?>

            
        </div>
        <?php wp_reset_query(); ?>

        
            
    </section>
    <!-- Formulário de Contato -->
    <section class="contato scrollspy" id="contato">
        <div class="row container titulos">
            <h1 class="amarelo">Contatos</h1>
        </div>
        <div class="row container formulario">
            <form autocomplete="off" action="">
                <div class="input-field col s12 l6">
                    <input type="text" id="nome" class="validate" data-leght="60">
                    <label for="nome">Me diz seu nome?</label>
                </div>
                <div class="input-field col s12 l6">
                        <input type="text" id="empresa" class="validate" data-leght="60">
                        <label for="empresa">Qual nome da sua empresa?</label>
                    </div>
                <div class="input-field col s12 l6">
                    <input type="email" id="email" class="validate" data-leght="60">
                    <label for="email" data-error="wrong" data-success="right">Qual seu email?</label>
                </div>
                <div class="input-field col s12 l6">
                    <input autocomplete="off" type="text" id="number" class="validate" data-leght="30">
                    <label for="number" data-error="wrong" data-success="right">E seu telefone, qual é?</label>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea1" class="materialize-textarea" data-leght="250"></textarea>
                    <label for="textarea1">Me fale sobre seu projeto...</label>
                </div>
                <button class="btn waves-effect waves-light right btn-azul" type="submit" name="action">Enviar</button>
            </form>
        </div>
        <div class="row container contatos">
            <div class="row">
                <div class="col s12 l4">
                    <div class="col s4 l4">
                        <span class="amarelo">Endereço:</span>
                    </div>
                    <div class="col s8 l8">
                        <p><strong>Home Office</strong></p>
                        <p>Avenida Paranaíba, 1051</p>
                        <p>Centro - Goiânia, GO</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 l4">
                    <div class="col s4 l4">
                        <span class="amarelo">E-mail:</span>
                    </div>
                    <div class="col s8 l8">
                        <p>contato@girapix.com</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 l4">
                    <div class="col s4 l4">
                        <span class="amarelo">Telefones:</span>
                    </div>
                    <div class="col s8 l8">
                        <p>(62) 3434-5897</p>
                        <p>(62) 9 8210-1834</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row container sociais">
            <div class="sociais-itens col s12 l4 offset-l4">
                <a href="#" data-aos="zoom-in"><img src="<?php bloginfo('template_url'); ?>/images/facebook.svg" alt="Facebook"></a>
                <a href="#" data-aos="zoom-in"><img src="<?php bloginfo('template_url'); ?>/images/instagram.svg" alt="Instagram"></a>
                <a href="#" data-aos="zoom-in"><img src="<?php bloginfo('template_url'); ?>/images/whatsapp.svg" alt="WhatsApp"></a>
                <a href="#" data-aos="zoom-in"><img src="<?php bloginfo('template_url'); ?>/images/telegram.svg" alt="Telegram"></a>
            </div>
        </div>
    </section>
</main>