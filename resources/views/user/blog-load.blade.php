@foreach ($allBlog as $allBlogKey => $allBlogValue)
    <div class="blog_article_box mb-3 pb-3" style="display:block;">
        <div class="row g-4 align-items-center">
        <div class="col-lg-4 col-md-6">
            <a href="{{url('/blog-details/'.$allBlogValue->slug)}}" class="all_article_img"><img src="{{asset('assets/blog_images/'.$allBlogValue->image)}}" alt="" class="img-fluid"></a>
        </div>
        <div class="col-lg-8 col-md-6">
            <div class="article_text_box">
            <div class="article_header">
                <a href="{{url('/blog/blog-category/'.App\Helpers::getBlogCategoryIdBySlug($allBlogValue->categoryId))}}">{{App\Helpers::getBlogCategoryIdByName($allBlogValue->categoryId)}}</a>
            </div>
            <div class="artical_caption">
                <a href="{{url('/blog-details/'.$allBlogValue->slug)}}">
                <h1>{{$allBlogValue->title}}</h1>
                </a>
            </div>
            <div class="article_release">
            @php
                $userDetailsAllBlog = App\Helpers::getUserDetails($allBlogValue->userId);
            @endphp
            <p>{{$userDetailsAllBlog->name}} <span>{{date('jS F Y',strtotime($allBlogValue->created_at))}}</span></p>
            </div>
            <div class="article_para">
                <p>{{Str::words(strip_tags($allBlogValue->content), 50, ' ...')}}</p>
            </div>
            </div>
        </div>
        </div>
    </div>
    @endforeach
