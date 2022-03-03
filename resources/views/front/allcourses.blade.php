@extends('front.layout')

@section('content')
   <!-- breadcrumb start-->
   <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Our Courses</h2>
                            <p>Homepage<span>/</span>Courses</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--::review_part start::-->
    <section class="special_cource padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>popular courses</p>
                        <h2>Special Courses</h2>

                        <div class="input-group mb-3">
                                    <input type="text" id="keyword" name="email" class="form-control my-5" placeholder='Enter course name'
                                        onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter course name'">
                                        </div>
                    </div>
                </div>
            </div>
            <div id="allcourses" class="row">
                @foreach($allcourses as $c)
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="{{ asset('uploads/courses/'.$c->img) }}" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="{{ route('front.cat' , $c->cat->id) }}" class="btn_4">{{ $c->cat->name }}</a>
                            <h4>${{ $c->price }}</h4>
                            <a href="{{ route('front.show' , [$c->cat->id , $c->id]) }}"><h3>{{ $c->name }}</h3></a>
                            <p>{{ $c->desc }}</p>
                            <div class="author_info">
                                <div class="author_img">
                                    <img src="{{asset('uploads/trainrs/' .$c->trainer->img)}}" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><{{ $c->trainer->name }}</h5>
                                    </div>
                                </div>
                           
                            </div>
                        </div>

                    </div>
                </div>
               @endforeach
           
               
            </div>
        </div>
    </section>
    <!--::blog_part end::-->

@endsection

@section('script')

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>

$('#keyword').keyup(function(){
let keyword = $(this).val()
$('#allcourses').empty()


     $.ajax({
         type: "GET" ,
           url: "{{route('front.search')}}" + "?keyword=" + keyword,
               contentType: false,
                  processData: false,
                       success: function(data){

                       $('#allcourses').empty()
 
              for(course of data){

                 $('#allcourses').append(`

   <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="{{ asset('uploads/courses/${c.img}') }}" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="{{ url('front.cat')}}${c.cat.id}" class="btn_4"> ${c.cat.name} </a>
                            <h4>${$c.price}</h4>
                            <a href="{{ url('front.show')}}${c.cat.id}.${c.id}") }}"><h3>{{ $c->name }}</h3></a>
                            <p>${c->desc}</p>
                          
                        </div>

                    </div>
                </div>

                                             `)
  
  
  }
    }
})

})
</script>


@endsection