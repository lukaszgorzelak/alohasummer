<div class="modal" id="addTimePhrase">
    <i class="modal__close fa fa-times" aria-hidden="true"></i>
    <h1 class="modal__title mb-4">Dodaj zwrot</h1>
    <div class="form__message"></div>
   
    <form class="form"  @$errors action="{{ action('TimeController@store') }}" method="POST" @$enderrors id="addTimePhrase" data-form="valid">
        {{ csrf_field() }}
        
        <div class="form__phrase">
            <label for="phrase">Podaj zwrot</label>
            <textarea rows="5" cols="35" id="phrase" name="phrase" class="@error('phrase') is-invalid @enderror">{{ old('phrase') }}</textarea>
            @error('phrase')
                <div class="alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form__translation">
            <label for="translation">Podaj tłumaczenie</label>
            <textarea rows="5" cols="35" id="translation" name="translation" class="@error('translation') is-invalid @enderror">{{ old('translation') }}</textarea>
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