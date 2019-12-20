@extends('layouts.lay')

@section('content')
  <div class="faq-background">
    <h4 class="faq">Frequently Asked Questions</h4>
    <ul class="ask">
      @forelse ($faqs as $faq)
      <li class="faq-li">
        <div class="faq-titulo">
          {{$faq->question}}
        </div>
        <div class="ans">
          {{$faq->answer}}
        </div>
        @csrf
        <input type="hidden" name="id" value="{{$faq->id}}">
        <div class="boton edit-faq">
          <a href="/deleteFaq"><button class="boton1" type="submit" name="button" value="delete">Delete</button></a>
        </div>
      </form>
      </li>
       @empty
         <div>There is nothing</div>
       @endforelse
    </ul>
    <div class="boton edit-faq">
      <a href="/addFaq"><button class="boton1" type="button" name="button">Add</button></a>
    </div>
  </div>
@endsection
