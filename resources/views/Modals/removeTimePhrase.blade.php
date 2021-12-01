<div class="modal modal--remove">
    <i class="modal__close fa fa-times" aria-hidden="true"></i>
    <h1 class="modal__title">Czy napewno chcesz usunąć zwrot?</h1>
    <form class="form" action="{{ route('time.delete', ['id' => $time->id ]) }}" method="POST">
        {{ csrf_field() }}
        
        <div class="form__button mt">
            <button>Usuń</button>
        </div>
    </form>
</div>