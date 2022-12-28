<x-layout>

    <!-- single blog section -->
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto text-center">
          <img
            src="https://creativecoder.s3.ap-southeast-1.amazonaws.com/blogs/GOLwpsybfhxH0DW8O6tRvpm4jCR6MZvDtGOFgjq0.jpg"
            class="card-img-top"
            alt="..."
          />
          <h3 class="my-3">{{$blog->title}}</h3>
          <h5 class="badge bg-primary">{{$blog->category->name}}</h5>
          <h5>Author :: {{$blog->author->name}}</h5>
          <p>{{$blog->created_at->diffForHumans()}}</p>
          <p class="lh-md">
            {{$blog->body}}
          </p>
        </div>
      </div>
    </div>

    <x-subscribe/>
    <x-blog_you_may_like :randomBlogs="$randomBlogs"/>
</x-layout>