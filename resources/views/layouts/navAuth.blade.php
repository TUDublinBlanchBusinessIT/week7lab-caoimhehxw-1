<ul class="nav navbar-nav pull-right text-light">

    @if(Auth::guest())

        <li>

            <a href="{{route('register')}}">Register

                <span class="glyphicon glyphicon-pencil"></span>

            </a>

        </li>

        <li>

            <a href="{{route('login')}}">Login

                <span class="glyphicon glyphicon-log-in"></span>

            </a>

        </li>

    @else

        <li>

            <a href="{{route('logoff')}}">Logoff

                <span class="glyphicon glyphicon-log-off"></span>

            </a>

        </li>

    @endif

</ul>

