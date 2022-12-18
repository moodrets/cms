<section class="container mx-auto px-5">
    <div class="site-breadcrumbs flex items-center flex-wrap mt-8">
        @foreach ($attributes['breadcrumbs'] as $breadcrumb)
        <a class="site-breadcrumbs__item text-neutral hover:underline" href="{{$breadcrumb->path == '/' ? '/' : '/'.$breadcrumb->path}}">{{$breadcrumb->subtitle}}</a>
        <span class="site-breadcrumbs__separator text-neutral mx-3">-</span>
        @endforeach

        <span class="site-breadcrumbs__item text-neutral-10">{{$attributes['page']->subtitle}}</span>
    </div>
</section>
