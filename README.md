
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./imagens/icon_logo_v1.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Palanquin+Dark:wght@600&family=Poppins:wght@300;600&family=Sarala&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<link rel="stylesheet" href="./stilo.css">
<script  src="https://code.jquery.com/jquery-3.6.0.js"></script>    
<script type="text/javascript">
    $(window).on('scroll', function(){
        if($(window).scrollTop()){
            $('nav').addClass('azul');
        }else{
            $('nav').removeClass('azul');
        }
    })
</script>

    <title>Tríplice</title>
</head>
<body class="gradient">   
    <section>
        <header>
                <nav>                    
                    <div>
                        <a href="index.html">
                            <img src="./imagens/logo_triplice_oficial_vf.png" width="146">  
                        </a>                            
                            </div>
                        <ul>
                            <li><strong><a href="#">CONHEÇA-NOS</a></strong></li>
                            <li><strong><a href="#">SOLUÇÕES</a></strong></li>           
                            <li><strong><a href="#">CONTATO</a></strong></li>
                            <li><strong><a href="#">IDÉIAS DESENVOLVIDAS</a></strong></li>
                            <li><strong><a href="#">EXPERIMENTE</a></strong></li>
                        </ul>
                </nav>
        </header> 
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
            $(window).on('scroll', function(){
            if($(window).scrollTop()){
                $('h1').addClass('letreiroatriplice');
            }else{
                $('nav').removeClass('azul');
            }
        })    
    </script>      
<div class="titulo_index" >                    
    <div id="text-block-bem-vinddo">                
        <img src="./imagens/IMG_20210820_010511.jpg" alt=""> 
        <h1 class="letreirobemvindo"><string>BEM VINDO</string></h1>
        <h1 class="letreiroTriplice"><string>A TRÍPLICE</string></h1>
    </div> 
  </div>
<br>
<main>
    <div class="container">
            <div class="cards">
                <div class="card card--1" data-aos="fade-right">
                    <img src="./imagens/monitor.png" alt="" width="150">
                    <strong><h1>SOLUÇÕES WEB</h1></strong>
                    <p><strong>
                        A Tríplice oferece soluções Web inovadoras </br> desenvolvidas
                        byte a byte para você!
                    </strong>                         
                    </p>
                    <button><strong>EXPERIMENTE</strong> </button>
                </div>           




            <div class="card card--2" data-aos="fade-left">
                <img src="./imagens/notebook.png" alt="" width="150">
                <strong><h1>MANUTENÇÃO DE PERIFÉRICOS</h1></strong>
                <p><strong>
                    Deu ruim no celular, notebook ou computador?</br> pode ficar calmo
                    que a Trplice te ajuda nisso
                    </strong>                                 
                </p>
                <button><strong>VENHA CONHECER</strong> </button>
            </div>               
            </div>
            <div class="card card--3" data-aos="fade-up">
                <img src="./imagens/Celular.png" alt="" width="200">
                <strong><h1>APLICATIVOS MOBILE</h1></strong>
                <p><strong>
                    Apps intuitivos com recursos atualizados, manuseabilidade</br> eficiente
                    para proporcionar o melhor do conforto. 
                </strong>                                 
                </p>
                <button><strong>EXPLORE</strong> </button>
            </div>
           
    </div>

</main>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
        duration: 500,
    }     
    );
  </script>

    <footer>
        <p>©Copyright2021 todos direitos reservados</p>
       
    </footer>
    

</body>
</html>
