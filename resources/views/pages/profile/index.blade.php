@extends('layouts.app')

@push('js')
<script>

    $(document).ready(function() {
              @if($user->photo != NULL)
                    previewPersistedFile("{{asset('storage/photo-profile/'.$user->photo)}}", 'photo_preview');
              @endif

            @if($user->banner != NULL)
                    previewPersistedFile("{{asset('storage/photo-banner/'.$user->banner)}}", 'banner_preview');
              @endif
            });
    
      function previewFile(input, preview_id) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function(e) {
            $("#" + preview_id).attr('src', e.target.result);
            $("#" + preview_id).css('height', '300px');
            $("#" + preview_id).parent().parent().removeClass('d-none');
          }
          $("label[for='" + $(input).attr('id') + "']").text(input.files[0].name);
          reader.readAsDataURL(input.files[0]);
        }
      }
    
      function previewPersistedFile(url, preview_id) {
        $("#" + preview_id).attr('src', url);
        $("#" + preview_id).css('height', '300px');
        $("#" + preview_id).parent().parent().removeClass('d-none');
    
      }
    </script>
@endpush

@section('content')
<div class="container">
    <form action="{{ route('profile.update',$user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="media">
            <div class="custom-file">
                <label class="custom-file-label" for="photo">Seleccione su
                    Foto <b>(Se permiten JPG o PNG.
                        Tamaño máximo de 800kB)</b></label>
                <input type="file" id="photo" class="custom-file-input"
                    name="photo" onchange="previewFile(this, 'photo_preview')" accept="image/*">
            </div>
        </div>

        <div class="row mb-4 mt-4 d-none" id="photo_preview_wrapper">
            <div class="col"></div>
            <div class="col-auto">
                <img id="photo_preview" class="img-fluid rounded" />
            </div>
            <div class="col"></div>
        </div>


        <hr>


        <div class="media">
            <div class="custom-file">
                <label class="custom-file-label" for="banner">Seleccione su
                    Foto <b>(Se permiten JPG o PNG.
                        Tamaño máximo de 800kB)</b></label>
                <input type="file" id="banner" class="custom-file-input"
                    name="banner" onchange="previewFile(this, 'banner_preview')" accept="image/*">
            </div>
        </div>

        <div class="row mb-4 mt-4 d-none" id="banner_preview_wrapper">
            <div class="col"></div>
            <div class="col-auto">
                <img id="banner_preview" class="img-fluid rounded" />
            </div>
            <div class="col"></div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <div class="controls">
                        <h2 class="font-weight-bold">Datos Personales</h2>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <div class="controls">
                        <label class="required" for="">Nombre y Apellido</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" placeholder="Nombre" value="{{ $user->name }}">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <div class="controls">
                        <label class="required" for="email">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                            name="email" placeholder="Email" value="{{ $user->email }}">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class=" col-12 d-flex flex-sm-row flex-column justify-content-end">
            <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">GUARDAR</button>
        </div>
    </form>
</div>
@include('auth.passwords.change')

@endsection
