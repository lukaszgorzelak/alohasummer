<div class="modal" id="addRoadPhrase">
    <i class="modal__close fa fa-times" aria-hidden="true"></i>
    <h1 class="modal__title mb-4">Dodaj zwrot</h1>
    <div class="form__message"></div>
   
    <form class="form"  @$errors action="{{ action('StartController@store') }}" method="POST" @$enderrors id="addRoadForm" data-form="valid">
        {{ csrf_field() }}
        
        <div class="form__phrase">
            <label for="phrase">Podaj zwrot</label>
            <textarea rows="5" cols="35" id="phrase" name="phrase" class="@error('phrase') is-invalid @enderror" value="{{ old('phrase') }}"></textarea>
            @error('phrase')
                <div class="alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form__translation">
            <label for="translation">Podaj tłumaczenie</label>
            <textarea rows="5" cols="35" id="translation" name="translation" class="@error('translation') is-invalid @enderror" value="{{ old('translation') }}"></textarea>
            @error('translation')
                <div class="alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form__button mt">
            <button class="form__button--approve">Zatwierdź</button>
        </div>
    </form>
</div>