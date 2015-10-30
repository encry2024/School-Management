@extends('template')


@section('header')
<div class="ui menu inverted" style="border-radius: 0rem !important;">
    <div class="header item">
        Welcome to HIMC
    </div>
    <div class="header item right">
        Current User :: Guest
    </div>
</div>
@stop


@section('content')
<br><br><br><br>
<div class="ui form grid">
    <div class="seven wide column segment grid centered">
        <div class="column">
            <div class="ui form">
                <form action="{{ url('/auth/login/') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="ui teal container segment">
                        <label class="ui teal ribbon label right" style="font-size: 16px;">Log-in your account</label>
                        
                        <br><br><br>

                        <div class="field">
                            <label for="email">E-mail</label>
                            <div class="ui left icon input">
                                <input type="email" name="email" id="email" placeholder="E-mail">
                                <i class="mail icon"></i>
                            </div>
                        </div>

                        <div class="field">
                            <label for="password">Password</label>
                            <div class="ui left icon input">
                                <input type="password" name="password" id="password" placeholder="Password">
                                <i class="lock icon"></i>
                            </div>
                        </div>

                        <br>

                        <div class="ui buttons right floated">
                            <button class="ui button primary">Log-in</button>
                            <div class="or"></div>
                            <button class="ui positive button">Register</button>
                        </div>

                        <br><br>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop