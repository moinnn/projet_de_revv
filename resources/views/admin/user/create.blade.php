@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="{{ route('admin.user.store') }}" method="post">
            @csrf
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            <div class="form-group row">
                <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                <div class="col-md-6">
                    <select id="gender" name="gender"
                            class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}">
                        <option>{{ __('Civility') }}</option>
                        <option value="1" @if(old('gender') ==1)selected @endif> {{ __('Male') }}</option>
                        <option value="2" @if(old('gender') ==2)selected @endif>{{ __('Female') }}</option>
                    </select>
                    @if ($errors->has('gender'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('gender') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Lastname') }}</label>
                <div class="col-md-6">
                    <input id="lastname" type="text" name="lastname" value="{{ old('lastname') }}"
                           class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}">
                    @if ($errors->has('lastname'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('lastname') }}</strong>
                        </span>
                    @endif

                </div>
            </div>

            <div class="form-group row">
                <label for="firstname"
                       class="col-md-4 col-form-label text-md-right">{{ __('Firstname') }}</label>
                <div class="col-md-6">
                    <input id="firstname" type="text" name="firstname" value="{{ old('firstname') }}"
                           class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}">
                    @if ($errors->has('firstname'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('firstname') }}</strong>
                        </span>
                    @endif

                </div>
            </div>

            <div class="form-group row">
                <label for="birthdate"
                       class="col-md-4 col-form-label text-md-right">{{ __('Birthdate') }}</label>
                <div class="col-md-6">
                    <input id="birthdate" type="date" name="birthdate" value="{{ old('birthdate') }}"
                           class="form-control{{ $errors->has('birthdate') ? ' is-invalid' : '' }}">
                    {{--Attention le type de champ requis ne fonctionne pas sur firefox --}}
                    @if ($errors->has('birthdate'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('birthdate') }}</strong>
                        </span>
                    @endif
                </div>
            </div>


            <div class="form-group row">
                <label for="address_line1"
                       class="col-md-4 col-form-label text-md-right">{{ __('Address line 1') }}</label>
                <div class="col-md-6">
                    <input id="address_line1" type="text" name="address_line1" value="{{ old('address_line1') }}"
                           class="form-control{{ $errors->has('address_line1') ? ' is-invalid' : '' }}">
                    @if ($errors->has('address_line1'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('address_line1') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="address_line2"
                       class="col-md-4 col-form-label text-md-right">{{ __('Address line 2') }}</label>
                <div class="col-md-6">
                    <input id="address_line2" type="text" name="address_line2" value="{{ old('address_line2') }}"
                           class="form-control{{ $errors->has('address_line2') ? ' is-invalid' : '' }}">
                    @if ($errors->has('address_line2'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('address_line2') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="zipcode"
                       class="col-md-4 col-form-label text-md-right">{{ __('Zip code') }}</label>
                <div class="col-md-6">
                    <input id="zipcode" type="text" name="zipcode" value="{{ old('zipcode') }}"
                           class="form-control{{ $errors->has('zipcode') ? ' is-invalid' : '' }}">
                    @if ($errors->has('zipcode'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('zipcode') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>
                <div class="col-md-6">
                    <input id="city" type="text" name="city" value="{{ old('city') }}"
                           class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}">
                    @if ($errors->has('city'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('city') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="email"
                       class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                <div class="col-md-6">
                    <input id="email" type="email"
                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                           name="email" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $errors->first('email') }}</strong>
                       </span>
                    @endif
                </div>
            </div>

            <div id="pwdByEmail" class="form-group row col-md-6 offset-4" style="display: none">

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="sendPwdByEmail" id="sendPwdByEmail" value="1"
                           @if(old('sendPwdByEmail') == 1) checked @endif>
                </div>
                <label for="sendPwdByEmail" style="color: seagreen;"
                       class="col-form-label text-md-right">{{ __('Send password by email') }}</label>
            </div>

            <div class="form-group row">
                <label for="cellphone"
                       class="col-md-4 col-form-label text-md-right">{{ __('Cellphone') }}</label>
                <div class="col-md-6">
                    <input id="cellphone" type="text" name="cellphone" value="{{ old('cellphone') }}"
                           class="form-control{{ $errors->has('cellphone') ? ' is-invalid' : '' }}">
                    @if ($errors->has('cellphone'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('cellphone') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div id="pwdByCellphone" class="form-group row col-md-6 offset-4" style="display: none">

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="sendPwdByCellphone" id="sendPwdByCellphone"
                           value="1"
                           @if(old('sendPwdByCellphone') == 1) checked @endif>
                </div>
                <label for="sendPwdByCellphone" style="color: seagreen;"
                       class="col-form-label text-md-right">{{ __('Send password on this phone') }}</label>
            </div>

            <div class="form-group row">
                <label for="phone"
                       class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>
                <div class="col-md-6">
                    <input id="phone" type="text" name="phone" value="{{ old('phone') }}"
                           class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}">
                    @if ($errors->has('phone'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="volonteer"
                       class="col-md-4 col-form-label text-md-right">{{ __('Volonteer') }}</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="volonteer" id="volonteer" value="1"
                           @if(old('volonteer') == 1) checked @endif>
                </div>
            </div>

            <div class="form-group row">
                <label for="details_volonteer"
                       class="col-md-4 col-form-label text-md-right">{{ __('Details volonteer') }}</label>
                <div class="col-md-6">
                    <input id="details_volonteer" type="text" name="details_volonteer"
                           value="{{ old('details_volonteer') }}"
                           class="form-control{{ $errors->has('details_volonteer') ? ' is-invalid' : '' }}">
                    @if ($errors->has('details_volonteer'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('details_volonteer') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="delivery"
                       class="col-md-4 col-form-label text-md-right">{{ __('Delivery') }}</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="delivery" id="delivery" value="1"
                           @if(old('delivery') == 1) checked @endif>
                </div>
            </div>

            <div class="form-group row">
                <label for="newspaper"
                       class="col-md-4 col-form-label text-md-right">{{ __('Newspaper') }}</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="newspaper" id="newspaper" value="1"
                           @if(old('newspaper') == 1) checked @endif>
                </div>
            </div>

            <div class="form-group row">
                <label for="newsletter"
                       class="col-md-4 col-form-label text-md-right">{{ __('Newsletter') }}</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="newsletter" id="newsletter" value="1"
                           @if(old('newsletter') == 1) checked @endif>
                </div>
            </div>

            <div class="form-group row">
                <label for="comment"
                       class="col-md-4 col-form-label text-md-right">{{ __('Comment') }}</label>
                <div class="col-md-6">
                    <input id="comment" type="text" name="comment" value="{{ old('comment') }}"
                           class="form-control{{ $errors->has('comment') ? ' is-invalid' : '' }}">
                    @if ($errors->has('comment'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('comment') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="alert"
                       class="col-md-4 col-form-label text-md-right">{{ __('Alert') }}</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="alert" id="alert" value="1"
                           @if(old('alert') == 1) checked @endif>
                </div>
            </div>

            <h3>{{ __('Partner') }}</h3>
            <div class="form-group row">
                <label for="gender_joint"
                       class="col-md-4 col-form-label text-md-right">{{ __('Partner Gender') }}</label>
                <div class="col-md-6">
                    <select id="gender_joint" name="gender_joint" class="form-control">
                        <option value="0"
                                @if(old('gender_joint') ==0)selected @endif> {{ __('Partner Gender') }}</option>
                        <option value="1" @if(old('gender_joint') ==1)selected @endif> {{ __('Male') }}</option>
                        <option value="2" @if(old('gender_joint') ==2)selected @endif>{{ __('Female') }}</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="lastname_joint"
                       class="col-md-4 col-form-label text-md-right">{{ __('Partner Lastname') }}</label>
                <div class="col-md-6">
                    <input id="lastname_joint" type="text" name="lastname_joint" value="{{ old('lastname_joint') }}"
                           class="form-control{{ $errors->has('lastname_joint') ? ' is-invalid' : '' }}">
                    @if ($errors->has('lastname_joint'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('lastname_joint') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="firstname_joint"
                       class="col-md-4 col-form-label text-md-right">{{ __('Partner Firstname') }}</label>
                <div class="col-md-6">
                    <input id="firstname_joint" type="text" name="firstname_joint" value="{{ old('firstname_joint') }}"
                           class="form-control{{ $errors->has('firstname_joint') ? ' is-invalid' : '' }}">
                    @if ($errors->has('firstname_joint'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('firstname_joint') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="birthdate_joint"
                       class="col-md-4 col-form-label text-md-right">{{ __('Partner Birthdate') }}</label>
                <div class="col-md-6">
                    <input id="birthdate_joint" type="date" name="birthdate_joint" value="{{ old('birthdate_joint') }}"
                           class="form-control{{ $errors->has('birthdate_joint') ? ' is-invalid' : '' }}">
                    {{--Attention le type de champ requis ne fonctionne pas sur firefox --}}
                    @if ($errors->has('birthdate_joint'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('birthdate_joint') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="email_joint"
                       class="col-md-4 col-form-label text-md-right">{{ __('Partner Email') }}</label>
                <div class="col-md-6">
                    <input id="email_joint" type="email" name="email_joint" value="{{ old('email_joint') }}"
                           class="form-control{{ $errors->has('email_joint') ? ' is-invalid' : '' }}">
                    @if ($errors->has('email_joint'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email_joint') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>
    </div>

    <script>

        //Script for dynamic checkbox send by email and phone
        $('#email').on('blur keypress', function () {
            if ($(this).val()) {
                $('#pwdByEmail').css('display', 'block');
                if ($('#cellphone').val()) {
                    $('#pwdByCellphone').css('display', 'block');
                }
            } else {
                $('#pwdByEmail').css('display', 'none');
                $('#pwdByCellphone').css('display', 'none');
            }
        });

        $('#cellphone').on('blur keypress', function () {
            if ($('#email').val()) {
                if ($(this).val()) {
                    $('#pwdByCellphone').css('display', 'block');
                } else {
                    $('#pwdByCellphone').css('display', 'none');
                }
            }
        });

        //refresh display block on validate errors
        $(document).ready(function () {
            if (($('#sendPwdByEmail')).prop('checked')) {
                $('#pwdByEmail').css('display', 'block');
            }
            if (($('#sendPwdByCellphone')).prop('checked')) {
                $('#pwdByCellphone').css('display', 'block');
            }
        });

    </script>
@endsection
