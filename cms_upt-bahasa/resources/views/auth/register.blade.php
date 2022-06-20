<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Register | UPT - Bahasa Polije</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{url('backend/node_modules/selectric/public/selectric.css')}}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{url('backend/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{url('backend/assets/css/components.css')}}">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="{{url('frontend/img/Logo3.png')}}" alt="logo" width="300" class="rounded">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>{{ __('Register') }}</h4></div>

              <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                  @csrf
                  <div class="form-group">
                    <label for="name">{{ __('Name') }}</label>
                      <input type="hidden" name="roles" value="USER">
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                      @error('name')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div> 
                  <div class="form-group">
                    <label for="phone">{{ __('Phone Number') }}</label>
                      <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                        @error('phone')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                  </div>
                  <div class="form-group">
                    <label for="email">{{ __('E-Mail Address') }}</label>
                      <input  id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                      @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  </div>
                  <div class="row">
                    <div class="form-group col-12">
                      <label for="gender">{{ __('Gender') }}</label><br>
                        <input id="gender" type="radio" class="@error('gender') is-invalid @enderror" name="gender" value="M" required autocomplete="gender" autofocus @if (old('gender')=='M')
                            checked
                          @endif> Male
                        <input id="gender" type="radio" class="@error('gender') is-invalid @enderror" name="gender" value="F" required autocomplete="gender" autofocus @if (old('gender')=='F')
                            checked
                          @endif> Female
                          @error('gender')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="place_of_birth">{{ __('Place of Birth') }}</label>
                    <input id="place_of_birth" type="text" class="form-control @error('place_of_birth') is-invalid @enderror" name="place_of_birth" value="{{ old('place_of_birth') }}" required autocomplete="place_of_birth" autofocus>
                      @error('place_of_birth')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="date_of_birth">{{ __('Date of Birth') }}</label>
                    <input id="date_of_birth" type="date" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{ old('date_of_birth') }}" required autocomplete="date_of_birth" autofocus>
                      @error('date_of_birth')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="last_education">{{ __('Last Education') }}</label>
                    <select type="text" class="form-control @error('service_type') is-invalid @enderror"
                    id="last_education" name="last_education" value="{{old('last_education')}}">
                      <option>- Select Your Last Education -</option>
                      <option>SMA / SMK</option>
                      <option>S1</option>
                      <option>S2</option>
                      <option>S3</option>
                    </select>
                    @error('last_education')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="address">{{ __('Address') }}</label>
                      <textarea id="address" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus cols="30" rows="10"></textarea>
                        @error('address')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                  </div>
                  <div class="form-group">
                    <label for="pas_photo">{{ __('Pas Photo') }}</label>
                      <input id="pas_photo" type="file" class="form-control @error('pas_photo') is-invalid @enderror" name="pas_photo" value="{{ old('pas_photo') }}" required autocomplete="pas_photo" autofocus>
                        @error('pas_photo')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                  </div>
                  <div class="form-group">
                    <label for="identity_card">{{ __('Identity Card') }}</label>
                      <input id="identity_card" type="file" class="form-control @error('identity_card') is-invalid @enderror" name="identity_card" value="{{ old('identity_card') }}" required autocomplete="identity_card" autofocus>
                        @error('identity_card')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                      <label for="password-confirm">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
                <div class="mt-5 text-muted text-center">
                  Already have an account? <a href="{{ route('login') }}">Login</a>
                </div>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; UPT - Bahasa Polije 2022
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{url('backend/assets/js/stisla.js')}}"></script>

  <!-- JS Libraies -->
  <script src="{{url('backend/node_modules/jquery-pwstrength/jquery.pwstrength.min.js')}}"></script>
  <script src="{{url('backend/node_modules/selectric/public/jquery.selectric.min.js')}}"></script>

  <!-- Template JS File -->
  <script src="{{url('backend/assets/js/scripts.js')}}"></script>
  <script src="{{url('backend/assets/js/custom.js')}}"></script>

  <!-- Page Specific JS File -->
  <script src="{{url('backend/assets/js/page/auth-register.js')}}"></script>
</body>
</html>
