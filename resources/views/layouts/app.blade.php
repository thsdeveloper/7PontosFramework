<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{setting('site.title')}} - {{setting('site.description')}}</title>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
  <link href="{{ asset('css/screen.css') }}" rel="stylesheet">


  <script type="text/javascript" src="js/accordian.pack.js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/easySlider1.7.js"></script>

</head>
<body>
  <div id="container">


    <div id="header">
      <div id="logo">
        <a href="{{url('')}}" title="">
          <img src="{{url('storage/'.setting('site.logo'))}}" alt="{{setting('site.title')}}" title="{{setting('site.title')}}"  border="0">
        </a>
      </div>
      <div id="menu">
            {{ menu('menu_principal')}}
      </div>


    </div>
    <div id="content">
      @yield('content')
    </div>

  </div>

  <div id="footer">
    <div id="area_footer">
      <div id="redes"></div>
      <div id="endereco">
      </strong>
      Brasil 21 - Edifício Business Center Tower <br />
      SHS Qd. 06, Conj. A,  Bl. C. 15º andar. Salas 1501 e 1502.<br />
      (61) 3964-5800 / 3964-5600 - Fax: (61) 3322-7930<br />
      opelegis@opelegis.com.br</h4>
    </div>
  </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
