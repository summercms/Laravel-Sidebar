<li class="{{ $item->state }} @if($item->hasItems()) treeview @endif">
    <a href="{{ $item->route }}" @if($item->hasAppend())class="hasAppend"@endif>
        <i class="{{ $item->icon or 'fa fa-angle-double-right' }}"></i>
        <span>{{ $item->name }}</span>

        @if($item->hasBadge())
            @foreach($item->badges as $badge)
                {!! $badge->render() !!}
            @endforeach
        @endif

        @if($item->hasItems())<i class="fa fa-angle-left pull-right"></i>@endif
    </a>

    @if($item->hasAppend())
        @foreach($item->appends as $append)
            {!! $append->render() !!}
        @endforeach
    @endif

    @if($item->hasItems())
        <ul class="treeview-menu">
            @foreach($item->items as $item)
                @include('acp::layouts.partials.sidebar.item')
            @endforeach
        </ul>
    @endif
</li>