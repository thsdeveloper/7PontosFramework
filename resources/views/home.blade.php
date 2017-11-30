@extends('layouts.app')
<div class="container">
    <div class="mold-banner">
        @include('banners.home')
    </div>
</div>
@section('content')


    <div id="banner">
      <div id="slider">
        <ul>
          <li><a href="#"><img src="{{url('/storage/banners/November2017/banner_14.jpg')}}" width="959" height="207" /></a></li>
        </ul>
      </div>
    </div>


    <div id="col_left">
      <div id="tit_col">{{setting('livros.title')}}</div>
      <div id="img_col">
        <a href="livros.php" title="" border="0">
          <img src="{{url('storage/'.setting('livros.img'))}}"/>
        </a>
      </div>
      <div id="desc_img">
        {{setting('livros.text_intro')}}
      </div>
      <div id="conheca">
        <a href="{{url('/books')}}" title="">Conheça</a>
      </div>


      <div id="tit_destaque">Destaques</div>
      <div id="img_destaque">
        <img src="uploads/destaques/1511353507foto.jpg" width="268"/>
      </div>
      <div id="desc_destaque">
        <span class="link"><a href="destaques.php?id=80" title="">Dra. Lirian Cavalhero conduz a reunião dos jurídicos da FEBRAC/FENAVIST para tratar dos reflexos da Reforma Trabalhista nas negociações coletivas.  </a></span>		</div>
        <div id="conheca"><a href="todos_destaques.php" title="">Veja todos</a></div>
      </div>

      <div id="col_middle">
        <div id="tit_cursos_oferecidos">{{setting('cursos.title')}}</div>
        <div id="img_mid"><a href="cursos.php" title="">
          <img src="{{url('storage/'.setting('cursos.img'))}}"/></a></div>
        <div id="desc_img_curso">
          {{setting('cursos.text_intro')}}
        </div>
        <div id="conheca_cursos">
          <a href="{{url('/cursos')}}" title="">Conheça</a>
        </div>


        <div id="tit_destaque_curso">Vídeos</div>
        <div id="img_destaque_curso"><iframe width="258" height="180" src="http://www.youtube.com/embed/Swm6KFNijrE" frameborder="0" allowfullscreen></iframe></div>
        <div id="desc_destaque_curso">
          <span class="link"><a href="#" title="">Julgamento sobre responsabilidade da Administração por inadimplemento de terceirizado</a></span>
        </div>
      </div>

      <div id="col_rigth">

        <div id="infor">

          <div id="tit_informtativos">Pareceres e textos publicados</div>

          <ul class="ul_infor">


            <li>
              <span class="data_infor">06/06/2017</span><br>
              <p class="p2"><a href="parecer.php?id=61" title="">REGULAMENTAÇÃO DA TERCEIRIZAÇÃO – ENFIM SEGURANÇA JURÍDICA PARA A TOMADORA DO SERVIÇO</a></p>
            </li>


            <li>
              <span class="data_infor">06/06/2017</span><br>
              <p class="p2"><a href="parecer.php?id=60" title="">DIFERENÇAS ENTRE AS NORMAS APLICADAS À GORJETA ATUALMENTE E AS MODIFICAÇÕES INTRODUZIDAS PELA LEI Nº 13419/2017</a></p>
            </li>


            <li>
              <span class="data_infor">06/06/2017</span><br>
              <p class="p2"><a href="parecer.php?id=59" title="">PRINCIPAIS PONTOS DA REFORMA TRABALHISTA</a></p>
            </li>



          </ul>

          <div id="veja_todos"><a href="pareceres.php" title="">Veja todos</a></div>

        </div>

        <div id="tit_destaque_curso">Outros</div>

        <div id="outros">

          <ul class="ul_outros">
            <li class="link"><a href="fale_conosco.php" title="">Solicitação de textos e pareceres</a></li>
          </ul>

        </div>

      </div>
@endsection
