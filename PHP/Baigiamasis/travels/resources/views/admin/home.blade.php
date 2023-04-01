<link rel="stylesheet" href="{{ asset('css/admin/main.css') }}">

<div>
    <audio src="{{asset('storage/music/travels2.mp3')}}" loop autoplay ></audio>
    <img  class="travels" src="https://travelthe.world/wp-content/uploads/2019/02/travel-the-world.png" alt="">

    <div class="container">
        <a href="{{route('admin.destinations.index')}}" class="button">
          <div class="button__line"></div>
          <div class="button__line"></div>
          <span class="button__text">Press me</span>
          <div class="button__drow1"></div>
          <div class="button__drow2"></div>
        </a>
    </div>
</div>
