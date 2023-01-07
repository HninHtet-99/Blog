<div class="">
    <div class="dropdown">
      <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    {{  isset($currentCategory) ? $currentCategory->name : 'Filtered By Categories'}}
      </button>
      <ul class="dropdown-menu">
        @foreach ($categories as $category)
          <li><a class="dropdown-item" href="/?category={{$category->slug}}">{{$category->name}}</a></li>   
        @endforeach
      </ul>
    </div>
    {{-- <select name="" id="" class="p-1 rounded-pill mx-3">
      <option value="">Filter by Tag</option>
    </select> --}}
  </div>