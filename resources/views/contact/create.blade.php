@extends('layouts.app')

@section('content')<h1>Contactez-nous</h1>

@if (!session()->has('message'))
<form action="{{ route('contact.store') }}" method=POST>

@csrf
    <div class="form-group">
        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" 
         placeholder="Votre nom" value="{{ old('name')}}">

        @error('name')
           <div class="alert alert-danger">
           Ce Champ est obligatoire
           </div>
        @enderror  
    </div>
    <div class="form-group">
         <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
          placeholder="Votre email"  value="{{ old('email')}}">

          @error('email')
           <div class="alert alert-danger">
           Ce Champ est obligatoire
           </div>
        @enderror  
    </div>

    <div class="form-group">
         <textarea name="message" id="" cols="30" rows="10"  class="form-control @error('message') is-invalid @enderror" name="message"
         placeholder="Votre message"  value="{{ old('message')"></textarea>
         @error('message')
           <div class="alert alert-danger">
           Ce Champ est obligatoire
           </div>
        @enderror  
    </div>

    <button type="submit" class="btn btn-primary">Envoyer mon message</button>


</form>

@endif

@endsection