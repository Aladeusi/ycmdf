@extends('layouts.blog')

@section('content')


 <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="entry-welcome">

                        @if(isset($CategoryDetails))
                        <p style="text-transform: uppercase;">Browsing category</p>
                        <h4>{{$CategoryDetails->name}}</h4>
                        <p>
                            {{$CategoryDetails->desc}}
                        </p>
                        @else


                        <h4>BLOG</h4>
                        <p>
                            Collection of comprehensive hacking posts
                        </p>

                        @endif
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </header>









  <div id="main-content" class="main-content clearfix">
        <div id="primary" role="main">
            <div id="blog-entry" class="clearfix">

                @foreach($Posts as $Post)


                <article id="post-24" class="entry-post clearfix post-24 post type-post status-publish format-image has-post-thumbnail hentry category-travel tag-fashion tag-hipster tag-photo tag-travel post_format-post-format-image" itemscope itemtype="">
                    <figure class="post-thumbnail scrollflow -slide-top -opacity" data-scrollflow-start="10">
                        <a href="#">
                            <img src="{{asset('uploads/'.$Post->cover)}}" title="" alt="post cover" />
                        </a>
                    </figure>
                    <div class="entry-content scrollflow -slide-bottom -opacity " data-scrollflow-start="20">
                        <h3 class="entry-title">
                            <a href='#' style="text-transform: capitalize;">
                                {{$Post->title}}
                            </a>
                        </h3> 
                         <span class="entry-date"> <span class="date-line"></span>  
                         <a href="#">
                         {{date('F d, Y', strtotime($Post->created_at))}}&nbsp;|&nbsp;
                        {{date('h:i',strtotime($Post->created_at))}}
                     </a> 
                        </span>
                        <!--<p>

                           ..
                    </p>-->
                        <div class="post-format"> <i class="fa fa-picture-o"></i>
                        </div>
                        <div class="readmore-wrap">
                            <div class="entry-more clearfix">...</div> 
                            <a class="more-post-link" href="{{route('blog.post.view',['id'=>$Post->id])}}">Read Article</a>
                        </div>
                    </div>
                </article>


                @endforeach


               


                </div>




                <!--navigation-->
                <div class="navigation-block nav-homepage">
                    <div class="pagination clearfix" role="navigation">

                        {{$Posts->links()}}
                    </div>
                </div>



            </div>
        </div>






@endsection
