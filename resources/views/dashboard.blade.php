@push('css')
    <link href="{{ url('css/style.css')  }}" rel="stylesheet">
@endpush
@push('js')
    {{-- <script src="https://cdn.socket.io/4.2.0/socket.io.min.js"
             integrity="sha384-PiBR5S00EtOj2Lto9Uu81cmoyZqR57XcOna1oAuVuIEjzj0wpqDVfD0JA9eXlRsj"
             crossorigin="anonymous"></script>--}}
    <script src="https://cdn.socket.io/socket.io-1.3.4.js"></script>

    <script src="{{ url('js/jquery-1.10.1.min.js')  }}"></script>
    <script src="{{ url('js/script.js')  }}"></script>
    <script type="text/javascript">
        var userId = '{{ auth()->user()->id  }}';
        var userName = '{{ auth()->user()->name  }}';
    </script>
@endpush
<x-app-layout>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div id="chat-sidebar">
                    @foreach(App\Models\User::all() as $user)
                        <div id="sidebar-user-box" class="100">
                            <img src="{{url('image/user.png')}}"/>
                            <span id="slider-username"> {{ $user->name }} </span>
                            <span class="user_status online">&nbsp;</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
