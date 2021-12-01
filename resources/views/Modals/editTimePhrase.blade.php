<div class="modal">
    <i class="modal__close fa fa-times" aria-hidden="true"></i>
    <h1 class="modal__title mb-4">Edytuj zwrot</h1>
    <div class="form__message"></div>

    <form class="form" action="{{ route('time.update', ['id' => $time->id ]) }}" method="POST" data-form="valid">
        {{ csrf_field() }}
        
        <div class="form__phrase">
            <label for="phrase">Podaj zwrot</label>
            <textarea rows="5" cols="35" id="phrase" name="phrase">{{ $time->phrase }}</textarea>
        </div>
        <div class="form__translation">
            <label for="translation">Podaj tłumaczenie</label>
            <textarea rows="5" cols="35" id="translation" name="translation">{{ $time->translation }}</textarea>
        </div>
        <div class="form__button mt">
            <button>Zatwierdź</button>
        </div>
    </form>
</div>