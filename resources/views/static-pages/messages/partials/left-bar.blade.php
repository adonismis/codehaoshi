<div class="four wide column ">
    <div class="ui fluid large vertical pointing  violet menu" style="border: 1px solid #d3e0e9;">
        <a class="item" href="/messages">
            <i class="icon envelope nofloat grey"></i> &nbsp;私信

        </a>

        <a class="item @if(request()->url() == route('notifications.index')) active @endif"
           href="{{ route('notifications.index') }}">
            <i class="icon bell nofloat grey"></i> &nbsp;通知消息
        </a>
    </div>
</div>
