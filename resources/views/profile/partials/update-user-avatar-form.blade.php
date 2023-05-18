
<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
           User avatar
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
           update avatar
        </p>
    </header>







    <form method="POST" action="{{ route('profile.avatar') }}" enctype="multipart/form-data">
        @csrf
        @method('patch')


        @if (session('success'))
            <div style="color: yellowgreen; " class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>

        @endif


        <div class="row mb-3">
            <label style="color: white; "for="avatar" class=" col-md-4 col-form-label text-md-end">{{ __('Avatar') }}</label>

            <div class="col-md-6">


{{--                <img style="width:100px;height: 10vh; margin-top: 10px; margin-bottom:10px;border-radius: 49% " src="{{"storage/$user->avatar"}}" alt="not good image">--}}

{{--                <----------optional for image upload----------->--}}
{{--                <img  src="/avatars/{{ Auth::user()->avatar }}" style="width:80px;margin-top: 10px; margin-bottom:10px; border-radius: 50%;" alt="asdasd">--}}
                {{--                <----------Endoptional for image upload----------->--}}

                <input style="margin-bottom: 10px;"  id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" value="{{ old('avatar') }}"  autocomplete="avatar">



                @error('avatar')
                <span class="invalid-feedback" role="alert">
                                        <strong style="color: red;">{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>
        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

                </div>




        <div class="row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-dark">
                    {{ __('Upload Profile') }}
                </button>
            </div>
        </div>
    </form>
</section>

