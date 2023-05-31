@extends("template")

@section('content')
  <div>
    <h1 class="FontInter">Actualité</h1>
    <div class="actualiteContainer">
    <!-- Afficher les images des articles -->
    <img src="{{asset('images/article1.jpg')}}" alt="Article 1">
    <img src="{{asset('images/article2.jpg')}}" alt="Article 2">
   </div>
  </div>

  <div>
    <h1 class="FontInter">Vidéos</h1>
    <div class="videoContainer">
    <img src="images/video1.jpg" alt="Vidéo 1">
    <img src="images/video2.jpg" alt="Vidéo 2">
</div>
  </div>
@endsection
