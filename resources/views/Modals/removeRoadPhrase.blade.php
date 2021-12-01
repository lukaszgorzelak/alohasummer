<div class="modal modal--remove">
    <i class="modal__close fa fa-times" aria-hidden="true"></i>
    <h1 class="modal__title">Czy napewno chcesz usunąć zwrot?</h1>
    <form class="form" action="{{ route('phrases.delete', ['id' => $phrase->id ]) }}" method="POST" id="">
        {{ csrf_field() }}
        
        <div class="form__button mt">
            <button>Usuń</button>
        </div>
    </form>
</div>