@extends('layouts.app')
<div class="container">
  <div class="mold-banner">
    @include('banners.home')
  </div>
</div>
@section('content')


  <div id="banner">

    <!-- Slideshow container -->
    <div class="slideshow-container">
      <!-- Full-width images with number and caption text -->
      @foreach($banners as $b)
        <div class="mySlides broadfade">
          <img src="{{url('storage/'.$b->image)}}" style="width:100%">

        </div>
      @endforeach



      <!-- Next and previous buttons -->
      <a class="prev" onClick="plusSlides(-1);">&#10094;</a>
      <a class="next" onClick="plusSlides(1);">&#10095;</a>
    </div>


  </div>


  <div id="col_left">
    <div id="tit_col">{{setting('livros.title')}}</div>
    <div id="img_col">
      <a href="{{url('/books')}}" title="" border="0">
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
      <a href="{{url('post/'.$postDestaque->slug)}}" title=""><img src="{{url('storage/'.$postDestaque->image)}}" width="268"/></a>
    </div>
    <div id="desc_destaque">
      <span class="link">
        <a href="{{url('post/'.$postDestaque->slug)}}" title="">{{$postDestaque->excerpt}}</a></span>		</div>
        <div id="conheca"><a href="{{url('/posts')}}" title="">Veja todos</a></div>
      </div>

      <div id="col_middle">
        <div id="tit_cursos_oferecidos">{{setting('cursos.title')}}</div>
        <div id="img_mid"><a href="{{url('/cursos')}}" title="">
          <img src="{{url('storage/'.setting('cursos.img'))}}"/></a></div>
          <div id="desc_img_curso">
            {{setting('cursos.text_intro')}}
          </div>
          <div id="conheca_cursos">
            <a href="{{url('/cursos')}}" title="">Conheça</a>
          </div>


          <div id="tit_destaque_curso">Vídeos</div>
          <div id="img_destaque_curso"><iframe width="258" height="180" src="http://www.youtube.com/embed/{{setting('site.video')}}" frameborder="0" allowfullscreen></iframe></div>
          <div id="desc_destaque_curso">
            <span class="link"><a href="#" title="">{{setting('site.text_intro_youtube')}}</a></span>
          </div>
        </div>

        <div id="col_rigth">

          <div id="infor">
            <div id="tit_informtativos">Pareceres e textos publicados</div>
            <ul class="ul_infor">
              @forelse ($pareceres as $parecer)
                <li>
                  <span class="data_infor">{{$parecer->created_at}}</span><br>
                  <p class="p2"><a href="{{url('/post/'.$parecer->slug)}}" title="">{{$parecer->title}}</a></p>
                </li>
              @empty
                <p>Sem textos em destaque</p>
              @endforelse
            </ul>
            <div id="veja_todos"><a href="{{url('/pareceres')}}" title="">Veja todos</a></div>
          </div>

          <div id="tit_destaque_curso">Outros</div>

          <div id="outros">

            <ul class="ul_outros">
              <li class="link"><a href="{{url('/fale-conosco')}}" title="">Solicitação de textos e pareceres</a></li>
            </ul>

          </div>

        </div>
      @endsection
