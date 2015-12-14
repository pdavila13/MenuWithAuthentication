<li class="active" id="{{ $id }}">
    @if ($url != null)
        <a href="{{ $url() }}">
    @endif
        @if ($icon != null)
            <i class='fa {{ $icon }}'></i>
        @endif
            <span>{{ $title }}</span>
    @if ($url != null)
        </a>
    @endif
</li>

{{--<!-- Sidebar Menu -->--}}
{{--<ul class="sidebar-menu">--}}
    {{--<li class="header">HEADER</li>--}}
    {{--<!-- Optionally, you can add icons to the links -->--}}
    {{--<li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>Home</span></a></li>--}}
    {{--<li><a href="#"><i class='fa fa-link'></i> <span>Another Link</span></a></li>--}}
    {{--<li class="treeview">--}}
        {{--<a href="#"><i class='fa fa-link'></i> <span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>--}}
        {{--<ul class="treeview-menu">--}}
            {{--<li><a href="#">Link in level 2</a></li>--}}
            {{--<li><a href="#">Link in level 2</a></li>--}}
        {{--</ul>--}}
    {{--</li>--}}

    {{--@foreach ($menu as $menuItem)--}}
    {{--{{ $menuItem }}--}}
    {{--@endforeach--}}
{{--</ul><!-- /.sidebar-menu -->--}}