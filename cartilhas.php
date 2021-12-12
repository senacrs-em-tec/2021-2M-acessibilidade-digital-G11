<?php 
  include_once 'includes/_dados.php';
  include_once 'includes/_head.php';
  include 'navbar.php';

?>

<link rel="stylesheet" href="OpenDyslexicR"/>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<body>
  <div id="cartilhas">
    <br>
      
      <center><h2 class="headline">Dislexia e Transtorno de Déficit de Atenção e Hiperatividade</h2></center>

      <hr>

      <div class="news">
        <center><h2>Lista dos Artigos</h2></center>
  </div>
  <div id="noticias">



  <div class="tab" >
    <button class="tablinks" onclick="openCity(event, 'TDAH')" id="defaultOpen">TDAH</button>
    <button class="tablinks" onclick="openCity(event, 'Dislexia')">Dislexia</button>
    <center><button class="tablinks" onclick="openCity(event, 'Dificuldades para a acessibilidade na internet')">Dificuldades para a acessibilidade na internet</button></center>
  </div>

  <div id="TDAH" class="tabcontent">
    <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
    <h3>TDAH</h3>
    <p>Transtorno de deficit de atenção e hiperatividade ou TDAH, é uma doença que inclui dificuldade de atenção, hiperatividade e impulsividade. Pessoas que tem esse deficit geralmente se entediam rápido de tarefas, não conseguindo manter uma constante concentração em apenas uma coisa. Algumas mudanças como nas fontes usadas no site, no cuidado ao escolher as cores utilizadas, na diminuição de anúncios e na exibição de apenas o que é pesquisado pelo usuário são algumas das coisas que auxiliam bastante o usuário a prestar mais atenção. Pessoas com TDAH assim como qualquer outra com ou sem deficiência precisam de auxílio, a atenção é algo muito importante para a utilização de qualquer site, seja ao comprar algo ou até mesmo ao ler uma notícia. Além do fato de termos que incluir o máximo de usuários de diferentes formas porque diversas pessoas precisam o acessar e acessar não se da só ao fato de entrar em um site, mas sim de poder entrar em um site e realmente entendê-lo e poder mexer com facilidade nele. A inclusão é importante para que seu site cresça cada vez mais e alcance mais pessoas, algo que auxilia esse crescimento e faz parte dessa inclusão é a contratação de pessoas com deficit de atenção não somente para auxiliar no entendimento e em como melhorar seu site, mas também contratar pessoas com TDAH o que já é outra forma de inclusão para elas, visto que sua deficiência desde pequena é alvo de muito preconceito e julgamento. E dar emprego para pessoas com deficiência é uma das melhores formas de inclusão e auxílio. </p>
  </div>

  <div id="Dislexia" class="tabcontent">
    <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
    <h3>Dislexia</h3>
    <p>   A dislexia é um distúrbio de aprendizagem caracterizado pela dificuldade de leitura, é uma doença crônica muito comum que pode durar pela vida toda, infelizmente não tem cura, mas o tratamento pode ajudar a diminuir e/ou atrasar o crescimento da mesma, para descobrir se a criança contém esse distúrbio é só prestar atenção em como ela age o cérebro da criança, por razões ainda não muito bem esclarecidas, tem dificuldade para encadear as letras e formar as palavras, e não relaciona direito os sons às silabas formadas.</p>
    <p>   Muitas pessoas pensam que essa doença pode afetar na inteligência da criança, mas não, afeta com certeza no desenvolvimento dela, mas com o devido aprendizado, com tutores escolares especializados, ela pode se tornar uma pessoa muito esperta. 
  As principais causas de dislexia estão relacionadas com fatores genéticos, problemas nas estruturas do cérebro e comunicação pouco eficaz entre alguns neurônios.</p>
    <p>    Essas crianças precisam muito do apoio familiar, para se sentir inclusa, para se sentir bem e para entender que essa doença não vai ser algo grave que possa acabar com a vida dela, aqui vai uma lista do que os pais podem fazer para ajudar e incentivar essas crianças:</p>
    <p>• Estimule sempre a aprendizado, incentivando a criança a aprender e a realizar atividades com palavras e textos;</p>
    <p>• Dê sempre orientações claras, com exemplos práticos;</p>
    <p>• Tenha o erro como forma de aprendizado e não de punição;</p>
    <p>• Esteja sempre em contato com professores, psicopedagogos, psicólogos e fonoaudiólogos das crianças, buscando novas maneiras de diminuir o impacto da dislexia no cotidiano;</p>
    <p>• Crie brincadeiras lúdicas como forma incentivo, por exemplo: forca, palavras cruzadas, caça palavras, etc.</p>
    <p>• Incentive a leitura, tanto em casa quanto na escola, e peça para a criança explicar o que leu, auxiliando-a a se lembrar de momentos do livro.</p>


  </div>

  <div id="Dificuldades para a acessibilidade na internet" class="tabcontent">
    <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
    <h3>Dificuldades para a acessibilidade na internet</h3>
    <p>Apesar do que todo mundo pensa, TDAH não é sobre não conseguir focar, mas sim tentar focar em muitas coisas ao mesmo tempo. Tendo isto em mente, ao visitarmos alguns sites a primeira coisa que normalmente aparece são propagandas com aquelas cores chamativas, vermelho, amarelo, entre outros, isso dificulta e muito para pessoas que tem TDAH, o melhor a ser utilizado seria um site limpo ou sem muitas propagandas chamativas assim, isto acaba incomodando pessoas com esse transtorno. </p>
    <p>Pessoas com Dislexia tem muita dificuldade em conseguir ler claramente as palavras, muitas vezes trocando letras que tem o som parecido ou trocando de lugar as letras, isso acontece por causa do estilo de letras usados na maioria dos sites pois é, por falta de uma palavra melhor, “a norma”. A dificuldade em ler as palavras postas em sua frente acaba dando a ansiedade para ler aquilo, o que agrava muito mais o problema, por isso cores calmantes como azul são boas para isso. </p>
  </div>

  <script>
  function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script> 
   

 

  
  
</body>
</html>